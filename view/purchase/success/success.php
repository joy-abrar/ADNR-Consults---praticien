<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}

	if ($_SESSION['sessionStatus'] == "online") 
	{
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style.css?version=1">
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="main2.js"></script>

			<!------- END LOADING SCREEN ------- -->
			<title>Praticien - Achat effectué</title>
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->			
			<div id="topMenuNav">
				<div>
					<img id="logoImage" src="images/logo.png" alt="logo_png">
				</div>
			</div>

				<center>
					<h4 id="title"><u>Achat Effectué</u></h4>
					<h6 style="color: red;">Vous venez juste d'effectuer un achat.</h6> 
					<h6 style="color: red;">Vous allez maintenant être diriger ver la page d'accueil</h6>
				</center>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:index.php");
	}


?>