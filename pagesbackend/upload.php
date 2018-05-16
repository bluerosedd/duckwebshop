<?php require_once("./pagesbackendcontroller/upload.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>

    <body>
    <form name="upload" method="post" enctype="multipart/form-data"  action="">
        <h1>Product upload</h1>
        <h2>Here you can upload an image!</h2>
        <b>Image:</b> <input type="file" name="image" value=""><br />
        <b>Product Name:</b><textarea name="productName" cols="40"></textarea><br />
        <b>Description:</b><textarea name="desc" cols="40"></textarea><br />
        <b>Code:</b><textarea name="code" cols="40"></textarea>

        <input name="Submit" type="submit" value="Submit">
    </form>
    </body>
</html>