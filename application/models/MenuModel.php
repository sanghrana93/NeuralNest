<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get all menus with their submenus
     */
    public function getAllMenus() {
        return $this->db->order_by('order_position, id')
                        ->get('menus')
                        ->result();
    }

    /**
     * Add new menu
     */
    public function addMenu($menuData) {
        try {
            $this->db->insert('menus', $menuData);
            return $this->db->insert_id();
        } catch (Exception $e) {
            log_message('error', 'Error adding menu: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Add submenus for a menu
     */
    public function addSubmenus($menuId, $subMenuNames) {
        try {
            foreach ($subMenuNames as $name) {
                if (!empty(trim($name))) {
                    $submenuData = [
                        'menu_id' => $menuId,
                        'name' => trim($name),
                        'created_at' => date('Y-m-d H:i:s')
                    ];
                    $this->db->insert('submenus', $submenuData);
                }
            }
            return true;
        } catch (Exception $e) {
            log_message('error', 'Error adding submenus: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Get submenus by menu ID
     */
    public function getSubmenusByMenuId($menuId)
    {
        $this->db->select('*');
        $this->db->from('submenus');
        $this->db->where('menu_id', $menuId);
        $this->db->order_by('order_position, id');
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return [];
    }

    /**
     * Update menu and its submenus
     */
    public function updateMenu($menuId, $menuName, $subMenuNames) {
        $this->db->trans_start();

        // Update menu name
        $this->db->where('id', $menuId)
                 ->update('menus', ['name' => $menuName]);

        // Delete existing submenus
        $this->db->where('menu_id', $menuId)
                 ->delete('submenus');

        // Add new submenus
        $this->addSubmenus($menuId, $subMenuNames);

        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    /**
     * Delete menu and its submenus
     */
    public function deleteMenu($menuId) {
        $this->db->trans_start();

        // Delete submenus first (foreign key constraint)
        $this->db->where('menu_id', $menuId)
                 ->delete('submenus');

        // Delete menu
        $this->db->where('id', $menuId)
                 ->delete('menus');

        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    public function menuExists($menuName)
    {
        $this->db->where('name', $menuName);
        $query = $this->db->get('menus');  // Assuming your table name is 'menus'
        return $query->num_rows() > 0;
    }

    public function createMenu($menuName, $subMenuNames)
    {
        $this->db->trans_start();
        
        try {
            // Insert menu
            $menuData = [
                'name' => $menuName,
                'created_at' => date('Y-m-d H:i:s')
            ];
            
            $this->db->insert('menus', $menuData);
            $menuId = $this->db->insert_id();
            
            // Log menu creation
            log_message('debug', 'Created menu with ID: ' . $menuId);
            
            // Insert submenus
            if (is_array($subMenuNames)) {
                foreach ($subMenuNames as $name) {
                    if (!empty(trim($name))) {
                        $submenuData = [
                            'menu_id' => $menuId,
                            'name' => trim($name),
                            'created_at' => date('Y-m-d H:i:s')
                        ];
                        $this->db->insert('submenus', $submenuData);
                        
                        // Log submenu creation
                        log_message('debug', 'Created submenu: ' . json_encode($submenuData));
                    }
                }
            }
            
            $this->db->trans_complete();
            return $this->db->trans_status();
        } catch (Exception $e) {
            log_message('error', 'Error creating menu: ' . $e->getMessage());
            $this->db->trans_rollback();
            return false;
        }
    }
} 