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
			<link rel="stylesheet" type="text/css" href="view/style.css?version=1">
			<!--<link rel="stylesheet" type="text/css" href="view/styleMenubar.css">-->
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
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
			<div id="userGuide2">
				<div id="userGuideTitle">
					<h2><u>Consignes pour questionnaire 2</u></h2>
				</div>
				<div id="guideText">
					<center>
						<h4>Situation de fond</h4>
						<h5>Quelles sont les réactions négatives typiques qui me bloquent pour atteindre ce résultat ?</h5>
					</center>
				</div>
				<div id="startQcmButtonDiv">
					<button id="startQcmButton" onclick="endGuide2()">Commencer</button>
				</div>
			</div>

				<!-- -------------------------------------- END USER GUIDE ----------------------------->

			<div id="fullQuestions2Bloc">
				<br><br>
				<center><h1 style="font-family: Segoe UI Light;">Questionnaire 2</h1></center>
				
				<form id="fontDesign" method="POST" action="./index.php?action=inputToDatabaseQuestionnaireDeux">
				<?php
					while($rows = $fetchedQuestions->fetch())
					{
				?>
						
						<b>Question <?= $rows['id']; ?></b>
						<p><?= $rows['question']; ?></p>

						<b>Réponse:</b><br>
						<b>OUI: </b> <input type="radio" name="<?= $rows['id'] ?>" value="oui" required><br>
						<b>NON: </b> <input type="radio" name="<?= $rows['id'] ?>" value="non" required><br>
						<br><br>
						<hr id="hrParam">
							
				<?php
					}
				?>
					<input type="submit" id="nextPageButton" value="SUIVANT" name="SUIVANT">
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
