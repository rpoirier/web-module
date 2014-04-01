<!DOCTYPE html>
<html>
	<body>
	<?php include 'banner.php'; ?>
	<?php include 'menu.php'; ?>
		<div class=content>
			<p align=center><b>Fitchburg State Men's Soccer Roster</b></p>
			
			<!--Builds the roster table-->
			<?php
			require_once 'login.php';
			$db_server = mysql_connect($db_hostname, $db_username, $db_password);
			if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
			mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());
			
			echo "<center><table>
				<tr>
					<th>No.</th>
					<th>&nbsp;Name</th>
					<th>&nbsp;Pos.</th>
					<th>&nbsp;Class</th>
				</tr>";	
			
			// Querys the sro DB table for creating html table below
			$result=mysql_query("SELECT * FROM sro");
			
			while ($row=mysql_fetch_array($result)) {
				
				echo "<tr>
						<td>", $row['number'], "</td>
						<td>&nbsp;", $row['name'], "</td>";
				
				if ($row['position']==2){
					echo "<td>&nbsp;GK</td>";
				} elseif ($row['position']==3){
					echo "<td>&nbsp;D</td>";
				} elseif ($row['position']==6){
					echo "<td>&nbsp;F</td>";
				} elseif ($row['position']==16){
					echo "<td>&nbsp;M</td>";
			 	}
				
				if ($row['year']==1){
					echo "<td>&nbsp;Fr</td>";
				} elseif ($row['year']==2){
					echo "<td>&nbsp;So</td>";
				} elseif ($row['year']==4){
					echo "<td>&nbsp;Jr</td>";
				} elseif ($row['year']==8){
					echo "<td>&nbsp;Sr</td>";
			 	} else {
					echo "<td>&nbsp;Gr</td>";
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

