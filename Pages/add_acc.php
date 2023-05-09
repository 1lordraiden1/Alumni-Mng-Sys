<?php 
require_once '../Models/user.php';
require_once '../Models/role.php';
require_once '../Models/college.php';
//session_start();
        $usr = new user;
        $rol = new role;
        $col = new college;
        $rols = $rol->GetRoles();
        $colleges = $col->GetColleges();


if (isset($_POST['submit'])) {
  if (!empty($_POST['user_name']) && !empty($_POST['college_id']) && !empty($_POST['email']) && !empty($_POST['password']) && isset($_POST['role_id'])) {


      $result = $usr->register($_POST['user_name'],$_POST['email'], $_POST['password'],$_POST['role_id'],$_POST['college_id']);
      if ($result == 'User already exists. Try again') {
          echo "<div class='alert alert-danger text-center' role='alert'>$result</div>";
          echo "<script>setTimeout(\"location.href = 'acc.php';\",2000);</script>";
      } elseif ($result == 'Error') {
          echo "<div class='alert alert-danger text-center' role='alert'>$result</div>";
          echo "<script>setTimeout(\"location.href = 'acc.php';\",2000);</script>";
      } else {
          echo "<div class='alert alert-success text-center' role='alert'>$result</div>";
          echo "<script>setTimeout(\"location.href = 'acc.php';\",2000);</script>";
      }
      die;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/A.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><div class ="image">AMS</div></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><div class="image">A</div></a>
        </div>
        
      </nav>
      <!-- partial -->
      <div class = " container-fluid">
      <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                    <h4 class="card-title">Add User</h4>
                    
                    </div>
                    
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name = "user_name" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name = "email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name = "password" placeholder="Password">
                      </div>
                      <div class="mb-3">
                  <label for="email" class="form-label">Role</label>
                  <select class="form-control"name="role_id" id="cars">
                  <?php 
                          foreach($rols as $r){
                          ?>
                          <option value="<?php echo $r['role_id'] ?>"><?php echo $r['role_name']; ?></option>
                      
                          <?php
                          }
                          ?>     
                  
                  
                  </select>
                        </div>
                <div class="mb-3">
                  <label for="email" class="form-label">College</label>
                  <select class="form-control"name="college_id" id="cars">
                  <?php 
                          foreach($colleges as $c){
                          ?>
                          <option value="<?php echo $c['college_id'] ?>"><?php echo $c['college_name'] ?></option>
                      
                          <?php
                          }
                          ?>     
                  </select>
                </div>
                    
                      <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark" ><a  href = "acc.php">Cancle</a></button>
                    </form>
                  </div>
                </div>
              </div>
        
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>