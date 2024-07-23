<?php include "include/server.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become A Donor</title>
    <link rel="icon" href="assets/images/3.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css">
</head>

<body>
    <div class="menu-toggle"></div>
    <div class="logo">
        &ensp;
    </div>
    <header>
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="menu-toggle"></div>
                    <div class="logo">
                        <img src="assets/images/blood.png" alt="">
                    </div>

                    <div class="my-nav">
                        <div class="menu">
                            <ul>
                                <li><a href="index.php" style="color: black;">Home</a></li>
                                <li><a href="about-us.php" style="color: black;">About</a></li>
                                <li><a href="become-a-donor.php" style="color: black;">Become A Donor</a></li>
                                <li><a href="post-request.php" style="color: black;">Post Request</a></li>
                                <li><a href="blog.php" style="color: black;">Blog</a></li>
                                <li><a href="contact-us.php" style="color: black;">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container-fluid" style="background-color: rgb(245, 208, 163);">
        <p style="padding: 30px;font-size: xx-large;font-weight: 900;">
            Blog
        </p>
    </div>

    <div class="container">
        <div class="row">
            <?php 
            
            $psql = mysqli_query($dbcon, "SELECT * FROM post");
            while ($prop = mysqli_fetch_array($psql)) {
            ?>

            <div class="col-md-3">
                    <div style="background-color:  rgb(245, 208, 163);"
                        class="card animate__animated animate__fadeInUp mt-3">
                        <img src="assets/images/drop.jpg" alt=""
                            style="border-bottom: 2px solid black;">
                        <div class="content">
            
            
                        </div>
                        <div class="card-content" style="padding: 5px;">
                            <h5 style="color: black;"><?php echo $prop['hospitalname']; ?></h5>
                            <p class="mt-1"><h6>No Of Bag(s): <?php echo $prop['bloodbagpost']; ?></h6></p>
                            <p class="mt-1"><h6>Blood Group: <?php echo $prop['bgroup']; ?></h6></p>
                            <p class="mt-1"><h6>Purpose: <?php echo $prop['purpose']; ?></h6></p>
                            <p class="mt-1"><h6>Date Needed: <?php echo $prop['ndate']; ?></h6></p>
                            <p class="mt-1"><label for="">Call: </label><a href="tel:<?php echo $prop['phone']; ?>" style="color: black;"><?php echo " " . $prop['phone']; ?></a></p>
            
                        </div>
                    </div>
            </div>

            <?php } ?>
        </div>
    </div>

    <footer class="mt-5">
        <div class="container">
            <div class="row">

                <div class="footer-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>help@blood-donor.in</span></h3>
                                <p>&copy; 2023 Blood Donor</p>

                            </div>

                            <div class="col-md-4">

                            </div>

                            <div class="col-md-2 float-end">
                                <h2>Call: 07083257995</h2>
                                <ul>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-google"></i></li>
                                    <li><i class="fab fa-skype"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="col-lg-1"></div>

        </div>
        </div>
    </footer>
</body>

</html>