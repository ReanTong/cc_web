<?php
session_start();
?>

<style>
.panel{
  margin-bottom:20px;
  background-color:#fff;
  border:1px solid transparent;
  border-radius:4px;
  -webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);
  box-shadow:0 1px 1px rgba(0,0,0,.05)
}

.panel-default{
  border-color:#ddd;
}

.panel-heading{
  padding:10px 15px;
  border-bottom:1px solid transparent;
  border-top-left-radius:3px;
  border-top-right-radius:3px;
}

.panel-heading{
  border-bottom:0;
}

.panel-body{
  padding:15px;
}

.panel-footer{
  padding:10px 15px;
  background-color:#f5f5f5;
  border-top:1px solid #ddd;
  border-bottom-right-radius:3px;
  border-bottom-left-radius:3px;
}
</style>

<?php

$connect = new PDO('mysql:host=localhost;dbname=images_database', 'root', '');

if(isset($_GET['image_comment_key'])){
  $image_comment_key = $_GET['image_comment_key'];
}

$query = "
SELECT * FROM comment
WHERE parent_comment_id = '0'
ORDER BY id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">Comment by <b>'.$row["comment_sender_name"].'</b> to Image titled <b>'. $row["post_title"] .'</b> on <i>'.$row["date"].'</i></div>
  <div class="panel-body">'.$row["comment"].'</div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["id"].'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($connect, $row["id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
   $query = "
   SELECT * FROM comment WHERE parent_comment_id = '".$parent_id."'
   ";
   $output = '';
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   $count = $statement->rowCount();
   if($parent_id == 0)
   {
    $marginleft = 0;
   }
   else
   {
    $marginleft = $marginleft + 48;
   }
   if($count > 0)
   {
    foreach($result as $row)
    {
     $output .= '
     <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
      <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
      <div class="panel-body">'.$row["comment"].'</div>
      <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["id"].'">Reply</button></div>
     </div>
     ';
     $output .= get_reply_comment($connect, $row["id"], $marginleft);
    }
   }
   return $output;
}

?>
