<?php

    if(!isset($_SESSION['user']))
    {
        $_SESSION['no-login-message'] ="<div class='error text-center'>Please login to enter</div>";
        header('location:'.SITEURL.'admin/login-page.php');
    }


?>