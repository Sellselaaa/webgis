<?php
include ('inc/configbencana.php');
//data dari lokasi

$nama = $_POST['namakecamatan'];
$luas = $_POST['luas'];
$kodepos = $_POST['kodepos'];
$deskripsi = $_POST['deskripsi'];
$total = $_POST['total'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

//display success message
		echo "<font color='green'>Data Berhasil Disimpan.";
		echo "<br/><a href='tabelkecamatan.php'>Lihat Data</a>";


 $sql = "INSERT INTO datakecamatan(namakecamatan, luas, kodepos, deskripsi, total, lat,lng)
  VALUES('$nama','$luas','$kodepos','$deskripsi', '$total', '$lat','$lng')";

$result = mysql_query($sql) or die(mysql_error());

?>