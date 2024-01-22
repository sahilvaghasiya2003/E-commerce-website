<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="cartdemo.css">
</head>

<body>
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
            <a class="text-decoration-none" href="../cart.php">$0.00 <i class="icon-bag fa-solid bi-bag-dash"></i></a>
            <!-- <a class="text-decoration-none" href="#"><i class="fa-solid bi-person-circle"></i></a> -->
            <?php
            if (isset($_SESSION['ab']) && $_SESSION['ab'] === true) { ?>

                <a href='./nav_pages/profile.php'><i class="fa-solid bi-person-circle"></i></a>
            <?php
            } else {
            ?>

                <a href='login/index.php'><i class="fa-solid bi-person-circle"></i></a>
            <?php
            }
            ?>
        </div>
    </div>
    <h1 align="center" class="mb-5">Your Bag</h1>
    <?php
    if (isset($_SESSION['visiter_name'])) {
       
        function addOrder()
        { $user=$_SESSION['visiter_name'];
            if (isset($_POST['buy'])) {
                include 'config.php';
                
                $city = $_POST['city'];
                $address = $_POST['address'];
                $pin = $_POST['pincode'];
                $sql =  "SELECT * FROM  user WHERE `user_name` = '$user'";

                $result = mysqli_query($conn, $sql);
               while( $row = mysqli_fetch_array($result)){

                   
                                   $uname = $row['user_name'];
                                   $uemail = $row['user_email'];
               }

                $contity = 1;
                $sql2 =  "SELECT * FROM `cart` WHERE `user_name`= '$user'";
                $addresult = mysqli_query($conn, $sql2);
                while ($row = mysqli_fetch_array($addresult)) {
                    $pname = $row["product_name"];
                    $pprice = $row["product_price"];

                    $addSql = "INSERT  INTO `orderlist`(`user_name`, `u_email`, `product_name`, `product_price`, `contity`,`city`, `address`, `pincode`)VALUES ('$uname','$uemail','$pname','$pprice','$contity','$city','$address','$pin')";

                    $addResult2 = mysqli_query($conn, $addSql);
                }
            }
        }

    ?>
        <div class="wrapper ">
            <div class="cart">
                <div class="heading">
                    <div class="item">ITEM</div>
                    <div class="price">PRICE</div>
                    <div class="quantity">QUANTITY</div>
                    <div class="total">TOTAL</div>
                    <div class="total"></div>
                </div>
                <hr>
                <?php

                include 'config.php';
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


                    $sql2 =  "SELECT * FROM `cart` WHERE `user_name`= '$user'";
                    $addresult = mysqli_query($conn, $sql2);


                    while ($addrow = mysqli_fetch_array($addresult)) {
                        $price = $addrow['product_price'];
                        $id = $addrow['product_id'];

                ?>

                        <div class="cart-1">
                            <div class="item-1">
                                <div class="img">
                                    <img src="<?= $addrow['product_image']; ?>" width="100px" height="100px" alt>
                                </div>
                                <div class="name"><?= $addrow['product_name']; ?></div>
                            </div>
                            <div class="price-1 price" id='p_price' name='price'><?= $addrow['product_price']; ?></div>
                            <div class="quantity-1">
                                <form action="">
                                    <label for="number"></label>
                                    <input class="quan" type="number" id="counte" name="quantity" onchange="tt(this)" min="1" max="100" value="1">
                                </form>
                            </div>
                            <div class="total-1 total-price" id="p_total"><?= $price; ?></div>
                            <div class="total-1 total-price" id="p_total"><i class="bi bi-x" onclick="window.location.href= 'delete.php?id=<?= $id; ?>'" style="font-size: 26px;"></i></div>


                        </div>
                        <hr>
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
                        <div class="cart-1">
                            <div class="item-1">
                                <div class="img">
                                    <img src="<?= $addrow['product_image']; ?>" width="100px" height="100px" alt>
                                </div>
                                <div class="name"><?= $addrow['product_name']; ?></div>
                            </div>
                            <div class="price-1 price" id='p_price' name='price'><?= $addrow['product_price']; ?></div>
                            <div class="quantity-1">
                                <form action="">
                                    <label for="number"></label>
                                    <input class="quan" type="number" id="counte" name="quantity" onchange="tt(this)" min="1" max="100" value="1">
                                </form>
                            </div>
                            <div class="total-1 total-price" id="p_total"><?= $price; ?></div>
                            <div class="total-1 total-price" id="p_total"><i class="bi bi-x" onclick="window.location.href= 'delete.php?id=<?= $id; ?>'" style="font-size: 26px;"></i></div>


                        </div>
                        <hr>
                <?php
                    }
                }

                ?>
            </div>



















            <div class="containor">
                <div class="right">
                    <div class="subtotal">
                        <div class="sub-total">
                            Subtotal:
                        </div>
                        <div id="p_total" class="sub_total total-price">
                            <!-- <?= $price; ?> -->
                        </div>
                    </div>
                    <hr class="hr">
                    <div class="add-detail">
                        <div class="shipping">
                            <div class="ship">
                                Shipping:
                            </div>
                            <div class="cancel">
                                <input type="button" value="Cancel" class="button">
                            </div>
                        </div>
                      
                       <form action="#" method="post">
                        <div class="city">
                            <label for="city">city:</label>
                            <input type="text" name="city" class="fild" id="city" placeholder="city"></input>
                        </div>
                        <div class="pincode">
                            <label for="pincode">pincode:</label>
                            <input type="number" name="pincode" class="fild" id="pincode" placeholder="pincode"></input>
                        </div>


                        <div class="address">
                            <label for="Address">Address:</label>
                            <textarea name="address" class="fild" id="address" cols="30" rows="2" placeholder="Address"></textarea>
                        </div>
                        <hr>
                        <div class="estimate-checkout">
                            <div class="estimate">
                                <input type="button" value="ESTIMATE SHIPPING" id="estimate" class="button-2">
                            </div>
                            <div class="checkout">
                                    <button type="submit" value="CHECKOUT" id="checkout" onclick="<?php addOrder();?>" name="buy" class="button-2">CHECKOUT
                            </div>
                        </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else {
    ?>
        <h1 class="text-center mt-5">please login first!!</h1>
        <a href="login/"><button name="signin" value="Login" style="padding: 8px;width: 100px;background-color: blue;color:white;">Login</button></a>

    <?php
    }
    ?>



    <script>
        function tt(btn) {
            const r = btn.closest('.cart-1')
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