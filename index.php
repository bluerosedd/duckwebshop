<?php
require_once("includes/connection.php");
?>

<!DOCTYPE html>
<div lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="style/materialize/css/custom.css" media="screen,projection"/>
</head>
<body>

<header>
    <nav >
        <div class="nav-wrapper coloredIcons">

            <a href="#" class="brand-logo center"><img class="responsive-img" src="images/DUCKY2-01-01.png" alt="DuckLogo"></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="<?php if(isset($_GET['page']) && $_GET['page']=='login') {echo 'active';} ?>">
                    <a class="textcolor" href="index.php?page=login">Log in/Sign up</a>
                </li>
                <li >
                    <a  class="textcolor" href="#!"><i class="material-icons">favorite</i></a>
                </li>
                <li class="<?php if(isset($_GET['page']) && $_GET['page']=='cart') {echo 'active';} ?>">
                   <a  class="textcolor" href="index.php?page=cart"><i class="material-icons">add_shopping_cart</i></a>
                </li>

            </ul>

        </div>
    </nav>

    <nav class="nav-extended">
        <div class="nav-wrapper">
            <ul id="nav-mobile">

            <li class="<?php if(!isset($_GET['page'])) {echo 'active';} ?>">
                <a class="textcolor-extended" href="index.php">Home</a>
            </li>
            <li class="<?php if(isset($_GET['page']) && $_GET['page']=='products') {echo 'active';} ?>">
                <a class="textcolor-extended" href="index.php?page=products">Products</a>
            </li>
            <li class="<?php if(isset($_GET['page']) && $_GET['page']=='aboutus') {echo 'active';} ?>">
                <a class="textcolor-extended" href="index.php?page=aboutus">About us</a>
            </li>
            <li class="<?php if(isset($_GET['page']) && $_GET['page']=='contact') {echo 'active';} ?>">
                <a class="textcolor-extended" href="index.php?page=contact">Contact us</a>
            </li>

            </ul>
        </div>
    </nav>

</header>
<div class="container">

    <?php require_once("includes/switchcontroller.php"); ?>

</div>
</body>


</div>
<footer id="myfooter" class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Contact Us</h5>
                <p class="grey-text text-lighten-4">Tlf: 53805606</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Follow us</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2018 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>

    <!--Import javascripts-->
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"> </script>
</footer>
