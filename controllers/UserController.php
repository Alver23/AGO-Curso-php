<?php
session_start();
require_once '../models/User.php';

if ($_POST) {
	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$rst = login($email, $password);
		if ($rst->num_rows > 0) {
			$_SESSION['userData'] = $rst->fetch_array(MYSQLI_ASSOC);
			header('Location: ../views/home.php');
			// print_r($rst->fetch_all(MYSQLI_ASSOC));
			// exit;
		} else {
			// print "Email or password incorrect";
			// exit;
		}
	}
} else {
	if ($_GET['logout']) {
		$_SESSION['userData'] = null;
		header('Location: ../index.php');
	}
}