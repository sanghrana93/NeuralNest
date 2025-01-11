<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{   
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('email'); // Load the Email library
        $this->load->helper('url'); // Load URL helper for base_url() function
 
    }
    public function index()
    {
        $data['title'] = 'Welcome to the Frontend Home Page';
        $this->db->select('id, b_title, b_content, Serv_title, Serv_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, target_title, target_content, workprocess_title, workprocess_content'); // Selecting id and title
        $this->db->from('user_analysis'); // Table name
        $query = $this->db->get(); // Execute the query

        // Store the results in an array
        $data['userAnalysisRecords'] = $query->result();

        $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';
        $this->load->view('portfolio/index', $data);
       
    }
    function portfolio()
    {
        $this->load->database();
        // Fetch data from the database table 'user_analysis'
        $this->db->select('id, b_title, b_content, Serv_title, Serv_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, target_title, target_content, workprocess_title, workprocess_content'); // Selecting id and title
        $this->db->from('user_analysis'); // Table name
        $query = $this->db->get(); // Execute the query
        // Store the results in an array
        $data['userAnalysisRecords'] = $query->result();
        // print_r($data['userAnalysisRecords']);die;
        // Page title

        /******************** Call the team ********************/
        $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';
        $this->load->database();
        $this->db->select('id, member_name, member_designation, member_content, member_photo, Inquary_Title, created_at, updated_at');
        $this->db->from('out_team');
        $query = $this->db->get();
        $data['ourTeamRecords'] = $query->result();

        $this->load->view("portfolio/index", $data);
    }
    function artificialIntelligenceFrontend()
    {
         // Load the database library (ensure it is autoloaded or loaded manually)
         $this->load->database();

         // Fetch data from the database table 'user_analysis'
         $this->db->select('id, banner_title, banner_content, card1_title, card1_content,  card2_title, card2_content,  card3_title, card3_content, Services_title, Service_card_title_1, Service_card_content_1, Service_card_title_2, Service_card_content_2, S1_title, S1_content, S2_title, S2_content, S3_title, S3_content, workpress_title, workpress_content, solution_title, solution_content,  Inquary_Title, Inquary_content,'); // Selecting id and title
         $this->db->from('artificial_intelligence'); // Table name
         $query = $this->db->get(); // Execute the query
 
         // Store the results in an array
         $data['artificialIntelligenceRecords'] = $query->result();
         
         // Page title
         $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';
 
        //  Load the view with fetched data
         $this->load->view("portfolio/artificialIntelligenceFrontend", $data);
        //  $this->loadViews("artificialIntelligence", $this->global, $data, NULL);
        // $this->load->view("portfolio/artificialIntelligence");
    }
    function dataScienceFrontend()
    {
        // Load the database library (ensure it is autoloaded or loaded manually)
        $this->load->database();

        // Fetch data from the database table 'user_analysis'
        $this->db->select('id, banner_title, banner_content, services_title, services_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, s4_title, s4_content, conent_title, content_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, workprocess_title, workprocess_content');  // Corrected query
        $this->db->from('data_science'); // Table name
        $query = $this->db->get(); // Execute the query

        // Store the results in an array
        $data['dataScienceRecords'] = $query->result();
        
        // Page title
        $this->global['pageTitle'] = 'Neural Nest, LLC : Demo List';

        $this->load->view("portfolio/dataScienceFrontend", $data);
    }
    function machineLearningFrontend()
    {
         // Load the database library (ensure it is autoloaded or loaded manually)
        $this->load->database();

        // Fetch data from the database table 'user_analysis'
        $this->db->select('id, banner_title, banner_content, services_title, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, s4_title, s4_content, solution_title, solution_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, approach_title, approach_card_title_1, approach_card_title_2, approach_card_title_3, workingskills_title, workingskills_content, progress_title_1, progress_content_1, progress_title_2, progress_content_2, progress_title_3, progress_content_3');  // Corrected query
        $this->db->from('machine_learning'); // Table name

        $query = $this->db->get(); // Execute the query
        $data['machineLearningRecords'] = $query->result();

        $this->load->view("portfolio/machineLearningFrontend", $data);
    }
    function mlAiIntegration_()
    {
        $this->load->database(); // Load the database

        // Fetch data from the 'ml_ai_integration' table
        $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, overview_title, overview_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
        $this->db->from('ml_ai_integration'); // Table name
        
        $query = $this->db->get(); // Execute the query
        $data['mlAiIntegrationRecords'] = $query->result(); // Store query result in data array
        $this->load->view('portfolio/mlAiIntegration_', $data);
    }
    function dataArchitecture_()
    { 
        $this->load->database(); // Load the database

        // Fetch data from the 'ml_ai_integration' table
        $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
        $this->db->from('data_architecture'); // Table name
        
        $query = $this->db->get(); // Execute the query
        $data['dataArchitectureRecords'] = $query->result(); // Store query result in data array
        $this->load->view("portfolio/dataArchitecture_", $data);
    }
    function businessAnalytics_()
    {
        $this->load->database(); // Load the database

        // Fetch data from the 'ml_ai_integration' table
        $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
        $this->db->from('business_analytics'); // Table name
        
        $query = $this->db->get(); // Execute the query
        $data['businessAnalyticsRecords'] = $query->result(); // Store query result in data array
        $this->load->view("portfolio/businessAnalytics_", $data);
    }
    function dataGovernance_()
    {
        $this->load->database(); // Load the database
    
        // Fetch data from the 'ml_ai_integration' table
        $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
        $this->db->from('data_governance'); // Table name
        
        $query = $this->db->get(); // Execute the query
        $data['dataGovernanceRecords'] = $query->result(); // Store query result in data array
        $this->load->view("portfolio/dataGovernance_",$data);
    }
    function cloudComputing_()
    {
        $this->load->database(); // Load the database

        // Fetch data from the 'ml_ai_integration' table
        $this->db->select('id, banner_title, banner_content, b_sub_title, b_sub_content, card1_title, card1_content, card2_title, card2_content, card3_title, card3_content, s1_title, s1_content, s2_title, s2_content, s3_title, s3_content, sub_heading_title, workprocess_title, workprocess_content, Inquary_Title, created_at, updated_at');
        $this->db->from('cloud_computing'); // Table name
        
        $query = $this->db->get(); // Execute the query
        $data['cloudComputingRecords'] = $query->result(); 
        $this->load->view("portfolio/cloudComputing_", $data);
    }
    function traingSupport()
    {
        $this->load->view("portfolio/traingSupport");
    }
    function team()
    {
        $this->load->database();
        $this->db->select('id, member_name, member_designation, member_content, member_photo, Inquary_Title, created_at, updated_at');
        $this->db->from('out_team');
        $query = $this->db->get();
        $data['ourTeamRecords'] = $query->result();
        $this->load->view("portfolio/team", $data);
    }
    function teamDetailsFounder()
    {
        $this->load->database();
        $this->db->select('id, member_name, member_designation, member_content, member_photo, Inquary_Title, created_at, updated_at');
        $this->db->from('out_team');
        $query = $this->db->get();
        $data['ourTeamRecords'] = $query->result();

        $this->load->view("portfolio/teamDetailsFounder", $data);
    }
    function teamDetailsSales()
    {
        $this->load->database();
        $this->db->select('id, member_name, member_designation, member_content, member_photo, Inquary_Title, created_at, updated_at');
        $this->db->from('out_team');
        $query = $this->db->get();
        $data['ourTeamRecords'] = $query->result();

        $this->load->view("portfolio/teamDetailsSales", $data);
    }
    function teamDetailsArchitect()
    {
        $this->load->database();
        $this->db->select('id, member_name, member_designation, member_content, member_photo, Inquary_Title, created_at, updated_at');
        $this->db->from('out_team');
        $query = $this->db->get();
        $data['ourTeamRecords'] = $query->result();

        $this->load->view("portfolio/teamDetailsArchitect", $data);
    }
    function teamDetailsDataScientist()
    {
        $this->load->database();
        $this->db->select('id, member_name, member_designation, member_content, member_photo, Inquary_Title, created_at, updated_at');
        $this->db->from('out_team');
        $query = $this->db->get();
        $data['ourTeamRecords'] = $query->result();

        $this->load->view("portfolio/teamDetailsDataScientist", $data);
    }
    function testimonial_()
    {
        $this->load->database();
        $this->db->select('id, client_name, client_designation, client_comments, client_photo, product_logo, created_at, updated_at');
        $this->db->from('testimonial_client');             
        $query = $this->db->get();                         
        $data['testimonialRecords'] = $query->result();

        $this->load->view("portfolio/testimonial_", $data);
    }
    function productAndSolutions()
    {
        $this->load->view("portfolio/productAndSolutions");
    }
    function blogs()
    {
        $this->load->view("portfolio/blogs");
    }
    function contactUs_()
    {
        $this->load->database(); // Load the database
    
        // Fetch data from the 'ml_ai_integration' table
        $this->db->select('id, address_title, address_content, contact_title, contact_content, support_title, support_content, message_title, message_content, message_sub_title, Inquary_Title');
        $this->db->from('contact_us'); // Table name
        
        $query = $this->db->get(); // Execute the query
        $data['contactUsRecords'] = $query->result(); // Store query result in data array

        $this->load->view("portfolio/contactUs_", $data);
    }
    function editAnalysis()
    {
        $this->load->view("portfolio/editAnalysis");
    }
    public function requestDemo()
{
    $clientName = $this->input->post('clientName');
    $email = $this->input->post('email');
    $companyName = $this->input->post('companyName');
    $demoDate = $this->input->post('demoDate');
    $demoTime = $this->input->post('demoTime');
    $notes = $this->input->post('notes');

    // Database insertion logic
    $data = array(
        'client_name' => $clientName,
        'email' => $email,
        'company_name' => $companyName,
        'demo_date' => $demoDate,
        'demo_time' => $demoTime,
        'notes' => $notes
    );
    // Load database
    $this->load->database();

    // Insert into database
    if ($this->db->insert('demo_requests', $data)) {
        // Proceed to send email
        $adminEmail = 'sanghrana93@gmail.com';

        // Email for the admin
        $this->email->from($email, $clientName);
        $this->email->to($adminEmail);
        $this->email->subject('New Demo Request from ' . $clientName);
        $this->email->message("
            <h3>New Demo Request</h3>
            <p><strong>Client Name:</strong> $clientName</p>
            <p><strong>Email Address:</strong> $email</p>
            <p><strong>Company Name:</strong> $companyName</p>
            <p><strong>Preferred Date for Demo:</strong> $demoDate</p>
            <p><strong>Preferred Time for Demo:</strong> $demoTime</p>
            <p><strong>Additional Notes:</strong> $notes</p>
        ");

        if ($this->email->send()) {
            // Send a confirmation email to the user
            $this->email->clear(); // Clear previous email data

            $this->email->from('sanghrana93@gmail.com', 'Your Company');
            $this->email->to($email);
            $this->email->subject('Thank you for your demo request, ' . $clientName);
            $this->email->message("
                <h3>Thank You for Your Demo Request</h3>
                <p>Hi $clientName,</p>
                <p>Thank you for requesting a demo. We will get in touch with you soon.</p>
                <p><strong>Preferred Date for Demo:</strong> $demoDate</p>
                <p><strong>Preferred Time for Demo:</strong> $demoTime</p>
                <p>If you have any questions, feel free to reach out to us.</p>
                <p>Best Regards,</p>
                <p>Your Company Name</p>
            ");

            $this->email->send();

            echo "Mail sent successfully!";
        } else {
            echo "Mail not sent!";
        }
    } else {
        echo "Error inserting data into the database.";
    }
}

   
}