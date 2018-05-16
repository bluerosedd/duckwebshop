<?php require_once("./includes/connection.php");


$id=$_POST['id'];
$newDescription = $_POST['desc'];

$query = "SELECT * FROM company WHERE companyId='$id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');



mysqli_query($connection, "UPDATE company SET description='$newDescription' WHERE productId='$id'");


mysqli_close($connection);

