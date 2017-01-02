<?php

class Search extends CI_Controller {

    //put your code here
     public function __construct() {
        parent::__construct();
        $res=$this->session->userdata('id');
        if ($res == NULL) {
            redirect('admin', 'refresh');
        }
    }
    
    public function index() {}

    public function product_search_for_purchase()
    {
    	$search_text=$this->input->post('search_text');
    	$query=$this->db->query(
    							"select 
    									* 
    							from 
    								product,category,sub_category,brand 
    							where
    								product.brand_id=brand.brand_id
    							and
									brand.sub_category_id=sub_category.sub_category_id
								and
									sub_category.category_id=category.category_id
    							and
    								(
    								(product_item_code='".$search_text."')
    							or
    								(product_name like '%".$search_text."%')
    								)
    							");
    	$cdata['search_result']=$query->result();
    	//var_dump($cdata);
        $this->load->view('search_template',$cdata);

    }


}