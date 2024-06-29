<?php include('admin-server.php');

//delete the product

if (isset($_GET['Id']) && is_numeric($_GET['Id'])) {
    $id = $_GET['Id'];
   $sql = "DELETE FROM `product-add` WHERE Id='$id'";
   if ($db->query($sql) === TRUE) {
    header('Location: dashboard.php');
    exit();
} else {
    echo "Error deleting record: " . $db->error;
}
}
?>