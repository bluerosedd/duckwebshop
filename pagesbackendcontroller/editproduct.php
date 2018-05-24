<?php
require_once("./includes/connection.php");
require_once("./includes/functions.php");

if(isset($_GET['productId'])){
    $productId = $_GET['productId'];
}
$result=mysqli_query($connection, "SELECT * FROM products WHERE productId='$productId'");
$row=mysqli_fetch_array($result);


if (isset($_GET['action']) && $_GET['action'] == 'update') {
    $errors = array();

    $newDescription = $_POST['desc'];
    $newProductName=$_POST['productName'];
    $newcode=$_POST['code'];
    $newprice=$_POST['price'];

    mysqli_query($connection, "UPDATE products SET description='$newDescription' WHERE productId='$productId'");
    mysqli_query($connection, "UPDATE products SET productName='$newProductName' WHERE productId='$productId'");
    mysqli_query($connection, "UPDATE products SET code='$newcode' WHERE productId='$productId'");
    mysqli_query($connection, "UPDATE products SET price='$newprice' WHERE productId='$productId'");

    redirect_to("./backendindex.php?page=productsb");
}
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $errors = array();
    mysqli_query($connection, "DELETE FROM products WHERE productId='$productId'");
    redirect_to("./backendindex.php?page=productsb");
}

mysqli_close($connection);

// Redirect
header("./backendindex.php?page");