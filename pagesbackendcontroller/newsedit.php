<?php
require_once("./includes/connection.php");
require_once("./includes/functions.php");

if(isset($_GET['newsId'])){
    $newsId = $_GET['newsId'];
}
$result=mysqli_query($connection, "SELECT * FROM news WHERE newsId='$newsId'");
$row=mysqli_fetch_array($result);


if (isset($_GET['action']) && $_GET['action'] == 'update') {
    $errors = array();

    $newNewsTitle = $_POST['newsTitle'];
    $newDescription = $_POST['description'];
    $newCreatedDay = $_POST['createdDay'];
    $newCreatedMonth = $_POST['createdMonth'];
    $newCreatedYear = $_POST['createdYear'];

    mysqli_query($connection, "UPDATE news SET newsTitle='$newNewsTitle' WHERE newsId='$newsId'");
    mysqli_query($connection, "UPDATE news SET description='$newDescription' WHERE newsId='$newsId'");
    mysqli_query($connection, "UPDATE news SET createdDay='$newCreatedDay' WHERE newsId='$newsId'");
    mysqli_query($connection, "UPDATE news SET createdMonth='$newCreatedMonth' WHERE newsId='$newsId'");
    mysqli_query($connection, "UPDATE news SET createdYear='$newCreatedYear' WHERE newsId='$newsId'");

    redirect_to("./backendindex.php?page=newsb");

}
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $errors = array();
    mysqli_query($connection, "DELETE FROM news WHERE newsId='$newsId'");
    redirect_to("./backendindex.php?page=newsb");
}


mysqli_close($connection);

// Redirect
header("./backendindex.php?page");



