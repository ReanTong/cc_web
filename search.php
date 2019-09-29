<title>Search Result</title>

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

          <div class="card-body">
          <?php
          echo  '<h4>Now searching: '. $_POST['search_input'] .'</h4>';
          ?>
          </div>

        </div><!-- END card header -->

        <div class="card-body"><!-- card body -->
          <div class="row">
          <?php
            if (isset($_POST['search'])){
        		$search = mysqli_real_escape_string($conn,$_POST['search_input']);
        		$sql3 = "SELECT * FROM images WHERE images_title LIKE '%$search%' OR images_caption LIKE '%$search%'
              OR images_tag LIKE '%$search%'";
        		$result3 = mysqli_query($conn, $sql3);
        		$queryResult3 = mysqli_num_rows($result3);

        		if ($queryResult3 > 0){
        			while ($row3 = mysqli_fetch_assoc($result3)){
                echo '
                <div class="grid-hover col-md-4 col-12">
                  <figure class="effect-lily">
                    <img src ="images/' .$row3['images_name']. '">
                    <figcaption>
                    <div>
                      <h2>' .$row3['images_title']. '</h2>
                      <p>' .$row3['images_caption']. '</p>
                    </div>
                    <a href="image_details.php?id=' .$row3['id']. '&title=' .$row3['images_title']. '">#</a>
                    </figcaption>
                  </figure>
                </div>';
        			}
        		}else{
        			echo '
              <div class="card-body">
              <h4>No related images</h4>
              </div>';
        		}
        	}
          ?>
        </div>
      </div><!-- END card body -->


      </div><!-- END Content Body -->
   </div><!-- END Content Wrapper -->
 </div><!-- END Content Container -->

<?php
  include 'footer.php';
?>
