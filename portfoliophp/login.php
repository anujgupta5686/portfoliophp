
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registerStyle.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>Register/Login</title>
</head>

<body>
    <div class="container">
    <form class="login-email" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <p qlass="login-text" style="font-size: 2rem; font-weight:800;"> Login</p>
        <div class="input-group">
            <input type="email" placeholder="Email" name="lemail" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="lpassword" required>
        </div>
        <div class="input-group">
        <input  class="btn" type="submit" name="login" value="Login">
        </div>
        <p class="login-register-text"> Don't have account? <a href="register.php">Register Here</a>.</p>
    </form>
    <?php

        require "backend/connection.php";

    if(isset($_POST['login'])){
        
        $ulemail=mysqli_real_escape_string($conn,$_POST['lemail']);
        $ulpassword=mysqli_real_escape_string($conn,$_POST['lpassword']);
        $selectquery="SELECT * FROM register WHERE email = '$ulemail' AND `password`='$ulpassword'";
        $result=mysqli_query($conn,$selectquery);
        $num=mysqli_num_rows($result);
       
        if($num > 0){
            while($row = mysqli_fetch_assoc($result)){
                
                $_SESSION["ulemail"]=$row['email'];

                echo "<script>window.location.href='index.php';</script>";
            }
        }
        else{
            echo "<script>alert('Email and Password are not match.');
            window.location.href='login.php';
            </script>";
        }
    }
    else{
       echo "<span class='alert alert-danger'>For login you have to press login button</span>";
    }
?>
    </div>
</body>

</html>