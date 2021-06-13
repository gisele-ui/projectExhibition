<?php

class Make_post extends CI_Controller{
    function __construct(){
 parent::__construct();
 $this->load->database();

 $this->load->model('Exhibition_project');

    }          

    public function saveProject(){
      $this->load->view('showcase');
        if($this->input->post('save'))
		{	
           $title = $this->input->post('title');
           $base = $this->input->post('project_base');
           $description = $this->input->post('summary');
           $file= $this->input->post('project_file');

		$this->Exhibition_project->saveProject($title, $base, $description, $file);
		}
    }
}

?>