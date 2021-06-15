<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
<<<<<<< HEAD
=======
		if(isset($_SESSION['userId'])){
>>>>>>> cbe645b6453aa23c9c26d5b74cd920f54ffb3e86
		$this->load->model('Discover_model');
		$result['user'] = $this->Discover_model->getPersonalTrend();
		$result['trending'] = $this->Discover_model->getTrending();
		$this->load->view('dashboard', $result);
<<<<<<< HEAD

=======
		}else{
			redirect("index.php/forms/login/login");
		}
>>>>>>> cbe645b6453aa23c9c26d5b74cd920f54ffb3e86
	}
}
