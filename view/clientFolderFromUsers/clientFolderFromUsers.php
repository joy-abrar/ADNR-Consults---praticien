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
			<link rel="stylesheet" type="text/css" href="view/clientFolderFromUsers/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/clientFolder/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<script type="text/javascript" src="view/clientFolder/main2.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<title>Praticien - Clients</title>
		</head>
		<body id="body">
			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

			<div id="mainAppearence">

				<h2 id="testTitle">DETAILS DU CLIENT</h2>

				<div id="seventhBloc" style="visibility: visible;">
				<?php
					while ($rows = $getClientDetailsFromUserLists ->fetch()) 
					{
						$id = $rows['id'];
				?>
						<center id="clientListBloc">
							<h3><?= base64_decode( $rows['firstname'] ); echo "&nbsp;"; echo base64_decode($rows['lastname']) ?></h3>
							<h4>Age : 
								<?php 
							
									$clientDateOfBirth = $rows['dob'];
		  							$today = date("Y-m-d");
		  							$diff = date_diff(date_create($clientDateOfBirth), date_create($today));
							  		$clientDateOfBirth = $diff->format('%y');
							  		echo $clientDateOfBirth;
					  	 		?>
					  	 	 Ans</h4>

					  	 	 <h4>Email : <?= base64_decode( $rows['email'] ) ?></h4>
					  	 	 <br>
					  	 	 <!--<hr style="width:40%">-->
					  	 	 	<a href="index.php?action=fleursDeBachForThisPatient&id=<?= $id ?>" style="min-width:100px" id="clientSelectButton">Fleurs De Bach</a>
					  	 	 	<br><br>
					  	 	 	<a href="index.php?action=bilanNaturoForThisPatient&id=<?= $id ?>" style="min-width:100px" id="clientSelectButton">Faire Bilan Naturo</a>
					  	 	 	<br><br>

					  	 	 	<a href="index.php?action=bilanNaturoTwoForThisPatient&id=<?= $id ?>" style="min-width:100px" id="clientSelectButton">Bilan naturo detaillé</a>
					  	 	 	<br><br>

					  	 	 	<a href="index.php?action=hygenVitalProgram&id=sdkjfh324d654vjkh564dfjkf56462djk<?= $id ?>gfjkhfgdfg546dfg54bhk5546465" style="min-width:100px" id="clientSelectButton">Programme D'hygiène Vitale</a>
					  	 	 	<br><br>

					  	 	 	<a href="index.php?action=testDNSForThisPatient&id=sdkjfh324d654vjkh564dfjkf56462djk<?= $id ?>gfjkhfgdfg546dfg54bhk5546465" style="min-width:100px" id="clientSelectButton">Faire Test DNS</a>
					  	 	 	<br><br>

					  	 	 	<a href="index.php?action=testGDSForThisPatient&id=sdkjfh324d654vjkh564dfjkf56462djk<?= $id ?>gfjkhfgdfg546dfg54bhk5546465" style="min-width:100px" id="clientSelectButton">Faire Test GDS</a><br>
					  	 	 	<br><br>

					  	 	 	<a href="index.php?action=testGDSEForThisPatient&id=sdkjfh324d654vjkh564dfjkf56462djk<?= $id ?>gfjkhfgdfg546dfg54bhk5546465" style="min-width:100px" id="clientSelectButton">Faire Test GDSE</a><br>
					  	 	 	<br><br>

					  	 	 	<a href="index.php?action=testGDSSPForThisPatient&id=sdkjfh324d654vjkh564dfjkf56462djk<?= $id ?>gfjkhfgdfg546dfg54bhk5546465" style="min-width:100px" id="clientSelectButton">Faire Test GDSSP</a><br>
					  	 	 	<button style="min-width:100px" id="clientDeletingButton">Supprimer ce client</button>
					  	 	 	<br>

					  	 	 	<?php
					  	 	 		if ($rows['userVerification'] == "unverified") 
					  	 	 		{
					  	 	 	?>
					  	 	 			<a href="index.php?action=resendTheClientVerificationCode&id=<?= $id ?>" style="min-width:100px" id="clientSelectButton">Renvoyer le mail de confirmation</a>
					  	 	 	<?php
					  	 	 		}
					  	 	 	?>
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
			    <form method="POST" action="index.php?action=clientLinkDeletingConfirmedFromMyConnections&id=sdkjfh324d654vjkh564dfjkf56462djk<?=$id?>gfjkhfgdfg546dfg54bhk5546465" class="modal-footer">
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