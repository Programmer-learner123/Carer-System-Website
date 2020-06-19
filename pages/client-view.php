   <?php
	
	
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
?>
<script src="js/ProcessData.js"></script>
<script>

		function loadContent(p,i){
			$.ajax({type: "POST", url: "include/function.php", async: true, data: "i=" + i + "&t=geti" , success: function(data)
			  {
				  if (data != 0)
				  {
				  window.location.href="dashboard.php?page=client-view&t&random_no="+data;
				  }
				 else
					 alert("Error");
			   }
		   });
			
			}	
	 
</script>
	<?php
	$npid=$_GET['random_no'];
//echo $npid;
	$q=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `user` WHERE md5(`id`)='$npid'"));
	?>
    <section class="content">
        <div class="container-fluid">
            
          <div class="row clearfix">
                <!-- Linked Items -->
                <div class=" col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                View client
                             </h2>
						
							
                        
                        </div>
						 <div class="body">
                         <div class="button-demo" style="float:right">
                                 <a class="<?php if($_GET['page']=="client"){ ?>active<?php } ?>" href="dashboard.php?page=allocate-appoinment&t&random_no=<?php echo  md5($q[id]);?>"">
                   
							   <button type="button" class="btn bg-red waves-effect">Allocate Carer to Client</button>
								</a>
				 
				 </div>   
				  </div>
                        <div class="body">
                            <div class="list-group">
                                 <a href="javascript:void(0);" class="list-group-item active">
                                    <select class="form-control show-tick" id="e1" class="populate " onChange="loadContent('client-view',this.value)"  name="npid" style="width: 300px">
						<option value="">Select client</option>
							<?php
							$v=mysqli_query($con,"SELECT * FROM user");
							while($v1=mysqli_fetch_assoc($v))
								{
							?>
							<option value="<?php  echo $v1['id'];?>" <?php if(md5($v1['id'])==$npid){ ?> selected <?php } ?> ><?php  echo $v1['client_name']?></option>
							<?php
							}
								?>
					</select>
                                </a>
								
                                <a href="javascript:void(0);" class="list-group-item">Name :&nbsp;&nbsp;&nbsp;<?php echo $q['client_name'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Email :&nbsp;&nbsp;&nbsp;<?php echo $q['client_email'];?></a>
                                
                                
                                <a href="javascript:void(0);" class="list-group-item">Phone :&nbsp;&nbsp;&nbsp;<?php echo $q['client_phone'];?></a>
								
                                <a href="javascript:void(0);" class="list-group-item">Address :&nbsp;&nbsp;&nbsp;<?php echo $q['address'];?></a>
								 
								 
                           <div  style="margin-top:20px">
                   <iframe class="cnt" frameborder="0" width="100%" height="300" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $q['address']; ?>&output=embed" s ></iframe>

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