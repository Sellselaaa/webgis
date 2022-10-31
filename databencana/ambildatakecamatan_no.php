<?php
include "koneksi.php";
$Q = mysql_query("SELECT * FROM datakecamatan where Id_kecamatan=".$id)or die(mysql_error());
if($Q){
 $posts = array();
      if(mysql_num_rows($Q))
      {
             while($post = mysql_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));             
}

?>