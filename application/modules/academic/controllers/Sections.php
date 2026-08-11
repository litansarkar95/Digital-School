<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Sections extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("Section_model");
    }
    public function index()
    {
            $data = array();
            $data['active'] = "sections";
            $data['title'] = "Sections"; 
        $organization_id = (int) $this->session->userdata("loggedin_org_id");

        $branch_id = (int) $this->session->userdata("active_branch_id");

     

        $total_rows = $this->Section_model->count_sections( $organization_id,$branch_id);

        $this->pagination->initialize([
            "total_rows" => $total_rows,
            "per_page" => 10,
            "action" => base_url("academic/sections"),
            "page_field" => "page",
            "label" => "sections",
        ]);
        $pagination = $this->pagination->get_data();

        $data["sections"] = $this->Section_model->get_sections(
            $organization_id,
            $branch_id,
            $pagination["per_page"],
            $pagination["offset"]
        );
        $data = array_merge($data, $pagination);

        $data["content"] = $this->load->view("academic/sections/index", $data, true);
        $this->load->view("layout/master", $data);
    }


    public function add()
    {
        $organization_id = (int) $this->session->userdata("organization_id");

        $branch_id = (int) $this->session->userdata("branch_id");

        $section = trim($this->input->post("section", true));

        if ($section === "") {
            $this->session->set_flashdata("error", "Section name is required.");

            redirect("sections");

            return;
        }

        /*
        |--------------------------------------------------------------------------
        | Duplicate Check
        |--------------------------------------------------------------------------
        */

        $exists = $this->db

            ->where("organization_id", $organization_id)

            ->where("branch_id", $branch_id)

            ->where("section", $section)

            ->count_all_results("sections");

        if ($exists > 0) {
            $this->session->set_flashdata(
                "error",
                "This section already exists."
            );

            redirect("sections");

            return;
        }

        /*
        |--------------------------------------------------------------------------
        | Insert
        |--------------------------------------------------------------------------
        */

        $inserted = $this->Section_model->insert_section([
            "organization_id" => $organization_id,

            "branch_id" => $branch_id,

            "section" => $section,

            "is_active" => 1,
        ]);

        if ($inserted) {
            $this->session->set_flashdata(
                "success",
                "Section added successfully."
            );
        } else {
            $this->session->set_flashdata("error", "Unable to add section.");
        }

        redirect("sections");
    }

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit()
    {
        $organization_id = (int) $this->session->userdata("organization_id");

        $branch_id = (int) $this->session->userdata("branch_id");

        $id = (int) $this->input->post("id");

        $section = trim($this->input->post("section", true));

        $is_active = (int) $this->input->post("is_active");

        if ($id <= 0 || $section === "") {
            $this->session->set_flashdata(
                "error",
                "Invalid section information."
            );

            redirect("sections");

            return;
        }

        $is_active = $is_active === 1 ? 1 : 0;

        $updated = $this->Section_model->update_section(
            $id,
            $organization_id,
            $branch_id,
            [
                "section" => $section,

                "is_active" => $is_active,
            ]
        );

        if ($updated) {
            $this->session->set_flashdata(
                "success",
                "Section updated successfully."
            );
        } else {
            $this->session->set_flashdata("error", "Unable to update section.");
        }

        redirect("sections");
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function delete($id)
    {
        $organization_id = (int) $this->session->userdata("loggedin_org_id");
        $branch_id = (int) $this->session->userdata("active_branch_id");


        if ($id <= 0) {
            $this->session->set_flashdata("error", "Invalid section.");
            redirect(base_url() . "academic/sections", "refresh");
            return;
        }

        $deleted = $this->Section_model->delete_section(
            $id,
            $organization_id,
            $branch_id
        );

        if ($deleted) {
            $this->session->set_flashdata(
                "success",
                "Section deleted successfully."
            );
        } else {
            $this->session->set_flashdata("error", "Unable to delete section.");
        }

        redirect(base_url() . "academic/sections", "refresh");
    }
}
