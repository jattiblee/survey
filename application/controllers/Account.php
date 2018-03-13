<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->library('form_validation');
		$this->load->library('user_agent');

		$this->load->model('User_Model');

	}

	public function login()
	{
		$msg = '';

		// LOGIN
		if ($this->input->post('submit') == 'loginBtn') {
			$this->form_validation->set_rules('usernameLogin', 'Username', 'trim|required');
			$this->form_validation->set_rules('passwordLogin', 'Password', 'trim|required');
			if ($this->form_validation->run() == true) {
				$usernameLogin = $this->input->post('usernameLogin');
				$passwordLogin = md5($this->input->post('passwordLogin'));

				if (!empty($usernameLogin) && !empty($passwordLogin)) {
					$check = $this->User_Model->userLogin($usernameLogin,$passwordLogin);

					if (count($check) > 0) {
						foreach ($check as $key => $value) {
							$userData = array(
								'id_user'  => $value->id_user,
								'firstname'=> $value->firstname,
								'username' => $value->username
							);
							$this->session->set_userdata($userData);
							redirect('dashboard');
						}
					} else{
						$msg = "Username and Password do not match";
					}
				} else{
					$msg = "Form cannot be empty";
				}
			} else{
				$msg = "Form cannot be empty";
			}
		}



		// SIGNUP
		if ($this->input->post('submitSignup') == 'signupBtn' ) {
			$this->form_validation->set_rules('firstnameSignup', 'First Name', 'trim|required');
			$this->form_validation->set_rules('lastnameSignup', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('usernameSignup', 'Username', 'trim|required');
			$this->form_validation->set_rules('passwordSignup', 'Password', 'trim|required');
			$this->form_validation->set_rules('repasswordSignup', 'Retype Password', 'trim|required');

			if ($this->form_validation->run() == true) {
				$firstnameSignup  = $this->input->post('firstnameSignup');
				$lastnameSignup   = $this->input->post('lastnameSignup');
				$usernameSignup   = $this->input->post('usernameSignup');
				$passwordSignup   = md5($this->input->post('passwordSignup'));
				$repasswordSignup = md5($this->input->post('repasswordSignup'));

				if ($passwordSignup == $repasswordSignup) {
					$checkSignup = $this->User_Model->userByUsername($usernameSignup);
					if ($checkSignup == 0 || empty($checkSignup)) {
						$insertUser = $this->User_Model->insertUser($firstnameSignup, $lastnameSignup, $usernameSignup, $passwordSignup);

						if ($insertUser > 0 || !empty($insertUser)) {
							$msg = "Your Account has been Successfully Registered, please Login.";
						}
					} else{
						$msg = "Username already registered";
					}
				} else{
					$msg = "Password does not match";
				}
			}
		}


		$data = array(
			'sess' => $this->session->userdata(),

			'msg' => $msg
		);

		$this->load->view('Account/login', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('__ci_last_regenerate');
		$this->session->unset_userdata('FBRLH_state');
		
		redirect('login');
	}

	public function signup()
	{
		
	}

	
}
