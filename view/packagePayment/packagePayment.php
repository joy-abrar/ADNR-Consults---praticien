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
			<link rel="stylesheet" type="text/css" href="view/packagePayment/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/packagePayment/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="view/packagePayment/main2.js"></script>

			<script type="text/javascript" src="https://www.paypal.com/sdk/js?client-id=AT8wjT6TYsA7Krmva81IXVlSPoUgiDwylIlAAfIRZ18PX3a_xPTI4_6KbMaoIXyzLpJfQnB8m5u6LiKy&currency=EUR"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>Praticien - Paiement</title>
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->			

			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

				<center>
					<h4 id="title"><u>Paiement</u></h4>

				<script>
					var packagePrice = <?php echo $packagePrice ?>;
				</script>
				<script type="text/javascript" src="view/packagePayment/paypal.js"></script>
					<a id="returnToPackageOffers" href="index.php?action=takePackage">Retour</a> 
				</center>
			<script type="text/javascript" src="view/packagePayment/main.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:index.php");
	}


?>