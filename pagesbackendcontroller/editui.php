<?php require_once("./includes/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<body>
<h1 align="center">Edit image</h1>

<?php
$id=$_GET['id'];
$query = "SELECT * FROM products WHERE productId='$id'";
$result=mysqli_query($connection, $query);

while($row=mysqli_fetch_array($result)){
echo "<b>Id :</b> $row[productId] <br/>";
    echo "<b>Description:</b> $row[description] <br/>";
    echo "<b>Image:</b> $row[productPicture] <br /> <img src=\"../images/$row[productPicture]\" width=\"100\" > <br/>";
?>
    <form name="upload" method="post" action="editpro.php">
        <b>Image:</b> <input type="file" name="image" value=""><?php echo $row['productPicture']; ?><br />
        <b>Product Name:</b><textarea name="productName"><?php echo $row['productName']; ?></textarea><br />
        <b>Code :</b><textarea name="code"><?php echo $row['code']; ?></textarea><br />
        <b>Description:</b><br> <textarea name="desc"><?php echo $row['description']; ?></textarea><br />
        <input name="id" type="hidden" value="<?php echo $id; ?>">
        <input name="Submit" type="submit" value="Save">
    </form>


<?php
}
mysqli_close($connection);
?>
</body>
</html>