<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>  log in Friend system </title>	
	<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
</head>
<body>
		

		<?php include 'connect.php'; ?>
		<?php //include 'functions.php';?>
		<?php //include 'header.php';?>	

	
	

	
	<div id='log_main'>
	
		<form method='post'>
		<?php
		
		//$num=0;
		//<h3> Login here </h3>
		/* <link rel="stylesheet" type="text/css" href="style.css" media="all" /> */
			if(isset($_POST['Submit'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
			
				if(empty($username) or empty($password)){
					$message ='Field can not be empty';			
			}else{
				$check_login = mysql_query("SELECT id FROM users WHERE username='$username' AND password ='" .md5($password)."'" );
				
				//$num = mysql_num_rows($check_login);	
		//if($num>0) 
		//{
		
			
			/* 
			$_SESSION['name'] = "admin";
			$user_id = $num['id'];
			//echo $_SESSION['name'];
			$_SESSION ['user_id'] = $user_id;
			//echo '$user_id '; exit;
			
			//
				header('location:index.php'); */
				
				
				
				
				 if(mysql_num_rows($check_login) == 1){
					//$message ="ok !";	//check only ......
						session_start();
					
					$get =mysql_fetch_array($check_login);
					$user_id = $get['id'];
					$_SESSION ['user_id'] = $user_id;
					$_SESSION ['name'] = "aaa";
					
					header('location:index.php'); 
					
				}else{
					$message = "User name or password error ...";
					}
				}			
				echo "<div class='box'>$message</div>";
			}
		?>	
			
			<div id="log_input"> 
					<h>Login </h>
				<ul>
					 <li>User Name : <input type="text" name='username' /></li> 
				<li>Password : <input type="password" name='password' /></li>
				<li><input type="submit" name='Submit' value="Login" /></li> 
				
				</ul>	
			</div>
			
		
		</form>
	
	</div>	


<?------------------------------------------------------------------
--------------------------------------------------------------------?>

<div class='clear'> </div>

<div id='regs'>	


<h3> Register a new account</h3>

<form enctype="multipart/form-data" method="post">
	<?php
		If (isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$file = $_FILES['post_image']['name'];						
			$file_type = $_FILES['post_image']['type'];						
			$file_size = $_FILES['post_image']['size'];
			$file_tmp = $_FILES['post_image']['tmp_name'];
			$random = rand();
			
			if(empty($username) or  empty($file)){
				$message ='Field can not be empty';			
		}else{
			move_uploaded_file($file_tmp,'uploads/'.$random.'.jpg');
			mysql_query("INSERT INTO users VALUES('','".$username."','".md5($password)."','$random.jpg')");
			//mysql_query("INSERT INTO users VALUES('','".$username."','".md5($password)."')");
			$message ='ok || u can now log in';
		}			
			echo "<div class='box'>$message</div>";
		}
	?>
		User Name : <br/>

		<input type="text" name='username' />
		<br/> <br/>
		Password : <br/>
		<input type="password" name='password' />
		<br/><br/>
			Select Photo: <br />
			 <input type="file" name="post_image">	
		<br/> <br/>
		
		
		<input type="submit" name='submit' value="Register" />
	</form>
	
</div>



	
</body>

 </html>


