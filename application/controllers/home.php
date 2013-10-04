<?php

class Home extends CI_Controller{


	function members_place()
	{
		$data['main_content']='members_area';
		$this->load->view('includes/template',$data);
	}
	function index()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			$this->load->view('screen1');
		}
		else 
			{
				$this->members_place();
			}
		
		
	}


	function signup()
	{
		$this->load->view('screen1_error1');
	}

	function create_member()
	{
		$this->load->library('form_validation');

		$value = $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]');
	

		if($this->form_validation->run('') == FALSE)
		{
			$this->signup();
		}
		else
		{
			$this->load->model('membership_model');
			$query = $this->membership_model->create_member();
			if($query==2)
			{
				$this->load->view('email_already_exist');
			}
			elseif($query==1)
			{
				$this->load->view('signup_successful');
			}
			else
			{
				$this->load->view('screen1');
			}
		}

	}

}