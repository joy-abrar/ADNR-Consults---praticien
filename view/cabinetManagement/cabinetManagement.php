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
			<title>Praticien - Gestion du cabinet</title>
		</head>
		<body id="setFont">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->
				<?php
					include_once('../../lib/topMenu1.php');
					include_once('../../lib/sideMenu1.php');
				?>
				<h2 id="blocTitle">GESTION DU CABINET</h2>
				<div id="settingsPageMain">
					<div id="settingsForum">
						<h3 id="settingsTitle">Justificatifs du cabinet</h3>
							<form id="settingsFormItems" method="POST" action="../../index.php?action=updatePraticienJustificatifs" enctype="multipart/form-data">
								<h4>Ajouter un Certificat/Diplôme</h4>
								<input id="settingsFormInputDeco" type="file" name="praticienDegreeOrCertificat" required>
								<br>
								
								<input id="settingsSubmitButton" type="submit" name="valid" value="Ajouter">
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
		</body>
	</html>

<?php
	}

	else
	{
		header("location:../../index.php");
	}


?>