<?php
session_start();
require 'config.php';
$msg = "";
if (isset($_POST['submit'])) {
    $p_name = $_POST['pName'];
    $p_price = $_POST['pPrice'];
    $p_catagory = $_POST['pCatagory'];
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES['pImage']["name"]);
    move_uploaded_file($_FILES['pImage']["tmp_name"], $target_file);

    $sql = "INSERT INTO `everythings`(`product_name`, `product_price`, `product_image`, `catagory`) VALUES ('$p_name','$p_price','$target_file','$p_catagory')";
    if (mysqli_query($conn, $sql)) {
        $msg = "Product added to the database succesfully";
    } else {
        $msg = "Fail to add the product ";
    }
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title> Add product</title>
</head>

<body class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light mt-5 rounded">
                <h2 class="text-center p-2">add product</h2>
                <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
                    <div class="input-group mb-3">
                        <input type="text" name="pName" class="form-control" placeholder="product Name" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="pPrice" class="form-control" placeholder="product Price" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="pCatagory" class="form-control" placeholder="Men/Women" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="pImage" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-danger btn-block" value="ADD">
                    </div>
                    <div class="form-group">
                        <h4 class="text-center"><?= $msg; ?></h4>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-3 p-4 bg-light rounded">
                <a href="home.php" class="btn btn-warning btn-block btn-lg">Go to product page</a>
            </div>
        </div>
    </div>

</body>

</html>