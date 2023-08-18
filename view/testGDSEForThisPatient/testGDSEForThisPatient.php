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
			<link rel="stylesheet" type="text/css" href="view/testGDSE/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/testGDSE/images/logo.png" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<title>ADNR Consults - Test GDSE</title>
		</head>
		<body id="setFont">

		<div class="dropdown">
		  <button class="dropbtn">MENU</button>
		  <div class="dropdown-content">
		  <a href="index.php?action=dropTablesAndGoToHome">ACCUEIL</a>
		  <a href="index.php?action=myAccount">MON COMPTE</a>
		  <a href="index.php?action=settingsFromDns">PARAMETRES</a>
		  <a href="index.php?action=more">PLUS</a>
		  <a href="index.php?action=logoutFromDns">SE DECONNECTER</a>
		  </div>
		</div>

		<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>
		
			<div id="fullQuestions1Bloc">
				<br><br>
				<center>
					<h1 style="font-family: Segoe UI Light;">Test GDSE</h1>
					<h2 style="font-family: Segoe UI Light;">(Gestion Du Stress Enfant)</h2>
					<br><br><br><br>


					<u><b>L’échelle de Holmes et Rahé</b></u> 
					<b style="color:red">Échelle d'évaluation Sociale De Rajustement De Holmes Rahé</b>
					<p>
						<em>
							Chacun réagit différemment et les réactions varient en fonction du passé, du patrimoine
							génétique, de l’état de santé, de l'importance donnée à la situation ou à l'événement qui
							contribue à l'état de stress.
							En 1967, les chercheurs américains Holmes T. et Rabe R. ont publié une échelle permettant
							d'évaluer le stress ("Holmes-Rabe Social Readjustment Rating Scale", Journal of
							Psychosomatic Reserach, vol II).
							Ce test permet de déterminer le total de stress éprouvé en cumulant les valeurs relatives
							d'effort, connues sous le nom D'échelle d'unités de changement de la vie, pour différents
							événements.
							Un score de 250 ou plus est considéré élevé. Les personnes ayant une basse tolérance à
							l'effort peuvent se trouver surchargés avec un score de 150. Ce test est employé pour
							déterminer la sensibilité à la maladie.
							Avec un score 150 ou moins, vous avez une chance de 37% de tomber sérieusement malade.
							Entre 150 et 300 elle va à 51%. Plus de 300, il y a 80% de risque de se retrouver avec une
							maladie sérieuse dans les 2 années à venir.
						</em>
					</p>
					<br><br><br>
					<span style="color:red;">Ce test est un outil. Il ne se substitue pas à un diagnostique médical.</span>

				</center>
				<br><br><br><br>


				
				<form id="fontDesign" method="POST" action="index.php?action=startGDSETestForThisPatient">
					<input type="submit" id="nextPageButton" value="Commencer" name="commencer">
				</form>
			</div>
		</body>
		<script type="text/javascript" src="view/testGDSE/main.js"></script>
		</html>
<?php
	}

	else
	{
		header("location:index.php");
	}
?>