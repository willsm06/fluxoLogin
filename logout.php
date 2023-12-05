<?php

session_start();

$_SESSION = array();

session_destroy();

header("Location: index.php");

$_SESSION['erro'] = -2;
exit();

?>
