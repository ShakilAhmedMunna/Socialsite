<?php
session_start();
 ob_start();
		if($_SESSION['name']!='aaa'){
		header('location: login.php');
	}

	
	function loggedin(){		
		if(isset($_SESSION['user_id']) && !empty ($_SESSION['user_id'] )){	
			return true;			
		}else{
			return false;
					
		}				
	}
	
	
	
function getuser($id, $field){
	$query =mysql_query("SELECT $field FROM users WHERE id='$id'");
	$run = mysql_fetch_array($query);
	return $run[$field];
}
?>
