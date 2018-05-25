<?php
require_once("./includes/functions.php");

$query = "SELECT * FROM company WHERE companyId = 1";
$res = mysqli_query($connection, $query);
$row=mysqli_fetch_array($res);
$companyId=$row['companyId'];

if (isset($_GET['action']) && $_GET['action'] == 'update') {
    $errors = array();

    $newDescription = $_POST['description'];

    mysqli_query($connection, "UPDATE company SET description='$newDescription' WHERE companyId='$companyId'");

    redirect_to("./backendindex.php?page=aboutusb");
}mysqli_close($connection);

// Redirect to delete.php.
header("./backendindex.php?page");