<html>
<head>
	<title>Whispering Winds Park | Sign Up</title>
	<link rel="stylesheet" href="./css/style.css">
</head>

<header>
	<?php
	require_once 'header.php';
?>
</header>
<section id="SIGNUP" style="text-align: center;" class="main-container">
	<div class="container" style="width:100%;">
		<h2 style="text-align:center; font-size:50px;">Sign Up</h2>
		<form class="signup-form" id="newsletter" style="padding-top:50px; padding-bottom:50px; border-bottom:#e8491d 3px solid; border-top:#e8491d 3px solid;"action="includes/signup.inc.php" method="POST">
			<input type="text"  name="first" style="padding:4px; height:5%; width:25%; text-align:center; font-size:30px;" placeholder="First Name"><br>
			<input type="text" name="last" style="padding:4px; height:5%; width:25%; text-align:center; font-size:30px;" placeholder="Last Name"><br>
			<input type="email" name="email" style="padding:4px; height:5%; width:25%; text-align:center; font-size:30px;" placeholder="E-Mail"><br>
			<input type="text" name="uid" style="padding:4px; height:5%; width:25%; text-align:center; font-size:30px;" placeholder="UserName"><br>
			<input type="password" name="pwd" style="padding:4px; height:5%; width:25%; text-align:center; font-size:30px;" placeholder="Password"><br>
			<button type="submit" class="button_1" style=" padding:4px; height:5%; width:25%; font-size:30px;" name="submit">Sign Up</button>
		</form>
	</div>
</section>


<?php
	include_once 'footer.php';
?>

</html>
