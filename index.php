<?php
	include 'inc/db_connect.php';

	$query = "SELECT * FROM players";

	$result = mysql_query($query);

	if(!$result){
		die('Query error: ' . mysql_error());
	}

	while ($row = mysql_fetch_assoc($result)){
		$rows[] = $row;
	}
	$name = $rows[0]['name'];


	$position = $rows['position'];
	$offense = $rows['offense'];
	$defense = $rows['defense'];
	$passing = $rows['passing'];
	$stamina = $rows['stamina'];
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.shapeshift.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
</head>
<body>
	<div class="player-pool-wrapper">
		<div class="container">
			<div><img id="iniesta" style="width:100%; height:100%" src="img/iniesta.jpeg"></div>
			<div><img id="kroos" style="width:100%; height:100%" src="img/kroos.jpeg"></div>
			<div><img id="messi" style="width:100%; height:100%" src="img/messi.jpeg"></div>
		</div>

		<div class="container">
			<div><img style="width:100%; height:100%" src="img/ronaldo.jpeg"></div>
			<div><img style="width:100%; height:100%" src="img/rooney.jpeg"></div>
			<div><img style="width:100%; height:100%" src="img/neymar.jpeg"></div>
			<div><img style="width:100%; height:100%" src="img/ramos.jpeg"></div>
			<div><img style="width:100%; height:100%" src="img/luis.jpeg"></div>
		</div>
		<div class="container">
			<div><img style="width:100%; height:100%" src="img/rodriguez.jpeg"></div>
			<div><img style="width:100%; height:100%" src="img/marcelo.jpeg"></div>
			<div><img style="width:100%; height:100%" src="img/pique.jpeg"></div>
			<div><img style="width:100%; height:100%" src="img/bale.jpeg"></div>
			<div><img style="width:100%; height:100%" src="img/bastian.jpeg"></div>
		</div>
	</div>
	<div id="messi-stats">
		<div class="wraper">
			<div><h4><?php print $name; ?></h4></div>
			<div><p><?php print $position; ?></p></div>
			<div class="skillst7">
				<div class="skillbar" data-percent="5%">
					<div class="count-bar color-1">
						<div class="title">Offense -</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="skillbar" data-percent="75%">
					<div class="count-bar color-2">
						<div class="title">Defense -</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="skillbar" data-percent="85%">
					<div class="count-bar color-3">
						<div class="title">Passing -</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="skillbar" data-percent="95%">
					<div class="count-bar color-5">
						<div class="title">Stamina -</div>
						<div class="count"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- 		<div id="messi-stats">
		<div class="wraper">
			<div><h4>Lionel Messi</h4></div>
			<div><p>Position: Forward</p></div>
			<div class="skillst7">
				<div class="skillbar" data-percent="95%">
					<div class="count-bar color-1">
						<div class="title">Offense -</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="skillbar" data-percent="75%">
					<div class="count-bar color-2">
						<div class="title">Defense -</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="skillbar" data-percent="85%">
					<div class="count-bar color-3">
						<div class="title">Passing -</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="skillbar" data-percent="95%">
					<div class="count-bar color-5">
						<div class="title">Stamina -</div>
						<div class="count"></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</body>
</html>