<?php

class Sub_Category extends CI_Controller {

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
        $data['title'] = 'Add Sub Category';
        $cdata['select_all_pub_category'] = $this->Category_Model->select_all_published_category_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/sub_category/sub_category_add_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function sub_category_save() {

        $data = array();


        //        start
        $this->load->library('upload');
        $config['upload_path'] = 'upload_image/icons/sub_cat_icon/';
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
            $data['sub_cat_icon'] = $config['upload_path'] . $fdata['file_name'];
        }
        //end


        $txt_scname = $this->input->post('txt_sub_category');
        $cbo_category = $this->input->post('cbo_category');
        $data_arr = array(
            'sub_cat_name' => $txt_scname,
            'category_id' => $cbo_category,
            'inserted_by' => 0,
            'insert_time' => date('YYYY-mm-dd'),
            'updated_by' => 0,
            'update_time' => 0,
            'is_active' => 1,
            'is_delete' => 0,
        );

//            echo '<pre>';
//        print_r($data);
//        exit(); 

        $t_data = $data_arr + $data;
//        echo '<pre>';
//        print_r($t_data);
//        exit(); 
        $this->db->insert('sub_category', $t_data);
        $sdata = array();
        $sdata['message'] = 'Sub Category Info Succesfully Saved ';
        $this->session->set_userdata($sdata);
        redirect('Sub_Category');
    }

    public function view() {

        $data = array();
        $data['title'] = 'View Sub Category';
        $cdata = array();
        $cdata['select_all_sub_category'] = $this->Sub_Category_Model->select_all_sub_cat_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/sub_category/sub_category_list_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function inactive($sub_category_id) {

        $this->Sub_Category_Model->inactive_sub_category_info($sub_category_id);
        redirect('Sub_Category/view');
    }

    public function active($sub_category_id) {
        $this->Sub_Category_Model->active_sub_category_info($sub_category_id);
        redirect('Sub_Category/view');
    }

    public function edit_sub_category($sub_category_id) {
        $data = array();
        $data['title'] = 'Edit Brand';
        $cdata = array();
        $cdata['select_sub_cat_by_id'] = $this->Sub_Category_Model->select_sub_cat_by_id($sub_category_id);
        $cdata['select_all_pub_category'] = $this->Sub_Category_Model->select_all_published_category_info_for_sub_cat();
        $cdata['select_all_pub_category'] = $this->Category_Model->select_all_published_category_info();

//         echo '<pre>';
//         print_r($cdata);
//         exit();

        $data['admin_main_content'] = $this->load->view('admin_pages/pages/sub_category/sub_category_edit_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function update_sub_category() {

        $data = array();


        //        start
        $this->load->library('upload');
        $config['upload_path'] = 'upload_image/icons/sub_cat_icon/';
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
            $data['sub_cat_icon'] = $config['upload_path'] . $fdata['file_name'];
        }
        //end


        $sub_category_id = $this->input->post('txt_sub_category_id');
        $txt_scname = $this->input->post('txt_sub_category');
        $cbo_category = $this->input->post('cbo_category');
        $data_arr = array(
            'sub_cat_name' => $txt_scname,
            'category_id' => $cbo_category,
            'inserted_by' => 0,
            'insert_time' => date('YYYY-mm-dd'),
            'updated_by' => 0,
            'update_time' => 0,
            'is_active' => 1,
            'is_delete' => 0,
        );

//            echo '<pre>';
//        print_r($data);
//        exit(); 

        $t_data = $data_arr + $data;
        $this->Sub_Category_Model->update_sub_category_info($t_data, $sub_category_id);
        $sdata = array();
        $sdata['message'] = "Successfully Update sub Category";
        $this->session->set_userdata($sdata);
        redirect('Sub_Category/view');
    }

    public function delete_sub_category($sub_category_id) {

        $this->Sub_Category_Model->delete_sub_category_by_id($sub_category_id);
        redirect('Sub_Category/view');
    }

}
