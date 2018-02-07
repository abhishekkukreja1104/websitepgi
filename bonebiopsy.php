<?php
   include_once 'includes/dbh.php';
   if(isset($_GET['status'])){
       if($_GET['status']=="edit"){
           $sqlB = "select * from BONB where index_no =".$_GET['addpatient'];
           $sql1 = "select * from BON1 where index_no =".$_GET['addpatient'];
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
     $sql="select filetitle from BONdoc where filetitle='$title'";
     $result = mysqli_query($conn, $sql);
     if($result->num_rows){
       $status="Title name already exists";
     }
     else{
       if($type == 'application/pdf' || $type == 'application/msword' || $type == 'application/vnd.ms-excel' || $type == 'text/plain' ){
         if(move_uploaded_file($tmp_name, "BONFiles/$title")){

               $sql = "insert into BONdoc values($index_no,'$name','BONFiles/$title','$title');";
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
<html lang="en">
   <head>
      <title>Bone Biopsy</title>
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
      text-align: center;
      }
      #year{
      width: 10%;  
      }
      #logout{
      font-size: 15px;
      text-align: right;
      margin-top: 5%;
    }
   </style>
      <body>
         <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6" id="logo" align="center">
                <img class="img-responsive" src="RARE_MBD.png" alt="RARE MBD">
              </div>
              <div class="col-md-3" id="logout">
                <a href="login.php">LOGOUT</a>
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
                  <h1>Bone Biopsy</h1>
               </div>
            </div>
            <?php if(isset($_POST['submit1'])){
               if(isset($_GET['status'])){
                   $link="status=edit&addpatient=".$_GET['addpatient'];
                   header("Location: nuclearmedicine.php?".$link);
               }
               else {
                   $link="addpatient=".$_GET['addpatient'];
                   header("Location: nuclearmedicine.php?".$link);

               }
               }
               ?>
            <form method="POST">
               <table class="table table-hover" align="center">
                  <tr>
                     <td><strong>Bone Biospy:</strong></td>
                     <td>
                        <input type="submit" name="submit1" value="Not Available">
                     </td>
                  </tr>
               </table>
            </form>
            <form action="includes/addbonebiopsy.php" method="POST">
               <table class="table table-hover" align="center">
                  <thead>
                  <tr>
                     <th></th>
                     <th style="font-size:23px" ><font face="verdana">Radiograph</font></th>
                     <th style="font-size:23px" id="up"><font face="verdana">Base line</font></th>
                     <th style="font-size:23px" id="up"><font face="verdana">1 year</font></th>
                     <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <th>Index Number</th>
                      <td>
                        <input type="text" name="addpatient" value=<?php echo $_GET[ 'addpatient']?> readonly>
                      </td>
                    </tr>
                    <tr>
                     <td>
                     </td>
                     <th>Histopathology no</th>
                     <td>
                        <input type="text" name="histo_B" value="<?php echo ((isset($_GET['status'])) ? $rowB[ 'histo_B'] : ""); ?>">
                     </td>
                     <td>
                        <input type="text" name="histo_1" value="<?php echo ((isset($_GET['status'])) ? $row1[ 'histo_B'] : ""); ?>">
                     </td>
                     <td></td>
                  </tr>
                  <tr>
                     <td></td>
                     <th>Site of bone biopsy</th>
                     <td>
                        <input type="text" name="site_B" value= "<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'site_B'] : ""); ?>">
                     </td>
                     <td>
                        <input type="text" name="site_1" value="<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'site_B'] : ""); ?>">
                     </td>
                     <td></td>
                  </tr>
                  <tr>
                     <td></td>
                     <th>Impression</th>
                     <td>
                        <input type="text" name="ih_B" value="<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'ih_B'] : ""); ?>">
                     </td>
                     <td>
                        <input type="text" name="ih_1" value="<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'ih_B'] : ""); ?>">
                     </td>
                     <td></td>
                  </tr>
                  <tr>
                     <td></td>
                     <th>BHMP</th>
                     <td>
                        <input type="text" name="bhmp_B" value="<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'bhmp_B'] : ""); ?>">
                     </td>
                     <td>
                        <input type="text" name="bhmp_1" value="<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'bhmp_B'] : ""); ?>">
                     </td>
                     <td></td>
                  </tr>
                  <tr>
                     <td></td>

                     <th>Site of BHMP</th>
                     <td>
                        <input type="text" name="BHMPsite_B" value= "<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'site_B'] : ""); ?>">
                     </td>
                     <td>
                        <input type="text" name="BHMPsite_1" value="<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'site_B'] : ""); ?>">
                     </td>
                     <td></td>
                  </tr>
                  <tr>
                     <td></td>
                     <th>Impression</th>
                     <td>
                        <input type="text" name="ib_B" value="<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'ib_B'] : ""); ?>">
                     </td>
                     <td>
                        <input type="text" name="ib_1" value="<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'ib_B'] : ""); ?>">
                     </td>
                     <td></td>
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
               <div id="submit">
                 <input type="submit" value="Save and Continue" align="center">
               </div>
            </form>
            <div class="row">
               <div class="col-md-12" align="center" id="heading">
                  <h3>Attached pdf file</h3>
               </div>
            </div>
            <form action=<?php echo "bonebiopsy.php?addpatient=".$_GET[ 'addpatient']?> method="POST" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
              <table class="table table-hover" align="center">

                  <tr>
                     <th>Title:</th>
                     <th>
                        <input type="text" name="title" required>
                     </th>
                  </tr>
                  <tr>
                     <th>File:</th>
                     <td>
                        <input type="file" name="file" />
                     </td>
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
                 <input type="submit" name="submit" value="Upload" />
               </div>
            </form>
         </div>
   </body>
</html>
