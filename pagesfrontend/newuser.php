<?php require_once("../pagesfrontendcontroller/newuser.php");?>

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
    <link type="text/css" rel="stylesheet" href="../style/materialize/css/custom.css" media="screen,projection"/>
</head>
<body>


<h2>Create New User</h2>

<form action="" method="post">
    Username:
    <input type="text" name="user" maxlength="30" value="" />
    Password:
    <input type="password" name="pass" maxlength="30" value="" />
    <input type="submit" name="submit" value="Create" />
</form>

</body>
</html>