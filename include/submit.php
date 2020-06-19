<?php

error_reporting(0);
session_start();
$sid=$_SESSION['bmid'];
// $sid;
include('config.php');
	//echo "debug:" ;
//echo $db->debug=true;
//echo "debug:" ;

/*date_default_timezone_set('Asia/Kolkata');
		$today=date('d/m/Y');
		$current=date('H:i:s a');
		$tstamp=time();		*/

if($action=="signin")
{
	
if($email && $password)
		{
			//$passwordd=md5($password); 
			$qry=mysqli_query($con,"SELECT * FROM tbl_admin WHERE email='$email' AND pass='$password'");
				if(!$qry)
				{
					echo "error:Please Contact Database ". mysqli_error($con);
					//exit();
				}
				else
				{
				if($row=mysqli_fetch_assoc($qry))
				{
					if($row['status']=='1')
					{
					    session_start();
				$_SESSION['bmname']=$row['name'];
				$_SESSION['bmuser']=$row['email'];
				$_SESSION['bmpass']=$password;
				$user1=$row['email'];
				$_SESSION['bmid']=$row['id'];
				$id=$_SESSION['bmid'];
				
			    if($remember){
			    echo "redirect:index.php?s=1";
				}else{
				echo "redirect:index.php?";	
					}
				exit();	
					}else
					{
					echo "error:Your Account is Blocked !" ;
					exit();
					}
					
				}else{
								
					echo "error:Enter valid Email and Password";
					exit();
				
					}
				}		
		}
		else
		{
			echo "error:Enter Email Id and Password";
			exit();
		}
}

if($action=="setting")
{
	if($id && $email && $name && $phone )
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
	 {
		 if($password)
		 {
			$passwordd=md5($password);
 mysqli_query($con,"UPDATE `tbl_admin` SET  `password`='$passwordd'  WHERE id='$id' ");
					
		 }
		
			  $j=mysqli_query($con,"UPDATE `tbl_admin` SET `name`='$name', `email`='$email', `phone`='$phone', `address`='$address', `city`='$city', `zip`='$zip'   WHERE id=$id ");
					echo "success:Successfully detail update";
		 			exit();	
			 
	 }else{
		 	echo "error:Enter Valid Email Address";	
			exit();
		 }
	}
	else
	{
		echo "error:All fields are required";	
		exit();
	}
}

