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
				<link rel="stylesheet" type="text/css" href="view/clients/style.css?version=1">
				<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
				<link rel="icon" type="image/png" href="view/clients/images/logo.png" />
				<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
				<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
				<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
				
				<!------- LOADING SCREEN SCRIPT------- -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
				<script type="text/javascript" src="view/clients/main2.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
				<!------- END LOADING SCREEN ------- -->
				<title>ADNR Consults - Clients Hommes</title>
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
				
					<h2 id="testTitle">CLIENTS HOMMES</h2>

					<div id="seventhBloc" style="visibility: visible;">
					<input type="text" id="mySearchBox" onkeyup="myFunction()" placeholder="Rechercher un client...">	
						<?php
							if ($numberOfResults == 0)
							{
						?>
								<!--<center id="clientListBloc">
									<h5>Vous n'avez aucun client homme pour le moment</h5>
								</center>
							-->
						<?php
							}
							else
							{
						?>
						<?php

								while($rows = $showMaleClientsFromConnections -> fetch())
								{
									$clientId = $rows['clientId'];
									$getMaleClientsFromUsersThroughConnections = $userManager-> getMaleClientsFromUsersThroughConnections($clientId);

									while($rows2 = $getMaleClientsFromUsersThroughConnections-> fetch())
									{
										$clientDateOfBirth = strtotime($rows2['dob']);
										$clientDateOfBirth = date("d-m-Y" , $clientDateOfBirth); 
							?>
										<center id="clientListBloc">
											<h3><?= base64_decode( $rows2['firstname'] ); echo "&nbsp;"; echo base64_decode($rows2['lastname']) ?></h3>
											<h3>Date de naissance : <?= $clientDateOfBirth ?></h3>
											<h4>Age : 
												<?php 
											
													$clientDateOfBirth = $rows2['dob'];
						  							$today = date("Y-m-d");
						  							$diff = date_diff(date_create($clientDateOfBirth), date_create($today));
											  		$clientDateOfBirth = $diff->format('%y');
											  		echo $clientDateOfBirth;
									  	 		?>
									  	 	 Ans</h4>
									  	 	 <form method="POST" action="index.php?action=getClientDetailsFromUserLists&id=sdkjfh324d654vjkh564dfjkf56462djk<?= $rows2['id'] ?>gfjkhfgdfg546dfg54bhk5546465">
									  	 	 	<input type="submit" id="clientSelectButton" value="Sélectionner">
									  	 	 </form>
									  	 	 <BR>
									  	 	 <hr style="width:40%; margin: auto;">
										</center>
							<?php			
									}	
								}
							}
						?>
					</div>
				</div>
				<script type="text/javascript" src="view/clients/main.js"></script>
			</body>
		</html>

<?php
	}

	else
	{
		header("location:index.php");
	}


?>