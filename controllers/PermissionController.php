<?php
require_once '../models/PermissionModel.php';
if ($_POST) {
	if ($_POST['act'] === 'save') {
		save($_POST);
		header('Location: ../views/permission.php');
	}
} else {

}