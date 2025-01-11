<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
    }
    
    public function index() {
        $submenu_id = $this->input->get('id');
        $data['submenu_id'] = $submenu_id;
        $this->load->view('portfolio/HTML_Template/content', $data);
    }
} 