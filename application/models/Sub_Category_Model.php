<?php


class Sub_Category_Model extends CI_Model{
    //put your code here


    public function save_brand_info($data) {
        $this->db->insert('brand', $data);
    }

    public function select_all_sub_cat_info() {

        $this->db->select('sub_category.*,category.category_name');
        $this->db->from('sub_category');
        $this->db->join('category','category.category_id = sub_category.category_id','left');
        $this->db->where('sub_category.is_delete',0); 
        $this->db->order_by("sub_category_id","desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    //-------------------------

    public function select_all_published_category_info_for_sub_cat() {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('is_active', 1);
        $this->db->where('is_delete', 0);
        $query_result = $this->db->get();
        $result = $query_result->result(); 
        return $result;
    }
    
    //---------------------------

    public function select_all_published_brand_info() {
        $this->db->select('*');
        $this->db->from('brand');     
        $this->db->where('is_active', 1);
        $this->db->where('is_delete', 0);
        $query_result = $this->db->get();
        $result = $query_result->result();
        foreach ($result as $v_cat)
        {
//            echo '<pre>';
//            print_r($v_cat);
//            exit();
            $res[$v_cat->brand_id]=$v_cat->brand_name;
        }
        return $res;
    }

    public function inactive_sub_category_info($sub_category_id) {
         $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->set('is_active', 0);
        $this->db->update('sub_category');
    }

    public function active_sub_category_info($sub_category_id) {
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->set('is_active', 1);
        $this->db->update('sub_category');
    }

    public function select_sub_cat_by_id($sub_category_id){

        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('sub_category_id', $sub_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function  update_sub_category_info($data, $sub_category_id) {
        $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->update('sub_category', $data);
    }

    public function delete_sub_category_by_id($sub_category_id) {
         $this->db->select('*');
        $this->db->from('sub_category');
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->set('is_delete', 1);
        $this->db->update('sub_category');
    }

}



