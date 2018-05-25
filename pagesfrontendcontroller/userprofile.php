<?php
require_once("./includes/connection.php");
if(isset($_SESSION['userId'])){
    $userId = ($_SESSION['userId']);
}
$result=mysqli_query($connection, "SELECT * FROM users WHERE userId='$userId'")or die(mysqli_error());
$row=mysqli_fetch_array($result);
