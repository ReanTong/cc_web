<title>Edit Your Personal Details</title>

<?php
  include 'header.php';
?>

<div class="app-content content"><!-- Content Container -->
  <div class="content-wrapper"><!-- Content Wrapper -->
      <div class="content-body"><!-- Content Body -->

        <div class="card-header">

          <form class="form" method="post" action="">
            <div class="form-body">

              <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="projectinput1">First Name</label>
                    <input type="text" name="update_firstname" class="form-control" placeholder="First Name" name="fname">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="projectinput2">Last Name</label>
                    <input type="text" name="update_lastname" class="form-control" placeholder="Last Name" name="lname">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="projectinput3">E-mail</label>
                    <input type="text" name="update_email" class="form-control" placeholder="E-mail" name="email">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="projectinput4">Contact Number</label>
                    <input type="text" name="update_contact" class="form-control" placeholder="Phone" name="phone">
                  </div>
                </div>
              </div>

            </div>

            <div class="form-actions">
              <input type="submit" name="update_user" value="Update">
            </div>

          </form>
        </div>

      </div><!-- END Content Body -->
    </div><!-- END Content Wrapper -->
</div><!-- END Content Container -->

<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "images_database";
  $conn = mysqli_connect($server, $username, $password, $dbname);

  if(isset($_POST['update_user'])){
  $username = $_SESSION['username'];
  $update_firstname = $_POST['update_firstname'];
  $update_lastname = $_POST['update_lastname'];
  $update_email = $_POST['update_email'];
  $update_contact = $_POST['update_contact'];

  $update_query2 = "UPDATE labproject SET firstname = '$update_firstname', lastname = '$update_lastname',
    email = '$update_email', contactnumber = '$update_contact' WHERE username = '$username'";
    mysqli_query($conn, $update_query2);
  }
?>

<?php
  include 'footer.php';
?>
