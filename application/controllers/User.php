<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->isLoggedIn();  
        $this->load->model('Patient_model');
        $this->load->library('email'); // Load the Email library
        $this->load->helper('url'); // Load URL helper for base_url() function
        $this->load->model('Blog_model');
        $this->load->helper(['form', 'url']);
        $this->load->library('upload');

    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {   
        $data['totalDemo'] = $this->user_model->getTotalDemos();
        //$data['newAppointments'] = $this->dashboard_model->getNewAppointments();
       // $data['totalStaff'] = $this->dashboard_model->getTotalStaff();
        //$data['reopenedIssues'] = $this->dashboard_model->getReopenedIssues();
        $this->global['pageTitle'] = 'Neural Nest, LLC : Dashboard';
        
        $this->loadViews("dashboard", $this->global, $data , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function userListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);
        
			$returns = $this->paginationCompress ( "userListing/", $count, 10 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Neural Nest, LLC : User Listing';
            
            $this->loadViews("users", $this->global, $data, NULL);
        }
    }


    public function userListingDemo()
{
    // Set headers for JSON response
    // $this->output
    //      ->set_content_type('application/json')
    //      ->set_status_header(200);

    // // Define the static JSON data
    // $staticData = [
    //     "status" => "success",
    //     "message" => "Here is the static user listing data.",
    //     "data" => [
    //         [
    //             "id" => 1,
    //             "name" => "John Doe",
    //             "email" => "johndoe@example.com",
    //             "role" => "Admin"
    //         ],
    //         [
    //             "id" => 2,
    //             "name" => "Jane Smith",
    //             "email" => "janesmith@example.com",
    //             "role" => "Editor"
    //         ],
    //         [
    //             "id" => 3,
    //             "name" => "Michael Brown",
    //             "email" => "michaelbrown@example.com",
    //             "role" => "Subscriber"
    //         ]
    //     ]
    // ];

    // // Output the static JSON
    // $this->output->set_output(json_encode($staticData));

    // $this->loadViews("users", $this->global, $data, NULL);

    if($this->isAdmin() == TRUE)
    {
        $this->loadThis();
    }
    else
    {
        $this->load->model('user_model');
        $data['roles'] = $this->user_model->getUserRoles();
        
        $this->global['pageTitle'] = 'Neural Nest, LLC : Add New User';

        $this->loadViews("userListingDemo", $this->global, $data, NULL);
    }
}



    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'Neural Nest, LLC : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
{

    // Check if the user is an admin
    if ($this->isAdmin() == TRUE)
    {
        $this->loadThis(); // Redirects if the user is not an admin
    }
    else
    {
        $this->load->library('form_validation');

        // Validation rules for the user creation form
        $this->form_validation->set_rules('fname', 'Full Name', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|max_length[20]');
        $this->form_validation->set_rules('role', 'Role', 'trim|required|numeric');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]|max_length[15]');

        if ($this->form_validation->run() == FALSE)
        {
            // If validation fails, reload the form
            $this->addNew();
        }
        else
        {
            // Clean and sanitize inputs
            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            $password = $this->input->post('password');
            $roleId = $this->input->post('role');
            $mobile = $this->security->xss_clean($this->input->post('mobile'));

            // Prepare user info array for insertion
            $userInfo = array(
                'email' => $email,
                'password' => getHashedPassword($password), // Password hashed for security
                'roleId' => $roleId,
                'name' => $name,
                'mobile' => $mobile,
                'createdBy' => $this->vendorId, // Assuming $this->vendorId is the creator's ID
                'createdDtm' => date('Y-m-d H:i:s') // Current timestamp
            );

            // Load the user model and insert new user
            $this->load->model('user_model');
            $result = $this->user_model->addNewUser($userInfo);

            if ($result > 0)
            {
                // Success feedback
                $this->session->set_flashdata('success', 'New User created successfully');
            }
            else
            {
                // Failure feedback
                $this->session->set_flashdata('error', 'User creation failed');
            }

            // Redirect to add new user form
            redirect('addNew');
        }
    }
}

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
        if($this->isAdmin() == TRUE || $userId == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($userId == null)
            {
                redirect('userListing');
            }
            
            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);
            
            $this->global['pageTitle'] = 'Neural Nest, LLC : Edit User';
            
            $this->loadViews("editOld", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('userId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userListing');
            }
        }
    }

    
    


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId, $userInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    /**
     * Page not found : error 404
     */
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'Neural Nest, LLC : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    /**
     * This function used to show login history
     * @param number $userId : This is user id
     */
    function loginHistoy($userId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $userId = ($userId == NULL ? 0 : $userId);

            $searchText = $this->input->post('searchText');
            $fromDate = $this->input->post('fromDate');
            $toDate = $this->input->post('toDate');

            $data["userInfo"] = $this->user_model->getUserInfoById($userId);

            $data['searchText'] = $searchText;
            $data['fromDate'] = $fromDate;
            $data['toDate'] = $toDate;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress ( "login-history/".$userId."/", $count, 10, 3);

            $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Neural Nest, LLC : User Login History';
            
            $this->loadViews("loginHistory", $this->global, $data, NULL);
        }        
    }

    /**
     * This function is used to show users profile
     */
    function profile($active = "details")
    {
        $data["userInfo"] = $this->user_model->getUserInfoWithRole($this->vendorId);
        $data["active"] = $active;
        
        $this->global['pageTitle'] = $active == "details" ? 'Neural Nest, LLC : My Profile' : 'Neural Nest, LLC : Change Password';
        $this->loadViews("profile", $this->global, $data, NULL);
    }

    /**
     * This function is used to update the user details
     * @param text $active : This is flag to set the active tab
     */
    function profileUpdate($active = "details")
    {
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
        $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]|callback_emailExists');        
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
            $mobile = $this->security->xss_clean($this->input->post('mobile'));
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            
            $userInfo = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->editUser($userInfo, $this->vendorId);
            
            if($result == true)
            {
                $this->session->set_userdata('name', $name);
                $this->session->set_flashdata('success', 'Profile updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Profile updation failed');
            }

            redirect('profile/'.$active);
        }
    }

    /**
     * This function is used to change the password of the user
     * @param text $active : This is flag to set the active tab
     */
    function changePassword($active = "changepass")
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->profile($active);
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password is not correct');
                redirect('profile/'.$active);
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
                redirect('profile/'.$active);
            }
        }
    }

    /**
     * This function is used to check whether email already exist or not
     * @param {string} $email : This is users email
     */
    function emailExists($email)
    {
        $userId = $this->vendorId;
        $return = false;

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ $return = true; }
        else {
            $this->form_validation->set_message('emailExists', 'The {field} already taken');
            $return = false;
        }

        return $return;
    }
    
    public function demoList()
    {   $this->load->library('pagination');
        
        $this->db->select('id, client_name, email, company_name, demo_date, demo_time');
        $this->db->from('demo_requests'); // Replace with your table name
        $this->db->order_by('demo_date', 'DESC'); // Sort by date
        $query = $this->db->get();
       // return $query->result();
        $data['demoRecords'] = $query->result();
        $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';

        $this->loadViews("demoList", $this->global, $data, NULL);

    }
    public function userAnalysis()
    {
        // Load the database library (ensure it is autoloaded or loaded manually)
        $this->load->database();

        // Fetch data from the database table 'user_analysis'
        $this->db->select('id, b_title, b_content, Serv_title, Serv_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, target_title, target_content, workprocess_title, workprocess_content'); // Selecting id and title
        $this->db->from('user_analysis'); // Table name
        $query = $this->db->get(); // Execute the query

        // Store the results in an array
        $data['userAnalysisRecords'] = $query->result();

        // Page title
        $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';

        // Load the view with fetched data
        $this->loadViews("userAnalysis", $this->global, $data, NULL);
    }

    public function userAnalysisEdit($id){
        // Load the database library (ensure it is autoloaded or loaded manually)
        $this->load->database();

        // Fetch data from the database table 'user_analysis'
        $this->db->select('id, b_title, b_content, Serv_title, Serv_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, target_title, target_content, workprocess_title, workprocess_content'); // Selecting id and title
        $this->db->from('user_analysis'); // Table name
        $query = $this->db->get(); // Execute the query

        // Store the results in an array
        $data['userAnalysisRecords'] = $query->result();
        
        // Page title
        $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';
        

        // print_r( $data['userAnalysisRecords'][0]->id);die;
        $this->load->view("userAnalysisEdit", $data);
    }


    public function updateUserAnalysis($id) {
        // Load the database library
        $this->load->database();
    
        // Fetch the input values from the form
        $data = [
            'b_title' => $this->input->post('b_title'),
            'b_content' => $this->input->post('b_content'),
            'Serv_title' => $this->input->post('Serv_title'),
            'Serv_content' => $this->input->post('Serv_content'),
            's1_title' => $this->input->post('s1_title'),
            's1_content' => $this->input->post('s1_content'),
            's2_title' => $this->input->post('s2_title'),
            's2_content' => $this->input->post('s2_content'),
            's3_title' => $this->input->post('s3_title'),
            's3_content' => $this->input->post('s3_content'),
            'target_title' => $this->input->post('target_title'),
            'target_content' => $this->input->post('target_content'),
            'workprocess_title' => $this->input->post('workprocess_title'),
            'workprocess_content' => $this->input->post('workprocess_content'),
        ];
    
        // Update the record in the database
        $this->db->where('id', $id);
        $this->db->update('user_analysis', $data);
    
        // Redirect or show success message
        redirect('/userAnalysis');
    }

    /********** Menu List *********** */
    public function menuList()
    {
        $this->load->database();
        
        // Get all active menus with their submenus
        $this->db->select('m.*, COUNT(s.id) as submenu_count')
                 ->from('menus m')
                 ->join('submenus s', 'm.id = s.menu_id', 'left')
                 ->where('m.status', 'active')
                 ->group_by('m.id')
                 ->order_by('m.order_position', 'ASC');
        
        $data['menus'] = $this->db->get()->result();
        
        $this->global['pageTitle'] = 'Menu Management';
        $this->loadViews("menuList", $this->global, $data, NULL);
    }

    public function addMenu() {
        // Validate input
        $this->form_validation->set_rules('menuName', 'Menu Name', 'required|trim');
        $this->form_validation->set_rules('subMenuNames[]', 'Submenu Name', 'required|trim');

        if ($this->form_validation->run() === FALSE) {
            $response = [
                'status' => 'error',
                'message' => strip_tags(validation_errors())
            ];
        } else {
            try {
                // Check if menu already exists
                $menuName = $this->input->post('menuName');
                
                // Modify the duplicate check to be case-insensitive
                $this->db->where('LOWER(name)', strtolower($menuName));
                $query = $this->db->get('menus');
                
                if ($query->num_rows() > 0) {
                    $response = [
                        'status' => 'error',
                        'message' => 'A menu with this name already exists. Please choose a different name.'
                    ];
                } else {
                    // Prepare menu data
                    $menuData = [
                        'name' => $menuName,
                        'created_at' => date('Y-m-d H:i:s')
                    ];

                    // Start transaction
                    $this->db->trans_start();

                    // Insert menu
                    $this->db->insert('menus', $menuData);
                    $menuId = $this->db->insert_id();
                    
                    if ($menuId) {
                        // Insert submenus
                        $subMenuNames = $this->input->post('subMenuNames');
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

                        $this->db->trans_complete();

                        if ($this->db->trans_status() === FALSE) {
                            throw new Exception('Failed to add menu and submenus');
                        }

                        $response = [
                            'status' => 'success',
                            'message' => 'Menu added successfully',
                            'redirect' => base_url('menuList')  // Add redirect URL
                        ];
                    } else {
                        throw new Exception('Failed to add menu');
                    }
                }
            } catch (Exception $e) {
                $this->db->trans_rollback();
                $response = [
                    'status' => 'error',
                    'message' => $e->getMessage()
                ];
            }
        }
        
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    public function updateMenu() {
        $menuId = $this->input->post('menuId');
        $menuName = $this->input->post('menuName');
        $subMenuNames = $this->input->post('subMenuNames');

        $this->form_validation->set_rules('menuName', 'Menu Name', 'required|trim');

        if ($this->form_validation->run() === FALSE) {
            $response = [
                'status' => 'error',
                'message' => strip_tags(validation_errors())
            ];
        } else {
            $this->load->model('MenuModel');
            $success = $this->MenuModel->updateMenu($menuId, $menuName, $subMenuNames);
            
            if ($success) {
                $response = [
                    'status' => 'success',
                    'message' => 'Menu updated successfully'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to update menu'
                ];
            }
        }
        
        echo json_encode($response);
    }

    public function deleteMenu($menuId) {
        $this->load->model('MenuModel');
        if ($this->MenuModel->deleteMenu($menuId)) {
            $response = [
                'status' => 'success',
                'message' => 'Menu deleted successfully'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Failed to delete menu'
            ];
        }
        
        echo json_encode($response);
    }

    public function getSubmenus($menuId) {
        try {
            // Get submenus for the menu
            $this->db->select('*');
            $this->db->from('submenus');
            $this->db->where('menu_id', $menuId);
            $this->db->order_by('order_position, id');
            $query = $this->db->get();
            
            $submenus = $query->num_rows() > 0 ? $query->result() : [];
            
            header('Content-Type: application/json');
            echo json_encode($submenus);
        } catch (Exception $e) {
            header('Content-Type: application/json');
            echo json_encode([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function artificialIntelligence()
{

   $this->load->database();
   // // Fetch data from the database table 'artificial_intelligence'
   $this->db->select('id, banner_title, banner_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, Services_title, Service_card_title_1, Service_card_content_1, Service_card_title_2, Service_card_content_2, S1_title, S1_content, S2_title, S2_content, S3_title, S3_content, workpress_title, workpress_content, solution_title, solution_content, Inquary_Title, Inquary_content'); // Corrected query
  
   // $this->db->select('id, banner_title, banner_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, Services_title, Service_card_title_1, Service_card_content_1, Service_card_title_2, Service_card_content_2, S1_title, S1_content, S2_title, S2_content, S3_title, S3_content, workpress_title, workpress_content, solution_title, solution_content, Inquary_Title, Inquary_content'); // Corrected query
   $this->db->from('artificial_intelligence'); // Table name

   $query = $this->db->get(); // Execute the query
   $data['artificialIntelligenceRecords'] = $query->result();
   // $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';
   // $this->load->view("artificialIntelligence", $data);

    // Load the view with fetched data
    $this->loadViews("artificialIntelligence", $this->global, $data, NULL);
}

public function artificialIntelligenceEdit($id)
{
     // Load the database library (ensure it is autoloaded or loaded manually)
     $this->load->database();

     // Fetch data from the database table 'user_analysis'
     $this->db->select('id, banner_title, banner_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, Services_title, Service_card_title_1, Service_card_content_1, Service_card_title_2, Service_card_content_2, S1_title, S1_content, S2_title, S2_content, S3_title, S3_content, workpress_title, workpress_content, solution_title, solution_content, Inquary_Title, Inquary_content'); // Corrected query
    
     $this->db->from('artificial_intelligence'); // Table name

     $query = $this->db->get(); // Execute the query
     $data['artificialIntelligenceRecords'] = $query->result();

    $this->load->view("artificialIntelligenceEdit", $data); // Load edit view
}

public function updateArtificialIntelligence($id)
{
    $this->load->database();

    $data = [
        'banner_title' => $this->input->post('banner_title'),
        'banner_content' => $this->input->post('banner_content'),
        'card1_title' => $this->input->post('card1_title'),
        'card1_content' => $this->input->post('card1_content'),
        'card2_title' => $this->input->post('card2_title'),
        'card2_content' => $this->input->post('card2_content'),
        'card3_title' => $this->input->post('card3_title'),
        'card3_content' => $this->input->post('card3_content'),
        'Service_title' => $this->input->post('Services_title'),
        'Service_card_title_1' => $this->input->post('Service_card_title_1'),
        'Service_card_content_1' => $this->input->post('Service_card_content_1'),
        'Service_card_title_2' => $this->input->post('Service_card_title_2'),
        'Service_card_content_2' => $this->input->post('Service_card_content_2'),
        'S1_title' => $this->input->post('S1_title'),
        'S1_content' => $this->input->post('S1_content'),
        'S2_title' => $this->input->post('S2_title'),
        'S2_content' => $this->input->post('S2_content'),
        'S3_title' => $this->input->post('S3_title'),
        'S3_content' => $this->input->post('S3_content'),
        'workpress_title' => $this->input->post('workpress_title'),
        'workpress_content' => $this->input->post('workpress_content'),
        'solution_title' => $this->input->post('solution_title'),
        'solution_content' => $this->input->post('solution_content'),
        'Inquary_Title' => $this->input->post('Inquary_Title'),
        'Inquary_content' => $this->input->post('Inquary_content'),
    ];

    // Update record by ID
    $this->db->where('id', $id);
    // print_r($data);die;
    $this->db->update('artificial_intelligence', $data);

    // Redirect to listing page
    redirect('/artificialIntelligence');

}

public function dataScience()
{

   $this->load->database();
   // // Fetch data from the database table 'artificial_intelligence'
   $this->db->select('id, banner_title, banner_content, services_title, services_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, s4_title, s4_content, conent_title, content_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, workprocess_title, workprocess_content');  // Corrected query
   $this->db->from('data_science'); // Table name

   $query = $this->db->get(); // Execute the query
   $data['dataScienceRecords'] = $query->result();

   $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';
   // $this->load->view("artificialIntelligence", $data);

    // Load the view with fetched data
    $this->loadViews("dataScience", $this->global, $data, NULL);
}

public function dataScienceEdit($id)
{
     // Load the database library (ensure it is autoloaded or loaded manually)
     $this->load->database();

     // Fetch data from the database table 'user_analysis'
     $this->db->select('id, banner_title, banner_content, services_title, services_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, s4_title, s4_content, conent_title, content_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, workprocess_title, workprocess_content');  // Corrected query
    
     $this->db->from('data_science'); // Table name

     $query = $this->db->get(); // Execute the query
     $data['dataScienceRecords'] = $query->result();

    $this->load->view("dataScienceEdit", $data); // Load edit view
}

public function updateDataScience($id)
{
    $this->load->database();

    $data = [
        'banner_title' => $this->input->post('banner_title'),
        'banner_content' => $this->input->post('banner_content'),
        'services_title' => $this->input->post('services_title'),
        'services_content' => $this->input->post('services_content'),
        's1_title' => $this->input->post('s1_title'),
        's1_content' => $this->input->post('s1_content'),
        's2_title' => $this->input->post('s2_title'),
        's2_content' => $this->input->post('s2_content'),
        's3_title' => $this->input->post('s3_title'),
        's3_content' => $this->input->post('s3_content'),
        's4_title' => $this->input->post('s4_title'),
        's4_content' => $this->input->post('s4_content'),
        'conent_title' => $this->input->post('conent_title'),
        'content_content' => $this->input->post('content_content'),
        'card1_title' => $this->input->post('card1_title'),
        'card1_content' => $this->input->post('card1_content'),
        'card2_title' => $this->input->post('card2_title'),
        'card2_content' => $this->input->post('card2_content'),
        'card3_title' => $this->input->post('card3_title'),
        'card3_content' => $this->input->post('card3_content'),
        'workprocess_title' => $this->input->post('workprocess_title'),
        'workprocess_content' => $this->input->post('workprocess_content'),
    ];
    
    // Update record by ID
    $this->db->where('id', $id);
    // print_r($data);die;
    $this->db->update('data_science', $data);

    // Redirect to listing page
    redirect('/dataScience');

}

public function machineLearning()
{

   $this->load->database();
   // // Fetch data from the database table 'artificial_intelligence'
//    $this->db->select('id, banner_title, banner_content, services_title, services_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, s4_title, s4_content, conent_title, content_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, workprocess_title, workprocess_content');  // Corrected query
   $this->db->select('id, banner_title, banner_content, services_title, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, s4_title, s4_content, solution_title, solution_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, approach_title, approach_card_title_1, approach_card_title_2, approach_card_title_3, workingskills_title, workingskills_content, progress_title_1, progress_content_1, progress_title_2, progress_content_2, progress_title_3, progress_content_3');  // Corrected query
   $this->db->from('machine_learning'); // Table name

   $query = $this->db->get(); // Execute the query
   $data['machineLearningRecords'] = $query->result();

   $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';
   // $this->load->view("artificialIntelligence", $data);

    // Load the view with fetched data
    $this->loadViews("machineLearning", $this->global, $data, NULL);
}

public function machineLearningEdit($id)
{
     // Load the database library (ensure it is autoloaded or loaded manually)
     $this->load->database();

     // Fetch data from the database table 'user_analysis'
     $this->db->select('id, banner_title, banner_content, services_title, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, s4_title, s4_content, solution_title, solution_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, approach_title, approach_card_title_1, approach_card_title_2, approach_card_title_3, workingskills_title, workingskills_content, progress_title_1, progress_content_1, progress_title_2, progress_content_2, progress_title_3, progress_content_3');  // Corrected query
     $this->db->from('machine_learning'); // Table name

     $query = $this->db->get(); // Execute the query
     $data['machineLearningRecords'] = $query->result();

    $this->load->view("machineLearningEdit", $data); // Load edit view
}

public function updateMachineLearning($id)
{
    $this->load->database();

    $data = [
        'banner_title' => $this->input->post('banner_title'),
        'banner_content' => $this->input->post('banner_content'),
        'services_title' => $this->input->post('services_title'),
        's1_title' => $this->input->post('s1_title'),
        's1_content' => $this->input->post('s1_content'),
        's2_title' => $this->input->post('s2_title'),
        's2_content' => $this->input->post('s2_content'),
        's3_title' => $this->input->post('s3_title'),
        's3_content' => $this->input->post('s3_content'),
        's4_title' => $this->input->post('s4_title'),
        's4_content' => $this->input->post('s4_content'),
        'solution_title' => $this->input->post('solution_title'),
        'solution_content' => $this->input->post('solution_content'),
        'approach_title' => $this->input->post('approach_title'),
        'approach_card_title_1' => $this->input->post('approach_card_title_1'),
        'approach_card_title_2' => $this->input->post('approach_card_title_2'),
        'approach_card_title_3' => $this->input->post('approach_card_title_3'),
        'workingskills_title' => $this->input->post('workingskills_title'),
        'workingskills_content' => $this->input->post('workingskills_content'),
        'progress_title_1' => $this->input->post('progress_title_1'),
        'progress_content_1' => $this->input->post('progress_content_1'),
        'progress_title_2' => $this->input->post('progress_title_2'),
        'progress_content_2' => $this->input->post('progress_content_2'),
        'progress_title_3' => $this->input->post('progress_title_3'),
        'progress_content_3' => $this->input->post('progress_content_3')
    ];
    
    
    // Update record by ID
    $this->db->where('id', $id);
    // print_r($data);die;
    $this->db->update('machine_learning', $data);

    // Redirect to listing page
    redirect('/machineLearning');

}

// What we serve
public function mlAiIntegration()
{

    $this->load->database(); // Load the database

    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, overview_title, overview_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('ml_ai_integration'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['mlAiIntegrationRecords'] = $query->result(); // Store query result in data array
    
    $this->global['pageTitle'] = 'Neural Nest, LLC : ML & AI Integration'; // Set the page title
    
    $this->loadViews("mlAiIntegration", $this->global, $data, NULL); // Load the view with fetched data
    
}

public function mlAiIntegrationEdit($id)
{
    $this->load->database(); // Load the database

    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, overview_title, overview_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('ml_ai_integration'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['mlAiIntegrationRecords'] = $query->result(); // Store query result in data array

    // Load the edit view with the fetched data
    $this->load->view("mlAiIntegrationEdit", $data);

}

public function updateMlAiIntegration($id)
{
    $this->load->database();

    // Prepare data to update
    $data = [
        'banner_title' => $this->input->post('banner_title'),
        'banner_content' => $this->input->post('banner_content'),
        'b_sub_title' => $this->input->post('b_sub_title'),
        'b_sub_content' => $this->input->post('b_sub_content'),
        'overview_title' => $this->input->post('overview_title'),
        'overview_content' => $this->input->post('overview_content'),
        'card1_title' => $this->input->post('card1_title'),
        'card1_content' => $this->input->post('card1_content'),
        'card2_title' => $this->input->post('card2_title'),
        'card2_content' => $this->input->post('card2_content'),
        'card3_title' => $this->input->post('card3_title'),
        'card3_content' => $this->input->post('card3_content'),
        's1_title' => $this->input->post('s1_title'),
        's1_content' => $this->input->post('s1_content'),
        's2_title' => $this->input->post('s2_title'),
        's2_content' => $this->input->post('s2_content'),
        's3_title' => $this->input->post('s3_title'),
        's3_content' => $this->input->post('s3_content'),
        'sub_heading_title' => $this->input->post('sub_heading_title'),
        'workprocess_title' => $this->input->post('workprocess_title'),
        'workprocess_content' => $this->input->post('workprocess_content'),
        'Inquary_Title' => $this->input->post('Inquary_Title')
    ];

    // Update record by ID
    $this->db->where('id', $id);
    $this->db->update('ml_ai_integration', $data);

    // Redirect to listing page
    redirect('/mlAiIntegration');
}

public function dataArchitecture()
{

    $this->load->database(); // Load the database

    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('data_architecture'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['dataArchitectureRecords'] = $query->result(); // Store query result in data array
    
    $this->global['pageTitle'] = 'Neural Nest, LLC : Data Architecture'; // Set the page title
    
    $this->loadViews("dataArchitecture", $this->global, $data, NULL); // Load the view with fetched data
    
}

public function dataArchitectureEdit($id)
{
    $this->load->database(); // Load the database
    
    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('data_architecture'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['dataArchitectureRecords'] = $query->result(); // Store query result in data array

    // Load the edit view with the fetched data
    $this->load->view("dataArchitectureEdit", $data);

}

public function updateDataArchitecture($id)
{
    $this->load->database();

    // Prepare data to update based on the data_architecture table structure
    $data = [
        'banner_title' => $this->input->post('banner_title'),
        'banner_content' => $this->input->post('banner_content'),
        'b_sub_title' => $this->input->post('b_sub_title'),
        'b_sub_content' => $this->input->post('b_sub_content'),
        'card1_title' => $this->input->post('card1_title'),
        'card1_content' => $this->input->post('card1_content'),
        'card2_title' => $this->input->post('card2_title'),
        'card2_content' => $this->input->post('card2_content'),
        'card3_title' => $this->input->post('card3_title'),
        'card3_content' => $this->input->post('card3_content'),
        's1_title' => $this->input->post('s1_title'),
        's1_content' => $this->input->post('s1_content'),
        's2_title' => $this->input->post('s2_title'),
        's2_content' => $this->input->post('s2_content'),
        's3_title' => $this->input->post('s3_title'),
        's3_content' => $this->input->post('s3_content'),
        'sub_heading_title' => $this->input->post('sub_heading_title'),
        'workprocess_title' => $this->input->post('workprocess_title'),
        'workprocess_content' => $this->input->post('workprocess_content'),
        'Inquary_Title' => $this->input->post('Inquary_Title')
    ];

    // Update record by ID
    $this->db->where('id', $id);
    $this->db->update('data_architecture', $data);
    
    // Redirect to listing page
    redirect('/dataArchitecture');
}

public function businessAnalytics()
{

    $this->load->database(); // Load the database

    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('business_analytics'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['businessAnalyticsRecords'] = $query->result(); // Store query result in data array
    
    $this->global['pageTitle'] = 'Neural Nest, LLC : Data Architecture'; // Set the page title
    
    $this->loadViews("businessAnalytics", $this->global, $data, NULL); // Load the view with fetched data
    
}

public function businessAnalyticsEdit($id)
{
    $this->load->database(); // Load the database
    
    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('business_analytics'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['businessAnalyticsRecords'] = $query->result(); // Store query result in data array

    // Load the edit view with the fetched data
    $this->load->view("businessAnalyticsEdit", $data);

}

public function updateBusinessAnalytics($id)
{
    $this->load->database();

    // Prepare data to update based on the data_architecture table structure
    $data = [
        'banner_title' => $this->input->post('banner_title'),
        'banner_content' => $this->input->post('banner_content'),
        'b_sub_title' => $this->input->post('b_sub_title'),
        'b_sub_content' => $this->input->post('b_sub_content'),
        'card1_title' => $this->input->post('card1_title'),
        'card1_content' => $this->input->post('card1_content'),
        'card2_title' => $this->input->post('card2_title'),
        'card2_content' => $this->input->post('card2_content'),
        'card3_title' => $this->input->post('card3_title'),
        'card3_content' => $this->input->post('card3_content'),
        's1_title' => $this->input->post('s1_title'),
        's1_content' => $this->input->post('s1_content'),
        's2_title' => $this->input->post('s2_title'),
        's2_content' => $this->input->post('s2_content'),
        's3_title' => $this->input->post('s3_title'),
        's3_content' => $this->input->post('s3_content'),
        'sub_heading_title' => $this->input->post('sub_heading_title'),
        'workprocess_title' => $this->input->post('workprocess_title'),
        'workprocess_content' => $this->input->post('workprocess_content'),
        'Inquary_Title' => $this->input->post('Inquary_Title')
    ];

    // Update record by ID
    $this->db->where('id', $id);
    $this->db->update('business_analytics', $data);
    
    // Redirect to listing page
    redirect('/businessAnalytics');
}

public function dataGovernance()
{

    $this->load->database(); // Load the database

    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('data_governance'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['dataGovernanceRecords'] = $query->result(); // Store query result in data array
    
    $this->global['pageTitle'] = 'Neural Nest, LLC : Data Governance'; // Set the page title
    
    $this->loadViews("dataGovernance", $this->global, $data, NULL); // Load the view with fetched data
    
}

public function dataGovernanceEdit($id)
{
    $this->load->database(); // Load the database
    
    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('data_governance'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['dataGovernanceRecords'] = $query->result(); // Store query result in data array

    // Load the edit view with the fetched data
    $this->load->view("dataGovernanceEdit", $data);

}

public function updateDataGovernance($id)
{
    $this->load->database();

    // Prepare data to update based on the data_architecture table structure
    $data = [
        'banner_title' => $this->input->post('banner_title'),
        'banner_content' => $this->input->post('banner_content'),
        'b_sub_title' => $this->input->post('b_sub_title'),
        'b_sub_content' => $this->input->post('b_sub_content'),
        'card1_title' => $this->input->post('card1_title'),
        'card1_content' => $this->input->post('card1_content'),
        'card2_title' => $this->input->post('card2_title'),
        'card2_content' => $this->input->post('card2_content'),
        'card3_title' => $this->input->post('card3_title'),
        'card3_content' => $this->input->post('card3_content'),
        's1_title' => $this->input->post('s1_title'),
        's1_content' => $this->input->post('s1_content'),
        's2_title' => $this->input->post('s2_title'),
        's2_content' => $this->input->post('s2_content'),
        's3_title' => $this->input->post('s3_title'),
        's3_content' => $this->input->post('s3_content'),
        'sub_heading_title' => $this->input->post('sub_heading_title'),
        'workprocess_title' => $this->input->post('workprocess_title'),
        'workprocess_content' => $this->input->post('workprocess_content'),
        'Inquary_Title' => $this->input->post('Inquary_Title')
    ];

    // Update record by ID
    $this->db->where('id', $id);
    $this->db->update('data_governance', $data);
    
    // Redirect to listing page
    redirect('/dataGovernance');
}

public function cloudComputing()
{

    $this->load->database(); // Load the database

    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('cloud_computing'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['cloudComputingRecords'] = $query->result(); // Store query result in data array
    
    $this->global['pageTitle'] = 'Neural Nest, LLC : Cloud Computing'; // Set the page title
    
    $this->loadViews("cloudComputing", $this->global, $data, NULL); // Load the view with fetched data
    
}

public function cloudComputingEdit($id)
{
    $this->load->database(); // Load the database
    
    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
    $this->db->from('cloud_computing'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['cloudComputingRecords'] = $query->result(); // Store query result in data array

    // Load the edit view with the fetched data
    $this->load->view("cloudComputingEdit", $data);

}

public function updateCloudComputing($id)
{
    $this->load->database();

    // Prepare data to update based on the data_architecture table structure
    $data = [
        'banner_title' => $this->input->post('banner_title'),
        'banner_content' => $this->input->post('banner_content'),
        'b_sub_title' => $this->input->post('b_sub_title'),
        'b_sub_content' => $this->input->post('b_sub_content'),
        'card1_title' => $this->input->post('card1_title'),
        'card1_content' => $this->input->post('card1_content'),
        'card2_title' => $this->input->post('card2_title'),
        'card2_content' => $this->input->post('card2_content'),
        'card3_title' => $this->input->post('card3_title'),
        'card3_content' => $this->input->post('card3_content'),
        's1_title' => $this->input->post('s1_title'),
        's1_content' => $this->input->post('s1_content'),
        's2_title' => $this->input->post('s2_title'),
        's2_content' => $this->input->post('s2_content'),
        's3_title' => $this->input->post('s3_title'),
        's3_content' => $this->input->post('s3_content'),
        'sub_heading_title' => $this->input->post('sub_heading_title'),
        'workprocess_title' => $this->input->post('workprocess_title'),
        'workprocess_content' => $this->input->post('workprocess_content'),
        'Inquary_Title' => $this->input->post('Inquary_Title')
    ];

    // Update record by ID
    $this->db->where('id', $id);
    $this->db->update('cloud_computing', $data);
    
    // Redirect to listing page
    redirect('/cloudComputing');
}

public function ourTeam()
{
    $this->load->database();
    $this->db->select('id, member_name, member_designation, member_content, member_photo, Inquary_Title, created_at, updated_at');
    $this->db->from('out_team');
    $query = $this->db->get();
    $data['ourTeamRecords'] = $query->result();

    $this->global['pageTitle'] = 'Neural Nest, LLC : Our Team';
    $this->loadViews("ourTeam", $this->global, $data, NULL);
}

public function addOurTeam()
{
    $this->global['pageTitle'] = 'Neural Nest, LLC : Add Team Member';
    $this->loadViews("addOurTeam", $this->global, NULL, NULL);
}

public function saveOurTeam()
{
    $this->load->database();
    $this->load->library('upload');
    
    // Prepare data to insert
    $data = [
        'member_name' => $this->input->post('member_name'),
        'member_designation' => $this->input->post('member_designation'),
        'member_content' => $this->input->post('member_content'),
        'Inquary_Title' => $this->input->post('Inquary_Title'),
        'member_photo' =>  $_FILES['member_photo']['name']
    ];

    // Handle file upload
    if (!empty($_FILES['member_photo']['name'])) {
        $config['upload_path'] = './uploads/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('member_photo')) {
            $uploadData = $this->upload->data();
            $data['member_photo'] = 'uploads/img/' . $uploadData['file_name'];
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', 'Image upload failed: ' . $error);
            redirect('/addOurTeam');
            return;
        }
    }

    if ($this->db->insert('out_team', $data)) {
        $this->session->set_flashdata('success', 'Team member added successfully.');
    } else {
        $this->session->set_flashdata('error', 'Failed to add team member.');
    }

    redirect('/ourTeam');
}

public function ourTeamEdit($id)
{
    $this->load->database();
    $query = $this->db->get_where('out_team', ['id' => $id]);
    $data['teamMember'] = $query->row();

    $this->global['pageTitle'] = 'Neural Nest, LLC : Edit Team Member';
    $this->loadViews("ourTeamEdit", $this->global, $data, NULL);
}

public function updateOurTeam($id)
{
    $this->load->database();
    $this->load->library('upload');

    // Prepare data to update
    $data = [
        'member_name' => $this->input->post('member_name'),
        'member_designation' => $this->input->post('member_designation'),
        'member_content' => $this->input->post('member_content'),
        'Inquary_Title' => $this->input->post('Inquary_Title')
    ];

    if (!empty($_FILES['member_photo']['name'])) {
        $config['upload_path'] = './uploads/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('member_photo')) {
            $uploadData = $this->upload->data();
            $data['member_photo'] = 'uploads/img/' . $uploadData['file_name'];
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', 'Image upload failed: ' . $error);
            redirect('/ourTeamEdit/' . $id);
            return;
        }
    }

    $this->db->where('id', $id);
    if ($this->db->update('out_team', $data)) {
        $this->session->set_flashdata('success', 'Team member updated successfully.');
    } else {
        $this->session->set_flashdata('error', 'Failed to update team member.');
    }

    redirect('/ourTeam');
}

public function deleteOurTeam($id)
{
    $this->load->database();
    $this->db->where('id', $id);

    if ($this->db->delete('out_team')) {
        $this->session->set_flashdata('success', 'Team member deleted successfully.');
    } else {
        $this->session->set_flashdata('error', 'Failed to delete team member.');
    }

    redirect('/ourTeam');
}

public function contactUs()
{

    $this->load->database(); // Load the database

    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, address_title, address_content, contact_title, contact_content, support_title, support_content, message_title, message_content, message_sub_title, Inquary_Title');
    $this->db->from('contact_us'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['contactUsRecords'] = $query->result(); // Store query result in data array
    
    $this->global['pageTitle'] = 'Neural Nest, LLC : Contact Us'; // Set the page title
    
    $this->loadViews("contactUs", $this->global, $data, NULL); // Load the view with fetched data

}

public function contactUsEdit($id)
{
    $this->load->database(); // Load the database
    
    // Fetch data from the 'ml_ai_integration' table
    $this->db->select('id, address_title, address_content, contact_title, contact_content, support_title, support_content, message_title, message_content, message_sub_title, Inquary_Title');
    $this->db->from('contact_us'); // Table name
    
    $query = $this->db->get(); // Execute the query
    $data['contactUsRecords'] = $query->result(); // Store query result in data array

    // Load the edit view with the fetched data
    $this->load->view("contactUsEdit", $data);


}

public function updateContactUs($id)
{
    $this->load->database();

    // Prepare data to update based on the contact_us table structure
    $data = [
        'address_title' => $this->input->post('address_title'),
        'address_content' => $this->input->post('address_content'),
        'contact_title' => $this->input->post('contact_title'),
        'contact_content' => $this->input->post('contact_content'),
        'support_title' => $this->input->post('support_title'),
        'support_content' => $this->input->post('support_content'),
        'message_title' => $this->input->post('message_title'),
        'message_content' => $this->input->post('message_content'),
        'message_sub_title' => $this->input->post('message_sub_title'),
        'Inquary_Title' => $this->input->post('Inquary_Title')
    ];

    // Update record by ID
    $this->db->where('id', $id);
    $this->db->update('contact_us', $data);
    
    // Redirect to listing page
    redirect('/contactUs');
}

/********************** Testimonial **********************/

public function testimonial()
    {
        $this->load->database();
        $this->db->select('id, client_name, client_designation, client_comments, client_photo, product_logo, created_at, updated_at');
        $this->db->from('testimonial_client');             
        $query = $this->db->get();                         
        $data['testimonialRecords'] = $query->result();    

        $this->global['pageTitle'] = 'Neural Nest, LLC : Testimonial';
        $this->loadViews("testimonial", $this->global, $data, NULL);
    }

    public function addTestimonial()
    {
        $this->global['pageTitle'] = 'Neural Nest, LLC : Add Client Testimonial';
        $this->loadViews("addTestimonial", $this->global, NULL, NULL);
    }

    public function saveTestimonial()
    {
        $this->load->database();
        $this->load->library('upload');
        
        // Prepare data to insert
        $data = [
            'client_name' => $this->input->post('client_name'),
            'client_designation' => $this->input->post('client_designation'),
            'client_comments' => $this->input->post('client_comments')
        ];

        // Handle file upload for client_photo
        if (!empty($_FILES['client_photo']['name'])) {
            $config['upload_path'] = './uploads/img/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('client_photo')) {
                $uploadData = $this->upload->data();
                $data['client_photo'] = 'uploads/img/' . $uploadData['file_name'];
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', 'Image upload failed: ' . $error);
                redirect('/addTestimonial');
                return;
            }
        }

        // Handle file upload for product_logo
        if (!empty($_FILES['product_logo']['name'])) {
            $config['upload_path'] = './uploads/img/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('product_logo')) {
                $uploadData = $this->upload->data();
                $data['product_logo'] = 'uploads/img/' . $uploadData['file_name'];
            } else {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', 'Image upload failed: ' . $error);
                redirect('/addTestimonial');
                return;
            }
        }

        // Insert data into database
        if ($this->db->insert('testimonial_client', $data)) {
            $this->session->set_flashdata('success', 'Testimonial added successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to add testimonial.');
        }

        redirect('/testimonial');
    }

    public function testimonialEdit($id)
    {
        $this->load->database();
        $query = $this->db->get_where('testimonial_client', ['id' => $id]);
        $data['testimonialRecords'] = $query->row();

        $this->global['pageTitle'] = 'Neural Nest, LLC : Edit Client Comments';
        $this->loadViews("testimonialEdit", $this->global, $data, NULL);
    }

    public function updateTestimonial($id)
    {
        $this->load->database();
        $this->load->library('upload');

        // Prepare data to update
        $data = [
            'client_name' => $this->input->post('client_name'),
            'client_designation' => $this->input->post('client_designation'),
            'client_comments' => $this->input->post('client_comments')
        ];

        // Handle client_photo update
        if (!empty($_FILES['client_photo']['name'])) {
            $config['upload_path'] = './uploads/img/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('client_photo')) {
                $uploadData = $this->upload->data();
                $data['client_photo'] = 'uploads/img/' . $uploadData['file_name'];
            }
        }

        // Handle product_logo update
        if (!empty($_FILES['product_logo']['name'])) {
            $config['upload_path'] = './uploads/img/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('product_logo')) {
                $uploadData = $this->upload->data();
                $data['product_logo'] = 'uploads/img/' . $uploadData['file_name'];
            }
        }

        $this->db->where('id', $id);
        if ($this->db->update('testimonial_client', $data)) {
            $this->session->set_flashdata('success', 'Testimonial updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to update testimonial.');
        }

        redirect('/testimonial');
    }

    public function deleteTestimonial($id)
    {
        $this->load->database();
        $this->db->where('id', $id);

        if ($this->db->delete('testimonial_client')) {
            $this->session->set_flashdata('success', 'Testimonial deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete testimonial.');
        }

        redirect('/testimonial');
    }

/********************** Blog **********************/
public function blog()
{
     $this->loadViews("blog", $this->global, $data, NULL);
}

public function addBlog($id) {
    $this->load->view('admin/addBlog', $data);
}

public function saveBlog($id) {
    $data = [
        'title' => $this->input->post('title'),
        'content' => $this->input->post('content'),
    ];

    // Upload image
    if (!empty($_FILES['image']['name'])) {
        $config['upload_path'] = './uploads/img/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; // 2MB
 
        $this->upload->initialize($config);
        if ($this->upload->do_upload('image')) {
            $data['image'] = $this->upload->data('file_name');
        } else {
            // Show image upload errors
            echo $this->upload->display_errors();
            return;
        }
    }

    // Upload video
    if (!empty($_FILES['video']['name'])) {
        $config['upload_path'] = './uploads/videos/';
        $config['allowed_types'] = 'mp4|avi|mov|wmv';
        $config['max_size'] = 10240; // 10MB

        $this->upload->initialize($config);
        if ($this->upload->do_upload('video')) {
            $data['video'] = $this->upload->data('file_name');
        } else {
            // Show video upload errors
            echo $this->upload->display_errors();
            return;
        }
    }

    // Insert into the database
    if ($this->Blog_model->insertBlog($data)) {
        redirect('user/blogList');
    } else {
        echo "Error saving blog.";
    }
}


public function blogList() {
    $data['blogs'] = $this->Blog_model->getBlogs();
    $this->load->view('admin/blogList', $data);
}

    public function getMenus()
    {
        $this->load->database();
        
        $query = $this->db->select('m.*, COUNT(s.id) as submenu_count')
                          ->from('menus m')
                          ->join('submenus s', 'm.id = s.menu_id', 'left')
                          ->where('m.status', 'active')
                          ->group_by('m.id')
                          ->order_by('m.menu_order', 'ASC')
                          ->get();
        
        $menus = $query->result();
        
        $this->output
             ->set_content_type('application/json')
             ->set_output(json_encode(['status' => 'success', 'data' => $menus]));
    }

    // public function getSubmenus($menuId) {
    //     $this->load->database();
        
    //     $query = $th)is->db->select('*')
    //                       ->from('submenus')
    //                       ->where('menu_id', $menuId)
    //                       ->where('status', 'active')
    //                       ->order_by('submenu_order', 'ASC')
    //                       ->get();
        
    //     $submenus = $query->result();
        
    //     $this->output
    //          ->set_content_type('application/json')
    //          ->set_output(json_encode(['status' => 'success', 'data' => $submenus]));
    // }
    

    // public function addMenu()
    // {
    //     $this->load->library(['form_validation', 'session']);
    //     $this->load->database();
        
    //     $this->form_validation->set_rules('menuName', 'Menu Name', 'required|trim|max_length[255]');
        
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->output
    //              ->set_content_type('application/json')
    //              ->set_output(json_encode([
    //                  'status' => 'error',
    //                  'message' => validation_errors()
    //              ]));
    //         return;
    //     }
        
    //     $data = [
    //         'menu_name' => $this->input->post('menuName'),
    //         'menu_order' => $this->input->post('menuOrder', true) ?? 0,
    //         'created_by' => $this->session->userdata('userId')
    //     ];
        
    //     $this->db->insert('menus', $data);
        
    //     if ($this->db->affected_rows() > 0) {
    //         $menuId = $this->db->insert_id();
    //         $this->output
    //              ->set_content_type('application/json')
    //              ->set_output(json_encode([
    //                  'status' => 'success',
    //                  'message' => 'Menu added successfully',
    //                  'data' => ['id' => $menuId]
    //              ]));
    //     } else {
    //         $this->output
    //              ->set_content_type('application/json')
    //              ->set_output(json_encode([
    //                  'status' => 'error',
    //                  'message' => 'Failed to add menu'
    //              ]));
    //     }
    // }

    // public function addSubmenu()
    // {
    //     $this->load->library(['form_validation', 'session']);
    //     $this->load->database();
        
    //     $this->form_validation->set_rules('menuId', 'Menu ID', 'required|numeric');
    //     $this->form_validation->set_rules('submenuName', 'Submenu Name', 'required|trim|max_length[255]');
        
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->output
    //              ->set_content_type('application/json')
    //              ->set_output(json_encode([
    //                  'status' => 'error',
    //                  'message' => validation_errors()
    //              ]));
    //         return;
    //     }
        
    //     $data = [
    //         'menu_id' => $this->input->post('menuId'),
    //         'submenu_name' => $this->input->post('submenuName'),
    //         'submenu_order' => $this->input->post('submenuOrder', true) ?? 0,
    //         'route' => $this->input->post('route'),
    //         'created_by' => $this->session->userdata('userId')
    //     ];
        
    //     $this->db->insert('submenus', $data);
        
    //     if ($this->db->affected_rows() > 0) {
    //         $submenuId = $this->db->insert_id();
    //         $this->output
    //              ->set_content_type('application/json')
    //              ->set_output(json_encode([
    //                  'status' => 'success',
    //                  'message' => 'Submenu added successfully',
    //                  'data' => ['id' => $submenuId]
    //              ]));
    //     } else {
    //         $this->output
    //              ->set_content_type('application/json')
    //              ->set_output(json_encode([
    //                  'status' => 'error',
    //                  'message' => 'Failed to add submenu'
    //              ]));
    //     }
    // }

    // public function updateMenu($id)
    // {
    //     $this->load->library(['form_validation', 'session']);
    //     $this->load->database();
        
    //     $this->form_validation->set_rules('menuName', 'Menu Name', 'required|trim|max_length[255]');
        
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->output
    //              ->set_content_type('application/json')
    //              ->set_output(json_encode([
    //                  'status' => 'error',
    //                  'message' => validation_errors()
    //              ]));
    //         return;
    //     }
        
    //     $data = [
    //         'menu_name' => $this->input->post('menuName'),
    //         'menu_order' => $this->input->post('menuOrder', true) ?? 0,
    //         'updated_by' => $this->session->userdata('userId')
    //     ];
        
    //     $this->db->where('id', $id)->update('menus', $data);
        
    //     $this->output
    //          ->set_content_type('application/json')
    //          ->set_output(json_encode([
    //              'status' => 'success',
    //              'message' => 'Menu updated successfully'
    //          ]));
    // }

    // public function deleteMenu($id)
    // {
    //     $this->load->database();
        
    //     $this->db->where('id', $id)->delete('menus');
        
    //     $this->output
    //          ->set_content_type('application/json')
    //          ->set_output(json_encode([
    //              'status' => 'success',
    //              'message' => 'Menu deleted successfully'
    //          ]));
    // }

    public function update($menuId) {
        $this->output->set_content_type('application/json');
        
        try {
            if (!$menuId) {
                throw new Exception('Menu ID is required');
            }

            $menuName = $this->input->post('menuName');
            $submenus = $this->input->post('submenus');

            if (empty($menuName)) {
                throw new Exception('Menu name is required');
            }

            // Check if the new name already exists for other menus
            $this->db->where('name', $menuName);
            $this->db->where('id !=', $menuId);
            if ($this->db->get('menus')->num_rows() > 0) {
                throw new Exception('Menu with this name already exists');
            }

            $this->db->trans_start();

            // Update menu
            $this->db->where('id', $menuId);
            $this->db->update('menus', ['name' => $menuName]);

            // Update submenus
            if (is_array($submenus)) {
                // First, delete removed submenus
                $submenuIds = array_column($submenus, 'id');
                $submenuIds = array_filter($submenuIds); // Remove null values
                if (!empty($submenuIds)) {
                    $this->db->where('menu_id', $menuId)
                             ->where_not_in('id', $submenuIds)
                             ->delete('submenus');
                }

                // Then update or insert submenus
                foreach ($submenus as $submenu) {
                    $submenuData = [
                        'name' => $submenu['name'],
                        'menu_id' => $menuId
                    ];

                    if (!empty($submenu['id'])) {
                        // Update existing submenu
                        $this->db->where('id', $submenu['id'])
                                 ->update('submenus', $submenuData);
                    } else {
                        // Insert new submenu
                        $submenuData['created_at'] = date('Y-m-d H:i:s');
                        $this->db->insert('submenus', $submenuData);
                    }
                }
            }

            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                throw new Exception('Failed to update menu');
            }

            echo json_encode([
                'status' => 'success',
                'message' => 'Menu updated successfully',
                'redirect' => base_url('menuList')  // Add redirect URL
            ]);
        } catch (Exception $e) {
            $this->db->trans_rollback();
            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function delete($menuId) {
        try {
            if (!$menuId) {
                throw new Exception('Menu ID is required');
            }

            $this->db->trans_start();

            // First delete all submenus
            $this->db->where('menu_id', $menuId)
                     ->delete('submenus');

            // Then delete the menu
            $this->db->where('id', $menuId)
                     ->delete('menus');

            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                throw new Exception('Failed to delete menu');
            }

            $response = [
                'status' => 'success',
                'message' => 'Menu and its submenus deleted successfully',
                'redirect' => base_url('menuList')
            ];

        } catch (Exception $e) {
            $this->db->trans_rollback();
            $response = [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    public function saveContent() {
        if (!$this->input->is_ajax_request()) {
            show_404();
        }

        try {
            $menu_id = $this->input->post('menu_id');
            $submenu_id = $this->input->post('submenu_id');
            $cards = json_decode($this->input->post('cards'), true);

            // Prepare banner data
            $banner_data = array(
                'title' => $this->input->post('banner_title'),
                'content' => $this->input->post('banner_content')
            );

            $this->load->model('menu_model');
            $result = $this->menu_model->save_content($menu_id, $submenu_id, $banner_data, $cards);

            if ($result) {
                $response = array(
                    'status' => 'success',
                    'message' => 'Content saved successfully'
                );
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Failed to save content'
                );
            }

        } catch (Exception $e) {
            $response = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
        }

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }

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


?>