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
			<link rel="stylesheet" type="text/css" href="view/purchase/success/style.css?version=1">
			<link rel="icon" type="image/png" href="view/purchase/success/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="view/purchase/success/main2.js"></script>

			<script type="text/javascript" src="https://www.paypal.com/sdk/js?client-id=AT8wjT6TYsA7Krmva81IXVlSPoUgiDwylIlAAfIRZ18PX3a_xPTI4_6KbMaoIXyzLpJfQnB8m5u6LiKy"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>Praticien - Paiement</title>
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->			
			<div id="topMenuNav">
				<div>
					<img id="logoImage" src="view/purchase/success/images/logo.png" alt="logo_png">
				</div>

				<div id="usernameTopNav">
				      <ul class="navbar">
				        <li>
				          <a id="usernameTopNavLink" href="#"><?= base64_decode($_SESSION['userName']) ?> <i class="fa-solid fa-chevron-down"></i></a>
				          <ul>
				            <li><a href="index.php?action=accueil">Accueil</a></li>
				            <li><a href="#">Mon compte</a></li>
				            <li><a href="index.php?action=settings">Paramètres</a></li>
				            <li><a href="#">Plus</a></li>
				          </ul>
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
	    			<a id="agendaLink" href="index.php?action=agenda"><i class="fa-solid fa-calendar-days" onclick="dashboardAppearence('rendezvous')"></i></a>
	    		</div>

	    		<div id="username">	
	    			<a id="usernameLink" href="index.php"><i class="fa-solid fa-user-tie"></i> <?= base64_decode($_SESSION['userName']) ?> </i></a>
	    		</div>

	    		<div id="logout">
	    			<a id="logoutLink" href="index.php?action=logout"><i class="fa-solid fa-power-off"></i></a>
	    		</div>
			</div>		

			<nav class="main-menu">
				<ul>
					<li>                                   
						<a href="index.php?action=accueil">
							<i class="fa fa-home fa-lg"></i>
							<span class="nav-text">Accueil</span>
						</a>
					</li>   
				   
					<li>                                 
						<a href="index.php?action=agenda" onclick="dashboardAppearence('rendezvous')">
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
					?>  

				    
					<li>                                 
						<a href="index.php?action=showClientsList">
							<i class="fa fa-solid fa-address-card"></i>
							<span class="nav-text">Clients</span>
						</a>
					</li>   
  
					<li class="darkerlishadow">
						<a href="index.php?action=showClientsList">
							<i class="fa fa-solid fa-users"></i>
							<span class="nav-text">Tous</span>
						</a>
					</li>
  
  
					<li class="darkerli">
						<a href="index.php?action=showMaleClients">
							<i class="fa fa-thin fa-person"></i>
							<span class="nav-text">Hommes</span>
						</a>
					</li>
					
					<li class="darkerli">
						<a href="index.php?action=showFemaleClients">
							<i class="fa fa-thin fa-person-dress"></i>
							<span class="nav-text">Femmes</span>
						</a>
					</li>
  					
  					<li class="darkerli">
						<a href="index.php?action=showTeenClients">
							<i class="fa fa-thin fa-children"></i>
							<span class="nav-text">Adolescents</span>
						</a>
					</li>

					<li class="darkerli">
						<a href="index.php?action=showChildClients">
							<i class="fa fa-thin fa-baby"></i>
					 		<span class="nav-text">Enfants</span>
						</a>
					</li>
  
					<li class="darkerli">
						<a href="index.php?action=logout">
							<i class="fa fa-thin fa-door-open"></i>
							<span class="nav-text">Quitter</span>
						</a>
					</li>

					<li class="darkerli">
						<a href="index.php?action=addAClient">
							<i class="fa fa-thin fa-user-plus"></i>
							<span class="nav-text">Ajouter un client</span>
						</a>
					</li>
  
					<li class="darkerli">
						<a href="index.php?action=documents">
							<i class="fa fa-thin fa-file"></i>
							<span class="nav-text">Documents</span>
						</a>
					</li>

					<li class="darkerli">
						<a href="index.php?action=documentsSharedWithMe">
							<i class="fa fa-solid fa-file-pdf"></i>
							<span class="nav-text">Documents Partagés</span>
						</a>
					</li>

					<li class="darkerli">
						<a href="index.php?action=gotoMails" onclick="dashboardAppearence('courriers')">
							<i class="fa fa-thin fa-envelope"></i>
							<span class="nav-text">Messagerie</span>
						</a>
					</li>
  
					<li class="darkerli">
						<a href="index.php?action=files">
							<i class="fa fa-thin fa-folder"></i>
							<span class="nav-text">Répertoire</span>
						</a>
					</li>
  
					<li class="darkerli">
						<a href="index.php?action=settings">
							<i class="fa fa-thin fa-screwdriver-wrench"></i>
							<span class="nav-text">Configuration</span>
						</a>
					</li>
	  
					<li class="darkerli">
						<a href="index.php?action=cabinetManagement">
							<i class="fa fa-thin fa-gears"></i>
							<span class="nav-text">Gérer le cabinet</span>
						</a>
					</li>

					<li class="darkerli">                                  
						<a href="index.php?action=help">
							<i class="fa fa-question-circle"></i>
							<span class="nav-text">Aide</span>
						</a>
					</li>

					<li class="darkerli">                                  
						<a href="index.php?action=aboutUs">
							<i class="fa fa-solid fa-info"></i>
							<span class="nav-text">A Propos De Nous</span>
						</a>
					</li>

					<li>
	                   	<a href="index.php?action=logout">
	                        <i class="fa fa-thin fa-power-off"></i>
	                        <span class="nav-text">Se déconnecter</span>    
	                    </a>
					</li>
				</ul>
			</nav>

				<center>
					<h4 id="title"><u>Paiement</u></h4>

				<script>
					var packagePrice = <?php echo $packagePrice ?>;
				</script>
				<script type="text/javascript" src="view/purchase/success/paypal.js"></script>
					<a id="returnToPackageOffers" href="index.php?action=takePackage">Retour</a> 
				</center>
			<script type="text/javascript" src="view/purchase/success/main.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:index.php");
	}


?>