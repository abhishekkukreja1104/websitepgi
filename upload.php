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

<html>
<head>
  <title>Add new file</title>
  <link rel="stylesheet" type="text/css" href="form_style.css">
</head>
<style>
  body{
         background: #96B8DA;
         margin: 0;
         }
         #container{
         width: 1200px;
         margin: 0 auto;
         background: #ffffff;
         }
         #header{
         width: 100%;
         border-bottom: 1px solid #c7c7c7;
         background: #ffffff;
         }
         #logo{
         width: 100%;
         height: 130px;
         }
         #heading{
         width: 100%;
         background: #518B47;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
         color: white;
         }
         #submit{
         width: 100%;
         background: #518B47;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
         }
         #form{
         width: 100%;
         background: #ffffff;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
         color: black;
         }
         #navbar{
         height: 40px;
         clear: both;
         width: 100%;
         }
         #navbar ul{
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         }
         #navbar ul li{
         float: left;
         border-right: 1px solid #bbb;
         }
         #navbar ul li a{
         display: block;
         color: #ffffff;
         text-align: center;
         background-color:#1F4F96;
         width: 299px;
         padding-top: 20px;
         padding-bottom: 20px;
         font-weight:bold;
         text-decoration: none;
         }
         #navbar ul li a:hover{
         background-color: #111;
         }
         th{
         text-align: left;
         }
         td{
         padding-top: 10px;
         padding-left: 200px;
         }
         input[type = "text"]{
         display: inline-block;
         width: 400px;
</style>
<body>
  <div id="container">
         <div id="header">
            <div id="logo" align="center">
               <img src="http://indianphptregistry.com/images/logo.png">
            </div>
            <div id="navbar">
              <ul>
                <li><a href="../Layoutaddpatient.php">Add Patient</a></li>
                <li><a href="../displaypatient.php">View Patient</a></li>
                <li><a href="../displaypatient.php">Search Patient</a></li>
                <li><a href="../documents.php">Manage Documents</a></li>
              </ul>
            </div>
            <div align = "center" id = "heading">
                <h1>Add new file</h1>
          </div>
         </div>
        </div>
  <form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
    <table cellpadding="3" bgcolor="FFFFFF" align="center"
    cellspacing="20">
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th ></th>
      <th ></th>
    </tr>
    <tr>
      <th></th>
      <th></th>
      <td><strong>Title: </strong></td>
      <td><input type="text" name="title" pattern = "[A-Za-z0-9]{1, }" title="avoid spaces in title" required></td>
      <th></th>
    </tr>
    <tr>
      <th></th>
      <th></th>
      <td><strong>File:</strong></td>
      <td><input type="file" name="file" /></td>
      <th></th>
    </tr>
    <tr>
      <th></th>
      <th></th>
      <?php
        echo '<th>';
        if(isset($status)){
          echo $status;
        }
        echo '</th>';
      ?>
      <th></th>
    </tr>
    </table>
    <div align = "center" id="heading">
      <input type="submit" name="submit" value="Upload and continue"/>
    </div>
    </tr>
  </form>
</body>﻿
</html>
