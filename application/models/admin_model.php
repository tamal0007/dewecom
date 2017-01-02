<?php


class Admin_Model extends CI_Model {
    //put your code here
    public function check_admin_login_info($email,$password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email',$email);
        $this->db->where('password',md5($password));
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}
