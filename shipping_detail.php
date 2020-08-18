<?php
require("includes/common.php");

    $name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);


    $address=$_POST['address'];
$address = mysqli_real_escape_string($con, $address);

    $pin=$_POST['pin'];
$pin = mysqli_real_escape_string($con, $pin);

$phone=$_POST['phone'];
$phone = mysqli_real_escape_string($con, $phone);

$date = date('Y-m-d H:i:s');
$date_of_purchase = mysqli_real_escape_string($con, $date);

    $u_id = $_SESSION['user_id'];

    $query = "INSERT INTO shipping(u_id, name, address, pin, phone, date_of_purchase)VALUES(' $u_id',' $name ',' $address ',' $pin ',' $phone ',' $date_of_purchase ')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: final.php');

?>   
<a href="README.txt"></a>