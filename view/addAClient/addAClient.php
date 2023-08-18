<?php
	session_start();

	if ($_SESSION['sessionStatus'] == "online") 
	{
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style.css?version=1">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="main2.js"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>Praticien - Ajouter un client</title>
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->

			<?php
				include_once('../../lib/topMenu1.php');
				include_once('../../lib/sideMenu1.php');
			?>

			<div id="mainAppearence">


				<div id="fifthBloc">
					
					<center id="titleBloc"><h2><u>Ajouter un nouveau Client</u></h2></center>
				</div>
				<div id="seventhBloc" style="visibility: visible;">
					<form id="addClientFormParam" method="POST" action="../../index.php?action=addThisClient">
						<h4> Sexe :</h4>
						<div id="addAPetientGenderOption">
							<h5>Homme <input type="radio" name="clientSexe" value="man" required></h5>
							&nbsp;&nbsp;&nbsp;<h5>Femme <input type="radio" name="clientSexe" value="woman" ></h5>
							&nbsp;&nbsp;&nbsp;<h5>Adolescent <input type="radio" name="clientSexe" value="teen" ></h5>
							&nbsp;&nbsp;&nbsp;<h5>Enfant <input type="radio" name="clientSexe" value="child" ></h5>
						</div>
						<h4>Nom *</h4>
						<input type="text" name="clientFirstName" required autocomplete="off">
						<h4>Prenom *</h4>
						<input type="text" name="clientLastName" required autocomplete="off">
						<h4>Date de naissance *</h4>
						<input type="date" name="clientDateOfBirth" required autocomplete="off">
						<h4>Adresse messagerie *</h4>
						<input type="text" name="clientEmail" required autocomplete="off">
						<h4>Numéro de téléphone *</h4>
						<input type="text" name="clientPhoneNumber" required autocomplete="off">
						<h3>Adresse du domicile</h3>
						<h4>N° de rue *</h4>
						<input type="number" name="clientRoadNumber" required autocomplete="off">
						<h4>Nom de la rue *</h4>
						<input type="text" name="clientRoadName" required autocomplete="off">
						<h4>Adresse Complément </h4>
						<input type="text" name="clientAddressAlternate" autocomplete="off">
						<h4>Code postale *</h4>
						<input type="number" name="clientPostalCode" required autocomplete="off">
						<h4>Ville *</h4>
						<input type="text" name="clientCity" required autocomplete="off">
						<br>
						<input id="addAPatientButton" type="submit" value="ajouter" name="submit" onclick="this.form.submit();this.disabled=true;this.value='Chargement...';">
					</form>
				</div>
			</div>
			<script type="text/javascript" src="main.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:../../index.php");
	}


?>