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
			<link rel="stylesheet" type="text/css" href="view/documents/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/documents/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">			
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="view/documents/main2.js"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>Tableau De Bord</title>
	</head>
	<body id="setFont">

		<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>
		<!----------------------------------------->


			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>


		<center><u><h2>Documents</h2></u></center>
		<input type="text" id="mySearchBox" onkeyup="myFunction()" placeholder="Rechercher un client...">
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
				<tbody id="myTable"> 

			<!-------------------------------------------- GET CLIENT DOCUMENTS FROM mypatientlist TABLE -------------------------------------------- -->
			<?php
				while ($rows = $getMyClientData -> fetch()) 
				{
					$myClientId = $rows['id'];
					/* --------- Query WITH ClientId FROM mapatientlist TO DOCUMENTS FOR RESULTS -------------- */
					$getThisClientDocuments = $userManager -> getThisClientDocuments($myClientId);
					$numberOfResults2 = $getThisClientDocuments -> rowCount();
					
					while ($rows2 = $getThisClientDocuments -> fetch())
					{	
						$clientDateOfBirth = strtotime($rows['clientDateOfBirth']);
						$clientDateOfBirth = date("d-m-Y" , $clientDateOfBirth); 
			?>
						<tr> 
							<td><?= base64_decode($rows['clientFirstName'])  ?></td>
							<td><?= ucfirst(base64_decode($rows['clientLastName'])) ?></td>  
						    <td><?= $clientDateOfBirth ?></td>  
						    <td><?= $rows2['documentName'] ?></td>
						    <td><?= $rows2['publishedOn'] ?></td>
							<td><a target="_blank" href="<?= $rows2['paths'] ?>"><i style="color:blue" class="fa fa-solid fa-file"></a></td>
						</tr>
			<?php
					}
					/* --------- END Query WITH ClientId FROM mapatientlist TO DOCUMENTS FOR RESULTS----------- */
				}
			/*-------------------------------------------- END CLIENT ALL OTHER DOCUMENTS FROM documents TABLE ----------------------------------------------*/

			/* --------------------- CLIENT NATURO DOCUMENTS (PUBLISHED BY PRATICIEN AND CAN BE MODIFIED BY PRATICIEN) FROM naturosheet ---------------------*/
				/* ---- query by praticienId ----------- */
				while ($rows3 = $getNaturoDocuments -> fetch())  
				{
					$clientId = $rows3['bilanFor'];
					$getClientInformationsForNaturoSheetDocuments = $userManager -> getClientInformationsForNaturoSheetDocuments($clientId);

					while($rows4 = $getClientInformationsForNaturoSheetDocuments -> fetch())
					{
						$clientDateOfBirth = strtotime($rows4['dob']);
						$clientDateOfBirth = date("d-m-Y" , $clientDateOfBirth); 

						/* ----------------- DATA DECRYPTAGE -------------*/
							$rows3['convertedData'] = $rows3['data'];
							$rows3['convertedData'] = substr_replace($rows3['convertedData'],"",31, 1);
						/* ----------------- END DATA DECRYPTAGE -------------*/
			?>
						<tr> 
							<td><?= base64_decode($rows4['firstname'])  ?></td>
							<td><?= ucfirst(base64_decode($rows4['lastname'])) ?></td>  
						    <td><?= $clientDateOfBirth ?></td>  
						    <td><?= $rows3['bilanName'] ?></td>
						    <td><?= $rows3['publishedOn'] ?></td>
						    <td><b onclick="debugBase64('<?= $rows3['convertedData']?>')" ><i style="color:blue" class="fa fa-solid fa-file"></i></b></td>
						</tr>
			<?php
					}

					$getClientInformationsForNaturoSheetDocuments2 = $userManager -> getClientInformationsForNaturoSheetDocuments2($clientId);
					while($rows5 = $getClientInformationsForNaturoSheetDocuments2 -> fetch())
					{
						$clientId = $rows5['id'];
						$getClientInformationsForNaturoSheetDocuments3 = $userManager -> getClientInformationsForNaturoSheetDocuments3($clientId);
						
						while($rows6 = $getClientInformationsForNaturoSheetDocuments3-> fetch())
						{	
							$clientDateOfBirth = strtotime($rows4['dob']);
							$clientDateOfBirth = date("d-m-Y" , $clientDateOfBirth); 
							/* ----------------- DATA DECRYPTAGE -------------*/
								$rows6['convertedData'] = $rows6['data'];
								$rows6['convertedData'] = substr_replace($rows6['convertedData'],"",31, 1);
							/* ----------------- END DATA DECRYPTAGE -------------*/
			?>
							<tr> 
								<td><?= base64_decode($rows5['clientFirstName'])  ?></td>
								<td><?= ucfirst(base64_decode($rows5['clientLastName'])) ?></td>  
						    	<td><?= $clientDateOfBirth ?></td>  
						    	<td><?= $rows6['bilanName'] ?></td>
						    	<td><?= $rows6['publishedOn'] ?></td>
								<td><b onclick="debugBase64('<?= $rows6['convertedData']?>')" ><i style="color:blue" class="fa fa-solid fa-file"></i></b></td>
							</tr>
			<?php
						}
					}
				}
				/* ---- query by praticienId ----------- */
				/* --------------------- END CLIENT NATURO DOCUMENTS (PUBLISHED BY PRATICIEN AND CAN BE MODIFIED BY PRATICIEN) FROM naturosheet ---------------------*/

				/* ---------------------------------------- ALL OTHER DOCUMENTS WHERE documentFOR IS FOR PRATICIEN --------------------------------------*/
				$getFromAllRestDocuments = $userManager -> getFromAllRestDocuments($userId);
				while ($rows7 = $getFromAllRestDocuments -> fetch()) 
				{ 
					$clientId = $rows7['myClientId'];
					$getUserInfos = $userManager -> getUserInfos($clientId);
					
					while ($rows8 = $getUserInfos -> fetch()) 
					{
							$clientDateOfBirth = strtotime($rows8['dob']);
							$clientDateOfBirth = date("d-m-Y" , $clientDateOfBirth);
			
			?>
							<tr> 
								<td><?= base64_decode($rows8['firstname']) ?></td>
								<td><?= base64_decode($rows8['lastname']) ?></td>
								<td><?= $clientDateOfBirth ?></td>
			<?php
					//}
			?>
								<td><?= $rows7['documentName']  ?></td>
								<td><?= $rows7['publishedOn'] ?></td>
								<td><a href="<?= $rows7['paths'] ?>"><i style="color:blue" class="fa fa-solid fa-file"></i></a></td>  
							</tr>
			<?php
					}
				}
			
			/*--------------------------------------- END ALL OTHER DOCUMENTS WHERE documentFOR IS FOR PRATICIEN -------------------------------------- --*/


			/*---------------------------------------------------- SHARED DOCUMENTS BY PATIENTS -------------------------------------------------------- --*/

			while ($usersWhoShared = $getSharedDocuments -> fetch()) 
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
			<!------------------------------------------------- END SHARED DOCUMENTS BY PATIENTS ------------------------------------------------------ -->

				</tbody> 
			</table> 
		
		</div>

		<div id="returnButtonBloc">
			<a id="returnFunction" href="index.php">Revenir</a>
		</div>

		<script type="text/javascript" src="view/documents/main.js"></script>
	</body>
</html>

<?php
}
else
{
	header("location: index.php");
}
?>