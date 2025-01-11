<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function insertBlog($data) {
        $this->db->insert('blog', $data);
    }

    public function getBlogs() {
        return $this->db->get('blog')->result();
    }
}
