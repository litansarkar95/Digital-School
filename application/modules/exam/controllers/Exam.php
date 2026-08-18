<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {

    public function __construct() {
        parent::__construct();
     $this->load->model('exam_model');
     $this->load->model('student/student_model');
     $this->load->model('academic/section_model');
    }
public function index() {
    $data = array();
    $data['active'] = "exam";
    $data['title'] = "Exam Management"; 
    $org_id = org_id();
    $active_branch_id = active_branch_id();

    $search       = $this->input->get('search', TRUE);
    $sessionyear  = $this->input->get('sessionyear_id', TRUE);
    $status       = $this->input->get('status', TRUE);
    
    $total_rows = $this->exam_model->count_exams($org_id, $active_branch_id, $search, $sessionyear, $status);

    $this->pagination->initialize([
        "total_rows" => $total_rows,
        "per_page"   => 10,
        "action"     => base_url("exam/index"),
        "page_field" => "page",
        "label"      => "Exam",
    ]);
    $pagination = $this->pagination->get_data();

    $data["exams"] = $this->exam_model->get_exams(
        $org_id, 
        $active_branch_id, 
        $pagination["per_page"], 
        $pagination["offset"], 
        $search, 
        $sessionyear, 
        $status
    );
    
    $data = array_merge($data, $pagination);

    $data["session_years"] =  $this->student_model->get_active_academic_years( $org_id,$active_branch_id);

    $data['content'] = $this->load->view("exam/index", $data, TRUE);
    $this->load->view('layout/master', $data);
}
    public function create() {
    $data = array();
    $data['active'] = "exam";
    $data['title'] = "Create Exam"; 
    $org_id = org_id();
    $active_branch_id = active_branch_id();
  
    $data['allExam'] =  $this->exam_model->get_active_exam( $org_id,$active_branch_id);
    $data['academic_years'] =  $this->student_model->get_active_academic_years( $org_id,$active_branch_id);
   $data['content'] = $this->load->view("create", $data, TRUE);
   $this->load->view('layout/master', $data);
    }
public function insert() {
    $this->form_validation->set_rules("examName", "Exam Name", "required");
    $this->form_validation->set_rules("sessionyearID", "Academic Year", "required");

    if ($this->form_validation->run() == FALSE) {
        $this->create();
    } else {
        $this->db->trans_start();

        $data = array(
            'organization_id' => org_id(),
            'branch_id'       => active_branch_id(),
            'name'            => $this->input->post('examName'),
            'examGroup'       => $this->input->post('examGroup'),
            'examDate'        => strtotime($this->input->post('examDate')),
            'sessionyearID'   => $this->input->post('sessionyearID'),
            'note'            => $this->input->post('note'),
            'sortOrder'       => $this->input->post('sortOrder'),
            'status'          => 1,
            'created_date'    => time(),
        );

        if ($this->common_model->save_data("exam", $data)) {
            $examID = $this->common_model->Id;

            $other_exam_ids = $this->input->post('examID');
            if (!empty($other_exam_ids) && is_array($other_exam_ids)) { 
                foreach ($other_exam_ids as $other_id) {
                    $session_data = array(
                        'organization_id' => org_id(),
                        'branch_id'       => active_branch_id(),
                        'examID'          => $examID,
                        'otherExamID'     => $other_id,
                    );
                    $this->common_model->save_data("exam_others", $session_data);
                }
            }
        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $this->session->set_flashdata('error', 'Something went wrong!');
            redirect('exam/create'); 
        } else {
            $this->db->trans_commit();
            $this->session->set_flashdata('success', 'Exam added successfully!'); 
            redirect('exam'); 
        }
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