<?php
class Contact extends CI_Controller
{
  public function __construct() {
        parent::__construct();
    }

public function index()
{


    $data = array();
    $data['active'] = "Contact";
    $data['title'] = "গ্রীনফিল্ড স্কুল"; 
    $data['content'] = $this->load->view("frontend/contact/index", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}

}