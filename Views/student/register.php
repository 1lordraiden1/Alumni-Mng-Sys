<?php


$error='';
require_once '../../Models/user.php';
require_once '../../Models/role.php';
require_once '../../Models/college.php';
//session_start();
        $usr = new user;
        $rol = new role;
        $col = new college;
        $colleges = $col->GetColleges();
        $rols = $rol->GetRoles();
if (isset($_POST['submit'])) {
    if (!empty($_POST['user_name']) && !empty($_POST['college_id']) && !empty($_POST['email']) && !empty($_POST['password']) && isset($_POST['role_id'])) {
        /*
        $pp_Name = $_FILES['ProfilePic']['name'];
        $Tmp_ppName = $_FILES['ProfilePic']['tmp_name'];
        $pp_Error = $_FILES['ProfilePic']['error'];
        
        $pp_ext = strtolower(pathinfo($pp_Name, PATHINFO_EXTENSION));

        $allowedPP_ext = array('png', 'jpg', 'jpeg', 'gif');

        if (in_array($pp_ext, $allowedPP_ext)) {
            $uniq_ID = uniqid("ProfilePicture-", true);
            $new_PP_name = $uniq_ID . '.' . $pp_ext;

            $pp_upload_path = '../Views/uploads/profilePics/' . $new_PP_name;
            move_uploaded_file($Tmp_ppName, $pp_upload_path);
        }
        */
        
       

        
        $result = $usr->register($_POST['user_name'],$_POST['email'], $_POST['password'],$_POST['role_id'],$_POST['college_id']);
        if ($result == 'User already exists. Try again') {
            echo "<div class='alert alert-danger text-center' role='alert'>$result</div>";
            echo "<script>setTimeout(\"location.href = 'register.php';\",2000);</script>";
        } elseif ($result == 'Error') {
            echo "<div class='alert alert-danger text-center' role='alert'>$result</div>";
            echo "<script>setTimeout(\"location.href = 'register.php';\",2000);</script>";
        } else {
            echo "<div class='alert alert-success text-center' role='alert'>$result</div>";
            echo "<script>setTimeout(\"location.href = '../auth/login.php';\",2000);</script>";
        }
        die;
    }
}


?> 

<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="register.php" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <div class = " Image">
                    <img src="../../Pages/assets/images/A.png" alt="">
                    </div>
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Register</span>
                </a>
              </div>
              <!-- /Logo -->
            
<!-- ///////////////////// -->
<?php
    if($error!=''){
     ?>
    <p class="mb-3"><?php echo $error?></p>
     <?php
    } 
    ?>
              <form id="formAuthentication" class="mb-3"  method="POST"  enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="username" class="form-label">User name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="user_name"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
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
                 
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100" name = "submit">Sign up</button>
              </form>
<!-- ////////////////// -->
              <p class="text-center">
                <span>Already have an account?</span>
                <a href="../auth/login.php">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
