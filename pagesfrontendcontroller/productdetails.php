<?php
require_once("./includes/connection.php");

$productId = $_GET['productId'];
$result=mysqli_query($connection, "SELECT * FROM products WHERE productId = $productId LIMIT 1");
$row=mysqli_fetch_array($result);

?>


    <div class="row">
        <div class="card">
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
                    <h5><?php echo $row['productName']?></h5> </br>
                    <p>
                        <?php echo $row['description']?> <br/>
                        <?php if($row['isDailySpecialOffer'] == NULL){
                            echo "<b>Price:</b>"; echo $row['price'];
                        }elseif($row['isDailySpecialOffer'] == !NULL){
                            echo "<b style='color:#faa61a;'>OfferPrice: </b>"; echo $row['isDailySpecialOffer'];
                        } ?>
                        <b>kr</b> </br>
                    </p>
                    </br>
                    <form method="post" action="index.php?page=products&action=addcart&productId=<?php echo $row['productId']?>">
                        <button type="submit" class="waves-effect waves-light btn col s12"><i class="material-icons">add_shopping_cart</i>Add to cart
                            <input type="hidden" name="code" value="<?php print $row['code']?>"></button></br></br>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>