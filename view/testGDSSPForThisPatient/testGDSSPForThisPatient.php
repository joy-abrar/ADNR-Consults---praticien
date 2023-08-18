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
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<link rel="stylesheet" type="text/css" href="view/testGDSSPForThisPatient/style.css?version=1">
			<!--<link rel="stylesheet" type="text/css" href="view/testDNSForThisPatient/styleMenubar.css">-->
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/testGDSSPForThisPatient/images/logo.png" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<title>ADNR Consults - Test GDSSP</title>
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
					<h1 style="font-family: Segoe UI Light;">Questionnaire GDSSP</h1>
					<h2 style="font-family: Segoe UI Light;">(Gestion Du Stress Symtômes Physiques)</h2>
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


				
				<form id="fontDesign" method="POST" action="index.php?action=testGDSSPSubmitOneForThisPatient">
					<center>
						<h3>Gestion Du Stress Test Symptômes Physiques</h3>
					</center>
					
					<h4>Question 1</h4>
					<h4>Mes muscles sont plutôt détendus*</h4>
					<h5><b>pas du tout </b><input type="radio" name="1" value="0" required><h5>
					<h5><b>un peu </b><input type="radio" name="1" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="1" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="1" value="3"></h5>
					
					<br><br><br>

					<h4>Question 2</h4>
					<h4>J’ai le visage tendu (les mâchoires serrées, le front crispé, etc.)</h4>
					<h5><b>pas du tout </b><input type="radio" name="2" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="2" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="2" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="2" value="3"></h5>
					
					<br><br><br>

					<h4>Question 3</h4>
					<h4>J’ai des tensions dans la nuque ou dans le cou</h4>
					<h5><b>pas du tout </b><input type="radio" name="3" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="3" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="3" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="3" value="3"></h5>
					<br><br><br>

					<h4>Question 4</h4>
					<h4>Je sens de la pression sur mes épaules</h4>
					<h5><b>pas du tout </b><input type="radio" name="4" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="4" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="4" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="4" value="3"></h5>
					<br><br><br>

					<h4>Question 5</h4>
					<h4>Je suis crispé(e)(j’ai les poings serrés, j’ai tendance à sursauter, etc.)</h4>
					<h5><b>pas du tout </b><input type="radio" name="5" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="5" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="5" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="5" value="3"></h5>
					<br><br><br>

					<h4>Question 6</h4>
					<h4>Je sens un point entre les omoplates</h4>
					<h5><b>pas du tout </b><input type="radio" name="6" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="6" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="6" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="6" value="3"></h5>
					<br><br><br>

					<h4>Question 7</h4>
					<h4>J’ai des maux de tête</h4>
					<h5><b>pas du tout </b><input type="radio" name="7" value="0" required></h5>			
					<h5><b>un peu </b><input type="radio" name="7" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="7" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="7" value="3"></h5>
					<br><br><br>

					<h4>Question 8</h4>
					<h4>J’ai des maux de dos</h4>
					<h5><b>pas du tout </b><input type="radio" name="8" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="8" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="8" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="8" value="3"></h5>
					<br><br><br>

					<h4>Question 9</h4>
					<h4>J‘ai des tremblements</h4>
					<h5><b>pas du tout </b><input type="radio" name="9" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="9" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="9" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="9" value="3"></h5>
					<br><br><br>

					<h4>Question 10</h4>
					<h4>J’ai continuellement besoin de bouger</h4>
					<h5><b>pas du tout </b><input type="radio" name="10" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="10" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="10" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="10" value="3"></h5>
					<br><br><br>

					<h4>Question 11</h4>
					<h4>J’ai de la difficulté à me détendre</h4>
					<h5><b>pas du tout </b><input type="radio" name="11" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="11" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="11" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="11" value="3"></h5>
					<br><br><br>

					<h4>Question 12</h4>
					<h4>Je suis en pleine santé*</h4>
					<h5><b>pas du tout </b><input type="radio" name="12" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="12" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="12" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="12" value="3"></h5>
					<br><br><br>

					<h4>Question 13</h4>
					<h4>Je me sens fatigué(e)</h4>
					<h5><b>pas du tout </b><input type="radio" name="13" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="13" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="13" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="13" value="3"></h5>
					<br><br><br>

					<h4>Question 14</h4>
					<h4>Je sens une boule dans l’estomac</h4>
					<h5><b>pas du tout </b><input type="radio" name="14" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="14" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="14" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="14" value="3"></h5>
					<br><br><br>

					<h4>Question 15</h4>
					<h4>Je sens une boule dans la gorge</h4>
					<h5><b>pas du tout </b><input type="radio" name="15" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="15" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="15" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="15" value="3"></h5>
					<br><br><br>

					<h4>Question 16</h4>
					<h4>J’ai les yeux cernés </h4>
					<h5><b>pas du tout </b><input type="radio" name="16" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="16" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="16" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="16" value="3"></h5>
					<br><br><br>

					<h4>Question 17</h4>
					<h4>Je vieillis vite </h4>
					<h5><b>pas du tout </b><input type="radio" name="17" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="17" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="17" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="17" value="3"></h5>
					<br><br><br>

					<h4>Question 18</h4>
					<h4>Je dors mal / je prends des médicaments pour dormir</h4>
					<h5><b>pas du tout </b><input type="radio" name="18" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="18" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="18" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="18" value="3"></h5>
					<br><br><br>

					<h4>Question 19</h4>
					<h4>Je mange plus (ou moins) que d’habitude</h4>
					<h5><b>pas du tout </b><input type="radio" name="19" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="19" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="19" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="19" value="3"></h5>
					<br><br><br>

					<h4>Question 20</h4>
					<h4>Je ressens des bouffées de chaleur ou des frissons</h4>
					<h5><b>pas du tout </b><input type="radio" name="20" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="20" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="20" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="20" value="3"></h5>
					<br><br><br>

					<h4>Question 21</h4>
					<h4>J’ai des palpitations</h4>
					<h5><b>pas du tout </b><input type="radio" name="21" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="21" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="21" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="21" value="3"></h5>
					<br><br><br>

					<h4>Question 22</h4>
					<h4>J’ai souvent froid aux mains ou aux pieds</h4>
					<h5><b>pas du tout </b><input type="radio" name="22" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="22" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="22" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="22" value="3"></h5>
					<br><br><br>

					<h4>Question 23</h4>
					<h4>Je transpire, j’ai les mains moites</h4>
					<h5><b>pas du tout </b><input type="radio" name="23" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="23" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="23" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="23" value="3"></h5>
					<br><br><br>

					<h4>Question 24</h4>
					<h4>J‘ai des étourdissements ou des vertiges</h4>
					<h5><b>pas du tout </b><input type="radio" name="24" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="24" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="24" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="24" value="3"></h5>
					<br><br><br>

					<h4>Question 25</h4>
					<h4>Je digère mal</h4>
					<h5><b>pas du tout </b><input type="radio" name="25" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="25" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="25" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="25" value="3"></h5>
					<br><br><br>

					<h4>Question 26</h4>
					<h4>J’ai des brûlures d’estomac</h4>
					<h5><b>pas du tout </b><input type="radio" name="26" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="26" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="26" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="26" value="3"></h5>
					<br><br><br>

					<h4>Question 27</h4>
					<h4>J’ai de la constipation ou de la diarrhée</h4>
					<h5><b>pas du tout </b><input type="radio" name="27" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="27" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="27" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="27" value="3"></h5>
					<br><br><br>

					<h4>Question 28</h4>
					<h4>J’ai des nausées</h4>
					<h5><b>pas du tout </b><input type="radio" name="28" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="28" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="28" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="28" value="3"></h5>
					<br><br><br>

					<h4>Question 29</h4>
					<h4>Mon cycle menstruel est changé</h4>
					<h5><b>pas du tout </b><input type="radio" name="29" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="29" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="29" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="29" value="3"></h5>
					<br><br><br>

					<h4>Question 30</h4>
					<h4>J’ai de l’hypertension artérielle (je fais de la “haute pression”)</h4>
					<h5><b>pas du tout </b><input type="radio" name="30" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="30" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="30" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="30" value="3"></h5>
					<br><br><br>

					<h4>Question 31</h4>
					<h4>Certains de mes symptômes physiques se sont aggravés(arthrite, hypoglycémie, cholestérol, ulcères ou autre)</h4>
					<h5><b>pas du tout </b><input type="radio" name="31" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="31" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="31" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="31" value="3"></h5>
					<br><br><br>

					<h4>Question 32</h4>
					<h4>J’ai le souffle court ou de la difficulté à respirer profondément </h4>
					<h5><b>pas du tout </b><input type="radio" name="32" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="32" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="32" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="32" value="3"></h5>
					<br><br><br>

					<h4>Question 33</h4>
					<h4>Je ressens de la joie*</h4>
					<h5><b>pas du tout </b><input type="radio" name="33" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="33" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="33" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="33" value="3"></h5>
					<br><br><br>

					<h4>Question 34</h4>
					<h4>Je m’inquiète outre mesure</h4>
					<h5><b>pas du tout </b><input type="radio" name="34" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="34" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="34" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="34" value="3"></h5>
					<br><br><br>

					<h4>Question 35</h4>
					<h4>Je panique</h4>
					<h5><b>pas du tout </b><input type="radio" name="35" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="35" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="35" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="35" value="3"></h5>
					<br><br><br>

					<h4>Question 36</h4>
					<h4>Je suis impatient(e)</h4>
					<h5><b>pas du tout </b><input type="radio" name="36" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="36" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="36" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="36" value="3"></h5>
					<br><br><br>

					<h4>Question 37</h4>
					<h4>J’ai les nerfs à fleur de peau</h4>
					<h5><b>pas du tout </b><input type="radio" name="37" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="37" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="37" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="37" value="3"></h5>
					<br><br><br>

					<h4>Question 38</h4>
					<h4>Je me sens frustré(e)</h4>
					<h5><b>pas du tout </b><input type="radio" name="38" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="38" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="38" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="38" value="3"></h5>
					<br><br><br>

					<h4>Question 39</h4>
					<h4>Je change d’humeur pour rien</h4>
					<h5><b>pas du tout </b><input type="radio" name="39" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="39" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="39" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="39" value="3"></h5>
					<br><br><br>

					<h4>Question 40</h4>
					<h4>Je fais des colères pour des riens</h4>
					<h5><b>pas du tout </b><input type="radio" name="40" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="40" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="40" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="40" value="3"></h5>
					<br><br><br>

					<h4>Question 41</h4>
					<h4>Je suis de mauvaise humeur </h4>
					<h5><b>pas du tout </b><input type="radio" name="41" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="41" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="41" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="41" value="3"></h5>
					<br><br><br>

					<h4>Question 42</h4>
					<h4>Je suis triste</h4>
					<h5><b>pas du tout </b><input type="radio" name="42" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="42" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="42" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="42" value="3"></h5>
					<br><br><br>

					<h4>Question 43</h4>
					<h4>Je suis déprimé(e)</h4>
					<h5><b>pas du tout </b><input type="radio" name="43" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="43" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="43" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="43" value="3"></h5>
					<br><br><br>

					<h4>Question 44</h4>
					<h4>Je trouve la vie agréable*</h4>
					<h5><b>pas du tout </b><input type="radio" name="44" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="44" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="44" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="44" value="3"></h5>
					<br><br><br>

					<h4>Question 45</h4>
					<h4>Je n’ai plus le sens de l’humour</h4>
					<h5><b>pas du tout </b><input type="radio" name="45" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="45" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="45" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="45" value="3"></h5>
					<br><br><br>

					<h4>Question 46</h4>
					<h4>Je me sens pressé(e) ou débordé(e)</h4>
					<h5><b>pas du tout </b><input type="radio" name="46" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="46" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="46" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="46" value="3"></h5>
					<br><br><br>

					<h4>Question 47</h4>
					<h4>Je ne tire pas plaisir des petites choses de la vie</h4>
					<h5><b>pas du tout </b><input type="radio" name="47" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="47" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="47" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="47" value="3"></h5>
					<br><br><br>

					<h4>Question 48</h4>
					<h4>Je suis préoccupé(e)</h4>
					<h5><b>pas du tout </b><input type="radio" name="48" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="48" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="48" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="48" value="3"></h5>
					<br><br><br>

					<h4>Question 49</h4>
					<h4>Je vois tout comme une montagne</h4>
					<h5><b>pas du tout </b><input type="radio" name="49" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="49" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="49" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="49" value="3"></h5>
					<br><br><br>

					<h4>Question 50</h4>
					<h4>Dès que je vois quelqu’un, je crains qu’il n’ait quelquechose à me demander</h4>
					<h5><b>pas du tout </b><input type="radio" name="50" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="50" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="50" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="50" value="3"></h5>
					<br><br><br>

					<h4>Question 51</h4>
					<h4>J’ai perdu confiance en moi</h4>
					<h5><b>pas du tout </b><input type="radio" name="51" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="51" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="51" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="51" value="3"></h5>
					<br><br><br>

					<h4>Question 52</h4>
					<h4>Je fais des drames avec des riens</h4>
					<h5><b>pas du tout </b><input type="radio" name="52" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="52" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="52" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="52" value="3"></h5>
					<br><br><br>

					<h4>Question 53</h4>
					<h4>J’ai une attitude négative, je prends tout mal</h4>
					<h5><b>pas du tout </b><input type="radio" name="53" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="53" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="53" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="53" value="3"></h5>
					<br><br><br>

					<h4>Question 54</h4>
					<h4>Je pense que je ne vaux pas grand chose ou que je ne fais jamais rien de bon</h4>
					<h5><b>pas du tout </b><input type="radio" name="54" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="54" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="54" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="54" value="3"></h5>
					<br><br><br>

					<h4>Question 55</h4>
					<h4>Je suis motivé pour mes projets*</h4>
					<h5><b>pas du tout </b><input type="radio" name="55" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="55" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="55" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="55" value="3"></h5>

					<br><br><br>

					<h4>Question 56</h4>
					<h4>Je fais passer mes tâches avant tout</h4>
					<h5><b>pas du tout </b><input type="radio" name="56" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="56" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="56" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="56" value="3"></h5>

					<br><br><br>

					<h4>Question 57</h4>
					<h4>Je ne sais pas ce que je veux.</h4>
					<h5><b>pas du tout </b><input type="radio" name="57" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="57" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="57" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="57" value="3"></h5>

					<br><br><br>

					<h4>Question 58</h4>
					<h4>Je manque d’enthousiasme</h4>
					<h5><b>pas du tout </b><input type="radio" name="58" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="58" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="58" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="58" value="3"></h5>

					<br><br><br>

					<h4>Question 59</h4>
					<h4>Je n’ai pas le goût de faire quoi que ce soit</h4>
					<h5><b>pas du tout </b><input type="radio" name="59" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="59" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="59" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="59" value="3"></h5>

					<br><br><br>

					<h4>Question 60</h4>
					<h4>J’ai perdu intérêt pour beaucoup de choses</h4>
					<h5><b>pas du tout </b><input type="radio" name="60" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="60" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="60" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="60" value="3"></h5>

					<br><br><br>

					<h4>Question 61</h4>
					<h4>J’ai de la difficulté à me mettre à la tâche, je remets au lendemain</h4>
					<h5><b>pas du tout </b><input type="radio" name="61" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="61" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="61" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="61" value="3"></h5>

					<br><br><br>

					<h4>Question 62</h4>
					<h4>J’ai perdu mon désir d’apprendre, de m’instruire</h4>
					<h5><b>pas du tout </b><input type="radio" name="62" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="62" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="62" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="62" value="3"></h5>
					<br><br><br>

					<h4>Question 63</h4>
					<h4>Je ne veux pas de projets stimulants, de défis</h4>
					<h5><b>pas du tout </b><input type="radio" name="63" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="63" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="63" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="63" value="3"></h5>
					<br><br><br>

					<h4>Question 64</h4>
					<h4>Je suis découragé</h4>
					<h5><b>pas du tout </b><input type="radio" name="64" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="64" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="64" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="64" value="3"></h5>
					<br><br><br>

					<h4>Question 65</h4>
					<h4>Je me contente de faire ce qu’on exige de moi</h4>
					<h5><b>pas du tout </b><input type="radio" name="65" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="65" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="65" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="65" value="3"></h5>
					<br><br><br>

					<h4>Question 66</h4>
					<h4>J’agis le plus souvent de façon saine et appropriée*</h4>
					<h5><b>pas du tout </b><input type="radio" name="66" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="66" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="66" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="66" value="3"></h5>

					<br><br><br>

					<h4>Question 67</h4>
					<h4>J’ai des comportements brusques, j’échappe tout, j’ai des gestes malhabiles</h4>
					<h5><b>pas du tout </b><input type="radio" name="67" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="67" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="67" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="67" value="3"></h5>

					<br><br><br>

					<h4>Question 68</h4>
					<h4>Je fais tout vite (manger, marcher, bouger, travailler, etc.)</h4>
					<h5><b>pas du tout </b><input type="radio" name="68" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="68" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="68" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="68" value="3"></h5>

					<br><br><br>

					<h4>Question 69</h4>
					<h4>Je tape du pied, des doigts, je me mords l’intérieur de la bouche, je me ronge les ongles, je ris nerveusement, etc</h4>
					<h5><b>pas du tout </b><input type="radio" name="69" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="69" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="69" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="69" value="3"></h5>

					<br><br><br>

					<h4>Question 70</h4>
					<h4>Je me préoccupe constamment de l’heure</h4>
					<h5><b>pas du tout </b><input type="radio" name="70" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="70" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="70" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="70" value="3"></h5>

					<br><br><br>

					<h4>Question 71</h4>
					<h4>Je saute des repas</h4>
					<h5><b>pas du tout </b><input type="radio" name="71" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="71" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="71" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="71" value="3"></h5>
					<br><br><br>

					<h4>Question 72</h4>
					<h4>Je fais de plus en plus d’efforts pour de moins en moins de résultat</h4>
					<h5><b>pas du tout </b><input type="radio" name="72" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="72" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="72" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="72" value="3"></h5>
					<br><br><br>

					<h4>Question 73</h4>
					<h4>Je fuis tout ce que je peux fuir</h4>
					<h5><b>pas du tout </b><input type="radio" name="73" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="73" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="73" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="73" value="3"></h5>
					<br><br><br>

					<h4>Question 74</h4>
					<h4>Je bois davantage de café ou d’alcool ou je fume davantage</h4>
					<h5><b>pas du tout </b><input type="radio" name="74" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="74" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="74" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="74" value="3"></h5>
					<br><br><br>

					<h4>Question 75</h4>
					<h4>Je prends des médicaments pour les nerfs</h4>
					<h5><b>pas du tout </b><input type="radio" name="75" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="75" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="75" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="75" value="3"></h5>
					<br><br><br>

					<h4>Question 76</h4>
					<h4>Je prends de la drogue</h4>
					<h5><b>pas du tout </b><input type="radio" name="76" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="76" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="76" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="76" value="3"></h5>
					<br><br><br>

					<h4>Question 77</h4>
					<h4>Je me sens en pleine possession de toutes mes facultés intellectuelles*</h4>
					<h5><b>pas du tout </b><input type="radio" name="77" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="77" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="77" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="77" value="3"></h5>
					<br><br><br>

					<h4>Question 78</h4>
					<h4>Je passe beaucoup de temps en divertissements faciles</h4>
					<h5><b>pas du tout </b><input type="radio" name="78" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="78" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="78" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="78" value="3"></h5>
					<br><br><br>

					<h4>Question 79</h4>
					<h4>J’ai un tourbillon d’idées dans la tête</h4>
					<h5><b>pas du tout </b><input type="radio" name="79" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="79" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="79" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="79" value="3"></h5>
	
					<br><br><br>

					<h4>Question 80</h4>
					<h4>J’ai les idées confuses</h4>
					<h5><b>pas du tout </b><input type="radio" name="80" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="80" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="80" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="80" value="3"></h5>
	
					<br><br><br>

					<h4>Question 81</h4>
					<h4>J’ai des idées fixes </h4>
					<h5><b>pas du tout </b><input type="radio" name="81" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="81" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="81" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="81" value="3"></h5>
	
					<br><br><br>

					<h4>Question 82</h4>
					<h4>Je rumine les mêmes choses, je tourne en rond, sans déboucher</h4>
					<h5><b>pas du tout </b><input type="radio" name="82" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="82" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="82" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="82" value="3"></h5>
	
					<br><br><br>

					<h4>Question 83</h4>
					<h4>J’ai de la difficulté à me concentrer</h4>
					<h5><b>pas du tout </b><input type="radio" name="83" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="83" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="83" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="83" value="3"></h5>
	
					<br><br><br>

					<h4>Question 84</h4>
					<h4>J’ai des troubles de mémoire</h4>
					<h5><b>pas du tout </b><input type="radio" name="84" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="84" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="84" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="84" value="3"></h5>
	
					<br><br><br>

					<h4>Question 85</h4>
					<h4>Je ne produis rien, intellectuellement</h4>
					<h5><b>pas du tout </b><input type="radio" name="85" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="85" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="85" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="85" value="3"></h5>
	
					<br><br><br>

					<h4>Question 86</h4>
					<h4>Je trouve que tout est trop compliqué</h4>
					<h5><b>pas du tout </b><input type="radio" name="86" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="86" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="86" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="86" value="3"></h5>
	
					<br><br><br>

					<h4>Question 87</h4>
					<h4>J’ai la tête vide</h4>
					<h5><b>pas du tout </b><input type="radio" name="87" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="87" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="87" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="87" value="3"></h5>
	
					<br><br><br>

					<h4>Question 88</h4>
					<h4>Je me sens bien avec les autres et je me sens bien seul* </h4>
					<h5><b>pas du tout </b><input type="radio" name="88" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="88" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="88" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="88" value="3"></h5>
	
					<br><br><br>

					<h4>Question 89</h4>
					<h4>J’ai peur de rencontrer de nouvelles personnes</h4>
					<h5><b>pas du tout </b><input type="radio" name="89" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="89" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="89" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="89" value="3"></h5>
	
					<br><br><br>

					<h4>Question 90</h4>
					<h4>Je suis intolérant(e)</h4>
					<h5><b>pas du tout </b><input type="radio" name="90" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="90" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="90" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="90" value="3"></h5>
	
					<br><br><br>

					<h4>Question 91</h4>
					<h4>J’ai beaucoup de ressentiment</h4>
					<h5><b>pas du tout </b><input type="radio" name="91" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="91" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="91" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="91" value="3"></h5>
	
					<br><br><br>

					<h4>Question 92</h4>
					<h4>J’éprouve constamment de l’agressivité</h4>
					<h5><b>pas du tout </b><input type="radio" name="92" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="92" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="92" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="92" value="3"></h5>
	
					<br><br><br>

					<h4>Question 93</h4>
					<h4>J’ai de la difficulté à être aimable</h4>
					<h5><b>pas du tout </b><input type="radio" name="93" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="93" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="93" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="93" value="3"></h5>
	
					<br><br><br>

					<h4>Question 94</h4>
					<h4>J’ai moins le goût d’écouter les autres</h4>
					<h5><b>pas du tout </b><input type="radio" name="94" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="94" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="94" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="94" value="3"></h5>
	
					<br><br><br>

					<h4>Question 95</h4>
					<h4>Je fuis les relations intimes</h4>
					<h5><b>pas du tout </b><input type="radio" name="95" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="95" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="95" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="95" value="3"></h5>
	
					<br><br><br>

					<h4>Question 96</h4>
					<h4>Je suis distrait(e) quand je suis en compagnie d’autres personnes</h4>
					<h5><b>pas du tout </b><input type="radio" name="96" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="96" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="96" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="96" value="3"></h5>
	
					<br><br><br>

					<h4>Question 97</h4>
					<h4>Mon désir sexuel a changé</h4>
					<h5><b>pas du tout </b><input type="radio" name="97" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="97" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="97" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="97" value="3"></h5>
	
					<br><br><br>

					<h4>Question 98</h4>
					<h4>J’ai des idées fixes</h4>
					<h5><b>pas du tout </b><input type="radio" name="98" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="98" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="98" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="98" value="3"></h5>
	
					<br><br><br>

					<h4>Question 99</h4>
					<h4>Je m’isole</h4>
					<h5><b>pas du tout </b><input type="radio" name="99" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="99" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="99" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="99" value="3"></h5>
	
					<br><br><br>

					<h4>Question 100</h4>
					<h4>Je trouve que la vie est belle*</h4>
					<h5><b>pas du tout </b><input type="radio" name="100" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="100" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="100" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="100" value="3"></h5>
	
					<br><br><br>

					<h4>Question 101</h4>
					<h4>Je me sens inutile</h4>
					<h5><b>pas du tout </b><input type="radio" name="101" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="101" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="101" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="101" value="3"></h5>
	
					<br><br><br>

					<h4>Question 102</h4>
					<h4>Je ne sais plus à quelles valeurs me raccrocher</h4>
					<h5><b>pas du tout </b><input type="radio" name="102" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="102" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="102" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="102" value="3"></h5>
	
					<br><br><br>

					<h4>Question 103</h4>
					<h4>Ma vie spirituelle a changé</h4>
					<h5><b>pas du tout </b><input type="radio" name="103" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="103" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="103" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="103" value="3"></h5>
	
					<br><br><br>

					<h4>Question 104</h4>
					<h4>J’ai l’impression que quelque chose en moi est brisé</h4>
					<h5><b>pas du tout </b><input type="radio" name="104" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="104" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="104" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="104" value="3"></h5>
	
					<br><br><br>

					<h4>Question 105</h4>
					<h4>J’ai l’impression de ne plus me reconnaître</h4>
					<h5><b>pas du tout </b><input type="radio" name="105" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="105" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="105" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="105" value="3"></h5>
	
					<br><br><br>

					<h4>Question 106</h4>
					<h4>Je suis au bout de mon rouleau</h4>
					<h5><b>pas du tout </b><input type="radio" name="106" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="106" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="106" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="106" value="3"></h5>
	
					<br><br><br>

					<h4>Question 107</h4>
					<h4>J’ai un sentiment de vide</h4>
					<h5><b>pas du tout </b><input type="radio" name="107" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="107" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="107" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="107" value="3"></h5>
	
					<br><br><br>

					<h4>Question 108</h4>
					<h4>Je pense que la vie n’a pas de sens</h4>
					<h5><b>pas du tout </b><input type="radio" name="108" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="108" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="108" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="108" value="3"></h5>
	
					<br><br><br>

					<h4>Question 109</h4>
					<h4>Je suis désespéré(e)</h4>
					<h5><b>pas du tout </b><input type="radio" name="109" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="109" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="109" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="109" value="3"></h5>
	
					<br><br><br>

					<h4>Question 110</h4>
					<h4>J’ai des idées suicidaires</h4>
					<h5><b>pas du tout </b><input type="radio" name="110" value="0" required></h5>
					<h5><b>un peu </b><input type="radio" name="110" value="1"></h5>
					<h5><b>modérément </b><input type="radio" name="110" value="2"></h5>
					<h5><b>beaucoup </b><input type="radio" name="110" value="3"></h5>

					<br><br><br>  

					<input type="submit" id="nextPageButton" value="Valider" name="Valider">
				</form>
			</div>
		</body>
		<script type="text/javascript" src="view/testGDSSPForThisPatient/main2.js"></script>
		</html>
<?php
	}

	else
	{
		header("location:index.php");
	}
?>