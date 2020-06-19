<?php

session_start();

    //$_SESSION['u_name'] = "";
	session_unset();
    unset($_SESSION['bmuser']);
    unset($_SESSION['bmid']);
	
$_SESSION['bmname']="";
$_SESSION['bmuser']="";
$_SESSION['bmid']="";
session_destroy();
    header("Location: index.php?msg=You are successfully logged out");
    exit();
?>