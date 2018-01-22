<?php
include_once 'includes/dbh.php';


if(isset($_GET['delete'])){
  $value = $_GET['delete'];
  $sql="delete from RADdoc where filepath='$value'";
  mysqli_query($conn, $sql);
  unlink($_GET['delete']);
  echo $sql;

}
if(isset($_GET['status'])){

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
            <h1>Radiology</h1>
         </div>
      </div>

                <form action ="includes/addradioproperties.php" method="POST">
                    <table class="table table-hover" align="center">
                            <tr>
                                <th style="font-size:23px"><font face="verdana">Radiograph</font></th>
                                <td style="font-size:23px"><font face="verdana"><strong>Base line</strong></font></td>
                                <td style="font-size:23px"><font face="verdana"><strong>1 year</strong></font></td>
                                <td style="font-size:23px"><font face="verdana"><strong>5 year</strong></font></td>
                            </tr>

			                      <tr>
			                        <th>Index Number</th>
			                        <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
			                      </tr>
                            <tr>
                                <th>Skull lateral view</th>
                                <td>
                                    <input type="text" name="skull_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['skull'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="skull_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['skull'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="skull_5" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['skull'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>Wrist AP view (Bone age)</th>
                                <td>
                                    <input type="text" name="wrist_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['wrist'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="wrist_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['wrist'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="wrist_5" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['wrist'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>Left Forearm (AP view)</th>
                                <td>
                                    <input type="text" name="left_r_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['left_l'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="left_r_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['left_l'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="left_r_5" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['left_l'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>Thoraic lumbar spine (AP view)</th>
                                <td>
                                    <input type="text" name="thoraicAV_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['thoraicAV'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="thoraicAV_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['thoraicAV'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="thoraicAV_5" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['thoraicAV'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>Thoraic lumbar spine (Lateral view)</th>
                                <td>
                                    <input type="text" name="thoraicLV_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['thoraicLV'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="thoraicLV_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['thoraicLV'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="thoraicLV_5" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['thoraicLV'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>X-ray Pelvis (AP view)</th>
                                <td>
                                    <input type="text" name="XP_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['XP'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="XP_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['XP'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="XP_5" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['XP'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>X-ray Leg (AP view)</th>
                                <td>
                                    <input type="text" name="XL_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['XL'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="XL_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['XL'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="XL_5" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['XL'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>Any other</th>
                                <td>
                                    <input type="text" name="any_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['any'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="any_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['any'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="any_5" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['any'] : ""); ?>>
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
                    </form>

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
                        $sql = "select * from RADdoc where index_no = ".$_GET['addpatient'];
                        $result = mysqli_query($conn, $sql);
                        $index_no = $_GET['addpatient'];
                        if($result){
                        while($row = mysqli_fetch_array($result)): ?>
                          <tr>
                            <td><?php echo $row['filetitle']; ?></td>
                            <td><?php echo $row['filename']; ?></td>
                            <td><a id="edit_link" href=<?php echo $row['filename'];?>>View</a></td>
                            <td><a id="edit_link" href=<?php echo "viewradiology.php?addpatient=$index_no&delete=".$row['filepath'];?>>delete</a></td>
                          </tr>
                      <?php endwhile;
                    } ?>
            </tbody>
            </table>

            </div>
    </div>
</body>

</html>
