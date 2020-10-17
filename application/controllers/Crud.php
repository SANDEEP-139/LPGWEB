<?php 
class Crud extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Crud_model');
	}
        /*Insert*/
	public function savedata()
	{



		
		if($this->input->post('save'))
		{
		
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$email=$this->input->post('email');
		$pass=$this->input->post('password');


		$data=array(
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'email'=>$this->input->post('email'),
		'password'=>$this->input->post('password')
		);
		



			$this->db->insert('crud',$data);



		$this->Crud_model->saverecords($first_name,$last_name,$email,$pass);	
		}

		$this->load->view('Home_message');
	}


	
	
}
?>