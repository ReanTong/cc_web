<?php
  include 'header.php';

      $server = "localhost";
  		$username = "root";
  		$password = "";
  		$dbname = "images_database";
      $conn = mysqli_connect($server, $username, $password, $dbname);

  		if (isset($_POST['insert'])){

        $images = $_FILES['image']['name'];
        $title = $_POST['title'];
        $caption = $_POST['caption'];
        $tags = $_POST['tags'];
        $comment_key = $_POST['images_comment_key'];
        $check = "";

        foreach ($tags as $check1) {
          $check .= $check1.", ";
        }

  			$sql = "INSERT INTO images (images_name, images_title, images_caption, images_tag, images_comment_key) VALUES
  			('$images', '$title', '$caption', '$check', '$comment_key');";
        mysqli_query($conn, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'],"images/".basename($images)))
        {
          echo "<script>alert('successful')</script>";
        }else{
          echo "<script>alert('failed')</script>";
        }
      }

?>

<div class="app-content content"><!-- Content Container -->
  <div class="content-wrapper"><!-- Content Wrapper -->
      <div class="content-body"><!-- Content Body -->

        <div class="card">
        <div class="card-header">
          <h4 class="card-title">Upload Your Picture</h4>

          <div class="card-body">
            <form class="form form-horizontal striped-rows form-bordered" method="post" action="upload.php" class="striped-rows" enctype="multipart/form-data">

              <div class="form-body">

                <h4 class="form-section"><i class="ft-image"></i> Images Info</h4>

                <div class="form-group row">
                  <label class="col-md-3 label-control">Select Your Images</label>
                  <div class="col-md-9">
                    <label class="file center-block">
                      <input type="file" name="image">
                    </label>
                  </div>
                </div>

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="input-title">Title</label>
                    <div class="col-md-9">
                      <input type="text" id="title" class="form-control" placeholder="Title" name="title">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="input-caption">Caption</label>
                    <div class="col-md-9">
                      <textarea id="caption" rows="5" class="form-control" name="caption" placeholder="Caption"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="input-tags">Tags</label>
                    <div class="col-md-9">
                      <fieldset class="checkbox">
                        <label>
                          <input type="checkbox" name="tags[]" value="travelling"> Travelling
                        </label>
                      </fieldset>

                      <fieldset class="checkbox">
                        <label>
                          <input type="checkbox" name="tags[]" value="foods"> Foods
                        </label>
                      </fieldset>

                      <fieldset class="checkbox">
                        <label>
                          <input type="checkbox" name="tags[]" value="fun"> Fun
                        </label>
                      </fieldset>

                      <fieldset class="checkbox">
                        <label>
                          <input type="checkbox" name="tags[]" value="other">
                          <input type="text" name="tags[]" value="">
                        </label>
                      </fieldset>
                    </div>
                  </div>

                  <div class="form-group row last">
                    <input type="hidden" name="images_comment_key"
                      value="<?php echo md5($title.$id); ?>">
                  </div>
                </div> <!-- END form-body -->

                  <div class="form-actions">
                    <input type="submit" name="insert" value="Insert">
                  </div>

              </form>
          </div><!-- END card-body -->
        </div>
        </div>




      </div><!-- END Content Body -->
   </div><!-- END Content Wrapper -->
 </div><!-- END Content Container -->

<?php
  include 'footer.php';
?>
