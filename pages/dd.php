
<?php
error_reporting(0);
$str=$_GET['email'];

session_start();
include('config.php');


$sql="SELECT * FROM `employee` WHERE 	email ='".$str."'";

$result = mysqli_query($con,$sql);
if(!$result)
				{
					echo "error:Please Contact Database ". mysqli_error($con);
					//exit();
				}


while($row = mysqli_fetch_array($result))
{
	$phone=$row['phone'];
	echo $phone;
echo "<option>" . $row['phone'] . "</option>";
 
}
	
//echo "</select>";
?>

