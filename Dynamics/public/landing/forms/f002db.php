<?php 
	session_start();
//mise en route
header('Content-Type: text/html; charset=utf-8');
require '../ccd/config.php';   
mysqli_set_charset($db, "utf8");

if (!isset($_SESSION['userid'])) {
	$userid = "anonymous";
}else {
	$userid = isset($_SESSION['userid']); 
}

//variable
$Q001 = "";
$Q002 = "";
$Q003 = "";
$Q004 = "";
$Q005 = "";
$Q006 = "";
$Q007 = "";
$Q008 = "";
$Q009 = "";
$Q010 = "";
$Q011 = "";
$Q012 = "";
$userid = "";


if (isset($_POST['insc_user'])) {
$Q001 = mysqli_real_escape_string($db, $_POST['Q001']);
$Q002 = mysqli_real_escape_string($db, $_POST['Q002']);
$Q003 = mysqli_real_escape_string($db, $_POST['Q003']);
$Q004 = mysqli_real_escape_string($db, $_POST['Q004']);
$Q005 = mysqli_real_escape_string($db, $_POST['Q005']);
$Q006 = mysqli_real_escape_string($db, $_POST['Q006']);
$Q007 = mysqli_real_escape_string($db, $_POST['Q007']);
$Q008 = mysqli_real_escape_string($db, $_POST['Q008']);
$Q009 = mysqli_real_escape_string($db, $_POST['Q009']);
$Q010 = mysqli_real_escape_string($db, $_POST['Q010']);
$Q011 = mysqli_real_escape_string($db, $_POST['Q011']);
$Q012 = mysqli_real_escape_string($db, $_POST['Q012']);
$Q013 = mysqli_real_escape_string($db, $_POST['Q013']);


$query = "INSERT INTO forms002 (Q001, Q002, Q003, Q004, Q005, Q006, Q007, Q008, Q009, Q010, Q011, Q012, Q013, userid) 
					  VALUES('$Q001', '$Q002', '$Q003', '$Q004', '$Q005', '$Q006', '$Q007', '$Q008', '$Q009', '$Q010', '$Q011', '$Q012', '$Q013', '$userid')";
					  
if ($db->query($query) === TRUE) {
	header('location: success.php');
  } else {
	echo "Error: " . $query . "<br>" . $db->error;
  }
}

?>