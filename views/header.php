<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
<header class="header">
	<div class="welcome-message">
		<p>Bienvenido <?php print !empty($_SESSION['userData']) ? $_SESSION['userData']['name'] : null; ?></p>
	</div>
	<div class="logout">
		<a href="../controllers/UserController.php?logout=true">Sign Out</a>
	</div>
</header>