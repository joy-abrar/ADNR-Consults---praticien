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
			<title>ADNR Consults - Contenu Du Program Naturo</title>
			<link rel="icon" type="image/png" href="view/phvForThisClient/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="view/phvForThisClient/style.css?version=1.09">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1.0">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>
			<!----------------------------------------->

			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>
			<h2 id="blocTitle">PHV</h2>
				<form id="naturoSheetBloc" method="POST" action="index.php?action=confirmThisNaturoProgramContent"
					<?php 

						if ($backgroundImage !== null && $ourOffers == null) 
						{

						?>
							style="background:url('<?= "data:image/png;base64," .$backgroundImage ?>'); background-size: 100% 100%;"
						<?php
						}

						if ($backgroundImage == null && $ourOffers !== null) 
						{
						?>
							style="background:url('<?= $ourOffers ?>'); background-size: 100% 100%;"
						<?php
						}

					?>
				>
					<div id="phvBlocToPrint">
						<div id="praticienDetails">
							<div id="praticienName">
								<b><?= ucwords(base64_decode($_SESSION["lastName"])) . " " . strtoupper(base64_decode($_SESSION['firstName'])) . "</b><br>" . 
								"<b>Email: " . base64_decode($_SESSION['userEmail']) . "</b><br>" . 
								"<b>" . strtoupper($_SESSION['praticienRoadNumber']) . " " . strtoupper($_SESSION['praticienRoadName']) .
								"<br>".  strtoupper($_SESSION['praticienCityName']) . ", " . strtoupper($_SESSION['praticienCodePostal']) . "<br>" . strtoupper($_SESSION['praticienCountry']) . "</b><br>" . "<b>Tel : " . strtoupper($_SESSION['praticienCabinetPhoneNumber']) . "</b>"
								?>
							</div>
						</div>
						<div id="insideBox">
							<h2 id="naturoSheetIdTitle"><u>ALIMENTATION</u></h2>
							<textarea id="consultationMotif" name="myAlimentationContent" maxlength="500" autocomplete="off" style="width: 80%; min-width: 80%; max-width: 80%; height: 6%; min-height: 6%; max-height: 6%;"><?= $naturoProgramMyAlimentationContent ?></textarea>

							<h2 id="naturoSheetIdTitle"><u>COMPLEMENTATION</u></h2>
							<textarea id="consultationMotif" name="myComplementationContent" maxlength="500" autocomplete="off" style="width: 80%; min-width: 80%; max-width: 80%; height: 6%; min-height: 6%; max-height: 6%;"><?= $naturoProgramMyComplementationContent ?></textarea>

							<h4 id="troublesHistoryTitle">AROMATHERAPIE</h4>
							<textarea id="troubleHistoryInput" name="myAromatherapieContent" maxlength="500" autocomplete="off" style="width: 80%; min-width: 80%; max-width: 80%; height: 6%; min-height: 6%; max-height: 6%;"><?= $naturoProgramMyAromatherapieContent ?></textarea>

							<h4 id="troublesHistoryTitle">PHYTHOTHERAPIE</h4>
							<textarea id="troubleHistoryInput" name="myPhythotherapieContent" maxlength="500" autocomplete="off" style="width: 80%; min-width: 80%; max-width: 80%; height: 6%; min-height: 6%; max-height: 6%;"><?= $naturoProgramMyPhythotherapieContent ?></textarea>

							<h4 id="troublesHistoryTitle">FLEURS DE BACH (plus globalement elixirs)</h4>
							<textarea id="troubleHistoryInput" name="myFleursDeBachContent" maxlength="500" autocomplete="off" style="width: 80%; min-width: 80%; max-width: 80%; height: 6%; min-height: 6%; max-height: 6%;"><?= $naturoProgramMyFleursDeBachContent ?></textarea>
							
							<h4 id="troublesHistoryTitle">GESTION DU STRESS</h4>
							<textarea id="troubleHistoryInput" name="myStressContent" maxlength="500" autocomplete="off" style="width: 80%; min-width: 80%; max-width: 80%; height: 6%; min-height: 6%; max-height: 6%;"><?= $naturoProgramMyStressContent ?></textarea>

							<h4 id="troublesHistoryTitle">HYGIENE DE VIE</h4>
							<textarea id="troubleHistoryInput" name="myHygieneContent" maxlength="500" autocomplete="off" style="width: 80%; min-width: 80%; max-width: 80%; height: 6%; min-height: 6%; max-height: 6%;"><?= $naturoProgramMyHygieneContent ?></textarea>

							<h4 id="troublesHistoryTitle">DIVERS</h4>
							<textarea id="troubleHistoryInput" name="myDiversContent" maxlength="500" autocomplete="off" style="width: 80%; min-width: 80%; max-width: 80%; height: 6%; min-height: 6%; max-height: 6%;"><?= $naturoProgramMyDiversContent ?></textarea>
						
							<div id="praticienSignatureBloc">
								<div id="praticienSignature">
									<img src="<?= $_SESSION['praticienSignature'] ?>">
								</div>
							</div>
						</div>

					</div>
				</form>


			<div id="myModal" class="modal">
			  <div class="modal-content">
			    <div class="modal-header">
			      <span class="close">&times;</span>
			      <h2>Confirmation</h2>
			    </div>
			    <div class="modal-body">
			      <h3>Etes-vous sûr de sauvegarder et partager ce bilan avec le client ?</h3>
			      <p>(Une confirmation est nécessaire pour sauvegarder les données)</p>
			    </div>
			    <form method="POST" action="index.php?action=saveBilanPhvToClientFolder" class="modal-footer">
			      	<center id="deletingConfirmationButtonsParam">
			      		<input id="dataInHere" type="hidden" name="dataInHere">
			      		<input id="phvSaveButtonConfirmed" type="submit" value="Oui" name="confirmed">
			    	</center>
			    </form>
			  </div>
			</div>
			<br>
			<button id="phvSaveButton">PARTAGER AVEC LE CLIENT</button><br>
			<button id="naturoNextPageButton" onclick="generatePDF()">Télécharger en PDF</button><br>
			<a style="text-decoration: none;" id="naturoNextPageButton" href="index.php?action=showClientsList">Terminer</a>	


			<script type="text/javascript" src="view/phvForThisClient/main.js?version=1.50"></script>
		</body>
	</html>
<?php
	}
	else
	{
		header("location: index.php");
	}

?>