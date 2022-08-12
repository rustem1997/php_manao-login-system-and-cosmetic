<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("location: login.php");
	exit();
}

if (isset($_GET['logout'])) {
	unset($_SESSION['user']);
	header("location: login.php");
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<title>User account</title>
</head>

<body style="background-color:#503b14; ">
	<div class="contener">
		<div class="content">


			<h1 class="texth1">Добро пожаловать MANAO</h1> <br>
			<h2>Космтика товары для красоты </h2> <br>

			<h2> <?php echo $_SESSION['user']; ?><h2>
					<hr> <br>
					<h2> <?php echo $_SESSION['user']; ?><h2>
							<hr> <br>

							<a href="./main/main.php" style="color:black ;">Главный меню</a>
							<hr > <br>
						
							<a href="?logout" style="color:red ;">Выйты </a>
							
							
					

		</div>
		<div class="phote_t">
			<img src="./css/2.jpg" alt="" srcset="">
		</div>
	</div>
</body>

</html>