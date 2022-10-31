<?php 
$title = "Sistem Informasi Geografis Monitoring Bencana Alam Kabupaten Banyumas";
include_once "header.php"; ?>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

<div id="lapor">
<form name="submitlapor" method="post" action="submitlapor.php">Nama:<br>
<input name="nama" type="text"><br>
Email:<br><input name="email" type="text" required="required"><br>
Website(optional):<br><input name="website" type="text"><br>
Laporan Bencana:<br><textarea name="lapor" rows="6" cols="50"></textarea><br>
<input name="art_id" value="1" type="hidden">
<input name="art_url" value="lapor.php" type="hidden"><br>
<input name="tombol" value="Kirim" type="submit"></form>
</div>
<div id="publishlapor">
<?php include("publishlapor.php"); getcomment("1"); ?></div>
</div>
<?php include_once "footer.php"; ?>