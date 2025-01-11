<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {
    
    public function getAllMenusWithSubmenus() {
        // Get all main menus
        $this->db->select('id, name, status');
        $this->db->from('menus');
        $this->db->where('status', 1);
        $menus = $this->db->get()->result_array();
        
        // Get submenus for each menu
        foreach ($menus as &$menu) {
            $this->db->select('id, name, status');
            $this->db->from('submenus');
            $this->db->where('menu_id', $menu['id']);
            $this->db->where('status', 1);
            $menu['submenus'] = $this->db->get()->result_array();
        }
        
        return $menus;
    }
    
    public function getMenuContentBySubmenuId($submenu_id) {
        // Get menu content
        $this->db->select('mc.*, m.name as menu_name, sm.name as submenu_name');
        $this->db->from('menu_content mc');
        $this->db->join('menus m', 'm.id = mc.menu_id');
        $this->db->join('submenus sm', 'sm.id = mc.submenu_id');
        $this->db->where('mc.submenu_id', $submenu_id);
        $content = $this->db->get()->row_array();
        
        if (!$content) {
            return [
                'banner_title' => '',
                'banner_content' => ''
            ];
        }
        
        // Get cards for this content
        $this->db->select('*');
        $this->db->from('menu_cards');
        $this->db->where('menu_content_id', $content['id']);
        $this->db->order_by('row_index, position');
        $cards = $this->db->get()->result_array();
        
        // Add cards to content array
        $content['cards'] = [];
        foreach ($cards as $card) {
            if (!isset($content['cards'][$card['row_index']])) {
                $content['cards'][$card['row_index']] = [];
            }
            
            // Format card data
            $cardData = [
                'title' => $card['title'],
                'content_type' => $card['content_type'],
                'content' => $card['content'],
                'media_url' => $card['media_url']
            ];
            
            $content['cards'][$card['row_index']][] = $cardData;
        }
        
        return $content;
    }
    
    public function save_content($menu_id, $submenu_id, $banner_data, $cards) {
        $this->db->trans_start();
        
        // Save or update menu content
        $content_data = array(
            'menu_id' => $menu_id,
            'submenu_id' => $submenu_id,
            'banner_title' => $banner_data['title'],
            'banner_content' => $banner_data['content']
        );
        
        $existing = $this->db->get_where('menu_content', array(
            'menu_id' => $menu_id,
            'submenu_id' => $submenu_id
        ))->row();
        
        if ($existing) {
            $this->db->where('id', $existing->id);
            $this->db->update('menu_content', $content_data);
            $content_id = $existing->id;

            // Get existing cards to preserve media files
            $existing_cards = $this->db->get_where('menu_cards', array(
                'menu_content_id' => $content_id
            ))->result_array();

            // Create a lookup array for existing cards
            $existing_card_lookup = array();
            foreach ($existing_cards as $card) {
                $key = $card['row_index'] . '_' . $card['position'];
                $existing_card_lookup[$key] = $card;
            }

            // Delete existing cards but preserve the data
            $this->db->where('menu_content_id', $content_id);
            $this->db->delete('menu_cards');
        } else {
            $this->db->insert('menu_content', $content_data);
            $content_id = $this->db->insert_id();
            $existing_card_lookup = array();
        }
        
        // Create upload directories if they don't exist
        $upload_base = 'uploads/menu_content/' . $content_id;
        $images_path = $upload_base . '/images';
        $videos_path = $upload_base . '/videos';
        
        if (!file_exists($images_path)) mkdir($images_path, 0777, true);
        if (!file_exists($videos_path)) mkdir($videos_path, 0777, true);
        
        // Process each card
        foreach ($cards as $card) {
            $card_data = array(
                'menu_content_id' => $content_id,
                'row_index' => $card['row'],
                'position' => $card['position'],
                'title' => $card['title'],
                'content_type' => $card['content_type'],
                'content' => $card['content']
            );

            // Check if there's an existing card at this position
            $lookup_key = $card['row'] . '_' . $card['position'];
            $existing_card = isset($existing_card_lookup[$lookup_key]) ? $existing_card_lookup[$lookup_key] : null;

            // Handle media content
            $upload_field = "card_media_{$card['row']}_{$card['position']}";
            
            if (isset($_FILES[$upload_field]) && !empty($_FILES[$upload_field]['name'])) {
                // New file is being uploaded
                if ($card['content_type'] === 'image') {
                    $upload_path = $images_path;
                    $allowed_types = 'gif|jpg|jpeg|png|webp';
                } else {
                    $upload_path = $videos_path;
                    $allowed_types = 'mp4|webm|ogg';
                }
                
                $config = array(
                    'upload_path' => $upload_path,
                    'allowed_types' => $allowed_types,
                    'max_size' => 20480, // 20MB
                    'file_name' => uniqid($card['content_type'] . '_'),
                    'overwrite' => true
                );
                
                $this->load->library('upload');
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload($upload_field)) {
                    $upload_data = $this->upload->data();
                    $relative_path = 'uploads/menu_content/' . $content_id . '/' . 
                                   ($card['content_type'] === 'image' ? 'images/' : 'videos/') . 
                                   $upload_data['file_name'];
                    $card_data['media_url'] = $relative_path;

                    // Delete old file if exists
                    if ($existing_card && $existing_card['media_url']) {
                        $old_file = FCPATH . $existing_card['media_url'];
                        if (file_exists($old_file)) {
                            unlink($old_file);
                        }
                    }
                }
            } else if ($existing_card && $existing_card['media_url']) {
                // No new file uploaded, preserve existing media_url
                $card_data['media_url'] = $existing_card['media_url'];
            }
            
            $this->db->insert('menu_cards', $card_data);
        }
        
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
    
    public function getCardsBySubmenuId($submenu_id) {
        $this->db->select('
            mc.id as menu_content_id,
            cd.id,
            cd.row_index,
            cd.position,
            COALESCE(cd.title, "") as title,
            cd.content_type,
            COALESCE(cd.content, "") as content,
            COALESCE(cd.media_url, "") as media_url
        ');
        $this->db->from('menu_content mc');
        $this->db->join('menu_cards cd', 'cd.menu_content_id = mc.id');
        $this->db->where('mc.submenu_id', $submenu_id);
        $this->db->order_by('cd.row_index', 'ASC');
        $this->db->order_by('cd.position', 'ASC');
        
        $results = $this->db->get()->result_array();
        
        // Convert null values to empty strings
        foreach ($results as &$row) {
            foreach ($row as $key => $value) {
                if ($value === null) {
                    $row[$key] = '';
                }
            }
        }
        
        return $results;
    }
} 