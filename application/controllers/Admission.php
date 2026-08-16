<?php
class Admission extends CI_Controller
{
  public function __construct() {
        parent::__construct();
    }

public function index()
{


    $data = array();
    $data['active'] = "admission";
    $data['title'] = "Admission"; 
    $data['content'] = $this->load->view("frontend/admission/index", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}
public function calendar()
{


    $data = array();
    $data['active'] = "academic-calendar";
    $data['title'] = "Academic Calendar"; 
    $data['content'] = $this->load->view("frontend/admission/calendar", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}
}