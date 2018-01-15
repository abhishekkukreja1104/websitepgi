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
                   <li><a href="Layoutaddpatient.php">Add Patient</a></li>
                   <li><a href="displaypatient.php">View Patient</a></li>
                   <li><a href="displaypatient.php">Search Patient</a></li>
                   <li><a href="documents.php">Manage Documents</a></li>
                </ul>
            </div>
        </div>
        <div id="content_area">
            <div id="form" align="center">
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
                	<div id="heading" align="center">
                        <h1>Radiology</h1>
                    </div>
                	<table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                		<tr>
                			<th>Radiology:</th>
                   	    	<td><input type="submit" name="submit1" value="Not Avaliable"></td>
                   		</tr>
                   	</table>
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
                            <input type="submit" style="font-size: 15px" value="Submit and continue">
                    </form>
										<form action=<?php echo "radiology.php?addpatient=".$_GET['addpatient']?> method="POST" enctype="multipart/form-data">
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
												<input type="submit" name="submit" value="Upload"/>
											</div>
											</tr>
										</form>


            </div>
        </div>
    </div>
</body>

</html>
