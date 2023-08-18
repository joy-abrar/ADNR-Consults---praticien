<?php
	if (session_status() === PHP_SESSION_NONE) 
	{
		session_start();
	}

	if ($_SESSION['sessionStatus'] === "online") 
	{

		include_once('dashboardConfig.php');
?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="mailStyle.css?version=1">
			<link rel="stylesheet" type="text/css" href="style.css?version=1">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" href="6-calendar.css?version=1">			
			<!--<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>-->
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
    		<script src="5-calendar.js"></script>
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script type="text/javascript" src="main2.js"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>Tableau De Bord</title>
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

			<!-- ------------------------------------- TRIAL MESSAGE (IF EXISTS) ----------------------------------------------- -->
				<?php
					if ($_SESSION['activationStatus'] == "trial" ) 
					{
						if ($_SESSION['timeRemaining'] > 0) 
						{
				?>
							<!-- ---------------------------------------- TRIAL WARNING MESSAGE ------------------->
							<div id="myModal" class="modal">
							  <div class="modal-content">
							    <div class="modal-header">
							      <span class="close">&times;</span>
							      <center>
							      	<h2>Mode d'essai</h2>
							    	</center>
							    </div>
							    <center>
							    <div class="modal-body">
							      <h3>Vous êtes en mode d'essai</h3>
							      <h4>Il vous reste encore <span style="color:red"><?= $timeRemaining ?> jours</span> d'essai. La date d'expiration se rapproche le <span style="color:red"><?= $_SESSION['expiryDateToCorrectFormat'] ?></span>.</h4>
							      <p>(Pour avoir la fonctionnalité totale veuillez prendre un abonnement mensuel)</p>
							    </div>
							    </center>
							    <form method="POST" action="../../index.php?action=takePackage" class="modal-footer">
							      <center id="deletingConfirmationButtonsParam">
							      	<input id="clientTakingPackageButton" type="submit" value="Je m'abonne" name="confirmed">
							    </center>
							    </form>
							    	<center id="buttons">
							    		<button id="clientCancelButton">Me rappeler plus tard</button>&nbsp;&nbsp;
							    		<button id="clientCancelButton2">Fermer</button>
							  		</center>	
							  </div>
							</div>
							<!-- -------------------------------------- END TRIAL WARNING MESSAGE --------------------------->
				<?php
						}

						else if ($_SESSION['timeRemaining'] == 0 || $_SESSION['timeRemaining'] < 0 ) 
						{
				?>
							<div id="myModal" class="modal">
							  <div class="modal-content">
							    <div class="modal-header">
							      <span class="close">&times;</span>
							      <center>
							      	<h2>Période d'essai terminée !</h2>
							    	</center>
							    </div>
							    <center>
							    <div class="modal-body">
							      <h3 style="color:red">Votre période d'essai est terminé</h3>
							      <h4>Veuillez choisir un abonnement pour avoir l'accès totale.</h4>
							      <p>(Vous avez seulement l'accès à vos documents)</p>
							    </div>
							    </center>
							    <form method="POST" action="../../index.php?action=takePackage" class="modal-footer">
							      <center id="deletingConfirmationButtonsParam">
							      	<input id="clientTakingPackageButton" type="submit" value="Je m'abonne" name="confirmed">
							    </center>
							    </form>
							    	<center id="buttons">
							    		<button id="clientCancelButton">Me rappeler plus tard</button>&nbsp;&nbsp;
							    		<button id="clientCancelButton2">Fermer</button>
							  		</center>	
							  </div>
							</div>
				<?php		
						}
					}
				?>
				<!-- ------------------------------ END TRIAL MESSAGE (IF EXISTS) --------------------------------------- -->

			<div id="mainAppearence">
			    <div id="secondBloc">
			    	<div id="secondSubBlocOne">
						<a href="#" id="dashboardsecondSubBlocOne"><h3><?php if ($_SESSION['userSexe'] == "m") {?><i id="gendreParam" class="fa fa-solid fa-user-doctor" style="color:#3c5dff"></i><?php } if ($_SESSION['userSexe'] == "f") {?><i id="gendreParam" class="fa fa-solid fa-user-doctor" style="color:#fb2c66"></i></i> <?php }  ?>&nbsp;&nbsp;&nbsp; Bonjour <span><?= ucfirst(base64_decode($_SESSION['firstName'])) ?> [<?= $_SESSION['userAge'] ?> Ans]</span></h3></a>
			    	</div>

			    <!--
			    	<div id="secondSubBlocTwo">
			    		<a href="../questionnaires/index.php?action=questions1" id="dashboardMenuOption"><img id="dashboardMenuOptionsImage" src="images/qcm.png">Fleurs de Bach</a>
			    	</div>

			    	<div id="secondSubBlocThree">
			    		<a href="../../index.php?action=naturoSheet" id="dashboardMenuOption"><img id="dashboardMenuOptionsImage" src="images/bilan_logo.png">Bilan Naturo</a>
			    	</div>
			    -->
				</div>

				<div id="thirdBloc" >
					<div id="thirdSubBlocOne" style="background: whitesmoke; pointer-events: none; opacity: 1;">	
						<a href="#" id="dashboardsecondSubBlocOne">
							<h3><?php if ($_SESSION['userSexe'] == "m") {?><i id="gendreParam" class="fa fa-solid fa-user-doctor" style="color:#3c5dff"></i><?php } if ($_SESSION['userSexe'] == "f") {?><i id="gendreParam" class="fa fa-solid fa-user-doctor" style="color:#fb2c66"></i></i> <?php }  ?>&nbsp;&nbsp;&nbsp; Bonjour <span><?= ucfirst(base64_decode($_SESSION['firstName'])) ?></span></h3>
						</a>
			    	</div>

			    	<div id="thirdSubBlocTwo" style="background: whitesmoke; pointer-events: none; opacity: 1;">
			    		<center><h3>Coming Soon !</h3></center>
			    	</div>

			    	<div id="thirdSubBlocThree" style="background: whitesmoke; pointer-events: none; opacity: 1;">
			    		<center><h3>Coming Soon !</h3></center>
			    	</div>
				</div>

				<div id="forthBloc">
					<center><h3><u>Mes Rendez-vous</u></h3></center>
					<br>
					<?php
						if ($numberOfResults2 > 0) 
						{
							while ($rows3 = $nextAppointments -> fetch()) 
							{
						?>
								<div id="forthSubBlocOne" style="background: whitesmoke; pointer-events: none; opacity: 1;">
				    				<center>
				    					<h3 style="color:limegreen;"><u>Prochain Rendez-vous</u></h3>
				    					<?php 
				    						$todayDate = date('d-m-Y');

				    						$eventStartDate = strtotime($rows3['evt_start']);
											$eventStartDate = date('d/m/Y', $eventStartDate);
											
											$eventStartTime = strtotime($rows3['evt_start']);
											$eventStartTime = date('H:i',$eventStartTime);



											$eventEndDate = strtotime($rows3['evt_end']);
											$eventEndDate = date('d/m/Y', $eventEndDate);

											$eventEndTime = strtotime($rows3['evt_end']);
											$eventEndTime = date('H:i', $eventEndTime);
				    					

				    					?>
				    					<?php
			    							if ($todayDate === $eventStartDate) 
			    							{
			    						?>
			    								<h4>Aujourd'hui à <?= $rows3['eventStartTime'] ?></h4> 	 
			    						<?php
			    							}

			    							else
			    							{
			    						?>		
			    								<h4>Le <?= $eventStartDate ?> <br> De <?= $eventStartTime ?> jusqu'à <?= $eventEndTime ?></h4>
			    						<?php
			    						   	}
										?>		
											<h5 style="color:limegreen;"><u>Avec</u></h5>
											<h6><?= $rows3['evt_text'] ?></h6>
				    				</center>
				    			</div>
				    			<br>
					<?php
							}
						}

						else
						{
					?>
						    <center>
						    	<br><br><br><br><br><br>
						    	<h4>Vous n'avez aucun rendez-vous</h4>
						    </center>
						<?php
						}
					?>
					

			    	<!--<div id="forthSubBlocTwo" style="background: whitesmoke; pointer-events: none; opacity: 1;">
			    		<center><h3>Coming Soon !</h3></center>
			    	</div>-->
				</div>

				<div id="fifthBloc">
					
					<div id="fifthSubBlocOne" onclick="dashboardAppearence('dashboard')">
			    		<b id="dashboardButton"><i class="fa-solid fa-gauge"></i> Tableau de bord</b>
			    	</div>
			    	
			    	<div id="fifthSubBlocTwo" onclick="dashboardAppearence('rendezvous')">
			    		<b id="rendezVousButton"><i class="fa-solid fa-calendar-check"></i> Rendez-vous</b>
			    	</div>
			    	
			    	<div id="fifthSubBlocThree" onclick="dashboardAppearence('documents')">
			    		<b id="documentsButton"><i class="fa-solid fa-file"></i> Documents clients</b>
			    	</div>

			    	<div id="fifthSubBlocFour" onclick="dashboardAppearence('courriers')">
			    		<b id="courriersButton"><i class="fa-solid fa-envelope"></i> Messagerie</b>
			    	</div>		
				</div>

				<div id="sixthBloc">
					<div id="sixthSubBlocOne">
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
					    <!-- ----------------------------------------------- END OF THE CALENDAR ------------------------------------------------------>
			    	</div>
				</div>
				<!-- ------------------------------------------------------- MAIL BLOC ---------------------------------------------------------------->
				<div id="seventhBloc">
					<div id="seventhSubBlocOne">
						<div id="mailBloc">
							<div id="mailOptions">
								<div id="mailOptionsItem" onclick="mail('writeFunction')">
									<i id="mailOptionsItemDeco" class="fa-solid fa-pen"></i> <a id="mailOptionsItemDeco" href="#">écrire un message</a>
								</div>
								<div id="mailOptionsItem" onclick="mail('allMailFunction')">
									<i id="mailOptionsItemDeco" class="fa-solid fa-inbox"></i> <a id="mailOptionsItemDeco" href="#">boîte de réception</a>
								</div>
								<div id="mailOptionsItem" onclick="mail('archiveFunction')">
									<i id="mailOptionsItemDeco" class="fa-solid fa-box-archive"></i> <a id="mailOptionsItemDeco" href="#">messages archivées</a>
								</div>
								<div id="mailOptionsItem" onclick="mail('sentMailFunction')">
									<i id="mailOptionsItemDeco" class="fa-solid fa-inbox"></i> <a id="mailOptionsItemDeco" href="#">messages envoyés</a>
								</div>
								<div id="mailOptionsItem" onclick="mail('readFunction')">
									<i id="mailOptionsItemDeco" class="fa-solid fa-box-archive"></i> <a id="mailOptionsItemDeco" href="#">messages lus</a>
								</div>

								<div id="mailOptionsItem" onclick="mail('unreadFunction')">
									<i id="mailOptionsItemDeco" class="fa-solid fa-box-archive"></i> <a id="mailOptionsItemDeco" href="#">messages non lus</a>
								</div>
							</div>

							<form method="POST" action="../../index.php?action=sendThisMail">
								<div id="writeAmail">
									<div id="toUserDetails">
										&nbsp;envoyer à : &nbsp;&nbsp;<input id="toUserInputForm" type="text" name="sendTo" autocomplete="off">
									</div>

									<div id="mailSubject">
										&nbsp;sujet : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="mailSubjectInputForm" type="text" name="mailSubject" autocomplete="off">
									</div>

									<div id="toUserMessage">
										&nbsp;votre message : &nbsp;&nbsp;<textarea id="textArea" name="message"></textarea>
									</div>

									<div id="sendingPartButtons">
										<input type="submit" id="envoyerButton" name="envoyer" value="envoyer">
										<input type="submit" id="annulerButton" name="cancel" value="annuler">
									</div>
								</div>
							<form>

							<div id="allMail">
								<center><h2>ICI TOUS VOS MESSAGES !</h2></center>
											
								<table class="zebra"> 
									</thead>
									<thead> 
									<tr> 
									    <th style="width:15%; min-width: 15%; max-width: 15%;">From</th> 
									    <th style="width:8%; min-width: 8%; max-width: 8%;">Date</th>
									    <th style="width:20%; min-width: 20%; max-width: 20%;">Subject</th>
									    <th style="width:45%; min-width: 45%; max-width: 45%;">Message</th> 
									    <th style="width:2%; min-width: 2%; max-width: 2%;">Options</th> 
									</tr> 
									</thead> 
									<tbody> 
								<?php
									while ($rows = $getMail -> fetch()) 
									{
								?>
										
											<tr> 
											    <td><?php echo base64_decode($rows['senderMail']); ?></td> 
											    <td><?php echo $rows['mailTime'] ?></td>
											    <td><?php echo base64_decode($rows['mailTitle']); ?></td> 
											    <td  class="text"><?php echo htmlspecialchars_decode( base64_decode($rows['mailContent'])) ?></td> 
											    <td><a href="../../index.php?action=deleteThisSelectedMail&id= <?= $rows['id'] ?>" style="margin-left: 36%;"><i class="fa-solid fa-trash"></i></a></td>
											</tr>
										

								<?php
									 } 
								?>
									</tbody> 
								</table> 	
							</div>

							<div id="archiveMail">
								<center><h2>ICI TOUS VOS MESSAGES ARCHIVEE !</h2></center>
							</div>

							<div id="sentMail">
								<center><h2>ICI TOUS VOS MESSAGES ENVOYEE !</h2></center>
								<table class="zebra"> 
									</thead>
									<thead> 
									<tr> 
									    <th style="width:15%; min-width: 15%; max-width: 15%;">From</th> 
									    <th style="width:8%; min-width: 8%; max-width: 8%;">Date</th>
									    <th style="width:20%; min-width: 20%; max-width: 20%;">Subject</th>
									    <th style="width:45%; min-width: 45%; max-width: 45%;">Message</th> 
									    <th style="width:2%; min-width: 2%; max-width: 2%;">Options</th> 
									</tr> 
									</thead> 
									<tbody> 
								<?php
									while ($rows2 = $getSentMail -> fetch()) 
									{
								?>

											<tr> 
											    <td><?php echo base64_decode($rows2['receiverMail']); ?></td> 
											    <td><?php echo $rows2['mailTime'] ?></td>
											    <td><?php echo base64_decode($rows2['mailTitle']); ?></td> 
											    <td  class="text"><?php echo htmlspecialchars_decode( base64_decode($rows2['mailContent'])) ?></td> 
											    <td><a href="../../index.php?action=deleteThisSelectedMail&id= <?= $rows2['id'] ?>" style="margin-left: 36%;"><i class="fa-solid fa-trash"></i></a></td>
											</tr> 

								<?php
									 }
								?>
									</tbody> 
								</table> 	
							</div>

							<div id="readMail">
								<center><h2>ICI TOUS VOS MESSAGES LU !</h2></center>
							</div>

							<div id="unreadMail">
								<center><h2>ICI TOUS VOS MESSAGES NON LU !</h2></center>
							</div>
						</div>
					</div>
				</div>
				<!-- --------------------------------------------------------- DOCUMENT BLOC ------------------------------------------ -->
				<div id="documentsBloc">
					<center><u><h2>Documents Clients</h2></u></center>
					<input type="text" id="mySearchBox" onkeyup="myFunction()" placeholder="Rechercher un client...">
						<table class="zebra"> 
							</thead>
							<thead> 
							<tr>
							    <th>Nom</th>
							    <th>Prenom</th> 
							    <th>Date De Naissance</th>
							    <th>Addresse mail</th>
							    <th>Téléphone</th>
							    <th>Addresse domicile</th> 
							    <th>Ville</th>
							    <th>Code Postale</th>
							    <th>Action</th>
							     

							</tr> 
							</thead> 
							<tbody id="myTable"> 
						<?php
								if ($numberOfResults == 0) 
								{
						?>
										<td>Vide</td>
										<td>Vide</td>
										<td>Vide</td>
										<td>Vide</td>
										<td>Vide</td>
										<td>Vide</td>
										<td>Vide</td>
										<td>Vide</td>
										<td>Vide</td>
						<?php
								}

								else
								{
									while ($rows5 = $getMyClientData2 -> fetch())
									{
										$clientId = $rows5['clientId'];

										
										$getClientDetailsByThisConnectionDetails = $db -> prepare('SELECT * FROM user_client WHERE id = ?');
										$getClientDetailsByThisConnectionDetails -> execute(array($clientId));
										
										while ($rows6 = $getClientDetailsByThisConnectionDetails-> fetch()) 
										{
											$clientDateOfBirth = strtotime($rows6['dob']);
											$clientDateOfBirth = date("d-m-Y" , $clientDateOfBirth);
						?>
											<tr> 
												<td><?= strtoupper(base64_decode($rows6['lastname'])) ?></td>  
											    <td><?= ucfirst(base64_decode($rows6['firstname'])) ?></td>
											    <td><?= $clientDateOfBirth ?></td>  
											    <td><?= base64_decode($rows6['email']) ?></td>
											    <td><?= base64_decode($rows6['phoneNumber']) ?></td>
												<td><?= base64_decode($rows6['roadNumber']) . " " . base64_decode($rows6['roadName']) ?></td> 
												<td><?= base64_decode($rows6['city']) ?></td>
												<td><?= base64_decode($rows6['postalCode']) ?></td>
												<td><a href="../../index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk<?= $rows6['id'] ?>gfjkhfgdfg546dfg54bhk5546465"><i class="fa fa-solid fa-eye"></i></a></td>
											</tr>
						<?php
										}
									}
							 	} 
						?>
							</tbody> 
						</table> 
				</div>
				<!-- ------------------------------------------------------- END DOCUMENT BLOC ------------------------------------------ -->
			</div>
				<script type="text/javascript" src="main.js"></script>
				<script type="text/javascript" src="mailMain.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:../../index.php");
	}


?>