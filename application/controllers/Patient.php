<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Patient extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Patient_model');
        $this->isLoggedIn();   
    }

    // Function to display the form for onboarding a new patient
   public function addPatient()
{
    $this->load->library('form_validation');

    // Set validation rules
    $this->form_validation->set_rules('name', 'Full Name', 'trim|required|max_length[128]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');
    $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]');
    $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');

    if ($this->form_validation->run() == FALSE)
    {
        $this->global['pageTitle'] = 'Neural Nest, LLC : Add New User';
        $this->loadViews("addNewPatient", $this->global, NULL, NULL);
    }
    else
    {
        // Sanitize input and prepare patient data array
        $patientData = array(
            'name' => $this->security->xss_clean($this->input->post('name')),
            'email' => $this->security->xss_clean($this->input->post('email')),
            'mobile' => $this->security->xss_clean($this->input->post('mobile')),
            'dob' => $this->security->xss_clean($this->input->post('dob')),
            'address' => $this->security->xss_clean($this->input->post('address')),
            'createdBy' => $this->vendorId,
            'createdDtm' => date('Y-m-d H:i:s')
        );

        // Add the patient to the database using the model
        $result = $this->Patient_model->addPatient($patientData);

        // Set success or error message based on the result
        if ($result > 0)
        {
            $this->session->set_flashdata('success', 'Patient added successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Patient addition failed');
        }

        // Redirect to the patient list page
        redirect('patients');
    }
}

    // Function to list all patients
    public function patientList()
    {   $this->load->library('pagination');

        $data['patientRecords'] = $this->Patient_model->getAllPatients();
        $this->global['pageTitle'] = 'Neural Nest, LLC : Patient List';

        $this->loadViews("patientList", $this->global, $data, NULL);

    }

    // Function to display medical history of a patient
    public function viewPatientHistory($patientId)
    {   $this->load->library('pagination');
        $data['history'] = $this->Patient_model->getPatientHistory($patientId);
        $data['PatientName'] = $this->Patient_model->getPatientNameById($patientId);
        $data['patientId'] = $patientId;
        $this->global['pageTitle'] = 'Neural Nest, LLC : Patient History';
        $this->loadViews("patientHistory", $this->global, $data, NULL);
    }

    // Function to view the details of a specific medical record
    public function viewMedicalRecord($recordId)
    {
        $data['record'] = $this->patient_model->getMedicalRecord($recordId);
        $this->loadViews("medicalRecordDetail", $this->global, $data, NULL);
    }

    // Function to add medical history for a patient
    public function addMedicalHistory($patientId)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('temperature', 'Temperature', 'required|numeric');
        $this->form_validation->set_rules('height', 'Height', 'required|numeric');
        $this->form_validation->set_rules('weight', 'Weight', 'required|numeric');
        $this->form_validation->set_rules('bp', 'Blood Pressure', 'required');
        $this->form_validation->set_rules('sugar', 'Sugar Level', 'required|numeric');
        $this->form_validation->set_rules('diagnosis', 'Diagnosis', 'required');
        $this->form_validation->set_rules('treatment', 'Treatment', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $data['patientId'] = $patientId;
            $this->loadViews("addMedicalHistory", $this->global, $data, NULL);
        }
        else
        {
            $historyData = array(
                'patientId' => $patientId,
                'temperature' => $this->security->xss_clean($this->input->post('temperature')),
                'height' => $this->security->xss_clean($this->input->post('height')),
                'weight' => $this->security->xss_clean($this->input->post('weight')),
                'bp' => $this->security->xss_clean($this->input->post('bp')),
                'sugar' => $this->security->xss_clean($this->input->post('sugar')),
                'diagnosis' => $this->security->xss_clean($this->input->post('diagnosis')),
                'treatment' => $this->security->xss_clean($this->input->post('treatment')),
                'createdBy' => $this->vendorId,
                'createdDtm' => date('Y-m-d H:i:s')
            );

            $result = $this->patient_model->addMedicalHistory($historyData);

            if($result > 0)
            {
                $this->session->set_flashdata('success', 'Medical history added successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Failed to add medical history');
            }

            redirect('viewPatientHistory/'.$patientId);
        }
    }
   public function addPatientHistory($patientId)
{  
    $this->load->library('form_validation');
    $this->form_validation->set_rules('date_of_visit', 'Date of Visit', 'required');
    $this->form_validation->set_rules('temperature', 'Temperature', 'required');
    $this->form_validation->set_rules('height', 'Height', 'required');
    $this->form_validation->set_rules('weight', 'Weight', 'required');
    // $this->form_validation->set_rules('blood_pressure', 'Blood Pressure', 'required');
    // $this->form_validation->set_rules('blood_sugar', 'Blood Sugar', 'required');
    // $this->form_validation->set_rules('notes', 'Notes', 'required');
    if ($this->form_validation->run() == FALSE) {
        // Reload the patient history view with errors
         $this->session->set_flashdata('error', 'Please fill all required fields');
       // redirect('patient-history/'.$patientId);
    } else {


        // Handle PDF upload
        $config['upload_path'] = './uploads/prescriptions/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2048; // 2MB

        $this->load->library('upload', $config);
        $pdfPath = '';

        if (!$this->upload->do_upload('prescription_pdf')) {
            // PDF upload failed, set the error message but allow other data to be saved
            $this->session->set_flashdata('error', 'Failed to upload prescription PDF: ' . $this->upload->display_errors());
        } else {
            // PDF upload success
            $uploadedData = $this->upload->data();
            $pdfPath = 'uploads/prescriptions/' . $uploadedData['file_name'];
        }

        // Prepare data for insertion
        $historyData = array(
            'patient_id' => $patientId,
            'date_of_visit' => $this->input->post('date_of_visit'),
            'temperature' => $this->input->post('temperature'),
            'height' => $this->input->post('height'),
            'weight' => $this->input->post('weight'),
            'blood_pressure' => $this->input->post('blood_pressure'),
            'blood_sugar' => $this->input->post('blood_sugar'),
            'allergies' => $this->input->post('allergies'), // Optional field
            'medications' => $this->input->post('medications'), // Optional field
            'diagnosis' => $this->input->post('diagnosis'), // Optional field
            'notes' => $this->input->post('notes'),
            'prescription_pdf' => $pdfPath, // Store PDF path if uploaded
            'createdBy' => $this->vendorId,
            'createdDtm' => date('Y-m-d H:i:s')
        );

        // Insert data into the medical_history table
        $this->load->model('Patient_model');
        $result = $this->Patient_model->addPatientHistory($historyData);

        if ($result > 0) {
            $this->session->set_flashdata('success', 'Medical history added successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed to add medical history');
        }

        // Redirect to patient history view
        redirect('patient-history/' . $patientId);
    }
}


