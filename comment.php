<html> 
<?php

	include 'connect.php';

		
	$post_id = $_POST['post_id'];	
	$comment = $_POST['comment'];
	$user_id = $_POST['user_id'];
	
	
	mysql_query("INSERT INTO comment VALUES('','$post_id','$comment','$user_id')");

?>


</html>