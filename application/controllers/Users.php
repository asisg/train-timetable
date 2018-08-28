<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }
    

   public function index()
	{
		$this->load->helper('url');
		$this->load->view('login.php');
	}

	public function login()
	{
		
		if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
		
		$user=array(
      'email'=>$this->input->post('user_name'),
      'password'=>$this->input->post('user_email')
        );
		  $con['conditions'] = array(
                    'user_email'=>$this->input->post('user_email'),
                    'user_password' => md5($this->input->post('user_password')),
                    'status' => '1'
                );
                $checkLogin = $this->user->getRows($con);
				if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['user_id']);
                    redirect('pnr');
                }else{
                    echo $data['error_msg'] = 'Wrong email or password, please try again.';
                }
		
	  }

	
}
