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
			<link rel="stylesheet" type="text/css" href="view/testGDS/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/testGDS/images/logo.png" />
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
					<br><br><br>
					<form id="fontDesign" method="POST" action="index.php?action=calculateGDSEResult">
						<table class="zebra"> 
							<thead> 
								<tr>
									<th>Sélection</th> 
								    <th>Evènement</th> 
								    <th>Valeur</th> 
								</tr> 
							</thead> 
							<tbody id="myTable"> 

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion1" value=100></td>
									<td>Mort d'un des parents</td>
									<td>100</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion2" value=73></td>
									<td>Divorce des parents</td>
									<td>73</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion3" value=65></td>
									<td>Séparation des parents</td>
									<td>65</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion4" value=63></td>
									<td>Voyage professionnel d'un parent</td>
									<td>63</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion5" value=63></td>
									<td>Mort d’un membre de la famille immédiate</td>
									<td>63</td>
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion6" value=53></td>
									<td>Maladie ou blessure de l'enfant</td>
									<td>53</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion7" value=50></td>
									<td>Remariage d'un parent</td>
									<td>50</td>  
								</tr>


								<tr> 
									<td><input type="checkbox" name="GDSEQuestion8" value=45></td>
									<td>Réconciliation des parents</td>
									<td>45</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion9" value=45></td>
									<td>Entrée de la mère sur le marché du travail</td>
									<td>45</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion10" value=44></td>
									<td>Changement de l'état de santé d'un membre de la famille</td>
									<td>44</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion11" value=40></td>
									<td>Grossesse de la mère</td>
									<td>40</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion12" value=39></td>
									<td>Difficultés scolaires</td>
									<td>39</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion13" value=39></td>
									<td>Naissance d'un frère ou d'une sœur</td>
									<td>39</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion14" value=39></td>
									<td>Adaptation à faire à l'école (nouvel enseignant ou nouvelle classe)</td>
									<td>39</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion15" value=38></td>
									<td>Changement de la situation financière de la famille</td>
									<td>38</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion16" value=37></td>
									<td>Maladie ou blessure d'un ami proche</td>
									<td>37</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion17" value=36></td>
									<td>Nouvelle activité ou changement d'activité parascolaire</td>
									<td>36</td>  
								</tr>
								<tr> 
									<td><input type="checkbox" name="GDSEQuestion18" value=35></td>
									<td>Changement du nombre de querelles entre frères et sœurs</td>
									<td>35</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion19" value=31></td>
									<td>Menaces de violence à l'école</td>
									<td>31</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion20" value=30></td>
									<td>Vol de biens personnels</td>
									<td>30</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion21" value=29></td>
									<td>Changement de responsabilités à la maison</td>
									<td>29</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion22" value=29></td>
									<td>Départ de la maison d'une sœur ou d'un frère plus âgé(e)</td>
									<td>29</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion22" value=29></td>
									<td>Difficultés avec les grands-parents</td>
									<td>29</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion24" value=28></td>
									<td>Réussite personnelle exceptionnelle</td>
									<td>28</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion25" value=26></td>
									<td>Déménagement dans une autre ville ou une autre partie de la ville</td>
									<td>26</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion26" value=25></td>
									<td>Arrivée ou perte d'un animal de compagnie</td>
									<td>25</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion27" value=24></td>
									<td>Changement des habitudes personnelles</td>
									<td>24</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion28" value=24></td>
									<td>Difficultés avec l'enseignant</td>
									<td>24</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion29" value=20></td>
									<td>Changement d'horaires de la nounou ou de la garderie/crèche</td>
									<td>20</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion30" value=20></td>
									<td>Déménagement dans une nouvelle maison</td>
									<td>20</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion31" value=19></td>
									<td>Changement des habitudes de jeu</td>
									<td>19</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion32" value=19></td>
									<td>Vacances en famille</td>
									<td>19</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion33" value=18></td>
									<td>Changement d'amis</td>
									<td>18</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion34" value=17></td>
									<td>Séjour dans un camp de vacances</td>
									<td>17</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion35" value=16></td>
									<td>Changement des habitudes de sommeil</td>
									<td>16</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion36" value=15></td>
									<td>Changement du nombre de réunions de famille</td>
									<td>15</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion37" value=15></td>
									<td>Changement des habitudes alimentaires</td>
									<td>15</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion38" value=13></td>
									<td>Changement du nombre d'heures passées à regarder la télévision</td>
									<td>13</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion39" value=12></td>
									<td>Réception/fête d'anniversaire</td>
									<td>12</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSEQuestion40" value=11></td>
									<td>Punition pour n'avoir pas « dit la vérité »</td>
									<td>11</td>  
								</tr>
							</tbody> 
						</table>
						<br><br>
						<input type="submit" id="nextPageButton" value="Valider" name="terminate">
					</form>
				</center>
				<br><br><br><br>
					
			</div>

		</body>
	<script type="text/javascript" src="view/testGDS/main2.js"></script>
</html>
<?php
	}

	else
	{
		header("location:index.php");
	}
?>