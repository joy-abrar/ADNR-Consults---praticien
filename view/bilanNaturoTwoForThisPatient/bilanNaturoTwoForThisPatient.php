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
			<title>Praticien - Bilan Naturo 2</title>
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="style.css?version=1">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->

			<?php
				include_once('../../lib/topMenu1.php');
				include_once('../../lib/sideMenu1.php');
			?>

			<script>
			    function enableBox(answerNumber)
			    {
			      document.getElementById("otheranswer"+answerNumber).disabled = false;
			    }
			    
			    function changeradioother(answerNumber) 
			    {
			      var other = document.getElementById("other"+answerNumber);
			      other.value = document.getElementById("otheranswer"+answerNumber).value;	      
			    }
			</script>

			<h2 id="testTitle">BILAN NATURO DETAILLES</h2>
			<form method="POST" action="../../index.php?action=sendThisBilanForMyClientToFillUp">
				<div id="naturoSheetBloc">	

					<center>
						<div id="bloc1">
								<div>
									<h2>A PROPOS DU CLIENT</h2>
									<div id="subBloc">
										<input type="checkBox" name="box1" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box1">1. Antécédents</label>
									</div>

									<div id="subBloc">	
										<input type="checkBox" name="box2" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box2">2. Lieu de vie, loisirs</label>
									</div>
									
									<div id="subBloc">
										<input type="checkBox" name="box3" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box2">3. Vie professionnelle</label>
									</div>
								</div>

								<div>
									<h2>SYSTEME DIGESTIF</h2>
									<div id="subBloc">
										<input type="checkBox" name="box4" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box4">1. Alimentation</label>
									</div>

									<div id="subBloc">
										<input type="checkBox" name="box5" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box5">2. Digestion - transit</label>
									</div>
								</div>

								<div>
									<h2>III.	SYSTEME RESPIRATOIRE - ORL</h2>
									<div id="subBloc">
										<input type="checkBox" name="box6" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box6">SYSTEME RESPIRATOIRE - ORL</label>
									</div>
								</div> 

								<div>
									<h2>IV.	SYSTEME CARDIOVASCULAIRE</h2>
									<div id="subBloc">
										<input type="checkBox" name="box7" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box7">IV. SYSTEME CARDIOVASCULAIRE</label>
									</div>
								</div> 

								<div>
									<h2>V.	SYSTEME URO-GENITAL</h2>
									<div id="subBloc">
										<input type="checkBox" name="box8" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box8">V. SYSTEME URO-GENITAL</label>
									</div>
								</div> 

								<div>
									<h2>VI.	SYSTEME OSSEUX, MUSCULAIRE ET ARTICULAIRE</h2>
									<div id="subBloc">
										<input type="checkBox" name="box9" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box9">VI. SYSTEME OSSEUX, MUSCULAIRE ET ARTICULAIRE</label>
									</div>
								</div>

								<div>
									<h2>VII. SYSTEME PEAU ET PHANERE</h2>
									<div id="subBloc">
										<input type="checkBox" name="box10" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box10">VII. SYSTEME PEAU ET PHANERE</label>
									</div>
								</div> 

								<div>
									<h2>VIII. SYSTEME EMOTIONEL ET VIATLITE</h2>
									<div id="subBloc">
										<input type="checkBox" name="box11" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box11">VIII. SYSTEME EMOTIONEL ET VIATLITE</label>
									</div>
								</div> 

								<div>
									<h2>IX. SOMMEIL</h2>
									<div id="subBloc">
										<input type="checkBox" name="box12" value="1">&nbsp;&nbsp;&nbsp;
										<label for="box12">IX. SOMMEIL</label>
									</div>
								</div> 
						</div>
					</center>

					<input id="sendToClientButton" type="submit" name="sendThisToClient" value="ENVOYER AU CLIENT">
				</div>
			</form>



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