<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
     $this->load->model('student_model');
     $this->load->model('academic/classes_model');
     $this->load->model('academic/section_model');
    }
public function index() {
    $data = array();
    $data['active'] = "students";
    $data['title'] = "Student Management"; 
    $org_id = org_id();
    $active_branch_id = active_branch_id();

    $search   = $this->input->get('search', TRUE);
    $class_id = $this->input->get('class_id', TRUE);
    $section_id = $this->input->get('section_id', TRUE);
    $status   = $this->input->get('status', TRUE);
    
    $total_rows = $this->student_model->count_students($org_id, $active_branch_id, $search, $class_id, $section_id, $status);

    $this->pagination->initialize([
        "total_rows" => $total_rows,
        "per_page"   => 10,
        "action"     => base_url("student/index"),
        "page_field" => "page",
        "label"      => "Student",
    ]);
    $pagination = $this->pagination->get_data();

    $data["students"] = $this->student_model->get_students(
        $org_id, 
        $active_branch_id, 
        $pagination["per_page"], 
        $pagination["offset"], 
        $search, 
        $class_id, 
        $section_id, 
        $status
    );
    
    $data = array_merge($data, $pagination);

    $data["classes"]   = $this->student_model->get_active_classes($org_id, $active_branch_id);
    $data["sections"]  = $this->section_model->get_active_sections($org_id, $active_branch_id);

    $data['content'] = $this->load->view("student/index", $data, TRUE);
    $this->load->view('layout/master', $data);
}
    public function create() {
    $data = array();
    $data['active'] = "create_student";
    $data['title'] = "Create Students"; 
    $org_id = org_id();
    $active_branch_id = active_branch_id();
  
    $data['classes'] =  $this->student_model->get_active_classes( $org_id,$active_branch_id);
    $data['academic_years'] =  $this->student_model->get_active_academic_years( $org_id,$active_branch_id);
   $data['content'] = $this->load->view("create", $data, TRUE);
   $this->load->view('layout/master', $data);
    }

 public function get_sections_by_class() {
    $class_id = $this->input->post('class_id');

    $this->db->select('sections.*,class_sections.id sid');
    $this->db->from('sections');
    $this->db->join('class_sections', 'class_sections.section_id = sections.id');
    $this->db->where('class_sections.class_id', $class_id);
    $this->db->where('class_sections.is_active', 1); 
    $sections = $this->db->get()->result();

    echo json_encode($sections);
}
    public function search_sibling() {
        $admission_no = $this->input->post('admission_no');

        $this->db->select('guardians.*, students.id as student_id');
        $this->db->from('students');
        $this->db->join('guardians', 'students.guardian_id = guardians.id');
        $this->db->where('students.admission_no', $admission_no);
        $query = $this->db->get()->row();

        if ($query) {
            echo json_encode(array(
                'status' => 'success',
                'guardian_id' => $query->id,
                'father_name' => $query->father_name
            ));
        } else {
            echo json_encode(array(
                'status' => 'error',
                'message' => 'No student found with this Admission No!'
            ));
        }
    }

    public function store() {
        $this->db->trans_start();

        $is_sibling = $this->input->post('is_sibling');
        $guardian_id = null;

        if ($is_sibling === 'yes') {
            $guardian_id = $this->input->post('existing_guardian_id');
            if (empty($guardian_id)) {
                $this->session->set_flashdata('error', 'Please search and select a valid sibling first!');
                redirect('student/create');
            }
        } else {
   
     //image    
    $config['upload_path']   = './uploads/students/';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['max_size']      = 10048; // 10MB
    $config['encrypt_name']  = FALSE;
    
    if (!empty($_FILES['student_image']['name'])) {
        $original_name = $_FILES['student_image']['name'];
        $file_name = preg_replace('/[^a-zA-Z0-9._-]/', '_', $original_name);
        $config['file_name'] = $original_name;
    }

             $this->load->library('upload', $config);

            if (!$this->upload->do_upload('student_image')) {
                $error = array('error' => $this->upload->display_errors());
                echo $error['error'];
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
            }
            $guardian_data = array(
                'organization_id'   => 1,
                'guardian_is'       => $this->input->post('guardian_is'),
                'father_name'       => $this->input->post('father_name'),
                'father_phone'      => $this->input->post('father_phone'),
                'father_occupation' => $this->input->post('father_occupation'),
                'mother_name'       => $this->input->post('mother_name'),
                'mother_phone'      => $this->input->post('mother_phone'),
                'mother_occupation' => $this->input->post('mother_occupation'),
                'guardian_name'     => $this->input->post('guardian_name'),
                'guardian_relation' => $this->input->post('guardian_relation'),
                'guardian_phone'    => $this->input->post('guardian_phone'),
                'present_address'   => $this->input->post('present_address')
            );
            $this->db->insert('guardians', $guardian_data);
            $guardian_id = $this->db->insert_id();
        }

        $student_data = array(
            'organization_id' => 1,
            'branch_id'       => 1,
            'guardian_id'     => $guardian_id,
            'admission_no'    => $this->input->post('admission_no'),
            'firstname'       => $this->input->post('firstname'),
            'lastname'        => $this->input->post('lastname'),
            'dob'             => $this->input->post('dob'),
            'gender'          => $this->input->post('gender'),
            'blood_group'     => $this->input->post('blood_group'),
            'student_image'   => $file_name,
            'is_active'       => 1
        );
        $this->db->insert('students', $student_data);
        $student_id = $this->db->insert_id();

        $session_data = array(
            'student_id'       => $student_id,
            'organization_id'  => 1,
            'branch_id'        => 1,
            'academic_year_id' => $this->input->post('academic_year_id'),
            'class_id'         => $this->input->post('class_id'),
            'section_id'       => $this->input->post('section_id'),
            'roll_no'          => $this->input->post('roll_no')
        );
        $this->db->insert('student_sessions', $session_data);

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata('error', 'Something went wrong!');
            redirect('student/create');
        } else {
            $this->session->set_flashdata('success', 'Student added successfully!');
            redirect('student/create');
        }
    }

    public function edit($id) {
        $data = array();
        $data['active'] = "students";
        $data['title'] = "Edit Student"; 
        $org_id = org_id();
        $active_branch_id = active_branch_id();
    
        $data['student'] = $this->student_model->get_student_by_id($id);
        
        if (empty($data['student'])) {
            $this->session->set_flashdata('error', 'Student not found!');
            redirect('student/create');
        }

        $data['classes'] = $this->student_model->get_active_classes($org_id, $active_branch_id);
        $data['academic_years'] = $this->student_model->get_active_academic_years($org_id, $active_branch_id);
        
        $data['content'] = $this->load->view("edit", $data, TRUE);
        $this->load->view('layout/master', $data);
    }

   public function update($id) {

   $admission_no = $this->input->post('admission_no');
        
        $this->db->where('admission_no', $admission_no);
        $this->db->where('id !=', $id); 
        $exists = $this->db->get('students')->row();

        if ($exists) {
            $this->session->set_flashdata('error', 'This Admission No already exists for another student!');
            redirect('student/edit/' . $id);
            return;
        }

        $this->db->trans_start();

        $is_sibling = $this->input->post('is_sibling');
        $guardian_id = $this->input->post('guardian_id');

        if ($is_sibling === 'no') {
            $guardian_data = array(
                'guardian_is'       => $this->input->post('guardian_is'),
                'father_name'       => $this->input->post('father_name'),
                'father_phone'      => $this->input->post('father_phone'),
                'father_occupation' => $this->input->post('father_occupation'),
                'mother_name'       => $this->input->post('mother_name'),
                'mother_phone'      => $this->input->post('mother_phone'),
                'mother_occupation' => $this->input->post('mother_occupation'),
                'guardian_name'     => $this->input->post('guardian_name'),
                'guardian_relation' => $this->input->post('guardian_relation'),
                'guardian_phone'    => $this->input->post('guardian_phone'),
                'present_address'   => $this->input->post('present_address')
            );
            if (empty($guardian_id)) {
                $guardian_data['organization_id'] = 1;
                $this->db->insert('guardians', $guardian_data);
                $guardian_id = $this->db->insert_id();
            } else {
                $this->db->where('id', $guardian_id);
                $this->db->update('guardians', $guardian_data);
            }
        } 
    

        $student_data = array(
            'guardian_id'   => $guardian_id,
            'admission_no'  => $this->input->post('admission_no'),
            'firstname'     => $this->input->post('firstname'),
            'lastname'      => $this->input->post('lastname'),
            'dob'           => $this->input->post('dob'),
            'gender'        => $this->input->post('gender'),
            'blood_group'   => $this->input->post('blood_group')
        );
        $this->db->where('id', $id);
        $this->db->update('students', $student_data);

        $session_data = array(
            'academic_year_id' => $this->input->post('academic_year_id'),
            'class_id'         => $this->input->post('class_id'),
            'section_id'       => $this->input->post('section_id'),
            'roll_no'          => $this->input->post('roll_no')
        );
        $this->db->where('student_id', $id);
        $this->db->update('student_sessions', $session_data);

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata('error', 'Failed to update student!');
            redirect('student/edit/' . $id);
        } else {
            $this->session->set_flashdata('success', 'Student updated successfully!');
            redirect('student/create');
        }
    }

    public function delete($id) {
        $this->db->trans_start();
        $this->db->where('student_id', $id);
        $this->db->delete('student_sessions');

        // Delete Student record
        $this->db->where('id', $id);
        $this->db->delete('students');

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->session->set_flashdata('error', 'Failed to delete student!');
        } else {
            $this->session->set_flashdata('success', 'Student deleted successfully!');
        }
        redirect('student'); 
    }
}