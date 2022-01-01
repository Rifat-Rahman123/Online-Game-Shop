<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Edit Product Details</h1>
        <br><br>

        <?php 

            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $sql = "SELECT * FROM tbl_products WHERE id=$id";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $title =$row['title'];
                    $current_image = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                }
                else
                {
                    $_SESSION['no-product-found'] = "<div class='error'>Product Not Found</div>";
                    header('location:'.SITEURL.'admin/manage-products.php');
                }
            }
            else
            {
                header('location:'.SITEURL.'admin/manage-products.php');
            }
        ?>




    <form action="" method="POST" enctype="multipart/form-data">
        <table class="tbl-40 middle-box">
            <tr>
                <td>Product Title:</td>
                <td>
                    <input type="text" name="title" value="<?php echo $title;?>">
                </td>
            </tr>


            <tr>
                <td>New Image:</td>
                <td>
                    <input type="file" name="image" vale="">
                </td>
            </tr>

            <tr>
                <td>Featured: </td>
                <td>
                    <input <?php if($featured == "Yes"){echo "checked";} ?> type="radio" name="featured" vale="Yes"> Yes

                    <input <?php if($featured == "No"){echo "checked";} ?> type="radio" name="featured" vale="No"> No
                </td>
            </tr>

            <tr>
                <td>Active: </td>
                <td>
                    <input <?php if($active == "Yes"){echo "checked";} ?> type="radio" name="active" vale="Yes"> Yes

                    <input <?php if($active == "No"){echo "checked";} ?> type="radio" name="active" vale="No"> No
                </td>
            </tr>

            <tr>
                <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <td><input type="submit" name="submit" value="Save" class="btn-secondary rapper middle-box"></td>
                
            </tr>
        </table>
    </form>

            <?php
                if(isset($_POST['submit']))
                {
                    $id = $_POST['id'];
                    $title = $_POST['title'];
                    $current_image = $_POST['current_image'];
                    $featured = $_POST['featured'];
                    $active = $_POST['active']; 

                    


                    $sql2 = "UPDATE tbl_products SET
                    title='$title',
                    featured='$featured',
                    active = '$active'
                    WHERE id=$id
                    ";

                    $res2 = mysqli_query($conn, $sql2);
                    if($res2==true)
                    {
                        $_SESSION['update'] = "<div class='success'>Product Succesfully Edited</div>";
                        header('location:'.SITEURL.'admin/manage-products.php');
                    }
                    else
                    {
                        $_SESSION['update'] = "<div class='error'>Failed to Edit Product</div>";
                        header('location:'.SITEURL.'admin/manage-products.php');
                    }
                }
            ?>



    </div>
</div>


<?php include('partials/footer.php'); ?>





