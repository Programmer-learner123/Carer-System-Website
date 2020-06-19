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
  <script>
	
		function loadContent(p,i){
			$.ajax({type: "POST", url: "include/function.php", async: true, data: "i=" + i + "&t=geti" , success: function(data)
			  {
				  if (data != 0)
				  {
				  window.location.href="dashboard.php?page=allocate-appoinment&t&random_no="+data;
				  }
				 else
					 alert("Error");
			   }
		   });
			
			}	
	 
</script>

<script src="js/ProcessData.js"></script>



<?php
	$npid=$_GET['random_no'];
	echo $npid;
		//echo "<script> alert(".$vid."); </script>";
	$q=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `user` WHERE  md5(`id`)='$npid' "));
	
	$name=$q['client_name'];

echo $name;	
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Allocate appoinment
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
              
		
		 
                    <div class="card"   style="height:1000px;">
                     
		  
                        <div class="body">
             <form role="form" id="frmedit" enctype="multipart/form-data" action="#" method="post"  >
                                <input type="hidden" name="action" value="allocat_app" />
								 <div class="col-md-6">
                              <div class="form-group form-float">
                                   
                                        <input type="hidden" class="form-control" name="client_id"  value="<?php  echo $q['id'];?>" id="client_id" >
                                        
                                
                                </div>
								 <b class="card-inside-title">Services</b>
								<div class="form-group form-float">
							   <select class="form-control show-tick" name="service[]" id="service"    multiple>
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
								
                         	 <h2 class="card-inside-title">Client Email</h2>
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="client_email" value="<?php  echo $q['client_email'];?>" id="client_email"    readonly />
                                        </div>
                                       
                                    </div>
								
									 <h2 class="card-inside-title">Client Name</h2>
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="client_name" value="<?php  echo $q['client_name'];?>" id="client_name"   readonly />
                                        </div>
                                       
                                    </div>
                                 <h2 class="card-inside-title">Client Phone</h2>
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="client_phone" value="<?php  echo $q['client_phone'];?>" id="client_phone"   readonly />
                                        </div>
                                       
                                    </div>
									 <h2 class="card-inside-title">Client Address</h2>
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="client_address" value="<?php  echo $q['address'];?>" id="client_address"   readonly />
                                        </div>
										</div>	
                                       	</div>
								 <div class="col-md-6">		
								 <div class="form-group">
                                    
 
 <strong> Select carers : </strong> 
 <select name="email1"  class="form-control show-tick"  onchange='this.form.submit()' > 
        <option value=""> ----------</option> 
      <?php
          $dd_res=mysqli_query($con,"Select DISTINCT carer_email from carers");
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
         $des=$_POST["email1"]; 
         //if($dd_res=="")
         //{     
              // $res=mysqli_query($con,"Select * from employee");   // if ALL is selected in dropdown
        // }
        // else
       // {  
              $res=mysqli_query($con,"Select * from carers where carer_email='".$des."' ");  // if any designation is selected
       // }
        echo "<tr><td colspan='5'></td></tr>";
        while($r=mysqli_fetch_row($res))
        {
			?>
			  <div class="form-group form-float">
                                   
                                    <input type="hidden" class="form-control" value="<?php echo $r[0]?>" name="carer_id"  id="carer_id"   required>
                                            
                                </div>
      <h2 class="card-inside-title">Carers Name</h2>
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="carer_name" value="<?php  echo $r['1'];?>" id="carer_name"   readonly />
                                        </div>
                                       
                                    </div>
									      <h2 class="card-inside-title">Carers Name</h2>
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="carer_email" value="<?php  echo $r['3'];?>" id="carer_email"   readonly />
                                        </div>
                                       
                                    </div>
                                 <h2 class="card-inside-title">Carers Phone</h2>
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="carer_phone" value="<?php  echo $r['2'];?>" id="carer_phone"   readonly />
                                        </div>
                                       
                                    </div>
								
								
									<?php
        }
    }
?>
                                </div>	 
							
  <h2 class="card-inside-title">Start date</h2>
                                    <div class="input-group date" id="bs_datepicker_component_container">
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="start_date" id="start_date"   placeholder="Please choose a start date..." required />
                                        </div>
                                       
                                    </div>
                                
								     
                                        <b>Start time (24 hour)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">access_time</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control time24" name="start_time" id="start_time"  placeholder="Ex: 23:59" required />
                                            </div>
                                        </div>
                                   
								   <b>end time (24 hour)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">access_time</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control time24" name="end_time" id="end_time" placeholder="Ex: 23:59" required />
                                            </div>
                                        </div>
										  </div>
										  
										    <div class="col-md-6 ">
										   <div class="form-group ">
									<h2 class="card-inside-title">Weekdays</h2>
                            <div class="demo-checkbox">
                                <input type="checkbox" value="monday" name="weekdays[]" id="monday" class="filled-in" checked />
                                <label for="monday">Monday</label>
                                <input type="checkbox" value="tuesday" name="weekdays[]" id="tuesday" class="filled-in" checked />
                                <label for="tuesday">Tuesday</label>
                                  <input type="checkbox"  value="wednesday" name="weekdays[]" id="wednesday" class="filled-in" checked />
                                <label for="wednesday">Wednesday</label>
                                
								  <input type="checkbox"  value="thursday" name="weekdays[]" id="thursday" class="filled-in" checked />
                                <label for="thursday">Thursday</label>
								  <input type="checkbox" value="friday" name="weekdays[]" id="friday" class="filled-in" checked />
                                <label for="friday">Friday</label>
                                
                                
                            </div></div>
							<div class="form-group ">
									<h2 class="card-inside-title">Weekends</h2>
                            <div class="demo-checkbox">
                                <input type="checkbox"  value="saturday" name="weekends[]" id="saturday" class="filled-in" checked />
                                <label for="saturday">Saturday</label>
                                <input type="checkbox" value="sunday" name="weekends[]" id="sunday" class="filled-in" checked />
                                <label for="sunday">Sunday</label>
                                
                                
                                
                            </div></div>	
 <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="note"  id="note" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Note*</label>
                                    </div>
                                </div>									
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox" required>
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
     <button type="button" onClick="ProcessForm('#btnsetting','include/submit.php','#frmedit','#notification','','',true);" id="btnsetting" class="btn btn-info">Submit</button>
                 </form>
                        </div>
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
   <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

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