<?php

//BACKEND SWITCH CASE CONTROLLER
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "backendindex";}

switch($page) {

    default:
        include('pagesbackend/home.php');
        break;

    case "productsb":
        include('pagesbackend/products.php');
        break;

    case "uploadb":
        include('pagesbackend/upload.php');
        break;

    case "editproductb":
        include('pagesbackend/editproduct.php');
        break;

    case "aboutusb":
        include('pagesbackend/aboutus.php');
        break;

    case "aboutuseditb":
        include('pagesbackend/aboutusedit.php');
        break;

    case "contactusb":
        include('pagesbackend/contactus.php');
        break;

    case "contactuseditb":
        include('pagesbackend/contactusedit.php');
        break;

    case "newsb":
        include('pagesbackend/news.php');
        break;

    case "newscreateb":
        include('pagesbackendcontroller/newscreate.php');
        break;

    case "newseditb":
        include('pagesbackend/newsedit.php');
        break;

    case "dailyofferb":
        include('pagesbackend/dailyoffer.php');
        break;

    case "profileb":
        include('pagesbackend/profile.php');
        break;

    case "editprofileb":
        include('pagesbackend/editprofile.php');
        break;

    case "newuserb":
        include('pagesbackend/newuser.php');
        break;

    case "loginb":
        include('pagesbackend/login.php');
        break;

    case "logoutb":
        include('pagesbackendcontroller/logout.php');
        break;



}