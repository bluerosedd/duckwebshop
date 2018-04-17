<?php
require ("constantsuser.php");

$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if(mysqli_connect_error($connection)) {
   die("Fail to connect to DB: ". mysqli_connect_error());
}