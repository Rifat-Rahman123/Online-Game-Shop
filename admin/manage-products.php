<?php include('partials/menu.php'); ?>    


<div class="main-content">
    <div class= "wrapper">
         <h1> Manage Products </h1>

         
         <br><br>
            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if(isset($_SESSION['remove']))
                {
                    echo $_SESSION['remove'];
                    unset($_SESSION['remove']);
                }

                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }

                if(isset($_SESSION['no-product-found']))
                {
                    echo $_SESSION['no-product-found'];
                    unset($_SESSION['no-product-found']);
                }
                
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                } 

               
                

                
            
            ?>
            <br> <br><br>
            <!--button to add admin-->
            <a href="<?php echo SITEURL; ?>admin/add-products.php" class="btn-primary">Add Products</a>


               <table class="tbl-full middle-box">
                    <tr>
                        <th>No.</th>
                        <th>Product Name</th>
                        <th>Image</th>  
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Buttons</th>
                    </tr>

                    <?php
                        $sql = "SELECT * FROM tbl_products";
                        $res = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($res);
                        $sn = 1;

                        if($count>0)
                        {
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $id = $row['id'];
                                $title = $row['title'];
                                $image_name = $row['image_name'];
                                $featured = $row['featured'];
                                $active = $row['active'];
                                

                                ?>

                            <tr>
                                <td><?php echo $sn++;?></td>
                                <td><?php echo $title;?></td>
                                <td><?php echo $image_name;?></td>
                                <td><?php echo $featured;?></td>
                                <td><?php echo $active;?></td>
                                <td>
                                <a href="<?php echo SITEURL; ?>admin/update-product.php?id=<?php echo $id; ?>" class="btn-secondary">Edit Product Details</a> 
                                <a href="<?php echo SITEURL; ?>admin/delete-product.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Product</a> 
                                </td>
                            </tr>


                                <?php


                            }





                        }
                        else
                        {
                            ?>
                            <tr>
                                <td colspan="6"><div class="error">No Product Added</div></td>
                            </tr>
                            <?php
                        }
                    ?>

               </table>

    </div>
</div>



<?php include('partials/footer.php'); ?>