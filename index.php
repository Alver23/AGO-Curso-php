<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public/plugins/bootstrap-3.3.7-dist/css/bootstrap.css">
	<title>Login</title>
</head>
<body>
<div>
	<form action="login.php" method="post">
		<label>Correo Electronico:</label>
		<input type="email" name="email" required="">
		<label>Contraseña:</label>
		<input type="password" name="password" required="">
		<button type="submit">Iniciar Session</button>
	</form>
</div>
<script type="text/javascript" src="public/plugins/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="public/plugins/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body>
</html>