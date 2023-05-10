<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>Basic Inputs - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
  </head>
<body>
  <?php
  require_once "../controller/news_controle.php";
  require_once "../controller/authcontrole.php";
  $news=new News;
  // if(isset($_FILES['fileToUpload'])&& $_FILES['fileToUpload']["size"]!=0&&isset($_POST["submit"])){
  // if(!empty($_POST["news"])&&isset($_POST["news"])){
  //   $img=$_FILES['fileToUpload'];
  //   $location="../img/".date("h,i,s").$img['name'];
  //    if(move_uploaded_file($img['tmp_name'],$location))
  //    {
  //      $news->add_news($_SESSION["email"],$_POST["news"],$location,$_SESSION["uid"]);
  //    }
  //   }
  // }
  print_r( $_SESSION["uid"]);
?>
    <div class="row">
                <div class="col-md-6"style="width: 100%;
    margin: 20px 10px;">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div>
                      <form method="post" enctype="multipart/form-data" style="display: flex;">
                        <input
                          type="file"
                          class="form-control"
                          id="defaultFormControlInput"
                          aria-describedby="defaultFormControlHelp"
                          name="fileToUpload"
                          style="width: 137px;"
                        />
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          aria-describedby="defaultFormControlHelp"
                          name="news"
                        />
                       
                    <input 
                    type="submit" class="btn btn-info" 
                    value="send" 
                          class="form-control"
                          id="defaultFormControlInput"
                          aria-describedby="defaultFormControlHelp"
                          name="submit">
                 </form>
                      </div>
                    </div>
                  </div>
                </div>
</div>
 <!-- Card Groups -->
 <?php
            //   require_once "../controller/news_controle.php";
              $news=new News;
              $allnews=$news->allnews();
              if(isset($_POST["delete1"])){
              $news->delete_news($_POST["delete"]);
              }
              $x=0;
              if(isset($_POST["update1"])){
                 $x=1;
                $res= $news->select_news($_POST["update"]);
                // print_r($res);
              }
              if(isset($_POST["save"])){
               
                 $img=$_FILES['fileToUpload'];
                 $location="../img/".date("h,i,s").$img['name'];
                  if(move_uploaded_file($img['tmp_name'],$location)){
                    
                     echo $news->update_news($_POST["news"],$location,$_POST["update"]);
                  }
                  $x=0;
              }
              ?>
               <div class="card-group mb-5" style='column-gap: 20px;
    display: grid;
    grid-template-columns: repeat(3,1fr);
    row-gap: 20px; margin: 10px 20px;'>
              <?php
               foreach($allnews as  $news){
              
                ?>
                 <div class="card">
                   <img class="card-img-top" src="<?php echo $news["img"]?>" alt="Card image cap" />
                   <div class="card-body">
                     <p class="card-text">
                     <?php echo $news["content"]?>
                     </p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted"><?php echo $news["name"]?></small>
                   </div>
                   <div style="display:flex;justify-content: space-between;">
                  
                  <form method="post">  
                    <input type="hidden" value="<?php echo $news["id"]?>" name="update">
                    
                    <button type="submit" class="btn btn-icon btn-outline-danger"  name="update1">
                   <i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip831312"></i>
                                </button>
                   </form>
                   <form method="post">  
                    <input type="hidden" value="<?php echo $news["id"]?>" name="delete">
                    <button type="submit" class="btn btn-icon btn-outline-danger"  name="delete1">
                                  <i class="bx bx-trash-alt"></i>
                                </button>
                   </form></div>
                   <!-- ///////////////// -->
                   <?php
                if($x==1){
                    ?>
<div id="editEmployeeModal" class="modal fade show" style="padding-right: 19px; display: block;" aria-modal="true">
 <div class="modal-dialog">
     <div class="modal-content">
     
             <div class="modal-header">						
                 <h4 class="modal-title">Edit post </h4>
             </div>
             <div class="modal-body">					
                 
           
             <form method="post" enctype="multipart/form-data" style="display: flex;">
                     <input
                       type="file"
                       class="form-control"
                       id="defaultFormControlInput"
                       aria-describedby="defaultFormControlHelp"
                       name="fileToUpload"
                       style="width: 198px;"
                       value='<?php echo $res[0]["img"]?>'
                     />
                     <input
                       type="text"
                       class="form-control"
                       id="defaultFormControlInput"
                       aria-describedby="defaultFormControlHelp"
                       name="news"
                       value='<?php echo $res[0]["content"]?>'
                     />
                     <input type="hidden" value="<?php echo $news["id"]?>" name="update">
                  
                         <input type="submit" class="btn btn-info" value="Save" name="save">
                    
         </form>
              
     </div>
 </div>
</div>
                    <?php
                }
                ?>
            <!-- /////////////////////// -->
                 </div>
                
                <?php
               }
              ?>
              </div>
            </div>
            <!-- / Content -->
</body>
</html>