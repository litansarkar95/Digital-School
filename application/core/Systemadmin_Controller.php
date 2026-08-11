<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Systemadmin_Controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

       
        if (!$this->session->userdata('loggedin')) {
            redirect(base_url('login'));
        }

        if ($this->session->userdata('loggedin_role_id')!=1 ) {
            
                $this->session->set_flashdata('error', 'Please select a branch first to continue.');
                redirect(base_url() . "dashboard", "refresh");
           
        }
    }
}