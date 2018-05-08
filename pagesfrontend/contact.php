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
<header>
    <nav>
        <div class="nav-wrapper">

            <a href="#" class="brand-logo center"><img class="responsive-img" src="../images/DUCKY2-01-01.png" alt="DuckLogo"></a>

            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a class="textcolor" href="../index.php">Products</a></li>
                <li><a class="textcolor" href="#!">About Us</a></li>
                <li><a class="textcolor" href="contact.php">Contact US</a></li>
            </ul>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="textcolor" href="../users/loginuser.php">Log In</a></li>
                <li><a class="textcolor" href="#!">Favourites</a></li>
                <li><a class="textcolor" href="#!">Cart</a></li>
            </ul>

        </div>
    </nav>
    <li class="divider"></li>
</header>

<form name="contact" method="post" action="../pagescontroller/contactfunction.php">
<label for="name">Name: </label>
<input type="text" id="name" name="name" maxlength="50" size="30">
<br>
<label for="email">Email: </label>
<input type="text" id="email" name="email" maxlength="80" size="30">
<br>
<label for="message">Message: </label>
<textarea name="message" id="message" maxlength="1000" cols="25" rows="6"></textarea>
<br>
<input type="submit" value="Send">
</form>

</body>
</html>