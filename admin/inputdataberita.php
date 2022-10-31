<?php

include ('inc/configbencana.php');
//data dari lokasi

$tgl = date("Y-m-d H:i:s");
$gmbr = $_POST['gambar'];
$judul = $_POST['judul'];
$konten = $_POST['konten'];

//display success message
		echo "<font color='green'>Data Berhasil Disimpan.";
		echo "<br/><a href='tabelberita.php'>Lihat Data</a>";


 $sql = "INSERT INTO berita(tanggal, gambar, judul, konten)
  VALUES('$tgl','$gmbr','$judul','$konten')";

$result = mysql_query($sql) or die(mysql_error());

?>