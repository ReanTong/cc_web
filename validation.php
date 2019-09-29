<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "images_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();
if(isset($_POST['login'])){

$getuser = mysqli_real_escape_string($conn, $_POST['username']);
$getpass = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM labproject WHERE username ='$getuser' AND password ='$getpass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
      $_SESSION["username"] = $row['username'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['firstname'] = $row['firstname'];
      $_SESSION['lastname'] = $row['lastname'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['contactnumber'] = $row['contactnumber'];
      header("location: index.php");
      exit();
      }
    }else{
      header("location: login.php");
    }
  }

?>
