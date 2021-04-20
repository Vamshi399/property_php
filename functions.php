<?php
function createNewUser($firstName, $lastName, $userName, $password, $email, $mobileNumber)
{
    global $mysqli;
    //Generate A random userid
    $character_array = array_merge( range(0, 9));
    $rand_string = "";
    for ($i = 0; $i < 6; $i++) {
        $rand_string .= $character_array[rand(
            0, (count($character_array) - 1)
        )];
    }

    $stmt = $mysqli->prepare(
        "INSERT INTO user_details (
		userid,
		UserName,
		FirstName,
		LastName,
		Password,
		Email,
		MobileNumber
		)
		VALUES (
		'" . $rand_string . "',
		?,
		?,
		?,
		?,
		?,
		?
		)"
    );
    $stmt->bind_param("ssssss", $userName, $firstName, $lastName, $password, $email, $mobileNumber);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

function checkLogins($userName)
{
    global $mysqli;
    $stmt = $mysqli->prepare("select UserName, mobileNumber
		from user_details where  UserName = ?");
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $stmt->bind_result($userName, $mobileNumber);
    $stmt->execute();
    while ($stmt->fetch()) {
        $row[] = array(
            'userName' => $userName,
            'mobileNumber' => $mobileNumber
        );
    }
    $stmt->close();
    return ($row);
}
function fetchAllProperties()
{
    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT * FROM properties ORDER BY PROPERTY_ID");

    $stmt->execute();
    $stmt->bind_result($PROPERTY_ID,$PROPERTY_ADDRESS, $PROPERTY_PRICE, $DATE_CREATED, $STATUS, $OWNER_NAME, $OWNER_MOBILE, $IMAGE);
    while ($stmt->fetch()){
        $row[] = array('PROPERTY_ID' => $PROPERTY_ID,
            'PROPERTY_ADDRESS' => $PROPERTY_ADDRESS,
            'PROPERTY_PRICE' => $PROPERTY_PRICE,
			'DATE_CREATED' => $DATE_CREATED,
			'STATUS' => $STATUS,
			'OWNER_NAME' => $OWNER_NAME,
			'OWNER_MOBILE' => $OWNER_MOBILE,
            'IMAGE' => $IMAGE
        );
    }
    $stmt->close();
    return ($row);
}
function userupdate($email, $currentPassword, $newPassword, $confirmPassword){
	session_start();
    $local = $_SESSION['ThisUser'];
	global $mysqli;
    $stmt = $mysqli->prepare("UPDATE user_details SET password = ? WHERE username = ?");
    $stmt->bind_param("ss", $newPassword, $local);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}
function fetchMyProperties() {
	session_start();
    $local = $_SESSION['ThisUser'];
	global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT * FROM properties where owner_name=? ORDER BY PROPERTY_ID	");
	$stmt->bind_param("s", $local);
    $stmt->execute();
    $stmt->bind_result($PROPERTY_ID,$PROPERTY_ADDRESS, $PROPERTY_PRICE, $DATE_CREATED, $STATUS, $OWNER_NAME, $OWNER_MOBILE, $IMAGE);
    while ($stmt->fetch()){
        $row[] = array('PROPERTY_ID' => $PROPERTY_ID,
            'PROPERTY_ADDRESS' => $PROPERTY_ADDRESS,
            'PROPERTY_PRICE' => $PROPERTY_PRICE,
			'DATE_CREATED' => $DATE_CREATED,
			'STATUS' => $STATUS,
			'OWNER_NAME' => $OWNER_NAME,
			'OWNER_MOBILE' => $OWNER_MOBILE,
            'IMAGE' => $IMAGE
        );
    }
    $stmt->close();
    return ($row);
}
function insertApartment($property_id, $property_address, $property_price, $date_created, $status, $image){
    session_start();
    $local = $_SESSION['ThisUser'];
    $mobileNumber = $_SESSION['mobileNumber'];
    $result = $_SESSION['ThisResult'];
    global $mysqli;
    $stmt = $mysqli->prepare(
        "INSERT INTO properties (
        property_id,
        property_address,
        property_price,
        date_created,    
		status,
        owner_name,
        owner_mobile,
        image
		)
		VALUES (
        ?,
		?,
		?,
        ?,
        ?,
        ?,
        ?,
        ?
		);"
    );
    $stmt->bind_param("isisssss", $property_id, $property_address, $property_price, $date_created, $status, $local, $mobileNumber, $image);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}
function removeApartment($removeId){
    session_start();
    global $mysqli;
    $stmt = $mysqli->prepare(
        "DELETE FROM properties WHERE property_id = ?;"
    );
    $stmt->bind_param("i", $removeId);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}