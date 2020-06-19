	<?php
	$npid=$_GET['random_no'];
	
	$npid2=$_GET['random_no2'];
	$npid3=$_GET['random_no3'];
echo $npid;
echo $npid2;
echo $npid3;
	//$q=mysqli_fetch_assoc(mysqli_query($con,"SELECT client.*,appointment.* FROM  appointment , client where client.id=appointment.client_id and  appointment.md5(`client_id`)='$npid'  "));
	$q=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `appointment` WHERE md5(`id`)='$npid'"));
	$q2=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `client` WHERE md5(`id`)='$npid2'"));
	$q3=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `carers` WHERE md5(`id`)='$npid3'"));
	?>
	  <a href="javascript:void(0);" class="list-group-item"><?php echo $q['service'];?></a>
	  <a href="javascript:void(0);" class="list-group-item"><?php echo $q2['name'];?></a>
	  <a href="javascript:void(0);" class="list-group-item"><?php echo $q3['name'];?></a>
                       