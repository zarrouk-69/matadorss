<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT * FROM hotel AS m ";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'nbr etoile',1,0,'C',1);
	$pdf->Cell(40,6,'nom',1,0,'C',1);
	$pdf->Cell(40,6,'img',1,0,'C',1);
	$pdf->Cell(40,6,'id',1,1,'C',1);
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(40,10,utf8_decode($row['nbrhotel']),1,0,'C');
		$pdf->Cell(40,10,utf8_decode($row['nomhotel']),1,0,'C');
		$pdf->Cell(40,10,utf8_decode($pdf->Image("images/".$row['imagehotel'],null,null,35,7)));
		$pdf->Cell(40,10,utf8_decode($row['idhotel']),1,1,'C');
		//$pdf->Cell(40,10,$pdf->Image("images/".$row['imagehotel'],'C','C',40,10));
	}
	$pdf->Output();
?>