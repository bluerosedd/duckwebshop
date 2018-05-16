<?php require_once("./pagesfrontendcontroller/newuser.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>


<h2>Create New User</h2>

<form action="" method="post">
    Username:
    <input placeholder="Username" type="text" name="user" maxlength="30" value="" />
    Password:
    <input placeholder="Password" type="password" name="pass" maxlength="30" value="" />

    <a class="waves-effect waves-light btn"><input type="submit" name="submit" value="Create" /></a>
</form>

</body>
</html>