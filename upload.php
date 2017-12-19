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
  ul {
      margin: 0 auto;
      margin-right: 44px;
      text-align: center;
  }
  li {
      display: inline;
      list-style: none;
  }
  a:link,a:visited
  {
      display:inline-block;
      margin-right: -4px;
      width: 360px;
      font-weight:bold;
      color:white;
      background-color:#1F4F96;
      text-align:center;
      padding:20px;
      height: 30px;
      text-decoration:none;
      text-transform:uppercase;
  }
  a:hover,a:active
  {
      background-color:black;
  }
</style>
<body>
  <div align="center" width = "1180px">
  <div id = "top" align="center">
    <img src="http://indianphptregistry.com/images/logo.png">
  </div>
  <ul>
    <li><a href="test.php">Add Patient</a></li>
    <li><a href="displaypatient.php">View Patient</a></li>
    <li><a href="documents.php">Manage Documents</a></li>
  </ul>
  <form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
    <div class="box" id="heading">
      <h1  align="center">Add new file</h1>
    </div>
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
      <th></th>
      <td><strong>Title: </strong></td>
      <td><input type="text" name="title" pattern = "[A-Za-z0-9]{1, }" title="avoid spaces in title" required></td>
    </tr>
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <td><strong>File:</strong></td>
      <td><input type="file" name="file" /></td>
    </tr>
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <?php
        echo '<th>';
        if(isset($status)){
          echo $status;
        }
        echo '</th>';
      ?>
    </tr>
    </table>
    <div class="box" id="heading">
      <input type="submit" name="submit" value="Upload and continue"/>
    </div>
    </tr>
  </form>
</body>﻿
</html>
