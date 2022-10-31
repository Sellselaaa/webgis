<?php
include ('inc/configbencana.php');
//data dari lokasi

$nama = $_POST['namabencana'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$wilayah = $_POST['wilayah'];
$keterangan = $_POST['keterangan'];
$luka = $_POST['luka'];
$meninggal = $_POST['meninggal'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

//display success message
		echo "<font color='green'>Data Berhasil Disimpan.";
		echo "<br/><a href='tabelbencana.php'>Lihat Data</a>";


 $sql = "INSERT INTO databencana(namabencana, tanggal, alamat, wilayah, keterangan, luka, meninggal, lat,lng)
  VALUES('$nama','$tanggal','$alamat','$wilayah','$keterangan','$luka','$meninggal','$lat','$lng')";

$result = mysql_query($sql) or die(mysql_error());

?>