
<?php include 'inc/header.php'; 
   include 'lib/User.php';
   Session::checkLogin();
?>
<?php
    $user = new User();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
    	$usrLogin = $user->userLogin($_POST);
    }
?>

<?php
 if (isset($usrLogin)){
 	echo $usrLogin;
 }
?>