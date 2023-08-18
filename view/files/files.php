
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
			<link rel="stylesheet" type="text/css" href="view/files/style.css?version=1">
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
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
		<h2 id="testTitle">AJOUTER/CONSULTER DOCUMENTS CLIENTS</h2>
		<input type="text" id="mySearchBox" onkeyup="myFunction()" placeholder="Rechercher un client...">
		<div id="dashboardMenuOptions">
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
					while ($rows2 = $getMyClientData2 -> fetch())
					{
						$clientId = $rows2['clientId'];

						$getClientDetailsByThisConnectionDetails = $userManager -> getClientDetailsByThisConnectionDetails($clientId);

						while ($rows3 = $getClientDetailsByThisConnectionDetails-> fetch()) 
						{
							$clientDateOfBirth = strtotime($rows3['dob']);
							$clientDateOfBirth = date("d-m-Y" , $clientDateOfBirth);
		?>
							<tr> 
								<td><?= strtoupper(base64_decode($rows3['lastname'])) ?></td>  
							    <td><?= ucfirst(base64_decode($rows3['firstname'])) ?></td>
							    <td><?= $clientDateOfBirth ?></td>  
							    <td><?= base64_decode($rows3['email']) ?></td>
							    <td><?= base64_decode($rows3['phoneNumber']) ?></td>
								<td><?= base64_decode($rows3['roadNumber']) . " " . base64_decode($rows3['roadName']) ?></td> 
								<td><?= base64_decode($rows3['city']) ?></td>
								<td><?= base64_decode($rows3['postalCode']) ?></td>
								<td><a href="index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk<?= $rows3['id'] ?>gfjkhfgdfg546dfg54bhk5546465"><i class="fa fa-solid fa-eye"></i></a></td>
							</tr>
		<?php
						}
					}
	
		?>
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