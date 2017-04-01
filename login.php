<?php
session_start();
require 'models/User.php';
if ($_POST) {
	$email = !empty($_POST['email']) ? $_POST['email'] : null;
	$password = !empty($_POST['password']) ? $_POST['password']: null;
	if (empty($email) || empty($password)) {
		header('location: index.php');
	}
	$userData = login($email, $password);
	if (count($userData) > 0) {
		$_SESSION['user_data'] = $userData;
		header('location: home.php');
	}
}