if($action=="addcarers")
{
	
	   $choice=$_POST['skill'];
	$choice1=implode(',',$choice);
			 $date=date('d/m/Y');
		$time=date('H:i:s a');
		
	if( $carer_name && $carer_phone && $carer_email && $gender && $bod &&  $choice1  && $address && $postcode && $description && $date && $time)
	{
			if(filter_var($carer_email, FILTER_VALIDATE_EMAIL)) {
		if(preg_match('/^[0-9]{10}+$/', $carer_phone) && ($carer_phone[0]=="6" || $carer_phone[0]=="7" || $carer_phone[0]=="8" || $carer_phone[0]=="9")){
		
		//$password1=md5($password);
		if(!mysqli_num_rows(mysqli_query($con,"SELECT * FROM carers WHERE carer_email='$carer_email' "))){
	 // $tstamp=time();		
	// $image11="";
	// $ext1=end(explode('.',$_FILES['image']['name'])); 
	// $image1=$tstamp.".".$ext1;  
	// move_uploaded_file($_FILES["image"]["tmp_name"], "../carers/".$image1); 
	// $image11="carers/".$image1; 
	 	
	 $j=mysqli_query($con,"INSERT INTO `carers`(`carer_name`, `carer_phone`, `carer_email`, `gender`,`bod`,  `skill`, `address`,`postcode`, `description`, `status`,`date`, `time`) 
	  VALUES ('$carer_name','$carer_phone','$carer_email','$gender','$bod','$choice1', '$address', '$postcode', '$description', '1','$date', '$time' )");
	if(!$j)
				{
					echo "error:Please Contact Database ". mysqli_error($con);
					//exit();
				}
				
	 header("location:../dashboard.php?page=carers-add&m=Successfully Details added");
	exit();	

		}else{
		     header("location:../dashboard.php?page=carers-add&m1=email already exist");
	
	
		exit();
		}
	}
	else
	{
		header("location:../dashboard.php?page=carers-add&m1=phone number required.");	
		exit();
	}
	}
	else
	{
	    header("location:../dashboard.php?page=carers-add&m1=Enter Valid Email Id");
	exit();	
	
	}
	}
	else
	{
	      header("location:../dashboard.php?page=carers-add&m1=All * fields are required.");
	exit();	
	   
	}
}

if($action=="editcarers")
{
	if( $carer_name && $carer_phone  && $carer_email &&  $gender  && $bod && $skill && $address && $postcode && $description )
	
	{
		
		$j=mysqli_query($con,"UPDATE `carers` SET  `carer_name`='$carer_name', `carer_phone`='$carer_phone', `carer_email`='$carer_email', `gender`='$gender'
		, `bod`='$bod',`skill`='$skill', `address`='$address', `postcode`='$postcode' ,`description`='$description'  WHERE `id`='$uid' ");
					
		echo "success:Successfully Details update".mysqli_error($con);
		exit();		
	}
	else
	{
		echo "error:All * fields are required.";	
		exit();
	}
}

if($action=="addpackage")
{
	  	   $choice22=$_POST['name'];
	$choice2=implode(',',$choice22);
	date_default_timezone_set('Asia/Kolkata');
			 $date=date('d/m/Y');
		$time=date('H:i:s a');
		
	if( $category  && $name && $detail && $price && $date && $time)
	{
		//	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		//if(preg_match('/^[0-9]{10}+$/', $phone) && ($phone[0]=="6" || $phone[0]=="7" || $phone[0]=="8" || $phone[0]=="9")){
		
		//$password1=md5($password);
		if(!mysqli_num_rows(mysqli_query($con,"SELECT * FROM item WHERE name='$name' and category='$category'"))){
	  $j=mysqli_query($con,"INSERT INTO `item`(`category`,  `name`, `detail`,`price`, `date`, `time`) 
	  VALUES ('$category','$choice2', '$detail','$price', '$date', '$time' )");
	if(!$j)
				{
					echo "error:Please Contact Database ". mysqli_error($con);
					//exit();
				}
	  echo "success:Successfully Details added";
		exit();	
		}else{
			echo "error:Package already exist";	
		exit();
		}
	}
	
	
	
	else
	{
		echo "error:All * fields are required.";	
		exit();
	}
}

if($action=="editpackage")
{ $service=$_POST['service'];
	$service1=implode(',',$service);
	if( $name && $service1 && $price && $start_date  && $end_date && $description )
	
	{
		
		$j=mysqli_query($con,"UPDATE `package` SET  `name`='$name', `service`='$service1', `price`='$price', `start_date`='$start_date', 
		`end_date`='$end_date', `description`='$description'  WHERE `id`='$uid' ");
					
		echo "success:Successfully Details update".mysqli_error($con);
		exit();		
	}
	else
	{
		echo "error:All * fields are required.";	
		exit();
	}
}


if($action=="editcomplain")
{
	if( $service && $name && $email && $customer_name && $customer_phone  && $address && $message )
	
	{
		
		$j=mysqli_query($con,"UPDATE `complain` SET `service`='$service',  `name`='$name', `email`='$email', `customer_name`='$customer_name', 
		`customer_phone`='$customer_phone',`address`='$address', `message`='$message'  WHERE `id`='$uid' ");
					
		echo "success:Successfully Details update".mysqli_error($con);
		exit();		
	}
	else
	{
		echo "error:All * fields are required.";	
		exit();
	}
}

if($action=="addsalary")
{
	  	   
	date_default_timezone_set('Asia/Kolkata');
			 $date=date('d/m/Y H:i:s a');
		//$time=date('H:i:s a');
		
	if( $carer_email  && $salary && $days && $date)
	{
		//	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		//if(preg_match('/^[0-9]{10}+$/', $phone) && ($phone[0]=="6" || $phone[0]=="7" || $phone[0]=="8" || $phone[0]=="9")){
		
		//$password1=md5($password);
		if(!mysqli_num_rows(mysqli_query($con,"SELECT * FROM salary WHERE carer_email='$carer_email' and date='$date'"))){
	  $j=mysqli_query($con,"INSERT INTO `salary`(`carer_email`,  `salary`, `days`, `date`,`status`) 
	  VALUES ('$carer_email','$salary', '$days','$date','1')");
	if($j)
		{
		mysqli_query($con,"UPDATE `clientservicetime` SET  `status`='1' WHERE `carer_email`='$carer_email' ");
		//header("location:../dashboard.php?page=add-salary&m=Salary Successfully Details added");

		echo "success:Successfully details added";	
		}

// echo "success:Successfully Details added";
 

exit();
}else{
			echo "error:Salary already added";	
		exit();
		}
	}
	
	
	
	else
	{
		echo "error:All * fields are required.";	
		exit();
	}
}

if($action=="allocat_app")
{
	   $choice=$_POST['service'];
	$service1=implode(',',$choice);
	  $weekdays=$_POST['weekdays'];
	$weekdays1=implode(',',$weekdays);
	 $weekends=$_POST['weekends'];
	$weekends1=implode(',',$weekends);
			 $date=date('d/m/Y');
		$time=date('H:i:s a');
		
	if(   $service1 &&  $client_id && $client_email && $client_name && $client_phone && $client_address && $carer_id && $carer_name && $carer_email && $carer_phone  &&   $start_date && $start_time && $end_time && $weekdays1 && $weekends1 && $note && $date && $time)
	{
		
		//$password1=md5($password);
		if(!mysqli_num_rows(mysqli_query($con,"SELECT * FROM  appointment WHERE client_id='$client_id' and carers_id='$carers_id' and start_date='$start_date' "))){
	  $j=mysqli_query($con,"INSERT INTO `appointment`(`service`,`client_id`,`client_email`,`client_name`,`client_phone`,`client_address`,`carer_id` ,`carer_name` ,`carer_email` ,`carer_phone` ,`start_date`,`start_time`,`end_time`,`weekdays`,`weekends`,`note`, `date`, `time`) 
	  VALUES ('$service1','$client_id','$client_email','$client_name','$client_phone','$client_address','$carer_id' ,'$carer_name' ,'$carer_email' ,'$carer_phone' ,'$start_date','$start_time','$end_time','$weekdays1','$weekends1','$note', '$date', '$time')");
	if(!$j)
				{
					echo "error:Please Contact Database ". mysqli_error($con);
					//exit();
				}
	  echo "success:Successfully Details added";
		exit();	
		}else{
			echo "error:appointment already exist !!!!! try one more time";	
		exit();
		}
	}
	
	
	
	else
	{
		//echo "error:Please Contact Database ". mysqli_error($con);
		echo "error:All * fields are required." ;	
		//exit();
	}
}
	






?>