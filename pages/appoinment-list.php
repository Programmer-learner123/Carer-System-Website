   <?php
	
	
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
?>
<script src="js/ProcessData.js"></script>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                  Appointment list
                   
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Appointment
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                  
                                </li>
                            </ul>
							
                        </div>
						
                        <div class="body">
                         
               
                     <form role="form" id="frmadd" enctype="multipart/form-data" method="post"  >
                            <input type="hidden" name="action" value="addcomplain" />  
                        <div class="row">
                            <div class="col-md-6 ">
							
											</div>
											</div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example one">
                                        <thead>
                                        <tr>
										  <th>Service</th>
                                            <th>Start date</th>
                                            <th>Start time</th>
											<th style="width:20%">End time</th>
                                         
											<th style="width:20%">Weekdays</th>
										  <th style="width:20%">Weekends</th>
										    <th style="width:20%">Message</th>
											 
											 <th >Action</th>
											
                                        </tr>
                                    </thead>
									  
									<?php
	$no=1;
		
				
	//echo $where;

					$q=mysqli_query($con,"SELECT * FROM `appointment` WHERE 1=1    ORDER BY id DESC");
					while($r=mysqli_fetch_assoc($q))
					{  
					?>
                                    <tbody>
                                        <tr>
										  <tr id="row_id_<?php echo $r['id'];?>">
										   <td  width="10%">  <?php echo $r['service'];?></td>
                                            <td>  <?php echo $r['start_date'];?></td>
                                            <td>  <?php echo $r['start_time'];?></td>
                                            <td>  <?php echo $r['end_time'];?></td>
                                         <td>  <?php echo $r['weekdays'];?></td>
										  <td>  <?php echo $r['weekends'];?></td>
										   <td>  <?php echo $r['note'];?></td>
										 
                                           
                                          
											
                                        
                                   <td colspan="3" width="300">
           <a title="View User" href="dashboard.php?page=app_view&random_no=<?php echo $r['id'];?>&random_no2=<?php echo  $r['client_id'];?>&random_no3=<?php echo  $r['carer_id'];?>"><i class="material-icons">description</i></a>
               
         
    <a title="Delete" onClick="Delete_Raw2('<?php  echo $r['id'];?>','appointment');" ><i class="material-icons">delete</i>
</a>                          </td>
                      </tr>
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
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
       
            <!-- #END# Exportable Table -->
        </div>
    </section>

   
    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>



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