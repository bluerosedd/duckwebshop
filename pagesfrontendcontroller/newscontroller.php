<?php
$query = "SELECT * FROM news";
$result=mysqli_query($connection, $query);
$row=mysqli_fetch_array($result);