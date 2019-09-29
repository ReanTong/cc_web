<title>
  <?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "images_database";
  $conn = mysqli_connect($server, $username, $password, $dbname);

  $title = mysqli_real_escape_string($conn,$_GET['title']);
  echo $title;
  ?>
</title>

<?php
  session_start();
  include 'header.php';
?>

<div class="app-content content"><!-- Content Container -->
  <div class="content-wrapper"><!-- Content Wrapper -->
      <div class="content-body"><!-- Content Body -->

        <div class="alert alert-icon-left alert-info alert-dismissible mb-2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <strong>Notice!</strong>
          Please be sure when you want to delete this picture! It <strong>CAN'T</strong> be undo!
        </div>

        <div class="card-header">
          <div class="row">
          <?php
          $server = "localhost";
      		$username = "root";
      		$password = "";
      		$dbname = "images_database";
          $conn = mysqli_connect($server, $username, $password, $dbname);

          $id = mysqli_real_escape_string($conn,$_GET['id']);
          $title = mysqli_real_escape_string($conn,$_GET['title']);
          $images_comment_key2 = mysqli_real_escape_string($conn,$_GET['images_comment_key']);

          $_COOKIE['images_comment_key'] = $images_comment_key2;

          $sql = "SELECT * FROM images WHERE id = '$id' AND images_title = '$title'";
          $result = mysqli_query($conn,$sql);
		      $queryResult = mysqli_num_rows($result);

          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '
              <figure class="col-md-6 col-sm-12" >
              <a href="images/' .$row['images_name']. '" data-lightbox="mygallery">
              <img class="col-md-10" id="myImg" src ="images/' .$row['images_name']. '">
              </a>
              </figure>

              <div class="col-md-6 col-sm-12" >
                <h1>'. $row['images_title'] .'</h1>
                <div class="media-body">'. $row['images_caption'] .'</div>
                <div class="tag">
                <strong>Tags: </strong>
                '. $row['images_tag'] .'<input type="hidden"
                  name="no-duplicate[]" value="'. $row['images_tag'] .'">

                </div><br>
                <a href="edit_image.php?id='. $row['id'] .'&title='. $row['images_title'] .'">
                    <button type="button" class="btn btn-primary">Edit</button></a>

                <a href="index.php?delete='. $row['id'] .'">
                    <button type="button" class="btn btn-primary">Delete</button></a>
              </div>
              ';
              }
            }
          ?>
        </div>
        </div>

        <div class="card-body">
        <div class="container">
          <form method="POST" id="comment_form">
            <div class="form-group">
              <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" readonly="readonly" value="<?php echo $_SESSION['username']; ?>"/>
            </div>

            <div class="form-group">
              <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
            </div>

            <div class="form-group">
              <input type="hidden" name="comment_id" id="comment_id" value="0" />
              <input type="hidden" name="comment_post_title" value="
              <?php
              if ($queryResult > 0) {
                $sql = "SELECT * FROM images WHERE id = '$id' AND images_title = '$title'";
                $result = mysqli_query($conn,$sql);
      		      $queryResult = mysqli_num_rows($result);

                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row['images_title'];
                }
              }?>" >

              <input type="hidden" name="image_comment_key" id="image_comment_key" value="
              <?php
              if ($queryResult > 0) {
                $sql = "SELECT * FROM images WHERE id = '$id' AND images_title = '$title'";
                $result = mysqli_query($conn,$sql);
      		      $queryResult = mysqli_num_rows($result);

                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row['images_comment_key'];
                }
              }
              ?>" />

              <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>
          </form>
         <span id="comment_message"></span>
         <br />
         <div id="display_comment"></div>
         <div id="image_comment_key"></div>
        </div>
      </div>

      </div><!-- END Content Body -->
   </div><!-- END Content Wrapper -->
 </div><!-- END Content Container -->

<?php
  include 'footer.php';
?>

<script>
  $(document).ready(function(){

   $('#comment_form').on('submit', function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
     url:"add_comment.php",
     method:"POST",
     data:form_data,
     dataType:"JSON",
     success:function(data)
     {
      if(data.error != '')
      {
       $('#comment_form')[0].reset();
       $('#comment_message').html(data.error);
       $('#comment_id').val('0');
       load_comment();
      }
     }
    })
   });

   load_comment();

   function load_comment()
   {
    $.ajax({
     url:"fetch_comment.php",
     method:"POST",
     success:function(data)
     {
      $('#display_comment').html(data);
     }
    })
   }

   $(document).on('click', '.reply', function(){
    var comment_id = $(this).attr("id");
    $('#comment_id').val(comment_id);
    $('#comment_name').focus();
   });

  });
</script>
