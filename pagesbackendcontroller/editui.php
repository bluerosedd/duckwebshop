<?php require_once("../../includes/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <!--Import javascripts-->
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"> </script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="../../style/materialize/css/custom.css" media="screen,projection"/>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper">

            <a href="#" class="brand-logo center"><img class="responsive-img" src="../../images/DUCKY2-01-01.png" alt="DuckLogo"></a>

            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a class="textcolor" href="../../admin/CRUD/index.php">Products</a></li>
                <li><a class="textcolor" href="#!">empty</a></li>
                <li><a class="textcolor" href="#!">empty</a></li>
            </ul>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="textcolor" href="../../pagesbackendcontroller/logout.php">Log Out</a></li>
                <li><a class="textcolor" href="#!">empty</a></li>
                <li><a class="textcolor" href="#!">empty</a></li>
            </ul>

        </div>
    </nav>
    <li class="divider"></li>

<body>
<h1 align="center">Edit image</h1>

<?php
$id=$_GET['id'];
$query = "SELECT * FROM products WHERE productId='$id'";
$result=mysqli_query($connection, $query);

while($row=mysqli_fetch_array($result)){
echo "<b>Id :</b> $row[productId] <br/>";
    echo "<b>Description:</b> $row[description] <br/>";
    echo "<b>Image:</b> $row[productPicture] <br /> <img src=\"img/$row[productPicture]\" width=\"100\" > <br/>";
?>
    <form name="upload" method="post" action="editpro.php">
        <b>Image:</b> <input type="file" name="image" value=""><?php echo $row['productPicture']; ?><br />
        <b>Product Name:</b><textarea name="productName"><?php echo $row['productName']; ?></textarea><br />
        <b>Code :</b><textarea name="productName"><?php echo $row['code']; ?></textarea><br />
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