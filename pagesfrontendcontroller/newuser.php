<?php require_once("./includes/sessionuser.php");
require_once("./includes/connection.php");
require_once("./includes/functions.php");
//confirm_logged_in(); ?>

<?php
// START FORM PROCESSING
if (isset($_POST['submit'])) { // Form has been submitted.
	$errors = array();

	// perform validations on the form data
	$username = trim(mysqli_real_escape_string($connection, $_POST['user']));
	$password = trim(mysqli_real_escape_string($connection, $_POST['pass']));
    $firstname = trim(mysqli_real_escape_string($connection, $_POST['firstName']));
    $lastname = trim(mysqli_real_escape_string($connection, $_POST['lastName']));
    $email = trim(mysqli_real_escape_string($connection, $_POST['emailAddress']));
    $birthday = trim(mysqli_real_escape_string($connection, $_POST['birthDay']));
    $birthmonth = trim(mysqli_real_escape_string($connection, $_POST['birthMonth']));
    $birthyear = trim(mysqli_real_escape_string($connection, $_POST['birthYear']));
    $streetname = trim(mysqli_real_escape_string($connection, $_POST['streetName']));
    $streetnumber = trim(mysqli_real_escape_string($connection, $_POST['streetNumber']));
    $zipcode = trim(mysqli_real_escape_string($connection, $_POST['zipCode']));
    $city = trim(mysqli_real_escape_string($connection, $_POST['city']));

    $iterations = ['cost' => 15];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $iterations);

	$query = "INSERT INTO `users` (userName, password, firstName, lastName, emailAddress, 
									birthDay, birthMonth, birthYear,streetName, streetNumber, zipCode, city)
 			  VALUES ('{$username}', '{$hashed_password}', '{$firstname}', '{$lastname}', '{$email}',
 			   '{$birthday}', '{$birthmonth}', '{$birthyear}', '{$streetname}', '{$streetnumber}', '{$zipcode}', '{$city}')";
	$result = mysqli_query($connection, $query);
		if ($result) {
			$message = "User Created.";
		} else {
			$message = "User could not be created.";
			$message .= "<br />" . mysql_error();
		}
}

if (!empty($message)) {echo "<p>" . $message . "</p>";}

if (isset($connection)){mysqli_close($connection);}
?>
