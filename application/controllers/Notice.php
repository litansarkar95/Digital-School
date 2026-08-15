<?php
class Notice extends CI_Controller
{
  public function __construct() {
        parent::__construct();
    }

public function index()
{


    $data = array();
    $data['active'] = "notice";
    $data['title'] = "Notice"; 
    $data['content'] = $this->load->view("frontend/notice/index", $data, TRUE);
    $this->load->view('frontend/layout/master', $data);

}
}


