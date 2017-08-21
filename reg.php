<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">  
	<title>Requests </title>
	
	<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
</head>
<body>
	<?php include 'connect.php';//<link rel="stylesheet" type="text/css" href="style.css" media="all" /> ?>	
	<?php include 'functions.php';?>
	<?php //include 'header.php';?>	
	<?php include 'head_js.php';?>
<div id='request_main'>
	<h3>Requests : </h3>
	<?php
		$my_id = $_SESSION['user_id']; 
		$reg_query = mysql_query("SELECT `from` FROM `frnd_reg` WHERE `to`='$my_id'");
	while($run_reg = mysql_fetch_array($reg_query)){
		$from = $run_reg['from'];
		$from_username = getuser($from, 'username');
		
		
		
	?>	
	<div id="reg_view"> 
		<?php echo "<a href='profile_view.php?user=$from' class='box' style='display:block'>$from_username</a>"; ?>
	</div>
	<?php
	}	
	?>
</div>		
</body>
</html>
