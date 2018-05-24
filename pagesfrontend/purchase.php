<?php require_once("./pagesfrontendcontroller/cart.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php  if(!empty($_SESSION['products'])) {
    $_SESSION['products'] =array();
    echo "<div class=\"col s12 m6 \">
                <div class=\"card-panel\">
                    <h5 class=\"tittlecolor\" align=\"center\">THANKS FOR YOUR PURCHASE</h5>
                    <p align=\"center\">Your package will NEVER arrive, enjoy your products!</p>
                    <div class=\" center\">
                         <a  class=\"waves-effect waves-light btn\" href=\"./index.php?page=products\">Shop more!</a>
                    </div>
                </div>
            </div>";

    }elseif(empty($_SESSION['products'])){

       echo "<div class=\"col s12 m6 \">
            <div class=\"card-panel\">
            <h5 class=\"tittlecolor\" align=\"center\">UPS!!!!</h5>
            <p align=\"center\">Error: Something went wrong, try again!</p>
            </div>
        </div>";

} ?>

</body>
</html>