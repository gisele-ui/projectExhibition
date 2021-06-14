<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discover extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Discover_model');
	}

	public function index()
	{
		
		$result['recommend'] = $this->Discover_model->getRecommend();
		$result['others'] = $this->Discover_model->getOthers();
		$result['user'] = $this->Discover_model->getPersonalTrend();
		$result['trending'] = $this->Discover_model->getTrending();
		$this->load->view('discover_view', $result);
	}
	
}