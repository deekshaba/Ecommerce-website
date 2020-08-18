<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
			
                        $query = "SELECT i1.id,i1.name,i1.price FROM items i1 INNER JOIN users_items i2 
				  ON i1.id = i2.item_id 
                                  WHERE i2.user_id='$user_id' and i2.status='Added to cart'";
			
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                      
                        if (mysqli_num_rows($result) !=0 ) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
				    <th>Product Id</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
 					 $sum=0;$nt=0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["price"];
				    $nt=$nt+1;
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . $nt . "</td><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td></td><td>Total</td><td>Rs " . $sum . "</td><td ><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
