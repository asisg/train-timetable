<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }
    

   public function index()
	{
		$this->load->helper('url');
		$this->load->view('registration.php');
	}

	public function register_user()
	{
		
		$user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);
		$insert = $this->user->insert($user);
        redirect('users/login');
		if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
	  }

	
}
