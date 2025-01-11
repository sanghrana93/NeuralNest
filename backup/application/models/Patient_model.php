<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Patient_model extends CI_Model
{
    // Function to add new patient to the database
    public function addPatient($patientData)
    {
        $this->db->insert('patients', $patientData);
        return $this->db->insert_id();
    }

    // Function to get all patients from the database
    public function getAllPatients()
    {
        $this->db->select('*');
        $this->db->from('patients');
        $query = $this->db->get();
        return $query->result();
    }
    public function deletePatient($patientId)
{
    $this->db->where('id', $patientId);
    return $this->db->delete('patients');
}
public function updatePatient($patientId, $patientData)
{
    $this->db->where('id', $patientId);
    return $this->db->update('patients', $patientData);
}

public function getPatientById($patientId)
{
    $this->db->select('*');
    $this->db->from('patients');
    $this->db->where('id', $patientId);
    $query = $this->db->get();
    return $query->row();
}

    // Function to get the medical history of a specific patient
   public function getPatientHistory($patientId)
{
    $this->db->select('*');
    $this->db->from('medical_history');
    $this->db->where('patient_id', $patientId);  // Corrected the field name
    $this->db->order_by('date_of_visit', 'DESC');
    $query = $this->db->get();
    return $query->result();
}

    // Function to get details of a specific medical record
    public function getMedicalRecord($recordId)
    {
        $this->db->select('*');
        $this->db->from('medical_history');
        $this->db->where('id', $recordId);
        $query = $this->db->get();
        return $query->row();
    }

    // Function to add medical history for a patient
    public function addMedicalHistory($historyData)
    {
        $this->db->insert('medical_history', $historyData);
        return $this->db->insert_id();
    }
    public function getPatientNameById($patientId)
{
    $this->db->select('name');
    $this->db->from('patients');
    $this->db->where('id', $patientId);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->row()->name; // Return the patient's name
    } else {
        return null;
    }
}
public function addPatientHistory($historyData)
{
    $this->db->insert('medical_history', $historyData);
    return $this->db->insert_id();
}

 public function getTotalPatients()
    {
        $this->db->select('COUNT(*) as count');
        $this->db->from('patients');
        $query = $this->db->get();
        return $query->row()->count;
    }

    // public function getNewAppointments()
    // {
    //     $this->db->select('COUNT(*) as count');
    //     $this->db->from('appointments');
    //     $this->db->where('appointment_date >=', date('Y-m-d'));
    //     $query = $this->db->get();
    //     return $query->row()->count;
    // }

    // public function getTotalStaff()
    // {
    //     $this->db->select('COUNT(*) as count');
    //     $this->db->from('staff');
    //     $query = $this->db->get();
    //     return $query->row()->count;
    // }

    // public function getReopenedIssues()
    // {
    //     $this->db->select('COUNT(*) as count');
    //     $this->db->from('issues');
    //     $this->db->where('status', 'reopened');
    //     $query = $this->db->get();
    //     return $query->row()->count;
    // }
}