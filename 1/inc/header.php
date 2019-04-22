<?php

$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../lib/Session.php';
Session::init();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login and Register System </title>

  <script src="inc/jquery.min.js"> </script>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
</head>


<?php 
 if (isset($_GET['action']) && $_GET['action'] == "logout"){
           Session::destroy();
 }
?>

<body>
  
<?php
  $id = Session::get("id");
  $userlogin = Session::get("login");
  if ($userlogin == true) {
?>

<a class="btn btn-warning" href="?action=logout">Logout </a>

<?php } ?>
