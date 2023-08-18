<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?version=1">

	<!--<link rel="stylesheet" type="text/css" href="testStyle.css?version=1">-->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<link rel="icon" type="image/png" href="images/logo.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="main.js"></script>
	<title>ADNR Consults</title>
</head>
<body>

	<div class="container-fluid" id="mainPage">
		<div class="row m-0 h-100">
			<div class="col-md-4 col-sm-12">
				<div id="connectionPart">
					<div class="mb-5" id="connectionLogoBloc">
						<img id="connectionLogo" src="images/logo.png" >
						<div id="formTitle">
							<hr id="borderLine">
								<span id="connectionMessage">Connectez-vous</span>
							<hr id="borderLine">
						</div>
						<div id="formTitle">
								<span id="connectionMessage">Praticien</span>
						</div>
					</div>
					<form class="me-4 text-center" id="connectionForm" method="POST" action="../../index.php?action=login">
						<h4 class="form-label mb-4 mt-4" id="textParam">Identifiant</h4>
						<input class="form-control form-control-sm test" id="inputEmailForm" type="text" name="username" autocomplete="off">
						<h4 class="form-label mb-4 mt-4" id="textParam">Mot de passe</h4>
						<div class="formControlStyle input-group input-group-sm mx-auto">
							<input class="form-control" id="inputPasswordForm" type="password" name="password">
							<i onclick="showOrHide()" id="showOrHidePassword" class="fa-regular fa-eye input-group-text"></i>
						</div>

						<div class="row h-100">
							<div class="col-12 mb-5">
								<input type="checkbox" name="checkBox"> <span id="textParam">Se souvenir de moi</span> <a class="d-flex justify-content-end styleText" id="forgetPasswordLink" href="../../index.php?action=forgetPassword">Mot de passe oublié ?</a>
							</div>
							<div class="col-12 order-3 mb-5 text-end">
								<a class="styleText" id="createAccountLink" href="../../index.php?action=createAccountLink">Créer un compte</a>
							</div>
							<br>
							<div class="col-12 order-1 h-100 mb-5 text-center text-wrap">
								<input class="btn" id="connexionButton" type="submit" name="connect" value="Connexion">
							</div>
							<div class="col-12 order-4 text-center mt-5" id="terms">
								<a class="me-4 fw-bold" id="conditionsLink" href="../termsOfConditions/cgu.php">C.G.U.</a>
								<a class="me-4 fw-bold" id="conditionsLink" href="../termsOfConditions/rgpd.php">RGPD</a>
								<a class="me-4 fw-bold" id="conditionsLink" href="../termsOfConditions/mentions.php">Mentions Légales</a>
							</div>
							<div class='col-12 order-2'>
								<a class="d-flex justify-content-center styleText" href="../../index.php?action=faceRecognition">Se connecter avec la reconnaissance faciale </a>
							</div>
						</div>
						<br><br>
					</form>
				</div>
			</div>

			<div class="col d-sm-none d-md-block img-fluid" id="sidePart">
			</div>
		</div>
	</div>

</body>
</html>