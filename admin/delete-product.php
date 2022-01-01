<?php

include('../config/constants.php');

if(isset($_GET['id']) AND isset($_GET['image_name']))
{
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    if($image_name !="")
    {
        $path = "../images/products".$image_name;
        $remove = unlink($path);

        if($remove==false)
        {
            $_SESSION['remove'] ="<div class='error'>Failed to remove Product</div>";
            header('location:'.SITEURL.'admin/manage-products.php');
            die();
        }


    }
            $sql = "DELETE FROM tbl_products WHERE id=$id";
            $res = mysqli_query($conn, $sql);
            
            if($res==true)
            {
                $_SESSION['delete'] = "<div class='success'>Product Deleted Successfully</div>";
                header('location:'.SITEURL.'admin/manage-products.php');
            }
            else
            {
                $_SESSION['delete'] = "<div class='error'>Failed to Delete Product</div>";
                header('location:'.SITEURL.'admin/manage-products.php');
            }
 
}
else
{
    header('location:'.SITEURL.'admin/manage-products.php');
}
?>