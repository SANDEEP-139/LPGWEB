<?php

class User_model extends CI_model
{
	function create($formArray)
	{
		$this->db->insert('users' ,$formArray);
		 // insert into table  


	}

	function all(){
		 return $users=$this->db->get('users')->result_array();
		 //select * from users
	}
	 function getUser($userId){
	 	$this->db->where( 'user_id' ,$userId);
	 	 return $user=$this->db->get('users')->row_array();
	 	 //select * table where id
	 }
	 function updateuser($userId,$formArray)
	 {
	 	$this->db->where( 'user_id' ,$userId);
	 	$this->db->update('users',$formArray);
	 } 
	 //update users where id
	    function deleteuser($userId)
	    {
	    	$this->db->where('user_id' ,$userId);
	    	$this->db->delete('users');
	    	// delete from table where id
	    }
}
?>