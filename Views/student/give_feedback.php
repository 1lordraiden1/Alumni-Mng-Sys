<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Vertical Layouts - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

</head>
<body>
    <?php
       require_once '../Controllers/DBController.php';
        require_once "../Controllers/news_controle.php";
        session_start();
        $feed=new News;
    if(isset($_POST["feedback1"])){
        $feed->add_feedback($_SESSION["email"],$_POST["feedback"]);
    }
    ?>
<div class="row" style="width: 50%;
    margin-left: 25%;">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">feedback</h5>
                    </div>
                    <div class="card-body">
                      <form method="post">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-email">feedback</label>
                          <div class="input-group input-group-merge">
                            <textarea
                            name="feedback"
                              type="text"
                              id="basic-default-email"
                              class="form-control" 
                            ></textarea>
                          </div>
                         
                        </div>
                       
                        <button type="submit" class="btn btn-primary" name="feedback1">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
</div>
</body>
</html>