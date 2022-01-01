<?php
    include('../config/constants.php');
?>

<html> 
    <head>
        <title>Online Game Shop</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        <div class="login">
            <h1 class="text-center">Please Login to Enter</h1>
            <br><br>
            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
<br><br>
            <form action=""method="POST" class="text-center">
                Username: 
                <input type="text" name="username" Placeholder="Enter Username">
                <br><br>
                Password: 
                <input type="password" name="password" Placeholder="Enter Password">
                <br><br>
                <input type="submit" name="submit" value="login" class="btn-primary">
            </form>
        </div>
    </body>


</html>

<?php 
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if($count==1){
                $_SESSION['login'] = "<div class='success'>Login Successfull</div>";
                $_SESSION['user'] = $username;



                header('location:'.SITEURL.'admin/');
        }
        else{
            $_SESSION['login'] = "<div class='error text-center'>Login Failed</div>";
            header('location:' .SITEURL.'admin/login.php');
        }
    }
?>