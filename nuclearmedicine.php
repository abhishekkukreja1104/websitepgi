<?php
include_once 'includes/dbh.php';


if(isset($_GET['status'])){
    if($_GET['status']=="edit"){
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
         text-align: left;
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
        margin-left: 27%;
        width: 60%;
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
         <a href="displaypatient.php">
            <div class="col-md-3" align="center" id="nav">
               Search Patient
            </div>
         </a>
         <a href="documents">
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

                <?php if(isset($_POST['submit1'])){
                      if(isset($_GET['status'])){
                          $link="status=edit&addpatient=".$_GET['addpatient'];
                          header("Location: mutationanalysis.php?".$link);
                      }
                      else {
                          $link="addpatient=".$_GET['addpatient'];
                          header("Location: mutationanalysis.php?".$link);

                      }
                    }
                ?>
                <form method="post" id="frm">
                    <table class="table table-hover" align="center">                    
                       <tr>
                            <th>Nuclear Medicine:</th>

                            <td>
                                <input type="submit" name="submit1" value="No Avaliability">
                            </td>
                        </tr>
                    </table>
                </form>
                <form action="includes/addnuclearmedicine.php" method = "POST" >
                    <table class="table table-hover" align="center">
                      <thead>
                         <tr>
                            <th style="font-size:23px"><font face="verdana"></font></th>
                            <th style="font-size:23px" id="up"><font face="verdana">Base line</font></th>
                            <th style="font-size:23px" id="up"><font face="verdana">1 year</font></th>
                         </tr>
                      </thead> 
                       <tr>
                          <th>Index Number</th>
                          <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
                       </tr>
                       <tr>
                          <td>Scan Type:</td>
                          <td><select name="scan_type_B">
                              <option value="unknown">-Select-</option>
                              <option value="bone_scan">Bone Scan</option>
                              <option value="pet_scan">Pet Scan</option>
                              <option value="dota_noc">DOTA NOC</option>
                              <option value="dotatate">DOTATATE</option>
                          </select></td>
                          <td><select name="scan_type_1">
                              <option value="unknown">-Select-</option>
                              <option value="bone_scan">Bone Scan</option>
                              <option value="pet_scan">Pet Scan</option>
                              <option value="dota_noc">DOTA NOC</option>
                              <option value="dotatate">DOTATATE</option>
                          </select></td>
                          <td></td>
                       </tr>
                       <tr>
                          <td>Impression:</td>
                          <td><input name=impression_B rows="5" cols="20" value = <?php echo ((isset($_GET['status'])) ? $rowB['impression'] : ""); ?>></textarea></td>
                          <td><input name=impression_1 rows="5" cols="20" value = <?php echo ((isset($_GET['status'])) ? $row1['impression'] : ""); ?>></textarea></td>
                          <td></td>
                       </tr>
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
                
                    <form action=<?php echo "nuclearmedicine.php?addpatient=".$_GET['addpatient']?> method="POST" enctype="multipart/form-data">
                        <table class="table table-hover" align="center">
                            <tr>
                                <td><strong>Title: </strong></td>
                                <td>
                                    <input type="text" name="title" pattern = "[A-Za-z0-9]{1, }" title="avoid spaces in title" required>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>File name:</strong></td>
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
                             <div class="row">
                  <div class="col-md-12" align="center" id="submit">
                     <input type="submit" value="Upload" align="center">
                  </div>
               </div>
                        
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
