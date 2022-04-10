<?php
$aueditid = $_REQUEST['auid'];
$auedittitle = $_REQUEST['autitle'];
$aueditsubtitle = $_REQUEST['ausubtitle'];
$auesignature = $_REQUEST['ausignature'];
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

    <title>about update</title>
</head>

<body>
    <div class="container">
        <form class="login-email" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <p qlass="login-text" style="font-size: 2rem; font-weight:800;"> About Edit</p>
            <div class="input-group">
                <input type="text" placeholder="Name" name="aeid" value="<?php echo $aueditid ?>"  required readonly>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Name" name="aetitle" value="<?php echo $auedittitle ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Name" name="aesubtitle" value="<?php echo $aueditsubtitle ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Name" name="aesignature" value="<?php echo $auesignature ?>" required>
            </div>
            <!-- <div class="input-group">
                <input type="text" placeholder="Name" name="heimage" value="<?php  ?>">
            </div> -->
            <div class="input-group">
                <input class="btn" type="submit" name="update" value="Update">
            </div>
        </form>
        <?php
        require "backend/connection.php";
        error_reporting(0);
        if ($_POST['update']) {
            $aeid1=$_POST['aeid'];

            $aetitle1=$_POST['aetitle'];
            $aesubtitle1=$_POST['aesubtitle'];
            $aesignature1=$_POST['aesignature'];

        
            $path='image/'.$image;
            $image=$_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];
            $updatequery="UPDATE`thirdpara` SET `abouttitle`='$aetitle1',`aboutsubtitle`='$aesubtitle1',`aboutsignature`='$aesignature1',`image`='$image' WHERE id=$aeid1";
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
            // echo "<span class='alert alert-info'>Data have been successfull.<span>";
        } else {
            echo "<span class='alert alert-danger'>For update data press Update Button.<span>";
        }
        ?>
    </div>
</body>

</html>