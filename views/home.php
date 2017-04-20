<?php
session_start();
if (empty($_SESSION['userData'])) {
	header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<p>Bienvenido <?php print !empty($_SESSION['userData']) ? $_SESSION['userData']['name'] : null; ?></p>

<a href="../controllers/UserController.php?logout=true">Cerrar Session</a>
</body>
</html>