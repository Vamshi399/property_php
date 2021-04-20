<?php
include("left-nav.php");
require_once("config.php");
$property = fetchAllProperties();
?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
       Apartments Online
    </title>
    <style type="text/css">
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
            width: 70px;

        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #D56A6A;
            color: #ffffff;
            width: 70px;

        }
        table.table-style-three a {
            color: blue;
            text-decoration: none;
            width: 40px;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }
        table.table-style-three tr:nth-child(even) td{
            background-color: #F7CFCF;
            width: 40px;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #ffffff;
            width: 40px;
            max-width: 50px;
            max-height: 50px;
        }
    </style>

</head>
<body style="background-image:url('images/login_background.jpg');">

<table class="table-style-three" style="width: 100%;text-align: center;">
    <thead>
    <th>PROPERTY ID</th>
    <th>PROPERTY ADDRESS</th>
    <th>PROPERTY PRICE</th>
    <th>DATE CREATED</th>
	<th>STATUS</th>
	<th>OWNER NAME</th>
	<th>OWNER MOBILE</th>
	<th>IMAGE</th>
    </thead>
    <tbody>
    <?php
    foreach($property as $displayRecords) { 
        ?>
        <tr>
            <td><?php print $displayRecords['PROPERTY_ID']; ?></td>
            <td><?php print $displayRecords['PROPERTY_ADDRESS']; ?></td>
            <td>$ <?php print $displayRecords['PROPERTY_PRICE']; ?></td>
			<td><?php print $displayRecords['DATE_CREATED']; ?></td>
			<td><?php print $displayRecords['STATUS']; ?></td>
			<td><?php print $displayRecords['OWNER_NAME']; ?></td>
			<td><?php print $displayRecords['OWNER_MOBILE']; ?></td>
            <td>
            <a href="<?php print $displayRecords['IMAGE']; ?>" target="_blank">
                <img width="120%" height="12%" border="0" align="center"  src="<?php print $displayRecords['IMAGE']; ?>"/>
            </a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>


