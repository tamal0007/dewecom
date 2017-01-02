<?php

class Admin_Dashboard extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $res=$this->session->userdata('id');
        if ($res == NULL) {
            redirect('admin', 'refresh');
        }
    }

    public function index() {


        $data = array();
        $data['title'] = 'Dashboard';
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/dashboard','', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function logout() {
        $sdata = array();
        $sdata['message'] = 'Succesfully Logout';
        $this->session->set_userdata($sdata);
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('id');
        redirect('admin');
    }

}
