<?php
session_start();
if(isset($_SESSION['id'])){
	header("Location: /index.html");
}

if (isset($_GET['code'])) {
	echo "oui";
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/sweetalert2.min.css">
	<link rel="stylesheet" href="css/superwheel.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
  	
	<title>42Roulette</title>
</head>
<body>
	<main class="cd-main-content text-center">
		<div class="wheel-with-image"></div>
		<button type="button" class="button button-primary wheel-with-image-spin-button">Spin</button>
	</main>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/superwheel.js"></script>
<script src="js/sweetalert2.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>