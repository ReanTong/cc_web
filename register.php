<?php
session_start();
header('location:login.php');

$conn = mysqli_connect('localhost','root','', 'images_database');


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['user'];
$password=$_POST['password'];
$email=$_POST['email'];
$contactnumber=$_POST['contactnumber'];

$s="SELECT * FROM `labproject`where name= '$username'";

$result = mysqli_query($conn,$s);
$num= $result;

if($num==1){
  echo"Username Already Exist. Please Try Another Username";
}else{
  $reg=" INSERT INTO labproject(username, password, firstname, lastname, email, contactnumber) VALUES
    ('$username','$password','$firstname','$lastname','$email','$contactnumber')";
  mysqli_query($conn,$reg);
  echo"Registration Successful";
}
?>
