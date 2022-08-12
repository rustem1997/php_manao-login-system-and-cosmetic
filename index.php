
<?php require("register.class.php") ?>
<?php
if (isset($_POST['submit'])) {

	$user = new RegisterUser(
		$_POST['username'],
		$_POST['userlogin'],
		$_POST['usermail'],
		$_POST['password'],
		$_POST['cpassword']
	);
}

include './parts/header.php';
include './parts/form.php';
include './parts/footer.php';
?>





