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
			<link rel="stylesheet" type="text/css" href="view/packageOffers/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/packageOffers/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="view/packageOffers/main2.js"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>Praticien - Clients</title>
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->
			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

				<center>
					<h4><u>Nos Abonnements</u></h4>
				</center>

				
				

				<div id="packages">
						<div class="flipcard">
		    				<div class="face front">
		    					<div style="background:#1a896a;border-radius: 10px;">
		    						<h2><u id="fontStyle">Option 1</u></h2>
		    						<h3>5€/mois</h3>
		    					</div>
		    					<div style="background: #666e8b; border-radius: 10px; margin-top: 40%;">
		    						<h3><u>inclus dans l'abonnement</u></h3>
		    						<h4>- Fleurs de Bach</h4>
		    						<h4>- Bilan Naturo</h4>
		    						<h4>- Messagerie Interne</h4>
		    						<h4>- Ajouter un nouveau client</h4>
		    						<h4>- Ajouter un nouveau client</h4>
		    						<h4>- Gestion des clients</h4>
		    					</div>

		    					<center class="chooseThisPackageButtonOnFront"><a id="chooseThisPackageButtonOnFrontButton" href="index.php?action=packageOption1">Choisir</a> </center> 
		    				</div>
		    				<div class="face back">
		    					<a class="chooseThisPackageButton" href="index.php?action=packageOption1">Choisir</a> 
		    				</div>
		 				</div>

		 				<div class="flipcard">
		    				<div class="face front">
		    					<div style="background:#1a896a;border-radius: 10px;">
		    						<h2><u id="fontStyle">Option 2</u></h2>
		    						<h3>7€/mois</h3>
		    					</div>
		    					<div style="background: #747474; border-radius: 10px; margin-top: 40%;">
		    						<h3><u>inclus dans l'abonnement</u></h3>
		    						<h4>- Fleurs de Bach</h4>
		    						<h4>- Bilan Naturo</h4>
		    						<h4>- Messagerie Interne</h4>
		    						<h4>- Ajouter un nouveau client</h4>
		    						<h4>- Ajouter un nouveau client</h4>
		    						<h4>- Gestion des clients</h4>
		    					</div>

		    					<center class="chooseThisPackageButtonOnFront"><a id="chooseThisPackageButtonOnFrontButton" href="index.php?action=packageOption2">Choisir</a> </center>
		    				</div>
		    				<div class="face back">
		    					<a class="chooseThisPackageButton" href="index.php?action=packageOption2">Choisir</a> 
		    				</div>
		 				</div>

		 				<div class="flipcard">
		    				<div class="face front">
		    					<div style="background:#1a896a;border-radius: 10px;">
		    						<h2><u id="fontStyle">Option 3</u></h2>
		    						<h3>9€/mois</h3>
		    					</div>
		    					<div style="background: #313a42; border-radius: 10px; margin-top: 40%;">
		    						<h3><u>inclus dans l'abonnement</u></h3>
		    						<h4>- Fleurs de Bach</h4>
		    						<h4>- Bilan Naturo</h4>
		    						<h4>- Messagerie Interne</h4>
		    						<h4>- Ajouter un nouveau client</h4>
		    						<h4>- Ajouter un nouveau client</h4>
		    						<h4>- Gestion des clients</h4>
		    					</div>

		    					<center class="chooseThisPackageButtonOnFront"><a id="chooseThisPackageButtonOnFrontButton" href="index.php?action=packageOption3">Choisir</a> </center>
		    				</div>
		    				<div class="face back">
		    					<a class="chooseThisPackageButton" href="index.php?action=packageOption3">Choisir</a> 
		    				</div>
		 				</div>

		 				<div class="flipcard">
		    				<div class="face front">
		    					<div style="background:#1a896a;border-radius: 10px;">
		    						<h2><u id="fontStyle">Option 4</u></h2>
		    						<h3>10€/mois</h3>
		    					</div>
		    					<div style="background: #b79f75; border-radius: 10px; margin-top: 40%;">
		    						<h3><u>inclus dans l'abonnement</u></h3>
		    						<h4>- Fleurs de Bach</h4>
		    						<h4>- Bilan Naturo</h4>
		    						<h4>- Messagerie Interne</h4>
		    						<h4>- Ajouter un nouveau client</h4>
		    						<h4>- Ajouter un nouveau client</h4>
		    						<h4>- Gestion des clients</h4>
		    					</div>

		    					<center class="chooseThisPackageButtonOnFront"><a id="chooseThisPackageButtonOnFrontButton" href="index.php?action=packageOption4">Choisir</a> </center>
		    				</div>
		    				<div class="face back">
		    					<a class="chooseThisPackageButton" href="index.php?action=packageOption4">Choisir</a> 
		    				</div>
		 				</div>
		 		</div>
		 		<div>
		 			<a id="returnButton" href="index.php?action=accueil">Revenir</a>
		 		</div>
			<script type="text/javascript" src="view/packageOffers/main.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:index.php");
	}


?>