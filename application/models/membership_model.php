<?php

class Membership_model extends CI_Model{


	function validate()
	{
		$this->db->where('email_address',$this->input->post('username'));
		$query=$this->db->get('users');
		if($query->num_rows != 1)
		{
			return 2;
		}
		
		$this->db->where('email_address',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$query=$this->db->get('users');
		
		if($query->num_rows == 1)
		{
			return 1;
		}
	}


	function create_member()
	{
		$this->db->where('email_address',$this->input->post('email_address'));
		$query=$this->db->get('users');
		if($query->num_rows == 1)
		{
			return 2;
		}
		$new_member_insert_data = array(
			'fname' => $this->input->post('first_name'),
			'lname' => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),
			'password' => $this->input->post('password')
		);

		$insert = $this->db->insert('users', $new_member_insert_data);
		return 1;
	}

}