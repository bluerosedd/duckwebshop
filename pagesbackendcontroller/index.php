<?php require_once("../includes/connection.php"); ?>
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
    <link type="text/css" rel="stylesheet" href="../style/materialize/css/custom.css" media="screen,projection"/>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper">

            <a href="#" class="brand-logo center"><img class="responsive-img" src="../images/DUCKY2-01-01.png" alt="DuckLogo"></a>

            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a class="textcolor" href="index.php">Products</a></li>
                <li><a class="textcolor" href="aboutus.php">About us</a></li>
                <li><a class="textcolor" href="#!">empty</a></li>
            </ul>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="textcolor" href="logout.php">Log Out</a></li>
                <li><a class="textcolor" href="#!">empty</a></li>
                <li><a class="textcolor" href="#!">empty</a></li>
            </ul>

        </div>
    </nav>
    <li class="divider"></li>
</header>
<body>
<h4 align="center">Admin / Handle your ducks!</h4>
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
        echo "<div class=\"card-content\"><p><b>Product Name:</b> $row[productName] <br/><b>Code:</b> $row[code] <br/><b>Price:</b> $row[price] <b>kr</b> <br/><b>Description:</b> $row[description] <br/></p></div>";

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