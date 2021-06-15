<?php 

class Exhibition_project extends CI_Model{
    function saveProject($title, $base, $description, $file){

       $sql = "INSERT INTO posts(userId, description, thumbnail, scopeId, title) VALUES(5,'$description','$file','$base', '$title')";
       $sql2 = $this->db->query("SELECT posts FROM users where userId = 5");

       $no_of_posts = $sql2->result();
     $no = $no_of_posts[0]->posts;
     $no = $no+1;
    
        $sql3 = $this->db->query("UPDATE users SET posts = $no WHERE userId = 5");

       $query =  $this->db->query($sql);
      
    }
}
?>