<?php

require_once("config.php");

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobileNumber = $_POST['mobileNumber'];

$newuser = createNewUser($firstName, $lastName, $userName, $password, $email, $mobileNumber);

echo "Registered successfully";

include ("login.php");

