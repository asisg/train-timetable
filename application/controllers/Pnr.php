<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pnr extends CI_Controller {


	public function index()
	{
		$this->load->helper('form'); 
		$this->load->view('pnr');
	}
	public function data_submitted(){
		
		$data = array(
		'pnr_no' => $this->input->post('u_name')
		);
		
		
		
		$this->load->view("view_form", $data);
 
	}
	
}
