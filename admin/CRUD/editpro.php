<?php require_once("includes/connection.php");


$id=$_POST['id'];
$newImage=$_FILES['image']['name'];
$newDescription = $_POST['desc'];
$newProductName=$_POST['productName'];
$query = "SELECT * FROM products WHERE productId='$id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');



mysqli_query($connection, "UPDATE products SET productPicture='$newImage' WHERE productId='$id'");
mysqli_query($connection, "UPDATE products SET description='$newDescription' WHERE productId='$id'");
mysqli_query($connection, "UPDATE products SET productName='$newProductName' WHERE productId='$id'");


mysqli_close($connection);

// Redirect to delete.php.
header("location:index.php");

