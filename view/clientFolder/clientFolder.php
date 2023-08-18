<?php
	session_start();

	if ($_SESSION['sessionStatus'] == "online") 
	{
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="view/clientFolder/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/clientFolder/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<script type="text/javascript" src="view/clientFolder/main2.js"></script>
			<title>Praticien - Clients</title>
		</head>
		<body id="body">

			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

			<div id="mainAppearence">


				<div id="fifthBloc">
					
					<center><h2><u>Détails du client</u></h2></center>
				</div>
				<div id="seventhBloc" style="visibility: visible;">
				<?php
					while ($rows = $getClientsDetails ->fetch()) 
					{
						$id = $rows['id'];
				?>
						<center id="clientListBloc">
							<h3><?= base64_decode( $rows['clientFirstName'] ); echo "&nbsp;"; echo base64_decode($rows['clientLastName']) ?></h3>
							<h4>Age : 
								<?php 
							
									$clientDateOfBirth = $rows['clientDateOfBirth'];
		  							$today = date("Y-m-d");
		  							$diff = date_diff(date_create($clientDateOfBirth), date_create($today));
							  		$clientDateOfBirth = $diff->format('%y');
							  		echo $clientDateOfBirth;
					  	 		?>
					  	 	 Ans</h4>

					  	 	 <h4>Email : <?= base64_decode( $rows['clientEmail'] ) ?></h4>
					  	 	 <h4>Tel : <?= base64_decode( $rows['clientPhoneNumber'] ) ?></h4>
					  	 	 <h4>Domicile : <?php echo base64_decode( $rows['clientRoadNumber']). " " . base64_decode($rows['clientRoadName']) ?></h4>
					  	 	 <h4>Code postale : <?= base64_decode( $rows['clientPostalCode']) ?> </h4>
					  	 	 <h4>Ville : <?= base64_decode($rows['clientCity']) ?></h4>
					  	 	 <br>
					  	 	 <hr style="width:40%">
					  	 	 	<a href="index.php?action=modifyClientDetails&id=<?= $id ?>" style="min-width:100px" name="modify" type="submit" id="clientSelectButton" value="Modifier">Modifier</a>
					  	 	 	<button style="min-width:100px" id="clientDeletingButton">Supprimer</button>
					  	 	 	<br><br>
					  	 	 	<!--<a href="index.php?action=bilanNaturoForThisPatient&id=<?= $id ?>" style="min-width:100px" id="clientSelectButton">Faire Bilan Naturo</a>-->
						</center>

				<?php
					}
				?>
				</div>
			</div>
			<!-- ---------------------------------------- CONFIRMATION FOR DELETING FORM ------------------->
			<div id="myModal" class="modal">
			  <div class="modal-content">
			    <div class="modal-header">
			      <span class="close">&times;</span>
			      <h2>Confirmation</h2>
			    </div>
			    <div class="modal-body">
			      <h3>Etes-vous sûr de supprimer ce client?</h3>
			      <p>(Une fois supprimé, vous ne pourrez plus revenir en arrière)</p>
			    </div>
			    <form method="POST" action="index.php?action=clientDeletingConfirmed&id=<?=$id?>" class="modal-footer">
			      <center id="deletingConfirmationButtonsParam">
			      	<input id="clientDeletingConfirmButton" type="submit" value="Oui" name="confirmed">
			      	<input id="clientDeletingDenyButton" type="submit" value="Non" name="denied">
			    </center>
			    </form>
			  </div>
			</div>
			<!-- -------------------------------------- END CONFIRMATION FOR DELETING FORM --------------------------->
			<script type="text/javascript" src="view/clientFolder/main.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:index.php");
	}


?>