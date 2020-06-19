<?php
error_reporting(0);

include("DbConnect.php");

foreach($_POST as $k=>$v)
{	${$k}=$v; } 

foreach($_GET as $k=>$v)
{	${$k}=$v; }


/*echo date('H');
echo date('a');
echo date('d/m/Y H:i:sa');
echo $today=date('l', strtotime($date .' -1 day'));*/ 
//$SignIn=$_GET['SignIn']
date_default_timezone_set('Asia/Kolkata');
  
if($action=='SignIn')
{
	if($client_email && $password)
	{   
	    //$password1=md5($password);
		  	
		if(($m=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `user` WHERE `client_email`='$client_email' AND password='$password'"))))
		{
			
		
       
        //mysqli_query($con,"UPDATE `tbl_admin` SET `fcmid`='$fcmid' WHERE  `id`='".$m['id']."'");
        //$role="";
      

		$OUT['id']=$m['id'];   
		$OUT['client_name']=$m['client_name'];
		$OUT['client_email']=$m['client_email'];
		
		$OUT['client_phone']=$m['client_phone'];
		$OUT['address']=$m['address'];
		
		$OUT['code']=200;
		$OUT['msg']="success";
		
		}else{
		
		      $OUT['code']=204;
			  $OUT['msg']="You Entered wrong credential ";
		}
	}else{
		
		      $OUT['code']=204;
		      $OUT['msg']="Email and Password both required";
		}
		echo json_encode($OUT);
		exit();
}
if($action=='CaretakerSignIn')
{
	if($carer_email && $carer_phone)
	{   
	    //$password1=md5($password);
		  	
		if(($m=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `carers` WHERE `carer_email`='$carer_email' AND carer_phone='$carer_phone'"))))
		{
			
		
       
        //mysqli_query($con,"UPDATE `tbl_admin` SET `fcmid`='$fcmid' WHERE  `id`='".$m['id']."'");
        //$role="";
      

		$OUT['id']=$m['id'];   
		$OUT['carer_name']=$m['carer_name'];
		$OUT['carer_email']=$m['carer_email'];
		
		$OUT['carer_phone']=$m['carer_phone'];
		$OUT['address']=$m['address'];
		
		$OUT['code']=200;
		$OUT['msg']="success";
		
		}else{
		
		      $OUT['code']=204;
			  $OUT['msg']="You Entered wrong credential ";
		}
	}else{
		
		      $OUT['code']=204;
		      $OUT['msg']="Email and Password both required";
		}
		echo json_encode($OUT);
		exit();
}
 //
if($action=='SignUp')
{ 
   
     if($client_name && $client_email && $password && $client_phone && $address){
          if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `user` WHERE `client_email`='$client_email'  "))>0){
			  
			  $OUT['code']=204;
		    $OUT['msg']="User Already Reistered";
		  }
		  else
		  {   
          $date=date('d/m/Y'); $time=date('H:i:s a');  
      //1 means open & 2 means close
	    $q=mysqli_query($conn,"INSERT INTO `user`(`client_name`, `client_email`, `password`, `client_phone`, `address`) VALUES ('$client_name', '$client_email', '$password', '$client_phone', '$address')");
       
       $OUT['code']=200;
	   $OUT['msg']="User Submitted Successfully";
       }
	    echo json_encode($OUT);
		exit();
	 }    
		


}

if($action=='Feedback')
{ 
   
     if($carer_name && $carer_email && $opinion && $client_email){
         $date=date('d/m/Y'); $time=date('H:i:s a');  
      //1 means open & 2 means close
	    $q=mysqli_query($conn,"INSERT INTO `feedback`(`carer_name`, `carer_email`, `opinion`, `client_email`,`date`) VALUES ('$carer_name', '$carer_email', '$opinion', '$client_email','$date')");
       
       $OUT['code']=200;
	   $OUT['msg']="Feedback Submitted Successfully";
			  
			 
		  }
		  else
		  { 
         $OUT['code']=204;
		      $OUT['msg']="Not Submitted";	  
          
       }
	    echo json_encode($OUT);
		exit();
	 }    
		




if($action=='OTP')
{ 
   
     if($client_phone){
         if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `otp` WHERE `client_phone`='$client_phone'"))>0)
         {
         $date=date('d/m/Y'); $time=date('H:i:s a'); 
         $otp = rand(100000, 999999);		 
      //1 means open & 2 means close
	    $q=mysqli_query($conn,"INSERT INTO `otp`(`client_phone`, `otp`, `date`) VALUES ('$client_phone', '$otp', '$date')");
		
		$OUT['otp']=$otp;
       
       $OUT['code']=200;
	   $OUT['msg']="Otp generated Successfully";
			  
			 
		  }
		  else
		  {   
	  
            $OUT['code']=204;
		    $OUT['msg']="Client phone not matched";
       }
     }
     
		  else
		  { 
              $OUT['code']=204;
		      $OUT['msg']="Not generated";	  
          
       }
	    echo json_encode($OUT);
		exit();
	 }    
		


if($action=='OTPTIME')
{ 
   
     if($client_phone && $client_email && $OTP && $carer_email){
          if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `otp` WHERE `otp`='$OTP'"))>0){
			   if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `user` WHERE `client_email`='$client_email'"))>0){
			  $date=date('d/m/Y H:i:s a');   
      //1 means open & 2 means close
	    $q=mysqli_query($conn,"INSERT INTO `clientservicetime`(`client_phone`, `client_email`, `OTP`, `carer_email`,`status`, `date`) VALUES ('$client_phone', '$client_email', '$OTP', '$carer_email','0', '$date')");
       
	  
       $OUT['code']=200;
	   $OUT['msg']="Time Submitted Successfully";
			  
			
		  } else
		  {   
	  
            $OUT['code']=204;
		    $OUT['msg']="Client Email not matced";
       }
		  }
		  else
		  {   
	  
             $OUT['code']=204;
		    $OUT['msg']="OTP not matched";
       } 
	    
	    echo json_encode($OUT);
		exit();
	 }
		
	 }    
		

if($action=='passwordcan')
{  
if($email && $password)
	{  
if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `user` WHERE `email`='$email' "))>0){
	 $q2=mysqli_query($con,"UPDATE `user` SET `password`='$password' WHERE `email`='$email'");
	 
	   $OUT['code']=200;
	   $OUT['msg']="password has been changed.";
         
}
else
{
	  $OUT['code']=204;
			  $OUT['msg']="You Entered wrong email ";
}
   }  

else{
	          $OUT['code']=204;
			  $OUT['msg']="You Entered wrong email ";
}
echo json_encode($OUT);
	exit();	
}


