<?php
require_once("./includes/connection.php");

$productId = $_GET['productId'];
$result=mysqli_query($connection, "SELECT * FROM products WHERE productId = $productId LIMIT 1");
$row=mysqli_fetch_array($result);

?>


    <div class="row">
        <div class="col s8 m5">
            <div class="card">
                <div class="card-image">
                    <img src="../images/<?php echo $row['productPicture']?>">
                </div>
            </div>
        </div>


        <div class="col s12 m7">
            <div class="card-panel">
                <div class="card-content">

                        <h5><?php echo $row['productName']?></h5>
                    <p>
                        <?php echo $row['description']?> <br/>
                        <b>Price:</b> <?php echo $row['price'] ?> <b>kr</b> <br/>
                    </p>
                    <a class="textcolor" href="#!"><i class="material-icons">favorite</i>Save to favorites</a>
                    <form method="post" action="index.php?page=products&action=addcart&productId=<?php echo $row['productId']?>">
                        <button type="submit" class="waves-effect waves-light btn col s12"><i class="material-icons">add_shopping_cart</i>Add to cart</a>Add To Cart
                            <input type="hidden" name="code" value="<?php print $row['code']?>"></button>
                    </form>

                </div>
            </div>
        </div>
    </div>



<?php
mysqli_close($connection);

