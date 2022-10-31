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
$pdf->Cell(50,5,'Data Kecamatan','0','1','L',false);
$pdf->Ln(2);

$pdf->SetFont('Arial','B',7);
$pdf->Cell(6,10,'No.',1,0,'C');
$pdf->Cell(20,10,'Nama Kecamatan',1,0,'C');
$pdf->Cell(13,10,'Luas',1,0,'C');
$pdf->Cell(12,10,'Kodepos',1,0,'C');
$pdf->Cell(190,10,'Deskripsi',1,0,'C');
$pdf->Cell(20,10,'Total Bencana',1,0,'C');
$pdf->Ln(0);
$no = 0;

$pdf->SetFont('Arial','',12);

include 'koneksi.php';
$Id_kecamatan = mysqli_query($connect, "select * from datakecamatan");
while ($row = mysqli_fetch_array($Id_kecamatan)){
	$no++;
    $pdf->Ln(10);
	$pdf->SetFont('Arial','',5);
	$pdf->Cell(6,10,$no.".",1,0,'C');
	$pdf->Cell(20,10,$row['namakecamatan'],1,0,'L');
	$pdf->Cell(13,10,$row['luas'],1,0,'L');
	$pdf->Cell(12,10,$row['kodepos'],1,0,'L');
	$pdf->Cell(190,10,$row['deskripsi'],1,0,'L');
	$pdf->Cell(20,10,$row['total'],1,0,'L');
}

$pdf->Output();

?>