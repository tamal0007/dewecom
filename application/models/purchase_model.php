<?php

class Purchase_Model extends CI_Model
{

	public function get_purchase_list($purchase_mst_id='')
	{
        if($purchase_mst_id=='')
        {
        	$id='';
        }else{
        	$id=" and purchase_mst.purchase_id='".$purchase_mst_id."'";
        }
        $query_result = $this->db->query('select 
        					* 
        				from 
        					purchase_mst,supplier 
        				where 
        					purchase_mst.supplier_id=supplier.supplier_id 
        				and 
        					is_active=1 
        				and 
        					is_delete=0'.$id
        					);
        $result = $query_result->result(); 
        return $result;
	}

	public function get_purchase_item_details($purchase_mst_id)
	{
        $query_result = $this->db->query("select 
        				* 
        			from 
        				purchase_mst,purchase_dtls,product
        			where 
        				purchase_mst.purchase_id=purchase_dtls.purchase_mst_id 
        			and
        				purchase_dtls.product_id=product.product_id
        			and 
        				purchase_mst.is_active=1
        			and 
        				purchase_mst.is_delete=0
        			and
        					purchase_dtls.purchase_mst_id='".$purchase_mst_id.
        			"'");

        $result = $query_result->result(); 
        return $result;
	}

        public function get_unit_types_js_array()
        {
                $query_result = $this->db->query("select 
                                                        *
                                                from
                                                        unit_type
                                                ");
                $result = $query_result->result(); 
                $output=array();
                foreach ($result as $key ) 
                {
                        $output[]='"'.$key->unit_type_id.'":"'.$key->unit_type_name.'"';
                }

                $output=implode(',', $output);

                return $output;

        }
}