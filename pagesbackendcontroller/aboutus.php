<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
<h4 align="center">Edit company description</h4>

<div class="row">
    <div >
        <div class="card-panel teal">
        <span class="white-text">
                <?php require_once("../includes/connection.php");

                $result=mysqli_query($connection, "SELECT * FROM company ORDER BY description DESC");
                $i=0;

                echo "<table>";

                while($row=mysqli_fetch_array($result)) {
                    echo  $row['description'];

                    echo "</table>";

                }mysqli_close($connection);
                ?>

        </span>
        </div>
    </div>
</div>

</body>
</html>


</body>
</html>