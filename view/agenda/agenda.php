<?php
if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}

	if ($_SESSION['sessionStatus'] == "online") 
	{
			$host_name = '127.0.0.1'; 
			$database = 'c1AdnCons2022bdd'; 
			$user_name = 'c1ConsAdn2022'; 
			$password = 'aqPZQq#8Zs'; 
			$db = null;
			try 
			{ 
				$db = new PDO("mysql:host=$host_name; dbname=$database", $user_name, $password); 
			} 
			catch (PDOException $e) 
			{ 
				echo "Erreur!: " . $e->getMessage() . "<br/>"; 
				die(); 
			}

			$getNotifications = $db -> prepare('SELECT * FROM notifications WHERE praticienId = ? AND notificationFor = ? AND readStatus = ? ORDER BY updatedOn DESC LIMIT 5');
			$getNotifications ->execute(array($_SESSION['userId'], "praticien", 0));
			$numberOfNotifications = $getNotifications -> rowCount();
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style.css?version=1.0">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" href="6-calendar.css?version=1.0">			
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
    		<script src="5-calendar.js"></script>
    		<!------- LOADING SCREEN ------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="main2.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<!------- END LOADING SCREEN ------- -->
			<title>Praticien - Agenda</title>
			<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
			<meta http-equiv="Pragma" content="no-cache" />
			<meta http-equiv="Expires" content="0" />
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->
			<?php
				include_once('../../lib/topMenu1.php');
				include_once('../../lib/sideMenu1.php');
			?>

			<h2 id="agendaTitle">AGENDA</h2>
			<div id="mainAppearence">
				<div id="agendaParam">
			    	<!------------------------------------- CALENDAR IMPLEMENT -------------------------------->
						<!-- (A) PERIOD SELECTOR -->
					    <div id="calPeriod">
					    	<?php
						      // (A1) MONTH SELECTOR
						      // NOTE: DEFAULT TO CURRENT SERVER MONTH YEAR
						      $months = 
						      [
						        1 => "Janvier", 2 => "Février", 3 => "Mars", 4 => "Avril",
						        5 => "Mai", 6 => "Juin", 7 => "Juillet", 8 => "Août",
						        9 => "Septembre", 10 => "Octobre", 11 => "Novembre", 12 => "Décembre"
						      ];
						      $monthNow = date("m");
						      echo "<select id='calmonth'>";
						      foreach ($months as $m=>$mth) 
						      {
						        printf("<option value='%s'%s>%s</option>",
						          $m, $m==$monthNow?" selected":"", $mth);
						      }
						      echo "</select>";

						      // (A2) YEAR SELECTOR
						      echo "<input type='number' id='calyear' value='".date("Y")."'/>";
						   	?>
						   		
						</div>

					    <!-- (B) CALENDAR WRAPPER -->
					    <div id="calwrap"></div>

					    <!-- (C) EVENT FORM -->
					    <div id="calblock">
					    	<form id="calform">
						    	<input type="hidden" name="req" value="save"/>
						      	<input type="hidden" id="evtid" name="eid"/>
						      	<label for="start">Début de rendez-vous</label>
						      	<input type="datetime-local" id="evtstart" name="start" required/>
						      	<label for="end">Fin de rendez-vous</label>
						      	<input type="datetime-local" id="evtend" name="end" required/>
						      	<label for="txt">Nom du client</label>
						      	<input type="text" id="evttxt" name="txt" autocomplete="off" required>
						      	<label for="motive">Motif du rendez-vous</label>
						      	<input type="text" id="evttxt" name="motive" autocomplete="off" required>
						      	<label for="color">Couleur</label>
						      	<input type="color" id="evtcolor" name="color" value="#e4edff" required/>
						      	<input type="submit" id="calformsave" value="Sauvegarder"/>
						      	<input type="button" id="calformdel" value="Supprimer"/>
						      	<input type="button" id="calformcx" value="Annuler"/>
					    	</form>
					    </div>
					    <!-- ------------------------------------------- END OF THE CALENDAR ---------------------------------------------------------------->
				</div>
			<script type="text/javascript" src="main.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:../../index.php");
	}


?>