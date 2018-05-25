<div class="tittlecolor">
    <h4 >DUCKY HISTORY</h4>
</div>
<div class="row">
    <div >
        <div class="card-panel">
        <span class="flow-text">
                <?php require_once("./includes/connection.php");

                $result=mysqli_query($connection, "SELECT * FROM company ORDER BY description DESC");
                $i=0;

                echo "<table>";

                while($row=mysqli_fetch_array($result)) {
                    echo  trim(htmlspecialchars($row['description']));

                    echo "</table>";

                }mysqli_close($connection);
                ?>

        </span>
        </div>
    </div>
</div>

