<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>

<body>
<form name="contact" method="post" action="contactfunction.php">
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
