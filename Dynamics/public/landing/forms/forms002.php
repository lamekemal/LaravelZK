<?php include('f002db.php') ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Formulaire de renseignement</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="contact">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="../index.html">Zk <span>Consulting</span></a></h1>
					<nav id="nav">
						<!--<ul>
							<li class="current"><a href="#">Faite vous des revenus en répondant à des formulaires d'enquettes.</a></li>
							<li><a href="../ccd/intex.php" class="button special">En savoir plus</a></li>
						</ul> -->
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-world"></span>
						<h2> <b>FORMULAIRE D'ENQUETES</b> </h2>
						<p>Merci de répondre à toutes les questions suivante.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container 75%">

							<!-- Content -->
								<div class="content">
									<form class="register-form" method="post" action="forms002.php">
										<div class="row 50%">
											<label for="bday">Nom</label>
											<div class="12u">
												<input type="text" name="Q001" placeholder="Nom" />
											</div>
										</div>

										<div class="row 50%">
											<label for="bday">Prénoms</label>
											<div class="12u">
												<input type="text" name="Q002" placeholder="Prénoms" />
											</div>
										</div>

										<div class="row 50%">
											<label for="bday">Département</label>
											<div class="12u">
											<input name="Q003" placeholder="Ouémé" type="text" list="Suggestions"/>
													<datalist id="Suggestions">
														<option>Ouémé</option>
													</datalist>
											</div>
										</div>
										<div class="row 50%">
											<label for="bday">Ville</label>
											<div class="12u">
											<input name="Q004" placeholder="Porto-Novo" type="text" list="sdc"/>
													<datalist id="sdc">
														<option>Porto-Novo</option>
													</datalist>
											</div>
										</div>
										<div class="row 50%">
											<label for="bday">Arrondissement</label>
											<div class="12u">
											<input name="Q005" placeholder="Arrondisment 1,2,..." type="text" list="sed"/>
													<datalist id="sed">
														<option>Arrondisment 1</option>
														<option>Arrondisment 2</option>
														<option>Arrondisment 3</option>
														<option>Arrondisment 4</option>
														<option>Arrondisment 5</option>

													</datalist>
											</div>
										</div>

										<div class="row 50%">
											<label for="bday">Que pensez-vous de la commune de porto-Novo?</label>
											<div class="12u">
												<input type="text" name="Q006" placeholder="Texte" />
											</div>
										</div>

										<div class="row 50%">
											<label for="bday">Que pensez vous des actions du gouvernement dans votre localité</label>
											<div class="12u">
											<input name="Q007" placeholder="Satisfait, pas satisfait..." type="text" list="xcv"/>
													<datalist id="xcv">
														<option>Pas Satisfait</option>
														<option>Satisfait</option>
														<option>Très satisfait</option>
													</datalist>
											</div>
										</div>

										<div class="row 50%">
											<label for="bday">Quel est le personnage politique dans la ville que vous connaissez le plus?</label>
											<div class="12u">
											<input name="Q008" placeholder="Ecrire..." type="text" list="nhj"/>
													<datalist id="nhj">
														<option>Jean Claude Houssou</option>
														<option>Adidjatou Mathys</option>
														<option>Safiatou Chanou</option>
														<option>David Biokou</option>
														<option>Charlemagne Yancotin</option>
														<option>Moukaram Océni</option>
														<option>Gaston Zossou</option>
													</datalist>
											</div>
										</div>
										<div class="row 50%">
											<label for="bday">Quel est le personnage politique dont vous avez le plus confiance?</label>
											<div class="12u">
											<input name="Q008" placeholder="Ecrire..." type="text" list="aze"/>
													<datalist id="aze">
														<option>Jean Claude Houssou</option>
														<option>Adidjatou Mathys</option>
														<option>Safiatou Chanou</option>
														<option>David Biokou</option>
														<option>Charlemagne Yancotin</option>
														<option>Moukaram Océni</option>
														<option>Gaston Zossou</option>
													</datalist>
											</div>
										</div>
										<div class="row 50%">
											<label for="bday">Dans la ville de Porto-novo, quel personnage politique peut porter le massage du 
												Président Talon dans la perspective de sa réélection en 2021</label>
											<div class="12u">
											<input name="Q010" placeholder="Ecrire..." type="text" list="erf"/>
													<datalist id="erf">
														<option>Jean Claude Houssou</option>
														<option>Adidjatou Mathys</option>
														<option>Safiatou Chanou</option>
														<option>David Biokou</option>
														<option>Charlemagne Yancotin</option>
														<option>Moukaram Océni</option>
														<option>Gaston Zossou</option>
													</datalist>
											</div>
										</div>

										<div class="row 50%">
											<label for="bday">Quelles sont vos attentes dans la perspective des élection de 2021?</label>
											<div class="12u">
												<input type="text" name="Q011" placeholder="Ecrire..." />
											</div>
										</div>


										<div class="row 50%">
											<label for="bday">Quelles peut être l'offre politique de la campagne?</label>
											<div class="12u">
												<input type="text" name="Q012" placeholder="Ecrire..." />
											</div>
										</div>

										
										<div class="row 50%">
											<label for="bday">Quelles sont vos les domaines d'action qui peuvent motiver et susciter 
												l'adhésion de la jeunesse pour le compte du candidat Talon?</label>
											<div class="12u">
												<input type="text" name="Q013" placeholder="Ecrire..." />
											</div>
										</div>


										<div class="row">
											<div class="12u">
												<ul class="buttons">
													<li><input type="submit" name="insc_user"class="special" value="Enregistrer" /></li>
												</ul>
												<ul>
														<li class="current">Merci pour vos différentes réponses.</li>
													</ul> 
											</div>
										</div>
									</form>
								</div>

						</section>

				</article>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>