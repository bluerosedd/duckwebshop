<?php
//  section_start();

function logged_in(){
    return isset($_SESSION['users']);
}

function confirm_logged_in(){
    if(!logged_in()) {
        redirect_to("loginuser.php");
    }
}