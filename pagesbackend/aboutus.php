<?php require_once("./includes/sessionbackend.php");?>


        <div class="col s6 m12">
                <div align="center" class="card-content">
                    <ul >
                        <li class="tittlecolor"><h4 align="center">About Us</h4></li>
                    </ul>
                </div>
    </div>

<?php
$result=mysqli_query($connection, "SELECT * FROM company ORDER BY companyId DESC");
$i=0;


while($row=mysqli_fetch_array($result)) {
    $i++;
    if($i == 1) {

        echo "<div class=\"row\">";
    }

    ?>
    <div class="col s2 m12">
        <div class="card">

            <div align="center" class="card-content">
                <ul >
                    <li class="tittlecolor" style="font-size: 17px"><h5><?php echo trim(htmlspecialchars($row['name']));?> </h5></li>
                    <li style="font-size: 17px"><?php echo  trim(htmlspecialchars($row['description']));?> </li>

                </ul>
            </div>

            <div class="cardlinks">
                <a href="./backendindex.php?page=aboutuseditb&companyId=<?php echo  trim(htmlspecialchars($row['companyId']));?>"
                   onclick="return confirm('Are you sure you want to edit this product?');"
                   class="waves-effect waves-light btn">Edit information
                </a>

            </div>
        </div>
    </div>
    <?php

    if($i == 1) {

        echo "</div>";
        $i=0;
    }


}
?>