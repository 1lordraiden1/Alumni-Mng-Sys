<?php
  session_start();
 require_once "../../controller/event_controle.php";
 $events =new Event;
 $allevent=$events->allevent();
 $x;
 if(isset($_POST['event'])){
         $x=count($events->member($_POST["event"],$_POST["name"]));
         if($x==0) {
            $events->accept_event($_POST["event"],$_POST["name"]);
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
                                            <th>lecturer</th>
                                            <th>date</th>
                                            <th>adress</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    foreach($allevent as $event){
                                        ?>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong><?php echo $event["event"];?></strong></td>
                                            <?php $num=count($events->number( $event["event"]));?>
                                            <br>
                                            <td><?php echo $event["lecturer"];?></td>
                                            <td><?php echo $event["date"];?></td>
                                            <td><?php echo $event["address"];?></td>
                                            <?php
                                              if($num<=$event["number_student"]){
                                                ?>
                                                   <td><span class="badge bg-label-info me-1">active</span></td>
                                                <?php
                                              }else{
                                                ?>
                                                   <td><span class="badge bg-label-info me-1">COMPLETED</span></td>
                                                <?php

                                              }
                                            ?>
                                            <td>
                                            <form method="POST" >
                                                <input type="hidden" name="event" value='<?php echo  $event["event"]; ?>'>
                                                <input type="hidden" name="name" value='<?php echo $_SESSION["email"] ?>'>
                                                <?php
                                                   $x=count($events->member($event["event"], $_SESSION["email"]));
                                                  if($x>=1){  
                                                ?>
                                                  <button type="submit" class="btn btn-primary"name="accept"disabled >accept</button>
                                                <?php
                                                  }else{
                                                ?>
                                                  <button type="submit" class="btn btn-primary"name="accept" >accept</button>
                                                <?php

                                                  }
                                                  ?>
                                             </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                            </div>
                        </div>

</body>
</html>