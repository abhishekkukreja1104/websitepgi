<?php
   include_once 'includes/dbh.php';


   if(isset($_GET['status'])){
       if($_GET['status']=="edit"){
           $sqlB = "select * from RADB where index_no =".$_GET['addpatient'];
           $sql1 = "select * from RAD1 where index_no =".$_GET['addpatient'];
           $sql5 = "select * from RAD5 where index_no =".$_GET['addpatient'];
           $resultB = mysqli_query($conn, $sqlB);
           $result1 = mysqli_query($conn, $sql1);
           $result5 = mysqli_query($conn, $sql5);
           $rowB=false;
           $row1=false;
           $row5=false;
      if($resultB!=false){
            $rowB = mysqli_fetch_array($resultB);
      }
      if($result1!=false)
        $row1 = mysqli_fetch_array($result1);
      if($result5!=false)
        $row5 = mysqli_fetch_array($result5);
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
     $sql="select filetitle from RADdoc where filetitle='$title'";
     $result = mysqli_query($conn, $sql);
     if($result->num_rows){
       $status="Title name already exists";
     }
     else{
       if($type == 'application/pdf' || $type == 'application/msword' || $type == 'application/vnd.ms-excel' || $type == 'text/plain' ){
         if(move_uploaded_file($tmp_name, "RADFiles/$title")){

               $sql = "insert into RADdoc values($index_no,'$name','RADFiles/$title','$title');";
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
      <title>Radiology</title>
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
      text-align: center;
      padding: 0px;
      padding-bottom: 10px;
      padding-top: 10px;
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
               <h1>Radiology</h1>
            </div>
         </div>
         <?php if(isset($_POST['submit1'])){
            if(isset($_GET['status'])){
                $link="status=edit&addpatient=".$_GET['addpatient'];
                header("Location: bonebiopsy.php?".$link);
            }
            else {
                $link="addpatient=".$_GET['addpatient'];
                header("Location: bonebiopsy.php?".$link);

            }
            }
            ?>
         <form method="post">
            <table class="table table-hover" align="center">
               <tr>
                  <td><strong>Radiology:</strong></td>
                  <td><input type="submit" name="submit1" value="Not Avaliable"></td>
               </tr>
            </table>
         </form>
         <form action ="includes/addradioproperties.php" method="POST">
            <table class="table table-hover" align="center">
               <tr>
                  <th style="font-size:23px"><font face="verdana">Radiograph</font></th>
                  <td style="font-size:23px" id="up"><font face="verdana"><strong>Base line</strong></font></td>
                  <td style="font-size:23px" id="up"><font face="verdana"><strong>1 year</strong></font></td>
                  <td style="font-size:23px" id="up"><font face="verdana"><strong>5 year</strong></font></td>
               </tr>
               <tr>
                  <th>Index Number</th>
                  <td>
                    <input type="text" name="addpatient" value=<?php echo $_GET[ 'addpatient']?> readonly>
                  </td>
               </tr>
               <tr>
                  <th>Skull lateral view</th>
                  <td>
                     <input type="text" name="skull_B" value = <?php echo ((isset($_GET['status'])) ? $rowB['skull'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="skull_1" value = <?php echo ((isset($_GET['status'])) ? $row1['skull'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="skull_5" value = <?php echo ((isset($_GET['status'])) ? $row5['skull'] : ""); ?>>
                  </td>
               </tr>
               <tr>
                  <th>Wrist AP view (Bone age)</th>
                  <td>
                     <input type="text" name="wrist_B" value = <?php echo ((isset($_GET['status'])) ? $rowB['wrist'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="wrist_1" value = <?php echo ((isset($_GET['status'])) ? $row1['wrist'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="wrist_5" value = <?php echo ((isset($_GET['status'])) ? $row5['wrist'] : ""); ?>>
                  </td>
               </tr>
               <tr>
                  <th>Left Forearm (AP view)</th>
                  <td>
                     <input type="text" name="left_r_B" value = <?php echo ((isset($_GET['status'])) ? $rowB['left_l'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="left_r_1" value = <?php echo ((isset($_GET['status'])) ? $row1['left_l'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="left_r_5" value = <?php echo ((isset($_GET['status'])) ? $row5['left_l'] : ""); ?>>
                  </td>
               </tr>
               <tr>
                  <th>Thoraic lumbar spine (AP view)</th>
                  <td>
                     <input type="text" name="thoraicAV_B" value = <?php echo ((isset($_GET['status'])) ? $rowB['thoraicAV'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="thoraicAV_1" value = <?php echo ((isset($_GET['status'])) ? $row1['thoraicAV'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="thoraicAV_5" value = <?php echo ((isset($_GET['status'])) ? $row5['thoraicAV'] : ""); ?>>
                  </td>
               </tr>
               <tr>
                  <th>Thoraic lumbar spine (Lateral view)</th>
                  <td>
                     <input type="text" name="thoraicLV_B" value = <?php echo ((isset($_GET['status'])) ? $rowB['thoraicLV'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="thoraicLV_1" value = <?php echo ((isset($_GET['status'])) ? $row1['thoraicLV'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="thoraicLV_5" value = <?php echo ((isset($_GET['status'])) ? $row5['thoraicLV'] : ""); ?>>
                  </td>
               </tr>
               <tr>
                  <th>X-ray Pelvis (AP view)</th>
                  <td>
                     <input type="text" name="XP_B" value = <?php echo ((isset($_GET['status'])) ? $rowB['XP'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="XP_1" value = <?php echo ((isset($_GET['status'])) ? $row1['XP'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="XP_5" value = <?php echo ((isset($_GET['status'])) ? $row5['XP'] : ""); ?>>
                  </td>
               </tr>
               <tr>
                  <th>X-ray Leg (AP view)</th>
                  <td>
                     <input type="text" name="XL_B" value = <?php echo ((isset($_GET['status'])) ? $rowB['XL'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="XL_1" value = <?php echo ((isset($_GET['status'])) ? $row1['XL'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="XL_5" value = <?php echo ((isset($_GET['status'])) ? $row5['XL'] : ""); ?>>
                  </td>
               </tr>
               <tr>
                  <th>Any other</th>
                  <td>
                     <input type="text" name="any_B" value = <?php echo ((isset($_GET['status'])) ? $rowB['any'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="any_1" value = <?php echo ((isset($_GET['status'])) ? $row1['any'] : ""); ?>>
                  </td>
                  <td>
                     <input type="text" name="any_5" value = <?php echo ((isset($_GET['status'])) ? $row5['any'] : ""); ?>>
                  </td>
               </tr>
               <?php
                  if(isset($_GET['status'])){
                    echo "<tr>";
                        echo "<th>status:</th>";
                        echo "<td><input type='text' name='status' value ='edit' readonly> </td>";
                    echo "</tr>";
                  }
                  ?>
            </table>
            <div id="submit">
                 <input type="submit" value="Save and Continue" align="center">
            </div>
         </form>
         <form action=<?php echo "radiology.php?addpatient=".$_GET['addpatient']?> method="POST" enctype="multipart/form-data">
            <div class="row">
	            <div class="col-md-12" align="center" id="heading">
	               <h3>Attached pdf file</h3>
	            </div>
         	</div>
         	<div class="row">
         		<div class="col-md-4"></div>
         		<div class="col-md-4">
		            <table class="table table-hover" align="center">
						<tr>
							<td><strong>Title:</strong></td>
							<th><input type="text" name="title" pattern = "[A-Za-z0-9]{1, }" title="avoid spaces in title" required></th>
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
            <div id="submit">
               <input type="submit" name="submit" value="Upload"/>
            </div>
            </tr>
         </form>
      </div>
   </body>
</html>
