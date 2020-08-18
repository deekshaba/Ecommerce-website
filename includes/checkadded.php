<?php

//This code checks if the product is added to cart. 
   function check_it($it) 
   {
    include "common.php" ;
    $user_id = $_SESSION['user_id']; //We'll get the user_id from the session
    
    
    // We will select all the entries from the user_items table where the item_id is equal to the item_id we passed to this function, user_id is equal to the user_id in the session and status is 'Added to cart'
    
    $query = "select * from users_items WHERE item_id=$it and user_id =$user_id and status='Added to cart'";
	
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
   
// We'll check if the no.of rows in the result and no.of rows returned by the mysqli_num_rows($result) is true. If yes then it return 0 else it returns 0
    if (mysqli_num_rows($result) != 0) 
    {
	
        return 1;
    } 
    else 
    {
       return 0;
    }
}
 
?>
