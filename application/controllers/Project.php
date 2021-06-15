<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProjectModel');
		$this->load->model('Discover_model');
	}

	public function index()
	{
		$result['projects'] = $this->ProjectModel->getProjects();
 		$result['user'] = $this->Discover_model->getPersonalTrend();
		$result['trending'] = $this->Discover_model->getTrending();
		$result['name'] = $this->ProjectModel->getName();
		$this->load->view('project_view', $result);
	}
	
}