if($action=='itemfetch')
{ 
       if($category){
		
		//$category1=$_GET['category'];
	 $q=mysqli_query($conn,"SELECT * FROM `item` WHERE `category`='".$category."' ORDER BY id ASC");
	while($r=mysqli_fetch_assoc($q)){    
	    
		   			$classsub['id']=$r['id'];
					$classsub['category']=$r['category']; 
					$classsub['name']=$r['name']; 
					$classsub['price']=$r['price'];	 	
					$classsub['detail']=$r['detail'];
										
						
	        $classarrsub[]=$classsub;	 
	       //$re['data']=$response;	
	}
     $OUT['classes_cart']=$classarrsub;
	 
	   $OUT['code']=200;
	   $OUT['msg']="success";
		    
		echo json_encode($OUT);
		exit();
	   }else{
    	 $OUT['code']=204;
		 $OUT['msg']="fields are not founded";
    	 }
}
		 	
		 
if($action=='orderfetch')
{ 
    if($client_email){
		
		//$category1=$_GET['category'];
	 $q=mysqli_query($conn,"SELECT * FROM `booking` WHERE `email`='".$client_email."' ORDER BY id ASC");
	while($r=mysqli_fetch_assoc($q)){    
	    
		   			$classsub['id']=$r['id'];
		   	       $classsub['name']=$r['name']; 
				   $classsub['email']=$r['email'];
					$classsub['category']=$r['category'];
					$classsub['services']=$r['services'];					
			 	  $classsub['price']=$r['price']; 
				 
				 	$classsub['description']=$r['description']; 
					
$classsub['date']=$r['date'];					
					 	
						
	        $classarrsub[]=$classsub;	 
	       //$re['data']=$response;	
	}
     $OUT['classes_cart']=$classarrsub;
	 
	   $OUT['code']=200;
	   $OUT['msg']="success";
		    
		echo json_encode($OUT);
		exit();
}else{
    	 $OUT['code']=204;
		 $OUT['msg']="fields are not founded";
    	 }
		 }	


