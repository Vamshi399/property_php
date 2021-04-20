<?php

require_once("config.php");

require_once("header.php");
$aaddress = $_POST['aaddress'];
$aprice = $_POST['aprice'];
foreach($_FILES as $file => $details)
{   
    $aimage = "Images/".$details['name'];
}
$adate_created=date("Y-m-d");
$result = insertApartment(null,$aaddress,$aprice, $adate_created, "active", $aimage);
if (sizeof($result)>0)
{
    header('Location: /property/home.php');
}
else
{
    echo "login fail";
    header('Location: /property/index.php');
}
?>