<?php
require_once("./pagesfrontendcontroller/userprofile.php"); ?>

<br>
<div class="col s12 m3">
    <div class=" center">
        <div class="tittlecolor">
            <h4>Your profile page</h4>
        </div>
    </div>
</div>

<div class="col s10 m4">
    <div class="card">
        <div class="card-content">
            <form action="" method="post">
                <p class="flow-text" style="font-size:18px">
                <b>User Name :</b><br><?php echo trim(htmlspecialchars($row['userName'])); ?><br />
                <b>Password :</b><br>**********</textarea><br />
                <b>First Name :</b><br><?php echo trim(htmlspecialchars($row['firstName'])); ?><br />
                <b>Last Name :</b><br> <?php echo trim(htmlspecialchars($row['lastName'])); ?><br />
                <b>E-mail :</b><br> <?php echo trim(htmlspecialchars($row['emailAddress'])); ?><br />
                <b>Birthday :</b><br><?php echo trim(htmlspecialchars($row['birthDay']));
                echo "/";
                echo $row['birthMonth'];
                echo "/";
                echo $row['birthYear'] ?> </li><br />

                <b>Street Name :</b><br> <?php echo trim(htmlspecialchars($row['streetName'])); ?><br />
                <b>Number :</b><br> <?php echo trim(htmlspecialchars($row['streetNumber'])); ?><br />
                <b>City :</b><br> <?php echo trim(htmlspecialchars($row['city'])); ?><br />
                <b>Zip Code :</b><br> <?php echo trim(htmlspecialchars($row['zipCode'])); ?><br />

                </p>
                <li class="divider"></li></br>

                <a href="./index.php?page=profileedit&userId=<?php echo $row['userId']?>"
                   onclick="return confirm('Are you sure you want to edit your profile?');"
                   class="waves-effect waves-light btn">Edit profile
                </a>

            </form>
        </div>
    </div>
</div>
