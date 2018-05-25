<?php require_once("./pagesfrontendcontroller/loginuser.php"); ?>

<h6>To be able to save products into favorites or/and purchase we ask you to log in, thanks.</h6>

<h4>Please login</h4>
<form action="" method="post">
    Username:
    <input placeholder="Username" type="text" name="username" maxlength="30" value="" />
    Password:
    <input placeholder="Password" type="password" name="password" maxlength="30" value="" />
    <a class="waves-effect waves-light btn"><input type="submit" name="submit" value="Login" /></a>

</form>

<br> </br>

<div>
    <h6>Or you can sign up here</h6>
    <a class="waves-effect waves-teal btn-flat" href="index.php?page=newuser">Sign up</a>

</div>
