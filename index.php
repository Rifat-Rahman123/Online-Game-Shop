<?php include('Partials-front/menu.php'); ?>

    <!--  SEARCH Section Starts Here -->
    <section class="product-search text-center">
        <div class="container">

            <h2><a href="#" class="text-white">Online Game Shop</a></h2>
            <br>
            <br>
            <form action="<?php echo SITEURL;?>product-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Products.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- SEARCH Section Ends Here -->

    <!-- Products Section Starts Here -->
    <section class="products">
        <div class="container">
            <h2 class="text-center">Popular Now</h2>

            <a href="<?php echo SITEURL;?>Products-pricing.php">
            <div class="box-3 float-container">
                <img src="images/bf.jpg" alt="Battlefield 2042" class="img-responsive img-curve">

                <h3 class="float-text text-white"></h3>
            </div>
            </a>

            <a href="<?php echo SITEURL;?>Products-pricing.php">
            <div class="box-3 float-container">
                <img src="images/fifa.jpg" alt="Fifa 22" class="img-responsive img-curve">

                <h3 class="float-text text-white"></h3>
            </div>
            </a>

            <a href="<?php echo SITEURL;?>Products-pricing.php">
            <div class="box-3 float-container">
                <img src="images/cod.png" alt="Call of Duty" class="img-responsive img-curve">

                <h3 class="float-text text-white"></h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Products Section Ends Here -->

         <!-- Pricing Section Starts Here -->
         <section class="pricing">
            <div class="container">
                <h2 class="text-center">Pricing</h2>
    
                <div class="pricing-box">
                    <div class="pricing-img">
                        <img src="images/gta52.jpg" alt="Grand Theft Auto 5" class="img-responsive img-curve">
                    </div>
    
                    <div class="pricing-desc">
                        <h4>GTA 5</h4>
                        <p class="product-price">3000 TK</p>
                        <p class="pro-detail">
                            Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games.
                        </p>
                        <br>
    
                        <a href="<?php echo SITEURL;?>order.php"class="btn btn-primary">Order Now</a>
                    </div>
                </div>
    
                <div class="pricing-box">
                    <div class="pricing-img">
                        <img src="images/bf.jpg" alt="Battlefield 1" class="img-responsive img-curve">
                    </div>
    
                    <div class="pricing-desc">
                        <h4>Battlefield 1</h4>
                        <p class="product-price">1500 TK</p>
                        <p class="pro-detail">
                            Battlefield 1 is a first-person shooter video game developed by DICE and published by Electronic Arts.
                        </p>
                        <br>
    
                        <a href="<?php echo SITEURL;?>order.php"class="btn btn-primary">Order Now</a>
                    </div>
                </div>
    
                <div class="pricing-box">
                    <div class="pricing-img">
                        <img src="images/cod.png" alt="COD Black Ops" class="img-responsive img-curve">
                    </div>
    
                    <div class="pricing-desc">
                        <h4>COD Black Ops</h4>
                        <p class="product-price">2000 TK</p>
                        <p class="pro-detail">
                            Call of Duty: Black Ops is a 2010 first-person shooter game developed by Treyarch and published by Activision.
                        </p>
                        <br>
    
                        <a href="<?php echo SITEURL;?>order.php"class="btn btn-primary">Order Now</a>
                    </div>
                </div>
    
                <div class="pricing-box">
                    <div class="pricing-img">
                        <img src="images/fifa.jpg" alt="Fifa 22" class="img-responsive img-curve">
                    </div>
    
                    <div class="pricing-desc">
                        <h4>Fifa 22</h4>
                        <p class="product-price">3500 TK</p>
                        <p class="pro-detail">
                            FIFA 22 is a football simulation video game published by Electronic Arts as part of the FIFA series.
                        </p>
                        <br>
    
                        <a href="<?php echo SITEURL;?>order.php" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
    
                <div class="pricing-box">
                    <div class="pricing-img">
                        <img src="images/Steam.png" alt="Steam Wallet Code" class="img-responsive img-curve">
                    </div>
    
                    <div class="pricing-desc">
                        <h4>Steam Wallet Code</h4>
                        <p class="product-price">500 TK</p>
                        <p class="pro-detail">
                            Steam Wallet Codes work just like gift certificates.It can be redeemed on Steam for the purchase of games.
                        </p>
                        <br>
    
                        <a href="<?php echo SITEURL;?>order.php" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
    
                <div class="pricing-box">
                    <div class="pricing-img">
                        <img src="images/origin.png" alt="Origin Cash Card" class="img-responsive img-curve">
                    </div>
    
                    <div class="pricing-desc">
                        <h4>Origin Cash Card</h4>
                        <p class="product-price">500 TK</p>
                        <p class="pro-detail">
                            rigin Cash Cards work just like gift certificates. It can be redeemed on Origin for the purchase of games.
                        </p>
                        <br>
    
                        <a href="<?php echo SITEURL;?>order.php" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
    
    
                <div class="clearfix"></div>
    
                
    
            </div>
    
            <p class="text-center">
                <a href="<?php echo SITEURL;?>Pricing.php">See All Products</a>
            </p>
        </section>
        <!-- pricing Section Ends Here -->
   

        <?php include('Partials-front/footer.php'); ?>

</body>
</html>