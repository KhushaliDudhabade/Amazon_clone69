<?php include('admin-server.php');


  if (isset($_GET['Id']) && is_numeric($_GET['Id'])) {
    $id = $_GET['Id'];
    echo "successfully got the data";
    $sql = "SELECT * FROM `product-add` WHERE Id='$id'";
    $result = $db->query($sql);
    $product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);

    if (!empty($image)) {
        $sql = "UPDATE `product-add` SET Name='$name', Description='$description', Price='$price', Stock='$stock', Image='$image' WHERE Id='$id'";
    } else {
        $sql = "UPDATE `product-add` SET Name='$name', Description='$description', Price='$price', Stock='$stock' WHERE Id='$id'";
    }

    if ($db->query($sql) === TRUE) {
        // if (!empty($image)) {
        //     move_uploaded_file($_FILES['image']['tmp_name'], $target);
        // }
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Error: " . $sql . "<br>" . $db->error;
    }
}
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit your Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="product-style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php $IPATH = @$_SERVER["DOCIMENT_ROOT"]."./Nav-bar/";
 include($IPATH."header-navbar.html");
 ?>
    <div class="container" style="height:700px">
        <div class="logo" style="width: 100px;height:30px;left:45%;">  
        </div>
    
        <div class="form-box" style="margin-top: 170px;">
            <form action="edit_product.php" method="post" enctype="multipart/form-data">

                <h1>Edit Product Deatails Here</h1>
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
                
                
                <button type="submit" class="continue" name="submit" style="font-weight: 600;">Update Changes</button>
                
                
            </form>

       
        </div>
    </div>
    <?php include($IPATH."footer.html");
 ?>
</body>
</html>