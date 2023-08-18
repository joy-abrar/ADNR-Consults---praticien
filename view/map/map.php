<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}

	if ($_SESSION['sessionStatus'] === "online") 
	{
?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Test MAPS</title>
			<link rel="icon" type="image/png" href="view/map/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="view/map/style.css?version=1.0">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1.0">



			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">		
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script type="text/javascript" src="view/map/main2.js"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>Tableau De Bord</title>
			<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
			<meta http-equiv="Pragma" content="no-cache" />
			<meta http-equiv="Expires" content="0" />
		</head>
		<body>

			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

			<center>
				<iframe id="iframe" style="margin-top: 8vh;" width="1800" height="850" src="https://conseils-produits-naturels.fr/fxvd-tbhkgjnbvlkcrkjdhnksbyt/" > </iframe>
			</center>
		<script type="text/javascript" src="view/map/main.js"></script>
		</body>
		</html>

<?php
	}

	else
	{
		header("location:index.php");
	}
?>