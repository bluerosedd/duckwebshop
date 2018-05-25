<?php
require_once("./pagesfrontendcontroller/newscontroller.php");

$i=0;

while($row=mysqli_fetch_array($result)) {
    $i++;
    if ($i == 1) {

        echo "<div class=\"row\">";
    }

    ?>
    <div class="col s12 m12">
        <div class="card">
            <div class="tittlecolor"><h5>NEWS!</h5></div>

            <div class="card-image" ><img src="./images/<?php echo $row['newsPicture'] ?>"></div>

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
        </div>
    </div>
    <?php

    if ($i == 2) {

        echo "</div>";
        $i = 0;
    }
}
?>
</div>
