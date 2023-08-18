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
			<title>ADNR Consults - Test GDS</title>
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
					<h1 style="font-family: Segoe UI Light;">Test GDS</h1>
					<h2 style="font-family: Segoe UI Light;">(Gestion Du Stress)</h2>
					<br><br><br><br>


					<u><b>L’échelle de Holmes et Rahé</b></u>
					<br><br><br>
					<form id="fontDesign" method="POST" action="index.php?action=calculateGDSResultForThisPatient">
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
									<td><input type="checkbox" name="GDSQuestion1" value="100"></td>
									<td>Décès du conjoint</td>
									<td>100</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion2" value="73"></td>
									<td>Divorce</td>
									<td>73</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion3" value="60"></td>
									<td>Ménopause</td>
									<td>60</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion4" value="65"></td>
									<td>Séparation amoureuse</td>
									<td>65</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion5" value="63"></td>
									<td>Probation ou emprisonnement</td>
									<td>63</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion6" value="63"></td>
									<td>La mort d'un proche parent autre que le conjoint</td>
									<td>63</td>  
								</tr>


								<tr> 
									<td><input type="checkbox" name="GDSQuestion7" value="53"></td>
									<td>Blessures ou Maladies sérieuses</td>
									<td>53</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion8" value="50"></td>
									<td>Mariage, ou début d'une relation</td>
									<td>50</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion9" value="47"></td>
									<td>Perte d'emploi</td>
									<td>47</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion10" value="45"></td>
									<td>Réconciliation avec le conjoint</td>
									<td>45</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion11" value="45"></td>
									<td>Retraite</td>
									<td>45</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion12" value="44"></td>
									<td>Problème de santé d'un membre de la famille immédiat</td>
									<td>44</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion13" value="35"></td>
									<td>Travaillez plus de 40 heures par semaine</td>
									<td>35</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion14" value="35"></td>
									<td>Grossesse ou cause de grossesse</td>
									<td>35</td>  
								</tr>
								<tr> 
									<td><input type="checkbox" name="GDSQuestion15" value="39"></td>
									<td>Difficultés d'ordre sexuelles</td>
									<td>39</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion16" value="39"></td>
									<td>Venue d'un nouveau membre dans la famille </td>
									<td>39</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion17" value="39"></td>
									<td>Changement professionnel</td>
									<td>39</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion18" value="38"></td>
									<td>Changement de situation financière</td>
									<td>38</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion19" value="30"></td>
									<td>La mort d'un ami (pas d'un membre de famille)</td>
									<td>30</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion20" value="35"></td>
									<td>Modification du nombre de dispute avec le conjoint (dans un couple)</td>
									<td>35</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion21" value="30"></td>
									<td>Hypothèque ou prêt pour un but important</td>
									<td>30</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion22" value="30"></td>
									<td>Forclusion d'hypothèque ou de prêt</td>
									<td>30</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion23" value="25"></td>
									<td>Sommeil moins de 8 heures par nuit</td>
									<td>25</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion24" value="29"></td>
									<td>Changement de responsabilités au travail</td>
									<td>29</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion25" value="29"></td>
									<td>Problème avec la belle famille , ou avec les enfants</td>
									<td>29</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion26" value="28"></td>
									<td>Réussite personnelle exceptionnelle</td>
									<td>28</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion27" value="26"></td>
									<td>le conjoint commence ou arrête son travail</td>
									<td>26</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion28" value="26"></td>
									<td>début ou fin d'étude</td>
									<td>26</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion29" value="25"></td>
									<td>Changement des conditions de vie (visiteurs à la maison, le changement de colocataire, rénovation de la maison)</td>
									<td>25</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion30" value="24"></td>
									<td>Changement dans les habitudes personnelles (régime, exercice, tabagisme, etc...)</td>
									<td>24</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion31" value="20"></td>
									<td>Allergies chroniques</td>
									<td>20</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion32" value="23"></td>
									<td>Problème avec le patron</td>
									<td>23</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion33" value="20"></td>
									<td>Changement des conditions de travail</td>
									<td>20</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion34" value="20"></td>
									<td>Déménagement</td>
									<td>20</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion35" value="15"></td>
									<td>changement de cycle prémenstruel</td>
									<td>15</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion36" value="20"></td>
									<td>Changement d'établissement scolaire</td>
									<td>20</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion37" value="19"></td>
									<td>Changement d'activités religieuses / de loisirs</td>
									<td>19</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion38" value="17"></td>
									<td>Prêt financier mineur</td>
									<td>17</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion39" value="15"></td>
									<td>Changement de la fréquence des réunions familiales</td>
									<td>15</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion40" value="13"></td>
									<td>Vacances, voyage </td>
									<td>13</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion41" value="12"></td>
									<td>Périodes de fêtes de fin d'année</td>
									<td>12</td>  
								</tr>

								<tr> 
									<td><input type="checkbox" name="GDSQuestion42" value="11"></td>
									<td>Délits mineurs, infraction mineure à la loi </td>
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
	<script type="text/javascript" src="view/testGDS/main.js"></script>
</html>
<?php
	}

	else
	{
		header("location:index.php");
	}
?>