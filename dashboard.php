<?php
ob_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
	//error_reporting(0);
		include('include/config.php');
	session_start();
	$id=$_SESSION['bmuser'];
	echo $id;
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:index.php?msg=login first");
	}else
	{
?>
<!DOCTYPE html>
<html lang="en">
<?php include('include/head.php'); ?>
<body>
<section id="container">
<!--header start-->
<?php include('include/header.php'); ?>
<!--header end-->
<!--sidebar start-->
<?php include('include/aside1.php'); ?>
<style >

</style>
<!--main content start-->
<section id="main-content" class="" >

<?php 
$page=$_GET['page'];
include('pages/'.$page.'.php');

 ?>


    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
<?php
    ob_end_flush() ;  
	}
	?>
