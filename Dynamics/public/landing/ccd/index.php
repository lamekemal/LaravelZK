<?php 
	session_start(); 

	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: login.php");
	}

?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="font-awesome/css/all.css" rel="stylesheet" />
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Bonjour </a> <?php echo $_SESSION['email']; ?> </h1>
		</div>
		<div id="menu">
            <ul>
                <li class="current_page_item"><a href="index.php?logout='1'" accesskey="1" title="">Se déconnecter</a></li>
                <!--li><a href="#" accesskey="2" title="">Our Clients</a></!--li>-->
            </ul>
		</div>
	</div>
	</div>
	<div id="banner">
		<div class="container">
			<div class="title">
				<div id="three-column">
					<div class="boxA">
						<div class="ebox">
							<p style="font-size:90px; margin-bottom: 0px;">0  CFA</p>
							<p style="margin-bottom: 0px;">portefeuille ZK consulting.</p>
						</div>
					</div>
					<div class="boxB">
						<div class="ebox">
							<p style="font-size:90px; margin-bottom: 0px;">0  CFA</p>
							<p style="margin-bottom: 0px;">Enquete(s) disponible.</p>
						</div>
					</div>
					<div class="boxC">
						<div class="ebox">
							<p style="font-size:90px; margin-bottom: 0px;">0  CFA</p>
							<p style="margin-bottom: 0px;">Enquete(s) réalisée(s).</p>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
	<div id="extra" class="container">
		<div class="title">
			<h2>Enquete(s) disponible</h2>
			<span class="byline">Retrouvez ici, les enquêtes disponible. Tapez sur l'icône d'une enquête pour remplir</span>
		</div>
		<div id="three-column">
			<div class="boxA">
			<div class="box"> <p style="font-size:90px; margin-bottom: 0px;"><i class="fas fa-file-import"></i></p>
				<p>Enquette de  satisfaction de la ville de Porto - Novo.</p>
				<p> <b>Prix :</b> 100 F CFA.</p>
				<ul class="actions">
				<li><a href="../forms/forms002.php" class="button">Remplir</a></li>
			</ul>
			</div>
		</div>
		<!--<div class="boxB">
			<div class="box"> <span class="fa fa-cogs"></span>
				<p>Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis.</p>
			</div>
		</div>
		<div class="boxC">
			<div class="box"> <span class="fa fa-user"></span>
				<p> Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus.</p>
			</div>
		</div>-->
		</div>
		<!--<ul class="actions">
				<li><a href="#" class="button">Etiam posuere</a></li>
			</ul>-->
		</div>
		<div id="featured">
			<div class="container">
				<div class="title">
					<h2>Code de parrainage</h2>
					<span class="byline">Communiquer ce code à votre ami afin de devenir son parrain pour ces enquête et gagner 10 % de revenus supplémentaire sur chaque enquête. </span> </div>
				<p>Votre code de parrainage est le : </p>
			</div>
			<ul class="actions">
				<li><a href="#" class="button"><?php echo $_SESSION['myparnc']; ?> </a></li>
			</ul>
		</div>

	</div>
	<div id="copyright" class="container">
		<p>&copy; Untitled. All rights reserved. Zk Consulting by Archeos.</p>
	</div>
	</body>
	</html>
