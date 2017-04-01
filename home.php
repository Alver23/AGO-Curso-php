<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<p>Bienvenido <?php print !empty($_SESSION['user_data']) ? $_SESSION['user_data']['profile'] : null; ?></p>

<a href="logout.php">Cerrar Session</a>
</body>
</html>