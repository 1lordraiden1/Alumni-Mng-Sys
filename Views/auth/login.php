







<?php
require_once '../../Models/user.php';
if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        if($_POST['email']=='admin' && $_POST['password']=='123'){
          echo "<script>setTimeout(\"location.href = '../../dash.php';\",2000);</script>";
          exit();
        }
        $usrAcc = new user();

        $result = $usrAcc->login($_POST['email'], $_POST['password']);
        if ($result == 'Wrong password. Please try again. Redirecting...') {
            echo "<div class='alert alert-danger text-center' role='alert'>$result</div>";
            echo "<script>setTimeout(\"location.href = 'login.php';\",2000);</script>";
        }elseif($result == 'User not found. Try to register first. Redirecting...'){
            echo "<div class='alert alert-danger text-center' role='alert'>$result</div>";
            echo "<script>setTimeout(\"location.href = 'login.php';\",2000);</script>";
        } elseif($result == 'Logged in successfully. Redirecting...') {
            echo "<div class='alermnt alert-success text-center' role='alert'>$result</div>";
            echo "<script>setTimeout(\"location.href = '../user_index.php';\",2000);</script>";
             
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
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page   <div class=" center"><img src="../../assets/images/A.png" alt=""></div> -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/A.png" />
    
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        
        <div class="row w-100 m-0">
        
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            
            <div class=" col-12">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">  <div class=" center"><img src="../../assets/images/A.png" alt=""></div> </div>
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form method="POST">
                  <div class="form-group">
                    <label>Username or email *</label>
                    <?php
                    if (isset($error)){?>
                    <p> echo $error; </p>
                    <?php }
                    ?>
                    <input type="text" class="form-control p_input" id = "email"  name = "email">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="text" class="form-control p_input" id = "password" name = "password">
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" name = "submit" >Login</button>
                  </div>
                  
                 
                  <p class="sign-up">Don't have an Account?<a href="register.php"> Sign Up</a></p>
                </form>
              </div>
            </div>
          

            </div>
          
            
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>