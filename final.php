<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

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
                      <h3 align="center">Thank you for shopping</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to continue shopping</p>
                    
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>