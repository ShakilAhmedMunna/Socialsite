	 $( document ).ready(function() {
	
	$('.comment').keyup(function(e){
		
		if(e.keyCode==13){
			
			//alert("he");
			
					var post_id = $(this).attr('post_id');			
					var comment = $(this).val();
					var user_id = $(this).attr('user_id');
				//var username = $(this).attr('username');
				$.post('comment.php',{ post_id: post_id,comment:comment,user_id:user_id});
				$(this).val(' ');  
				
			/*	*/
/* $(this).parent().children('.comments').append("<div class = 'view'><b>" + + "</b> <b></b>" + comment + "</div>"); this */
$(this).parent().children('.comments').append("<div class = 'view'><br />" + comment + "</div>"); 
			/*  $(this).parent().children('.comments').append("<div class = 'view'><b>" + username + "</b> <b></b>" + comment + "</div>");   */
			/* $(this).parent().children('.comments').append("<div class = 'view'><b>" + comment + "</div>"); */
				
		}
		/* window.location.reload(true);  */
	});
	
	
}); 

































