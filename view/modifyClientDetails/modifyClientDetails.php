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
			<title>DASHBOARD</title>
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
					while ($rows = $modifyClientDetails ->fetch()) 
					{
				?>
					<center id="clientListBloc">
						<form method="POST" action="index.php?action=modifyClientDetailsAsThis&id=<?= $rows['id'] ?>">	
							<h3>Nom : 
								<input type="text" name="clientFirstName" value="<?php echo base64_decode( $rows['clientFirstName'] )?>">
							</h3>
							<h3>Prénom :
								<input type="text" name="clientLastName" value="<?php echo base64_decode( $rows['clientLastName'] )?>">
							</h3>
							<h4>
								Date de naissance :
								<input type="date" name="clientDateOfBirth" value="<?php echo $rows['clientDateOfBirth'] ?>"> 
					  	 	</h4>
					  	 	 <h4>Email : <input type="text" name="clientEmail" value="<?php echo base64_decode( $rows['clientEmail'] ) ?>"></h4>
					  	 	 <h4>Tel : <input type="text" name="clientPhoneNumber" value="<?php echo base64_decode( $rows['clientPhoneNumber'] ) ?>"></h4>
					  	 	 <h4>Domicile : <input type="text" name="clientRoadNumber" value="<?php echo base64_decode( $rows['clientRoadNumber']) ?>">
					  	 	 <h4>Rue: <input type="text" name="clientRoadName" value="<?php echo base64_decode($rows['clientRoadName']) ?>"></h4>
					  	 	 <h4>Addresse Complément: <input type="text" name="clientAddressAlternate" value="<?php echo base64_decode($rows['clientAddressAlternate']) ?>"></h4>
					  	 	 <h4>Code postale : <input type="text" name="clientPostalCode" value="<?php echo base64_decode( $rows['clientPostalCode']) ?>"> </h4>
					  	 	 <h4>Ville : <input type="text" name="clientCity" value=" <?php echo base64_decode($rows['clientCity']) ?>"></h4>
					  	 	 <br>
					  	 	 <hr style="width:40%">
					  	 	 	<input style="min-width:100px" type="submit" id="clientSelectButton" value="Modifier">
						</form>
					</center>
					

				<?php
					}
				?>
				</div>
			</div>
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