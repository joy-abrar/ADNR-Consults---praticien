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
			<title>Praticien - Bilan Naturo</title>
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="style.css?version=1">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
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

			<h2 id="testTitle">BILAN NATURO</h2>
			<form method="POST" action="../../index.php?action=bilanNaturoForThisPatientResultPage">
				<div id="naturoSheetBloc">	
					<!--<div id="naturoSheetDate">
						<h4>Date: </h4>&nbsp;<input type="text" name="naturoFormDate">
					</div>-->

					<h2 id="naturoSheetIdTitle"><u>CARTE D'IDENTITE</u></h2>
					<div id="naturoSheetIdentityBloc">
						
						<div id="naturoSheetIdentities">
							<h2 id="naturoSheetIdTitle"><u>Identité</u></h2>	
							<div id="naturoSheetIdentitiesInput">
								<h4>Nom:</h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormForThisPatientLastName" autocomplete="off" value="<?= /*$_SESSION['naturoFormForThisPatientLastName']*/ strtoupper($_SESSION['bilanForClientFirstName']) ?>" readonly>
							</div>
							
							<div id="naturoSheetIdentitiesInput">
								<h4>Prenom:</h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormForThisPatientFirstName" autocomplete="off" value="<?= /*$_SESSION['naturoFormForThisPatientFirstName']*/ ucwords($_SESSION['bilanForClientLastName']) ?> " readonly>
							</div>		

							<div id="naturoSheetIdentitiesInput">
								<h4>Age:</h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormForThisPatientAge" autocomplete="off" value="<?= /*$_SESSION['naturoFormForThisPatientAge']*/ $_SESSION['bilanForClientAge'] ?>" readonly>
							</div>

							<div id="naturoSheetIdentitiesInput">
								<h4>Profession:</h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormForThisPatientProfession" autocomplete="off" value="<?= $_SESSION['naturoFormForThisPatientProfession'] ?>">
							</div>	

						</div>

						
						<div id="naturoSheetContacts">
							<h2 id="naturoSheetContactsTitle"><u>Contact</u></h2>
							<div id="naturoSheetContactsInput">
								<h4>Adresse:</h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormForThisPatientAddress" autocomplete="off" value="<?= /*$_SESSION['naturoFormForThisPatientAddress']*/ ucwords($_SESSION['bilanForClientAddress'])?>" readonly>
							</div>
							
							<div id="naturoSheetIdentitiesInput">
								<h4>Téléphone:</h4>&nbsp;&nbsp;&nbsp;<input type="number" name="naturoFormForThisPatientPhoneNumber" autocomplete="off" value="<?= /*$_SESSION['naturoFormForThisPatientPhoneNumber']*/ $_SESSION['bilanForClientPhoneNumber'] ?>" readonly>
							</div>		

							<div id="naturoSheetIdentitiesInput">
								<h4>Mail:</h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormForThisPatientEmail" autocomplete="off" value="<?= /*$_SESSION['naturoFormForThisPatientEmail']*/ strtolower($_SESSION['bilanForClientEmail']) ?>" readonly>
							</div>				
						</div>


						<div id="naturoSheetInfos">
							<h2 id="naturoSheetInfosTitle"><u>Infos utiles</u></h2>
							<div id="naturoSheetInfosInput">
								<h4>Médecin Traitant:</h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormForThisPatientFamilyDoctor" autocomplete="off" value="<?= $_SESSION['naturoFormForThisPatientFamilyDoctor'] ?>">
							</div>






							<div id="naturoSheetInfosInput">
									<h4>Autres Spécialités Médicales:</h4>&nbsp;&nbsp;&nbsp;<button type="button" id="otherMedicalSpecialistButton" onclick="addMedicalSpecialistBox()" autocomplete="off">Ajouter une case</button>
								</div>
								
								<div id="naturoSheetOtherSpecialistsInput" name="naturoSheetOtherSpecialistsInput" onchange="onChange()">
									<h4>Autres Spécialités Médicales:</h4>&nbsp;&nbsp;&nbsp;
									<select name="otherMedicalSpecialists" id="otherMedicalSpecialists">
									    <option value="">--Veuillez Choisir Une Spécialiste--</option>
									    <option value="kine">Kiné</option>
									    <option value="naturo">Naturopathe</option>
									    <option value="reflexo">Réflexologue</option>
									</select>
								</div>


								<div id="kineSpecialistsNamesBloc">
									<select name="kineSpecialistsNames" id="kineSpecialistsNames" onchange="notFound1()">
									    <option value="null">Nom Du Kiné</option>
									    <option value="noKineFound">Non listé ci-dessous</option>
									    <option value="kine1">kine1</option>
									    <option value="kine2">kine2</option>
									    <option value="kine3">kine3</option>
									</select>
									<button type="button" onclick="cancelKineSpecialistsNamesBloc()" id="kineSpecialistsNamesBlocCancelButton">X</button>

									<div id="naturoSheetKineInput">
										<h4>Nom Du Kiné : </h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormKineNameManualInput" autocomplete="off" value="<?= $_SESSION['naturoFormKineNameManualInput'] ?>">
									</div>
								</div>

								<div id="naturoSpecialistsNamesBloc">
									<select name="naturoSpecialistsNames" id="naturoSpecialistsNames" onchange="notFound2()">
									    <option value="null">Nom Du Naturo</option>
									    <option value="noNaturoFound">Non listé ci-dessous</option>
									    <option value="naturo1">naturo1</option>
									    <option value="naturo2">naturo2</option>
									    <option value="naturo3">naturo3</option>
									</select>
									<button type="button" onclick="cancelNaturoSpecialistsNamesBloc()" id="naturoSpecialistsNamesBlocCancelButton">X</button>

									<div id="naturoSheetNaturoInput">
										<h4>Nom Du Naturo : </h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormNaturoNameManualInput" autocomplete="off" value="<?= $_SESSION['naturoFormNaturoNameManualInput'] ?>">
									</div>
								</div>

								<div id="reflexoSpecialistsNamesBloc">	
									<select name="reflexoSpecialistsNames" id="reflexoSpecialistsNames" onchange="notFound3()">
									    <option value="null">Nom Du Réflexo</option>
									    <option value="noReflexoFound">Non listé ci-dessous</option>
									    <option value="naturo1">reflexo1</option>
									    <option value="naturo2">reflexo2</option>
									    <option value="naturo3">reflexo3</option>
									</select>
									<button type="button" onclick="cancelReflexoSpecialistsNamesBloc()" id="reflexoSpecialistsNamesBlocCancelButton">X</button>

									<div id="naturoSheetReflexoInput">
										<h4>Nom Du Réflexo : </h4>&nbsp;&nbsp;&nbsp;<input type="text" name="naturoFormReflexoNameManualInput" autocomplete="off" value="<?= $_SESSION['naturoFormReflexoNameManualInput'] ?>">
									</div>
								</div>									
						</div>

					</div>

					<h2 id="naturoSheetIdTitle"><u>MOTIF DE LA CONSULTATION ou COMPTE RENDU DE SEANCE PRECEDENTE</u></h2>
					<textarea id="consultationMotif" name="naturoFormForThisPatientConsultationMotif" autocomplete="off"><?= $_SESSION['naturoFormForThisPatientConsultationMotif'] ?></textarea>

					<h4 id="troublesHistoryTitle">Historique du trouble et des symptômes:</h4>
					<textarea id="troubleHistoryInput" name="naturoFormForThisPatientTroubleHistory"><?= $_SESSION['naturoFormForThisPatientTroubleHistory'] ?></textarea>

					<h2 id="naturoSheetIdTitle"><u>LES ANTECEDENTS, TRAITEMENTS ET COMPLEMENTS</u></h2>
						
					<h4 id="naturoSheetAntecedents"><u>Antécédents médicaux: </u></h4>
					<textarea id="antecedentsInput" name="naturoFormForThisPatientMedicalAntecedents"><?= $_SESSION['naturoFormForThisPatientMedicalAntecedents'] ?></textarea>

					<h4 id="troublesHistoryTitle">Antécédents chirurgicaux:</h4>
					<textarea id="antecedentsSurgicalInput" name="naturoFormForThisPatientSergicalAntecedents"><?= $_SESSION['naturoFormForThisPatientSergicalAntecedents'] ?></textarea>

					<h4 id="troublesHistoryTitle">Antécédents familiaux:</h4>
					<textarea id="antecedentsFamilyInput" name="naturoFormForThisPatientFamilialAntecedents"><?= $_SESSION['naturoFormForThisPatientFamilialAntecedents'] ?></textarea>

					<h4 id="troublesHistoryTitle">Allergies:</h4>
					<textarea id="antecedentsFamilyInput" name="naturoFormForThisPatientAllergies"><?= $_SESSION['naturoFormForThisPatientAllergies'] ?></textarea>

					<h4 id="troublesHistoryTitle">Femmes: Grossesses (si oui, voies basses, césariennes, allaitement):</h4>
					<textarea id="antecedentsFamilyInput" name="naturoFormForThisPatientFemaleCases"><?= $_SESSION['naturoFormForThisPatientFemaleCases'] ?></textarea>

					<h4 id="troublesHistoryTitle">Traitements en cours:</h4>
					<textarea id="antecedentsFamilyInput" name="naturoFormForThisPatientRunningTreatment"><?= $_SESSION['naturoFormForThisPatientRunningTreatment'] ?></textarea>

					<h4 id="troublesHistoryTitle">Compléments en cours:</h4>
					<textarea id="antecedentsFamilyInput" name="naturoFormForThisPatientOthersRunningTreatment"><?= $_SESSION['naturoFormForThisPatientOthersRunningTreatment'] ?></textarea>

					<h4 id="troublesHistoryTitle">Poids (en kg)</h4>
					<input type="number" id="patientWeight" style="margin-left: 5%; width: 20%" name="naturoFormForThisPatientHeight" value="<?= $_SESSION['naturoFormForThisPatientHeight'] ?>">

					<h4 id="troublesHistoryTitle">Taille (en cm)</h4>
					<input type="number" id="patientHeight"  style="margin-left: 5%; width: 20%" name="naturoFormForThisPatientWeight" value="<?= $_SESSION['naturoFormForThisPatientWeight'] ?>">
					<br><button type="button" id="imcButton" name="getMyIMC" style="margin-left: 5%; width: 20%">Calculer</button>

					<h4 id="troublesHistoryTitle">IMC:</h4>
					<textarea id="imcResultBox" name="naturoFormForThisPatientHeightAndWeight" style="margin-left: 5%; width: 80%" readonly><?= $_SESSION['naturoFormForThisPatientHeightAndWeight'] ?></textarea>

					<script>
						var imcButton = document.getElementById('imcButton');

						imcButton.addEventListener("click", function()
						{
							let weight = document.getElementById('patientWeight').value;
							let height = document.getElementById('patientHeight').value;
							height = height/100;
							let imc;
							if (weight !== "" || height !== "")
							{
								
								imc = weight / Math.pow(height, 2);

								imc = parseFloat(imc).toFixed(2);

								if (imc < 18.5 ) 
								{
									document.getElementById('imcResultBox').value = "Poids : " + weight + ", Taille : " + height + "m. IMC : " + imc + " (Insuffisance pondérale).";
									document.getElementById('imcResultBox').style.color = "green";
									console.log(Number(imc));	
								}

								if (imc >= 18.5 && imc <= 24.99 ) 
								{
									document.getElementById('imcResultBox').value = "Poids : " + weight + ", Taille : " + height + "m. IMC : " + imc + " (Corpulence normale).";
									document.getElementById('imcResultBox').style.color = "#c9c300";
									console.log(Number(imc));
								}

								if (imc >= 25 && imc <= 29.99 ) 
								{
									document.getElementById('imcResultBox').value = "Poids : " + weight + ", Taille : " + height + "m. IMC : " + imc + " (Surpoids).";
									document.getElementById('imcResultBox').style.color = "orange";
									console.log(Number(imc));
								}

								if (imc >= 30 && imc <= 34.99 ) 
								{
									document.getElementById('imcResultBox').value = "Poids : " + weight + ", Taille : " + height + "m. IMC : " + imc + " (Obésité modérée).";
									document.getElementById('imcResultBox').style.color = "red";
									console.log(Number(imc));
								}

								if (imc >= 35 && imc <= 40 ) 
								{
									document.getElementById('imcResultBox').value = "Poids : " + weight + ", Taille : " + height + "m. IMC : " + imc + " (Obésité sévère).";
									document.getElementById('imcResultBox').style.color = "red";
									console.log(Number(imc));
								}

								if (imc > 40 ) 
								{
									document.getElementById('imcResultBox').value = "Poids : " + weight + ", Taille : " + height + "m. IMC : " + imc + " (Obésité morbide ou massive).";
									document.getElementById('imcResultBox').style.color = "red";
									console.log(Number(imc));
								}
							}
							
						})
					</script>


					<h4 id="troublesHistoryTitle">Suivi médical spécifique:</h4>
					<textarea id="antecedentsFamilyInput" name="naturoFormForThisPatientSpecialMedicalFollowings"><?= $_SESSION['naturoFormForThisPatientSpecialMedicalFollowings'] ?></textarea>

					<h2 id="naturoSheetIdTitle"><u>LES DIFFERENTES SPHERES EMOTIONNELLES</u></h2>
						
					<h4 id="naturoSheetAntecedents"><u>Energie Vitale: </u></h4>
					<center><span id="vitalEnergyValue"><?= $_SESSION['naturoFormForThisPatientVitalEnergy'] ?></span></center>
					<input type="range" id="antecedentsInput" name="naturoFormForThisPatientVitalEnergy" min="0" max="10" value="<?= $_SESSION['naturoFormForThisPatientVitalEnergy'] ?>" step="1" oninput ="vitalEnergyValue(this.value);">

					<h4 id="troublesHistoryTitle">Moral:</h4>
					<center><span id="moralValue"><?= $_SESSION['naturoFormForThisPatientMoral'] ?></span></center>
					<input type="range" id="antecedentsInput" name="naturoFormForThisPatientMoral" min="0" max="10" value="<?= $_SESSION['naturoFormForThisPatientMoral'] ?>" step="1" oninput ="moralValue(this.value);">

					<!--<textarea id="antecedentsSurgicalInput" name="naturoFormForThisPatientMoral">//$_SESSION['naturoFormForThisPatientMoral']</textarea>-->

					<h4 id="troublesHistoryTitle">Stress:</h4>
					<center><span id="stressValue"><?= $_SESSION['naturoFormForThisPatientStress'] ?></span></center>
					<input type="range" id="antecedentsInput" name="naturoFormForThisPatientStress" min="0" max="10" value="<?= $_SESSION['naturoFormForThisPatientStress'] ?>" step="1" oninput ="stressValue(this.value);">

					<!--<textarea id="antecedentsFamilyInput" name="naturoFormForThisPatientStress"> //$_SESSION['naturoFormForThisPatientStress']</textarea>-->

					<h4 id="troublesHistoryTitle">Emotions:</h4>
					<center><span id="emotionsValue"><?= $_SESSION['naturoFormForThisPatientEmotions'] ?></span></center>
					<input type="range" id="antecedentsInput" name="naturoFormForThisPatientEmotions" min="0" max="10" value="<?= $_SESSION['naturoFormForThisPatientEmotions'] ?>" step="1" oninput ="emotionsValue(this.value);">					
					
					<!--<textarea id="antecedentsFamilyInput" name="naturoFormForThisPatientEmotions">$_SESSION['naturoFormForThisPatientEmotions']</textarea>-->


					<h2 id="naturoSheetIdTitle"><u>MODE DE VIE, HABITUDES ET ENVIRONNEMENT</u></h2>
					<h4 id="troublesHistoryTitle">Mode de Vie:</h4>
					<textarea id="lifestyleInput" name="naturoFormForThisPatientLifeStyle"><?= $_SESSION['naturoFormForThisPatientLifeStyle'] ?></textarea>

					<h4 id="troublesHistoryTitle">Habitudes alimentaires et hydratation:</h4>
					<textarea id="lifestyleInput" name="naturoFormForThisPatientMealHabits"><?= $_SESSION['naturoFormForThisPatientMealHabits'] ?></textarea>

					<h4 id="troublesHistoryTitle">Tabac, drogues, alcool:</h4>
					<textarea id="lifestyleInput" name="naturoFormForThisPatientTabacs"><?= $_SESSION['naturoFormForThisPatientTabacs'] ?></textarea>

					<h4 id="troublesHistoryTitle">Loisirs et activités:</h4>
					<textarea id="lifestyleInput" name="naturoFormForThisPatientActivities"><?= $_SESSION['naturoFormForThisPatientActivities'] ?></textarea>

					<h4 id="troublesHistoryTitle">Environnement professionnel:</h4>
					<textarea id="lifestyleInput" name="naturoFormForThisPatientProfessionalEnvironment"><?= $_SESSION['naturoFormForThisPatientProfessionalEnvironment'] ?></textarea>

					<h2 id="naturoSheetIdTitle"><u>LES DIFFERENTES SPHERES PHYSIQUES</u></h2>
						
					<h4 id="naturoSheetAntecedents"><u>Sommeil: </u></h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientSleep"><?= $_SESSION['naturoFormForThisPatientSleep'] ?></textarea>

					<h4 id="troublesHistoryTitle">Digestion/ Transit:</h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientDigest"><?= $_SESSION['naturoFormForThisPatientDigest'] ?></textarea>

					<h4 id="troublesHistoryTitle">Ostéo-articulaire:</h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientOsteoArticular"><?= $_SESSION['naturoFormForThisPatientOsteoArticular'] ?></textarea>

					<h4 id="troublesHistoryTitle">Pulmonaire:</h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientLungs"><?= $_SESSION['naturoFormForThisPatientLungs'] ?></textarea>

					<h4 id="troublesHistoryTitle">Cardiaque:</h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientCardiac"><?= $_SESSION['naturoFormForThisPatientCardiac'] ?></textarea>

					<h4 id="troublesHistoryTitle">Circulatoire:</h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientCircular"><?= $_SESSION['naturoFormForThisPatientCircular'] ?></textarea>

					<h4 id="troublesHistoryTitle">ORL:</h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientOrl"><?= $_SESSION['naturoFormForThisPatientOrl'] ?></textarea>

					<h4 id="troublesHistoryTitle">Rénale:</h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientRenal"><?= $_SESSION['naturoFormForThisPatientRenal'] ?></textarea>

					<h4 id="troublesHistoryTitle">Peau et phanères:</h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientSkin"><?= $_SESSION['naturoFormForThisPatientSkin'] ?></textarea>

					<h4 id="troublesHistoryTitle">Urogénitale/ Gynéco / Sexualité:</h4>
					<textarea id="physicalSpheresInput" name="naturoFormForThisPatientUroGenital"><?= $_SESSION['naturoFormForThisPatientUroGenital'] ?></textarea>
					<br>
					<input id="naturoNextPageButton" type="submit" name="submit" value="VALIDER">

				</div>
			</form>



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