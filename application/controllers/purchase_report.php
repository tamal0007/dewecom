<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_Report extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $res = $this->session->userdata('id');
        if ($res == NULL) 
        {
            redirect('admin', 'refresh');
        }
    }

    public function index() 
    {

        $data = array();
        $cdata = array();
        $data['title'] = 'Purchase Report';
        $cdata['get_purchase_list'] = $this->Purchase_Model->get_purchase_list();
        //$cdata['select_all_pub_brand'] = $this->Product_Model->select_all_published_brand_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/others/report/purchase_report_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

}