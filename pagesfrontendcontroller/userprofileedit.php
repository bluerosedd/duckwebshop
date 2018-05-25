<?php
require_once("./includes/functions.php");

$userId = $_SESSION['userId'];

$query = "SELECT * FROM users WHERE userId='$userId'";
$res = mysqli_query($connection, $query);
$row=mysqli_fetch_array($res);
$userId=$row['userId'];


if (isset($_GET['action']) && $_GET['action'] == 'update') {
    $errors = array();

    $newUserName = trim(htmlspecialchars($_POST['userName']));
    $newPassword = trim(htmlspecialchars($_POST['password']));
    $newFirstName = trim(htmlspecialchars($_POST['firstName']));
    $newLastName = trim(htmlspecialchars($_POST['lastName']));
    $newEmail = trim(htmlspecialchars($_POST['email']));
    $newStreetName = trim(htmlspecialchars($_POST['streetName']));
    $newStreetNumber = trim(htmlspecialchars($_POST['streetNumber']));
    $newCity = trim(htmlspecialchars($_POST['city']));
    $newZipCode = trim(htmlspecialchars($_POST['zipCode']));
    $newBirthDay = trim(htmlspecialchars($_POST['birthDay']));
    $newBirthMonth = trim(htmlspecialchars($_POST['birthMonth']));
    $newBirthYear = trim(htmlspecialchars($_POST['birthYear']));

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
