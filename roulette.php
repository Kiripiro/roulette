<?php

session_start();

if (isset($_GET['code'])) {
	$client_id = 'b778a71020a884e58fa30b3d0d18760ab57729728ff96ba6fb2b689bfd5c5be9';
	$client_secret = '4fd2b575ddaa28c7edc9b340c3eacae39fce9af62d1ecd392e4297dc497aa668';
	$redirect_uri= "http://localhost:8888/roulette/roulette.php";
	$authorization_code = $_GET['code'];
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_URL, 'https://api.intra.42.fr/oauth/token');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=authorization_code&code=$authorization_code&redirect_uri=$redirect_uri&client_id=$client_id&client_secret=$client_secret");
	curl_setopt($ch, CURLOPT_POST, 1);

	$headers = array();
	$headers[] = 'Content-Type: application/x-www-form-urlencoded';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}
	curl_close ($ch);

	$array = json_decode($result);
	$access_token = $array->access_token;



	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://api.intra.42.fr/v2/me');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	
	$headers = array();
	$headers[] = 'Authorization: Bearer '.$access_token;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	
	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}
	curl_close ($ch);
	$array = json_decode($result);
				
	if (isset($array->error))
		show_404();
	var_dump($array->login);
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