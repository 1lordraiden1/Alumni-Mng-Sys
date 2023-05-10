<?php
  session_start();
 require_once "../Controllers/DBController.php";
 require_once "../../Models/event.php";
 require_once "../../Models/user.php";
$use= new user;
$def_id=20;
 $eve =new event;
 $allevent=$eve->GetEvents();
 $x;
 if(isset($_POST['event'])){
         $x=count($eve->member($_POST["event"],$_POST["name"]));
         if($x==0) {
            $eve->accept_event($_POST["event"],$_POST["name"]);
         }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Tables - Basic Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

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
<div class="content-wrapper">
 
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">events /</span></h4>

                         <div class="card">
                            <h5 class="card-header">events</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>event</th>
                                            <th>Event Name</th>
                                            <th>Place</th>
                                            <th>Day</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php 
                        foreach($allevent as $e){
      
                        ?>
                        <tr>
                            <td>
                              <span class="pl-2"><?php echo $e['event_id'] ?></span>
                            </td>
                            <td> <?php echo $e['event_name'] ?> </td>
                            <td>  <?php echo $e['place'] ?> </td>
                            <td> <?php  echo $e['day'] ?> </td>
                            <td>
                              <?php echo  $e['time']  ?>
                            </td>
                            <td>
                            

                            </div>
                            </td>
                          </tr>
                        <?php 
                        }?>
                            
                                            
                                        </tr>

                                    </tbody>
                                        <?php
                                    
                                    ?>
                                </table>
                            </div>
                        </div>
                            </div>
                        </div>

</body>
</html>