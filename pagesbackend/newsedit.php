<?php
require_once("./pagesbackendcontroller/newsedit.php");
?>

<div class="tittlecolor">
    <h4 >EDIT POST</h4>
</div>
<div class="row">
    <div class="col s12 m10">
        <div class="card-panel">
        <span class="flow-text">

            <b>Image:</b>  <br /> <img src="./images/<?php echo $row['newsPicture']?>" width=\"100\" > <br/>

            <form name="upload" method="post" action="./backendindex.php?page=newseditb&action=update&newsId=<?php echo $row['newsId']; ?>">

                    <b>Image:</b> <input  type="file" name="image" value=""><?php echo trim(htmlspecialchars( $row['newsPicture'])); ?><br><br />
                    <b>Title:</b><textarea name="newsTitle" cols="40"><?php echo trim(htmlspecialchars( $row['newsTitle'])); ?></textarea><br />
                    <b>Description:</b><textarea name="description" cols="40"><?php echo trim(htmlspecialchars($row['description'])); ?></textarea><br />
                    <b>Created day</b><textarea type="numbers" name="createdDay" cols="11"><?php echo trim(htmlspecialchars( $row['createdDay'])); ?></textarea>
                    <b>Created month</b><textarea type="numbers" name="createdMonth" cols="11"><?php echo trim(htmlspecialchars($row['createdMonth'])); ?></textarea>
                    <b>Created year</b><textarea type="numbers" name="createdYear" cols="11"><?php echo trim(htmlspecialchars($row['createdYear'])); ?></textarea>


                    <input class="waves-effect waves-light btn" name="Submit" type="submit" value="Save">
            </form>

            <form name="delete" method="post" action="./backendindex.php?page=newseditb&action=delete&newsId=<?php echo $row['newsId']; ?>">
               <button value="submit" type="submit" class="waves-effect waves-light btn">Delete</button>
            </form>

            <form>
                <a href="./backendindex.php?page=productsb"
                   onclick="return confirm('Are you sure you want to cancel?');"
                   class="waves-effect waves-light btn">Cancel
                </a>
             </form>
        </span>
        </div>
    </div>
</div>
