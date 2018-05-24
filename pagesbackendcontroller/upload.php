<?php require_once("./includes/connection.php");

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
    $productName=$_POST['productName'];
    $price=$_POST['price'];
    $code=$_POST['code'];

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
        $query = "INSERT INTO products (productPicture, description, productName, code, price )
                  VALUES ('{$image}','{$description}','{$productName}','{$code}','{$price}')";
        $result = mysqli_query($connection, $query);

        header('location:backendindex.php?page=productsb');
    }
}

?>
