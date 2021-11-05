<?php 
	session_start();

	// variable declaration
	$nom = "";
	$parn = "";
	$prenom = "";
	$tripstart =  "";
	$sexe = "";
	$cityadressa = "";
	$cityadressb = "";
	$cityadressc = "";
	$cityadressd = "";
	$work = "";
	$worki = "";
	$Q006 = "";
	$telone = "";
	$teltwo =  "";
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$userid = "";
	$myparnc = "";

	// connect to database
	require 'config.php'; 

	function GUID()
	{
		if (function_exists('com_create_guid') === true)
		{
			return trim(com_create_guid(), '{}');
		}
		return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
	}


    function Parntoken($guid)
    {
        $ceed = str_split($guid
        .$guid); 
        $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                    .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                    .'0123456789'); // and any other characters

        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        $randchild = '';
        foreach (array_rand($seed, 4) as $k) $rand .= $seed[$k];
        foreach (array_rand($ceed, 2) as $a) $randchild .= $ceed[$a];
        return $rand . $randchild;
    }


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$nom = mysqli_real_escape_string($db, $_POST['nom']);
		$parn = mysqli_real_escape_string($db, $_POST['parn']);
		$prenom = mysqli_real_escape_string($db, $_POST['prenom']);
		$tripstart = mysqli_real_escape_string($db, $_POST['tripstart']);
		$sexe = mysqli_real_escape_string($db, $_POST['sexe']);
		$cityadressa = mysqli_real_escape_string($db, $_POST['cityadressa']);
		$cityadressb = mysqli_real_escape_string($db, $_POST['cityadressb']);
		$cityadressc = mysqli_real_escape_string($db, $_POST['cityadressc']);
		$cityadressd = mysqli_real_escape_string($db, $_POST['cityadressd']);
		$Q006 = mysqli_real_escape_string($db, $_POST['Q006']);
		$worki = mysqli_real_escape_string($db, $_POST['work']);
		$work = $Q006 ." - " .$worki;
		$telone = mysqli_real_escape_string($db, $_POST['telone']);
		$teltwo = mysqli_real_escape_string($db, $_POST['teltwo']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($nom)) { array_push($errors, "Nom requis !"); }
		if (empty($email)) { array_push($errors, "Email requis!"); }
		if (empty($password_1)) { array_push($errors, "Mot de passe requis!"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Les deux mots de passe ne correspondent pas!");
		}

		$query = "SELECT * FROM clclient WHERE email='$email' AND telone='$telone'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) < 1) {
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$userid = GUID();
			$myparnc = Parntoken($userid);

			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO clclient (userid, nom, prenom, tripstart, sexe, cityadressa, cityadressb, cityadressc, cityadressd, parn, myparnc, work,  telone, teltwo, email, password) 
					  VALUES('$userid', '$nom', '$prenom', '$tripstart', '$sexe', '$cityadressa', '$cityadressb', '$cityadressc', '$cityadressd', '$parn', '$myparnc', '$work', '$telone', '$teltwo', '$email', '$password')";
			mysqli_query($db, $query);

			//$_SESSION['email'] = $email;
			//$_SESSION['success'] = "Connecter!";
			header('location: index.php');
		}
	}else {
		array_push($errors, "Un autre compte a été enregistré avec les l'email ou le numéro saisi.");
	}
	}

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Email requis");
		}
		if (empty($password)) {
			array_push($errors, "Mot de passe requis");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM clclient WHERE email='$username' AND password='$password'";
			$sqry = "SELECT myparnc, userid, email FROM clclient WHERE email='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			$retval = mysqli_query($db, $sqry);

			if (mysqli_num_rows($results) == 1) {
				$rox = $retval->fetch_array(MYSQLI_ASSOC);
				//$rox = mysqli_fetch_array($retval, MYSQLI_ASSOC)
					$_SESSION['myparnc'] = $rox["myparnc"];
					$_SESSION['userid'] = $rox["userid"];
					$_SESSION['email'] = $rox["email"];

				//$_SESSION['email'] = $username;
				$_SESSION['success'] = "Vous êtes connecté";
				header('location: index.php');
			}else {
				array_push($errors, "Nom d'utilisateur ou mot de passe erroné");
			}
		}
	}

?>