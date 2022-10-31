<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Input Berita Terbaru</title>

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
		<?php
			include"menu.php";
			?>
    </div><!--/.sidebar-->
		
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Input Berita</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Berita Terbaru</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
					<form method="POST" action="inputdataberita.php">
						<div class="col-md-6">
							<form role="form">

								<div class="form-group">
									<label for="inputtgl">Tanggal</label>
									<div class="input-group date" id="tanggal">
										<input type="text" class="form-control" value="<?php echo !empty($tgl)?$tgl:'';?>" name="tanggal" placeholder=""/>	
										<span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="inputjudul">Judul</label>
									<input type="text" class="form-control" required="required" id="inputjudul" value="<?php echo !empty($judul)?$judul:'';?>" name="judul" placeholder="">
								</div>

								<div class="form-group">
									<label for="inputkonten">Konten</label>
									<textarea class="form-control" required="required" cols="30" rows="10" id="inputkonten" value="<?php echo !empty($konten)?$konten:'';?>" name="konten" placeholder="" ></textarea>
								</div>

								<div class="form-group">
									<label for="inputgambar">Gambar</label>
									<input type="file" value="<?php echo !empty($gmbr)?$gmbr:'';?>" name="gambar" placeholder="">
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
