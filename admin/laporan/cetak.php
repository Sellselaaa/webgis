<?php
require('fpdf.php');

$pdf = new FPDF('l','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'BADAN PENANGGULANGAN BENCANA DAERAH','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5,'Alamat : Jl. HM Bahrun, Berkoh, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53146','0','1','C',false);
$pdf->Cell(0,2,'Telp : (0281) 6570790 ','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(270,0.6,'','0','1','C',true);
$pdf->Ln(5);


$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,'Data Bencana','0','1','L',false);
$pdf->Ln(2);

$pdf->SetFont('Arial','B',7);
$pdf->Cell(6,10,'No.',1,0,'C');
$pdf->Cell(20,10,'Nama Bencana',1,0,'C');
$pdf->Cell(12,10,'Tanggal',1,0,'C');
$pdf->Cell(50,10,'Alamat',1,0,'C');
$pdf->Cell(160,10,'Keterangan',1,0,'C');
$pdf->Cell(12,10,'Luka',1,0,'C');
$pdf->Cell(12,10,'Meninggal',1,0,'C');
$pdf->Ln(0);
$no = 0;

$pdf->SetFont('Arial','',12);

include 'koneksi.php';
$Id_bencana = mysqli_query($connect, "select * from databencana");
while ($row = mysqli_fetch_array($Id_bencana)){
	$no++;
    $pdf->Ln(10);
	$pdf->SetFont('Arial','',5);
	$pdf->Cell(6,10,$no.".",1,0,'C');
	$pdf->Cell(20,10,$row['namabencana'],1,0,'L');
	$pdf->Cell(12,10,$row['tanggal'],1,0,'L');
	$pdf->Cell(50,10,$row['alamat'],1,0,'L');
	$pdf->Cell(160,10,$row['keterangan'],1,0,'L');
	$pdf->Cell(12,10,$row['luka'],1,0,'L');
	$pdf->Cell(12,10,$row['meninggal'],1,0,'L');
}

$pdf->Output();

?>