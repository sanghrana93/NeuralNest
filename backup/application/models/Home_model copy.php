<?php
class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct(); // Load the base class constructor
    }

    // Fetch banners by status
    public function getBannersByStatus() {
        $this->db->where('id', 1);
        $query = $this->db->get('banner');
        return ($query->num_rows() > 0) ? $query->row() : false;
    }

    // Fetch services for top menu
    public function getServicesTopMenu() {
        $query = $this->db
            ->select('*')
            ->from('services')
            ->where('status', 1)
            ->where('main', 1)
            ->order_by('disp_ord', 'ASC')
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Fetch "About Us" pages for top menu
    public function getAboutTopMenu() {
        $query = $this->db
            ->select('*')
            ->from('custom_pages')
            ->where(['status' => 1, 'main' => 1, 'page_link' => 'who-we-are'])
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Fetch services for footer menu
    public function getServicesFooterMenu() {
        $query = $this->db
            ->select('*')
            ->from('services')
            ->where(['status' => 1, 'footer' => 1])
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Fetch all active services
    public function getServicesByStatus() {
        $query = $this->db
            ->select('*')
            ->from('services')
            ->where('status', 1)
            ->order_by('disp_ord', 'ASC')
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Fetch active team members
    public function getTeamByStatus() {
        $query = $this->db
            ->select('*')
            ->from('team')
            ->where('status', 1)
            ->order_by('disp_ord', 'ASC')
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Fetch active custom pages
    public function getAllPagesByStatus() {
        $query = $this->db
            ->select('*')
            ->from('custom_pages')
            ->where(['status' => 1, 'page_link' => 'who-we-are'])
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Fetch individual pages by status
    public function getAllIndiPagesByStatus() {
        $query = $this->db
            ->select('*')
            ->from('custom_pages')
            ->where(['status' => 1, 'page_link' => 'pages'])
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Fetch active testimonials
    public function getTestimonialsByStatus() {
        $query = $this->db
            ->select('*')
            ->from('testimonial')
            ->where('status', 1)
            ->order_by('disp_ord', 'ASC')
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Fetch active clients
    public function getClientsByStatus() {
        $query = $this->db
            ->select('*')
            ->from('client')
            ->where('status', 1)
            ->order_by('disp_ord', 'ASC')
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Fetch blogs with pagination
    public function getBlogByStatus($per_page, $offset) {
        $query = $this->db
            ->select('blog.*, category.category, DATE_FORMAT(blog.create_date, "%d %M %Y") as formatted_create_date', false)
            ->from('blog')
            ->join('category', 'blog.category_slug = category.slug', 'left')
            ->where('blog.is_published', 1)
            ->order_by('blog.create_date', 'DESC')
            ->limit($per_page, $offset)
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Search blogs by category with pagination
    public function getBlogSearchByCategory($slug, $per_page, $offset) {
        $query = $this->db
            ->select('blog.*, category.category, DATE_FORMAT(blog.create_date, "%d %M %Y") as formatted_create_date', false)
            ->from('blog')
            ->join('category', 'blog.category_slug = category.slug', 'left')
            ->where(['blog.is_published' => 1, 'blog.category_slug' => $slug])
            ->order_by('blog.create_date', 'DESC')
            ->limit($per_page, $offset)
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Search blogs by keyword with pagination
    public function getBlogSearchByString($searchString, $per_page, $offset) {
        $query = $this->db
            ->select('blog.*, category.category, DATE_FORMAT(blog.create_date, "%d %M %Y") as formatted_create_date', false)
            ->from('blog')
            ->join('category', 'blog.category_slug = category.slug', 'left')
            ->where('blog.is_published', 1)
            ->group_start()
                ->like('blog.blog_title', $searchString)
                ->or_like('blog.content', $searchString)
            ->group_end()
            ->order_by('blog.create_date', 'DESC')
            ->limit($per_page, $offset)
            ->get();

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Get latest posts for each category
    public function getLatestPostsByCategory($limit = 3) {
        $subQuery = $this->db->select('category_slug')
            ->distinct()
            ->from('blog')
            ->get_compiled_select();

        $query = $this->db
            ->select('blog.*, category.category')
            ->join('category', 'blog.category_slug = category.slug', 'left')
            ->where('blog.is_published', 1)
            ->where("blog.category_slug IN ($subQuery)", null, false)
            ->order_by('blog.create_date', 'DESC')
            ->limit($limit)
            ->get('blog');

        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    // Additional methods follow a similar structure...
}
?>
