<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrendingModel extends CI_Model {

	public function index()
	{
		$this->load->database();
	}
	public function getProjects(){
		$query = $this->db->query("SELECT p.*, u.username,DATE_FORMAT(p.added_time,'%Y-%m-%d') from posts p inner join users u on u.userId = p.userId order by added_time desc");
		return $query->result();
	}
	public function incrementLikes(){
		$userId = $_SESSION['userId'];
        $postId = $_GET['post'];
        $sql1 = $this->db->query("SELECT likes from posts where postId = $postId");
        $result = $sql1->result();
        $no_of_likes = $result[0]->likes;
		$query = $this->db->query("UPDATE posts set likes = $no_of_likes+1 where postId = $postId");
		redirect("index.php/trending");
	}
}