<?php  require_once("pagesbackendcontroller/dailyoffer.php"); ?>

<div class="row">
    <div >
        <div class="card-panel">
        <span class="flow-text">


            <?php while($row=mysqli_fetch_array($result)){
            echo "<b>Image:</b> $row[productPicture] <br /> <img src=\"./images/$row[productPicture]\" width=\"100\" > <br/>";
            echo "<b>Id :</b> $row[productId] <br/>";
            echo "<b>Description:</b> $row[description] <br/>";
            echo "<b>Normal price:</b> $row[price] <br/>";

            ?>
            <form name="upload" method="post" action="backendindex.php?action=specialoffer&page=dailyofferb&productId=<?php echo trim(htmlspecialchars($row['productId']));?>">

                    <b>Offer price:</b><textarea name="offerPrice"><?php echo trim(htmlspecialchars( $row['isDailySpecialOffer'])); ?></textarea><br />

                    <input name="id" type="hidden" value="<?php echo $row['productId']; ?>">
                    <input name="Submit" type="submit" value="Save">
                </form>
        </span>
        </div>
    </div>
</div>

<?php
}
?>
