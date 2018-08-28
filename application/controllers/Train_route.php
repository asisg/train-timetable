<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Train_route extends CI_Controller {


	public function index()
	{
		$this->load->helper('form'); 
		$this->load->view('Train_route');
	}
	public function data_submitted(){
		
		$data = array(
		'trn_no' => $this->input->post('t_name')
		);
		//echo "<pre>"; print_r($data); echo "</pre>";
		
		
		$this->load->view("Train_view", $data);
 
	}
	
}
