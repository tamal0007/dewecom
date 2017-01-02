<?php

class Product_Model extends CI_Model{
    //put your code here
    
        //-------------------------

    public function select_all_published_brand_info() {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where('is_active', 1);
        $this->db->where('is_delete', 0);
        $query_result = $this->db->get();
        $result = $query_result->result(); 
        return $result;
    }
    
    //---------------------------
    public function select_all_product_info()
    {
        $this->db->select('product.*,category.category_name,brand.brand_name');
        $this->db->from('product');
        $this->db->join('category','category.category_id = product.category_id','left');
        $this->db->join('brand','brand.brand_id = product.brand_id','left');
        $this->db->where('product.is_delete',0); 
        $this->db->order_by("product_id","desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
     public function inactive_product_info($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id',$product_id);
        $this->db->set('is_active', 0);
        $this->db->update('product');
    }

    public function active_product_info($product_id) {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id', $product_id);
        $this->db->set('is_active', 1);
        $this->db->update('product');
    }
     public function delete_product_by_id($product_id) {
         $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id', $product_id);
        $this->db->set('is_delete', 1);
        $this->db->update('product');
    }
    
    public function select_product_by_id($product_id){
        
          $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function update_product_info($data,$product_id){
         $this->db->select('*');
        $this->db->from('product');
        $this->db->where('product_id', $product_id);
        $this->db->update('product', $data);
    }
}
