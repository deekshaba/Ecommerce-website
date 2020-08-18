<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];


//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">To continue with payment through card</h3><hr>
                    <p align="center">Click <a href="payment.php">here</a>.....</p>
                     <h3 align="center">To continue with payment through cash on delivery</h3><hr>
                    <p align="center">Click <a href="shipping.php">here</a>.....</p>

                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>
