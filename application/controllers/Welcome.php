<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('master');
    }

    public function customer_form() {

        $data = array();
        $data['title'] = 'Add customer_form';
        $data['admin_main_content'] = $this->load->view('admin_pages/all/customer_form', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
        //$this->load->view('admin_pages/all/customer_form');
    }

    public function cash_receive() {
        $data = array();
        $data['title'] = 'Add cash_receive';
        $data['admin_main_content'] = $this->load->view('admin_pages/all/cash_receive',' ', TRUE);
        $this->load->view('admin_pages/admin_master',$data);
        //$this->load->view('admin_pages/all/cash_receive');
    }

    public function employee_reg_form() {

        $data['title'] = 'Add cash_receive';
        $data['admin_main_content'] = $this->load->view('admin_pages/all/employee_reg_form', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);

        //$this->load->view('admin_pages/all/employee_reg_form');
    }

    public function member_form1() {
        $data['title'] = 'Add cash_receive';
        $data['admin_main_content'] = $this->load->view('admin_pages/all/member_form', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
        //$this->load->view('admin_pages/all/member_form');
    }

    public function Member_form() {
        $data['title'] = 'Add cash_receive';
        $data['admin_main_content'] = $this->load->view('admin_pages/all/Member_form', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
        //$this->load->view('admin_pages/all/Member_form');
    }

    public function user_create() {
        $data['title'] = 'Add cash_receive';
        $data['admin_main_content'] = $this->load->view('admin_pages/all/user_create', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
        //$this->load->view('admin_pages/all/user_create');
    }

    public function password() {
        $data['title'] = 'Add cash_receive';
        $data['admin_main_content'] = $this->load->view('admin_pages/all/password', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
        //$this->load->view('admin_pages/all/password');
    }

    public function bank_form() {
        $data['title'] = 'Add cash_receive';
        $data['admin_main_content'] = $this->load->view('admin_pages/all/bank_form', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
        //$this->load->view('admin_pages/all/bank_form');
    }

    public function sheet6() {
        $data['title'] = 'Add cash_receive';
        $data['admin_main_content'] = $this->load->view('admin_pages/all/sheet6', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
        //$this->load->view('admin_pages/all/sheet6');
    }

}
