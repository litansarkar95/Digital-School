<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grade extends CI_Controller {

    public function __construct() {
        parent::__construct();
     $this->load->model('exam_model');
     $this->load->model('student/student_model');
     $this->load->model('academic/section_model');
    }
public function index() {
    $data = array();
    $data['active'] = "exam_grade";
    $data['title'] = "Grade"; 
    $org_id = org_id();
    $active_branch_id = active_branch_id();

  
    
    $total_rows = $this->exam_model->count_exam_grade($org_id, $active_branch_id);

    $this->pagination->initialize([
        "total_rows" => $total_rows,
        "per_page"   => 10,
        "action"     => base_url("exam/grade/index"),
        "page_field" => "page",
        "label"      => "Exam Grade",
    ]);
    $pagination = $this->pagination->get_data();

    $data["exams"] = $this->exam_model->get_exams_grade(
        $org_id, 
        $active_branch_id, 
        $pagination["per_page"], 
        $pagination["offset"]
    );
    
    $data = array_merge($data, $pagination);


    $data['content'] = $this->load->view("grade/index", $data, TRUE);
    $this->load->view('layout/master', $data);
}


}