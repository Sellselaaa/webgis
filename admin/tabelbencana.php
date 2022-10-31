<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Webgis Tabel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">


    <link rel="stylesheet" href="css2/font-awesome.min.css">
 
    <link href="css2/datatable-bootstrap.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
				<li class="active">Tabel Data Bencana</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong>DATA BENCANA</strong></h2>
            </div>
            
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
					<th width="0%">Id</th>
					<th width="20%">Nama Bencana</th>
					<th width="20%">Tanggal</th>
					<th width="20%">Alamat</th><br>
					<th width="10%">Kecamatan</th>
					<th width="30%">Keterangan</th>
					<th width="30%">Orang yang luka</th>
					<th width="30%">Orang yang meninggal</th>
					<th width="15%">Action</th>
				</tr>

	<div style="padding-top: 10px;">
		<a href="laporan/cetak.php" target="_blank"><button>Cetak</button></a>
</fieldset>
				<tbody>   
				<?php
					include 'connection.php';
					$query  = "select * from databencana order by id_bencana limit 1000";
					$res    = mysqli_query($con,$query);
					while($row=mysqli_fetch_array($res)){
						echo '<tr>';
						echo '<td>'. $row['Id_bencana'] . '</td>';
						echo '<td>'. $row['namabencana'] . '</td>';
						echo '<td>'. $row['tanggal'] . '</td>';
						echo '<td>'. $row['alamat'] . '</td>';
						echo '<td>'. $row['wilayah'] . '</td>';
						echo '<td>'. $row['keterangan'] . '</td>';
						echo '<td>'. $row['luka'] . '</td>';
						echo '<td>'. $row['meninggal'] . '</td>';
						echo '<td><a class="btn btn-xs btn-primary" href="inputbencana.php?Id_bencana='. $row['Id_bencana'] . '">Tambah</a>
						<a class="btn btn-xs btn-primary" href="updatebencana.php?Id_bencana='. $row['Id_bencana'] . '">Update</a>
								  <a class="btn btn-xs btn-danger" href="hapusbencana.php?Id_bencana='. $row['Id_bencana'] . '">Delete</a>
							  </td>';
						echo '</tr>';

					}
				?>
		 		</tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	


    <script src="js2/script.js"></script>
    <script src="js2/jquery.dataTables.min.js"></script>
    <script src="js2/datatable-bootstrap.js"></script>
</body>

</html>
