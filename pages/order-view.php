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
				  window.location.href="dashboard.php?page=order-view&t&random_no="+data;
				  }
				 else
					 alert("Error");
			   }
		   });
			
			}	
	 
</script>
	<?php
	$npid=$_GET['random_no'];
echo $npid;
	$q=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `order` WHERE md5(`id`)='$npid'"));
	?>
    <section class="content">
        <div class="container-fluid">
            
          <div class="row clearfix">
                <!-- Linked Items -->
                <div class=" col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                View order
                             </h2>
						
							
                        
                        </div>
						
				
                        <div class="body">
                            <div class="list-group">
                                  <a href="javascript:void(0);" class="list-group-item">order id  :&nbsp;&nbsp;&nbsp;<?php echo $q['order_id'];?></a>
                                
                                <a href="javascript:void(0);" class="list-group-item">item name :&nbsp;&nbsp;&nbsp;<?php echo $q['item_name'];?></a>

                                                            
							  <a href="javascript:void(0);" class="list-group-item">Amount : &nbsp;&nbsp;&nbsp;<?php echo $q['amount'];?></a>
                                
                                <a href="javascript:void(0);" class="list-group-item">Date and Time:  &nbsp;&nbsp;&nbsp;<?php echo $q['date'];?></a>
                                <a href="javascript:void(0);" class="list-group-item"><?php echo $q['time'];?></a>
							     
                          
                       
							
							
							
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