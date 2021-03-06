<?php
class Purchase extends CI_Controller {
    private $session_user_id;
    //put your code here
     public function __construct() {
        parent::__construct();
        $res=$this->session->userdata('id');
        $this->session_user_id=$res;
        if ($res == NULL) {
            redirect('admin', 'refresh');
        }
    }
    
    public function index() {

        $data = array();
        $cdata = array();
        $data['title'] = 'Add Brand';
        $cdata['unit_type_js_array'] =$this->Purchase_Model->get_unit_types_js_array();

        $cdata['select_all_pub_category'] = $this->Category_Model->select_all_published_category_info();
        $data['admin_main_content'] = $this->load->view('admin_pages/others/trading/purchase_view',$cdata, TRUE);
        $this->load->view('admin_pages/admin_master', $data);
    }

    public function save()
    {
        $product_id=$this->input->post('product_id');
        $product_cost_price=$this->input->post('cost_price');
        $product_sales_price=$this->input->post('sales_price');
        $product_quantity=$this->input->post('quantity');
        $txt_invoice_number=$this->input->post('txt_invoice_number');
        $txt_purchase_date=$this->input->post('txt_purchase_date');
        $txt_id_supplier=$this->input->post('txt_id_supplier');
        $txt_sub_total=$this->input->post('txt_sub_total');
        $cbo_unit_type=$this->input->post('cbo_unit_type');

        $data1=array(
                    'invoice_number'=>$txt_invoice_number,
                    'purchase_date'=>$txt_purchase_date,
                    'supplier_id'=>$txt_id_supplier,
                    'sub_total'=>$txt_sub_total,
                    'discount_amount'=>'0',
                    'vat_amount'=>'0',
                    'vat_ptc'=>'0',
                    'tax_amount'=>'0',
                    'tax_ptc'=>'0',
                    'total_amount'=>'0',
                    'tolal_paid'=>'0',
                    'due_amount'=>'0',
                    'insert_by'=>$this->session_user_id,
                    'insert_time'=>date('Y-m-d h:m:i'),
                    'update_by'=>null,
                    'update_time'=>null,
                    'is_active'=>'1',
                    'is_delete'=>'0',
            );
        if (count($product_id)>0 && !empty($txt_invoice_number) && !empty($txt_id_supplier))
        {

            $this->db->insert('purchase_mst',$data1);
            $purchase_mst_id=$this->db->insert_id();
        }
        for ($i=0;$i<count($product_id);$i++) 
        {
            if (!empty($product_cost_price[$i])&&!empty($product_quantity[$i])) 
            {
                $data2=array
                            (
                                'purchase_mst_id'=>$purchase_mst_id,
                                'product_id'=>$product_id[$i],
                                'purchase_rate'=>$product_cost_price[$i],
                                'purchase_qty'=>$product_quantity[$i],
                                'total_amount'=>($product_cost_price[$i]*$product_quantity[$i]),
                                'purchase_unit_type'=>$cbo_unit_type[$i],
                            );
                $this->db->insert('purchase_dtls',$data2);
            }
        }

        redirect('purchase_report', 'refresh');
    }
}