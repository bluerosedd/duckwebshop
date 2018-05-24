<?php require_once("./includes/sessionbackend.php");
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
    $role = trim(mysqli_real_escape_string($connection, $_POST['role']));
    $phone = trim(mysqli_real_escape_string($connection, $_POST['phone']));

    $iterations = ['cost' => 15];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $iterations);

	$query = "INSERT INTO `employees` (userName, password, firstName, lastName, emailAddress, 
									role, phone) VALUES ('{$username}', '{$hashed_password}', '{$firstname}', '{$lastname}', '{$email}',
 			   '{$role}', '{$phone}')";
	$result = mysqli_query($connection, $query);
		if ($result) {
			$message = "User Created.";
		} else {
			$message = "User could not be created.";
			$message .= "<br />" . mysqli_error($connection);
		}
}

if (!empty($message)) {echo "<p>" . $message . "</p>";}

if (isset($connection)){mysqli_close($connection);}
?>
