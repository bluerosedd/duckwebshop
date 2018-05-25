<?php  require_once("includes/connection.php");
$productId=$_GET['productId'];
if (isset($_POST['isDailySpecialOffer'])){
$specialPrice = $_POST['isDailySpecialOffer'];
}
if(isset($_GET['action'])) {
    $action = $_GET['action'];

    if($action == 'specialoffer'){
        $query = "UPDATE products SET isDailySpecialOffer = NULL WHERE isDailySpecialOffer IS NOT NULL";
        mysqli_query($connection, $query) or die('Error');

        $query = "UPDATE products SET isDailySpecialOffer ='$specialPrice' WHERE productId ='$productId'";
        mysqli_query($connection,$query) or die('Error');

    }
}
$query = "SELECT * FROM products WHERE productId='$productId'";
$result = mysqli_query($connection, $query) or die('Error, query failed');
