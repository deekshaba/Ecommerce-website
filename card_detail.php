<?php
require("includes/common.php");

    $card_no = $_POST['card_no'];
$card_no = mysqli_real_escape_string($con, $card_no);

    $card_name=$_POST['card_name'];
$card_name = mysqli_real_escape_string($con, $card_name);

    $expiry=$_POST['expiry'];
$expiry = mysqli_real_escape_string($con, $expiry);

    $u_id = $_SESSION['user_id'];
    $query = "INSERT INTO payment(u_id, card_no, card_name, expiry)VALUES(' $u_id',' $card_no ',' $card_name ',' $expiry ')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: shipping.php');

?>   
<a href="README.txt"></a>