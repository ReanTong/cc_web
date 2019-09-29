<title>Edit Images Details</title>

<?php
  include 'header.php';

  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "images_database";
  $conn = mysqli_connect($server, $username, $password, $dbname);
?>

<div class="app-content content"><!-- Content Container -->
  <div class="content-wrapper"><!-- Content Wrapper -->
      <div class="content-body"><!-- Content Body -->

        <div class="card-header">
          <div class="row">
          <?php
          $id = mysqli_real_escape_string($conn,$_GET['id']);
          $title = mysqli_real_escape_string($conn,$_GET['title']);

          $sql = "SELECT * FROM images WHERE id = '$id' AND images_title = '$title'";
          $result = mysqli_query($conn,$sql);
		      $queryResult = mysqli_num_rows($result);

          if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '
              <figure class="col-md-6 col-sm-12" >
              <img class="col-md-10" id="myImg" src ="images/' .$row['images_name']. '">
              </a>
              </figure>

              <form class="form col-md-6" method="post" action="">
                <div class="form-body">
                  <h4 class="form-section"><i class="ft-image"></i> Edit The Details of Image</h4>

                  <div class="form-group">
                    <label for="update_title">Title</label>
                    <input class="form-control border-primary" type="text" placeholder="Enter your title" name="update_title">
                  </div>

                  <div class="form-group">
                    <label for="userinput6">Caption</label>
                    <textarea id="caption" rows="5" class="form-control" name="update_caption" placeholder="Enter your caption"></textarea>
                  </div>

                  <div class="form-group">
                    <label class="label-control" for="input-tags">Tags</label>
                    <div class="col-md-9">
                      <fieldset class="checkbox">
                        <label>
                          <input type="checkbox" name="update_tags[]" value="travelling"> Travelling
                        </label>
                      </fieldset>

                      <fieldset class="checkbox">
                        <label>
                          <input type="checkbox" name="update_tags[]" value="foods"> Foods
                        </label>
                      </fieldset>

                      <fieldset class="checkbox">
                        <label>
                          <input type="checkbox" name="update_tags[]" value="fun"> Fun
                        </label>
                      </fieldset>

                      <fieldset class="checkbox">
                        <label>
                          <input type="checkbox" name="update_tags[]" value="other">
                          <input type="text" name="update_tags[]" value="">
                        </label>
                      </fieldset>
                    </div>
                  </div>
                  </div>

                  <div class="form-actions">
                    <input type="submit" name="update" value="Update">
                  </div>
              </form>
              ';
            }
          }
          ?>
        </div>
        </div>
        <br>

      </div><!-- END Content Body -->
   </div><!-- END Content Wrapper -->
 </div><!-- END Content Container -->

<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "images_database";
  $conn = mysqli_connect($server, $username, $password, $dbname);

  if(isset($_POST['update'])){
  $update_title = $_POST['update_title'];
  $update_caption = $_POST['update_caption'];
  $update_tags = $_POST['update_tags'];
  $update_check = "";

  foreach ($update_tags as $update_check1) {
    $update_check .= $update_check1.", ";
  }

    $update_query = "UPDATE images SET images_title = '$update_title', images_caption = '$update_caption',
      images_tag = '$update_check' WHERE id = $id";
    mysqli_query($conn, $update_query);
  }
 ?>

<?php
  include 'footer.php';
?>
