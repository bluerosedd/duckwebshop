<?php require_once("./includes/connection.php"); ?>

<?php
define ("MAX_SIZE","300");

function getExt($str){
    //hu.llo.oo!&-+.jpg
    $file_name = explode(".",$str);
    $ext = $file_name[count($file_name)-1];
    return $ext;
}

$errors=false;
if(isset($_POST['Submit']))
{
    $image=$_FILES['image']['name'];
    $description=$_POST['desc'];
    $productName=$_POST['productName'];
    $code=$_POST['code'];
    if ($image)
    {
        $filename = stripslashes($_FILES['image']['name']);
        $extension = getExt($filename);
        $extension = strtolower($extension);
        if(!in_array($extension, array("jpg","jpeg","png","gif")))
        {
            echo '<h1>Unknown filetype!</h1>';
            $errors=true;
        }
        else
        {
            $size=filesize($_FILES['image']['tmp_name']);

            if ($size > MAX_SIZE*1024)
            {
                echo '<h1>Image is to big: Max 300 Kb!</h1>';
                $errors=true;
            }else{

                $newname = "img/".$image;
                $copied = copy($_FILES['image']['tmp_name'], $newname);
                if (!$copied)
                {
                    echo '<h1>Copy unsuccessfull!</h1>';
                    $errors=true;
                }
            }
        }
    }
    if(!$errors)
    {
        $query = "INSERT INTO products (productPicture, description, productName, code )
                  VALUES ('{$image}','{$description}','{$productName}','{$code}')";
        $result = mysqli_query($connection, $query);

        echo "<h1>Product succesfully uploaded!</h1>";
    }else{
        $image = "";
    }
}

?>
