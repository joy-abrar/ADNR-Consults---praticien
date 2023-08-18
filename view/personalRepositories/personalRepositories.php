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
			<link rel="stylesheet" type="text/css" href="view/personalRepositories/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/personalRepositories/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="view/personalRepositories/main2.js"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>Praticien - Clients</title>
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->			

			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

			<div id="mainAppearence">


				<div id="fifthBloc">
					
					<center id="clientListTitle">
						<h2><u>Fiche clients</u></h2>
					</center>
				</div>
				<div id="seventhBloc" style="visibility: visible;">
					<input type="text" id="mySearchBox" onkeyup="myFunction()" placeholder="Rechercher un client...">
					<?php
						if ($numberOfResults == 0) 
						{
					?>
							<br><br><br><br>
							<center id="clientListBloc">
							</center>	
					<?php
						}

						else
						{
							while ($rows = $personalRepositories ->fetch()) 
							{
								$clientDateOfBirth = strtotime($rows['clientDateOfBirth']);
								$clientDateOfBirth = date("d-m-Y" , $clientDateOfBirth); 
					?>
								<center id="clientListBloc">
									<h3><?= base64_decode( $rows['clientFirstName'] ); echo "&nbsp;"; echo base64_decode($rows['clientLastName']) ?></h3>
									<h3>Date de naissance : <?= $clientDateOfBirth ?></h3>
									<h4>Age :
										<?php 
									
											$clientDateOfBirth = $rows['clientDateOfBirth'];
				  							$today = date("Y-m-d");
				  							$diff = date_diff(date_create($clientDateOfBirth), date_create($today));
									  		$clientDateOfBirth = $diff->format('%y');
									  		echo $clientDateOfBirth;
							  	 		?>
							  	 	 Ans</h4>
							  	 	 <form method="POST" action="index.php?action=getClientDetails&id=<?= $rows['id'] ?>">
							  	 	 	<input type="submit" id="clientSelectButton" value="Sélectionner">
							  	 	 </form>

							  	 	 <form method="POST" action="index.php?action=getPersonalRepositoryDocuments&id=<?= $rows['id'] ?>">
							  	 	 	<input type="submit" id="clientSelectButton" value="Voir les Documents">
							  	 	 </form>
							  	 	 <br>
							  	 	 <hr style="width:40%">
								</center>

				<?php
							}
						}

				?>
				</div>
			</div>
			<script type="text/javascript" src="view/personalRepositories/main.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:index.php");
	}


?>