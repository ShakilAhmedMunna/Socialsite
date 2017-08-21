<?php

		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			
				}else {
					header('location: login.php');
						}
			
		if(isset($_POST['submit']))
		{
				// check field ....
				$password=md5($_POST['password']);
				$newpassword=md5($_POST['newpassword']);
				$repassword=md5($_POST['repassword']);
				include 'connect.php';
			
			
			
				
				$queryget=mysql_query("SELECT password FROM users WHERE  `id`='$id'");
				$row=mysql_fetch_assoc($queryget);
				$passworddb = $row['password'];
				
				// check password
		
				
			
			 if($password==$passworddb)
			{
					// check two new password....
					if($newpassword==$repassword)
					{
				 mysql_query("UPDATE `users` SET `password`='$newpassword' WHERE  `id`='$id'");
						
						
						 echo 'success..';
					
				}	else{
					
						echo 'new password dosnt match !';
						
						}					
			
			}else{				
					echo 'old password dosnt match !';
				}	
			}
		
		?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
		<form action="" method='post'>
		<table>
			<tr>
				<td>old password</td>
				<td>
				<input type="password" name='password' />
				</td>
			</tr>
			<tr>
				<td>new password</td>
				<td>
				<input type="password" name='newpassword' />
				</td>
			</tr>
			<tr>
				<td>re-password</td>
				<td>
				<input type="password" name='repassword' />
				</td>
			</tr>
			<tr>
				
				<td><input type="submit" value="change" name='submit' /></td>
			</tr>
		</table>
		
		
		</form>
	
</body>
</html>