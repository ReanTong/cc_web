<?php
session_start();

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/fonts/meteocons/style.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/sweetalert.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/selects/select2.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/checkboxes-radios.css">

  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/users.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/js/gallery/photo-swipe/photoswipe.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/js/gallery/photo-swipe/default-skin/default-skin.css">

  <!-- Gallery Function -->
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/gallery.css">
  <!-- END Gallery function -->

  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->

  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <script src="js/lightbox-plus-jquery.min.js"></script>


  <div class="app-content content"><!-- Content Container -->
    <div class="content-wrapper"><!-- Content Wrapper -->
        <div class="content-body"><!-- Content Body -->

          <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
              <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-2 py-2 m-0">

                  <div class="card-header border-0">
                    <div class="card-title text-center">
                      <img src="app-assets/images/logo/175x25.png" alt="branding logo">
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                      <span>Create Account</span>
                    </h6>
                  </div>

                  <div class="card-content">
                    <div class="card-body">

                      <form class="form-horizontal form-simple" method="post" action="register.php" novalidate="">
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                          <input type="text" class="form-control form-control-lg" name="user" placeholder="User Name" required>
                          <div class="form-control-position">
                            <i class="ft-user"></i>
                          </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left mb-1">
                          <input type="text" class="form-control form-control-lg" name="firstname" placeholder="Firstname" required>
                          <div class="form-control-position">
                            <i class="ft-chevrons-right"></i>
                          </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left mb-1">
                          <input type="text" class="form-control form-control-lg" name="lastname" placeholder="Lastname" required>
                          <div class="form-control-position">
                            <i class="ft-chevrons-right"></i>
                          </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left mb-1">
                          <input type="email" class="form-control form-control-lg" name="email" placeholder="Your Email Address" required>
                          <div class="form-control-position">
                            <i class="ft-mail"></i>
                          </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left mb-1">
                          <input type="$contactnumber" class="form-control form-control-lg" name="contactnumber" placeholder="Your Contact Number" required>
                          <div class="form-control-position">
                            <i class="ft-phone"></i>
                          </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left">
                          <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter Password" required>
                          <div class="form-control-position">
                            <i class="fa fa-key"></i>
                          </div>
                        </fieldset>

                        <button type="submit" name="save-user" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
                      </form>

                    </div>

                    <p class="text-center">Already have an account ? <a href="login.php" class="card-link">Login</a></p>
                  </div>

                </div>
              </div>
            </div>
          </section>

        </div><!-- END Content Body -->
     </div><!-- END Content Wrapper -->
   </div><!-- END Content Container -->



<?php
  include 'footer.php';
?>
