<?php
class Classes extends CI_Controller
{
  public function __construct() {
        parent::__construct();
  $this->load->model(['classes_model', 'section_model']); 
    }
  

public function index()
{

    $data = array();
    $data['active'] = "classess";
    $data['title'] = "Classes"; 
    $org_id = org_id();
    $active_branch_id = active_branch_id();

    $search = $this->input->get('search', TRUE);
    $status = $this->input->get('status', TRUE);
    $total_rows = $this->classes_model->count_classes($org_id, $active_branch_id, $search);

     $this->pagination->initialize([
            "total_rows" => $total_rows,
            "per_page" => 10,
            "action" => base_url("academic/classes"),
            "page_field" => "page",
            "label" => "Class ",
        ]);
        $pagination = $this->pagination->get_data();



    $data["classes"] = $this->classes_model->get_classes($org_id, $active_branch_id,  $pagination["per_page"],
    $pagination["offset"], $search, $status);
        $data = array_merge($data, $pagination);
        $data["sections"] = $this->section_model->get_active_sections($org_id, $active_branch_id);


   $data['content'] = $this->load->view("academic/classes/index", $data, TRUE);
   $this->load->view('layout/master', $data);

}

public function create()
{

    $data = array();
    $data['active'] = "classess";
    $data['title'] = "Classes"; 
    $org_id = org_id();
    $active_branch_id = active_branch_id();
   
   $data['sections'] =  $this->section_model->get_active_sections( $org_id,$active_branch_id);

   $data['content'] = $this->load->view("academic/classes/create", $data, TRUE);
   $this->load->view('layout/master', $data);

}
public function store() {
        $this->form_validation->set_rules('class', 'Class Name', 'required|trim|max_length[60]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
           redirect(base_url() . "academic/classes/create", "refresh");
        } else {
            $org_id = org_id();
            $active_branch_id = active_branch_id();
            $class_data = [
                'organization_id' => $org_id,
                'branch_id'       => $active_branch_id,
                'class'           => $this->input->post('class', TRUE),
                'is_active'       => $this->input->post('status') !== null ? (int) $this->input->post('status') : 1
            ];

            $section_ids = $this->input->post('section_id');
            $insert = $this->classes_model->insert_class_with_sections($class_data, $section_ids);

            if ($insert) {
                $this->session->set_flashdata('success', 'Class created and sections assigned successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to create class. Please try again.');
            }
            redirect(base_url() . "academic/classes/create", "refresh");
         
        }
    }
    public function edit($id) {
        $organization_id = (int) $this->session->userdata("loggedin_org_id");
        $branch_id = (int) $this->session->userdata("active_branch_id");

        $data['class'] = $this->classes_model->get_class_by_id($id);
        if (empty($data['class'])) {
            $this->session->set_flashdata('error', 'Class not found!');
            redirect('academic/classes');
        }

        $data['active'] = "classess";
        $data['title'] = "Edit Classes"; 
        $data['sections'] = $this->section_model->get_active_sections($organization_id, $branch_id);
        $data['assigned_sections'] = $this->classes_model->get_assigned_section_ids($id);

        $data["content"] = $this->load->view("academic/classes/edit", $data, true);
        $this->load->view("layout/master", $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('class', 'Class Name', 'required|trim|max_length[60]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('academic/classes/edit/' . $id);
        } else {
            $organization_id = (int) $this->session->userdata("loggedin_org_id");
            $branch_id = (int) $this->session->userdata("active_branch_id");

            $class_data = [
                'organization_id' => $organization_id,
                'branch_id'       => $branch_id,
                'class'           => $this->input->post('class', TRUE),
                'is_active'       => $this->input->post('status') !== null ? (int) $this->input->post('status') : 1
            ];

            $section_ids = $this->input->post('section_id');

            $update = $this->classes_model->update_class_with_sections($id, $class_data, $section_ids);

            if ($update) {
                $this->session->set_flashdata('success', 'Class updated successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to update class.');
            }

           redirect(base_url() . "academic/classes", "refresh");
        }
    }

    public function delete($id) {
        $delete = $this->classes_model->delete_class($id);
        if ($delete) {
            $this->session->set_flashdata('success', 'Class deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete class.');
        }
       redirect(base_url() . "academic/classes", "refresh");
    }
}