if($action=='appointment')
{ 
    if($client_email){
		
		$client_email=$_GET['client_email'];
		//$date1=$_GET['date'];
		$date = date('Y-m-d');
		//echo $date;
		
	 $q=mysqli_query($conn,"SELECT * FROM `appointment` WHERE `client_email`='".$client_email."' and DATE(start_date) >= '$date' ORDER BY id ASC");
	while($r=mysqli_fetch_assoc($q)){    
	    
		   			$classsub['carers_id']=$r['carers_id'];
		   	       $classsub['carer_name']=$r['carer_name']; 
		   	       $classsub['carer_email']=$r['carer_email']; 
			 	  $classsub['carer_phone']=$r['carer_phone']; 
				 	$classsub['start_date']=$r['start_date']; 
					 	$classsub['start_time']=$r['start_time'];
					$classsub['end_time']=$r['end_time'];
					
						
	        $classarrsub[]=$classsub;	 
	       //$re['data']=$response;	
	}
     $OUT['classes_cart']=$classarrsub;
	 
	   $OUT['code']=200;
	   $OUT['msg']="success";
		    
		echo json_encode($OUT);
		exit();
}else{
    	 $OUT['code']=204;
		 $OUT['msg']="fields are not founded";
    	 }
		 }


if($action=='payment')
{ 
 $order_id=ord.rand(100,500); 
     if( $order_id && $data  && $amount && $client_email && $client_phone ){
		 //$data2=$_POST['data']; 

$data2 = explode("___", $data);
foreach($data2 as $str){
 //echo $str . "<br />";
 $str2 = explode("__", $str);
 
 $item_id= $str2[0]; // piece1
  //echo $item_id . "<br />";
  
 $item_name=$str2[1]; // piece2
   //echo $item_name . "<br />";
   
  $price=$str2[2];  
    //echo $price . "<br />";
	
  $quantity=$str2[3]; 
   // echo $quantity . "<br />";
 $detail=$str2[4]; 
//echo $detail . "<br />";

          if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `order` WHERE `item_name`='$item_name'  "))>0){
			  
			  $OUT['code']=204;
		    $OUT['msg']="Package already added!";
		  }
		  else
		  {   
          $date=date('d/m/Y H:i:s');  
		 
// $order_id=rand(100,500);

//shuffle($order_id); 
      //1 means open & 2 means close
	    $q=mysqli_query($conn,"INSERT INTO `order`(`order_id`,`item_id`,`item_name`,`price`,`quantity`,`detail`, `amount`, `client_email`, `client_phone`, `date`) 
		VALUES ('$order_id','$item_id','$item_name','$price','$quantity','$detail','$amount', '$client_email', '$client_phone', '$date')");
       if(!$q)
		{
			echo "error ". mysqli_error($conn);
		}
       $OUT['code']=200;
	   $OUT['msg']="Order Submitted Successfully";
       }
}
	    echo json_encode($OUT);
		exit();
	    
		
}

}



