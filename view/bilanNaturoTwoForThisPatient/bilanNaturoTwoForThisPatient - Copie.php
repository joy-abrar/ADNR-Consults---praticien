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
			<title>Praticien - Bilan Naturo 2</title>
			<link rel="icon" type="image/png" href="images/logo.png" />
			<link rel="stylesheet" type="text/css" href="style.css?version=1">
			<link rel="stylesheet" type="text/css" href="../../lib/css/styleMenubar.css?version=1">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script src="https://kit.fontawesome.com/1bd3419ec6.js" crossorigin="anonymous"></script>
			<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		</head>
		<body id="body">
			<!------------ LOADING SCREEN ------------->
			<div class="se-pre-con"></div>	
			<!----------------------------------------->

			<?php
				include_once('../../lib/topMenu1.php');
				include_once('../../lib/sideMenu1.php');
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

			<h2 id="testTitle">BILAN NATURO 2</h2>
			<form method="POST" action="../../index.php?action=sendThisBilanForMyClientToFillUp">
				<div id="naturoSheetBloc">	

					<center>
						<div id="bloc1">
							<h2>A PROPOS DU CLIENT</h2>
							<label for="box1">1. Antécédents</label>
							<input type="checkBox" name="box1" value="1">
							<div id="blocOneContentShape">
								
								<div id="question">
									<h3>Prenez-vous un/des traitement(s) médicamenteux?</h3>
								</div>
								<div id="answer">
									<label for="answer1">Oui</label>
									<input type="radio" name="answer1" value="oui" disabled>
									<label for="answer1">Non</label>
									<input type="radio" name="answer1" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, lesquels ? </h3>
								</div>
								<div id="answer">
									<label for="answer2">anxiolytiques </label>
									<input type="radio" name="answer2" value="anxiolytiques" disabled>
									<label for="answer2">antidépresseurs </label>
									<input type="radio" name="answer2" value="antidépresseurs" disabled>
									<label for="answer2">antalgique  </label>
									<input type="radio" name="answer2" value="antalgique " disabled>
									<label for="answer2">anti-inflammatoire </label>
									<input type="radio" name="answer2" value="anti-inflammatoire" disabled>
									<label for="answer2">somnifères</label>
									<input type="radio" name="answer2" value="somnifères" disabled>
									<label for="answer2">laxatifs</label>
									<input type="radio" name="answer2" value="laxatifs" disabled>
									<label for="answer2">autre</label>
									<input type="radio" name="answer2" value="autre" disabled>	
								</div>

								<div id="question">
									<h3>Depuis combien de temps?</h3>
								</div>
								<div id="answer">
									<input type="text" name="answer3" readonly>	
								</div>

								<div id="question">
									<h3>Prenez-vous des compléments alimentaires ?</h3>
								</div>
								<div id="answer">
									<label for="answer4">Oui</label>
									<input type="radio" name="answer4" value="oui" disabled>
									<label for="answer4">Non</label>
									<input type="radio" name="answer4" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, lesquels ? </h3>
								</div>
								<div id="answer">
									<label for="answer5">vitamines</label>
									<input type="radio" name="answer5" value="vitamines" disabled>
									<label for="answer5">probiotiques</label>
									<input type="radio" name="answer5" value="probiotiques" disabled>
									<label for="answer5">magnésium</label>
									<input type="radio" name="answer5" value="magnésium" disabled>
									<label for="answer5">autre</label>
									<input id="other5" type="radio" name="answer5" value="other" onclick="enableBox('5')">
									<input id="otheranswer5" type="text" name="answer5" onchange="changeradioother('5')" disabled>	
								</div>

								<div id="question">
									<h3>Depuis combien de temps?</h3>
								</div>
								<div id="answer6">
									<input type="text" name="answer6" readonly>	
								</div>

								<div id="question">
									<h3>Etes-vous suivi par un médecin généraliste?</h3>
								</div>
								<div id="answer">
									<label for="answer7">Oui</label>
									<input type="radio" name="answer7" value="oui" disabled>
									<label for="answer7">Non</label>
									<input type="radio" name="answer7" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Quel est son nom?</h3>
								</div>
								<div id="answer8">
									<input type="text" name="answer8" readonly>	
								</div>

								<div id="question">
									<h3>Combien de fois par an le consultez-vous ?</h3>
								</div>
								<div id="answer">
									<label for="answer9">moins d’une fois/an</label>
									<input type="radio" name="answer9" value="moins d’une fois/an" disabled>
									<label for="answer9">plusieurs fois par an</label>
									<input type="radio" name="answer9" value="plusieurs fois par an" disabled>
									<label for="answer9">1 fois par trimestre</label>
									<input type="radio" name="answer9" value="1 fois par trimestre" disabled>
									<label for="answer9">1 fois par mois</label>
									<input type="radio" name="answer9" value="1 fois par mois" disabled>	
								</div>

								<div id="question">
									<h3>Avez-vous fait un bilan sanguin dernièrement ?</h3>
								</div>
								<div id="answer">
									<label for="answer10">Oui</label>
									<input type="radio" name="answer10" value="oui" disabled>
									<label for="answer10">Non</label>
									<input type="radio" name="answer10" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Quels ont été les résultats?</h3>
								</div>
								<div id="answer">
									<label for="answer11">Rien à signaler</label>
									<input type="radio" name="answer11" value="Rien à signaler" disabled>
									<label for="answer11">cholestérol</label>
									<input type="radio" name="answer11" value="cholestérol" disabled>
									<label for="answer11">diabète</label>
									<input type="radio" name="answer11" value="diabète" disabled>
									<label for="answer11">carence en fer</label>
									<input type="radio" name="answer11" value="carence en fer" disabled>
									<label for="answer11">autre</label>
									<input type="text" name="answer11" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Vos vaccinations sont-elles à jour ? </h3>
								</div>
								<div id="answer">
									<label for="answer12">Oui</label>
									<input type="radio" name="answer12" value="oui" disabled>
									<label for="answer12">Non</label>
									<input type="radio" name="answer12" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Avez-vous été souvent sous antibiothérapie ?</h3>
								</div>
								<div id="answer">
									<label for="answer13">Oui</label>
									<input type="radio" name="answer13" value="oui" disabled>
									<label for="answer13">Non</label>
									<input type="radio" name="answer13" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Avez-vous pris des antibiotiques sur du long terme (plus de 3 semaines consécutives) ?</h3>
								</div>
								<div id="answer">
									<label for="answer14">Oui</label>
									<input type="radio" name="answer14" value="oui" disabled>
									<label for="answer14">Non</label>
									<input type="radio" name="answer14" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Avez-vous réalisé des examens de santé durant les 6 derniers mois ?</h3>
								</div>
								<div id="answer">
									<label for="answer15">Oui</label>
									<input type="radio" name="answer15" value="oui" disabled>
									<label for="answer15">Non</label>
									<input type="radio" name="answer15" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Pour quelles raisons? </h3>
								</div>
								<div id="answer">
									<label for="answer16">Précisez</label>
									<input type="text" name="answer16" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Etes-vous suivi par un/des spécialiste(s) ?</h3>
								</div>
								<div id="answer">
									<label for="answer17">Oui</label>
									<input type="radio" name="answer17" value="oui" disabled>
									<label for="answer17">Non</label>
									<input type="radio" name="answer17" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, par quels spécialistes ?</h3>
								</div>
								<div id="answer">
									<label for="answer18">ostéopathe</label>
									<input type="radio" name="answer18" value="ostéopathe" disabled>
									<label for="answer18">kinésiologue</label>
									<input type="radio" name="answer18" value="kinésiologue" disabled>
									<label for="answer18">gastro-entérologue</label>
									<input type="radio" name="answer18" value="gastro-entérologue" disabled>
									<label for="answer18">cendocrinologue</label>
									<input type="radio" name="answer18" value="endocrinologue" disabled>
									<label for="answer18">kinésithérapeute</label>
									<input type="radio" name="answer18" value="kinésithérapeute" disabled>
									<label for="answer18">cardiologue</label>
									<input type="radio" name="answer18" value="cardiologue" disabled>
									<label for="answer18">psychologue</label>
									<input type="radio" name="answer18" value="psychologue" disabled>
									<label for="answer18">psychiatre</label>
									<input type="radio" name="answer18" value="psychiatre" disabled>
									<label for="answer18">autre</label>
									<input type="text" name="answer18" placeholder="Précisez..." disabled>
								</div>


								<div id="question">
									<h3>Quel est son nom ?</h3>
								</div>
								<div id="answer">
									<label for="answer19">Précisez</label>
									<input type="text" name="answer19" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Souffrez-vous d’une pathologie spécifique ?</h3>
								</div>
								<div id="answer">
									<label for="answer20">Oui</label>
									<input type="radio" name="answer20" value="oui" disabled>
									<label for="answer20">Non</label>
									<input type="radio" name="answer20" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui laquelle/lesquelles ?</h3>
								</div>
								<div id="answer">
									<label for="answer21">Précisez</label>
									<input type="text" name="answer21" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Avez-vous des allergies ?</h3>
								</div>
								<div id="answer">
									<label for="answer22">Oui</label>
									<input type="radio" name="answer22" value="oui" disabled>
									<label for="answer22">Non</label>
									<input type="radio" name="answer22" value="non" disabled>	
								</div> 

								<div id="question">
									<h3>Si oui, quelle(s) type(s) d’allergies?</h3>
								</div>
								<div id="answer">
									<label for="answer23">Alimentaires</label>
									<input type="radio" name="answer23" value="Alimentaires" disabled>
									<label for="answer23">graminées</label>
									<input type="radio" name="answer23" value="graminées" disabled>
									<label for="answer23">poils</label>
									<input type="radio" name="answer23" value="poils" disabled>
									<label for="answer23">acariens</label>
									<input type="radio" name="answer23" value="acariens" disabled>
									<label for="answer23">médicaments</label>
									<input type="radio" name="answer23" value="médicaments" disabled>
									<label for="answer23">autre</label>
									<input type="text" name="answer23" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Avez-vous déjà fait des séances de désensibilisation ?</h3>
								</div>
								<div id="answer">
									<label for="answer24">Oui</label>
									<input type="radio" name="answer24" value="oui" disabled>
									<label for="answer24">Non</label>
									<input type="radio" name="answer24" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, quand ?</h3>
								</div>
								<div id="answer">
									<label for="answer25">Précisez</label>
									<input type="text" name="answer25" placeholder="Précisez..." disabled>
								</div>


								<div id="question">
									<h3>Avez-vous subi des interventions chirurgicales sur les 6 derniers mois ?</h3>
								</div>
								<div id="answer">
									<label for="answer26">Oui</label>
									<input type="radio" name="answer26" value="oui" disabled>
									<label for="answer26">Non</label>
									<input type="radio" name="answer26" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, précisez</h3>
								</div>
								<div id="answer">
									<label for="answer27">Précisez</label>
									<input type="text" name="answer27" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Avez-vous déjà eu un accident de la route ?</h3>
								</div>
								<div id="answer">
									<label for="answer28">Oui</label>
									<input type="radio" name="answer28" value="oui" disabled>
									<label for="answer28">Non</label>
									<input type="radio" name="answer28" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Avez-vous déjà eu un accident de travail ?</h3>
								</div>
								<div id="answer">
									<label for="answer29">Oui</label>
									<input type="radio" name="answer29" value="oui" disabled>
									<label for="answer29">Non</label>
									<input type="radio" name="answer29" value="non" disabled>	
								</div>		


								<div id="question">
									<h3>Avez-vous vécu un évènement marquant ?</h3>
								</div>
								<div id="answer">
									<label for="answer30">Oui</label>
									<input type="radio" name="answer30" value="oui" disabled>
									<label for="answer30">Non</label>
									<input type="radio" name="answer30" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Quels sont vos antécédents familiaux ?</h3>
								</div>
								<div id="answer">
									<label for="answer31">Cancer</label>
									<input type="radio" name="answer31" value="Cancer" disabled>
									<label for="answer31">diabète</label>
									<input type="radio" name="answer31" value="diabète" disabled>
									<label for="answer31">cholestérol</label>
									<input type="radio" name="answer31" value="cholestérol" disabled>
									<label for="answer31">hypertension</label>
									<input type="radio" name="answer31" value="hypertension" disabled>
									<label for="answer31">autre</label>
									<input type="text" name="answer31" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Origine des antécédents ?</h3>
								</div>
								<div id="answer">
									<label for="answer32">Côté maternel</label>
									<input type="radio" name="answer32" value="Côté maternel" disabled>
									<label for="answer32">côté paternel</label>
									<input type="radio" name="answer32" value="côté paternel" disabled>	
								</div>


								<label for="box2">2. Lieu de vie, loisirs</label>
								<input type="checkBox" name="box2" value="2">

								<div id="question">
									<h3>Vous vivez :</h3>
								</div>
								<div id="answer">
									<label for="answer33">En ville</label>
									<input type="radio" name="answer33" value="En ville" disabled>
									<label for="answer33">A la campagne</label>
									<input type="radio" name="answer33" value="A la campagne" disabled>
									<label for="answer33">en bord de mer</label>
									<input type="radio" name="answer33" value="en bord de mer" disabled>
									<label for="answer33">A la montagne</label>
									<input type="radio" name="answer33" value="A la montagne" disabled>	
								</div>



								<div id="question">
									<h3>Vous êtes :</h3>
								</div>
								<div id="answer">
									<label for="answer34">En couple</label>
									<input type="radio" name="answer34" value="En couple" disabled>
									<label for="answer34">Divorcé</label>
									<input type="radio" name="answer34" value="Divorcé" disabled>
									<label for="answer34">Veuf(ve)</label>
									<input type="radio" name="answer34" value="Veuf(ve)" disabled>
									<label for="answer34">A la montagne</label>
									<input type="radio" name="answer34" value="A la montagne" disabled>	
								</div>


								<div id="question">
									<h3>Avez-vous des enfants ?</h3>
								</div>
								<div id="answer">
									<label for="answer35">Oui</label>
									<input type="radio" name="answer35" value="oui" disabled>
									<label for="answer35">Non</label>
									<input type="radio" name="answer35" value="non" disabled>	
								</div>


								<div id="question">
									<h3>Si oui, combien ?</h3>
								</div>
								<div id="answer">
									<label for="answer36">Précisez</label>
									<input type="number" name="answer36" placeholder="nombre d'enfants..." disabled>
								</div>

								<div id="question">
									<h3>Quels âges ont-ils ?</h3>
								</div>
								<div id="answer">
									<label for="answer37">Précisez</label>
									<input type="text" name="answer37" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Avez-vous des animaux de compagnie ?</h3>
								</div>
								<div id="answer">
									<label for="answer38">Oui</label>
									<input type="radio" name="answer38" value="oui" disabled>
									<label for="answer38">Non</label>
									<input type="radio" name="answer38" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Aimez-vous votre environnement de vie ?</h3>
								</div>
								<div id="answer">
									<label for="answer39">Oui</label>
									<input type="radio" name="answer39" value="oui" disabled>
									<label for="answer39">Non</label>
									<input type="radio" name="answer39" value="non" disabled>	
								</div>


								<div id="question">
									<h3>Rencontrez-vous un stress ou une pression dans votre environnement familial ?</h3>
								</div>
								<div id="answer">
									<label for="answer40">Oui</label>
									<input type="radio" name="answer40" value="oui" disabled>
									<label for="answer40">Non</label>
									<input type="radio" name="answer40" value="non" disabled>	
								</div>
								
								<div id="question">
									<h3>Décrivez une journée</h3>
								</div>
								<div id="answer">
									<label for="answer41">Décrivez</label>
									<input type="text" name="answer41" placeholder="Décrivez..." disabled>
								</div>	


								<div id="question">
									<h3>Pensez-vous à aérer vos pièces de vie quotidiennement ?</h3>
								</div>
								<div id="answer">
									<label for="answer42">Oui</label>
									<input type="radio" name="answer42" value="oui" disabled>
									<label for="answer42">Non</label>
									<input type="radio" name="answer42" value="non" disabled>	
								</div>


								<div id="question">
									<h3>Utilisez-vous dans votre quotidien des produits naturels et/ou bio ?</h3>
								</div>
								<div id="answer">
									<label for="answer43">Oui</label>
									<input type="radio" name="answer43" value="oui" disabled>
									<label for="answer43">Non</label>
									<input type="radio" name="answer43" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Prenez-vous du temps pour vous ?</h3>
								</div>
								<div id="answer">
									<label for="answer44">Oui</label>
									<input type="radio" name="answer44" value="oui" disabled>
									<label for="answer44">Non</label>
									<input type="radio" name="answer44" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Avez-vous des loisirs ?</h3>
								</div>
								<div id="answer">
									<label for="answer45">Oui</label>
									<input type="radio" name="answer45" value="oui" disabled>
									<label for="answer45">Non</label>
									<input type="radio" name="answer45" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, lesquels ?</h3>
								</div>
								<div id="answer">
									<label for="answer46">Précisez</label>
									<input type="text" name="answer46" placeholder="Précisez..." disabled>
								</div>


								<div id="question">
									<h3>A quelle fréquence, pratiquez-vous vos loisirs ?</h3>
								</div>
								<div id="answer">
									<label for="answer47">Quotidiennement</label>
									<input type="radio" name="answer47" value="Quotidiennement" disabled>
									<label for="answer47">plusieurs fois par semaine</label>
									<input type="radio" name="answer47" value="plusieurs fois par semaine" disabled>
									<label for="answer47">une fois par semaine</label>
									<input type="radio" name="answer47" value="une fois par semaine" disabled>
									<label for="answer47">autre</label>
									<input type="text" name="answer47" placeholder="Précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Pratiquez-vous une activité physique ?</h3>
								</div>
								<div id="answer">
									<label for="answer48">Oui</label>
									<input type="radio" name="answer48" value="oui" disabled>
									<label for="answer48">Non</label>
									<input type="radio" name="answer48" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Laquelle/lesquelles ?</h3>
								</div>
								<div id="answer">
									<label for="answer49">Précisez</label>
									<input type="text" name="answer49" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Combien de fois par semaine ?</h3>
								</div>
								<div id="answer">
									<label for="answer50">Précisez</label>
									<input type="text" name="answer50" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Quelles sont vos activités en vacances ?</h3>
								</div>
								<div id="answer">
									<label for="answer51">Restaurants</label>
									<input type="radio" name="answer51" value="Restaurants" disabled>
									<label for="answer51">Randonnée</label>
									<input type="radio" name="answer51" value="Randonnée" disabled>
									<label for="answer51">promenade</label>
									<input type="radio" name="answer51" value="promenade" disabled>
									<label for="answer51">ski</label>
									<input type="radio" name="answer51" value="ski" disabled>
									<label for="answer51">plage</label>
									<input type="radio" name="answer51" value="plage" disabled>
									<label for="answer51">massage</label>
									<input type="radio" name="answer51" value="massage" disabled>
									<label for="answer51">détente</label>
									<input type="radio" name="answer51" value="détente" disabled>
									<label for="answer51">autre</label>
									<input type="text" name="answer51" placeholder="Précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Combien de fois par an prenez-vous des vacances ?</h3>
								</div>
								<div id="answer">
									<label for="answer52">Précisez</label>
									<input type="number" name="answer52" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Vous sentez vous reposé une fois rentrer de vacances ?</h3>
								</div>
								<div id="answer">
									<label for="answer52">Oui</label>
									<input type="radio" name="answer52" value="oui" disabled>
									<label for="answer52">Non</label>
									<input type="radio" name="answer52" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Quels sont vos rêves, vos projets ?</h3>
								</div>
								<div id="answer">
									<label for="answer53">Précisez</label>
									<input type="number" name="answer53" placeholder="Précisez..." disabled>
								</div>

								<label for="box2">3. Vie professionnelle</label>
								<input type="checkBox" name="box3" value="3">

								<div id="question">
									<h3>Quelle est votre profession ?</h3>
								</div>
								<div id="answer">
									<label for="answer54">Précisez</label>
									<input type="text" name="answer54" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Depuis quand l’exercez-vous ?</h3>
								</div>
								<div id="answer">
									<label for="answer55">Précisez</label>
									<input type="text" name="answer55" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Quels sont vos précédentes activités professionnelles ?</h3>
								</div>
								<div id="answer">
									<label for="answer56">Précisez</label>
									<input type="text" name="answer56" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Etes-vous épanoui dans votre activité professionnelle ?</h3>
								</div>
								<div id="answer">
									<label for="answer57">Oui</label>
									<input type="radio" name="answer57" value="oui" disabled>
									<label for="answer57">Non</label>
									<input type="radio" name="answer57" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Combien d’heures par semaine travaillez-vous ?</h3>
								</div>
								<div id="answer">
									<label for="answer58">Précisez</label>
									<input type="number" name="answer58" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Quelle est l’amplitude horaire ?</h3>
								</div>
								<div id="answer">
									<label for="answer59">Précisez</label>
									<input type="text" name="answer59" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Vous travaillez :</h3>
								</div>
								<div id="answer">
									<label for="answer60">en extérieur</label>
									<input type="radio" name="answer60" value="en extérieur" disabled>
									<label for="answer60">en intérieur</label>
									<input type="radio" name="answer60" value="en intérieur" disabled>
									<label for="answer60">les deux</label>
									<input type="radio" name="answer60" value="les deux" disabled>
								</div>

								<div id="question">
									<h3>Etes-vous en position assise toute la journée ?</h3>
								</div>
								<div id="answer">
									<label for="answer61">Oui</label>
									<input type="radio" name="answer61" value="oui" disabled>
									<label for="answer61">Non</label>
									<input type="radio" name="answer61" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Bougez-vous régulièrement ?</h3>
								</div>
								<div id="answer">
									<label for="answer62">Oui</label>
									<input type="radio" name="answer62" value="oui" disabled>
									<label for="answer62">Non</label>
									<input type="radio" name="answer62" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Etes-vous face à un écran toute la journée ?</h3>
								</div>
								<div id="answer">
									<label for="answer63">Oui</label>
									<input type="radio" name="answer63" value="oui" disabled>
									<label for="answer63">Non</label>
									<input type="radio" name="answer63" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Etes-vous exposer à des produits chimiques ?</h3>
								</div>
								<div id="answer">
									<label for="answer64">Oui</label>
									<input type="radio" name="answer64" value="oui" disabled>
									<label for="answer64">Non</label>
									<input type="radio" name="answer64" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Portez-vous des charges lourdes ?</h3>
								</div>
								<div id="answer">
									<label for="answer65">Oui</label>
									<input type="radio" name="answer65" value="oui" disabled>
									<label for="answer65">Non</label>
									<input type="radio" name="answer65" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Est-ce que vous effectué des mouvements répétés ?</h3>
								</div>
								<div id="answer">
									<label for="answer66">Oui</label>
									<input type="radio" name="answer66" value="oui" disabled>
									<label for="answer66">Non</label>
									<input type="radio" name="answer66" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Quels types de mouvements ?</h3>
								</div>
								<div id="answer">
									<label for="answer67">Précisez</label>
									<input type="text" name="answer67" placeholder="Précisez..." disabled>
								</div>

								<div id="question">
									<h3>Ressentez-vous stress au travail ?</h3>
								</div>
								<div id="answer">
									<label for="answer68">Oui</label>
									<input type="radio" name="answer68" value="oui" disabled>
									<label for="answer68">Non</label>
									<input type="radio" name="answer68" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Avez-vous une bonne relation avec vos collègues/client/hiérarchie ?</h3>
								</div>
								<div id="answer">
									<label for="answer69">Oui</label>
									<input type="radio" name="answer69" value="oui" disabled>
									<label for="answer69">Non</label>
									<input type="radio" name="answer69" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Comment se passe le temps du déjeuner lorsque vous travaillez ?</h3>
								</div>
								<div id="answer">
									<label for="answer70">possibilité de restauration sur place (cantine, self)</label>
									<input type="radio" name="answer70" value="possibilité de restauration sur place (cantine, self)" disabled>
									<label for="answer70">possibilité d’apporter votre repas</label>
									<input type="radio" name="answer70" value="possibilité d’apporter votre repas" disabled>
									<label for="answer70">restaurants</label>
									<input type="radio" name="answer70" value="restaurants" disabled>
									<label for="answer70">autre</label>
									<input type="text" name="answer70" placeholder="Précisez..." disabled>
								</div>
								 
								<h2>SYSTEME DIGESTIF</h2>
								<label for="box4">1. Alimentation</label>
								<input type="checkBox" name="box4" value="4">

								<div id="question">
									<h3>Comment réalisez-vous vos courses alimentaires ? </h3>
								</div>
								<div id="answer">
									<label for="answer71">sur internet</label>
									<input type="radio" name="answer71" value="sur internet" disabled>
									<label for="answer71">en drive</label>
									<input type="radio" name="answer71" value="en drive" disabled>
									<label for="answer71">en magasin</label>
									<input type="radio" name="answer71" value="en magasin" disabled>
									<label for="answer71">au marché</label>
									<input type="radio" name="answer71" value="au marché" disabled>
									<label for="answer71">directement chez le producteur</label>
									<input type="radio" name="answer71" value="directement chez le producteur" disabled>
									<label for="answer71"></label>
								</div>

								<div id="question">
									<h3>Où achetez-vous vos compléments alimentaires ?</h3>
								</div>
								<div id="answer">
									<label for="answer72">pharmacie</label>
									<input type="radio" name="answer72" value="pharmacie" disabled>
									<label for="answer72">parapharmacie</label>
									<input type="radio" name="answer72" value="parapharmacie" disabled>
									<label for="answer72">magasin bio</label>
									<input type="radio" name="answer72" value="magasin bio" disabled>
									<label for="answer72">internet</label>
									<input type="radio" name="answer72" value="internet" disabled>
									<label for="answer72">autre</label>
									<input type="text" name="answer72" placeholder="précisez..." disabled>
								</div>

								<div id="question">
									<h3>Suivez-vous un régime alimentaire particulier ?</h3>
								</div>
								<div id="answer">
									<label for="answer73">Oui</label>
									<input type="radio" name="answer73" value="oui" disabled>
									<label for="answer73">Non</label>
									<input type="radio" name="answer73" value="non" disabled>	
								</div>		

								<div id="question">
									<h3>Si oui lequel ?</h3>
								</div>
								<div id="answer">
									<label for="answer73">Végétarien</label>
									<input type="radio" name="answer73" value="Végétarien" disabled>
									<label for="answer73">Végan</label>
									<input type="radio" name="answer73" value="Végan" disabled>
									<label for="answer73">halal</label>
									<input type="radio" name="answer73" value="halal" disabled>
									<label for="answer73">kärcher</label>
									<input type="radio" name="answer73" value="kärcher" disabled>
									<label for="answer73">autre</label>
									<input type="text" name="answer73" placeholder="précisez..." disabled>
								</div>			

								<div id="question">
									<h3>Manger est pour vous :</h3>
								</div>
								<div id="answer">
									<label for="answer74">un plaisir</label>
									<input type="radio" name="answer74" value="un plaisir" disabled>
									<label for="answer74">une formalité</label>
									<input type="radio" name="answer74" value="une formalité" disabled>
									<label for="answer74">une contrainte</label>
									<input type="radio" name="answer74" value="une contrainte" disabled>
								</div> 

								<div id="question">
									<h3>Aimez-vous cuisiner ?</h3>
								</div>
								<div id="answer">
									<label for="answer75">Oui</label>
									<input type="radio" name="answer75" value="oui" disabled>
									<label for="answer75">Non</label>
									<input type="radio" name="answer75" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Prenez-vous une collation/grignotage dans la journée ?</h3>
								</div>
								<div id="answer">
									<label for="answer76">Oui</label>
									<input type="radio" name="answer76" value="oui" disabled>
									<label for="answer76">Non</label>
									<input type="radio" name="answer76" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, à quel moment ?</h3>
								</div>
								<div id="answer">
									<label for="answer77">le matin</label>
									<input type="radio" name="answer77" value="le matin" disabled>
									<label for="answer77">l’après-midi</label>
									<input type="radio" name="answer77" value="l’après-midi" disabled>
									<label for="answer77">les deux</label>
									<input type="radio" name="answer77" value="les deux" disabled>
								</div> 


								<div id="question">
									<h3>Qu’avez-vous l’habitude de prendre comme collation ?</h3>
								</div>
								<div id="answer">
									<label for="answer78">plutôt salé (fromage, charcuterie, sandwich, etc.)</label>
									<input type="radio" name="answer78" value="plutôt salé (fromage, charcuterie, sandwich, etc.)" disabled>
									<label for="answer78">plutôt sucré (yaourt, compote, fruits, biscuits industriels, viennoiserie, chocolat, etc.)</label>
									<input type="radio" name="answer78" value="plutôt sucré (yaourt, compote, fruits, biscuits industriels, viennoiserie, chocolat, etc.)" disabled>
									<label for="answer78">les deux</label>
									<input type="radio" name="answer78" value="les deux" disabled>
									<label for="answer78">autre</label>
									<input type="text" name="answer78" placeholder="précisez..." disabled>
								</div>

								<div id="question">
									<h3>Dans quelles conditions prenez-vous votre repas ?</h3>
								</div>
								<div id="answer">
									<label for="answer79">au travail</label>
									<input type="radio" name="answer79" value="au travail" disabled>
									<label for="answer79">à la maison</label>
									<input type="radio" name="answer79" value="à la maison" disabled>
									<label for="answer79">dans le bruit</label>
									<input type="radio" name="answer79" value="dans le bruit" disabled>
									<label for="answer79">dans le calme</label>
									<input type="radio" name="answer79" value="dans le calme" disabled>
									<label for="answer79">à table</label>
									<input type="radio" name="answer79" value="à table" disabled>
									<label for="answer79">plateau télé</label>
									<input type="radio" name="answer79" value="plateau télé" disabled>
									<label for="answer79">autre</label>
									<input type="text" name="answer79" placeholder="précisez..." disabled>
								</div>


								<div id="question">
									<h3>Quel est la durée moyenne de votre repas ?</h3>
								</div>
								<div id="answer">
									<label for="answer80">< 10 min</label>
									<input type="radio" name="answer80" value="< 10 min" disabled>
									<label for="answer80">10-20 min</label>
									<input type="radio" name="answer80" value="10-20 min" disabled>
									<label for="answer80">20-30min</label>
									<input type="radio" name="answer80" value="20-30min" disabled>
									<label for="answer80">>30 min</label>
									<input type="radio" name="answer80" value=">30 min" disabled>
								</div>

								<div id="question">
									<h3>Consommez-vous des plats industriels ?</h3>
								</div>
								<div id="answer">
									<label for="answer81">Oui</label>
									<input type="radio" name="answer81" value="oui" disabled>
									<label for="answer81">Non</label>
									<input type="radio" name="answer81" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, fréquence ?</h3>
								</div>
								<div id="answer">
									<label for="answer82">Quotidiennement</label>
									<input type="radio" name="answer82" value="Quotidiennement" disabled>
									<label for="answer82">fréquemment</label>
									<input type="radio" name="answer82" value="fréquemment" disabled>
									<label for="answer82">occasionnellement</label>
									<input type="radio" name="answer82" value="occasionnellement" disabled>
									<label for="answer82">très rarement</label>
									<input type="radio" name="answer82" value=">très rarement" disabled>
								</div>

									<div id="question">
									<h3>Si oui, quels types ?</h3>
								</div>
								<div id="answer">
									<label for="answer83">plats surgelées</label>
									<input type="radio" name="answer83" value="plats surgelées" disabled>
									<label for="answer83">plats préparés</label>
									<input type="radio" name="answer83" value="plats préparés" disabled>
									<label for="answer83">poêlée surgelée</label>
									<input type="radio" name="answer83" value="poêlée surgelée" disabled>
									<label for="answer83">autre</label>
									<input type="text" name="answer83" placeholder="précisez..." disabled>
								</div>


								<div id="question">
									<h3>En moyenne, vous mangez dans les fast-foods ?</h3>
								</div>
								<div id="answer">
									<label for="answer84">plusieurs fois par semaine</label>
									<input type="radio" name="answer84" value="plusieurs fois par semaine" disabled>
									<label for="answer84">plusieurs fois par mois</label>
									<input type="radio" name="answer84" value="plusieurs fois par mois" disabled>
									<label for="answer84">quelques fois par an</label>
									<input type="radio" name="answer84" value="quelques fois par an" disabled>
								</div>

								<div id="question">
									<h3>En moyenne, vous mangez au restaurant ?</h3>
								</div>
								<div id="answer">
									<label for="answer85">plusieurs fois par semaine</label>
									<input type="radio" name="answer85" value="plusieurs fois par semaine" disabled>
									<label for="answer85">plusieurs fois par mois</label>
									<input type="radio" name="answer85" value="plusieurs fois par mois" disabled>
									<label for="answer85">quelques fois par an</label>
									<input type="radio" name="answer85" value="quelques fois par an" disabled>
								</div>

								<div id="question">
									<h3>En moyenne, vous mangez au restaurant d’entreprise ?</h3>
								</div>
								<div id="answer">
									<label for="answer86">tous les jours</label>
									<input type="radio" name="answer86" value="tous les jours" disabled>
									<label for="answer86">plusieurs fois par semaine</label>
									<input type="radio" name="answer86" value="plusieurs fois par semaine" disabled>
									<label for="answer86">une ou deux fois par semaine</label>
									<input type="radio" name="answer86" value="une ou deux fois par semaine" disabled>
								</div>

								<div id="question">
									<h3>Utilisez-vous des coupes faim ? ou des substituts de repas ?</h3>
								</div>
								<div id="answer">
									<label for="answer87">Oui</label>
									<input type="radio" name="answer87" value="oui" disabled>
									<label for="answer87">Non</label>
									<input type="radio" name="answer87" value="non" disabled>	
								</div>

								<div id="question">
									<h3>En moyenne, combien de fois par semaine/par jour consommez-vous de la viande rouge ?</h3>
								</div>
								<div id="answer">
									<label for="answer88">Précisez</label>
									<input type="text" name="answer88" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Quel type de viandes rouges ?</h3>
								</div>
								<div id="answer">
									<label for="answer89">Précisez</label>
									<input type="text" name="answer89" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>En moyenne, combien de fois par semaine/par jour consommez-vous du poisson/des fruits de mer ?</h3>
								</div>
								<div id="answer">
									<label for="answer90">Précisez</label>
									<input type="text" name="answer90" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Quel type de poissons ou fruits de mer ?</h3>
								</div>
								<div id="answer">
									<label for="answer91">Précisez</label>
									<input type="text" name="answer91" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>En moyenne, combien de fois par semaine/par jour consommez-vous du lait ou/et des produits laitiers ?</h3>
								</div>
								<div id="answer">
									<label for="answer92">Précisez</label>
									<input type="text" name="answer92" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Ce sont des produits au lait de :</h3>
								</div>
								<div id="answer">
									<label for="answer93">vache</label>
									<input type="radio" name="answer93" value="vache" disabled>
									<label for="answer93">brebis/chèvre</label>
									<input type="radio" name="answer93" value="brebis/chèvre" disabled>
									<label for="answer93">autre</label>
									<input type="text" name="answer93" placeholder="précisez..." disabled>
								</div>
								 
								<div id="question">
									<h3>En moyenne, combien de fois par semaine/par jour consommez-vous du pain ou des produits céréaliers ?</h3>
								</div>
								<div id="answer">
									<label for="answer94">Précisez</label>
									<input type="text" name="answer94" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>En moyenne, combien de fois par semaine/par jour consommez-vous des légumineuses ?</h3>
								</div>
								<div id="answer">
									<label for="answer95">Précisez</label>
									<input type="text" name="answer95" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Consommez-vous des produits bio ?</h3>
								</div>
								<div id="answer">
									<label for="answer96">Oui</label>
									<input type="radio" name="answer96" value="oui" disabled>
									<label for="answer96">Non</label>
									<input type="radio" name="answer96" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Quels types de produits bio ?</h3>
								</div>
								<div id="answer">
									<label for="answer97">Précisez</label>
									<input type="text" name="answer97" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Avez-vous des allergies alimentaires ?</h3>
								</div>
								<div id="answer">
									<label for="answer98">Oui</label>
									<input type="radio" name="answer98" value="oui" disabled>
									<label for="answer98">Non</label>
									<input type="radio" name="answer98" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, lesquelles ?</h3>
								</div>
								<div id="answer">
									<label for="answer99">Précisez</label>
									<input type="text" name="answer99" placeholder="précisez..." disabled>	
								</div>	

								<div id="question">
									<h3>Avez-vous des addictions alimentaires ?</h3>
								</div>
								<div id="answer">
									<label for="answer100">Oui</label>
									<input type="radio" name="answer100" value="oui" disabled>
									<label for="answer100">Non</label>
									<input type="radio" name="answer100" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, lesquelles ?</h3>
								</div>
								<div id="answer">
									<label for="answer101">Précisez</label>
									<input type="text" name="answer101" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Quelle quantité d’eau buvez-vous au quotidien ?</h3>
								</div>
								<div id="answer">
									<label for="answer102">moins 1,5L/jour</label>
									<input type="radio" name="answer102" value="moins 1,5L/jour" disabled>
									<label for="answer102">entre 1,5L et 2L/jour</label>
									<input type="radio" name="answer102" value="entre 1,5L et 2L/jour" disabled>
									<label for="answer102">plus de 2L/jour</label>
									<input type="radio" name="answer102" value="plus de 2L/jour" disabled>
								</div>

								<div id="question">
									<h3>Vous vous hydratez plutôt :</h3>
								</div>
								<div id="answer">
									<label for="answer103">pendant les repas</label>
									<input type="radio" name="answer103" value="pendant les repas" disabled>
									<label for="answer103">en dehors de repas</label>
									<input type="radio" name="answer103" value="en dehors de repas" disabled>
									<label for="answer103">les deux</label>
									<input type="radio" name="answer103" value="les deux" disabled>
								</div>

								<div id="question">
									<h3>Quelles boissons consommez-vous au quotidien ?</h3>
								</div>
								<div id="answer">
									<label for="answer104">eau plate</label>
									<input type="radio" name="answer104" value="eau plate" disabled>
									<label for="answer104">eau aromatisée</label>
									<input type="radio" name="answer104" value="eau aromatisée" disabled>
									<label for="answer104">eau gazeuse</label>
									<input type="radio" name="answer104" value="eau gazeuse" disabled>
									<label for="answer104">tisane</label>
									<input type="radio" name="answer104" value="tisane" disabled>
									<label for="answer104">autre</label>
									<input type="text" name="answer104" placeholder="précisez..." disabled>
								</div>	

								<div id="question">
									<h3>En moyenne à quelle fréquence consommez-vous des boissons sucrées ?</h3>
								</div>
								<div id="answer">
									<label for="answer105">Quotidiennement</label>
									<input type="radio" name="answer105" value="Quotidiennement" disabled>
									<label for="answer105">fréquemment</label>
									<input type="radio" name="answer105" value="fréquemment" disabled>
									<label for="answer105">occasionnellement</label>
									<input type="radio" name="answer105" value="occasionnellement" disabled>
									<label for="answer105">très rarement</label>
									<input type="radio" name="answer105" value="très rarement" disabled>
								</div>
								
								<div id="question">
									<h3>Y a-t-il des aliments que vous n’aimez pas du tout ?</h3>
								</div>
								<div id="answer">
									<label for="answer106">Précisez</label>
									<input type="text" name="answer106" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Etes-vous fumeur ?</h3>
								</div>
								<div id="answer">
									<label for="answer107">Oui</label>
									<input type="radio" name="answer107" value="oui" disabled>
									<label for="answer107">Non</label>
									<input type="radio" name="answer107" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, depuis combien de temps ?</h3>
								</div>
								<div id="answer">
									<label for="answer108">Précisez</label>
									<input type="text" name="answer108" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Combien par jour ?</h3>
								</div>
								<div id="answer">
									<label for="answer109">Précisez</label>
									<input type="text" name="answer109" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Si non :</h3>
								</div>
								<div id="answer">
									<label for="answer110">arrêt récent (moins d’un an)</label>
									<input type="radio" name="answer110" value="arrêt récent (moins d’un an)" disabled>
									<label for="answer110">arrêt depuis plusieurs années</label>
									<input type="radio" name="answer110" value="arrêt depuis plusieurs années" disabled>
									<label for="answer110">vous n’avez jamais fumé</label>
									<input type="radio" name="answer110" value="vous n’avez jamais fumé" disabled>
									<label for="answer110">très rarement</label>
									<input type="radio" name="answer110" value="très rarement" disabled>
								</div>

								<div id="question">
									<h3>Quelle marque avez-vous l’habitude de consommer ?</h3>
								</div>
								<div id="answer">
									<label for="answer111">Malboro</label>
									<input type="radio" name="answer111" value="Malboro" disabled>
									<label for="answer111">Lucky strike</label>
									<input type="radio" name="answer111" value="Lucky strike" disabled>
									<label for="answer111">Camel</label>
									<input type="radio" name="answer111" value="Camel" disabled>
									<label for="answer111">Gitanes maïs</label>
									<input type="radio" name="answer111" value="Gitanes maïs" disabled>
									<label for="answer111">Vogue</label>
									<input type="radio" name="answer111" value="Vogue" disabled>
									<label for="answer111">autre</label>
									<input type="text" name="answer111" placeholder="précisez..." disabled>
								</div>

								<div id="question">
									<h3>Consommez-vous du café ?</h3>
								</div>
								<div id="answer">
									<label for="answer112">Oui</label>
									<input type="radio" name="answer112" value="oui" disabled>
									<label for="answer112">Non</label>
									<input type="radio" name="answer112" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, combien par jour ?</h3>
								</div>
								<div id="answer">
									<label for="answer113">Précisez</label>
									<input type="text" name="answer113" placeholder="précisez..." disabled>	
								</div>
								
								<div id="question">
									<h3>Consommez-vous du thé ?</h3>
								</div>
								<div id="answer">
									<label for="answer114">Oui</label>
									<input type="radio" name="answer114" value="oui" disabled>
									<label for="answer114">Non</label>
									<input type="radio" name="answer114" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, combien par jour ?</h3>
								</div>
								<div id="answer">
									<label for="answer115">Précisez</label>
									<input type="text" name="answer115" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Consommez-vous de l’alcool ?</h3>
								</div>
								<div id="answer">
									<label for="answer116">Oui</label>
									<input type="radio" name="answer116" value="oui" disabled>
									<label for="answer116">Non</label>
									<input type="radio" name="answer116" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui :</h3>
								</div>
								<div id="answer">
									<label for="answer117">quotidiennement</label>
									<input type="radio" name="answer117" value="quotidiennement" disabled>
									<label for="answer117">régulièrement (au moins 1 fois/semaine)</label>
									<input type="radio" name="answer117" value="régulièrement (au moins 1 fois/semaine)" disabled>
									<label for="answer117">occasionnellement (1 fois/mois)</label>
									<input type="radio" name="answer117" value="occasionnellement (1 fois/mois)" disabled>
								</div>

								<div id="question">
									<h3>Quels types d’alcool consommez-vous ?</h3>
								</div>
								<div id="answer">
									<label for="answer118">Bières</label>
									<input type="radio" name="answer118" value="Bières" disabled>
									<label for="answer118">vins</label>
									<input type="radio" name="answer118" value="vins" disabled>
									<label for="answer118">spiritueux</label>
									<input type="radio" name="answer118" value="spiritueux" disabled>
								</div>

								<div id="question">
									<h3>Avez-vous déjà consommé des produits stupéfiants ?</h3>
								</div>
								<div id="answer">
									<label for="answer119">Oui</label>
									<input type="radio" name="answer119" value="oui" disabled>
									<label for="answer119">Non</label>
									<input type="radio" name="answer119" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, à lesquels ?</h3>
								</div>
								<div id="answer">
									<label for="answer120">Cannabis</label>
									<input type="radio" name="answer120" value="Cannabis" disabled>
									<label for="answer120">cocaïne</label>
									<input type="radio" name="answer120" value="cocaïne" disabled>
									<label for="answer120">LSD</label>
									<input type="radio" name="answer120" value="LSD" disabled>
									<label for="answer120">autre</label>
									<input type="text" name="answer120" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Consommez-vous des produits stupéfiants ?</h3>
								</div>
								<div id="answer">
									<label for="answer121">Oui</label>
									<input type="radio" name="answer121" value="oui" disabled>
									<label for="answer121">Non</label>
									<input type="radio" name="answer121" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, à quelle fréquence ?</h3>
								</div>
								<div id="answer">
									<label for="answer122">quotidiennement</label>
									<input type="radio" name="answer122" value="quotidiennement" disabled>
									<label for="answer122">régulièrement (au moins 1 fois/semaine)</label>
									<input type="radio" name="answer122" value="régulièrement (au moins 1 fois/semaine)" disabled>
									<label for="answer122">occasionnellement (1 fois/mois)</label>
									<input type="radio" name="answer122" value="occasionnellement (1 fois/mois)" disabled>	
								</div>

								<label for="box5">2. Digestion - transit</label>
								<input type="checkBox" name="box5" value="1">
								
								<div id="question">
									<h3>Vous a-t-on diagnostiqué une pathologie digestive ?</h3>
								</div>
								<div id="answer">
									<label for="answer122">Oui</label>
									<input type="radio" name="answer122" value="oui" disabled>
									<label for="answer122">Non</label>
									<input type="radio" name="answer122" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, laquelle ?</h3>
								</div>
								<div id="answer">
									<label for="answer123">SIBO</label>
									<input type="radio" name="answer123" value="SIBO" disabled>
									<label for="answer123">SII</label>
									<input type="radio" name="answer123" value="SII" disabled>
									<label for="answer123">MALADIE COELIAQUE</label>
									<input type="radio" name="answer123" value="MALADIE COELIAQUE" disabled>
									<label for="answer123">maladie de Crohn</label>
									<input type="radio" name="answer123" value="maladie de Crohn" disabled>
									<label for="answer123">rectocolite hémorragique</label>
									<input type="radio" name="answer123" value="rectocolite hémorragique" disabled>	
								</div>

								<div id="question">
									<h3>Comment qualifieriez-vous votre digestion ?</h3>
								</div>
								<div id="answer">
									<label for="answer124">Bonne</label>
									<input type="radio" name="answer124" value="Bonne" disabled>
									<label for="answer124">mauvaise</label>
									<input type="radio" name="answer124" value="mauvaise" disabled>
									<label for="answer124">lente</label>
									<input type="radio" name="answer124" value="lente" disabled>
									<label for="answer124">difficile</label>
									<input type="radio" name="answer124" value="difficile" disabled>
									<label for="answer124">douloureuse</label>
									<input type="radio" name="answer124" value="douloureuse" disabled>	
								</div>

								<div id="question">
									<h3>La digestion vous provoque-t-elle :</h3>
								</div>
								<div id="answer">
									<label for="answer125">des ballonnements</label>
									<input type="radio" name="answer125" value="des ballonnements" disabled>
									<label for="answer125">gaz</label>
									<input type="radio" name="answer125" value="gaz" disabled>
									<label for="answer125">flatulences</label>
									<input type="radio" name="answer125" value="flatulences" disabled>
									<label for="answer125">bruit intestinaux</label>
									<input type="radio" name="answer125" value="bruit intestinaux" disabled>
									<label for="answer125">autre</label>
									<input type="text" name="answer125" placeholder="précisez..." disabled>	
								</div>		

								<div id="question">
									<h3>Ressentez-vous des douleurs abdominales ?</h3>
								</div>
								<div id="answer">
									<label for="answer126">Oui</label>
									<input type="radio" name="answer126" value="oui" disabled>
									<label for="answer126">Non</label>
									<input type="radio" name="answer126" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, fréquence ?</h3>
								</div>
								<div id="answer">
									<label for="answer127">quotidiennement</label>
									<input type="radio" name="answer127" value="quotidiennement" disabled>
									<label for="answer127">régulièrement (au moins 1 fois/semaine)</label>
									<input type="radio" name="answer127" value="régulièrement (au moins 1 fois/semaine)" disabled>
									<label for="answer127">occasionnellement (1 fois/mois)</label>
									<input type="radio" name="answer127" value="occasionnellement (1 fois/mois)" disabled>
								</div>  

								<div id="question">
									<h3>Quelle est l’intensité ?</h3>
								</div>
								<div id="answer">
									<label for="answer128">faible</label>
									<input type="radio" name="answer128" value="faible" disabled>
									<label for="answer128">modérée</label>
									<input type="radio" name="answer128" value="modérée" disabled>
									<label for="answer128">intense</label>
									<input type="radio" name="answer128" value="intense" disabled>
									<label for="answer128">extrêmement intense</label>
									<input type="radio" name="answer128" value="extrêmement intense" disabled>
								</div>

								<div id="question">
									<h3>A quel endroit ?</h3>
								</div>
								<div id="answer">
									<label for="answer129">En bas, à droite</label>
									<input type="radio" name="answer129" value="En bas, à droite" disabled>
									<label for="answer129">En bas, à gauche</label>
									<input type="radio" name="answer129" value="En bas, à gauche" disabled>
									<label for="answer129">En haut, à droite</label>
									<input type="radio" name="answer129" value="En haut, à droite" disabled>
									<label for="answer129">En haut, à gauche</label>
									<input type="radio" name="answer129" value="En haut, à gauche" disabled>
									<label for="answer129">autre</label>
									<input type="text" name="answer129" placeholder="précisez..." disabled>	
								</div>

								<div id="question">
									<h3>Ressentez-vous des remontées acides ?</h3>
								</div>
								<div id="answer">
									<label for="answer130">Oui</label>
									<input type="radio" name="answer130" value="oui" disabled>
									<label for="answer130">Non</label>
									<input type="radio" name="answer130" value="non" disabled>	
								</div>

								<div id="question">
									<h3>Si oui, fréquence ?</h3>
								</div>
								<div id="answer">
									<label for="answer129">quotidiennement</label>
									<input type="radio" name="answer129" value="quotidiennement" disabled>
									<label for="answer129">régulièrement (au moins 1 fois/semaine)</label>
									<input type="radio" name="answer129" value="régulièrement (au moins 1 fois/semaine)" disabled>
									<label for="answer129">occasionnellement (1 fois/mois)</label>
									<input type="radio" name="answer129" value="occasionnellement (1 fois/mois)" disabled>	
								</div>

								<div id="question">
									<h3>Quelle est l’intensité ?</h3>
								</div>
								<div id="answer">
									<label for="answer130">faible</label>
									<input type="radio" name="answer130" value="faible" disabled>
									<label for="answer130">modérée</label>
									<input type="radio" name="answer130" value="modérée" disabled>
									<label for="answer130">intense</label>
									<input type="radio" name="answer130" value="intense" disabled>
									<label for="answer130">extrêmement intense</label>
									<input type="radio" name="answer130" value="extrêmement intense" disabled>
								</div>

								<div id="question">
									<h3>Ressentez-vous des brûlures d’estomac ?</h3>
								</div>
								<div id="answer">
									<label for="answer131">Oui</label>
									<input type="radio" name="answer131" value="oui" disabled>
									<label for="answer131">Non</label>
									<input type="radio" name="answer131" value="non" disabled>	
								</div> 

								<div id="question">
									<h3>Si oui, fréquence ?</h3>
								</div>
								<div id="answer">
									<label for="answer132">quotidiennement</label>
									<input type="radio" name="answer132" value="quotidiennement" disabled>
									<label for="answer132">régulièrement (au moins 1 fois/semaine)</label>
									<input type="radio" name="answer132" value="régulièrement (au moins 1 fois/semaine)" disabled>
									<label for="answer132">occasionnellement (1 fois/mois)</label>
									<input type="radio" name="answer132" value="occasionnellement (1 fois/mois)" disabled>	
								</div> 
							</div>
						</div>
					</center>

					<!--<center>
						<div id="bloc2">
							<h2>SYSTEME 2</h2>
							<label for="box2">Bloc 2</label>
							<input type="checkBox" name="box2" value="1">
							<div id="blocTwoContentShape">
								
							</div>
						</div>
					</center>

					<center>
						<div id="bloc3">
							<h2>SYSTEME 3</h2>
							<label for="box3">Bloc 3</label>
							<input type="checkBox" name="box3" value="1">
							<div id="blocThreeContentShape">
							</div>
						</div>
					</center>

					<center>
						<div id="bloc4">
							<h2>SYSTEME 4</h2>
							<label for="box3">Bloc 4</label>
							<input type="checkBox" name="box4" value="1">
							<div id="blocFourContentShape">
								
							</div>
						</div>
					</center>-->

					<input type="submit" name="sendThisToClient" value="ENVOYER AU CLIENT">
				</div>
			</form>



			<script type="text/javascript" src="main.js"></script>
		</body>
		</html>
<?php
	}
	else
	{
		header("location: ../../index.php");
	}

?>