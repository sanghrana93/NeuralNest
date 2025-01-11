<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->helper('url');
        
        // Disable CodeIgniter's output compression
        $this->output->set_content_type('application/json');
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
    }

    /**
     * Get hierarchical menu list with submenus
     */
    public function getMenuList() {
        try {
            $menus = $this->menu_model->getAllMenusWithSubmenus();
            
            $response = [
                'status' => true,
                'message' => 'Menu list retrieved successfully',
                'data' => $menus
            ];
            
            // Use CodeIgniter's output class instead of direct echo
            $this->output
                ->set_status_header(200)
                ->set_output(json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            
        } catch (Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Error retrieving menu list',
                'error' => $e->getMessage()
            ];
            
            $this->output
                ->set_status_header(500)
                ->set_output(json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        }
    }

    /**
     * Get menu content by submenu ID
     */
    public function getMenuContent($submenuId) {
        try {
            if (!$submenuId || !is_numeric($submenuId)) {
                throw new Exception('Invalid submenu ID');
            }

            $content = $this->menu_model->getMenuContentBySubmenuId($submenuId);
            
            if (!$content) {
                $response = [
                    'status' => false,
                    'message' => 'Content not found for the given submenu ID'
                ];
                
                $this->output
                    ->set_status_header(404)
                    ->set_output(json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
                return;
            }

            $response = [
                'status' => true,
                'message' => 'Menu content retrieved successfully',
                'data' => $content
            ];
            
            $this->output
                ->set_status_header(200)
                ->set_output(json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
            
        } catch (Exception $e) {
            $response = [
                'status' => false,
                'message' => 'Error retrieving menu content',
                'error' => $e->getMessage()
            ];
            
            $this->output
                ->set_status_header(500)
                ->set_output(json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        }
    }
} 