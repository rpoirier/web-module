<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8>
		<title>Soccer</title>
		<link rel=stylesheet type=text/css href=style.css>
	</head>
	<body>
		<?php include 'banner.php'; ?>
		<?php include 'mainmenu.php'; ?> 
		<div class=roster>
			<p align=center><b>Fitchburg State Men's Soccer Roster</b></p>
			<!--Builds the roster table-->
			<?php
			require_once 'login.php';
			$file=fopen($_FILES["file"]["tmp_name"],"r");
			$db_server = mysql_connect($db_hostname, $db_username, $db_password);
			if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());
			
			mysql_query("truncate sro",$db_server);

			while(!feof($file)){
			    $line = fgets($file);
			    $pNumber = trim(substr($line,0,2));	#player number	
			    $pName = trim(substr($line,2,20));    #player name
			    $pPosition = trim(substr($line,-12,-6));	#player position
			    $pClass = trim(substr($line,-6));	#player class			

			$sql="INSERT INTO sro(number,name,position,year) VALUES('$pNumber','$pName','$pPosition','$pClass')";
			echo "<br>";
			if(!mysql_query($sql,$db_server)){
				die('Error: ' . mysql_error());
				mysql_close($db_server);
			}
			}	
			?>
		</div>
	</body> 
</html>

