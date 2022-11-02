<?php
session_start();
if (!isset($_SESSION['si']) || !isset($_SESSION['no'])) {
	if (isset($_COOKIE['si'])) {
		$_SESSION['si'] = $_COOKIE['si'];
		$_SESSION['no'] = $_COOKIE['no'];
	} else {
		$_SESSION['si'] = 0;
		$_SESSION['no'] = 0;
	}
}
if (isset($_POST['si'])) {
	$_SESSION['si']++;
	setcookie('si', $_SESSION['si'], time() + 3 * 30 * 24 * 60 * 60);
}
if (isset($_POST['no'])) {
	$_SESSION['no']++;
	setcookie('no', $_SESSION['no'], time() + 24 * 60 * 60);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h3>¿Crees que el fútbol es mejor que el baloncesto?</h3>
	<h1>SI
		<?php
		for ($i = 1; $i <= $_SESSION['si']; $i++) { ?>
			<img src="barra.jpg">
		<?php
		}
		?>
	</h1>
	<h1>NO
		<?php
		for ($i = 1; $i <= $_SESSION['no']; $i++) { ?>
			<img src="barra2.jpg">
		<?php
		}
		?>
	</h1><br><br>
	<form action="#" method="post">
		<input type="submit" name="si" value="SI">
		<input type="submit" name="no" value="NO">
	</form>
</body>

</html>