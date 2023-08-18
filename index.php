<?php
	require('controller/controller_admin.php');


	if (isset($_GET['action']))
	{

		if ($_GET['action'] == "faceRecognition") 
		{
			$controls_admin = new controls_Admin();
			$controls_admin -> faceRecognition($userId);
		}

		if ($_GET['action'] == "loginThisUserByFaceRecognition") 
		{
			$userId = $_GET['userId'];

			echo $userId;
			$controls_admin = new controls_Admin();
			$controls_admin -> loginThisUserByFaceRecognition($userId);
		}

		if ($_GET['action'] == "createAccountNextPageTwo") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['sexe'] = $_POST['sexe'];
			$_SESSION['firstname'] = base64_encode($_POST['firstname']);
			$_SESSION['lastname'] = base64_encode($_POST['lastname']);
			$_SESSION['email'] = base64_encode($_POST['mail']) ;
			$_SESSION['username'] = base64_encode($_POST['username']);
			$_SESSION['password'] = base64_encode($_POST['password']);
			$_SESSION['retypedPassword'] = base64_encode($_POST['retypedPassword']);
			$_SESSION['dob'] = $_POST['dateOfBirth'];

			$_SESSION['faceRecognition'] = $_POST['faceRecognition'];


			if ($_SESSION['faceRecognition'] == "yes") 
			{
				$_SESSION['capturedImage'] = $_POST['capturedImage'];
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> createAccountNextPageTwo();

		}

		if ($_GET['action'] == "createAccountNextPageThree") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['praticienRoadNumber'] = $_POST['praticienRoadNumber'];
			$_SESSION['praticienRoadName'] = $_POST['praticienRoadName'];
			$_SESSION['praticienComplementAddress'] = $_POST['praticienComplementAddress'];
			$_SESSION['praticienCityName'] = $_POST['praticienCityName'];
			$_SESSION['praticienCodePostal'] = $_POST['praticienCodePostal'];
			$_SESSION['praticienCountry'] = $_POST['praticienCountry'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> createAccountNextPageThree();
			
		}

		if ($_GET['action'] == "accountCreateRequest")
		{
			$Naturopathe = 0;
			$Réflexologue = 0;
			$Sophrologue = 0;
			$Médecin = 0;
			$Chirurgien = 0;
			$Pharmacien = 0;
			$Dentiste = 0;
			$SageFemme = 0;
			$Vétérinaire = 0;
			$AideSoignant = 0;
			$AuxiliaireDePuériculture = 0;
			$Infirmier = 0;
			$InfirmierDeBlocOpératoire = 0;
			$InfirmierAnesthésiste = 0;
			$Podologue = 0;
			$Kinésithérapeute = 0;
			$Ergothérapeute = 0;
			$Orthophoniste = 0;
			$Psychomotricien = 0;
			$Diététicien = 0;
			$Orthoprothésiste = 0;
			$Orthoptiste = 0;
			$Pédicure = 0;
			$ManipulateurEnElectroradiologieMédicale = 0;
			$TechnicienDeLaboratoire = 0;
			$PréparateurEnPharmacie = 0;
			$Ambulancier = 0;
			$Psychologue = 0;
			$Ophtalmologue = 0;
			$autres = 0;

			if (isset($_POST['Naturopathe']))
			{
				$Naturopathe = 1;
			}

			if (isset($_POST['Réflexologue']))
			{
				$Réflexologue = 1;
			}

			if (isset($_POST['Sophrologue']))
			{
				$Sophrologue = 1;
			}

			if (isset($_POST['Médecin']))
			{
				$Médecin = 1;
			}

			if (isset($_POST['Chirurgien']))
			{
				$Chirurgien = 1;
			}

			if (isset($_POST['Pharmacien']))
			{
				$Pharmacien = 1;
			}

			if (isset($_POST['Dentiste']))
			{
				$Dentiste = 1;
			}

			if (isset($_POST['SageFemme']))
			{
				$SageFemme = 1;
			}

			if (isset($_POST['Vétérinaire']))
			{
				$Vétérinaire = 1;
			}
			
			if (isset($_POST['AideSoignant']))
			{
				$AideSoignant = 1;
			}
			
			if (isset($_POST['AuxiliaireDePuériculture']))
			{
				$AuxiliaireDePuériculture = 1;
			}
			
			if (isset($_POST['Infirmier']))
			{
				$Infirmier = 1;
			}
			
			if (isset($_POST['InfirmierDeBlocOpératoire']))
			{
				$InfirmierDeBlocOpératoire = 1;
			}
			
			if (isset($_POST['InfirmierAnesthésiste']))
			{
				$InfirmierAnesthésiste = 1;
			}
			
			if (isset($_POST['Podologue']))
			{
				$Podologue = 1;
			}
			
			if (isset($_POST['Kinésithérapeute']))
			{
				$Kinésithérapeute = 1;
			}
			
			if (isset($_POST['Ergothérapeute']))
			{
				$Ergothérapeute = 1;
			}
			
			if (isset($_POST['Orthophoniste']))
			{
				$Orthophoniste = 1;
			}
			
			if (isset($_POST['Psychomotricien']))
			{
				$Psychomotricien = 1;
			}
			
			if (isset($_POST['Diététicien']))
			{
				$Diététicien = 1;
			}
			
			if (isset($_POST['Orthoprothésiste']))
			{
				$Orthoprothésiste = 1;
			}
			
			if (isset($_POST['Orthoptiste']))
			{
				$Orthoptiste = 1;
			}
			
			if (isset($_POST['Pédicure']))
			{
				$Pédicure = 1;
			}
			
			if (isset($_POST['ManipulateurEnElectroradiologieMédicale']))
			{
				$ManipulateurEnElectroradiologieMédicale = 1;
			}
			
			if (isset($_POST['TechnicienDeLaboratoire']))
			{
				$TechnicienDeLaboratoire = 1;
			}
			
			if (isset($_POST['PréparateurEnPharmacie']))
			{
				$PréparateurEnPharmacie = 1;
			}
			
			if (isset($_POST['Ambulancier']))
			{
				$Ambulancier = 1;
			}
			
			if (isset($_POST['Psychologue']))
			{
				$Psychologue = 1;
			}
			
			if (isset($_POST['Ophtalmologue']))
			{
				$Ophtalmologue = 1;
			}

			if (isset($_POST['autres'])) 
			{
			 	$autres = 1;
			}
			
			error_reporting(E_ERROR | E_PARSE);
			
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['praticienWorkPermit'] = rand(1000,100000) . "-" . $_FILES['praticienWorkPermit']['name'];
			$_SESSION['praticienEducationQualification'] = $_POST['praticienEducationQualification'];
			$_SESSION['praticienDegreeOrCertificat'] = rand(1000,100000) . "-" . $_FILES['praticienDegreeOrCertificat']['name'];
			$_SESSION['praticienCabinetPhoneNumber'] = $_POST['praticienCabinetPhoneNumber'];
			$_SESSION['praticienSignature'] = $_POST['praticienSignature'];

			$sexe = $_SESSION['sexe'];
			$firstname = $_SESSION['firstname'];
			$lastname = $_SESSION['lastname'];
			$email = $_SESSION['email'];
			$username = $_SESSION['username'];
			$password = $_SESSION['password'];
			$dob = $_SESSION['dob'];

			$praticienRoadNumber = $_SESSION['praticienRoadNumber'];
			$praticienRoadName = $_SESSION['praticienRoadName'];
			$praticienComplementAddress = $_SESSION['praticienComplementAddress'];
			$praticienCityName = $_SESSION['praticienCityName'];
			$praticienCodePostal = $_SESSION['praticienCodePostal'];
			$praticienCountry = $_SESSION['praticienCountry'];

			$praticienWorkPermit = $_SESSION['praticienWorkPermit'];
			$praticienEducationQualification = $_SESSION['praticienEducationQualification'];
			$praticienDegreeOrCertificat = $_SESSION['praticienDegreeOrCertificat'];
			$praticienCabinetPhoneNumber = $_SESSION['praticienCabinetPhoneNumber'];
			$praticienSignature = $_SESSION['praticienSignature'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> accountCreateRequest($sexe, $firstname, $lastname, $email, $username, $password, $dob, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienWorkPermit, $praticienEducationQualification, $praticienDegreeOrCertificat, $praticienCabinetPhoneNumber, $praticienSignature, $Naturopathe, $Réflexologue, $Sophrologue, $Médecin, $Chirurgien, $Pharmacien, $Dentiste, $SageFemme, $Vétérinaire, $AideSoignant, $AuxiliaireDePuériculture, $Infirmier, $InfirmierDeBlocOpératoire, $InfirmierAnesthésiste, $Podologue, $Kinésithérapeute, $Ergothérapeute, $Orthophoniste, $Psychomotricien, $Diététicien, $Orthoprothésiste, $Orthoptiste, $Pédicure, $ManipulateurEnElectroradiologieMédicale, $TechnicienDeLaboratoire,$PréparateurEnPharmacie, $Ambulancier, $Psychologue, $Ophtalmologue, $autres);
		}
		
		if ($_GET['action'] == "login") 
		{
			$username = base64_encode($_POST['username']);
			$password = base64_encode($_POST['password']);
			$controls_admin = new controls_Admin();
			$controls_admin -> login($username, $password);
		}

		if ($_GET['action'] == "checkEmailAndPasswordForRecovery") 
		{
			$code = rand("1000", "9999");
			$email = base64_encode($_POST['email']);
			$dateOfBirth = $_POST['dateOfBirth'];
			
			/*
			echo $dateOfBirth . "<br>";
			$yyyy = substr($dateOfBirth,0,4);
			$mm = substr($dateOfBirth,5,2);
			$dd = substr($dateOfBirth,8,2);
			$convertedDate = $yyyy."-".$mm."-".$dd;
			echo $convertedDate;
			*/
			if ($email && $dateOfBirth != null) 
			{
				$controls_admin = new controls_Admin();
				$controls_admin -> checkEmailAndPasswordForRecovery($email, $dateOfBirth, $code);		
			}

			else
			{
				
			}
		}

		if ($_GET['action'] == "checkInsertedCode") 
		{
			session_start();
			$recoveryEmail = $_SESSION['recoveryEmail'];
			$code = $_POST['code'];
			$controls_admin = new controls_Admin();
			$controls_admin -> checkInsertedCode($recoveryEmail, $code);
		}


		if ($_GET['action'] == "resetPassword") 
		{
			$password = base64_encode($_POST['password']);
			$retypedPassword = base64_encode($_POST['retypedPassword']);
			session_start();
			$recoveryEmail = $_SESSION['recoveryEmail'];

			$controls_admin = new controls_Admin();
			$controls_admin -> resetPassword($recoveryEmail, $password,$retypedPassword);
		}


		if ($_GET['action'] == "wrongPassword") 
		{
			header("location: view/wrongPassword/wrongPassword.php");		
		}

		if ($_GET['action'] == "settings") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> settings();
		}

		if ($_GET['action'] == "cabinetManagement") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> cabinetManagement();
		}

		if ($_GET['action'] == "aboutUs") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> aboutUs();
		}

		if ($_GET['action'] == "updateAccount") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			
			$userId = $_SESSION['userId'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$dob = $_POST['dob'];
			$password = $_POST['password'];
			$retypedPassword = $_POST['retypedPassword'];

			$praticienRoadNumber = $_POST['praticienRoadNumber'];
			$praticienRoadName = $_POST['praticienRoadName'];
			$praticienComplementAddress = $_POST['praticienComplementAddress'];
			$praticienCityName = $_POST['praticienCityName'];
			$praticienCodePostal = $_POST['praticienCodePostal'];
			$praticienCountry = $_POST['praticienCountry'];
			$praticienEducationQualification = $_POST['praticienEducationQualification'];
			$praticienCabinetPhoneNumber = $_POST['praticienCabinetPhoneNumber'];


			$controls_admin = new Controls_Admin();
			$controls_admin -> updateAccount($userId, $firstname, $lastname, $username, $email, $dob, $password, $retypedPassword, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienEducationQualification, $praticienCabinetPhoneNumber);
		}


		if ($_GET['action'] == "logout")
		{

			$controls_admin = new Controls_Admin();
			$controls_admin -> logout();
		}

		if ($_GET['action'] == "forgetPassword") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> forgetPassword();
		}

		if ($_GET['action'] == "forgetIdentification") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> forgetIdentification();
		}

		/* ------------------------------------ PACKAGE --------------------------------------- */
		if ($_GET['action'] == "takePackage") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> takePackage();
		}
		

		/* ------------------------------------ END PACKAGE --------------------------------------- */

		if ($_GET['action'] == "packageOption1") 
		{
			$packagePrice = 5;
			$controls_admin = new Controls_Admin();
			$controls_admin -> packageOption1Choosen($packagePrice);
		}

		if ($_GET['action'] == "packageOption2") 
		{
			$packagePrice = 7;
			$controls_admin = new Controls_Admin();
			$controls_admin -> packageOption2Choosen($packagePrice);
		}

		if ($_GET['action'] == "packageOption3") 
		{
			$packagePrice = 9;
			$controls_admin = new Controls_Admin();
			$controls_admin -> packageOption3Choosen($packagePrice);
		}

		if ($_GET['action'] == "packageOption4") 
		{
			$packagePrice = 10;
			$controls_admin = new Controls_Admin();
			$controls_admin -> packageOption4Choosen($packagePrice);
		}

		if ($_GET['action'] == "purchaseSuccess") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userId = $_SESSION['userId'];

			$id = $_GET['id'];
			$status = $_GET['status'];
			$amount = $_GET['amount'];
			$paymentTime = $_GET['paymentTime'];
			$payerEmail = $_GET['payerEmail'];
			$payerGivenName = $_GET['payerGivenName'];
			$payerSurname = $_GET['payerSurname'];
			$payerId = $_GET['payerId'];

			if ($status === "COMPLETED") 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> purchaseSuccess($userId, $id, $status, $amount, $paymentTime, $payerEmail, $payerGivenName, $payerSurname, $payerId);	
			}
			
		}

		if ($_GET['action'] == "purchaseFailed") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			echo "purchased failed !" ;
			$purchaserId = $_SESSION['userId'];
			echo $purchaserId;
			$purchasedItem = $_SESSION['purchasedItem'];
			$today = new Date('dd/mm/Y');
			echo $today;
		}

		/* -------------------------------------- BILAN NATURO FROM HOMEPAGE --------------------------------------- */

		if ($_GET['action'] == "naturoSheet") 
		{
			
			if (session_status() === PHP_SESSION_NONE)
			{
				session_start();
			}

			$_SESSION['naturoFormLastName'] = '' ;
			$_SESSION['naturoFormFirstName'] = '' ;
			$_SESSION['naturoFormAge'] = '' ;
			$_SESSION['naturoFormProfession'] = '' ;
			$_SESSION['naturoFormAddress'] = '' ;
			$_SESSION['naturoFormPhoneNumber'] = '' ;
			$_SESSION['naturoFormEmail'] = '' ;
			$_SESSION['naturoFormFamilyDoctor'] = '' ;
			$_SESSION['naturoFormOsteoName'] = '' ;
			$_SESSION['naturoFormKineName'] = '' ;
			$_SESSION['naturoFormOtherSpecialists'] = '' ;
			$_SESSION['naturoFormConsultationMotif'] = '' ;
			$_SESSION['naturoFormTroubleHistory'] = '' ;

			$_SESSION['naturoFormMedicalAntecedents'] = '' ;
			$_SESSION['naturoFormSergicalAntecedents'] = '' ;
			$_SESSION['naturoFormFamilialAntecedents'] = '' ;
			$_SESSION['naturoFormAllergies'] = '' ;
			$_SESSION['naturoFormFemaleCases'] = '' ;
			$_SESSION['naturoFormRunningTreatment'] = '' ;
			$_SESSION['naturoFormOthersRunningTreatment'] = '' ;
			$_SESSION['naturoFormHeightAndWeight'] = '' ;
			$_SESSION['naturoFormSpecialMedicalFollowings'] = '' ;

			$_SESSION['naturoFormVitalEnergy'] = 0 ;
			$_SESSION['naturoFormMoral'] = 0 ;
			$_SESSION['naturoFormStress'] =  0 ;
			$_SESSION['naturoFormEmotions'] = 0 ;
			$_SESSION['naturoFormLifeStyle'] = '' ;
			$_SESSION['naturoFormMealHabits'] = '' ;
			$_SESSION['naturoFormTabacs'] = '' ;
			$_SESSION['naturoFormActivities'] = '' ;
			$_SESSION['naturoFormProfessionalEnvironment'] = '' ;

			$_SESSION['naturoFormSleep'] = '' ;
			$_SESSION['naturoFormDigest'] = '' ;
			$_SESSION['naturoFormOsteoArticular'] = '' ;
			$_SESSION['naturoFormLungs'] = '' ;
			$_SESSION['naturoFormCardiac'] = '' ;
			$_SESSION['naturoFormCircular'] = '' ;
			$_SESSION['naturoFormOrl'] = '' ;
			$_SESSION['naturoFormRenal'] = '' ;
			$_SESSION['naturoFormSkin'] = '' ;
			$_SESSION['naturoFormUroGenital'] = '' ;

			$controls_admin = new Controls_Admin();
			$controls_admin -> naturoSheet();
		}

		if ($_GET['action'] == "naturoSheetGetResult") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			if (isset($_POST['revenir'])) 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> naturoSheetGoToThirdPage();
			}

			if (isset($_POST['submit'])) 
			{
				$_SESSION['naturoFormLastName'] = $_POST['naturoFormLastName'];
				$_SESSION['naturoFormFirstName'] = $_POST['naturoFormFirstName'];
				$_SESSION['naturoFormAge'] = $_POST['naturoFormAge'];
				$_SESSION['naturoFormProfession'] = $_POST['naturoFormProfession'];
				$_SESSION['naturoFormAddress'] = $_POST['naturoFormAddress'];
				$_SESSION['naturoFormPhoneNumber'] = $_POST['naturoFormPhoneNumber'];
				$_SESSION['naturoFormEmail'] = $_POST['naturoFormEmail'];
				$_SESSION['naturoFormFamilyDoctor'] = $_POST['naturoFormFamilyDoctor'];
				$_SESSION['naturoFormOsteoName'] = $_POST['naturoFormOsteoName'];
				$_SESSION['naturoFormKineName'] = $_POST['naturoFormKineName'];
				$_SESSION['naturoFormOtherSpecialists'] = $_POST['naturoFormOtherSpecialists'];
				$_SESSION['naturoFormConsultationMotif'] = $_POST['naturoFormConsultationMotif'];
				$_SESSION['naturoFormTroubleHistory'] = $_POST['naturoFormTroubleHistory'];
				
				$_SESSION['naturoFormMedicalAntecedents'] = $_POST['naturoFormMedicalAntecedents'];
				$_SESSION['naturoFormSergicalAntecedents'] = $_POST['naturoFormSergicalAntecedents'];
				$_SESSION['naturoFormFamilialAntecedents'] = $_POST['naturoFormFamilialAntecedents'];
				$_SESSION['naturoFormAllergies'] = $_POST['naturoFormAllergies'];
				$_SESSION['naturoFormFemaleCases'] = $_POST['naturoFormFemaleCases'];
				$_SESSION['naturoFormRunningTreatment'] = $_POST['naturoFormRunningTreatment'];
				$_SESSION['naturoFormOthersRunningTreatment'] = $_POST['naturoFormOthersRunningTreatment'];
				$_SESSION['naturoFormHeightAndWeight'] = $_POST['naturoFormHeightAndWeight'];
				$_SESSION['naturoFormSpecialMedicalFollowings'] = $_POST['naturoFormSpecialMedicalFollowings'];
				$_SESSION['naturoFormVitalEnergy'] = $_POST['naturoFormVitalEnergy'];
				$_SESSION['naturoFormMoral'] = $_POST['naturoFormMoral'];
				$_SESSION['naturoFormStress'] = $_POST['naturoFormStress'];
				$_SESSION['naturoFormEmotions'] = $_POST['naturoFormEmotions'];
				$_SESSION['naturoFormLifeStyle'] = $_POST['naturoFormLifeStyle'];
				$_SESSION['naturoFormMealHabits'] = $_POST['naturoFormMealHabits'];
				$_SESSION['naturoFormTabacs'] = $_POST['naturoFormTabacs'];
				$_SESSION['naturoFormActivities'] = $_POST['naturoFormActivities'];
				$_SESSION['naturoFormProfessionalEnvironment'] = $_POST['naturoFormProfessionalEnvironment'];

				$_SESSION['naturoFormSleep'] = $_POST['naturoFormSleep'];
				$_SESSION['naturoFormDigest'] = $_POST['naturoFormDigest'];
				$_SESSION['naturoFormOsteoArticular'] = $_POST['naturoFormOsteoArticular'];
				$_SESSION['naturoFormLungs'] = $_POST['naturoFormLungs'];
				$_SESSION['naturoFormCardiac'] = $_POST['naturoFormCardiac'];
				$_SESSION['naturoFormCircular'] = $_POST['naturoFormCircular'];
				$_SESSION['naturoFormOrl'] = $_POST['naturoFormOrl'];
				$_SESSION['naturoFormRenal'] = $_POST['naturoFormRenal'];
				$_SESSION['naturoFormSkin'] = $_POST['naturoFormSkin'];
				$_SESSION['naturoFormUroGenital'] = $_POST['naturoFormUroGenital'];

				$controls_admin = new Controls_Admin();
				$controls_admin -> naturoSheetGetResult();
			}
		}


		if ($_GET['action'] == "terminateThisNaturoSheetResult") 
		{
			if (session_status() === PHP_SESSION_NONE)
			{
				session_start();
			}

			$_SESSION['naturoFormLastName'] = '' ;
			$_SESSION['naturoFormFirstName'] = '' ;
			$_SESSION['naturoFormAge'] = '' ;
			$_SESSION['naturoFormProfession'] = '' ;
			$_SESSION['naturoFormAddress'] = '' ;
			$_SESSION['naturoFormPhoneNumber'] = '' ;
			$_SESSION['naturoFormEmail'] = '' ;
			$_SESSION['naturoFormFamilyDoctor'] = '' ;
			$_SESSION['naturoFormOsteoName'] = '' ;
			$_SESSION['naturoFormKineName'] = '' ;
			$_SESSION['naturoFormOtherSpecialists'] = '' ;
			$_SESSION['naturoFormConsultationMotif'] = '' ;
			$_SESSION['naturoFormTroubleHistory'] = '' ;

			$_SESSION['naturoFormMedicalAntecedents'] = '' ;
			$_SESSION['naturoFormSergicalAntecedents'] = '' ;
			$_SESSION['naturoFormFamilialAntecedents'] = '' ;
			$_SESSION['naturoFormAllergies'] = '' ;
			$_SESSION['naturoFormFemaleCases'] = '' ;
			$_SESSION['naturoFormRunningTreatment'] = '' ;
			$_SESSION['naturoFormOthersRunningTreatment'] = '' ;
			$_SESSION['naturoFormHeightAndWeight'] = '' ;
			$_SESSION['naturoFormSpecialMedicalFollowings'] = '' ;

			$_SESSION['naturoFormVitalEnergy'] = 0 ;
			$_SESSION['naturoFormMoral'] = 0 ;
			$_SESSION['naturoFormStress'] =  0 ;
			$_SESSION['naturoFormEmotions'] = 0 ;
			$_SESSION['naturoFormLifeStyle'] = '' ;
			$_SESSION['naturoFormMealHabits'] = '' ;
			$_SESSION['naturoFormTabacs'] = '' ;
			$_SESSION['naturoFormActivities'] = '' ;
			$_SESSION['naturoFormProfessionalEnvironment'] = '' ;

			$_SESSION['naturoFormSleep'] = '' ;
			$_SESSION['naturoFormDigest'] = '' ;
			$_SESSION['naturoFormOsteoArticular'] = '' ;
			$_SESSION['naturoFormLungs'] = '' ;
			$_SESSION['naturoFormCardiac'] = '' ;
			$_SESSION['naturoFormCircular'] = '' ;
			$_SESSION['naturoFormOrl'] = '' ;
			$_SESSION['naturoFormRenal'] = '' ;
			$_SESSION['naturoFormSkin'] = '' ;
			$_SESSION['naturoFormUroGenital'] = '' ;

			$controls_admin = new Controls_Admin();
			$controls_admin -> accueil();
		}
		/* -------------------------------------- END BILAN NATURO FROM HOMEPAGE --------------------------------------- */
		
		/* ------------------------------------------------ TEST DNS --------------------------------------------------- */
		if ($_GET['action'] == "testDNS") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];


			$_SESSION['totalSubmitOnePoints'] = 0;
			$_SESSION['opinionOne'] = null;

			$controls_admin = new Controls_Admin();
			$controls_admin -> testDNS($userId);
		}

		if ($_GET['action'] == "testDNSSubmitOne") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			$_SESSION['totalSubmitOnePoints'] = 0;
			$_SESSION['opinionOne'] = null;

			$_SESSION['totalSubmitTwoPoints'] = 0;
			$_SESSION['opinionTwo'] = null;

			$_SESSION['totalSubmitThreePoints'] = 0;
			$_SESSION['opinionThree'] = null;

			for ($i=1; $i <11 ; $i++)
			{ 
				$_SESSION['totalSubmitOnePoints'] = $_SESSION['totalSubmitOnePoints'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitOnePoints'] >= 0  && $_SESSION['totalSubmitOnePoints'] <= 10) 
			{
				$_SESSION['opinionOne'] = "Peu de troubles";
			}

			else if ($_SESSION['totalSubmitOnePoints'] >= 11 && $_SESSION['totalSubmitOnePoints'] <= 20) 
			{
				$_SESSION['opinionOne'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitOnePoints'] >= 21) 
			{
				$_SESSION['opinionOne'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testDNSPageTwo($userId);
		}

		if ($_GET['action'] == "testDNSSubmitTwo") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			
			if (isset($_POST['valider'])) 
			{
				$_SESSION['totalSubmitTwoPoints'] = 0;
				$_SESSION['opinionTwo'] = null;

				for ($i=1; $i <11 ; $i++)
				{ 
					$_SESSION['totalSubmitTwoPoints'] = $_SESSION['totalSubmitTwoPoints'] + $_POST[$i];
				}

				if ($_SESSION['totalSubmitTwoPoints'] >= 0  && $_SESSION['totalSubmitTwoPoints'] <= 10) 
				{
					$_SESSION['opinionTwo'] = "Peu de troubles"; 
				}

				else if ($_SESSION['totalSubmitTwoPoints'] >= 11 && $_SESSION['totalSubmitTwoPoints'] <= 20) 
				{
					$_SESSION['opinionTwo'] = "Troubles modérés";
				}

				else if ($_SESSION['totalSubmitTwoPoints'] >= 21) 
				{
					$_SESSION['opinionTwo'] = "Troubles importantes";
				}

				$controls_admin = new Controls_Admin();
				$controls_admin -> testDNSPageThree($userId);
			}
			
			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> testDNS($userId);
			}
		}

		if ($_GET['action'] == "testDNSSubmitThree") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			$_SESSION['totalSubmitThreePoints'] = 0;
			$_SESSION['opinionThree'] = null;

			for ($i=1; $i <11 ; $i++)
			{ 
				$_SESSION['totalSubmitThreePoints'] = $_SESSION['totalSubmitThreePoints'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitThreePoints'] >= 0  && $_SESSION['totalSubmitThreePoints'] <= 10) 
			{
				$_SESSION['opinionThree'] = "Peu de troubles"; 
			}

			else if ($_SESSION['totalSubmitThreePoints'] >= 11 && $_SESSION['totalSubmitThreePoints'] <= 20) 
			{
				$_SESSION['opinionThree'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitThreePoints'] >= 21) 
			{
				$_SESSION['opinionThree'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testDNSResultPage($userId);
		}

		if ($_GET['action'] == "endTestDNSAndGoHome") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			unset($_SESSION['totalSubmitOnePoints']); 
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']); 
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']); 
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> endTestDNSAndGoHome();
		}

		/* ----------------------------------------------- END TEST DNS ----------------------------------------------- */


		/* ------------------------------------------------- TEST GDS ------------------------------------------------- */
		if ($_GET['action'] == "testGDS") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];


			$_SESSION['totalGDSSubmitOnePoints'] = 0;
			$_SESSION['opinionOneGDS'] = null;

			$controls_admin = new Controls_Admin();
			$controls_admin -> testGDS($userId);
		}
		
		if ($_GET['action'] == "startGDSTest") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> startGDSTest($userId);
		}

		if ($_GET['action'] == "calculateGDSResult") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];
			
			$_SESSION['totalScore'] = 0;

			for ($i=0; $i < 43 ; $i++) 
			{ 


				$_SESSION['questionValue' . $i] = $_POST['GDSQuestion' . $i];
				
				if ( isset($_SESSION['questionValue' . $i])) 
				{
					$_SESSION['totalScore'] = $_SESSION['questionValue' . $i] + $_SESSION['totalScore'] ;
				}
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> calculateGDSResult($userId);
		}

		if ($_GET['action'] == "endTestGDSAndGoHome") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			unset($_SESSION['totalScore']);
			unset($_SESSION['questionValue']);
			unset($_SESSION['totalGDSSubmitOnePoints']);
			unset($_SESSION['opinionOneGDS']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> endTestGDSAndGoHome();
		}

		/* ----------------------------------------------- END TEST GDS ----------------------------------------------- */

		/* -------------------------------------- TEST GDS FROM CLIENT FOLDER ------------------------------------ */

		if ($_GET['action'] == "testGDSForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['clientId'] = $_GET['id'];

			$_SESSION['clientId'] = substr_replace($_SESSION['clientId'],"",0, 33);
		    $_SESSION['clientId'] = substr($_SESSION['clientId'], 0, -28);

			$_SESSION['totalGDSSubmitOnePoints'] = 0;
			$_SESSION['opinionOneGDS'] = null;

			$controls_admin = new controls_Admin();
			$controls_admin -> testGDSForThisPatient();	
			
		}

		if ($_GET['action'] == "startGDSTestForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			//$_SESSION['clientId'] = $_GET['id'];

			$controls_admin = new controls_Admin();
			$controls_admin -> startGDSTestForThisPatient();	
		}

		if ($_GET['action'] == "calculateGDSResultForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			
			$_SESSION['totalScore'] = 0;

			for ($i=0; $i < 43 ; $i++) 
			{ 


				$_SESSION['questionValue' . $i] = $_POST['GDSQuestion' . $i];
				
				if ( isset($_SESSION['questionValue' . $i])) 
				{
					$_SESSION['totalScore'] = $_SESSION['questionValue' . $i] + $_SESSION['totalScore'] ;
				}
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> calculateGDSResultForThisPatient($userId);
		}

		if ($_GET['action'] == "saveBilanGDSToClientProfil") 
		{
		 	if (session_status() === PHP_SESSION_NONE) 
		 	{
		 		session_start();
		 	}

		 	$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
		 	$shareWithClient = 1;

	 		$documentName = rand(1000,100000) . " - Test GDS ";
	 		$testGdsAsPDF = $_POST['dataInHere'];


	 		/* ----- adding a specific character ------- */
			$oldstr = $testGdsAsPDF;
		    $str_to_insert = "d";
		    $pos = 31;

		    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $testGdsAsPDF = $newstr;
    		
    		/* ---- end adding a specific character ---- */
	 		
	 		$controls_admin = new Controls_Admin();
			$controls_admin -> saveBilanGDSToClientProfil($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF);
			
		}

		if ($_GET['action'] == "saveBilanGDSToClientProfilWithoutSharing") 
		{
		 	if (session_status() === PHP_SESSION_NONE) 
		 	{
		 		session_start();
		 	}

		 	$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
		 	$shareWithClient = 0;

	 		$documentName = rand(1000,100000) . " - Test GDS - Non partagée ";
	 		$testGdsAsPDF = $_POST['dataInHere2'];


	 		/* ----- adding a specific character ------- */
			$oldstr = $testGdsAsPDF;
		    $str_to_insert = "d";
		    $pos = 31;

		    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $testGdsAsPDF = $newstr;
    		/* ---- end adding a specific character ---- */
	 		
	 		$controls_admin = new Controls_Admin();
			$controls_admin -> saveBilanGDSToClientProfilWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF);
		}

		if ($_GET['action'] == "returnToResultPageAfterSaving") 
		{

			$controls_admin = new Controls_Admin();
			$controls_admin -> calculateGDSResultForThisPatient();
		}

		if ($_GET['action'] == "endTestGDSForThisPatientAndGoHome") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			unset($_SESSION['totalScore']);
			unset($_SESSION['questionValue']);
			unset($_SESSION['totalGDSSubmitOnePoints']);
			unset($_SESSION['opinionOneGDS']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> endTestGDSAndGoHome();
		}


		/* ------------------------------------ END TEST GDS FROM CLIENT FOLDER ---------------------------------- */	

		/* ------------------------------------------------- TEST GDSE ------------------------------------------------- */
		if ($_GET['action'] == "testGDSE") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];


			$_SESSION['totalGDSESubmitOnePoints'] = 0;
			$_SESSION['opinionOneGDSE'] = null;

			$controls_admin = new Controls_Admin();
			$controls_admin -> testGDSE($userId);
		}
		
		if ($_GET['action'] == "startGDSETest") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> startGDSETest($userId);
		}

		if ($_GET['action'] == "calculateGDSEResult") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];
			
			$_SESSION['totalScore'] = 0;

			for ($i=0; $i < 40 ; $i++) 
			{ 


				$_SESSION['questionValue' . $i] = $_POST['GDSEQuestion' . $i];
				
				if ( isset($_SESSION['questionValue' . $i])) 
				{
					$_SESSION['totalScore'] = $_SESSION['questionValue' . $i] + $_SESSION['totalScore'] ;
				}
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> calculateGDSEResult($userId);
		}

		if ($_GET['action'] == "endTestGDSEAndGoHome") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			unset($_SESSION['totalScore']);
			unset($_SESSION['questionValue']);
			unset($_SESSION['totalGDSESubmitOnePoints']);
			unset($_SESSION['opinionOneGDSE']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> endTestGDSEAndGoHome();
		}

		/* ----------------------------------------------- END TEST GDSE ----------------------------------------------- */	

				/* -------------------------------------- TEST GDSE FROM CLIENT FOLDER ------------------------------------ */

		if ($_GET['action'] == "testGDSEForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['clientId'] = $_GET['id'];

			$_SESSION['clientId'] = substr_replace($_SESSION['clientId'],"",0, 33);
		    $_SESSION['clientId'] = substr($_SESSION['clientId'], 0, -28);

			$_SESSION['totalGDSESubmitOnePoints'] = 0;
			$_SESSION['opinionOneGDSE'] = null;

			$controls_admin = new controls_Admin();
			$controls_admin -> testGDSEForThisPatient();	
			
		}

		if ($_GET['action'] == "startGDSETestForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			//$_SESSION['clientId'] = $_GET['id'];

			$controls_admin = new controls_Admin();
			$controls_admin -> startGDSETestForThisPatient();	
		}

		if ($_GET['action'] == "calculateGDSEResultForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			
			$_SESSION['totalScore'] = 0;

			for ($i=0; $i < 45 ; $i++) 
			{ 


				$_SESSION['questionValue' . $i] = $_POST['GDSEQuestion' . $i];
				
				if ( isset($_SESSION['questionValue' . $i])) 
				{
					$_SESSION['totalScore'] = $_SESSION['questionValue' . $i] + $_SESSION['totalScore'] ;
				}
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> calculateGDSEResultForThisPatient($userId);
		}

		if ($_GET['action'] == "saveBilanGDSEToClientProfil") 
		{
		 	if (session_status() === PHP_SESSION_NONE) 
		 	{
		 		session_start();
		 	}

		 	$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
		 	$shareWithClient = 1;

	 		$documentName = rand(1000,100000) . " - Test GDSE ";
	 		$testGdseAsPDF = $_POST['dataInHere'];


	 		/* ----- adding a specific character ------- */
			$oldstr = $testGdseAsPDF;
		    $str_to_insert = "d";
		    $pos = 31;

		    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $testGdseAsPDF = $newstr;
    		
    		/* ---- end adding a specific character ---- */
	 		
	 		$controls_admin = new Controls_Admin();
			$controls_admin -> saveBilanGDSEToClientProfil($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF);
			
		}

		if ($_GET['action'] == "saveBilanGDSEToClientProfilWithoutSharing") 
		{
		 	if (session_status() === PHP_SESSION_NONE) 
		 	{
		 		session_start();
		 	}

		 	$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
		 	$shareWithClient = 0;

	 		$documentName = rand(1000,100000) . " - Test GDSE - non partagée ";
	 		$testGdseAsPDF = $_POST['dataInHere2'];


	 		/* ----- adding a specific character ------- */
			$oldstr = $testGdseAsPDF;
		    $str_to_insert = "d";
		    $pos = 31;

		    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $testGdseAsPDF = $newstr;
    		/* ---- end adding a specific character ---- */
	 		
	 		$controls_admin = new Controls_Admin();
			$controls_admin -> saveBilanGDSEToClientProfilWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF);
		}

		if ($_GET['action'] == "returnToGDSEResultPageAfterSaving") 
		{

			$controls_admin = new Controls_Admin();
			$controls_admin -> calculateGDSEResultForThisPatient();
		}

		if ($_GET['action'] == "endTestGDSEForThisPatientAndGoHome") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			unset($_SESSION['totalScore']);
			unset($_SESSION['questionValue']);
			unset($_SESSION['totalGDSESubmitOnePoints']);
			unset($_SESSION['opinionOneGDSE']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> endTestGDSEAndGoHome();
		}


		/* ------------------------------------ END TEST GDSE FROM CLIENT FOLDER ---------------------------------- */	

		/* ------------------------------------------------ TEST GDSSP --------------------------------------------------- */
		if ($_GET['action'] == "testGDSSP") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];


			$_SESSION['totalSubmitOnePoints'] = 0;
			$_SESSION['opinionOne'] = null;

			$controls_admin = new Controls_Admin();
			$controls_admin -> testGDSSP($userId);
		}

		if ($_GET['action'] == "testGDSSPSubmitOne") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			$_SESSION['totalSubmitOnePoints'] = 0;
			$_SESSION['opinionOne'] = null;

			/*
			$_SESSION['totalSubmitTwoPoints'] = 0;
			$_SESSION['opinionTwo'] = null;

			$_SESSION['totalSubmitThreePoints'] = 0;
			$_SESSION['opinionThree'] = null;
			*/

			for ($i=1; $i <110 ; $i++)
			{ 
				$_SESSION['totalSubmitOnePoints'] = $_SESSION['totalSubmitOnePoints'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitOnePoints'] >= 0  && $_SESSION['totalSubmitOnePoints'] <= 10) 
			{
				$_SESSION['opinionOne'] = "Peu de troubles";
			}

			else if ($_SESSION['totalSubmitOnePoints'] >= 11 && $_SESSION['totalSubmitOnePoints'] <= 20) 
			{
				$_SESSION['opinionOne'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitOnePoints'] >= 21) 
			{
				$_SESSION['opinionOne'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testGDSSPResultPage($userId);
			
			//$controls_admin -> testGDSSPPageTwo($userId);
		}

		/* --- depends if the result is shown on one page --
		if ($_GET['action'] == "testGDSSPSubmitTwo") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			
			if (isset($_POST['valider'])) 
			{
				$_SESSION['totalSubmitTwoPoints'] = 0;
				$_SESSION['opinionTwo'] = null;

				for ($i=1; $i <11 ; $i++)
				{ 
					$_SESSION['totalSubmitTwoPoints'] = $_SESSION['totalSubmitTwoPoints'] + $_POST[$i];
				}

				if ($_SESSION['totalSubmitTwoPoints'] >= 0  && $_SESSION['totalSubmitTwoPoints'] <= 10) 
				{
					$_SESSION['opinionTwo'] = "Peu de troubles"; 
				}

				else if ($_SESSION['totalSubmitTwoPoints'] >= 11 && $_SESSION['totalSubmitTwoPoints'] <= 20) 
				{
					$_SESSION['opinionTwo'] = "Troubles modérés";
				}

				else if ($_SESSION['totalSubmitTwoPoints'] >= 21) 
				{
					$_SESSION['opinionTwo'] = "Troubles importantes";
				}

				$controls_admin = new Controls_Admin();
				$controls_admin -> testGDSSPPageThree($userId);
			}
			
			else
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> testGDSSP($userId);
			}
		}

		if ($_GET['action'] == "testGDSSPSubmitThree") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			$_SESSION['totalSubmitThreePoints'] = 0;
			$_SESSION['opinionThree'] = null;

			for ($i=1; $i <11 ; $i++)
			{ 
				$_SESSION['totalSubmitThreePoints'] = $_SESSION['totalSubmitThreePoints'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitThreePoints'] >= 0  && $_SESSION['totalSubmitThreePoints'] <= 10) 
			{
				$_SESSION['opinionThree'] = "Peu de troubles"; 
			}

			else if ($_SESSION['totalSubmitThreePoints'] >= 11 && $_SESSION['totalSubmitThreePoints'] <= 20) 
			{
				$_SESSION['opinionThree'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitThreePoints'] >= 21) 
			{
				$_SESSION['opinionThree'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testGDSSPResultPage($userId);
		} --- End depends if the result is shown on one page ---*/

		if ($_GET['action'] == "endTestGDSSPAndGoHome") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			unset($_SESSION['totalSubmitOnePoints']); 
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']); 
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']); 
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> endTestGDSSPAndGoHome();
		}

		/* ----------------------------------------------- END TEST GDSSP ----------------------------------------------- */

		/* -------------------------------------- TEST GDSSP FROM CLIENT FOLDER ------------------------------------ */

		if ($_GET['action'] == "testGDSSPForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['clientId'] = $_GET['id'];

			$_SESSION['clientId'] = substr_replace($_SESSION['clientId'],"",0, 33);
		    $_SESSION['clientId'] = substr($_SESSION['clientId'], 0, -28);

			$controls_admin = new controls_Admin();
			$controls_admin -> testGDSSPForThisPatient();	
		}

		if ($_GET['action'] == "testGDSSPSubmitOneForThisPatient") 
		{

			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];


			$_SESSION['totalSubmitOnePointsForThisPatient'] = 0;
			$_SESSION['opinionOneForThisPatient'] = null;

			$_SESSION['totalSubmitTwoPointsForThisPatient'] = 0;
			$_SESSION['opinionTwoForThisPatient'] = null;

			$_SESSION['totalSubmitThreePointsForThisPatient'] = 0;
			$_SESSION['opinionThreeForThisPatient'] = null;


			for ($i=1; $i <110 ; $i++)
			{
				
				$_SESSION['totalSubmitOnePointsForThisPatient'] = $_SESSION['totalSubmitOnePointsForThisPatient'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitOnePointsForThisPatient'] >= 0  && $_SESSION['totalSubmitOnePointsForThisPatient'] <= 10) 
			{
				$_SESSION['opinionOneForThisPatient'] = "Peu de troubles";
			}

			else if ($_SESSION['totalSubmitOnePointsForThisPatient'] >= 11 && $_SESSION['totalSubmitOnePointsForThisPatient'] <= 20) 
			{
				$_SESSION['opinionOneForThisPatient'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitOnePointsForThisPatient'] >= 21) 
			{
				$_SESSION['opinionOneForThisPatient'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testGDSSPSubmitOneForThisPatient($userId, $clientId);
		}

		/* ---- depends if the questions are shown on one page ----
		if ($_GET['action'] == "testGDSSPSubmitTwoForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
			$_SESSION['totalSubmitTwoPointsForThisPatient'] = 0;

			for ($i=1; $i <11 ; $i++)
			{
				
				$_SESSION['totalSubmitTwoPointsForThisPatient'] = $_SESSION['totalSubmitTwoPointsForThisPatient'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitTwoPointsForThisPatient'] >= 0  && $_SESSION['totalSubmitTwoPointsForThisPatient'] <= 10) 
			{
				$_SESSION['opinionTwoForThisPatient'] = "Peu de troubles";
			}

			else if ($_SESSION['totalSubmitTwoPointsForThisPatient'] >= 11 && $_SESSION['totalSubmitTwoPointsForThisPatient'] <= 20) 
			{
				$_SESSION['opinionTwoForThisPatient'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitTwoPointsForThisPatient'] >= 21) 
			{
				$_SESSION['opinionTwoForThisPatient'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testGDSSPSubmitTwoForThisPatient($userId, $clientId);
		}


		if ($_GET['action'] == "testGDSSPSubmitThreeForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
			$_SESSION['totalSubmitThreePointsForThisPatient'] = 0;

			for ($i=1; $i <11 ; $i++)
			{
				
				$_SESSION['totalSubmitThreePointsForThisPatient'] = $_SESSION['totalSubmitThreePointsForThisPatient'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitThreePointsForThisPatient'] >= 0  && $_SESSION['totalSubmitThreePointsForThisPatient'] <= 10) 
			{
				$_SESSION['opinionThreeForThisPatient'] = "Peu de troubles";
			}

			else if ($_SESSION['totalSubmitThreePointsForThisPatient'] >= 11 && $_SESSION['totalSubmitThreePointsForThisPatient'] <= 20) 
			{
				$_SESSION['opinionThreeForThisPatient'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitThreePointsForThisPatient'] >= 21) 
			{
				$_SESSION['opinionThreeForThisPatient'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testGDSSPSubmitThreeForThisPatient($userId, $clientId);
		} ---- End depends if the questions are shown on one page --- */


		if ($_GET['action'] == "savethisClientTestGDSSP") 
		{
		 	if (session_status() === PHP_SESSION_NONE) 
		 	{
		 		session_start();
		 	}

		 	$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
		 	$shareWithClient = 1;

		 	if (isset($_POST['confirmed'])) 
		 	{
		 		$documentName = rand(1000,100000) . " - Test GDSSP ";
		 		$testGdsspAsPDF = $_POST['dataInHere'];


		 		/* ----- adding a specific character ------- */
				$oldstr = $testGdsspAsPDF;
			    $str_to_insert = "d";
			    $pos = 31;

			    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
			    $testGdsspAsPDF = $newstr;
	    		/* ---- end adding a specific character ---- */
		 		
		 		$controls_admin = new Controls_Admin();
				$controls_admin -> savethisClientTestDNS($userId, $clientId, $documentName, $shareWithClient, $testGdsspAsPDF);
		 	}

		 	if (isset($_POST['denied'])) 
		 	{
		 		$controls_admin = new Controls_Admin();
				$controls_admin -> testGDSSPSubmitThreeForThisPatient($userId, $clientId);
		 	}
		}

		/* ------------------------------------ END TEST GDSSP FROM CLIENT FOLDER ---------------------------------- */


		/* -------------------------------------- NATURO PROGRAM CONTENT ---------------------------------------------- */
		if ($_GET['action'] == "naturoProgramContent") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> naturoProgramContent();
		}

		if ($_GET['action'] == "confirmThisNaturoProgramContent") 
		{
			$myAlimentationContent = $_POST['myAlimentationContent'];
			$myComplementationContent = $_POST['myComplementationContent'];
			$myAromatherapieContent = $_POST['myAromatherapieContent'];
			$myPhythotherapieContent = $_POST['myPhythotherapieContent'];
			$myFleursDeBachContent = $_POST['myFleursDeBachContent'];
			$myStressContent = $_POST['myStressContent'];
			$myHygieneContent = $_POST['myHygieneContent'];
			$myDiversContent = $_POST['myDiversContent'];

			echo $myAlimentationContent;
			echo $myComplementationContent;
			echo $myAromatherapieContent;
			echo $myPhythotherapieContent;
			echo $myFleursDeBachContent;
			echo $myStressContent;
			echo $myHygieneContent;
			echo $myDiversContent;
			$controls_admin = new Controls_Admin();
			$controls_admin -> confirmThisNaturoProgramContent($myAlimentationContent, $myComplementationContent, $myAromatherapieContent, $myPhythotherapieContent, $myFleursDeBachContent, $myStressContent, $myHygieneContent, $myDiversContent);
		}

		if ($_GET['action'] == "naturoContentPageDesigns") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];

			$topBorderColor = $_POST['topBorderColor'];
			$bottomBorderColor = $_POST['bottomBorderColor'];
			
			$offeredPhoto = $_POST['offeredPhoto'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> naturoContentPageDesigns($topBorderColor, $bottomBorderColor, $offeredPhoto, $userId);
		}


		if ($_GET['action'] == "naturoContentPageDesignsSecondBloc") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];


			if ($_POST['backgroundChoices'] == "choice1") 
			{
			 	echo $_POST['offeredPhoto'];

			 	$image = null; 
			 	$imageType = null;
			 	$cryptedImage = null;
			 	$imageSource = null;

			 	if ($_POST['offeredPhoto'] == "view/naturoProgramContent/images/offerImage1.png") 
			 	{
			 		$imageSource = "view/naturoProgramContent/images/offerImage1.png";
			 	}

			 	if ($_POST['offeredPhoto'] == "view/naturoProgramContent/images/offerImage2.png") 
			 	{
			 		$imageSource = "view/naturoProgramContent/images/offerImage2.png";
			 	}

			 	if ($_POST['offeredPhoto'] == "view/naturoProgramContent/images/offerImage3.png") 
			 	{
			 		$imageSource = "view/naturoProgramContent/images/offerImage3.png";
			 	}

			 	if ($_POST['offeredPhoto'] == "view/naturoProgramContent/images/offerImage4.png") 
			 	{
			 		$imageSource = "view/naturoProgramContent/images/offerImage4.png";
			 	}

			 	$controls_admin = new Controls_Admin();
				$controls_admin -> defaultBackgroundChoice($userId, $image, $imageType, $imageSource, $cryptedImage);
			}

			if ($_POST['backgroundChoices'] == "choice2") 
			{
				$imageSource = null;

			 	$image = $_FILES['myChosenImage']['name'];
			 	$imageType = $_FILES['myChosenImage']['type'];
			 	$imageData = $_FILES['myChosenImage']['tmp_name'];
			 	$imgFormatCode = "data:image;base64,";
			 	$cryptedImage = base64_encode(file_get_contents(addslashes($imageData)));

			 	$controls_admin = new Controls_Admin();
				$controls_admin -> backgroundChoices($userId, $image, $imageType, $cryptedImage, $imageSource); 
			}

			/*
			if ($_POST['backgroundChoices']) {
				// code...
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> naturoContentPageDesigns($topBorderColor, $bottomBorderColor, $offeredPhoto, $userId);
			*/
		}

		/* -------------------------------------- END NATURO PROGRAM CONTENT ---------------------------------------------- */
		

		if ($_GET['action'] == "goBack") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> goBack();
		}

		if ($_GET['action'] == "createAccountLink") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> createAccountLink();	
		}

		if ($_GET['action'] == "accueil") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> accueil();	
		}

		if ($_GET['action'] == "map") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> map();
		}

		if ($_GET['action'] == "agenda") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> agenda();
		}

		if ($_GET['action'] == "gotoMails")
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> gotoMails();
		}

		if ($_GET['action'] == "sendThisMail") 
		{
			if (isset($_POST['envoyer'])) 
			{
				if (session_status() === PHP_SESSION_NONE) 
				{
					session_start();
				}

				$sendFrom = $_SESSION['userName'];
				$sendTo = base64_encode(htmlspecialchars($_POST['sendTo']));
				$mailSubject = base64_encode(htmlspecialchars($_POST['mailSubject']));
				$message = base64_encode(htmlspecialchars($_POST['message']));
				$mailStatus = "unread" ;

				$controls_admin = new Controls_Admin();
				$controls_admin -> sendThisMail($sendFrom, $sendTo, $mailSubject, $message, $mailStatus);
			}

			if (isset($_POST['cancel'])) 
			{
				$controls_admin = new Controls_Admin();
				$controls_admin -> cancel();	
			}
		}


		if ($_GET['action'] == "deleteThisSelectedMail") 
		{
			$id = $_GET['id'];
			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisSelectedMail($id);
		}

		if ($_GET['action'] == "addAClient")
		{
		  	$controls_admin = new Controls_Admin();
			$controls_admin -> addAClient();
		}

		if ($_GET['action'] == "createAClientAccount")
		{
		  	$controls_admin = new Controls_Admin();
			$controls_admin -> createAClientAccount();
		}

		if ($_GET['action'] == "precreateThisClientAccount")
		{
			$clientSexe = $_POST['clientSexe'];
			$clientFirstName = base64_encode($_POST['clientFirstName']);
			$clientLastName = base64_encode($_POST['clientLastName']);
			$clientDateOfBirth = $_POST['clientDateOfBirth'];
			$clientEmail = base64_encode($_POST['clientEmail']);
			$clientPhoneNumber = base64_encode($_POST['clientPhoneNumber']);
			$clientRoadNumber = base64_encode($_POST['clientRoadNumber']);
			$clientRoadName = base64_encode($_POST['clientRoadName']);
			$clientAddressAlternate = base64_encode($_POST['clientAddressAlternate']);
			$clientPostalCode = base64_encode($_POST['clientPostalCode']);
			$clientCity = base64_encode($_POST['clientCity']);


			/*
			$date1 = $clientDateOfBirth;
			$date2 = date("Y-m-d");
				$dateDifference = date_diff(date_create($date1), date_create($date2));
			$age = $dateDifference->format('%y');
			*/

			if ($clientSexe == "woman") 
			{
				$clientSexe = "f";
			}

			if ($clientSexe == "man") 
			{
				$clientSexe = "m";
			}

			if ($clientSexe == "child") 
			{
				$clientSexe = "c";
			}

			if ($clientSexe == "teen") 
			{
				$clientSexe = "a";
			}


			$verificationKey = $clientFirstName.$clientLastName.base64_encode($clientDateOfBirth).$clientEmail.$clientPhoneNumber;
		  	
		  	$controls_admin = new Controls_Admin();
			$controls_admin -> precreateThisClientAccount($clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, 
				$clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity, $verificationKey);
			
		}

		if ($_GET['action'] == "resendTheClientVerificationCode")
		{ 	
			$clientId = $_GET['id'];
		  	$controls_admin = new Controls_Admin();
			$controls_admin -> resendTheClientVerificationCode($clientId);
			
		}

		if ($_GET['action'] == "documents") 
		{
		  	$controls_admin = new Controls_Admin();
			$controls_admin -> documents();
		}

		if ($_GET['action'] == "documentsSharedWithMe") 
		{
		  	$controls_admin = new Controls_Admin();
			$controls_admin -> documentsSharedWithMe();
		}

		if ($_GET['action'] == "files") 
		{
		  	$controls_admin = new Controls_Admin();
			$controls_admin -> files();
		}

		if ($_GET['action'] == "viewThisClientDocuments") 
		{
			$myClientId = $_GET['myClientId'];

			$myClientId = substr_replace($myClientId,"",0, 33);;
		    $myClientId = substr($myClientId, 0, -28);

		  	$controls_admin = new Controls_Admin();
			$controls_admin -> viewThisClientDocuments($myClientId);
		}

		if ($_GET['action'] == "importThisBilanTwoAnswersSubmittedByClient") 
		{
			$myClientId = $_GET['clientId'];
			$questionSheetId = $_GET['questionSheetId'];
			//$myClientId = substr_replace($myClientId,"",0, 33);;
		    //$myClientId = substr($myClientId, 0, -28);

		  	$controls_admin = new Controls_Admin();
			$controls_admin -> importThisBilanTwoAnswersSubmittedByClient($myClientId, $questionSheetId);
		}

		if ($_GET['action'] == "updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien") 
		{
			$questionSheetId = $_GET['questionSheetId'];

			for ($i=1; $i < 318 ; $i++) 
			{ 
				$questionNumber = "answer".$i;
				$questionAnswer = $_POST['answer'.$i]; 
				
				$controls_admin = new Controls_Admin();
				$controls_admin -> updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien($questionSheetId, $questionNumber, $questionAnswer);
			}

			header("location: index.php?action=files");
		  	
		}

		if ($_GET['action'] == "addThisFileForMyClient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userId = $_SESSION['userId'];	
			$myClientId = $_GET['myClientId'];

			
			$myFile = rand(1000,100000)."-" . $_FILES['file']['name'];
			$current_location = $_FILES['file']['tmp_name'];
			$move_to = "data/clients/" . $myClientId . "/";

			  if (file_exists('/data/clients/' . $myClientId)) 
		      {
		      	 move_uploaded_file($current_location, $move_to.$myFile);
		      }

		      else 
		      {
		      	mkdir('data/clients/'.$myClientId, 0777, true);
		      	move_uploaded_file($current_location, $move_to.$myFile);
		      }

			
			
		  	$controls_admin = new Controls_Admin();
			$controls_admin -> addThisFileForMyClient($userId, $myClientId, $move_to, $myFile);
		
		}

		if ($_GET['action'] == "deleteThisDocumentFromMyClientFolder") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$fileDatabaseId = $_GET['id'];
			$fileLocation = $_GET['filePath'];
		
			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisDocumentFromMyClientFolder($fileDatabaseId, $fileLocation);
		}

		if ($_GET['action'] == "deleteThisBilanFromMyClientFolder") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$bilanId = $_GET['id'];
			$clientId = $_GET['clientId'];
		
			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisBilanFromMyClientFolder($bilanId, $clientId);
		}

		if ($_GET['action'] == "deleteThisTestDnsFromMyClientFolder") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$documentId = $_GET['id'];
			$clientId = $_GET['clientId'];
		
			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisTestDnsFromMyClientFolder($documentId, $clientId);
		}

		if ($_GET['action'] == "deleteThisTestGdsFromMyClientFolder") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$documentId = $_GET['id'];
			$clientId = $_GET['clientId'];
		
			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisTestGdsFromMyClientFolder($documentId, $clientId);
		}

		if ($_GET['action'] == "deleteThisTestGdseFromMyClientFolder") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$documentId = $_GET['id'];
			$clientId = $_GET['clientId'];
		
			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisTestGdseFromMyClientFolder($documentId, $clientId);
		}

		if ($_GET['action'] == "deleteThisFleursBilanFromMyClientFolder") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$bilanId = $_GET['id'];
			$clientId = $_GET['clientId'];
		
			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisFleursBilanFromMyClientFolder($bilanId, $clientId);
		}

		if ($_GET['action'] == "deleteThisPhvDocumentFromMyClientFolder") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$documentId = $_GET['id'];
			$clientId = $_GET['clientId'];
		
			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisPhvDocumentFromMyClientFolder($documentId, $clientId);
		}

		 if ($_GET['action'] ==  "addThisClient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$clientFor = $_SESSION['userId'];

		 	$clientSexe = $_POST['clientSexe'];

		 	if ($clientSexe == "man") 
		 	{
		 		$clientSexe = base64_encode("homme");
		 	}

		 	if ($clientSexe == "woman") 
		 	{
		 		$clientSexe = base64_encode("femme");
		 	}

		 	if ($clientSexe == "teen") 
		 	{
		 		$clientSexe = base64_encode("adolescent");
		 	}

		 	if ($clientSexe == "child")
		 	{
		 		$clientSexe = base64_encode("enfant");
		 	}

		 	$clientFirstName = base64_encode(strtoupper($_POST['clientFirstName']));
		 	$clientLastName = base64_encode(ucwords($_POST['clientLastName']));
		 	$clientDateOfBirth = $_POST['clientDateOfBirth'];
		 	$clientEmail = base64_encode( $_POST['clientEmail']);
		 	$clientPhoneNumber = base64_encode($_POST['clientPhoneNumber']);
		 	$clientRoadNumber = base64_encode( $_POST['clientRoadNumber']);
		 	$clientRoadName = base64_encode( ucwords($_POST['clientRoadName']));
		 	$clientAddressAlternate = base64_encode( ucwords($_POST['clientAddressAlternate']));
		 	$clientPostalCode = base64_encode( $_POST['clientPostalCode']);
		 	$clientCity = base64_encode( ucwords($_POST['clientCity']));
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> addThisClient($clientFor, $clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity);
		}


		if ($_GET['action'] == "personalRepositories") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$clientFor = $_SESSION['userId'];
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> personalRepositories($clientFor);
		}

		if ($_GET['action'] == "getPersonalRepositoryDocuments") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$clientFor = $_SESSION['userId'];
			
			$repositoryId = $_GET['id'];
			$controls_admin = new Controls_Admin();
			$controls_admin -> getPersonalRepositoryDocuments($clientFor, $repositoryId);
		}

		if ($_GET['action'] == "deleteThisDocumentFromMyPersonalFolder") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$fileDatabaseId = $_GET['id'];
			$fileLocation = $_GET['filePath'];
			$folderId = $_GET['personalFolderId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisDocumentFromMyPersonalFolder($folderId, $fileDatabaseId, $fileLocation);
		}

		if ($_GET['action'] == "addThisFileForMyPersonalFolder") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];	
			$myFolderId = $_GET['myFolderId'];

			$myFile = rand(1000,100000)."-" . $_FILES['file']['name'];
			$current_location = $_FILES['file']['tmp_name'];
			$move_to = "data/personalFolder/" . $myFolderId . "/";

			  if (file_exists('/data/personalFolder/' . $myFolderId)) 
		      {
		      	 move_uploaded_file($current_location, $move_to.$myFile);
		      }

		      else 
		      {
		      	mkdir('data/personalFolder/'.$myFolderId, 0777, true);
		      	move_uploaded_file($current_location, $move_to.$myFile);
		      }

			move_uploaded_file($current_location, $move_to.$myFile);
			
		  	$controls_admin = new Controls_Admin();
			$controls_admin -> addThisFileForMyPersonalFolder($userId, $myFolderId, $move_to, $myFile);
		
		}

		if ($_GET['action'] == "showClientsList") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$clientFor = $_SESSION['userId'];
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> showClientsList($clientFor);
		}

		if ($_GET['action'] == "showMaleClients") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$clientFor = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> showMaleClients($clientFor);
		}

		if ($_GET['action'] == "showFemaleClients") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$clientFor = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> showFemaleClients($clientFor);
		}

		if ($_GET['action'] == "showTeenClients") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$clientFor = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> showTeenClients($clientFor);
		}

		if ($_GET['action'] == "showChildClients") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$clientFor = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> showChildClients($clientFor);
		}
		

		if ($_GET['action'] == "getClientDetails") 
		{
			$id = $_GET['id'];
			$controls_admin = new Controls_Admin();
			$controls_admin -> getClientDetails($id);
		}

		if ($_GET['action'] == "modifyClientDetails") 
		{
				$id = $_GET['id'];
				$controls_admin = new controls_Admin();
				$controls_admin -> modifyClientDetails($id);
		}

		if ($_GET['action'] == "getClientDetailsFromUserLists") 
		{
			$id = $_GET['id'];
    		

    		$id = substr_replace($id,"",0, 33);;
		    $id = substr($id, 0, -28);

			$controls_admin = new Controls_Admin();
			$controls_admin -> getClientDetailsFromUserLists($id);
			
		}
		
		/* -------------------------------------- FLEURS DE BACH FOR THIS PATIENT SHEET ------------------------------------ */
		if ($_GET['action'] == "fleursDeBachForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['fleursDeBachFor'] = $_GET['id'];
			
			$controls_admin = new controls_Admin();
			$controls_admin -> fleursDeBachForThisPatient();	
			
		}
		/* ------------------------------------ END FLEURS DE BACH FOR THIS PATIENT SHEET ---------------------------------- */
		

		/* -------------------------------------- BILAN SHEET ------------------------------------ */
		
		if ($_GET['action'] == "bilanNaturoForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['bilanFor'] = $_GET['id'];
			$bilanFor=$_SESSION['bilanFor'];
			$controls_admin = new controls_Admin();
			$controls_admin -> bilanNaturoForThisPatient($bilanFor);	
		}

		if ($_GET['action'] == "bilanNaturoForThisPatientResultPage") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			
			if (isset($_POST['submit'])) 
			{
				$_SESSION['naturoFormForThisPatientLastName'] = $_POST['naturoFormForThisPatientLastName'];
				$_SESSION['naturoFormForThisPatientFirstName'] = $_POST['naturoFormForThisPatientFirstName'];
				$_SESSION['naturoFormForThisPatientAge'] = $_POST['naturoFormForThisPatientAge'];
				$_SESSION['naturoFormForThisPatientProfession'] = $_POST['naturoFormForThisPatientProfession'];
				$_SESSION['naturoFormForThisPatientAddress'] = $_POST['naturoFormForThisPatientAddress'];
				$_SESSION['naturoFormForThisPatientPhoneNumber'] = $_POST['naturoFormForThisPatientPhoneNumber'];
				$_SESSION['naturoFormForThisPatientEmail'] = $_POST['naturoFormForThisPatientEmail'];
				$_SESSION['naturoFormForThisPatientFamilyDoctor'] = $_POST['naturoFormForThisPatientFamilyDoctor'];
				$_SESSION['naturoFormForThisPatientOsteoName'] = $_POST['naturoFormForThisPatientOsteoName'];
				$_SESSION['naturoFormForThisPatientKineName'] = $_POST['naturoFormForThisPatientKineName'];
				$_SESSION['naturoFormForThisPatientOtherSpecialists'] = $_POST['naturoFormForThisPatientOtherSpecialists'];
				$_SESSION['naturoFormForThisPatientConsultationMotif'] = $_POST['naturoFormForThisPatientConsultationMotif'];
				$_SESSION['naturoFormForThisPatientTroubleHistory'] = $_POST['naturoFormForThisPatientTroubleHistory'];
				$_SESSION['naturoFormForThisPatientMedicalAntecedents'] = $_POST['naturoFormForThisPatientMedicalAntecedents'];
				$_SESSION['naturoFormForThisPatientSergicalAntecedents'] = $_POST['naturoFormForThisPatientSergicalAntecedents'];
				$_SESSION['naturoFormForThisPatientFamilialAntecedents'] = $_POST['naturoFormForThisPatientFamilialAntecedents'];
				$_SESSION['naturoFormForThisPatientAllergies'] = $_POST['naturoFormForThisPatientAllergies'];
				$_SESSION['naturoFormForThisPatientFemaleCases'] = $_POST['naturoFormForThisPatientFemaleCases'];
				$_SESSION['naturoFormForThisPatientRunningTreatment'] = $_POST['naturoFormForThisPatientRunningTreatment'];
				$_SESSION['naturoFormForThisPatientOthersRunningTreatment'] = $_POST['naturoFormForThisPatientOthersRunningTreatment'];
				$_SESSION['naturoFormForThisPatientHeightAndWeight'] = $_POST['naturoFormForThisPatientHeightAndWeight'];
				$_SESSION['naturoFormForThisPatientSpecialMedicalFollowings'] = $_POST['naturoFormForThisPatientSpecialMedicalFollowings'];
				$_SESSION['naturoFormForThisPatientVitalEnergy'] = $_POST['naturoFormForThisPatientVitalEnergy'];
				$_SESSION['naturoFormForThisPatientMoral'] = $_POST['naturoFormForThisPatientMoral'];
				$_SESSION['naturoFormForThisPatientStress'] = $_POST['naturoFormForThisPatientStress'];
				$_SESSION['naturoFormForThisPatientEmotions'] = $_POST['naturoFormForThisPatientEmotions'];
				$_SESSION['naturoFormForThisPatientLifeStyle'] = $_POST['naturoFormForThisPatientLifeStyle'];
				$_SESSION['naturoFormForThisPatientMealHabits'] = $_POST['naturoFormForThisPatientMealHabits'];
				$_SESSION['naturoFormForThisPatientTabacs'] = $_POST['naturoFormForThisPatientTabacs'];
				$_SESSION['naturoFormForThisPatientActivities'] = $_POST['naturoFormForThisPatientActivities'];
				$_SESSION['naturoFormForThisPatientProfessionalEnvironment'] = $_POST['naturoFormForThisPatientProfessionalEnvironment'];

				$_SESSION['naturoFormForThisPatientSleep'] = $_POST['naturoFormForThisPatientSleep'];
				$_SESSION['naturoFormForThisPatientDigest'] = $_POST['naturoFormForThisPatientDigest'];
				$_SESSION['naturoFormForThisPatientOsteoArticular'] = $_POST['naturoFormForThisPatientOsteoArticular']; 
				$_SESSION['naturoFormForThisPatientLungs'] = $_POST['naturoFormForThisPatientLungs'];
				$_SESSION['naturoFormForThisPatientCardiac'] = $_POST['naturoFormForThisPatientCardiac'];
				$_SESSION['naturoFormForThisPatientCircular'] = $_POST['naturoFormForThisPatientCircular'];
				$_SESSION['naturoFormForThisPatientOrl'] = $_POST['naturoFormForThisPatientOrl'];
				$_SESSION['naturoFormForThisPatientRenal'] = $_POST['naturoFormForThisPatientRenal'];
				$_SESSION['naturoFormForThisPatientSkin'] = $_POST['naturoFormForThisPatientSkin'];
				$_SESSION['naturoFormForThisPatientUroGenital'] = $_POST['naturoFormForThisPatientUroGenital'];

				$controls_admin = new controls_Admin();
				$controls_admin -> bilanNaturoForThisPatientResultPage();
			}	
		}

		if ($_GET['action'] == "bilanNaturoForThisPatientSaveTo") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$bilanFor = $_SESSION['bilanFor'];
			$controls_admin = new controls_Admin();
			$controls_admin -> bilanNaturoForThisPatientSaveTo($bilanFor);
		}

		if ($_GET['action'] == "saveBilanNaturoToClientProfil") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$bilanName = "Bilan_Naturo_" . rand(1000,10000);
			$bilanFor = $_SESSION['bilanFor'];
			$byPraticien = $_SESSION['userId'];
			$shareWithClient = 1;
			$data = $_POST['dataInHere'];
			
			/* ----- adding a specific character ------- */
			$oldstr = $data;
		    $str_to_insert = "d";
		    $pos = 31;

		   // $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $data = $newstr;
    		/* ---- end adding a specific character ---- */

			$controls_admin = new controls_Admin();
			$controls_admin -> saveBilanNaturoToClientProfil($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data);
		}

		if ($_GET['action'] == "saveBilanNaturoToClientProfilWithoutSharing") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$bilanName = "Bilan_Naturo_Non_Partagé_" . rand(1000,10000);
			$bilanFor = $_SESSION['bilanFor'];
			$byPraticien = $_SESSION['userId'];
			$shareWithClient = 0;
			$data = $_POST['dataInHere2'];
			
			/* ----- adding a specific character ------- */
			$oldstr = $data;
		    $str_to_insert = "d";
		    $pos = 31;

		   // $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $data = $newstr;
    		/* ---- end adding a specific character ---- */

			$controls_admin = new controls_Admin();
			$controls_admin -> saveBilanNaturoToClientProfilWithoutSharing($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data);
		}

		if ($_GET['action']== "terminateThisBilanAndGoHome") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}


			$_SESSION['bilanFor'] = null;
			$_SESSION['naturoFormForThisPatientLastName'] = null;
			$_SESSION['naturoFormForThisPatientFirstName'] = null;
			$_SESSION['naturoFormForThisPatientAge'] = null;
			$_SESSION['naturoFormForThisPatientProfession'] = null;
			$_SESSION['naturoFormForThisPatientAddress'] = null;
			$_SESSION['naturoFormForThisPatientPhoneNumber'] = null;
			$_SESSION['naturoFormForThisPatientEmail'] = null;
			$_SESSION['naturoFormForThisPatientFamilyDoctor'] = null;
			$_SESSION['naturoFormForThisPatientOsteoName'] = null;
			$_SESSION['naturoFormForThisPatientKineName'] = null;
			$_SESSION['naturoFormForThisPatientOtherSpecialists'] = null;
			$_SESSION['naturoFormForThisPatientConsultationMotif'] = null;
			$_SESSION['naturoFormForThisPatientTroubleHistory'] = null;
			$_SESSION['naturoFormForThisPatientMedicalAntecedents'] = null;
			$_SESSION['naturoFormForThisPatientSergicalAntecedents'] = null;
			$_SESSION['naturoFormForThisPatientFamilialAntecedents'] = null;
			$_SESSION['naturoFormForThisPatientAllergies'] = null;
			$_SESSION['naturoFormForThisPatientFemaleCases'] = null;
			$_SESSION['naturoFormForThisPatientRunningTreatment'] = null;
			$_SESSION['naturoFormForThisPatientOthersRunningTreatment'] = null;
			$_SESSION['naturoFormForThisPatientHeightAndWeight'] = null;
			$_SESSION['naturoFormForThisPatientSpecialMedicalFollowings'] = null;
			$_SESSION['naturoFormForThisPatientVitalEnergy'] = null;
			$_SESSION['naturoFormForThisPatientMoral'] = null;
			$_SESSION['naturoFormForThisPatientStress'] = null;
			$_SESSION['naturoFormForThisPatientEmotions'] = null;
			$_SESSION['naturoFormForThisPatientLifeStyle'] = null;
			$_SESSION['naturoFormForThisPatientMealHabits'] = null;
			$_SESSION['naturoFormForThisPatientTabacs'] = null;
			$_SESSION['naturoFormForThisPatientActivities'] = null;
			$_SESSION['naturoFormForThisPatientProfessionalEnvironment'] = null;
			$_SESSION['naturoFormForThisPatientSleep'] = null;
			$_SESSION['naturoFormForThisPatientDigest'] = null;
			$_SESSION['naturoFormForThisPatientOsteoArticular'] = null; 
			$_SESSION['naturoFormForThisPatientLungs'] = null;
			$_SESSION['naturoFormForThisPatientCardiac'] = null;
			$_SESSION['naturoFormForThisPatientCircular'] = null;
			$_SESSION['naturoFormForThisPatientOrl'] = null;
			$_SESSION['naturoFormForThisPatientRenal'] = null;
			$_SESSION['naturoFormForThisPatientSkin'] = null;
			$_SESSION['naturoFormForThisPatientUroGenital'] = null;
			
			$controls_admin = new controls_Admin();
			$controls_admin -> accueil();

		}

		/* -------------------------------------- END BILAN SHEET ------------------------------------ */

		/* -------------------------------------- BILAN NATURO 2 ------------------------------------ */

	 	if ($_GET['action'] == "bilanNaturoTwoForThisPatient") 
	 	{
	 	 	if (session_status() === PHP_SESSION_NONE) 
	 	 	{
	 	 		session_start();
	 	 	}

	 	 	$_SESSION['clientId'] = $_GET['id'];

	 	 	//$_SESSION['clientId'] = substr_replace($_SESSION['clientId'],"",0, 33);
		    //$_SESSION['clientId'] = substr($_SESSION['clientId'], 0, -28);


		    $controls_admin = new controls_Admin();
		    $controls_admin-> bilanNaturoTwoForThisPatient();
	 	 } 

	 	 if ($_GET['action'] == "sendThisBilanForMyClientToFillUp") 
	 	 {
	 	 	if (session_status() === PHP_SESSION_NONE) 
	 	 	{
	 	 	 	session_start();
	 	 	}
	 		$praticienId = $_SESSION['userId'];
	 		$clientId = $_SESSION['clientId'];
	 		
	 		$testName = "Bilan_Naturo_2_".$clientId."_".$praticienId.rand(100000,10000000000);
	 		$bloc1 = 0;
	 		$bloc2 = 0;
	 		$bloc3 = 0;
	 		$bloc4 = 0;
	 		$bloc5 = 0;
	 		$bloc6 = 0;
	 		$bloc7 = 0;
	 		$bloc8 = 0;
	 		$bloc9 = 0;
	 		$bloc10 = 0;
	 		$bloc11 = 0;
	 		$bloc12 = 0;

	 		if ($_POST['box1'] == 1) 
	 		{
	 			$bloc1 = 1;
	 		}

	 		if ($_POST['box2'] == 1) 
	 		{
	 			$bloc2 = 1;
	 		}

	 		if ($_POST['box3'] == 1) 
	 		{
	 			$bloc3 = 1;
	 		}	 		

	 		if ($_POST['box4'] == 1)
	 		{
	 			$bloc4 = 1;
	 		}

	 		if ($_POST['box5'] == 1)
	 		{
	 			$bloc5 = 1;
	 		}

	 		if ($_POST['box6'] == 1)
	 		{
	 			$bloc6 = 1;
	 		}

	 		if ($_POST['box7'] == 1)
	 		{
	 			$bloc7 = 1;
	 		}

	 		if ($_POST['box8'] == 1)
	 		{
	 			$bloc8 = 1;
	 		}

	 		if ($_POST['box9'] == 1)
	 		{
	 			$bloc9 = 1;
	 		}

	 		if ($_POST['box10'] == 1)
	 		{
	 			$bloc10 = 1;
	 		}

	 		if ($_POST['box11'] == 1)
	 		{
	 			$bloc11 = 1;
	 		}

	 		if ($_POST['box12'] == 1)
	 		{
	 			$bloc12 = 1;
	 		}
	 		
	 		/*
	 		for ($i=1; $i < 132 ; $i++) 
	 		{ 
	 			echo $_POST['answer'.$i] . "<br>";
	 		}
	 		*/
	 		
	 		$controls_admin = new controls_Admin();
		    $controls_admin-> sendThisBilanForMyClientToFillUp($praticienId, $clientId, $testName, $bloc1, $bloc2, $bloc3, $bloc4, $bloc5, $bloc6, $bloc7, $bloc8, $bloc9, $bloc10, $bloc11, $bloc12);
	 	 }


		/* -------------------------------------- END BILAN NATURO 2 ------------------------------------ */

		/* ------------------------------------- PHV FOR THIS PATIENT ---------------------------------------------------- */
		if ($_GET['action'] == "hygenVitalProgram") 
		{
		 	if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['clientId'] = $_GET['id'];

			$_SESSION['clientId'] = substr_replace($_SESSION['clientId'],"",0, 33);
		    $_SESSION['clientId'] = substr($_SESSION['clientId'], 0, -28);

			
			$controls_admin = new controls_Admin();
			$controls_admin -> hygenVitalProgram();	
		} 

		if ($_GET['action'] == "saveBilanPhvToClientFolder") 
		{

			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$clientId = $_SESSION['clientId'];
			$praticienId = $_SESSION['userId'];
			$phvName = "PHV_" . $clientId . "_" . $praticienId . rand(10000,1000000000);
			$phvFor = $_SESSION['clientId'];
			$byPraticien = $_SESSION['userId'];
			$shareWithClient = 1;
			$data = $_POST['dataInHere'];
			
			/* ----- adding a specific character ------- */
			$oldstr = $data;
		    $str_to_insert = "d";
		    $pos = 31;

		   // $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
		    $data = $newstr;
    		/* ---- end adding a specific character ---- */


			$controls_admin = new controls_Admin();
			$controls_admin -> saveBilanPhvToClientFolder($praticienId, $clientId, $phvName, $phvFor, $byPraticien, $shareWithClient, $data);	
		} 

		/* ------------------------------------- END PHV FOR THIS PATIENT ---------------------------------------------------- */

		/* -------------------------------------- TEST DNS FROM CLIENT FOLDER ------------------------------------ */

		if ($_GET['action'] == "testDNSForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$_SESSION['clientId'] = $_GET['id'];

			$_SESSION['clientId'] = substr_replace($_SESSION['clientId'],"",0, 33);
		    $_SESSION['clientId'] = substr($_SESSION['clientId'], 0, -28);

			$controls_admin = new controls_Admin();
			$controls_admin -> testDNSForThisPatient();	
		}

		if ($_GET['action'] == "testDNSSubmitOneForThisPatient") 
		{

			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];


			$_SESSION['totalSubmitOnePointsForThisPatient'] = 0;
			$_SESSION['opinionOneForThisPatient'] = null;

			$_SESSION['totalSubmitTwoPointsForThisPatient'] = 0;
			$_SESSION['opinionTwoForThisPatient'] = null;

			$_SESSION['totalSubmitThreePointsForThisPatient'] = 0;
			$_SESSION['opinionThreeForThisPatient'] = null;


			for ($i=1; $i <11 ; $i++)
			{
				
				$_SESSION['totalSubmitOnePointsForThisPatient'] = $_SESSION['totalSubmitOnePointsForThisPatient'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitOnePointsForThisPatient'] >= 0  && $_SESSION['totalSubmitOnePointsForThisPatient'] <= 10) 
			{
				$_SESSION['opinionOneForThisPatient'] = "Peu de troubles";
			}

			else if ($_SESSION['totalSubmitOnePointsForThisPatient'] >= 11 && $_SESSION['totalSubmitOnePointsForThisPatient'] <= 20) 
			{
				$_SESSION['opinionOneForThisPatient'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitOnePointsForThisPatient'] >= 21) 
			{
				$_SESSION['opinionOneForThisPatient'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testDNSSubmitOneForThisPatient($userId, $clientId);
		}

		if ($_GET['action'] == "testDNSSubmitTwoForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
			$_SESSION['totalSubmitTwoPointsForThisPatient'] = 0;

			for ($i=1; $i <11 ; $i++)
			{
				
				$_SESSION['totalSubmitTwoPointsForThisPatient'] = $_SESSION['totalSubmitTwoPointsForThisPatient'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitTwoPointsForThisPatient'] >= 0  && $_SESSION['totalSubmitTwoPointsForThisPatient'] <= 10) 
			{
				$_SESSION['opinionTwoForThisPatient'] = "Peu de troubles";
			}

			else if ($_SESSION['totalSubmitTwoPointsForThisPatient'] >= 11 && $_SESSION['totalSubmitTwoPointsForThisPatient'] <= 20) 
			{
				$_SESSION['opinionTwoForThisPatient'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitTwoPointsForThisPatient'] >= 21) 
			{
				$_SESSION['opinionTwoForThisPatient'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testDNSSubmitTwoForThisPatient($userId, $clientId);
		}


		if ($_GET['action'] == "testDNSSubmitThreeForThisPatient") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}

			$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
			$_SESSION['totalSubmitThreePointsForThisPatient'] = 0;

			for ($i=1; $i <11 ; $i++)
			{
				
				$_SESSION['totalSubmitThreePointsForThisPatient'] = $_SESSION['totalSubmitThreePointsForThisPatient'] + $_POST[$i];
			}

			if ($_SESSION['totalSubmitThreePointsForThisPatient'] >= 0  && $_SESSION['totalSubmitThreePointsForThisPatient'] <= 10) 
			{
				$_SESSION['opinionThreeForThisPatient'] = "Peu de troubles";
			}

			else if ($_SESSION['totalSubmitThreePointsForThisPatient'] >= 11 && $_SESSION['totalSubmitThreePointsForThisPatient'] <= 20) 
			{
				$_SESSION['opinionThreeForThisPatient'] = "Troubles modérés";
			}

			else if ($_SESSION['totalSubmitThreePointsForThisPatient'] >= 21) 
			{
				$_SESSION['opinionThreeForThisPatient'] = "Troubles importantes";
			}

			$controls_admin = new Controls_Admin();
			$controls_admin -> testDNSSubmitThreeForThisPatient($userId, $clientId);
		}


		if ($_GET['action'] == "savethisClientTestDNS") 
		{
		 	if (session_status() === PHP_SESSION_NONE) 
		 	{
		 		session_start();
		 	}

		 	$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
		 	$shareWithClient = 1;

		 	if (isset($_POST['confirmed'])) 
		 	{
		 		$documentName = rand(1000,100000) . " - Test DNS ";
		 		$testDnsAsPDF = $_POST['dataInHere'];


		 		/* ----- adding a specific character ------- */
				$oldstr = $testDnsAsPDF;
			    $str_to_insert = "d";
			    $pos = 31;

			    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
			    $testDnsAsPDF = $newstr;
	    		/* ---- end adding a specific character ---- */
		 		
		 		$controls_admin = new Controls_Admin();
				$controls_admin -> savethisClientTestDNS($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF);
		 	}

		 	if (isset($_POST['denied'])) 
		 	{
		 		$controls_admin = new Controls_Admin();
				$controls_admin -> testDNSSubmitThreeForThisPatient($userId, $clientId);
		 	}
		}

		/* ------------------------------------ END TEST DNS FROM CLIENT FOLDER ---------------------------------- */



		/* ------------------------------------ SAVE TEST DNS FROM CLIENT FOLDER WITHOUT SHARING---------------------------------- */

		if ($_GET['action'] == "savethisClientTestDNSWithoutSharing") 
		{
		 	if (session_status() === PHP_SESSION_NONE) 
		 	{
		 		session_start();
		 	}

		 	$userId = $_SESSION['userId'];
			$clientId = $_SESSION['clientId'];
		 	$shareWithClient = 0;

		 	if (isset($_POST['confirmed'])) 
		 	{
		 		$documentName = rand(1000,100000) . " - Test DNS ";
		 		$testDnsAsPDF = $_POST['dataInHere2'];

		 		/* ----- adding a specific character ------- */
				$oldstr = $testDnsAsPDF;
			    $str_to_insert = "d";
			    $pos = 31;

			    $newstr = substr_replace($oldstr, $str_to_insert, $pos, 0);
			    $testDnsAsPDF = $newstr;
	    		/* ---- end adding a specific character ---- */
		 		
		 		$controls_admin = new Controls_Admin();
				$controls_admin -> savethisClientTestDNSWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF);
		 	}

		 	if (isset($_POST['denied'])) 
		 	{
		 		$controls_admin = new Controls_Admin();
				$controls_admin -> testDNSSubmitThreeForThisPatient($userId, $clientId);
		 	}
		}


		/* ------------------------------------ END SAVE TEST DNS FROM CLIENT FOLDER WITHOUT SHARING---------------------------------- */



		if ($_GET['action'] == "modifyClientDetailsAsThis") 
		{
				$id = $_GET['id'];
				$clientFirstName = base64_encode(ucwords($_POST['clientFirstName']));
				$clientLastName = base64_encode(strtoupper($_POST['clientLastName']));
				$clientDateOfBirth = $_POST['clientDateOfBirth'];
				$clientEmail = base64_encode($_POST['clientEmail']);
				$clientPhoneNumber = base64_encode($_POST['clientPhoneNumber']);
				$clientRoadNumber = base64_encode($_POST['clientRoadNumber']);
				$clientRoadName =  base64_encode(ucwords($_POST['clientRoadName']));
				$clientAddressAlternate = base64_encode( ucwords($_POST['clientAddressAlternate']));
				$clientPostalCode = base64_encode($_POST['clientPostalCode']);
				$clientCity = base64_encode(ucwords($_POST['clientCity']));

				$controls_admin = new controls_Admin();
				$controls_admin -> modifyClientDetailsAsThis($id, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientPostalCode, $clientCity);
		}		


		if ($_GET['action'] == "clientDeletingConfirmed") 
		{
			if (isset($_POST['confirmed'])) 
			{
				$id = $_GET['id'];
				$controls_admin = new controls_Admin();
				$controls_admin -> deleteThisClientFolder($id);
			}

			if (isset($_POST['denied'])) 
			{
				$id = $_GET['id'];
				$controls_admin = new controls_Admin();
				$controls_admin -> getClientDetails($id);
			}
		}

		if ($_GET['action'] == "clientLinkDeletingConfirmedFromMyConnections") 
		{
			if (isset($_POST['confirmed'])) 
			{
				$id = $_GET['id'];

				$id = substr_replace($id,"",0, 33);
		    	$id = substr($id, 0, -28);
				
				$controls_admin = new controls_Admin();
				$controls_admin -> deleteThisLinkFromMyConnections($id);
			}

			if (isset($_POST['denied'])) 
			{
				$id = $_GET['id'];

				$id = substr_replace($id,"",0, 33);
		    	$id = substr($id, 0, -28);

				$controls_admin = new Controls_Admin();
				$controls_admin -> getClientDetailsFromUserLists($id);
			}
		}


		/* -------------------- FROM QUIZ --------------------------------- */
		
		if ($_GET['action'] == "testDNSFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();		
			$controls_admin -> clear($userId);


			$_SESSION['totalSubmitOnePoints'] = 0;
			$_SESSION['opinionOne'] = null;

			$controls_admin -> testDNS($userId);
		}

		if ($_GET['action'] == "testGDSFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();		
			$controls_admin -> clear($userId);


			$_SESSION['totalGDSSubmitOnePoints'] = 0;
			$_SESSION['opinionOneGDS'] = null;

			$controls_admin -> testGDS($userId);
		}

		if ($_GET['action'] == "settingsFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();		
			$controls_admin -> clear($userId);
			$controls_admin -> settings();
		}


		if ($_GET['action'] == "agendaFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> agenda();
		}

		if ($_GET['action'] == "showClientsListFromQuiz") 
		{

			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> showClientsList($clientFor);
		}

		if ($_GET['action'] == "showFemaleClientsFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> showFemaleClients($clientFor);
		}

		if ($_GET['action'] == "showTeenClientsFromQuiz") 
		{

			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> showTeenClients($clientFor);
		}

		if ($_GET['action'] == "documentsFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$userId = $_SESSION['userId'];
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> documents();
		}

		if ($_GET['action'] == "documentsSharedWithMeFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> documentsSharedWithMe();
		}

		if ($_GET['action'] == "filesFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> files();
		}

		if ($_GET['action'] == "aboutUsFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> aboutUs();
		}

		if ($_GET['action'] == "naturoSheetFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE)
			{
				session_start();
			}

			$userId = $_SESSION['userId'];
			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);

			$_SESSION['naturoFormLastName'] = '' ;
			$_SESSION['naturoFormFirstName'] = '' ;
			$_SESSION['naturoFormAge'] = '' ;
			$_SESSION['naturoFormProfession'] = '' ;
			$_SESSION['naturoFormAddress'] = '' ;
			$_SESSION['naturoFormPhoneNumber'] = '' ;
			$_SESSION['naturoFormEmail'] = '' ;
			$_SESSION['naturoFormFamilyDoctor'] = '' ;
			$_SESSION['naturoFormOsteoName'] = '' ;
			$_SESSION['naturoFormKineName'] = '' ;
			$_SESSION['naturoFormOtherSpecialists'] = '' ;
			$_SESSION['naturoFormConsultationMotif'] = '' ;
			$_SESSION['naturoFormTroubleHistory'] = '' ;

			$_SESSION['naturoFormMedicalAntecedents'] = '' ;
			$_SESSION['naturoFormSergicalAntecedents'] = '' ;
			$_SESSION['naturoFormFamilialAntecedents'] = '' ;
			$_SESSION['naturoFormAllergies'] = '' ;
			$_SESSION['naturoFormFemaleCases'] = '' ;
			$_SESSION['naturoFormRunningTreatment'] = '' ;
			$_SESSION['naturoFormOthersRunningTreatment'] = '' ;
			$_SESSION['naturoFormHeightAndWeight'] = '' ;
			$_SESSION['naturoFormSpecialMedicalFollowings'] = '' ;

			$_SESSION['naturoFormVitalEnergy'] = '' ;
			$_SESSION['naturoFormMoral'] = '' ;
			$_SESSION['naturoFormStress'] =  '' ;
			$_SESSION['naturoFormEmotions'] = '' ;
			$_SESSION['naturoFormLifeStyle'] = '' ;
			$_SESSION['naturoFormMealHabits'] = '' ;
			$_SESSION['naturoFormTabacs'] = '' ;
			$_SESSION['naturoFormActivities'] = '' ;
			$_SESSION['naturoFormProfessionalEnvironment'] = '' ;

			$_SESSION['naturoFormSleep'] = '' ;
			$_SESSION['naturoFormDigest'] = '' ;
			$_SESSION['naturoFormOsteoArticular'] = '' ;
			$_SESSION['naturoFormLungs'] = '' ;
			$_SESSION['naturoFormCardiac'] = '' ;
			$_SESSION['naturoFormCircular'] = '' ;
			$_SESSION['naturoFormOrl'] = '' ;
			$_SESSION['naturoFormRenal'] = '' ;
			$_SESSION['naturoFormSkin'] = '' ;
			$_SESSION['naturoFormUroGenital'] = '' ;

			$controls_admin -> naturoSheet();
		}

		if ($_GET['action'] == "showMaleClientsFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> showMaleClients($clientFor);
		}

		if ($_GET['action'] == "showChildClientsFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> showChildClients($clientFor);
		}


		if ($_GET['action'] == "addAClientFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];

		  	$controls_admin = new Controls_Admin();
		  	$controls_admin -> clear($userId);
			$controls_admin -> addAClient();
		}		

		if ($_GET['action'] == "gotoMailsFromQuiz")
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> gotoMails();
		}

		if ($_GET['action'] == "settingsFromQuiz") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> settings();
		}

		if($_GET['action'] == "cabinetManagementFromQuiz")
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$userId = $_SESSION['userId'];

			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> cabinetManagement();
		}

		if ($_GET['action'] == "logoutFromQuiz")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> clear($userId);
			$controls_admin -> logout();
			
		}


	/* -------------------- END FROM QUIZ -----------------------------*/


	/* -------------------- START FROM DNS -----------------------------*/
		
		if ($_GET['action'] == "accueilFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> accueil();
		}

		if ($_GET['action'] == "agendaFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> agenda();
		}

		if ($_GET['action'] == "naturoSheetFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$_SESSION['naturoFormLastName'] = '' ;
			$_SESSION['naturoFormFirstName'] = '' ;
			$_SESSION['naturoFormAge'] = '' ;
			$_SESSION['naturoFormProfession'] = '' ;
			$_SESSION['naturoFormAddress'] = '' ;
			$_SESSION['naturoFormPhoneNumber'] = '' ;
			$_SESSION['naturoFormEmail'] = '' ;
			$_SESSION['naturoFormFamilyDoctor'] = '' ;
			$_SESSION['naturoFormOsteoName'] = '' ;
			$_SESSION['naturoFormKineName'] = '' ;
			$_SESSION['naturoFormOtherSpecialists'] = '' ;
			$_SESSION['naturoFormConsultationMotif'] = '' ;
			$_SESSION['naturoFormTroubleHistory'] = '' ;

			$_SESSION['naturoFormMedicalAntecedents'] = '' ;
			$_SESSION['naturoFormSergicalAntecedents'] = '' ;
			$_SESSION['naturoFormFamilialAntecedents'] = '' ;
			$_SESSION['naturoFormAllergies'] = '' ;
			$_SESSION['naturoFormFemaleCases'] = '' ;
			$_SESSION['naturoFormRunningTreatment'] = '' ;
			$_SESSION['naturoFormOthersRunningTreatment'] = '' ;
			$_SESSION['naturoFormHeightAndWeight'] = '' ;
			$_SESSION['naturoFormSpecialMedicalFollowings'] = '' ;

			$_SESSION['naturoFormVitalEnergy'] = '' ;
			$_SESSION['naturoFormMoral'] = '' ;
			$_SESSION['naturoFormStress'] =  '' ;
			$_SESSION['naturoFormEmotions'] = '' ;
			$_SESSION['naturoFormLifeStyle'] = '' ;
			$_SESSION['naturoFormMealHabits'] = '' ;
			$_SESSION['naturoFormTabacs'] = '' ;
			$_SESSION['naturoFormActivities'] = '' ;
			$_SESSION['naturoFormProfessionalEnvironment'] = '' ;

			$_SESSION['naturoFormSleep'] = '' ;
			$_SESSION['naturoFormDigest'] = '' ;
			$_SESSION['naturoFormOsteoArticular'] = '' ;
			$_SESSION['naturoFormLungs'] = '' ;
			$_SESSION['naturoFormCardiac'] = '' ;
			$_SESSION['naturoFormCircular'] = '' ;
			$_SESSION['naturoFormOrl'] = '' ;
			$_SESSION['naturoFormRenal'] = '' ;
			$_SESSION['naturoFormSkin'] = '' ;
			$_SESSION['naturoFormUroGenital'] = '' ;

			$controls_admin = new Controls_Admin();
			$controls_admin -> naturoSheet();
		}


		if ($_GET['action'] == "showClientsListFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> showClientsList($clientFor);
		}

		if ($_GET['action'] == "showMaleClientsFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> showMaleClients($clientFor);
		}


		if ($_GET['action'] == "showFemaleClientsFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> showFemaleClients($clientFor);
		}


		if ($_GET['action'] == "showTeenClientsFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> showTeenClients($clientFor);
		}

		if ($_GET['action'] == "showChildClientsFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			$clientFor = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> showChildClients($clientFor);
		}

		if ($_GET['action'] == "logoutFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> logout();
		}

		if ($_GET['action'] == "addAClientFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> addAClient();
		}

		if ($_GET['action'] == "documentsFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> documents();
		}


		if ($_GET['action'] == "documentsSharedWithMeFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> documentsSharedWithMe();
		}

		if ($_GET['action'] == "gotoMailsFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> gotoMails();
		}

		if ($_GET['action'] == "filesFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> files();
		}

		if ($_GET['action'] == "settingsFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> settings();
		}

		if ($_GET['action'] == "cabinetManagementFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> cabinetManagement();
		}

		if ($_GET['action'] == "aboutUsFromDns")
		{
		
			if (session_status() === PHP_SESSION_NONE) 
			{
    			session_start();
			}
			$userId = $_SESSION['userId'];
			

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitOnePoints']);
			unset($_SESSION['opinionOne']);

			unset($_SESSION['totalSubmitTwoPoints']);
			unset($_SESSION['opinionTwo']);

			unset($_SESSION['totalSubmitThreePoints']);
			unset($_SESSION['opinionThree']);

			$controls_admin = new Controls_Admin();
			$controls_admin -> aboutUs();
		}

		/* -------------------- END FROM DNS ---------------------*/

		/* ----------------- SEARCH BAR --------------- */
		if ($_GET['action'] == "searchMyKalyaResult")
		{
			
			$searchValue = $_POST['searchBox'];
			$service_url = "https://app.kalyapro.com/search/" . $searchValue ."?adnr=vjhdsfijhsdf";
			
			$controls_admin = new Controls_Admin();
			$controls_admin -> searchMyKalyaResult($service_url);
		}

		if ($_GET['action'] == "receiveKalyaParameters")
		{

			$userKalyaId1 = 1;
		    $userKalyaId2 = 2;
		    /*$userId = "tj7498tygj4nhfg869h7srth684h";
		    $userId = "ze6t8g4gsdv6g8t7h6gbd4eqr98g";
		    $userId = "uydj64df84ghdf867erqggvf658s";
		    $userId = "oe6gt41fg655jtf41gf8tfshdswf";
		    $userId = "df5g64dfs6gb54trsggf56gfb54b";
		    $userId = "kgjd6c54dhwfs64b6dqf4g5fgbd1";
		    $userId = "vgf6rsw6dfg4qdfg654errqggq57";
		    $userId = "m65dxwf4h6dwfgv8erqVG416654d";*/

			$userToken1 = "dfg654dfhg6qet8hbwdf65h4qd64";
		    $userToken2 = "fdhb6srt8h74fg6ch4f8t4hbf6dg";
		    /*$userToken3 = "tj7498tygj4nhfg869h7srth684h";
		    $userToken4 = "ze6t8g4gsdv6g8t7h6gbd4eqr98g";
		    $userToken5 = "uydj64df84ghdf867erqggvf658s";
		    $userToken6 = "oe6gt41fg655jtf41gf8tfshdswf";
		    $userToken7 = "df5g64dfs6gb54trsggf56gfb54b";
		    $userToken8 = "kgjd6c54dhwfs64b6dqf4g5fgbd1";
		    $userToken9 = "vgf6rsw6dfg4qdfg654errqggq57";
		    $userToken10 = "m65dxwf4h6dwfgv8erqVG416654d";*/

		    $userFirstName1 = "Denis NOSAL";
		    $userFirstName2 = "Antor FERDOUS";
		    /*$userFirstName3 = "Melissa DUBOIS";
		    $userFirstName4 = "Pauline BONILLA";
		    $userFirstName5 = "Marion VALENTINI";
		    $userFirstName6 = "Laura DOS SANTOS";
		    $userFirstName7 = "Richard ZIZERT";
		    $userFirstName8 = "Carine ROCARPIN";
		    $userFirstName9 = "Alexandra CIBOT";
		    $userFirstName10 = "Elodie LAUGENIE";*/

		    $userLastName1 = "Denis NOSAL";
		    $userLastName2 = "Antor FERDOUS";
		    /*$userLastName3 = "Melissa DUBOIS";
		    $userLastName4 = "Pauline BONILLA";
		    $userLastName5 = "Marion VALENTINI";
		    $userLastName6 = "Laura DOS SANTOS";
		    $userLastName7 = "Richard ZIZERT";
		    $userLastName8 = "Carine ROCARPIN";
		    $userLastName9 = "Alexandra CIBOT";
		    $userLastName10 = "Elodie LAUGENIE";*/

		    $userProfession1 = "Denis NOSAL";
		    $userProfession2 = "Antor FERDOUS";
		    /*$userProfession3 = "Melissa DUBOIS";
		    $userProfession4 = "Pauline BONILLA";
		    $userProfession5 = "Marion VALENTINI";
		    $userProfession6 = "Laura DOS SANTOS";
		    $userProfession7 = "Richard ZIZERT";
		    $userProfession8 = "Carine ROCARPIN";
		    $userProfession9 = "Alexandra CIBOT";
		    $userProfession10 = "Elodie LAUGENIE";*/


			$userToken = $_POST['token'];
			$userPrivateKey = $_POST['private_key'];

			$userId = $userKalyaId2;
			$firstname = $userFirstName2;
			$lastname = $userLastName2;
			$profession = $userProfession2;


			$user = [
				'id' => $userId,
				'firstname' => $firstname,
				'lastname' => $lastname,
				'profession' => $profession
			];

			echo json_encode($user);
		}	

		/* ------------ END SEARCH BAR --------------- */

		if ($_GET['action'] == "help") 
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> help();
		}

		if ($_GET['action'] == "scheduler") 
		{
			echo $_GET['id'];
			$controls_admin = new Controls_Admin();
			//$controls_admin -> scheduler();
		}

		if ($_GET['action'] == "deleteNotification") 
		{
			$id = $_POST['id'];

			
			$controls_admin = new Controls_Admin();
			$controls_admin -> deleteThisNotification($id);
		}

		if ($_GET['action'] == "updatePraticienJustificatifs") 
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}
			$praticienId = $_SESSION['userId'];

			
			$fileName = rand(1000,10000000)."-". $praticienId ."-". $_FILES['praticienDegreeOrCertificat']['name'];
			//$imgFormatCode = "data:image;base64,";
			$fileType = $_FILES['praticienDegreeOrCertificat']['type'];
			$imageContent = $_FILES['praticienDegreeOrCertificat']['tmp_name'];

			$cryptedImage = "data:".$fileType.";base64," . base64_encode(file_get_contents(addslashes($imageContent)));

			$controls_admin = new Controls_Admin();
			$controls_admin -> updatePraticienJustificatifs($praticienId, $fileName, $cryptedImage);
		}


	}


	else
	{
		if (session_status() === PHP_SESSION_NONE) 
		{
			session_start();
		}
		
		if ($_SESSION['sessionStatus'] == "online")
		{
			$controls_admin = new Controls_Admin();
			$controls_admin -> accueil();
		}
		
		else
		{
			header("location: view/home/home.php");
		}
	}
	?>