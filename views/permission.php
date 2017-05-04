<?php
session_start();
if (empty($_SESSION['userData'])) {
	header('Location: ../index.php');
}
require_once '../models/PermissionModel.php';

$permissions = getPermission();
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

<div>
	<table>
		<thead>
			<tr>
				<th>
					Name
				</th>
				<th>
					Display Name
				</th>
				<th>
					Description
				</th>
				<th>
					Actions
				</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($permissions as $permission) {
				$permissionId = $permission['id'];
				?>
				<tr>
					<td>
						<?php print $permission['name']; ?>
					</td>
					<td>
						<?php print $permission['display_name']; ?>
					</td>
					<td>
						<?php print $permission['description']; ?>
					</td>
					<td>
						<a href="../controllers/PermissionController.php?id=<?php print $permissionId; ?>">Eliminar</a>

						<a href="../controllers/PermissionController.php?action=editar&idPermission=<?php print $permissionId; ?>">Editar</a>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</div>

<?php
include_once 'footer.php';
?>