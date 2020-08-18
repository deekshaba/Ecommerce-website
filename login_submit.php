

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php

require_once("includes/common.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con, $email);
    $email = strip_tags($email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con, $password);
    $password = strip_tags($password);
    $password = MD5($password);

    //$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    
    
    $query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
    
 // If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
    if ($num == 0) {
        echo "<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: login.php');
    } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: products.php');
    }
}
