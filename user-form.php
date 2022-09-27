<?php

$fullname=$_POST['fullname'];
$mobile=$_POST['telephone'];
$Sex=$_POST['sex'];
$agents=$_POST['agent'];
$trip=$_POST['trip'];


//Database connection
$conn= new mysqli('localhost','root','','online systemdb');
if($conn->connect_error){

    die ('Connection Failed: '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare ("insert into users (Names,Number,sex,agents,trip) values(?,?,?,?,?)");
        $stmt->bind_param("sisss",$fullname ,$mobile ,$Sex ,$agents ,$trip);
        $stmt->execute();
        echo "
        <script>alert('Welcome Again..!');</script>";
exit;
$stmt->close();
$conn->close();
   }
   ?>
    














?>