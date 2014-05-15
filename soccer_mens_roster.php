<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8>
		<title>Fitchburg State University - Men's Soccer</title>
		<link rel=stylesheet type=text/css href=style.css>
	</head>
	<body>
	<?php include 'banner.php'; ?>
	<?php include 'soccer_mens_menu.php'; ?>
		<div class=content>
			<p align=center><b>Fitchburg State Men's Soccer Roster</b></p>
			
			<!--Builds the roster table-->
			<?php
			require_once 'db_login.php';
			$db_server = mysql_connect($db_hostname, $db_username, $db_password);
			if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());
			
			echo "<center><table>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Pos.</th>
					<th>Class</th>
				</tr>";	
			
			// Querys the sro DB table for creating html table below
			$result=mysql_query("SELECT * FROM Players");
			
			while ($row=mysql_fetch_array($result)) {
				
				echo "<tr>
						<td>", $row['number'], "</td>
						<td>", $row['name'], "</td>";
				
				if ($row['position']==2){
					echo "<td>GK</td>";
				} elseif ($row['position']==3){
					echo "<td>D</td>";
				} elseif ($row['position']==6){
					echo "<td>F</td>";
				} elseif ($row['position']==16){
					echo "<td>M</td>";
			 	}
				
				if ($row['year']==1){
					echo "<td>Fr</td>";
				} elseif ($row['year']==2){
					echo "<td>So</td>";
				} elseif ($row['year']==4){
					echo "<td>Jr</td>";
				} elseif ($row['year']==8){
					echo "<td>Sr</td>";
				} elseif ($row['year']==16){
					echo "<td>Gr</td>";
			 	} else {
					echo "<td>  </td>";
				}
				

			}	
				echo "</tr>";
			echo "</table></center>";
			
			mysql_close($db_server);
			?>
		</div>
		<div class=footer>
			<?php include 'footer.php'; ?>
		</div>
	</body>
</html>

