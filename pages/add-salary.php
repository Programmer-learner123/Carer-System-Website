   <?php
	
	
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
		
?>
<style>
.successmsg {
    background-color: #fff;
    padding: 15px;
    color: rgba(110,193,100,0.90);
    
    position: relative;
    width: 100%;
    box-shadow: 5px 10px 18px #888888;
    margin: 5px;
	
}
.errormsg {
    background-color: white;
    padding: 15px;
    color: rgba(247,61,61,0.90);
    
    width: 100%;
    box-shadow: 5px 10px 18px #888888;
    position: relative;
    margin: 5px;
}
</style>
<script src="js/ProcessData.js"></script>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   View Salary
                  </h2>
				  	<?php
	$npid=$_GET['random_no'];
//echo $npid;
	$q=(mysqli_query($con,"SELECT * FROM `clientservicetime` WHERE md5(`carer_email`)='$npid' and status='0'"));
	$row=mysqli_num_rows($q);
	$row1=mysqli_fetch_assoc($q);
	//echo $row;
	
	$salary='100';
	
	$total=$salary * $row;
	 
	 //echo $total;
	
	?>
            </div>
			
			  <div class="col-md-12">
			<div class="body">
			
		
                        </div>
			</div>
				<div id="notification" ></div>
            <!-- Basic Validation -->
            <div class="row clearfix">
              
		
		 
                    <div class="card">
                      <?php
		
			if($_GET[m]){
			 ?>
           <div id="notification" class="successmsg" ><?php echo $_GET['m']?></div>
           <?php
			}
			if($_GET[m1]){
				?>
           <div id="notification" class="errormsg" ><?php echo $_GET['m1']?></div>
           <?php
			}
			?>
		  
                        <div class="body">
                        <form role="form" id="frmadd" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="action" value="addsalary" />  
		
							
						
							<div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="email" class="form-control" name="carer_email" value="<?php echo $row1['carer_email'];?>" id="email"   readonly>
                                           <label class="form-label">Email</label>
                                    </div>
                                </div>
								
								<div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="number" class="form-control" name="salary"   value="<?php echo $total;?>" id="salary"  readonly>
                                           <label class="form-label">Salary</label>
                                    </div>
                                </div>
								
								<div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="number" class="form-control" name="days"  value="<?php echo $row;?>" id="days"  readonlys>
                                           <label class="form-label">Days</label>
                                    </div>
                                </div>
								
							 
                                
                                   	
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
                                      <button class="btn btn-primary btn-round btn-lg" name="submitbtn" id="btnsetting" onClick="ProcessForm('#btnsetting','include/submit.php','#frmadd','#notification','','',false)" type="button">Submit</button>
				</form>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>

	 <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
	 
</body>

</html>
 <?php
	}
?>