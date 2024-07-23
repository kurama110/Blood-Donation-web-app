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
            <div class="col-md-2" style="background-color: red; height: 120vh;">
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
                    <div class="row mt-5">
                        <div class="col-md-10 mx-auto animate__animated animate__fadeInRight"
                            style="background-color: rgb(252, 245, 242);">
                            <form action="" method="post">
                                <center>
                                    <h3>Request for blood </h3>
                                </center>
                
                
                                <div class="row">
                                    <div class="mt-5 col-md-6">
                                        <label for="" style="font-weight:bold">Email</label>
                                        <input type="text" name="emailpost" value="abuthblooddonor@gmail.com" class="form-control" readonly>
                                    </div>
                
                
                                    <div class="mt-5 col-md-6">
                                        <label for="" style="font-weight:bold">Blood Unit / Bag(s) </label>
                                        <input type="number" name="bloodbagpost" id="" class="form-control" placeholder="Blood unit">
                                    </div>
                
                
                                   
                
                                   
                
                
                                    <div class="mt-3 col-md-6">
                                        <label for="" style="font-weight:bold">Purpose</label>
                                        <input type="text" name="purpose" id="" placeholder="Purpose" class="form-control">
                                    </div>
                
                
                                    <div class="mt-3 col-md-6">
                                        <label for="" style="font-weight:bold">Blood Group</label>
                                        <select name="bgroup" id="" class="form-control">
                                            <OPtion>Select Blood Group</OPtion>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </div>
                
                
                                    <div class="mt-3 col-md-6">
                                        <label for="" style="font-weight:bold">Mobile Number</label>
                                        <input type="number" name="phone" id="" value="07083257995" class="form-control" readonly>
                                    </div>
                
                
                                    <div class="mt-3 col-md-6">
                                        <label for="" style="font-weight:bold">When Need Blood?</label>
                                        <input type="date" name="ndate" id="" placeholder="Age" class="form-control">
                                    </div>
                
                
                                    <div class="mt-3 col-md-12">
                                        <label for="" style="font-weight:bold">Hospital Name</label>
                                        <input type="text" name="hospitalname" id="" value="ABUTH Shika" class="form-control" readonly>
                                    </div>
                
                
                                    
                
                                </div>
                
                
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-weight:bold"><b>Street Address</b></label>
                                        <input type="text" name="address" id="" value="No 22 Shika" class="form-control" readonly>
                                    </div>
                
                
                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-weight:bold"><b>LGA</b></label>
                                        <input type="text" name="lga" id="" value="Sabon Gari" class="form-control" readonly>
                                    </div>
                
                
                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-weight:bold"><b>State</b></label>
                                        <input type="text" name="state" id="" value="Kaduna" class="form-control" readonly>
                                    </div>
                
                
                                    <div class="col-md-6 mt-3">
                                        <label for="" style="font-weight:bold"><b>ZIP Postal Code</b></label>
                                        <input type="number" name="zip" id="" value="5328" class="form-control"readonly>
                                    </div>
                
                
                                </div>
                
                                <div class="mt-5">
                                    <button class="btn btn-lg btn-danger" name="post">Submit Request</button>
                                </div>
                                <br>
                                <br><br>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>