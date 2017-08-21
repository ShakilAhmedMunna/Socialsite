<!DOCTYPE HTML>
<html lang="en-US">
<head>	<meta charset="UTF-8">	<title> Friend system </title>
	
	<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
</head>
<body>
	<?php include 'connect.php'; ?>	
	<?php include 'functions.php';?>
	<?php //include 'header.php';
	//<link rel="stylesheet" type="text/css" href="style.css" media="all" />?>
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
