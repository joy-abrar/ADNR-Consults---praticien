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
			<link rel="icon" type="image/png" href="view/images/logo.png"/>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<title>DASHBOARD</title>
		</head>
		<body id="setFont">

		<!--<div class="dropdown">
		  <button class="dropbtn">MENU</button>
		  <div class="dropdown-content">
		  <a href="./index.php?action=dropTablesAndGoToHome">ACCUEIL</a>
		  <a href="../../index.php?action=myAccount">MON COMPTE</a>
		  <a href="../../index.php?action=settingsFromQuiz">PARAMETRES</a>
		  <a href="../../index.php?action=more">PLUS</a>
		  <a href="../../index.php?action=logoutFromQuiz">SE DECONNECTER</a>
		  </div>
		</div>-->

		<?php
			include_once('lib/sideMenu1.php');
			include_once('lib/topMenu1.php');
		?>	

			<!--<div id="dashboardMenuBloc">
				<nav id="dashboardMenu">
					<a id="welcomeUserName" href="./index.php?action=dropTablesAndGoToHome"><i class="fa-solid fa-user"></i>&nbsp;<?= base64_decode($_SESSION['userName']) ?></a>
					<a id="dashboardButtons" href="./index.php?action=dropTablesAndGoToHome">ACCUEIL</a>
					<a id="dashboardButtons" href="./index.php?action=myAccount">MON COMPTE</a>
					<a id="dashboardButtons" href="./index.php?action=settings">PARAMETRES</a>
					<a id="dashboardButtons" href="./index.php?action=more">PLUS</a>
					<a id="dashboardButtons" href="./index.php?action=clearAndlogout"><i class="fa-solid fa-power-off"></i></a>
				</nav>
			</div>-->
			<!-- ------------------------------------------- USER GUIDE ----------------------------->
			<h2 id="testTitle">FLEURS DE BACH</h2>
			<div id="userGuide1">
				<div id="userGuideTitle">
					<h2><u>Consignes pour questionnaire 1</u></h2>
				</div>
				<div id="guideText">
					<center>
						<h4>Situation actuelle</h4> 
						<h5>Quelles sont les sentiments/émotions qui me préoccupent actuellement ?</h5>
					</center>
				</div>
				<div id="startQcmButtonDiv">
					<button id="startQcmButton" onclick="endGuide1()">Commencer</button>
				</div>
			</div>

				<!-- -------------------------------------- END USER GUIDE ----------------------------->
			<div id="fullQuestions1Bloc">
				<br><br>
				<center><h1 style="font-family: Segoe UI Light;">Questionnaire 1</h1></center>
				
				<form id="fontDesign" method="POST" action="./index.php?action=inputToDatabaseQuestionnaireUn">
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