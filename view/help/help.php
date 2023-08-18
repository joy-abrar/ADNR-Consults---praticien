<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}

	if ($_SESSION['sessionStatus'] == "online") 
	{
		include_once('../../lib/config.php');
	
?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="style.css?version=1.0">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<title>ADNR Consults - Aide </title>
		</head>
		<body id="setFont">

			<?php
				include_once('../../lib/topMenu1.php');
				include_once('../../lib/sideMenu1.php');
			?>

			<h2 id="pageTitle">AIDE</h2>

			<div id="instructionsBloc">
				<span>Voici les instructions pour l'utilisation des différents fonctionnalités de Espace Praticien d'ADNR Consults :</span>
				<br><br><br>
				<li><a href="#lancerUnTest">Agenda</a></li>
				<li><a href="#outilsNaturo">Outils Naturo</a></li>
				<li><a href="#fleursDeBach">Fleurs De Bach</a></li>
				<li><a href="#bilanNaturo">Bilan Naturo</a></li>
				<li><a href="#testDns">Test DNS</a></li>
				<li><a href="#testGds">Test GDS (Gestion Du Stress)</a></li>
				<li><a href="#creationDeCompte">Création d'un compte client</a></li>
				<li><a href="#ajouterUnDocument">Ajouter un document</a></li>
				<li><a href="#consulterLesDocuments">Consulter les documents</a></li>
				<li><a href="#consulterMesClients">Consulter mes clients</a></li>
				<li><a href="#messagerie">Messagerie</a></li>
				<li><a href="#parametrageDuCompte">Paramètrage du compte</a></li>
				<li><a href="#gestionDuCabinet">Gestion du cabinet</a></li>
				<li><a href="#parametrageDuPhv">Paramètrage du PHV</a></li>
			</div>

			<center>
				<div id="lancerUnTest">
					<u><h2>AGENDA</h2></u>
					<p>Une fois que vous avez noté un rendez-vous avec votre client dans l'agenda d'ADNR Consults, il vous affichera vos 3 prochains rendez-vous avec vos clients dans le <kbd>Tableau De Bord</kbd>Vous avez tout à fait la possibilité de modifier et/ou supprimer vos rendez-vous</p>
				</div>
				
				<div id="outilsNaturo">
					<u><h2>OUTILS NATURO</h2></u>
					<p>Outils Naturo est une des fonctionnalités principaux d'ADNR Consults. Dans la rubrique d'outils naturo, vous allez retrouver les tests liées avec ses fonctionnalités.(Par exemple: Fleurs de bach, Bilan Naturo, Test DNS, Test GDS etc)</p>
				</div>
				
				<div id="fleursDeBach">
					<u><h2>FLEURS DE BACH</h2></u>
					<p>Pour lancer le test Fleurs De Bach, vous avez 2 possibilités.<br>Soit:<br><li>depuis le <b>Menubar > <i style="display: contents;" class="fa fa-solid fa-seedling"></i> Fleurs De Bach</b></li>ou<li><b>Menubar > <i style="display: contents;" class="fa fa-solid fa-address-card"></i>Liste Clients > Choisir votre client puis cliquer sur (<b>Sélectionner</b>) > Fleurs de Bach</b></li></p>
					<p><em>Le fait d'avoir lancer depuis le profil client, vous aurez tout à fait la possibilité d'enregistrer le résultat du bilan depuis la page de résultat</em></p>
				</div>
				
				<div id="bilanNaturo">
					<u><h2>BILAN NATURO</h2></u>
					<p>Pour lancer le test Bilan Naturo, vous avez 2 possibilités.<br>Soit:<br><li>depuis le <b>Menubar > <i style="display: contents;" class="fa fa-solid fa-sheet-plastic"></i> Bilan Naturo</b></li>ou<li><b>Menubar > <i style="display: contents;" class="fa fa-solid fa-address-card"></i> Liste Clients > Choisir votre client puis cliquer sur (<b>Sélectionner</b>) > <i style="display: contents;" class="fa fa-solid fa-sheet-plastic"></i> Bilan Naturo</b></li></p>
					<p><em>Le fait d'avoir lancer depuis le profil client, vous aurez tout à fait la possibilité d'enregistrer le résultat du bilan depuis la page de résultat</em></p>
				</div>
				
				<div id="testDns">
					<u><h2>TEST DNS</h2></u>
					<p>Pour lancer le test Test DNS, vous avez 2 possibilités.<br>Soit:<br><li>depuis le <b>Menubar > <i style="display: contents;" class="fa fa-solid fa-sheet-plastic"></i> Test DNS</b></li>ou<li><b>Menubar > <i style="display: contents;" class="fa fa-solid fa-address-card"></i> Liste Clients > Choisir votre client puis cliquer sur (<b>Sélectionner</b>) > Test DNS</b></li></p>
					<p><em>Le fait d'avoir lancer depuis le profil client, vous aurez tout à fait la possibilité d'enregistrer le résultat du bilan depuis la page de résultat</em></p>
				</div>
				
				<div id="testGds">
					<u><h2>TEST GDS</h2></u>
					<p>Pour lancer le test Bilan Naturo, vous avez 2 possibilités.<br>Soit:<br><li>depuis le <b>Menubar > <i style="display: contents;" class="fa fa-solid fa-address-card"></i> Test GDS</b></li>ou<li><b>Menubar > <i style="display: contents;" class="fa fa-solid fa-address-card"></i> Liste Clients > Choisir votre client puis cliquer sur (<b>Sélectionner</b>) > Test GDS</b></li></p>
					<p><em>Le fait d'avoir lancer depuis le profil client, vous aurez tout à fait la possibilité d'enregistrer le résultat du bilan depuis la page de résultat</em></p>
				</div>
				
				<div id="creationDeCompte">
					<u><h2>CREATION D'UN COMPTE CLIENT</h2></u>
					<p>Un praticien peut tout à fait créer un compte pour son client depuis son espace praticien. En créant ce compte, le client va être automatiquement ajouté dans sa liste des clients. Ainsi que le praticien peut déja commencer à utiliser ce profil du client même si le client n'a toujours pas paramètré et/ou confirmé son profil. Dans tous les cas, le client va reçevoir un mail dans son boîte mail avec un lien qui lui demandera de finaliser la création de son compte.Pour créer un compte client, Rendez-vous dans: <li><b>Menubar > <i style="display: contents;" class="fa fa-thin fa-user-plus"></i> Créer Un Compte Client</b></li></p>
					<p><em>Dans le cas où le client possède déja un compte, il peut chercher et choisir son praticien. Cela lui ajouetra automatiquement dans la liste de ses clients</em></p>
				</div>
				
				<div id="ajouterUnDocument">
					<u><h2>AJOUTER UN DOCUMENT</h2></u>

					<p>Pour ajouter un document, Ouvrez le <b>Menubar > Puis Ajouter/Consulter Documents Client > </b>Choisissez le client que vous souhaité puis cliquez sur <b><i style="display: contents;" class="fa fa-solid fa-eye"></i></b> Ensuite > <span style="color:blue">+ Ajouter un document</span></b> </p>
				</div>
				
				<div id="consulterLesDocuments">
					<u><h2>CONSULTER LES DOCUMENTS</h2></u>
					<p>Pour consulter vos documents,Rendez-vous sur le <b>Menubar > Ajouter/Consulter Documents Client</b><br>
						Dans la liste de vos clients, Choisissez en cliquant sur l'icone <i style="display: contents;" class="fa fa-solid fa-eye"></i></p>
					<p><em>Tous vos documents se retrouvent de-dans (ainsi que les documents partagés par vos clients</em></p>
				</div>
				
				<div id="consulterMesClients">
					<u><h2>CONSULTER MES CLIENTS</h2></u>
					<p>Tous vos clients se retrouvent dans la rubrique <b>Menubar > Liste Clients</b></p>
				</div>
				
				<div id="messagerie">
					<u><h2>MESSAGERIE</h2></u>
					<p>La messagerie vous permet d'échanger avec les clients<br><em>Pour utiliser cette fonctionnalité, aller sur <b>Menubar > Messagerie</b></em></p>
				</div>
				
				<div id="parametrageDuCompte">
					<u><h2>PARAMETRAGE DU COMPTE</h2></u>
					<p>Le paramètrage du compte vous permet de mettre à jour vos informations personnels. Pour que ces données soit à validés, on vous demandera de resaissir votre mot de passe.</p>
					<em>Important: Dans aucun cas il est possible de changer votre Identifiant.<br>Pour mettre à jour votre compte, <b>Menubar > CONFIGURATION</b></em>
				</div>
				
				<div id="gestionDuCabinet">
					<u><h2>GESTION DU CABINET</h2></u>
					<p>La partie de Gestion du cabinet est fait pour que si vous préfèrez d'avoir le droit d'accès dans d'autres spécialités. Pour avoir cet fonctionnalité, il vous est demandé de nous envoyer votre dernier diplôme ou Certificat<br>Pour le faire, <b>Menubar > Gérer Le Cabinet</b></p>
				</div>
				
				<div id="parametrageDuPhv">
					<u><h2>PARAMETRAGE DU PHV</h2></u>
					<p>Le paramètrage du PHV vous permet de personnaliser votre affichage du résultat de votre bilan une fois que vous avez décidé de l'exporter ou le enregistrer. Dans cette partie, vous allez retrouver le paramètrage de la couleur de l'entête, le pied de page.<br>Vous aurez aussi la possibilité de choisir une image d'arrière-plan ou bien de télécharger une image à votre choix.</p>
					<em>Cette fonctionnalité se trouve sur <b>Menubar > Paramètrage Du PHV</b></em>
				</div>
			</center>
			<script type="text/javascript" src="main.js"></script>
		</body>
		</html>

<?php
	}

	else
	{
		header("location: ../../index.php");
	}
?>