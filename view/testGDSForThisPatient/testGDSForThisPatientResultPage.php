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
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<link rel="stylesheet" type="text/css" href="view/testGDSForThisPatient/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/testGDSForThisPatient/images/logo.png" />
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<title>Praticien - Résultat DNS</title>
		</head>
		<body id="setFont">

		<div class="dropdown">
		  <button class="dropbtn">MENU</button>
		  <div class="dropdown-content">
		  <a href="index.php?action=dropTablesAndGoToHome">ACCUEIL</a>
		  <a href="index.php?action=myAccount">MON COMPTE</a>
		  <a href="index.php?action=settingsFromQuiz">PARAMETRES</a>
		  <a href="index.php?action=more">PLUS</a>
		  <a href="index.php?action=logoutFrom">SE DECONNECTER</a>
		  </div>
		</div>

		<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

		<!-- -------------------------------- RESULT TO PRINT ------------------------------- -->
		<div id="testGDSResultToPrint">
			<h2 id="testTitle">RESULTAT TEST GDS</h2>
			
			<div id="naturoSheetPraticienDetails">
				<h5 id="naturoSheetPraticienDetailsParam"><?= strtoupper(base64_decode($_SESSION['lastName'])) . " " . ucwords(base64_decode($_SESSION['firstName'])) ?></h5>
				<h6 id="naturoSheetPraticienDetailsParam">(Expert en Naturopathe/Réflexologue/Sphorologue)</h6>
				<h5 id="naturoSheetPraticienDetailsParam"> <?= $_SESSION['praticienRoadNumber'] ." " . ucwords($_SESSION['praticienRoadName']) ?></h5>	
				<h5 id="naturoSheetPraticienDetailsParam"><?= $_SESSION['praticienCodePostal'] ?></h5>
				<h5 id="naturoSheetPraticienDetailsParam"><?= ucwords($_SESSION['praticienCityName']) . ", " . strtoupper($_SESSION['praticienCountry']) ?></h5>
				<h5 id="naturoSheetPraticienDetailsParam">Numéro SIRET</h5>
			</div>
			
			<div>
				<h4><u>Explication :</u></h4><br>
				<p><em>Si d'autres événements ou situations stressantes se sont produits au cours des 24 derniers
				mois, notez-les en leur accordant une valeur identique à celle d'événements comparables
				(ex: grève et modification des conditions de vie, conflit avec des collègues de travail et
				problèmes avec les beaux-parents, etc.). Vous ajouterez leur valeur à celle du total de vos
				points.</em></p>
			</div>

			<div id="pointsBloc">
				
				<h4>Votre total: entre 1 et 150 stress modéré</h4>
				<p>Vous vivez un stress modéré et il y a 30 % de risques que votre santé soit altérée au cours de
				l'année. Si vous prenez soin d'intégrer dans votre vie des activités de détente et des
				exercices physiques modérés, tout devrait bien aller.</p>

				<h4>Votre total: Entre 150 et 300 points : stress élevé</h4>
				<p>Votre dose de stress est élevée et les probabilités que votre santé soit altérée au cours des
				12 mois à venir sont de 50%. Si vous ne prenez pas de mesures pour gérer ce stress, votre
				organisme en ressentira les effets tôt ou tard.</p>

				<h4>Votre total: Plus de 300 points : stress très élevé</h4>
				<p>Votre dose de stress est très élevée. Il y a 80 % de risques que votre santé soit altérée au
				cours de l'année à venir. Il est primordial que vous vous donniez des façons de vous relaxer,
				prendre soin de vous, sinon vous risquez de voir des conséquences sérieuses sur votre santé.</p>
			</div>


			<div id="myScore">
				<h3 style="color:red; font-family: segoe UI Light;">Votre Score est de <?= $_SESSION['totalScore'] ?> Points.</h3>
				 
					<?php 

						if ($_SESSION['totalScore'] >= 0 && $_SESSION['totalScore'] <= 150) 
						{
					?>
							<h4>Donc donc vivez un <span style="color:green">Stress modéré.</span></h4>
							
					<?php			
						}

						if ($_SESSION['totalScore'] >= 150 && $_SESSION['totalScore'] <= 300) 
						{
					?>
							<h4>Donc donc vivez un <span style="color: orange;">Stress élevé.</span></h4>
							
					<?php			
						}

						if ($_SESSION['totalScore'] >= 300) 
						{
					?>
							<h4>Donc donc vivez un <span style="color: red">Stress très élevé.</span></h4>
							
					<?php			
						}
					 ?>
						
				</h4>
			</div>
		</div>

		<!-- -------------------------------- END RESULT TO PRINT ------------------------------- -->

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
		    <form method="POST" action="index.php?action=saveBilanGDSToClientProfil" class="modal-footer">
		      	<center id="deletingConfirmationButtonsParam">
		      		<input id="dataInHere" type="hidden" name="dataInHere">
		      		<input id="clientDeletingConfirmButton" type="submit" value="Oui" name="confirmed">
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
			    <form method="POST" action="index.php?action=saveBilanGDSToClientProfilWithoutSharing" class="modal-footer">
			      	<center id="deletingConfirmationButtonsParam">
			      		<input id="dataInHere2" type="hidden" name="dataInHere2">
			      		<input id="clientSharingConfirmButton" type="submit" value="Oui" name="confirmed">
			    	</center>
			    </form>
			</div>
		</div>

			<br>
			<center>
				<button id="saveTestGDSButton">Enregistrer Avec Partage</button>
				<br>
				<button id="saveTestGDSButtonWithoutSharing">Enregistrer Sans Partager</button>
				<br>
				<button id="nextPageButton" onclick="generatePDF()">Télécharger</button>
				<br>
				<a id="nextPageButton" href="index.php?action=endTestGDSForThisPatientAndGoHome">Terminer</a>
			</center>


		</body>
		<script type="text/javascript" src="view/testGDSForThisPatient/main.js"></script>
		</html>
<?php
	}

	else
	{
		header("location:index.php");
	}
?>