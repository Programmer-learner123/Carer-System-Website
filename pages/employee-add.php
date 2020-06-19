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
	  <script src="js/script.js"></script>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Add Employee
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
                        			     <form role="form" id="frmadd" enctype="multipart/form-data" method="post" action="#" >
                            <input type="hidden" name="action" value="addemployee" />  
                                 <div class="form-group form-float">
							   <select class="form-control show-tick" name="skill[]" multiple>
							    <option>select status</option>
                                        <option name="Active">Active</option>
                                        <option  name="DeActive" >DeActive</option>
                                                 </select>
									</div>
							   <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" id="name" required>
                                        <label class="form-label">Ful Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" class="form-control" name="phone"  id="phone" maxlength="10" minlength="3" required>
                                           <label class="form-label">Phone</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email"  id="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
								 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="bod"  id="bod" required>
                                        <label class="form-label">Birth of date</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="gender" id="male" value="male" class="with-gap">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" id="female" value="female" class="with-gap">
                                    <label for="female" class="m-l-20">Female</label>
                                </div>
								

                                 <div class="form-group form-float">
							   <select class="form-control show-tick" name="skill[]" multiple>
							    <option>select skills</option>
                                        <option name="communication">communication Skill</option>
                                        <option  name="forign language" >forign language</option>
                                        
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
                                        <input type="text" class="form-control" name="postcode" id="postcode" required>
                                        <label class="form-label">postcode</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description"  id="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Description about employee</label>
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