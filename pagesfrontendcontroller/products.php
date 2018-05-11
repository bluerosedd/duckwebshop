<?php
require_once("./includes/connection.php");


$result=mysqli_query($connection, "SELECT * FROM products ORDER BY productId DESC");
$i=0;
while($row=mysqli_fetch_array($result)) {
    $i++;
    if($i == 1) {

        echo "<div class=\"row\">";
    }

        echo "<div class=\"col s12 m3\">";
        echo "<div class=\"card\">";

        echo "<div class=\"card-image\"><img src=\"../images/$row[productPicture]\"></div>";
        echo "<div class=\"card-content\"><p><b>Product Name:</b> $row[productName] <br/><b>Price:</b> $row[price] <b>kr</b> <br/><b>Description:</b> $row[description] <br/></p></div>";

        echo "</div>";
        echo "</div>";

    if($i == 4) {

        echo "</div>";
        $i=0;
    }


}mysqli_close($connection);
