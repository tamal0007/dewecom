<?php

class Brand_Model extends CI_Model {

    //put your code here

    public function save_brand_info($data) {
        $this->db->insert('brand', $data);
    }

    public function select_all_brand_info() {

        $this->db->select('brand.*,category.category_name');
        $this->db->from('brand');
        $this->db->join('category','category.category_id = brand.category_id','left');
        $this->db->where('brand.is_delete',0); 
        $this->db->order_by("brand_id","desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

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

    public function inactive_brand_info($brand_id) {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where('brand_id',$brand_id);
        $this->db->set('is_active', 0);
        $this->db->update('brand');
    }

    public function active_brand_info($brand_id) {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where('brand_id', $brand_id);
        $this->db->set('is_active', 1);
        $this->db->update('brand');
    }

    public function select_brand_by_id($brand_id) {

        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where('brand_id', $brand_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_brand_info($data, $brand_id) {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where('brand_id', $brand_id);
        $this->db->update('brand', $data);
    }

    public function delete_brand_by_id($brand_id) {
         $this->db->select('*');
        $this->db->from('brand');
        $this->db->where('brand_id', $brand_id);
        $this->db->set('is_delete', 1);
        $this->db->update('brand');
    }
    
    //=====================
    
    
    //=====================

}
