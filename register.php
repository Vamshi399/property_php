<?php

require_once("config.php");


require_once("header.php");
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <style type="text/css">
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-collapse: collapse;
        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            background-color: #D56A6A;
            color: #ffffff;
        }
        table.table-style-three a {
            color: #ffffff;
            text-decoration: none;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }
        table.table-style-three tr:nth-child(even) td{
            background-color: #F7CFCF;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #ffffff;
        }
    </style>

</head>
<body>

<?php require_once("config.php"); ?>

<form name="createNewRecord" action="CreateNewUser_DBInsert.php" method="post">
    <table class="table-style-three" align="center" cellspacing="50px" style="width:300px;">
        <thead>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="firstName" value=""></td>
        </tr>

        <tr>
            <th>Last Name</th>
            <td><input type="text" name="lastName" value=""></td>
        </tr>

        <tr>
            <th>User Name</th>
            <td><input type="text" name="userName" value=""></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="password" name="password" value=""></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><input type="text" name="email" value=""></td>
        </tr>

        <tr>
            <th>Mobile Number</th>
            <td><input type="text" name="mobileNumber" value=""></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="Submit" name="submit" value="Register"></td>
        </tr>
        </thead>
    </table>
</form>
</body>
</html>

