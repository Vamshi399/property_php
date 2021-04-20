<?php
require_once("config.php");

require_once("header.php");
session_start();
$email = $_POST['email'];
$currentPassword = $_POST['currentPassword'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];
$result=userupdate($email, $currentPassword, $newPassword, $confirmPassword);
if(sizeof($result)>0){
    echo "user updated successfully";
    header('Location: /property/home.php');
}

?>
<html>
<head>
    <style>
    body
    {
    padding:30px;
    table-b;
    font-size: x-large;
    color: darkred;
        text-align: right;
    }
    </style>
</head>
<body style="background-image: url('images/background.jpg');">
<form name="home" method="post" action="home.php"></form>
</body>
</html>

