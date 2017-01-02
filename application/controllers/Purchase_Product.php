<?php

class Purchase_Product extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $res = $this->session->userdata('id');
        if ($res == NULL) {
            redirect('admin', 'refresh');
        }
    }

    public function index() {

        $data = array();
        $data['title'] = 'Add Product';
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/purchase_product/purchase_product_add_view', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function set_product_entry() {
        $txt_tp = $this->input->post('txt_tp');
        $txt_ct = $this->input->post('txt_ct');
        $txt_md = $this->input->post('txt_md');
        $txt_bname = $this->input->post('txt_bname');


        $data_arr = array(
            'type_name' => $txt_tp,
            'type_name' => $txt_ct,
            'type_name' => $txt_md,
            'type_name' => $txt_bname,
            'inserted_by' => 0,
            'insert_date' => date('YYYY-mm-dd'),
            'updated_by' => 0,
            'update_date' => 0,
            'status_active' => 1,
            'is_deleted' => 0,
        );

        $this->db->insert('type_info', $data_arr);
    }

}
