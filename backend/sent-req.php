<?php 

include "../include/server.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>     
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-icons/bootstrap-icons.css">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dismissible.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../dist/js/iziToast.min.js" type="text/javascript"></script>
   <!-- App Css-->
<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
     <style>
        html,body{
            box-sizing: border-box;
            height: 100%;
            background-color: #f2f7ff;
        }
      

    </style>
   
</head>
<body>

 <header style="background-color: rgb(214, 3, 3); height: 10vh;">

                <h3 style="padding: 2vh; color: white;font-family: sans-serif; font-size: xx-large;">Blood Donation</h3>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="background-color: red; height: 200vh;">
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


<h2>In Need Of Blood</h2>
<table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
    <thead>
        <tr>
            <th>SN</th>
            <th>EMAIL</th>
            <th>Blood Bag(s)</th>
            <th>Purpose</th>
            <th>B Group</th>
            <th>Phone</th>
            <th>Date Needed</th>
            <th>Hospital: </th>
            <th>Street: </th>
            <th>L G A: </th>
            <th>State: </th>
            <th>Z I P: </th>
            <th>Action: </th>
        </tr>
    </thead>
  
  <?php
  $sn=1;
  $psql = mysqli_query($dbcon,"SELECT * FROM post ORDER BY id DESC");
  while($prop = mysqli_fetch_array($psql)){ ?>
  <tr>

    <td><?php echo $sn++; ?></td>
    <td><?php echo $prop['emailpost']; ?></td>
    <td><?php echo $prop['bloodbagpost']; ?></td>
    <td><?php echo $prop['purpose']; ?></td>
    <td><?php echo $prop['bgroup']; ?></td>
    <td><?php echo $prop['phone']; ?></td>
    <td><?php echo $prop['ndate']; ?></td>
    <td><?php echo $prop['hospitalname']; ?></td>
    <td><?php echo $prop['address']; ?></td>
    <td><?php echo $prop['lga']; ?></td>
    <td><?php echo $prop['state']; ?></td>
    <td><?php echo $prop['zip']; ?></td>
    <td>        
        <a data-tooltip title="Delete" href="edit_delete_modal1.php?id=<?php echo $prop['id']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a> 
    </td>

  </tr>

  <?php } ?>
</table>





                </div>

                </div>

                
            </div>
        </div>



<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/select2/js/select2.min.js"></script>
        <!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $('[data-tooltip]').tooltip();
        });
</script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>
        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>  

</body>
</html>