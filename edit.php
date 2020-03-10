<?php 
include_once('connect.php');


    session_start();
    $usernameOld = $_SESSION['username'];

    
    $nameNew = $_POST['full-name'];
    $websiteNew = $_POST['website'];
    $bioNew = $_POST['bio'];
    $emailNew = $_POST['email'];
    $phoneNumberNew = $_POST['phoneNumber'];
    $genderNew = $_POST['gender'];

    mysqli_query($conn, "UPDATE profile SET name = '$nameNew', website = '$websiteNew', bio = '$bioNew', email = '$emailNew', phoneNumber = '$phoneNumberNew', gender = '$genderNew' WHERE USERNAME = '$usernameOld'");

    
  header('location: profile.php');




 ?>