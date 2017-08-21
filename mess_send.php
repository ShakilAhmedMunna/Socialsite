<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Social site </title>
	<link rel="stylesheet" type="text/css" href="css/frn.css" media="all" />
</head>
<body>

		<?php include 'head_js.php';?>
		<div class="clear"></div>
		

	
<?php
			include 'connect.php';	 include 'functions.php';
				$action = $_GET['action'];	
				$frnd_mess = $_GET['user'];	
				$my_id = $_SESSION['user_id'];
	
				$me = mysql_query("SELECT * FROM  users WHERE `id`= '$my_id'");
	
			while($mee = mysql_fetch_array($me)){
							
				$me_to=$mee['username'];
						
						
						}
	
	
	if($action == 'send'){ 
	

			
					if(isset($_POST['message']) && !empty($_POST['message']) )
					{
							$new_message = $_POST['message'];
						mysql_query("insert into messagesbox values('','$my_id','$frnd_mess','$new_message')");
							
					}
					
						$rcv_mess = mysql_query("SELECT * FROM  messagesbox WHERE `to`= '$my_id' AND `from`='$frnd_mess' ORDER BY `id`  DESC");
						$send_mess = mysql_query("SELECT * FROM  messagesbox WHERE `from`= '$my_id' AND `to`='$frnd_mess' ORDER BY `id`  DESC"); 
					
					
							
					
	
?>		
	
	
	<div id="con_left">
		<div id="inner_left"> <?php
			
				while($rcv_message = mysql_fetch_array($rcv_mess))
				{
					$frnd=$rcv_message['from'];
					$message=$rcv_message['messages'];	
					
						$frnd_name = mysql_query("SELECT * FROM  users WHERE `id`= '$frnd'");
	
							while($f_n = mysql_fetch_array($frnd_name))
							{
							
								$fr_n=$f_n['username'];
						
						
							}
							
							
							
					?> <br /> <?php
									//echo "$me"; 
									?>	 <br /> <?php
									echo "$fr_n"; 
									?>	<div id="printsmses">  <br /> <?php
									echo "$message";							
									?> </div><br/> <?php
							
				}
			
		
			?>
		
		</div>
		
		
	</div>
	
	<div id="con_mid">
			<?php echo "$me_to"; ?>
			<div id="inner_mid"> 
						
				<form method="post">
								Enter Message : <br />
							<textarea name="message" id="" cols="50" rows="7"></textarea>
						<br />
						<br />
							<input type="submit" value="Send Message" />
				</form>	
						
							
		
			</div>
	
	
		
	</div>
	
	<br />
	
	<div id="con_righr">	
		<div id="inner_right">
					
				<?php	
					while($send_message = mysql_fetch_array($send_mess))
						{
							
							//$me=$run_message['from'];
							$frnd=$send_message['from'];
							$message=$send_message['messages'];
							
							?><br /> <?php
							echo "<br /> $me_to <br />"; 
							?>	 <?php
							//echo "$frnd"; 
							?>	<div id="printsms"> <br /> <?php
							echo "$message"; 							
							?>	</div> <?php
						}
						
						
	}
				?>
		
		</div>
		
	
	</div>
	
	<div class="clear"></div>
	

</body>
</html>