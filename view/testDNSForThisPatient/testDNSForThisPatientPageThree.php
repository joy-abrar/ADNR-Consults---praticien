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
			<link rel="stylesheet" type="text/css" href="view/testDNS/style.css?version=1">
			<!--<link rel="stylesheet" type="text/css" href="view/testDNSForThisPatient/styleMenubar.css">-->
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/testDNS/images/logo.png" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<title>DASHBOARD</title>
		</head>
		<body id="setFont">

		<div class="dropdown">
		  <button class="dropbtn">MENU</button>
		  <div class="dropdown-content">
		  <a href="index.php?action=dropTablesAndGoToHome">ACCUEIL</a>
		  <a href="index.php?action=myAccount">MON COMPTE</a>
		  <a href="index.php?action=settingsFromQuiz">PARAMETRES</a>
		  <a href="index.php?action=more">PLUS</a>
		  <a href="index.php?action=logoutFromQuiz">SE DECONNECTER</a>
		  </div>
		</div>

		<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>
		
			<div id="fullQuestions1Bloc">
				<br><br>
				<center>
					<h1 style="font-family: Segoe UI Light;">Questionnaire DNS</h1>
					<h2 style="font-family: Segoe UI Light;">(Dopamine-Noradrénaline-Sérotonine)</h2>
					<br><br><br><br>

					<u>Répondez à la question en cliquant sur la réponse qui correspond.</u> 
					<p style="color:red">Notez que chaque réponse est liés à des points définis, dont ce qui correspond la situation de votre consultant</p>
					<p><em>"Non, jamais" (0 point)</em></p>
					<p><em>"Cela arrive parfois mais rarement" (1 point)</em></p>
					<p><em>"Régulièrement mais cela ne dure pas" (2 points)</em></p>
					<p><em>"Fréquemment et cela me gêne" (3 points)</em></p>
					<p><em>"Oui, c'est invalidant dans ma vie quotidiennement" (4 points)</em></p>

				</center>
				<br><br><br><br>


				
				<form id="fontDesign" method="POST" action="index.php?action=testDNSSubmitThreeForThisPatient">
					<center>
						<h3>Signes évocateurs d'une insuffisance en Sérotonine</h3>
					</center>
					
					<h4>Question 1</h4>
					<h4>Je suis irritable, impulsif et vite en colère</h4>
					<h5><b>Non, jamais </b><input type="radio" name="1" value="0" required><h5>
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="1" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="1" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="1" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="1" value="4"></h5>
					<br><br><br>

					<h4>Question 2</h4>
					<h4>Je suis impatient, je ne supporte pas d'attendre</h4>
					<h5><b>Non, jamais </b><input type="radio" name="2" value="0" required></h5>
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="2" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="2" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="2" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="2" value="4"></h5>
					<br><br><br>

					<h4>Question 3</h4>
					<h4>Je ne supporte pas les contraintes</h4>
					<h5><b>Non, jamais </b><input type="radio" name="3" value="0" required></h5>
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="3" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="3" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="3" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="3" value="4"></h5>
					<br><br><br>

					<h4>Question 4</h4>
					<h4>Je suis attiré par le sucré, le chocolat en fin de journée</h4>
					<h5><b>Non, jamais </b><input type="radio" name="4" value="0" required></h5>
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="4" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="4" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="4" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="4" value="4"></h5>
					<br><br><br>

					<h4>Question 5</h4>
					<h4>Je me sens facilement dépendant : tabac, alcool,</h4>
					<h5><b>Non, jamais </b><input type="radio" name="5" value="0" required></h5>
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="5" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="5" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="5" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="5" value="4"></h5>
					<br><br><br>

					<h4>Question 6</h4>
					<h4>J'ai du mal à prendre du recul, à rester zen</h4>
					<h5><b>Non, jamais </b><input type="radio" name="6" value="0" required></h5>
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="6" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="6" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="6" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="6" value="4"></h5>
					<br><br><br>

					<h4>Question 7</h4>
					<h4>J'ai du mal à trouver le sommeil, à me rendormir la nuit</h4>
					<h5><b>Non, jamais </b><input type="radio" name="7" value="0" required></h5>			
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="7" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="7" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="7" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="7" value="4"></h5>
					<br><br><br>

					<h4>Question 8</h4>
					<h4>Je me sens vulnérable au stress, au bruit…</h4>
					<h5><b>Non, jamais </b><input type="radio" name="8" value="0" required></h5>
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="8" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="8" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="8" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="8" value="4"></h5>
					<br><br><br>

					<h4>Question 9</h4>
					<h4>Je suis susceptible, un rien m'agace</h4>
					<h5><b>Non, jamais </b><input type="radio" name="9" value="0" required></h5>
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="9" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="9" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="9" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="9" value="4"></h5>
					<br><br><br>

					<h4>Question 10</h4>
					<h4>Je change très vite d'humeur</h4>
					<h5><b>Non, jamais </b><input type="radio" name="10" value="0" required></h5>
					<h5><b>Cela arrive parfois mais rarement </b><input type="radio" name="10" value="1"></h5>
					<h5><b>Régulièrement mais cela ne dure pas </b><input type="radio" name="10" value="2"></h5>
					<h5><b>Fréquemment et cela me gêne </b><input type="radio" name="10" value="3"></h5>
					<h5><b>Oui, c'est invalidant dans ma vie quotidiennement </b><input type="radio" name="10" value="4"></h5>
					<br><br><br>



					




					<input type="submit" id="nextPageButton" value="Valider" name="Valider">
				</form>
			</div>
		</body>
		<script type="text/javascript" src="view/testDNS/main2.js"></script>
		</html>
<?php
	}

	else
	{
		header("location:index.php");
	}
?>