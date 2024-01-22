<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="contact.css" />
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CONTACTUS</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <div class="header">
        <div class="bg"><img src="./assets/contact_bg.jpg" alt="" /></div>
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
            <a href="http://localhost/wt_project/nav_pages/about.php" class="active">ABOUT</a>
            <a href="#" style="    color: #1e73be;">CONTACTUS</a>
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
          <div class="heading">Contact Us</div>
        </div>

        <div class="info">
          <section class="query-wrapper">
            <div class="query-container">
              <div class="query-info">Have any queries?</div>
              <div class="query-heading">
                <h1>We're here to help.​</h1>
              </div>
              <div class="line">
                <hr />
              </div>
            </div>

            <div class="contact-section">
              <div class="contact-container">
                <div class="contact-bg contact-item1">
                  <div class="contact-heading">Sales</div>
                  <div class="contact-sub-heading">
                    Vestibulum ante ipsum primis in faucibus orci luctus.
                  </div>
                  <div class="contact-number">
                    <a href="#">1800 123 4567</a>
                  </div>
                </div>
                <div class="contact-bg contact-item2">
                  <div class="contact-heading">Complaints</div>
                  <div class="contact-sub-heading">
                    Vestibulum ante ipsum primis in faucibus orci luctus.
                  </div>
                  <div class="contact-number">
                    <a href="#">1800 123 4567</a>
                  </div>
                </div>
                <div class="contact-bg contact-item3">
                  <div class="contact-heading">Returns</div>
                  <div class="contact-sub-heading">
                    Vestibulum ante ipsum primis in faucibus orci luctus.
                  </div>
                  <div class="contact-number">
                    <a href="#">1800 123 4567</a>
                  </div>
                </div>
                <div class="contact-bg contact-item4">
                  <div class="contact-heading">Marketing</div>
                  <div class="contact-sub-heading">
                    Vestibulum ante ipsum primis in faucibus orci luctus.
                  </div>
                  <div class="contact-number">
                    <a href="#">1800 123 4567</a>
                  </div>
                </div>
              </div>
              <div class="message-wrapper">
                <div class="message-container">
                  <div class="message-section">
                    <div class="message-detaile">
                      <div class="message-text">
                        <b>Don't be a stranger!</b>
                      </div>
                      <div class="message-detaile-heading">
                        You tell us. We listen.
                      </div>
                      <div class="message-detaile-sub-heading">
                        Cras elementum finibus lacus nec lacinia. Quisque non
                        convallis nisl, eu condimentum sem. Proin dignissim
                        libero lacus, ut eleifend magna vehicula et. Nam
                        mattis est sed tellus.
                      </div>
                    </div>
                    <div class="message-form-section">
                      <form class="form-container">
                        <div class="name"><input type="text" id="#name" placeholder="NAME"></div>
                        <div class="name"><input type="text" id="#subject" placeholder="SUBJECT"></div>
                        <div class="name"><input type="text" id="#email" placeholder="EMAIL"></div>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="MESSAGE"></textarea>
                        <button type="submit" class="btn-submit">SEND MESSAGE</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <hr />
          <div class="sale">
            <a href="C:\Users\sahil\OneDrive\Desktop\WORK\W__D\commersial web\index.html">SALE UP TO 70% OFF FOR ALL CLOTHES & FASHION ITEMS, ON ALL
              BRANDS.
            </a>
          </div>
          <hr />
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