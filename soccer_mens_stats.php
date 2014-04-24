<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8>
		<title>Fitchburg State University - Men's Soccer</title>
		<link rel=stylesheet type=text/css href=style.css>
		<script>
			var contentDivs = [ 'team_profile', 'season', 'game_log' ];

			function select_content_div(id) {
				contentDivs.forEach(function(element) {
					var div = document.getElementByID(element);
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
			<p align=center><b>Fitchburg State Men's Soccer Statistics</b></p>

			<center><table id=stats_menu>
			<tr>
				<td><button onclick="select_content_div(team_profile)"><b>Team Profile</b></button></td>
				<td><button onclick="select_content_div(season)"><b>Season</b></button></td>
				<td><button onclick="select_content_div(game_log)"><b>Games</b></button></td>
			</tr>
			</table></center>
			<p>&nbsp;</p>

			<div id=team_profile>
				<center><table>
				<tr>
					<th>&nbsp;Games</th>
					<th>&nbsp;Goals</th>
					<th>&nbsp;Goals-Per Game</th>
					<th>&nbsp;Shot %</th>
					<th>&nbsp;Shots-Per-Game</th>
					<th>&nbsp;GAA&nbsp;</th>
				</tr>
				<tr>
					<td><center>19</center></td>
					<td><center>16</center></td>
					<td><center>0.8</center></td>
					<td><center>0.066</center></td>
					<td><center>12.7</center></td>
					<td><center>0.78</center></td>
				</tr>
				</table>
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
				</table></center>

			</div>
			<div id=season>
				<p>test season test</p>
			</div>
			<div id=game_log>
				<p>test game log test</p>
			</div>

		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>

