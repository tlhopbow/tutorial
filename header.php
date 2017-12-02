<?php
 @session_start();
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>$(document).ready(function(){
  $('#login-trigger').click(function(){
    $(this).next('#login-content').slideToggle();
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
      else $(this).find('span').html('&#x25BC;')
    })
});</script>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
  <div class="container">
      <div id="branding">
        <h1><span class="highlight">Whispering</span> Winds Park</h1>
      </div>
      <nav>
          <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="index.php">Our Mission</a></li>
            <li><a href="index.php">Donate</a></li>
            <li><a href="campground.php">Camping</a></li>



<?php
  if (isset($_SESSION["u_uid"])) {
    echo '
    <li><form action="includes/logout.inc.php" method="POST">
    <button type="submit" class="button_1" name="Submit">Logout</button>
    </form></button></li>';
  } else {
    echo
    ' <li id="login">
      <a id="login-trigger" href="#">
        <button class="button_1">Log in <span>▼</span></button>
      </a>
      <div id="login-content">

<form action="includes/login.inc.php" method="POST">
          <fieldset id="inputs">
            <input type="text" name="uid" placeholder="Username" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <button type="submit" class="button3" name="Submit">Log In</button>
          </fieldset>
        </form>
      </div>
    </li>
    <li id="signup">
      <a href="signup.php"><button class="button_1">Sign up</button></a>
    </li>'
    ;



  }
?>

          </ul>
      </nav>
    </div>
</header>
  </body>
