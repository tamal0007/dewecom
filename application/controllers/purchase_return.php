<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_Return extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $res = $this->session->userdata('id');
        if ($res == NULL) 
        {
            redirect('admin', 'refresh');
        }
    }

    public function index($purchase_id='') 
    {

        $data = array();
        $cdata = array();

        $data['title'] = 'Purchase Return';
        $cdata['purchase_details'] = $this->Purchase_Model->get_purchase_list($purchase_id);
        $cdata['purchase_items'] = $this->Purchase_Model->get_purchase_item_details($purchase_id);

        $data['admin_main_content'] = $this->load->view('admin_pages/pages/purchase_product/purchase_return_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }


    public function fn_sales_return() 
    {
        //$this->input->post('');

    }

}