<?php
require_once("./includes/connection.php");
if(isset($_SESSION['employeeId'])){
$employeeId = ($_SESSION['employeeId']);
}
$result=mysqli_query($connection, "SELECT * FROM employees WHERE employeeId='$employeeId'")or die(mysqli_error());
$row=mysqli_fetch_array($result);
//var_dump($_SESSION);
?>

<br>
<div class="col s12 m3">
    <div class=" center">
        <div class="tittlecolor">
            <h4>Your profile page</h4>
        </div>
    </div>
</div>
<br>

<div class="col s12 m3">
    <div class="card">
        <div class="card-content">
            <form action="" method="post">
                <b>User Name :</b><br><?php echo $row['userName']; ?><br />
                <b>Password :</b><br>**********</textarea><br />
                <b>First Name :</b><br><?php echo $row['firstName']; ?><br />
                <b>Last Name :</b><br> <?php echo $row['lastName']; ?><br />
                <b>Phone :</b><br> <?php echo $row['phone']; ?><br />
                <b>E-mail :</b><br> <?php echo $row['emailAddress']; ?><br />
                <b>Role :</b><br> <?php echo $row['role']; ?><br />
                <li class="divider"></li></br>

                <a href="./backendindex.php?page=editprofileb&employeeId=<?php echo $row['employeeId']?>"
                   onclick="return confirm('Are you sure you want to edit this profile?');"
                   class="waves-effect waves-light btn">Edit profile
                </a>
            </form>
        </div>
    </div>
</div>

