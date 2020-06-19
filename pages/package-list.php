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



    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                  Package list
                   
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
						
                        <div class="body">
                     
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example one">
                                        <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Services</th>
                                            
                                             <th>Detail</th>
                                             <th>Price</th>
                                            
                                            <th >Date</th>
                                          <th >Time</th>
										  <th >Action</th>

										
											 
											
                                        </tr>
                                    </thead>
									  
									<?php
	$no=1;
		
					$where="";
					if($_POST['service']){
						$where .=" AND service='".$_POST['service']."' ";
					}
					if($_POST['name']){
						$where .=" AND name='".$_POST['name']."' ";
					}
					$q=mysqli_query($con,"SELECT * FROM `item`  ORDER BY id DESC");
					while($r=mysqli_fetch_assoc($q))
					{  
					?>
                                    <tbody>
                                        <tr>
										  
                                            <td>  <?php echo $r['category'];?></td>
                                            <td>  <?php echo $r['name'];?></td>
                                            
                                        
                                            <td  width="10%">  <?php echo $r['detail'];?></td>
                                          <td  width="10%">  <?php echo $r['price'];?></td>
                                          <td  width="10%">  <?php echo $r['date'];?></td>
										  <td  width="10%">  <?php echo $r['time'];?></td>
										<td  width="10%"> <a title="Delete" onClick="Delete_Raw6('<?php  echo $r['id'];?>','item');" ><i class="material-icons">delete</i>
</a>                 
</td>

                                          	<td>   
            
            	
            </select>
            </td>
			
											
                                        
                                   <td colspan="3" width="300">
         
          
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