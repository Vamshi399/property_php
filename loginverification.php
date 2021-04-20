<?php
require_once("config.php");

require_once("header.php");
session_start();
$userName = $_POST['userName'];
$password = $_POST['password'];
$result = checkLogins($userName, $password);

if (sizeof($result)>0)
{
    $_SESSION['ThisUser'] = $userName;
    $_SESSION['mobileNumber'] = $result[0]['mobileNumber'];
    header('Location: /property/home.php');
}
else
{
    echo "login fail";
    header('Location: /property/index.php');
	
}