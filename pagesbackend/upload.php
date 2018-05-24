<?php require_once("./pagesbackendcontroller/upload.php"); ?>


<div class="col s12 m3">
    <div class="card">
        <div class="card-content">
            <ul>
                <form name="upload" method="post" enctype="multipart/form-data"  action="">
                    <div class="tittlecolor">
                        <h4 >UPLOAD PRODUCT</h4>
                    </div>
                    <h5>Here you can upload an image!</h5><br />
                    <b>Image:</b> <input  type="file" name="image" value=""><br><br />
                    <b>Product Name:</b><textarea name="productName" cols="40"></textarea><br />
                    <b>Description:</b><textarea name="desc" cols="40"></textarea><br />
                    <b>Code:</b><textarea name="code" cols="40"></textarea>
                    <b>Price:</b><textarea name="price" cols="15,2"></textarea>


                    <input class="waves-effect waves-light btn" name="Submit" type="submit" value="Submit">

                    <a href="backendindex.php?page=productsb"
                       onclick="return confirm('Are you sure you want to cancel?');"
                       class="waves-effect waves-light btn">Cancel
                    </a>


                </form>
            </ul>
        </div>
    </div>
</div>
