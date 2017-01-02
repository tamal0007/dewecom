<?php

class Admin extends CI_Controller{
    //put your code here
    
     public function __construct() {
        parent::__construct();
        $res=$this->session->userdata('id');
        if($res!=NULL){
            redirect('Admin_Dashboard','refresh');
        }
    }
    public function index()
	{
		$this->load->view('admin_pages/admin_login');
	}
    public function admin_login_check() 
            {
        $email = $this->input->post('email', true);
        $password= $this->input->post('password', true);

//        echo $email.'..........'.$password;
//        exit();
        
      
        $rest = $this->admin_model->check_admin_login_info($email,$password);
//        print_r($rest);
//        exit();
        $sdata=array();
        if ($rest) 
            {
            $sdata['id']=$rest->id;
            $sdata['name']=$rest->admin_name;
            $sdata['user_type']=$rest->admin_type;
            $this->session->set_userdata($sdata);
            

            
            redirect('Admin_Dashboard');    
            } 
        else {
            $sdata['exception']='Your email or password invalid';
            $this->session->set_userdata($sdata);
            redirect('admin');
        }
    }
 
}
