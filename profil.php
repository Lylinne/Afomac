<?php
require 'connect.php';

echo "mon profil est super secu <br />";
echo "my name is ".substr($username, -3)." ".substr($username, 0, -3)."-".substr($username, -3)." <br />";


if(isset($_GET['id'])){
	$id =
	$name =
	$password = 

}

?>



liste des autres utilisateur :
	- julien mdp : 123456
	- kevin mdp : azerty
	- pepito mdp : pepito



<a href="page.php">Site</a><br/>
<a href="profil.php">Mon Profil</a><br/>
<a href="beer.php">Les Bières</a><br/>
<a href="?deconnect=true">déconnexion</a>
