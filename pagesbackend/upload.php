<?php require_once("../pagesbackendcontroller/upload.php"); ?>

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
                <li><a class="textcolor" href="#!">empty</a></li>
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


    <body>
    <form name="upload" method="post" enctype="multipart/form-data"  action="">
        <h1>Product upload</h1>
        <h2>Here you can upload an image!</h2>
        <b>Image:</b> <input type="file" name="image" value=""><br />
        <b>Product Name:</b><textarea name="productName" cols="40"></textarea><br />
        <b>Description:</b><textarea name="desc" cols="40"></textarea><br />
        <b>Code:</b><textarea name="code" cols="40"></textarea>

        <input name="Submit" type="submit" value="Submit">
    </form>
    </body>
</html>