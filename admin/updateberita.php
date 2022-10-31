<?php 
    require 'connection.php';
    $Id = null;
    if(!empty($_GET['Id_berita']))
    {
        $Id = $_GET['Id_berita'];
    }
    if($Id == null)
    {
        header("Location: tabelberita.php");
    }
	if ( !empty($_POST))
    {
              
        // post values
       	$tgl = $_POST['Tanggal'];
		$gmbr = $_POST['Gambar'];
		$judul = $_POST['Judul'];
		$konten = $_POST['Konten'];
		
		// Update data
        $query = "Update berita set Tanggal='$tgl',Gambar='$gmbr',Judul='$judul',Konten='$konten' where Id_berita='$Id'";
        mysqli_query($con,$query);
		 header("Location: tabelberita.php");
    }
	else
	{
		
		$query = "SELECT * FROM berita where id_berita = $Id";
		$res    = mysqli_query($con,$query);
		
		$data=mysqli_fetch_array($res);
		
		$tgl = $data['tanggal'];
		$gmbr = $data['gambar'];
		$judul = $data['judul'];
		$konten = $data['konten'];
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tambah Data Berita</title>


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css"/>
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
					<li>
						<a class="" href="inputbencana.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Input Bencana
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
					<li>
						<a class="" href="inputdatakecamatan.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Input Kecamatan
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
					<li>
						<a class="" href="inputberita.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Input Berita
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
				<li class="active">Update Data Berita</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Forms Berita</h1>
			</div>
		</div><!--/.row-->
				
		<form method="POST" action="updateberita.php?Id_berita=<?php echo $Id;?>">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form">
							
								<div class="form-group">
									<label for="inputtgl">Tanggal</label>
									<div class="input-group date" id="tanggal">
										<input type="text" class="form-control" value="<?php echo !empty($tgl)?$tgl:'';?>" name="Tanggal" placeholder=""/>	
										<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="inputjudul">Judul</label>
									<input type="text" class="form-control" required="required" id="inputjudul" value="<?php echo !empty($judul)?$judul:'';?>" name="Judul" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputkonten">Konten</label>
									<textarea class="form-control" required="required" cols="30" rows="10" id="inputkonten" value="<?php echo !empty($konten)?$konten:'';?>" name="Konten" placeholder="" ></textarea>
								</div>

								<div class="form-group">
									<label for="inputgambar">Gambar</label>
									<input type="file" value="<?php echo !empty($gmbr)?$gmbr:'';?>" name="Gambar" placeholder="">
								</div>
								
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="assets/js/moment-with-locales.js"></script>
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.js"></script>
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
	<script>
$(function() { 
 
   $('#tanggal').datetimepicker({
   locale:'id',
   format:'YYYY-MM-DD'
   });
});

</script>	
</body>

</html>

