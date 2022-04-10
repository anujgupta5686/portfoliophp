<?php
$hostname="localhost";
$root="root";
$password="";
$database="portfoliophp";
$conn=mysqli_connect($hostname,$root,$password,$database) or die("Database connection failed"); 
if(isset($_POST['login'])){

    $ulemail=mysqli_real_escape_string($conn,$_POST['lemail']);
    $ulpassword=mysqli_real_escape_string($conn,$_POST['lpassword']);
    $check_email1=mysqli_num_rows(mysqli_query($conn,"SELECT `id` FROM `register` WHERE `email` ='$ulemail' AND `password` ='$ulpassword'"));   
    if($check_email1 >0){

    }
    else{
        echo "<script>alert('Login DEtails incorrect.');
            window.location.href='login.php';
        </script>";
    }
}
else{
   
    echo "<script>alert('Please fill all required field.');
        window.location.href='login.php';
    </script>";
}
?>