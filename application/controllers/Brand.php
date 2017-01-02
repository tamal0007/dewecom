<?php

class Brand extends CI_Controller {

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
        $cdata = array();
        $data['title'] = 'Add Brand';
        $cdata['select_all_pub_category'] = $this->Category_Model->select_all_published_category_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/brand/brand_add_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function brand_save() {

        $data = array();


        //        start
        $this->load->library('upload');
        $config['upload_path'] = 'upload_image/icons/brand_icon/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']= '200';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('icn')) {
            $error = $this->upload->display_errors();
            echo $error;
            /* exit(); */
        } else {
            $fdata = $this->upload->data();
            $data['brand_icon'] = $config['upload_path'] . $fdata['file_name'];
        }
        //end


        $txt_bname = $this->input->post('txt_brand');
        $cbo_category = $this->input->post('cbo_category');
        $data_arr = array(
            'brand_name' => $txt_bname,
            'category_id' => $cbo_category,
            'inserted_by' => 0,
            'insert_time' => date('YYYY-mm-dd'),
            'updated_by' => 0,
            'update_time' => 0,
            'is_active' => 1,
            'is_delete' => 0,
        );
        $t_data = $data_arr + $data;
//         echo '<pre>';
//        print_r($t_data);
//        exit(); 
        $this->db->insert('brand', $t_data);
        $sdata = array();
        $sdata['message'] = 'Succesfully Save Brand info';
        $this->session->set_userdata($sdata);
        redirect('Brand');
    }

    public function view() {

        $data = array();
        $data['title'] = 'View Brand';
        $cdata = array();
        $cdata['select_all_brand'] = $this->Brand_Model->select_all_brand_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/brand/brand_list_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function inactive($brand_id) {

        $this->Brand_Model->inactive_brand_info($brand_id);
        redirect('Brand/view');
    }

    public function active($brand_id) {
        $this->Brand_Model->active_brand_info($brand_id);
        redirect('Brand/view');
    }

    public function edit_brand($brand_id) {
        $data = array();
        $data['title'] = 'Edit Brand';
        $cdata = array();
        $cdata['select_brand_by_id'] = $this->Brand_Model->select_brand_by_id($brand_id);
        $cdata['select_all_pub_category'] = $this->Category_Model->select_all_published_category_info();



//         echo '<pre>';
//         print_r($cdata);
//         exit();

        $data['admin_main_content'] = $this->load->view('admin_pages/pages/brand/brand_edit_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function update_brand() {

        $data = array();


        //        start
        $this->load->library('upload');
        $config['upload_path'] = 'upload_image/icons/brand_icon/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']= '200';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('icn')) {
            $error = $this->upload->display_errors();
            echo $error;
            /* exit(); */
        } else {
            $fdata = $this->upload->data();
            $data['brand_icon'] = $config['upload_path'] . $fdata['file_name'];
        }
        //end


        $txt_bname = $this->input->post('txt_brand');
        $brand_id = $this->input->post('brand_id');

        //  echo $brand_id;
        $cbo_category = $this->input->post('cbo_category');
        $data_arr = array(
            'brand_name' => $txt_bname,
            'category_id' => $cbo_category,
            'inserted_by' => 0,
            'insert_time' => date('YYYY-mm-dd'),
            'updated_by' => 0,
            'update_time' => 0,
            'is_active' => 1,
            'is_delete' => 0,
        );
        $t_data = $data_arr + $data;
//        echo '<pre>';
//         print_r($t_data);
//        exit();


        $this->Brand_Model->update_brand_info($t_data, $brand_id);
        $sdata = array();
        $sdata['message'] = "Successfully Update Brand";
        $this->session->set_userdata($sdata);
        redirect('Brand/view');
    }

    public function delete_brand($brand_id) {

        $this->Brand_Model->delete_brand_by_id($brand_id);
        redirect('Brand/view');
    }

}
