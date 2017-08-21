<?php
include 'functions.php';
?>


<?php

	include 'connect.php';
   //	include 'functions.php';

		if(isset($_SESSION['user_id'])){
			$id = $_SESSION['user_id'];
			
				}else {
					header('location: setting.php');
				}
				if(isset($_POST['Update'])){
				
					$username=$_POST['username'];
					//$post=$_POST['post'];
					//$password=md5($_POST['password']);
					
					if(empty($username)){
					
					echo "<p> Field can not Empty </p>";
					
				}else{
					mysql_query("UPDATE `users` SET `username`='$username' WHERE  `id`='$id'");
						header('location: setting.php');
				}
			}	 
					
			?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>  Setting </title>

	<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
<?php include 'head_js.php';?>

</head>
<body>
<div id="pro_img"> 
			
			<?php 
				$query =mysql_query("SELECT * FROM users where id='$id'");
					
					while($run = mysql_fetch_array($query)){
						$id=$run['id'];
						$pic = $run['url'];
						
						
			?>	
			
						<div id="view_box">
							<img src="uploads/<?php echo $pic; ?>" alt="" width="200" style="float:left;" />
							
						<br />
					
						
						</div>
					
					
					
			<?php
					}
			?>
			<div class='clear'></div>
		</div>



	<div id="pro_post_view">

<form action="" method='post'>
		
		
		
		
		<h3> Setting  </h3> 
	
		
		<?php	
	
	$list_query = mysql_query("SELECT * FROM users WHERE id='$id' ");	
	
		while($run_list = mysql_fetch_array($list_query)){	
		
			
			$username =$run_list['username'];		
								
			
		} 
		?>
		
	name : <br\><br\>
	<input  type='text' name='username' value="<?php echo $username ?>" />	
	
			<br></br>		
	<input type="Submit" name="Update" value="update" />
	
	<input type="hidden" name="id" value="<?php echo $id ?>"  >
	
	
			
		<a href="change.php?id=<?php echo $id; ?>">change</a>
	</form>	
		
		</div>
	
		<div class='clear'></div>
	
		

	
</body>
</html>