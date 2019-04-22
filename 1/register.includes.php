<?php
			$user = new User();
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
				$usrRegi = $user->userRegistration($_POST);
			}
	?>
	<?php
		if (isset($usrRegi)){
			echo $usrRegi;
		}
	?>