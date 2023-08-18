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
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="view/style.css?version=1">
			<!--<link rel="stylesheet" type="text/css" href="view/styleMenubar.css">-->
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/images/logo.png" />
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<title>Resultat</title>
		</head>
		<body id="textType">

			<div class="dropdown">
			  <button class="dropbtn">MENU</button>
			  <div class="dropdown-content">
			  <a href="./index.php?action=dropTablesAndGoToHome">ACCUEIL</a>
			  <a href="./index.php?action=myAccount">MON COMPTE</a>
			  <a href="./index.php?action=settingsFromQuiz">PARAMETRES</a>
			  <a href="./index.php?action=more">PLUS</a>
			  <a href="./index.php?action=logoutFromQuiz">SE DECONNECTER</a>
			  </div>
			</div>
			
		<div id="topMenuNav">
			<div>
				<img id="logoImage" src="view/images/logo.png" alt="logo_png">
			</div>

			<div id="usernameTopNav">
			      <ul class="navbar">
			        <li>
			          <a href="#"><?= base64_decode($_SESSION['userName']) ?></a>
			          <!--<ul>
			            <li><a href="./index.php?action=dropTablesAndGoToHome">Accueil</a></li>
			            <li><a href="#">Mon compte</a></li>
			            <li><a href="./index.php?action=settings">Paramètres</a></li>
			            <li><a href="#">Plus</a></li>
			          </ul>-->
			        </li>
			      </ul>
			</div>

			<div id="searchBox">
				<input id="searchBoxTopNav" type="search" name="searchBox" placeholder="Recherchez votre client...">
			</div>

			<div id="timeClock">
			 	<i id="clock" class="fa-solid fa-clock"></i>&nbsp;
        		<p id="time"></p>&nbsp;
        		<p id="day"></p>&nbsp;&nbsp;
        		<p id="date"></p>
    		</div>

    		<div id="agenda">
    			<!--<a id="agendaLink" href="../../index.php?action=agendaFromQuiz"><i class="fa-solid fa-calendar-days"></i></a>-->
    		</div>

    		<div id="username">	
	    		<a id="usernameLink" href=""><i class="fa-solid fa-user-tie"></i> <?= base64_decode($_SESSION['userName']) ?> </i></a>
	    	</div>

    		<div id="logout">
    			<a id="logoutLink" href="../../index.php?action=logoutFromQuiz"><i class="fa-solid fa-power-off"></i></a>
    		</div>
		</div>

		<nav class="main-menu">     
			<ul>
				<li>                                   
					<a href="./index.php?action=dropTablesAndGoToHome">
						<i class="fa fa-home fa-lg"></i>
						<span class="nav-text">Accueil</span>
					</a>
				</li>   
			   
				<li>                                 
					<a href="../../index.php?action=agendaFromQuiz">
						<i class="fa fa-solid fa-calendar"></i>
						<span class="nav-text">Agenda</span>
					</a>
				</li>

				<li>                                 
					<a href="#">
						<i class="fa fa-solid fa-toolbox"></i>
						<span class="nav-text">Outils</span>
					</a>
				</li>

				<?php
							if ($_SESSION['activationStatus'] == "trial") 
							{
							
								if ($_SESSION['timeRemaining'] > 0) 
								{

						?>
									<li class="darkerlishadow">
										<a href="../questionnaires/index.php?action=questions1">
											<i class="fa fa-solid fa-seedling"></i>
											<span class="nav-text">Fleurs De Bach</span>
										</a>
									</li>
						<?php	
								}

								else
								{
						?>
									<li class="darkerlishadow">
										<a href="#">
											<i class="fa fa-solid fa-seedling"></i>
											<span class="nav-text">Fleurs De Bach</span>
										</a>
									</li>
						
						<?php
								}
						?>
						
						<?php
								if ($_SESSION['timeRemaining'] > 0) 
								{

						?>	
									<li class="darkerli">
										<a href="../../index.php?action=naturoSheet">
											<i class="fa fa-solid fa-sheet-plastic"></i>
											<span class="nav-text">Bilan Naturo</span>
										</a>
									</li>
				    	<?php	
								}

								else
								{
						?>

									<li class="darkerli">
										<a href="#">
											<i class="fa fa-solid fa-sheet-plastic"></i>
											<span class="nav-text">Bilan Naturo</span>
										</a>
									</li>

						<?php
								}
						
							}

							else
							{
						?>
									<li class="darkerlishadow">
										<a href="../questionnaires/index.php?action=questions1">
											<i class="fa fa-solid fa-seedling"></i>
											<span class="nav-text">Fleurs De Bach</span>
										</a>
									</li>
									
									<li class="darkerli">
										<a href="../../index.php?action=naturoSheet">
											<i class="fa fa-solid fa-sheet-plastic"></i>
											<span class="nav-text">Bilan Naturo</span>
										</a>
									</li>	
						
						<?php		
							}
						?>  

				<li class="darkerli">
					<a href="../../index.php?action=testDNS">
						<i class="fa fa-solid fa-sheet-plastic"></i>
						<span class="nav-text">Test DNS</span>
					</a>
				</li>

			    
				<li>                                 
					<a href="../../index.php?action=showClientsListFromQuiz">
						<i class="fa fa-solid fa-address-card"></i>
						<span class="nav-text">Clients</span>
					</a>
				</li>   

				<li class="darkerlishadow">
					<a href="../../index.php?action=showClientsListFromQuiz">
						<i class="fa fa-solid fa-users"></i>
						<span class="nav-text">Tous</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=showMaleClientsFromQuiz">
						<i class="fa fa-thin fa-person"></i>
						<span class="nav-text">Hommes</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=showFemaleClientsFromQuiz">
						<i class="fa fa-thin fa-person-dress"></i>
						<span class="nav-text">Femmes</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=showTeenClients">
						<i class="fa fa-thin fa-children"></i>
						<span class="nav-text">Adolescents</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=showChildClientsFromQuiz">
						<i class="fa fa-thin fa-baby"></i>
				 		<span class="nav-text">Enfants</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=logoutFromQuiz">
						<i class="fa fa-thin fa-door-open"></i>
						<span class="nav-text">Quitter</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=addAClient">
						<i class="fa fa-solid fa-folder-closed"></i>
						<span class="nav-text">Ajouter un répertoire personnel</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=createAClientAccount">
						<i class="fa fa-thin fa-user-plus"></i>
						<span class="nav-text">Créer Un Compte Client</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=documents">
						<i class="fa fa-thin fa-file"></i>
						<span class="nav-text">Documents</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=documentsSharedWithMe">
						<i class="fa fa-solid fa-file-pdf"></i>
						<span class="nav-text">Documents Partagés</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=gotoMailsFromQuiz">
						<i class="fa fa-thin fa-envelope"></i>
						<span class="nav-text">Messagerie</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=files">
						<i class="fa fa-thin fa-folder"></i>
						<span class="nav-text">Répertoire</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=settingsFromQuiz">
						<i class="fa fa-thin fa-screwdriver-wrench"></i>
						<span class="nav-text">Configuration</span>
					</a>
				</li>
  
				<li class="darkerli">
					<a href="../../index.php?action=cabinetManagementFromQuiz">
						<i class="fa fa-thin fa-gears"></i>
						<span class="nav-text">Gérer le cabinet</span>
					</a>
				</li>

				<li class="darkerli">
					<a href="../../index.php?action=naturoProgramContent">
						<i class="fa fa-thin fa-gears"></i>
						<span class="nav-text">Paramètrage Du Programme</span>
					</a>
				</li>

				<li class="darkerli">                                  
					<a href="../../index.php?action=help">
						<i class="fa fa-question-circle"></i>
						<span class="nav-text">Aide</span>
					</a>
				</li>

				<li class="darkerli">                                  
					<a href="../../index.php?action=aboutUs">
						<i class="fa fa-solid fa-info"></i>
						<span class="nav-text">A Propos De Nous</span>
					</a>
				</li>

				<li>
                   	<a href="./index.php?action=logoutFromQuiz">
                        <i class="fa fa-thin fa-power-off"></i>
                        <span class="nav-text">Se déconnecter</span>    
                    </a>
				</li>
			</ul>
		</nav>

			<!-- ---------------------------------------- BEST SUGGESTIONS ------------------------>
			<br><br><br><br>
			<div id="fontDesign" method="POST" action="index.php?action=exportFile">
				<center>
					<h2><b><u>Aide à la décision</u></b></h2>
					<!--<h2>1ST BEST RESULTS ARE</h2>-->
					<?php
						while($suggestions = $fetchedSuggestions -> fetch())
						{
							$selectedGroupNumber = $suggestions['groupNumber'];
							$selectedGroupNumberPoints = $suggestions['groupePoints'];


							if ($selectedGroupNumberPoints > 0) 
							{
								// code...

					?>		
								<h3 id="name">Profil du client : Groupe <?= $suggestions['groupNumber'] ?> <br>(<?= $suggestions['groupeDesc'] ?> )</h3>
									<span>Avec <b><?= $suggestions['groupePoints'] ?></b> bonnes réponses correspond de ce groupe</span> 
									<br>
								<hr id='separationLine'>
					<?php
							}
						}
					?>
				</center>
			</div>
			<!-------------------------------------------------------------------------- ----------------------->
			<center><h1 style="font-family: segoe UI Light;">RESULTATS</h1></center>

			<form id="fontDesign" method="POST" action="index.php?action=exportFile">
				<center>
					<!--<h2>1ST BEST RESULTS ARE</h2>-->
					<?php
						while($rows1 = $fetchedFirstBestResults -> fetch())
						{


								//echo $rows1['flowerName'];
								//echo $fetchedFirstBestResults -> rowCount() ;
								//$numberOfResults = $fetchedFirstBestResults -> rowCount();

					?>
								<div id="<?= $rows1['id'] ?>">
									<h3 id="name"><?= $rows1['flowerName'] ?></h3>
										<span>Groupe : </span><?= $rows1['groupeName'] ?> 
										<br>
										<b style="color: #007a09;"><?= $rows1['oui'] ?> Points</b><br>
										CHOISIR <input id="<?= $rows1['id'] ?>" type="checkbox" name="<?= $rows1['id'] ?>" value="oui">
										<br>
										Choisir cette fleur en tant que :
									<select id="ddlProducts" name="<?=$rows1['id']?>priorityChoice">
										<option id="<?= $rows1['id'] ?>" name="<?= $rows1['id']?>choisir" value="choisir">Choisir </option>
										<option id="<?= $rows1['id'] ?>" name="<?= $rows1['id']?>choisir" value="choix1">Choix 1 </option>
										<option id="<?= $rows1['id'] ?>" name="<?= $rows1['id']?>choisir" value="choix2">Choix 2 </option>
										<option id="<?= $rows1['id'] ?>" name="<?= $rows1['id']?>choisir" value="choix3">Choix 3 </option>
										<option id="<?= $rows1['id'] ?>" name="<?= $rows1['id']?>choisir" value="choix4">Choix 4 </option>
										<option id="<?= $rows1['id'] ?>" name="<?= $rows1['id']?>choisir" value="choix5">Choix 5 </option>
										<option id="<?= $rows1['id'] ?>" name="<?= $rows1['id']?>choisir" value="choix6">Choix 6 </option>
										<!--
										<option id="<?= $rows1['id'] ?>" name="<?= $rows1['id']?>secondaire" value="secondaire">Secondaire </option>
    									<option id="<?= $rows1['id'] ?>" name="<?= $rows1['id']?>principale" value="principale"> Principale </option>
										-->
									</select>
									<hr id='separationLine'>
								</div>
								
					<?php
						}
					?>

					<!--<h2>2ND BEST RESULTS ARE</h2>-->
					<?php
						while($rows2 = $fetchedSecondBestResults -> fetch())
						{
					?>			
								<div id="<?= $rows2['id'] ?>">	
									<h3 id="name"> <?= $rows2['flowerName'] ?></h3>
										<span>Groupe : </span><?= $rows2['groupeName'] ?> 
										<br>
										<b style="color: #a3d134;"><?= $rows2['oui'] ?> Points</b><br>
									CHOISIR <input id="<?= $rows2['id'] ?>" type="checkbox" name="<?= $rows2['id'] ?>" value="oui">
									<br>
									Choisir cette fleur en tant que :
									<select id="ddlProducts" name="<?=$rows2['id']?>priorityChoice">
										<option id="<?= $rows2['id'] ?>" name="<?= $rows2['id']?>choisir" value="choisir">Choisir </option>
										<option id="<?= $rows2['id'] ?>" name="<?= $rows2['id']?>choisir" value="choix1">Choix 1 </option>
										<option id="<?= $rows2['id'] ?>" name="<?= $rows2['id']?>choisir" value="choix2">Choix 2 </option>
										<option id="<?= $rows2['id'] ?>" name="<?= $rows2['id']?>choisir" value="choix3">Choix 3 </option>
										<option id="<?= $rows2['id'] ?>" name="<?= $rows2['id']?>choisir" value="choix4">Choix 4 </option>
										<option id="<?= $rows2['id'] ?>" name="<?= $rows2['id']?>choisir" value="choix5">Choix 5 </option>
										<option id="<?= $rows2['id'] ?>" name="<?= $rows2['id']?>choisir" value="choix6">Choix 6 </option>
									</select>
									<hr id='separationLine'>
								</div>	
					<?php			
						}
					?>

					<!--<h2>3RD BEST RESULTS ARE</h2>-->
					<?php
						while($rows3 = $fetchedThirdBestResults -> fetch())
						{
					?>		
								<div id="<?= $rows3['id'] ?>">
									<h3> <?= $rows3['flowerName'] ?></h3>
										<span>Groupe : </span><?= $rows3['groupeName'] ?> 
										<br>
										<b style="color: #f3db30;"><?= $rows3['oui'] ?> Points</b><br>
									CHOISIR <input id="<?= $rows3['id'] ?>" type="checkbox" name="<?= $rows3['id'] ?>" value="oui">
									<br>
									Choisir cette fleur en tant que :
									<select id="ddlProducts" name="<?=$rows3['id']?>priorityChoice">
										<option id="<?= $rows3['id'] ?>" name="<?= $rows3['id']?>choisir" value="choisir">Choisir </option>
										<option id="<?= $rows3['id'] ?>" name="<?= $rows3['id']?>choisir" value="choix1">Choix 1 </option>
										<option id="<?= $rows3['id'] ?>" name="<?= $rows3['id']?>choisir" value="choix2">Choix 2 </option>
										<option id="<?= $rows3['id'] ?>" name="<?= $rows3['id']?>choisir" value="choix3">Choix 3 </option>
										<option id="<?= $rows3['id'] ?>" name="<?= $rows3['id']?>choisir" value="choix4">Choix 4 </option>
										<option id="<?= $rows3['id'] ?>" name="<?= $rows3['id']?>choisir" value="choix5">Choix 5 </option>
										<option id="<?= $rows3['id'] ?>" name="<?= $rows3['id']?>choisir" value="choix6">Choix 6 </option>
									</select>
									<hr id='separationLine'>	
								</div>
					<?php
						}
					?>

					<!--<h2>4TH BEST RESULTS ARE</h2>-->
					<?php
						while($rows4 = $fetchedForthBestResults -> fetch())
						{
					?>			
								<div id="<?= $rows4['id'] ?>">		
									<h3> <?= $rows4['flowerName'] ?></h3>
										<span>Groupe : </span><?= $rows4['groupeName'] ?> 
										<br>
										<b style="color: #f35430;"><?= $rows4['oui'] ?> Points</b><br>
									CHOISIR <input id="<?= $rows4['id'] ?>" type="checkbox" name="<?= $rows4['id'] ?>" value="oui">
									<br>
									Choisir cette fleur en tant que :
									<select id="ddlProducts" name="<?=$rows4['id']?>priorityChoice">
										<option id="<?= $rows4['id'] ?>" name="<?= $rows4['id']?>choisir" value="choisir">Choisir </option>
										<option id="<?= $rows4['id'] ?>" name="<?= $rows4['id']?>choisir" value="choix1">Choix 1 </option>
										<option id="<?= $rows4['id'] ?>" name="<?= $rows4['id']?>choisir" value="choix2">Choix 2 </option>
										<option id="<?= $rows4['id'] ?>" name="<?= $rows4['id']?>choisir" value="choix3">Choix 3 </option>
										<option id="<?= $rows4['id'] ?>" name="<?= $rows4['id']?>choisir" value="choix4">Choix 4 </option>
										<option id="<?= $rows4['id'] ?>" name="<?= $rows4['id']?>choisir" value="choix5">Choix 5 </option>
										<option id="<?= $rows4['id'] ?>" name="<?= $rows4['id']?>choisir" value="choix6">Choix 6 </option>
									</select>	
									<hr id='separationLine'>
								</div>
					<?php			
						}
					?>

					<!--<h2>5TH BEST RESULTS ARE</h2>-->
					<?php
						while($rows5 = $fetchedFifthBestResults -> fetch())
						{
					?>		
								<div id="<?= $rows5['id'] ?>">	
									<h3> <?= $rows5['flowerName'] ?></h3>
										<span>Groupe : </span><?= $rows5['groupeName'] ?> 
										<br>
										<b style="color: #fd0505;"><?= $rows5['oui'] ?> Points</b><br>
									CHOISIR <input id="<?= $rows5['id'] ?>" type="checkbox" name="<?= $rows5['id'] ?>" value="oui">
									<br>
									Choisir cette fleur en tant que :
									<select id="priority" name="<?=$rows5['id']?>priorityChoice">
										<option id="<?= $rows5['id'] ?>" name="<?= $rows5['id']?>choisir" value="choisir">Choisir </option>
										<option id="<?= $rows5['id'] ?>" name="<?= $rows5['id']?>choisir" value="choix1">Choix 1 </option>
										<option id="<?= $rows5['id'] ?>" name="<?= $rows5['id']?>choisir" value="choix2">Choix 2 </option>
										<option id="<?= $rows5['id'] ?>" name="<?= $rows5['id']?>choisir" value="choix3">Choix 3 </option>
										<option id="<?= $rows5['id'] ?>" name="<?= $rows5['id']?>choisir" value="choix4">Choix 4 </option>
										<option id="<?= $rows5['id'] ?>" name="<?= $rows5['id']?>choisir" value="choix5">Choix 5 </option>
										<option id="<?= $rows5['id'] ?>" name="<?= $rows5['id']?>choisir" value="choix6">Choix 6 </option>
									</select>
									<hr id='separationLine'>
								</div>
					<?php			
						}
					?>

				</center>

				<input id="exportFunction" type="submit" name="EXPORTER" value="EXPORTER">
			</form>

			<center id="buttonsPosition">
				<a id="resetFunction" href="./index.php?action=resetDatabaseResult">RESET</a>
				<!--
				<form method="POST" action="./index.php?action=sendMailToPatient">
					<input id="sendFunction" onclick="sendEmailFunction()" value="ENVOYER" name="sendMailButton">
				</form>
				-->
				<form method="POST" action="./index.php?action=dropTablesAndGoToHome">
					<input type="submit" id="terminerButton" name="clearTables" value="TERMINER">
				</form>
			</center>

			<div id="emailWindow">
				<i id="closeWindowButton" onclick="closeEmailWindow()" class="fa-solid fa-circle-xmark"></i>
				<center>
					<h2 style="color:black; ">Adresse courriel du client</h2>
					<form method="POST" action="./index.php?action=sendMailToPatient">
						<input id="sendMailToPatientInput" type="email" name="adresseMail" placeholder="Veuillez saisir l'adresse courriel du client...">
						<input id="sendMailToPatientSubmitButton" type="submit" name="sendMailToPatient" value="Confirmer">
					</form>
				</center>
			</div>
			<script type="text/javascript" src="view/main.js"></script>
			<script type="text/javascript" src="view/main2.js"></script>
		</body>
		</html>
<?php
	}

	else
	{
		header("location:index.php");
	}
?>