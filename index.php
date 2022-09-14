<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
				<form class="form-register" action="#" method="post">
					<div style="text-align:center;margin-top:20px;">
						<img src="images/upl.png"  alt="" width="60" height="60">
								 <h1 class="heading">Bienvenue sur  UPL - INSCRIPTION</h1>
									<p>Voici un formulaire d'inscription. </p>
	
							</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="recuperation.php" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Informations</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Informations personnelles</h3>
									<p>Veuillez entrer vos informations et passer à l’étape
										suivante pour continuer votre inscription. </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Prénom</legend>
											<input type="text" class="form-control" id="Prenom" name="Prenom" placeholder="Prénom" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Post-nom</legend>
											<input type="text" class="form-control" id="Post_nom" name="Post_nom" placeholder="Post-Nom" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Nom</legend>
											<input type="text" class="form-control" id="Nom" name="Nom" placeholder="Nom" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Votre Email</legend>
											<input type="text" name="Email" id="Email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="exemple@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Téléphone</legend>
											<input type="tel" class="form-control" id="Telephone" name="Telephone" placeholder="+243" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>nom du responsable</legend>
											<input type="text" class="form-control" id="Nom_du_pere" name="Nom_du_pere" placeholder="Nom du pere/Nom de la mere" required>
										</fieldset> 
									</div>


									
									<div class="form-holder">
										<fieldset>
											<legend>provice d'origine de parents</legend>
											<input type="text" class="form-control" id="province_h" name="province_h" placeholder="provice d'origine de parents" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<legend>Date de Naissance</legend>
										<input type="Date" name="Date_nn" id="Date_nn">
									</div>

									<div class="form-holder">
										<fieldset>
											<legend>district</legend>
											<input type="text" class="form-control" id="district" name="district" placeholder="district" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>territoire</legend>
											<input type="text" class="form-control" id="territoire" name="territoire" placeholder="territiore" required>
										</fieldset>
									</div>
								</div>
								<!-- la date -->
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Lieu de Naissance</legend>
										<input type="text" class="form-control input-border" id="Lieux_d" name="Lieux_d" placeholder="Lieu de Naissance" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Nationalité</legend>
										<input type="text" class="form-control input-border" id="Nationalite" name="Nationalite" placeholder="Nationalité" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Etat Civil</legend>
										<input type="text" class="form-control input-border" id="etats_civil" name="etats_civil" placeholder="Etat Civil" required>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>identite  et adresse de la personne a conctacter en cas d'urgence</legend>
										<input type="text" class="form-control input-border" id="identite_et_adress" name="identite_et_adress" placeholder="nom_adresse_numero...." required>
									</div>
								</div>


								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Adresse de Résidence</legend>
										<input type="text" class="form-control input-border" id="Adress_de_Résidence" name="Adress_de_Résidence" placeholder="Adresse de Résidence" required>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<legend>Genre:</legend>
										<select name="genre" id="genre">
											<option value="M" >M</option>
											<option value="F">F</option>
										</select>
									</div>
								</div>
								<input type="submit" name="En">
							</div>

							<div class="wizard-header">
								<a href="https://upl-univ.ac/">
									<h5 class="heading">Quitter L'inscription</h5>
								</a>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Info Suivant</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Etudes sécondaire faites</h3>
									<p>Veuillez continuer L'enregistrement de vos informations et passer à l’étape
										suivante pour continuer votre inscription.</p>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>diplome d'acces a l'enseignement superieur et universitaire</legend>
											<input type="text" name="ecole" id="ecole" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Nom de l'établissement fréquenté" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Adresse de l'établissement</legend>
											<input type="text" name="adresse-ecole" id="adresse-ecole" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Adresse de l'établissement" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Section suivie aux humanités</legend>
											<input type="text" name="section-ecole" id="section-ecole" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Section suivie aux humanités" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Année d'obtention du diplome</legend>
											<input type="number" class="form-control" id="annee_diplome" name="annee_diplome" placeholder="Année d'obtention" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Pourcentage</legend>
											<input type="number" class="form-control" id="Pourcentage" name="Pourcentage" placeholder="Pourcentage" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Numéro du diplome d'Etat</legend>
											<input type="text" name="numero_diplome" id="numero_diplome" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Numéro du diplome d'Etat" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>province</legend>
											<input type="text" name="onfo" id="onfo" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="" required>
										</fieldset>
									</div>

									
										
								</div>
							</div>
							<div class="wizard-header">
								<a href="https://upl-univ.ac/">
									<h5 class="heading">Quitter L'inscription</h5>
								</a>
								<h5 class="heading">Je jure sur mon honneur que tous ces renseignements sont corrects.
								</h5>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Choix Filliere</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Votre Choix de Filliere</h3>
									<p>Veuillez choisir la filliere et passer à l’étape
										suivante afin de continuer votre incription.</p>
								</div>
								<div class="form-row">
			                		<div class="form-holder form-holder-2">
			                			<input type="radio" class="radio" name="radio1" id="plan-1" value="plan-1">
			                			<label class="plan-icon plan-1-label" for="plan-1">
		                					<img src="images/form-v1-icon-2.png" alt="pay-1">
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">Informatique</span>
											<div class="select-style">
												<select>
												<option value="filliere">filier</option>
												<option value="isi">ingenieurie des systeme informatique</option>
												<option value="RT">reseaux et telecommunication</option>
												<option value="IG">informatique de gestion</option>
												</select>
											  </div>
											  	
		                				</div>
										
			                		
										
			                			<label class="plan-icon plan-2-label" for="plan-2">
			                					<img src="images/form-v1-icon-2.png" alt="pay-1">
												
			                			</label>
			                			<div class="plan-total">
		                					<span class="plan-title">Théologie</span>
		                					<div class="select-style">
												<select>
												<option value="filliere">filier</option>
												
												</select>
											  </div>
		                				</div>

										<label class="plan-icon plan-2-label" for="plan-2">
											<img src="images/form-v1-icon-2.png" alt="pay-1">
											
									</label>
									<div class="plan-total">
										<span class="plan-title">Sciences de l’Information et de la Communication</span>
										<div class="select-style">
											<select>
											<option value="filliere">filier</option>
											<option value="isi">journalisme</option>
											<option value="RT">communication des organisation</option>
											<option value="IG">multimedia et communication digital</option>
											</select>
										  </div>
									</div>

									<label class="plan-icon plan-2-label" for="plan-2">
										<img src="images/form-v1-icon-2.png" alt="pay-1">
										
								</label>
								<div class="plan-total">
									<span class="plan-title">Sciences Économiques et Management</span>
									<div class="select-style">
										<select>
										<option value="filliere">filier</option>
										<option value="isi">finace de banque</option>
										<option value="RT">marketing</option>
										<option value="IG">ressource humaines</option>
										</select>
									  </div>
								</div>

										<input type="radio" class="radio" name="radio1" id="plan-3" value="plan-3" checked>
										<label class="plan-icon plan-3-label" for="plan-3">
		                					<img src="images/form-v1-icon-3.png" alt="pay-2">
										</label>

										<div class="plan-total">
		                					<span class="plan-title">Polytechnique</span>
											<input type="radio" class="radio" name="radio1" id="plan-3" value="plan-3" checked>

											<div class="select-style">
												<select>
												<option value="filliere">filier</option>
												<option value="isi">Genie des materiel et de procedes</option>
												<option value="RT">Electromanetique</option>
												<option value="IG">Architecture</option>
												<option value="#">Geomines</option>
												</select>
											  </div>
		                				</div>

										<input type="radio" class="radio" name="radio1" id="plan-3" value="plan-3" checked>
										<label class="plan-icon plan-3-label" for="plan-3">
		                					<img src="images/form-v1-icon-3.png" alt="pay-2">
										</label>
										
										<div class="plan-total">
		                					<span class="plan-title">Droit</span>
		                					<div class="select-style">
												<select>
												<option value="filliere">Droit</option>
												
												</select>
											  </div>
		                				</div>
										
										<input type="radio" class="radio" name="radio1" id="plan-3" value="plan-3" checked>
										<label class="plan-icon plan-3-label" for="plan-3">
		                					<img src="images/form-v1-icon-3.png" alt="pay-2">
										</label>
										<div class="plan-total">
		                					<span class="plan-title">Lettres et sciences humaines</span>
		                					<div class="select-style">
												<select>
												<option value="filliere">filier</option>
												<option value="isi">ingenieurie des systeme informatique</option>
												<option value="RT">reseaux et telecommunication</option>
												<option value="IG">informatique de gestion</option>
												</select>
											  </div>
		                				</div>
			                		</div>
			                	</div>
							</div>
							<div class="wizard-header">
								<a href="https://upl-univ.ac/">
									<h5 class="heading">Quitter L'inscription</h5>
								</a>
							</div>
			            </section>
						<!-- SECTION 4 -->
			            <h2>
			            	<p class="step-icon"><span>04</span></p>
			            	<span class="step-text">Soumission Dossier</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Soumission du dossier d'admission au
										cucle de licence
									</h3>
									<p>Voici la liste que constituéra votre dossier d'inscrption ainsi que les normes
										du dépot.</p>
								</div>
								<h4 class="heading">I. Rassembler les éléments du dossier suivants</h4>
								<p>1. 3 photos passeports en couleur et recente d'aimoins trois mois <br>
									2. tout faux renseigment annule l'inscription du candidat <br>
									3. tout doit etre remplie en majuscule
								</p>
									<h4 class="heading">IMPORTANT
									
									</h4>
									<p>1. LA DATE du teste d'admissions est fixee au 27/11/2022. <br>
										2. se munir de sa fiche pour avoir acces dans la salle du test d'admission<br>
										3. confirmation de la place en payant la premiere tranche de minerval au plus tard le 31/10/2023 <br>
										
										<h4 class="heading">III. Pour les résidents de Lubumbashi</h4>
										<p>La soumission se fait au niveau du guichet, juste a l'entrée puis a votre
											gauche.
										</p>
							</div>
							<div class="wizard-header">
								<a href="https://upl-univ.ac/">
									<h5 class="heading" name>Revenier sur le site</h5>
								</a>
							</div>
								
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

