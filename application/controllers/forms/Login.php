<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public $message =null;

	public function __construct()
	{
		parent:: __construct();
        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->model("userModel");
	}

	public function login()
	{
		if(isset($_SESSION['email'])){
			redirect("home");
		}

		$info["message"] = $this->message;
		$this->load->view('forms/login', $info);
	}

	public function auth(){
		$this->form_validation->set_rules("email","Email","trim|required");
		$this->form_validation->set_rules("password","Password","trim[false]|required");

		if($this->form_validation->run() == FALSE){
			$this->login();
		}else{
			$login = new UserModel;
		    $result = $login->authUser($this->input->post('email'), $this->input->post('password'));

			if($result){
				$_SESSION['userId'] = $result;
				redirect("home");
			}else{
				$this->message = "Incorrect email or password";
				$this->login();
			}
		}
	}


}
