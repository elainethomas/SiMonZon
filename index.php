<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>

		<!-- IE Rendering Mode = Edge-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />

		<!--Google Fonts-->
		<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>

		<!-- My Own Personal Style Sheet -->
		<link rel="stylesheet" href="style.css" />

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- My own personal JavaScript -->
		<script src="script.js"></script>
		<title>Praeter SiMonZon</title>
	</head>

		<body background="images/space2.jpg" id="clickbutt" onload="allTehAds()">
			<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<img src="images/mouse.gif" class="ratgif "alt="dance rat">
				</div>
				<div class="col-md-8">
				<h1>SiMonZon Needs Your Help To Defeat Earth!!</h1>
				</div>
				<div class="col-md-2">
					<img src="images/mouse.gif" class="ratgif "alt="dance rat">
				</div>
			</div>
			 </div>

			<div class="container">
			<div class="row">
			  <div class="span4"></div>
				<div class="span4"><img src="images/simonzon1.png" class="center-block" alt="Si'mon LLoron"></div>
				<div class="span4"></div>
			</div>
			</div>

			<div id="youWantThis"></div>
			<!-- <div id="quiereThis"></div> -->
			<div class="container">
			<div class="row">
				<div class="span4"></div>
				<div class="span4">
					<div class="content">
						<h2><q>SiMonZon is the  <span class="strike">Reman</span>  <span class="strike">Romulan</span>  <span class="strike">Feline?</span>  clone alternative you've been looking for..</q><br><span id="scratchy">(he was under the bed!!)</span></h2>
				   </div>
					<div class="span4"></div>
				</div>
				<div class="span4"></div>
			</div>
			</div>
				<hr>

			<div class="container">
				<div class="row">
					<div class="span4"></div>
					<div class="span4">
				<!-- Select onchange HTML event -->
				<h3>Read some of SiMonZon's Fuzzy Ideas here..</h3>
					</div>
					<div class="span4"></div>
					<div class="row">
						<div class="span4"></div>
						<div class="span4">
				<select id="selektor" onchange="sentiments()">
					<option value="">
					<option value="Its-in-my-DNA">Leadership
					<option value="Four-Paws-Up">Belly Scratches
					<option value="Learn-to-Command-Humans-With-One-Well-Placed-Swat">Command
					<option value="No-Need-To-Spray-Just-Use-Thalaron">Revenge
					<option value="You-Could-Be-The-Next-To-Control-The-Mouse">Control
				</select>
				<div id="youNeedThis"></div>
						</div>
					</div>
					<div class="span4"></div>
				</div>
			</div>
			<hr>
			  <p>Si'mon-zon guarantees your safety, no more litterbox attacks from the Ambassadors of Sirius.</p>
			</div>
		</body>

</html>




<!--
create a plunker with an empty div tag to recive adverstisements for useful products and services, stack the div with a a new advertisement every x milliseconds (dont let the previous advertisements be overwritten)

KIS!!

extra credit: crreate a popup window (that is not an alert)

//use this for debugging//
var ourSenator = {name: "Arlo", rank: "Senator"}
console.log(ourSenator);
-->