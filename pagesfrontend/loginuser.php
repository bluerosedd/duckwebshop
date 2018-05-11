<?php require_once("./pagesfrontendcontroller/loginuser.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>


<h4>Please login</h4>
<form action="" method="post">
    Username:
    <input type="text" name="username" maxlength="30" value="" />
    Password:
    <input type="password" name="password" maxlength="30" value="" />
    <a class="waves-effect waves-light btn"><input type="submit" name="submit" value="Login" /></a>

</form>

<br> </br>

<div>
    <h6>Or you can sign up here</h6>
    <a class="waves-effect waves-teal btn-flat" href="./newuser.php">Sign up</a>

</div>

</body>
</html>