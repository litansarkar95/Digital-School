<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

       
        if (!$this->session->userdata('loggedin')) {
            redirect(base_url('login'));
        }

        $needs_select  = $this->session->userdata('needs_branch_select'); 
        $active_branch = $this->session->userdata('active_branch_id');

        
        $current_class  = $this->router->fetch_class();
        $current_method = $this->router->fetch_method();

    
        if ($needs_select && ($active_branch == 0 || $active_branch == NULL)) {
            
          
            $allowed_classes = array('dashboard'); 
            $allowed_methods = array('index', 'update_active_branch');

            if (!in_array($current_class, $allowed_classes) || !in_array($current_method, $allowed_methods)) {
                $this->session->set_flashdata('error', 'Please select a branch first to continue.');
                redirect(base_url() . "dashboard", "refresh");
            }
        }
    }
}