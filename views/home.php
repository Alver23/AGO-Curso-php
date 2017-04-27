<?php
session_start();
if (empty($_SESSION['userData'])) {
	header('Location: ../index.php');
}

include_once 'header.php';
?>

<div class="container">
	
</div>

<?php
include_once 'footer.php';
?>