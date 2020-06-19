<?php
	error_reporting(0);
	
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
		
		$today=date('d/m/Y');	
	$tcvisit=mysqli_num_rows(mysqli_query($con,"SELECT * FROM carers WHERE status='1' "));
	$tlapplication=mysqli_num_rows(mysqli_query($con,"SELECT * FROM ` client` WHERE date='$today' "));
	$tmrequest=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `appointment` WHERE date='$today' "));
	$totmrequest=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `package` WHERE status='1' "));
	echo $totmrequest;
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               <!-- <h2>DASHBOARD</h2> -->
            </div>

            <!-- Widgets 
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Carers</div>
                            <div class="number count-to" ><?php echo $tcvisit;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">Appoinment</div>
                            <div class="number count-to" ><?php echo $tmrequest;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">Maneger</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" ><?php echo $tlapplication;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Package</div>
                            <div class="number count-to" ><?php echo $totmrequest;?></div>
                        </div>
                    </div>
                </div>
            </div> -->
         
          <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>PROFILE</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">				<?php
	//echo $where;
					$q=mysqli_query($con,"SELECT * FROM `tbl_admin` WHERE email='".$_SESSION['bmuser']."'  ORDER BY id DESC");
					while($r=mysqli_fetch_assoc($q))
					{  
					?>
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
											  <td><?php echo $r['name'];?></td>
											 </tr>
											  <tr>
                                            <th>Phone</th>
											<td><span class="label bg-green"><?php echo $r['phone'];?></span></td>
											 </tr>
											  <tr>
                                            <th>Email</th>
											   <td><?php echo $r['email'];?></td>
											    </tr>
												 <tr>
                                            <th>Address</th>
											  <td><?php echo $r['address'];?></td>
											   
											  
                                        </tr>
                                    </thead>
									
					
                                       <?php
						$no++;
					}
					?>
                                     
                                    
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="row clearfix">
                <!-- Task Info -->
      
                
            </div>
        </div>
    </section>
 <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../plugins/raphael/raphael.min.js"></script>
    <script src="../plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="../plugins/chartjs/Chart.bundle.js"></script>

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
	<?php
	}
?>