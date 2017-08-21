<?php
		
		include 'functions.php';
		//exit;
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
			<meta charset="UTF-8">
				<title> Friend system </title>
	<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src='jquery.js'></script>
		<script src='com.js'></script>
		
		
		
		
</head>
<body>



	<?php include 'connect.php'; /* <script src='index.js'></script> */ ?>
	
	<?php include 'head_js.php';?>
<?php

 if(isset($_GET['user']) && !empty($_GET['user']))
	{
		$user = $_GET['user'];
		echo $user;exit;
										
}else{		
		$user = $_SESSION['user_id'];  
	}	 
	$my_id = $_SESSION['user_id'];
	$username=getuser($user, 'username');	
?>	
	<center><h3> <?php echo "$username ! " ?> </h3></center>

		
<div id='home'>
	<br /><br />	
		<?php		
				$post_query = mysql_query("select id ,user_id ,post,date,time from post ORDER BY `id`  DESC");
					while($run_post = mysql_fetch_array($post_query))
					{
						$post_id = $run_post['id'];
						$user_id = $run_post['user_id'];
						$post = $run_post['post'];
						$date = $run_post['date'];
						$time = $run_post['time'];
			
						$user_query = mysql_query("select username from users where id = '$user_id'");
							$run_user = mysql_fetch_array($user_query);
							$from_username = $run_user['username'];
		?>
					
	<div id=box>
		<p><?php echo" $from_username  "; ?> 	| Date : <?php echo "  $date  ";?> | Time : <?php echo "  $time" ;?></p>
			<br />
			<div id="home_post">
			
			POST :<p><?php echo"$post"; ?></p>
			
			
			</div><!-- div home_post end -->
			
			<p>Comments</p>
			
			<div class='comments'>
			
				<?php
					$comment_query = mysql_query("select id,comment,user_id from comment where post_id = '$post_id'");
						while($run_comment = mysql_fetch_array($comment_query)){
							
							$comment_id = $run_comment['id'];
							$comment = $run_comment['comment'];
							$user_id = $run_comment['user_id'];
							
							$com_name_query = mysql_query("select username from users where id = '$user_id'");
								while($run_com_name = mysql_fetch_array($com_name_query)){
										$com_username = $run_com_name['username'];
								} //user name search while loop end ..........
							
				?>	
					<div class="view">
					<b><?php echo $com_username ; ?> :</b> <?php echo $comment; ?>
					
					</div><!-- view div-->
					
				<?php
				
				}				
				
				?>
			
			
			</div><!--comments div  end-->
			<br />
			<input type="text"  class='comment' post_id="<?php echo $post_id;?>" user_id="<?php echo $_SESSION['user_id']; ?>" />
		</div> <!--box div end-->
			
			<?php
					}//time's while loop
			?>
			
	




	
</div>		<!--home div end-->		
					
	

					
				
</body>


</html>
