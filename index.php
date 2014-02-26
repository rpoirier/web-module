<!DOCTYPE html>
<html>
	<head>
		<meta charset=UTF-8>
		<title>Men's Soccer</title>
		<link rel=stylesheet type=text/css href=style.css>
	</head>
	<body>
		<div class=banner>
			<h1>Fitchburg State University</h1>
		</div>
		<div class=menu>
			<ul id=menutext>
			<li>|</li>
			<li><a href=index.php><b>Home</b></a></li>
			<li>|</li>
			<li><a href=roster.php><b>Roster</b></a></li>
			<li>|</li> 
			<li><a href=schedule.php><b>Schedule</b></a></li>
			<li>|</li>
			<li><a href=stats.php><b>Statistics</b></a></li>
			<li>|</li>
			</ul>
		</div>

	
	
		<!--
		<?php 
		// Giving database location, username, password, database name
		$con=mysqli_connect("localhost","sport","crash0verride","sport");

		// And maybe store your IP into the visitors table
		mysqli_query($con, "INSERT INTO visitors(ip) VALUES ('$ip')");

		// And then we could display all the IPs who visited
		$result=mysqli_query($con, "SELECT ip FROM visitors");

		echo "<p><b>Previous Visitors: </b></p>";
		while($row=mysqli_fetch_array($result))
			echo $row['ip']."<br>";

		// And then close your connection
		mysqli_close($con);
		?>
		-->
	</body>
</html>

