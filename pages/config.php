<?php

$con = mysqli_connect("localhost","root","","company");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  


foreach($_POST as $k=>$v){
    ${$k}=$v;
}

foreach($_GET as $k=>$v){
    ${$k}=$v;
}

foreach($_FILES as $k=>$v)
{
     if(strpos($v['name'], '.php') !== false)

  {
            unlink($v['tmp_name']);
   }

}


?>