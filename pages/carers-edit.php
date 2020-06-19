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
  <script>
	
		function loadContent(p,i){
			$.ajax({type: "POST", url: "include/function.php", async: true, data: "i=" + i + "&t=geti" , success: function(data)
			  {
				  if (data != 0)
				  {
				  window.location.href="dashboard.php?page=carers-edit&t&random_no="+data;
				  }
				 else
					 alert("Error");
			   }
		   });
			
			}	
	 
</script>
<?php
	$npid=$_GET['random_no'];
		//echo "<script> alert(".$vid."); </script>";
	$q=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `carers` WHERE md5(`id`)='$npid' "));
	
?>
<script src="js/ProcessData.js"></script>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Add carers
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
                        			       <form role="form" id="frmedit" enctype="multipart/form-data" action="#" method="post"  >
                                <input type="hidden" name="action" value="editcarers" />
                                <input type="hidden" name="uid" value="<?php  echo $q['id'];?>" />
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="carer_name"  value="<?php echo $q['carer_name'];?>" id="carer_name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" class="form-control" name="carer_phone"  id="carer_phone"  value="<?php echo $q['carer_phone'];?>" maxlength="10" minlength="3" required>
                                           <label class="form-label">Phone</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="carer_email"  value="<?php echo $q['carer_email'];?>" id="carer_email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="gender" id="male" value="male" <?php echo ($q['gender']=='male')?'checked':'' ?>  class="with-gap">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" id="female" value="female" <?php echo ($q['gender']=='female')?'checked':'' ?>  class="with-gap">
                                    <label for="female" class="m-l-20">Female</label>
                                </div>
								 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="bod"   value="<?php echo $q['bod'];?>" id="bod" required>
                                        <label class="form-label">Birth of date</label>
                                    </div>
                                </div>
  <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="skill" id="skill" cols="10" rows="3"  class="form-control no-resize"  required><?php echo $q['skill'];?></textarea>
                                        <label class="form-label">write skills here</label>
                                    </div>
                                </div>
                               
								  <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="address" id="address"  cols="10" rows="3" class="form-control no-resize" required><?php echo $q['address'];?></textarea>
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
								   <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="text" class="form-control" name="postcode"  id="postcode"  value="<?php echo $q['postcode'];?>" maxlength="10" minlength="3" required>
                                           <label class="form-label">Pincode</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description"  id="description" cols="30" rows="5" class="form-control no-resize" required><?php echo $q['description'];?></textarea>
                                        <label class="form-label">Description about employee</label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
      <button type="button" onClick="ProcessForm('#btnsetting','include/submit.php','#frmedit','#notification','','',true);" id="btnsetting" class="btn btn-info">Submit</button>
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