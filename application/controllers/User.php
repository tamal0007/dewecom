<?php


class User extends CI_Controller{
    //put your code here
    public function index(){
 $data = array();
        $data['title'] = 'Add User';
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/user/add', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
           
    }
}
