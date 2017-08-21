<html> 
	<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
<script>
$(function(){
    var stickyHeaderTop = $('#stickytypeheader').offset().top;

    $(window).scroll(function(){
            if( $(window).scrollTop() > stickyHeaderTop ) {
                    $('#stickytypeheader').css({position: 'fixed', top: '0px'});
                    $('#sticky').css('display', 'block');
            } else {
                    $('#stickytypeheader').css({position: 'static', top: '0px'});
                    $('#sticky').css('display', 'none');
            }
    });
});
</script>
<!-- <div id="sticker"> -->
<div id="stickytypeheader">

<div class="clear"></div>

	<div class="title">
		<div id="tit_left"> 
		
		</div>
		<div id="tit_right"> 
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="reg.php">Requests</a></li>
				<li><a href="frnds.php">Friend</a></li>
				<li><a href="member.php">Member</a></li>
				<li><a href="mess_list.php">Message</a></li>
				<li><a href="setting.php">Setting</a></li>
				<li><a href="logout.php">Log out</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		
	</div>
	
	
	
</div>
</html>
