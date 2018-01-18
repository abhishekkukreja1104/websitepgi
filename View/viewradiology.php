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



}
?>
<html>

<head>
    <title>Radiology</title>
    <link rel="stylesheet" type="text/css" href="form_style.css">
</head>
<style>
    body {
        background: #96B8DA;
        margin: 0;
    }

    #container {
        width: 1200px;
        margin: 0 auto;
        background: #ffffff;
        height: 900px;
    }

    #header {
        width: 100%;
        border-bottom: 1px solid #c7c7c7;
        background: #ffffff;
    }

    #logo {
        width: 100%;
        height: 130px;
    }

    #heading {
        width: 100%;
        background: #518B47;
        padding: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
        color: white;
    }

    #submit {
        width: 100%;
        background: #518B47;
        padding: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    #form {
        width: 100%;
        background: #ffffff;
        padding: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
        color: black;
    }

    #navbar {
        height: 40px;
        clear: both;
        width: 100%;
    }

    #up {
        text-align: center;
    }

    #navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    #navbar ul li {
        float: left;
        border-right: 1px solid #bbb;
    }

    #navbar ul li a {
        display: block;
        color: #ffffff;
        text-align: center;
        background-color: #1F4F96;
        width: 299px;
        padding-top: 20px;
        padding-bottom: 20px;
        font-weight: bold;
        text-decoration: none;
    }

    #navbar ul li a:hover {
        background-color: #111;
    }

    th {
        text-align: left;
    }

    td {
        padding-top: 10px;
        margin: 0 auto;
        align-items: center;
    }

    input[type="number"] {
        display: inline-block;
        width: 100px;
    }

    input[type="text"] {
        display: inline-block;
        width: 100px;
    }
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
        </div>
        <div id="content_area">
            <div id="form" align="center">
                <form action="radiology.php" method="post">
                	<div id="heading" align="center">
                        <h1>Radiology</h1>
                    </div>
              
                </form>

                <form action ="includes/addradioproperties.php" method="POST">
                        <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                            <tr>
                                <th style="font-size:23px"><font face="verdana">Radiograph</font></th>
                                <th style="font-size:23px"><font face="verdana">Base line</font></th>
                                <th style="font-size:23px"><font face="verdana">1 year</font></th>
                                <th style="font-size:23px"><font face="verdana">5 year</font></th>
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
                        <div class="box" id="heading">
                            <input type="submit" style="font-size: 15px" value="Submit and continue">
                        </div>
                    </form>
				    <table id = "customers">
                      <th>FileTitle</th>
                      <th>Filename</th>
                      <th>View</th>
                      <th>Delete</th>
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
                    </table>
            </div>
        </div>
    </div>
</body>

</html>
