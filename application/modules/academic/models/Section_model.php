<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Section_model extends CI_Model
{
    protected $table = "sections";


    public function count_sections($organization_id, $branch_id)
    {
        return $this->db

            ->where("organization_id", (int) $organization_id)

            ->where("branch_id", (int) $branch_id)

            ->count_all_results($this->table);
    }

    public function get_sections($organization_id, $branch_id, $limit, $offset)
    {
        return $this->db

            ->select(
                'id,
                 organization_id,
                 branch_id,
                 section,
                 is_active,
                 created_at,
                 updated_at'
            )

            ->from($this->table)

            ->where("organization_id", (int) $organization_id)

            ->where("branch_id", (int) $branch_id)

            ->order_by("id", "DESC")

            ->limit((int) $limit, (int) $offset)

            ->get()

            ->result();
    }


    public function get_section($id, $organization_id, $branch_id)
    {
        return $this->db

            ->where("id", (int) $id)

            ->where("organization_id", (int) $organization_id)

            ->where("branch_id", (int) $branch_id)

            ->get($this->table)

            ->row();
    }

   

    public function insert_section($data)
    {
        return $this->db->insert($this->table, $data);
    }

    
    public function delete_section($id, $organization_id, $branch_id)
    {
        return $this->db

            ->where("id", (int) $id)

            ->where("organization_id", (int) $organization_id)

            ->where("branch_id", (int) $branch_id)

            ->delete($this->table);
    }
    public function get_active_sections($organization_id, $branch_id)
{
    $this->db->select('id, organization_id, branch_id, section, is_active, created_at, updated_at');
    $this->db->from($this->table);
    $this->db->where('organization_id', (int) $organization_id);
    $this->db->where('branch_id', (int) $branch_id);
    $this->db->where('is_active', 1);
    $this->db->order_by('section', 'ASC');
    
    $query = $this->db->get();
    
    return $query->result();
}
}
