<?php
require_once("./pagesbackendcontroller/contactusedit.php");
?>

<div class="tittlecolor">
    <h4 >EDIT DESCRIPTION</h4>
</div>

<div class="row">
    <div class="col s12 m10">
        <div class="card-panel">
        <span class="flow-text">

             <form name="upload" method="post" action="./backendindex.php?page=contactuseditb&action=update&companyId=<?php echo $row['companyId']; ?>">

                    <b>Opening hours:</b> <textarea name="openingHours" cols="40"><?php echo $row['openingHours']; ?></textarea><br />
                    <b>Phone:</b><textarea name="phone" cols="40"><?php echo $row['phone']; ?></textarea><br />
                    <b>Email:</b><textarea name="email" cols="40"><?php echo $row['email']; ?></textarea><br />

                    <input class="waves-effect waves-light btn" name="Submit" type="submit" value="Save">
            </form>
        </span>
        </div>
    </div>
</div>
