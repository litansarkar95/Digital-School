<?php
class Home extends CI_Controller
{
  public function __construct() {
        parent::__construct();
    }

public function index()
{


    $data = array();
    $data['active'] = "home";
    $data['title'] = "গ্রীনফিল্ড স্কুল"; 
    $data['content'] = $this->load->view("frontend/home/index", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}

public function staffs()
{

    $data = array();
    $data['active'] = "home";
    $data['title'] = "গ্রীনফিল্ড স্কুল"; 
    $data['content'] = $this->load->view("frontend/home/staff-list", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}

public function gallery()
{

    $data = array();
    $data['active'] = "gallery";
    $data['title'] = "Gallery"; 
    $data['content'] = $this->load->view("frontend/home/gallery-list", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}
}


