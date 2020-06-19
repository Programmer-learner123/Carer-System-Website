   <?php
	
	error_reporting(0);
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
?>
<script src="js/ProcessData.js"></script>

	<?php

	
				

echo $npid2;
echo $npid3;
	?>
    <section class="content">
        <div class="container-fluid">
            
          <div class="row clearfix">
                <!-- Linked Items -->
                <div class=" col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Information
                             </h2>
						
							
                        
                        </div>
						
                        <div class="body">
                            <div class="list-group">
                               
									<h3>Appointment Information</h3>
								<?php
									$npid1=$_GET['random_no'];
									//echo $npid1;
								$q=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `appointment` WHERE `id`='$npid1'"));
									?>
                                <a href="javascript:void(0);" class="list-group-item">Name :&nbsp;&nbsp;&nbsp;<?php echo $q['service'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Start Date :&nbsp;&nbsp;&nbsp;<?php echo $q['start_date'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Start Time:&nbsp;&nbsp;&nbsp;<?php echo $q['start_time'];?></a>
                                
                                <a href="javascript:void(0);" class="list-group-item">End Time :&nbsp;&nbsp;&nbsp;<?php echo $q['end_time'];?></a>
								<a href="javascript:void(0);" class="list-group-item">Weekdays :&nbsp;&nbsp;&nbsp;<?php echo $q['weekdays'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Weekends :&nbsp;&nbsp;&nbsp;<?php echo $q['weekends'];?></a>
								 
								 <a href="javascript:void(0);" class="list-group-item">Note :&nbsp;&nbsp;&nbsp;<?php echo $q['note'];?></a>
								<br/>
								<?php
									$npid2=$_GET['random_no2'];
									//echo $npid2;
								$q2=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$npid2' "));
									?>
									<h3>Client information</h3>
							 <a href="javascript:void(0);" class="list-group-item">Name :&nbsp;&nbsp;&nbsp;<?php echo $q2['client_name'];?></a>
								 <a href="javascript:void(0);" class="list-group-item">Email :&nbsp;&nbsp;&nbsp;<?php echo $q2['client_email'];?></a>
								 <a href="javascript:void(0);" class="list-group-item">Date of birth :&nbsp;&nbsp;&nbsp;<?php echo $q2['dob'];?></a>
								 <a href="javascript:void(0);" class="list-group-item">Phone :&nbsp;&nbsp;&nbsp;<?php echo $q2['client_phone'];?></a>
								
								<br/>
								<?php
								$npid3=$_GET['random_no3'];
								// echo $npid3;
										$q3=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM `carers` WHERE `id`='$npid3' "));
	?>
								<h3>Carers information</h3>
							 <a href="javascript:void(0);" class="list-group-item">Name :&nbsp;&nbsp;&nbsp;<?php echo $q3['carer_name'];?></a>
								 <a href="javascript:void(0);" class="list-group-item">Email :&nbsp;&nbsp;&nbsp;<?php echo $q3['carer_email'];?></a>
								 <a href="javascript:void(0);" class="list-group-item">Birth of date :&nbsp;&nbsp;&nbsp;<?php echo $q3['bod'];?></a>
								 <a href="javascript:void(0);" class="list-group-item">Phone :&nbsp;&nbsp;&nbsp;<?php echo $q3['carer_phone'];?></a>
							 <a href="javascript:void(0);" class="list-group-item">Gender :&nbsp;&nbsp;&nbsp;<?php echo $q3['gender'];?></a>
								
							
							
                           <div  style="margin-top:20px">
                   <iframe class="cnt" frameborder="0" width="100%" height="300" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $q2['address']; ?>&output=embed" s ></iframe>

                </div>
							
							
							
							
							</div>
                        </div>
                    </div>
                </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
       
            <!-- #END# Exportable Table -->
        </div>
    </section>

   
 <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

   
</body>

</html>
 <?php
	}
?>