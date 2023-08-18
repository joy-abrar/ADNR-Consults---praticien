	<?php
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