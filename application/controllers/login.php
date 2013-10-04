<?php

class Login extends CI_Controller{
	function index()
	{
		$data['main_content']='login_form';
		$this->load->view('includes/template',$data);
	}
	
	function error_index()
	{
		$data['main_content']='login_error';
		$this->load->view('includes/template',$data);
	}
	
	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query==1)
		{
			$data = array 
			(
				'username'=>$this->input->post('username'),
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('site/members_area');
		}
		
		elseif($query==2)
		{
			$data['main_content']='email_not_found';
			$this->load->view('includes/template',$data);
		}

		else
		{
			$this->error_index();
		}
	}


	function signup()
	{
		$this->load->view('screen1');
	}

	function create_member()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]');
	

		if($this->form_validation->run() == FALSE)
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
			elseif ($query==1)
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

