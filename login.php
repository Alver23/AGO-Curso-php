<?php
session_start();
if (!empty($_POST)) {
	$email = $_POST["correo_electronico"];
	$password = $_POST["Contrasena"];
	if ($email === "alver.grisales@hotmail.com" && $password === "123456") {
		header("location: home.php");
	} else {
		header("location: index.php");
	}
}