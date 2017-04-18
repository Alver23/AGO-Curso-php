<?php
require_once "config/connection.php";
$con = connect();
$sql = $con->query("SELECT id, name, email FROM users");
if ($sql->num_rows > 0) {
	//print "<pre>";
	//print_r($sql->fetch_all(MYSQLI_ASSOC));
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css?v=0.2.0">
</head>
<body>
<div class="container">
	<form method="post" action="">
		<div class="form-control">
			<label>Email:</label>
			<input type="email" name="email">
		</div>
		<div class="form-control">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<button type="submit" class="btn btn-blue">Login</button>
	</form>
</div>
</body>
</html>