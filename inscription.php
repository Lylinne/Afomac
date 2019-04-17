<?php

if(!empty($_POST)){
	$stock = require 'stack.php';
	$username =strtolower($_POST["username"]);
	$password = $_POST["password"];


 ?>







<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>formulaire de connexion</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="wrapper">
		<section class="login-container">
			<div>
				<header>
					<h2>Identification</h2>
				</header>
				<form action="" method="Post">
					<input <?= $errusername ?> type="text" name="username" placeholder="Nom d'utilisateur" required="required" />
					<input <?= $errpassword ?> type="password" name="password" placeholder="Mot de passe" required="required" />
					<input <?= $errverif ?> type="password" name="verif_password" placeholder="verification MDP" required="required" />
					<button type="submit">Enregistrer</button>
				</form>
			</div>
		</section>
	</div>
</body>
</html>