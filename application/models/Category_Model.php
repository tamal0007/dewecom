<?php

class Category_Model extends CI_Model {

    //put your code here

    public function save_category_info($data) {
        $this->db->insert('category', $data);
    }

    public function select_all_category_info() {

        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('is_delete', 0);
        $this->db->order_by("category_id","desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_category_info() {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('is_active', 1);
        $this->db->where('is_delete', 0);
        $query_result = $this->db->get();
        $result = $query_result->result();
        foreach ($result as $v_cat)
        {
//            echo '<pre>';
//            print_r($v_cat);
//            exit();
            $res[$v_cat->category_id]=$v_cat->category_name;
        }
        return $res;
    }

    public function inactive_category_info($category_id) {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_id',$category_id);
        $this->db->set('is_active', 0);
        $this->db->update('category');
    }

    public function active_category_info($category_id) {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_id', $category_id);
        $this->db->set('is_active', 1);
        $this->db->update('category');
    }

    public function select_category_by_id($category_id) {

        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_info($data, $category_id) {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_id', $category_id);
        $this->db->update('category', $data);
    }

    public function delete_category_by_id($category_id) {
         $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_id', $category_id);
        $this->db->set('is_delete', 1);
        $this->db->update('category');
    }

}
