<?php require_once("./includes/connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
<a href="upload.php">Upload a new product!</a>
<br><br>

<div class="container">
    <?php
    $result=mysqli_query($connection, "SELECT * FROM products ORDER BY productId DESC");
    $i=0;
    while($row=mysqli_fetch_array($result)) {
        $i++;
        if($i == 1) {

            echo "<div class=\"row\">";
        }

        echo "<div class=\"col s12 m3\">";
        echo "<div class=\"card\">";

        echo "<div class=\"card-image\"><b>Image:</b> $row[productPicture] <br /><img src=\"../images/$row[productPicture]\"></div>";
        echo "<div class=\"card-content\"><p>
                <b>Product Name:</b> $row[productName] <br/>
                <b>Code:</b> $row[code] <br/>
                <b>Price:</b> $row[price] <b>kr</b> <br/>
                <b>Description:</b> $row[description] <br/>
                </p></div>";

        echo '<a href="deletepro.php?id='.$row['productId'].'"'; ?>
        onclick="return confirm('Are you sure you want to delete this product? \nNotice: the product will be completely gone, and will have to be re-uploaded.');"
        <?php echo ' >Delete product</a><br>';
        echo '<a href="editui.php?id='.$row['productId'].'"'; ?>
        onclick="return confirm('Are you sure you want to edit this product?');"
        <?php echo ' >Edit this product</a>';

        echo "</div>";
        echo "</div>";

        if($i == 4) {

            echo "</div>";
            $i=0;
        }


    }mysqli_close($connection);
    ?>

</div>

</body>
</html>
