<?php 
// session_start();
// if(!iseet($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: amazon-signin.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header -->
    <header>
     <div class="navBar">
        <div class="nav-logo border">
            <div class="logo">
            </div>
        </div>

        <div class="nav-add border">
            <p>Delivering to Pune 411037</p> 
            <h4><i class="fa-solid fa-location-dot"></i>Update location</h4>
        </div>

        <div class="nav-search border">
            <select class="search-select">
                <option>Amazon Fashion</option>
            </select>
            <input placeholder="Seacrch Amazon" class="search-input">
            <div class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
        </div>

        <div class="nav-lang border">
            <div class="flag"></div>
            <div class="lang"><select>
                <option>Eng</option>
                <option>Hindi</option>
                <option>Tamil</option>
                <option>Telugu</option>
            </select></div>
        </div>
        
        <div class="nav-add border">
            <p>Hello, <a href="amazon-signin.php" style="color:white">sign in</a></p>
            <h4>Accounts & Lists</h4>
        </div>

        <div class="nav-add border">
            <p>Returns</p> 
            <h4>& Orders</h4>
        </div>

        <div class="cart">
            <div class="cart-icon"><i class="fa-solid fa-cart-shopping"></i></div>
            <h3><a href="cart_index.php" style="text-decoration:none;color:white">Cart</a></h3>
        </div>
     </div>

     <!-- panel -->
      <div class="panel">
        <div class="panel-all border">
            <i class="fa-solid fa-bars"></i>
           <a>All</a>
        </div>
        <div class="panel-ops">
           <a href="#" class="border">Fresh</a>
           <a href="#" class="border">Amazon miniTV</a>
           <a href="#" class="border">Sell</a>
           <a href="#" class="border">Best sellers</a>
           <a href="#" class="border">Today's Deals</a>
           <a href="#" class="border">Mobiles</a>
           <a href="#" class="border">Fashion</a>
           <a href="#" class="border">Electronics</a>
           <a href="#" class="border">Prime</a>
           <a href="#" class="border">New Releases</a>
           <a href="#" class="border">Home & Kitchen</a>
           <a href="#" class="border">Amazon Pay</a>
           <a href="#" class="border">Customer Services</a>
        </div>
      </div>

      <!-- 2nd panel -->
       <div class="sec-panel">
        <div class="head1">Amazon Fashion</div>
        <div class="nav-link">
            <div><a href="#">Women</a></div>
            <div><a href="#">Men</a></div>
            <div><a href="#">Kids</a></div>
            <div><a href="#">Bags & Luggage</a></div>
            <div><a href="#">Sportswear</a></div>
            <div><a href="#">Sales & Deals</a></div>
        </div>
       </div>
       </header>
       <div class="header-slider">
        <a href="#" class="control-prev"><i class="fa-solid fa-arrow-left"></i> </a>
        <a href="#" class="control-next"><i class="fa-solid fa-arrow-right"></i> </a>
        <ul>
            <img src="./images/header_1.jpg" class="header-img" alt="image">
            <img src="./images/header_2.jpg" class="header-img" alt="image">
            <img src="./images/header_3.jpg" class="header-img" alt="image">
            <img src="./images/header_4.jpg" class="header-img" alt="image">
            <img src="./images/header_5.jpg" class="header-img" alt="image">
            <img src="./images/header_6.jpg" class="header-img" alt="image">
        </ul>
       </div>

       <div class="box-row header-box">
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img1.jpg" alt="image">
            <a href="#"> Explore More</a>
        </div>
        <div class="box-col">
            <h3>Modern Refrigerator</h3>
            <img src="./images/box-img2.jpg" alt="image">
            <a href="#"> See More</a>
        </div>
        <div class="box-col">
            <h3>Cusion & Carpets</h3>
            <img src="./images/box-img3.jpg" alt="image">
            <a href="#"> Shop More</a>
        </div>
        <div class="box-col">
            <h3>Washing Mashines</h3>
            <img src="./images/box-img5.jpg" alt="image">
            <a href="#"> Explore More</a>
        </div>
        <div class="box-col">
            <h3>Bgas & Stuffs</h3>
            <img src="./images/box-img4.jpg" alt="image">
            <a href="#"> See all more</a>
        </div>
       </div>

       <div class="box-row">
        <div class="box-col">
            <h3>Washing Mashines</h3>
            <img src="./images/box-img5.jpg" alt="image">
            <a href="#"> Explore More</a>
        </div>
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img4.jpg" alt="image">
            <a href="#"> Explore More</a>
        </div>
        <div class="box-col">
            <h3>Shoes and Footwear</h3>
            <img src="./images/box-img6.jpg" alt="image">
            <a href="#"> See More</a>
        </div>
        <div class="box-col">
            <h3>Bags & watches</h3>
            <img src="./images/box-img7.jpg" alt="image">
            <a href="#"> Shop More</a>
        </div>
        <div class="box-col">
            <h3>Amazon Fashion</h3>
            <img src="./images/box-img8.jpg" alt="image">
            <a href="#"> See all more</a>
        </div>
       </div>
    
    <!-- middle content -->
    <content>
       <div class="product-slider">
        <h2>Upto 70% off | Top picks from stores nearby</h2>
        <div class="products">
            <img src="./images/product_1.jpg" alt="image">
            <img src="./images/product_2.jpg" alt="image">
            <img src="./images/product_3.jpg" alt="image">
            <img src="./images/product_4.jpg" alt="image">
            <img src="./images/product_5.jpg" alt="image">
            <img src="./images/product_6.jpg" alt="image">
            <img src="./images/product_7.jpg" alt="image">
            <img src="./images/product_8.jpg" alt="image">
            <img src="./images/product_9.jpg" alt="image">
            <img src="./images/product_10.jpg" alt="image">
        </div>
       </div>

       <div class="product-slider">
        <h2>Electric Vehicles and Motorbikes</h2>
        <div class="products">
            <img src="./images/bike1.jpg" alt="image">
            <img src="./images/bike2.jpg" alt="image">
            <img src="./images/bike3.jpg" alt="image">
            <img src="./images/bike4.jpg" alt="image">
            <img src="./images/bike5.jpg" alt="image">
            <img src="./images/bike6.jpg" alt="image">
            <img src="./images/bike7.jpg" alt="image">
            <img src="./images/bike8.jpg" alt="image">
            <img src="./images/bike9.jpg" alt="image">
            <img src="./images/bike10.jpg" alt="image">
        </div>
       </div>

       <div class="box-row">
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img5.jpg" alt="image">
            <a href="#"> Explore More</a>
        </div>
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img5.jpg" alt="image">
            <a href="#"> Explore More</a>
        </div>
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img6.jpg" alt="image">
            <a href="#"> See More</a>
        </div>
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img7.jpg" alt="image">
            <a href="#"> Shop More</a>
        </div>
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img8.jpg" alt="image">
            <a href="#"> See all more</a>
        </div>
       </div>

       <div class="product-slider">
        <h2>Inverter and Battery Combos</h2>
        <div class="products">
            <img src="./images/product_1.jpg" alt="image">
            <img src="./images/product_2.jpg" alt="image">
            <img src="./images/product_3.jpg" alt="image">
            <img src="./images/product_4.jpg" alt="image">
            <img src="./images/product_5.jpg" alt="image">
            <img src="./images/product_6.jpg" alt="image">
            <img src="./images/product_7.jpg" alt="image">
            <img src="./images/product_8.jpg" alt="image">
            <img src="./images/product_9.jpg" alt="image">
            <img src="./images/product_10.jpg" alt="image">
        </div>
       </div>

       <div class="product-slider">
        <h2>Fashionable and Trendy clothes from Small businesses</h2>
        <div class="products">
            <img src="./images/product_1.jpg" alt="image">
            <img src="./images/product_2.jpg" alt="image">
            <img src="./images/product_3.jpg" alt="image">
            <img src="./images/product_4.jpg" alt="image">
            <img src="./images/product_5.jpg" alt="image">
            <img src="./images/product_6.jpg" alt="image">
            <img src="./images/product_7.jpg" alt="image">
            <img src="./images/product_8.jpg" alt="image">
            <img src="./images/product_9.jpg" alt="image">
            <img src="./images/product_10.jpg" alt="image">
        </div>
       </div>

       <div class="box-row">
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img5.jpg" alt="image">
            <a href="#"> Explore More</a>
        </div>
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img5.jpg" alt="image">
            <a href="#"> Explore More</a>
        </div>
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img6.jpg" alt="image">
            <a href="#"> See More</a>
        </div>
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img7.jpg" alt="image">
            <a href="#"> Shop More</a>
        </div>
        <div class="box-col">
            <h3>International Returns</h3>
            <img src="./images/box-img8.jpg" alt="image">
            <a href="#"> See all more</a>
        </div>
       </div>

       <!-- product-slider-with-price -->
       <div class="product-slider-with-price">
          <h2>Deals upto $25</h2>
          <div class="products">
            <div class="product-card">
                <div class="product-img-con">
                    <img src="./images/product_1.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% Off</p> <span>Deal</span>
                </div>
                <p class="product-price">$<span>14.49</span>List Price:$19.95</p>
                <h4>The best Offer</h4>
            </div>

            <div class="product-card">
                <div class="product-img-con">
                    <img src="./images/product_2.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% Off</p> <span>Deal</span>
                </div>
                <p class="product-price">$<span>14.49</span>List Price:$19.95</p>
                <h4>The best Offer</h4>
            </div>

            <div class="product-card">
                <div class="product-img-con">
                    <img src="./images/product_3.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% Off</p> <span>Deal</span>
                </div>
                <p class="product-price">$<span>14.49</span>List Price:$19.95</p>
                <h4>The best Offer</h4>
            </div>

            <div class="product-card">
                <div class="product-img-con">
                    <img src="./images/product_4.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% Off</p> <span>Deal</span>
                </div>
                <p class="product-price">$<span>14.49</span>List Price:$19.95</p>
                <h4>The best Offer</h4>
            </div>

            <div class="product-card">
                <div class="product-img-con">
                    <img src="./images/product_5.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% Off</p> <span>Deal</span>
                </div>
                <p class="product-price">$<span>14.49</span>List Price:$19.95</p>
                <h4>The best Offer</h4>
            </div>

            <div class="product-card">
                <div class="product-img-con">
                    <img src="./images/product_6.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% Off</p> <span>Deal</span>
                </div>
                <p class="product-price">$<span>14.49</span>List Price:$19.95</p>
                <h4>The best Offer</h4>
            </div>

            <div class="product-card">
                <div class="product-img-con">
                    <img src="./images/product_7.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% Off</p> <span>Deal</span>
                </div>
                <p class="product-price">$<span>14.49</span>List Price:$19.95</p>
                <h4>The best Offer</h4>
            </div>
          </div>
       </div>
    </content>

    <!-- footer here-->
     <footer>
        <div class="foot-panel">
           <a href="#">Back To Top</a>
        </div>
        <div class="footer-container">
            <ul>
                <p>Get to Know Us</p>
                <a>About Us</a>
                <a>Careers</a>
                <a>Press Releases</a>
                <a> Amazon Science</a>
            </ul>

            <ul>
                <p>Connect with Us</p>
                <a> Facebook</a>
                <a> Twitter</a>
                <a>Instagram</a>
            </ul>

            <ul>
                <p>Make Money with Us</p>
                <a> Sell on Amazon</a>
                <a>Sell under Amazon Accelerator</a>
                <a>Protect and Build Your Brand</a>
                <a>Amazon Global Selling</a>
                <a>Become an Affiliate</a>
                <a>Fulfilment by Amazon</a>
                <a>Advertise Your Products</a>
            </ul>

            <ul>
                <p>Let Us Help You</p>
                <a>COVID-19 and Amazon</a>
                <a>Your Account</a>
                <a>Returns Centre</a>
                <a> 100% Purchase Protection</a>
                <a>Amazon App Download Help</a>
            </ul>
        </div>

        <div class="footpanel-last">
            <div class="logo">
            </div>
        </div>
        <div class="bottom-footer">
            <a>Conditions of Use & Sale</a>
            <a>Privacy Notice</a>
            <a>Interested-based Ads</a>
        </div>
        <div class="btm">© 1996-2024, Amazon.com, Inc. or its affiliates</div>
     </footer>

    <script src="script.js"></script>
</body>
</html>