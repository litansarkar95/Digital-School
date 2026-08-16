<?php
class Exam extends CI_Controller
{
  public function __construct() {
        parent::__construct();
    }

public function exam_routine()
{


    $data = array();
    $data['active'] = "exam_routine";
    $data['title'] = "Exam Routine"; 
    $data['content'] = $this->load->view("frontend/routine/exam_routine", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}

public function class_routine()
{


    $data = array();
    $data['active'] = "class_routine";
    $data['title'] = "Class Routine"; 
    $data['content'] = $this->load->view("frontend/routine/class_routine", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}
public function result()
{


    $data = array();
    $data['active'] = "result";
    $data['title'] = "Result"; 
    $data['content'] = $this->load->view("frontend/result/index", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}
}