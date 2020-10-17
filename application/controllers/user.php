<?php
class User extends CI_Controller 
{
	function index()
	{
		$this->load->model('User_model');
		$users=$this->User_model->all();
		$data=array( );
		$data['users']=$users;
		$this->load->view('list',$data);
	}
	 function create()
	 {
	 	$this->load->model('User_model');
	 	$this->form_validation->set_rules('name','Name','required');
	 	$this->form_validation->set_rules('email','Email','required|valid_email');
	 	if($this->form_validation->run()==false)
	 	{
	 		$this->load->view('create');

	 	}
	 	else

	 	{
	 		//save record to database
	 		$formArray=array();
	 		$formArray['name']=$this->input->post('name');
	 		$formArray['email']=$this->input->post('email');
	 		$formArray['created_at']=date('Y-m-d');
	 		$this->User_model->create($formArray);
	 		$this->session->set_flashdata('success','record added successfully');
	 		redirect( base_url().'index.php/user/index');
	 	}
	 	
	 }
	 function edit($userId){
	 	$this->load->model('User_model');
	 	$user=$this->User_model->getUser($userId);
	 	$data=array( );
	 	$data ['user']=$user;
	 	$this->form_validation->set_rules('name','Name','required');
	 	$this->form_validation->set_rules('email','Email','required|valid_email');
	 	if($this->form_validation->run()==false){
	 	$this->load->view('edit',$data);
}
else{
	$formArray=array();
	$formArray['name']=$this->input->post('name');
	$formArray['email']=$this->input->post('email');
	$this->User_model->updateuser($userId,$formArray);
	$this->session->set_flashdata('success','record update successfully');
	redirect(base_url().'index.php/user/index');

	//update user recoord
}

	 }
	  function delete($userId)
	  {
	  	$this->load->model('User_model');
	  	 $user=$this->User_model->getuser($userId);
	  	 if(empty($user)){
	  	 $this->session->set_flashdata('failure','record not found in database');
	redirect(base_url().'index.php/user/index');	
	  	 }
	  	 $this->User_model->deleteuser($userId);
	  	 $this->session->set_flashdata('success','record deleted successfully');
	redirect(base_url().'index.php/user/index');
	  }
	  
} 
?>