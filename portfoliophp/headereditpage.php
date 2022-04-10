<?php
$hueditid = $_REQUEST['huid'];
$huedittitle = $_REQUEST['hutitle'];
$hueditsubtitle = $_REQUEST['husubtitle'];
$hueditdiscription = $_REQUEST['hudiscription'];
// $hueditimage = $_REQUEST['huimage'];
?>

<!-- Update php code written here...-->

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

    <title>Edit</title>
</head>

<body>
    <div class="container">
        <form class="login-email" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <p qlass="login-text" style="font-size: 2rem; font-weight:800;"> Edit</p>
            <div class="input-group">
                <input type="text" placeholder="Name" name="heid" value="<?php echo $hueditid ?>"  required readonly>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Name" name="hetitle" value="<?php echo $huedittitle ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Name" name="hesubtitle" value="<?php echo $hueditsubtitle ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Name" name="hediscription" value="<?php echo $hueditdiscription ?>" required>
            </div>
            
            <div class="input-group">
                <input type="file" placeholder="Name" name="image" value="" required>
            </div>
            <!-- <div class="input-group">
                <input type="text" placeholder="Name" name="heimage" value=">
            </div> -->
            <div class="input-group">
                <input class="btn" type="submit" name="update" value="Update">
            </div>
        </form>
        <?php
        require "backend/connection.php";
        error_reporting(0);
        if ($_POST['update']) {
            $heid1=$_POST['heid'];

            $hetitle1=$_POST['hetitle'];
            $hesubtitle1=$_POST['hesubtitle'];
            $hediscription1=$_POST['hediscription'];

            $sel=mysqli_query($conn,"SELECT * FROM secondpara WHERE id='$heid1'");
            $res=mysqli_fetch_array($sel,MYSQLI_BOTH);

            // echo "sdfewfwsdvfwefewrfew";

            $image=$res['image'];
            // echo $hetitle1;
            // echo $hesubtitle1;
            // echo $hediscription1;
            // die();
            // $heimage1=$_POST['heimage'];

            $path='image/'.$image;  bhai 
            $image=$_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];

            $updatequery="UPDATE`secondpara`SET`title`='$hetitle1',`subtitle`='$hesubtitle1',`discription`='$hediscription1',`image`='$image' WHERE id=$heid1";
            $queryfire=mysqli_query($conn,$updatequery);
            // echo $queryfire;
            // die();
            if($queryfire){
                move_uploaded_file($tmp_name.$path);
                echo "<span class='alert alert-info'>Data has been updated.<span>";
                echo "<script>alert('Data has been updated.');
                    window.location.href='index.php';
                </script>";
               
            }
            else{
                echo "<script>alert('Something went wrong.');
                </script>";
            }
            echo "<span class='alert alert-info'>Data have been successfull.<span>";
        } else {
            // echo "<span class='alert alert-danger'>For update data press Update Button.<span>";
        }
        ?>
    </div>
</body>

</html>