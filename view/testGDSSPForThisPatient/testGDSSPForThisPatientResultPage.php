<?php
	//session_start();
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
			<link rel="stylesheet" type="text/css" href="view/testDNSForThisPatient/style.css?version=1">
			<!--<link rel="stylesheet" type="text/css" href="view/testDNSForThisPatient/styleMenubar.css">-->
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/testDNSForThisPatient/images/logo.png" />
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
		<div id="dnsBlockFrame">
			<div id="dnsBlocToDownload" style="background-image: url(
				<?php 
					if ($backgroundType == "blob") 
					{
						echo "data:image;base64," . $backgroundImage;
					}

					else if ($backgroundType == "offer") 
					{
						echo $backgroundImage;
					}
					
					?>
					);">

				<div id="praticienDetailsForDNSReport">
					<?= ucwords(base64_decode($_SESSION['firstName'])) . " " . strtoupper(base64_decode($_SESSION['lastName'])) . "<br>";?>
					<?= $_SESSION['praticienRoadNumber'] . " " . $_SESSION['praticienRoadName'] . "<br>"; ?>
					<?php 
						if ($_SESSION['praticienComplementAddress'] !== null) 
						{
							echo $_SESSION['praticienComplementAddress'] . "<br>";
						} 
					?>	
					<?= $_SESSION['praticienCodePostal'] ."<br>"; ?>
					<?= $_SESSION['praticienCityName'] . ", " . $_SESSION['praticienCountry'] . "<br>"; ?>
					Tel: <?= $_SESSION['praticienCabinetPhoneNumber'] . "<br>" ?>
					Email: <?= strtolower(base64_decode($_SESSION['userEmail'])) . "<br>" ?>  
				</div>
				<br>
				<div id="todayDate">
					Le <?= date("d/m/Y") ?>
				</div>
		
				<div id="fullQuestions1Bloc">
					<br><br>
					<center>
						<h1 style="font-family: Segoe UI Light;">Résultat GDSSP</h1>
						<h2 style="font-family: Segoe UI Light;">(Gestion Du Stresse Symptômes Physiques)</h2>
						<br><br><br>

						<u>Voici le résultat représenté de votre client.</u> 
					</center>
					<br><br><br><br>
				</div>

				<?php
					$totalSubmitOnePercentageForThisPatient = (100 * $_SESSION['totalSubmitOnePointsForThisPatient'])/40;

					$totalSubmitTwoPercentageForThisPatient = (100 * $_SESSION['totalSubmitTwoPointsForThisPatient'])/40;

					$totalSubmitThreePercentageForThisPatient = (100 * $_SESSION['totalSubmitThreePointsForThisPatient'])/40;


					$totalAllOverPointsForThisPatient = $_SESSION['totalSubmitOnePointsForThisPatient'] + $_SESSION['totalSubmitTwoPointsForThisPatient'] + $_SESSION['totalSubmitThreePointsForThisPatient'];

					$totalAllOverPercentageForThisPatient = (100 * $totalAllOverPointsForThisPatient)/120;
				?>
				<div id="progressBars">
					<div id="progressBarOne">
						<em><b>Dopamine</b></em>
						<svg viewBox="0 0 36 36" width="360" height="360" class="circular-chart">
						  <path style="stroke: #4CC790; fill: #a1bfa9; fill-opacity: 0.7; stroke-width: 2.8;stroke-linecap: round; animation: progress 1s ease-out forwards;"
						 	stroke-dasharray="<?= $totalSubmitOnePercentageForThisPatient ?>, 100"
						    d="M18 2.0845
						      a 15.9155 15.9155 0 0 1 0 31.831
						      a 15.9155 15.9155 0 0 1 0 -31.831"
						  />
						</svg>
						<?php 
								if ($_SESSION['opinionOneForThisPatient'] == "Peu de troubles") 
								{
							?>
									<em><b style="color:green"> <?= $_SESSION['opinionOneForThisPatient']; ?> (<?= $totalSubmitOnePercentageForThisPatient ?>%)	</b></em>					
							<?php
								}

								if ($_SESSION['opinionOneForThisPatient'] == "Troubles modérés") 
								{	 
							?>
									<em><b style="color:orange"> <?= $_SESSION['opinionOneForThisPatient']; ?> (<?= $totalSubmitOnePercentageForThisPatient ?>%)	</b></em>	
							<?php
								}

								if ($_SESSION['opinionOneForThisPatient'] == "Troubles importantes")
								{
							?>
									<em><b style="color:red"> <?= $_SESSION['opinionOneForThisPatient']; ?> (<?= $totalSubmitOnePercentageForThisPatient ?>%)	</b></em>
							<?php	
								}
							?>	
					</div>

					<hr><br>

					<div id="progressBarTwo">
						<em><b>Noradrénaline</b></em>
						<svg viewBox="0 0 36 36" width="360" height="360" class="circular-chart">
						  <path style="stroke: #4CC790; fill: #a1bfa9; fill-opacity: 0.7; stroke-width: 2.8;stroke-linecap: round; animation: progress 1s ease-out forwards;"
						 	stroke-dasharray="<?= $totalSubmitTwoPercentageForThisPatient ?>, 100"
						    d="M18 2.0845
						      a 15.9155 15.9155 0 0 1 0 31.831
						      a 15.9155 15.9155 0 0 1 0 -31.831"
						  />
						</svg>
						<?php 
							if ($_SESSION['opinionTwoForThisPatient'] == "Peu de troubles") 
							{
						?>
								<em><b style="color:green"> <?= $_SESSION['opinionTwoForThisPatient']; ?> (<?= $totalSubmitTwoPercentageForThisPatient ?>%)	</b></em>					
						<?php
							}

							if ($_SESSION['opinionTwoForThisPatient'] == "Troubles modérés") 
							{	 
						?>
								<em><b style="color:orange"> <?= $_SESSION['opinionTwoForThisPatient']; ?> (<?= $totalSubmitTwoPercentageForThisPatient ?>%)	</b></em>	
						<?php
							}

							if ($_SESSION['opinionTwoForThisPatient'] == "Troubles importantes")
							{
						?>
								<em><b style="color:red"> <?= $_SESSION['opinionTwoForThisPatient']; ?> (<?= $totalSubmitTwoPercentageForThisPatient ?>%)	</b></em>
						<?php	
							}
						?>
					</div>

					<hr><br>

					<div id="progressBarThree">
						<em><b>Sérotonine</b></em>
						<svg viewBox="0 0 36 36" width="360" height="360" class="circular-chart">
						  <path style="stroke: #4CC790; fill: #a1bfa9; fill-opacity: 0.7; stroke-width: 2.8;stroke-linecap: round; animation: progress 1s ease-out forwards;"
						 	stroke-dasharray="<?= $totalSubmitThreePercentageForThisPatient ?>, 100"
						    d="M18 2.0845
						      a 15.9155 15.9155 0 0 1 0 31.831
						      a 15.9155 15.9155 0 0 1 0 -31.831"
						  />
						</svg>
						<?php 
							if ($_SESSION['opinionThreeForThisPatient'] == "Peu de troubles") 
							{
						?>
								<em><b style="color:green"> <?= $_SESSION['opinionThreeForThisPatient']; ?> (<?= $totalSubmitThreePercentageForThisPatient ?>%)	</b></em>					
						<?php
							}

							if ($_SESSION['opinionThreeForThisPatient'] == "Troubles modérés") 
							{	 
						?>
								<em><b style="color:orange"> <?= $_SESSION['opinionThreeForThisPatient']; ?> (<?= $totalSubmitThreePercentageForThisPatient ?>%)	</b></em>	
						<?php
							}

							if ($_SESSION['opinionThreeForThisPatient'] == "Troubles importantes")
							{
						?>
								<em><b style="color:red"> <?= $_SESSION['opinionThreeForThisPatient']; ?> (<?= $totalSubmitThreePercentageForThisPatient ?>%)	</b></em>
						<?php	
							}
						?>
					</div>

					<hr><br>

					<div id="progressBarFour">
						<em><b>Totale</b></em>
						<svg viewBox="0 0 36 36" width="360" height="360" class="circular-chart">
						  <path style="stroke: #4CC790; fill: #a1bfa9; fill-opacity: 0.7; stroke-width: 2.8;stroke-linecap: round; animation: progress 1s ease-out forwards;"
						 	stroke-dasharray="<?= $totalAllOverPercentageForThisPatient ?>, 100"
						    d="M18 2.0845
						      a 15.9155 15.9155 0 0 1 0 31.831
						      a 15.9155 15.9155 0 0 1 0 -31.831"
						  />
						</svg>
						<?php 
						if ($totalAllOverPercentageForThisPatient <= 33) 
						{
						?>
								<em><b style="color:green"> Taux Globale de <?= $totalAllOverPercentageForThisPatient ?>%	</b></em>					
						<?php
							}

							if ($totalAllOverPercentageForThisPatient > 33 && $totalAllOverPercentageForThisPatient < 66) 
							{	 
						?>
								<em><b style="color:orange"> Taux Globale de <?= $totalAllOverPercentageForThisPatient ?>%	</b></em>	
						<?php
							}

							if ($totalAllOverPercentageForThisPatient >= 66 && $totalAllOverPercentageForThisPatient <= 100)
							{
						?>
								<em><b style="color:red"> Taux Globale de <?= $totalAllOverPercentageForThisPatient ?>%</b></em>
						<?php	
							}
						?>
					</div>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br>
				<div id="praticienSignature">
					<h5>Signature Du Praticien</h5>
					<img src="<?= $_SESSION['praticienSignature'] ?>">
				</div>
			</div>
		</div>


		<div id="myModal" class="modal">
			  <div class="modal-content">
			    <div class="modal-header">
			      <span class="close">&times;</span>
			      <h2>Confirmation</h2>
			    </div>
			    <div class="modal-body">
			      <h3>Etes-vous sûr de sauvegarder ce bilan DNS?</h3>
			      <p>(Une confirmation est nécessaire pour sauvegarder le donnée du client)</p>
			    </div>
			    <form method="POST" action="index.php?action=savethisClientTestDNS" class="modal-footer">
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
				    <form method="POST" action="././index.php?action=savethisClientTestDNSWithoutSharing" class="modal-footer">
				      	<center id="deletingConfirmationButtonsParam">
				      		<input id="dataInHere2" type="hidden" name="dataInHere2">
				      		<input id="clientSharingConfirmButton" type="submit" value="Oui" name="confirmed">
				      		<!--<input id="clientSharingDenyButton" type="submit" value="Non" name="denied">-->
				    	</center>
				    </form>
				</div>
			</div>

		<!-- -------------------------------- END RESULT TO PRINT ------------------------------- -->


			<br>
			<center>
				<button id="saveTestDNSButton">Enregistrer</button>
				<br>
				<button id="saveTestDNSButtonWithoutSharing">Enregistrer Sans Partager</button>
				<br>
				<button id="nextPageButton" onclick="generatePDF()">Télécharger</button>
				<br>
				<a id="nextPageButton" href="index.php?action=endTestDNSAndGoHome">Terminer</a>
			</center>


		</body>
		<script type="text/javascript" src="view/testDNSForThisPatient/main2.js"></script>
		</html>
<?php
	}

	else
	{
		header("location:index.php");
	}
?>