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
			<link rel="stylesheet" type="text/css" href="view/kalyaSearch/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/kalyaSearch/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<script type="text/javascript" src="view/kalyaSearch/main2.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<title>Praticien - Kalya Search</title>
		</head>
		<body id="body">

			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

			<!--<div id="mainAppearence">


				<div id="fifthBloc">
					
					<center><h2><u>Résultat du recherche Kalya</u></h2></center>
				</div>
			</div>-->

			<iframe src="<?= $service_url ?>" style="width:100%; height: 92vh; margin-top: 8vh;"></iframe>



			<!-- -------------------------------------- END CONFIRMATION FOR DELETING FORM --------------------------->
			<script type="text/javascript" src="view/kalyaSearch/main.js"></script>
			<script type="lib/main.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:index.php");
	}


?>