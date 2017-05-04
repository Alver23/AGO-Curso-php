<?php

require_once "../config/connection.php";

function save ($data) {
	$con = connect();
	$SQL = sprintf("INSERT INTO permissions (name, display_name, description) 
		VALUES ('%s', '%s', '%s')", $data['name'], $data['display_name'], $data['description']);
	$con->query($SQL);
}

function getPermission()
{
	$con = connect();
	$sql = ("SELECT * FROM permissions");
	$results = $con->query($sql);
	return $results->fetch_all(MYSQLI_ASSOC);
}

function delete($id)
{
	$con = connect();
	$sql = sprintf("DELETE FROM permissions WHERE id = %d", $id);
	$con->query($sql);
}

function getPermissionById($id)
{
	$con = connect();
	$sql = ("SELECT * FROM permissions WHERE id = ".$id);
	$results = $con->query($sql);
	return $results->fetch_array(MYSQLI_ASSOC);
}

function update($id, $data)
{
	$con = connect();
	$sql = sprintf("UPDATE permissions
			SET name = '%s', display_name = '%s', description = '%s' WHERE id = %d",
			$data['name'], $data['display_name'], $data['description'], $id);
	$con->query($sql);
}