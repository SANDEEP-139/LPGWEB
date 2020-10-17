<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	
	public function index()
	{
		$this->load->view('Admin/header');
        $this->load->view('Admin/section');

		$this->load->view('Admin/footer');
		
	}

	public function save_record(){
		if(!empty($_POST)){
			print($_POST);
			die;
		}
	}
	
}

