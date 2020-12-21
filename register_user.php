<?php
include "db/db_credentials.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>
<h1>Testing user registration...</h1>

<?php

// ==========================================================================================
// ==========================================================================================

// Make sure we arrived on this form via a "POST" process. If it is anything else, 
// redirect back to the main site screen (index.html) on the main page

$method = $_SERVER['REQUEST_METHOD'];
if ($method !== 'POST') {
    header('Location: index.html');
    exit;
}

// Grab the user variables from POST and filter what needs to be filtered.

$firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
$lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
$emailAddress = filter_var($_POST['userName'], FILTER_SANITIZE_EMAIL);
$phoneNumber = filter_var($_POST['phoneNumber'], FILTER_SANITIZE_STRING);
$addressLine1 = filter_var($_POST['addressLine1'], FILTER_SANITIZE_STRING);
$addressLine2 = filter_var($_POST['addressLine2'], FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$stateCode = filter_var($_POST['stateCode'], FILTER_SANITIZE_STRING);
$zipCode = filter_var($_POST['zipCode'], FILTER_SANITIZE_STRING);
$gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
$photoURL = filter_var($_POST['photoURL'], FILTER_SANITIZE_STRING);
$notes = filter_var($_POST['notes'], FILTER_SANITIZE_STRING);
$userPassword = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);

// $hashPword = password_hash($pword, PASSWORD_DEFAULT);

// Create the SQL INSERT statement that will add the new user to the database table
$sql = "INSERT INTO students "
     . "(first_name, last_name, email_address, phone_number, "
     . "address_line_1, address_line_2, city, state_code, zip_code, "
     . "gender, photo_url, notes, user_password) "
     . "VALUES "
     . "('$firstName', '$lastName', '$emailAddress', '$phoneNumber', "
     . "'$addressLine1', '$addressLine2', '$city', '$stateCode', '$zipCode', "
     . "'$gender', '$photoURL', '$notes', '$userPassword')";

// Now run the SQL statement; fail if there is an error
if (mysqli_query($conn, $sql)) {
    print "<p id='p-action-msg'><span id='action-msg'>New user ($firstName $lastName) added successfully!</span></p>";
} else {
    print "Error: $sql <br><br>" . mysqli_error($conn);
}

?>

    
</body>
</html>