public function editPatient($patientId)
{
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name','Full Name','trim|required|max_length[128]');
    $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]');
    $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
    $this->form_validation->set_rules('dob','Date of Birth','required');
    $this->form_validation->set_rules('address','Address','required');

    if ($this->form_validation->run() == FALSE)
    {
        // Load patient data to edit
        $data['patient'] = $this->Patient_model->getPatientById($patientId);
        $this->loadViews("editPatient", $this->global, $data, NULL);
    }
    else
    {
        $patientData = array(
            'name' => $this->security->xss_clean($this->input->post('name')),
            'email' => $this->security->xss_clean($this->input->post('email')),
            'mobile' => $this->security->xss_clean($this->input->post('mobile')),
            'dob' => $this->security->xss_clean($this->input->post('dob')),
            'address' => $this->security->xss_clean($this->input->post('address')),
            'updatedBy' => $this->vendorId,
            'updatedDtm' => date('Y-m-d H:i:s')
        );

        $result = $this->Patient_model->updatePatient($patientId, $patientData);

        if ($result)
        {
            $this->session->set_flashdata('success', 'Patient updated successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Patient update failed');
        }

        redirect('patients');
    }
}
public function deletePatient($patientId)
{
    $result = $this->Patient_model->deletePatient($patientId);

    if ($result)
    {
        $this->session->set_flashdata('success', 'Patient deleted successfully');
    }
    else
    {
        $this->session->set_flashdata('error', 'Patient deletion failed');
    }

    redirect('patients');
}



}