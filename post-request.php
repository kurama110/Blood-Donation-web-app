<?php include 'include/server.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become A Donor</title>
    <link rel="icon" href="assets/images/3.jpg">
    <link rel="icon" href="assets/lga/jquery.min.js">
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



    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto animate__animated animate__fadeInRight" style="background-color: rgb(242, 248, 252);">
                <form action="post-request.php" method="post">
                    <center>
                        <h3>Request for blood </h3>
                        <p>Please fill the following informatiion to post your blood request</p>
                    </center>
                    

                    <div class="row">
                        <div class="mt-5 col-md-6">
                            <label for="" style="font-weight:bold">Title</label>
                            <input type="text" name="title" id="" placeholder="Title" class="form-control">
                        </div>


                        <div class="mt-5 col-md-6">
                            <label for="" style="font-weight:bold">Blood Unit / Bag(s) </label>
                            <input type="number" name="bloodbag" id="" class="form-control" placeholder="Blood unit">
                        </div>


                        <div class="mt-3 col-md-6">
                            <label for="" style="font-weight:bold">Patient Name</label>
                            <input type="text" name="name" id="" placeholder="Patient name" class="form-control">
                        </div>


                        <div class="mt-3 col-md-6">
                            <label for="" style="font-weight:bold">Email</label>
                            <input type="email" name="email" id="" placeholder="Enter request email" class="form-control">
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
                            <input type="number" name="phone" id="" placeholder="Mobiile number" class="form-control">
                        </div>


                        <div class="mt-3 col-md-6">
                            <label for="" style="font-weight:bold">Patient Age</label>
                            <input type="number" name="age" id="" placeholder="Age" class="form-control">
                        </div>


                        <div class="mt-3 col-md-6">
                            <label for="" style="font-weight:bold">Hospital Name</label>
                            <input type="text" name="hospitalname" id="" placeholder="Hospital name" class="form-control">
                        </div>


                        <div class="mt-3 col-md-6">
                            <label for="" style="font-weight:bold">When Need Blood?</label>
                            <input type="date" name="ndate" id="" placeholder="date" class="form-control">
                        </div>
                        
                    </div>


                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <label for="" style="font-weight:bold"><b>Street Address</b></label>
                            <input type="text" name="address" id="" placeholder="E.g No.25 dogarawa" class="form-control">
                        </div>
                    
                    
                    
                    
                        <div class="col-md-6 mt-3">
                            <label for="" style="font-weight:bold"><b>State</b></label>
                            <select onchange="toggleLGA(this);" name="state" id="state" class="form-control">
                                <option value="" selected="selected">- Select State -</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="AkwaIbom">AkwaIbom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT">FCT</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamafara</option>
                            </select>
                        </div>
                    
                        <div class="col-md-6 mt-3">
                            <label for="" style="font-weight:bold"><b>LGA</b></label>
                            <select name="lga" id="lga" class="form-control select-lga" required>
                                <option value="" selected="selected">- Select LGA -</option>
                            </select>
                        </div>
                    
                        <div class="col-md-6 mt-3">
                            <label for="" style="font-weight:bold"><b>ZIP Postal Code</b></label>
                            <input type="number" name="zip" id="" placeholder="E.g 2000" class="form-control">
                        </div>
                    
                    
                    </div>

                    <div class="mt-5">
                        <button class="btn btn-lg btn-primary" name="postreq">Submit Your Request</button>
                    </div>
<br>
<br><br>
                </form>
            </div>
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
    <script src="assets/lga/lga.min.js"></script>
</body>

</html>