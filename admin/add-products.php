<?php include('partials/menu.php'); ?>

    <div class="main-content">
        <div class="wrapper">
            <h1 class="rapper">Add Your Products Below</h1>
            <br><br>
            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }
            
            ?>
          <br>
            <form action=""method="POST" enctype="multipart/form-data">
                <table class="tbl-30 middle-box">
                    <tr>
                        <td>Title:</td>
                        <td>
                            <input type="text" name="title" placeholder="Product Title">
                        </td>
                    </tr>

                    <tr>
                        <td>Select Image: </td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>


                    <tr>
                        <td>Featured:</td>
                        <td>
                            <input type="radio" name="featured" value="yes">Yes
                            <input type="radio" name="featured" value="no">No
                        </td>
                    </tr>

                    <tr>
                        <td>Active:</td>
                        <td>
                            <input type="radio" name="active" value="yes">Yes
                            <input type="radio" name="active" value="no">No
                        </td>
                    </tr>
                    <tr class="rapper">
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Product" class="btn-secondary ">

                        </td>
                    </tr>
                </table>

            </form>

            <?php 
                if(isset($_POST['submit']))
                {
                   // echo "clicked";
                   $title = $_POST['title'];

                   if(isset($_POST['featured']))
                   {
                        $featured = $_POST['featured'];
                   }
                   else
                   {
                        $featured = "No";
                   }

                   if(isset($_POST['active']))
                   {
                       $active = $_POST['active'];
                   }
                   else
                   {
                        $active = "No";
                    }

                 //   print_r($_FILES['image']);
                 //   die();

                    if(isset($_FILES['image']['name']))
                    {
                        $image_name = $_FILES['image']['name'];
                        $source_path = $_FILES['image']['tmp_name'];
                        $destination_path ="../images/products".$image_name;
                        $upload = move_uploaded_file($source_path, $destination_path);

                        if($upload==false)
                        {
                             $_SESSION['upload'] = "<div class='error'>Failed to Upload Image</div>";
                             header('location:'.SITEURL.'admin/add-products.php');
                             die();
                        }


                    }
                    else{

                    }



                    $sql = "INSERT INTO tbl_products SET
                     title='$title',
                     image_name='$image_name',
                     featured='$featured',
                     active='$active'
                     ";


                    $res = mysqli_query($conn, $sql);

                    if($res==true)
                    {
                        $_SESSION['add'] = "<div class='success'>Product Added Successfully</div>";
                        header('location:'.SITEURL.'admin/manage-products.php');
                    }
                    else
                    {
                        $_SESSION['add'] = "<div class='error'>Failed to Add Product</div>";
                        header('location:'.SITEURL.'admin/add-products.php');
                    }

                }
            
            ?>



        </div>
    </div>

<?php include('partials/footer.php'); ?>