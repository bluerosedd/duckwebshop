<?php
require_once("./pagesbackendcontroller/newscontroller.php");
?>

<div class="row">
    <div class="col s6 m12">
        <div class="card">
            <div align="center" class="card-content">
                <ul >
                    <li class="tittlecolor"><h4 align="center">News</h4></li>
                </ul>
            </div>
            <div class="cardlinks">

                <a href="./backendindex.php?page=newscreateb"
                   class="waves-effect waves-light btn">New post</a>
            </div>
        </div>
    </div>
</div>

<?php
$i=0;

while($row=mysqli_fetch_array($result)) {
    $i++;
    if ($i == 1) {

        echo "<div class=\"row\">";
    }

    ?>
    <div class="col s12 m3">
        <div class="card">

            <div class="card-image"><img src="./images/<?php echo $row['newsPicture'] ?>"></div>

            <div class="card-content">
                <ul>
                    <li style="font-size: 17px"><?php echo $row['newsTitle'] ?> </li>
                    <li style="font-size: 17px"><?php echo $row['description'] ?> </li>
                    <li style="font-size: 17px"><b>Created:</b><?php echo $row['createdDay'];
                        echo "/";
                        echo $row['createdMonth'];
                        echo "/";
                        echo $row['createdYear'] ?> </li>
                </ul>
            </div>

            <div class="cardlinks">
                <form name="delete" method="post" action="./backendindex.php?page=newseditb&action=delete&newsId=<?php echo $row['newsId']; ?>">
                    <button value="submit" type="submit" class="waves-effect waves-light btn">Delete</button>
                </form>
                <a href="./backendindex.php?page=newseditb&newsId=<?php echo $row['newsId'] ?>"
                   onclick="return confirm('Are you sure you want to edit this product?');"
                   class="waves-effect waves-light btn">Edit post
                </a>

            </div>
        </div>
    </div>
    <?php

    if ($i == 2) {

        echo "</div>";
        $i = 0;
    }
}
?>