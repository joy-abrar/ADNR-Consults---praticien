<?php
	
	require('Manager.php');

	class userManager extends Manager
	{

		public function loginThisUserByFaceRecognition($userId)
		{
			$db = $this->dbConnect();
			$loginAccount = $db -> prepare('SELECT * FROM user_praticien WHERE id = ?');
			$loginAccount ->execute(array($userId));
			
			$rows = $loginAccount->fetch(PDO::FETCH_ASSOC);		

			/*
				while($rows = $loginAccount -> fetch())
				{
				}
			*/
			$fromDatabaseId = $rows['id'];
			$fromDatabaseSexe = $rows['sexe'];
			$fromDatabaseFirstname = $rows['firstname'];
			$fromDatabaseLastname = $rows['lastname'];
			$fromDatabaseUsername = $rows['username'];
			$fromDatabasePassword = $rows['password'];
			$fromDatabaseUserEmail = $rows['email'];
			$fromDatabaseUserStatus = $rows['status'];
			$fromDatabaseDob = $rows['dob'];

			$fromDatabasePraticienRoadNumber = $rows['praticienRoadNumber'];
			$fromDatabasePraticienRoadName = $rows['praticienRoadName'];
			$fromDatabasePraticienComplementAddress = $rows['praticienComplementAddress'];
			$fromDatabasePraticienCityName = $rows['praticienCityName'];
			$fromDatabasePraticienCodePostal = $rows['praticienCodePostal'];
			$fromDatabasePraticienCountry = $rows['praticienCountry'];
			$fromDatabasePraticienEducationQualification = $rows['praticienEducationQualification'];
			$fromDatabasePraticienCabinetPhoneNumber = $rows['praticienCabinetPhoneNumber'];
			$fromDatabaseVerificationStatus = $rows['verificationStatus'];
			$fromDatabaseActivationStatus = $rows['activationStatus'];
			$fromDatabaseExpiryDate = $rows['expiryDate'];
			$fromDatabaseSignature = $rows['signature'];

			$fromDatabaseNaturopathe = $rows['Naturopathe'];  
			$fromDatabaseReflexologue = $rows['Reflexologue'];  
			$fromDatabaseSophrologue = $rows['Sophrologue'];
			$fromDatabaseMedecin = $rows['Medecin'];  
			$fromDatabaseChirurgien = $rows['Chirurgien'];  
			$fromDatabasePharmacien = $rows['Pharmacien'];  
			$fromDatabaseDentiste = $rows['Dentiste'];  
			$fromDatabaseSageFemme = $rows['SageFemme'];  
			$fromDatabaseVeterinaire = $rows['Veterinaire'];  
			$fromDatabaseAideSoignant = $rows['AideSoignant'];  
			$fromDatabaseAuxiliaireDePuericulture = $rows['AuxiliaireDePuericulture'];  
			$fromDatabaseInfirmier = $rows['Infirmier'];  
			$fromDatabaseInfirmierDeBlocOperatoire = $rows['InfirmierDeBlocOperatoire'];  
			$fromDatabaseInfirmierAnesthesiste = $rows['InfirmierAnesthesiste'];  
			$fromDatabasePodologue = $rows['Podologue'];  
			$fromDatabaseKinesitherapeute = $rows['Kinesitherapeute'];  
			$fromDatabaseErgotherapeute = $rows['Ergotherapeute'];  
			$fromDatabaseOrthophoniste = $rows['Orthophoniste'];  
			$fromDatabasePsychomotricien = $rows['Psychomotricien'];  
			$fromDatabaseDieteticien = $rows['Dieteticien'];  
			$fromDatabaseOrthoprothesiste = $rows['Orthoprothesiste'];  
			$fromDatabaseOrthoptiste = $rows['Orthoptiste'];  
			$fromDatabasePedicure = $rows['Pedicure'];  
			$fromDatabaseManipulateurEnElectroradiologieMedicale = $rows['ManipulateurEnElectroradiologieMedicale'];  
			$fromDatabaseTechnicienDeLaboratoire = $rows['TechnicienDeLaboratoire'];  
			$fromDatabasePreparateurEnPharmacie = $rows['PreparateurEnPharmacie'];  
			$fromDatabaseAmbulancier = $rows['Ambulancier'];  
			$fromDatabasePsychologue = $rows['Psychologue'];  
			$fromDatabaseOphtalmologue = $rows['Ophtalmologue'];  
			$fromDatabaseAutres = $rows['autres']; 			
			
			if ($loginAccount) 
			{

				if ($fromDatabaseUserStatus == "praticien" && $fromDatabaseVerificationStatus == "confirmed")
				{
					$createRecord = $db -> prepare(' INSERT INTO records(praticienId) VALUES(?) ');
					$createRecord ->execute(array($fromDatabaseId));
					 
					session_start();
					$_SESSION['sessionStatus'] = "online";
					$_SESSION['userId'] = $fromDatabaseId;
					$_SESSION['userSexe'] = $fromDatabaseSexe;
					$_SESSION['firstName'] = $fromDatabaseFirstname;
					$_SESSION['lastName'] = $fromDatabaseLastname;
					$_SESSION['userName'] = $fromDatabaseUsername;
					$_SESSION['userPassword'] = $fromDatabasePassword;
					$_SESSION['userEmail'] = $fromDatabaseUserEmail;
					$_SESSION['userDob'] = $fromDatabaseDob;
					$_SESSION['userStatus'] = $fromDatabaseUserStatus;

					$dateOfBirth = $_SESSION['userDob'];
						$today = date("Y-m-d");
						$diff = date_diff(date_create($dateOfBirth), date_create($today));
				  	$_SESSION['userAge'] = $diff->format('%y');


				  	$_SESSION['praticienRoadNumber'] = $fromDatabasePraticienRoadNumber;
					$_SESSION['praticienRoadName'] = $fromDatabasePraticienRoadName;
					$_SESSION['praticienComplementAddress'] = $fromDatabasePraticienComplementAddress;
					$_SESSION['praticienCityName'] = $fromDatabasePraticienCityName;
					$_SESSION['praticienCodePostal'] = $fromDatabasePraticienCodePostal;
					$_SESSION['praticienCountry'] = $fromDatabasePraticienCountry;
					$_SESSION['praticienEducationQualification'] = $fromDatabasePraticienEducationQualification;
					$_SESSION['praticienCabinetPhoneNumber'] = $fromDatabasePraticienCabinetPhoneNumber;
					$_SESSION['verificationStatus'] = $fromDatabaseVerificationStatus;
					$_SESSION['activationStatus'] = $fromDatabaseActivationStatus;
					$_SESSION['expiryDate'] = $fromDatabaseExpiryDate;
					$_SESSION['praticienSignature'] = $fromDatabaseSignature;

					$_SESSION['praticienNaturopatheStatus'] = $fromDatabaseNaturopathe;
					$_SESSION['praticienReflexologueStatus'] = $fromDatabaseReflexologue;
					$_SESSION['praticienSophrologueStatus'] = $fromDatabaseSophrologue;
					$_SESSION['praticienMedecinStatus'] = $fromDatabaseMedecin;
					$_SESSION['praticienChirurgienStatus'] = $fromDatabaseChirurgien;
					$_SESSION['praticienPharmacienStatus'] = $fromDatabasePharmacien;
					$_SESSION['praticienDentisteStatus'] = $fromDatabaseDentiste;
					$_SESSION['praticienSageFemmeStatus'] = $fromDatabaseSageFemme;
					$_SESSION['praticienVeterinaireStatus'] = $fromDatabaseVeterinaire;
					$_SESSION['praticienAideSoignantStatus'] = $fromDatabaseAideSoignant;
					$_SESSION['praticienAuxiliaireDePuericultureStatus'] = $fromDatabaseAuxiliaireDePuericulture;
					$_SESSION['praticienInfirmierStatus'] = $fromDatabaseInfirmier;
					$_SESSION['praticienInfirmierDeBlocOperatoireStatus'] = $fromDatabaseInfirmierDeBlocOperatoire;
					$_SESSION['praticienInfirmierAnesthesisteStatus'] = $fromDatabaseInfirmierAnesthesiste;
					$_SESSION['praticienPodologueStatus'] = $fromDatabasePodologue;
					$_SESSION['praticienKinesitherapeuteStatus'] = $fromDatabaseKinesitherapeute;
					$_SESSION['praticienErgotherapeuteStatus'] = $fromDatabaseErgotherapeute;
					$_SESSION['praticienOrthophonisteStatus'] = $fromDatabaseOrthophoniste;
					$_SESSION['praticienPsychomotricienStatus'] = $fromDatabasePsychomotricien;
					$_SESSION['praticienDieteticienStatus'] = $fromDatabaseDieteticien;
					$_SESSION['praticienOrthoprothesisteStatus'] = $fromDatabaseOrthoprothesiste;
					$_SESSION['praticienOrthoptisteStatus'] = $fromDatabaseOrthoptiste;
					$_SESSION['praticienPedicureStatus'] = $fromDatabasePedicure;
					$_SESSION['praticienManipulateurEnElectroradiologieMedicaleStatus'] = $fromDatabaseManipulateurEnElectroradiologieMedicale;
					$_SESSION['praticienTechnicienDeLaboratoireStatus'] = $fromDatabaseTechnicienDeLaboratoire;
					$_SESSION['praticienPreparateurEnPharmacieStatus'] = $fromDatabasePreparateurEnPharmacie;
					$_SESSION['praticienAmbulancierStatus'] = $fromDatabaseAmbulancier;
					$_SESSION['praticienPsychologueStatus'] = $fromDatabasePsychologue;
					$_SESSION['praticienOphtalmologueStatus'] = $fromDatabaseOphtalmologue;
					$_SESSION['praticienAutresStatus'] = $fromDatabaseAutres;

					header('location:view/dashboard/dashboard.php');
				}

				else
				{

					header("location:index.php");
				}
				
			}

			else
			{
				echo "fetch didnt worked for login";
			}
		}

		/*
		public function createAccount($sexe, $firstname, $lastname, $email, $username, $password, $dob)
		{
			$status = "praticien";
			$db = $this->dbConnect();
			$createAccount = $db -> prepare('INSERT INTO users(sexe, firstname, lastname, email, username, password, dob, status) VALUES(?, ?, ?, ?, ?, ?, ?, ?) ');
			$createAccount ->execute(array($sexe, $firstname, $lastname, $email, $username, $password, $dob, $status));
			return $createAccount;
		}
		*/

		public function missmatchedPassword()
		{
			header("location:index.php?action=wrongPassword");
		}

		public function accountCreateRequest($sexe, $firstname, $lastname, $email, $username, $password, $dob, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienWorkPermit, $praticienEducationQualification, $praticienDegreeOrCertificat, $praticienCabinetPhoneNumber, $praticienSignature, $Naturopathe, $Réflexologue, $Sophrologue, $Médecin, $Chirurgien, $Pharmacien, $Dentiste, $SageFemme, $Vétérinaire, $AideSoignant, $AuxiliaireDePuériculture, $Infirmier, $InfirmierDeBlocOpératoire, $InfirmierAnesthésiste, $Podologue, $Kinésithérapeute, $Ergothérapeute, $Orthophoniste, $Psychomotricien, $Diététicien, $Orthoprothésiste, $Orthoptiste, $Pédicure, $ManipulateurEnElectroradiologieMédicale, $TechnicienDeLaboratoire,$PréparateurEnPharmacie, $Ambulancier, $Psychologue, $Ophtalmologue, $autres)
		{


			if (!file_exists('/accountRequests/'. base64_decode($firstname) . " " . base64_decode($lastname)))
      		{
      			mkdir('accountRequests/'.base64_decode($firstname) . " " . base64_decode($lastname), 0777, true);
      		}


		    $file1_current_location = $_FILES['praticienWorkPermit']['tmp_name'];
		    $folder = "accountRequests/".base64_decode($firstname) . " ". base64_decode($lastname) . "/";
		 	move_uploaded_file($file1_current_location,$folder.$praticienWorkPermit);


		 	$file2_current_location = $_FILES['praticienDegreeOrCertificat']['tmp_name'];
		    $folder = "accountRequests/".base64_decode($firstname) . " ". base64_decode($lastname) . "/";
		 	move_uploaded_file($file2_current_location,$folder.$praticienDegreeOrCertificat);


		 	$file1_new_location = $folder.$praticienWorkPermit;
			$file2_new_location = $folder.$praticienDegreeOrCertificat;
			
			
			$status = "praticien";
			$verificationStatus = "waiting" ;

			$expiryDate = date("Y-m-d");
			$db = $this->dbConnect();
			$accountCreate= $db -> prepare('INSERT INTO user_praticien(status, sexe, firstname, lastname, email, username, password, dob, praticienRoadNumber, praticienRoadName, praticienComplementAddress, praticienCityName, praticienCodePostal, praticienCountry, praticienWorkPermit, praticienEducationQualification, praticienDegreeOrCertificat, verificationStatus, praticienCabinetPhoneNumber, expiryDate, signature, Naturopathe, Reflexologue, Sophrologue, Medecin, Chirurgien, Pharmacien, Dentiste, SageFemme, Veterinaire, AideSoignant, AuxiliaireDePuericulture, Infirmier, InfirmierDeBlocOperatoire, InfirmierAnesthesiste, Podologue, Kinesitherapeute, Ergotherapeute, Orthophoniste, Psychomotricien, Dieteticien, Orthoprothesiste, Orthoptiste, Pedicure, ManipulateurEnElectroradiologieMedicale, TechnicienDeLaboratoire, PreparateurEnPharmacie, Ambulancier, Psychologue, Ophtalmologue, autres) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
			$accountCreate ->execute(array($status, $sexe, $firstname, $lastname, $email, $username, $password, $dob, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $file1_new_location, $praticienEducationQualification, $file2_new_location, $verificationStatus, $praticienCabinetPhoneNumber, $expiryDate, $praticienSignature, $Naturopathe, $Réflexologue, $Sophrologue, $Médecin, $Chirurgien, $Pharmacien, $Dentiste, $SageFemme, $Vétérinaire, $AideSoignant, $AuxiliaireDePuériculture, $Infirmier, $InfirmierDeBlocOpératoire, $InfirmierAnesthésiste, $Podologue, $Kinésithérapeute, $Ergothérapeute, $Orthophoniste, $Psychomotricien, $Diététicien, $Orthoprothésiste, $Orthoptiste, $Pédicure, $ManipulateurEnElectroradiologieMédicale, $TechnicienDeLaboratoire,$PréparateurEnPharmacie, $Ambulancier, $Psychologue, $Ophtalmologue, $autres));
			return $accountCreate;
		}

		public function getMatchForUploadingFaceRecognitionPicture($sexe, $firstname, $lastname, $email, $username, $password, $dob, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry)
		{
			$db = $this->dbConnect();
			$getMatchForUploadingFaceRecognitionPicture = $db -> prepare('SELECT * FROM user_praticien WHERE sexe = ? AND firstname = ? AND lastname = ? AND email = ? AND username = ? AND password = ? AND dob = ? AND praticienRoadNumber = ? AND praticienRoadName = ? AND praticienComplementAddress = ? AND praticienCityName = ? AND praticienCodePostal = ? AND praticienCountry = ? ');
			$getMatchForUploadingFaceRecognitionPicture ->execute(array($sexe, $firstname, $lastname, $email, $username, $password, $dob, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry));
			return $getMatchForUploadingFaceRecognitionPicture;

		}

		public function login($username, $password)
		{
			$db = $this->dbConnect();
			$loginAccount = $db -> prepare('SELECT * FROM user_praticien WHERE username = ? AND password = ? ');
			$loginAccount ->execute(array($username, $password));
			
			$rows = $loginAccount->fetch(PDO::FETCH_ASSOC);		

			/*
				while($rows = $loginAccount -> fetch())
				{
				}
			*/
			$fromDatabaseId = $rows['id'];
			$fromDatabaseSexe = $rows['sexe'];
			$fromDatabaseFirstname = $rows['firstname'];
			$fromDatabaseLastname = $rows['lastname'];
			$fromDatabaseUsername = $rows['username'];
			$fromDatabasePassword = $rows['password'];
			$fromDatabaseUserEmail = $rows['email'];
			$fromDatabaseUserStatus = $rows['status'];
			$fromDatabaseDob = $rows['dob'];

			$fromDatabasePraticienRoadNumber = $rows['praticienRoadNumber'];
			$fromDatabasePraticienRoadName = $rows['praticienRoadName'];
			$fromDatabasePraticienComplementAddress = $rows['praticienComplementAddress'];
			$fromDatabasePraticienCityName = $rows['praticienCityName'];
			$fromDatabasePraticienCodePostal = $rows['praticienCodePostal'];
			$fromDatabasePraticienCountry = $rows['praticienCountry'];
			$fromDatabasePraticienEducationQualification = $rows['praticienEducationQualification'];
			$fromDatabasePraticienCabinetPhoneNumber = $rows['praticienCabinetPhoneNumber'];
			$fromDatabaseVerificationStatus = $rows['verificationStatus'];
			$fromDatabaseActivationStatus = $rows['activationStatus'];
			$fromDatabaseExpiryDate = $rows['expiryDate'];
			$fromDatabaseSignature = $rows['signature'];

			$fromDatabaseNaturopathe = $rows['Naturopathe'];  
			$fromDatabaseReflexologue = $rows['Reflexologue'];  
			$fromDatabaseSophrologue = $rows['Sophrologue'];
			$fromDatabaseMedecin = $rows['Medecin'];  
			$fromDatabaseChirurgien = $rows['Chirurgien'];  
			$fromDatabasePharmacien = $rows['Pharmacien'];  
			$fromDatabaseDentiste = $rows['Dentiste'];  
			$fromDatabaseSageFemme = $rows['SageFemme'];  
			$fromDatabaseVeterinaire = $rows['Veterinaire'];  
			$fromDatabaseAideSoignant = $rows['AideSoignant'];  
			$fromDatabaseAuxiliaireDePuericulture = $rows['AuxiliaireDePuericulture'];  
			$fromDatabaseInfirmier = $rows['Infirmier'];  
			$fromDatabaseInfirmierDeBlocOperatoire = $rows['InfirmierDeBlocOperatoire'];  
			$fromDatabaseInfirmierAnesthesiste = $rows['InfirmierAnesthesiste'];  
			$fromDatabasePodologue = $rows['Podologue'];  
			$fromDatabaseKinesitherapeute = $rows['Kinesitherapeute'];  
			$fromDatabaseErgotherapeute = $rows['Ergotherapeute'];  
			$fromDatabaseOrthophoniste = $rows['Orthophoniste'];  
			$fromDatabasePsychomotricien = $rows['Psychomotricien'];  
			$fromDatabaseDieteticien = $rows['Dieteticien'];  
			$fromDatabaseOrthoprothesiste = $rows['Orthoprothesiste'];  
			$fromDatabaseOrthoptiste = $rows['Orthoptiste'];  
			$fromDatabasePedicure = $rows['Pedicure'];  
			$fromDatabaseManipulateurEnElectroradiologieMedicale = $rows['ManipulateurEnElectroradiologieMedicale'];  
			$fromDatabaseTechnicienDeLaboratoire = $rows['TechnicienDeLaboratoire'];  
			$fromDatabasePreparateurEnPharmacie = $rows['PreparateurEnPharmacie'];  
			$fromDatabaseAmbulancier = $rows['Ambulancier'];  
			$fromDatabasePsychologue = $rows['Psychologue'];  
			$fromDatabaseOphtalmologue = $rows['Ophtalmologue'];  
			$fromDatabaseAutres = $rows['autres']; 			
			if ($loginAccount) 
			{
				if ($username == $fromDatabaseUsername && $password == $fromDatabasePassword) 
				{

					if ($fromDatabaseUserStatus == "praticien" && $fromDatabaseVerificationStatus == "confirmed")
					{
						$createRecord = $db -> prepare(' INSERT INTO records(praticienId) VALUES(?) ');
						$createRecord ->execute(array($fromDatabaseId));
						 
						session_start();
						$_SESSION['sessionStatus'] = "online";
						$_SESSION['userId'] = $fromDatabaseId;
						$_SESSION['userSexe'] = $fromDatabaseSexe;
						$_SESSION['firstName'] = $fromDatabaseFirstname;
						$_SESSION['lastName'] = $fromDatabaseLastname;
						$_SESSION['userName'] = $fromDatabaseUsername;
						$_SESSION['userPassword'] = $fromDatabasePassword;
						$_SESSION['userEmail'] = $fromDatabaseUserEmail;
						$_SESSION['userDob'] = $fromDatabaseDob;
						$_SESSION['userStatus'] = $fromDatabaseUserStatus;

						$dateOfBirth = $_SESSION['userDob'];
  						$today = date("Y-m-d");
  						$diff = date_diff(date_create($dateOfBirth), date_create($today));
					  	$_SESSION['userAge'] = $diff->format('%y');


					  	$_SESSION['praticienRoadNumber'] = $fromDatabasePraticienRoadNumber;
						$_SESSION['praticienRoadName'] = $fromDatabasePraticienRoadName;
						$_SESSION['praticienComplementAddress'] = $fromDatabasePraticienComplementAddress;
						$_SESSION['praticienCityName'] = $fromDatabasePraticienCityName;
						$_SESSION['praticienCodePostal'] = $fromDatabasePraticienCodePostal;
						$_SESSION['praticienCountry'] = $fromDatabasePraticienCountry;
						$_SESSION['praticienEducationQualification'] = $fromDatabasePraticienEducationQualification;
						$_SESSION['praticienCabinetPhoneNumber'] = $fromDatabasePraticienCabinetPhoneNumber;
						$_SESSION['verificationStatus'] = $fromDatabaseVerificationStatus;
						$_SESSION['activationStatus'] = $fromDatabaseActivationStatus;
						$_SESSION['expiryDate'] = $fromDatabaseExpiryDate;
						$_SESSION['praticienSignature'] = $fromDatabaseSignature;

						$_SESSION['praticienNaturopatheStatus'] = $fromDatabaseNaturopathe;
						$_SESSION['praticienReflexologueStatus'] = $fromDatabaseReflexologue;
						$_SESSION['praticienSophrologueStatus'] = $fromDatabaseSophrologue;
						$_SESSION['praticienMedecinStatus'] = $fromDatabaseMedecin;
						$_SESSION['praticienChirurgienStatus'] = $fromDatabaseChirurgien;
						$_SESSION['praticienPharmacienStatus'] = $fromDatabasePharmacien;
						$_SESSION['praticienDentisteStatus'] = $fromDatabaseDentiste;
						$_SESSION['praticienSageFemmeStatus'] = $fromDatabaseSageFemme;
						$_SESSION['praticienVeterinaireStatus'] = $fromDatabaseVeterinaire;
						$_SESSION['praticienAideSoignantStatus'] = $fromDatabaseAideSoignant;
						$_SESSION['praticienAuxiliaireDePuericultureStatus'] = $fromDatabaseAuxiliaireDePuericulture;
						$_SESSION['praticienInfirmierStatus'] = $fromDatabaseInfirmier;
						$_SESSION['praticienInfirmierDeBlocOperatoireStatus'] = $fromDatabaseInfirmierDeBlocOperatoire;
						$_SESSION['praticienInfirmierAnesthesisteStatus'] = $fromDatabaseInfirmierAnesthesiste;
						$_SESSION['praticienPodologueStatus'] = $fromDatabasePodologue;
						$_SESSION['praticienKinesitherapeuteStatus'] = $fromDatabaseKinesitherapeute;
						$_SESSION['praticienErgotherapeuteStatus'] = $fromDatabaseErgotherapeute;
						$_SESSION['praticienOrthophonisteStatus'] = $fromDatabaseOrthophoniste;
						$_SESSION['praticienPsychomotricienStatus'] = $fromDatabasePsychomotricien;
						$_SESSION['praticienDieteticienStatus'] = $fromDatabaseDieteticien;
						$_SESSION['praticienOrthoprothesisteStatus'] = $fromDatabaseOrthoprothesiste;
						$_SESSION['praticienOrthoptisteStatus'] = $fromDatabaseOrthoptiste;
						$_SESSION['praticienPedicureStatus'] = $fromDatabasePedicure;
						$_SESSION['praticienManipulateurEnElectroradiologieMedicaleStatus'] = $fromDatabaseManipulateurEnElectroradiologieMedicale;
						$_SESSION['praticienTechnicienDeLaboratoireStatus'] = $fromDatabaseTechnicienDeLaboratoire;
						$_SESSION['praticienPreparateurEnPharmacieStatus'] = $fromDatabasePreparateurEnPharmacie;
						$_SESSION['praticienAmbulancierStatus'] = $fromDatabaseAmbulancier;
						$_SESSION['praticienPsychologueStatus'] = $fromDatabasePsychologue;
						$_SESSION['praticienOphtalmologueStatus'] = $fromDatabaseOphtalmologue;
						$_SESSION['praticienAutresStatus'] = $fromDatabaseAutres;

						header('location:view/dashboard/dashboard.php');
					}

					else 
					{
						header("location:index.php");					
					}
				
				}
				
			
				else
				{

					header("location:index.php");
				}
			}

			else
			{
				echo "fetch didnt worked for login";
			}
		}

		public function checkEmailAndPasswordForRecovery($email, $dateOfBirth, $code)
		{
			$db = $this->dbConnect();
			$checkForVerification = $db -> prepare('SELECT * FROM user_praticien WHERE email = ? AND dob = ? ');
			$checkForVerification ->execute(array($email, $dateOfBirth));
			
			$rows = $checkForVerification->fetch(PDO::FETCH_ASSOC);				
			
			$idFromDb = $rows['id'];
			$emailFromDb = $rows['email'];
			$dobFromDb = $rows['dob'];
			$usernameFromDb = $rows['username'];
		
			if ($checkForVerification -> rowCount() > 0) 
			{

				echo "verification success !" ;

				if ($emailFromDb == $email && $dobFromDb == $dateOfBirth) 
				{
					$inputCode = $db -> prepare('UPDATE user_praticien SET code = ? WHERE email = ? AND dob = ?');
					$inputCode ->execute(array($code, $email, $dateOfBirth));				
					include_once('view/sendPassword/sendPassword.php');
					header('location:view/codeVerification/codeVerification.php');
					//return $inputCode;
				}
			
				else
				{
					header("location: view/incorrectMatchForForgetPassword/incorrectMatchForForgetPassword.php");
				}
			
			}
			
			else
			{
				header("location: view/incorrectMatchForForgetPassword/incorrectMatchForForgetPassword.php");
			}	

		}

		public function checkInsertedCode($recoveryEmail, $code)
		{
			$db = $this->dbConnect();
			$checkInsertedCode = $db -> prepare('SELECT * FROM user_praticien WHERE email = ?');
			$checkInsertedCode ->execute(array($recoveryEmail));

			$rows = $checkInsertedCode->fetch(PDO::FETCH_ASSOC);	
			$codeFromDb = $rows['code'];

			if ($codeFromDb == $code) 
			{
				header("location:view/resetPassword/resetPassword.php");
			}
		}

		public function resetPassword($recoveryEmail, $password,$retypedPassword)
		{
			$db = $this->dbConnect();
			$resetPassword = $db -> prepare('UPDATE user_praticien SET password = ? WHERE email = ?');
			$resetPassword ->execute(array($password, $recoveryEmail));
		}

		public function forgetPassword()
		{
			header("location: view/forgetPassword/forgetPassword.php");
		}

		public function createAccountLink()
		{
			header("location: view/createAccountPage/createAccountPage.php");
		}

		public function forgetIdentification()
		{
			header("location: view/forgetIdentification/forgetIdentification.php");
		}

		public function purchaseSuccess($userId, $id, $status, $amount, $paymentTime, $payerEmail, $payerGivenName, $payerSurname, $payerId)
		{
			$activationStatus = "active";
	
			if ($amount === "5.00") 
			{
				$today = date("d-m-Y");
		      	$date = new DateTime($today); // Y-m-d
				$date->add(new DateInterval('P90D'));
				$expiryDate = $date->format('d-m-Y');
				$expiryDate2 = $date->format('Y-m-d');
			}

			if ($amount === "7.00") 
			{
				$today = date("d-m-Y");
		      	$date = new DateTime($today); // Y-m-d
				$date->add(new DateInterval('P120D'));
				$expiryDate = $date->format('d-m-Y');
				$expiryDate2 = $date->format('Y-m-d');
			}

			if ($amount === "9.00") 
			{
				$today = date("d-m-Y");
		      	$date = new DateTime($today); // Y-m-d
				$date->add(new DateInterval('P150D'));
				$expiryDate = $date->format('d-m-Y');
				$expiryDate2 = $date->format('Y-m-d');
			}

			if ($amount === "10.00") 
			{
				$today = date("d-m-Y");
		      	$date = new DateTime($today); // Y-m-d
				$date->add(new DateInterval('P180D'));
				$expiryDate = $date->format('d-m-Y');
				$expiryDate2 = $date->format('Y-m-d');
			}
		
			$db = $this->dbConnect();
			$purchaseSuccess = $db -> prepare('INSERT INTO purchase (praticienId, purchaseId, activationStatus, expiryDate, status, amount, paymentTime, payerEmail, payerGivenName, payerSurname, payerId) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');	
			$purchaseSuccess -> execute(array($userId, $id, $activationStatus, $expiryDate2, $status, $amount, $paymentTime, $payerEmail, $payerGivenName, $payerSurname, $payerId));	
			
			$updatePraticienStatus = $db -> prepare('UPDATE user_praticien SET activationStatus = ?, expiryDate = ? WHERE id = ?');	
			$updatePraticienStatus -> execute(array($activationStatus, $expiryDate2, $userId));

			$_SESSION['activationStatus'] = $activationStatus;
			$_SESSION['expiryDate'] = $expiryDate;


	      	$today = time(); // or your date as well
			$dateToCalculate = strtotime($_SESSION['expiryDate']);
			$datediff = $dateToCalculate - $today;
			$timeRemaining = round($datediff / (60 * 60 * 24));
			$_SESSION['timeRemaining'] = $timeRemaining;

			return $updatePraticienStatus;
		}

		public function getClientDetailsForNotificationMail($bilanFor)
		{
			$db = $this->dbConnect();
			$getClientDetailsForNotificationMail = $db -> prepare('SELECT * FROM user_client WHERE id = ?');	
			$getClientDetailsForNotificationMail -> execute(array($bilanFor));
			return $getClientDetailsForNotificationMail;
		}

		public function getClientDetailsForDNSNotificationMail($clientId)
		{
			$db = $this->dbConnect();
			$getClientDetailsForDNSNotificationMail = $db -> prepare('SELECT * FROM user_client WHERE id = ?');	
			$getClientDetailsForDNSNotificationMail -> execute(array($clientId));
			return $getClientDetailsForDNSNotificationMail;
		}

		public function saveBilanNaturoToClientProfil($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data)
		{
			$db = $this->dbConnect();
			$saveBilanNaturoToClientProfil = $db -> prepare('INSERT INTO naturosheet (bilanName, bilanFor, byPraticien, shareWithClient, data) VALUES(?, ?, ?, ?, ?)');	
			$saveBilanNaturoToClientProfil -> execute(array($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data));
			return $saveBilanNaturoToClientProfil;
		}

		public function saveBilanNaturoToClientProfilWithoutSharing($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data)
		{
			$db = $this->dbConnect();
			$saveBilanNaturoToClientProfilWithoutSharing = $db -> prepare('INSERT INTO naturosheet (bilanName, bilanFor, byPraticien, shareWithClient, data) VALUES(?, ?, ?, ?, ?)');	
			$saveBilanNaturoToClientProfilWithoutSharing -> execute(array($bilanName, $bilanFor, $byPraticien, $shareWithClient, $data));
			return $saveBilanNaturoToClientProfilWithoutSharing;
		}

		public function sendThisBilanForMyClientToFillUp($praticienId, $clientId, $testName, $bloc1, $bloc2, $bloc3, $bloc4, $bloc5, $bloc6, $bloc7, $bloc8, $bloc9, $bloc10, $bloc11, $bloc12)
		{
			$bilanStatus= "notSubmittedByClient";
			$db = $this->dbConnect();
			$sendThisBilanForMyClientToFillUp = $db -> prepare('INSERT INTO bilanNaturoTwoForThisClientBlocSelection (praticienId, clientId, testName, bloc1, bloc2, bloc3, bloc4, bloc5, bloc6, bloc7, bloc8, bloc9, bloc10, bloc11, bloc12, bilanStatus) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');	
			$sendThisBilanForMyClientToFillUp -> execute(array($praticienId, $clientId, $testName, $bloc1, $bloc2, $bloc3, $bloc4, $bloc5, $bloc6, $bloc7, $bloc8, $bloc9, $bloc10, $bloc11, $bloc12, $bilanStatus));
			return $sendThisBilanForMyClientToFillUp;
		}

		public function prepareThisBilanAnswerSheet($testName, $praticienId, $clientId)
		{
			$db = $this->dbConnect();
			$prepareThisBilanAnswerSheet = $db -> prepare('SELECT * FROM bilanNaturoTwoForThisClientBlocSelection WHERE testName = ? AND praticienId = ? AND clientId = ?');	
			$prepareThisBilanAnswerSheet -> execute(array($testName, $praticienId, $clientId ));
			return $prepareThisBilanAnswerSheet;
		}

		public function prepareThisBilanAnswerSheet2($QuestionBlocId, $praticienId, $clientId)
		{
			$db = $this->dbConnect();
			$prepareThisBilanAnswerSheet2 = $db -> prepare('INSERT INTO bilanNaturoTwoQuestionSheetAnswer(QuestionBlocId, clientId, praticienId) VALUES(?, ?, ?)');	
			$prepareThisBilanAnswerSheet2 -> execute(array($QuestionBlocId, $praticienId, $clientId ));
			return $prepareThisBilanAnswerSheet2;
		}

		public function testDNS($userId)
		{
			$db = $this->dbConnect();
			$naturoProgramContent = $db -> prepare('SELECT * FROM mynaturoprogramcontent WHERE praticienId = ?');	
			$naturoProgramContent -> execute(array($userId));
			return $naturoProgramContent;
		}

		public function getPhvDesignForThisClient()
		{
			$userId = $_SESSION['userId'];

			$db = $this->dbConnect();
			$getPhvDesignForThisClient = $db -> prepare('SELECT * FROM mynaturoprogramcontent WHERE praticienId = ?');	
			$getPhvDesignForThisClient -> execute(array($userId));
			return $getPhvDesignForThisClient;
		}

		public function getContentPageDesignForThisClient()
		{
			$userId = $_SESSION['userId'];

			$db = $this->dbConnect();
			$getContentPageDesignForThisClient = $db -> prepare('SELECT * FROM contentPageDesign WHERE praticienId = ?');	
			$getContentPageDesignForThisClient -> execute(array($userId));
			return $getContentPageDesignForThisClient;
		}

		public function saveBilanPhvToClientFolder($praticienId, $clientId, $phvName, $phvFor, $byPraticien, $shareWithClient, $data)
		{
			$userId = $_SESSION['userId'];

			$db = $this->dbConnect();
			$saveBilanPhvToClientFolder = $db -> prepare('INSERT INTO phvDocuments(phvName, data, phvFor, byPraticien, shareWithClient) VALUES(?, ?, ?, ?, ?)');	
			$saveBilanPhvToClientFolder -> execute(array($phvName, $data, $phvFor, $byPraticien, $shareWithClient));
			return $saveBilanPhvToClientFolder;
		}


		public function getContentPageDesign($userId)
		{
			$db = $this->dbConnect();
			$getContentPageDesign = $db -> prepare('SELECT * FROM contentPageDesign WHERE praticienId = ?');	
			$getContentPageDesign -> execute(array($userId));
			return $getContentPageDesign;
		}

		public function savethisClientTestDNS($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF)
		{
			$db = $this->dbConnect();
			$savethisClientTestDNS = $db -> prepare('INSERT INTO dnsResults (praticienId, clientId, testName, shareWithClient, dnsTest) VALUES(?, ?, ?, ?, ?)');	
			$savethisClientTestDNS -> execute(array($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF));
			return $savethisClientTestDNS;
		}

		public function savethisClientTestDNSWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF)
		{
			$db = $this->dbConnect();
			$savethisClientTestDNSWithoutSharing = $db -> prepare('INSERT INTO dnsResults (praticienId, clientId, testName, shareWithClient, dnsTest) VALUES(?, ?, ?, ?, ?)');	
			$savethisClientTestDNSWithoutSharing -> execute(array($userId, $clientId, $documentName, $shareWithClient, $testDnsAsPDF));
			return $savethisClientTestDNSWithoutSharing;
		}

		public function getClientDetailsForGDSNotificationMail($clientId)
		{
			$db = $this->dbConnect();
			$getClientDetailsForGDSNotificationMail = $db -> prepare('SELECT * FROM user_client WHERE id = ?');	
			$getClientDetailsForGDSNotificationMail -> execute(array($clientId));
			return $getClientDetailsForGDSNotificationMail;
		}

		public function saveBilanGDSToClientProfil($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF)
		{
			$db = $this->dbConnect();
			$saveBilanGDSToClientProfil = $db -> prepare('INSERT INTO gdsResults (praticienId, clientId, testName, shareWithClient, gdsTest) VALUES(?, ?, ?, ?, ?)');	
			$saveBilanGDSToClientProfil -> execute(array($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF));
			return $saveBilanGDSToClientProfil;
		}

		public function getClientDetailsForGDSENotificationMail($clientId)
		{
			$db = $this->dbConnect();
			$getClientDetailsForGDSENotificationMail = $db -> prepare('SELECT * FROM user_client WHERE id = ?');	
			$getClientDetailsForGDSENotificationMail -> execute(array($clientId));
			return $getClientDetailsForGDSENotificationMail;
		}

		public function saveBilanGDSEToClientProfil($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF)
		{
			$db = $this->dbConnect();
			$saveBilanGDSEToClientProfil = $db -> prepare('INSERT INTO gdseResults (praticienId, clientId, testName, shareWithClient, gdseTest) VALUES(?, ?, ?, ?, ?)');	
			$saveBilanGDSEToClientProfil -> execute(array($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF));
			return $saveBilanGDSEToClientProfil;
		}

		public function saveBilanGDSToClientProfilWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF)
		{
			$db = $this->dbConnect();
			$saveBilanGDSToClientProfilWithoutSharing = $db -> prepare('INSERT INTO gdsResults (praticienId, clientId, testName, shareWithClient, gdsTest) VALUES(?, ?, ?, ?, ?)');	
			$saveBilanGDSToClientProfilWithoutSharing -> execute(array($userId, $clientId, $documentName, $shareWithClient, $testGdsAsPDF));
			return $saveBilanGDSToClientProfilWithoutSharing;
		}

		public function saveBilanGDSEToClientProfilWithoutSharing($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF)
		{
			$db = $this->dbConnect();
			$saveBilanGDSEToClientProfilWithoutSharing = $db -> prepare('INSERT INTO gdseResults (praticienId, clientId, testName, shareWithClient, gdseTest) VALUES(?, ?, ?, ?, ?)');	
			$saveBilanGDSEToClientProfilWithoutSharing -> execute(array($userId, $clientId, $documentName, $shareWithClient, $testGdseAsPDF));
			return $saveBilanGDSEToClientProfilWithoutSharing;
		}

		public function naturoProgramContent($userId)
		{
			$db = $this->dbConnect();
			$naturoProgramContent = $db -> prepare('SELECT * FROM mynaturoprogramcontent WHERE praticienId = ?');	
			$naturoProgramContent -> execute(array($userId));
			return $naturoProgramContent;
		}

		public function confirmThisNaturoProgramContent($myAlimentationContent, $myComplementationContent, $myAromatherapieContent, $myPhythotherapieContent, $myFleursDeBachContent, $myStressContent, $myHygieneContent, $myDiversContent, $userId)
		{
			$db = $this->dbConnect();
			$confirmThisNaturoProgramContent = $db -> prepare('UPDATE mynaturoprogramcontent SET myAlimentationContent = ?, myComplementationContent = ?, myAromatherapieContent = ?, myPhythotherapieContent = ?, myFleursDeBachContent = ?, myStressContent = ?, myHygieneContent = ?, myDiversContent = ? WHERE praticienId = ?');	
			$confirmThisNaturoProgramContent -> execute(array($myAlimentationContent, $myComplementationContent, $myAromatherapieContent, $myPhythotherapieContent, $myFleursDeBachContent, $myStressContent, $myHygieneContent, $myDiversContent, $userId));
			return $confirmThisNaturoProgramContent;
		}

		public function naturoContentPageDesigns($topBorderColor, $bottomBorderColor, $offeredPhoto, $userId)
		{
			$db = $this->dbConnect();
			$naturoContentPageDesigns = $db -> prepare('UPDATE contentPageDesign SET topBorderColor = ?, bottomBorderColor = ?,	backgroundImage = ? WHERE praticienId = ?');	
			$naturoContentPageDesigns -> execute(array($topBorderColor, $bottomBorderColor, $offeredPhoto, $userId));
			return $naturoContentPageDesigns;
		}

		public function defaultBackgroundChoice($userId, $image, $imageType, $imageSource, $cryptedImage)
		{
			$db = $this->dbConnect();
			$defaultBackgroundChoice = $db -> prepare('UPDATE contentPageDesign SET backgroundImage = ?, imageType = ?, ourOffers = ? WHERE praticienId = ?');	
			$defaultBackgroundChoice -> execute(array($cryptedImage, $imageType, $imageSource, $userId));
			return $defaultBackgroundChoice;
		}

		public function backgroundChoices($userId, $image, $imageType, $cryptedImage, $imageSource)
		{
			$db = $this->dbConnect();
			$backgroundChoices = $db -> prepare('UPDATE contentPageDesign SET backgroundImage = ?, ourOffers = ? WHERE praticienId = ?');	
			$backgroundChoices -> execute(array($cryptedImage, $imageSource, $userId));
			return $backgroundChoices;
		}

		public function kalyaToken()
		{
			$tokenId = 1;
			$db = $this->dbConnect();
			$kalyaToken = $db -> prepare('SELECT * FROM kalyaSearch WHERE id = ?');	
			$kalyaToken -> execute(array($tokenId));
			return $kalyaToken;
		}

		public function updateAccount($userId, $firstname, $lastname, $username, $email, $dob, $password, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienEducationQualification, $praticienCabinetPhoneNumber)
		{
			$db = $this->dbConnect();
			$updateAccount = $db -> prepare('UPDATE user_praticien SET email = ?, firstname = ?, lastname = ?, password = ?, dob = ?, username = ?, praticienRoadNumber = ?, praticienRoadName = ?, praticienComplementAddress = ?, praticienCityName = ?, praticienCodePostal = ?, praticienCountry = ?, praticienEducationQualification = ?, praticienCabinetPhoneNumber = ? WHERE id = ?');
			$updateAccount -> execute(array($email, $firstname, $lastname, $password, $dob, $username, $praticienRoadNumber, $praticienRoadName, $praticienComplementAddress, $praticienCityName, $praticienCodePostal, $praticienCountry, $praticienEducationQualification, $praticienCabinetPhoneNumber, $userId));
			return $updateAccount;
		}

		public function logout()
		{
			session_start();
			$_SESSION['sessionStatus'] = "offline" ;
			$_SESSION['userId'] = null;
			$_SESSION['userName'] = null;
			$_SESSION['userPassword'] = null;
			$_SESSION['userSexe'] = null;
			$_SESSION['firstName'] = null;
			$_SESSION['lastName'] = null;
			$_SESSION['userEmail'] = null;
			$_SESSION['userDob'] = null;
			$_SESSION['userStatus'] = null;

			$_SESSION['praticienRoadNumber'] = null;
			$_SESSION['praticienRoadName'] = null;
			$_SESSION['praticienComplementAddress'] = null;
			$_SESSION['praticienCityName'] = null;
			$_SESSION['praticienCodePostal'] = null;
			$_SESSION['praticienCountry'] = null;
			$_SESSION['praticienEducationQualification'] = null;
			$_SESSION['praticienCabinetPhoneNumber'] = null;
			$_SESSION['verificationStatus'] = null;
			
			session_unset();
			session_destroy();
			header("location: view/home/home.php");
		}

		public function goBack()
		{
			header("location: view/index.php");

		}

		public function sendThisMail($sendFrom, $sendTo, $mailSubject, $message, $mailStatus)
		{

			$db = $this -> dbConnect();
			$sendThisMail = $db -> prepare('INSERT INTO mails(senderMail, receiverMail, mailTitle, mailContent, mailStatus) VALUES(?, ?, ?, ?, ?)');
			$sendThisMail -> execute(array($sendFrom, $sendTo, $mailSubject, $message, $mailStatus));
			return $sendThisMail;
		}

		public function deleteThisSelectedMail($id)
		{
			$db = $this -> dbConnect();
			$deleteThisSelectedMail = $db -> prepare('DELETE FROM mails WHERE id = ?');
			$deleteThisSelectedMail -> execute(array($id));
			return $deleteThisSelectedMail;
		}

		public function precreateThisClientAccount($clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity, $verificationKey)
		{
			$db = $this -> dbConnect();
			$precreateThisClientAccount = $db -> prepare('INSERT INTO user_client(sexe, firstname, lastname, dob, email, phoneNumber, roadNumber, roadName, complementAddress, postalCode, city, verificationKey) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
			$precreateThisClientAccount -> execute(array($clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity, $verificationKey));
			return $precreateThisClientAccount;
		}

		public function getClientIdThroughVerificationKey($verificationKey)
		{
			$db = $this -> dbConnect();
			$getClientIdThroughVerificationKey = $db -> prepare('SELECT * FROM user_client WHERE verificationKey = ?');
			$getClientIdThroughVerificationKey -> execute(array($verificationKey));
			return $getClientIdThroughVerificationKey;
		}

		public function linkMeWithThisClient($catchedId, $praticienId)
		{
			$db = $this -> dbConnect();
			$linkMeWithThisClient = $db -> prepare('INSERT INTO myconnections(clientId, praticienId) VALUES(?, ?)');
			$linkMeWithThisClient -> execute(array($catchedId, $praticienId));
			return $linkMeWithThisClient;
		}

		public function resendTheClientVerificationCode($clientId)
		{
			$db = $this -> dbConnect();
			$resendTheClientVerificationCode = $db -> prepare('SELECT * FROM user_client WHERE id = ?');
			$resendTheClientVerificationCode -> execute(array($clientId));
			return $resendTheClientVerificationCode;
		}

		public function viewThisClientDocuments($userId, $myClientId)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments = $db -> prepare('SELECT * FROM documents WHERE documentFor = ? AND myClientId = ?');
			$viewThisClientDocuments -> execute(array($userId, $myClientId));
			return $viewThisClientDocuments;
		}

		public function viewThisClientDocuments2($userId, $myClientId)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments2 = $db -> prepare('SELECT * FROM naturosheet WHERE bilanFor = ? AND byPraticien = ?');
			$viewThisClientDocuments2 -> execute(array($myClientId, $userId));
			return $viewThisClientDocuments2;	
		}

		public function viewThisClientDocuments3($userId, $myClientId)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments3 = $db -> prepare('SELECT * FROM dnsResults WHERE praticienId = ? AND clientId = ?');
			$viewThisClientDocuments3 -> execute(array($userId, $myClientId));
			return $viewThisClientDocuments3;
		}

		public function viewThisClientDocuments4($userId, $myClientId)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments4 = $db -> prepare('SELECT * FROM fleurssheet WHERE bilanFor = ? AND byPraticien = ?');
			$viewThisClientDocuments4 -> execute(array($myClientId, $userId));
			return $viewThisClientDocuments4;
		}

		public function viewThisClientDocuments5($userId, $myClientId)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments5 = $db -> prepare('SELECT * FROM gdsResults WHERE praticienId = ? AND clientId = ?');
			$viewThisClientDocuments5 -> execute(array($userId, $myClientId));
			return $viewThisClientDocuments5;
		}

		public function viewThisClientDocuments6($userId, $myClientId)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments6 = $db -> prepare('SELECT * FROM gdseResults WHERE praticienId = ? AND clientId = ?');
			$viewThisClientDocuments6 -> execute(array($userId, $myClientId));
			return $viewThisClientDocuments6;
		}

		public function viewThisClientDocuments7($userId, $myClientId)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments7 = $db -> prepare('SELECT * FROM phvDocuments WHERE byPraticien = ? AND phvFor = ?');
			$viewThisClientDocuments7 -> execute(array($userId, $myClientId));
			return $viewThisClientDocuments7;
		}

		public function viewThisClientDocuments8($userId, $myClientId)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments8 = $db -> prepare('SELECT * FROM bilanNaturoTwoForThisClientBlocSelection WHERE praticienId = ? AND clientId = ?');
			$viewThisClientDocuments8 -> execute(array($userId, $myClientId));
			return $viewThisClientDocuments8;
		}

		public function viewThisClientDocuments9($userId, $myClientId)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments9 = $db -> prepare('SELECT * FROM bilanNaturoTwoQuestionSheetAnswer WHERE questionBlocId = ?');
			$viewThisClientDocuments9 -> execute(array($questionSheetId));
			return $viewThisClientDocuments9;
		}

		public function getClientDetailsForSendingMail($myClientId)
		{
			$db = $this -> dbConnect();
			$getClientDetailsForSendingMail = $db -> prepare('SELECT * FROM user_client WHERE id = ?');

			$getClientDetailsForSendingMail -> execute(array($myClientId));
			return $getClientDetailsForSendingMail;
		}

		public function addThisFileForMyClient($userId, $myClientId, $move_to, $myFile)
		{
			$db = $this -> dbConnect();
			$viewThisClientDocuments = $db -> prepare('INSERT INTO documents(documentName, myClientId, paths, documentFor) VALUES(?, ?, ?, ?)');
			$viewThisClientDocuments -> execute(array($myFile, $myClientId, $move_to.$myFile, $userId));
			return $viewThisClientDocuments;
		}

		public function deleteThisDocumentFromMyClientFolder($fileDatabaseId)
		{
			$db = $this -> dbConnect();
			$deleteThisDocumentFromMyClientFolder = $db -> prepare('DELETE FROM documents WHERE id = ?');
			$deleteThisDocumentFromMyClientFolder -> execute(array($fileDatabaseId));
			return $deleteThisDocumentFromMyClientFolder;	
		}

		public function deleteThisBilanFromMyClientFolder($bilanId)
		{
			$db = $this -> dbConnect();
			$deleteThisBilanFromMyClientFolder = $db -> prepare('DELETE FROM naturosheet WHERE id = ?');
			$deleteThisBilanFromMyClientFolder -> execute(array($bilanId));
			return $deleteThisBilanFromMyClientFolder;
		}

		public function deleteThisTestDnsFromMyClientFolder($documentId)
		{
			$db = $this -> dbConnect();
			$deleteThisTestDnsFromMyClientFolder = $db -> prepare('DELETE FROM dnsResults WHERE id = ?');
			$deleteThisTestDnsFromMyClientFolder -> execute(array($documentId));
			return $deleteThisTestDnsFromMyClientFolder;
		}

		public function deleteThisTestGdsFromMyClientFolder($documentId)
		{
			$db = $this -> dbConnect();
			$deleteThisTestGdsFromMyClientFolder = $db -> prepare('DELETE FROM gdsResults WHERE id = ?');
			$deleteThisTestGdsFromMyClientFolder -> execute(array($documentId));
			return $deleteThisTestGdsFromMyClientFolder;
		}

		public function deleteThisTestGdseFromMyClientFolder($documentId)
		{
			$db = $this -> dbConnect();
			$deleteThisTestGdseFromMyClientFolder = $db -> prepare('DELETE FROM gdseResults WHERE id = ?');
			$deleteThisTestGdseFromMyClientFolder -> execute(array($documentId));
			return $deleteThisTestGdseFromMyClientFolder;
		}

		public function deleteThisFleursBilanFromMyClientFolder($bilanId)
		{
			$db = $this -> dbConnect();
			$deleteThisFleursBilanFromMyClientFolder = $db -> prepare('DELETE FROM fleurssheet WHERE id = ?');
			$deleteThisFleursBilanFromMyClientFolder -> execute(array($bilanId));
			return $deleteThisFleursBilanFromMyClientFolder;
		}

		public function deleteThisPhvDocumentFromMyClientFolder($documentId)
		{
			$db = $this -> dbConnect();
			$deleteThisPhvDocumentFromMyClientFolder = $db -> prepare('DELETE FROM phvDocuments WHERE id = ?');
			$deleteThisPhvDocumentFromMyClientFolder -> execute(array($documentId));
			return $deleteThisPhvDocumentFromMyClientFolder;
		}

		public function documents($userId)
		{
			$db = $this -> dbConnect();
			$getMyClientData = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientFor = ?');
			$getMyClientData -> execute(array($userId));
			return $getMyClientData;
		}

		public function getMyClientWithAccountData($userId)
		{
			$db = $this -> dbConnect();
			$getMyClientWithAccountData = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientFor = ?');
			$getMyClientWithAccountData -> execute(array($userId));
			return $getMyClientWithAccountData;
		}

		public function getNaturoDocuments($userId)
		{
			$db = $this -> dbConnect();
			$getNaturoDocuments = $db -> prepare('SELECT * FROM naturosheet WHERE byPraticien = ?');
			$getNaturoDocuments -> execute(array($userId));
			return $getNaturoDocuments;
		}

		public function getClientInformationsForNaturoSheetDocuments($clientId)
		{
			$db = $this -> dbConnect();
			$getClientInformationsForNaturoSheetDocuments = $db -> prepare('SELECT * FROM user_client WHERE id = ?');
			$getClientInformationsForNaturoSheetDocuments -> execute(array($clientId));
			return $getClientInformationsForNaturoSheetDocuments;
		}

		public function getClientInformationsForNaturoSheetDocuments2($clientId)
		{
			$db = $this -> dbConnect();
			$getClientInformationsForNaturoSheetDocuments2 = $db -> prepare('SELECT * FROM myPersonalRepository WHERE id = ?');
			$getClientInformationsForNaturoSheetDocuments2 -> execute(array($clientId));
			return $getClientInformationsForNaturoSheetDocuments2;
		}

		public function getClientInformationsForNaturoSheetDocuments3($clientId)
		{
			$db = $this -> dbConnect();
			$getClientInformationsForNaturoSheetDocuments3 = $db -> prepare('SELECT * FROM naturosheet WHERE bilanFor = ?');
			$getClientInformationsForNaturoSheetDocuments3 -> execute(array($clientId));
			return $getClientInformationsForNaturoSheetDocuments3;
		}	

		public function getFromAllRestDocuments($clientId)
		{
			$db = $this -> dbConnect();
			$getFromAllRestDocuments = $db -> prepare('SELECT * FROM documents WHERE documentFor = ?');
			$getFromAllRestDocuments -> execute(array($clientId));
			return $getFromAllRestDocuments;
		}	

		public function getUserInfos($clientId)
		{
			$db = $this -> dbConnect();
			$getUserInfos = $db -> prepare('SELECT * FROM user_client WHERE id = ?');
			$getUserInfos -> execute(array($clientId));
			return $getUserInfos;
		}

		public function getSharedDocuments($userId)	
		{
			$db = $this -> dbConnect();
			$getSharedDocuments = $db -> prepare('SELECT * FROM sharing WHERE shareTo = ?');
			$getSharedDocuments -> execute(array($userId));
			return $getSharedDocuments;
		}

		public function getSharedDocumentsFromThisClient($userId, $myClientId)	
		{
			$db = $this -> dbConnect();
			$getSharedDocumentsFromThisClient = $db -> prepare('SELECT * FROM sharing WHERE shareTo = ? AND shareFrom = ?');
			$getSharedDocumentsFromThisClient -> execute(array($userId, $myClientId));
			return $getSharedDocumentsFromThisClient;
		}

		public function importThisBilanTwoAnswersSubmittedByClient1($myClientId, $questionSheetId)	
		{
			$db = $this -> dbConnect();
			$importThisBilanTwoAnswersSubmittedByClient1 = $db -> prepare('SELECT * FROM bilanNaturoTwoForThisClientBlocSelection WHERE id = ?');
			$importThisBilanTwoAnswersSubmittedByClient1 -> execute(array($questionSheetId));
			return $importThisBilanTwoAnswersSubmittedByClient1;
		}

		public function importThisBilanTwoAnswersSubmittedByClient2($myClientId, $questionSheetId)	
		{
			$db = $this -> dbConnect();
			$importThisBilanTwoAnswersSubmittedByClient2 = $db -> prepare('SELECT * FROM bilanNaturoTwoQuestionSheetAnswer WHERE QuestionBlocId = ?');
			$importThisBilanTwoAnswersSubmittedByClient2 -> execute(array($questionSheetId));
			return $importThisBilanTwoAnswersSubmittedByClient2;
		}

		public function updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien($questionSheetId, $questionNumber, $questionAnswer)	
		{
			$db = $this -> dbConnect();
			$updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien = $db -> prepare('UPDATE bilanNaturoTwoQuestionSheetAnswer SET ' . $questionNumber .' = ? WHERE QuestionBlocId = ?');
			$updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien -> execute(array($questionAnswer, $questionSheetId));
			return $updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien;
		}

		public function getClientDetailsWhoShared($clientWhoSharedId)
		{
			$db = $this -> dbConnect();
			$getClientDetailsWhoShared = $db -> prepare('SELECT * FROM user_client WHERE id = ?');
			$getClientDetailsWhoShared -> execute(array($clientWhoSharedId));
			return $getClientDetailsWhoShared;	
		}

		public function getSharedDocumentsNow($documentId)
		{
			$db = $this -> dbConnect();
			$getSharedDocumentsNow = $db -> prepare('SELECT * FROM documents WHERE id = ?');
			$getSharedDocumentsNow -> execute(array($documentId));
			return $getSharedDocumentsNow;	
		}

		public function files($userId)
		{
			$db = $this -> dbConnect();
			$files = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientFor = ?');
			$files -> execute(array($userId));
			return $files;
		}

		public function files2($userId)
		{
			$db = $this -> dbConnect();
			$files2 = $db -> prepare('SELECT * FROM myconnections WHERE praticienId = ?');
			$files2 -> execute(array($userId));
			return $files2;
		}

		public function getClientDetailsByThisConnectionDetails($clientId)
		{
			$db = $this -> dbConnect();
			$files2 = $db -> prepare('SELECT * FROM user_client WHERE id = ?');
			$files2 -> execute(array($clientId));
			return $files2;
		}

		public function getThisClientDocuments($myClientId)
		{
			$db = $this -> dbConnect();
			$getThisClientDocuments = $db -> prepare('SELECT * FROM documents WHERE myClientId = ?');
			$getThisClientDocuments -> execute(array($myClientId));
			return $getThisClientDocuments;
		}

		public function getPersonalRepositoryDocuments($myRepositoryId, $myId)	
		{
			$db = $this -> dbConnect();
			$getPersonalRepositoryDocuments = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientFor = ? AND id = ?');
			$getPersonalRepositoryDocuments -> execute(array($myId, $myRepositoryId));
			return $getPersonalRepositoryDocuments;
		}

		public function getPersonalRepositoryDocuments2($myRepositoryId, $myId)
		{
			$db = $this -> dbConnect();
			$getPersonalRepositoryDocuments2 = $db -> prepare('SELECT * FROM myPersonalRepositoryDocuments WHERE myRepositoryId = ? AND documentFor = ?');
			$getPersonalRepositoryDocuments2 -> execute(array($myRepositoryId, $myId));
			return $getPersonalRepositoryDocuments2;
		}

		public function deleteThisDocumentFromMyPersonalFolder($fileDatabaseId)
		{
			$db = $this -> dbConnect();
			$deleteThisDocumentFromMyPersonalFolder = $db -> prepare('DELETE FROM myPersonalRepositoryDocuments WHERE id = ?');
			$deleteThisDocumentFromMyPersonalFolder -> execute(array($fileDatabaseId));
			return $deleteThisDocumentFromMyPersonalFolder;	
		}

		public function addThisFileForMyPersonalFolder($userId, $myFolderId, $move_to, $myFile)
		{
			$db = $this -> dbConnect();
			$addThisFileForMyPersonalFolder = $db -> prepare('INSERT INTO myPersonalRepositoryDocuments(documentName, myRepositoryId, paths, documentFor) VALUES(?, ?, ?, ?)');
			$addThisFileForMyPersonalFolder -> execute(array($myFile, $myFolderId, $move_to.$myFile, $userId));
			return $addThisFileForMyPersonalFolder;
		}

		public function addThisClient($clientFor, $clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity)
		{
			$db = $this -> dbConnect();
			$addThisClient = $db -> prepare('INSERT INTO myPersonalRepository(clientFor, clientSexe, clientFirstName, clientLastName, clientDateOfBirth, clientEmail, clientPhoneNumber, clientRoadNumber, clientRoadName, clientAddressAlternate, clientPostalCode, clientCity) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
			$addThisClient -> execute(array($clientFor, $clientSexe, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientAddressAlternate, $clientPostalCode, $clientCity));


			return $addThisClient;
		}

		public function showClientsList($clientFor)
		{
			$db = $this -> dbConnect();
			$showClientsList = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientFor = ?');
			$showClientsList -> execute(array($clientFor));
			return $showClientsList;
		}

		public function personalRepositories($clientFor)
		{
			$db = $this -> dbConnect();
			$personalRepositories = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientFor = ?');
			$personalRepositories -> execute(array($clientFor));
			return $personalRepositories;
		}

		public function connectPraticienToClient($clientFor)
		{
			$db = $this -> dbConnect();
			$connectPraticienToClient = $db -> prepare('SELECT * FROM myconnections WHERE praticienId = ?');
			$connectPraticienToClient -> execute(array($clientFor));
			return $connectPraticienToClient;
		}

		public function getThisClientDetailsForMe($clientId)
		{
			$db = $this -> dbConnect();
			$getThisClientDetailsForMe = $db -> prepare('SELECT * FROM user_client WHERE id = ?');
			$getThisClientDetailsForMe -> execute(array($clientId));
			return $getThisClientDetailsForMe;
		}

		public function showMaleClients($clientFor)
		{
			$clientSexe = base64_encode("homme");
			$db = $this -> dbConnect();
			$showMaleClients = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientSexe = ? AND clientFor = ? ');
			$showMaleClients -> execute(array($clientSexe, $clientFor));
			return $showMaleClients;
		}

		public function showMaleClientsFromConnections($clientFor)
		{
			$clientSexe = base64_encode("homme");
			$db = $this -> dbConnect();
			$showMaleClientsFromConnections = $db -> prepare('SELECT * FROM myconnections WHERE praticienId = ?');
			$showMaleClientsFromConnections -> execute(array($clientFor));
			return $showMaleClientsFromConnections;	
		}

		public function getMaleClientsFromUsersThroughConnections($clientId)
		{
			$clientSexe = "m";
			$db = $this -> dbConnect();
			$getMaleClientsFromUsersThroughConnections = $db -> prepare('SELECT * FROM user_client WHERE id = ? AND sexe = ?');
			$getMaleClientsFromUsersThroughConnections -> execute(array($clientId, $clientSexe));
			return $getMaleClientsFromUsersThroughConnections;	
		}

		public function showTeenClients($clientFor)
		{
			$clientSexe = base64_encode("adolescent");
			$db = $this -> dbConnect();
			$showTeenClients = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientSexe = ? AND clientFor = ? ');
			$showTeenClients -> execute(array($clientSexe, $clientFor));
			return $showTeenClients;
		}

		public function showTeenClientsFromConnections($clientFor)
		{
			$clientSexe = base64_encode("adolescent");
			$db = $this -> dbConnect();
			$showTeenClientsFromConnections = $db -> prepare('SELECT * FROM myconnections WHERE praticienId = ?');
			$showTeenClientsFromConnections -> execute(array($clientFor));
			return $showTeenClientsFromConnections;
		}

		public function getTeenClientsFromUsersThroughConnections($clientId)
		{
			$clientSexe = "a";
			$db = $this -> dbConnect();
			$getMaleClientsFromUsersThroughConnections = $db -> prepare('SELECT * FROM user_client WHERE id = ? AND sexe = ?');
			$getMaleClientsFromUsersThroughConnections -> execute(array($clientId, $clientSexe));
			return $getMaleClientsFromUsersThroughConnections;	
		}

		public function showFemaleClients($clientFor)
		{
			$clientSexe = base64_encode("femme");
			$db = $this -> dbConnect();
			$showFemaleClients = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientSexe = ? AND clientFor = ?');
			$showFemaleClients -> execute(array($clientSexe, $clientFor));
			return $showFemaleClients;	
		}

		public function showFemaleClientsFromConnections($clientFor)
		{
			$clientSexe = base64_encode("femme");
			$db = $this -> dbConnect();
			$showFemaleClientsFromConnections = $db -> prepare('SELECT * FROM myconnections WHERE praticienId = ?');
			$showFemaleClientsFromConnections -> execute(array($clientFor));
			return $showFemaleClientsFromConnections;	
		}

		public function getFemaleClientsFromUsersThroughConnections($clientId)
		{
			$clientSexe = "f";
			$db = $this -> dbConnect();
			$getFemaleClientsFromUsersThroughConnections = $db -> prepare('SELECT * FROM user_client WHERE id = ? AND sexe = ?');
			$getFemaleClientsFromUsersThroughConnections -> execute(array($clientId, $clientSexe));
			return $getFemaleClientsFromUsersThroughConnections;	
		}

		public function showChildClients($clientFor)
		{
			$clientSexe = base64_encode("enfant");
			$db = $this -> dbConnect();
			$showChildClients = $db -> prepare('SELECT * FROM myPersonalRepository WHERE clientSexe = ? AND clientFor = ?');
			$showChildClients -> execute(array($clientSexe, $clientFor));
			return $showChildClients;	
		}

		public function showChildClientsFromConnections($clientFor)
		{
			$clientSexe = "c";
			$db = $this -> dbConnect();
			$showChildClientsFromConnections = $db -> prepare('SELECT * FROM myconnections WHERE praticienId = ?');
			$showChildClientsFromConnections -> execute(array($clientFor));
			return $showChildClientsFromConnections;	
		}

		public function getChildClientsFromUsersThroughConnections($clientId)
		{
			$clientSexe = "c";
			$db = $this -> dbConnect();
			$getChildClientsFromUsersThroughConnections = $db -> prepare('SELECT * FROM user_client WHERE id = ? AND sexe = ?');
			$getChildClientsFromUsersThroughConnections -> execute(array($clientId, $clientSexe));
			return $getChildClientsFromUsersThroughConnections;	
		}

		public function getClientDetails($id)
		{
			$db = $this -> dbConnect();
			$getClientsDetails = $db -> prepare('SELECT * FROM myPersonalRepository WHERE id = ?');
			$getClientsDetails -> execute(array($id));
			return $getClientsDetails;
		}

		public function getClientDetailsFromUserLists($id)
		{
			$db = $this -> dbConnect();
			$getClientDetailsFromUserLists = $db -> prepare('SELECT * FROM user_client WHERE id = ?');
			$getClientDetailsFromUserLists -> execute(array($id));
			return $getClientDetailsFromUserLists;
		}
		

		public function modifyClientDetails($id)
		{
			$db = $this -> dbConnect();
			$modifyClientDetails = $db -> prepare('SELECT * FROM myPersonalRepository WHERE id = ?');
			$modifyClientDetails -> execute(array($id));
			return $modifyClientDetails;
		}

		public function getClientBasicInformationForBilanNaturo($bilanFor)
		{
			$db = $this -> dbConnect();
			$getClientBasicInformationForBilanNaturo = $db -> prepare('SELECT * FROM user_client WHERE id = ?');
			$getClientBasicInformationForBilanNaturo -> execute(array($bilanFor));
			return $getClientBasicInformationForBilanNaturo;
		}

		public function bilanNaturoForThisPatientSaveTo($bilanFor)
		{
			$db = $this -> dbConnect();
			$bilanNaturoForThisPatientSaveTo = $db -> prepare('INSERT INTO naturoSheet');
			$bilanNaturoForThisPatientSaveTo -> execute(array());
			return $bilanNaturoForThisPatientSaveTo;
		}

		public function modifyClientDetailsAsThis($id, $clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientPostalCode, $clientCity)
		{
			$db = $this -> dbConnect();
			$modifyClientDetailsAsThis = $db -> prepare('UPDATE myPersonalRepository SET clientFirstName = ?, clientLastName = ?, clientDateOfBirth = ?, clientEmail = ?, clientPhoneNumber = ?, clientRoadNumber = ?, clientRoadName = ?, clientPostalCode = ?, clientCity = ?  WHERE id = ?');
			$modifyClientDetailsAsThis -> execute(array($clientFirstName, $clientLastName, $clientDateOfBirth, $clientEmail, $clientPhoneNumber, $clientRoadNumber, $clientRoadName, $clientPostalCode, $clientCity, $id));
			return $modifyClientDetailsAsThis;
		}

		public function deleteThisClientFolder($id)
		{
			$db = $this -> dbConnect();
			$deleteThisClientFolder = $db -> prepare('DELETE FROM myPersonalRepository WHERE id = ?');
			$deleteThisClientFolder -> execute(array($id));
			return $deleteThisClientFolder;
		}

		public function deleteThisLinkFromMyConnections($id, $userId)
		{
			$db = $this -> dbConnect();
			$deleteThisClientFolder = $db -> prepare('DELETE FROM myconnections WHERE clientId = ? AND praticienId = ?');
			$deleteThisClientFolder -> execute(array($id, $userId));
			return $deleteThisClientFolder;
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
			return $dropDescriptionTables;
		}

		public function getNotifications()
		{
			if (session_status() === PHP_SESSION_NONE) 
			{
				session_start();
			}

			$db = $this->dbConnect();
			$getNotifications = $db -> prepare('SELECT * FROM notifications WHERE praticienId = ? AND notificationFor = ? AND readStatus = ? ORDER BY updatedOn DESC LIMIT 5');
			$getNotifications ->execute(array($_SESSION['userId'], "praticien", 0));
			return $getNotifications;
		}
		


		public function scheduler()
		{
			$task = 1;
			$db = $this->dbConnect();
			$scheduler = $db -> prepare('INSERT INTO scheduler(task) VALUES(?) ');
			$scheduler ->execute(array($task));
			return $scheduler;
		}

		public function deleteThisNotification($id)
		{
			$db = $this->dbConnect();
			$deleteThisNotificationForUser = $db -> prepare('DELETE FROM notifications WHERE id = ? ');
			$deleteThisNotificationForUser ->execute(array($id));
			return $deleteThisNotificationForUser;
		}

		public function updatePraticienJustificatifs($praticienId, $fileName, $cryptedImage)
		{
			$db = $this->dbConnect();
			$updatePraticienJustificatifs = $db -> prepare('INSERT INTO otherCabinetJustifications(praticienId, documentName, documentData) VALUES(?, ?, ?) ');
			$updatePraticienJustificatifs ->execute(array($praticienId, $fileName, $cryptedImage));
			return $updatePraticienJustificatifs;
		}
















		public function test($username, $password)
		{
			$db = $this->dbConnect();
			$check = $db -> prepare('INSERT INTO user_praticien(username, password) VALUES(?, ?) ');
			$check ->execute(array($username, $password));
			return $check;
		}

		public function emailCheck($email)
		{
			$db = $this->dbConnect();
			$check = $db -> prepare('SELECT email FROM user_praticien WHERE email = ?');
			$check ->execute(array($email));
			return $check;
		}
		


	}
?>