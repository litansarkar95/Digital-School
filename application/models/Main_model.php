<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

         /*invoice no generator*/
         public function Roles()
    {
    
        $this->db->select("roles.*");           
        $this->db->from("roles");
        $this->db->where("roles.is_admin_system", 1);
        $this->db->order_by("roles.name", "ASC");
        return $this->db->get()->result(); 
    }

    public function getRecordsByOrg($table, $id = NULL)
{

    if (!active_branch_id()) {
        return []; 
    }

    $this->db->select("$table.* , branch.name branch");
    $this->db->from($table);
    $this->db->where("$table.branch_id", active_branch_id());
    $this->db->join('branch', "branch.id = $table.branch_id", 'left');
    $this->db->where_in("$table.branch_id", active_branch_id());
  

    if (!empty($id)) {
        $this->db->where("$table.id", $id);
    }

    $this->db->order_by("$table.id", "DESC");
    $query = $this->db->get();
    return ($id) ? $query->row() : $query->result();
}

 public function generate_invoice_no($table,$branch_id)
    {

        $year  = date('y'); // 26
        $month = date('m'); // 01

        $prefix = $year . $month; // 2601

       
        $this->db->select('code_random');
        $this->db->from($table);
        $this->db->where('branch_id', $branch_id);
        $this->db->like('code_random', $prefix, 'after');
        $this->db->order_by('code_random', 'DESC');
        $this->db->limit(1);

        $row = $this->db->get()->row();

        if ($row) {
          
            $last_serial = (int) substr($row->code_random, -3);
            $new_serial  = $last_serial + 1;
        } else {
            $new_serial = 1;
        }

  
        $serial = str_pad($new_serial, 3, '0', STR_PAD_LEFT);

        return $prefix . $serial;
    }

    public function get_invoice_head($table,$id)
{
    
    $sales_id = $this->idcrypt->decrypt($id);
    $this->db->select('
        branch.name,
        branch.address,
        branch.mobile_no,
        branch.email,
        branch.picture
    ');
    $this->db->from($table);
    $this->db->join('branch', "branch.id = $table.branch_id", 'left');
    $this->db->where("$table.id", $sales_id);

    return $this->db->get()->row();
}
    public function get_branch_by_branch_id($id)
{
    
   
    $this->db->select('
        branch.*
    ');
    $this->db->from("branch");
    $this->db->where("branch.id", $id);

    return $this->db->get()->row();
}
public function get_invoice_id_head($table,$id)
{
    $id;

    $this->db->select('
        branch.name,
        branch.address,
        branch.mobile_no,
        branch.picture, branch.email,
        branch.signature
    ');
    $this->db->from($table);
    $this->db->join('branch', "branch.id = $table.branch_id", 'left');
    $this->db->where("$table.id", $id);

    return $this->db->get()->row();
}
 public function get_staff_by_create_user($create_user)
    {
        $this->db->select('
            staff.first_name,
            staff.last_name,
            staff.contact_no
        ');
        $this->db->from('login_credential');
        $this->db->join(
            'staff',
            'staff.id = login_credential.user_id',
            'left'
        );
        $this->db->where('login_credential.id', $create_user);

        return $this->db->get()->row();
    }


    public function get_data_by_id($table, $id) {
   
    $this->db->where('id', $id);
    $this->db->where("$table.branch_id", branch_id());
    $query = $this->db->get($table);
    

    if ($query->num_rows() > 0) {
        return $query->row(); 
    } else {
        return false;
    }
}


public function get_template_settings($branch_id, $type) {
    $this->db->select('bt.*, t.view_path');
    $this->db->from('branch_templates bt');
    $this->db->join('templates t', 'bt.template_id = t.id');
    $this->db->where('bt.branch_id', $branch_id);
    $this->db->where('bt.template_type', $type); 
    $this->db->where('bt.is_default', 1);
    return $this->db->get()->row();
}
 public function get_contact_info($id) {
        $this->db->select('name,mobile_no, email');
        $this->db->from('business_partners');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->row(); 
        } else {
            return false;
        }
    }
}