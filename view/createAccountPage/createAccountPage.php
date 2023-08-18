<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="style.css?version=1">-->
	<link rel="stylesheet" type="text/css" href="style2.css?version=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<title>ADNR - Create Account</title>
</head>

<body>

	<div class="container-fluid" id="mainPage">
		<div class="row m-0 h-100">
			<div class="col-md-4 col-sm-12">
				<div id="connectionPart">
					<div id="connectionLogoBloc">
						<img id="connectionLogo" src="images/logo.png">
						<div id="formTitle">
							<hr id="borderLine">
								<span id="connectionMessage">Créez un compte</span>
							<hr id="borderLine">
						</div>
					</div>
					<form class="mt-5 text-center" id="connectionForm" method="POST" action="../../index.php?action=createAccountNextPageTwo">
						<div id="inputSexeForm" class="justify-content-center">
								<h4 id="textParam">Votre Sexe*</h4>
								<span id="choiceParam">Homme <input type="radio" name="sexe" value="m" required></span>
								<span id="choiceParam">Femme <input type="radio" name="sexe" value="f" required></span>
						</div>
						<h4 id="textParam">Votre Nom*</h4>
						<input class="form-control form-control-sm" id="inputFirstNameForm" type="text" name="lastname" required>
						<h4 id="textParam">Votre Prenom*</h4>
						<input class="form-control form-control-sm" id="inputLastNameForm" type="text" name="firstname" required>
						<h4 id="textParam">Votre Adresse Mail*</h4>
						<input class="inputEmailForm removeSpace form-control form-control-sm" type="email" name="mail" required>
						<h4 id="textParam">Date De Naissance*</h4>
						<input class="form-control form-control-sm" id="inputPasswordForm" type="date" name="dateOfBirth" required>
						<h4 id="textParam">Identifiant*</h4>
						<input class="inputEmailForm removeSpace form-control form-control-sm" type="text" name="username" autocomplete="off" required>
						<h4 id="textParam">Votre Mot De Passe*</h4>
						<input class="inputEmailForm removeSpace form-control form-control-sm" type="password" name="password" autocomplete="off" required>
						<h4 id="textParam">Retapez Votre Mot De Passe*</h4>
						<input class="inputEmailForm removeSpace form-control form-control-sm" type="password" name="retypedPassword" autocomplete="off" required>
						<br><br>
						<div class="form-check form-switch">
							<label for="enableFaceRec">Activer la reconnaissance faciale?</label>
							<input type="checkbox" id="enableFaceRec" class="form-check-input" name="faceRecognition" role="switch">
						</div>
						<br><br>
						<div id="faceRecognitionBloc">
							<video id="video" width="100%" height="240" autoplay></video>
							<br>
							<input type="hidden" id="capturedImage" name="capturedImage">
							<img id="takenPicture" src="" ><br>
    						<button id="takePictureButton" type="button">Prendre Photo</button>
    						<canvas style="display: none;" id="canvas" width="320" height="240"></canvas>
    					</div>
    					<br><br>
						<input id="connexionButton" type="submit" name="next" value="Suivant">
						<br><br>
						<div id="terms">
							<a id="conditionsLink" href="termsOfConditions/cgu.php">C.G.U.</a>
							<a id="conditionsLink" href="termsOfConditions/rgpd.php">RGPD</a>
							<a id="conditionsLink" href="termsOfConditions/mentions.php">Mentions Légales</a>
						</div>
					</form>
				</div>
			</div>

			<div class="col d-sm-none d-md-block img-fluid" id="sidePart">
			</div>
		</div>
		<script type="text/javascript" src="removeSpace.js"></script>
		<script type="text/javascript" src="faceRecognitionSetup.js"></script>
	</div>
</body>
</html>