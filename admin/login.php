<?php
session_start();
extract($_POST);
$con=mysqli_connect('localhost','root','','webgis');


if(isset($_GET['qwi'])=="r")
{
$ps="
            <div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
            <h4><i class='icon glyphicon glyphicon-ok'></i> Please Check Email !</h4> Username and Password have been sent
            </div>
        ";
		echo $ps; 
}

if(isset($login)){
	if(mysqli_num_rows(mysqli_query($con,"select Id_admin from admin where username='$username' and password='$password'")))
    {
        $tipe=mysqli_fetch_row(mysqli_query($con,"select Id_admin from admin where username='$username' and password='$password'"));
		$_SESSION['kosong']=$tipe[0];
        header("location:./");
	}
	else
        $ps="
            <div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
            <h4><i class='icon glyphicon glyphicon-remove'></i> Wrong !</h4> Wrong username or password :(
            </div>
        ";
		echo $ps;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Form Login</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body class="login-page">
    <div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Admin Login</div>
				<div class="panel-body">
        <form method="post">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username" />
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" />
            </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-block btn-flat pull-right" value="Login" name="login"/>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
     
    </div><!-- /.login-box -->
		

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
