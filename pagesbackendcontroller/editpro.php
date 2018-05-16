<?php require_once("./includes/connection.php");


$id=$_POST['id'];
$newDescription = $_POST['desc'];
$newProductName=$_POST['productName'];
$newcode=$_POST['code'];

$query = "SELECT * FROM products WHERE productId='$id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');



mysqli_query($connection, "UPDATE products SET description='$newDescription' WHERE productId='$id'");
mysqli_query($connection, "UPDATE products SET productName='$newProductName' WHERE productId='$id'");
mysqli_query($connection, "UPDATE products SET code='$newcode' WHERE productId='$id'");


mysqli_close($connection);

// Redirect to delete.php.
header("location:index.php");



