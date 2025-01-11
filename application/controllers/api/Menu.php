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
  
     public function getMenuContent($submenu_id) {
        if (!$this->input->is_ajax_request()) {
            show_404();
        }

        try {
            $this->load->model('menu_model');
            
            // Get banner content
            $menuContent = $this->menu_model->getMenuContentBySubmenuId($submenu_id);
            
            // Get cards content
            $cards = $this->menu_model->getCardsBySubmenuId($submenu_id);
            
            // Organize cards by rows
            $organizedCards = [];
            if ($cards) {
                foreach ($cards as $card) {
                    $rowIndex = (string)$card['row_index']; // Convert to string to ensure consistent array keys
                    if (!isset($organizedCards[$rowIndex])) {
                        $organizedCards[$rowIndex] = [];
                    }
                    $organizedCards[$rowIndex][(string)$card['position']] = $card;
                }
            }
            
            $response = [
                'status' => true,
                'data' => [
                    'banner' => $menuContent,
                    'cards' => $organizedCards
                ]
            ];

            // Set proper content type header
            $this->output->set_content_type('application/json');
            // Send response
            $this->output->set_output(json_encode($response));
            
        } catch (Exception $e) {
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode([
                'status' => false,
                'message' => $e->getMessage()
            ]));
        }
    }
} 