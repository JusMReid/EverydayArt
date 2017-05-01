<?php 
session_Destroy();
session_start();
$_SESSION["isloggedin"] = False;
header("Location: index.php");
?>
