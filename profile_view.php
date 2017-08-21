

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">	
		<title> Friend system </title>
		
		<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
	</head>
<body>
		<?php include 'connect.php'; ?>
		<?php include 'functions.php';?>
		<?php// include 'header.php';?>
		<?php include 'head_js.php';?>
		<?php $my_id = $_SESSION['user_id']; //<link rel="stylesheet" type="text/css" href="style.css" media="all" />?>
		
		<div id="pro_img"> 
			
				<?php 
					$query =mysql_query("SELECT * FROM users where id='$my_id'");					
						while($run = mysql_fetch_array($query)){
							$id=$run['id'];
							$pic = $run['url'];			
						
				?>	
			
					<div id="img_box">
						<img src="uploads/<?php echo $pic; ?>" alt="" width="200" style="float:left;" />							
						<br />			
					</div>					
					
				<?php
						}
				?>
				<div class='clear'></div>
				
			</div><!-- pro_img div end  -->
			
			
		
	<div id='pro_post'>			
			<?php 
			if(isset($_GET['user'])	 &&	 !empty($_GET['user']))
				{
					
					$user = $_GET['user'];
										
					}else{		
						$user = $_SESSION['user_id'];  
				}	
				
			$my_id = $_SESSION['user_id'];
			$username=getuser($user, 'username');	
			?>	
			
			<h3> <?php echo "$username ! " ?> </h3>
			
		
		<p>post</p> 
<br />


			
			<?php
				if($user !=$my_id){
				$check_frnd_query = mysql_query  ("SELECT  id  FROM  frnds WHERE (user_one='$my_id' AND user_two='$user')OR(user_one='$user' AND user_two='$my_id')");
				if (mysql_num_rows($check_frnd_query) == 1){
					echo "<a href='#' class='box'>Already Friend</a> |
						<a href='actions.php?action=Unfriend&user=$user' class='box'> Unfriend $username</a>";
				}else{
				$from_query = mysql_query("SELECT `id` FROM `frnd_reg` WHERE `from`='$user' AND `to`='$my_id'");
				
				$to_query = mysql_query("SELECT `id` FROM `frnd_reg` WHERE `from`='$my_id' AND `to`='$user'");
				
			if (mysql_num_rows($from_query)==1) {

				echo  "<a href='actions.php?action=accept&user=$user' class='box'>Accept</a> |
							<a href='actions.php?action=Ignore&user=$user' class='box'>  Ignore</a>";
						
				}else if	(mysql_num_rows($to_query)==1){
					
					echo"<a href='actions.php?action=cancel&user=$user'  class='box'> Cancel Request</a>";
					
				}else{
					
					echo"<a href='actions.php?action=send&user=$user' class='box'> Send Request</a>";	
					
					}
				}
					}
				?>
			
	</div>	<!-- pro_post div end -->
	<div class='clear'></div>
	<!-- <div id="pro_post_view"> -->
	
	
	
	<!-- </div> pro_post_view div end -->
	
	
</body>
</html>


