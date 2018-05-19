<?php require_once("./includes/dbcontroller.php");
require_once("./includes/connection.php");
require_once("./includes/functions.php");

error_reporting(0);
session_start();
$total=0;

//Database connection, PDO
$conn = new PDO("mysql:host=localhost;dbname=duckshopdb", 'root', '123456');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//get action string
$action = isset($_GET['action'])?$_GET['action']:"";

//Add to cart
   if($action=='addcart') {

       //Finding the product by code
       $query = "SELECT * FROM products WHERE code=:code";
       $stmt = $conn->prepare($query);
       $stmt->bindParam('code', $_POST['code']);
       $stmt->execute();
       $row = $stmt->fetch();

       $currentQty = $_SESSION['products'][$_GET['productId']]['quantity']+1; //Incrementing the product quantity in cart
       $_SESSION['products'][$_GET['productId']] = array('quantity'=>$currentQty,'productName'=>$row['productName'],'productImage'=>$row['productImage'],'price'=>$row['price']);
       $row='';

   }

//Empty All items
if($action=='emptyall') {
    $_SESSION['products'] =array();

}
//Empty one by one
if($action=='empty') {
    $code = $_GET['code'];
    $products = $_SESSION['products'];
    unset($products[$code]);
    $_SESSION['products']= $products;

}