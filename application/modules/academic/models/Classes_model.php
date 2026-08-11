<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes_model extends CI_Model {

    protected $table = 'classes';
    protected $table_class_sections = 'class_sections';

    public function count_classes($organization_id, $branch_id, $search = null) {
        $this->db->where('organization_id', (int) $organization_id);
        $this->db->where('branch_id', (int) $branch_id);
        
        if (!empty($search)) {
            $this->db->like('class', $search);
        }
        
        return $this->db->count_all_results($this->table);
    }

  public function get_classes($organization_id, $branch_id, $limit, $offset, $search = null, $status = null) {
    $this->db->select('c.id, c.organization_id, c.branch_id, c.class, c.is_active, c.created_at, c.updated_at, 
                       GROUP_CONCAT(s.section SEPARATOR ", ") as sections');
    $this->db->from('classes c');
    $this->db->join('class_sections cs', 'cs.class_id = c.id', 'left');
    $this->db->join('sections s', 's.id = cs.section_id', 'left');
    $this->db->where('c.organization_id', (int) $organization_id);
    $this->db->where('c.branch_id', (int) $branch_id);

    if (!empty($search)) {
        $this->db->like('c.class', $search);
    }

    if ($status !== null && $status !== '') {
        $this->db->where('c.is_active', (int) $status);
    }

    $this->db->group_by('c.id');
    $this->db->order_by('c.id', 'DESC');
   $this->db->order_by('GROUP_CONCAT(s.section)', 'ASC', FALSE);
    $this->db->limit((int) $limit, (int) $offset);
    
    return $this->db->get()->result();
}
    public function insert_class_with_sections($class_data, $section_ids) {
        $this->db->trans_start();

        $this->db->insert($this->table, $class_data);
        $class_id = $this->db->insert_id();

        if (!empty($section_ids) && is_array($section_ids)) {
            $batch_data = [];
            foreach ($section_ids as $section_id) {
                $batch_data[] = [
                    'organization_id' => $class_data['organization_id'],
                    'branch_id'       => $class_data['branch_id'],
                    'class_id'        => $class_id,
                    'section_id'      => (int) $section_id,
                    'is_active'       => 1
                ];
            }

            if (!empty($batch_data)) {
                $this->db->insert_batch($this->table_class_sections, $batch_data);
            }
        }

        $this->db->trans_complete();
        return $this->db->trans_status();
    }
    public function get_class_by_id($id) {
        return $this->db->get_where($this->table, ['id' => (int) $id])->row();
    }

    public function get_assigned_section_ids($class_id) {
        $query = $this->db->select('section_id')
                          ->from($this->table_class_sections)
                          ->where('class_id', (int) $class_id)
                          ->get()
                          ->result();
        $ids = [];
        foreach ($query as $row) {
            $ids[] = (int) $row->section_id;
        }
        return $ids;
    }
    public function update_class_with_sections($class_id, $class_data, $section_ids) {
        $this->db->trans_start();

        $this->db->where('id', (int) $class_id);
        $this->db->update($this->table, $class_data);

        $this->db->where('class_id', (int) $class_id);
        $this->db->delete($this->table_class_sections);

        if (!empty($section_ids) && is_array($section_ids)) {
            $batch_data = [];
            foreach ($section_ids as $section_id) {
                $batch_data[] = [
                    'organization_id' => $class_data['organization_id'],
                    'branch_id'       => $class_data['branch_id'],
                    'class_id'        => $class_id,
                    'section_id'      => (int) $section_id,
                    'is_active'       => 1
                ];
            }
            if (!empty($batch_data)) {
                $this->db->insert_batch($this->table_class_sections, $batch_data);
            }
        }

        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    public function delete_class($id) {
        $this->db->trans_start();

        $this->db->where('class_id', (int) $id);
        $this->db->delete($this->table_class_sections);

        $this->db->where('id', (int) $id);
        $this->db->delete($this->table);

        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}