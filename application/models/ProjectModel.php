<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projectmodel extends CI_Model {

	public function index()
	{
		$this->load->database();
	}
	public function getProjects(){
		$userId = $_GET['userId'];
		$query = $this->db->query("SELECT p.title , u.username, p.description, p.likes,DATE_FORMAT(p.added_time,'%Y-%m-%d') as added_time from posts p inner join users u on u.userId = p.userId where p.userId=$userId");
		return $query->result();
	}
	public function getName(){
		$userId = $_GET['userId'];
		$query = $this->db->query("SELECT username FROM users where userId=$userId");
		return $query->result_array();
	}
}