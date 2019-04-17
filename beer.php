<?php
require 'connect.php';
require 'db.php';

$sql = "SELECT * FROM biere";
$statement = $pdo->query($sql);
$tabbeer = $statement->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>les bières</title>
	<meta charset="utf-8">
</head>
<body>
	<section>
		<?php foreach ($tabbeer as $row): ?>
			<article>
			<h2><?= $row["nom"] ?></h2>
				<form method="POST" action="deletebeer.php">
					<input type="hidden" name="id" value="<?= $row["id"] ?>">
					<button type="submit">suppression</button>
				</form>
			<p><?= $row["description"] ?></p>
		</article>
		<?php endforeach; ?>
	</section>
	<nav>
		<a href="page.php">Site</a><br/>
		<a href="profil.php">Mon Profil</a><br/>
		<a href="beer.php">Les Bières</a><br/>
		<a href="?deconnect=true">déconnexion</a>
	</nav>
</body>
</html>
