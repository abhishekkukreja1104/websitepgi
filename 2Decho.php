<?php
include_once 'includes/dbh.php';


if(isset($_GET['status'])){
    if($_GET['status']=="edit"){
        $sqlB = "select * from PULM where index_no =".$_GET['addpatient'];
        $resultB = mysqli_query($conn, $sqlB);
        $row=false;
   if($resultB!=false){
         $row = mysqli_fetch_array($resultB);

   }
 }
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
  $sql="select filetitle from ECHOdoc where filetitle='$title'";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows){
    $status="Title name already exists";
  }
  else{
    if($type == 'application/pdf' || $type == 'application/msword' || $type == 'application/vnd.ms-excel' || $type == 'text/plain' ){
      if(move_uploaded_file($tmp_name, "ECHOFiles/$title")){

            $sql = "insert into ECHOdoc values($index_no,'$name','ECHOFiles/$title','$title');";
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
      <title>2D echo Test</title>
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
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
       }
       .table{
        margin-top: 1%;
        width: 50%;
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
            <h1>2D echo Test</h1>
         </div>
      </div>
              <?php if(isset($_POST['submit1'])){
                    if(isset($_GET['status'])){
                        $link="status=edit&addpatient=".$_GET['addpatient'];
                        header("Location: pulmonary.php?".$link);
                    }
                    else {
                        $link="addpatient=".$_GET['addpatient'];
                        header("Location: pulmonary.php?".$link);

                    }
                  }
              ?>
                <form method="post" >
                      <table class="table table-hover" align="center"> 
                        <tr>
                            <th>2D-Echo Test:</th>
                            <td>
                                <input type="submit" name="submit1" value="Not Available">
                            </td>
                        </tr>
                    </table>
                </form>
                <form action = "includes/add2Decho.php" method="POST">

                      <table class="table table-hover" align="center"> 
                       <thead> 
                       <tr>
                          <th style="font-size:23px"><font face="verdana"></font></th>
                          <th id = "up" style="font-size:23px"><font face="verdana">Base line</font></th>
                          <th id = "up" style="font-size:23px"><font face="verdana">1 year</font></th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr>
                          <th>Index Number</th>
                          <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
                       </tr>
                       <tr>
                          <th>Impression:</th>
                          <td><input name=impression_B rows="5" cols="20" value=<?php echo ((isset($_GET[ 'status'])) ? $row[ 'impressionB'] : ""); ?>></input></td>
                          <td><input name=impression_1 rows="5" cols="20" value=<?php echo ((isset($_GET[ 'status'])) ? $row[ 'impression1'] : ""); ?>></input></td>
                       </tr>
                          <?php
                             if(isset($_GET['status'])){
                                echo "<tr>";
                                echo "<th>status:</th>";
                                echo "<td><input type='text' name='status' value ='edit' readonly> </td>";
                                echo "</tr>";
                         }
                         ?>
                         </tbody>
                    </table>
                     <div class="row">
                        <div class="col-md-12" align="center" id="submit">
                           <input type="submit" value="Save and Continue" align="center">
                        </div>
                     </div>
                </form>
                <div class="row">
                   <div class="col-md-12" align="center" id="heading">
                      <h3>Attached pdf file</h3>
                   </div>
                </div>
                    <form action=<?php echo "2Decho.php?addpatient=".$_GET['addpatient']?> method="POST" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                          <table class="table table-hover" align="center"> 
                            <tr>
                                <th><strong>Title:</strong></th>
                                <th>
                                    <input type="text" name="title" required>
                                </th>
                            </tr>
                            <tr>
                                <th><strong>File:</strong></th>
                                <td>
                                    <input type="file" name="file" />
                                </td>
                            </tr>
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
                             <input type="submit" name="submit" value="Upload"/>
                          </div>
                        </div>
                    </form>
            </div>
</body>

</html>
