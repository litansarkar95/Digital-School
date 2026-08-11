<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Authentication_model extends CI_Model
{
   
    
   public function admin_login($username, $password) {

    $this->db->where('username', $username);
   // $this->db->where('active', 1);
    $query = $this->db->get('login_credential');

    if ($query->num_rows() == 1) {

        $row = $query->row();
        if (password_verify($password, $row->password)) {
            return $row; 
        }
    }

    return FALSE; 
}

 public function getUserNameByRoleID($roleID, $userID = '')
    {

        // if ($roleID == 6) {
        //     $sql = "SELECT name,email,picture FROM parent WHERE id = " . $this->db->escape($userID);
        //     return $this->db->query($sql)->row_array();
        // } else
        if ($roleID == 5) {
            //$sql = "SELECT customers.id, customers.name as name, customers.email, customers.contact_no, customers.picture FROM customers INNER JOIN enroll ON enroll.student_id = student.id WHERE customers.id = " . $this->db->escape($userID);
           $sql = "SELECT CONCAT_WS(' ', staff.first_name, staff.last_name) AS name, email, contact_no, picture  FROM staff  WHERE id = " . $this->db->escape($userID);

            return $this->db->query($sql)->row_array();
        } else {
           
            $sql = "SELECT CONCAT_WS(' ', staff.first_name, staff.last_name) AS name, email, contact_no, picture  FROM staff  WHERE id = " . $this->db->escape($userID);
            return $this->db->query($sql)->row_array();
       }
    }

}