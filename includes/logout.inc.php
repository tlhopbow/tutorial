<?php

if (isset($_POST['Submit'])) {
	session_start();
	session_unset();
	session_destroy(); 
	header("Location: ../index.php");
	exit();
}
?>