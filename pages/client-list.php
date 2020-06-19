   <?php
	
	error_reporting(0);
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
?>
<script src="js/ProcessData.js"></script>
<script src="js/mainlogic.js"></script>
<script type="text/javascript"> 
    function getServiceocc(package_name){  
		 if(package_name!=""){  
		 $.ajax({type: "POST", url: "include/function.php", async: true, data: "package_name=" + package_name + , success: function(data)
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
                  Client list
                   
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Client
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
							 <div class="form-group form-float show-tick">
                             
							
                               
								 
                            <div class="col-md-4 pl-1">
		                                
									       	</div>
											 </div>
											</div>
											</div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example one">
                                        <thead>
                                        <tr>
										
                                            <th>Name</th>
                                            <th>Email</th>
                                            
										 
                                            
                                            <th style="width:20%">Phone</th>
                                         
										  <th style="width:20%">Address</th>
										   
											   
											     <th style="width:20%">Action</th>
											 <th ></th>
											
                                        </tr>
                                    </thead>
									  
									<?php
	$no=1;
		
					$where="";
					if($_POST['package_name']){
						$where .=" AND package_name='".$_POST['package_name']."' ";
					}
					if($_POST['address']){
						$where .=" AND address='".$_POST['address']."' ";
					}
	//echo $where;
					$q=mysqli_query($con,"SELECT * FROM `user`  ORDER BY id DESC");
					while($r=mysqli_fetch_assoc($q))
					{  
					?>
                                    <tbody>
                                        <tr>
										  <tr id="row_id_<?php echo $r['id'];?>">
										  
                                            <td>  <?php echo $r['client_name'];?></td>
                                            <td>  <?php echo $r['client_email'];?></td>
                                            
                                         <td>  <?php echo $r['client_phone'];?></td>
										 
										  <td>  <?php echo $r['address'];?></td>
										 
										
                                           
                                          
											
                                        
                                   <td colspan="3" width="300">
           
          <a title="Delete" onClick="Delete_Raw22('<?php  echo $r['id'];?>','user');" ><i class="material-icons">delete</i>
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