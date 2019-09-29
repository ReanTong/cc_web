<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "images_database";
$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit_comment'])){

  $username = $_POST['comment_name'];
  $comment = $_POST['comment_content'];
  $images_comment_key = $_POST['image_comment_key'];
  if($comment != ""){
    $sql = "INSERT INTO comment (comment_sender_name, comment, image_comment_key)
      VALUES ('$username', '$comment', '$images_comment_key')";
    $query = $conn->query($sql);
    if($query){
      header("location: image_details.php?image_comment_key={$images_comment_key}");
    }
  }
}


?>
