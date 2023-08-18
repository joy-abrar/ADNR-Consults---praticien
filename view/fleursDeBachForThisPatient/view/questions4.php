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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="view/style.css?version=1">
		<link rel="stylesheet" type="text/css" href="view/styleMenubar.css?version=1">
		<link rel="icon" type="image/png" href="view/images/logo.png" />
		<title>DASHBOARD</title>
	</head>
	<body id="setFont">

			<?php
				include_once('lib/sideMenu1.php');
				include_once('lib/topMenu1.php');
			?>

			<!-- ------------------------------------------- USER GUIDE ----------------------------->
			<h2 id="testTitle">FLEURS DE BACH</h2>
			<div id="userGuide4">
				<div id="userGuideTitle">
					<h2><u>Consignes pour questionnaire 4</u></h2>
				</div>
				<div id="guideText">
					<center>
						<h4>affinement du choix questionnaire 2</h4>
						<h5>Quelles sont les qualités que je voudrais développer en premier ?
							<br>
							<u>6 réponses maximum</u></h5>
					</center>
				</div>
				<div id="startQcmButtonDiv">
					<button id="startQcmButton" onclick="endGuide4()">Commencer</button>
				</div>
			</div>

				<!-- -------------------------------------- END USER GUIDE ----------------------------->
			<div id="fullQuestions4Bloc">
				<br><br>
				<center><h1><u>Questionnaire 4</u></h1></center>
				
				<form id="fontDesign" method="POST" action="./index.php?action=examiner">
				<?php
					while($rows = $fetchedQuestions->fetch())
					{
				?>
						
						<b>Question <?= $rows['id']; ?></b>
						<p><?= $rows['question']; ?></p>
						<b>Réponse:</b><br>
						<b>OUI: </b> <input type="checkbox" name="<?= $rows['id']?>" value="oui">
						<br><br>
						<hr id="hrParam">
							
				<?php
					}
				?>
				
					<input type="submit" id="nextPageButton" value="RESULTAT" name="EXAMINER">
				</form>
			</div>

		<script type="text/javascript" src="view/main.js"></script>
		<script type="text/javascript" src="view/main2.js"></script>
	</body>
	</html>

<?php
	}

	else
	{
		header("location:../../index.php");
	}
?>