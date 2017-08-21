<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>FRIENDS</title>
	<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
</head>
<body>	<?php include 'connect.php'; ?>	<?php include 'functions.php';?>
<?php include 'head_js.php';?>
	<?php // include 'header.php';?>	
<div id='request_main'>	
<h3>Message </h3>
	<?php
		$my_id = $_SESSION['user_id']; 
			$frnd_query = mysql_query("SELECT user_one, user_two FROM frnds WHERE user_one='$my_id'  OR user_two='$my_id'");
				while($run_frnd = mysql_fetch_array($frnd_query)){
					$user_one = $run_frnd['user_one'];
					$user_two = $run_frnd['user_two'];
			if($user_one == $my_id ){
				$user =$user_two;				
			}else{
				$user =$user_one;	
			}
				$username = getuser($user,'username');
	?>
		<div id="reg_view"> 		
	<?php echo"<a href='mess_send.php?action=send&user=$user' class= 'box' style='display:block'>$username</a>"; ?>
<?php	//echo"<a href='actions.php?action=send&user=$user' class='box'> Send Request</a>"; ?>
		</div>
		
	<?php
		}	
	?> 
		
		
</div>
	</body>
  </html>
