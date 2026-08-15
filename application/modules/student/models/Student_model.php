<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Student_model extends CI_Model
{
   
    public function get_active_classes($organization_id, $branch_id)
{
    $this->db->select('classes.*');
    $this->db->from('classes');
    $this->db->where('organization_id', (int) $organization_id);
    $this->db->where('branch_id', (int) $branch_id);
    $this->db->where('is_active', 1);
    $this->db->order_by('class', 'ASC');
    $query = $this->db->get();
    return $query->result();
}
public function get_active_academic_years($organization_id, $branch_id = null)
{
    $this->db->select('academic_years.*');
    $this->db->from('academic_years');
    $this->db->where('organization_id', (int) $organization_id);
    
    if (!empty($branch_id)) {
        $this->db->where('branch_id', (int) $branch_id);
    }
    
    $this->db->where('status', 'active');
    $this->db->order_by('year_name', 'DESC');
    $query = $this->db->get();
    return $query->result();
}
public function get_student_by_id($student_id) {
    $this->db->select('students.*, guardians.*, student_sessions.academic_year_id, student_sessions.class_id, student_sessions.section_id, student_sessions.roll_no, guardians.id as guardian_id');
    $this->db->from('students');
    $this->db->join('guardians', 'students.guardian_id = guardians.id');
    $this->db->join('student_sessions', 'student_sessions.student_id = students.id');
    $this->db->where('students.id', (int) $student_id);
    return $this->db->get()->row();
}

public function count_students($org_id, $branch_id, $search = null, $class_id = null, $section_id = null, $status = null) {
    $this->db->from('students');
    $this->db->join('student_sessions', 'student_sessions.student_id = students.id', 'left');
    
    $this->db->where('students.organization_id', $org_id);
    $this->db->where('students.branch_id', $branch_id);

    if (!empty($search)) {
        $this->db->group_start();
        $this->db->like('students.firstname', $search);
        $this->db->or_like('students.lastname', $search);
        $this->db->or_like('students.admission_no', $search);
        $this->db->group_end();
    }

    if (!empty($class_id)) {
        $this->db->where('student_sessions.class_id', $class_id);
    }

    if (!empty($section_id)) {
        $this->db->where('student_sessions.section_id', $section_id);
    }

    if ($status !== null && $status !== '') {
        $this->db->where('students.is_active', $status);
    }

    return $this->db->count_all_results();
}

public function get_students($org_id, $branch_id, $limit, $start, $search = null, $class_id = null, $section_id = null, $status = null) {
    $this->db->select('students.*, guardians.father_name, guardians.father_phone, guardians.guardian_name, guardians.guardian_phone, classes.class as class_name, sections.section as section_name');
    $this->db->from('students');
    $this->db->join('guardians', 'guardians.id = students.guardian_id', 'left');
    $this->db->join('student_sessions', 'student_sessions.student_id = students.id', 'left');
    $this->db->join('classes', 'classes.id = student_sessions.class_id', 'left');
    $this->db->join('sections', 'sections.id = student_sessions.section_id', 'left');
    
    $this->db->where('students.organization_id', $org_id);
    $this->db->where('students.branch_id', $branch_id);

    if (!empty($search)) {
        $this->db->group_start();
        $this->db->like('students.firstname', $search);
        $this->db->or_like('students.lastname', $search);
        $this->db->or_like('students.admission_no', $search);
        $this->db->group_end();
    }

    if (!empty($class_id)) {
        $this->db->where('student_sessions.class_id', $class_id);
    }

    if (!empty($section_id)) {
        $this->db->where('student_sessions.section_id', $section_id);
    }

    if ($status !== null && $status !== '') {
        $this->db->where('students.is_active', $status);
    }

    $this->db->limit($limit, $start);
    $this->db->order_by('students.id', 'DESC');
    return $this->db->get()->result();
}
}
