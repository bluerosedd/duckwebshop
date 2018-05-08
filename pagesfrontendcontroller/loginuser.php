<?php require_once("login/includes/connectionuser.php"); ?>
<?php require_once("login/includes/sessionuser.php"); ?>
<?php require_once("login/includes/functionsuser.php"); ?>
<?php
		if (logged_in()) {
		redirect_to("frontpageuser.php");
	}
 ?>

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
		$username = trim(mysqli_real_escape_string($connection, $_POST['username']));
		$password = trim(mysqli_real_escape_string($connection,$_POST['password']));

		$query = "SELECT userId, userName, password FROM users WHERE userName = '{$username}' LIMIT 1";
		$result = mysqli_query($connection, $query);
			
			if (mysqli_num_rows($result) == 1) {
				// username/password authenticated
				// and only 1 match
				$found_user = mysqli_fetch_array($result);
                if(password_verify($password, $found_user['password'])){
				    $_SESSION['user_Id'] = $found_user['userId'];
				    $_SESSION['userName'] = $found_user['userName'];
				    redirect_to("frontpageuser.php");
			} else {
				// username/password combo was not found in the database
				$message = "Username/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
			}}
	} else { // Form has not been submitted.
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
	}
if (!empty($message)) {echo "<p>" . $message . "</p>";} ?>

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
<?php
if (isset($connection)){mysqli_close($connection);}
?>