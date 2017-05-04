<?php
require_once '../models/PermissionModel.php';
session_start();
if ($_POST) {
	if ($_POST['act'] === 'save') {
		save($_POST);
		header('Location: ../views/permission.php');
	}
	if ($_POST['act'] === 'update') {
		$id = $_POST['id'];
		update($id, $_POST);
		$_SESSION['permission'] = null;
		header('Location: ../views/permission.php');
	}
} else {
	if (!empty($_GET)) {
		if (!empty($_GET['id'])) {
			$permissionId = $_GET['id'];
			delete($permissionId);
			header('Location: ../views/permission.php');
		}
		if (!empty($_GET['idPermission'])) {
			$permissionId = $_GET['idPermission'];
			$permission = getPermissionById($permissionId);
			$_SESSION['permission'] = $permission;
			header('Location: ../views/permissionEdit.php');
		}
	}
}