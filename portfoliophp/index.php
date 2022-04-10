<!-- #457725 -->
<?php
require "backend/connection.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/homeStyle.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>portfolio</title>
</head>

<body>
    <div class="container-fluid">

        <!-- Menubar This is Header part which covered Logo, Self Name, Menubar, Update, Login/Register-->

        <div class="row sticky-top" style="background-color:#457725;" id="homeMe">
            <div class="col-md-1 text-center">
                <img src="image/logo1.png" alt="image not fount" class="img img-fluid rounded-circle imageStyle rotate">
            </div>

            <div class="col-md-3 ">
                <h2 class="mt-4 text-center text-white"><?php
                                                        $selectquery = 'SELECT title_name FROM titlename';
                                                        $sql = mysqli_query($conn, $selectquery);
                                                        $data = mysqli_fetch_assoc($sql);
                                                        echo $data['title_name'];
                                                        ?></h2>
            </div>

            <div class="col-md-5">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#457725;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-center mt-3 hoverSetInMenu" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#homeME">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#aboutMe">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Skill</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-md-1 text-center">
                <a href="update.php" class="text-decoration-none text-light"><i class="fa fa-pencil-square-o mt-3" aria-hidden="true" style="font-size:25px;"></i><br>Update</a>
            </div>

            <div class="col-md-1 text-center">
                <a href="register.php" class="text-decoration-none text-light"><i class="fa fa-user mt-3" aria-hidden="true" style="font-size:25px;"></i><br> Login/Register</a>
            </div>


        </div><br>
        <!-- This is short self introduction part... -->

        <div class="container secondSection" id="homeMe">
            <div class="row mt-5 mb-5">
                <div class="col-md-6">
                    <!-- <div class=" text-center mt-3">
                        <a href="" class="text-decoration-none icon"><span><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                        <a href="" class="text-decoration-none icon"><span><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
                        <a href="" class="text-decoration-none icon"><span><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                        <a href="" class="text-decoration-none icon"><span><i class="fa fa-facebook-official" aria-hidden="true"></i></span></a>
                    </div> -->
                    <div class="text-center mt-2">
                        <?php
                        $selectquery = 'SELECT * FROM secondpara';
                        $sql = mysqli_query($conn, $selectquery);
                        $data = mysqli_fetch_assoc($sql);

                        ?>
                        <span class="h1 intro"> <?php echo $data['title'] ?></span>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="text-center mt-5 p-2 ">
                                <span class="introname1 text-center"> <?php echo $data['subtitle'] ?></span><br>
                                <span class="introname2 text-center"><?php echo $data['discription'] ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mx-auto mt-5 mb-5">
                            <a href="" class="btn btn-md btn-outline-primary">Get More</a>
                            <a href="" class="btn btn-md btn-outline-danger" style="float:right;">Resume</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <div class="imageupload">
                        <img src="image/myPic.jpg" alt="Sorry Photo is not uploaded right now" class="img-fluid intropic">
                    </div>
                </div>

            </div>
            <div class="row d-flex">
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4 d-flex justify-content-end"><a href="headerupdate.php" class="btn btn-outline-danger text-decoration-none">Update</a></div>
            </div>
        </div>

        <!--About section-->

        <?php
                        $selectquery = 'SELECT * FROM thirdpara';
                        $sql = mysqli_query($conn, $selectquery);
                        $data = mysqli_fetch_assoc($sql);

                        ?>        
        <div class="container about mt-5 mb-5" id="aboutMe">
            <div class="row">
                <div class="col-md-12  text-center">
                    <span class="aboutH">About Me</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <img src="image/pngegg.png" alt="" class="img-fluid imgset">
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="mt-5">
                            <span class="aboutName1 h1"><?php echo $data['abouttitle'] ?></span>
                        </div>
                        <div class="col-md-8 mx-auto aboutName2">
                            <div class="mt-5">
                                <p class="h5 text-wrap"><?php echo $data['aboutsubtitle'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5 text-center text-danger d-flex justify-content-end">
                            <span class="h5 "><i><?php echo $data['aboutsignature'] ?>...</i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4 d-flex justify-content-end"><a href="aboutupdate.php" class="btn btn-outline-danger text-decoration-none">Update</a></div>
            </div>
        </div>
        <!-- Skill Code-->
        <div class="container about mt-5 mb-5" id="aboutMe">
            <div class="row">
                <div class="col-md-12  text-center">
                    <span class="aboutH">My Skill</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">HTML</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">CSS</div>
                    </div><br>
                </div>
            </div>
        </div>

        <!--Project-->

        <div class="container about mt-5 mb-5" id="aboutMe">
            <div class="row">
                <div class="col-md-12  text-center">
                    <span class="aboutH">Project</span>
                   <a href="Addproject.php" target="_blank"> <button class="btn btn-info pull-right" > Add Project</button></a>
                </div>
            </div>
            <div class="row">
            <?php $sel=mysqli_query($conn,"SELECT * FROM addproject ORDER BY id DESC");
            while ($row=mysqli_fetch_array($sel,MYSQLI_BOTH))
                {?>
                <div class="col-md-3">
                    
                    <div class="card" style="width: 18rem;">
                        <a href=""><img src="image/<?= $row['image']?>" class="card-img-top" alt="Not found"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['title'] ?></h5>
                            <p class="card-text"><?= $row['description'] ?></p>
                            <a href="Addproject.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        </div>
                    </div>
                    
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Contact Us code-->
        <div class="container about mt-5 mb-5" id="aboutMe">

            <div class="row">
                <div class="col-md-10 mx-auto">
                    <form action=" " method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contact Us</h3>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Massage" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>