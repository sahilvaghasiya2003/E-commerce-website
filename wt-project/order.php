<?php
session_start();
require 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql =  "SELECT * FROM  everything WHERE   id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);


    $pname = $row['product_name'];
    $pprice = $row['product_price'];
    $del_charge = 50;
    $total_price = $pprice + $del_charge;
    $pimage = $row['product_image'];
} else {
    echo 'No Product Found';
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
    <title>Compelete your order</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">DNK</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">catagory</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-10 mb-5">
                <h2 class="text-center p-2 text-primary">Fill the detaile to complete your order</h2>
                <h3>Product Details : </h3>
                <table class="table table-bordered " width="500px">
                    <tr>
                        <th>Product Name : </th>
                        <td><?= $pname; ?></td>
                        <td rowspan="4" class="text-center">
                            <img src="<?= $pimage ?>" width=200px>
                        </td>
                    </tr>
                    <tr>
                        <th>Product Price : </th>
                        <td><?= number_format($pprice); ?>/-</td>

                    </tr>
                    <tr>
                        <th>Delevary Charge : </th>
                        <td><?= number_format($del_charge); ?>/-</td>

                    </tr>
                    <tr>
                        <th>Total Price : </th>
                        <td><?= number_format($total_price); ?>/-</td>

                    </tr>
                </table>
                <h4>Enter your detail : </h4>
                <form action="pay.php" method="post" accept-charset="utf-8">
                    <input type="hidden" name="product_name" value="<?= $pname; ?>">
                    <input type="hidden" name="product_price" value="<?= $pprice; ?>">

                    <div class="form-group">
                        <input type="text" name='name' class="form-control" placeholder="Enter Your Name" require>
                    </div>
                    <div class="form-group">
                        <input type="email" name='email' class="form-control" placeholder="Enter Your Email" require>
                    </div>
                    <div class="form-group">
                        <input type="tel" name='phone' class="form-control" placeholder="Enter Your Phone " require>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-danger btn-lg " value="Click to Pay : Rs. <?= number_format($total_price); ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>