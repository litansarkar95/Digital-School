<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_year_model extends CI_Model {

    protected $table = 'academic_years';

    public function count_academic_years($organization_id, $branch_id = null) {
        $this->db->where('organization_id', $organization_id);
        if ($branch_id) {
            $this->db->where('branch_id', $branch_id);
        }
        return $this->db->count_all_results($this->table);
    }

    public function get_academic_years($organization_id, $branch_id = null, $limit = 10, $offset = 0) {
        $this->db->where('organization_id', $organization_id);
        if ($branch_id) {
            $this->db->where('branch_id', $branch_id);
        }
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit, $offset);
        return $this->db->get($this->table)->result();
    }

    public function insert_academic_year($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update_academic_year($id, $organization_id, $data) {
        $this->db->where('id', $id);
        $this->db->where('organization_id', $organization_id);
        return $this->db->update($this->table, $data);
    }

    public function delete_academic_year($id, $organization_id) {
        $this->db->where('id', $id);
        $this->db->where('organization_id', $organization_id);
        return $this->db->delete($this->table);
    }

    public function unset_current_years($organization_id, $branch_id = null) {
        $this->db->where('organization_id', $organization_id);
        if ($branch_id) {
            $this->db->where('branch_id', $branch_id);
        }
        return $this->db->update($this->table, ['is_current' => 0]);
    }
}