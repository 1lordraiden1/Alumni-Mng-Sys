
<?php
require_once '../../Models/user.php';
require_once '../../Models/role.php';
session_start();
if (isset($_POST['submit'])) {
    if (!empty($_POST['user_name']) && !empty($_POST['college_id']) && !empty($_POST['email']) && !empty($_POST['password']) && isset($_FILES['role_id'])) {
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
        $usr = new user();
        $rol = new role;
       

        
        $result = $usr->register($_POST['user_name'],$_POST['email'], $_POST['password'],$_POST['role_id'],$_POST['college_id']);
        if ($result == 'User already exists. Try again') {
            echo "<div class='alert alert-danger text-center' role='alert'>$result</div>";
            echo "<script>setTimeout(\"location.href = 'signup.php';\",2000);</script>";
        } elseif ($result == 'Error') {
            echo "<div class='alert alert-danger text-center' role='alert'>$result</div>";
            echo "<script>setTimeout(\"location.href = 'signup.php';\",2000);</script>";
        } else {
            echo "<div class='alert alert-success text-center' role='alert'>$result</div>";
            echo "<script>setTimeout(\"location.href = 'login.php';\",2000);</script>";
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
    <!-- End plugin css for this page -->
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
                <h3 class="card-title text-left mb-3">Register</h3>
                <form>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control p_input" name = "user_name">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name ="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name ="password" class="form-control p_input">
                  </div>

                  <div class="d-flex">
                    <div class="row">
                    <div class="dropdown">
                  <button class="btn btn-facebook mr-2 col" type="button" name = "role_id" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Select Role  </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <?php foreach($colleges as $clo){ ?>                      
                      <a class="dropdown-item" href="#"><?php echo $clo[0]['college_name'] ; ?></a> <?php 
                      }
                        ?>
                                                   
                    </div>                              
                  </div>
                  <div class="dropdown">
                  <button class="btn btn-google col" type="button" name = "college_id" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Select College </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                          <a class="dropdown-item" href="#">Action</a>
                         
                        </div>
                  </div>
           
                    </div>
                    
                  
                  
                  </div>
                  
                 
                          <!--<a class="dropdown-item" href="#">Action</a>   -->
                          <?php 
                                                  
                        

                          ?>

                       

                         
                        
                      
                     
                                                              
                     
                      
                  
                  <br>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" name ="submit" >Login</button>
                  </div>
                
                  
                  <p class="sign-up text-center">Already have an Account?<a href="login.php"> Sign In</a></p>
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


