<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles.css" />
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>js_store</title>
</head>

<body>
  <div class="wrapper">
    <div class="conteiner" id="home">
      <img src="./assets/asset 24.jpeg" alt="" />
      <header class="d-flex flex-row">
        <a href="http://localhost/wt_project/home.php">
          <div class="logo">
            <img src="./assets/asset 0.png" alt="" />
          </div>
        </a>
        <div class="nav-item-left">
          <a href="http://localhost/wt_project/nav_pages/everything.php" class="active ">EVERYTHING</a>
          <a href="http://localhost/wt_project/nav_pages/everything.php">WOMEN</a>
          <a href="http://localhost/wt_project/nav_pages/everything.php">MEN</a>
          <a href="http://localhost/wt_project/nav_pages/everything.php">ACCESSORIES</a>
        </div>

        <div class="nav-item-right">
          <a href="http://localhost/wt_project/nav_pages/about.php" class="active">ABOUT</a>
          <a href="http://localhost/wt_project/nav_pages/contact.php">CONTACTUS</a>
          <a href="cartdemo.php">$0.00 <i class="icon-bag fa-solid bi-bag-dash"></i></a>
          <!-- <a href="./login/"><i class="fa-solid bi-person-circle"></i></a> -->
          <?php
          if (isset($_SESSION['ab']) && $_SESSION['ab'] === true) { ?>

            <a href='./nav_pages/profile.php'><i class="fa-solid bi-person-circle"></i></a>
          <?php
          } else {
          ?>

            <a href='./login/index.php'><i class="fa-solid bi-person-circle"></i></a>
          <?php
          }
          ?>
        </div>
      </header>

      <div class="header-info">
        <div class="heading">Raining Offers For <br />Hot Summer!</div>
        <div class="sub-heading">25% Off On All Products</div>
        <div class="btn">
          <button class="wt-btn btn-shop" onclick="home()">SHOP NOW</button>
          <button class="wt-btn btn-more" onclick="home()">FIND MORE</button>
        </div>
      </div>

      <section class="element-section">
        <div class="element-container">
          <div class="element-column">
            <div class="element-items">
              <div class="item1">
                <img src="./assets/asset 3.png" alt="" />
              </div>
              <div class="item1">
                <img src="./assets/asset 4.png" alt="" />
              </div>
              <div class="item1">
                <img src="./assets/asset 5.png" alt="" />
              </div>
              <div class="item1">
                <img src="./assets/asset 7.png" alt="" />
              </div>
              <div class="item1">
                <img src="./assets/asset 6.png" alt="" />
              </div>
            </div>

            <div class="element-type">
              <div class="card element-offer">
                <div class="card-det">
                  <div class="element-heading">20% Off On Tank Tops</div>
                  <div class="element-sub-heading">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Proin ac dictum.
                  </div>
                  <div class="element-btn">
                    <button class="wt-btn btn-shop" onclick="home()">SHOP NOW</button>
                  </div>
                </div>
              </div>
              <div class="card element-latest">
                <div class="card-det">
                  <div class="element-heading">Latest Eyewear For You</div>
                  <div class="element-sub-heading">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Proin ac dictum.
                  </div>
                  <div class="element-btn">
                    <button class="wt-btn btn-shop" onclick="home()">SHOP NOW</button>
                  </div>
                </div>
              </div>
              <div class="card element-check-out">
                <div class="card-det">
                  <div class="element-heading">Let's Lorem Suit Up!</div>
                  <div class="element-sub-heading">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Proin ac dictum.
                  </div>
                  <div class="element-btn">
                    <button class="wt-btn btn-shop" onclick="home()">CHECK OUT</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section class="product-wrapper">
          <div class="product-container">
            <div class="product-heading">
              <h1>Featured Products</h1>
              <!-- <h1><?= $_SESSION['visiter_name'] ?></h1> -->
            </div>

            <div class="line">
              <hr />
            </div>

            <br><br><br>
            <?php
            require 'config.php';
            $sql = "SELECT * FROM everythings";
            $result = mysqli_query($conn, $sql);
            ?>




            <div class="product-items">
              <?php
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <div class="pro-card product-item-1">

                  <div class="pro-img">
                    <img src="<?= $row['product_image']; ?>" alt="">
                    <div class="icon"><i class="bi bi-bag-fill"></i></div>
                    <div class="add-cart">Add to cart</div>
                  </div>
                  <div class="product-details">
                    <div class="pro-heading"><?= $row['product_name'];  ?></div>
                    <div class="pro-sub-heading"><?= $row['catagory'] ?></div>
                    <div class="pro-price">
                      <div class="real-price">
                        <h3> Price : <?= number_format($row['product_price']);  ?>/-</h3>
                      </div>
                    </div>
                    <div class="pro-color-choice"></div>
                    <div class="btn-buy"><a href="nav_pages/product_webpage.php?id=<?= $row['id'];  ?>" class="buy-link" style="background-color:blue; padding: 7px 70px;text-decoration: none; color: white;">Buy Now</a></div>
                  </div>
                </div>

              <?php
              }
              ?>
            </div>

            <div class="bg">
              <div class="bg-img">
                <div class="bg-detaile">
                  <h1>Limited Time Offer</h1>
                  <div class="bg-heading">Special Edition</div>
                  <div class="bg-sub-heading">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
                    dapibus leo.
                  </div>
                  <div class="bg-offer">
                    Buy This T-shirt At 20% Discount, Use Code OFF20
                  </div>
                  <button class="bg-btn wt-btn btn-shop" onclick="home()">Shop Now</button>
                </div>
              </div>
            </div>

            <div class="feature-section">
              <div class="feature-container">
                <div class="feature-item1">
                  <div class="feature-img img1"></div>
                  <div class="feature-heading">Worldwide Shipping</div>
                  <div class="feature-sub-heading">
                    It elit tellus, luctus nec ullamcorper mattis, pulvinar
                    dapibus leo.
                  </div>
                </div>
                <div class="feature-item2">
                  <div class="feature-img img2"></div>
                  <div class="feature-heading">Best Quality</div>
                  <div class="feature-sub-heading">
                    It elit tellus, luctus nec ullamcorper mattis, pulvinar
                    dapibus leo.
                  </div>
                </div>
                <div class="feature-item3">
                  <div class="feature-img img3"></div>
                  <div class="feature-heading">Best Offers</div>
                  <div class="feature-sub-heading">
                    It elit tellus, luctus nec ullamcorper mattis, pulvinar
                    dapibus leo.
                  </div>
                </div>
                <div class="feature-item4">
                  <div class="feature-img img4"></div>
                  <div class="feature-heading">Secure Payments</div>
                  <div class="feature-sub-heading">
                    It elit tellus, luctus nec ullamcorper mattis, pulvinar
                    dapibus leo.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="sale">
          <a href="C:\Users\sahil\OneDrive\Desktop\WORK\W__D\commersial web\index.html">SALE UP TO 70% OFF FOR ALL CLOTHES & FASHION ITEMS, ON ALL
            BRANDS.
          </a>
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
                <div class="name f-name1"><a href="./nav_pages/everything.php">Women Jeans</a></div>
                <div class="name f-name2"><a href="./nav_pages/everything.php">Tops and Shirts </a></div>
                <div class="name f-name3"><a href="./nav_pages/everything.php">Women Jackets </a></div>
                <div class="name f-name4"><a href="./nav_pages/everything.php">Heels and Flats </a></div>
                <div class="name f-name5">
                  <a href="#">Women Accessories </a>
                </div>
              </div>
              <div class="for-him">
                <div class="for-him-heading">For Him</div>

                <div class="name m-name1"><a href="./nav_pages/everything.php">Men Jeans </a></div>
                <div class="name m-name2"><a href="./nav_pages/everything.php">Men Shirt </a></div>
                <div class="name m-name3"><a href="./nav_pages/everything.php">Men Shoes</a></div>
                <div class="name m-name4"><a href="./nav_pages/everything.php">Men Accessories </a></div>
                <div class="name m-name4"><a href="./nav_pages/everything.php">Men Jackets </a></div>
              </div>
              <div class="subscribe">
                <div class="sub-heading">Subscribe</div>
                <div class="input"><input type="email" name="" id="" placeholder="Your email address"></div>
                <div class="btn-subscribe">SUBSCRIBE</div>
              </div>
            </div>
          </div>
        </footer>
      </section>
    </div>
  </div>

  <script>
    function home() {
      window.location.href = "home.php";
    }
  </script>
</body>

</html>