
function ProcessForm(buttonId,page,formId,callbackDivId,loader,loaderDivId,blankformdata){
	//aleart('vijay');
  $(buttonId).attr("disabled", true);   
  $(callbackDivId).hide();
  $(callbackDivId).html('');
  if(loader){ $(loaderDivId).show();}  
  
  $.post( page , $(formId).serialize(), function (data, textStatus) { 
//	alert( $(formId).serialize());
    $(callbackDivId).show();
    $(callbackDivId).removeClass('successmsg');
    $(callbackDivId).removeClass('errormsg');
    var callback_data = data.split(":"); 
//alert(callback_data);
    callback_data[0]=$.trim(callback_data[0]);
    if(callback_data[0]=='redirect'){
        $(callbackDivId).addClass('info');
        $(callbackDivId).html('Redirecting - please wait ....');
        $(window.location).attr('href', callback_data[1]);
    }
    if(callback_data[0]=='success'){
		if(callback_data[2]=='close')
		{
			$('.close').click();	
		}
        $(callbackDivId).addClass('successmsg');
        $(callbackDivId).html(callback_data[1]);
        if(blankformdata){}else{
            var $inputs = $(formId+' :input');
            var values = {};
            $inputs.each(function() {
                if ($(this).is('input:button')){
                    
                }
                else if($(this).is('input:checkbox')){
                    
                }else if($(this).is('input:hidden')){
                    
                }else{                    
                    $(this).val('');
                }
            });
        }
        $('html, body').animate({scrollTop:0}, 'slow');
        $('html, body').animate({scrollTop:0}, 'slow');
		if(callback_data[3]=='popup')
		{
			
		    window.location.href="dashboard.php?page="+callback_data[4]+"&m="+callback_data[6];
			//}
		}
    }
 
    if(callback_data[0]=='error'){
        $(callbackDivId).addClass('errormsg');
        $(callbackDivId).html(callback_data[1]);
        $('html, body').animate({scrollTop:0}, 'slow');
        $('html, body').animate({scrollTop:0}, 'slow');
    }
    if(callback_data[0]=='debug'){
        $(callbackDivId).addClass('errormsg');
        $(callbackDivId).html(data);
    }
    if(data=='')
    {
        $(callbackDivId).hide();
    }
    $(buttonId).attr("disabled", false); 
    if(loader){ $(loaderDivId).hide();}  
  });

}
$(document).ready(function(){
   
});
