<?php
error_reporting(0);
session_start();
include('config.php');

if ($_POST['t'] == "updatestatus" && $_POST['status'] && $_POST['id'] && $_POST['table']) {
	 	
        $result = mysqli_query($con,"UPDATE  ".$_POST['table']." SET status='".$_POST['status']."' WHERE id='" . $_POST['id'] . "'");

        echo 1;
        exit();
    }	



if ($_POST['t'] == "checkloginstatus") {
	 	if($_SESSION["auser"]!="" && $_SESSION['bmid']!=""){
        echo "1";
        exit();
		}else{
			echo "2";
        	exit();
		}
    }



if($_POST['t'] == "geti" && $_POST['i']) {
	 	
        echo md5($_POST['i']);
        exit();
    }

if ($_POST['t'] == "getstuname" && $_POST['rollno']) {
	 	
       $q=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM tbl_students WHERE rollno='".$_POST['rollno']."' "));
	echo $q['name'];
        exit();
    }

if ($_POST['id'] && $_POST['table'] && $_POST['t2'] == "deleterecord") {
	 	
     //   $result = mysqli_query($con,"UPDATE  ".$_POST['table']."   WHERE id='" . $_POST['id'] . "'");
		if($_POST['table']=="appointment"){
		mysqli_query($con,"DELETE FROM appointment WHERE `id`='".$_POST['id']."' ");	
		}
        echo 1;
        exit();
    }
	if ($_POST['id'] && $_POST['table'] && $_POST['t10'] == "deleterecord") {
	 	
     //   $result = mysqli_query($con,"UPDATE  ".$_POST['table']."   WHERE id='" . $_POST['id'] . "'");
		if($_POST['table']=="user"){
		mysqli_query($con,"DELETE FROM user WHERE `id`='".$_POST['id']."' ");	
		}
        echo 1;
        exit();
    }


if ($_POST['id'] && $_POST['table'] && $_POST['t4'] == "deleterecord") {
	 	
     //   $result = mysqli_query($con,"UPDATE  ".$_POST['table']."   WHERE id='" . $_POST['id'] . "'");
		if($_POST['table']=="carers"){
		mysqli_query($con,"DELETE FROM carers WHERE `id`='".$_POST['id']."' ");	
		}
        echo 1;
        exit();
    }
	if ($_POST['id'] && $_POST['table'] && $_POST['t6'] == "deleterecord") {
	 	
     //   $result = mysqli_query($con,"UPDATE  ".$_POST['table']."   WHERE id='" . $_POST['id'] . "'");
		if($_POST['table']=="item"){
		mysqli_query($con,"DELETE FROM item WHERE `id`='".$_POST['id']."' ");	
		}
        echo 1;
        exit();
    }
	
?>
