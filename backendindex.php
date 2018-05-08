<?php require_once("includes/sessionbackend.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php //confirm_logged_in(); ?>

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
    <link type="text/css" rel="stylesheet" href="style/materialize/css/custom.css" media="screen,projection"/>
</head>

<body>
<header>

    <nav>
        <div class="nav-wrapper">

            <a href="#" class="brand-logo center"><img class="responsive-img" src="images/DUCKY2-01-01.png" alt="DuckLogo"></a>

            <ul id="nav-mobile" class="left hide-on-med-and-down">

                <!-- Dropdown Trigger -->
                <li><a class="textcolor" class="dropdown-trigger" href="#!" data-target="dropdown1">ADMIN<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="textcolor" href="badges.html">Search bar</a></li>

                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="pagesfrontend/contact.php">Contact Form</a></li>
                    <li><a href="#!">two</a></li>
                    <li><a href="#!">three</a></li>
                </ul>

            </ul>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="textcolor" href="pagesbackendcontroller/index.php">Products</a></li>
                <li><a class="textcolor" href="pagesbackendcontroller/logout.php">Log out</a></li>
            </ul>

        </div>
    </nav>

    <li class="divider"></li>
</header>
<script>
    var elem = document.querySelector('.dropdown-trigger');
    var instance = M.Dropdown.init(elem, options);
</script>
</body>
</html>