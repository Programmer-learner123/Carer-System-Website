   <?php
	
	
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
?>
<script>

		function loadContent(p,i){
			$.ajax({type: "POST", url: "include/function.php", async: true, data: "i=" + i + "&t=geti" , success: function(data)
			  {
				  if (data != 0)
				  {
				  window.location.href="dashboard.php?page=carers-view&t&random_no="+data;
				  }
				 else
					 alert("Error");
			   }
		   });
			
			}	
	 
</script>
    <section class="content">
        <div class="container-fluid">
            
          <div class="row clearfix">
                <!-- Linked Items -->
                <div class=" col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                View Employee
                             </h2>
						
							
                        
                        </div>
						
					<?php
	$npid=$_GET['random_no'];
//echo $npid;
	$q=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `carers` WHERE md5(`id`)='$npid'"));
	?>
                        <div class="body">
                            <div class="list-group">
                                 <a href="javascript:void(0);" class="list-group-item active">
                                    <select class="form-control show-tick" id="e1" class="populate " onChange="loadContent('carers-view',this.value)"  name="npid" style="width: 300px">
						<option value="">Select carers</option>
							<?php
							$v=mysqli_query($con,"SELECT * FROM carers ");
							while($v1=mysqli_fetch_assoc($v))
								{
							?>
							<option value="<?php  echo $v1['id'];?>" <?php if(md5($v1['id'])==$npid){ ?> selected <?php } ?> ><?php  echo $v1['carer_name']?></option>
							<?php
							}
								?>
					</select>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">Name :&nbsp;&nbsp;&nbsp;<?php echo $q['carer_name'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Email :&nbsp;&nbsp;&nbsp;<?php echo $q['carer_email'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Phone :&nbsp;&nbsp;&nbsp;<?php echo $q['carer_phone'];?></a>
 <a href="javascript:void(0);" class="list-group-item">Birth date :&nbsp;&nbsp;&nbsp;<?php echo $q['bod'];?></a>
                                                            
							  <a href="javascript:void(0);" class="list-group-item">Gender:&nbsp;&nbsp;&nbsp;<?php echo $q['gender'];?></a>
                                  <a href="javascript:void(0);" class="list-group-item">Skill :&nbsp;&nbsp;&nbsp;<?php echo $q['skill'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Address :&nbsp;&nbsp;&nbsp;<?php echo $q['address'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Description :&nbsp;&nbsp;&nbsp;<?php echo $q['description'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Date : &nbsp;&nbsp;&nbsp;<?php echo $q['date'];?></a>
                                <a href="javascript:void(0);" class="list-group-item">Time : &nbsp;&nbsp;&nbsp;<?php echo $q['time'];?></a>
                          
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