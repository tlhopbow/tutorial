<?php
	session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT UPPER( * FROM user WHERE uid='$uid') AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	echo "Your username or password is incorrect!";
} else {
	$_SESSION['ID'] = $row['ID'];

}

header("Location: index.php");
