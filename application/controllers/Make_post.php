<?php
include 'myPDF.php';

class Make_post extends CI_Controller{
    function __construct(){
 parent::__construct();
 
 $this->load->database();
 $this->load->model('Discover_model');
 $this->load->model('Exhibition_project');
 $this->load->helper('url', 'form');	
 $this->load->library('form_validation');

}          
function index(){

    $result['recommend'] = $this->Discover_model->getRecommend();
    $result['others'] = $this->Discover_model->getOthers();
    $result['user'] = $this->Discover_model->getPersonalTrend();
    $result['trending'] = $this->Discover_model->getTrending();
    $this->load->view('showcase', $result);
   
}
 function do_upload(){
       $config = array(
'upload_path' => "./uploads/",
'allowed_types' => "jpg|jpeg",
'overwrite' => TRUE

);

$this->load->library('upload', $config);


 if($this->upload->do_upload('project_file')){

    
              $uploaded = $this->upload->data();
              $fileName = $uploaded['file_name'];
               $title = $this->input->post('title');
     $base = $this->input->post('project_base');
     $description = $this->input->post('summary');

    //  $this->Exhibition_project->saveProject($title, $base, $description, $fileName);

  $pdf = new PDF('amen');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',30);

$pdf->Cell(0,10, $title ,30,1);
 $pdf->Image('assets\images\Ok-bro.png',10,30,200);
$pdf->Output();

      

           }
 }


}

?>