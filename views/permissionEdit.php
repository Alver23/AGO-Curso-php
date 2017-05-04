<?php
session_start();
if (empty($_SESSION['userData'])) {
	header('Location: ../index.php');
}

include_once 'header.php';

if (!empty($_SESSION['permission'])) {
?>
	<div class="container">
		<form action="../controllers/PermissionController.php" method="post">
			<input type="hidden" name="act" value="update">
			<input type="hidden" name="id" value="<?php print $_SESSION['permission']['id']?>">
			<div class="form-control">
				<label>Name:</label>
				<input type="text" name="name" value="<?php print $_SESSION['permission']['name']?>" >
			</div>
			<div class="form-control">
				<label>Display Name:</label>
				<input type="text" name="display_name" value="<?php print $_SESSION['permission']['display_name']?>">
			</div>
			<div class="form-control">
				<label>Description:</label>
				<textarea name="description" cols="50" rows="5"><?php print $_SESSION['permission']['description']?></textarea>
			</div>
			<button type="submit" class="btn btn-blue">Update</button>
			<button type="reset">Reset</button>
		</form>
	</div>

<?php
}
include_once 'footer.php';
?>