<?php
	session_start();

	if ($_SESSION['sessionStatus'] == "online") 
	{
		include_once('../../lib/config.php');
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<link rel="stylesheet" type="text/css" href="style.css?version=1">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="main2.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

			<!------- END LOADING SCREEN ------- -->
			<title>ADNR Consults - Créer un compte client</title>
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

					<h2 id="testTitle">Créer un nouveau compte Client ?</h2>

				<div id="seventhBloc" style="visibility: visible;"><br><br>
					<form id="addClientFormParam" method="POST" action="../../index.php?action=precreateThisClientAccount">
						<h4> Sexe :</h4>
						<div id="addAPetientGenderOption">
							<h5>Homme <input type="radio" name="clientSexe" value="man" required></h5>
							<h5>Femme <input type="radio" name="clientSexe" value="woman" ></h5>
						</div>
						

						<div id="addAPetientGenderOption">
							<br><br>
							<h5>Adulte <input type="radio" name="clientCategory" value="adult" required></h5>
							<h5>Adolescent <input type="radio" name="clientCategory" value="teen" ></h5>
							<h5>Enfant <input type="radio" name="clientCategory" value="child" ></h5>
						</div>


						<!--<div id="addAPetientGenderOption">
							<br><br>
							&nbsp;&nbsp;&nbsp;<h5>Adulte <input type="radio" name="clientCategory" value="adult" required></h5>
							&nbsp;&nbsp;&nbsp;<h5>Adolescent <input type="radio" name="clientCategory" value="teen" ></h5>
							&nbsp;&nbsp;&nbsp;<h5>Enfant <input type="radio" name="clientCategory" value="child" ></h5>
						</div>-->

						
						<input type="text" name="clientFirstName" placeholder="Nom *" required autocomplete="off"><br>

						<input type="text" name="clientLastName" placeholder="Prenom *" required autocomplete="off"><br>

						<input type="date" name="clientDateOfBirth" placeholder="Date De Naissance *" required autocomplete="off"><br>

						<input type="text" name="clientEmail" placeholder="Adresse Mail*" required autocomplete="off"><br>

						<input type="text" name="clientPhoneNumber" placeholder="Numéro de Téléphone *" required autocomplete="off"><br>
						<h3>Adresse du domicile</h3>

						<input type="number" name="clientRoadNumber" placeholder="N° de rue" autocomplete="off"><br>

						<input type="text" name="clientRoadName" placeholder="Nom de la rue" autocomplete="off"><br>

						<input type="text" name="clientAddressAlternate" placeholder="Adresse Complément" autocomplete="off"><br>

						<input type="number" name="clientPostalCode" placeholder="Code Postale" autocomplete="off"><br>

						<input type="text" name="clientCity" placeholder="Ville" autocomplete="off"><br>
						<br>
						<input id="addAPatientButton" type="submit" value="S'inscrire" name="submit" onclick="this.form.submit();this.disabled=true;this.value='Chargement...';">
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