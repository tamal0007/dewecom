<?php

class Category extends CI_Controller {

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
        $data['title'] = 'Add Category';
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/category/category_add_view', '', TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function view() {

        $data = array();
        $data['title'] = 'View Category';
        $cdata = array();
        $cdata['select_all_category'] = $this->Category_Model->select_all_category_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/category/category_list_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function category_save() {

        $data = array();


        //        start
        $this->load->library('upload');
        $config['upload_path'] = 'upload_image/icons/category_icon/';
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
            $data['category_icon'] = $config['upload_path'] . $fdata['file_name'];
        }
        //end


        $txt_cname = $this->input->post('txt_category');
        $data_arr = array(
            'category_name' => $txt_cname,
            'inserted_by' => 0,
            'insert_time' => date('YYYY-mm-dd'),
            'updated_by' => 0,
            'update_time' => 0,
            'is_active' => 1,
            'is_delete' => 0,
        );
        $t_data = $data_arr + $data;
//          echo '<pre>';
//        print_r($t_data);
//        exit();
        $this->db->insert('category', $t_data);
        $sdata = array();
        $sdata['message'] = 'Succesfully Saved Category';
        $this->session->set_userdata($sdata);
        redirect('Category');
    }

    public function inactive($category_id) {
        $this->Category_Model->inactive_category_info($category_id);
        redirect('Category/view');
    }

    public function active($category_id) {
        $this->Category_Model->active_category_info($category_id);
        redirect('Category/view');
    }

    public function edit_category($category_id) {
        $data = array();
        $data['title'] = 'Edit Category';
        $cdata = array();
        $cdata['select_category_by_id'] = $this->Category_Model->select_category_by_id($category_id);


//         echo '<pre>';
//         print_r($cdata);
//         exit();

        $data['admin_main_content'] = $this->load->view('admin_pages/pages/category/category_edit_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function update_category() {


        $data = array();


        //        start
        $this->load->library('upload');
        $config['upload_path'] = 'upload_image/icons/category_icon/';
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
            $data['category_icon'] = $config['upload_path'] . $fdata['file_name'];
        }
        //end


        $txt_cname = $this->input->post('txt_category');
        $category_id = $this->input->post('category_id');
        // echo $category_id;
        $data_arr = array(
            'category_name' => $txt_cname,
            'inserted_by' => 0,
            'insert_time' => date('YYYY-mm-dd'),
            'updated_by' => 0,
            'update_time' => 0,
            'is_active' => 1,
            'is_delete' => 0,
        );
        $t_data = $data_arr + $data;



//echo '<pre>';
//print_r($t_data);
//exit();

        $this->Category_Model->update_category_info($t_data, $category_id);
        $sdata = array();
        $sdata['message'] = "Successfully Update Category";
        $this->session->set_userdata($sdata);
        redirect('Category/view');
    }

    public function delete_category($id) {

        $this->Category_Model->delete_category_by_id($id);
        redirect('Category/view');
    }

}
