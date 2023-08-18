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
		<link rel="stylesheet" type="text/css" href="view/style.css?version=1">
		<!--<link rel="stylesheet" type="text/css" href="view/styleMenubar.css">-->
		<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
		<link rel="icon" type="image/png" href="view/images/logo.png" />
		<script type="text/javascript" src="view/main.js"></script>
		<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!--<script type="text/javascript" src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
		<title>ADNR Consults - Proposition de fleurs de BACH</title>
	</head>
	<body id="textType">

		<?php
			include_once('lib/sideMenu1.php');
			include_once('lib/topMenu1.php');
		?>



		<br><br><br>
		<div id="invoice">
			<br>
			<div id="TopPrescription">
				<div id="logoPraticien">
					<img src="view/images/logoSample.png"><br><br>
				</div>

				<div id="praticienDetails">
					<br>
					<b>
						<span><?= ucfirst(base64_decode($_SESSION['firstName'])) . " " . strtoupper(base64_decode($_SESSION['lastName'])) ?></span><br>
					</b><br>
					<b>
						<span><?= $_SESSION['praticienRoadNumber'] . " " . $_SESSION['praticienRoadName'] ?></span>
					</b>
					<b>
						<span><?= $_SESSION['praticienCodePostal'] . ", " . $_SESSION['praticienCityName'] ?></span>
					</b>
					<b>
						<span><?= $_SESSION['praticienCountry'] ?></span><br>
					</b><br>
					<b>
						<span><?= strtolower(base64_decode($_SESSION['userEmail'])) ?></span>
					</b>
					<b>
						<span>Tél: <?= $_SESSION['praticienCabinetPhoneNumber'] ?></span><br>
					</b><br><br><br>
					<b>Le <?= date("d/m/Y") . " à " . date("H") . "h" . date("i"); ?></b>


				</div>
			</div>
			<div id="mainFetchResults">
				<h2><u>Proposition de votre praticien</u></h2>
				<!--<img id="prescriptionLogo" src="view/images/logo.png">-->
				<h5>
					Voici le résultat de votre bilan émotionnel selon les enseignements du Docteur BACH.  Cette proposition n'est pas une ordonnance et n'a aucune valeur médicale ou thérapeutique. Les indications sont celles généralement proposées pour ces fleurs mais peuvent ne pas correspondre exactement avec votre cas.
				</h5>
				<h3><u>Détails</u></h3>
				<p>
					<?php
						while($choice1 = $fetchChoice1 -> fetch())
						{
					?>
							<h4>Nom de la fleur :</h4><b><?= $choice1['flowerName'] ?></b><br>
							<h5> <?= $choice1['flowerMessage'] ?></h5><br><br>
						<?php
						}
						while($choice2 = $fetchChoice2 -> fetch())
						{
					?>
							<h4>Nom de la fleur :</h4><b><?= $choice2['flowerName'] ?></b><br>
							<h5> <?= $choice2['flowerMessage'] ?></h5><br><br>
					<?php	
						}

						while($choice3 = $fetchChoice3 -> fetch())
						{
					?>
							<h4>Nom de la fleur :</h4><b><?= $choice3['flowerName'] ?></b><br>
							<h5> <?=  $choice3['flowerMessage'] ?></h5><br><br>
					
					<?php	
						}

						while($choice4 = $fetchChoice4 -> fetch())
						{
					?>
							<h4>Nom de la fleur :</h4><b><?= $choice4['flowerName'] ?></b><br>
							<h5> <?=  $choice4['flowerMessage'] ?></h5><br><br>
					<?php	
						}

						while($choice5 = $fetchChoice5 -> fetch())
						{
					?>
							<h4>Nom de la fleur :</h4><b><?= $choice5['flowerName'] ?></b><br>
							<h5> <?=  $choice5['flowerMessage'] ?></h5><br><br>
					<?php	
						}

						while($choice6 = $fetchChoice6 -> fetch())
						{
					?>
							<h4>Nom de la fleur :</h4><b><?= $choice6['flowerName'] ?></b><br>
							<h5> <?=  $choice6['flowerMessage'] ?></h5><br><br>
					<?php	
						}

						while($withoutChoice = $fetchWithoutChoice -> fetch())
						{
					?>
							<h4>Nom de la fleur :</h4><b><?= $withoutChoice['flowerName'] ?></b><br>
							<h5> <?=  $withoutChoice['flowerMessage'] ?></h5><br><br>
					<?php	
						}
					?>
				</p>

				<h4><u>Phrase Positive</u></h4>
				<?php

					if ($resultsFoundForPositiveSentence == 0) 
					{
				?>
						<h6>Vous n'avez toujours pas fait votre choix principale</h6>
				<?php	
					}

					if ($resultsFoundForPositiveSentence !== 0) 
					{
						while($positiveSentence = $fetchPositiveSentence -> fetch())
						{
				?>
							<b> <?= $positiveSentence['positiveSentence'] ?> </b>
				<?php
						}
					}
				?>
			</div>

			<div id="signature">
				<b>Signature du praticien</b>
				<img style="width: 15rem; height:5rem;" src="<?= $signature ?>">
			</div>
		</div>

		<div id="emailWindow">
			<i id="closeWindowButton" onclick="closeEmailWindow()" class="fa-solid fa-circle-xmark"></i>
			<center>
				<h2 style="color:black; ">Adresse courriel du client</h2>
				<form method="POST" action="./index.php?action=sendMailToPatient" enctype="multipart/form-data">
					<input id="sendMailToPatientInput" type="email" name="adresseMail" placeholder="Veuillez saisir l'adresse courriel du client...">
					<br><br><input type="file" name="attachment" accept=".pdf">
					<input id="sendMailToPatientSubmitButton" type="submit" name="sendMailToPatient" value="Confirmer">
					<br><br>
					<textarea class="tinymce" name="mailBody">Bonjour,<br><br>Voici votre prescription de fleurs de Bach</textarea>
					<br>
				</form>
			</center>
		</div>

		<div id="myModal" class="modal">
			<div class="modal-content">
			    <div class="modal-header">
			      <span class="close">&times;</span>
			      <h2>Confirmation</h2>
			    </div>
			    <div class="modal-body">
			      <h3>Etes-vous sûr de sauvegarder ce bilan?</h3>
			      <p>(Une confirmation est nécessaire pour sauvegarder le donnée du client)</p>
			    </div>
			    <form method="POST" action="././index.php?action=saveBilanFleursToClientProfil" class="modal-footer">
			      	<center id="deletingConfirmationButtonsParam">
			      		<input id="dataInHere" type="hidden" name="dataInHere">
			      		<input id="clientSharingConfirmButton" type="submit" value="Oui" name="confirmed">
			      		<!--<input id="clientSharingDenyButton" type="submit" value="Non" name="denied">-->
			    	</center>
			    </form>
			</div>
		</div>

		<div id="myModal2" class="modal2">
			<div class="modal-content">
			    <div class="modal-header">
			      <span class="close2">&times;</span>
			      <h2>Confirmation</h2>
			    </div>
			    <div class="modal-body">
			      <h3>Etes-vous sûr de sauvegarder ce bilan sans partager?</h3>
			      <p>(Une confirmation est nécessaire pour sauvegarder sans partage)</p>
			    </div>
			    <form method="POST" action="././index.php?action=saveBilanFleursToClientProfilWithoutSharing" class="modal-footer">
			      	<center id="deletingConfirmationButtonsParam">
			      		<input id="dataInHere2" type="hidden" name="dataInHere2">
			      		<input id="clientSharingConfirmButton" type="submit" value="Oui" name="confirmed">
			      		<!--<input id="clientSharingDenyButton" type="submit" value="Non" name="denied">-->
			    	</center>
			    </form>
			</div>
		</div>

		<button id="sendFunction2" onclick="sendEmailFunction()" name="sendMailButton">Envoyer par mail</button> 
		<button id="fleursSaveButton" >Enregistrer Avec Partage</button>
		<button id="fleursSaveButtonWithoutSharing" >Enregistrer Sans Partager</button>
		<button id="exportFunction2" onclick="generatePDF()">Telecharger en PDF</button>
		<a id="returnFunction" href="./index.php?action=backToResultPage">REVENIR</a>
		<a id="finishButton" href="./index.php?action=dropTablesAndGoToHome">TERMINER</a>
		


		<script type="text/javascript" src="view/main.js"></script>
		<script type="text/javascript" src="view/main2.js"></script>
		<!-- --------------------------- TINYMCE -------------------------------- -->
		<script type="text/javascript" src="view/tinymce/plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="view/tinymce/plugin/tinymce/init-tinymce.js"></script>
		<script type="text/javascript" src="view/js/jquery.min.js"></script>
		<!-- ------------------------- END TINYMCE ---------------------------- -->
	</body>
	</html>
<?php
	}
	else
	{
		header("location:index.php");
	}
?>