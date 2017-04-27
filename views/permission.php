<?php
session_start();
if (empty($_SESSION['userData'])) {
	header('Location: ../index.php');
}

include_once 'header.php';
?>

<div class="container">
	<form action="../controllers/PermissionController.php" method="post">
		<input type="hidden" name="act" value="save">
		<div class="form-control">
			<label>Name:</label>
			<input type="text" name="name">
		</div>
		<div class="form-control">
			<label>Display Name:</label>
			<input type="text" name="display_name">
		</div>
		<div class="form-control">
			<label>Description:</label>
			<textarea name="description" cols="50" rows="5"></textarea>
		</div>
		<button type="submit" class="btn btn-blue">Save</button>
		<button type="reset">Reset</button>
	</form>
</div>

<?php
include_once 'footer.php';
?>