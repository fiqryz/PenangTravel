<?php 
session_start();
unset($_SESSION['u_id']);
unset($_SESSION['u_email']);
unset($_SESSION['u_role']);
header("Location: login.php");

?>