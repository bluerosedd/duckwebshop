<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="materialize/css/custom.css"  media="screen,projection"/>


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
<header>
<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo"><img class="responsive-img" src="images/DUCKY-01-01.png" alt="DuckLogo"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Log in</a></li>
            <li><a href="./contactform/contact.php">Contact Us</a></li>
            <li><a href="collapsible.html">Chart</a></li>
        </ul>
    </div>
    <div class="nav-content">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a href="#test1">Home</a></li>
            <li class="tab"><a class="active" href="#test2">Products</a></li>
            <li class="tab disabled"><a href="#test3">About US</a></li>
            <li class="tab"><a href="#test4">Test 4</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
</ul>
</header>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="materialize/js/bin/materialize.js"></script>

</body>

</html>
