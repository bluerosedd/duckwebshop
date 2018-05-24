<?php
require_once("./includes/functions.php");

$employeeId = $_SESSION['employeeId'];

$query = "SELECT * FROM employees WHERE employeeId='$employeeId'";
$res = mysqli_query($connection, $query);
$row=mysqli_fetch_array($res);
$employeeId=$row['employeeId'];


if (isset($_GET['action']) && $_GET['action'] == 'update') {
    $errors = array();

    $newUserName = $_POST['userName'];
    $newPassword = $_POST['password'];
    $newFirstName = $_POST['firstName'];
    $newLastName = $_POST['lastName'];
    $newPhone = $_POST['phone'];
    $newEmail = $_POST['email'];
    $newRole = $_POST['role'];
    $iterations = ['cost' => 15];
    $hashed_password = password_hash($newPassword, PASSWORD_BCRYPT, $iterations);

    mysqli_query($connection, "UPDATE employees SET userName='$newUserName' WHERE employeeId='$employeeId'");
    mysqli_query($connection, "UPDATE employees SET password='$newPassword' WHERE employeeId='$employeeId'");
    mysqli_query($connection, "UPDATE employees SET firstName='$newFirstName' WHERE employeeId='$employeeId'");
    mysqli_query($connection, "UPDATE employees SET lastName='$newLastName' WHERE employeeId='$employeeId'");
    mysqli_query($connection, "UPDATE employees SET phone='$newPhone' WHERE employeeId='$employeeId'");
    mysqli_query($connection, "UPDATE employees SET email='$newEmail' WHERE employeeId='$employeeId'");
    mysqli_query($connection, "UPDATE employees SET role='$newRole' WHERE employeeId='$employeeId'");

    redirect_to("./backendindex.php?page=profileb");
}if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $errors = array();
    mysqli_query($connection, "DELETE FROM employees WHERE employeeId='$employeeId'");
    redirect_to("./backendindex.php?page=loginb");
}

mysqli_close($connection);

// Redirect to delete.php.
header("./backendindex.php?page");
