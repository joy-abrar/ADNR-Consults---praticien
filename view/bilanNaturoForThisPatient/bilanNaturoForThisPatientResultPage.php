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
			<title>ADNR Consults - Bilan Naturo</title>
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="styleResult.css?version=1">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->

			<?php
				include_once('../../lib/topMenu1.php');
				include_once('../../lib/sideMenu1.php');
			?>

			<h2 id="testTitle">RESULTAT BILAN NATURO</h2>

			<form method="POST" action="../../index.php?action=bilanNaturoForThisPatientSaveTo">
				<div id="naturoSheetResultBloc">

					<div id="naturoSheetPraticienDetails">
						<h5 id="naturoSheetPraticienDetailsParam"><?= strtoupper(base64_decode($_SESSION['lastName'])) . " " . ucwords(base64_decode($_SESSION['firstName'])) ?></h5>
						<h6 id="naturoSheetPraticienDetailsParam">(Expert en Naturopathe/Reflexologue/Sphorologue)</h6>
						<h5 id="naturoSheetPraticienDetailsParam"> <?= $_SESSION['praticienRoadNumber'] ." " . ucwords($_SESSION['praticienRoadName']) ?></h5>	
						<h5 id="naturoSheetPraticienDetailsParam"><?= $_SESSION['praticienCodePostal'] ?></h5>
						<h5 id="naturoSheetPraticienDetailsParam"><?= ucwords($_SESSION['praticienCityName']) . ", " . strtoupper($_SESSION['praticienCountry']) ?></h5>
						<h5 id="naturoSheetPraticienDetailsParam">Numéro SIRET</h5>
					</div>

					<div id="naturoSheetDate">
						<h4>Date: </h4>&nbsp;<h5><?= "Le " . date("d/m/Y") ?></h5>
					</div>


					<h2 id="naturoSheetIdTitle"><u>CARTE D'IDENTITE</u></h2>
					<div id="naturoSheetIdentityBloc">
						
						<div id="naturoSheetIdentities">
							<h2 id="naturoSheetIdTitle"><u>Identité</u></h2>	
							<div id="naturoSheetResultsInputValue">
								<h4>Nom:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientLastName'] ?></h5>
							</div>
							
							<div id="naturoSheetResultsInputValue">
								<h4>Prenom:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientFirstName'] ?></h5>
							</div>		

							<div id="naturoSheetResultsInputValue">
								<h4>Age:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientAge'] ?></h5>
							</div>

							<div id="naturoSheetResultsInputValue">
								<h4>Profession:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientProfession'] ?></h5>
							</div>	

						</div>

						
						<div id="naturoSheetContacts">
							<h2 id="naturoSheetContactsTitle"><u>Contact</u></h2>
							<div id="naturoSheetResultsInputValue">
								<h4>Adresse:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientAddress'] ?></h5>
							</div>
							
							<div id="naturoSheetResultsInputValue">
								<h4>Téléphone:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientPhoneNumber'] ?></h5>
							</div>		

							<div id="naturoSheetResultsInputValue">
								<h4>Mail:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientEmail'] ?></h5>
							</div>				
						</div>


						<div id="naturoSheetInfos">
							<h2 id="naturoSheetInfosTitle"><u>Infos utiles</u></h2>
							<div id="naturoSheetResultsInputValue">
								<h4>Médecin Traitant:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientFamilyDoctor'] ?></h5>
							</div>
							
							<div id="naturoSheetResultsInputValue">
								<h4>Ostéo.:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientOsteoName'] ?></h5>
							</div>		

							<div id="naturoSheetResultsInputValue">
								<h4>Kiné.:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientKineName'] ?></h5>
							</div>

							<div id="naturoSheetResultsInputValue">
								<h4>Autre spécialiste:</h4>&nbsp;&nbsp;&nbsp;
								<h5><?= $_SESSION['naturoFormForThisPatientOtherSpecialists'] ?></h5>
							</div>										
						</div>

					</div>

					<h2 id="naturoSheetIdTitle"><u>MOTIF DE LA CONSULTATION</u></h2>
					<h5><?= $_SESSION['naturoFormForThisPatientConsultationMotif'] ?></h5>

					<h4 id="troublesHistoryTitle">Historique du trouble et des symptômes:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientTroubleHistory'] ?></h5>




					<h2 id="naturoSheetIdTitle"><u>LES ANTECEDENTS, TRAITEMENTS ET COMPLEMENTS</u></h2>
						
					<h4 id="naturoSheetAntecedents"><u>Antécédents médicaux: </u></h4>
					<h5><?= $_SESSION['naturoFormForThisPatientMedicalAntecedents'] ?></h5>

					<h4 id="troublesHistoryTitle">Antécédents chirurgicaux:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientSergicalAntecedents'] ?></h5>

					<h4 id="troublesHistoryTitle">Antécédents familiaux:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientFamilialAntecedents'] ?></h5>

					<h4 id="troublesHistoryTitle">Allergies:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientAllergies'] ?></h5>

					<h4 id="troublesHistoryTitle">Femmes: Grossesses (si oui, voies basses, césariennes, allaitement):</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientFemaleCases'] ?></h5>

					<h4 id="troublesHistoryTitle">Traitements en cours:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientRunningTreatment'] ?></h5>

					<h4 id="troublesHistoryTitle">Compléments en cours:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientOthersRunningTreatment'] ?></h5>

					<h4 id="troublesHistoryTitle">Poids, Taille:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientHeightAndWeight'] ?></h5>

					<h4 id="troublesHistoryTitle">Suivi médical spécifique:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientSpecialMedicalFollowings'] ?></h5>

					<h2 id="naturoSheetIdTitle"><u>LES DIFFERENTES SPHERES EMOTIONNELLES</u></h2>
						

					<h4 id="naturoSheetAntecedents"><u>Energie Vitale: </u></h4>
					<center><span id="vitalEnergyValue"><?= $_SESSION['naturoFormForThisPatientVitalEnergy'] ?>/10</span></center>
					<div style="display: flex; flex-direction: row; justify-content: space-around; width: 60%; min-width: 60%; max-width: 60%; margin: auto;">    
					    <div id="progressOuterMax" style = "width: 100%; background: #eceeef; position: relative; padding: 0px;">
					         <div id="barStatus" style="height: 15px; background-color: #2d7bb7; width: <?= $_SESSION['naturoFormForThisPatientVitalEnergy']*10 ?>%;"></div>
					    </div>
					</div>
					

					<h4 id="troublesHistoryTitle">Moral:</h4>
					<center><span id="vitalEnergyValue"><?= $_SESSION['naturoFormForThisPatientMoral'] ?>/10</span></center>
					<div style="display: flex; flex-direction: row; justify-content: space-around; width: 60%; min-width: 60%; max-width: 60%; margin: auto;">    
					    <div id="progressOuterMax" style = "width: 100%; background: #eceeef; position: relative; padding: 0px;">
					         <div id="barStatus" style="height: 15px; background-color: #2d7bb7; width: <?= $_SESSION['naturoFormForThisPatientMoral']*10 ?>%;"></div>
					    </div>
					</div>

					<h4 id="troublesHistoryTitle">Stress:</h4>
					<center><span id="vitalEnergyValue"><?= $_SESSION['naturoFormForThisPatientStress'] ?>/10</span></center>
					<div style="display: flex; flex-direction: row; justify-content: space-around; width: 60%; min-width: 60%; max-width: 60%; margin: auto;">    
					    <div id="progressOuterMax" style = "width: 100%; background: #eceeef; position: relative; padding: 0px;">
					         <div id="barStatus" style="height: 15px; background-color: #2d7bb7; width: <?= $_SESSION['naturoFormForThisPatientStress']*10 ?>%;"></div>
					    </div>
					</div>

					<h4 id="troublesHistoryTitle">Emotions:</h4>
					<center><span id="vitalEnergyValue"><?= $_SESSION['naturoFormForThisPatientEmotions'] ?>/10</span></center>
					<div style="display: flex; flex-direction: row; justify-content: space-around; width: 60%; min-width: 60%; max-width: 60%; margin: auto;">    
					    <div id="progressOuterMax" style = "width: 100%; background: #eceeef; position: relative; padding: 0px;">
					         <div id="barStatus" style="height: 15px; background-color: #2d7bb7; width: <?= $_SESSION['naturoFormForThisPatientEmotions']*10 ?>%;"></div>
					    </div>
					</div>

					<h2 id="naturoSheetIdTitle"><u>MODE DE VIE, HABITUDES ET ENVIRONNEMENT</u></h2>
					<h4 id="troublesHistoryTitle">Mode de Vie:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientLifeStyle'] ?></h5>

					<h4 id="troublesHistoryTitle">Habitudes alimentaires et hydratation:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientMealHabits'] ?></h5>

					<h4 id="troublesHistoryTitle">Tabac, drogues, alcool:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientTabacs'] ?></h5>

					<h4 id="troublesHistoryTitle">Loisirs et activités:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientActivities'] ?></h5>

					<h4 id="troublesHistoryTitle">Environnement professionnel:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientProfessionalEnvironment'] ?></h5>

					<h2 id="naturoSheetIdTitle"><u>LES DIFFERENTES SPHERES PHYSIQUES</u></h2>
						
					<h4 id="naturoSheetAntecedents"><u>Sommeil: </u></h4>
					<h5><?= $_SESSION['naturoFormForThisPatientSleep'] ?></h5>

					<h4 id="troublesHistoryTitle">Digestion/ Transit:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientDigest'] ?></h5>

					<h4 id="troublesHistoryTitle">Ostéo-articulaire:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientOsteoArticular'] ?></h5>

					<h4 id="troublesHistoryTitle">Pulmonaire:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientLungs'] ?></h5>

					<h4 id="troublesHistoryTitle">Cardiaque:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientCardiac'] ?></h5>

					<h4 id="troublesHistoryTitle">Circulatoire:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientCircular'] ?></h5>

					<h4 id="troublesHistoryTitle">ORL:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientOrl'] ?></h5>

					<h4 id="troublesHistoryTitle">Rénale:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientRenal'] ?></h5>

					<h4 id="troublesHistoryTitle">Peau et phanères:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientSkin'] ?></h5>

					<h4 id="troublesHistoryTitle">Urogénitale/ Gynéco / Sexualité:</h4>
					<h5><?= $_SESSION['naturoFormForThisPatientUroGenital'] ?></h5>
					<br>

				</div>
				<br>
				<br>
			</form>


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
			    <form method="POST" action="../../index.php?action=saveBilanNaturoToClientProfil" class="modal-footer">
			      	<center id="deletingConfirmationButtonsParam">
			      		<input id="dataInHere" type="hidden" name="dataInHere">
			      		<input id="clientDeletingConfirmButton" type="submit" value="Oui" name="confirmed">
			      		<!--<input id="clientDeletingDenyButton" type="submit" value="Non" name="denied">-->
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
				    <form method="POST" action="../../index.php?action=saveBilanNaturoToClientProfilWithoutSharing" class="modal-footer">
				      	<center id="deletingConfirmationButtonsParam">
				      		<input id="dataInHere2" type="hidden" name="dataInHere2">
				      		<input id="clientSharingConfirmButton" type="submit" value="Oui" name="confirmed">
				      		<!--<input id="clientSharingDenyButton" type="submit" value="Non" name="denied">-->
				    	</center>
				    </form>
				</div>
			</div>
			

			<button id="naturoSaveButton">Enregistrer Avec Partage</button><br>
			<button id="naturoSaveButtonWithoutSharing" >Enregistrer Sans Partager</button><br>
			<button id="naturoNextPageButton" onclick="generatePDF()">Télécharger en PDF</button><br>
			<a id="naturoNextPageButton" href="../../index.php?action=bilanNaturoForThisPatient">Modifier</a><br>
			<a id="naturoNextPageButton" href="../../index.php?action=terminateThisBilanAndGoHome">Terminer</a>			

			<script type="text/javascript" src="main.js"></script>
		</body>
		</html>
<?php
	}
	else
	{
		header("location: ../../index.php");
	}

?>