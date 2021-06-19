<?php
	$stmt = $pdo->query("SELECT * FROM users WHERE login='$array->login'");
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if (!$result)
		$stmt = $pdo->query("INSERT INTO users (login, nb_pts, nb_gages, nb_tig, secret_complete) VALUES ('$array->login', 0, 0, 0, 0);");
?>