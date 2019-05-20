<?php
	session_start();
	if (isset($_SESSION["connect"])){
		$connect= $_SESSION["connect"];
	}
	else{
		$connect=false;
	}
	$errusername="";
	$errpassword="";

	if(!empty($_POST)){
		$stock=[
			"julien" => "123456",
			"kevin" => "azerty"
		];
		$username= $_POST["username"];
		$password= $_POST["password"];

		if(!empty($username)&&!empty($password)){
			/* TODO : vérifier couple user / mdp */
			if(isset($stock[$username])){
				if($password===$stock["$username"]){
					session_start();
					$_SESSION["connect"] = true;
					$_SESSION["username"] = $username;
					header("Location: http://localhost/Connecting/page.php");
				}
				else{
					header("HTTP/1.0 403 Forbidden");
				}

			}else{
				/*TODO : username ou mdp pas bon */
				header("HTTP/1.0 403 Forbidden");
			}
		}else{
			if(empty($username)){
				$errusername=' class="danger"';
			} 
			if(empty($password)){
				$errpassword=' class="danger"';
			}
		}
	}
	/* TODO : signaler qu'il manque un champs */
?>
<!DOCTYPE html>
<html>
<head>
	<title>formulaire de connexion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="">
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
					<!--label>Identifiant</label-->
					<input  type="text" name="username" placeholder="Nom d'utilisateur" required="required" />
					<input  type="password" name="password" placeholder="Mot de passe" required="required" />
					<button type="submit">Connexion</button>
					
				</form>
			</div>
		</section>
	</div>

</body>
</html>