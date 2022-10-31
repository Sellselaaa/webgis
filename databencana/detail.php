<?php 
$id = $_GET['Id_bencana'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$titles="";
$id="";
$tgl="";
$alamat="";
$wil="";
$keterangan="";
$luka="";
$meninggal="";
$lat="";
$long="";
foreach($obj->results as $item){
  $titles.=$item->namabencana;
  $id.=$item->Id_bencana;
  $tgl.=$item->tanggal;
  $alamat.=$item->alamat;
  $wil.=$item->wilayah;
  $keterangan.=$item->keterangan;
  $luka.=$item->luka;
  $meninggal.=$item->meninggal;
  $lat.=$item->lat;
  $long.=$item->lng;
}

$title = "Detail dan Lokasi : ".$titles;
include_once "header.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/m-195.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
      <div class="row">
      <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Detail - </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Bencana</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <tr>
                 <td>Tanggal</td>
                 <td><h4><?php echo $tgl ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>Kecamatan</td>
                 <td><h4><?php echo $wil ?></h4></td>
               </tr>
               <tr>
                 <td>Keterangan</td>
                 <td><h4><?php echo $keterangan ?></h4></td>
               </tr>
                <tr>
                 <td>Orang yang Luka</td>
                 <td><h4><?php echo $luka ?></h4></td>
               </tr>
                <tr>
                 <td>Orang yang Meninggal</td>
                 <td><h4><?php echo $meninggal ?></h4></td>
               </tr>
             </table>
            </div>
            </div>
          </div>

        
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>