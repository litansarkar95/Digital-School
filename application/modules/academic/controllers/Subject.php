<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('subject_model');
    }

 
 public function index()
{

    $data = array();
    $data['active'] = "subject";
    $data['title'] = "Subject"; 
    $org_id = org_id();
    $active_branch_id = active_branch_id();

    $search = $this->input->get('search', TRUE);
    $status = $this->input->get('status', TRUE);
    $total_rows = $this->subject_model->count_subject($org_id, $active_branch_id, $search);

     $this->pagination->initialize([
            "total_rows" => $total_rows,
            "per_page" => 10,
            "action" => base_url("academic/subject"),
            "page_field" => "page",
            "label" => "Class ",
        ]);
        $pagination = $this->pagination->get_data();



    $data["subject"] = $this->subject_model->get_subject($org_id, $active_branch_id,  $pagination["per_page"],
    $pagination["offset"]);
        $data = array_merge($data, $pagination);
       


   $data['content'] = $this->load->view("subject/index", $data, TRUE);
   $this->load->view('layout/master', $data);

}

    public function create() {
    $data = array();
    $data['active'] = "subject";
    $data['title'] = "Subject"; 
    $org_id = org_id();
    $active_branch_id = active_branch_id();

    $data['content'] = $this->load->view("subject/create", $data, TRUE);
    $this->load->view('layout/master', $data);

    }
  
    public function insert() {
        $this->form_validation->set_rules('name', 'Subject Name', 'trim|required');
        $this->form_validation->set_rules('code', 'Subject Code', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'organization_id' => org_id(),
                'branch_id'       => active_branch_id(),
                'name'            => $this->input->post('name', true),
                'code'            => $this->input->post('code', true),
                'type'            => $this->input->post('type', true),
                'is_active'       => $this->input->post('is_active', true),
                'sortOrder'       => $this->input->post('sortOrder'),
                'created_at'      => time(),
            );
              if ($this->common_model->save_data("subjects", $data)) {
                $this->session->set_flashdata('success', 'Subject added successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to create class. Please try again.');
            }
            redirect(base_url() . "academic/subject/create", "refresh");

          
        }
    }

 
    public function edit($id) {
        $data['subject'] = $this->Subject_model->get_subject_by_id($id);
        if (empty($data['subject'])) {
            show_404();
        }
        $this->load->view('subject/edit', $data);
    }

   
    public function update($id) {
        $this->form_validation->set_rules('name', 'Subject Name', 'trim|required');
        $this->form_validation->set_rules('code', 'Subject Code', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = array(
                'name'      => $this->input->post('name', true),
                'code'      => $this->input->post('code', true),
                'type'      => $this->input->post('type', true),
                'is_active' => $this->input->post('is_active', true),
            );
            $this->Subject_model->update_subject($id, $data);
            $this->session->set_flashdata('success', 'Subject updated successfully!');
            redirect('subject');
        }
    }


    public function delete($id) {
        $this->Subject_model->delete_subject($id);
        $this->session->set_flashdata('success', 'Subject deleted successfully!');
        redirect('subject');
    }
}