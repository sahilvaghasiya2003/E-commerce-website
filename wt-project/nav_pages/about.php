<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="about.css" />
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About us</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <div class="header">
        <div class="bg"><img src="./assets/asset 16.jpeg" alt="" /></div>
        <div class="navbar">
          <a href="http://localhost/wt_project/home.php">

            <div class="logo">
              <img src="./assets/asset 0.png" alt="" />
            </div>
          </a>
          <div class="nav-item-left">
            <a href="http://localhost/wt_project/nav_pages/everything.php" class="active">EVERYTHING</a>
            <a href="http://localhost/wt_project/nav_pages/everything.php">WOMEN</a>
            <a href="http://localhost/wt_project/nav_pages/everything.php">MEN</a>
            <a href="http://localhost/wt_project/nav_pages/everything.php">ACCESSORIES</a>
          </div>

          <div class="nav-item-right">
            <a href="#" class="active" style="    color: #1e73be;">ABOUT</a>
            <a href="http://localhost/wt_project/nav_pages/contact.php">CONTACTUS</a>
            <a href="../cart.php">$0.00 <i class="icon-bag fa-solid bi-bag-dash"></i></a>
            <!-- <a href="#"><i class="fa-solid bi-person-circle"></i></a> -->
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
        <div class="header-info">
          <div class="heading">About Us</div>
        </div>

        <div class="info">
          <div class="info-section">
            <div class="info-detaile">
              <div class="info-line">
                <hr />
              </div>
              <div class="info-detaile-heading">Who We Are</div>
              <div class="info-detaile-sub-heading">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus
                leo. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed
                non mauris vitae erat consequat auctor eu in elit.
              </div>
            </div>
            <div class="info-img"></div>
          </div>
          <section class="team-wrapper">
            <div class="team-container">
              <div class="line">
                <hr />
              </div>
              <div class="team-info">A Few Words About</div>
              <div class="team-heading">
                <h1>Our Team</h1>
              </div>
              <div class="team-sub-heading">
                Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non
                mauris vitae erat consequat auctor eu in elit.<br />
                Class aptent taciti sociosqu ad litora torquent per conubia
                nostra.
              </div>

              <div class="person-section">
                <div class="person-container">
                  <div class="person-box1">
                    <div class="person-card">
                      <div class="person-info">
                        <div class="person-img"><img src="./assets/asset 4.png" alt=""></div>
                        <div class="person-name">Sahil vaghasiya</div>
                        <div class="person-post">Developer</div>
                      </div>
                    </div>
                  </div>
                  <div class="person-box2">
                    <div class="person-card">
                      <div class="person-info">
                        <div class="person-img"><img src="./assets/asset 4.png" alt=""></div>
                        <div class="person-name">Jeet trapasiya</div>
                        <div class="person-post">Co-Developer</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="bg2">
              <div class="bg-img">
                <div class="bg-detaile">
                  <div class="bg-line">
                    <hr>
                  </div>
                  <div class="bg-heading">Follow Us</div>
                  <div class="social">
                    <div class="facebook social-icon">
                      <i class="fa fa-facebook "></i>
                    </div>
                    <div class="instagram social-icon">
                      <i class="fa fa-instagram "></i>
                    </div>
                    <div class="twitter social-icon">
                      <i class="fa fa-twitter "></i>
                    </div>
                    <div class="google social-icon">
                      <i class="fa fa-google-plus"></i>
                    </div>
                  </div>
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
          </section>
          <hr>
          <div class="sale">
            <a href="index.html">SALE UP TO 70% OFF FOR ALL CLOTHES & FASHION ITEMS, ON ALL
              BRANDS.
            </a>
          </div>
          <hr>
          <footer>
            <div class="footer-section">
              <div class="footer-container">
                <div class="web-logo">
                  <div class="footer-logo logo"></div>
                  <div class="footer-text">
                    The best look anytime, anywhere.
                  </div>
                </div>
                <div class="for-her">
                  <div class="for-her-heading">For Her</div>
                  <div class="name f-name1"><a href="#">Women Jeans</a></div>
                  <div class="name f-name2">
                    <a href="#">Tops and Shirts </a>
                  </div>
                  <div class="name f-name3">
                    <a href="#">Women Jackets </a>
                  </div>
                  <div class="name f-name4">
                    <a href="#">Heels and Flats </a>
                  </div>
                  <div class="name f-name5">
                    <a href="#">Women Accessories </a>
                  </div>
                </div>
                <div class="for-him">
                  <div class="for-him-heading">For Him</div>

                  <div class="name m-name1"><a href="#">Men Jeans </a></div>
                  <div class="name m-name2"><a href="#">Men Shirt </a></div>
                  <div class="name m-name3"><a href="#">Men Shoes</a></div>
                  <div class="name m-name4">
                    <a href="#">Men Accessories </a>
                  </div>
                  <div class="name m-name4"><a href="#">Men Jackets </a></div>
                </div>
                <div class="subscribe">
                  <div class="sub-heading">Subscribe</div>
                  <div class="input">
                    <input type="email" name="" id="" placeholder="Your email address" />
                  </div>
                  <div class="btn-subscribe">SUBSCRIBE</div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
</body>

</html>