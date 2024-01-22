<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="everything.css" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <title>Online Shopping</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>
  <div class="navbar">
    <a href="http://localhost/wt_project/home.php">

      <div class="logo pl-5">
        <img src="./assets/logo-black.png" alt="" />
      </div>
    </a>
    <div class="nav-item-left">
      <a href="#" class="active text-decoration-none">EVERYTHING</a>
      <a class="text-decoration-none" href="http://localhost/wt_project/nav_pages/everything.php">WOMEN</a>
      <a class="text-decoration-none" href="http://localhost/wt_project/nav_pages/everything.php">MEN</a>
      <a class="text-decoration-none" href="http://localhost/wt_project/nav_pages/everything.php">ACCESSORIES</a>
    </div>

    <div class="nav-item-right">
      <a href="http://localhost/wt_project/nav_pages/about.php" class="text-decoration-none">ABOUT</a>
      <a class="text-decoration-none" href="http://localhost/wt_project/nav_pages/contact.php">CONTACTUS</a>
      <a class="text-decoration-none" href="../cartdemo.php">$0.00 <i class="icon-bag fa-solid bi-bag-dash"></i></a>
      <!-- <a class="text-decoration-none" href="#"><i class="fa-solid bi-person-circle"></i></a> -->
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
    <div class="leftside">
      <input type="text" placeholder="Search Product..." class="search" />
      <button class="but"><b>></b></button>
      <div class="filter-heading">
        <h3>Filter By Price</h3>
        <input type="range" class="range" />
      </div>
      <div class="box">
        <button class="filter">Filter</button>
        <p>price: <i class="fa-solid fa-indian-rupee-sign"></i>200-100000</p>
      </div>
      <div class="allcat">
        <h3>Categories</h3>
        <!-- <div class="categories"> -->
        <div class="assesories category">
          <a href="" class="as line text-decoration-none">Assesories</a>
          <p class="number">(5)</p>
        </div>
        <div class="men category">
          <a href="" class="me line text-decoration-none">Men</a>
          <p class="number">(15)</p>
        </div>
        <div class="women category">
          <a href="" class="wo line text-decoration-none">Women</a>
          <p class="number">(12)</p>
        </div>
      </div>
      <div class="head">Our Best Seller</div>
      <div class="items">
        <div class="first">
          <div class="item">
            <a href="" class="line text-decoration-none"><img src="./assets/p1.jpg" alt="" width="60px" height="60px" /></a>
          </div>
          <div class="detail">
            <a href="" class="line text-decoration-none">Green Tshirt </a><br />
            *****<br />
            $40.00 - $45.00
          </div>
        </div>
        <div class="hr">
          <hr />
        </div>
        <div class="second">
          <div class="item">
            <a href="" class="line text-decoration-none"><img src="./assets/p2.jpg" alt="" width="60px" height="60px" /></a>
          </div>
          <div class="detail">
            <a href="" class="line text-decoration-none">Slim Fit Blue Jeans </a><br />
            *****<br />
            $150.00
          </div>
        </div>
        <div class="hr">
          <hr />
        </div>
        <div class="third">
          <div class="item">
            <a href="" class="line text-decoration-none"><img src="./assets/p3.jpg" alt="" width="60px" height="60px" /></a>
          </div>
          <div class="detail">
            <a href="" class="line text-decoration-none">Black Shoes</a> <br />
            *****<br />
            $130.00
          </div>
        </div>
        <div class="hr">
          <hr />
        </div>
        <div class="fourth">
          <div class="item">
            <a href="" class="line text-decoration-none"><img src="./assets/p4.jpg" alt="" width="60px" height="60px" /></a>
          </div>
          <div class="detail">
            <a href="" class="line text-decoration-none">Blue Tshirt</a> <br />
            *****<br />
            $40.00 - $46.00
          </div>
        </div>
        <div class="hr">
          <hr />
        </div>
        <div class="five">
          <div class="item">
            <a href="" class="line text-decoration-none"><img src="./assets/p5.jpg" alt="" width="60px" height="60px" /></a>
          </div>
          <div class="detail">
            <a href="" class="line text-decoration-none">Basic Grey Jeans</a> <br />
            *****<br />
            $150.00
          </div>
        </div>
      </div>
    </div>
    <div class="rightside">
      <div class="home"><a href="" class="line text-decoration-none">Home</a>/Store</div>
      <div class="righttop">
        <div class="result">Showing 1-12 Result</div>
        <div class="sort">
          <form action="" class="sorting">
            <select name="sorting" id="sorting" class="option">
              <option value="">Default Sorting</option>
              <option value="">Sort By Popularity</option>
              <option value="">Sort By Average Rating</option>
              <option value="">Sort By Latest</option>
              <option value="">Sort By Price:Low To High</option>
              <option value="">Sort By Price:High To Low</option>
            </select>
          </form>
        </div>
      </div>

      <?php
      require 'C:\xampp\htdocs\wt_project\config.php';
      $sql = "SELECT * FROM everythings";
      $result = mysqli_query($conn, $sql);
      ?>
      <div class="container">
        <div class="row ">
          <?php
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <div class="col-lg-4 mt-3 mb-3">
              <div class="card-deck">
                <div class="card  ">
                  <img src="<?= $row['product_image']; ?>" class="card-img-top" height="260">
                  <h5 class="card-title"> Product : <?= $row['product_name'];  ?></h5>
                  <div class="pro-sub-heading"><?= $row['catagory'] ?></div>

                  <h3> Price : <?= number_format($row['product_price']);  ?>/-</h3>
                  <a href="product_webpage.php?id=<?= $row['id'];  ?>" class="btn btn-lg btn-danger btn-block p-0">Buy Now</a>
                  <!-- #region -->
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>


      <div class="button">
        <div class="firstbutton">
          <button class="clr" selected="selected">1</button>
        </div>
        <div class="secondbutton">
          <button class="clr">2</button>
        </div>
        <div class="thirdbutton">
          <button class="clr">3</button>
        </div>
        <div class="aerrowbutton">
          <button class="clr">
            <img src="C:\Users\jeett\OneDrive\Desktop\website\svgaerrow.svg" alt="" />
          </button>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer-section">
      <div class="footer-container">
        <div class="web-logo">
          <div class="footer-logo logo"></div>
          <div class="footer-text">The best look anytime, anywhere.</div>
        </div>
        <div class="for-her">
          <div class="for-her-heading">For Her</div>
          <div class="name f-name1"><a class="text-decoration-none" href="#">Women Jeans</a></div>
          <div class="name f-name2"><a class="text-decoration-none" href="#">Tops and Shirts </a></div>
          <div class="name f-name3"><a class="text-decoration-none" href="#">Women Jackets </a></div>
          <div class="name f-name4"><a class="text-decoration-none" href="#">Heels and Flats </a></div>
          <div class="name f-name5">
            <a href="#">Women Accessories </a>
          </div>
        </div>
        <div class="for-him">
          <div class="for-him-heading">For Him</div>

          <div class="name m-name1"><a class="text-decoration-none" href="#">Men Jeans </a></div>
          <div class="name m-name2"><a class="text-decoration-none" href="#">Men Shirt </a></div>
          <div class="name m-name3"><a class="text-decoration-none" href="#">Men Shoes</a></div>
          <div class="name m-name4"><a class="text-decoration-none" href="#">Men Accessories </a></div>
          <div class="name m-name4"><a class="text-decoration-none" href="#">Men Jackets </a></div>
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
</body>

</html>