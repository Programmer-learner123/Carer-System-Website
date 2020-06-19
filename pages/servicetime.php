   <?php
	
	error_reporting(0);
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
?>

<script src="js/ProcessData.js"></script>


<script type="text/javascript"> 
    function getServiceocc(service){  
		 if(service!=""){  
		 $.ajax({type: "POST", url: "include/function.php", async: true, data: "service=" + service + , success: function(data)
			  {
				  if (data != 0)
				  {
				  $('#name').val(data);
				  }
				 else
					 alert("Error");
			   }
		   });
		 }
	 } 
	 </script>
	 <script type="text/javascript"> 
function getAddressocc(address){  
		 if(address!=""){  
		 $.ajax({type: "POST", url: "include/function.php", async: true, data: "address=" + address + , success: function(data)
			  {
				  if (data != 0)
				  {
				  $('#name').val(data);
				  }
				 else
					 alert("Error");
			   }
		   });
		 }
	 }

	
</script>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                  Service Time List
                   
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Service Time of Carers
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
                           
                        <div class="row">
                            
                        <div class="body">
                     
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example one">
                                        <thead>
                                        <tr>
                                           
                                           
                                            <th>Client Phone</th>
											<th>Client Email</th>
                                            <th>OTP</th>
											<th>Carer Email</th>
                                            <th>Date & Time</th>
										    <th>Action</th>
                                        </tr>
                                    </thead>
									  
									<?php
	//echo $where;
					$q=mysqli_query($con,"SELECT * FROM `clientservicetime` where status='0' ORDER BY id DESC");
					while($r=mysqli_fetch_assoc($q))
					{  
					?>
                                    <tbody>
                                        <tr>
										  <tr id="row_id_<?php echo $r['id'];?>">
                                            <td>  <?php echo $r['client_phone'];?></td>
                                            <td>  <?php echo $r['client_email'];?></td>
                                           
                                            <td>  <?php echo $r['OTP'];?></td>
                                            <td>  <?php echo $r['carer_email'];?></td>
										
											<td >  <?php echo $r['date'];?></td>
                                          
											
                                        
                                   <td colspan="3" width="300">
           <a title="View User" href="dashboard.php?page=add-salary&t&random_no=<?php echo  md5($r[carer_email]);?>" ><i class="material-icons">description</i></a>
              
</a>       
                        </td>
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