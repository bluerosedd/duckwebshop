<?php require_once("./includes/sessionbackend.php");
require_once("./includes/connection.php");

define ("MAX_SIZE","3000");

function getExt($str){
    $i = strrpos($str,".");
    if (!$i) { return ""; }
    $p = strlen($str) - $i;
    $ext = substr($str,$i+1,$p);
    return $ext;
}

$errors=0;
if(isset($_POST['Submit']))
{
    $image=$_FILES['image']['name'];
    $description=$_POST['desc'];
    $newsTitle=$_POST['newsTitle'];
    $createdDay=$_POST['createdDay'];
    $createdMonth=$_POST['createdMonth'];
    $createdYear=$_POST['createdYear'];

    if ($image)
    {
        $filename = stripslashes($_FILES['image']['name']);
        $extension = getExt($filename);
        $extension = strtolower($extension);
        if(($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
        {
            echo '<h1>Unknown filetype!</h1>';
            $errors=1;
        }
        else
        {
            $size=filesize($_FILES['image']['tmp_name']);

            if ($size > MAX_SIZE*1024)
            {
                echo '<h1>Image is to big: Max 3 Mb!</h1>';
                $errors=1;
                return 0;
            }else{

                $image_name=$image;
                $newname="./images/".$image_name;
                $copied = copy($_FILES['image']['tmp_name'], $newname);
                if (!$copied) {
                    echo '<h1>Copy unsuccessfull!</h1>';
                    $errors = 1;
                }
            }}}

    if(isset($_POST['Submit']) && !$errors)
    {
        $query = "INSERT INTO news (newsPicture, newsTitle, description, createdDay, createdMonth, createdYear )
                  VALUES ('{$image}','{$newsTitle}','{$description}','{$createdDay}','{$createdMonth}','{$createdYear}')";
        $result = mysqli_query($connection, $query);

        header('location:backendindex.php?page=newsb');
    }
}

?>


<div class="col s12 m3">
    <div class="card">
        <div class="card-content">
            <ul>
                <form name="upload" method="post" enctype="multipart/form-data"  action="">
                    <div class="tittlecolor">
                        <h4 >NEW POST</h4>
                    </div>
                    <h5>Here you can upload an image!</h5><br />
                    <b>Image:</b> <input  type="file" name="image" value=""><br><br />
                    <b>Title:</b><textarea name="newsTitle" cols="40"></textarea><br />
                    <b>Description:</b><textarea name="desc" cols="40"></textarea><br />
                    <b>Created day</b><textarea type="numbers" name="createdDay" cols="11"></textarea>
                    <b>Created month</b><textarea type="numbers" name="createdMonth" cols="11"></textarea>
                    <b>Created year</b><textarea type="numbers" name="createdYear" cols="11"></textarea>


                    <input class="waves-effect waves-light btn" name="Submit" type="submit" value="Submit">

                    <a href="./backendindex.php?page=newsb"
                       onclick="return confirm('Are you sure you want to cancel?');"
                       class="waves-effect waves-light btn">Cancel
                    </a>


                </form>
            </ul>
        </div>
    </div>
</div>