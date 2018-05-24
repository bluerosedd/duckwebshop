<?php
require_once("./pagesbackendcontroller/editproduct.php");
?>

<div class="tittlecolor">
    <h4 >EDIT PRODUCT</h4>
</div>
<div class="row">
    <div class="col s12 m10">
        <div class="card-panel">
        <span class="flow-text">

           <b>Id :</b> <?php echo $row['productId']; ?> <br/>
            <b>Name :</b> <?php echo $row['productName']; ?> <br/>
            <b>Code :</b> <?php echo $row['code']; ?> <br/>
            <b>Price :</b> <?php echo $row['price']; ?> <br/>

            <?php
            //DAILYSPECIALPRICE
            if($row['isDailySpecialOffer'] == NULL){
                echo "<b>Offer price :No daily offer</b> <br/>
                          <a href=\"backendindex.php?page=dailyofferb&productId=echo $row[productId]?>\"
                          onclick=\"return confirm('Do you want to exit this page to create a daily offer?');\"
                          class=\"waves-effect waves-light btn\">Create daily offer</a>
                          <br/>";

            }elseif($row['isDailySpecialOffer'] == !NULL){
                echo "<b>Offer price : </b> $row[isDailySpecialOffer]<br/>";}
            //DAILYSPECIALPRICE ENDS
            ?>
            <b>Description:</b> <?php $row['description']; ?> <br/>
            <b>Image:</b> <?php $row['productPicture'];?> <br /> <img src="./images/<?php echo $row['productPicture']; ?>" width=\"100\" > <br/>


            <form name="upload" method="post" action="./pagesbackendcontroller/editproduct.php">
                    <b>Image :</b> <input type="file" name="image" value=""><?php echo $row['productPicture']; ?><br />
                    <b>Product Name :</b><textarea name="productName"><?php echo $row['productName']; ?></textarea><br />
                    <b>Code :</b><textarea name="code"><?php echo $row['code']; ?></textarea><br />
                    <b>Description :</b><br> <textarea name="desc"><?php echo $row['description']; ?></textarea><br />
                    <b>Price :</b><br> <textarea name="price"><?php echo $row['price']; ?></textarea><br />
            </form>

                    <input class="waves-effect waves-light btn" name="Submit" type="submit" value="Save">
                     <form name="delete" method="post" action="./backendindex.php?page=editproductb&action=delete&productId=<?php echo $row['productId']; ?>">
                        <button value="submit" type="submit" class="waves-effect waves-light btn">Delete</button>
                    </form>
                    <a href="./backendindex.php?page=productsb"
                       onclick="return confirm('Are you sure you want to cancel?');"
                       class="waves-effect waves-light btn">Cancel
                </a>

        </span>
        </div>
    </div>
</div>
