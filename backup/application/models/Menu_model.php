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
    
    public function getMenuContentBySubmenuId($submenuId) {
        $this->db->select('
            mc.banner_title, mc.banner_content,
            mc.card1_title, mc.card1_content,
            mc.card2_title, mc.card2_content,
            mc.card3_title, mc.card3_content,
            mc.Service_title,
            mc.Service_card_title_1, mc.Service_card_content_1,
            mc.Service_card_title_2, mc.Service_card_content_2,
            mc.S1_title, mc.S1_content,
            mc.S2_title, mc.S2_content,
            mc.S3_title, mc.S3_content,
            mc.workpress_title, mc.workpress_content,
            mc.solution_title, mc.solution_content,
            mc.Inquary_Title, mc.Inquary_content
        ');
        $this->db->from('menu_contents mc');
        $this->db->where('mc.submenu_id', $submenuId);
        
        return $this->db->get()->row_array();
    }
} 