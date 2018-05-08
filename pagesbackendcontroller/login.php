<?php require_once("../../includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
		if (logged_in()) {
		redirect_to("../frontpage.php");
	}
 ?>

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
        <link type="text/css" rel="stylesheet" href="../../style/materialize/sass/custom.scss" media="screen,projection"/>
    </head>
    <body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center"><img class="responsive-img" src="../../images/DUCKY2-01-01.png" alt="DuckLogo"></a>
            </div>
        </nav>
        <li class="divider"></li>
    </header>


 <?php
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted.
		$username = trim(mysqli_real_escape_string($connection, $_POST['username']));
		$password = trim(mysqli_real_escape_string($connection,$_POST['password']));

		$query = "SELECT employeeId, userName, password FROM employees WHERE userName = '{$username}' LIMIT 1";
		$result = mysqli_query($connection, $query);
			
			if (mysqli_num_rows($result) == 1) {
				// username/password authenticated
				// and only 1 match
				$found_user = mysqli_fetch_array($result);
                if(password_verify($password, $found_user['password'])){
				    $_SESSION['user_id'] = $found_user['employeeId'];
				    $_SESSION['userName'] = $found_user['userName'];
				    redirect_to("../frontpage.php");
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