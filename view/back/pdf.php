<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT m.nom, m.idpr, m.categorie FROM produit AS m";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(70,6,'categorie',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,$row['idpr'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['categorie']),1,1,'C');
	}
	$pdf->Output();
?>