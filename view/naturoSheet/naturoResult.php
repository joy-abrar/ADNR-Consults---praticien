<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
			session_start();
			include_once('../../lib/config.php');
	}

	if ($_SESSION['sessionStatus'] == "online") 
	{
?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Praticien - Bilan Naturo</title>
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="styleResult.css?version=1">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<script src="html2pdf.bundle.js"></script>
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->
			<?php
				include_once('../../lib/topMenu1.php');
				include_once('../../lib/sideMenu1.php');
			?>

			<div id="boxSettings">
				<center><h2><u>Bilan Naturo</u></h2></center>
			
				<form method="POST" action="../../index.php?action=naturoSheetModify">
					<div id="naturoSheetResultBloc">	
						<div id="naturoSheetPraticienDetails">
							<h5 id="naturoSheetPraticienDetailsParam"><?= strtoupper(base64_decode($_SESSION['lastName'])) . " " . ucwords(base64_decode($_SESSION['firstName'])) ?></h5>
							<h6 id="naturoSheetPraticienDetailsParam">(Expert en Nauturopathe/Reflexologue/Sphorologue...)</h6>
							<h5 id="naturoSheetPraticienDetailsParam"> <?= $_SESSION['praticienRoadNumber'] ." " . ucwords($_SESSION['praticienRoadName']) ?></h5>	
							<h5 id="naturoSheetPraticienDetailsParam"><?= $_SESSION['praticienCodePostal'] ?></h5>
							<h5 id="naturoSheetPraticienDetailsParam"><?= ucwords($_SESSION['praticienCityName']) . ", " . strtoupper($_SESSION['praticienCountry']) ?></h5>
							<h5 id="naturoSheetPraticienDetailsParam">Numéro SIRET</h5>
						</div>

						<div id="naturoSheetDate">
							<h5>Date: </h5>&nbsp;<h6><?= "Le " . date("d/m/Y") ?></h6>
						</div>


						<h2 id="naturoSheetIdTitle"><u>CARTE D'IDENTITE</u></h2>
						<div id="naturoSheetIdentityBloc">
							
							<div id="naturoSheetIdentities">
								<h2 id="naturoSheetIdTitle"><u>Identité</u></h2>
								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Nom:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= strtoupper($_SESSION['naturoFormLastName']) ?></h6>
								</div>
								
								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Prenom:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= ucfirst($_SESSION['naturoFormFirstName']) ?></h6>
								</div>		

								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Age:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= ucfirst($_SESSION['naturoFormAge']) ?></h6>
								</div>

								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Profession:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= ucwords($_SESSION['naturoFormProfession']) ?></h6>
								</div>	

							</div>

							
							<div id="naturoSheetContacts">
								<h2 id="naturoSheetContactsTitle"><u>Contact</u></h2>
								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Adresse:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= ucfirst($_SESSION['naturoFormAddress']) ?></h6>
								</div>
								
								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Téléphone:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= $_SESSION['naturoFormPhoneNumber'] ?></h6>
								</div>		

								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Mail:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= strtolower($_SESSION['naturoFormEmail']) ?></h6>
								</div>				
							</div>


							<div id="naturoSheetInfos">
								<h2 id="naturoSheetInfosTitle"><u>Infos utiles</u></h2>
								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Médecin Traitant:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= ucwords($_SESSION['naturoFormFamilyDoctor']) ?></h6>
								</div>
								
								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Ostéo.:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= ucwords($_SESSION['naturoFormOsteoName']) ?></h6>
								</div>		

								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Kiné.:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= ucwords($_SESSION['naturoFormKineName']) ?></h6>
								</div>

								<div id="naturoSheetResultsInputValue">
									<h5 id="question">Autre spécialiste:</h5>&nbsp;&nbsp;&nbsp;
									<h6 id="result"><?= ucwords($_SESSION['naturoFormOtherSpecialists']) ?></h6>
								</div>										
							</div>

						</div>

						<h2 id="naturoSheetIdTitle"><u>MOTIF DE LA CONSULTATION</u></h2>
						<h6 id="result"><?= $_SESSION['naturoFormConsultationMotif'] ?></h6>

						<h5 id="question">Historique du trouble et des symptômes:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormTroubleHistory'] ?></h6>




						<h2 id="naturoSheetIdTitle"><u>LES ANTECEDENTS, TRAITEMENTS ET COMPLEMENTS</u></h2>
							
						<h5 id="question"><u>Antécédents médicaux: </u></h5>
						<h6 id="result"><?= $_SESSION['naturoFormMedicalAntecedents'] ?></h6>

						<h5 id="question">Antécédents chirurgicaux:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormSergicalAntecedents'] ?></h6>

						<h5 id="question">Antécédents familiaux:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormFamilialAntecedents'] ?></h6>

						<h5 id="question">Allergies:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormAllergies'] ?></h6>

						<h5 id="question">Femmes: Grossesses (si oui, voies basses, césariennes, allaitement):</h5>
						<h6 id="result"><?= $_SESSION['naturoFormFemaleCases'] ?></h6>

						<h5 id="question">Traitements en cours:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormRunningTreatment'] ?></h6>

						<h5 id="question">Compléments en cours:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormOthersRunningTreatment'] ?></h6>

						<h5 id="question">Poids, Taille:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormHeightAndWeight'] ?></h6>

						<h5 id="question">Suivi médical spécifique:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormSpecialMedicalFollowings'] ?></h6>

						<h2 id="naturoSheetIdTitle"><u>LES DIFFERENTES SPHERES EMOTIONNELLES</u></h2>
							
						<h5 id="question"><u>Energie Vitale: </u></h5>
						<center>
							<span id="vitalEnergyValue"><?= $_SESSION['naturoFormVitalEnergy'] ?>/10</span>
						</center>
						
						<div style="display: flex; flex-direction: row; justify-content: space-around; width: 60%; min-width: 60%; max-width: 60%; margin: auto;">    
						    <div id="progressOuterMax" style = "width: 100%; background: #eceeef; position: relative; padding: 0px;">
						         <div id="barStatus" style="height: 15px; background-color: #2d7bb7; width: <?= $_SESSION['naturoFormVitalEnergy']*10 ?>%;"></div>
						    </div>
						</div>

						<h5 id="question">Moral:</h5>
						<center>
							<span id="vitalEnergyValue"><?= $_SESSION['naturoFormMoral'] ?>/10</span>
						</center>

						<div style="display: flex; flex-direction: row; justify-content: space-around; width: 60%; min-width: 60%; max-width: 60%; margin: auto;">    
						    <div id="progressOuterMax" style = "width: 100%; background: #eceeef; position: relative; padding: 0px;">
						         <div id="barStatus" style="height: 15px; background-color: #2d7bb7; width: <?=$_SESSION['naturoFormMoral']*10 ?>%;"></div>
						    </div>
						</div>

						<h5 id="question">Stress:</h5>
						<center>
							<span id="vitalEnergyValue"><?= $_SESSION['naturoFormStress'] ?>/10</span>
						</center>
						
						<div style="display: flex; flex-direction: row; justify-content: space-around; width: 60%; min-width: 60%; max-width: 60%; margin: auto;">    
						    <div id="progressOuterMax" style = "width: 100%; background: #eceeef; position: relative; padding: 0px;">
						         <div id="barStatus" style="height: 15px; background-color: #2d7bb7; width: <?= $_SESSION['naturoFormStress']*10 ?>%;"></div>
						    </div>
						</div>

						<h5 id="question">Emotions:</h5>
						<center>
							<span id="vitalEnergyValue"><?= $_SESSION['naturoFormEmotions'] ?>/10</span>
						</center>
						
						<div style="display: flex; flex-direction: row; justify-content: space-around; width: 60%; min-width: 60%; max-width: 60%; margin: auto;">    
						    <div id="progressOuterMax" style = "width: 100%; background: #eceeef; position: relative; padding: 0px;">
						         <div id="barStatus" style="height: 15px; background-color: #2d7bb7; width: <?= $_SESSION['naturoFormEmotions']*10 ?>%;"></div>
						    </div>
						</div>

						<h2 id="naturoSheetIdTitle"><u>MODE DE VIE, HABITUDES ET ENVIRONNEMENT</u></h2>
						<h5 id="question">Mode de Vie:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormLifeStyle'] ?></h6>

						<h5 id="question">Habitudes alimentaires et hydratation:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormMealHabits'] ?></h6>

						<h5 id="question">Tabac, drogues, alcool:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormTabacs'] ?></h6>

						<h5 id="question">Loisirs et activités:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormActivities'] ?></h6>

						<h5 id="question">Environnement professionnel:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormProfessionalEnvironment'] ?></h6>

						<h2 id="naturoSheetIdTitle"><u>LES DIFFERENTES SPHERES PHYSIQUES</u></h2>
							
						<h5 id="question"><u>Sommeil: </u></h5>
						<h6 id="result"><?= $_SESSION['naturoFormSleep'] ?></h6>

						<h5 id="question">Digestion/ Transit:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormDigest'] ?></h6>

						<h5 id="question">Ostéo-articulaire:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormOsteoArticular'] ?></h6>

						<h5 id="question">Pulmonaire:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormLungs'] ?></h6>

						<h5 id="question">Cardiaque:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormCardiac'] ?></h6>

						<h5 id="question">Circulatoire:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormCircular'] ?></h6>

						<h5 id="question">ORL:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormOrl'] ?></h6>

						<h5 id="question">Rénale:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormRenal'] ?></h6>

						<h5 id="question">Peau et phanères:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormSkin'] ?></h6>

						<h5 id="question">Urogénitale/ Gynéco / Sexualité:</h5>
						<h6 id="result"><?= $_SESSION['naturoFormUroGenital'] ?></h6>
						<br>

					</div>
					<br>
					<input id="naturoNextPageButton" type="submit" name="submit" value="MODIFIER">
					<br>
				</form>
			</div>
			<br>
			<input type="submit" name="getData" id="naturoNextPageButton" onclick="generatePDF()" value="Télécharger">
			<br>
			<a style="text-decoration: none;" href="../../index.php?action=terminateThisNaturoSheetResult" id="naturoNextPageButton">Terminer</a>
			
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