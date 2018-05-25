<?php
require_once("./pagesbackendcontroller/editprofile.php");
?>

<div class="tittlecolor">
    <h4 >EDIT YOUR PROFILE</h4>
</div>
<div class="row">
    <div class="col s12 m10">
        <div class="card-panel">
        <span class="flow-text">
            <form name="upload" method="post" action="./backendindex.php?page=editprofileb&action=update">
                    <b>User Name :</b><br><textarea name="userName" cols="40"><?php echo trim(htmlspecialchars( $row['userName'])); ?></textarea><br />
                    <b>Password :</b><br><textarea name="password" cols="40">**********</textarea><br />
                    <b>First Name :</b><br><textarea name="firstName" cols="40"><?php echo trim(htmlspecialchars($row['firstName'])); ?></textarea><br />
                    <b>Last Name :</b><br> <textarea name="lastName" cols="40"><?php echo trim(htmlspecialchars($row['lastName'])); ?></textarea><br />
                    <b>Phone :</b><br> <textarea name="phone" cols="40"><?php echo trim(htmlspecialchars($row['phone'])); ?></textarea><br />
                    <b>E-mail :</b><br> <textarea name="email" cols="40"><?php echo trim(htmlspecialchars($row['emailAddress'])); ?></textarea><br />
                    <b>Role :</b><br> <textarea name="role" cols="40"><?php echo trim(htmlspecialchars($row['role'])); ?></textarea><br />


                    <input class="waves-effect waves-light btn" name="Submit" type="submit" value="Submit">

            </form>

            <form name="delete" method="post" action="./backendindex.php?page=editprofileb&action=delete&employeeId=<?php echo $row['employeeId']; ?>"">
               <button value="submit" type="submit" class="waves-effect waves-light btn">Delete</button>
            </form>

        </span>
        </div>
    </div>
</div>