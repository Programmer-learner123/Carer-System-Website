<?php
error_reporting(0);
session_start();
if($_GET['s'])
	{
			
	$year = time() + 31536000;
	if($_GET['s']) {
	setcookie('pa_username', $_SESSION['bmuser'], $year);
	setcookie('pa_password', $_SESSION['bmpass'], $year);
	setcookie('pa_remember', "1", $year);
	unset($_SESSION['bmpass']);
	}
	elseif(!$_GET['s']) {
	if(isset($_COOKIE['pa_username'])) {
		$past = time() - 100;
		setcookie(pa_password, gone, $past);
	}
	if(isset($_COOKIE['pa_password'])) {
		$past = time() - 100;
		setcookie(pa_password, gone, $past);
	}
	if(isset($_COOKIE['pa_remember'])) {
		$past = time() - 100;
		setcookie(pa_remember, gone, $past);
	}
	}
	header('Location:dashboard.php?page=main');
	}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In |  Admin </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css?version=3" rel="stylesheet">
	<script src="js/ProcessData.js"></script>
<script src="js/mainlogic.js"></script>
</head>

<body class="login-page banner">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>Carer</b></a>
            
        </div>
		
        <div class="card">
            <div class="body">
			
               <form class="form-signin" id="login" action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="action" value="signin" />
			<div class="msg"><div id="notification"></div></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" id="login_username" value="<?php echo $_COOKIE['pa_username'];?>" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="login_password" value="<?php echo $_COOKIE['pa_password'];?>"  >
                        </div>
                    </div>
                  
                       
                        
                    <input type="checkbox" id="remember" class="filled-in" name="remember" value="1" <?php if($_COOKIE['pa_remember']){ ?> checked<?php } ?>>
                                <label for="remember">Remember Me</label>
                                <br>
								 <div class="col-xs-4">
                                <button class="btn btn-block bg-pink waves-effect" id="btnlogin" onClick="ProcessForm('#btnlogin','include/submit.php','#login','#notification','','',false)" type="button">Sign in</button>
					 </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                           
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>
