<?php 

require 'Fpdf/Fpdf.php';

class PDF extends FPDF

{
    
    function __construct($title){
        parent::__construct();
     $this->title = $title;
    }
// Page header
function Header()
{
   

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(0,10, $this->title ." 's posts",30,1);
    // $this->Cell(30,10,$this->title ,1,0);
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}



?>