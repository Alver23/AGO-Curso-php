<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css?v=0.2.0">
</head>
<body>
<div class="container">
	<form method="post" action="controllers/UserController.php">
		<div class="form-control">
			<label>Email:</label>
			<input type="email" name="email">
		</div>
		<div class="form-control">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<button type="submit" class="btn btn-blue">Sign In</button>
	</form>
</div>
</body>
</html>