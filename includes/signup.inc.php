<?php

if (isset($_POST['submit'])) {
	
	require_once("dbh.inc.php");
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//Error Handlers
	//Check for empty fields

	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid_name");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=invalid_email");
				exit();
			} else {
				
				//Check for duplicate Username
				$sql = "SELECT * FROM users WHERE uid= '$uid'";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($result);
				
				if ($resultcheck > 0) {
					header("Location: ../signup.php?signup=Duplicate_Username");
					exit();
				} else {
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (first, last, email, uid, pwd) 
					VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=Success");
					exit();
				}
			}
		}
	}
}else {
	header("Location: ../signup.php");
	exit();
}
?>