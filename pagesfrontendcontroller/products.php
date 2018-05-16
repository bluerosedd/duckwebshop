<?php
require_once("./includes/connection.php");


$result=mysqli_query($connection, "SELECT * FROM products ORDER BY productId DESC");
$i=0;


while($row=mysqli_fetch_array($result)) {
    $i++;
    if($i == 1) {

        echo "<div class=\"row\">";
    }
    ?>
        <div class="col s12 m3">
        <div class="card">

        <div class="card-image"><img src="../images/<?php echo $row['productPicture']?>"></div>
        <div class="card-content">
                   <p>
                       <?php echo $row['productName']?> <br/>
                       <b>Price:</b> <?php echo $row['price'] ?> <b>kr</b> <br/>
                   </p>
         </div>
        <a href="index.php?page=productdetails&productId=<?php echo $row['productId']?>" class="waves-effect waves-light btn">Details</a>

        </div>

        </div>

<?php

    if($i == 4) {

        echo "</div>";
        $i=0;
    }


}mysqli_close($connection);


