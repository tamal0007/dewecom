<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
        $data['title'] = 'Add Product';
        $cdata['select_all_pub_category'] = $this->Category_Model->select_all_published_category_info();
        $cdata['select_all_pub_brand'] = $this->Product_Model->select_all_published_brand_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/product/product_add_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function save_product() {





        $cbo_brand = $this->input->post('cbo_brand');
        $cbo_category = $this->input->post('cbo_category');
        $txt_product = $this->input->post('txt_product');
        $txt_short_description = $this->input->post('txt_short_description');
        $txt_long_description = $this->input->post('txt_long_description');
        $txt_meta_key = $this->input->post('txt_meta_key');
        $data_arr = array(
            'brand_id' => $cbo_brand,
            'category_id' => $cbo_category,
            'product_name' => $txt_product,
            'product_short_des' => $txt_short_description,
            'product_long_des' => $txt_long_description,
            'meta_key' => $txt_meta_key,
            'inserted_by' => 0,
            'insert_time' => date('YYYY-mm-dd'),
            'updated_by' => 0,
            'update_time' => 0,
            'is_active' => 1,
            'is_delete' => 0,
        );
        $data = array();


        //        start
        $this->load->library('upload');
        $config['upload_path'] = 'upload_image/product_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']= '200';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('icon')) {
            $error = $this->upload->display_errors();
            echo $error;
            /* exit(); */
        } else {
            $fdata = $this->upload->data();
            $data['product_img'] = $config['upload_path'] . $fdata['file_name'];
        }
        //end

        $t_data = $data_arr + $data;
//         echo '<pre>';
//        print_r($t_data);
//        exit(); 
        $this->db->insert('product', $t_data);
        $sdata = array();
        $sdata['message'] = 'Product information Succesfully Saved ';
        $this->session->set_userdata($sdata);
        redirect('Product');
    }

    public function view() {

        $data = array();
        $data['title'] = 'View Product';
        $cdata = array();
        $cdata['select_all_product'] = $this->Product_Model->select_all_product_info();
//        echo '<pre>';
//        print_r($cdata);
//        exit();


        $data['admin_main_content'] = $this->load->view('admin_pages/pages/product/product_list_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function edit_product($product_id) {
        $data = array();
        $data['title'] = 'Edit Product';
        $cdata = array();
        $cdata['select_all_pub_brand'] = $this->Brand_Model->select_all_published_brand_info();
        // $cdata['select_all_pub_brand'] = $this->Product_Model->select_all_published_brand_info();
        $cdata['select_product_by_id'] = $this->Product_Model->select_product_by_id($product_id);
        $cdata['select_all_pub_category'] = $this->Category_Model->select_all_published_category_info();

//         echo '<pre>';
//         print_r($cdata);
//         exit();

        $data['admin_main_content'] = $this->load->view('admin_pages/pages/product/product_edit_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function update_product() {


        $cbo_brand = $this->input->post('cbo_brand');
        $cbo_category = $this->input->post('cbo_category');
        $txt_product = $this->input->post('txt_product');
        $product_id = $this->input->post('product_id');
        $txt_short_description = $this->input->post('txt_short_description');
        $txt_long_description = $this->input->post('txt_long_description');
        $txt_meta_key = $this->input->post('txt_meta_key');
        $data_arr = array(
            'brand_id' => $cbo_brand,
            'category_id' => $cbo_category,
            'product_name' => $txt_product,
            'product_short_des' => $txt_short_description,
            'product_long_des' => $txt_long_description,
            'meta_key' => $txt_meta_key,
            'inserted_by' => 0,
            'insert_time' => date('YYYY-mm-dd'),
            'updated_by' => 0,
            'update_time' => 0,
            'is_active' => 1,
            'is_delete' => 0,
        );
        $data = array();


        //        start
        $this->load->library('upload');
        $config['upload_path'] = 'upload_image/product_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size']= '200';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('icon')) {
            $error = $this->upload->display_errors();
            echo $error;
            /* exit(); */
        } else {
            $fdata = $this->upload->data();
            $data['product_img'] = $config['upload_path'] . $fdata['file_name'];
        }
        //end

        $t_data = $data_arr + $data;
//         echo '<pre>';
//        print_r($t_data);
//        exit(); 
        $this->Product_Model->update_product_info($t_data, $product_id);
        $sdata = array();
        $sdata['message'] = "Successfully Update Product";
        $this->session->set_userdata($sdata);
        redirect('Product/view');
    }

    public function inactive($product_id) {

        $this->Product_Model->inactive_product_info($product_id);
        redirect('Product/view');
    }

    public function active($product_id) {
        $this->Product_Model->active_product_info($product_id);
        redirect('Product/view');
    }

    public function delete_product($product_id) {

        $this->Product_Model->delete_product_by_id($product_id);
        redirect('Product/view');
    }

}
