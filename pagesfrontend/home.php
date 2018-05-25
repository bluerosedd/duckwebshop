<div class="row">
    <div class="col s12 m12">
<div class="tittlecolor"><h1>Welcome to the Ducky duckwebshop!</h1></div>
        <div class="center-align"><h5>Here you can buy all kind of plastic ducks you can image!</h5></div>
    </div>
</div>

<?php
$reco=mysqli_query($connection, "SELECT productId FROM products");
$reco=mysqli_fetch_all($reco);

$recommended = array();
shuffle($reco);
foreach ($reco as $key => $val){
    array_push($recommended, $val[0]);
}
$recommended = array_slice($recommended, 0,3);
$recommended = implode(",", $recommended);
$query = "SELECT * FROM products WHERE productId IN ($recommended)";
$result = mysqli_query($connection, $query);

echo '<div class="row"><div class="tittlecolor"><h5>PRODUCTS YOU MIGHT LIKE!</h5></div>';
while($row=mysqli_fetch_array($result)) {

?>

    <div class="col s12 m4">
        <div class="card">

            <div class="card-image"><img src="./images/<?php echo $row['productPicture']?>"></div>

            <div class="card-content">
                <ul>
                    <li style="font-size: 17px"><?php echo trim(htmlspecialchars($row['productName']));?> </li>
                    <li style="font-size: 17px"> <?php if($row['isDailySpecialOffer'] == NULL){
                            echo "<b>Price:</b>"; echo trim(htmlspecialchars($row['price']));
                        }elseif($row['isDailySpecialOffer'] == !NULL){
                            echo "<b style='color:#faa61a;'>OfferPrice: </b>"; echo trim(htmlspecialchars($row['isDailySpecialOffer']));
                        } ?>
                        <b>kr</b></li>

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

<?php }

?>
<div class="row">
<div class="col s12 m12">
<div class="cardlinks">
    <a href="index.php?page=news"
       class="waves-effect waves-light btn">We have news for you!</a>
</div>
</div>
</div>


