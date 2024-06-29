<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="add_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php $IPATH = @$_SERVER["DOCIMENT_ROOT"]."./Nav-bar/";
 include($IPATH."header-navbar.html");
 ?>
    <h1 class="head">Exciting Offers on the Products Buy Now !!</h1>
   <div class="container">
    <div class="product-container">
        <div class="products_list">

            <div class="product">
                <div class="product-img-con">
                    <img src="./images/box-img1.jpg" alt="">
                </div>
                <h3>Product 1</h3>
                <p>Price: <span>$10</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 1', 10,'./images/box-img1.jpg')">Add to Cart</button>
            </div>
    
            <div class="product">
                <div class="product-img-con">
                    <img src="./images/box-img2.jpg" alt="">
                </div>
                <h3>Product 2</h3>
                <p>Price: <span>$20</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 2', 20,'./images/box-img2.jpg')">Add to Cart</button>
            </div>
    
            <div class="product">
                <div class="product-img-con">
                    <img src="./images/box-img3.jpg" alt="">
                </div>
                <h3>Product 3</h3>
                <p>Price: <span>$40</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 3', 40,'./images/box-img3.jpg')">Add to Cart</button>
            </div>
            
            <div class="product">
                <div class="product-img-con">
                    <img src="./images/box-img4.jpg" alt="">
                </div>
                <h3>Product 4</h3>
                <p>Price: <span>$10</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 4', 30,'./images/box-img4.jpg')">Add to Cart</button>
            </div>
        </div>

        <div class="products_list">

            <div class="product">
                <div class="product-img-con">
                    <img src="./images/box-img5.jpg" alt="">
                </div>
                <h3>Product 1</h3>
                <p>Price:<span>$10</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 5', 10,'./images/box-img5.jpg')">Add to Cart</button>
             </div>
    
            <div class="product">
                <div class="product-img-con">
                    <img src="./images/box-img6.jpg" alt="">
                </div>
                <h3>Product 2</h3>
                <p>Price:<span>$20</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 6', 20,'./images/box-img6.jpg')">Add to Cart</button>
            </div>
    
            <div class="product">
                <div class="product-img-con">
                    <img src="./images/box-img7.jpg" alt="">
                </div>
                <h3>Product 3</h3>
                <p>Price: <span>$60</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 7', 60,'./images/box-img7.jpg')">Add to Cart</button>
            </div>
            
            <div class="product">
                <div class="product-img-con">
                    <img src="./images/box-img8.jpg" alt="">
                </div>
                <h3>Product 4</h3>
                <p>Price: <span>$30</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 8', 30,'./images/box-img8.jpg')">Add to Cart</button>
            </div>
        </div>

        <!-- 3rd row -->
        <div class="products_list">

            <div class="product">
                <div class="product-img-con">
                    <img src="./images/product_8.jpg" alt="">
                </div>
                <h3>Product 1</h3>
                <p>Price: <span>$10</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 9', 10,'./images/product_8.jpg')">Add to Cart</button>
             </div>
    
            <div class="product">
                <div class="product-img-con">
                    <img src="./images/product_6.jpg" alt="">
                </div>
                <h3>Product 2</h3>
                <p>Price: <span>$10</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 10', 20,'./images/product_6.jpg')">Add to Cart</button>
            </div>
    
            <div class="product">
                <div class="product-img-con">
                    <img src="./images/product_1.jpg" alt="">
                </div>
                <h3>Product 3</h3>
                <p>Price: <span>$60</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 11', 60,'./images/product_1.jpg')">Add to Cart</button>
            </div>
            
            <div class="product">
                <div class="product-img-con">
                    <img src="./images/product_2.jpg" alt="">
                </div>
                <h3>Product 4</h3>
                <p>Price: <span>$30</span></p>
                <input type="number" value="1" min="1" class="quantity">
                <button onclick="addToCart('Product 12', 30,'./images/product_2.jpg')">Add to Cart</button>
            </div>
        </div>
    </div>
   
    

    <div id="cart">
        <h2>Shopping Cart</h2>
        <ul id="cartItems"></ul>
        <p>Total: $<span id="totalPrice">0</span></p>
        <a href="#" class="checkout" onclick="checkout()">Checkout Now</a>
    </div>
 </div>

 <?php include($IPATH."footer.html");
 ?>
    <script src="app.js"></script>
</body>
</html>