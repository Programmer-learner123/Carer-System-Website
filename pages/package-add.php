   <?php
	error_reporting(0);
	
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
	  <script src="js/script.js"></script>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Add Package
                  </h2>
            </div>
			<div id="notification" ></div>
			  <div class="col-md-12">
			<div class="body">
			 <?php
			if($_GET[m]){
			 ?>
                            <div class="alert alert-success successmsg" id="notification" >
                                <strong>Well done!</strong> <?php echo $_GET['m']?>
                            </div>
                           <?php
			}
			?>
			<?php
			if($_GET[m1]){
				?>
                            <div class="alert alert-danger errormsg" id="notification" >
                                <strong>Oh snap!</strong> <?php   echo $_GET['m1']?>
                            </div>
							<?php
			}
			?>
                        </div>
			</div>
				
            <!-- Basic Validation -->
            <div class="row clearfix">
              
		
		 
                    <div class="card">
                     
		  
                        <div class="body">
                        			     <form role="form" id="frmadd" enctype="multipart/form-data" method="post"  >
                            <input type="hidden" name="action" value="addpackage" />  
                               
								<div class="form-group form-float show-tick">
                              <input type="text" placeholder="Enter category" name="category" value="<?php echo $_POST['category'];?>"  onBlur="getServiceocc(this.value)" list="rno" class="form-control" id="service" >
                                    <datalist id="rno" class="form-group form-float show-tick">
									<option>Select category</option>
                                    <?php
									$q=mysqli_query($con,"SELECT * FROM  category");
									while($r=mysqli_fetch_assoc($q)){
									?>
                                    	<option><?php echo $r['category'];?></option>
                                    	<?php } ?>
                                    </datalist>  </div>
							
                                <div class="form-group">
								<div class="form-group form-float">
							   <select class="form-control show-tick" name="name[]" multiple>
							    <option>Select Services </option>
                                        <option name="name">Cooking</option>
                                        <option  name="name" >Household Chores</option>
                                        <option  name="name" >Housekeeping</option>
                                        <option  name="name" >Celebration Activities</option>
										<option  name="name" >Companionship for Outdoor Visits</option>
										<option  name="name" >Meal Time Assistance</option>
										<option  name="name" >Oral Care</option>
										<option  name="name" >Mobility Support</option>
										<option  name="name" >Bathing and Personal Hygiene</option>
										<option  name="name" >Yoga & Meditation</option>
										<option  name="name" >Body Care</option>
										<option  name="name" >Medication Prompting</option>
										<option  name="name" >Emergency Medical Services</option>
										<option  name="name" >Medical Testing Services</option>
									
                                        
                                    </select>
									</div>
									
								<div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" class="form-control" name="detail"  id="detail" maxlength="10000" minlength="3" required>
                                           <label class="form-label">Pacakge Detail</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" class="form-control" name="price"  id="price" maxlength="10" minlength="3" required>
                                           <label class="form-label">Pacakge price</label>
                                    </div>
                                </div>
                             
                                 
								
                               
                                
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
     <button class="btn btn-primary btn-round btn-lg" id="btnsetting" onClick="ProcessForm('#btnsetting','include/submit.php','#frmadd','#notification','','',false)" type="button">Submit</button>
         </form>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>

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