<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('LPG/home');

	}
	public function regstr($par1='',$par2='',$par3=''){

		$data=array(
			'first_name'=>$this->input->post('first_name'),
			'middle_name'=>$this->input->post('middle_name'),
			'last_name'=>$this->input->post('last_name'),
			'gender'=>$this->input->post('gender'),
			'email_id'=>$this->input->post('email_id'),
			'mobile_no'=>$this->input->post('mobile_no'),
			'dob'=>$this->input->post('dob'),
			'address1'=>$this->input->post('address1'),
			'address2'=>$this->input->post('address2'),
			'address3'=>$this->input->post('address3'),
			'state'=>$this->input->post('state'),
			'pin_code'=>$this->input->post('pin_code'),
			'password'=>$this->input->post('password')
		);
		if($par1=='create'){
			$this->db->insert('regstra',$data);
		}
	
	$this->load->view('LPG/new-registration');
}
	public function login(){
		$this->load->view('LPG/login');
	}


	public function signin(){
		// echo"yo"; die;
			$mailid=$this->input->post('email_id');
			$paswd=$this->input->post('password');
			$result=$this->db->get_where('regstra',array('email_id'=>$mailid,'password'=>$paswd));
			$data=$result->row_array();

			//print_r($data); die;
			$num=$result->num_rows();


			
$this->session->set_userdata('user', $data);
if(num > 0){
$this->session->set_flashdata('success', 'Login Succesfully!!');

redirect('Welcome/index');
} else {
$this->session->set_flashdata('error_message', 'Invalid Email Or Password');
redirect('Welcome/login');
}

		
	}
	public function logout(){
$this->session->unset_userdata('user', '');
$this->session->set_flashdata('success', 'Logout Succesfully!!');
redirect('Welcome/login');
}
}
