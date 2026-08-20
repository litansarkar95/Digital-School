<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Exam_model extends CI_Model
{
   
    public function get_active_exam($organization_id, $branch_id)
{
    $this->db->select('exam.*');
    $this->db->from('exam');
    $this->db->where('organization_id', (int) $organization_id);
    $this->db->where('branch_id', (int) $branch_id);
    $this->db->where('status', 1);
    $this->db->order_by('name', 'ASC');
    $query = $this->db->get();
    return $query->result();
}
public function count_exams($org_id, $branch_id, $search = null, $sessionyear = null, $status = null) {
        $this->db->from('exam');
        $this->db->where('organization_id', $org_id);
        
        if (!empty($branch_id)) {
            $this->db->where('branch_id', $branch_id);
        }
        if (!empty($search)) {
            $this->db->like('exam', $search);
        }

        if (!empty($sessionyear)) {
            $this->db->where('sessionyearID', $sessionyear);
        }

        if ($status !== null && $status !== '') {
            $this->db->where('status', $status);
        }

        return $this->db->count_all_results();
    }

    public function get_exams($org_id, $branch_id, $limit, $start, $search = null, $sessionyear = null, $status = null) {
        $this->db->select('*');
        $this->db->from('exam');
        $this->db->where('organization_id', $org_id);
        
        if (!empty($branch_id)) {
            $this->db->where('branch_id', $branch_id);
        }

        if (!empty($search)) {
            $this->db->like('name', $search);
        }

        if (!empty($sessionyear)) {
            $this->db->where('sessionyearID', $sessionyear);
        }

        if ($status !== null && $status !== '') {
            $this->db->where('status', $status);
        }
        $this->db->order_by('sortOrder', 'ASC');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit, $start);

        $query = $this->db->get();
        return $query->result();
    }

public function count_exam_grade($org_id, $branch_id) {
        $this->db->from('grade');
        $this->db->where('organization_id', $org_id);
        
        if (!empty($branch_id)) {
            $this->db->where('branch_id', $branch_id);
        }
       
        return $this->db->count_all_results();
    }

       public function get_exams_grade($org_id, $branch_id, $limit, $start) {
        $this->db->select('*');
        $this->db->from('grade');
        $this->db->where('organization_id', $org_id);
        
        if (!empty($branch_id)) {
            $this->db->where('branch_id', $branch_id);
        }

        $this->db->order_by('sortOrder', 'ASC');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit, $start);

        $query = $this->db->get();
        return $query->result();
    }
}
