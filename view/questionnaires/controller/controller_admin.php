<?php
require('model/Manager/userManager.php');


	class controls_Admin
	{

		function createAccount($email, $username, $password, $retypedPassword, $dob)
		{
			if ($password == $retypedPassword) 
			{
				$userManager = new userManager();
				$userManager -> createAccount($email, $username, $password, $dob);

				if (session_status() === PHP_SESSION_NONE) 
				{
    				session_start();
				}
				//session_start();
				$_SESSION['createAccountStatus'] = "created" ;
					header("location:view/createdAccount/createdAccount.php");
			}

			else
			{
				$userManager = new userManager();

				$userManager -> missmatchedPassword();
			}
		}

		function login($username, $password)
		{
			$userManager = new userManager();
			$userManager -> login($username,$password);
		}

		function logout()
		{
			$userManager = new userManager();
			$userManager -> logout();
		}

		function nowLogOut()
		{
			$userManager = new userManager();
			$userManager -> nowLogOut();
		}

		function forgetPassword()
		{
			$userManager = new userManager();
			$userManager -> forgetPassword();
		}

		function goBack()
		{
			$userManager = new userManager();
			$userManager -> goBack();
		}

		
		function insert_Questions()
		{
			$userManager = new userManager();
			$userManager -> insert_Questions();
		}
				

		function get_Questions()
		{
			$userManager = new userManager();
			$fetchedQuestions = $userManager -> get_Questions();
			
			include("view/questions1.php");
		}

		function dashboard()
		{
			header("location: ../../index.php?action=accueil");
		}

		function questions1()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			//session_start();
			$userId = $_SESSION['userId'];
			
			$userManager = new userManager();
			
			$userManager -> createTableIntoDb($userId);
			$userManager -> resetDefault($userId);
			$userManager -> resetExportResultDefault($userId);
			$fetchedQuestions = $userManager -> questions1();
			include_once("view/questions1.php");
		}

		function questions2()
		{
			$userManager = new userManager();
			$fetchedQuestions = $userManager -> questions2();
			include_once("view/questions2.php");
		}

		function questions3()
		{
			$userManager = new userManager();
			$fetchedQuestions = $userManager -> questions3();
			include_once("view/questions3.php");
		}


		function questions4()
		{
			$userManager = new userManager();
			$fetchedQuestions = $userManager -> questions4();
			include_once("view/questions4.php");
		}


		function inputQuestionUnAnswerYes($userId, $answer, $id)
		{
			$userManager = new userManager();
			$fetchedFlowerName = $userManager -> inputQuestionUnAnswerYes($userId,$answer, $id);
		}


		function inputQuestionDeuxAnswerYes($userId,$answer, $id)
		{
			$userManager = new userManager();
			$fetchedFlowerName = $userManager -> inputQuestionDeuxAnswerYes($userId,$answer, $id);
		}


		function inputQuestionTroisAnswerYes($userId,$answer, $id)
		{
			$userManager = new userManager();
			$fetchedFlowerName = $userManager -> inputQuestionTroisAnswerYes($userId,$answer, $id);
		}


		function inputQuestionQuatreAnswerYes($userId,$answer, $id)
		{
			$userManager = new userManager();
			$fetchedFlowerName = $userManager -> inputQuestionQuatreAnswerYes($userId,$answer, $id);
		}

		
		function examiner($userId)
		{
			$userManager = new userManager();

			
			$fetchedFirstBestResults = $userManager -> examiner1($userId);

			$fetchedSecondBestResults = $userManager -> examiner2($userId);

			$fetchedThirdBestResults = $userManager -> examiner3($userId);			

			$fetchedForthBestResults = $userManager -> examiner4($userId);

			$fetchedFifthBestResults = $userManager -> examiner5($userId);
			
			$fetchedSuggestions = $userManager -> suggestions($userId);

			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
    			$userId = $_SESSION['userId'];
			}

			require_once("view/resultat.php");
		}

		function resetDatabaseResult($userId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
   				 session_start();
			}
			//session_start();
			$userId = $_SESSION['userId'];
			$userManager = new userManager();
			$userManager -> resetDatabaseResult($userId);			
		}

		function dropTablesAndGoToHome($userId)
		{
			$userManager = new userManager();
			$userManager -> dropTablesAndGoToHome($userId);
			header("location: ../../index.php?action=accueil");
		}

		function clear($userId)
		{
			$userManager = new userManager();
			$userManager -> clear($userId);
		}

		function updateSelectedStatus($userId,$id,$serialNumber)
		{
			
			$userManager = new userManager();
			$updateSelectedStatus = $userManager -> updateSelectedStatus($userId,$id,$serialNumber);
		}

		function exportDataToPDF($userId)
		{

			$userManager = new userManager();
			$fetchChoice1 = $userManager -> fetchChoice1($userId);
			$fetchChoice2 = $userManager -> fetchChoice2($userId);
			$fetchChoice3 = $userManager -> fetchChoice3($userId);
			$fetchChoice4 = $userManager -> fetchChoice4($userId);
			$fetchChoice5 = $userManager -> fetchChoice5($userId);
			$fetchChoice6 = $userManager -> fetchChoice6($userId);
			$fetchWithoutChoice = $userManager -> fetchWithoutChoice($userId);
			$fetchPositiveSentence = $userManager -> fetchPositiveSentence($userId);

			$resultsFoundForPositiveSentence = $fetchPositiveSentence -> rowCount();

			$getPraticienSignature = $userManager -> getPraticienSignature($userId);


			while ($data = $getPraticienSignature -> fetch()) 
			{
				$signature = $data['signature'];
				//echo $signature;
			}

			include_once("view/ordonnance.php");
		}

		function resetPositiveSentence($userId)
		{
			$userManager = new userManager();
			$reset = $userManager -> resetPositiveSentence($userId);
		}

		function upadteQuestions()
		{
			$userManager = new userManager();
			$updateQuestions = $userManager -> upadteQuestions();
		}


		function emailAddressToSend($addressToSend,$mailText,$fileName,$current_location)
		{

			if (session_status() === PHP_SESSION_NONE) 
			{
   				 session_start();
			}
			$userId = $_SESSION['userId']; 

			include_once('sendEmail/sendEmail.php');
			//$createTable = $userManager -> emailAddressToSend($addressToSend);

			$userManager = new userManager();
			$fetchedFirstBestResults = $userManager -> examiner1($userId);

			$fetchedSecondBestResults = $userManager -> examiner2($userId);

			$fetchedThirdBestResults = $userManager -> examiner3($userId);			

			$fetchedForthBestResults = $userManager -> examiner4($userId);

			$fetchedFifthBestResults = $userManager -> examiner5($userId);
			
			$fetchedSuggestions = $userManager -> suggestions($userId);

			include_once("view/resultat.php");
		}
	}