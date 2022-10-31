<?php
if(isset($_POST["tombol"]))
{
$nama=$_POST['nama'];
$email=$_POST['email'];
$website=$_POST['website'];
$lapor=$_POST['lapor'];
$art_id=$_POST['art_id'];
$art_url=$_POST['art_url'];
$date = date("Y-m-d h:i:s");
if(empty($nama))
$_POST["nama"]='anonymous';
if(empty($lapor)){
echo "<meta http-equiv='refresh' content='2; url=$art_url'>";
die("Laporan harus diisi");}
}
//connect database
$con=mysql_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
//Menampilkan data
mysql_select_db("webgis", $con);
$sql="INSERT INTO laporbencana (nama, email, website, lapor, art_id, art_url, date)
VALUES ('$nama','$email','$website','$lapor','$art_id','$art_url', '$date')";
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }


//Memutuskan koneksi
mysql_close($con);

require "PHPMailer/PHPMailerAutoload.php";
        $email_pengirim = "riasela988@gmail.com";
        $isi=$_POST['lapor'];
        $subjek='Lapor Blog';
        $email_tujuan=$_POST['email'];

        $mail = new PHPMailer();

        $mail->SMTPDebug = 3;
        $mail->IsHTML(true);    // set email format to HTML
        $mail->IsSMTP();   // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = $email_pengirim;  // alamat email kamu
        $mail->Password   = "Sela_21009";            // password GMail
        $mail->SetFrom($email_pengirim, 'noreply');  //Siapa yg mengirim email
        $mail->Subject    = $subjek;
        $mail->Body       = $isi;
        $mail->AddAddress($email_tujuan);

        if(!$mail->Send()) {
            echo "Eror: ".$mail->ErrorInfo;
            exit;
        }else {
            echo "<div class='alert alert-success'><strong>Berhasil!</strong> Email telah berhasil dikirim.</div>";
        }
 
?>