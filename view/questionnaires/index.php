<?php

	require('controller/controller_admin.php');


	if (isset($_GET['action'])) 
	{
		if ($_GET['action'] == "createAccount") 
		{
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$retypedPassword = $_POST['retypedPassword'];
			$dob = $_POST['dob'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> createAccount($email, $username, $password, $retypedPassword, $dob);
			
		}


		if ($_GET['action'] == "login") 
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$controls_admin = new controls_Admin();
			$controls_admin -> login($username, $password);
		}


		if ($_GET['action'] == "wrongPassword") 
		{
			header("location: view/wrongPassword.php");		
		}


		if ($_GET['action'] == "logout")
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> logout();
		}

		if ($_GET['action'] == "questions1") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			
			if ($_SESSION['timeRemaining'] > 0) 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> questions1();
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}
				
		}

		if ($_GET['action'] == "questions2") 
		{	

			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			if ($_SESSION['timeRemaining'] > 0) 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> questions2();
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}	
		}

		if ($_GET['action'] == "questions3") 
		{

			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			if ($_SESSION['timeRemaining'] > 0) 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> questions3();
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}	
		}

		if ($_GET['action'] == "questions4") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			if ($_SESSION['timeRemaining'] > 0) 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> questions4();
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}	
		}

		if ($_GET['action'] == "inputToDatabaseQuestionnaireUn") 
		{
			session_start();
			$userId = $_SESSION['userId'];
			for ($i=1; $i <39 ; $i++) 
			{
				$radioVal = $_POST[$i];

				if($radioVal == "oui")
				{
					$id = $i;
					$answer = 1;
					$controls_admin = new Controls_Admin();
					$controls_admin -> inputQuestionUnAnswerYes($userId,$answer,$id);
				}

				/*
				else if ($radioVal == "non")
				{
					$id = $i;
				    $answer = 1;
					$controls_admin = new Controls_Admin();
					$controls_admin -> inputQuestionUnAnswerNo($answer, $id);
				} 
				*/		
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> questions2();

		}

		if ($_GET['action'] == "inputToDatabaseQuestionnaireDeux") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			if ($_SESSION['timeRemaining'] > 0) 
			{
				$userId = $_SESSION['userId'];
				for ($i=1; $i <39 ; $i++) 
				{
					$radioVal = $_POST[$i];

					if($radioVal == "oui")
					{
						$id = $i;
						$answer = 1;
						$controls_admin = new Controls_Admin();
						$controls_admin -> inputQuestionDeuxAnswerYes($userId,$answer,$id);
					}

					/*

					else if ($radioVal == "non")
					{
						$id = $i;
					    $answer = 1;
						$controls_admin = new Controls_Admin();
						$controls_admin -> inputQuestionDeuxAnswerNo($answer, $id);
					} 	
					*/
				}
					$controls_admin = new Controls_Admin();
					$controls_admin -> questions3();
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}
		}

		if ($_GET['action'] == "inputToDatabaseQuestionnaireTrois") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			if ($_SESSION['timeRemaining'] > 0) 
			{
				$userId = $_SESSION['userId'];			

				for ($i=1; $i <39 ; $i++) 
				{
					error_reporting(E_ERROR | E_PARSE);

						$radioVal = $_POST[$i];
						if($radioVal == "oui")
						{
							$id = $i;
							$answer = 1;
							$controls_admin = new Controls_Admin();
							$controls_admin -> inputQuestionTroisAnswerYes($userId,$answer,$id);
						}
						/*
						else if ($radioVal == "non")
						{
							$id = $i;
						    $answer = 1;
							$controls_admin = new Controls_Admin();
							$controls_admin -> inputQuestionTroisAnswerNo($answer, $id);
						}
						*/		
				}
				$controls_admin = new Controls_Admin();
				$controls_admin -> questions4();
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}
		}

		if ($_GET['action'] == "examiner") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			if ($_SESSION['timeRemaining'] > 0) 
			{
				$userId = $_SESSION['userId'];
				error_reporting(E_ERROR | E_PARSE);

				for ($i=1; $i <39 ; $i++) 
				{
					$radioVal = $_POST[$i];

					if($radioVal == "oui")
					{
						$id = $i;
						$answer = 1;
						$controls_admin = new Controls_Admin();
						$controls_admin -> inputQuestionQuatreAnswerYes($userId,$answer,$id);
					}
				}

				$controls_admin = new Controls_Admin();
				$controls_admin -> examiner($userId);
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}
		}

		if ($_GET['action'] == "resetDatabaseResult") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			if ($_SESSION['timeRemaining'] > 0) 
			{
				$userId = $_SESSION['userId'];
				$controls_admin = new Controls_Admin();
				$controls_admin -> resetDatabaseResult($userId);

				$controls_admin -> questions1();
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}
		}

		if ($_GET['action'] == "dropTablesAndGoToHome") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$controls_admin = new Controls_Admin();
			$controls_admin -> dropTablesAndGoToHome($userId);
		}

		if ($_GET['action'] == "clearAndlogout") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			
			$userId = $_SESSION['userId'];
			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> nowLogOut();
		}

		if ($_GET['action'] == "exportFile") 
		{
			$serialNumber = 0;

			if (session_status() === PHP_SESSION_NONE) 
			{
   				 session_start();
			}

			error_reporting(E_ERROR | E_PARSE);

			if ($_SESSION['timeRemaining'] > 0) 
			{
				$userId = $_SESSION['userId'];
				for ($i=1; $i <39 ; $i++) 
				{
					$serialNumber = 0;
					$checkVal = $_POST[$i];

					if($checkVal == "oui")
					{
						if ($_POST[$i.'priorityChoice'] == "choisir") 
						{
						 	$serialNumber = 0;
							//echo "you've choosen for id " . $i . " as the serial number " . $serialNumber . "<br>" ;
						}
						if ($_POST[$i.'priorityChoice'] == "choix1") 
						{
						 	$serialNumber = 1;
						 	//echo "you've choosen for id " . $i . " as the serial number " . $serialNumber . "<br>" ;
						}

						if ($_POST[$i.'priorityChoice'] == "choix2") 
						{
						 	$serialNumber = 2;
						 	//echo "you've choosen for id " . $i . " as the serial number " . $serialNumber . "<br>" ;
						}

						if ($_POST[$i.'priorityChoice'] == "choix3") 
						{
						 	$serialNumber = 3;
						 	//echo "you've choosen for id " . $i . " as the serial number " . $serialNumber . "<br>" ;
						}

						if ($_POST[$i.'priorityChoice'] == "choix4") 
						{
						 	$serialNumber = 4;
						 	//echo "you've choosen for id " . $i . " as the serial number " . $serialNumber . "<br>" ;
						}

						if ($_POST[$i.'priorityChoice'] == "choix5") 
						{
						 	$serialNumber = 5;
						 	//echo "you've choosen for id " . $i . " as the serial number " . $serialNumber . "<br>" ;
						}

						if ($_POST[$i.'priorityChoice'] == "choix6") 
						{
						 	$serialNumber = 6;
						 	//echo "you've choosen for id " . $i . " as the serial number " . $serialNumber . "<br>" ;
						}
						
						$id = $i;
						$controls_admin = new Controls_Admin();
						$controls_admin -> updateSelectedStatus($userId,$id, $serialNumber);
					}
				}
				$controls_admin = new Controls_Admin();
				$controls_admin -> exportDataToPDF($userId);
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}
		}

		if ($_GET['action'] == "backToResultPage") 
		{
			error_reporting(E_ERROR | E_PARSE);

			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			if ($_SESSION['timeRemaining'] > 0) 
			{
				$userId = $_SESSION['userId'];
				$controls_admin = new Controls_Admin();
				$controls_admin -> resetPositiveSentence($userId);
				$controls_admin -> examiner($userId);
			}

			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}
		}	

		if ($_GET['action'] == "updateQuestions") 
		{
			echo "non disponible pour le moment !" ;
			/*$controls_admin = new Controls_Admin();
			$controls_admin -> upadteQuestions();
			*/
		}

		if ($_GET['action'] == "createTable") 
		{
			echo "non disponible pour le moment !" ;
			/*$controls_admin = new Controls_Admin();
			$controls_admin -> createTable();
			*/
		}


		if ($_GET['action'] == "sendMailToPatient") 
		{
			if ($_SESSION['timeRemaining'] > 0) 
			{
				if (session_status() === PHP_SESSION_NONE) 
				{
					header("location:../../index.php");
				}
				
				$addressToSend = $_POST['adresseMail'];
				$mailText = $_POST['mailBody'];
				$fileName = $_FILES['attachment']['name'];
				$fileSize = $_FILES['attachment']['size'];
				$current_location = $_FILES['attachment']['tmp_name'];
		
				/*			
				echo $addressToSend . "<br>";
				echo $addressToSend . "<br>";
				echo $fileName . "<br>";
				echo $current_location . "<br>";
				*/
				
				$controls_admin = new Controls_Admin();
				$controls_admin -> emailAddressToSend($addressToSend,$mailText,$fileName,$current_location);

			}
			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> dashboard();	
			}
		}	
	}


	else
	{
		if ($_SESSION['timeRemaining'] > 0) 
		{
			//header("location: view/index.php");
			/*
			$controls_admin = new Controls_Admin();
			$controls_admin -> insert_Questions();
			*/
			$controls_admin = new Controls_Admin();
			$controls_admin -> get_Questions();
		}
		
		else
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> dashboard();	
		}
	}

?>