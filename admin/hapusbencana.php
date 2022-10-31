<?php
	require 'connection.php';
    $Id= null;
    if(!empty($_GET['Id_bencana']))
    {
        $Id = $_GET['Id_bencana'];
    }
    if($Id == null)
    {
        header("Location: tabelbencana.php");
    } 
    if ( !empty($_POST))
    {
        
        // Delete Data
        $Id = $_POST['Id_bencana'];
       
        $query = "Delete from databencana where Id_bencana=$Id";
		mysqli_query($con,$query);
        header("Location: tabelbencana.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Input Data Bencana</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

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
                    <li>
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
                <li class="active">Hapus Data Bencana</li>
            </ol>
        </div><!--/.row-->
        

<div class="container">
    <div class="row">
        <div class="row">
            <h3>Hapus Data</h3>
        </div>
		<form method="POST" action="hapusbencana.php">
			<input type="hidden" name="Id_bencana" value="<?php echo $Id;?>" />
			<p class="bg-danger" style="padding: 10px;">Apakah anda ingin menghapus data ini?</p>
			<div class="form-actions">
				<button type="simpan" class="btn btn-danger">Ya</button>
				<a class="btn btn btn-default" href="tabelbencana.php">Tidak</a>
			</div>
		</form>
                
    </div> <!-- /row -->
</div> 

</body>
</html>
