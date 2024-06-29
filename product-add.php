<?php include('admin-server.php');
//ADD PRODUCTS HERE

if (isset($_POST['submit']))
{
$name = $_POST['name'];
$des = $_POST['description'];
$pri = $_POST['price'];
$stk = $_POST['stock'];
$img = $_POST['image'];

$qry ="INSERT INTO `product-add`(`Id`, `Name`, `Description`, `Price`, `Stock`, `Image`) VALUES ('null','$name','$des','$pri','$stk','$img')";
$result = mysqli_query($db, $qry);
if ($result)
{
  echo "Your product added Successfully. Thank you!!<br>";

}
else
{
  echo "We are unable to got your data. Please try again...";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Your Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="product-style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php $IPATH = @$_SERVER["DOCIMENT_ROOT"]."./Nav-bar/";
     include($IPATH."header-navbar.html");
    ?>
       <div class="container">
        <div class="logo" style="width: 100px;height:30px;left:45%;">  
        </div>
    
        <div class="form-box" style="margin-top: 30px;">
            <form action="product-add.php" method="post">

                <h1>Add Your Product Deatails</h1>
                <div class="input-group">
                
                    <div class="input-field">
                        <label>Product Name</label>
                        <i class="fa-solid fa-user"></i><br>
                        <input type="text" placeholder="Product Name" name="name">
                    </div>
                    <div class="input-field">
                        <label>Description</label>
                       <i class="fa-solid fa-pen-nib"></i><br>
                        <textarea name="description" rows="4" cols="65">
                         Type here..
                        </textarea>
                    </div>

                    <div class="input-field">
                        <label>Price</label>
                        <i class="fa-solid fa-indian-rupee-sign"></i></i><br>
                        <input type="text" placeholder="Price" name="price">
                    </div>

                    <div class="input-field">
                        <label>Stock</label>
                        <i class="fa-regular fa-clipboard"></i><br>
                        <input type="text" placeholder="Current Stock" name="stock">
                    </div>

                    <div class="input-field">
                        <label>Product Image</label>
                        <i class="fa-solid fa-image"></i></i><br>
                        <input type="file" placeholder="Image" name="image">
                    </div>
                </div>
                
                
                <button type="submit" class="continue" name="submit" style="font-weight: 600;">Update Product</button>
                
                
            </form>

       
        </div>
    </div>
    <?php include($IPATH."footer.html");
 ?>
</body>
</html>