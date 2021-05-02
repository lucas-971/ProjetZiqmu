<?php 

function creerPdfInscription($inscription){?>
    <?php
    
    require('fpdf/fpdf182/fpdf.php');

   
    $pdf=new FPDF();
 
    $pdf->AddPage();
    
    $pdf->SetFont('Arial','B',16);
    
    $pdf->Cell(190,10,'Vous etes inscrit au court n '.$inscription['idSeance'],1,1,'C');
    
    
    
    $pdf->SetXY(10, 10);
    $pdf->cell(10,200,"L'eleve numero ".$inscription['idAdherent']);
    $pdf->SetXY(10, 20);
    $pdf->cell(10,200,"Il est inscrit au cours n".$inscription['idSeance']);
    $pdf->SetXY(10, 30);
    $pdf->cell(10,200,"Nom :  ".$inscription['nomAdherent']);
    $pdf->SetXY(10, 40);
    $pdf->cell(10,200,"Prenom :  ".$inscription['prenomAdherent']);
    
    $pdf->Image('images/your lie.jpg',45,30, 120, 60);
    
   
    ob_end_clean();
    $pdf->Output();   
    }
    
    ?>