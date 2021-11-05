<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Connexion</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@7.2.0/dist/css/autoComplete.min.css">
  <link rel="stylesheet" type="text/css" href="data/style.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "UA-129399191-2");
    </script>
</head>
<body >
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="login.php">
      <h1><strong> Inscription </strong></h1>
    <?php include('errors.php'); ?>
      <div class="row">
        <!-- COLONNE 1-->
        <div class="column">
          <input type="text" placeholder="Nom" name="nom"/>
          <input type="text" placeholder="Prénon" name="prenom"/>
            <div>
                <label for="bday">Date de naissance :</label>
                <input type="date" id="start" name="tripstart" value="" max="2018-12-31" >
            </div>
            <div>
              <input  name="sexe" id="sexe"  type="search" placeholder="Genre (Masculin ou féminin)"  />
            </div>
          <div >
          <div class="ui-widget">
          <input id="pays" type="search" placeholder="Pays de résidance" name="cityadressa"/>
          </div>
          <input id= "departements" type="search" placeholder="Département de résidance" name="cityadressb"/>

          <input id="communes" type="search" placeholder="Ville ou Commune de résidance" name="cityadressc"/>

          <input id="ville" type="search" placeholder="Choisir 'Autre' ou la Ville de résidance" name="cityadressd"/>

          </div>
        </div>
        <!-- COLONNE 2-->
        <div class="column">
        <label for="bday">Mot de passe</label>
          <input type="password" placeholder="Mot de passe" name="password_1"/>
          <input type="password" placeholder="Mot de passe (répété)" name="password_2"/>
          <label for="bday">Informations personnels</label>
          <input type="email" placeholder="email address" name="email"/>
          <input name="Q006" placeholder="Employé ou Sans emploi?" type="text" list="worksug" value=""/>
													<datalist id="worksug">
														<option>Employé</option>
														<option>Sans emploi</option>
													</datalist>
          <input type="text" placeholder="Si employé, quelle est la profession" name="work"/>
          <div >
            <label for="bday">Code de parrainage</label>
            <input type="text" placeholder="Entrer le Code de votre parrain" name="parn"/>
          </div>
          <label for="bday">Contacts</label>
          <input type="tel" placeholder="Numéro de téléphone 1 (sans l'indicatif)" name="telone"/>
          <input type="tel" placeholder="Numéro de téléphone 2 (sans l'indicatif)" name="teltwo"/>
        </div>
      </div>
      <button type="submit" name="reg_user">Enregistrer</button>
      <p class="message">Déjà inscrit? <a href="#">Se connecter</a></p>
    </form>

    <form class="login-form" method="post" action="login.php">
    <h1><strong>Connexion </strong></h1>
      <?php include('errors.php'); ?>
      <input type="email" placeholder="Email " name="email"/>
      <input type="password" placeholder="Mot de passe" name="password"/>
      <button type="submit" name="login_user">Se Connecter</button>
      <p class="message">S'inscrire <a href="#">ici!</a></p>
    </form> 

  </div>

</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="./data/jdata.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@7.2.0/dist/js/autoComplete.min.js"></script>
<script>
  $(".message a").click(function () {
    $("form").animate({ height: "toggle", opacity: "toggle" }, "slow");
  });
</script>
</body>
</html>