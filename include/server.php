<?php
include 'db_connection.php';
$errors = array();




    
 if (isset($_POST['clogin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

    if ($username == "admin" and $password == "1234") {
      echo "<script>window.open('index2.php');</script>";
    }
  else{
    echo "<script>alert('INVALID USER');</script>";
  }
  }

if (isset($_POST['beadonor'])) {
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $bgroup = $_POST['bgroup'];
 $dob = $_POST['dob'];
 $address = $_POST['address'];
 $lga = $_POST['lga'];
 $state = $_POST['state'];
 $zip = $_POST['zip'];
 $hivtest = $_POST['hivtest'];

  $insert = "INSERT INTO  becomeadonor (firstname,lastname,email,phone,bgroup,dob,address,lga,state,zip,hivtest) 
  VALUES ('$firstname','$lastname','$email','$phone','$bgroup','$dob','$address','$lga','$state','$zip','$hivtest')";
  if (mysqli_query($dbcon,$insert)) {
     echo "<script>alert('Data Captured');</script>";
  }
}





if (isset($_POST['postreq'])) {
  
 $title = $_POST['title'];
 $bloodbag = $_POST['bloodbag'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $bgroup = $_POST['purpose'];
 $bgroup = $_POST['bgroup'];
 $phone = $_POST['phone'];
 $age = $_POST['age'];
 $hospitalname = $_POST['hospitalname'];
 $ndate = $_POST['ndate'];
 $address = $_POST['address'];
 $lga = $_POST['lga'];
 $state = $_POST['state'];
 $zip = $_POST['zip'];

  $insert = "INSERT INTO  postrequest (title,bloodbag,name,email,purpose,bgroup,phone,age,hospitalname,ndate,address,lga,state,zip) 
  VALUES ('$title','$bloodbag','$name','$email','$purpose','$bgroup','$phone','$age','$hospitalname','$ndate','$address','$lga','$state','$zip')";
  if (mysqli_query($dbcon,$insert)) {
     echo "<script>alert('Data Captured');</script>";
  }
}







if (isset($_POST['post'])) {
  

 $emailpost = $_POST['emailpost'];
 $bloodbagpost = $_POST['bloodbagpost'];
 $purpose = $_POST['purpose'];
 $bgroup = $_POST['bgroup'];
 $phone = $_POST['phone'];
 $ndate = $_POST['ndate'];
 $hospitalname = $_POST['hospitalname'];
 $address = $_POST['address'];
 $lga = $_POST['lga'];
 $state = $_POST['state'];
 $zip = $_POST['zip'];

  $insert = "INSERT INTO  post (emailpost,bloodbagpost,purpose,bgroup,phone,ndate,hospitalname,address,lga,state,zip) 
  VALUES ('$emailpost','$bloodbagpost','$purpose','$bgroup','$phone','$ndate','$hospitalname','$address','$lga','$state','$zip')";
  if (mysqli_query($dbcon,$insert)) {
     echo "<script>alert('Data Captured');</script>";
  }
}


?>



