<?php
class About extends CI_Controller
{
  public function __construct() {
        parent::__construct();
    }

public function index()
{


    $data = array();
    $data['active'] = "about";
    $data['title'] = "About Us"; 
    $data['content'] = $this->load->view("frontend/about/index", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}

public function messages()
{


    $data = array();
    $data['active'] = "messages";
    $data['title'] = "Messages"; 
    $data['content'] = $this->load->view("frontend/about/messages", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}
}