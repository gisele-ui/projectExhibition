<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projectmodel extends CI_Model {

	public function index()
	{
		$this->load->database();
	}
	public function getProjects(){
		$userId = $_GET['userId'];
		$query = $this->db->query("SELECT posts,DATE_FORMAT(u.added_time,'%Y-%m-%d') as added_time from posts where userId=$userId");
		return $query->result();
	}
	public function getOthers(){
	
		$classId = $_SESSION['classId'];
		$query = $this->db->query("SELECT u.username,DATE_FORMAT(u.added_date,'%Y-%m-%d') as added_time from users u where classId!=$classId");
	    return $query->result();
		
	}
	public function getPersonalTrend(){
		$userId= $_SESSION['userId'];
		$query = $this->db->query("SELECT description, likes from posts where userId=$userId and likes = any(select max(likes) from posts where userId=$userId);");
		return $query->result();
	}
	public function getTrending(){
		$userId= $_SESSION['userId'];
		$query = $this->db->query("SELECT u.username, p.description,p.likes from posts p inner join users u on u.userId = p.userId order by likes desc");
		return $query->result();
	}
}