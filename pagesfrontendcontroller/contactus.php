<?php
$query = "SELECT * FROM company";
$result=mysqli_query($connection, $query);
$row=mysqli_fetch_array($result);
