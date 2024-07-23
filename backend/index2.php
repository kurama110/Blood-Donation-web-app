<?php include "../include/server.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-icons/bootstrap-icons.css">
    <title>Admin dashboard</title>
</head>
<body>
    <header style="background-color: rgb(214, 3, 3); height: 10vh;">

                <h3 style="padding: 2vh; color: white;font-family: sans-serif; font-size: xx-large;">Blood Donation</h3>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="background-color: red; height: 100vh;">
                <div class="mt-5">
                    <p class="p-1">
                        <center>
                            <img src="../assets/images/blood.png" width="150" alt="">
                        </center>
                    </p>
                    <p>
                        <hr color="whitesmoke">

                        <div class="nav-item">
                            <a href="index2.php" class="nav-link"  style="color: white; font-weight: bold; font-size: large;">
                                <i class="bi bi-speedometer"></i>
                                <span>Dashboard</span>
                            </a>
                        </div>

                        <hr color="whitesmoke">

                        <div class="nav-item">
                            <a href="post.php" class="nav-link" style="color: white; font-weight: bold; font-size: large;">
                                <i class="bi bi-box-arrow-in-up"></i>
                                <span>Post Request</span>
                            </a>
                        </div>


                        <div class="nav-item">
                            <a href="blood-donor.php" class="nav-link" style="color: white; font-weight: bold; font-size: large;">
                                <i class="bi bi-bag-heart"></i>
                                <span>Blood Donors</span>
                            </a>
                        </div>


                        <div class="nav-item">
                            <a href="req-blood.php" class="nav-link" style="color: white; font-weight: bold; font-size: large;">
                                <i class="bi bi-stack"></i>
                                <span>Requested Blood</span>
                            </a>
                        </div>



                        <div class="nav-item">
                            <a href="sent-req.php" class="nav-link" style="color: white; font-weight: bold; font-size: large;">
                                <i class="bi bi-stack"></i>
                                <span>Sent Request</span>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a href="index.php" class="nav-link" style="color: white; font-weight: bold; font-size: large;">
                                <i class="bi bi-box-arrow-in-right"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </p>
                </div>
            </div>

            <div class="col-md-10">
                <div class="container mt-5">
                    <div class="row">

                        <div class="col-md-4 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total Number Of Sent Request</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php 
                        
                                                                            $sqlx = "SELECT COUNT(id) AS total FROM post";
                                                                            $runx = mysqli_query($dbcon,$sqlx);
                                                                            $rowx = mysqli_fetch_assoc($runx);
                                                                            echo $rowx['total'];
                        
                                                                        ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-md-4 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total Number Of Blood Donors</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php 
                        
                                                                            $sqlx = "SELECT COUNT(id) AS total FROM becomeadonor";
                                                                            $runx = mysqli_query($dbcon,$sqlx);
                                                                            $rowx = mysqli_fetch_assoc($runx);
                                                                            echo $rowx['total'];
                        
                                                                        ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-md-4 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total Number Of Requested Blood</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php 
                        
                                                                            $sqlx = "SELECT COUNT(id) AS total FROM postrequest";
                                                                            $runx = mysqli_query($dbcon,$sqlx);
                                                                            $rowx = mysqli_fetch_assoc($runx);
                                                                            echo $rowx['total'];
                        
                                                                        ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
</body>
</html>