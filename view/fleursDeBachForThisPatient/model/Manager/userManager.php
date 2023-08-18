<?php
	
	require('Manager.php');

	class userManager extends Manager
	{

		public function createAccount($email, $username, $password, $dob)
		{
			$db = $this->dbConnect();
			$createAccount = $db -> prepare('INSERT INTO users(email, username, password, dob) VALUES(?, ?, ?, ?) ');
			$createAccount ->execute(array($email, $username, $password, $dob));
			return $createAccount;
		}

		public function missmatchedPassword()
		{
			header("location:index.php?action=wrongPassword");
		}

		public function login($username, $password)
		{
			$db = $this->dbConnect();
			$loginAccount = $db -> prepare('SELECT * FROM users WHERE username = ? AND password = ? ');
			$loginAccount ->execute(array($username, $password));
			
			$rows = $loginAccount->fetch(PDO::FETCH_ASSOC);				

			/*
				while($rows = $loginAccount -> fetch())
				{
				}
			*/
			
			$fromDatabaseId = $rows['id'];
			$fromDatabaseUsername = $rows['username'];
			$fromDatabasePassword = $rows['password'];
			

			if ($loginAccount) 
			{
				if ($username == $fromDatabaseUsername && $password == $fromDatabasePassword) 
				{
					
					session_start();
					$_SESSION['sessionStatus'] = "online" ;
					$_SESSION['userId'] = $fromDatabaseId;
					$_SESSION['userName'] = $fromDatabaseUsername;
					$_SESSION['userPassword'] = $fromDatabasePassword;
					
					header('location:view/dashboard/dashboard.php');
				
				}
				
			
				else
				{
					header("location view/index.php");
				}
			}			

		}



		public function forgetPassword()
		{
			header("location: view/forgetPassword/forgetPassword.php");
		}


		public function logout()
		{
			session_start();
			$_SESSION['sessionStatus'] == "offline" ;
			$_SESSION['userId'] = null;
			$_SESSION['userName'] = null;
			$_SESSION['userPassword'] = null;
			session_unset();
			header("location: view/index.php");

		}

		public function nowLogOut()
		{
			session_start();
			$_SESSION['sessionStatus'] == "offline" ;
			$_SESSION['userId'] = null;
			$_SESSION['userName'] = null;
			$_SESSION['userPassword'] = null;
			session_unset();
			header("location: index.php");
		}

		public function goBack()
		{
			header("location: view/index.php");

		}







		public function test($username, $password)
		{
			$db = $this->dbConnect();
			$check = $db -> prepare('INSERT INTO users(username, password) VALUES(?, ?) ');
			$check ->execute(array($username, $password));
			return $check;
		}

		public function emailCheck($email)
		{
			$db = $this->dbConnect();
			$check = $db -> prepare('SELECT email FROM users WHERE email = ?');
			$check ->execute(array($email));
			return $check;
		}



		
		public function insert_Questions()
		{
			$question = "question";
			$reponse = "reponse";

			$db = $this->dbConnect();
			$insert = $db -> prepare('INSERT INTO flowers(flowerName) VALUES(?) ');
			$insert ->execute(array($question));
			return $insert;
		}
		

		
		public function get_Questions()
		{

			$db = $this->dbConnect();
			$getQuestions = $db -> prepare('SELECT *FROM questionnaire1');
			$getQuestions ->execute(array());
			return $getQuestions;
		}
		

		public function questions1()
		{

			$db = $this->dbConnect();
			$getQuestions1 = $db -> prepare('SELECT *FROM questionnaire1');
			$getQuestions1 ->execute(array());
			return $getQuestions1;
		}

		public function resetDefault($tableName)
		{
			$oui = 0;
			$non = 0;
			
			$db = $this->dbConnect();
			$resetDefault = $db -> prepare("UPDATE flowers_".$tableName." SET oui = ?, non = ?");
			$resetDefault ->execute(array($oui, $non));
			return $resetDefault;
		}



		public function createTableIntoDb($userId)
		{
			$db = $this->dbConnect();
			$createFlowerTable = $db -> prepare('CREATE TABLE IF NOT EXISTS flowers_' . $userId .  ' SELECT * FROM flowers');
			$createFlowerTable -> execute(array());

			$createDescriptionTable = $db -> prepare('CREATE TABLE IF NOT EXISTS groupdescription_' . $userId .  ' SELECT * FROM groupdescription');
			$createDescriptionTable -> execute(array());
		}

		public function resetExportResultDefault($userId)
		{
			$reset = "no";
			
			$db = $this->dbConnect();
			$resetDefault2 = $db -> prepare('UPDATE flowers_' . $userId . ' SET selectedForResult = ?, oui = ?, non = ?, serialNumber = ?');
			$resetDefault2 ->execute(array($reset, 0, 0, 0));
			//return $resetDefault2;

			$resetPointsValue = 0 ;
			$resetGroupPoints = $db -> prepare('UPDATE groupdescription_' . $userId . ' SET groupePoints = ?');
			$resetGroupPoints ->execute(array($resetPointsValue));
			//return $resetGroupPoints;
		}

		public function questions2()
		{

			$db = $this->dbConnect();
			$getQuestions2 = $db -> prepare('SELECT *FROM questionnaire2');
			$getQuestions2 ->execute(array());
			return $getQuestions2;
		}

		public function questions3()
		{

			$db = $this->dbConnect();
			$getQuestions3 = $db -> prepare('SELECT *FROM questionnaire3');
			$getQuestions3 ->execute(array());
			return $getQuestions3;
		}

		public function questions4()
		{

			$db = $this->dbConnect();
			$getQuestions4 = $db -> prepare('SELECT *FROM questionnaire4');
			$getQuestions4 ->execute(array());
			return $getQuestions4;
		}

		public function inputQuestionUnAnswerYes($userId, $answer, $id)
		{	
			$currentValue;
			$totalValue;
			
			$db = $this -> dbConnect();
			
			$getFlowerName = $db -> prepare('SELECT reponse FROM questionnaire1 WHERE id = ?');
			$getFlowerName -> execute(array($id));
			
			$rows = $getFlowerName->fetch(PDO::FETCH_ASSOC);
			$selectedFlower = $rows['reponse'];


			$getExistingValue = $db -> prepare('SELECT oui FROM ' . 'flowers_'. $userId . ' WHERE flowerName = ?');
			$getExistingValue -> execute(array($selectedFlower));
			$value = $getExistingValue -> fetch(PDO::FETCH_ASSOC);
			$currentValue = $value['oui'];
			$totalValue = $currentValue+1 ;


			$updateFlowersDatabase = $db -> prepare('UPDATE ' . 'flowers_' . $userId . ' SET oui = ? WHERE flowerName = ?');
			$updateFlowersDatabase -> execute(array($totalValue, $selectedFlower));

			// ------------------------ ADD POINTS FOR GROUP NUMBER ----------------------
			$getCurrentGroupPoints = $db -> prepare('SELECT groupe FROM ' .  'flowers_' . $userId . ' WHERE flowerName = ?');
			$getCurrentGroupPoints -> execute(array($selectedFlower));
			$groupe = $getCurrentGroupPoints -> fetch(PDO::FETCH_ASSOC);
			$selectedGroup = $groupe['groupe'];


			$getCurrentGroupPoints = $db -> prepare('SELECT groupePoints FROM groupdescription_' . $userId .' WHERE groupNumber = ?');
			$getCurrentGroupPoints -> execute(array($selectedGroup));
			$currentGroupPoint = $getCurrentGroupPoints -> fetch(PDO::FETCH_ASSOC);
			$takenPoints = $currentGroupPoint['groupePoints'];

			$forUpdate = $takenPoints+1;
			$updateGroupPoints = $db -> prepare('UPDATE groupdescription_' . $userId . ' SET groupePoints = ? WHERE groupNumber = ?');
			$updateGroupPoints -> execute(array($forUpdate, $selectedGroup));
			
		}


		public function inputQuestionDeuxAnswerYes($userId,$answer, $id)
		{

			$db = $this -> dbConnect();

			$getFlowerName = $db -> prepare('SELECT reponse FROM questionnaire2 WHERE id = ?');
			$getFlowerName -> execute(array($id));
			
			$rows = $getFlowerName->fetch(PDO::FETCH_ASSOC);
			$selectedFlower = $rows['reponse'];

			//echo "answer is yes for : " . $selectedFlower . "<br>";

			$getExistingValue = $db -> prepare('SELECT oui FROM flowers_' . $userId . ' WHERE flowerName = ?');
			$getExistingValue -> execute(array($selectedFlower));
			$value = $getExistingValue -> fetch(PDO::FETCH_ASSOC);
			$currentValue = $value['oui'];
			$totalValue = $currentValue+1 ;


			$updateFlowersDatabase = $db -> prepare('UPDATE flowers_' . $userId . ' SET oui = ? WHERE flowerName = ?');
			$updateFlowersDatabase -> execute(array($totalValue, $selectedFlower));


			// ------------------------ ADD POINTS FOR GROUP NUMBER ----------------------
			$getCurrentGroupPoints = $db -> prepare('SELECT groupe FROM flowers_' . $userId . ' WHERE flowerName = ?');
			$getCurrentGroupPoints -> execute(array($selectedFlower));
			$groupe = $getCurrentGroupPoints -> fetch(PDO::FETCH_ASSOC);
			$selectedGroup = $groupe['groupe'];


			$getCurrentGroupPoints = $db -> prepare('SELECT groupePoints FROM groupdescription_' . $userId . ' WHERE groupNumber = ?');
			$getCurrentGroupPoints -> execute(array($selectedGroup));
			$currentGroupPoint = $getCurrentGroupPoints -> fetch(PDO::FETCH_ASSOC);
			$takenPoints = $currentGroupPoint['groupePoints'];
			//echo "the current group point is " . $takenPoints . "<br>"; 
			

			$forUpdate = $takenPoints+1;
			$updateGroupPoints = $db -> prepare('UPDATE groupdescription_' . $userId . ' SET groupePoints = ? WHERE groupNumber = ?');
			$updateGroupPoints -> execute(array($forUpdate, $selectedGroup));
		}


		public function inputQuestionTroisAnswerYes($userId,$answer, $id)
		{

			$db = $this -> dbConnect();

			$getFlowerName = $db -> prepare('SELECT reponse FROM questionnaire3 WHERE id = ?');
			$getFlowerName -> execute(array($id));
			
			$rows = $getFlowerName->fetch(PDO::FETCH_ASSOC);
			$selectedFlower = $rows['reponse'];

			//echo "answer is yes for : " . $selectedFlower . "<br>";

			$getExistingValue = $db -> prepare('SELECT oui FROM flowers_' . $userId . ' WHERE flowerName = ?');
			$getExistingValue -> execute(array($selectedFlower));
			$value = $getExistingValue -> fetch(PDO::FETCH_ASSOC);
			$currentValue = $value['oui'];
			$totalValue = $currentValue+1 ;

			$updateFlowersDatabase = $db -> prepare('UPDATE flowers_' . $userId . ' SET oui = ? WHERE flowerName = ?');
			$updateFlowersDatabase -> execute(array($totalValue, $selectedFlower));


			// ------------------------ ADD POINTS FOR GROUP NUMBER ----------------------
			$getCurrentGroupPoints = $db -> prepare('SELECT groupe FROM flowers_' . $userId . ' WHERE flowerName = ?');
			$getCurrentGroupPoints -> execute(array($selectedFlower));
			$groupe = $getCurrentGroupPoints -> fetch(PDO::FETCH_ASSOC);
			$selectedGroup = $groupe['groupe'];
			//echo "your group number is " . $selectedGroup . "<br>";


			$getCurrentGroupPoints = $db -> prepare('SELECT groupePoints FROM groupdescription_' . $userId . ' WHERE groupNumber = ?');
			$getCurrentGroupPoints -> execute(array($selectedGroup));
			$currentGroupPoint = $getCurrentGroupPoints -> fetch(PDO::FETCH_ASSOC);
			$takenPoints = $currentGroupPoint['groupePoints'];
			

			$forUpdate = $takenPoints+1;
			$updateGroupPoints = $db -> prepare('UPDATE groupdescription_' . $userId . ' SET groupePoints = ? WHERE groupNumber = ?');
			$updateGroupPoints -> execute(array($forUpdate, $selectedGroup));

		}


		public function inputQuestionQuatreAnswerYes($userId,$answer, $id)
		{


			$db = $this -> dbConnect();

			$getFlowerName = $db -> prepare('SELECT reponse FROM questionnaire4 WHERE id = ?');
			$getFlowerName -> execute(array($id));
			
			$rows = $getFlowerName->fetch(PDO::FETCH_ASSOC);
			$selectedFlower = $rows['reponse'];

			//echo "answer is yes for : " . $selectedFlower . "<br>";

			$getExistingValue = $db -> prepare('SELECT oui FROM flowers_' . $userId . ' WHERE flowerName = ?');
			$getExistingValue -> execute(array($selectedFlower));
			$value = $getExistingValue -> fetch(PDO::FETCH_ASSOC);
			$currentValue = $value['oui'];
			$totalValue = $currentValue+1 ;

			$updateFlowersDatabase = $db -> prepare('UPDATE flowers_' . $userId . ' SET oui = ? WHERE flowerName = ?');
			$updateFlowersDatabase -> execute(array($totalValue, $selectedFlower));


			// ------------------------ ADD POINTS FOR GROUP NUMBER ----------------------
			$getCurrentGroupPoints = $db -> prepare('SELECT groupe FROM flowers_' . $userId . ' WHERE flowerName = ?');
			$getCurrentGroupPoints -> execute(array($selectedFlower));
			$groupe = $getCurrentGroupPoints -> fetch(PDO::FETCH_ASSOC);
			$selectedGroup = $groupe['groupe'];
			//echo "your group number is " . $selectedGroup . "<br>";


			$getCurrentGroupPoints = $db -> prepare('SELECT groupePoints FROM groupdescription_' . $userId . ' WHERE groupNumber = ?');
			$getCurrentGroupPoints -> execute(array($selectedGroup));
			$currentGroupPoint = $getCurrentGroupPoints -> fetch(PDO::FETCH_ASSOC);
			$takenPoints = $currentGroupPoint['groupePoints']; 

			$forUpdate = $takenPoints+1;
			$updateGroupPoints = $db -> prepare('UPDATE groupdescription_' . $userId . ' SET groupePoints = ? WHERE groupNumber = ?');
			$updateGroupPoints -> execute(array($forUpdate, $selectedGroup));
		}
		

		public function examiner1($userId)
		{
			$correctAnswer = 4;
			$db = $this -> dbConnect();
			$examiner1 = $db -> prepare('SELECT  * FROM flowers_' . $userId . ' WHERE oui = ?');
			$examiner1 -> execute(array($correctAnswer));
			return $examiner1;


			//$rows = $examiner->fetch(PDO::FETCH_ASSOC);  -----> CACHE LE PREMIER RESULTAT !!!!
		}

			public function examiner2($userId)
		{
			$correctAnswer = 3;
			$db = $this -> dbConnect();
			$examiner2 = $db -> prepare('SELECT  * FROM flowers_' . $userId . ' WHERE oui = ?');
			$examiner2 -> execute(array($correctAnswer));
			return $examiner2;
			//$rows = $examiner->fetch(PDO::FETCH_ASSOC);  -----> CACHE LE PREMIER RESULTAT !!!!
		}

			public function examiner3($userId)
		{
			$correctAnswer = 2;
			$db = $this -> dbConnect();
			$examiner3 = $db -> prepare('SELECT  * FROM flowers_' . $userId . ' WHERE oui = ?');
			$examiner3 -> execute(array($correctAnswer));
			return $examiner3;
			//$rows = $examiner->fetch(PDO::FETCH_ASSOC);  -----> CACHE LE PREMIER RESULTAT !!!!
		}


		public function examiner4($userId)
		{
			$correctAnswer = 1;
			$db = $this -> dbConnect();
			$examiner4 = $db -> prepare('SELECT  * FROM flowers_' . $userId . ' WHERE oui = ?');
			$examiner4 -> execute(array($correctAnswer));
			return $examiner4;
			//$rows = $examiner->fetch(PDO::FETCH_ASSOC);  -----> CACHE LE PREMIER RESULTAT !!!!
		}

		public function examiner5($userId)
		{
			$correctAnswer = 0;
			$db = $this -> dbConnect();
			$examiner4 = $db -> prepare('SELECT * FROM flowers_' . $userId . ' WHERE oui = ?');
			$examiner4 -> execute(array($correctAnswer));
			return $examiner4;
			//$rows = $examiner->fetch(PDO::FETCH_ASSOC);  -----> CACHE LE PREMIER RESULTAT !!!!
		}

		public function suggestions($userId)
		{
			$db = $this -> dbConnect();
			$getBestResults = $db -> prepare('SELECT * FROM groupdescription_' . $userId . ' ORDER BY groupePoints DESC LIMIT 6');
			$getBestResults -> execute(array());
			return $getBestResults;
		}

		public function flowerSuggestions()
		{
			$db = $this -> dbConnect();
			$getSuggestionResultsFlowerName = $db -> prepare('SELECT flowerName FROM flowers WHERE groupe = ? ORDER BY oui DESC');
			$getSuggestionResultsFlowerName -> execute(array(5));

		}		

		public function resetDatabaseResult($userId)
		{
			$resetOui = 0;
			$resetNon = 0;
			$resetFlowerExportStatus = "no";
			$db = $this -> dbConnect();
			$examiner = $db -> prepare('UPDATE flowers_' . $userId . ' SET oui = ? , non = ? , selectedForResult = ?, serialNumber = ?');
			$examiner -> execute(array($resetOui, $resetNon, $resetFlowerExportStatus, 0));

			$resetPointsValue = 0 ;
			$resetGroupPoints = $db -> prepare('UPDATE groupdescription_' . $userId . ' SET groupePoints = ?');
			$resetGroupPoints ->execute(array($resetPointsValue));
			//return $resetGroupPoints;
		}

		public function dropTablesAndGoToHome($userId)
		{
			$flowerTableName = "flowers_". $userId ;
			$descriptionTableName = "groupdescription_". $userId;

			$db = $this -> dbConnect();
			$dropFlowersTables = $db -> prepare('DROP TABLE ' . $flowerTableName);
			$dropFlowersTables -> execute(array());
			//print_r($dropFlowersTables->errorInfo()); 

			$dropDescriptionTables = $db -> prepare('DROP TABLE ' . $descriptionTableName);
			$dropDescriptionTables -> execute(array());
			//print_r($dropDescriptionTables->errorInfo());
			
		}

		public function clear($userId)
		{
			$flowerTableName = "flowers_". $userId ;
			$descriptionTableName = "groupdescription_". $userId;

			$db = $this -> dbConnect();
			$dropFlowersTables = $db -> prepare('DROP TABLE ' . $flowerTableName);
			$dropFlowersTables -> execute(array()); 

			$dropDescriptionTables = $db -> prepare('DROP TABLE ' . $descriptionTableName);
			$dropDescriptionTables -> execute(array());
		}		

		public function getClientDetailsForNotificationMail($fleursDeBachFor)
		{
			$db = $this->dbConnect();
			$getClientDetailsForNotificationMail = $db -> prepare('SELECT * FROM user_client WHERE id = ?');	
			$getClientDetailsForNotificationMail -> execute(array($fleursDeBachFor));
			return $getClientDetailsForNotificationMail;
		}
		
		public function saveBilanFleursToClientProfil($bilanName, $fleursDeBachFor, $byPraticien, $shareWithClient, $data)
		{
			$db = $this->dbConnect();
			$saveBilanFleursToClientProfil = $db -> prepare('INSERT INTO fleurssheet (bilanName, bilanFor, byPraticien, shareWithClient, data) VALUES(?, ?, ?, ?, ?)');	
			$saveBilanFleursToClientProfil -> execute(array($bilanName, $fleursDeBachFor, $byPraticien, $shareWithClient, $data));
			return $saveBilanFleursToClientProfil;
		}

		public function saveBilanFleursToClientProfilWithoutSharing($bilanName, $fleursDeBachFor, $byPraticien, $shareWithClient, $data)
		{
			$db = $this->dbConnect();
			$saveBilanFleursToClientProfilWithoutSharing = $db -> prepare('INSERT INTO fleurssheet (bilanName, bilanFor, byPraticien, shareWithClient, data) VALUES(?, ?, ?, ?, ?)');	
			$saveBilanFleursToClientProfilWithoutSharing -> execute(array($bilanName, $fleursDeBachFor, $byPraticien, $shareWithClient, $data));
			return $saveBilanFleursToClientProfilWithoutSharing;
		}

		public function updateSelectedStatus($userId,$id,$serialNumber)
		{
			$positive = "yes";
			$db = $this -> dbConnect();
			$updateSelectedStatus = $db -> prepare('UPDATE flowers_' . $userId. ' SET selectedForResult = ? , serialNumber = ? WHERE id = ?');
			$updateSelectedStatus -> execute(array($positive, $serialNumber, $id));
			return $updateSelectedStatus;
		}

		public function fetchChoice1($userId)
		{
			$getSerial = 1;
			$db = $this -> dbConnect();
			$fetchChoice1 = $db -> prepare('SELECT * FROM flowers_' . $userId . ' WHERE serialNumber = ? LIMIT 1');
			$fetchChoice1 -> execute(array($getSerial));
			return $fetchChoice1;
		}

		public function fetchChoice2($userId)
		{
			$getSerial = 2;
			$db = $this -> dbConnect();
			$fetchChoice2 = $db -> prepare('SELECT * FROM flowers_' . $userId . ' WHERE serialNumber = ? LIMIT 1');
			$fetchChoice2 -> execute(array($getSerial));
			return $fetchChoice2;
		}

		public function fetchChoice3($userId)
		{
			$getSerial = 3;
			$db = $this -> dbConnect();
			$fetchChoice3 = $db -> prepare('SELECT * FROM flowers_' . $userId . ' WHERE serialNumber = ? LIMIT 1');
			$fetchChoice3 -> execute(array($getSerial));
			return $fetchChoice3;
		}

		public function fetchChoice4($userId)
		{
			$getSerial = 4;
			$db = $this -> dbConnect();
			$fetchChoice4 = $db -> prepare('SELECT * FROM flowers_' . $userId . ' WHERE serialNumber = ? LIMIT 1');
			$fetchChoice4 -> execute(array($getSerial));
			return $fetchChoice4;
		}

		public function fetchChoice5($userId)
		{
			$getSerial = 5;
			$db = $this -> dbConnect();
			$fetchChoice5 = $db -> prepare('SELECT * FROM flowers_' . $userId . ' WHERE serialNumber = ? LIMIT 1');
			$fetchChoice5 -> execute(array($getSerial));
			return $fetchChoice5;
		}

		public function fetchChoice6($userId)
		{
			$getSerial = 6;
			$db = $this -> dbConnect();
			$fetchChoice6 = $db -> prepare('SELECT * FROM flowers_' . $userId . ' WHERE serialNumber = ? LIMIT 1');
			$fetchChoice6 -> execute(array($getSerial));
			return $fetchChoice6;
		}

		public function fetchWithoutChoice($userId)
		{
			$positive = "yes";
			$serialNumber = 0;
			$db = $this -> dbConnect();
			$fetchWithoutChoice = $db -> prepare('SELECT * FROM flowers_' . $userId . ' WHERE selectedForResult = ? AND serialNumber = ?');
			$fetchWithoutChoice -> execute(array($positive, $serialNumber));
			return $fetchWithoutChoice;
		}

		public function fetchPositiveSentence($userId)
		{
			$db = $this -> dbConnect();
			$fetchPositiveSentence = $db -> prepare('SELECT positiveSentence FROM flowers_' . $userId . ' WHERE serialNumber = ? LIMIT 1');
			$fetchPositiveSentence -> execute(array(1));
			return $fetchPositiveSentence;
		}

		public function resetPositiveSentence($userId)
		{
			$resetValue = 0 ;
			$resetResultSelection = "no";
			$db = $this -> dbConnect();
			$reset = $db -> prepare('UPDATE flowers_' . $userId . ' SET serialNumber = ? , selectedForResult = ?');
			$reset -> execute(array($resetValue, $resetResultSelection));
			return $reset;
		}

		public function getPraticienSignature($userId)
		{
			$db = $this -> dbConnect();
			$getPraticienSignature = $db -> prepare('SELECT * FROM user_praticien WHERE id = ?');
			$getPraticienSignature -> execute(array($userId));
			return $getPraticienSignature;
		}

		public function upadteQuestions()
		{
			$question1 = "Soucis excessif du bien-être d'autrui";
			$db = $this -> dbConnect();
			$updateQuestion = $db -> prepare('UPDATE groupdescription SET groupeDesc = ? WHERE id = ?');
			$updateQuestion -> execute(array($question1, 7));
			return $updateQuestion;
		}

		public function emailAddressToSend($addressToSend)
		{
		
			if (session_status() == PHP_SESSION_NONE) 
			{
				session_start();
			}


			$senderMail = base64_decode($_SESSION['userEmail']);
			$db = $this -> dbConnect();
			$saveEmail = $db -> prepare('INSERT INTO ClientEmails(senderEmail, email) VALUES(?, ?)');
			$saveEmail -> execute(array($senderMail, $addressToSend));
			return $saveEmail;

		}

	}
?>