<?php

$con=mysqli_connect("localhost","root","","test");
if(isset($_POST['En'])){

$Prenom=$_POST['Prenom'];
$Post_Nom=$_POST['Post_Nom'];
$Nom=$_POST['Nom'];
$Email=$_POST['Email'];
$Telephone=$_POST['Telephone'];
$Nom_du_pere=$_POST['Nom_du_pere'];
$province_h=$_POST['province'];
$Date_nn=$_POST['date_nn'];
$district=$_POST['district'];
$territoire=$_POST['territoire'];
$Lieux_d=$_POST['Lieux_d'];
$Nationalite=$_POST['Nationalite'];
$etats_civil=$_POST['etats_civil'];
$identite_et_adress=$_POST['identite_et_adress'];
$Adress_de_Résidence=$_POST['Adress_de_Résidence'];
$genre=$_POST['genre'];


$insert="INSERT INTO information SET Prenom='$Prenom',Post_Nom='$Post_Nom',Nom='$Nom',Email='$Email',Telephone='$Telephone',Nom_du_pere='$Nom_du_pere',province_h='$province_h',Date_nn='$Date_nn',distric='$district',territoire='$territoire',Lieux_d='$Lieux_d',Nationalite='$Nationalite',etats_civil='$etats_civil',identite_et_adress=$identite_et_adress,Adress_de_Résidence='$Adress_de_Résidence',genre='$genre'";

$query=mysqli_query($con,$insert);
}


?>