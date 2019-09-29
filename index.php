<title>Image Management</title>

<?php
  include 'header.php';
?>

<div class="app-content content"><!-- Content Container -->
  <div class="content-wrapper"><!-- Content Wrapper -->
      <div class="content-body"><!-- Content Body -->

        <div class="card-header"><!-- card header -->

          <form method="post" action="search.php"><!-- Search Field -->
            <fieldset>
              <div class="input-group">
                <input type="text" name="search_input" class="form-control" placeholder="Search" aria-describedby="button-addon2">
                <div class="input-group-append" id="button-addon2">
                  <button class="btn btn-primary" name="search" type="submit">Go</button>
                </div>
              </div>
            </fieldset>
          </form><!-- END Search Field -->

          <a href="upload.php"><button type="button" class="btn btn-primary">Upload</button></a>
        </div><!-- END card header -->

        <div class="card-body">

          <div class="alert alert-icon-left alert-info alert-dismissible mb-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <strong>Notice!</strong>
            To change or see the details of images, please right click to open with new window.
          </div>

        </div>

          <div class="card-body  my-gallery" data-pswp-uid="1">

          <div class="row">
          <?php
          $server = "localhost";
      		$username = "root";
      		$password = "";
      		$dbname = "images_database";
          $conn = mysqli_connect($server, $username, $password, $dbname);

          $sql = "SELECT * FROM images";
          $result = mysqli_query($conn, $sql);
          $queryResult = mysqli_num_rows($result);

          if($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result))
            {
              echo '
              <div class="grid-hover col-md-4 col-12">
                <figure class="effect-lily">
                  <img src ="images/' .$row['images_name']. '">
                  <figcaption>
                  <div>
                    <h2>' .$row['images_title']. '</h2>
                    <p>' .$row['images_caption']. '</p>
                  </div>
                  <a href="image_details.php?id=' .$row['id']. '&title=' .$row['images_title']. '&images_comment_key=' .$row['images_comment_key'].'">#</a>
                  </figcaption>
                </figure>
              </div>';
            }
          }

          ?>
          </div>
          </div>


      </div><!-- END Content Body -->
   </div><!-- END Content Wrapper -->
 </div><!-- END Content Container -->

<!-- Delete Function from image details -->
 <?php
   $server = "localhost";
   $username = "root";
   $password = "";
   $dbname = "images_database";
   $conn = mysqli_connect($server, $username, $password, $dbname);

   if(isset($_GET['delete'])){
     $delete = $_GET['delete'];
     mysqli_query($conn, "DELETE FROM images WHERE id = '$delete'");

     header("location: index.php");
   }
 ?><!-- END Delete Function from image details -->

<?php
  include 'footer.php';
?>
