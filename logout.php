<?php
session_start();
session_destroy();

header("Location: learnphp.php");