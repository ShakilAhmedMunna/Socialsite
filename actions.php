<?php
include 'connect.php';	 include 'functions.php';
	$action = $_GET['action'];	
	$user = $_GET['user'];	
	$my_id = $_SESSION['user_id'];
	
	if($action == 'send')	{
		mysql_query("INSERT INTO frnd_reg VALUES('','$my_id','$user')");
	}
	if($action == 'cancel')	{
		mysql_query("DELETE FROM `frnd_reg` WHERE `from` ='$my_id' AND `to`='$user'");
	}
	if($action == 'accept')	{		
		mysql_query("INSERT INTO frnds VALUES('','$user','$my_id')");
	}
	if($action == 'Ignore')	{
		mysql_query("DELETE FROM `frnd_reg` WHERE `from` ='$user' AND `to`='$my_id'");
			}
	if($action == 'Unfriend')
	{
		mysql_query("DELETE FROM frnds WHERE ( user_one='$my_id' AND user_two='$user') OR ( user_one='$user' AND user_two='$my_id') ");
		}
		else
		{
		mysql_query("DELETE FROM `frnd_reg` WHERE `from` ='$user' AND `to`='$my_id'");
	}
	header('location: profile.php?user='.$user); 
   ?>
