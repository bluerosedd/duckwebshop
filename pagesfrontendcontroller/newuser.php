<?php require_once("login/includes/sessionuser.php");
require_once("login/includes/connectionuser.php");
require_once("login/includes/functionsuser.php");
//confirm_logged_in(); ?>

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
                <li><a class="textcolor" href="../pagesfrontend/contact.php">Contact US</a></li>
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

<?php
// START FORM PROCESSING
if (isset($_POST['submit'])) { // Form has been submitted.
	$errors = array();

	// perform validations on the form data
	$username = trim(mysqli_real_escape_string($connection, $_POST['user']));
	$password = trim(mysqli_real_escape_string($connection, $_POST['pass']));
    $iterations = ['cost' => 15];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $iterations);

	$query = "INSERT INTO `users` (userName, password) VALUES ('{$username}', '{$hashed_password}')";
	$result = mysqli_query($connection, $query);
		if ($result) {
			$message = "User Created.";
		} else {
			$message = "User could not be created.";
			$message .= "<br />" . mysql_error();
		}
}

if (!empty($message)) {echo "<p>" . $message . "</p>";}
?>


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
<?php
if (isset($connection)){mysqli_close($connection);}
?>
