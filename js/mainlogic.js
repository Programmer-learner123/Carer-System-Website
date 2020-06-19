
///////Common Update Status Raw//////////////
	function Update_Status(status,id,table)
	{
     	    if(status=="1")
		   {
		   	$title="Active";
			$class="fa fa-circle alert-success";
		   } 
		   if(status=="2" || status=="4")
		   {
			$title="In Active";
			$class="fa fa-circle alert-danger";  
		   }
		   if(status=="3")
		   { 
		   	$title="Block";
			$class="fa fa-circle alert-warning";		   	
		   }
			    // alert(status);
			var ok = confirm("Are you sure to Update this record?");
			if (!ok)
				return false;

	  $.ajax({type: "POST", url: "include/function.php", async: true, data: "id=" + id +"&table=" + table +"&status=" + status + "&t=updatestatus" , success: function(data)
			  {
				  if (data != 0)
				  {
						alert("Status Update");
						$('#status_sign_'+id).attr('title',''+$title);
						$('#status_sign_'+id).attr('class',''+$class);
					//   $("#row_id_" + id).delay(800).fadeOut('slow');
						//$("#row_id_"+id).remove();
				  }
				 else
					 alert("Error");
			   }
		   });
                
	}
 
////////Common Delete Raw/////////

	function Delete_Raw(id,table)
	{
              
			var ok = confirm("Are you sure to Delete this record?");
			if (!ok)
				return false;

	  $.ajax({type: "POST", url: "include/function.php", async: true, data: "id=" + id +"&table=" + table + "&t1=deleterecord" , success: function(data)
			  {
				  if (data != 0)
				  {
				   $("#row_id_" + id).html('<td colspan="13" style="text-align:center;color:red">Record Deleted</td>');

					   $("#row_id_" + id).delay(800).fadeOut('slow');
						//$("#row_id_"+id).remove();
				  }
				 else
					 alert("Error");
			   }
		   });
                
	}
	


///////Common Delete Raw//////////////	
	function Delete_Raw2(id,table)
	{
              
			var ok = confirm("Are you sure to Delete this record?");
			if (!ok)
				return false;

	  $.ajax({type: "POST", url: "include/function.php", async: true, data: "id=" + id +"&table=" + table + "&t2=deleterecord" , success: function(data)
			  {
				  if (data != 0)
				  {
				   $("#row_id_" + id).html('<td colspan="13" style="text-align:center;color:red">Record Deleted</td>');

					   $("#row_id_" + id).delay(800).fadeOut('slow');
						$("#row_id_"+id).remove();
				  }
				 else
					 alert("Error");
			   }
		   });
                
	}
	
 ///////Common Delete Raw//////////////
	function Delete_Raw3(id,table)
	{
              
			var ok = confirm("Are you sure to Delete this record2?");
			if (!ok)
				return false;

	  $.ajax({type: "POST", url: "include/function.php", async: true, data: "id=" + id +"&table=" + table + "&t4=deleterecord" , success: function(data)
			  {
				  if (data != 0)
				  {
				   $("#row_id_" + id).html('<td colspan="13" style="text-align:center;color:red">Record Deleted</td>');

					   $("#row_id_" + id).delay(800).fadeOut('slow');
						//$("#row_id_"+id).remove();
				  }
				 else
					 alert("Error");
			   }
		   });
                
	}
	///////Common Delete Raw//////////////
		function Delete_Raw4(id,table)
	{
              
			var ok = confirm("Are you sure to Delete this record4?");
			if (!ok)
				return false;

	  $.ajax({type: "POST", url: "include/function.php", async: true, data: "id=" + id +"&table=" + table + "&t5=deleterecord" , success: function(data)
			  {
				  if (data != 0)
				  {
				   $("#row_id_" + id).html('<td colspan="13" style="text-align:center;color:red">Record Deleted</td>');

					   $("#row_id_" + id).delay(800).fadeOut('slow');
						//$("#row_id_"+id).remove();
				  }
				 else
					 alert("Error");
			   }
		   });
                
	}
	///////Common Delete Raw//////////////
	
	function Delete_Raw6(id,table)
	{
              
			var ok = confirm("Are you sure to Delete this record2?");
			if (!ok)
				return false;

	  $.ajax({type: "POST", url: "include/function.php", async: true, data: "id=" + id +"&table=" + table + "&t6=deleterecord" , success: function(data)
			  {
				  if (data != 0)
				  {
				   $("#row_id_" + id).html('<td colspan="13" style="text-align:center;color:red">Record Deleted</td>');

					   $("#row_id_" + id).delay(800).fadeOut('slow');
		    				//$("#row_id_"+id).remove();
				  }
				 else
					 alert("Error");
			   }
		   });
                
	}

	///////Common Delete Raw//////////////	
	function Delete_Raw22(id,table)
	{
              
			var ok = confirm("Are you sure to Delete this record?");
			if (!ok)
				return false;

	  $.ajax({type: "POST", url: "include/function.php", async: true, data: "id=" + id +"&table=" + table + "&t10=deleterecord" , success: function(data)
			  {
				  if (data != 0)
				  {
				   $("#row_id_" + id).html('<td colspan="13" style="text-align:center;color:red">Record Deleted</td>');

					   $("#row_id_" + id).delay(800).fadeOut('slow');
						//$("#row_id_"+id).remove();
				  }
				 else
					 alert("Error");
			   }
		   });
                
	}
	
	
	

