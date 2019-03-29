<?php

session_start();

$_SESSION['profileToLoad'] = filter_input(INPUT_GET, 'profileToLoad');
header("Location: getuserprofile.php");
die();

?>