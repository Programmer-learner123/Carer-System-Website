  <?php
	
	
	if($_SESSION['bmuser']=="" || $_SESSION['bmid']=="")
	{
		header("Location:../index.php?msg=login first");
	}else
	{
?>
  
  <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                
           
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                   
                    <li class="active">
                     <a class="<?php if($_GET['page']=="main"){ ?>active<?php } ?>" href="dashboard.php?page=main">
                          
                            <span>Home</span>
                        </a>
                    </li>
                        

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                     
                            <span>Carers</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a class="<?php if($_GET['page']=="carers"){ ?>active<?php } ?>" href="dashboard.php?page=carers-add">
								
								Add Carers</a>
                            </li>
                            <li>
                                <a  class="<?php if($_GET['page']=="carers"){ ?>active<?php } ?>" href="dashboard.php?page=carers-list">View Carers</a>
                            </li>
                          
                        </ul>
                    </li>
										 <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                        
                            <span>Client</span>
                        </a>
                        <ul class="ml-menu">
                            
                            <li>
                                <a  class="<?php if($_GET['page']=="client"){ ?>active<?php } ?>" href="dashboard.php?page=client-list">View client</a>
                            </li>
                          
                        </ul>
                    </li>
					 <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                         
                            <span>Appoinment</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a class="<?php if($_GET['page']=="appoinment"){ ?>active<?php } ?>" href="dashboard.php?page=client-list-app">
								
								Add appoinment</a>
                            </li>
                            <li>
                                <a  class="<?php if($_GET['page']=="appoinment"){ ?>active<?php } ?>" href="dashboard.php?page=appoinment-list">View appoinment</a>
                            </li>
                         
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                           
                            <span>Package</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a class="<?php if($_GET['page']=="package"){ ?>active<?php } ?>" href="dashboard.php?page=package-add">
								
								Add package</a>
                            </li>
                            <li>
                                <a  class="<?php if($_GET['page']=="package"){ ?>active<?php } ?>" href="dashboard.php?page=package-list">View package</a>
                            </li>
                          
                        </ul>
                    </li>
                
                   
				    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                          
                            <span>Order</span>
                        </a>
                        <ul class="ml-menu">
                           
                            <li>
                                <a  class="<?php if($_GET['page']=="order"){ ?>active<?php } ?>" href="dashboard.php?page=order-list">View Order</a>
                            </li>
                           
                          
                        </ul>
                    </li>
					
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                          
                            <span>View ServiceTime</span>
                        </a>
                        <ul class="ml-menu">
                           
                            <li>
                                <a  class="<?php if($_GET['page']=="servicetime"){ ?>active<?php } ?>" href="dashboard.php?page=servicetime">View Carers Service Time</a>
                            </li>
                           
                          
                        </ul>
                    </li>
                   
                   
                  </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>
<?php
    
	}
	?>