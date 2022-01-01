<?php include('Partials-front/menu.php'); ?>


    <!-- Order now section Starts Here -->
    <section class="product-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
            <p  class="text-center text-white"> Please Make Paymet to this number 01234567890 to Confirm your Order.
               <br><br> Your Game/Wallet code will be sent to you via email
            </p>

            <form action="#" class="order">
                
                
                <fieldset>
                    <legend>Confirm Order.
                    
                    </legend>
                    <div class="order-label">Product Name</div>
                    <input type="text" name="product-name" placeholder="" class="input-responsive" required>

                    <div class="order-label">Quantity</div>
                    <input type="text" name="quantity" placeholder="" class="input-responsive" required>

                    <div class="order-label">Name</div>
                    <input type="text" name="full-name" placeholder="" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="" class="input-responsive" required>
                   
                    <div class="order-label">Transaction ID</div>
                    <input type="text" name="transaction_id" placeholder="" class="input-responsive" required>

                 
                </fieldset>

            </form>
            <a href="<?php echo SITEURL;?>thankyou.php" class="btn btn-primary middle">Order Now</a>
           
        </div>
    </section>
    <!-- Order Now Section Ends Here -->

   

    <?php include('Partials-front/footer.php'); ?>

</body>
</html>