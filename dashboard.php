<?php include('admin-server.php');

$qry = "SELECT * FROM `product-add`";
$result = mysqli_query($db, $qry);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style-dash.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php $IPATH = @$_SERVER["DOCIMENT_ROOT"]."./Nav-bar/";
 include($IPATH."header-navbar.html");
 ?>     
      <div class="dashboard-container">
        <h2>Admin Dashboard</h2>
        <a href="product-add.php" class="btn">Add New Product</a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while($product = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $product['Id']; ?></td>
                        <td><?php echo $product['Name']; ?></td>
                        <td><?php echo $product['Description']; ?></td>
                        <td><?php echo $product['Price']; ?></td>
                        <td><?php echo $product['Stock']; ?></td>
                        <td>
                            <a href="edit_product.php?id=<?php echo $product['Id']; ?>" class="btn">Edit</a>
                            <a href="delete_product.php?id=<?php echo $product['Id']; ?>" class="btn">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include($IPATH."footer.html");
 ?>
</body>
</html>