<?php 

session_start();
if(isset($_GET["deconnect"])&& $_GET["deconnect"]){
	unset($_SESSION["connect"]);
}
if (isset($_SESSION["connect"])){
	$connect= $_SESSION["connect"];
	if($_SESSION["username"]=="julien"){
		echo "Mon profil est super secure! ";
	}
	if($_SESSION["username"]=="kevin"){
		echo "My name is in, kev-in....";
	}
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
	<a href="./page.php">Ma page </a>
	<a href="./index.php?deconnect=true">Déconnexion</a>
</body>
</html>
