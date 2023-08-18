<?php
	session_start();

	if ($_SESSION['sessionStatus'] == "online") 
	{
?>
	<!DOCTYPE html>
	<html>
	<head>
		<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css?version=1">
		<title>ADMIN DASHBOARD</title>
	</head>
	<body id="setFont">

		<div class="dropdown">
		  <button class="dropbtn">MENU</button>
		  <div class="dropdown-content">
		  <a href="../../index.php?action=accueil">ACCUEIL</a>
		  <a href="../../index.php?action=myAccount">MON COMPTE</a>
		  <a href="../../index.php?action=settings">PARAMETRES</a>
		  <a href="../../index.php?action=more">PLUS</a>
		  <a href="../../index.php?action=logout">SE DECONNECTER</a>
		  </div>
		</div>


		<div id="dashboardMenuBloc">
			<nav id="dashboardMenu">
				<a id="welcomeUserName" href="../../index.php?action=accueil"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;&nbsp;<?= base64_decode($_SESSION['userName']) ?></a>
				<a id="dashboardButtons" href="../../index.php?action=accueil">ACCUEIL</a>
				<a id="dashboardButtons" href="../../index.php?action=myAccount">MON COMPTE</a>
				<a id="dashboardButtons" href="../../index.php?action=settings">PARAMETRES</a>
				<a id="dashboardButtons" href="../../index.php?action=more">PLUS</a>
				<a id="dashboardButtons" href="../../index.php?action=logout"><i class="fa-solid fa-power-off"></i></a>
			</nav>
		</div>
		<div id="dashboardMenuOptions">
			
			<!--<div id="dashboardMenuOptionsImageBloc">
				<a href="../questionnaires/index.php?action=questions1" id="dashboardMenuOption"><img id="dashboardMenuOptionsImage" src="images/01.jpg">Quiz</a>
			</div>-->

			
			<div id="dashboardMenuOptionsImageBloc">
				<a href="../questionnaires/index.php?action=showSentMailsForAdmin" id="dashboardMenuOption"><img id="dashboardMenuOptionsImage" src="images/01.jpg" >Email Envoyés</a>
			</div>

			
			<div id="dashboardMenuOptionsImageBloc">
				<a href="../questionnaires/index.php?action=createTable" id="dashboardMenuOption"><img id="dashboardMenuOptionsImage" src="images/01.jpg" >Gestion des utilisateurs</a>
				
			</div>
		
		</div>

		<script type="text/javascript" src="main.js"></script>
	</body>
	</html>

<?php
	}

	else
	{
		header("location:../../index.php");
	}


?>