if($action=='view_appointment')
{ 
    if($carer_email){
		
		//$carer_email=$_GET['carer_email'];
		//$date1=$_GET['date'];
		$date = date('Y-m-d');
		//echo $date;
		
	 $q=mysqli_query($conn,"SELECT * FROM `appointment` WHERE `carer_email`='".$carer_email."' and DATE(start_date) = '$date' ORDER BY id ASC");
	while($r=mysqli_fetch_assoc($q)){    
	    
		   			$classsub['client_id']=$r['client_id'];
		   	       
			 	  $classsub['client_name']=$r['client_name'];
				  $classsub['client_email']=$r['client_email']; 
					$classsub['client_phone']=$r['client_phone'];	
					$classsub['client_address']=$r['client_address'];					
				 	$classsub['start_date']=$r['start_date']; 
					 	$classsub['start_time']=$r['start_time'];
					$classsub['end_time']=$r['end_time'];
						
	         $classarrsub[]=$classsub;	 
	       //$re['data']=$response;	
	}
     $OUT['classes_cart']=$classarrsub;
	 
	 
	   $OUT['code']=200;
	   $OUT['msg']="success";
		    
		echo json_encode($OUT);
		exit();
}else{
    	 $OUT['code']=204;
		 $OUT['msg']="fields are not founded";
    	 }
		 }	
		 
if($action=='salary')
{ 
    if($carer_email){
		
		//$carer_email=$_GET['carer_email'];
		//$date1=$_GET['date'];
		$date = date('Y-m-d');
		//echo $date;
		
	 $q=mysqli_query($conn,"SELECT * FROM `salary` WHERE `carer_email`='".$carer_email."' ORDER BY id ASC");
	while($r=mysqli_fetch_assoc($q)){    
	    
		   			$classsub['carer_email']=$r['carer_email'];
		   	       
			 	  $classsub['salary']=$r['salary'];
				  $classsub['days']=$r['days']; 
					$classsub['date']=$r['date'];	
					
						
	         $classarrsub[]=$classsub;	 
	       //$re['data']=$response;	
	}
     $OUT['classes_salary']=$classarrsub;
	 
	 
	   $OUT['code']=200;
	   $OUT['msg']="success";
		    
		echo json_encode($OUT);
		exit();
}else{
    	 $OUT['code']=204;
		 $OUT['msg']="fields are not founded";
    	 }
		 }			 
if($action=='booking')
{ 
  
   
     if($name && $email && $category &&  $services && $price && $description  ){
          if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `booking` WHERE `email`='$email' and `category`='$category'  and `now_time`='$now_time'  "))){
			  
			  $OUT['code']=204;
		    $OUT['msg']="You already park your car..";
			//$OUT['msg']="Registration here...";
		  }
		  else
		  {   
	//echo date('d-m-Y H:i:s');
	  //mysqli_query($conn,"UPDATE `slot` SET `status`='1' WHERE `name`='$slot'");   

        date_default_timezone_set("Asia/Calcutta"); 
$date = date('Y-m-d H:i:s a');		//India time (GMT+5:30)

      //1 means open & 2 means close
	    $q=mysqli_query($conn,"INSERT INTO `booking`(`name`,`email`, `category`,  `services`, `price`, `description`,  `date`) 
		VALUES ('$name','$email',   '$category', '$services', '$price', '$description',  '$date')");
     
	   if($m=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `booking` WHERE `email`='$email' AND category='$category' ORDER BY id DESC LIMIT 1")))
	   {
	   	$OUT['id']=$m['id'];
		
		$OUT['category']=$m['category'];		
		$OUT['services']=$m['services'];
				$OUT['price']=$m['price'];
	       $OUT['code']=200;
	   $OUT['msg']="Package Submitted Successfully";
       }
	
	   else{
		
		      $OUT['code']=204;
			  $OUT['msg']="Contact Administarator";
		}
		  }
	    echo json_encode($OUT);
		exit();
	 }
}	 
		
		 
?>

    