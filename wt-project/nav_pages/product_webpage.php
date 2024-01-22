<?php
session_start();
require '../config.php';
if (isset($_SESSION['visiter_name'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql =  "SELECT * FROM  everythings WHERE   id='$id'";
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
    function additem()
    {
        include '../config.php';
        $user = $_SESSION['visiter_name'];
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql =  "SELECT * FROM  everythings WHERE   id='$id'";

            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);


            $pname = $row['product_name'];
            $pprice = $row['product_price'];
            $del_charge = 50;
            $total_price = $pprice + $del_charge;

            $pimage = $row['product_image'];
        }
        $max_sql = "SELECT MAX(product_id) AS max_id FROM cart";
        $max_result = $conn->query($max_sql);
        $max_row = $max_result->fetch_assoc();
        $max_id = $max_row['max_id'];
        $new_id = $max_id + 1;

        $addSql = "INSERT ignore INTO `cart`(`product_name`,`product_id`, `product_price`, `product_image`,`user_name`)VALUES ('$pname','$new_id' ,'$pprice','$pimage','$user')";

        $addResult = mysqli_query($conn, $addSql);
    }

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- <script
      src="https://kit.fontawesome.com/yourcode.js"
      crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
        <title>Online Shopping</title>
        <link rel="stylesheet" href="product_webpage.css">
        <style>
            /* * {box-sizing: border-box;} */

            .topleftside {
                position: relative;
            }

            .img-magnifier-glass {
                position: absolute;
                border: 3px solid #000;
                border-radius: 50%;
                cursor: none;
                /*Set the size of the magnifier glass:*/
                width: 150px;
                height: 150px;
            }
        </style>

    </head>

    <body>
        <div class="navbar">
            <div class="logo">
                <img src="./assets/logo-black.png" alt="" />
            </div>
            <div class="nav-item-left">
                <a href="everything.php" class="active">EVERYTHING</a>
                <a href="everything.php">WOMEN</a>
                <a href="everything.php">MEN</a>
                <a href="everything.php">ACCESSORIES</a>
            </div>

            <div class="nav-item-right">
                <a href="./about.php" class="active">ABOUT</a>
                <a href="./contact.php ">CONTACTUS</a>
                <a href="../cartdemo.php">$0.00 <i class="icon-bag fa-solid bi-bag-dash"></i></a>
                <!-- <a href="#"><i class="fa-solid bi-person-circle"></i></a> -->
                <!-- for profile  -->
                <?php
                if (isset($_SESSION['ab']) && $_SESSION['ab'] === true) { ?>

                    <a href='profile.php'><i class="fa-solid bi-person-circle"></i></a>
                <?php
                } else {
                ?>

                    <a href='../login/index.php'><i class="fa-solid bi-person-circle"></i></a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="containor">
            <div class="topcontainor">
                <div class="topleftside">

                    <img src="<?= $pimage ?>" width="450" name="pimage" height="450">
                </div>
                <div class="toprightside">
                    <div class="detail">
                        <div class="home">
                            <a href="" class="line">Home</a><a href="" class="line">/women</a>/Anchor Bracelet
                        </div>
                        <div class="accessories">
                            <a href="" class="line">Accessories</a>,<a href="" name='catagory' class="line"><?= $row['catagory'] ?></a>
                        </div>
                        <div class="heading1" name='pname'>
                            <?= $pname ?>
                        </div>
                        <div class="price">
                            <div class="pricerange" name='pprice'>
                                <?= $pprice ?>/-
                            </div>
                            <div class="shipping">
                                +Free Shipping
                            </div>
                        </div>
                        <div class="paragraph">
                            Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat
                            auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                            per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum
                            sit amet a augue. Sed non neque elit sed.
                        </div>
                        <div class="colorchoice">
                            <div class="choice color1-1"></div>
                            <div class="choice color1-2"></div>
                            <div class="choice color1-3"></div>
                        </div>
                        <div class="hr">
                            <hr>
                        </div>
                        <div class="carting">
                            <div class="quan">
                                <form action="">
                                    <label for="quantity"></label>
                                    <input class="quantity" type="number" id="quantity" name="quantity" min="1" max="100" value="1">
                                </form>
                            </div>
                            <form class="add-to-cart" action="../cartdemo.php" method="post">
                                <!-- <a href="../cart.php?id=<?= $id; ?>" name='add'> -->
                                <button type="submit" value=">ADD TO CART" onclick="<?php additem() ?>" name="addbtn" class="addcart1">>ADD TO CART</button>
                                <!-- </a> -->
                            </form>

                        </div>
                        <div class="hr">
                            <hr>
                        </div>
                        <div class="categories">
                            <div class="cat">Categories:</div>
                            <div class="access"><a href="" class="line">Accessories</a>,<a href="" class="line"><?= $row['catagory'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middel">
                <div class="middelhr">
                    <hr>
                </div>
                <div class="topnav">
                    <a class="nav" href="">Description</a>
                    <a class="nav" href="">Additional Information</a>
                    <a class="nav" href="">Reviews</a>
                </div>
                <div class="description">
                    <div class="des-heading">Product Description</div>
                    <div class="des-info">Since it’s creation lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</div><br><br>
                    <div class="des-info">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
                </div>
                <div class="imgcontainor">
                    <div class="topmid">
                        <div class="img1">
                            <img class="i1" src="./product_images/product-about-01.jpg" alt="">
                        </div>
                        <div class="img2">
                            <img class="i2" src="./product_images/product-about-04.jpg" alt="">
                        </div>
                    </div>
                    <div class="midmid">
                        <div class="img3">
                            <img class="i3" src="./product_images/product-about-02.jpg" alt="">
                        </div>
                        <div class="img4">
                            <div class="write1">
                                <div class="p1">
                                    <b class="bold">Ut enim ad minim</b> <br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt. <br><br>
                                </div>
                                <div class="p2">
                                    <b class="bold">Quis nostrud</b><br>
                                    Sed do eiusmod tempor incididunt ut labore. <br><br>
                                </div>
                                <div class="p3">
                                    <b class="bold">Duis aute irure</b><br>
                                    Dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottommid">
                        <div class="img5">
                            <div class="write2">
                                <div class="p1">
                                    <b class="bold">More about the product</b> <br />
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in. <br /><br />
                                </div>
                            </div>
                        </div>
                        <div class="img6">
                            <img class="i4" src="./product_images/product-about-03.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="h2">
                    Related Products
                </div>
                <div class="related">
                    <div class="pro-card pro1">
                        <div class="img"><img class="images" src="./product_images/pic2.jpg" alt="">
                            <div class=""><img class="icon" src="./product_images/cart..svg" alt="">
                            </div>
                            <div class="addcart">Add To Cart</div>
                        </div>
                        <div class="details">
                            <div class="heading">Basic Grey Jeans</div>
                            <div class="subheading">Accessories</div>
                            <div class="price">$150.00 - $180.00</div>
                            <div class="ratting">*****</div>
                        </div>
                    </div>
                    <div class="pro-card pro2">
                        <div class="img"><img class="images" src="./product_images/pic4.jpg" alt="">
                            <div class=""><img class="icon" src="./product_images/cart..svg" alt="">
                            </div>
                            <div class="addcart">Add To Cart</div>
                        </div>
                        <div class="details">
                            <div class="heading">Handbag</div>
                            <div class="subheading">Accessories</div>
                            <div class="price">$150.00 - $180.00</div>
                            <div class="ratting">*****</div>
                        </div>
                    </div>
                    <div class="pro-card pro3">
                        <div class="img"><img class="images" src="./product_images/pic8.jpg" alt="">
                            <div class=""><img class="icon" src="./product_images/cart..svg" alt="">
                            </div>
                            <div class="addcart">Add To Cart</div>
                        </div>
                        <div class="details">
                            <div class="heading">Blue Tshirt</div>
                            <div class="subheading">Accessories</div>
                            <div class="price">$150.00 - $180.00</div>
                            <div class="ratting">*****</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-section">
                <div class="footer-container">
                    <div class="web-logo">
                        <div class="footer-logo logo">
                        </div>
                        <div class="footer-text">
                            The best look anytime, anywhere.
                        </div>
                    </div>
                    <div class="for-her">
                        <div class="for-her-heading">For Her</div>
                        <div class="name f-name1"><a href="#">Women Jeans</a></div>
                        <div class="name f-name2"><a href="#">Tops and Shirts </a></div>
                        <div class="name f-name3"><a href="#">Women Jackets </a></div>
                        <div class="name f-name4"><a href="#">Heels and Flats </a></div>
                        <div class="name f-name5">
                            <a href="#">Women Accessories </a>
                        </div>
                    </div>
                    <div class="for-him">
                        <div class="for-him-heading">For Him</div>

                        <div class="name m-name1"><a href="#">Men Jeans </a></div>
                        <div class="name m-name2"><a href="#">Men Shirt </a></div>
                        <div class="name m-name3"><a href="#">Men Shoes</a></div>
                        <div class="name m-name4"><a href="#">Men Accessories </a></div>
                        <div class="name m-name4"><a href="#">Men Jackets </a></div>
                    </div>
                    <div class="subscribe">
                        <div class="sub-heading">Subscribe</div>
                        <div class="input"><input type="email" name="" id="" placeholder="Your email address"></div>
                        <div class="btn-subscribe">SUBSCRIBE</div>
                    </div>
                </div>
            </div>
        </footer>
    </body>

    </html>
    </div>


    </body>

    </html>

<?php
} else {
?>
    <h1 class="text-center mt-5">please login first!!</h1>
    <a href="../login/"><button name="signin" value="Login" style="padding: 8px;width: 100px;background-color: blue;color:white;" >Login</button></a>

<?php
}
?>