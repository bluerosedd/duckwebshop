<?php require_once("./pagesfrontendcontroller/contactfunction.php");
require_once("./pagesfrontendcontroller/contactus.php"); ?>


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
            <div class="g-recaptcha" data-sitekey="6LchVFsUAAAAAAFyve5gU5Qe4FsT-52CdbunYB8H"></div>
        <a class="waves-effect waves-light btn"><input type="submit" value="Send"><i class="material-icons right">send</i></a>
        </form>
        </div>
    </div>

    <div class="col s12 m6">
        <div class="card">
            <div align="center" class="card-content">
                <ul>
                    <li class="tittlecolor" style="font-size: 17px"><h5>Opening hours</h5></li>
                    <li ><h5><?php echo $row['openingHours'] ?> </h5></li>
                    <li class="tittlecolor" style="font-size: 17px"><h5>Phone:</h5></li>
                    <li><h5><?php echo $row['phone'] ?> </h5></li>
                    <li class="tittlecolor" style="font-size: 17px"><h5>Email:</h5></li>
                    <li><h5><?php echo $row['email'] ?> </h5></li>
                </ul>
            </div>
        </div>
</div>

