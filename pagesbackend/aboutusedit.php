<?php
require_once("./pagesbackendcontroller/aboutusedit.php");
?>
<div class="tittlecolor">
    <h4 >EDIT DESCRIPTION</h4>
</div>
<div class="row">
    <div class="col s12 m10">
        <div class="card-panel">
        <span class="flow-text">

            <form name="upload" method="post" action="./backendindex.php?page=aboutuseditb&action=update">

                    <b>Description:</b><textarea name="description" cols="40"><?php echo trim(htmlspecialchars($row['description'])); ?></textarea><br/>

                    <input class="waves-effect waves-light btn" name="Submit" type="submit" value="Submit">

                    <a href="./backendindex.php?page=aboutusb"
                       onclick="return confirm('Are you sure you want to cancel?');"
                       class="waves-effect waves-light btn">Cancel
                </a>
                </form>
        </span>
        </div>
    </div>
</div>

