<?php require_once("./includes/connection.php");
require_once("./pagesfrontendcontroller/cart.php");


$result=mysqli_query($connection, "SELECT * FROM products ORDER BY productId DESC");
$i=0;
//if(isset($_SESSION['products'])){
//    var_dump($_SESSION['products']);
//}
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
                   <ul>
                       <a class="textcolor right"><i class="material-icons small">favorite_border</i></a>
                       <li style="font-size: 17px"><?php echo $row['productName']?> </li>
                       <li style="font-size: 17px"><b>Price:</b> <?php echo $row['price'] ?> <b>kr</b></li>

                   </ul>
         </div>

            <div class="cardlinks">
                <a href="index.php?page=productdetails&productId=<?php echo $row['productId']?>"
                   class="waves-effect waves-light btn">See details</a>

                <form method="post" action="./index.php?page=products&action=addcart&productId=<?php echo $row['productId']?>">
                        <button type="submit" class="waves-effect waves-light btn col s12">Add To Cart
                        <input type="hidden" name="code" value="<?php print $row['code']?>"></button>
                </form>
            </div>

        </div>
        </div>
<?php

    if($i == 4) {

        echo "</div>";
        $i=0;
    }


}mysqli_close($connection);


