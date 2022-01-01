<?php include('partials/menu.php'); ?>

    <!--Main Content Section Starts-->
    <div class="main-content">
        <div class="wrapper">
            <h1>Dashboard</h1>
            <br><br>
            
            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>

                    <br><br>

            <div class="col-4 text-center">
                <?php
                    $sql = "SELECT * FROM tbl_products";
                    $res = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                
                ?>
               <h1><?php echo $count;?></h1>
               <br>
                Products
            </div>

            <div class="col-4 text-center">
            <?php
                    $sql = "SELECT * FROM tbl_admin";
                    $res = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($res);
                
                ?>
               <h1><?php echo $count;?></h1>
               <br>
               Admins
            </div>

                <div class="clearfix"></div>


        </div>
    </div>
    <!--Main Content Section Ends-->

    <?php include('partials/footer.php'); ?>