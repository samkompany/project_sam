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
				<form class="form-register" action="index.php" method="post">
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
		        <form class="form-register" action="index.php" method="post">
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
											<legend>nom</legend>
											<input type="text" class="form-control"  name="nom" placeholder="nom" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>post-nom</legend>
											<input type="text" class="form-control"  name="post_nom" placeholder="post_Nom" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>pre_nom</legend>
											<input type="text" class="form-control"  name="pre_nom" placeholder="pre_nom" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Votre Email</legend>
											<input type="text" name="email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="exemple@email.com" required/>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Téléphone</legend>
											<input type="text" class="form-control"  name="Telephone"  required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>nom des parent</legend>
											<input type="text" class="form-control" name="nom_des_parent" placeholder="Nom du pere/Nom de la mere" required>
										</fieldset> 
									</div>


									
									<div class="form-holder">
										<fieldset>
											<legend>provice d'origine de parents</legend>
											<input type="text" class="form-control" name="province_d_horigine_des_parent"  required>
										</fieldset>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<legend>Date de Naissance</legend>
										<input type="DATE" name="date_de_naissance" >
									</div>

									<div class="form-holder">
										<fieldset>
											<legend>district</legend>
											<input type="text" class="form-control"  name="district"  required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>territoire</legend>
											<input type="text" class="form-control" name="territoire"  required>
										</fieldset>
									</div>
								</div>
								<!-- la date -->
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Lieu de Naissance</legend>
										<input type="text" class="form-control input-border" name="Lieux_de_naissance"  required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Nationalité</legend>
										<input type="text" class="form-control input-border"  name="Nationalite"  required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Etat Civil</legend>
										<input type="text" class="form-control input-border" name="etats_civil"  required>
									</div>
								</div>

								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>identite  et adresse de la personne a conctacter en cas d'urgence</legend>
										<input type="text" class="form-control input-border" name="identite_en_cas_durgence" placeholder="nom_adresse_numero...." required>
									</div>
								</div>


								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Adresse de Résidence</legend>
										<input type="text" class="form-control input-border" name="adresse_de_Résidence" placeholder="Adresse de Résidence" required>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<legend>Genre:</legend>
										<select name="genre" >
											<option value="M" >M</option>
											<option value="F">F</option>
										</select>
									</div>
								</div>
							
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
											<input type="text" name="diplome_acces" class="form-control"  placeholder="Nom de l'établissement fréquenté" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Adresse de l'établissement</legend>
											<input type="text" name="adresse-ecole" class="form-control"  required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Section suivie aux humanités</legend>
											<input type="text" name="section_humanites" class="form-control"  placeholder="Section suivie aux humanités" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Année d'obtention du diplome</legend>
											<input type="number" class="form-control"   name="annee_diplome" placeholder="Année d'obtention" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>Pourcentage</legend>
											<input type="number" class="form-control" name="Pourcentage_du_diplome" placeholder="Pourcentage" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Numéro du diplome d'Etat</legend>
											<input type="text" name="numero_diplome" class="form-control"  placeholder="Numéro du diplome d'Etat" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>province</legend>
											<input type="text" name="province"  class="form-control"  placeholder="" required>
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
												<select name="">
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
											<option value="1">journalisme</option>
											<option value="2">communication des organisation</option>
											<option value="3">multimedia et communication digital</option>
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
										<option value="1">finace de banque</option>
										<option value="2">marketing</option>
										<option value="3">ressource humaines</option>
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
												<option value="1">Genie des materiel et de procedes</option>
												<option value="2">Electromanetique</option>
												<option value="3">Architecture</option>
												<option value="4">Geomines</option>
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
												<option value="1">ingenieurie des systeme informatique</option>
												<option value="2">reseaux et telecommunication</option>
												<option value="3">informatique de gestion</option>
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
						<center>
						<input type="submit"  value="envoyer" name="valider"/>
						</center>
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

if(isset($_POST['nom ']))
{

	$con = new PDO("mysql:host=localhost; dbname=projet",'root','');

$nom = $_POST['nom'];
$post_nom = $_POST['post_nom'];
$pre_nom = $_POST['pre_nom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$nom_des_parent = $_POST['nom_des_parent'];
$province_d_horigine_des_parent = $_POST['province_d_horigine_des_parent'];
$date_de_naissance = $_POST['date_de_naissance'];
$district= $_POST['district'];
$territoire = $_POST['territoire'];
$Lieux_de_naissance= $_POST['Lieux_de_naissance'];
$Nationalite = $_POST['Nationalite	'];
$etats_civil = $_POST['etats_civil'];
$identite_en_cas_durgence = $_POST['identite_en_cas_durgence'];
$adresse_de_Résidence = $_POST['adresse_de_Résidence'];
$genre=$_POST['genre'];
$diplome_acces=$_POST['diplome_acces'];
$adresse_ecole=$_POST['adresse_ecole'];
$section_humanites=$_POST['section_humanites'];
$annee_diplome=$_POST['annee_diplome'];
$Pourcentage_du_diplome=$_POST['Pourcentage_du_diplome'];
$numero_diplome=$_POST['numero_diplome'];
$province=$_POST['province'];

$sql = " INSERT INTO  user(nom,post_nom,pre_nom,email,telephone,nom_des_parent,province_d_horigine_de_parent,date_de_naissance,
district,terriroire,lieux_de_naissance,Nationalite,etat_civil, identite_en_cas_durgence,adresse_de_Résidence,genre,
diplome_acces,adresse_ecole,section_humanites,annee_diplome,Pourcentage_du_diplome,numero_diplome,province) VALUES  (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $con->prepare($sql);
$res = $stmt->execute([$nom,$post_nom,$pre_nom,$email,$telephone,$nom_des_parent,$province_d_horigine_de_parent,$date_de_naissance,
$district,$terriroire,$lieux_de_naissance,$Nationalite,$etat_civil, $identite_en_cas_durgence,$adresse_de_Résidence,$genre,
$diplome_acces,$adresse_ecole,$section_humanites,$annee_diplome,$Pourcentage_du_diplome,$numero_diplome,$province]);

if($res){

    echo("inscription reussi");    
    } else {
    echo("echec !"); 
    }


};
?>