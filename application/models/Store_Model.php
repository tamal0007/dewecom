<?php

class Store_Model extends CI_Model {

    //put your code here

    public function select_all_store_info() {

        $this->db->select('*');
        $this->db->from('stores');
        $this->db->where('is_delete','0'); 
        //$this->db->where('is_active','1'); 
        $this->db->order_by("insert_time","desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_brand_info() {
        $this->db->select('*');
        $this->db->from('stores');     
        $this->db->where('is_active', 1);
        $this->db->where('is_delete', 0);
        $query_result = $this->db->get();
        $result = $query_result->result();
        foreach ($result as $v_cat)
        {

            $res[$v_cat->brand_id]=$v_cat->brand_name;
        }
        return $res;
    }

    public function inactive_store($brand_id) {
        $this->db->select('*');
        $this->db->from('stores');
        $this->db->where('store_id',$brand_id);
        $this->db->set('is_active', '0');
        $this->db->update('stores');
    }

    public function active_store($brand_id) {
        $this->db->select('*');
        $this->db->from('stores');
        $this->db->where('store_id', $brand_id);
        $this->db->set('is_active', '1');
        $this->db->update('stores');
    }

    public function select_store_by_id($store_id) {

        $this->db->select('*');
        $this->db->from('stores');
        $this->db->where('store_id', $store_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_store_info($data, $brand_id) {
        $this->db->select('*');
        $this->db->from('stores');
        $this->db->where('store_id', $brand_id);
        $this->db->update('stores', $data);
    }

    public function delete_store_by_id($brand_id) {
         $this->db->select('*');
        $this->db->from('store');
        $this->db->where('store_id', $brand_id);
        $this->db->set('is_delete', '1');
        $this->db->update('stores');
    }
    
    //=====================
    
    
    //=====================

}
