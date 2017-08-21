<?php include 'functions.php';?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">	
		<title> Friend system </title>
			<script src='jquery.js'></script>
		<script src='com.js'></script>
		<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
	</head>
<body>
		<?php include 'connect.php'; ?>
		
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

<form method="post">

<?php 
	if(isset($_POST['com'])	 &&	 !empty($_POST['com'])){
		$com = nl2br($_POST['com']);
		$date=date("Y-m-d H:i:s");
		$time=date("H:i:s");
		//echo $date;exit;
	mysql_query("insert into post values('','$my_id','$com ','$date','$time')");
		echo"<p>Successful</p>";
		
	}	
?>


		<textarea name="com" id="" cols="25" rows="5" style="width: 347px; height: 84px;"></textarea>
		<br /> <br />
		<input type="submit" value="post" />


</form>	

			
			
			
	</div>	<!-- pro_post div end -->
	<div class='clear'></div>
	<div id="pro_post_view">
	

	<br /><br />	
		<?php		
				$post_query = mysql_query("select id ,user_id ,post,date,time from post  where user_id = '$my_id' ORDER BY `id`  DESC");
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
	
	</div><!-- pro_post_view div end -->
	
	
</body>
</html>


