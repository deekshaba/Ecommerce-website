<?php
require("includes/common.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   
<a href="README.txt"></a>