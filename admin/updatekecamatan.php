<?php 
    require 'connection.php';
    $Id = null;
    if(!empty($_GET['Id_kecamatan']))
    {
        $Id = $_GET['Id_kecamatan'];
    }
    if($Id == null)
    {
        header("Location: tabelkecamatan.php");
    }
	if ( !empty($_POST))
    {
              
        // post values
        $nama = $_POST['namakecamatan'];
        $luas = $_POST['luas'];
		$kodepos = $_POST['kodepos'];
		$deskripsi = $_POST['deskripsi'];
		$total = $_POST['total'];
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];
		
		// Update data
        $query = "Update datakecamatan set namakecamatan='$nama',luas='$luas',kodepos='$kodepos',deskripsi='$deskripsi',total='$total',Lat='$lat',Lng='$lng' where Id_kecamatan='$Id'";
        mysqli_query($con,$query);
		 header("Location: tabelkecamatan.php");
    }
	else
	{
		
		$query = "SELECT * FROM datakecamatan where Id_kecamatan = $Id";
		$res    = mysqli_query($con,$query);
		
		$data=mysqli_fetch_array($res);
		
		$nama = $data['namakecamatan'];
		 $luas = $data['luas'];
		$kodepos = $data['kodepos'];
		$deskripsi = $data['deskripsi'];
		$total = $data['total'];
		$lat = $data['lat'];
		$lng = $data['lng'];
	}
?>
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
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Manajemen Bencana
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="tabelbencana.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Bencana
						</a>
					</li>
					
				</ul>
			</li>

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Kecamatan
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="tabelkecamatan.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Kecamatan
						</a>
					</li>
						
				</ul>
			</li>

			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Berita 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="tabelberita.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Berita
						</a>
					</li>
					
				</ul>
			</li>


			 <li class="parent ">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Lapor Bencana
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li>
                        <a class="" href="tabellapor.php">
                            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Data Lapor Bencana
                        </a>
                    </li>
                    <li>
                </ul>
            </li>
            <li role="presentation" class="divider"></li>
            <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
        </ul>

    </div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Update Data Kecamatan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Data Kecamatan</h1>
			</div>
		</div><!--/.row-->
				
		<form method="POST" action="updatekecamatan.php?Id_kecamatan=<?php echo $Id;?>">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form">
							
								<div class="form-group">
									<label for="inputnama">Nama Kecamatan</label>
									<input type="text" class="form-control" required="required" id="inputnama" value="<?php echo !empty($nama)?$nama:'';?>" name="namakecamatan" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputluas">Luas</label>
									<input type="text" class="form-control" required="required" id="inputluas" value="<?php echo !empty($luas)?$luas:'';?>" name="luas" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputkodepos">Kodepos</label>
									<input type="text" class="form-control" required="required" id="inputkodepos" value="<?php echo !empty($kodepos)?$kodepos:'';?>" name="kodepos" placeholder="">
								</div>
								
								<div class="form-group">
									<label for="inputdeskripsi">Deskripsi</label>
									<textarea class="form-control" required="required" id="inputdeskripsi" name="deskripsi" placeholder=""><?php echo !empty($deskripsi)?$deskripsi:'';?></textarea>
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
								
								<button type="simpan" class="btn btn-primary">Simpan</button>
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

