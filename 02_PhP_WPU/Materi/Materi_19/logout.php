<?php 
session_start();
$_SESSION = [];
session_unset();
session_destory();

header("Location: login.php");
exit;
?>