<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_group_model extends CI_Model {

    public function save_group($data) {
        $this->db->insert('subject_groups', $data);
        return $this->db->insert_id();
    }

    public function get_all_groups() {
        return $this->db->get('subject_groups')->result();
    }

    public function save_group_subject($data) {
        return $this->db->insert('subject_group_subjects', $data);
    }

    public function save_group_class_section($data) {
        return $this->db->insert('subject_group_class_sections', $data);
    }

    public function get_all_subjects() {
        return $this->db->get('subjects')->result();
    }

    public function get_all_classes() {
        return $this->db->get('classes')->result(); 
    }
}