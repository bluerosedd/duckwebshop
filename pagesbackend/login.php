<?php require_once("../pagesbackendcontroller/login.php"); ?>

<!DOCTYPE html>

    <html lang="en">
    <!DOCTYPE html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->

        <link rel = "stylesheet"href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
        <!--Import javascripts-->
        <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"> </script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="../style/materialize/sass/custom.scss" media="screen,projection"/>
    </head>
    <body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center"><img class="responsive-img" src="../images/DUCKY2-01-01.png" alt="DuckLogo"></a>
            </div>
        </nav>
        <li class="divider"></li>
    </header>



    <h2>Please login</h2>
    <form action="" method="post">
        Username:
        <input type="text" name="username" maxlength="30" value="" />
        Password:
        <input type="password" name="password" maxlength="30" value="" />
        <input type="submit" name="submit" value="Login" />
    </form>


    </body>
</html>