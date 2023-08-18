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
			<link rel="stylesheet" type="text/css" href="view/personalRepositoryDocuments/style.css?version=1">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css?version=1">
			<link rel="icon" type="image/png" href="view/personalRepositoryDocuments/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">			
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="view/personalRepositoryDocuments/main2.js"></script>
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

		<center><u><h2>Documents du répertoire personnel</h2></u></center>
		<input type="text" id="mySearchBox" onkeyup="myFunction()" placeholder="Rechercher un client...">
		<div id="addDocumentButton">
			<a id="addANewDocument">+ Ajouter un document</a>
		</div>
		<!-- ----------------------ADD A NEW DOCUMENT FORM------------ -->
		<div id="myModal" class="modal">
				<div class="modal-content">
				    <div class="modal-header">
				      <span class="close">&times;</span>
				      <center><h2>Ajouter un nouveau document</h2></center>
				    </div>
				    <div class="modal-body">
				    	<center>
				    		<br>
					    	<form method="POST" action="index.php?action=addThisFileForMyPersonalFolder&myFolderId=<?=$myRepositoryId?>" enctype="multipart/form-data">
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

			<table class="zebra"> 
				</thead>
				<thead> 
				<tr> 
				    <th>Nom</th> 
				    <th>Prenom</th> 
				    <th>Date De Naissance</th>
				    <th>Nom du document</th>
				    <th>Publié le</th>
				    <th>Voir</th>
				    <th>Supprimer</th>
				    <th>Télécharger</th>
				     

				</tr> 
				</thead> 
				<tbody id="myTable"> 

			<?php
			while ($rows = $getPersonalRepositoryDocuments -> fetch()) 
			{	
				$getPersonalRepositoryDocuments2 = $userManager -> getPersonalRepositoryDocuments2($myRepositoryId, $myId);
				$numberOfResults2 = $getPersonalRepositoryDocuments2 -> rowCount();
				
				while ($rows2 = $getPersonalRepositoryDocuments2 -> fetch())
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
						<td><a href="index.php?action=deleteThisDocumentFromMyPersonalFolder&filePath=<?=$rows2['paths']?>&id=<?=$rows2['id']?>&personalFolderId=<?=$rows['id'] ?>"><i style="color:red" class="fa fa-solid fa-trash-can"></i></a></td>
						<td><a href="<?= $rows2['paths'] ?>" download><i style="color:limegreen" class="fa fa-solid fa-download"></i></a></td>
					</tr>
			<?php
				}
			}

			?>

				</tbody> 
			</table> 
		
		</div>

		<div id="returnButtonBloc">
			<a id="returnFunction" href="index.php?action=personalRepositories">Revenir</a>
		</div>

		<script type="text/javascript" src="view/personalRepositoryDocuments/main.js"></script>
	</body>
</html>

<?php
}
else
{
	header("location: index.php");
}
?>