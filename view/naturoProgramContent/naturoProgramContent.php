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
			<link rel="icon" type="image/png" href="view/naturoProgramContent/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="view/naturoProgramContent/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
			
			<h2 id="blocTitle">AJOUTER/CONSULTER DOCUMENTS CLIENTS</h2>
			<div>
				<form method="POST" action="index.php?action=confirmThisNaturoProgramContent">
					<div id="naturoSheetBloc">

						<h2 id="naturoSheetIdTitle"><u>ALIMENTATION</u></h2>
						<textarea id="consultationMotif" name="myAlimentationContent" maxlength="1000" autocomplete="off"><?= $_SESSION['naturoProgramMyAlimentationContent'] ?></textarea>

						<h2 id="naturoSheetIdTitle"><u>COMPLEMENTATION</u></h2>
						<textarea id="consultationMotif" name="myComplementationContent" maxlength="1000" autocomplete="off"><?= $_SESSION['naturoProgramMyComplementationContent'] ?></textarea>

						<h4 id="troublesHistoryTitle">AROMATHERAPIE</h4>
						<textarea id="troubleHistoryInput" name="myAromatherapieContent" maxlength="1000" autocomplete="off"><?= $_SESSION['naturoProgramMyAromatherapieContent'] ?></textarea>

						<h4 id="troublesHistoryTitle">PHYTHOTHERAPIE</h4>
						<textarea id="troubleHistoryInput" name="myPhythotherapieContent" maxlength="1000" autocomplete="off"><?= $_SESSION['naturoProgramMyPhythotherapieContent'] ?></textarea>

						<h4 id="troublesHistoryTitle">FLEURS DE BACH (plus globalement elixirs)</h4>
						<textarea id="troubleHistoryInput" name="myFleursDeBachContent" maxlength="1000" autocomplete="off"><?= $_SESSION['naturoProgramMyFleursDeBachContent'] ?></textarea>
						
						<h4 id="troublesHistoryTitle">GESTION DU STRESS</h4>
						<textarea id="troubleHistoryInput" name="myStressContent" maxlength="1000" autocomplete="off"><?= $_SESSION['naturoProgramMyStressContent'] ?></textarea>

						<h4 id="troublesHistoryTitle">HYGIENE DE VIE</h4>
						<textarea id="troubleHistoryInput" name="myHygieneContent" maxlength="1000" autocomplete="off"><?= $_SESSION['naturoProgramMyHygieneContent'] ?></textarea>

						<h4 id="troublesHistoryTitle">DIVERS</h4>
						<textarea id="troubleHistoryInput" name="myDiversContent" maxlength="1000" autocomplete="off"><?= $_SESSION['naturoProgramMyDiversContent'] ?></textarea>

						<br>
						<input id="naturoNextPageButton" type="submit" name="submit" value="CONFIRMER">
						<br>

					</div>
				</form>

				<br><br><br>
				<h2 id="blocTitle">PERSONALISER LA PAGE DU CONTENU NATURO</h2>	
				<div id="naturoSheetBloc">
					<form method="POST" action="index.php?action=naturoContentPageDesigns">
						<h5 id="troublesHistoryTitle"><b>Couleur de l'entête de la page<b> &nbsp;&nbsp;&nbsp;&nbsp; <input type="color" name="topBorderColor" value="#FFFFFF"></h5>

						<h5 id="troublesHistoryTitle"><b>Couleur de pied de la page<b> &nbsp;&nbsp;&nbsp;&nbsp; <input type="color" name="bottomBorderColor" value="#FFFFFF"></h5>

						<br><br><br><br>
						<input id="naturoNextPageButton" type="submit" name="submit" value="Sauvegarder">
					</form>
				</div>

				<h2 id="blocTitle">IMAGES ARRIERE-PLAN</h2>
				<div id="naturoSheetBloc">		
					<form method="POST" action="index.php?action=naturoContentPageDesignsSecondBloc" enctype="multipart/form-data">
						<h3 id="troublesHistoryTitle"><b><u></u><b></h3>
					
						<h4>Choix 1 : <input type="radio" name="backgroundChoices" value="choice1" checked></h4>


								Choisir Une Image:<br><br><br>
								<span id="offeredImageSpanParam">
									
									<div id="offeredImagesBloc">
										<span>Image 1</span>
										<input type="radio" name="offeredPhoto" value="view/naturoProgramContent/images/offerImage1.png" checked>
										<br>
										<a href="view/naturoProgramContent/images/offerImage1.png" target="_blank"><img id="offeredImageParam" src="view/naturoProgramContent/images/offerImage1.png"/></a>
									</div>

									<div id="offeredImagesBloc">
										<span>Image 2</span>
										<input type="radio" name="offeredPhoto" value="view/naturoProgramContent/images/offerImage2.png">
										<br>
										<a href="view/naturoProgramContent/images/offerImage2.png" target="_blank"><img id="offeredImageParam" src="view/naturoProgramContent/images/offerImage2.png"/></a>
									</div>

									<div id="offeredImagesBloc">
										<span>Image 3</span>
										<input type="radio" name="offeredPhoto" value="view/naturoProgramContent/images/offerImage3.png">
										<br>
										<a href="view/naturoProgramContent/images/offerImage3.png" target="_blank"><img id="offeredImageParam" src="view/naturoProgramContent/images/offerImage3.png"/></a>
									</div>

									<div id="offeredImagesBloc">
										<span>Image 4</span>
										<input type="radio" name="offeredPhoto" value="view/naturoProgramContent/images/offerImage4.png">
										<br>
										<a href="view/naturoProgramContent/images/offerImage4.png" target="_blank"><img id="offeredImageParam" src="view/naturoProgramContent/images/offerImage4.png"/></a>
									</div>
								</span>
								<br><br><br>
						
						<br>
					

						<br><br><br><br><br><br>
						
						<h4>Choix 2 : <input type="radio" name="backgroundChoices" value="choice2"></h4>
							<span style="font-style: italic; margin-left: 5%;">Personnaliser Votre Image (.jpg, .jpeg, .png):<br><br><br>
								<input type="file" id="myChosenImage" name="myChosenImage" value="">
								<img id="uploadedImage" src="#" />
							</span>
							<br><br><br>
							<input id="naturoNextPageButton" type="submit" name="submit" value="Confirmer">
							<br><br>
					</form>
				</div>
			</div>


			<script type="text/javascript" src="view/naturoProgramContent/main.js"></script>
		</body>
	</html>
<?php
	}
	else
	{
		header("location: index.php");
	}

?>