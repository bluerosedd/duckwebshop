<?php

//FRONTEND SWITCH CASE CONTROLLER
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

    case "news":
        include('pagesfrontend/news.php');
        break;

    case "products":
        include('pagesfrontend/products.php');
        break;

    case "productdetails":
        include('pagesfrontend/productdetails.php');
        break;

    case "login":
        include('pagesfrontend/loginuser.php');
        break;

    case "newuser":
        include('pagesfrontend/newuser.php');
        break;

    case "logout":
        include('pagesfrontendcontroller/logoutuser.php');
        break;

    case "profileuser":
        include('pagesfrontend/userprofile.php');
        break;

    case "profileedit":
        include('pagesfrontend/userprofileedit.php');
        break;

    case "aboutus":
        include('pagesfrontend/about.php');
        break;

    case "cart":
        include('pagesfrontend/cart.php');
        break;

    case "purchase":
        include('pagesfrontend/purchase.php');
        break;


}


