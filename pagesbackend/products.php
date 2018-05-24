<?php require_once("./pagesbackendcontroller/products.php");?>

<br><br>
<div class="col s12 m3">
<div class=" center">
    <a  class="waves-effect waves-light btn" href="./backendindex.php?page=uploadb">Upload a product</a>
</div>
</div>
<br>

<?php
$i=0;

while($row=mysqli_fetch_array($result)) {
    $i++;
    if ($i == 1) {

        echo "<div class=\"row\">";
    }

    ?>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image"><img src="./images/<?php echo $row['productPicture']?>"></div>

            <div class="card-content">
                <ul>
                    <li style="font-size: 17px"><?php echo $row['productName']?> </li>
                    <li style="font-size: 17px"><b>Code:</b><?php echo $row['code']?> </li>
                    <li style="font-size: 17px">
                        <?php if($row['isDailySpecialOffer'] == NULL){
                            echo "<b>Price:</b>"; echo $row['price'];
                        }elseif($row['isDailySpecialOffer'] == !NULL){
                            echo "<b style='color:#faa61a;'>OfferPrice: </b>"; echo $row['isDailySpecialOffer'];
                        } ?>
                        <b>kr</b>
                    </li>
                </ul>
            </div>

            <div class="cardlinks">

                <form name="delete" method="post" action="./backendindex.php?page=editproductb&action=delete&productId=<?php echo $row['productId']; ?>">
                    <button value="submit" type="submit" class="waves-effect waves-light btn">Delete</button>
                </form>

                <a href="./backendindex.php?page=editproductb&productId=<?php echo $row['productId'] ?>"
                   onclick="return confirm('Are you sure you want to edit this product?');"
                   class="waves-effect waves-light btn">Edit post
                </a>

                <a href="./backendindex.php?page=dailyofferb&productId=<?php echo $row['productId']?>"
                   onclick="return confirm('Do you want this product to be the Daily offer?');"
                   class="waves-effect waves-light btn">Create daily offer
                </a>

            </div>
        </div>
    </div>

    <?php
    if($i == 4) {
        echo "</div>";
        $i=0;
    }
}
?>
