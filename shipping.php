<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Life Style Store</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>
                                 SHIPPING ADDRESS
                                </h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Enter the details</i><p>
                                <form action="shipping_detail.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Full name" name="name" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full address" name="address" required = "true">
                                    </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Pin" name="pin" required = "true">
                                    </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone_number" name="phone" required = "true">
                                    </div>
                                    <button type="submit" name="proceed" value="proceed" class="btn btn-primary">Proceed</button><br><br>

                                    
                                </form><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>
