<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8>
		<title>Fitchburg State University - Men's Soccer</title>
		<link rel=stylesheet type=text/css href=style.css>
		<script type="text/javascript">
			var contentDivs = [ 'team_profile', 'season', 'game_log' ];

			function select_content_div(id) {
				contentDivs.forEach(function(element) {
					var div = document.getElementById(element);
					if(div)
						div.style.display = 'none';
				});
				var div = document.getElementById(id);
				if(div)
					div.style.display = 'block';
			}
		</script>

	</head>
	<body>
		<?php include 'banner.php'; ?>
		<?php include 'soccer_mens_menu.php'; ?>
		<div class=content>
		<!--	<p align=center><b>Fitchburg State Men's Soccer Statistics</b></p>	-->

		<center><p><table id=stats_menu>
			<tr>
				<td><button onclick="select_content_div('team_profile')"><b>Team Profile</b></button></td>
				<td><button onclick="select_content_div('season')"><b>Season</b></button></td>
				<td><button onclick="select_content_div('game_log')"><b>Games</b></button></td>
			</tr>
			</table></p></center>
	
		<?php
		require_once 'db_login.php';
		$db_server = mysql_connect($db_hostname, $db_username, $db_password);
		if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
		mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());


			//team profile


			echo"
			<div id=team_profile>
				<p><center><table id=team_overview>
				<tr>
					<th>Games</th>
					<th>Goals</th>
					<th>Goals-Per Game</th>
					<th>Shot %</th>
					<th>Shots-Per-Game</th>
					<th>GAA</th>
				</tr>
				<tr>
					<td>19</td>
					<td>16</td>
					<td>0.8</td>
					<td>0.066</td>
					<td>12.7</td>
					<td>0.78</td>
				</tr>
				</table>
				</p>";
				
				echo "
				<p>
				<table>
				<tr>
					<th>Team Statistics</th>
					<th>&nbsp;</th>
				</tr>
				<tr>
					<td>Goals</td>
					<td>16</td>
				</tr>
				<tr>
					<td>Assists</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Shots</td>
					<td>242</td>
				</tr>
				<tr>
					<td>Shots on goal&nbsp;</td>
					<td>115</td>
				</tr>
				<tr>
					<td>Saves</td>
					<td>117</td>
				</tr>
				<tr>
					<td>Yellow cards</td>
					<td>23</td>
				</tr>
				<tr>
					<td>Red cards</td>
					<td>2</td>
				</tr>
				</table></center></p>";

			

			echo "
			</div>
			<div id=season>
			<center><p><table>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Yr</th>
					<th>Pos</th>
					<th>G</th>
					<th>A</th>
					<th>SH</th>
					<th>SH%</th>
					<th>SOG</th>
					<th>SOG%</th>
					<th>YC</th>
					<th>RC</th>
				</tr>";

				$j=mysql_query("SELECT id_players FROM sport.Players ORDER BY id_players DESC LIMIT 1");

			for ($i=1; $i < $j; $i++) {
				
			$result=mysql_query("SELECT Players.id_players, Players.number, Players.name, Players.position, Players.year, Stats.goals, Stats.assists, Stats.shots, Stats.shots_on_goal, Stats.saves, Stats.yellow_cards, Stats.red_cards, Stats.fouls, Stats.offsides, Stats.corners FROM Players INNER JOIN Stats ON Player.number = Stats.player_num WHERE Players.id_players=$i");
				echo "
				<tr>
					<td>", $result['number'], "</td>
					<td>", $result['name'], "</td>";

				if ($result['position']==2){
					echo "<td>GK</td>";
				} elseif ($result['position']==3){
					echo "<td>D</td>";
				} elseif ($result['position']==6){
					echo "<td>F</td>";
				} elseif ($result['position']==16){
					echo "<td>M</td>";
			 	}
				
				if ($result['year']==1){
					echo "<td>Fr</td>";
				} elseif ($result['year']==2){
					echo "<td>So</td>";
				} elseif ($result['year']==4){
					echo "<td>Jr</td>";
				} elseif ($result['year']==8){
					echo "<td>Sr</td>";
				} elseif ($result['year']==16){
					echo "<td>Gr</td>";
			 	} else {
					echo "<td>  </td>";
				}
					
				
			echo "			
					
					<td></td>
					<td></td>
					<td></td>
					<td>0%</td>
					<td></td>
					<td>0%</td>
					<td></td>
					<td></td>
					
				</tr>";
			}
				echo "
				</table></p></center>";
			echo "
			</div>";
			echo"
			<div id=game_log>
				<p>test game log test</p>
			</div>";

		mysql_close($db_server);	
		?>			

		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>

