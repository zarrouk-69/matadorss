<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT * FROM pack AS m ";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(35,6,'nompack',1,0,'C',1);
	$pdf->Cell(35,6,'prix',1,0,'C',1);
	$pdf->Cell(35,6,'hotel',1,0,'C',1);
	$pdf->Cell(35,6,'nbrjour',1,0,'C',1);
	$pdf->Cell(35,6,'resto',1,1,'C',1);
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(35,10,utf8_decode($row['nompack']),1,0,'C');
		$pdf->Cell(35,10,utf8_decode($row['prixpack']),1,0,'C');
		//$pdf->Cell(40,10,utf8_decode($pdf->Image("images/".$row['imagehotel'],null,null,35,7)));
		$pdf->Cell(35,10,utf8_decode($row['hotel1']),1,0,'C');
			$pdf->Cell(35,10,utf8_decode($row['nbrjour']),1,0,'C');
			$pdf->Cell(35,10,utf8_decode($row['access']),1,1,'C');
		//$pdf->Cell(40,10,$pdf->Image("images/".$row['imagehotel'],'C','C',40,10));
	}
	
	$pdf->Output();
?>