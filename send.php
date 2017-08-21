

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> send</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>
<body>
	
	<?php include 'connect.php'; ?>
	<?php include 'functions.php';?>
	<?php include 'header.php';?>
	<center>	<h3 style="color:#A4DDE4;background-color:#5766D4;"> Message send </h3></center>
	<div>
	<?php include 'messages_title_bar.php';?>
	</div>
	<br />
	
	<div>	
		
		<?php
			if(isset($_GET['user']) && !empty($_GET['user'])){
				//echo" hi";
		?>		
				<form method="post">
				<?php
					if(isset($_POST['message']) && !empty($_POST['message']) ){
						$my_id =$_SESSION['user_id'];
						$user = $_GET['user'];
						$random = rand();
						$message = $_POST['message'];
						$check_con=mysql_query("select hash from message_group where (user_one='$my_id' and user_two='$user') or (user_one='$user' and user_two='$my_id') ");
					
					if(mysql_num_rows($check_con)==1){
						echo"<p>already !</p><br />";

							
						
					}else{
						mysql_query("insert into message_group value('$my_id','$user','$random')");
						mysql_query("insert into messages value('','$random','$my_id','$message')");
						
						//echo"conversation start<br />";	
						
						header('location:conversations.php?hash='.$hash);
						
					}
					
					
					
					}
				
				
				?>
				
				Enter Message : <br />
					<textarea name="message" id="" cols="60" rows="7"></textarea>
				<br /><br />
				<input type="submit" value="Send Message" />
				</form>
				
				
		<?php		
			}else{
				//echo" hello";
				echo"<b> Select the user</b>";
				
				$user_list = mysql_query("select `id`,`username` FROM `users`");
				while($run_user = mysql_fetch_array($user_list)){

					$user =$run_user['id'];
					$username = $run_user ['username'];
				
				
				echo" <p><a href='send.php?user=$user'>$username</a></p>";
				}
			}
		
		?>
	
	
	</div>
	
	
</body>
</html>