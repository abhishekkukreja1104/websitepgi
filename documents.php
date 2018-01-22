<?php
include_once 'includes/dbh.php';
  if(isset($_GET['delete'])){
    $value = $_GET['delete'];
    $sql="delete from STF where filepath='$value'";
    mysqli_query($conn, $sql);
    unlink($_GET['delete']);
    echo $sql;

  }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Manage Documents</title>
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
         background-color: #24596B;
         color: #ffffff;
         padding: 5%;
       }
       td{
         text-align: center;
       }
       #up{
         text-align: center;
       }
       #submit{
         width: 100%;
         padding: 2%;
         font-size: 19px;
       }
       .table{
        margin-top: 1%;
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
            <h1>Manage Documents</h1>
         </div>
      </div>
    <div class="row">
        <div class="col-md-12" align="center" id="submit">
            <a href="upload.php" id="docanc">Add new Document</a>
        </div>
    </div>
<table class="table table-hover" align="center">
  <tr>
      <th width="30%">File Title</th>
      <th width="30%">File Name</th>
      <th width="20%">View</th>
      <th width="20%">Delete</th>
  </tr>
  <?php
    $sql = "select * from STF";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)): ?>
      <tr>
        <td><?php echo $row['filetitle']; ?></td>
        <td><?php echo $row['filename']; ?></td>
        <td><a id="edit_link" href=<?php echo $row['filepath'];?>>View</a></td>
        <td><a id="edit_link" href=<?php echo "documents.php?delete=".$row['filepath'];?>>delete</a></td>
      </tr>
  <?php endwhile ?>
  </table>


</div>
</body>
</html>
