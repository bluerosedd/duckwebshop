<?php require_once("./pagesbackendcontroller/contactus.php"); ?>

    <div class="col s6 m12">
        <div align="center" class="card-content">
            <ul >
                <li class="tittlecolor"><h4 align="center">Contact Us</h4></li>
            </ul>
        </div>
    </div>

<?php
while($row=mysqli_fetch_array($result)) {
    $i++;
    if ($i == 1) {

        echo "<div class=\"row\">";
    }
    ?>
    <div class="col s2 m12">
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

            <div class="cardlinks">
                <a href="./backendindex.php?page=contactuseditb&companyId=<?php echo $row['companyId'] ?>"
                   onclick="return confirm('Are you sure you want to edit?');"
                   class="waves-effect waves-light btn">Edit contact information
                </a>
            </div>
        </div>
    </div>
    <?php
    if ($i == 1) {

        echo "</div>";
        $i = 0;
    }
}
?>