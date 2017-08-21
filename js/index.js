$( document ).ready(function() {
 
    // Your code here.
	
	var window_height = $(window).height();
	var window_width = $(window).width();
	
	$('#pannel').css('height',window_height-20);
	$('#website').css('height',window_height-25).css('width',window_width-20);
	
	//when click the button..................
	
	$('#button').click(function(){
		
		var value = $('#button').text();
		//alert(value);
		
		if(value == 'Open'){
			
				$('#website').animate({left:270});		
				$('#button').text('close');		
			
		}else{
			$('#website').animate({left:0});
			$('#button').text('Open'); 
		} 
	});
	
 
});