<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <style>
        .navbar {
            top: 0;
            width: 100%;
            padding-top: 16px;
            padding-bottom: 16px;
            padding-left: 30px;
            display: flex;
            background-color: #fff;
            line-height: 29.7143px;
            align-items: center;
            gap: 3rem;
            z-index: 1;
        }

        .icon-bag {
            padding-left: 10px;
            color: black;
        }

        .nav-item-right {
            margin-left: 280px;
            margin-right: 40px;
        }

        .logo {
            padding-top: 19px;
            padding-bottom: 12px;
            padding-right: 10px;
            width: 50px;
        }

        .logo img {
            width: 70px;
            scale: 2;
        }

        .nav-item-left a,
        .nav-item-right a {
            text-decoration: none;
            color: black;
            line-height: 70px;
            font-size: 0.9 em;
            font-weight: 400;
            text-align: left;
            font-family: "Lato", sans-serif;
            padding-left: 20px;
        }

        .nav-item-left :nth-child(1) {
            color: #1e73be;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="navbar">
            <a href="http://localhost/wt_project/home.php">

                <div class="logo pl-5">
                    <img src="./assets/logo-black.png" alt="" />
                </div>
            </a>
            <div class="nav-item-left">
                <a href="http://localhost/wt_project/nav_pages/everything.php" class="active text-decoration-none">EVERYTHING</a>
                <a class="text-decoration-none" href="http://localhost/wt_project/nav_pages/everything.php">WOMEN</a>
                <a class="text-decoration-none" href="http://localhost/wt_project/nav_pages/everything.php">MEN</a>
                <a class="text-decoration-none" href="http://localhost/wt_project/nav_pages/everything.php">ACCESSORIES</a>
            </div>

            <div class="nav-item-right">
                <a href="http://localhost/wt_project/nav_pages/about.php" class="text-decoration-none">ABOUT</a>
                <a class="text-decoration-none" href="http://localhost/wt_project/nav_pages/contact.php">CONTACTUS</a>
                <a class="text-decoration-none" href="#">$0.00 <i class="icon-bag fa-solid bi-bag-dash"></i></a>
                <!-- <a class="text-decoration-none" href="#"><i class="fa-solid bi-person-circle"></i></a> -->
                <?php
                if (isset($_SESSION['ab']) && $_SESSION['ab'] === true) { ?>

                    <a href='./nav_pages/profile.php'><i class="fa-solid  bi-person-circle"></i></a>
                <?php
                } else {
                ?>

                    <a href='./login/index.php'><i class="fa-solid bi-person-circle"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
        <?php
        if (isset($_SESSION['visiter_name'])) {

        ?>
            <div class="container">

                <div class="heading mt-5 text-center ">
                    <h1>View Cart
                        <?php if (isset($_SESSION['visiter_name'])) {
                            echo $_SESSION['visiter_name'];
                        } ?>
                        <hr>
                    </h1>
                </div>

                <table class="table mt-5 border-white">
                    <thead>
                        <tr scope="row" class="border-white">
                            <!-- <th scope="col">Sr</th> -->
                            <th scope="col">product</th>
                            <th scope="col">Price</th>
                            <th scope="col">img</th>
                            <th scope="col">Contity</th>
                            <th scope="col">Total</th>
                            <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php';
                        //TODO stop refrese
                        // if (!isset($_SESSION['last_auto_increment'])) {
                        // $auto_sql = "SELECT AUTO_INCREMENT
                        // FROM information_schema.tables
                        // WHERE table_name = 'cart' AND table_schema = 'jsstore'";
                        //     $auto_result = $conn->query($auto_sql);

                        //     if ($auto_result->num_rows == 1) {
                        //         $row = $auto_result->fetch_assoc();
                        //         $_SESSION['last_auto_increment'] = $row['sno'];
                        //     }
                        // }
                        // $lastAutoIncrement = $_SESSION['last_auto_increment'];
                        // $_SESSION['last_auto_increment'] = $lastAutoIncrement + 1;


                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $sql =  "SELECT * FROM  everythings WHERE   id='$id'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $name = $row['product_name'];
                            $price = $row['product_price'];
                            $del_charge = 50;
                            $total_price = $price + $del_charge;
                            $image = $row['product_image'];
                            $user = $_SESSION['visiter_name'];
                            //TODO add to cart method:-2

                            // $max_sql = "SELECT MAX(product_id) AS max_id FROM cart";
                            // $max_result = $conn->query($max_sql);
                            // $max_row = $max_result->fetch_assoc();
                            // $max_id = $max_row['max_id'];
                            // $new_id = $max_id + 1;

                            // $addSql = "INSERT ignore INTO `cart`(`product_name`,`product_id`, `product_price`, `product_image`,`user_name`) VALUES ('$name','$new_id' ,'$price','$image','$user')";

                            // $addResult = mysqli_query($conn, $addSql);

                            $sql2 =  "SELECT * FROM `cart` WHERE `user_name`= '$user'";
                            $addresult = mysqli_query($conn, $sql2);


                            while ($addrow = mysqli_fetch_array($addresult)) {
                                $price = $addrow['product_price'];
                                $id = $addrow['product_id'];

                        ?>

                                <tr>
                                    <!-- <th scope="row"><?= $addrow['sno']; ?></th> -->
                                    <td><?= $addrow['product_name']; ?></td>
                                    <td id='p_price' class="price" name='price'><?= $addrow['product_price']; ?></td>
                                    <td> <img src="<?= $addrow['product_image']; ?>" height="90px" width="90px" alt="">
                                    </td>
                                    <td width='10px'><input type="number" id='counte' min="1" value="1"></td>
                                    <td width='10px'><span id="p_total" class="total-price"><?= $price; ?></span></td>
                                    <td width="25px">
                                        <button type="submit" class="btn btn-primary " onclick="tt(this)">Update</button>
                                    </td>
                                    <td>
                                        <button type="submit" onclick="window.location.href= 'delete.php?id=<?= $id; ?>'" class="btn btn-danger" name="delete">Delete</button>
                                    </td>
                                </tr>

                            <?php
                            }
                        } else {
                            $user = $_SESSION['visiter_name'];

                            $sql2 =  "SELECT * FROM `cart` WHERE `user_name`= '$user'";
                            $addresult = mysqli_query($conn, $sql2);


                            while ($addrow = mysqli_fetch_array($addresult)) {
                                $id = $addrow['product_id'];
                                $price = $addrow['product_price'];
                            ?>

                                <tr>
                                    <!-- <th scope="row"><?= $addrow['sno']; ?></th> -->
                                    <td><?= $addrow['product_name']; ?></td>
                                    <td id='p_price' class="price" name='price'><?= $addrow['product_price']; ?></td>
                                    <td> <img src="<?= $addrow['product_image']; ?>" width="50px" height="50px" alt="">
                                    </td>
                                    <td width='10px'><input type="number" id='counte' min="1" value="1"></td>
                                    <td width='10px'><span id="p_total" class="total-price"><?= $price; ?></span></td>
                                    <td width="25px">
                                        <button type="submit" class="btn btn-primary " onclick="tt(this)">Update</button>
                                    </td>
                                    <td>
                                        <button type="submit" onclick="window.location.href= 'delete.php?id=<?= $id; ?>'" class="btn btn-danger" name="delete">Delete</button>
                                    </td>
                                </tr>

                        <?php
                            }
                        }

                        ?>

                    </tbody>
                </table>
                <?php
                $sql_total = "SELECT SUM(product_price) FROM cart WHERE `user_name`='$user'";
                $result_total = mysqli_query($conn, $sql_total);
                while ($row_total = mysqli_fetch_array($result_total)) {

                    echo "Total " . " = " . $row_total['SUM(product_price)'];
                    echo "<br />";
                }
            } else {
                ?>
                <h1 class="text-center mt-5">please login first!!</h1>
                <a href="../login/"><button name="signin" value="Login" style="padding: 8px;width: 100px;background-color: blue;color:white;">Login</button></a>

            <?php
            }
            ?>
            </div>
    </div>
    <script>
        function tt(btn) {
            const r = btn.closest('tr')
            // const cont = document.getElementById('counte').value;
            // console.log(cont);
            // const price = document.getElementById('p_price').innerHTML;
            // console.log(price);
            // const total = cont * parseInt(price);
            // console.log(total);
            // document.getElementById("p_total").innerHTML = total;

            const cont = r.querySelector('#counte').value;
            console.log(cont);
            const price = r.querySelector('#p_price').innerHTML;
            console.log(price);
            const total = cont * parseInt(price);
            console.log(total);
            r.querySelector("#p_total").innerHTML = total;
        }
    </script>

</body>

</html>