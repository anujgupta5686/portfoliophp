
<!-- Update php code written here...-->
<?php
        require "backend/connection.php";
        ?>
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

    <title>Add Project</title>
</head>

<body>
    <div class="container">
        <?php
        $id=$_REQUEST['id'];
        if(empty($id)) {?>
        <form class="login-email" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <p qlass="login-text" style="font-size: 2rem; font-weight:800;"> Add Project</p>
            <div class="input-group">
                <input type="text" placeholder="Enter Title" name="title" value=""  required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Enter Description" name="descripton" value="" required>
            </div>
           
            <div class="input-group">
                <input type="file" placeholder="Name" name="image" value="" required>
            </div>
            <!-- <div class="input-group">
                <input type="text" placeholder="Name" name="heimage" value="<?php  ?>">
            </div> -->
            <div class="input-group">
                <input class="btn" type="submit" name="insert" value="Submit">
            </div>
        </form>
        <?php } else {
            
            $sel=mysqli_query($conn,"SELECT * FROM addproject WHERE id='$id'");
            $res=mysqli_fetch_array($sel,MYSQLI_BOTH);
            ?> 
            <form class="login-email" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <p qlass="login-text" style="font-size: 2rem; font-weight:800;"> Update Project</p>
            <div class="input-group">
                <input type="text" placeholder="Enter Title" name="title" value="<?=$res['title']?>"  required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Enter Description" name="descripton" value="<?= $res['description']?>" required>
            </div>
           
            <div class="input-group">
                <input type="file" placeholder="Name" name="image" value="" >
                <input type="hidden" placeholder="Name" name="oldimage" value="<?= $res['image']?>" required>
                <input type="hidden" placeholder="Name" name="id" value="<?= $res['id']?>" required>
            </div>
            <!-- <div class="input-group">
                <input type="text" placeholder="Name" name="heimage" value="<?php  ?>">
            </div> -->
            <div class="input-group">
                <input class="btn" type="submit" name="update" value="Update">
            </div>
        </form>
            <?php }?>
        <?php
        // require "backend/connection.php";
        error_reporting(0);
        if ($_POST['insert']) {
            $aeid1=$_POST['aeid'];

            $title=$_POST['title'];
            $description=$_POST['descripton'];

        
            $path='image/'.$image;
            $image=$_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];
            $updatequery="INSERT INTO `addproject`(`title`, `description`, `image`) VALUES ('$title','$description','$image')";
            $queryfire=mysqli_query($conn,$updatequery);
            // echo $queryfire;
            // die();
            if($queryfire){
                move_uploaded_file($tmp_name.$path);
                echo "<span class='alert alert-info'>Data has been Submited.<span>";
                echo "<script>alert('Data has been Submited.');
                    window.location.href='index.php';
                </script>";
              
            }
            else{
                echo "<script>alert('Something went wrong.');
                </script>";
            }
            // echo "<span class='alert alert-info'>Data have been successfull.<span>";
        } else if($_POST['update']){
            $id=$_POST['id'];

            $title=$_POST['title'];
            $description=$_POST['descripton'];
            
        
            $path='image/'.$image;
            $image=$_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];
            if(empty($image)){
                $image=$_POST['oldimage'];
            }
            // $updatequery="INSERT INTO `addproject`(`title`, `description`, `image`) VALUES ('$title','$description','$image')";
            $updatequery="UPDATE `addproject` SET `title`='$title',`description`='$description',`image`='$image' WHERE id='$id'";
            $queryfire=mysqli_query($conn,$updatequery);
            // echo $queryfire;
            // die();
            if($updatequery){
                move_uploaded_file($tmp_name.$path);
                echo "<span class='alert alert-info'>Data has been Submited.<span>";
                echo "<script>alert('Data has been Submited.');
                    window.location.href='index.php';
                </script>";
              
            }
            else{
                echo "<script>alert('Something went wrong.');
                </script>";
            }
        }

        
        ?>
    </div>
</body>

</html>