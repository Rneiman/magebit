<div class="main-wrapper">
  <div class="login-wrapper">

<?php include 'inc/header.php'; 
      include 'lib/User.php';
      Session::checkSession();
      $user = new User();
?>

<?php
  $loginmsg = Session::get("loginmsg");
  if (isset($loginmsg)) {
  	echo $loginmsg;
  }
  Session::set("loginmsg" , NULL);

?>

		<h2>Welcome</h2>
	</div>
</div>

<?php include 'inc/footer.php'; ?>
