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
       }
       input[type = "text"]{
         display: inline-block;
         width: 100%;
         height: 25%;
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
                            <td><strong>Nuclear Medicine:</strong></td>
                            <td>
                                <input type="submit" name="submit1" value="Not Available">
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
                          <th>Scan Type:</th>
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
                          <th>Impression:</th>
                          <td><input name=impression_B rows="5" cols="20" value = <?php echo ((isset($_GET['status'])) ? $rowB['impression'] : ""); ?>></textarea></td>
                          <td><input name=impression_1 rows="5" cols="20" value = <?php echo ((isset($_GET['status'])) ? $row1['impression'] : ""); ?>></textarea></td>
                          <td></td>
                       </tr>
                       <tr>
                         <th>Any other scan:</th>
                         <td><input type="text" name="any_B"></td>
                         <td><input type="text" name="any_1"></td>
                       </tr>
                       <tr>
                         <th>Impression:</th>
                         <td><input type="text" name="imp_B"></td>
                         <td><input type="text" name="imp_1"></td>
                       </tr>
                    </table>
        <div class="row">
           <div class="col-md-12" align="center" id="heading">
              <h1>DXA</h1>
           </div>
        </div>       
        <table class="table table-hover" align="center">
               <tr>
                  <th style="font-size:20px"><font face="verdana">DXA</font></th>
                  <th></th>
                  <th></th>
                  <td style="font-size:20px"><font face="verdana"><strong>Baseline</strong></td>
                  <th></th>
                  <th></th>  
               </tr>
               <tr>
                  <th></th>
                  <td><strong>T-score</strong></td>
                  <td><strong>Z-score</strong></td>
                  <td><strong>BMD</strong></td>
                  <td><strong>BMC</strong></td>
                  <td><strong>TBS</strong></td>
               </tr>
               <tr>
                  <th>Hip(Neck)</th>
                  <td><input type="text" name="hipnB_T"></td>
                  <td><input type="text" name="hipnB_Z"></td>
                  <td><input type="text" name="hipnB_BMD"></td>
                  <td><input type="text" name="hipnB_BMC"></td>
                  <td><input type="text" name="hipnB_TBS"></td>
               </tr>
               <tr>
                  <th>Hip(Total)</th>
                  <td><input type="text" name="hiptB_T"></td>
                  <td><input type="text" name="hiptB_Z"></td>
                  <td><input type="text" name="hiptB_BMD"></td>
                  <td><input type="text" name="hiptB_BMC"></td>
                  <td><input type="text" name="hiptB_TBS"></td>
               </tr>
               <tr>
                  <th>Spine</th>
                  <td><input type="text" name="spineB_T"></td>
                  <td><input type="text" name="spineB_Z"></td>
                  <td><input type="text" name="spineB_BMD"></td>
                  <td><input type="text" name="spineB_BMC"></td>
                  <td><input type="text" name="spineB_TBS"></td>
               </tr>
               <tr>
                  <th>Radius</th>
                  <td><input type="text" name="radiusB_T"></td>
                  <td><input type="text" name="radiusB_Z"></td>
                  <td><input type="text" name="radiusB_BMD"></td>
                  <td><input type="text" name="radiusB_BMC"></td>
                  <td><input type="text" name="radiusB_TBS"></td>
               </tr>
               <tr>
                  <th>Whole body</th>
                  <td><input type="text" name="wholeB_T"></td>
                  <td><input type="text" name="wholeB_Z"></td>
                  <td><input type="text" name="wholeB_BMD"></td>
                  <td><input type="text" name="wholeB_BMC"></td>
                  <td><input type="text" name="wholeB_TBS"></td>
               </tr>
               <tr>
                  <th style="font-size:20px"><font face="verdana">DXA</font></th>
                  <th></th>
                  <th></th>
                  <td style="font-size:20px"><font face="verdana"><strong>1 year</strong></td>
                  <th></th>
                  <th></th>
               </tr>
               <tr>
                  <th></th>
                  <td><strong>T-score</strong></td>
                  <td><strong>Z-score</strong></td>
                  <td><strong>BMD</strong></td>
                  <td><strong>BMC</strong></td>
                  <td><strong>TBS</strong></td>
               </tr>
               <tr>
                  <th>Hip(Neck)</th>
                  <td><input type="text" name="hipn1_T"></td>
                  <td><input type="text" name="hipn1_Z"></td>
                  <td><input type="text" name="hipn1_BMD"></td>
                  <td><input type="text" name="hipn1_BMC"></td>
                  <td><input type="text" name="hipn1_TBS"></td>
               </tr>
               <tr>
                  <th>Hip(Total)</th>
                  <td><input type="text" name="hipt1_T"></td>
                  <td><input type="text" name="hipt1_Z"></td>
                  <td><input type="text" name="hipt1_BMD"></td>
                  <td><input type="text" name="hipt1_BMC"></td>
                  <td><input type="text" name="hipt1_TBS"></td>
               </tr>
               <tr>
                  <th>Spine</th>
                  <td><input type="text" name="spine1_T"></td>
                  <td><input type="text" name="spine1_Z"></td>
                  <td><input type="text" name="spine1_BMD"></td>
                  <td><input type="text" name="spine1_BMC"></td>
                  <td><input type="text" name="spine1_TBS"></td>
               </tr>
               <tr>
                  <th>Radius</th>
                  <td><input type="text" name="radius1_T"></td>
                  <td><input type="text" name="radius1_Z"></td>
                  <td><input type="text" name="radius1_BMD"></td>
                  <td><input type="text" name="radius1_BMC"></td>
                  <td><input type="text" name="radius1_TBS"></td>
               </tr>
               <tr>
                  <th>Whole body</th>
                  <td><input type="text" name="whole1_T"></td>
                  <td><input type="text" name="whole1_Z"></td>
                  <td><input type="text" name="whole1_BMD"></td>
                  <td><input type="text" name="whole1_BMC"></td>
                  <td><input type="text" name="whole1_TBS"></td>
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
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                        <table class="table table-hover" align="center">
                            <tr>
                                <td><strong>Title:</strong></td>
                                <th>
                                    <input type="text" name="title" pattern = "[A-Za-z0-9]{1, }" title="avoid spaces in title" required>
                                </th>
                            </tr>
                            <tr>
                                <td><strong>File:</strong></td>
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
