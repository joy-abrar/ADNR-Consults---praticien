	<?php
	$host_name = 'localhost'; 
	$database = 'projet1';
	$user_name = 'root'; 
	$password = ''; 
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

	$getMail = $db -> prepare('SELECT * FROM mails WHERE receiverMail = ? ORDER BY mailTime DESC');
	$getMail ->execute(array($_SESSION['userName']));

	$getSentMail = $db -> prepare('SELECT * FROM mails WHERE senderMail = ? ORDER BY mailTime DESC');
	$getSentMail ->execute(array($_SESSION['userName']));

	/*
	$documents = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientFor = ?');
	$documents -> execute(array($_SESSION['userId']));
	$numberOfResults = $documents -> rowCount();
	*/

	/* -------------------------- NEWLY ADDED ----------------------------------- */
	$userId = $_SESSION['userId'];
	$getMyClientData2 = $db -> prepare('SELECT * FROM myconnections WHERE praticienId = ?');
	$getMyClientData2 -> execute(array($userId));
	$numberOfResults = $getMyClientData2 -> rowCount();


	/* -------------------------- END NEWLY ADDED ----------------------------------- */


	$currentDateTime = date("Y-m-d H:i-s");
	$nextAppointments = $db -> prepare('SELECT * FROM events WHERE evt_start > ? AND praticienId = ? ORDER BY evt_start ASC LIMIT 2');
	$nextAppointments -> execute(array($currentDateTime, $_SESSION['userId']));

	$numberOfResults2 = $nextAppointments -> rowCount();

  	$expiryDate = $_SESSION['expiryDate'];
  	$date = new DateTime($expiryDate);
		$expiryDate = $date->format('d-m-Y');
  	$_SESSION['expiryDateToCorrectFormat'] = $expiryDate;

  	$today = time(); // or your date as well
	$dateToCalculate = strtotime($_SESSION['expiryDate']);
	$datediff = $dateToCalculate - $today;
	$timeRemaining = round($datediff / (60 * 60 * 24));
	$_SESSION['timeRemaining'] = $timeRemaining;
?>