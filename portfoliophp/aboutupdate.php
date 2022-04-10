
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/updateStyle.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>about update</title>
</head>

<body>
    <div class="containner">
        <div class="row">
            <div class="col-md-12  text-center">
                <span class="title">About Upadte</span>
            </div>
        </div>
        <div class="container-flude">
            <div class="row">
                <div class="col-md-12 bg-secondary">
                    <?php
                    require "backend/connection.php";
                    error_reporting(0);
                    $selectquery = 'SELECT * FROM thirdpara';
                    $sql = mysqli_query($conn, $selectquery);
                    $fetchrow = mysqli_num_rows($sql);

                    if ($fetchrow != 0) {
                    ?>
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Subtitle</th>
                                    <th scope="col">Signature</th>
                                    <!-- <th scope="col">Image</th> -->
                                    <th colspan="1">Action</th>
                                </tr>
                            </thead>


                        <?php
                        while ($data = mysqli_fetch_assoc($sql)) {
                            echo "<tbody>
                            <tr class='text-center'>
                                <th>".$data['id']."</th>
                                <td>".$data['abouttitle']."</td>
                                <td>".$data['aboutsubtitle']."</td>
                                <td>".$data['aboutsignature']."</td>
                                
                                <td><a href='abouteditpage.php?auid=$data[id]&autitle=$data[abouttitle]&ausubtitle=$data[aboutsubtitle]&ausignature=$data[aboutsignature]&auimage=$data[image]' class='btn btn-outline-info'>Edit</a></td>
                               
                            </tr>
                        </tbody>";
                        }
                    } else {
                        echo 'Data not found';
                    }
                    die();

                        ?>
                        </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>