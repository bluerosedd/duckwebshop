<?php
require_once("./pagesfrontendcontroller/userprofileedit.php");
?>

<div class="tittlecolor">
    <h4 >EDIT YOUR PROFILE</h4>
</div>
<div class="row">
    <div class="col s12 m10">
        <div class="card-panel">
        <span class="flow-text">
            <form name="upload" method="post" action="./index.php?page=profileedit&action=update&userId=<?php echo $row['userId']; ?>">
                <p class="flow-text" style="font-size:18px">
                  <b>User Name :</b><br><textarea name="userName" cols="40"><?php echo $row['userName']; ?></textarea><br />
                    <b>Password :</b><br><textarea name="password" cols="40">**********</textarea><br />
                    <b>First Name :</b><br><textarea name="firstName" cols="40"><?php echo $row['firstName']; ?></textarea><br />
                    <b>Last Name :</b><br> <textarea name="lastName" cols="40"><?php echo $row['lastName']; ?></textarea><br />
                    <b>E-mail :</b><br> <textarea name="email" cols="40"><?php echo $row['emailAddress']; ?></textarea><br />
                    <b>Birth date : </b><br><textarea type="numbers" name="birthDay" cols="11"><?php echo $row['birthDay']; ?></textarea><br />
                    <b>Birth month :</b><br><textarea type="numbers" name="birthMonth" cols="11"><?php echo $row['birthMonth']; ?></textarea><br />
                    <b>Birth year :</b><br><textarea type="numbers" name="birthYear" cols="11"><?php echo $row['birthYear']; ?></textarea><br />
                    <b>Street Name :</b><br> <textarea name="streetName" cols="40"><?php echo $row['streetName']; ?></textarea><br />
                    <b>Number :</b><br> <textarea name="streetNumber" cols="40"><?php echo $row['streetNumber']; ?></textarea><br />
                    <b>City :</b><br> <textarea name="city" cols="40"><?php echo $row['city']; ?></textarea><br />
                    <b>Zip Code :</b><br><textarea name="zipCode" cols="40"><?php echo $row['zipCode']; ?></textarea><br />

                </p>
                <li class="divider"></li></br>

                    <input class="waves-effect waves-light btn" name="Submit" type="submit" value="Submit">

            </form>

            <form name="delete" method="post" action="./index.php?page=profileedit&action=delete&userId=<?php echo $row['userId']; ?>">
               <button value="submit" type="submit" class="waves-effect waves-light btn">Delete User</button>
            </form>
            <a href="./index.php?page=profileuser"
               onclick="return confirm('Are you sure you want to cancel?');"
               class="waves-effect waves-light btn">Cancel
                </a>

        </span>
        </div>
    </div>
</div>