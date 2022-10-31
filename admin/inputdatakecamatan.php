<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tambah Data Kecamatan</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIevSvpV-ONb4Pf15VUtwyr_zZa7ccwq4&sensor=false" type="text/javascript"></script>

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>WEBGIS</span>ADMIN</a>
                <ul class="user-menu">
                        <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>

    <div id="map" style="width:1600px;height: 500px;"></div>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" >
            </div>
        </form>
        <?php
            include"menu.php";
            ?>

    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Input Data Kecamatan</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tambah Kecamatan</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Elements</div>
                    <div class="panel-body">
                    <form method="POST" action="input_datakecamatan.php">
                        <div class="col-md-6">
                            <form role="form">
                            
                                <div class="form-group">
                                    <label for="inputnamakecamatan">Nama Kecamatan</label>
                                    <input type="text" class="form-control" required="required" id="inputkecamatan" value="<?php echo !empty($nama)?$nama:'';?>" name="namakecamatan" placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <label for="inputluas">Luas</label>
                                    <input type="text" class="form-control" required="required" id="inputluas" value="<?php echo !empty($luas)?$luas:'';?>" name="luas" placeholder="">
                                </div>
                                

                                <div class="form-group">
                                    <label for="inputkodepos">Kode Pos</label>
                                    <input type="text" class="form-control" required="required" id="inputkodepos" value="<?php echo !empty($kodepos)?$kodepos:'';?>" name="kodepos" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="inputdeskripsi">Deskripsi</label>
                                    <input type="text" class="form-control" required="required" id="inputdeskripsi" value="<?php echo !empty($deskripsi)?$deskripsi:'';?>" name="deskripsi" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="inputtotal">Total Bencana</label>
                                    <input type="text" class="form-control" required="required" id="inputtotal" value="<?php echo !empty($total)?$total:'';?>" name="total" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="lat">Latitude</label>
                                    <input type="text" class="form-control" required="required" id="lat" value="<?php echo !empty($lat)?$lat:'';?>" name="lat" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="lng">Langitude</label>
                                    <input type="text" class="form-control" required="required" id="lng" value="<?php echo !empty($lng)?$lng:'';?>" name="lng" placeholder="">
                                </div>

                                
                                <button type="Simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
        
    </div><!--/.main-->

    <script type="text/javascript">
    document.getElementById('reset').onclick= function() {
        var field1= document.getElementById('lng');
 var field2= document.getElementById('lat');
        field1.value= field1.defaultValue;
 field2.value= field2.defaultValue;
    };
</script>    
<script type="text/javascript">
     function updateMarkerPosition(latLng) {
  document.getElementById('lat').value = [latLng.lat()];
  document.getElementById('lng').value = [latLng.lng()];
  }

    var myOptions = {
      zoom: 10,
        scaleControl: true,
      center:  new google.maps.LatLng(-7.528853,109.2364087),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

 
    var map = new google.maps.Map(document.getElementById("map"),
        myOptions);

 var marker1 = new google.maps.Marker({
 position : new google.maps.LatLng(-7.528853,109.2364087),
 title : 'lokasi',
 map : map,
 draggable : true
 });
 
 //updateMarkerPosition(latLng);

 google.maps.event.addListener(marker1, 'drag', function() {
  updateMarkerPosition(marker1.getPosition());
 });
</script>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){        
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   
</body>

</html>