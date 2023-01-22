<?php
session_start();
// Include functions and connect to the database 
include 'functions.php';
$pdo = pdo_connect_mysql();

$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include requested page
include $page . '.php';
?>