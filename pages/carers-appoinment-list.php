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
				  window.location.href="dashboard.php?page=complain-view&t&random_no="+data;
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
	$q=mysqli_fetch_assoc(mysqli_query($con,"SELECT client.*,appointment.* FROM  appointment , client where client.id=appointment.client_id and  appointment.md5(`client_id`)='$npid'  "));
	?>
    <section class="content">
        <div class="container-fluid">
            
          <div class="row clearfix">
                <!-- Linked Items -->
                <div class=" col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                View complain
                             </h2>
						
							
                        
                        </div>
						 <div class="body">
						  <form role="form" id="frmedit" enctype="multipart/form-data" action="#" method="post"  >
                            <div class="form-group">
                                    
 
 <strong> Select carers : </strong> 
 <select name="email1"  class="form-control show-tick"  onchange='this.form.submit()'> 
        <option value=""> -----------ALL----------- </option> 
      <?php
          $dd_res=mysqli_query($con,"Select DISTINCT id from carers");
          while($r=mysqli_fetch_row($dd_res))
          { 
                echo "<option value='$r[0]'> $r[0] </option>";
          }
      ?>
 </select>
                                </div>
								
							 <div class="form-group">
                                    
  <?php
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
         $des=$_POST["id"]; 
         //if($dd_res=="")
         //{     
              // $res=mysqli_query($con,"Select * from employee");   // if ALL is selected in dropdown
        // }
        // else
       // {  
              $res=mysqli_query($con,"Select * from carers,appointment where carers.id=appointment.carers_id and   carers.id='".$des."'");  // if any designation is selected
       // }
        echo "<tr><td colspan='5'></td></tr>";
        while($r=mysqli_fetch_row($res))
        {
			?>
			<a href="javascript:void(0);" class="list-group-item"><?php echo $q['service'];?></a>
                                <a href="javascript:void(0);" class="list-group-item"><?php echo $q['name'];?></a>
                                <a href="javascript:void(0);" class="list-group-item"><?php echo $q['email'];?></a>
                                <a href="javascript:void(0);" class="list-group-item"><?php echo $q['phone'];?></a>
                                
                                <a href="javascript:void(0);" class="list-group-item"><?php echo $q['weekdays'];?></a>
								 <a href="javascript:void(0);" class="list-group-item"><?php echo $q['weekends'];?></a>
                                <a href="javascript:void(0);" class="list-group-item"><?php echo $q['address'];?></a>
								 <a href="javascript:void(0);" class="list-group-item"><?php echo $q['message'];?></a>
                                <a href="javascript:void(0);" class="list-group-item"><?php echo $q['date'];?></a>
                                <a href="javascript:void(0);" class="list-group-item"><?php echo $q['time'];?></a>
                          
     
								
								
									<?php
        }
    }
?>
                                </div>	
				  </div>
                       </form> 
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