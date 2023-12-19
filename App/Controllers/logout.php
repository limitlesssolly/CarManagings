<?php


session_start();
$_SESSION = array();

session_destroy();

header("Location: ../../Views/pages/User/signup.php");
exit;
?>