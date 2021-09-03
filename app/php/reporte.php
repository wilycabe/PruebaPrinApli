<?php
    require("../../fpdf183/fpdf.php");
    include ("../php/conexion.php");

    $resultado=$mysqli->query("SELECT * FROM paises");


    class PDF extends FPDF{
        function Header() {
            $this->SetFont('Arial', '', 20);
            $this->Cell(120, 10, 'Lista de paises', 0, 10);
        }


        function Footer() {
            $this->SetY(-15);
            $this->setfont('Arial', 'I', 11);
            $this->Cell(0,  10, 'Pagina'.$this->PageNo().'/{nb}', 0, 0, 'C');
        }
    }


    $pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(200 ,200,200);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(10,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(10,6,'CAPITAL',1,0,'C',1);
    $pdf->Cell(10,6,'CODIGO_ISO',1,0,'C',1);
	$pdf->Cell(10,6,'POBLACION',1,0,'C',1);
	$pdf->Cell(10,6,'MONEDA',1,0,'C',1);
    $pdf->Cell(10,6,'CONTINENTE',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(10,6,'ID',1,0,'C',1);
        $pdf->Cell(10,6,'NOMBRE',1,0,'C',1);
        $pdf->Cell(10,6,'CAPITAL',1,0,'C',1);
        $pdf->Cell(10,6,'CODIGO_ISO',1,0,'C',1);
        $pdf->Cell(10,6,'POBLACION',1,0,'C',1);
        $pdf->Cell(10,6,'MONEDA',1,0,'C',1);
        $pdf->Cell(10,6,'CONTINENTE',1,1,'C',1);
	}
	$pdf->Output(); 
?>