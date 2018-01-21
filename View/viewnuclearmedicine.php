<?php
include_once 'includes/dbh.php';


if(isset($_GET['status'])){

        $sqlB = "select * from NUCB where index_no =".$_GET['addpatient'];
        $sql1 = "select * from NUC1 where index_no =".$_GET['addpatient'];
        $resultB = mysqli_query($conn, $sqlB);
        $result1 = mysqli_query($conn, $sql1);
        $rowB=false;
        $row1=false;
   if($resultB!=false){
         $rowB = mysqli_fetch_array($resultB);
         
   }
   if($result1!=false)
     $row1 = mysqli_fetch_array($result1);

 }


$index_no = $_GET['addpatient'];
if(isset($_POST['submit'])){
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$location = 'uploads';
$title = $_POST['title'];
$status = '' ;

if(isset($name)&&!empty($name)){
  $type = mime_content_type($tmp_name);
  $sql="select filetitle from NUCdoc where filetitle='$title'";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows){
    $status="Title name already exists";
  }
  else{
    if($type == 'application/pdf' || $type == 'application/msword' || $type == 'application/vnd.ms-excel' || $type == 'text/plain' ){
      if(move_uploaded_file($tmp_name, "NUCFiles/$title")){

            $sql = "insert into NUCdoc values($index_no,'$name','NUCFiles/$title','$title');";
            echo $sql;
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
      <title>Nuclear Medicine</title>
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
         text-align: left;
       }
       td{
         text-align: center;
       }
       #up{
         text-align: center;
       }
       #submit{
         width: 100%;
         background: #518B47;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
       }
       .table{
        margin-top: 1%;
        border: none;
       }
       .view th{
        color: #ffffff;
        text-align: center;
        background-color: #24596B;
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
         <a href="../Layoutaddpatient.php">
            <div class="col-md-3" align="center" id="nav">
               Add Patient
            </div>
         </a>
         <a href="../displaypatient.php">
            <div class="col-md-3" align="center" id="nav">
               View Patient
            </div>
         </a>
         <a href="../search.php">
            <div class="col-md-3" align="center" id="nav">
               Search Patient
            </div>
         </a>
         <a href="../documents.php">
            <div class="col-md-3" align="center" id="nav">
               Manage Documents
            </div>
         </a>
      </div>
      <div class="row">
         <div class="col-md-12" align="center" id="heading">
            <h1>Nuclear Medicine</h1>
         </div>
      </div>
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="includes/addnuclearmedicine.php" method = "POST" >
                    <table class="table table-hover" align="center">
                       <tr>
                          <th style="font-size:23px"><font face="verdana"></font></th>
                          <td style="font-size:23px"><font face="verdana"><strong>Base line</strong></font></td>
                          <td style="font-size:23px"><font face="verdana"><strong>1 year</strong></font></td>
                       </tr>
                       <tr>
                          <th>Index Number</th>
                          <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
                       </tr>
                       <tr>
                          <th>Scan Type:</th>
                          <td><input type="text" name="scan_type_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['scan_type'] : ""); ?>>
                          </td>
                          <td><input type="text" name="scan_type_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['scan_type'] : ""); ?>>
                          </td>
                       </tr>
                       <tr>
                          <th>Impression:</th>
                          <td><input type="text" name=impression_B rows="5" cols="20" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['impression'] : ""); ?>></td>
                          <td><input type="text" name=impression_1 rows="5" cols="20" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['impression'] : ""); ?>></td>
                       </tr>
                    </table>
                </form>
              </div>  
            </div>    
            <table class="table table-hover view" align="center">
             <thead> 
            <tr>  
              <th>File Title</th>
              <th>File Name</th>
              <th>View</th>
              <th>Delete</th>
            </tr> 
            </thead>
            <tbody> 
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
            </tbody>
            </table>
    </div>
</body>

</html>
