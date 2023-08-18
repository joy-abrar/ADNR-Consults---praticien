<?php
	error_reporting(0);
	ini_set('display_errors', 0);
	session_start();
	if ($_SESSION['createAccountStatus'] == "requestSent") 
	{
?>

		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style.css?version=1">
			<title>Account Created</title>
		</head>
		<body>
			<div id="accountCreatedMessage">
				<h1>Votre demande de création du compte a bien été prise en compte ! Nous vous contacteront le plus rapidement afin de donner une réponse.</h1>
			</div>


			<script type="text/javascript" src="main.js"></script>
		</body>
		</html>

<?php
}

else
{
	echo "vous n'avez pas bien suivi les etapes." ;
}
?>