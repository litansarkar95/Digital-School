<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubjectGroup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Subject_group_model');
    }

    public function create() {
        $data = array();
        $data['active'] = "subjectGroup";
        $data['title'] = "subjectGroup"; 
        $org_id = org_id();
        $active_branch_id = active_branch_id();
        $data['groups']   = $this->Subject_group_model->get_all_groups();
        $data['subjects'] = $this->Subject_group_model->get_all_subjects();
        $data['classes']  = $this->Subject_group_model->get_all_classes(); 
        
       $data['content'] = $this->load->view("academic/subject_group/create", $data, TRUE);
       $this->load->view('layout/master', $data);
       
    }

    public function insert() {
        $this->form_validation->set_rules('name', 'Group Name', 'trim|required');
        $this->form_validation->set_rules('class_id', 'Class', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
           
            $group_data = array(
                'organization_id' => 1, // session থেকে নিবেন
                'branch_id'       => 1, // session থেকে নিবেন
                'name'            => $this->input->post('name', true),
                'description'     => $this->input->post('description', true),
                'session_id'      => $this->input->post('session_id', 1)
            );
            $group_id = $this->Subject_group_model->save_group($group_data);

            // ২. সাবজেক্ট ম্যাপিং সেভ করা (subject_group_subjects)
            $subject_ids = $this->input->post('subject_ids');
            if (!empty($subject_ids) && $group_id) {
                foreach ($subject_ids as $sub_id) {
                    $sub_mapping = array(
                        'organization_id'  => 1,
                        'branch_id'        => 1,
                        'subject_group_id' => $group_id,
                        'subject_id'       => $sub_id,
                        'session_id'       => $this->input->post('session_id', 1)
                    );
                    $this->Subject_group_model->save_group_subject($sub_mapping);
                }
            }

         
            $class_id = $this->input->post('class_id');
            $class_section_id = $this->input->post('section_ids');
            
            if (!empty($class_section_id) && $group_id) {
                foreach ($class_section_id as $section_id) {

                $class_mapping = array(
                    'organization_id'   => 1,
                    'branch_id'         => 1,
                    'subject_group_id'  => $group_id,
                    'class_id'           => $class_id,
                    'section_id'         => $section_id,
                    'session_id'        => $this->input->post('session_id', 1),
                    'is_active'         => 1
                );
                $this->Subject_group_model->save_group_class_section($class_mapping);
            }
}
            $this->session->set_flashdata('success', 'Subject Group, Subjects & Class assigned successfully!');
            redirect('subjectgroup');
        }
    }
}