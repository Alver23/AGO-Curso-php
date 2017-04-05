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
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="login.php" method="post">
				<div class="form-group">
					<label for="correo_electronico">Correo Electronico:</label>
					<input type="email" name="email" id="correo_electronico" required="" class="form-control">
				</div>
				<div class="form-group">
					<label for="contrasena">Contraseña:</label>
					<input type="password" name="password" id="contrasena" required="" class="form-control">
				</div>
		
				<button type="submit" class="btn btn-primary">Iniciar Session</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="public/plugins/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="public/plugins/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body>
</html>