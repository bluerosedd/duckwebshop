<?php
require_once("./includes/functions.php");

$userId = $_SESSION['userId'];

$query = "SELECT * FROM users WHERE userId='$userId'";
$res = mysqli_query($connection, $query);
$row=mysqli_fetch_array($res);
$userId=$row['userId'];


if (isset($_GET['action']) && $_GET['action'] == 'update') {
    $errors = array();

    $newUserName = $_POST['userName'];
    $newPassword = $_POST['password'];
    $newFirstName = $_POST['firstName'];
    $newLastName = $_POST['lastName'];
    $newEmail = $_POST['email'];
    $newStreetName = $_POST['streetName'];
    $newStreetNumber = $_POST['streetNumber'];
    $newCity = $_POST['city'];
    $newZipCode = $_POST['zipCode'];
    $newBirthDay = $_POST['birthDay'];
    $newBirthMonth = $_POST['birthMonth'];
    $newBirthYear = $_POST['birthYear'];

    $iterations = ['cost' => 15];
    $hashed_password = password_hash($newPassword, PASSWORD_BCRYPT, $iterations);

   // mysqli_query($connection, "UPDATE users SET userName='$newUserName', password='$newPassword', firstName ='$newFirstName', lastName='$newLastName', emailAddress")

    mysqli_query($connection, "UPDATE users SET userName='$newUserName' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET password='$newPassword' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET firstName='$newFirstName' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET lastName='$newLastName' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET emailAddress='$newEmail' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET streetName='$newStreetName' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET streetNumber='$newStreetNumber' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET city='$newCity' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET zipCode='$newZipCode' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET birthDay='$newBirthDay' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET birthMonth=' $newBirthMonth' WHERE userId='$userId'");
    mysqli_query($connection, "UPDATE users SET birthYear='$newBirthYear' WHERE userId='$userId'");


    redirect_to("./index.php?page=profileuser");
}if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $errors = array();
    mysqli_query($connection, "DELETE FROM users WHERE userId='$userId'");
    redirect_to("./index.php?page=login");
}

mysqli_close($connection);

// Redirect to delete.php.
header("./index.php?page");
