<?php
    $editid=$_REQUEST['rid'];
    $edittitle=$_REQUEST['rtitle'];
    
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

    <title>Edit</title>
</head>

<body>
    <div class="container">
    <form class="login-email" action="registercode.php" method="POST">
        <p qlass="login-text" style="font-size: 2rem; font-weight:800;"> Edit</p>
        <div class="input-group">
            <input type="text" placeholder="Name" name="rname" value="<?php echo $editid?>" required >
        </div>
        <div class="input-group">
            <input type="text" placeholder="Name" name="rname" value="<?php echo $edittitle?>" required >
        </div>
        <div class="input-group">
            <input  class="btn" type="submit" name="update" value="Update">
        </div>
    </form>
    </div>
</body>

</html>