<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> member </title>
<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>

	
	<?php include 'connect.php'; ?>
	<?php include 'functions.php';?>
	<?php // include 'header.php';?>
	<?php include 'head_js.php';?>
	
<div id='request_main'>
	<p>Member page..</p>
		
<?php 
	$mem_query = mysql_query("SELECT id FROM users");
	while($run_mem = mysql_fetch_array($mem_query)){

				$user_id =$run_mem['id'];
				$username = getuser($user_id, 'username');
?>	
	<div id="reg_view"> 
	<?php 
	echo "<a href='profile_view.php?user=$user_id' class='box' style='display:block;'>$username</a>";  ?>
	</div>
	<?php
	}
	?>
	</div>	
</body>
</html>
