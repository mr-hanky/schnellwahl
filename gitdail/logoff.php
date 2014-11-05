<?php
session_start();
$_SESSION["login"] = false; // We can't use unset($_SESSION) when using HTTP_AUTH.
$_SESSION['database']='';
session_destroy();
echo "out";
?>
