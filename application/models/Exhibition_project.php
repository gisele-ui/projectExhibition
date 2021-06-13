<?php 

class Exhibition_project extends CI_Model{
    function saveProject($title, $base, $description, $file){
       $sql = "INSERT INTO posts(userId, description, thumbnail, scopeId, post_title) VALUES(1,'$description','$file','$base', '$title')";

       $query =  $this->db->query($sql);
      
    }
}
?>