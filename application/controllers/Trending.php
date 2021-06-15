<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trending extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TrendingModel');
		$this->load->model('Discover_model');
	}

	public function index()
	{
		$result['projects'] = $this->TrendingModel->getProjects();
 		$result['user'] = $this->Discover_model->getPersonalTrend();
		$result['trending'] = $this->Discover_model->getTrending();
		$this->load->view('trending_view', $result);
	}
    public function increment(){
        $this->TrendingModel->incrementLikes();

    }
	
}