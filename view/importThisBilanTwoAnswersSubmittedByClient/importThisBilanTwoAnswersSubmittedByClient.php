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
			<link rel="stylesheet" type="text/css" href="view/importThisBilanTwoAnswersSubmittedByClient/style.css?version=1.0">
			<link rel="stylesheet" type="text/css" href="lib/css/styleMenubar.css">
			<link rel="icon" type="image/png" href="view/importThisBilanTwoAnswersSubmittedByClient/images/logo.png" />
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<!--<script src="https://cdn.tiny.cloud/1/wilusi6irx9wo5pjtz8vs3s76o223iueetyp8xxbrwwlr0z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			
			<!------- LOADING SCREEN SCRIPT------- -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
			<script type="text/javascript" src="view/importThisBilanTwoAnswersSubmittedByClient/main2.js"></script>
			<!------- END LOADING SCREEN ------- -->
			<title>ADNR Consults - Résultat du test Bilan Naturo 2</title>
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->			
			<?php
				include_once('lib/topMenu2.php');
				include_once('lib/sideMenu2.php');
			?>

			<script>
			    function enableBox(answerNumber)
			    {
			      document.getElementById("otheranswer"+answerNumber).disabled = false;
			    }
			    
			    function changeradioother(answerNumber) 
			    {
			      var other = document.getElementById("other"+answerNumber);
			      
			      other.value = document.getElementById("otheranswer"+answerNumber).value;	      
			    }
			</script>

			<div id="mainAppearence">


				<div id="fifthBloc">
					
					<center id="clientListTitle">
						<h2>Questionnaires Praticiens <br> Bilan Détaillés</h2>
					</center>
				</div>

				<form method="POST" action="index.php?action=updateThisQuestionSheetAnswerToDatabaseSubmitByPraticien&questionSheetId=<?= $questionSheetId ?>">
				<div id="questionSheetBloc">	

					<center>
						<div id="bloc1">
							<h2>A PROPOS DU CLIENT</h2>
							<?php
								if ($bloc1 == 1) 
								{
							?>
									<label for="box1">1. Antécédents</label>
									<div id="blocOneContentShape">
										
										<div id="question">
											<h3>Prenez-vous un/des traitement(s) médicamenteux?</h3>
										</div>
										<div id="answer">
											<label for="answer1">oui | non</label><br>
											<input type="text" name="answer1" value="<?= $answer1 ?>" >
										</div>

										<div id="question">
											<h3>Si oui, lesquels ? </h3>
										</div>
										<div id="answer">
											<label for="answer2">anxiolytiques | antidépresseurs | antalgique | anti-inflammatoire | somnifères | laxatifs | autre</label><br>
											<input type="text" name="answer2" value="<?= $answer2 ?>" >	
										</div>

										<div id="question">
											<h3>Depuis combien de temps?</h3>
										</div>
										<div id="answer">
											<input type="text" name="answer3" value="<?= $answer3 ?>">	
										</div>

										<div id="question">
											<h3>Prenez-vous des compléments alimentaires ?</h3>
										</div>
										<div id="answer">
											<label for="answer4">Oui | Non</label>
											<br>
											<input type="text" name="answer4" value="<?= $answer4 ?>" >	
										</div>

										<div id="question">
											<h3>Si oui, lesquels ? </h3>
										</div>
										<div id="answer">
											<label for="answer5">vitamines | probiotiques | magnésium | autre</label>
											<br>
											<input type="text" name="answer5" value="<?= $answer5 ?>" >
										</div>

										<div id="question">
											<h3>Depuis combien de temps?</h3>
										</div>
										<div id="answer6">
											<br>
											<input type="text" name="answer6" value="<?= $answer6 ?>" >
										</div>

										<div id="question">
											<h3>Etes-vous suivi par un médecin généraliste?</h3>
										</div>
										<div id="answer">
											<label for="answer7">Oui | Non</label>
											<br>
											<input type="text" name="answer7" value="<?= $answer7 ?>" >	
										</div>

										<div id="question">
											<h3>Quel est son nom?</h3>
										</div>
										<div id="answer8">
											<br>
											<input type="text" name="answer8" value="<?= $answer8 ?>" >	
										</div>

										<div id="question">
											<h3>Combien de fois par an le consultez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer9">moins d’une fois/an | plusieurs fois par an | 1 fois par trimestre | 1 fois par mois</label>
											<br>
											<input type="text" name="answer9" value="<?= $answer9 ?>" >	
										</div>

										<div id="question">
											<h3>Avez-vous fait un bilan sanguin dernièrement ?</h3>
										</div>
										<div id="answer">
											<label for="answer10">Oui | Non</label>
											<br>
											<input type="text" name="answer10" value="<?= $answer10 ?>" >	
										</div>

										<div id="question">
											<h3>Quels ont été les résultats?</h3>
										</div>
										<div id="answer">
											<label for="answer11">Rien à signaler | cholestérol | diabète | carence en fer | autre</label>
											<br>
											<input type="text" name="answer11" value="<?= $answer11 ?>">
										</div>

										<div id="question">
											<h3>Vos vaccinations sont-elles à jour ? </h3>
										</div>
										<div id="answer">
											<label for="answer12">Oui | Non</label>
											<br>
											<input type="text" name="answer12" value="<?= $answer12 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous été souvent sous antibiothérapie ?</h3>
										</div>
										<div id="answer">
											<label for="answer13">Oui | Non</label>
											<br>
											<input type="text" name="answer13" value="<?= $answer13 ?>" >	
										</div>

										<div id="question">
											<h3>Avez-vous pris des antibiotiques sur du long terme (plus de 3 semaines consécutives) ?</h3>
										</div>
										<div id="answer">
											<label for="answer14">Oui | Non</label>
											<br>
											<input type="text" name="answer14" value="<?= $answer14 ?>" >	
										</div>

										<div id="question">
											<h3>Avez-vous réalisé des examens de santé durant les 6 derniers mois ?</h3>
										</div>
										<div id="answer">
											<label for="answer15">Oui | Non</label>
											<br>
											<input type="text" name="answer15" value="<?= $answer15 ?>" >	
										</div>

										<div id="question">
											<h3>Pour quelles raisons? </h3>
										</div>
										<div id="answer">
											<label for="answer16">Précisez</label>
											<br>
											<input type="text" name="answer16" value="<?= $answer16 ?>" >
										</div>

										<div id="question">
											<h3>Etes-vous suivi par un/des spécialiste(s) ?</h3>
										</div>
										<div id="answer">
											<label for="answer17">Oui | Non</label>
											<br>
											<input type="text" name="answer17" value="<?= $answer17 ?>" >	
										</div>

										<div id="question">
											<h3>Si oui, par quels spécialistes ?</h3>
										</div>
										<div id="answer">
											<label for="answer18">ostéopathe | kinésiologue | gastro-entérologue | cendocrinologue | kinésithérapeute | cardiologue | psychologue | psychiatre | autre</label>
											<br>
											<input type="text" name="answer18" value="<?= $answer18 ?>" >
										</div>


										<div id="question">
											<h3>Quel est son nom ?</h3>
										</div>
										<div id="answer">
											<label for="answer19">Précisez</label>
											<br>
											<input type="text" name="answer19" value="<?= $answer19 ?>" >
										</div>

										<div id="question">
											<h3>Souffrez-vous d’une pathologie spécifique ?</h3>
										</div>
										<div id="answer">
											<label for="answer20">Oui | Non</label>
											<br>
											<input type="text" name="answer20" value="<?= $answer20 ?>" >	
										</div>

										<div id="question">
											<h3>Si oui laquelle/lesquelles ?</h3>
										</div>
										<div id="answer">
											<label for="answer21">Précisez</label>
											<br>
											<input type="text" name="answer21" value="<?= $answer21 ?>" >
										</div>

										<div id="question">
											<h3>Avez-vous des allergies ?</h3>
										</div>
										<div id="answer">
											<label for="answer22">Oui | Non</label>
											<br>
											<input type="text" name="answer22" value="<?= $answer22 ?>" >	
										</div> 

										<div id="question">
											<h3>Si oui, quelle(s) type(s) d’allergies?</h3>
										</div>
										<div id="answer">
											<label for="answer23">Alimentaires | graminées | poils | acariens | médicaments | autre</label>
											<br>
											<input type="text" name="answer23" value="<?= $answer23 ?>">
										</div>

										<div id="question">
											<h3>Avez-vous déjà fait des séances de désensibilisation ?</h3>
										</div>
										<div id="answer">
											<label for="answer24">Oui | Non</label>
											<br>
											<input type="text" name="answer24" value="<?= $answer24 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer25">Précisez</label>
											<br>
											<input type="text" name="answer25" value="<?= $answer25 ?>">
										</div>


										<div id="question">
											<h3>Avez-vous subi des interventions chirurgicales sur les 6 derniers mois ?</h3>
										</div>
										<div id="answer">
											<label for="answer26">Oui | Non</label>
											<br>
											<input type="text" name="answer26" value="<?= $answer26 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, précisez</h3>
										</div>
										<div id="answer">
											<label for="answer27">Précisez</label>
											<br>
											<input type="text" name="answer27" value="<?= $answer27 ?>">
										</div>

										<div id="question">
											<h3>Avez-vous déjà eu un accident de la route ?</h3>
										</div>
										<div id="answer">
											<label for="answer28">Oui | Non</label>
											<br>
											<input type="text" name="answer28" value=" <?= $answer28 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous déjà eu un accident de travail ?</h3>
										</div>
										<div id="answer">
											<label for="answer29">Oui | Non</label>
											<br>
											<input type="text" name="answer29" value="<?= $answer29 ?>">	
										</div>		


										<div id="question">
											<h3>Avez-vous vécu un évènement marquant ?</h3>
										</div>
										<div id="answer">
											<label for="answer30">Oui | Non</label>
											<br>
											<input type="text" name="answer30" value="<?= $answer30 ?>">	
										</div>

										<div id="question">
											<h3>Quels sont vos antécédents familiaux ?</h3>
										</div>
										<div id="answer">
											<label for="answer31">Cancer | diabète | cholestérol | hypertension | autre</label>
											<br>
											<input type="text" name="answer31" value="<?= $answer31 ?>">
										</div>

										<div id="question">
											<h3>Origine des antécédents ?</h3>
										</div>
										<div id="answer">
											<label for="answer32">Côté maternel | côté paternel</label>
											<br>
											<input type="text" name="answer32" value="<?= $answer32 ?>">	
										</div>
								<?php
									}
									
									if ($bloc2 == 1) 
									{
								?>

										<label for="box2">2. Lieu de vie, loisirs</label>

										<div id="question">
											<h3>Vous vivez :</h3>
										</div>
										<div id="answer">
											<label for="answer33">En ville | A la campagne | en bord de mer | A la montagne</label>
											<br>
											<input type="text" name="answer33" value=" <?= $answer33 ?>">
										</div>



										<div id="question">
											<h3>Vous êtes :</h3>
										</div>
										<div id="answer">
											<label for="answer34">En couple | Divorcé | Veuf(ve) </label>
											<br>
											<input type="text" name="answer34" value="<?= $answer34 ?>">	
										</div>


										<div id="question">
											<h3>Avez-vous des enfants ?</h3>
										</div>
										<div id="answer">
											<label for="answer35">Oui | Non</label>
											<br>
											<input type="text" name="answer35" value="<?= $answer35 ?>">	
										</div>


										<div id="question">
											<h3>Si oui, combien ?</h3>
										</div>
										<div id="answer">
											<label for="answer36">Précisez</label>
											<br>
											<input type="text" name="answer36" value="<?= $answer36 ?>">
										</div>

										<div id="question">
											<h3>Quels âges ont-ils ?</h3>
										</div>
										<div id="answer">
											<label for="answer37">Précisez</label>
											<br>
											<input type="text" name="answer37" value="<?= $answer37 ?>">
										</div>

										<div id="question">
											<h3>Avez-vous des animaux de compagnie ?</h3>
										</div>
										<div id="answer">
											<label for="answer38">Oui | Non</label>
											<br>
											<input type="text" name="answer38" value="<?= $answer38 ?>">	
										</div>

										<div id="question">
											<h3>Aimez-vous votre environnement de vie ?</h3>
										</div>
										<div id="answer">
											<label for="answer39">Oui | Non</label>
											<br>
											<input type="text" name="answer39" value="<?= $answer39 ?>">	
										</div>


										<div id="question">
											<h3>Rencontrez-vous un stress ou une pression dans votre environnement familial ?</h3>
										</div>
										<div id="answer">
											<label for="answer40">Oui | Non</label>
											<br>
											<input type="text" name="answer40" value="<?= $answer40 ?>">	
										</div>
										
										<div id="question">
											<h3>Décrivez une journée</h3>
										</div>
										<div id="answer">
											<label for="answer41">Décrivez</label>
											<br>
											<input type="text" name="answer41" value="<?= $answer41 ?>">
										</div>	


										<div id="question">
											<h3>Pensez-vous à aérer vos pièces de vie quotidiennement ?</h3>
										</div>
										<div id="answer">
											<label for="answer42">Oui | Non</label>
										<br>
										<input type="text" name="answer42" value="<?= $answer42 ?>">	
										</div>


										<div id="question">
											<h3>Utilisez-vous dans votre quotidien des produits naturels et/ou bio ?</h3>
										</div>
										<div id="answer">
											<label for="answer43">Oui | Non</label>
											<br>
											<input type="text" name="answer43" value="<?= $answer43 ?>">	
										</div>

										<div id="question">
											<h3>Prenez-vous du temps pour vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer44">Oui | Non</label>
											<br>
											<input type="text" name="answer44" value="<?= $answer44 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous des loisirs ?</h3>
										</div>
										<div id="answer">
											<label for="answer45">Oui | Non</label>
											<br>
											<input type="text" name="answer45" value="<?= $answer45 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, lesquels ?</h3>
										</div>
										<div id="answer">
											<label for="answer46">Précisez</label>
											<br>
											<input type="text" name="answer46" value="<?= $answer46 ?>">
										</div>


										<div id="question">
											<h3>A quelle fréquence, pratiquez-vous vos loisirs ?</h3>
										</div>
										<div id="answer">
											<label for="answer47">Quotidiennement | plusieurs fois par semaine | une fois par semaine | autre</label>
											<br>
											<input type="text" name="an answer47" value="<?= $answer47 ?>">
										</div>

										<div id="question">
											<h3>Pratiquez-vous une activité physique ?</h3>
										</div>
										<div id="answer">
											<label for="answer48">Oui | Non</label>
											<br>
											<input type="text" name="answer48" value="<?= $answer48 ?>">	
										</div>

										<div id="question">
											<h3>Laquelle/lesquelles ?</h3>
										</div>
										<div id="answer">
											<label for="answer49">Précisez</label>
											<br>
											<input type="text" name="answer49" value="<?= $answer49 ?>">
										</div>

										<div id="question">
											<h3>Combien de fois par semaine ?</h3>
										</div>
										<div id="answer">
											<label for="answer50">Précisez</label>
											<br>
											<input type="text" name="answer50" value="<?= $answer50 ?>">
										</div>

										<div id="question">
											<h3>Quelles sont vos activités en vacances ?</h3>
										</div>
										<div id="answer">
											<label for="answer51">Restaurants | Randonnée | promenade | ski | plage | massage | détente | autre</label>
											<br>
											<input type="text" name="answer51" value="<?= $answer51 ?>">
										</div>

										<div id="question">
											<h3>Combien de fois par an prenez-vous des vacances ?</h3>
										</div>
										<div id="answer">
											<label for="answer52">Précisez</label>
											<br>
											<input type="text" name="answer52" value="<?= $answer52 ?>">
										</div>

										<div id="question">
											<h3>Vous sentez vous reposé une fois rentrer de vacances ?</h3>
										</div>
										<div id="answer">
											<label for="answer52">Oui | Non</label>
											<br>
											<input type="text" name="answer52" value="<?= $answer52 ?>">	
										</div>

										<div id="question">
											<h3>Quels sont vos rêves, vos projets ?</h3>
										</div>
										<div id="answer">
											<label for="answer53">Précisez</label>
											<br>
											<input type="text" name="answer53" value="<?= $answer53 ?>">
										</div>
								<?php
									}

									if ($bloc3 == 1) 
									{
								?>
										<label for="box3">3. Vie professionnelle</label>

										<div id="question">
											<h3>Quelle est votre profession ?</h3>
										</div>
										<div id="answer">
											<label for="answer54">Précisez</label>
											<br>
											<input type="text" name="answer54" value="<?= $answer54 ?>">
										</div>

										<div id="question">
											<h3>Depuis quand l’exercez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer55">Précisez</label>
											<br>
											<input type="text" name="answer55" value="<?= $answer55 ?>">
										</div>

										<div id="question">
											<h3>Quels sont vos précédentes activités professionnelles ?</h3>
										</div>
										<div id="answer">
											<label for="answer56">Précisez</label>
											<br>
											<input type="text" name="answer56" value="<?= $answer56 ?>">
										</div>

										<div id="question">
											<h3>Etes-vous épanoui dans votre activité professionnelle ?</h3>
										</div>
										<div id="answer">
											<label for="answer57">Oui | Non</label>
											<br>
											<input type="text" name="answer57" value="<?= $answer57 ?>">	
										</div>

										<div id="question">
											<h3>Combien d’heures par semaine travaillez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer58">Précisez</label>
											<br>
											<input type="text" name="answer58" value="<?= $answer58 ?>">
										</div>

										<div id="question">
											<h3>Quelle est l’amplitude horaire ?</h3>
										</div>
										<div id="answer">
											<label for="answer59">Précisez</label>
											<br>
											<input type="text" name="answer59" value="<?= $answer59 ?>">
										</div>

										<div id="question">
											<h3>Vous travaillez :</h3>
										</div>
										<div id="answer">
											<label for="answer60">en extérieur | en intérieur | les deux</label>
											<br>
											<input type="text" name="answer60" value="<?= $answer60 ?>">
										</div>

										<div id="question">
											<h3>Etes-vous en position assise toute la journée ?</h3>
										</div>
										<div id="answer">
											<label for="answer61">Oui | Non</label>
											<br>
											<input type="text" name="answer61" value="<?= $answer61 ?>">	
										</div>

										<div id="question">
											<h3>Bougez-vous régulièrement ?</h3>
										</div>
										<div id="answer">
											<label for="answer62">Oui | Non</label>
											<br>
											<input type="text" name="answer62" value="<?= $answer62 ?>">	
										</div>

										<div id="question">
											<h3>Etes-vous face à un écran toute la journée ?</h3>
										</div>
										<div id="answer">
											<label for="answer63">Oui | Non</label>
											<br>
											<input type="text" name="answer63" value="<?= $answer63 ?>">	
										</div>

										<div id="question">
											<h3>Etes-vous exposer à des produits chimiques ?</h3>
										</div>
										<div id="answer">
											<label for="answer64">Oui | Non</label>
											<br>
											<input type="text" name="answer64" value="<?= $answer64 ?>">
										</div>

										<div id="question">
											<h3>Portez-vous des charges lourdes ?</h3>
										</div>
										<div id="answer">
											<label for="answer65">Oui | Non</label>
											<br>
											<input type="text" name="answer65" value="<?= $answer65 ?>">	
										</div>

										<div id="question">
											<h3>Est-ce que vous effectué des mouvements répétés ?</h3>
										</div>
										<div id="answer">
											<label for="answer66">Oui | Non</label>
											<br>
											<input type="text" name="answer66" value="<?= $answer66 ?>">	
										</div>

										<div id="question">
											<h3>Quels types de mouvements ?</h3>
										</div>
										<div id="answer">
											<label for="answer67">Précisez</label>
											<br>
											<input type="text" name="answer67" value="<?= $answer67 ?>">
										</div>

										<div id="question">
											<h3>Ressentez-vous stress au travail ?</h3>
										</div>
										<div id="answer">
											<label for="answer68">Oui | Non</label>
											<br>
											<input type="text" name="answer68" value="<?= $answer68 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous une bonne relation avec vos collègues/client/hiérarchie ?</h3>
										</div>
										<div id="answer">
											<label for="answer69">Oui | Non</label>
											<br>
											<input type="text" name="answer69" value="<?= $answer69 ?>">	
										</div>

										<div id="question">
											<h3>Comment se passe le temps du déjeuner lorsque vous travaillez ?</h3>
										</div>
										<div id="answer">
											<label for="answer70">possibilité de restauration sur place (cantine, self) | possibilité d’apporter votre repas | restaurants | autre</label>
											<br>
											<input type="text" name="answer70" value="<?= $answer70 ?>">
										</div>
								<?php
									}

									if ($bloc4 == 1) 
									{
								?> 

										<h2>SYSTEME DIGESTIF</h2>
										<label for="box4">1. Alimentation</label>
										<div id="question">
											<h3>Comment réalisez-vous vos courses alimentaires ? </h3>
										</div>
										<div id="answer">
											<label for="answer71">sur internet | en drive | en magasin | au marché | directement chez le producteur</label>
											<br>
											<input type="text" name="answer71" value="<?= $answer71 ?>">
										</div>

										<div id="question">
											<h3>Où achetez-vous vos compléments alimentaires ?</h3>
										</div>
										<div id="answer">
											<label for="answer72">pharmacie | parapharmacie | magasin bio | internet | autre</label>
											<br>
											<input type="text" name="answer72" value="<?= $answer72 ?>">
										</div>

										<div id="question">
											<h3>Suivez-vous un régime alimentaire particulier ?</h3>
										</div>
										<div id="answer">
											<label for="answer73">Oui | Non</label>
											<br>
											<input type="text" name="answer73" value="<?= $answer73 ?>">	
										</div>		

										<div id="question">
											<h3>Si oui lequel ?</h3>
										</div>
										<div id="answer">
											<label for="answer73">Végétarien | Végan | halal | autre</label>
											<br>
											<input type="text" name="answer73" value="<?= $answer73 ?>">
										</div>			

										<div id="question">
											<h3>Manger est pour vous :</h3>
										</div>
										<div id="answer">
											<label for="answer74">un plaisir | une formalité | une contrainte</label>
											<br>
											<input type="text" name="answer74" value="<?= $answer74 ?>">
										</div> 

										<div id="question">
											<h3>Aimez-vous cuisiner ?</h3>
										</div>
										<div id="answer">
											<label for="answer75">Oui | Non</label>
											<br>
											<input type="text" name="answer75" value="<?= $answer75 ?>">	
										</div>

										<div id="question">
											<h3>Prenez-vous une collation/grignotage dans la journée ?</h3>
										</div>
										<div id="answer">
											<label for="answer76">Oui | Non</label>
											<br>
											<input type="text" name="answer76" value="<?= $answer76 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, à quel moment ?</h3>
										</div>
										<div id="answer">
											<label for="answer77">le matin | l’après-midi | les deux</label>
											<br>
											<input type="text" name="answer77" value="<?= $answer77 ?>">
										</div> 


										<div id="question">
											<h3>Qu’avez-vous l’habitude de prendre comme collation ?</h3>
										</div>
										<div id="answer">
											<label for="answer78">plutôt salé (fromage, charcuterie, sandwich, etc.) | plutôt sucré (yaourt, compote, fruits, biscuits industriels, viennoiserie, chocolat, etc.) | les deux | autre</label>
											<br>
											<input type="text" name="answer78" value="<?= $answer78 ?>">
										</div>

										<div id="question">
											<h3>Dans quelles conditions prenez-vous votre repas ?</h3>
										</div>
										<div id="answer">
											<label for="answer79">au travail | à la maison | dans le bruit | dans le calme | à table | plateau télé | autre</label>
											<br>
											<input type="text" name="answer79" value="<?= $answer79 ?>">
										</div>


										<div id="question">
											<h3>Quel est la durée moyenne de votre repas ?</h3>
										</div>
										<div id="answer">
											<label for="answer80">< 10 min | 10-20 min | 20-30min | >30 min </label>
											<br>
											<input type="text" name="answer80" value="<?= $answer80 ?>">
										</div>

										<div id="question">
											<h3>Consommez-vous des plats industriels ?</h3>
										</div>
										<div id="answer">
											<label for="answer81">Oui | Non</label>
											<br>
											<input type="text" name="answer81" value="<?= $answer81 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer82">Quotidiennement | fréquemment | occasionnellement | très rarement</label>
											<br>
											<input type="text" name="answer82" value="<?= $answer82 ?>">
										</div>

											<div id="question">
											<h3>Si oui, quels types ?</h3>
										</div>
										<div id="answer">
											<label for="answer83">plats surgelées | plats préparés | poêlée surgelée | autre</label>
											<br>
											<input type="text" name="answer83" value="<?= $answer83 ?>">
										</div>


										<div id="question">
											<h3>En moyenne, vous mangez dans les fast-foods ?</h3>
										</div>
										<div id="answer">
											<label for="answer84">plusieurs fois par semaine | plusieurs fois par mois | quelques fois par an</label>
											<br>
											<input type="text" name="answer84" value="<?= $answer84 ?>">
										</div>

										<div id="question">
											<h3>En moyenne, vous mangez au restaurant ?</h3>
										</div>
										<div id="answer">
											<label for="answer85">plusieurs fois par semaine | plusieurs fois par mois | quelques fois par an</label>
											<br>
											<input type="text" name="answer85" value="<?= $answer85 ?>">
										</div>

										<div id="question">
											<h3>En moyenne, vous mangez au restaurant d’entreprise ?</h3>
										</div>
										<div id="answer">
											<label for="answer86">tous les jours | plusieurs fois par semaine | une ou deux fois par semaine</label>
											<br>
											<input type="text" name="answer86" value="<?= $answer86 ?>">
										</div>

										<div id="question">
											<h3>Utilisez-vous des coupes faim ? ou des substituts de repas ?</h3>
										</div>
										<div id="answer">
											<label for="answer87">Oui | Non</label>
											<br>
											<input type="text" name="answer87" value="<?= $answer87 ?>">	
										</div>

										<div id="question">
											<h3>En moyenne, combien de fois par semaine/par jour consommez-vous de la viande rouge ?</h3>
										</div>
										<div id="answer">
											<label for="answer88">Précisez</label>
											<br>
											<input type="text" name="answer88" value="<?= $answer88 ?>">	
										</div>

										<div id="question">
											<h3>Quel type de viandes rouges ?</h3>
										</div>
										<div id="answer">
											<label for="answer89">Précisez</label>
											<br>
											<input type="text" name="answer89" value="<?= $answer89 ?>">	
										</div>

										<div id="question">
											<h3>En moyenne, combien de fois par semaine/par jour consommez-vous du poisson/des fruits de mer ?</h3>
										</div>
										<div id="answer">
											<label for="answer90">Précisez</label>
											<br>
											<input type="text" name="answer90" value="<?= $answer90 ?>">	
										</div>

										<div id="question">
											<h3>Quel type de poissons ou fruits de mer ?</h3>
										</div>
										<div id="answer">
											<label for="answer91">Précisez</label>
											<br>
											<input type="text" name="answer91" value="<?= $answer91 ?>">	
										</div>

										<div id="question">
											<h3>En moyenne, combien de fois par semaine/par jour consommez-vous du lait ou/et des produits laitiers ?</h3>
										</div>
										<div id="answer">
											<label for="answer92">Précisez</label>
											<br>
											<input type="text" name="answer92" value="<?= $answer92 ?>">	
										</div>

										<div id="question">
											<h3>Ce sont des produits au lait de :</h3>
										</div>
										<div id="answer">
											<label for="answer93">vache | brebis/chèvre | autre</label>
											<br>
											<input type="text" name="answer93" value="<?= $answer93 ?>">

										</div>
										 
										<div id="question">
											<h3>En moyenne, combien de fois par semaine/par jour consommez-vous du pain ou des produits céréaliers ?</h3>
										</div>
										<div id="answer">
											<label for="answer94">Précisez</label>
											<br>
											<input type="text" name="answer94" value="<?= $answer94 ?>">	
										</div>

										<div id="question">
											<h3>En moyenne, combien de fois par semaine/par jour consommez-vous des légumineuses ?</h3>
										</div>
										<div id="answer">
											<label for="answer95">Précisez</label>
											<br>
											<input type="text" name="answer95" value="<?= $answer95 ?>">	
										</div>

										<div id="question">
											<h3>Consommez-vous des produits bio ?</h3>
										</div>
										<div id="answer">
											<label for="answer96">Oui | Non</label>
											<br>
											<input type="text" name="answer96" value="<?= $answer96 ?>">	
										</div>

										<div id="question">
											<h3>Quels types de produits bio ?</h3>
										</div>
										<div id="answer">
											<label for="answer97">Précisez</label>
											<br>
											<input type="text" name="answer97" value="<?= $answer97 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous des allergies alimentaires ?</h3>
										</div>
										<div id="answer">
											<label for="answer98">Oui | Non</label>
											<input type="text" name="answer98" value="<?= $answer98 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, lesquelles ?</h3>
										</div>
										<div id="answer">
											<label for="answer99">Précisez</label>
											<br>
											<input type="text" name="answer99" value="<?= $answer99 ?>">	
										</div>	

										<div id="question">
											<h3>Avez-vous des addictions alimentaires ?</h3>
										</div>
										<div id="answer">
											<label for="answer100">Oui | Non</label>
											<br>
											<input type="text" name="answer100" value="<?= $answer100 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, lesquelles ?</h3>
										</div>
										<div id="answer">
											<label for="answer101">Précisez</label>
											<br>
											<input type="text" name="answer101" value="<?= $answer101 ?>">	
										</div>

										<div id="question">
											<h3>Quelle quantité d’eau buvez-vous au quotidien ?</h3>
										</div>
										<div id="answer">
											<label for="answer102">moins 1,5L/jour | entre 1,5L et 2L/jour | plus de 2L/jour</label>
											<br>
											<input type="text" name="answer102" value="<?= $answer102 ?>">
										</div>

										<div id="question">
											<h3>Vous vous hydratez plutôt :</h3>
										</div>
										<div id="answer">
											<label for="answer103">pendant les repas | en dehors de repas | les deux</label>
											<br>
											<input type="text" name="answer103" value="<?= $answer103 ?>">
										</div>

										<div id="question">
											<h3>Quelles boissons consommez-vous au quotidien ?</h3>
										</div>
										<div id="answer">
											<label for="answer104">eau plate | eau aromatisée | eau gazeuse | tisane | autre</label>
											<br>
											<input type="text" name="answer104" value="<?= $answer104 ?>">
										</div>	

										<div id="question">
											<h3>En moyenne à quelle fréquence consommez-vous des boissons sucrées ?</h3>
										</div>
										<div id="answer">
											<label for="answer105">Quotidiennement | fréquemment | occasionnellement | très rarement</label>
											<br>
											<input type="text" name="answer105" value="<?= $answer105 ?>">
										</div>
										
										<div id="question">
											<h3>Y a-t-il des aliments que vous n’aimez pas du tout ?</h3>
										</div>
										<div id="answer">
											<label for="answer106">Précisez</label>
											<br>
											<input type="text" name="answer106" value="<?= $answer106 ?>">	
										</div>

										<div id="question">
											<h3>Etes-vous fumeur ?</h3>
										</div>
										<div id="answer">
											<label for="answer107">Oui | Non</label>
											<br>
											<input type="text" name="answer107" value="<?= $answer107 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, depuis combien de temps ?</h3>
										</div>
										<div id="answer">
											<label for="answer108">Précisez</label>
											<br>
											<input type="text" name="answer108" value="<?= $answer108 ?>">	
										</div>

										<div id="question">
											<h3>Combien par jour ?</h3>
										</div>
										<div id="answer">
											<label for="answer109">Précisez</label>
											<br>
											<input type="text" name="answer109" value="<?= $answer109 ?>">	
										</div>

										<div id="question">
											<h3>Si non :</h3>
										</div>
										<div id="answer">
											<label for="answer110">arrêt récent (moins d’un an) | arrêt depuis plusieurs années | vous n’avez jamais fumé | très rarement</label>
											<br>
											<input type="text" name="answer110" value="<?= $answer110 ?>">
										</div>

										<div id="question">
											<h3>Quelle marque avez-vous l’habitude de consommer ?</h3>
										</div>
										<div id="answer">
											<label for="answer111">Malboro | Lucky strike | Camel | Gitanes maïs | Vogue | autre</label>
											<br>
											<input type="text" name="answer111" value="<?= $answer111 ?>"> 
										</div>

										<div id="question">
											<h3>Consommez-vous du café ?</h3>
										</div>
										<div id="answer">
											<label for="answer112">Oui | Non</label>
											<br>
											<input type="text" name="answer112" value="<?= $answer112 ?>">

										</div>

										<div id="question">
											<h3>Si oui, combien par jour ?</h3>
										</div>
										<div id="answer">
											<label for="answer113">Précisez</label>
											<br>
											<input type="text" name="answer113" value="<?= $answer113 ?>">	
										</div>
										
										<div id="question">
											<h3>Consommez-vous du thé ?</h3>
										</div>
										<div id="answer">
											<label for="answer114">Oui | Non</label>
											<br>
											<input type="text" name="answer114" value="<?= $answer114 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, combien par jour ?</h3>
										</div>
										<div id="answer">
											<label for="answer115">Précisez</label>
											<br>
											<input type="text" name="answer115" value="<?= $answer115 ?>">	
										</div>

										<div id="question">
											<h3>Consommez-vous de l’alcool ?</h3>
										</div>
										<div id="answer">
											<label for="answer116">Oui | Non</label>
											<br>
											<input type="text" name="answer116" value="<?= $answer116 ?>">	
										</div>

										<div id="question">
											<h3>Si oui :</h3>
										</div>
										<div id="answer">
											<label for="answer117">quotidiennement | régulièrement (au moins 1 fois/semaine) | occasionnellement (1 fois/mois)</label>
											<br>
											<input type="text" name="answer117" value="<?= $answer117 ?>">
										</div>

										<div id="question">
											<h3>Quels types d’alcool consommez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer118">Bières | vins | spiritueux</label>
											<br>
											<input type="text" name="answer118" value="<?= $answer118 ?>">
										</div>

										<div id="question">
											<h3>Avez-vous déjà consommé des produits stupéfiants ?</h3>
										</div>
										<div id="answer">
											<label for="answer119">Oui | Non</label>
											<br>
											<input type="text" name="answer119" value="<?= $answer119 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, à lesquels ?</h3>
										</div>
										<div id="answer">
											<label for="answer120">Cannabis | cocaïne | LSD | autre</label>
											<br>
											<input type="text" name="answer120" value="<?= $answer120 ?>">
										</div>

										<div id="question">
											<h3>Consommez-vous des produits stupéfiants ?</h3>
										</div>
										<div id="answer">
											<label for="answer121">Oui | Non</label>
											<br>
											<input type="text" name="answer121" value="<?= $answer121 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, à quelle fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer122">quotidiennement | régulièrement (au moins 1 fois/semaine) | occasionnellement (1 fois/mois)</label>
											<br>
											<input type="text" name="answer122" value="<?= $answer122 ?>">
										</div>

										<label for="box5">2. Digestion - transit</label>
										
										<div id="question">
											<h3>Vous a-t-on diagnostiqué une pathologie digestive ?</h3>
										</div>
										<div id="answer">
											<label for="answer122">Oui | Non</label>
											<br>
											<input type="text" name="answer122" value="<?= $answer122 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, laquelle ?</h3>
										</div>
										<div id="answer">
											<label for="answer123">SIBO | SII | MALADIE COELIAQUE | maladie de Crohn | rectocolite hémorragique | </label>
											<br>
											<input type="text" name="answer123" value="<?= $answer123 ?>">
										</div>

										<div id="question">
											<h3>Comment qualifieriez-vous votre digestion ?</h3>
										</div>
										<div id="answer">
											<label for="answer124">Bonne | mauvaise | lente | difficile | douloureuse</label>
											<br>
											<input type="text" name="answer124" value="<?= $answer124 ?>">
										</div>

										<div id="question">
											<h3>La digestion vous provoque-t-elle :</h3>
										</div>
										<div id="answer">
											<label for="answer125">des ballonnements | gaz | flatulences | bruit intestinaux | autre</label>
											<br>
											<input type="text" name="answer125" value="<?= $answer125 ?>">
										</div>		

										<div id="question">
											<h3>Ressentez-vous des douleurs abdominales ?</h3>
										</div>
										<div id="answer">
											<label for="answer126">Oui | Non</label>
											<br>
											<input type="text" name="answer126" value="<?= $answer126 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer127">quotidiennement | régulièrement (au moins 1 fois/semaine) | occasionnellement (1 fois/mois)</label>
											<br>
											<input type="text" name="answer127" value="<?= $answer127 ?>">
										</div>  

										<div id="question">
											<h3>Quelle est l’intensité ?</h3>
										</div>
										<div id="answer">
											<label for="answer128">faible | modérée | intense | extrêmement intense</label>
											<br>
											<input type="text" name="answer128" value="<?= $answer128 ?>">
										</div>

										<div id="question">
											<h3>A quel endroit ?</h3>
										</div>
										<div id="answer">
											<label for="answer129">En bas, à droite | En bas, à gauche | En haut, à droite | En haut, à gauche | autre</label>
											<br>
											<input type="text" name="answer129" value="<?= $answer129 ?>">
										</div>

										<div id="question">
											<h3>Ressentez-vous des remontées acides ?</h3>
										</div>
										<div id="answer">
											<label for="answer130">Oui | Non</label>
											<br>
											<input type="text" name="answer130" value="<?= $answer130 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer129">quotidiennement | régulièrement (au moins 1 fois/semaine) | occasionnellement (1 fois/mois)</label>
											<br>
											<input type="text" name="answer129" value="<?= $answer129 ?>">
										</div>

										<div id="question">
											<h3>Quelle est l’intensité ?</h3>
										</div>
										<div id="answer">
											<label for="answer130">faible | modérée | intense | extrêmement intense</label>
											<br>
											<input type="text" name="answer130" value="<?= $answer130 ?>">
										</div>

										<div id="question">
											<h3>Ressentez-vous des brûlures d’estomac ?</h3>
										</div>
										<div id="answer">
											<label for="answer131">Oui | Non</label>
											<br>
											<input type="text" name="answer131" value="<?= $answer131 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer132">quotidiennement | régulièrement (au moins 1 fois/semaine) | occasionnellement (1 fois/mois)</label>
											<br>
											<input type="text" name="answer132" value="<?= $answer132 ?>">
										</div> 

										<div id="question">
											<h3>Si oui, fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer133">quotidiennement | régulièrement (au moins 1 fois/semaine) | occasionnellement (1 fois/mois)</label>
											<br>
											<input type="text" name="answer133" value="<?= $answer133 ?>">
										</div>

										<div id="question">
											<h3>Quelle est l’intensité ?</h3>
										</div>
										<div id="answer">
											<label for="answer134">faible | modérée | intense | extrêmement intense</label>
											<br>
											<input type="text" name="answer134" value="<?= $answer134 ?>">
										</div>

										<div id="question">
											<h3>Ressentez une sensation d’inconfort après un repas copieux, gras, alcoolisé ?</h3>
										</div>
										<div id="answer">
											<label for="answer135">Oui | Non</label>
											<br>
											<input type="text" name="answer135" value="<?= $answer135 ?>">	
										</div>

										<div id="question">
											<h3>Etes-vous facilement sujet à des nausées, vomissements ?</h3>
										</div>
										<div id="answer">
											<label for="answer136">Oui | Non</label>
											<br>
											<input type="text" name="answer136" value="<?= $answer136 ?>">
										</div>

										<div id="question">
											<h3>Si oui, fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer137">quotidiennement | régulièrement (au moins 1 fois/semaine) | occasionnellement (1 fois/mois)</label>
											<br>
											<input type="text" name="answer137" value="<?= $answer137 ?>">
										</div>

										<div id="question">
											<h3>A la suite d’un repas copieux, êtes-vous sujet à :</h3>
										</div>
										<div id="answer">
											<label for="answer138">des maux de têtes | une sensation de fatigue (somnolence) | </label>
											<br>
											<input type="text" name="answer138" value="<?= $answer138 ?>">
										</div>

										<div id="question">
											<h3>Avez-vous souvent la langue blanche, pâteuse ou une mauvaise haleine ?</h3>
										</div>
										<div id="answer">
											<label for="answer139">Oui | Non</label>
											<br>
											<input type="text" name="answer139" value="<?= $answer139 ?>">	
										</div>

										<div id="question">
											<h3>Concernant votre transit intestinal, vous direz que celui-ci est :</h3>
										</div>
										<div id="answer">
											<label for="answer139">régulier (1-2 fois/jour) | tendance à la diarrhée (plusieurs fois/jour) | tendance à la constipation (tous les 3-4 jours) | tendance à la constipation chronique (supérieur à 5 jours) | alternance diarrhée constipation</label>
											<input type="text" name="answer139" value="<?= $answer139 ?>">
										</div> 


										<div id="question">
											<h3>Avez-vous déjà consommé des laxatifs (dulcolax, microlax, etc.) ou des compléments alimentaires (fucus, psyllium, etc.) ?</h3>
										</div>
										<div id="answer">
											<label for="answer140">Oui | Non</label>
											<br>
											<input type="text" name="answer140" value="<?= $answer140 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, de manière :</h3>
										</div>
										<div id="answer">
											<label for="answer141">occasionnelle | récurrente | permanente</label>
											<br>
											<input type="text" name="answer141" value="<?= $answer141 ?>">
										</div>

										<h2>III. SYSTEME RESPIRATOIRE - ORL</h2>
										<label for="box6">1. ORL</label>	 
										
										<div id="question">
											<h3>Avez-vous une sensibilité particulière aux infections hivernales ?</h3>
										</div>
										<div id="answer">
											<label for="answer142">Oui | Non</label>
											<br>
											<input type="text" name="answer142" value="<?= $answer142 ?>">	
										</div>

											 
										
										<div id="question">
											<h3>Si oui, quelle période ?</h3>
										</div>
										<div id="answer">
											<label for="answer143">Précisez</label>
											<br>
											<input type="text" name="answer143" value="<?= $answer143 ?>">
										</div> 

										<div id="question">
											<h3>Combien de fois/an ?</h3>
										</div>
										<div id="answer">
											<label for="answer144">Précisez</label>
											<br>
											<input type="text" name="answer144" value="<?= $answer144 ?>">
										</div>  

										<div id="question">
											<h3>Toussez-vous fréquemment ?</h3>
										</div>
										<div id="answer">
											<label for="answer145">Oui | Non</label>
											<br>
											<input type="text" name="answer145" value="<?= $answer145 ?>">	
										</div>

										<div id="question">
											<h3>Si oui :</h3>
										</div>
										<div id="answer">
											<label for="answer146">Plutôt le matin | l’après midi | en fin de journée | la nuit</label>
											<br>
											<input type="text" name="answer146" value="<?= $answer146 ?>">
										</div>

										<div id="question">
											<h3>Est-ce plutôt une toux :</h3>
										</div>
										<div id="answer">
											<label for="answer147">grasse | sèche</label>
											<br>
											<input type="text" name="answer147" value="<?= $answer147 ?>">
										</div> 

										<div id="question">
											<h3>Prenez-vous des sirops ou autres pour calmer cette toux ?</h3>
										</div>
										<div id="answer">
											<label for="answer148">toplexil | humex | clarix | autre</label>
											<br>
											<input type="text" name="answer148" value="<?= $answer148 ?>">
										</div> 

										<div id="question">
											<h3>Votre nez coule-t-il régulièrement ?</h3>
										</div>
										<div id="answer">
											<label for="answer149">Oui | Non</label>
											<br>
											<input type="text" name="answer149" value="<?= $answer149 ?>">	
										</div>

										<div id="question">
											<h3>L’écoulement est plutôt (plusieurs réponses possibles) :</h3>
										</div>
										<div id="answer">
											<label for="answer150">liquide | épais | clair | jaune</label>
											<br>
											<input type="text" name="answer150" value="<?= $answer150 ?>">
										</div>

										<div id="question">
											<h3>Etes-vous souvent enrhumé ?</h3>
										</div>
										<div id="answer">
											<label for="answer151">Oui | Non</label>
											<br>
											<input type="text" name="answer151" value="<?= $answer151 ?>">	
										</div>

										<div id="question">
											<h3>Souffrez-vous souvent de sinusites ?</h3>
										</div>
										<div id="answer">
											<label for="answer152">Oui | Non</label>
											<br>
											<input type="text" name="answer152" value="<?= $answer152 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous des allergies ?</h3>
										</div>
										<div id="answer">
											<label for="answer153">Oui | Non</label>
											<br>
											<input type="text" name="answer153" value="<?= $answer153 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, quelle(s) type(s) d’allergies ?</h3>
										</div>
										<div id="answer">
											<label for="answer154">Alimentaires | graminées | poils | acariens | médicaments | autre</label>
											<br>
											<input type="text" name="answer154" value="<?= $answer154 ?>">
										</div>

										<div id="question">
											<h3>Prenez-vous des antihistaminiques ?</h3>
										</div>
										<div id="answer">
											<label for="answer155">Oui | Non</label>
											<br>
											<input type="text" name="answer155" value="<?= $answer155 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous déjà fait des séances de désensibilisation ?</h3>
										</div>
										<div id="answer">
											<label for="answer156">Oui | Non</label>
											<br>
											<input type="text" name="answer156" value="<?= $answer156 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer157">Précisez</label>
											<br>
											<input type="text" name="answer157" value="<?= $answer157 ?>">
										</div>

										<div id="question">
											<h3>Etes-vous asthmatique ?</h3>
										</div>
										<div id="answer">
											<label for="answer158">Oui | Non</label>
											<br>
											<input type="text" name="answer158" value="<?= $answer158 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, depuis quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer159">Précisez</label>
											<br>
											<input type="text" name="answer159" value="<?= $answer159 ?>">
										</div>

										<div id="question">
											<h3>Prenez-vous de la Ventoline ?</h3>
										</div>
										<div id="answer">
											<label for="answer160">Oui | Non</label>
											<br>
											<input type="text" name="answer160" value="<?= $answer160 ?>">	
										</div>

										<div id="question">
											<h3>Si oui à quelle fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer161">Précisez</label>
											<br>
											<input type="text" name="answer161" value="<?= $answer161 ?>">
										</div>

										<div id="question">
											<h3>Etes-vous sensible aux maux de gorge, angines, bronchites, troubles pneumo ?</h3>
										</div>
										<div id="answer">
											<label for="answer162">Oui | Non</label>
											<br>
											<input type="text" name="answer162" value="<?= $answer162 ?>">	
										</div>

										<div id="question">
											<h3>Etes-vous sensible aux otites ?</h3>
										</div>
										<div id="answer">
											<label for="answer163">Oui | Non</label>
											<br>
											<input type="text" name="answer163" value="<?= $answer163 ?>">	
										</div>

										<div id="question">
											<h3>Ressentez-vous des difficultés à respirer ?</h3>
										</div>
										<div id="answer">
											<label for="answer164">Oui | Non</label>
											<br>
											<input type="text" name="answer164" value="<?= $answer164 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, depuis quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer165">Précisez</label>
											<br>
											<input type="text" name="answer165" value="<?= $answer165 ?>">
										</div> 

										<div id="question">
											<h3>Etes-vous facilement essoufflé ?</h3>
										</div>
										<div id="answer">
											<label for="answer166">Oui | Non</label>
											<br>
											<input type="text" name="answer166" value="<?= $answer166 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, depuis quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer167">Précisez</label>
											<br>
											<input type="text" name="answer167" value="<?= $answer167 ?>">
										</div>  

										<div id="question">
											<h3>A quel moment ?</h3>
										</div>
										<div id="answer">
											<label for="answer168">pendant un effort physique | dans n’importe quelle situation</label>
											<br>
											<input type="text" name="answer168" value="<?= $answer168 ?>">
										</div>


										<h2>IV.	SYSTEME CARDIOVASCULAIRE</h2>
										<label for="box7">1. ORL</label>	

										<div id="question">
											<h3>Etes-vous sujet aux malaises vagaux, vertiges, étourdissements ?</h3>
										</div>
										<div id="answer">
											<label for="answer169">Oui | Non</label>
											<br>
											<input type="text" name="answer169" value="<?= $answer169 ?>">	
										</div> 

										<div id="question">
											<h3>Etes-vous sujet aux troubles du rythme cardiaque (tachycardie, arythmie…) ?</h3>
										</div>
										<div id="answer">
											<label for="answer170">Oui | Non</label>
											<br>
											<input type="text" name="answer170" value="<?= $answer170 ?>">	
										</div>

										<div id="question">
											<h3>Souffrez-vous d’hypertension ?</h3>
										</div>
										<div id="answer">
											<label for="answer171">Oui | Non</label>
											<br>
											<input type="text" name="answer171" value="<?= $answer171 ?>">	
										</div>

										<div id="question">
											<h3>Souffrez-vous hypotension ?</h3>
										</div>
										<div id="answer">
											<label for="answer172">Oui | Non</label>
											<br>
											<input type="text" name="answer172" value="<?= $answer172 ?>">	
										</div> 

										<div id="question">
											<h3>Souffrez-vous d’une sensation de jambes lourdes ?</h3>
										</div>
										<div id="answer">
											<label for="answer173">Oui | Non</label>
											<br>
											<input type="text" name="answer173" value="<?= $answer173 ?>">	
										</div>  

										<div id="question">
											<h3>Etes-vous sujet à la rétention d’eau ?</h3>
										</div>
										<div id="answer">
											<label for="answer174">Oui | Non</label>
											<br>
											<input type="text" name="answer174" value="<?= $answer174 ?>">	
										</div> 

										<div id="question">
											<h3>A quel endroit ?</h3>
										</div>
										<div id="answer">
											<label for="answer175">Précisez</label>
											<br>
											<input type="text" name="answer175" value="<?= $answer175 ?>">
										</div> 

										<div id="question">
											<h3>Avez-vous de la cellulite ?</h3>
										</div>
										<div id="answer">
											<label for="answer176">Oui | Non</label>
											<br>
											<input type="text" name="answer176" value="<?= $answer176 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, plutôt localisée :</h3>
										</div>
										<div id="answer">
											<label for="answer177">sur les fessiers/cuisses | sur le ventre/hanches/culotte de cheval | sur les jambes</label>
											<br>
											<input type="text" name="answer177" value="<?= $answer177 ?>">
										</div> 

										<div id="question">
											<h3>Avez-vous des troubles circulatoires, type phlébite, varice ?</h3>
										</div>
										<div id="answer">
											<label for="answer178">Oui | Non</label>
											<br>
											<input type="text" name="answer178" value="<?= $answer178 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous déjà eu des hémorroïdes ?</h3>
										</div>
										<div id="answer">
											<label for="answer179">Oui | Non</label>
											<br>
											<input type="text" name="answer179" value="<?= $answer179 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous déjà eu un ou plusieurs pontages / infarctus ?</h3>
										</div>
										<div id="answer">
											<label for="answer180">Oui | Non</label>
											<br>
											<input type="text" name="answer180" value="<?= $answer180 ?>">	
										</div>

										<div id="question">
											<h3>De quand date le dernier ?</h3>
										</div>
										<div id="answer">
											<label for="answer181">Précisez</label>
											<br>
											<input type="text" name="answer181" value="<?= $answer181 ?>">
										</div> 

										<div id="question">
											<h3>Avez-vous les extrémités froides ?</h3>
										</div>
										<div id="answer">
											<label for="answer182">Oui | Non</label>
											<br>
											<input type="text" name="answer182" value="<?= $answer182 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous des picotements dans les extrémités (pieds, mains, nez) ?</h3>
										</div>
										<div id="answer">
											<label for="answer183">Oui | Non</label>
											<br>
											<input type="text" name="answer183" value="<?= $answer183 ?>">	
										</div>

										<div id="question">
											<h3>Etes-vous frileux(se) ?</h3>
										</div>
										<div id="answer">
											<label for="answer184">Oui | Non</label>
											<br>
											<input type="text" name="answer184" value="<?= $answer184 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous des migraines ? maux de tête ?</h3>
										</div>
										<div id="answer">
											<label for="answer185">Oui - Non</label>
											<br>
											<input type="text" name="answer185" value="<?= $answer185 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous des troubles de la concentration ? de la mémoire ?</h3>
										</div>
										<div id="answer">
											<label for="answer186">Oui | Non</label>
											<br>
											<input type="text" name="answer186" value="<?= $answer186 ?>">	
										</div> 

										<div id="question">
											<h3>Souffrez-vous de diabète ?</h3>
										</div>
										<div id="answer">
											<label for="answer187">Oui | Non</label>
											<br>
											<input type="text" name="answer187" value="<?= $answer187 ?>">	
										</div> 

										<div id="question">
											<h3>Souffrez-vous de cholestérol ?</h3>
										</div>
										<div id="answer">
											<label for="answer188">Oui | Non</label>
											<br>
											<input type="text" name="answer188" value="<?= $answer188 ?>">	
										</div> 

										<h2>V.	SYSTEME URO-GENITAL</h2>
										<label for="box8">1. Système Uro-Génital</label>

										<div id="question">
											<h3>Etes-vous suivi par un gynécologue et/ou sage-femme ?</h3>
										</div>
										<div id="answer">
											<label for="answer189">Oui | Non</label>
											<br>
											<input type="text" name="answer189" value="<?= $answer189 ?>">	
										</div> 	

										<div id="question">
											<h3>Quel est votre moyen de contraception ?</h3>
										</div>
										<div id="answer">
											<label for="answer190">préservatifs | pilule : laquelle ? | stérilet : quel type ? | implant | symptothermie | autre</label>
											<br>
											<input type="text" name="answer190" value="<?= $answer190 ?>">
										</div>

										<div id="question">
											<h3>A quel âge, avez-vous eu vos premières règles ?</h3>
										</div>
										<div id="answer">
											<label for="answer191">Précisez</label>
											<br>
											<input type="text" name="answer191" value="<?= $answer191 ?>">
										</div>

										<div id="question">
											<h3>Vos cycles sont-ils réguliers ?</h3>
										</div>
										<div id="answer">
											<label for="answer192">Oui | Non</label>
											<br>
											<input type="text" name="answer192" value="<?= $answer192 ?>">	
										</div>

										<div id="question">
											<h3>Vos règles sont-elles plutôt abondantes ?</h3>
										</div>
										<div id="answer">
											<label for="answer193">Oui | Non</label>
											<br>
											<input type="text" name="answer193" value="<?= $answer193 ?>">	
										</div>

										<div id="question">
											<h3>Quelle est leur durée ?</h3>
										</div>
										<div id="answer">
											<label for="answer194">Précisez</label>
											<br>
											<input type="text" name="answer194" value="<?= $answer194 ?>">
										</div> 

										<div id="question">
											<h3>Vous on-t-a diagnostiqué une pathologie liée à votre système urino-génital ?</h3>
										</div>
										<div id="answer">
											<label for="answer195">Oui | Non</label>
											<br>
											<input type="text" name="answer195" value="<?= $answer195 ?>">	
										</div>
										
										 
										<div id="question">
											<h3>Si oui, laquelle ?</h3>
										</div>
										<div id="answer">
											<label for="answer196">endométriose | kyste ovarien | SOPK | autre</label>
											<br>
											<input type="text" name="answer196" value="<?= $answer196 ?>">
										</div>

										<div id="question">
											<h3>Souffrez-vous de syndrome prémenstruel ?</h3>
										</div>
										<div id="answer">
											<label for="answer197">Irritabilité, anxiété, déprime | rétention d’eau | prise de poids passagère | insomnie, agitation | migraines | grosse fatigue physique | difficulté de concentration | constipation, diarrhée | douleurs mammaires | acné | autre</label>
											<br>
											<input type="text" name="answer197" value="<?= $answer197 ?>">
										</div>

										<div id="question">
											<h3>Souffrez-vous de troubles liés à votre ménopause ?</h3>
										</div>
										<div id="answer">
											<label for="answer198">Bouffées de chaleur | troubles du sommeil | prise de poids | sécheresse vaginale | autre</label>
											<br>
											<input type="text" name="answer198" value="<?= $answer198 ?>">
										</div>

										<div id="question">
											<h3>Souffrez-vous de cystites à répétition ?</h3>
										</div>
										<div id="answer">
											<label for="answer199">Oui | Non</label>
											<br>
											<input type="text" name="answer199" value="<?= $answer199 ?>">	
										</div> 


										<div id="question">
											<h3>Si oui, à quelle fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer200">Précisez</label>
											<input type="text" name="answer200" value="<?= $answer200 ?>">
										</div>

										<div id="question">
											<h3>Souffrez-vous de troubles de la libido ?</h3>
										</div>
										<div id="answer">
											<label for="answer201">Oui | Non</label>
											<br>
											<input type="text" name="answer201" value="<?= $answer201 ?>">	
										</div>

										<div id="question">
											<h3>Souffrez-vous de troubles de sécheresse vaginale ?</h3>
										</div>
										<div id="answer">
											<label for="answer202">Oui | Non</label>
											<br>
											<input type="text" name="answer202" value="<?= $answer202 ?>">	
										</div>

										<div id="question">
											<h3>Souffre-vous de pertes vaginales ?</h3>
										</div>
										<div id="answer">
											<label for="answer203">Oui | Non</label>
											<br>
											<input type="text" name="answer203" value="<?= $answer203 ?>">	
										</div> 

										<div id="question">
											<h3>Souffrez-vous de troubles érectiles ?</h3>
										</div>
										<div id="answer">
											<label for="answer204">Oui | Non</label>
											<br>
											<input type="text" name="answer204" value="<?= $answer204 ?>">	
										</div> 

										<div id="question">
											<h3>Combien de grossesses avez-vous eu ?</h3>
										</div>
										<div id="answer">
											<label for="answer205">Précisez</label>
											<input type="text" name="answer205" value="<?= $answer205 ?>">
										</div> 

										<div id="question">
											<h3>Le/les accouchement(s) ont eu lieu :</h3>
										</div>
										<div id="answer">
											<label for="answer206">par voie basse | par césarienne</label>
											<br>
											<input type="text" name="answer206" value="<?= $answer206 ?>">
										</div>

										<div id="question">
											<h3>Y a-t-il eu des complications ?</h3>
										</div>
										<div id="answer">
											<label for="answer207">Oui | Non</label>
											<br>
											<input type="text" name="answer207" value="<?= $answer207 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous déjà fait des fausses couches ?</h3>
										</div>
										<div id="answer">
											<label for="answer208">Oui | Non</label>
											<br>
											<input type="text" name="answer208" value="<?= $answer208 ?>">
										</div> 

										<div id="question">
											<h3>Quelle est la couleur de vos urines ?</h3>
										</div>
										<div id="answer">
											<label for="answer209">Précisez</label>
											<br>
											<input type="text" name="answer209" value="<?= $answer209 ?>">
										</div>

										<h2>VI.	SYSTEME OSSEUX, MUSCULAIRE ET ARTICULAIRE</h2>
										<label for="box9">musculaire & articulaire</label>

										<div id="question">
											<h3>Souffrez d’une pathologie spécifique ? (Arthrose, arthrite, polyarthrite rhumatoïde, sclérose en plaques, fibromyalgie…)</h3>
										</div>
										<div id="answer">
											<label for="answer210">Oui | Non</label>
											<br>
											<input type="text" name="answer210" value="<?= $answer210 ?>">	
										</div> 	

										<div id="question">
											<h3>Si oui, depuis quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer211">Précisez</label>
											<br>
											<input type="text" name="answer211" value="<?= $answer211 ?>">
										</div> 

										<div id="question">
											<h3>Ressentez-vous des douleurs musculaires ?</h3>
										</div>
										<div id="answer">
											<label for="answer212">Oui | Non</label>
											<br>
											<input type="text" name="answer212" value="<?= $answer212 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, où ?</h3>
										</div>
										<div id="answer">
											<label for="answer213">Précisez</label>
											<br>
											<input type="text" name="answer213" value="<?= $answer213 ?>">
										</div> 

										<div id="question">
											<h3>Quelle est son intensité ?</h3>
										</div>
										<div id="answer">
											<label for="answer214">faible | modérée | intense | extrêmement intense</label>
											<br>
											<input type="text" name="answer214" value="<?= $answer214 ?>">
										</div>

										<div id="question">
											<h3>La douleur est-elle :</h3>
										</div>
										<div id="answer">
											<label for="answer215">passagère | constante</label>
											<br>
											<input type="text" name="answer215" value="<?= $answer215 ?>">
										</div>


										<div id="question">
											<h3>Cette douleur est-elle :</h3>
										</div>
										<div id="answer">
											<label for="answer216">Augmentée la nuit | Augmentée la journée | Permanente | Pulsatile | Générale | Localisée à un endroit précis | Comme une sensation de brûlure | Comme une sensation de décharge électrique | Augmentée par le froid | Augmentée par le chaud</label>
											<br>
											<input type="text" name="answer216" value="<?= $answer216 ?>">
										</div>

										<div id="question">
											<h3>Est-ce suite à un accident ? travail avec gestuelle répétée ? fractures ?</h3>
										</div>
										<div id="answer">
											<label for="answer217">Oui | Non</label>
											<br>
											<input type="text" name="answer217" value="<?= $answer217 ?>">	
										</div>  

										<div id="question">
											<h3>Avez-vous des maux de dos ?</h3>
										</div>
										<div id="answer">
											<label for="answer218">Oui | Non</label>
											<br>
											<input type="text" name="answer218" value="<?= $answer218 ?>">	
										</div> 

										<div id="question">
											<h3>A quel endroit ?</h3>
										</div>
										<div id="answer">
											<label for="answer219">En haut | au milieu | en bas du dos</label>
										</div>

										<div id="question">
											<h3>Sur une échelle de 1 à 10, quelle est l’intensité de la douleur ?</h3>
										</div>
										<div id="answer">
											<label for="answer220">Précisez</label>
											<br>
											<input type="text" name="answer220" value="<?= $answer220 ?>">
										</div> 


										<div id="question">
											<h3>Est-ce fréquent ?</h3>
										</div>
										<div id="answer">
											<label for="answer221">Oui | Non</label>
											<br>
											<input type="text" name="answer221" value="<?= $answer221 ?>">	
										</div> 

										<div id="question">
											<h3>Souffrez-vous d’une sciatique ? cruralgie ? sciatalgie ?</h3>
										</div>
										<div id="answer">
											<label for="answer222">Oui | Non</label>
											<br>
											<input type="text" name="answer222" value="<?= $answer222 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, depuis quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer222">Précisez</label>
											<input type="text" name="answer222" value="<?= $answer222 ?>">
										</div> 

										<div id="question">
											<h3>Quelle est son intensité ?</h3>
										</div>
										<div id="answer">
											<label for="answer223">faible | modérée | intense | extrêmement intense</label>
											<br>
											<input type="text" name="answer223" value="<?= $answer223 ?>">
										</div>

										<div id="question">
											<h3>Est-ce constant ?</h3>
										</div>
										<div id="answer">
											<label for="answer224">Oui | Non</label>
											<br>
											<input type="text" name="answer224" value="<?= $answer224 ?>">	
										</div> 

										<div id="question">
											<h3>Souffrez-vous de névralgies ?</h3>
										</div>
										<div id="answer">
											<label for="answer225">Oui | Non</label>
											<br>
											<input type="text" name="answer225" value="<?= $answer225 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, depuis quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer226">Précisez</label>
											<br>
											<input type="text" name="answer226" value="<?= $answer226 ?>">
										</div>  

										<div id="question">
											<h3>Où sont-elles situées ? </h3>
										</div>
										<div id="answer">
											<label for="answer227">Précisez</label>
											<br>
											<input type="text" name="answer227" value="<?= $answer227 ?>">
										</div>

										<div id="question">
											<h3>Avez-vous des douleurs articulaires ?</h3>
										</div>
										<div id="answer">
											<label for="answer228">Oui | Non</label>
											<br>
											<input type="text" name="answer228" value="<?= $answer228 ?>">	
										</div>

										<div id="question">
											<h3>Où exactement ?</h3>
										</div>
										<div id="answer">
											<label for="answer229">Précisez</label>
											<br>
											<input type="text" name="answer229" value="<?= $answer229 ?>">
										</div> 

										<div id="question">
											<h3>Depuis quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer230">Précisez</label>
											<br>
											<input type="text" name="answer230" value="<?= $answer230 ?>">
										</div>  

										<div id="question">
											<h3>Est-ce une douleur constante ?</h3>
										</div>
										<div id="answer">
											<label for="answer231">Oui | Non</label>
											<br>
											<input type="text" name="answer231" value="<?= $answer231 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous déjà eu ou avez-vous une tendinite ?</h3>
										</div>
										<div id="answer">
											<label for="answer232">Oui | Non</label>
											<br>
											<input type="text" name="answer232" value="<?= $answer232 ?>">	
										</div> 

										<div id="question">
											<h3>Où est-elle située ?</h3>
										</div>
										<div id="answer">
											<label for="answer233">Précisez</label>
											<br>
											<input type="text" name="answer233" value="<?= $answer233 ?>">
										</div> 

										<div id="question">
											<h3>Depuis quand l’avez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer234">Précisez</label>
											<br>
											<input type="text" name="answer234" value="<?= $answer234 ?>">
										</div>

										<div id="question">
											<h3>Souffrez-vous d’ostéoporose ?</h3>
										</div>
										<div id="answer">
											<label for="answer235">Oui | Non</label>
											<br>
											<input type="text" name="answer235" value="<?= $answer235 ?>">	
										</div> 

										<h2>VII. SYSTEME PEAU ET PHANERE </h2>
										<label for="box10">systeme peau et phanere</label>

										<div id="question">
											<h3>Quelle est votre type de peau ?</h3>
										</div>
										<div id="answer">
											<label for="answer236">normal | sèche | grasse | mixte | acné</label>
											<br>
											<input type="text" name="answer236" value="<?= $answer236 ?>">
										</div>

										<div id="question">
											<h3>Comment la nettoyez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer237">lait nettoyant | crème nettoyante | huile nettoyante (jojoba, argan) | gel nettoyant | autre</label>
											<br>
											<input type="text" name="answer237" value="<?= $answer237 ?>">
										</div>

										<div id="question">
											<h3>A quelle fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer238">Précisez</label>
											<br>
											<input type="text" name="answer238" value="<?= $answer238 ?>">
										</div>

										<div id="question">
											<h3>Avec quels produits ?</h3>
										</div>
										<div id="answer">
											<label for="answer239">Précisez</label>
											<br>
											<input type="text" name="answer239" value="<?= $answer239 ?>">
										</div>

										<div id="question">
											<h3>Hydratez-vous la peau ?</h3>
										</div>
										<div id="answer">
											<label for="answer240">Oui | Non</label>
											<br>
											<input type="text" name="answer240" value="<?= $answer240 ?>">	
										</div>

										<div id="question">
											<h3>Avec quels produits ?</h3>
										</div>
										<div id="answer">
											<label for="answer241">Précisez</label>
											<br>
											<input type="text" name="answer241" value="<?= $answer241 ?>">
										</div> 

										<div id="question">
											<h3>Avez-vous la peau du corps sèche ?</h3>
										</div>
										<div id="answer">
											<label for="answer242">Oui | Non</label>
											<br>
											<input type="text" name="answer242" value="<?= $answer242 ?>">	
										</div>

										<div id="question">
											<h3>Souffrez-vous d’eczéma ?</h3>
										</div>
										<div id="answer">
											<label for="answer243">Oui | Non</label>
											<br>
											<input type="text" name="answer243" value="<?= $answer243 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, est-il plutôt :</h3>
										</div>
										<div id="answer">
											<label for="answer244">sec | suintant</label>
											<br>
											<input type="text" name="answer244" value="<?= $answer244 ?>">
										</div> 

										<div id="question">
											<h3>Souffrez- vous de psoriasis ?</h3>
										</div>
										<div id="answer">
											<label for="answer245">Oui | Non</label>
											<br>
											<input type="text" name="answer245" value="<?= $answer245 ?>">	
										</div> 

										<div id="question">
											<h3>Ressentez-vous des démangeaisons ?</h3>
										</div>
										<div id="answer">
											<label for="answer246">Oui | Non</label>
											<br>
											<input type="text" name="answer246" value="<?= $answer246 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous des rougeurs, couperoses ?</h3>
										</div>
										<div id="answer">
											<label for="answer247">Oui | Non</label>
											<br>
											<input type="text" name="answer247" value="<?= $answer247 ?>">	
										</div> 

										<div id="question">
											<h3>Avec quoi vous lavez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer248">gel douche | savon | huile lavante | autre</label>
											<br>
											<input type="text" name="answer248" value="<?= $answer248 ?>">
										</div>

										<div id="question">
											<h3>Quelles marques utilisez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer249">Précisez</label>
											<br>
											<input type="text" name="answer249" value="<?= $answer249 ?>">
										</div> 

										<div id="question">
											<h3>Faites-vous des gommages régulièrement ?</h3>
										</div>
										<div id="answer">
											<label for="answer250">Oui | Non</label>
											<br>
											<input type="text" name="answer250" value="<?= $answer250 ?>">	
										</div>

										<div id="question">
											<h3>Si oui, sur quelles parties du corps ?</h3>
										</div>
										<div id="answer">
											<label for="answer251">Précisez</label>
											<br>
											<input type="text" name="answer251" value="<?= $answer251 ?>">
										</div>  

										<div id="question">
											<h3>Quels types de produits utilisez-vous pour vos gommages (gant de crin, marc de café, produit cosmétique…) ?</h3>
										</div>
										<div id="answer">
											<label for="answer252">Précisez</label>
											<br>
											<input type="text" name="answer252" value="<?= $answer252 ?>">
										</div>

										<div id="question">
											<h3>A quelle fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer253">Précisez</label>
											<br>
											<input type="text" name="answer253" value="<?= $answer253 ?>">
										</div>  

										<div id="question">
											<h3>Faites-vous des brossages à sec ?</h3>
										</div>
										<div id="answer">
											<label for="answer254">Oui | Non</label>
											<br>
											<input type="text" name="answer254" value="<?= $answer254 ?>">	
										</div>

										<div id="question">
											<h3>Si oui à quelle fréquence ?</h3>
										</div>
										<div id="answer">
											<label for="answer255">Précisez</label>
											<br>
											<input type="text" name="answer255" value="<?= $answer255 ?>">
											
										</div> 

										<div id="question">
											<h3>Perdez-vous vos cheveux ?</h3>
										</div>
										<div id="answer">
											<label for="answer256">Oui | Non</label>
											<br>
											<input type="text" name="answer256" value="<?= $answer256 ?>">	
										</div>

										<div id="question">
											<h3>Depuis quand ?</h3>
										</div>
										<div id="answer">
											<label for="answer257">Précisez</label>
											<br>
											<input type="text" name="answer257" value="<?= $answer257 ?>">
										</div> 

										<div id="question">
											<h3>A quel endroit ?</h3>
										</div>
										<div id="answer">
											<label for="answer258">Précisez</label>
											<br>
											<input type="text" name="answer258" value="<?= $answer258 ?>">
										</div> 

										<div id="question">
											<h3>Sont-ils cassants ?</h3>
										</div>
										<div id="answer">
											<label for="answer259">Oui | Non</label>
											<br>
											<input type="text" name="answer259" value="<?= $answer259 ?>">	
										</div>

										<div id="question">
											<h3>Sont-ils ternes ?</h3>
										</div>
										<div id="answer">
											<label for="answer260">Oui | Non</label>
											<br>
											<input type="text" name="answer260" value="<?= $answer260 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous des pellicules ?</h3>
										</div>
										<div id="answer">
											<label for="answer261">Oui | Non</label>
											<br>
											<input type="text" name="answer261" value="<?= $answer261 ?>">	
										</div> 

										<div id="question">
											<h3>Quels shampoing et soin utilisez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer262">Précisez</label>
											<input type="text" name="answer262" value="<?= $answer262 ?>">
										</div> 

										<div id="question">
											<h3>Faites-vous des couleurs ?</h3>
										</div>
										<div id="answer">
											<label for="answer263">Oui | Non</label>
											<br>
											<input type="text" name="answer263" value="<?= $answer263 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui :</h3>
										</div>
										<div id="answer">
											<label for="answer264">coloration naturel | coloration ammoniaque</label>
											<br>
											<input type="text" name="answer264" value="<?= $answer264 ?>">
										</div>

										<div id="question">
											<h3>A quelle fréquence vous coupez-vous les cheveux ?</h3>
										</div>
										<div id="answer">
											<label for="answer265">Précisez</label>
											<br>
											<input type="text" name="answer265" value="<?= $answer265 ?>">
										</div> 

										<div id="question">
											<h3>Vos ongles sont plutôt : (plusieurs réponses possibles)</h3>
										</div>
										<div id="answer">
											<label for="answer266">cassants | dédoublés | durs | mous | striés | tâches</label>
											<br>
											<input type="text" name="answer266" value="<?= $answer266 ?>">
										</div>

										<div id="question">
											<h3>Posez-vous du vernis régulièrement ?</h3>
										</div>
										<div id="answer">
											<label for="answer267">Oui | Non</label>
											<br>
											<input type="text" name="answer267" value="<?= $answer267 ?>">	
										</div>  

										<div id="question">
											<h3>Si oui, quel type ?</h3>
										</div>
										<div id="answer">
											<label for="answer268">classique | semi-permanent | gel | capsule | faux ongles | autre</label>
											<br>
											<input type="text" name="answer268" value="<?= $answer268 ?>">
										</div>



										<div id="question">
											<h3>Avez-vous déjà eu des mycoses aux pieds et/ou mains ?</h3>
										</div>
										<div id="answer">
											<label for="answer269">Oui | Non</label>
											<br>
											<input type="text" name="answer269" value="<?= $answer269 ?>">	
										</div> 

										<div id="question">
											<h3>Vous maquillez vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer270">Oui | Non</label>
											<br>
											<input type="text" name="answer270" value="<?= $answer270 ?>">	
										</div>   

										<div id="question">
											<h3>Quelles zones maquillez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer271">teint | yeux | paupière | lèvre</label>
											<br>
											<input type="text" name="answer271" value="<?= $answer271 ?>">
										</div>

										<div id="question">
											<h3>Quelles marques utilisez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer272">bio | grande distribution (L’Oréal, Gemey Maybeline, etc.) | magasin spécialisé (Sephora, Yves Rocher, Chanel, Dior, etc.) | pharmacie</label>
											<br>
											<input type="text" name="answer272" value="<?= $answer272 ?>">
										</div> 

										<div id="question">
											<h3>Combien de fois par semaine ?</h3>
										</div>
										<div id="answer">
											<label for="answer273">Précisez</label>
											<br>
											<input type="text" name="answer273" value="<?= $answer273 ?>">
											
										</div> 

										<div id="question">
											<h3>Quels produits de maquillage utilisez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer274">Précisez</label>
											<br>
											<input type="text" name="answer274" value="<?= $answer274 ?>" >
										</div>

										<div id="question">
											<h3>Etat général de votre dentition sur une échelle de 0 à 10 (0 très mauvais état, 10 excellent état) ?</h3>
										</div>
										<div id="answer">
											<label for="answer275">Précisez</label>
											<br>
											<input type="text" name="answer275" value="<?= $answer275 ?>" >
										</div> 

										<div id="question">
											<h3>Vos dents sont-elles plutôt :</h3>
										</div>
										<div id="answer">
											<label for="answer276">sensibles | fragiles | cariées | autre</label>
											<br>
											<input type="text" name="answer276" value="<?= $answer276 ?>">
										</div>

										<div id="question">
											<h3>Avez-vous régulièrement des soucis au niveau des gencives (douleurs, saignements…) ?</h3>
										</div>
										<div id="answer">
											<label for="answer277">Oui | Non</label>
											<br>
											<input type="text" name="answer277" value="<?= $answer277 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous souvent des aphtes ?</h3>
										</div>
										<div id="answer">
											<label for="answer278">Oui | Non</label>
											<br>
											<input type="text" name="answer278" value="<?= $answer278 ?>">	
										</div>

										<div id="question">
											<h3>Avez-vous des amalgames dentaires, plombages ?</h3>
										</div>
										<div id="answer">
											<label for="answer279">Oui | Non</label>
											<br>
											<input type="text" name="answer279" value="<?= $answer279 ?>">	
										</div>   

										<div id="question">
											<h3>Si oui, combien ?</h3>
										</div>
										<div id="answer">
											<label for="answer280">Précisez</label>
											<br>
											<input type="text" name="answer280" value="<?= $answer280 ?>" >
										</div>  

										<h2>VIII.	SYSTEME EMOTIONEL ET VIATLITE</h2>
										<label for="box11">systeme emotionel et vitalité</label>

										<div id="question">
											<h3>Sur une échelle de 1 à 10, comment évalueriez-vous votre vitalité ?</h3>
										</div>
										<div id="answer">
											<label for="answer281">Précisez</label>
											<br>
											<input type="text" name="answer281" value="<?= $answer281 ?>" >
										</div> 

										<div id="question">
											<h3>Sur une échelle de 1 à 10, comment évalueriez-vous votre moral ?</h3>
										</div>
										<div id="answer">
											<label for="answer282">Précisez</label>
											<br>
											<input type="text" name="answer282" value="<?= $answer282 ?>" >
										</div> 

										<div id="question">
											<h3>Sur une échelle de 1 à 10, comment évalueriez-vous votre stress ?</h3>
										</div>
										<div id="answer">
											<label for="answer283">Précisez</label>
											<br>
											<input type="text" name="answer283" value="<?= $answer283 ?>" >
										</div>  

										<div id="question">
											<h3>Ressentez-vous du stress dans votre sphère professionnelle ? amicale ? familiale ?</h3>
										</div>
										<div id="answer">
											<label for="answer284">Précisez</label>
											<br>
											<input type="text" name="answer284" value="<?= $answer284 ?>" >
										</div> 

										<div id="question">
											<h3>Comment ce stress ce manifeste-t-il ?</h3>
										</div>
										<div id="answer">
											<label for="answer285">tensions musculaires | problèmes digestifs et/ou intestinaux | troubles du sommeil | fatigue | maux de tête | migraine | autre</label>
											<br>
											<input type="text" name="answer285" value="<?= $answer285 ?>">
										</div>

										<div id="question">
											<h3>Comment vous sentez vous en ce moment ?</h3>
										</div>
										<div id="answer">
											<label for="answer286">fatigué(e) | sans motivation | en forme | motivé(e) | enthousiaste | résigné(e) | soucieux(se) | à fleur de peau | autre</label>
											<br>
											<input type="text" name="answer286" value="<?= $answer286 ?>">
										</div>

										<div id="question">
											<h3>De manière générale, vous sentez vous épanoui dans votre vie ?</h3>
										</div>
										<div id="answer">
											<label for="answer287">Oui | Non</label>
											<br>
											<input type="text" name="answer287" value="<?= $answer287 ?>">	
										</div> 


										<div id="question">
											<h3>Comment vous caractérisez-vous de manière générale ?</h3>
										</div>
										<div id="answer">
											<label for="answer288">Anxieux(se) | angoissé(e) | Serein(e) | Optimiste | Pessimiste | Joyeux(se) | Triste | Nerveux(se) | Calme | Introverti(e) | Extraverti(e) | Dynamique | sans motivation | Fatigué | En pleine forme</label>
											<br>
											<input type="text" name="answer288" value="<?= $answer288 ?>">
										</div>

										<div id="question">
											<h3>Avez-vous déjà fait un burn-out ?</h3>
										</div>
										<div id="answer">
											<label for="answer289">Oui | Non</label>
											<br>
											<input type="text" name="answer289" value="<?= $answer289 ?>">	
										</div> 

										<div id="question">
											<h3>Êtes-vous sujet aux dépressions ?</h3>
										</div>
										<div id="answer">
											<label for="answer290">Oui | Non</label>
											<br>
											<input type="text" name="answer290" value="<?= $answer290 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous déjà été traité pour dépression ?</h3>
										</div>
										<div id="answer">
											<label for="answer291">Oui | Non</label>
											<br>
											<input type="text" name="answer291" value="<?= $answer291 ?>">	
										</div>  

										<div id="question">
											<h3>Avez-vous déjà été suivi par un psychologue, psychiatre ?</h3>
										</div>
										<div id="answer">
											<label for="answer292">Oui | Non</label>
											<br>
											<input type="text" name="answer292" value="<?= $answer292 ?>">	
										</div> 

										<h2>IX.	SOMMEIL</h2>
										<label for="box12">sommeil</label>
										 
										 <div id="question">
											<h3>Sur une échelle de 1 à 10, concernant la qualité de votre sommeil, quelle note vous attribueriez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer293">Précisez</label>
											<br>
											<input type="text" name="answer293" value="<?= $answer293 ?>">	
										</div> 

										<div id="question">
											<h3>Sur une échelle de 1 à 10, quel est votre niveau d’énergie au réveil ?</h3>
										</div>
										<div id="answer">
											<label for="answer294">Précisez</label>
											<br>
											<input type="text" name="answer294" value="<?= $answer294 ?>">	
										</div> 

										<div id="question">
											<h3>A quelle heure vous couchez-vous en semaine ?</h3>
										</div>
										<div id="answer">
											<label for="answer295">Précisez</label>
											<br>
											<input type="text" name="answer295" value="<?= $answer295 ?>">	
										</div>

										<div id="question">
											<h3>le week-end ?</h3>
										</div>
										<div id="answer">
											<label for="answer296">Précisez</label>
											<br>
											<input type="text" name="answer296" value="<?= $answer296 ?>">	
										</div> 

										<div id="question">
											<h3>A quelle heure vous levez-vous en semaine ?</h3>
										</div>
										<div id="answer">
											<label for="answer297">Précisez</label>
											<br>
											<input type="text" name="answer297" value="<?= $answer297 ?>">	
										</div>  

										<div id="question">
											<h3>le week-end ?</h3>
										</div>
										<div id="answer">
											<label for="answer298">Précisez</label>
											<br>
											<input type="text" name="answer298" value="<?= $answer298 ?>">	
										</div> 

										<div id="question">
											<h3>Quelles sont vos habitudes précédant le coucher ?</h3>
										</div>
										<div id="answer">
											<label for="answer299">lecture | musique | télévision | téléphone | méditation | autre</label>
										</div>

										<div id="question">
											<h3>Combien d’heures de sommeil pensez-vous avoir besoin pour être en forme ?</h3>
										</div>
										<div id="answer">
											<label for="answer300">Précisez</label>
											<br>
											<input type="text" name="answer300" value="<?= $answer300 ?>">	
										</div> 

										<div id="question">
											<h3>Avez-vous des problèmes de sommeil ?</h3>
										</div>
										<div id="answer">
											<label for="answer301">Oui | Non</label>
											<br>
											<input type="text" name="answer301" value="<?= $answer301 ?>">	
										</div>  

										<div id="question">
											<h3>Si oui lesquels ?</h3>
										</div>
										<div id="answer">
											<label for="answer302">difficultés d’endormissement | réveils nocturnes fréquents | réveil trop précoce | sommeil de mauvaise qualité (agitation, cauchemars, etc.) | ruminations mentales | autre</label>
											<br>
											<input type="text" name="answer302" value="<?= $answer302 ?>">
										</div>

										<div id="question">
											<h3>A quelle fréquence(en cas de réveils nocturnes)  ?</h3>
										</div>
										<div id="answer">
											<label for="answer303">plusieurs fois par nuit | une fois par nuit | plusieurs fois par semaine | une fois par semaine</label>
											<br>
											<input type="text" name="answer303" value="<?= $answer303 ?>">
										</div> 


										<div id="question">
											<h3>À quelle heure ?</h3>
										</div>
										<div id="answer">
											<label for="answer304">Précisez</label>
											<br>
											<input type="text" name="answer304" value="<?= $answer304 ?>">	
										</div> 


										<div id="question">
											<h3>Y a-t-il des facteurs externes de réveils nocturnes (nourrissons, besoin d’aller aux toilettes, etc.) ?</h3>
										</div>
										<div id="answer">
											<label for="answer305">Oui | Non</label>
											<br>
											<input type="text" name="answer305" value="<?= $answer305 ?>">	
										</div> 

										<div id="question">
											<h3>Faites-vous une sieste pendant la journée ?</h3>
										</div>
										<div id="answer">
											<label for="answer306">Oui | Non</label>
											<br>
											<input type="text" name="answer306" value="<?= $answer306 ?>">	
										</div>  

										<div id="question">
											<h3>Si oui, combien de fois par semaine ?</h3>
										</div>
										<div id="answer">
											<label for="answer307">Précisez</label>
											<br>
											<input type="text" name="answer307" value="<?= $answer307 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, combien de temps en moyenne ?</h3>
										</div>
										<div id="answer">
											<label for="answer308">Précisez</label>
											<br>
											<input type="text" name="answer308" value="<?= $answer308 ?>">	
										</div>

										<div id="question">
											<h3>Ressentez-vous des moments de fatigue, au cours de votre journée ?</h3>
										</div>
										<div id="answer">
											<label for="answer309">Oui | Non</label>
											<br>
											<input type="text" name="answer309" value="<?= $answer309 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, à quel moment ?</h3>
										</div>
										<div id="answer">
											<label for="answer310">Précisez</label>
											<br>
											<input type="" name="answer310" value="<?= $answer310 ?>">
										</div> 

										<div id="question">
											<h3>Avez-vous recours à des médicaments (zolpidem, donormyl, etc.)  ou compléments alimentaires (mélatonine, valériane, camomille, etc.) pour dormir ?</h3>
										</div>
										<div id="answer">
											<label for="answer311">Oui | Non</label>
											<br>
											<input type="text" name="answer311" value="<?= $answer311 ?>">	
										</div> 

										<div id="question">
											<h3>Si oui, lequel/lesquels ?</h3>
										</div>
										<div id="answer">
											<label for="answer312">Précisez</label>
											<br>
											<input type="text" name="answer312" value="<?= $answer312 ?>">	
										</div> 

										<div id="question">
											<h3>Ronflez-vous ?</h3>
										</div>
										<div id="answer">
											<label for="answer313">Précisez</label>
											<br>
											<input type="text" name="answer313" value="<?= $answer313 ?>">	
										</div> 

										<div id="question">
											<h3>Faites-vous du bruxisme la nuit ?</h3>
										</div>
										<div id="answer">
											<label for="answer314">Oui | Non</label>
											<br>
											<input type="text" name="answer314" value="<?= $answer314 ?>">	
										</div> 

										<div id="question">
											<h3>Souffrez-vous du syndrome des jambes sans repos, crampes ?</h3>
										</div>
										<div id="answer">
											<label for="answer315">Oui | Non</label>
											<br>
											<input type="text" name="answer315" value="<?= $answer315 ?>">	
										</div>  

										<div id="question">
											<h3>Souffrez-vous d’apnée du sommeil ?</h3>
										</div>
										<div id="answer">
											<label for="answer316">Oui | Non</label>
											<br>
											<input type="text" name="answer316" value="<?= $answer316 ?>">	
										</div>   

										<div id="question">
											<h3>Si oui, êtes-vous appareillé ?</h3>
										</div>
										<div id="answer">
											<label for="answer317">Oui | Non</label>
											<br>
											<input type="text" name="answer317" value="<?= $answer317 ?>">	
										</div>
									</div>
							<?php
								}
							?>
						</div>
					</center>

					<input id="updateThisBilanTwoAnswerButton" type="submit" name="sendThisToClient" value="Mettre a jour">
				</div>
			</form>
					<button id="updateThisBilanTwoAnswerButton">Télécharger</button>
					<button id="updateThisBilanTwoAnswerButton">Terminer</button>
					
			</div>
			<script type="text/javascript" src="view/importThisBilanTwoAnswersSubmittedByClient/main.js"></script>
		</body>
	</html>

<?php
	}

	else
	{
		header("location:index.php");
	}


?>