<?php require_once("./pagesfrontendcontroller/contactfunction.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<div class="row">
    <div class="col s12 m6">
        <div class="card-panel">
        <span class="card-title"><h5>Contact us</h5></span>
        <br>
        <form name="contact" method="post" action="../pagesfrontendcontroller/contactfunction.php">
       <label for="name"> <h6>Name: </h6></label>
        <input placeholder="Insert name here" type="text" id="name" name="name" maxlength="50" size="30">
        <br>
            <label for="email"><h6>Email:</h6></label>
        <input placeholder="Insert your email here" type="text" id="email" name="email" maxlength="80" size="30">
        <br>
        <label for="message"><h6>Message: </h6> </label>
        <textarea placeholder="Write your message here" name="message" id="message" maxlength="1000" cols="25" rows="6"></textarea>
        <br> <br>
        <a class="waves-effect waves-light btn"><input type="submit" value="Send"><i class="material-icons right">send</i></a>
        </form>
        </div>
    </div>
</div>

</body>
</html>
