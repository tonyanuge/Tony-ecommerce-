<?php    
session_start(); 
session_destroy();
header('Location: ../cust_log/login.php');  
exit;  
?>