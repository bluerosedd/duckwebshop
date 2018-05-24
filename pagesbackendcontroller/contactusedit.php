<?php
require_once("./includes/connection.php");
require_once("./includes/functions.php");

if(isset($_GET['companyId'])){
    $companyId = $_GET['companyId'];
}
$result=mysqli_query($connection, "SELECT * FROM company WHERE companyId='$companyId'");
$row=mysqli_fetch_array($result);


if (isset($_GET['action']) && $_GET['action'] == 'update') {
    $errors = array();

    $newOpeningHours = $_POST['openingHours'];
    $newPhone = $_POST['phone'];
    $newEmail = $_POST['email'];


    mysqli_query($connection, "UPDATE company SET openingHours='$newOpeningHours' WHERE companyId='$companyId'");
    mysqli_query($connection, "UPDATE company SET phone='$newPhone' WHERE companyId='$companyId'");
    mysqli_query($connection, "UPDATE company SET email='$newEmail' WHERE companyId='$companyId'");


    redirect_to("./backendindex.php?page=contactusb");

}
mysqli_close($connection);
// Redirect
header("./backendindex.php?page");



