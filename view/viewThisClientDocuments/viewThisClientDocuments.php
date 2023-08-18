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
			<link rel="stylesheet" type="text/css" href="view/viewThisClientDocuments/style.css?version=1.0">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/viewThisClientDocuments/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">			
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="view/viewThisClientDocuments/main2.js"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<!------- END LOADING SCREEN ------- -->
			<title>ADNR Consults - Ajouter/consulter les documents</title>
	</head>
	<body id="setFont">

		<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
		<!----------------------------------------->	

			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

		<h2 id="blocTitle">Documents de vos clients</h2>
		<input type="text" id="mySearchBox" onkeyup="myFunction()" placeholder="Rechercher un client...">
		<div id="addDocumentButton">
			<a href="#" id="addANewDocument">+ Ajouter un document</a>
		</div>
		<!-- ----------------------ADD A NEW DOCUMENT FORM------------ -->
		<div id="myModal" class="modal">
				<div class="modal-content">
				    <div class="modal-header">
				      <center><h2>Ajouter un nouveau document</h2></center>
				      <span class="close">&times;</span>
				    </div>
				    <div class="modal-body">
				    	<center>
				    		<br>
					    	<form method="POST" action="index.php?action=addThisFileForMyClient&myClientId=<?=$myClientId?>" enctype="multipart/form-data">
						    	<input id="clientDeletingConfirmButton" type="file" value="Oui" name="file">
						      	<input id="clientAddDocumentConfirmButton" type="submit" value="Ajouter" name="denied">
					      		<br><br>
					      	</form>
				      	</center>
						
				    </div>
				    <div class="modal-footer">
					    	<br><br>
					</div>
				</div>
			</div>
			<!-- ---------------------- END ADD A NEW DOCUMENT FORM ------------ -->

		<div id="dashboardMenuOptions">
			<table class="zebra" style="color:#58b3a2"> 
				</thead>
				<thead> 
				<tr> 
				    <th>Nom du document</th>
				    <th>Ajouté le</th>
				    <th>Voir</th>
				    <th>Supprimer</th>
				    <th>Télécharger</th> 
				     

				</tr> 
				</thead> 
				<tbody id="myTable"> 
			<?php
				
					if ($numberOfResults == 0) 
					{
			?>
							<!--<td>Vide</td>
							<td>Vide</td>
							<td>Vide</td>
							<td>Vide</td>
							<td>Vide</td>-->

			<?php
					}

					else
					{
						while ($rows = $viewThisClientDocuments -> fetch() ) 
						{
			?>
							<tr>
								<td><span style="color:blue"><?= $rows['documentName'] ?></span></td>
								<td><?= $rows['publishedOn'] ?></td>  
								<td><a target="_blank" href="<?= $rows['paths'] ?>"><i style="color:blue" class="fa fa-solid fa-file"></i></a></td>
								<td><a href="index.php?action=deleteThisDocumentFromMyClientFolder&filePath=<?=$rows['paths']?>&id=<?=$rows['id']?>"><i style="color:red" class="fa fa-solid fa-trash-can"></i></a></td>
								<td><a href="<?= $rows['paths'] ?>" download><i style="color:limegreen" class="fa fa-solid fa-download"></i></a></td>
							</tr>
			<?php
						}
				 	} 

				 	while ($rows2 = $viewThisClientDocuments2 -> fetch() ) 
					{
								/* ------ removing specific character ----- */
							    $rows2['convertedData'] = $rows2['data'];
								$rows2['convertedData'] = substr_replace($rows2['convertedData'],"",31, 1);
								/* ----- end removing specific character ----- */
			?>				
						<tr>
							<td><span style="color:blue"><?= $rows2['bilanName'] ?></span></td>
							<td><?= $rows2['publishedOn'] ?></td>
							<td><b onclick="debugBase64('<?= $rows2['convertedData']?>')" ><i style="color:blue" class="fa fa-solid fa-file"></i></b></td>
							<!--<td><a href="<?= $rows2['data'] ?>"><i style="color:blue" class="fa fa-solid fa-file"></i></a></td>-->
							<td><a href="index.php?action=deleteThisBilanFromMyClientFolder&id=<?=$rows2['id']?>&clientId=<?= $myClientId ?>"><i style="color:red" class="fa fa-solid fa-trash-can"></i></a></td>
							<td><a href="<?= $rows2['convertedData'] ?>" download="<?= $rows2['bilanName'] ?>"><i style="color:limegreen" class="fa fa-solid fa-download"></i></a></td>
						</tr>
			<?php
					}

					while ($rows3 = $viewThisClientDocuments3 -> fetch() ) 
					{
								/* ------ removing specific character ----- */
							    
							    $rows3['convertedData'] = $rows3['dnsTest'];
								$rows3['dnsTest'] = substr_replace($rows3['convertedData'],"",31, 1);
								
								/* ----- end removing specific character ----- */
			?>				
						<tr>
							<td><span style="color:blue"><?= $rows3['testName'] ?></span></td>
							<td><?= $rows3['date'] ?></td>
							<td><b onclick="debugBase64('<?= $rows3['dnsTest']?>')" ><i style="color:blue" class="fa fa-solid fa-file"></i></b></td>
							<td><a href="index.php?action=deleteThisTestDnsFromMyClientFolder&id=<?= $rows3['id'] ?>&clientId=<?= $myClientId ?>"><i style="color:red" class="fa fa-solid fa-trash-can"></i></a></td>
							<td><a href="<?= $rows3['dnsTest'] ?>" download="<?= $rows3['testName'] ?>"><i style="color:limegreen" class="fa fa-solid fa-download"></i></a></td>
						</tr>
			<?php
					}

					while ($rows4 = $viewThisClientDocuments4 -> fetch() ) 
					{
								/* ------ removing specific character ----- */
							    $rows4['convertedData'] = $rows4['data'];
								$rows4['convertedData'] = substr_replace($rows4['convertedData'],"",31, 1);
								/* ----- end removing specific character ----- */
			?>				

						<tr>
							<td><span style="color:blue"><?= $rows4['bilanName'] ?></span></td>
							<td><?= $rows4['publishedOn'] ?></td>
							<td><b onclick="debugBase64('<?= $rows4['convertedData']?>')" ><i style="color:blue" class="fa fa-solid fa-file"></i></b></td>
							<!--<td><a href="<?= $rows4['data'] ?>"><i style="color:blue" class="fa fa-solid fa-file"></i></a></td>-->
							<td><a href="index.php?action=deleteThisFleursBilanFromMyClientFolder&id=<?=$rows4['id']?>&clientId=<?= $myClientId ?>"><i style="color:red" class="fa fa-solid fa-trash-can"></i></a></td>
							<td><a href="<?= $rows4['convertedData'] ?>" download="<?= $rows4['bilanName'] ?>"><i style="color:limegreen" class="fa fa-solid fa-download"></i></a></td>
						</tr>
			<?php
					}

					while ($rows5 = $viewThisClientDocuments5 -> fetch() ) 
					{
								/* ------ removing specific character ----- */
							    
							    $rows5['convertedData'] = $rows5['gdsTest'];
								$rows5['gdsTest'] = substr_replace($rows5['convertedData'],"",31, 1);
								
								/* ----- end removing specific character ----- */
			?>				
						<tr>
							<td><span style="color:blue"><?= $rows5['testName'] ?></span></td>
							<td><?= $rows5['date'] ?></td>
							<td><b onclick="debugBase64('<?= $rows5['gdsTest']?>')" ><i style="color:blue" class="fa fa-solid fa-file"></i></b></td>
							<!--<td><a href="<?= $rows5['data'] ?>"><i style="color:blue" class="fa fa-solid fa-file"></i></a></td>-->
							<td><a href="index.php?action=deleteThisTestGdsFromMyClientFolder&id=<?=$rows5['id']?>&clientId=<?= $myClientId ?>"><i style="color:red" class="fa fa-solid fa-trash-can"></i></a></td>
							<td><a href="<?= $rows5['gdsTest'] ?>" download="<?= $rows5['testName'] ?>"><i style="color:limegreen" class="fa fa-solid fa-download"></i></a></td>
						</tr>
			<?php
					}

					while ($rows6 = $viewThisClientDocuments6 -> fetch() ) 
					{
								/* ------ removing specific character ----- */
							    
							    $rows6['convertedData'] = $rows6['gdseTest'];
								$rows6['gdseTest'] = substr_replace($rows6['convertedData'],"",31, 1);
								
								/* ----- end removing specific character ----- */
			?>				
						<tr>
							<td><span style="color:blue"><?= $rows6['testName'] ?></span></td>
							<td><?= $rows6['date'] ?></td>
							<td><b onclick="debugBase64('<?= $rows6['gdseTest']?>')" ><i style="color:blue" class="fa fa-solid fa-file"></i></b></td>
							<!--<td><a href="<?= $rows5['data'] ?>"><i style="color:blue" class="fa fa-solid fa-file"></i></a></td>-->
							<td><a href="index.php?action=deleteThisTestGdseFromMyClientFolder&id=<?=$rows6['id']?>&clientId=<?= $myClientId ?>"><i style="color:red" class="fa fa-solid fa-trash-can"></i></a></td>
							<td><a href="<?= $rows6['gdseTest'] ?>" download="<?= $rows6['testName'] ?>"><i style="color:limegreen" class="fa fa-solid fa-download"></i></a></td>
						</tr>
			<?php
					}

					while ($rows7 = $viewThisClientDocuments7 -> fetch() ) 
					{
								/* ------ removing specific character ----- */
							    
							    $rows7['convertedData'] = $rows7['data'];
								$rows7['data'] = substr_replace($rows7['convertedData'],"",31, 1);
								
								/* ----- end removing specific character ----- */
			?>				
						<tr>
							<td><span style="color:blue"><?= $rows7['phvName'] ?></span></td>
							<td><?= $rows7['publishedOn'] ?></td>
							<td><b onclick="debugBase64('<?= $rows7['data']?>')" ><i style="color:blue" class="fa fa-solid fa-file"></i></b></td>
							<!--<td><a href="<?= $rows7['data'] ?>"><i style="color:blue" class="fa fa-solid fa-file"></i></a></td>-->
							<td><a href="index.php?action=deleteThisPhvDocumentFromMyClientFolder&id=<?=$rows7['id']?>&clientId=<?= $myClientId ?>"><i style="color:red" class="fa fa-solid fa-trash-can"></i></a></td>
							<td><a href="<?= $rows7['data'] ?>" download="<?= $rows7['phvName'] ?>"><i style="color:limegreen" class="fa fa-solid fa-download"></i></a></td>
						</tr>
			<?php
					}

			?>
				</tbody> 
			</table> 
		
		</div>



		<!-- ------------------------------------ DOCUMENT DU TEST BILAN DETAILLES CLIENTS (new experiment added ) --------------------------------------- -->
			<br><br>
			<h2 id="blocTitle">Documents du test bilan détaillés</h2>
			<input type="text" id="mySearchBox2" onkeyup="myFunction2()" placeholder="Rechercher un client...">
			<div id="dashboardMenuOptions">

				<table class="zebra" style="color:#58b3a2"> 
					</thead>
					<thead> 
					<tr> 
					    <th>Nom du document</th> 
					    <th>Crée le</th> 
					    <th>Consulter</th>
					    <th>Action</th>
					    <th>Statue</th>
					     

					</tr> 
					</thead> 
					<tbody id="myTable2"> 


				<?php
					if ($numberOfResults8 > 0) 
					{
					
						while ($rows8 = $viewThisClientDocuments8 -> fetch() ) 
						{
				?>
							<tr>
								<td style="color:blue"><?= $rows8['testName'] ?></td>
								<td> <span style="font-weight:bold; color: #58b3a2;"><?= $rows8['createdOn'] ?></span></td>
								<td>
									<?php 
										if ($rows8['bilanStatus'] == "submittedByClient") 
										{
									?>
											<a href="index.php?action=importThisBilanTwoAnswersSubmittedByClient&clientId=<?= $myClientId ?>&questionSheetId=<?= $rows8['id'] ?>" target="_blank" style="text-decoration: none;color:#4adb69;">Voir</a>
									<?php	 
										}

										if ($rows8['bilanStatus'] == "notSubmittedByClient") 
										{
									?>
											<span style="color:#c5c551; font-weight: bold;">En attente de réalisation</span>
									<?php	 
										}
									?>
								</td>
								<td><a href="#"><i style="color:red" class="fa fa-solid fa-trash-can"></i></a></td>
								<td><?php 
										if ($rows8['bilanStatus'] == "notSubmittedByClient") 
										{
									?>
											<span style="color: red; font-weight:bold;">Non réalisé</span>
									<?php	 
										}

										if ($rows8['bilanStatus'] == "submittedByClient") 
										{
									?>
											<span style="font-weight: bold; color: green;">Réalisé</span>
									<?php	 
										}
									?>
							</tr>
				<?php
						}
					}

					else
					{
				?>
						<tr>
							<td>Vide</td>
							<td>Vide</td>
							<td>Vide</td>
							<td>Vide</td>
							<td>Vide</td>
						</tr>
				<?php
					}
				?>

					</tbody> 
				</table> 
			</div>

			<!-- ------------------------------------ END DOCUMENTS DU TEST BILAN DETAILLES CLIENT --------------------------------------- -->




		<!-- ------------------------------------ SHARED DOCUMENTS (new experiment added ) --------------------------------------- -->
			<br><br>
			<h2 id="blocTitle">Documents partagés par client</h2>
			<input type="text" id="mySearchBox2" onkeyup="myFunction2()" placeholder="Rechercher un client...">
			<div id="dashboardMenuOptions">

				<table class="zebra"> 
					</thead>
					<thead> 
					<tr> 
					    <th>Nom</th> 
					    <th>Prenom</th> 
					    <th>Date De Naissance</th>
					    <th>Nom du document</th>
					    <th>Partagé le</th>
					    <th>Action</th>
					     

					</tr> 
					</thead> 
					<tbody id="myTable2"> 


				<?php
					/*---------------------- SHARED DOCUMENTS BY PATIENTS ----------- --*/
					while ($usersWhoShared = $getSharedDocumentsFromThisClient -> fetch()) 
					{
						$clientWhoSharedId = $usersWhoShared['shareFrom'];
						$documentId = $usersWhoShared['documentId'];
						
						$getClientDetailsWhoShared = $userManager -> getClientDetailsWhoShared($clientWhoSharedId);
						while($clientWhoSharedDetails = $getClientDetailsWhoShared -> fetch())
						{
							$clientDateOfBirth = strtotime($clientWhoSharedDetails['dob']);
							$clientDateOfBirth = date("d-m-Y" , $clientDateOfBirth);
							
							$getSharedDocumentsNow = $userManager -> getSharedDocumentsNow($documentId);

							while ($documentData = $getSharedDocumentsNow -> fetch()) 
							{
					?>			
								<tr> 
										<td><?= base64_decode($clientWhoSharedDetails['firstname']) ?></td>
										<td><?= base64_decode($clientWhoSharedDetails['lastname']) ?></td>
										<td><?= $clientDateOfBirth ?></td>
										<td><a href="../client/<?=$documentData['paths']?>"><?= $documentData['documentName'] ?></a></td>
										<td><?= $usersWhoShared['shareOn'] ?></td>
										<td><a href="../client/<?=$documentData['paths']?>" download><i class="fa-solid fa-download"></i></a></td>
								</tr>
					<?php
							}
						}

					}
					?>
					<!-----------------END SHARED DOCUMENTS BY PATIENTS ------------ -->

					</tbody> 
				</table> 
			
			</div>

			<!-- ------------------------------------ END SHARED DOCUMENTS (new experiment added ) --------------------------------------- -->



		<div id="returnButtonBloc">
			<a id="returnFunction" href="index.php?action=files">Revenir</a>
		</div>
		<script type="text/javascript" src="view/viewThisClientDocuments/main.js"></script>
	</body>
</html>

<?php
}
else
{
	header("location: index.php");
}
?>