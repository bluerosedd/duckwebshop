<?php require_once("includes/connection.php"); 

$id=$_GET['id'];
$query = "SELECT * FROM products WHERE productId='$id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');

mysqli_query($connection, "DELETE FROM products WHERE productId='$id'");
	while ($row = mysqli_fetch_array($result)){
	$file = "img/".	$row["productPicture"];
	}
    unlink ($file);

mysqli_close($connection);

// Redirect to delete.php.
header("location:index.php");

