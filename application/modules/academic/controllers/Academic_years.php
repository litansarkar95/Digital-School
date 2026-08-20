<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_years extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('academic_year_model');
    }
 public function index() {
        $data = array();
        $data['active'] = "academic_years";
        $data['title'] = "Academic Years"; 
        
        $organization_id = (int) $this->session->userdata("loggedin_org_id");
        $branch_id = (int) $this->session->userdata("active_branch_id");

        $total_rows = $this->academic_year_model->count_academic_years($organization_id, $branch_id);

        $this->pagination->initialize([
            "total_rows" => $total_rows,
            "per_page" => 10,
            "base_url" => base_url("academic/academic_years"), 
            "page_query_string" => TRUE,
            "page_field" => "page",
            "label" => "academic years",
        ]);
        $pagination = $this->pagination->get_data();

        $offset = isset($pagination["offset"]) ? $pagination["offset"] : 0;

        $data["academic_years"] = $this->academic_year_model->get_academic_years(
            $organization_id,
            $branch_id,
            $pagination["per_page"],
            $offset
        );
        
        $data = array_merge($data, $pagination);
        $data['start'] = $offset + 1;
        $data['end'] = min($offset + $pagination["per_page"], $total_rows);
        $data['total_rows'] = $total_rows;
        $data['label'] = "academic years";

        $data["content"] = $this->load->view("academic/academic_years/index", $data, true);
        $this->load->view("layout/master", $data);
    }
    public function create() {
        $data = array();
        $data['active'] = "academic_years";
        $data['title'] = "Academic Years"; 
        
        $organization_id = (int) $this->session->userdata("loggedin_org_id");
        $branch_id = (int) $this->session->userdata("active_branch_id");


        $data["content"] = $this->load->view("academic/academic_years/create", $data, true);
        $this->load->view("layout/master", $data);
    }

    public function insert() {
        $organization_id = (int) $this->session->userdata("loggedin_org_id");
        $branch_id = (int) $this->session->userdata("active_branch_id");

        $is_current = $this->input->post('is_current') ? 1 : 0;

        if ($is_current === 1) {
            $this->academic_year_model->unset_current_years($organization_id, $branch_id);
        }

        $data = array(
            'organization_id' => $organization_id,
            'branch_id'       => $branch_id > 0 ? $branch_id : NULL,
            'year_name'       => $this->input->post('year_name', TRUE),
            'start_date'      => strtotime($this->input->post('start_date', TRUE)),
            'end_date'        => strtotime($this->input->post('end_date', TRUE)),
            'is_current'      => $is_current,
            'status'          => $this->input->post('status', TRUE)
        );

        if ($this->academic_year_model->insert_academic_year($data)) {
            $this->session->set_flashdata('success', 'Academic Year created successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to create academic year.');
        }

        redirect('academic/academic_years');
    }

    public function update($id) {
        $organization_id = (int) $this->session->userdata("loggedin_org_id");
        $branch_id = (int) $this->session->userdata("active_branch_id");

        $is_current = $this->input->post('is_current') ? 1 : 0;

        if ($is_current === 1) {
            $this->academic_year_model->unset_current_years($organization_id, $branch_id);
        }

        $data = array(
            'year_name'  => $this->input->post('year_name', TRUE),
            'start_date' => strtotime($this->input->post('start_date', TRUE)),
            'end_date'   => strtotime($this->input->post('end_date', TRUE)),
            'is_current' => $is_current,
            'status'     => $this->input->post('status', TRUE)
        );

        if ($this->academic_year_model->update_academic_year($id, $organization_id, $data)) {
            $this->session->set_flashdata('success', 'Academic Year updated successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to update academic year.');
        }

        redirect('academic/academic_years');
    }

    public function delete($id) {
        $organization_id = (int) $this->session->userdata("loggedin_org_id");

        if ($this->academic_year_model->delete_academic_year($id, $organization_id)) {
            $this->session->set_flashdata('success', 'Academic Year deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete academic year.');
        }

        redirect('academic/academic_years');
    }
}