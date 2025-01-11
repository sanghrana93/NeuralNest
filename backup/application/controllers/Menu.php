<?php

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MenuModel');
    }

    public function add()
    {
        // Set JSON header
        $this->output->set_content_type('application/json');
        
        try {
            $menuName = $this->input->post('menuName');
            $subMenuNames = $this->input->post('subMenuNames');
            
            if (empty($menuName)) {
                throw new Exception('Menu name is required');
            }
            
            // Your existing menu creation logic here
            $result = $this->MenuModel->createMenu($menuName, $subMenuNames);
            
            if ($result) {
                $response = [
                    'status' => 'success',
                    'message' => 'Menu created successfully'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to create menu'
                ];
            }
        } catch (Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        // Use CI's output class to send the response
        $this->output
            ->set_status_header(200)
            ->set_output(json_encode($response));
    }

    public function getSubmenus($menuId)
    {
        $this->output->set_content_type('application/json');
        
        try {
            if (!$menuId) {
                throw new Exception('Menu ID is required');
            }
            
            $submenus = $this->MenuModel->getSubmenusByMenuId($menuId);
            
            // Debug log
            log_message('debug', 'Submenus for menu ' . $menuId . ': ' . json_encode($submenus));
            
            $this->output->set_output(json_encode($submenus));
        } catch (Exception $e) {
            $this->output->set_output(json_encode([
                'error' => $e->getMessage()
            ]));
        }
    }
}
