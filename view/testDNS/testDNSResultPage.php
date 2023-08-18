<?php
	//session_start();
	if ($_SESSION['sessionStatus'] == "online") 
	{
?>
		<!DOCTYPE html>
		<html>
		<head>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<link rel="stylesheet" type="text/css" href="view/testDNS/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/testDNS/images/logo.png" />
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
			<title>ADNR Consults - Résultat DNS</title>
		</head>
		<body id="setFont">

		<div class="dropdown">
		  <button class="dropbtn">MENU</button>
		  <div class="dropdown-content">
		  <a href="index.php?action=dropTablesAndGoToHome">ACCUEIL</a>
		  <a href="index.php?action=myAccount">MON COMPTE</a>
		  <a href="index.php?action=settingsFromQuiz">PARAMETRES</a>
		  <a href="index.php?action=more">PLUS</a>
		  <a href="index.php?action=logoutFromDns">SE DECONNECTER</a>
		  </div>
		</div>

		<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

		<!-- -------------------------------- RESULT TO PRINT ------------------------------- -->
		<div id="dnsBlockFrame">
			<div id="dnsBlocToDownload">
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
				<br><br><br>
				<div id="todayDate">
					Le <?= date("d/m/Y") ?>
				</div>
				<br><br><br>
				<div id="fullQuestions1Bloc">
					<br><br>
					<center id="resultDNSTitle">
						<h1 style="font-family: Segoe UI Light;">Résultat DNS</h1>
						<h2 style="font-family: Segoe UI Light;">(Dopamine-Noradrénaline-Sérotonine)</h2>
						<br><br><br><br>

						<u>Voici le résultat représenté de votre client.</u> 
					</center>
					<br><br><br><br>
				</div>

				<?php
					$totalSubmitOnePercentage = (100 * $_SESSION['totalSubmitOnePoints'])/40;

					$totalSubmitTwoPercentage = (100 * $_SESSION['totalSubmitTwoPoints'])/40;

					$totalSubmitThreePercentage = (100 * $_SESSION['totalSubmitThreePoints'])/40;


					$totalAllOverPoints = $_SESSION['totalSubmitOnePoints'] + $_SESSION['totalSubmitTwoPoints'] + $_SESSION['totalSubmitThreePoints'];

					$totalAllOverPercentage = (100 * $totalAllOverPoints)/120;
				?>
				<div id="progressBars">
					
					<!--<div id="progressBarOne">
						<em><b>Dopamine</b></em>
						<svg viewBox="0 0 36 36" width="360" height="360" class="circular-chart">
						  <path class="circle"
						 	stroke-dasharray="15, 100"
						    d="M18 2.0845
						      a 15.9155 15.9155 0 0 1 0 31.831
						      a 15.9155 15.9155 0 0 1 0 -31.831"
						  />
						</svg>
						<em><b>(%)</b></em>
					</div>-->

					<div id="progressBarOne">
						<em><b>Dopamine</b></em>
						<svg viewBox="0 0 36 36" width="360" height="360" class="circular-chart">
						  <path style="stroke: #4CC790; fill: #a1bfa9; fill-opacity: 0.7; stroke-width: 2.8;stroke-linecap: round; animation: progress 1s ease-out forwards;"
						 	stroke-dasharray="<?= $totalSubmitOnePercentage ?>, 100"
						    d="M18 2.0845
						      a 15.9155 15.9155 0 0 1 0 31.831
						      a 15.9155 15.9155 0 0 1 0 -31.831"
						  />
						</svg>
						
							<?php 
								if ($_SESSION['opinionOne'] == "Peu de troubles") 
								{
							?>
									<em><b style="color:green"> <?= $_SESSION['opinionOne']; ?> (<?= round($totalSubmitOnePercentage, 2) ?>%)	</b></em>					
							<?php
								}

								if ($_SESSION['opinionOne'] == "Troubles modérés") 
								{	 
							?>
									<em><b style="color:orange"> <?= $_SESSION['opinionOne']; ?> (<?= round($totalSubmitOnePercentage, 2) ?>%)	</b></em>	
							<?php
								}

								if ($_SESSION['opinionOne'] == "Troubles importantes")
								{
							?>
									<em><b style="color:red"> <?= $_SESSION['opinionOne']; ?> (<?= round($totalSubmitOnePercentage, 2) ?>%)	</b></em>
							<?php	
								}
							?>		
					</div>

					<hr><br>

					<div id="progressBarTwo">
						<em><b>Noradrénaline</b></em>
						<svg viewBox="0 0 36 36" width="360" height="360" class="circular-chart">
						  <path style="stroke: #4CC790; fill: #a1bfa9; fill-opacity: 0.7; stroke-width: 2.8;stroke-linecap: round; animation: progress 1s ease-out forwards;"
						 	stroke-dasharray="<?= $totalSubmitTwoPercentage ?>, 100"
						    d="M18 2.0845
						      a 15.9155 15.9155 0 0 1 0 31.831
						      a 15.9155 15.9155 0 0 1 0 -31.831"
						  />
						</svg>
						<?php 
						if ($_SESSION['opinionTwo'] == "Peu de troubles") 
						{
						?>
								<em><b style="color:green"> <?= $_SESSION['opinionTwo']; ?> (<?= round($totalSubmitTwoPercentage, 2) ?>%)	</b></em>					
						<?php
							}

							if ($_SESSION['opinionTwo'] == "Troubles modérés") 
							{	 
						?>
								<em><b style="color:orange"> <?= $_SESSION['opinionTwo']; ?> (<?= round($totalSubmitTwoPercentage, 2) ?>%)	</b></em>	
						<?php
							}

							if ($_SESSION['opinionTwo'] == "Troubles importantes")
							{
						?>
								<em><b style="color:red"> <?= $_SESSION['opinionTwo']; ?> (<?= round($totalSubmitTwoPercentage, 2) ?>%)	</b></em>
						<?php	
							}
						?>
					</div>

					<hr><br>

					<div id="progressBarThree">
						<em><b>Sérotonine</b></em>
						<svg viewBox="0 0 36 36" width="360" height="360" class="circular-chart">
						  <path style="stroke: #4CC790; fill: #a1bfa9; fill-opacity: 0.7; stroke-width: 2.8;stroke-linecap: round; animation: progress 1s ease-out forwards;"
						 	stroke-dasharray="<?= $totalSubmitThreePercentage ?>, 100"
						    d="M18 2.0845
						      a 15.9155 15.9155 0 0 1 0 31.831
						      a 15.9155 15.9155 0 0 1 0 -31.831"
						  />
						</svg>
						<?php 
								if ($_SESSION['opinionThree'] == "Peu de troubles") 
								{
							?>
									<em><b style="color:green"> <?= $_SESSION['opinionThree']; ?> (<?= round($totalSubmitThreePercentage, 2) ?>%)	</b></em>					
							<?php
								}

								if ($_SESSION['opinionThree'] == "Troubles modérés") 
								{	 
							?>
									<em><b style="color:orange"> <?= $_SESSION['opinionThree']; ?> (<?= round($totalSubmitThreePercentage, 2) ?>%)	</b></em>	
							<?php
								}

								if ($_SESSION['opinionThree'] == "Troubles importantes")
								{
							?>
									<em><b style="color:red"> <?= $_SESSION['opinionThree']; ?> (<?= round($totalSubmitThreePercentage, 2) ?>%)	</b></em>
							<?php	
								}
							?>
					</div>

					<hr><br>

					<div id="progressBarFour">
						<em><b>Totale</b></em>
						<svg viewBox="0 0 36 36" width="360" height="360" class="circular-chart">
						  <path style="stroke: #4CC790; fill: #a1bfa9; fill-opacity: 0.7; stroke-width: 2.8;stroke-linecap: round; animation: progress 1s ease-out forwards;"
						 	stroke-dasharray="<?= $totalAllOverPercentage ?>, 100"
						    d="M18 2.0845
						      a 15.9155 15.9155 0 0 1 0 31.831
						      a 15.9155 15.9155 0 0 1 0 -31.831"
						  />
						</svg>
						<?php 
							if ($totalAllOverPercentage <= 33) 
							{
							?>
									<em><b style="color:green"> Taux Globale de <?= round($totalAllOverPercentage, 2) ?>%	</b></em>					
							<?php
								}

								if ($totalAllOverPercentage > 33 && $totalAllOverPercentage < 66) 
								{	 
							?>
									<em><b style="color:orange"> Taux Globale de <?= round($totalAllOverPercentage, 2) ?>%	</b></em>	
							<?php
								}

								if ($totalAllOverPercentage >= 66 && $totalAllOverPercentage <= 100)
								{
							?>
									<em><b style="color:red"> Taux Globale de <?= round($totalAllOverPercentage, 2) ?>%</b></em>
							<?php	
								}
							?>
					</div>
				</div>

				<div id="praticienSignature">
					<h5>Signature Du Praticien</h5>
					<img src="<?= $_SESSION['praticienSignature'] ?>">
				</div>
			</div>
		</div>

		<!-- -------------------------------- END RESULT TO PRINT ------------------------------- -->


			<br>
			<center>
				<button id="nextPageButton" onclick="generatePDF()">Télécharger</button>
				<br>
				<a id="nextPageButton" href="index.php?action=endTestDNSAndGoHome">Terminer</a>
			</center>


		</body>
		<script type="text/javascript" src="view/testDNS/main.js"></script>
		</html>
<?php
	}

	else
	{
		header("location:index.php");
	}
?>