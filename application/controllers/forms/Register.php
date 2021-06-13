<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
        $this->load->helper('form');
        $this->load->helper('url');
		$this->load->model("userModel");
	}


	public function register()
	{
		$info = new userModel;
		$result = $info->getData();
		$results['result'] = $result;

		$this->load->view('forms/Register', $results);
	}

	
	public function saveUser()
	{
		$this->form_validation->set_rules("username","Username","trim|required|min_length[3]|max_length[40]");
		$this->form_validation->set_rules("email","Email","trim|required|is_unique[users.email]|max_length[200]", array("is_unique"=>"Email has already taken"));
		$this->form_validation->set_rules("password","Password","required|min_length[6]|max_length[25]");

		if($this->form_validation->run() == FALSE){
			$this->register();
		}else{
        $insertUser = new UserModel;
		$username = $this->input->post("username");
		$code = bin2hex(random_bytes(6));
		$hashedemail  =hash("SHA512", $this->input->post("email"));
		$identity = $hashedemail."-".$code;
		$link = "http://localhost/projectExh/exhibition/verify/$identity";
        $subject = "Email verification link";
        $message = "<div><p>Hi $username, click to this link to verify your email and get started.</p><a href='$link'>$link</a></div>";
		
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'dufitumukizaemmanuel0@gmail.com',
            'smtp_pass' => '8781747982',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
		
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('dufitumukizaemmanuel0@gmail.com');
        $this->email->to($this->input->post("email"));
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {

			$data = array(
				"username"=>$this->input->post("username"),
				"email"=>$this->input->post("email"),
				"password"=>hash("SHA512",$this->input->post("password")),
				"sectorId"=>$this->input->post("sectorId"),
				"classId"=>$this->input->post("classId"),
				"verified"=>false,
				"link"=>$identity
			);

			$insertUser->saveUser($data);
        } else {
            echo "Error sending email";
        }
		}
	}

	public function verify($link){

        $check = new UserModel;
	    $isValid = $check->checkLink($link);
		
		if($isValid){
        $_SESSION['userId'] = $isValid[0]->userId;
		redirect("home");
		}else{
         echo "Page not found";
		}
	}
}
