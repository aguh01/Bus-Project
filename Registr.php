<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['psw']);
$cpassword=md5($_POST['psw-2']);



$server="localhost";
$user="root";
$pass="";
$database="online systemdb";

$conn = mysqli_connect($server,$user,$pass,$database);

if($password==$cpassword){
    $sql= "SELECT * FROM registers WHERE email='$email' AND password=$password";
    $result=mysqli_query($conn,$sql);
if($result){
$sql="INSERT INTO registers(username,email,password) VALUES ('$username' ,'$email' ,'$password')";
$result=mysqli_query($conn ,$sql);

if($result){
    echo"<script>alert('Register successfull.')</script>";
}else{
    echo"<script>alert('Something is wrong.')</script>";
}
}
else{
    echo"<script>alert('email already used. ') </script>";
}

echo "<script>alert('Password correct,proceed.')</script>";
}else{
    echo"<script>
    alert('incorrect password!,enter again. ')
    window.history.go(-1);
    
    </script>";
}







?>