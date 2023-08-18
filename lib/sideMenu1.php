<nav class="main-menu">      
	<ul>
		<li>                                   
			<a href="../../index.php?action=accueil">
				<i class="fa fa-solid fa-home"></i>
				<span class="nav-text">Accueil</span>
			</a>
		</li>   
	   
		<li>                                 
			<a href="../../index.php?action=agenda">
				<i class="fa fa-solid fa-calendar"></i>
				<span class="nav-text">Agenda</span>
			</a>
		</li>

		<?php
			if ($_SESSION['praticienNaturopatheStatus'] == 1) 
			{
		?>
		
				<li>                                 
					<a href="#">
						<i class="fa fa-solid fa-toolbox"></i>
						<span class="nav-text">OUTILS NATURO</span>
					</a>
				</li>

				<?php
					if ($_SESSION['activationStatus'] == "trial") 
					{			
						if ($_SESSION['timeRemaining'] > 0) 
						{

				?>
							<li class="darkerlishadow">
								<a href="../questionnaires/index.php?action=questions1">
									<i class="fa fa-solid fa-seedling"></i>
									<span class="nav-text">Fleurs De Bach</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=naturoSheet">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Bilan Naturo</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=testDNS">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test DNS</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=testGDS">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test Gestion Du Stress (GDS)</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=testGDSE">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test Gestion Du Stress Enfant(GDSE)</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=testGDSSP">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test Gestion Du Stress Symptômes Physiques(GDSSP)</span>
								</a>
							</li>
				<?php	
						}

						else
						{
				?>
							<li class="darkerlishadow">
								<a href="#">
									<i class="fa fa-solid fa-seedling"></i>
									<span class="nav-text">Fleurs De Bach</span>
								</a>
							</li>
				
							<li class="darkerli">
								<a href="#">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Bilan Naturo</span>
								</a>
							</li>
				
							<li class="darkerli">
								<a href="#">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test DNS</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="#">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test Gestion Du Stress (GDS)</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="#">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test Gestion Du Stress Enfant(GDSE)</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="#">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test Gestion Du Stress Symptômes Physiques(GDSSP)</span>
								</a>
							</li>
				<?php
						}
				
					}

						else if ($_SESSION['activationStatus'] == "active")
						{
				?>
							<li class="darkerlishadow">
								<a href="../questionnaires/index.php?action=questions1">
									<i class="fa fa-solid fa-seedling"></i>
									<span class="nav-text">Fleurs De Bach</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=naturoSheet">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Bilan Naturo</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=testDNS">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test DNS</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=testGDS">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test Gestion Du Stress (GDS)</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=testGDSE">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test Gestion Du Stress Enfant(GDSE)</span>
								</a>
							</li>

							<li class="darkerli">
								<a href="../../index.php?action=testGDSSP">
									<i class="fa fa-solid fa-sheet-plastic"></i>
									<span class="nav-text">Test Gestion Du Stress Symptômes Physiques(GDSSP)</span>
								</a>
							</li>
		<?php			
						}
			}
		?>				


		<?php
			if ($_SESSION['praticienReflexologueStatus'] == 1) 
			{
		?>

				<li>                                 
					<a href="#">
						<i class="fa fa-solid fa-toolbox"></i>
						<span class="nav-text">OUTILS REFLEXO</span>
					</a>
				</li>
		<?php
			}

			if ($_SESSION['praticienSophrologueStatus'] == 1) 
			{
		?>

				<li>                                 
					<a href="#">
						<i class="fa fa-solid fa-toolbox"></i>
						<span class="nav-text">OUTILS SOPHRO</span>
					</a>
				</li>
		<?php
			}
		?>	

		<li>
			<a href="../../index.php?action=createAClientAccount">
				<i class="fa fa-thin fa-user-plus"></i>
				<span class="nav-text">Créer Un Compte Client</span>
			</a>
		</li>

		<li class="darkerlishadow">
			<a href="../../index.php?action=files">
				<i class="fa fa-thin fa-folder"></i>
				<span class="nav-text">Ajouter/Consulter documents client</span>
			</a>
		</li>

		<li class="darkerli">                                 
			<a href="../../index.php?action=showClientsList">
				<i class="fa fa-solid fa-address-card"></i>
				<span class="nav-text">Liste clients</span>
			</a>
		</li>  


		<!--<li class="darkerli">
			<a href="../../index.php?action=showClientsList">
				<i class="fa fa-solid fa-users"></i>
				<span class="nav-text">Tous</span>
			</a>
		</li>-->

		<li class="darkerli">
			<a href="../../index.php?action=showMaleClients">
				<i class="fa fa-thin fa-person"></i>
				<span class="nav-text">Hommes</span>
			</a>
		</li>

		<li class="darkerli">
			<a href="../../index.php?action=showFemaleClients">
				<i class="fa fa-thin fa-person-dress"></i>
				<span class="nav-text">Femmes</span>
			</a>
		</li>

		<li class="darkerli">
			<a href="../../index.php?action=showTeenClients">
				<i class="fa fa-thin fa-children"></i>
				<span class="nav-text">Adolescents</span>
			</a>
		</li>

		<li class="darkerli">
			<a href="../../index.php?action=showChildClients">
				<i class="fa fa-thin fa-baby"></i>
		 		<span class="nav-text">Enfants</span>
			</a>
		</li>

		<!--<li class="darkerli">
			<a href="../../index.php?action=logout">
				<i class="fa fa-thin fa-door-open"></i>
				<span class="nav-text">Quitter</span>
			</a>
		</li>-->

		<!--<li class="darkerli">
			<a href="../../index.php?action=documents">
				<i class="fa fa-thin fa-file"></i>
				<span class="nav-text">Documents</span>
			</a>
		</li>-->

		<!--<li>
			<a href="../../index.php?action=addAClient">
				<i class="fa fa-solid fa-folder-closed"></i>
				<span class="nav-text">Ajouter un fiche client</span>
			</a>
		</li>

		<li class="darkerlishadow">                                 
			<a href="../../index.php?action=personalRepositories">
				<i class="fa fa-regular fa-folder"></i>
				<span class="nav-text">Fiches clients</span>
			</a>
		</li>-->


		<li>
			<a href="../../index.php?action=gotoMails">
				<i class="fa fa-thin fa-envelope"></i>
				<span class="nav-text">Messagerie</span>
			</a>
		</li>

		<li>
			<a href="../../index.php?action=settings">
				<i class="fa fa-thin fa-screwdriver-wrench"></i>
				<span class="nav-text">Configuration</span>
			</a>
		</li>

		<li class="darkerlishadow">
			<a href="../../index.php?action=cabinetManagement">
				<i class="fa fa-thin fa-gears"></i>
				<span class="nav-text">Gérer le cabinet</span>
			</a>
		</li>

		<li class="darkerli">
			<a href="../../index.php?action=naturoProgramContent">
				<i class="fa fa-thin fa-gears"></i>
				<span class="nav-text">Paramètrage Du PHV</span>
			</a>
		</li>

		<li class="darkerli">
			<a href="#">
				<i class="fa fa-thin fa-gears"></i>
				<span class="nav-text">Demande Ajout d'un Trouble</span>
			</a>
		</li>

		<li>                                  
			<a href="../../index.php?action=help">
				<i class="fa fa-question-circle"></i>
				<span class="nav-text">Aide</span>
			</a>
		</li>

		<li class="darkerlishadow">                                  
			<a href="../../index.php?action=aboutUs">
				<i class="fa fa-solid fa-info"></i>
				<span class="nav-text">A Propos De Nous</span>
			</a>
		</li>

		<li>
           	<a href="../../index.php?action=logout">
                <i class="fa fa-thin fa-power-off"></i>
                <span class="nav-text">Se déconnecter</span>    
            </a>
		</li>
	</ul>	
</nav>