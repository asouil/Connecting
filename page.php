<?php
	session_start();
	if(isset($_GET["deconnect"])&& $_GET["deconnect"]){
		unset($_SESSION["connect"]);
	}
	if (isset($_SESSION["connect"])){
		$connect= $_SESSION["connect"];
		$username = $_SESSION["username"];
		echo "bonjour {$username}<br />";
	}

	if(empty($connect)){
		header("./index.php");
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="profil.php">Mon profil </a>
	<a href="./index.php?deconnect=true">Déconnexion </a>

</body>
</html>