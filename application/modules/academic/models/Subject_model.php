<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_model extends CI_Model {

 public function count_subject($organization_id, $branch_id, $search = null) {
        $this->db->where('organization_id', (int) $organization_id);
        $this->db->where('branch_id', (int) $branch_id);
        
        if (!empty($search)) {
            $this->db->like('name', $search);
        }
        
        return $this->db->count_all_results("subjects");
    }

  public function get_subject($organization_id, $branch_id, $limit, $offset) {
    $this->db->select('subjects.*');
    $this->db->from('subjects');
    $this->db->where('subjects.organization_id', (int) $organization_id);
    $this->db->where('subjects.branch_id', (int) $branch_id);

    $this->db->group_by('subjects.id');
    $this->db->order_by('subjects.id', 'DESC');
    $this->db->limit((int) $limit, (int) $offset);
    
    return $this->db->get()->result();
}
}