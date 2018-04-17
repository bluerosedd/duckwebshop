<?php require_once("login/includes/connectionuser.php"); ?>
<?php require_once("login/includes/sessionuser.php"); ?>
<?php require_once("login/includes/functionsuser.php"); ?>
<?php
		if (logged_in()) {
		redirect_to("frontpageuser.php");
	}
 ?>
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>

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