<?php
session_start();

if (isset($_SESSION['token']))
	header('Location: roulette.php');
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/sweetalert2.min.css"> <!-- sweetalert2 -->
	<link rel="stylesheet" href="css/superwheel.css"> <!-- superWheel -->
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css"> <!-- superWheel -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  	
	<title>42Roulette</title>
</head>
<body>
	

	<main class="cd-main-content text-center">
		<div class="wheel-with-image"></div>
			<img src="https://media.giphy.com/media/xUn3CftPBajoflzROU/giphy.gif">
			<form action="roulette.php" method="POST">
				<button type="button" class="button button-primary wheel-with-image-spin-button" onclick="window.location.href='https://api.intra.42.fr/oauth/authorize?client_id=b778a71020a884e58fa30b3d0d18760ab57729728ff96ba6fb2b689bfd5c5be9&redirect_uri=http%3A%2F%2Flocalhost%3A8888%2Froulette%2Froulette.php&response_type=code'">Login</button>
			</form>
	</main> <!-- cd-main-content -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>