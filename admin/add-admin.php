<?php include('partials/menu.php'); ?>

<div class="main-content">
        <div class="wrapper">
            <h1>Add Admin</h1>

            <br><br>

            <form action="" method="Post">
                    <table class="tbl-30 middle-box rapper">
                        <tr> 
                            <td>Full Name:</td>
                            <td><input type="text" name="full_name" placeholder="Enter Your Full Name"></td>
                        </tr>

                        <tr> 
                            <td>Username:</td>
                            <td><input type="text" name="username" placeholder="Enter Your Username"></td>
                        </tr>

                        <tr> 
                            <td>Password:</td>
                            <td><input type="password" name="password" placeholder="Enter Your Password"></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                            </td>
                        </tr>


                    </table>

            </form>
        </div>

</div>








<?php include('partials/footer.php'); ?>

<?php 
    //Process the value from the form and save it in Database
    // Check wheather the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        //Button CLicked


        //Get Data From Form

        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //SQL qurey to save data into database
        
        $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'

        ";

        
         //Execute qurey and save data into database

         $res = mysqli_query($conn, $sql) or die(mysqli_error());

         //Check if the data is inserted or not

         if($res==TRUE)
         {
            $_SESSION['add'] = "Admin added successfully";

            //Redirect to Manage Admin Page
            header("location:".SITEURL.'admin/manage-admin.php');
         }
         else
         {
            $_SESSION['add'] = "Failed to add admin";

            //Redirect to Manage Admin Page
            header("location:".SITEURL.'admin/add-admin.php');
         }

      
    }


?>