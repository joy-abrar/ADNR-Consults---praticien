<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
    	session_start();
	}

	if ($_SESSION['sessionStatus'] == "online") 
	{
		include_once('../../lib/config.php');
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
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<script type="text/javascript" src="main2.js"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>ADNR Consults - Configuration</title>
		</head>
		<body id="setFont">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->			

				<?php
				include_once('../../lib/topMenu1.php');
				include_once('../../lib/sideMenu1.php');
			?>

				<h2 id="blocTitle">PARAMETRAGE DU COMPTE</h2>
				<div id="settingsPageMain">
					<div id="settingsForum">
						<form id="settingsFormItems" method="POST" action="../../index.php?action=updateAccount">
							<h4>Nom</h4>
							<input id="settingsFormInputDeco" type="text" name="firstname" value="<?= base64_decode($_SESSION['firstName']) ?>" required>
							<h4>Prenom</h4>
							<input id="settingsFormInputDeco" type="text" name="lastname" value="<?= base64_decode($_SESSION['lastName']) ?>" required>
							<h4>Identifiant</h4>
							<input id="settingsFormInputDeco" type="text" name="username" value="<?= base64_decode($_SESSION['userName']) ?>" required readonly>
							<h4>Adresse mail</h4>
							<input id="settingsFormInputDeco" class="removeSpace" type="email" name="email" value="<?= base64_decode($_SESSION['userEmail']) ?>" required>
							<h4>Date de naissance</h4>
							<input id="settingsFormInputDeco" type="date" name="dob" value="<?= $_SESSION['userDob'] ?>" required>
							<h4>Mot de passe</h4>
							<input id="settingsFormInputDeco" class="removeSpace" type="password" name="password" value="<?= base64_decode($_SESSION['userPassword']) ?>" required>
							<h4>Resaissir mot de passe</h4>
							<input id="settingsFormInputDeco" class="removeSpace" type="password" name="retypedPassword" required>
							<br><br><br>
							
							<h3><u>Informations complémentaires</u></h3>
							<h4>Numéro de la rue</h4>
							<input id="settingsFormInputDeco" type="number" name="praticienRoadNumber" value="<?= $_SESSION['praticienRoadNumber'] ?>" required>
							<h4>Nom de la rue</h4>
							<input id="settingsFormInputDeco" type="text" name="praticienRoadName" value="<?= $_SESSION['praticienRoadName'] ?>" required>
							<h4>Adresse complémentaire</h4>
							<input id="settingsFormInputDeco" type="text" name="praticienComplementAddress" value="<?= $_SESSION['praticienComplementAddress'] ?>" >
							<h4>Code postale</h4>
							<input id="settingsFormInputDeco" type="number" name="praticienCodePostal" value="<?= $_SESSION['praticienCodePostal'] ?>" required>
							<h4>Ville</h4>
							<input id="settingsFormInputDeco" type="text" name="praticienCityName" value="<?= $_SESSION['praticienCityName'] ?>" required>
							<h4>Pays</h4>
							<input id="settingsFormInputDeco" type="text" name="praticienCountry" value="<?= $_SESSION['praticienCountry'] ?>" required>
							<h4>Téléphone du cabinet</h4>
							<input id="settingsFormInputDeco" type="number" name="praticienCabinetPhoneNumber" value="<?= $_SESSION['praticienCabinetPhoneNumber'] ?>" required>
							<br>
							<h4>Niveau d'étude</h4>
							<select name="praticienEducationQualification">
								<option value="<?= $_SESSION['praticienEducationQualification'] ?>"><?= $_SESSION['praticienEducationQualification'] ?></option>
								<option value="Brevet/College">Brevet/Collège</option>
								<option value="BEP">B.E.P.</option>
								<option value="Bac Generale">Baccalauréat Générale</option>
								<option value="Bac Techno">Baccalauréat Technologique</option>
								<option value="Bac Pro">Baccalauréat Professionnel</option>
								<option value="BTS/DUT">BTS/DUT (Bac+2)</option>
								<option value="Licence">Licence (Bac+3)</option>
								<option value="Licence Pro">Licence Professionnel (Bac+3)</option>
								<option value="Masters M1">Masters (M1)</option>
								<option value="Masters M2">Masters (M2)</option>
								<option value="Doctorat">Doctorat (Bac+7)</option>
							</select>
							<br>
							
							<input id="settingsSubmitButton" type="submit" name="valid" value="Sauvegarder">
						</form>
					</div>	
				</div>
				<!--<div id="settingsMenu">
					<a href="#" id="accountSettings">
						<img id="accountSettingsLogo" src="images/settings.png" alt="settings png">Paramètre du compte
					</a>

					<a href="#" id="accountSettings">
						<img id="accountSettingsLogo" src="images/settings.png" alt="settings png">
					</a>
				</div>-->


			<script type="text/javascript" src="main.js"></script>
			<script type="text/javascript" src="removeSpace.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:../../index.php");
	}


?>