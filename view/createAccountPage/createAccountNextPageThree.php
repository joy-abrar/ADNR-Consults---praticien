<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css?version=1">
	<title>ADNR - Create Account</title>
</head>

<body>

	<div id="mainPage">
		<div id="connectionPart">
			<div id="connectionLogoBloc">
				<img id="connectionLogo" src="images/logo.png">
				<div id="formTitle">
					<hr id="borderLine">
						<span id="connectionMessage">Créez un compte</span>
					<hr id="borderLine">
				</div>
			</div>
				<form id="connectionForm" method="POST" action="../../index.php?action=accountCreateRequest" enctype="multipart/form-data">

					<h3>Veuillez renseigner les justificatifs suivantes</h3>
					<br><br>
					<h4 id="textParam">Niveau d'étude*</h4>
					<select name="praticienEducationQualification">
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
					<br><br>
					<h4 id="textParam">Veuillez joindre votre diplôme/certificat*</h4>
					<input id="inputPraticienCountryForm" type="file" name="praticienDegreeOrCertificat" multiple required><br>
					<br><br>
					<h4 id="textParam">Joindre justificatif du cabinet*</h4>
					<input id="inputPraticienCodePostalForm" type="file" name="praticienWorkPermit" multiple required>
					<br><br>
					<h4 id="textParam">Spécialités*</h4>
					Naturopathe<input type="checkbox" name="Naturopathe" value="Naturopathe"> 
					Réflexologue<input type="checkbox" name="Réflexologue" value="Réflexologue"> 
					Sophrologue<input type="checkbox" name="Sophrologue" value="Sophrologue">
					Médecin <input type="checkbox" name="Médecin" value="Médecin">
					Chirurgien <input type="checkbox" name="Chirurgien" value="Chirurgien">
					Pharmacien<input type="checkbox" name="Pharmacien" value="Pharmacien">
					Dentiste<input type="checkbox" name="Dentiste" value="Dentiste">
					Sage-femme<input type="checkbox" name="Sage-femme" value="Sage-femme">
					Vétérinaire<input type="checkbox" name="Vétérinaire" value="Vétérinaire">
					Aide-soignant<input type="checkbox" name="AideSoignant" value="AideSoignant">
					Auxiliaire de puériculture <input type="checkbox" name="AuxiliaireDePuériculture" value="AuxiliaireDePuériculture">
					Infirmier<input type="checkbox" name="Infirmier" value="Infirmier">
					Infirmier de bloc opératoire <input type="checkbox" name="InfirmierDeBlocOpératoire" value="InfirmierDeBlocOpératoire">
					Infirmier anesthésiste <input type="checkbox" name="InfirmierAnesthésiste" value="InfirmierAnesthésiste">
					Podologue<input type="checkbox" name="Podologue" value="Podologue">
					Kinésithérapeute <input type="checkbox" name="Kinésithérapeute" value="Kinésithérapeute">
					Ergothérapeute <input type="checkbox" name="Ergothérapeute" value="Ergothérapeute">
					Orthophoniste <input type="checkbox" name="Orthophoniste" value="Orthophoniste">
					Psychomotricien <input type="checkbox" name="Psychomotricien" value="Psychomotricien">
					Diététicien <input type="checkbox" name="Diététicien" value="Diététicien">
					Orthoprothésiste <input type="checkbox" name="Orthoprothésiste" value="Orthoprothésiste">
					Orthoptiste<input type="checkbox" name="Orthoptiste" value="Orthoptiste">
					Pédicure<input type="checkbox" name="Pédicure" value="Pédicure">
					Manipulateur en électroradiologie médicale <input type="checkbox" name="ManipulateurEnElectroradiologieMédicale" value="ManipulateurEnElectroradiologieMédicale">
					Technicien de laboratoire <input type="checkbox" name="TechnicienDeLaboratoire" value="TechnicienDeLaboratoire">
					Préparateur en pharmacie <input type="checkbox" name="PréparateurEnPharmacie" value="PréparateurEnPharmacie">
					Ambulancier<input type="checkbox" name="Ambulancier" value="Ambulancier">
					Psychologue<input type="checkbox" name="Psychologue" value="Psychologue">
					Ophtalmologue<input type="checkbox" name="Ophtalmologue" value="Ophtalmologue">

					Autres<input type="checkbox" name="autres" value="autres">
					<br><br>
					<h4 id="textParam">Numéro téléphone du cabinet*</h4>
					<input id="inputPraticienCabinetPhoneNumber" type="number" name="praticienCabinetPhoneNumber" required><br>
					<br><br>
					<h4 id="textParam">Votre Signature*</h4>
					<canvas id="sig-canvas" width="320px" height="160px"></canvas>
					<br>
					<button class="btn btn-primary" id="sig-submitBtn">Valider</button>
    				<button class="btn btn-default" id="sig-clearBtn">Recommencer</button>
    				<img id="sig-image" src="" alt=""/>
					<br><br>
					<input type="hidden" id="praticienSignature" name="praticienSignature" value="">
					<p><input type="checkbox" name="acceptingTermsAndConditions" required>J'accepte les <a href="conditionsLink">conditions d'utilisation</a></p>
					<br>
					<input id="connexionButton" type="submit" name="create" value="Envoyer">
					<div id="terms">
						<a id="conditionsLink" href="termsOfConditions/cgu.php">C.G.U.</a>
						<a id="conditionsLink" href="termsOfConditions/rgpd.php">RGPD</a>
						<a id="conditionsLink" href="termsOfConditions/mentions.php">Mentions Légales</a>
					</div>
					<br><br>
				</form>
		</div>

		<div id="sidePart">
		</div>
	</div>

	<script type="text/javascript" src="main.js"></script>
</body>
</html>