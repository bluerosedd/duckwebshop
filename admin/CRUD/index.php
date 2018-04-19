<?php require_once("includes/connection.php"); ?>
<html>
<body>
<h1 align="center">Admin / Handle your ducks!</h1>
<a href="upload.php">Upload a new product!</a>
<br><br>
<?php
$result=mysqli_query($connection, "SELECT * FROM products ORDER BY productId DESC");

while($row=mysqli_fetch_array($result)){
echo "<b>Id :</b> $row[productId] <br/>";
    echo "<b>Product Name:</b> $row[productName] <br/>";
    echo "<b>Price:</b> $row[price] <b>kr</b> <br/>";
    echo "<b>Description:</b> $row[description] <br/>";
    echo "<b>Image:</b> $row[productPicture] <br /> <img src=\"img/$row[productPicture]\" width=\"200\" > <br/>";

    echo '<a href="deletepro.php?id='.$row['productId'].'"'; ?>
    onclick="return confirm('Are you sure you want to delete this product? \nNotice: the product will be completely gone, and will have to be re-uploaded.');"
    <?php echo ' >Delete product</a><br>';

    echo '<a href="editui.php?id='.$row['productId'].'"'; ?>
    onclick="return confirm('Are you sure you want to edit this product?');"
    <?php echo ' >Edit this product</a>';

echo "<hr>";
}

mysqli_close($connection);
?> 
</body>
</html>