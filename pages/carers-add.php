  <?php
error_reporting(0);	
	
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
?>
<style>
.successmsg11 {
    background-color: #fff;
    padding: 15px;
    color: rgba(110,193,100,0.90);
    
    position: relative;
    width: 100%;
    box-shadow: 5px 10px 18px #888888;
    margin: 5px;
	
}
.errormsg11 {
    background-color: green;
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
                   Add Employee
                  </h2>
                  	  <div class="col-md-12">
			<div class="body">
			 
			     <?php
		error_reporting(0);	
			if($_GET[m]){
			      $m=$_GET['m'];
			 ?>
           <div id="notification" style="color:green" ><?php echo $m?></div>
           <?php
			}
			if($_GET[m1]){
			    $m1=$_GET['m1'];
				?>
           <div id="notification" style="color:red" ><?php echo $m1 ?></div>
           <?php
			}
			?>
			 
                        </div>
			</div>
            </div>
			<div id="notification" ></div>
		
				
            <!-- Basic Validation -->
            <div class="row clearfix">
              
		
		 
                    <div class="card">
                     
		  
                        <div class="body">
             <form role="form" id="frmadd" enctype="multipart/form-data" method="post" action="include/submit.php">
                      
                            <input type="hidden" name="action" value="addcarers" />  
                                 
							   <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="carer_name" id="carer_name" required>
                                        <label class="form-label">Full Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" class="form-control" name="carer_phone"  id="carer_phone" maxlength="10" minlength="3" required>
                                           <label class="form-label">Phone</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="carer_email"  id="carer_email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <input type="radio" name="gender" id="male" value="male" class="with-gap">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" id="female" value="female" class="with-gap">
                                    <label for="female" class="m-l-20">Female</label>
                                </div>
								
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="bod"  id="bod" min="1998-01-01" max="2020-12-31" required>
                                        <label class="form-label">Birth of date</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
							   <select class="form-control show-tick" name="skill[]" multiple>
							    
                                        <option name="Communication">Communication Skill</option>
                                        <option  name="Time Management">Time Management </option>
										<option  name="Medication Expert">Medication Expert</option>
										<option  name="Physical Endurance">Physical Endurance</option>
										<option  name="Observational Skills">Observational Skills</option>
                                        
                                    </select>
									</div>
									
								  <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="address" id="address"  cols="10" rows="3" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
								 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="postcode" id="postcode" maxlength="6" required>
                                        <label class="form-label">Pincode</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description"  id="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Description about Carers</label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox" />
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
                                                     <button type="submit" id="btnsetting" class="btn btn-info">Submit</button>            </form>
                
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