<?php
require('model/Manager/userManager.php');


	class controls_Admin
	{

		function faceRecognition()
		{
			header("location: view/Face Recognition/homeFaceRecognition.php");
		}

		function loginThisUserByFaceRecognition($userId)
		{
			$userManager = new userManager();
			$userManager -> loginThisUserByFaceRecognition($userId);
		}
		/*
		function createAccount($sexe, $firstname, $lastname, $email, $username, $password, $retypedPassword, $dob)
		{
			if ($password == $retypedPassword) 
			{
				$userManager = new userManager();
				$userManager -> createAccount($sexe, $firstname, $lastname, $email, $username, $password, $dob);

				session_start();
				$_SESSION['createAccountStatus'] = "created" ;
					header("location:view/createdAccount/createdAccount.php");
			}

			else
			{
				$userManager = new userManager();

				$userManager -> missmatchedPassword();
			}
		}
		*/

		function createAccountNextPageTwo()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			if ($_SESSION['password'] == $_SESSION['retypedPassword']) 
			{
					header("location:view/createAccountPage/createAccountNextPageTwo.php");
			}

			else
			{
				$userManager = new userManager();

				$userManager -> missmatchedPassword();
			}
		}

		function createAccountNextPageThree()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			header("location:view/createAccountPage/createAccountNextPageThree.php");
		}

		function 	accountCreateRequest($sexe, $firstname, $lastname, $email, $username, $password, $dob, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienWorkPermit, $praticienEducationQualification, $praticienDegreeOrCertificat, $praticienCabinetPhoneNumber, $praticienSignature, $Naturopathe, $Réflexologue, $Sophrologue, $Médecin, $Chirurgien, $Pharmacien, $Dentiste, $SageFemme, $Vétérinaire, $AideSoignant, $AuxiliaireDePuériculture, $Infirmier, $InfirmierDeBlocOpératoire, $InfirmierAnesthésiste, $Podologue, $Kinésithérapeute, $Ergothérapeute, $Orthophoniste, $Psychomotricien, $Diététicien, $Orthoprothésiste, $Orthoptiste, $Pédicure, $ManipulateurEnElectroradiologieMédicale, $TechnicienDeLaboratoire,$PréparateurEnPharmacie, $Ambulancier, $Psychologue, $Ophtalmologue, $autres)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$accountCreateRequest = $userManager -> accountCreateRequest($sexe, $firstname, $lastname, $email, $username, $password, $dob, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienWorkPermit, $praticienEducationQualification, $praticienDegreeOrCertificat, $praticienCabinetPhoneNumber, $praticienSignature, $Naturopathe, $Réflexologue, $Sophrologue, $Médecin, $Chirurgien, $Pharmacien, $Dentiste, $SageFemme, $Vétérinaire, $AideSoignant, $AuxiliaireDePuériculture, $Infirmier, $InfirmierDeBlocOpératoire, $InfirmierAnesthésiste, $Podologue, $Kinésithérapeute, $Ergothérapeute, $Orthophoniste, $Psychomotricien, $Diététicien, $Orthoprothésiste, $Orthoptiste, $Pédicure, $ManipulateurEnElectroradiologieMédicale, $TechnicienDeLaboratoire,$PréparateurEnPharmacie, $Ambulancier, $Psychologue, $Ophtalmologue, $autres);

			if ($_SESSION['faceRecognition'] == "yes") 
			{
				$getMatchForUploadingFaceRecognitionPicture = $userManager -> getMatchForUploadingFaceRecognitionPicture($sexe, $firstname, $lastname, $email, $username, $password, $dob, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry);
			
				$numberOfMatchedResults = $getMatchForUploadingFaceRecognitionPicture -> rowCount();


				if ($numberOfMatchedResults == 1) 
				{
					while ($rows = $getMatchForUploadingFaceRecognitionPicture -> fetch()) 
					{
						$thisPraticienId = $rows['id'];
					}
					$url = $_SESSION['capturedImage']; 
					$img = 'view/Face Recognition/labeled_images/All/'.$thisPraticienId.'.png'; 
					file_put_contents($img, file_get_contents($url));
				}
				
			}
			
			include_once('sendPraticienPreAccountMail/sendPraticienPreAccountMail.php');
			
			$_SESSION['createAccountStatus'] = "requestSent";
			header("location:view/createdAccount/createdAccount.php");

			session_destroy();
			session_unset();
		}

		function login($username, $password)
		{
			$userManager = new userManager();
			$userManager -> login($username, $password);
		}

		function checkEmailAndPasswordForRecovery($email, $dateOfBirth, $code)
		{
			session_start();
			$_SESSION['recoveryEmail'] = $email;
			$_SESSION['recoveryCode'] = $code;
			$userManager = new userManager();
			$userManager -> checkEmailAndPasswordForRecovery($email, $dateOfBirth, $code);
			//header('location:view/codeVerification/codeVerification.php');
		}

		function checkInsertedCode($recoveryEmail, $code)
		{
			$userManager = new userManager();
			$userManager -> checkInsertedCode($recoveryEmail, $code);
		}

		function resetPassword($recoveryEmail, $password,$retypedPassword)
		{
			if ($password == $retypedPassword) 
			{
				$userManager = new userManager();
				$userManager -> resetPassword($recoveryEmail, $password,$retypedPassword);
				header("location:index.php");
			}
			
			else 
			{
				echo "password didnt match";
			}			
		}

		function settings()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			if ($_SESSION['sessionStatus'] == "online" ) 
			{
				header("location: view/settings/settings.php");
			}

			else
			{
				header("location:index.php");
			}
		}

		function cabinetManagement()
		{
			if (session_status() === PHP_SESSION_NONE)
			{
    			session_start();
			}

			if ($_SESSION['sessionStatus'] == "online" ) 
			{
				header("location: view/cabinetManagement/cabinetManagement.php");
			}

			else
			{
				header("location:index.php");
			}	
		}

		function aboutUs()
		{
			if (session_status() === PHP_SESSION_NONE)
			{
    			session_start();
			}

			if ($_SESSION['sessionStatus'] == "online" ) 
			{
				header("location: view/aboutUs/aboutUs.php");
			}

			else
			{
				header("location:index.php");
			}	
		}

		function searchMyKalyaResult($service_url)
		{
			$userManager = new userManager();
			$kalyeToken = $userManager -> kalyaToken();

			include_once('view/kalyaSearch/kalyaSearch.php');

			//header("location: https://app.kalyapro.com/search/" . $searchValue ."?adnr=vjhdsfijhsdf");
			//header("location: view/kalyaSearch/kalyaSearch.php");

				
			/*
			$service_url = "https://app.kalyapro.com/search/" . $searchValue ."?adnr=vjhdsfijhsdf";
			
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $service_url);
			
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			    'Authorization: Token token=YOUR_TOKEN'
			    ));
			$result = curl_exec ( $ch );
			curl_close ( $ch );
			
				/*
				$token = $_POST['token'];
				$private_key = $_POST['private_key'];
				echo $token;
				echo $private_key;
				*/
		}


		function updateAccount($userId, $firstname, $lastname, $username, $email, $dob, $password, $retypedPassword, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienEducationQualification, $praticienCabinetPhoneNumber)
		{
			if ($password == $retypedPassword) 
			{
				$firstname = base64_encode($firstname);
				$lastname = base64_encode($lastname);
				$username = base64_encode($username);
				$email = base64_encode($email);
				$password = base64_encode($password);

				$userManager = new userManager();
				$userManager -> updateAccount($userId, $firstname, $lastname, $username, $email, $dob, $password, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienEducationQualification, $praticienCabinetPhoneNumber);
				header('location: index.php?action=logout');
			}

			else
			{
				header('location: view/settings/unmatchedPasswordsettings.php');
			}
		}

		function logout()
		{
			$userManager = new userManager();
			$userManager -> logout();
		}

		function forgetPassword()
		{
			$userManager = new userManager();
			$userManager -> forgetPassword();
		}

		function createAccountLink()
		{
			$userManager = new userManager();
			$userManager -> createAccountLink();
		}

		function forgetIdentification()
		{
			$userManager = new userManager();
			$userManager -> forgetIdentification();
		}

		function takePackage()
		{
			include_once('view/packageOffers/packageOffers.php');	
		}

		function packageOption1Choosen($packagePrice)
		{
			include_once('view/packagePayment/packagePayment.php');	
		}

		function packageOption2Choosen($packagePrice)
		{
			include_once('view/packagePayment/packagePayment.php');	
		}

		function packageOption3Choosen($packagePrice)
		{
			include_once('view/packagePayment/packagePayment.php');	
		}

		function packageOption4Choosen($packagePrice)
		{
			include_once('view/packagePayment/packagePayment.php');	
		}

		function purchaseSuccess($userId, $id, $status, $amount, $paymentTime, $payerEmail, $payerGivenName, $payerSurname, $payerId)
		{
			$userManager = new userManager();
			$userManager -> purchaseSuccess($userId, $id, $status, $amount, $paymentTime, $payerEmail, $payerGivenName, $payerSurname, $payerId);
			header('location: view/purchase/success/success.php');	
		}

		function naturoSheet()
		{
			header("location: view/naturoSheet/naturoSheetFirstPage.php");
		}



		function naturoSheetGetResult()
		{
			header("location: view/naturoSheet/naturoResult.php");
		}

		function saveBilanNaturoToClientProfil($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data)
		{
			$userManager = new userManager();
		
			$getClientDetailsForNotificationMail = $userManager -> getClientDetailsForNotificationMail($bilanFor);
			while ($rows = $getClientDetailsForNotificationMail -> fetch()) 
			{
				$clientName = base64_decode($rows['firstname']) . " " . base64_decode($rows['lastname']);
				$clientEmail = $rows['email'];
			}

			include_once('controller/notificationMail/newBilanNaturoNotificationMail.php');

			$userManager -> saveBilanNaturoToClientProfil($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data);

			header("location: view/bilanNaturoForThisPatient/bilanNaturoForThisPatientResultPage.php");
		}


		function saveBilanNaturoToClientProfilWithoutSharing($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data)
		{
			$userManager = new userManager();
			$userManager -> saveBilanNaturoToClientProfilWithoutSharing($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data);

			header("location: view/bilanNaturoForThisPatient/bilanNaturoForThisPatientResultPage.php");
		}


		function bilanNaturoTwoForThisPatient()
		{
			$userManager = new userManager();
			//$userManager -> bilanNaturoTwoForThisPatient();

			header("location: view/bilanNaturoTwoForThisPatient/bilanNaturoTwoForThisPatient.php");
		}

		function sendThisBilanForMyClientToFillUp($praticienId, $clientId, $testName, $bloc1, $bloc2, $bloc3, $bloc4, $bloc5, $bloc6, $bloc7, $bloc8, $bloc9, $bloc10, $bloc11, $bloc12)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$clientName = null;
			$clientEmail = null;
			$praticienName = strtoupper(base64_decode($_SESSION['lastName'])) . " " . ucfirst(base64_decode($_SESSION['firstName']));

			$userManager = new userManager();
			$sendThisBilanForMyClientToFillUp = $userManager -> sendThisBilanForMyClientToFillUp($praticienId, $clientId, $testName, $bloc1, $bloc2, $bloc3, $bloc4, $bloc5, $bloc6, $bloc7, $bloc8, $bloc9, $bloc10, $bloc11, $bloc12);

			/*$prepareThisBilanAnswerSheet = $userManager -> prepareThisBilanAnswerSheet($testName, $praticienId, $clientId);

			while($rows = $prepareThisBilanAnswerSheet -> fetch())
			{
				$QuestionBlocId = $rows['id'];
				$prepareThisBilanAnswerSheet2 = $userManager -> prepareThisBilanAnswerSheet2($QuestionBlocId, $praticienId, $clientId);	 
			}
			*/


			$bilanFor = $clientId;
			$getClientDetailsForNotificationMail = $userManager -> getClientDetailsForNotificationMail($bilanFor);
			
			while ($rows3 = $getClientDetailsForNotificationMail -> fetch()) 
			{
				$clientName = base64_decode($rows3['lastname']);
				$clientEmail = base64_decode($rows3['email']);
			}

			include_once('notificationMail/newDetailedBilanNaturoNotificationMail.php');
			header("location: index.php");
		}

		function testDNS()
		{		
			include_once('view/testDNS/testDNS.php');	
		}

		function testDNSPageTwo()
		{
			include_once('view/testDNS/testDNSPageTwo.php');	
		}

		function testDNSPageThree()
		{
			include_once('view/testDNS/testDNSPageThree.php');	
		}

		function testDNSResultPage()
		{
			include_once('view/testDNS/testDNSResultPage.php');	
		}

		function endTestDNSAndGoHome()
		{
			header("location: index.php?action=accueil");
		}

		function hygenVitalProgram()
		{
			$userManager = new userManager();
			$getPhvDesignForThisClient = $userManager -> getPhvDesignForThisClient();

			$getContentPageDesignForThisClient = $userManager -> getContentPageDesignForThisClient();
			
			$topBorderColor = null;
			$bottomBorderColor = null;
			$backgroundImage = null;
			$imageType = null;
			$ourOffers = null;
			
			while($rows2 = $getContentPageDesignForThisClient -> fetch())
			{
				$topBorderColor = $rows2['topBorderColor'];
				$bottomBorderColor = $rows2['bottomBorderColor'];
				$backgroundImage = $rows2['backgroundImage'];
				$imageType = $rows2['imageType'];
				$ourOffers = $rows2['ourOffers'];
			}

			while ($rows = $getPhvDesignForThisClient -> fetch()) 
			{
				$naturoProgramMyAlimentationContent = $rows['myAlimentationContent'];
				$naturoProgramMyComplementationContent = $rows['myComplementationContent'];
				$naturoProgramMyAromatherapieContent = $rows['myAromatherapieContent'];
				$naturoProgramMyPhythotherapieContent = $rows['myPhythotherapieContent'];
				$naturoProgramMyFleursDeBachContent = $rows['myFleursDeBachContent'];
				$naturoProgramMyStressContent = $rows['myStressContent'];
				$naturoProgramMyHygieneContent = $rows['myHygieneContent'];
				$naturoProgramMyDiversContent = $rows['myDiversContent'];
			}
			include_once('view/phvForThisClient/phvForThisClient.php');	
		}

		function saveBilanPhvToClientFolder($praticienId, $clientId, $phvName, $phvFor, $byPraticien, $shareWithClient, $data)
		{
			$userManager = new userManager();
			$saveBilanPhvToClientFolder = $userManager -> saveBilanPhvToClientFolder($praticienId, $clientId, $phvName, $phvFor, $byPraticien, $shareWithClient, $data);
			header("location: index.php?action=hygenVitalProgram&id=sdkjfh324d654vjkh564dfjkf56462djk".$_SESSION['clientId']."gfjkhfgdfg546dfg54bhk5546465");	
		}

		function testDNSForThisPatient()
		{
			
			include_once('view/testDNSForThisPatient/testDNSForThisPatient.php');	
		}

		function testDNSSubmitOneForThisPatient($userId, $clientId)
		{
			include_once('view/testDNSForThisPatient/testDNSForThisPatientPageTwo.php');	
		}

		function testDNSSubmitTwoForThisPatient($userId, $clientId)
		{
			include_once('view/testDNSForThisPatient/testDNSForThisPatientPageThree.php');	
		}

		function testDNSSubmitThreeForThisPatient($userId, $clientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];

			$userManager = new userManager();
			$getContentPageDesign = $userManager -> getContentPageDesign($userId);

			$backgroundImage = null;

			while ($rows = $getContentPageDesign -> fetch()) 
			{	
				if ($rows['backgroundImage'] == null) 
				{
					if ($rows['backgroundImage'] == null && $rows['ourOffers'] == null) 
					{
						$backgroundType = "offer";
						$backgroundImage = "view/naturoProgramContent/images/offerImage1.png";
					}

					else if ($rows['backgroundImage'] == null && $rows['ourOffers'] !== null) 
					{
						$backgroundType = "offer";
						$backgroundImage = $rows['ourOffers'];
					}
				}

				else
				{
					$backgroundType = "blob";
					$backgroundImage = $rows['backgroundImage'];
				}


			}
			include_once('view/testDNSForThisPatient/testDNSForThisPatientResultPage.php');	
		}

		function savethisClientTestDNS($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();

			$getClientDetailsForDNSNotificationMail = $userManager -> getClientDetailsForDNSNotificationMail($clientId);
			while ($rows = $getClientDetailsForDNSNotificationMail -> fetch()) 
			{
				$clientName = base64_decode($rows['firstname']) . " " . base64_decode($rows['lastname']);
				$clientEmail = $rows['email'];
			}

			include_once('controller/notificationMail/newBilanDNSNotificationMail.php');

			$savethisClientTestDNS = $userManager -> savethisClientTestDNS($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF);

			header('location: index.php?action=testDNSSubmitThreeForThisPatient');	
		}

		function savethisClientTestDNSWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$savethisClientTestDNSWithoutSharing = $userManager -> savethisClientTestDNSWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF);

			header('location: index.php?action=testDNSSubmitThreeForThisPatient');	
		}

		function testGDS()
		{		
			include_once('view/testGDS/GDS1.php');	
		}

		function testGDSE()
		{		
			include_once('view/testGDSE/GDSE1.php');	
		}

		function startGDSTest()
		{		
			include_once('view/testGDS/GDS2.php');	
		}

		function startGDSETest()
		{		
			include_once('view/testGDSE/GDSE2.php');	
		}

		function calculateGDSResult()
		{		
			include_once('view/testGDS/testGDSResult.php');	
		}

		function calculateGDSEResult()
		{		
			include_once('view/testGDSE/testGDSEResult.php');	
		}

		function endTestGDSAndGoHome()
		{		
			header("location: index.php?action=accueil");	
		}

		function endTestGDSEAndGoHome()
		{		
			header("location: index.php?action=accueil");	
		}

		function testGDSForThisPatient()
		{
			
			include_once('view/testGDSForThisPatient/testGDSForThisPatient.php');	
		}

		function testGDSEForThisPatient()
		{
			
			include_once('view/testGDSEForThisPatient/testGDSEForThisPatient.php');	
		}

		function startGDSTestForThisPatient()
		{
			
			include_once('view/testGDSForThisPatient/testGDSForThisPatientPageTwo.php');	
		}

		function startGDSETestForThisPatient()
		{
			
			include_once('view/testGDSEForThisPatient/testGDSEForThisPatientPageTwo.php');	
		}

		function calculateGDSResultForThisPatient()
		{		
			include_once('view/testGDSForThisPatient/testGDSForThisPatientResultPage.php');	
		}

		function calculateGDSEResultForThisPatient()
		{		
			include_once('view/testGDSEForThisPatient/testGDSEForThisPatientResultPage.php');	
		}

		function saveBilanGDSToClientProfil($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF)
		{	
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();

			$getClientDetailsForGDSNotificationMail = $userManager -> getClientDetailsForGDSNotificationMail($clientId);
			while ($rows = $getClientDetailsForGDSNotificationMail -> fetch()) 
			{
				$clientName = base64_decode($rows['firstname']) . " " . base64_decode($rows['lastname']);
				$clientEmail = $rows['email'];
			}

			include_once('controller/notificationMail/newBilanGDSNotificationMail.php');

			$saveBilanGDSToClientProfil = $userManager -> saveBilanGDSToClientProfil($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF);

			header("location: index.php?action=returnToResultPageAfterSaving");
			//include_once('view/testGDSForThisPatient/testGDSForThisPatientResultPage.php');	
		}

		function saveBilanGDSEToClientProfil($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF)
		{	
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();

			$getClientDetailsForGDSENotificationMail = $userManager -> getClientDetailsForGDSENotificationMail($clientId);
			while ($rows = $getClientDetailsForGDSENotificationMail -> fetch()) 
			{
				$clientName = base64_decode($rows['firstname']) . " " . base64_decode($rows['lastname']);
				$clientEmail = $rows['email'];
			}

			include_once('controller/notificationMail/newBilanGDSENotificationMail.php');

			$saveBilanGDSEToClientProfil = $userManager -> saveBilanGDSEToClientProfil($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF);

			header("location: index.php?action=returnToResultPageAfterSaving");
			//include_once('view/testGDSForThisPatient/testGDSForThisPatientResultPage.php');	
		}

		function saveBilanGDSToClientProfilWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF)
		{	
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$saveBilanGDSToClientProfilWithoutSharing = $userManager -> saveBilanGDSToClientProfilWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF);

			header("location: index.php?action=returnToResultPageAfterSaving");
			//include_once('view/testGDSForThisPatient/testGDSForThisPatientResultPage.php');	
		}

		function saveBilanGDSEToClientProfilWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF)
		{	
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$saveBilanGDSEToClientProfilWithoutSharing = $userManager -> saveBilanGDSEToClientProfilWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF);

			header("location: index.php?action=returnToGDSEResultPageAfterSaving");
			//include_once('view/testGDSForThisPatient/testGDSForThisPatientResultPage.php');	
		}

		function endTestGDSForThisPatientAndGoHome()
		{		
			header("location: index.php?action=accueil");	
		}

		function testGDSSP()
		{		
			include_once('view/testGDSSP/testGDSSP.php');	
		}

		/*function testGDSSPPageTwo()
		{
			include_once('view/testGDSSP/testGDSSPPageTwo.php');	
		}*/

		/*/function testGDSSPPageThree()
		{
			include_once('view/testGDSSP/testGDSSPPageThree.php');	
		}*/

		function testGDSSPResultPage()
		{
			include_once('view/testGDSSP/testGDSSPResultPage.php');	
		}

		function endTestGDSSPAndGoHome()
		{
			header("location: index.php?action=accueil");
		}

		function testGDSSPForThisPatient()
		{
			
			include_once('view/testGDSSPForThisPatient/testGDSSPForThisPatient.php');	
		}

		function testGDSSPSubmitOneForThisPatient($userId, $clientId)
		{
			/*include_once('view/testGDSSPForThisPatient/testGDSSPForThisPatientPageTwo.php');*/

			$userManager = new userManager();
			$getContentPageDesign = $userManager -> getContentPageDesign($userId);

			$backgroundImage = null;

			while ($rows = $getContentPageDesign -> fetch()) 
			{	
				if ($rows['backgroundImage'] == null) 
				{
					if ($rows['backgroundImage'] == null && $rows['ourOffers'] == null) 
					{
						$backgroundType = "offer";
						$backgroundImage = "view/naturoProgramContent/images/offerImage1.png";
					}

					else if ($rows['backgroundImage'] == null && $rows['ourOffers'] !== null) 
					{
						$backgroundType = "offer";
						$backgroundImage = $rows['ourOffers'];
					}
				}

				else
				{
					$backgroundType = "blob";
					$backgroundImage = $rows['backgroundImage'];
				}


			}
			include_once('view/testGDSSPForThisPatient/testGDSSPForThisPatientResultPage.php');		
			
		}

		/*function testGDSSPSubmitTwoForThisPatient($userId, $clientId)
		{
			include_once('view/testGDSSPForThisPatient/testGDSSPForThisPatientPageThree.php');	
		}

		function testGDSSPSubmitThreeForThisPatient($userId, $clientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];

			$userManager = new userManager();
			$getContentPageDesign = $userManager -> getContentPageDesign($userId);

			$backgroundImage = null;

			while ($rows = $getContentPageDesign -> fetch()) 
			{	
				if ($rows['backgroundImage'] == null) 
				{
					if ($rows['backgroundImage'] == null && $rows['ourOffers'] == null) 
					{
						$backgroundType = "offer";
						$backgroundImage = "view/naturoProgramContent/images/offerImage1.png";
					}

					else if ($rows['backgroundImage'] == null && $rows['ourOffers'] !== null) 
					{
						$backgroundType = "offer";
						$backgroundImage = $rows['ourOffers'];
					}
				}

				else
				{
					$backgroundType = "blob";
					$backgroundImage = $rows['backgroundImage'];
				}


			}
			include_once('view/testDNSForThisPatient/testDNSForThisPatientResultPage.php');	
		}*/

		function savethisClientTestGDSSP($userId, $clientId, $documentName, $shareWithClient, $testGdsspAsPDF)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$savethisClientTestDNS = $userManager -> savethisClientTestDNS($userId, $clientId, $documentName, $shareWithClient, $testGdsspAsPDF);

			header('location: index.php?action=testDNSSubmitThreeForThisPatient');	
		}

		function savethisClientTestGDSSPWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdsspAsPDF)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$savethisClientTestGDSSPWithoutSharing = $userManager -> savethisClientTestGDSSPWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdsspAsPDF);

			header('location: index.php?action=testGDSSPSubmitThreeForThisPatient');	
		}


		function naturoProgramContent()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];

			$userManager = new userManager();
			$naturoProgramContent = $userManager -> naturoProgramContent($userId);
			
			while($content = $naturoProgramContent -> fetch())
			{	
					$_SESSION['naturoProgramId'] = $content['id'];
					$_SESSION['naturoProgrampPraticienId'] = $content['praticienId'];
					$_SESSION['naturoProgramMyAlimentationContent'] = $content['myAlimentationContent'];
					$_SESSION['naturoProgramMyComplementationContent'] = $content['myComplementationContent'];
					$_SESSION['naturoProgramMyAromatherapieContent'] = $content['myAromatherapieContent'];
					$_SESSION['naturoProgramMyPhythotherapieContent'] = $content['myPhythotherapieContent'];
					$_SESSION['naturoProgramMyFleursDeBachContent'] = $content['myFleursDeBachContent'];
					$_SESSION['naturoProgramMyStressContent'] = $content['myStressContent'];
					$_SESSION['naturoProgramMyHygieneContent'] = $content['myHygieneContent'];
					$_SESSION['naturoProgramMyDiversContent'] = $content['myDiversContent'];
			} 
			include_once('view/naturoProgramContent/naturoProgramContent.php');	
		}

		function confirmThisNaturoProgramContent($myAlimentationContent, $myComplementationContent, $myAromatherapieContent, $myPhythotherapieContent, $myFleursDeBachContent, $myStressContent, $myHygieneContent, $myDiversContent)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];

			$userManager = new userManager();
			$userManager -> confirmThisNaturoProgramContent($myAlimentationContent, $myComplementationContent, $myAromatherapieContent, $myPhythotherapieContent, $myFleursDeBachContent, $myStressContent, $myHygieneContent, $myDiversContent, $userId);
			
			header("location: index.php?action=accueil");
		}

		function naturoContentPageDesigns($topBorderColor, $bottomBorderColor, $offeredPhoto, $userId)
		{
			$userManager = new userManager();
			$userManager -> naturoContentPageDesigns($topBorderColor, $bottomBorderColor, $offeredPhoto, $userId);
			header("location: index.php?action=naturoProgramContent");
		}

		function defaultBackgroundChoice($userId, $image, $imageType, $imageSource, $cryptedImage)
		{
			$userManager = new userManager();
			$userManager -> defaultBackgroundChoice($userId, $image, $imageType, $imageSource, $cryptedImage);
			header("location: index.php?action=accueil");	
		}

		function backgroundChoices($userId, $image, $imageType, $cryptedImage, $imageSource)
		{
			$userManager = new userManager();
			$userManager -> backgroundChoices($userId, $image, $imageType, $cryptedImage, $imageSource);
			header("location: index.php?action=accueil");	
		}

		function goBack()
		{
			$userManager = new userManager();
			$userManager -> goBack();
		}

		function accueil()
		{
			header("location: view/dashboard/dashboard.php");
		}

		function map()
		{
			include_once("view/map/map.php");
		}

		function agenda()
		{
			header("location: view/agenda/agenda.php");
		}

		function gotoMails()
		{
			header("location: view/mails/mails.php");
		}

		function sendThisMail($sendFrom, $sendTo, $mailSubject, $message, $mailStatus)
		{
			if (session_status() == PHP_SESSION_NONE) 
			{
				session_start();
			}
			
			$userManager = new userManager();
			$userManager -> sendThisMail($sendFrom, $sendTo, $mailSubject, $message, $mailStatus);
			
			header("location: view/mails/mails.php");	
		}

		function cancel()
		{
			header("location: view/mails/mails.php");
		}

		function deleteThisSelectedMail($id)
		{
			$userManager = new userManager();
			$userManager -> deleteThisSelectedMail($id);
			header("location: view/mails/mails.php");
		}

		function addAClient()
		{
			header("location: view/addAClient/addAClient.php");	
		}

		function createAClientAccount()
		{
			header("location: view/createAClientAccount/createAClientAccount.php");	
		}

		function precreateThisClientAccount($clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity, $verificationKey)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$praticienId = $_SESSION['userId'];

			$emailToSend = base64_decode($clientEmail);

			$userManager = new userManager();
			$precreateThisClientAccount = $userManager -> precreateThisClientAccount($clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity, $verificationKey);

			$getClientIdThroughVerificationKey = $userManager -> getClientIdThroughVerificationKey($verificationKey);

			while($rows = $getClientIdThroughVerificationKey -> fetch())
			{
				$catchedId = $rows['id'];	
				$linkMeWithThisClient = $userManager -> linkMeWithThisClient($catchedId, $praticienId);
			}

			$clientId = $catchedId;
			$unique2 = base64_encode($clientId);
			$key = $unique2;

			include_once("sendClientPreAccountLink/sendClientPreAccountLink.php");

			header("location: index.php?action=showClientsList");	
		}

		function resendTheClientVerificationCode($clientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$clientFirstName = null;
			$emailToSend = null;
			$verificationKey = null;
			$key = null;
			$userManager = new userManager();
			$resendTheClientVerificationCode = $userManager -> resendTheClientVerificationCode($clientId);
			$numberOfResults = $resendTheClientVerificationCode -> rowCount();

			while ($rows = $resendTheClientVerificationCode -> fetch()) 
			{
				$clientFirstName = $rows['firstname'];
				$emailToSend = base64_decode($rows['email']);
				$verificationKey = $rows['verificationKey'];
				$key = base64_encode($rows['id']);
			}
			include_once("sendClientPreAccountLink/sendClientPreAccountLink.php");
		}

		function files()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];
			$userManager = new userManager();
			$getMyClientData = $userManager -> files($userId);
			$numberOfResults = $getMyClientData -> rowCount();

			$getMyClientData2 = $userManager -> files2($userId);
			include_once('view/files/files.php');
		}

		function documents()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];
			$userManager = new userManager();
			$getMyClientData= $userManager -> documents($userId);
			$numberOfResults = $getMyClientData -> rowCount();

			$getMyClientWithAccountData = $userManager -> getMyClientWithAccountData($userId);


			/* ---------------- FIRST REQUEST FOR NATUROSHEET ---------------- */

			$getNaturoDocuments = $userManager -> getNaturoDocuments($userId);
			/* -------------- END FIRST REQUEST FOR NATUROSHEET -------------- */
			

			/* ---------------- FIRST REQUEST FOR SHARING DOCUMENTS ---------------- */
			$getSharedDocuments = $userManager -> getSharedDocuments($userId);
			
			/* ---------------- END FIRST REQUEST FOR SHARING DOCUMENTS ---------------- */
			include_once('view/documents/documents.php');
		}

		function documentsSharedWithMe()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];
			$userManager = new userManager();

			$getSharedDocuments = $userManager -> getSharedDocuments($userId);

			include_once('view/sharedDocuments/sharedDocuments.php');
		}

		function viewThisClientDocuments($myClientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];
			$_SESSION['myClientId'] = $myClientId;

			$userManager = new userManager();
			$viewThisClientDocuments = $userManager -> viewThisClientDocuments($userId,$myClientId);
			$numberOfResults = $viewThisClientDocuments -> rowCount();

			$viewThisClientDocuments2 = $userManager -> viewThisClientDocuments2($userId,$myClientId);
			$numberOfResults2 = $viewThisClientDocuments2 -> rowCount();

			$viewThisClientDocuments3 = $userManager -> viewThisClientDocuments3($userId,$myClientId);
			$numberOfResults3 = $viewThisClientDocuments3 -> rowCount();

			$viewThisClientDocuments4 = $userManager -> viewThisClientDocuments4($userId,$myClientId);
			$numberOfResults4 = $viewThisClientDocuments4 -> rowCount();

			$viewThisClientDocuments5 = $userManager -> viewThisClientDocuments5($userId,$myClientId);
			$numberOfResults5 = $viewThisClientDocuments5 -> rowCount();

			$viewThisClientDocuments6 = $userManager -> viewThisClientDocuments6($userId,$myClientId);
			$numberOfResults6 = $viewThisClientDocuments6 -> rowCount();

			$viewThisClientDocuments7 = $userManager -> viewThisClientDocuments7($userId,$myClientId);
			$numberOfResults7 = $viewThisClientDocuments7 -> rowCount();

			$viewThisClientDocuments8 = $userManager -> viewThisClientDocuments8($userId,$myClientId);
			$numberOfResults8 = $viewThisClientDocuments8 -> rowCount();

			/*while($rows8 = $viewThisClientDocuments8 -> fetch())
			{
				$questionSheetId = $rows8['id'];
				$viewThisClientDocuments9 = $userManager -> viewThisClientDocuments9($questionSheetId);
				$numberOfResults9 = $viewThisClientDocuments9 -> rowCount();
				
				while ($rows9 = $viewThisClientDocuments9 -> fetch()) 
				{
					echo $rows9[''];
				}
			}*/

			$getSharedDocumentsFromThisClient = $userManager -> getSharedDocumentsFromThisClient($userId, $myClientId);

			include_once('view/viewThisClientDocuments/viewThisClientDocuments.php');
		}

		function importThisBilanTwoAnswersSubmittedByClient($myClientId, $questionSheetId)
		{

			$userManager = new userManager();
			$importThisBilanTwoAnswersSubmittedByClient1 = $userManager -> importThisBilanTwoAnswersSubmittedByClient1($myClientId, $questionSheetId);

			while($rows = $importThisBilanTwoAnswersSubmittedByClient1 -> fetch())
			{
				$bloc1 = $rows['bloc1'];
				$bloc2 = $rows['bloc2'];
				$bloc3 = $rows['bloc3'];
				$bloc4 = $rows['bloc4'];
				
				$importThisBilanTwoAnswersSubmittedByClient2 = $userManager -> importThisBilanTwoAnswersSubmittedByClient2($myClientId, $questionSheetId);
				
				
				while($rows2 = $importThisBilanTwoAnswersSubmittedByClient2 -> fetch())
				{
					for ($i=1; $i < 318 ; $i++) 
					{ 
						${"answer".$i} = $rows2['answer'.$i];
					}
				}
			}
			include_once('view/importThisBilanTwoAnswersSubmittedByClient/importThisBilanTwoAnswersSubmittedByClient.php');
		}

		function updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien($questionSheetId, $questionNumber, $questionAnswer)
		{

			$userManager = new userManager();
			$updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien = $userManager -> updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien($questionSheetId, $questionNumber, $questionAnswer);
		}

		function addThisFileForMyClient($userId, $myClientId, $move_to, $myFile)
		{

			$userManager = new userManager();
			
			$getClientDetailsForSendingMail = $userManager -> getClientDetailsForSendingMail($myClientId);

			while($rows = $getClientDetailsForSendingMail -> fetch())
			{
				$clientName = base64_decode($rows['firstname']) . " " . base64_decode($rows['lastname']);
				$clientEmail = $rows['email'];
			}

			include_once('controller/notificationMail/addedDocumentNotificationMail.php');

			$addThisFileForMyClient = $userManager -> addThisFileForMyClient($userId, $myClientId, $move_to, $myFile);
			$numberOfResults = $addThisFileForMyClient -> rowCount();
			
			header("location:index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk".$myClientId."gfjkhfgdfg546dfg54bhk5546465");
		}

		function deleteThisDocumentFromMyClientFolder($fileDatabaseId, $fileLocation)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$myClientId = $_SESSION['myClientId'];

			$userManager = new userManager();
			$deleteThisDocumentFromMyClientFolder = $userManager -> deleteThisDocumentFromMyClientFolder($fileDatabaseId);
			$numberOfResults = $deleteThisDocumentFromMyClientFolder -> rowCount();
			unlink( $fileLocation);

			header("location:index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk".$myClientId."gfjkhfgdfg546dfg54bhk5546465");
		}

		function deleteThisBilanFromMyClientFolder($bilanId, $myClientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$deleteThisBilanFromMyClientFolder = $userManager -> deleteThisBilanFromMyClientFolder($bilanId);
			$numberOfResults = $deleteThisBilanFromMyClientFolder -> rowCount();
			header("location:index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk".$myClientId."gfjkhfgdfg546dfg54bhk5546465");
		}

		function deleteThisTestDnsFromMyClientFolder($documentId, $myClientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$deleteThisTestDnsFromMyClientFolder = $userManager -> deleteThisTestDnsFromMyClientFolder($documentId);
			$numberOfResults = $deleteThisTestDnsFromMyClientFolder -> rowCount();
			header("location: index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk".$myClientId."gfjkhfgdfg546dfg54bhk5546465");
		}

		function deleteThisTestGdsFromMyClientFolder($documentId, $myClientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$deleteThisTestGdsFromMyClientFolder = $userManager -> deleteThisTestGdsFromMyClientFolder($documentId);
			$numberOfResults = $deleteThisTestGdsFromMyClientFolder -> rowCount();
			header("location:index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk".$myClientId."gfjkhfgdfg546dfg54bhk5546465");
		}

		function deleteThisTestGdseFromMyClientFolder($documentId, $myClientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$deleteThisTestGdseFromMyClientFolder = $userManager -> deleteThisTestGdseFromMyClientFolder($documentId);
			$numberOfResults = $deleteThisTestGdseFromMyClientFolder -> rowCount();
			header("location:index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk".$myClientId."gfjkhfgdfg546dfg54bhk5546465");
		}

		function deleteThisFleursBilanFromMyClientFolder($bilanId, $myClientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$deleteThisFleursBilanFromMyClientFolder = $userManager -> deleteThisFleursBilanFromMyClientFolder($bilanId);
			$numberOfResults = $deleteThisFleursBilanFromMyClientFolder -> rowCount();
			header("location:index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk".$myClientId."gfjkhfgdfg546dfg54bhk5546465");
		}

		function deleteThisPhvDocumentFromMyClientFolder($documentId, $clientId)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userManager = new userManager();
			$deleteThisPhvDocumentFromMyClientFolder = $userManager -> deleteThisPhvDocumentFromMyClientFolder($documentId);
			$numberOfResults = $deleteThisPhvDocumentFromMyClientFolder -> rowCount();
			header("location:index.php?action=viewThisClientDocuments&myClientId=sdkjfh324d654vjkh564dfjkf56462djk".$clientId."gfjkhfgdfg546dfg54bhk5546465");
		}

		function addThisClient($clientFor, $clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity)
		{
			$userManager = new userManager();
			$userManager -> addThisClient($clientFor, $clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity);
			header("location: index.php?action=personalRepositories");
		}

		function personalRepositories($clientFor)
		{
			$userManager = new userManager();
			$personalRepositories = $userManager -> personalRepositories($clientFor);
			$numberOfResults = $personalRepositories -> rowCount();

			include_once('view/personalRepositories/personalRepositories.php');
		}

		function getPersonalRepositoryDocuments($clientFor, $repositoryId)
		{
			$myId = $clientFor;
			$myRepositoryId = $repositoryId;


			$userManager = new userManager();
			$getPersonalRepositoryDocuments = $userManager -> getPersonalRepositoryDocuments($myRepositoryId, $myId);
			
			$numberOfResults = $getPersonalRepositoryDocuments -> rowCount();

			include_once('view/personalRepositoryDocuments/personalRepositoryDocuments.php');
		}

		function deleteThisDocumentFromMyPersonalFolder($folderId, $fileDatabaseId, $fileLocation)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$myClientId = $_SESSION['myClientId'];

			$userManager = new userManager();
			$deleteThisDocumentFromMyPersonalFolder = $userManager -> deleteThisDocumentFromMyPersonalFolder($fileDatabaseId);
			$numberOfResults = $deleteThisDocumentFromMyPersonalFolder -> rowCount();
			unlink( $fileLocation);

			header("location:index.php?action=getPersonalRepositoryDocuments&id=".$folderId);
		}

		function addThisFileForMyPersonalFolder($userId, $myFolderId, $move_to, $myFile)
		{

			$userManager = new userManager();
			$addThisFileForMyPersonalFolder = $userManager -> addThisFileForMyPersonalFolder($userId, $myFolderId, $move_to, $myFile);
			$numberOfResults = $addThisFileForMyPersonalFolder -> rowCount();
			
			header("location:index.php?action=getPersonalRepositoryDocuments&id=".$myFolderId);
		}

		function showClientsList($clientFor)
		{
			$userManager = new userManager();
			$connectPraticienToClient = $userManager -> connectPraticienToClient($clientFor);
			$numberOfResults = $connectPraticienToClient -> rowCount();

			include_once('view/clients/clients.php');
		}

		function showMaleClients($clientFor)
		{
			$userManager = new userManager();
			$showMaleClientsFromConnections = $userManager -> showMaleClientsFromConnections($clientFor);			
			$numberOfResults = $showMaleClientsFromConnections -> rowCount();

			include_once('view/maleClients/maleClients.php');
		}

		function showFemaleClients($clientFor)
		{
			$userManager = new userManager();
			$showFemaleClientsFromConnections = $userManager -> showFemaleClientsFromConnections($clientFor);
			$numberOfResults = $showFemaleClientsFromConnections -> rowCount();

			
			include_once('view/femaleClients/femaleClients.php');
		}

		function showTeenClients($clientFor)
		{
			$userManager = new userManager();
			$showTeenClientsFromConnections = $userManager -> showTeenClientsFromConnections($clientFor);
			$numberOfResults = $showTeenClientsFromConnections -> rowCount();

			include_once('view/teenClients/teenClients.php');
		}

		function showChildClients($clientFor)
		{
			$userManager = new userManager();
			$showChildClientsFromConnections = $userManager -> showChildClientsFromConnections($clientFor);
			$numberOfResults = $showChildClientsFromConnections -> rowCount();
			include_once('view/childClients/childClients.php');
		}

		function getClientDetails($id)
		{
			$userManager = new userManager();
			$getClientsDetails = $userManager -> getClientDetails($id);
			include_once("view/clientFolder/clientFolder.php");
		}

		function getClientDetailsFromUserLists($id)
		{
			$userManager = new userManager();
			$getClientDetailsFromUserLists = $userManager -> getClientDetailsFromUserLists($id);
			include_once("view/clientFolderFromUsers/clientFolderFromUsers.php");
		}

		function modifyClientDetails($id)
		{
			$userManager = new userManager();
			$modifyClientDetails = $userManager -> modifyClientDetails($id);
			include_once("view/modifyClientDetails/modifyClientDetails.php");
		}

		function fleursDeBachForThisPatient()
		{
			header("location:view/fleursDeBachForThisPatient/index.php?action=questions1");
		}

		function bilanNaturoForThisPatient($bilanFor)
		{
			$userManager = new userManager();
			$getClientBasicInformationForBilanNaturo = $userManager -> getClientBasicInformationForBilanNaturo($bilanFor);
			while ($rows = $getClientBasicInformationForBilanNaturo -> fetch()) 
			{
				if (session_status() === PHP_SESSION_NONE) 
				{
					session_start();
				}

				$_SESSION['bilanForClientFirstName'] = base64_decode($rows['firstname']);
				$_SESSION['bilanForClientLastName'] = base64_decode($rows['lastname']);
				$_SESSION['bilanForClientAddress'] = base64_decode($rows['roadNumber']). " " . base64_decode($rows['roadName']) . ", " . base64_decode($rows['postalCode']) . " " . base64_decode($rows['city']);
				$_SESSION['bilanForClientEmail'] = base64_decode($rows['email']);
				$_SESSION['bilanForClientPhoneNumber'] = base64_decode($rows['phoneNumber']);
				
				$_SESSION['bilanForClientDateOfBirth'] = $rows['dob'];
  				$today = date("Y-m-d");
  				$diff = date_diff(date_create($_SESSION['bilanForClientDateOfBirth']), date_create($today));
				$_SESSION['bilanForClientAge'] = $diff->format('%y');
				$_SESSION['bilanForClientAge'] = $_SESSION['bilanForClientAge']. " ans";
			}
			header("location:view/bilanNaturoForThisPatient/bilanNaturoForThisPatientFirstPage.php");
		}

		function bilanNaturoForThisPatientResultPage()
		{
			header("location:view/bilanNaturoForThisPatient/bilanNaturoForThisPatientResultPage.php");
		}

		function bilanNaturoForThisPatientSaveTo($bilanFor)
		{
			$userManager = new userManager();
			$userManager -> bilanNaturoForThisPatientSaveTo($bilanFor);
			
		}

		function modifyClientDetailsAsThis($id, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientPostalCode, $clientCity)
		{
			$userManager = new userManager();
			$modifyClientDetailsAsThis = $userManager -> modifyClientDetailsAsThis($id, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientPostalCode, $clientCity);
			header("location: index.php?action=getClientDetails&id=". $id);
		}

		function deleteThisClientFolder($id)
		{
			$userManager = new userManager();
			$deleteThisClientFolder = $userManager -> deleteThisClientFolder($id);
			//rmdir('data/clients/'.$id);
			//unlink('data/clients/'.$id);
			header("location: index.php?action=personalRepositories");
		}

		function deleteThisLinkFromMyConnections($id)
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];

			$userManager = new userManager();
			$deleteThisClientFolder = $userManager -> deleteThisLinkFromMyConnections($id, $userId);
			//rmdir('data/clients/'.$id);
			//unlink('data/clients/'.$id);
			header("location: index.php?action=showClientsList");
		}

		function clear($userId)
		{
			$userManager = new userManager();
			$userManager -> clear($userId);
		}

		function help()
		{
			header("location: view/help/help.php");
		}

		function scheduler()
		{
			$userManager = new userManager();
			$userManager -> scheduler();
		}

		function deleteThisNotification($id)
		{
			$userManager = new userManager();
			$userManager -> deleteThisNotification($id);
		}

		function updatePraticienJustificatifs($praticienId, $fileName, $cryptedImage)
		{
			$userManager = new userManager();
			$userManager -> updatePraticienJustificatifs($praticienId, $fileName, $cryptedImage);
			header("location: index.php?action=accueil");
		}
	}