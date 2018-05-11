<?php
require_once("includes/connection.php");
?>

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
    <link type="text/css" rel="stylesheet" href="style/materialize/css/custom.css" media="screen,projection"/>
</head>
<body>

<header>
    <nav>
        <div class="nav-wrapper">

            <a href="#" class="brand-logo center"><img class="responsive-img" src="images/DUCKY2-01-01.png" alt="DuckLogo"></a>

            <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a class="textcolor" href="#!"><i class="material-icons">search</i></a></li>
            </ul>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="textcolor" href="index.php?page=login">Log in/Sign up</a></li>
                <li><a class="textcolor" href="#!"><i class="material-icons">favorite</i></a></li>
                <li><a class="textcolor" href="#!"><i class="material-icons">add_shopping_cart</i></a></li>
            </ul>

        </div>
    </nav>
    <li class="divider"></li>
    <nav class="nav-extended">
        <div class="nav-wrapper">

            <ul id="nav-mobile" >
                <li ><a class="textcolor" href="index.php?page">Home</a></li>
                <li ><a class="textcolor" href="index.php?page=products">Products</a></li>
                <li ><a class="textcolor" href="index.php?page=aboutus">About Us</a></li>
                <li ><a class="textcolor" href="index.php?page=contact">Contact US</a></li>
            </ul>

        </div>
    </nav>
    <li class="divider"></li>
</header>

<?php
if (isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "index";}

switch($page) {

    default:
        include('pagesfrontend/home.php');
        break;

    case "contact":
        include('pagesfrontend/contact.php');
        break;

    case "products":
        include('pagesfrontendcontroller/products.php');
        break;

    case "login":
        include('pagesfrontend/loginuser.php');
        break;

    case "aboutus":
        include('pagesfrontend/about.php');
        break;


}
?>

    <div class="container">

</div>
</body>

