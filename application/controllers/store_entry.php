<?php

class Store_Entry extends CI_Controller {

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
        $cdata = array();
        $data['title'] = 'Add Brand';
        $cdata['select_all_pub_category'] = $this->Category_Model->select_all_published_category_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/store/store_entry_view',$cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    
    public function fn_save() {
        
      $data=array();
        
        
        //        start
                $this->load->library('upload');
                $config['upload_path']= 'upload_image/icons/store_icons/';
                $config['allowed_types'] = 'gif|jpg|png';
              //$config['max_size']= '200';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $error = '';
                $fdata = array();
                if (!$this->upload->do_upload('file_logo')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                    /* exit();*/
                } else {
                    $fdata = $this->upload->data();
                    $data['store_logo'] = $config['upload_path'] . $fdata['file_name'];   
                }
        //end
        

        $txt_store_name = $this->input->post('txt_store_name');
        $txt_store_slogan= $this->input->post('txt_store_slogan');
        $txt_store_address= $this->input->post('txt_store_address');
        $txt_store_lat= $this->input->post('txt_store_lat');
        $txt_store_lang= $this->input->post('txt_store_lang');
        $file_logo= $this->input->post('file_logo');
        $data_arr = array(
            'store_name' => $txt_store_name,
            'store_slogan' => $txt_store_slogan,
            'store_address' => $txt_store_address,
            'store_lat' => $txt_store_lat,
            'store_lang' => $txt_store_lang,
            'store_logo' => $data['store_logo'],
            'insert_time' => date('Y-m-d'),
            'edited_by' => 0,
            'edit_time' => 0,
        );

        $t_data = $data_arr+$data;
        $this->db->insert('stores', $t_data);
         $sdata = array();
        $sdata['message'] = 'Succesfully Save Brand info';
        $this->session->set_userdata($sdata);
        redirect('store_entry');
    }
    
    
    
    
     public function view ()
     {

        $data = array();
        $data['title'] = 'View All Stores';
        $cdata = array();
        $cdata['select_all_store'] = $this->Store_Model->select_all_store_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/store/store_list_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }
    
    
    
     public function inactive ($brand_id) {
         
        $this->Store_Model->inactive_store($brand_id);
        redirect('store_entry/view');
    }

    public function active($brand_id) {
        $this->Store_Model->active_store($brand_id);
        redirect('store_entry/view');
    }

    public function edit($brand_id) {
        $data = array();
        $data['title'] = 'Edit Store';
        $cdata = array();
        $cdata['select_store_by_id'] = $this->Store_Model->select_store_by_id($brand_id);
        $data['admin_main_content'] = $this->load->view('admin_pages/pages/store/store_update_view', $cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function update() {

                $data = array();

                //.....Image Upload...Start
                $this->load->library('upload');
                $config['upload_path']= 'upload_image/icons/store_icons/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']= '500';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $error = '';

                $fdata = array();
                if (!$this->upload->do_upload('file_logo')) {
                    $error = $this->upload->display_errors();
                    echo $error;

                } else {
                    $fdata = $this->upload->data();
                    $data['store_logo'] = $config['upload_path'] . $fdata['file_name'];   
                }
                //.....Image Upload.... End

        $data['store_name'] =$txt_store_name = $this->input->post('txt_store_name');
        $data['store_slogan'] =$txt_store_slogan= $this->input->post('txt_store_slogan');
        $data['store_address'] =$txt_store_address= $this->input->post('txt_store_address');
        $data['store_lat'] =$txt_store_lat= $this->input->post('txt_store_lat');
        $data['store_lang'] =$txt_store_lang= $this->input->post('txt_store_lang');
        $this->Store_Model->update_store_info($data, $id);
        $sdata = array();
        $sdata['message'] = "Successfully Updated Store Information";
        $this->session->set_userdata($sdata);
        redirect('store_entry/view');
    }

    public function delete($brand_id) {

        $this->Store_Model->delete_store_by_id($brand_id);
        redirect('store_entry/view');
    }

}
