<?php
include_once 'includes/dbh.php';
$action = $_SERVER['PHP_SELF'];
if(isset($_POST['submit'])){
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$location = 'uploads';
$title = $_POST['title'];
$status = '' ;

if(isset($name)&&!empty($name)){
  $type = mime_content_type($tmp_name);
  $sql="select filetitle from STF where filetitle='$title'";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows){
    $status="Title name already exists";
  }
  else{
    if($type == 'application/pdf' || $type == 'application/msword' || $type == 'application/vnd.ms-excel' || $type == 'text/plain' ){
      if(move_uploaded_file($tmp_name, "files/$title")){
            $sql = "insert into STF values('$name','files/$title','$title');";
            mysqli_query($conn, $sql);
            $status = 'Successfully the (<strong>'.$name.'</strong>) file uploaded!';
      }else{
          $status = 'There was an error uploading the file.';
      }
    }
    else{
      $status = 'File format not supported';
    }
  }
}else{
      $status = 'Please choose a file';
  }

}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Upload</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <style>
      .table>tbody>tr>td,
      .table>tbody>tr>th {
        border-top: none;
      }
      body{
         font-family: 'Georgia';
         background: #96B8DA;
      }
      #logo{
         background: #ffffff;
      }
      .container{
         background-color: #ffffff;
      }
      #heading{
         font-weight: bold;
         background: #518B47;
         padding-bottom: 1%;
         color: white;
       }
       #nav{
        font-size: 16px;
        background: #1F4F96;
        color: #ffffff;
        font-weight: bold;
        padding: 2%;
       }
       #nav:hover{
         background-color: #111;
       }
       th{
         text-align: center;
         color: #ffffff;
         padding: 5%;
       }
       td{
         text-align: left;
       }
       #up{
         text-align: center;
       }
       #submit{
         width: 100%;
         padding-bottom: 0;
       }
       .table{
        margin-top: 8%;
        border: none;
       }
   </style>
   <body>
      <div class="container">
      <div class="row">
         <div class="col-md-12" id="logo" align="center">
            <img class="img-responsive" src="http://indianphptregistry.com/images/logo.png" alt="indianphptregistry">
         </div>
      </div>
      <div class="row">
         <a href="Layoutaddpatient.php">
            <div class="col-md-3" align="center" id="nav">
               Add Patient
            </div>
         </a>
         <a href="displaypatient.php">
            <div class="col-md-3" align="center" id="nav">
               View Patient
            </div>
         </a>
         <a href="search.php">
            <div class="col-md-3" align="center" id="nav">
               Search Patient
            </div>
         </a>
         <a href="documents.php">
            <div class="col-md-3" align="center" id="nav">
               Manage Documents
            </div>
         </a>
      </div>
      <div class="row">
         <div class="col-md-12" align="center" id="heading">
            <h1>Add new file</h1>
         </div>
      </div>
  <form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
    <table class="table table-hover" align="center">  
    <tr>
      <td><strong>Title: </strong></td>
      <td><input type="text" name="title" pattern = "[A-Za-z0-9]{1, }" title="avoid spaces in title" required></td>
    </tr>
    <tr>
      <td><strong>File:</strong></td>
      <td><input type="file" name="file" /></td>
    </tr>
    <tr>
      <?php
        echo '<th>';
        if(isset($status)){
          echo $status;
        }
        echo '</th>';
      ?>
    </tr>
    </table>
  </div>
    </div>
    <div class="row">
      <div class="col-md-12" align="center" id="submit">
        <input type="submit" name="submit" value="Upload and continue"/>
      </div>
    </div>
  </form>
</body>﻿
</html>
