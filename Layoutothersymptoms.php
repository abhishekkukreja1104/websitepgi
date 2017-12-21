<?php
	include_once 'includes/dbh.php';

	if(isset($_GET['status'])){
		if($_GET['status']=="edit"){
			$sql3 = "select * from OS3M where index_no =".$_GET['addpatient'];
			$sql6 = "select * from OS6M where index_no =".$_GET['addpatient'];
			$sql1 = "select * from OS1Y where index_no =".$_GET['addpatient'];
			$sql2 = "select * from OS2Y where index_no =".$_GET['addpatient'];
			$sql5 = "select * from OS5Y where index_no =".$_GET['addpatient'];
      $result3 = mysqli_query($conn, $sql3);
      $result6 = mysqli_query($conn, $sql6);
      $result1 = mysqli_query($conn, $sql1);
      $result2 = mysqli_query($conn, $sql2);
      $result5 = mysqli_query($conn, $sql5);
      $row3=false;
      $row6=false;
      $row1=false;
      $row2=false;
      $row5=false;

      if($result3!=false){
        $row3 = mysqli_fetch_array($result3);
      }
      if($result6!=false){
        $row6 = mysqli_fetch_array($result6);
      }
      if($result1!=false)
        $row1 = mysqli_fetch_array($result1);
      if($result2!=false)
        $row2 = mysqli_fetch_array($result2);
      if($result5!=false)
        $row5 = mysqli_fetch_array($result5);

		}

	}

?>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="form_style.css">
</head>
<style>
	body{
         background: #96B8DA;
         margin: 0;
         }
         #container{
         width: 1200px;
         margin: 0 auto;
         background: #ffffff;
         }
         #header{
         width: 100%;
         border-bottom: 1px solid #c7c7c7;
         background: #ffffff;
         }
         #logo{
         width: 100%;
         height: 130px;
         }
         #heading{
         width: 100%;
         background: #518B47;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
         color: white;
         }
         #submit{
         width: 100%;
         background: #518B47;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
         }
         #form{
         width: 100%;
         background: #ffffff;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
         color: black;
         }
         #navbar{
         height: 40px;
         clear: both;
         width: 100%;
         }
         #navbar ul{
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         }
         #navbar ul li{
         float: left;
         border-right: 1px solid #bbb;
         }
         #navbar ul li a{
         display: block;
         color: #ffffff;
         text-align: center;
         background-color:#1F4F96;
         width: 299px;
         padding-top: 20px;
         padding-bottom: 20px;
         font-weight:bold;
         text-decoration: none;
         }
         #navbar ul li a:hover{
         background-color: #111;
         }
         th{
         text-align: left;
         }
         td{
         padding-top: 10px;
         margin: 0 auto;
         align-items: center;
         }
         input[type = "text"]{
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
                  <li><a href="documents">Manage Documents</a></li>
               </ul>
            </div>
         </div>
         <div id="content_area">
            <div id="heading" align="center">
               <h1>Other Symptoms</h1>
            </div>
            <div id="form" align="center">
	<form action="includes/addothersymptoms.php" method="POST">
		<table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
		<tr>
			<th style="font-size: 20px"><font face="verdana">Examinations</font></th>
			<th></th>
			<th></th>
			<th></th>
			<th style="font-size: 20px"><font face="verdana">Follow-up</font></th>
		</tr>
		<tr>
			<th></th>
			<th style="font-size: 20px"><font face="verdana">Duration</font></th>
			<th id="up">&nbsp;&nbsp;3 months</th>
			<th id="up">&nbsp;&nbsp;6 months</th>
			<th id="up">&emsp;&nbsp;1 year</th>
			<th id="up">&emsp;&nbsp;2 year</th>
			<th id="up">&emsp;&nbsp;5 year</th>
		</tr>
		<tr>
			<th>Index Number</th>
			<td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?>  readonly></td>

		</tr>
		<tr>
			<th>Asymptomatic</th>
			<td align="center">Y/N</td>
			<td><select name="Asymptomatic_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Asymptomatic'] : ""); ?>>
				<option>--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Asymptomatic_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Asymptomatic'] : ""); ?>>
				<option>--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Asymptomatic_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Asymptomatic'] : ""); ?>>
				<option>--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Asymptomatic_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Asymptomatic'] : ""); ?>>
				<option >--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Asymptomatic_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Asymptomatic'] : ""); ?>>
				<option>--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Bone pain</th>
			<td align="center">Y/N</td>
			<td><select name="Bone_pain_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Bone_pain'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Bone_pain_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Bone_pain'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Bone_pain_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Bone_pain'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Bone_pain_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Bone_pain'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Bone_pain_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Bone_pain'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Backache</th>
			<td align="center">Y/N</td>
			<td><select name="Backache_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Backache'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Backache_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Backache'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Backache_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Backache'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Backache_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Backache'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Backache_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Backache'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Bony Swelling</th>
			<td align="center">Y/N</td>
			<td><select name="Bony_Swelling_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Bony_Swelling'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Bony_Swelling_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Bony_Swelling'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Bony_Swelling_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Bony_Swelling'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Bony_Swelling_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Bony_Swelling'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Bony_Swelling_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Bony_Swelling'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Cripple</th>
			<td align="center">Y/N</td>
			<td><select name="Cripple_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Cripple'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cripple_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Cripple'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cripple_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Cripple'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cripple_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Cripple'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cripple_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Cripple'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Fracture(s)</th>
			<td align="center">Y/N</td>
			<td><select name="Fracture_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Fracture'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Fracture_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Fracture'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Fracture_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Fracture'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Fracture_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Fracture'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Fracture_5" value = <?php echo ((isset($_GET['status'])) ? $row6['Fracture'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Anorexia</th>
			<td align="center">Y/N</td>
			<td><select name="Anorexia_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Anorexia'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Anorexia_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Anorexia'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Anorexia_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Anorexia'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Anorexia_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Anorexia'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Anorexia_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Anorexia'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Constipation</th>
			<td align="center">Y/N</td>
			<td><select name="Constipation_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Constipation'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Constipation_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Constipation'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Constipation_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Constipation'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Constipation_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Constipation'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Constipation_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Constipation'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Loss of teeth</th>
			<td align="center">Y/N</td>
			<td><select name="Loss_of_teeth_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Loss_of_teeth'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Loss_of_teeth_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Loss_of_teeth'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Loss_of_teeth_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Loss_of_teeth'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Loss_of_teeth_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Loss_of_teeth'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Loss_of_teeth_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Loss_of_teeth'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Cataract</th>
			<td align="center">Y/N</td>
			<td><select name="Cataract_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Cataract'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cataract_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Cataract'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cataract_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Cataract'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cataract_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Cataract'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cataract_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Cataract'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Renal Colic</th>
			<td align="center">Y/N</td>
			<td><select name="Renal_Colic_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Renal_Colic'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Renal_Colic_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Renal_Colic'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Renal_Colic_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Renal_Colic'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Renal_Colic_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Renal_Colic'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Renal_Colic_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Renal_Colic'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Round face</th>
			<td align="center">Y/N</td>
			<td><select name="Round_face_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Round_face'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Round_face_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Round_face'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Round_face_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Round_face'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Round_face_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Round_face'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Round_face_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Round_face'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Short stature</th>
			<td align="center">Y/N</td>
			<td><select name="Short_stature_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Short_stature'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Short_stature_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Short_stature'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Short_stature_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Short_stature'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Short_stature_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Short_stature'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Short_stature_5" value = <?php echo ((isset($_GET['status'])) ? $row6['Short_stature'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Cafe-au-lait-macule</th>
			<td align="center">Y/N</td>
			<td><select name="Cafe_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Cafe'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cafe_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Cafe'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cafe_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Cafe'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cafe_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Cafe'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Cafe_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Cafe'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Blue sclera</th>
			<td align="center">Y/N</td>
			<td><select name="Blue_sclera_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Blue_sclera'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Blue_sclera_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Blue_sclera'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Blue_sclera_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Blue_sclera'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Blue_sclera_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Blue_sclera'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Blue_sclera_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Blue_sclera'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Dentinogenesis imperfecta</th>
			<td align="center">Y/N</td>
			<td><select name="Dentinogenesis_imperfecta_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Dentinogenesis_imperfecta'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Dentinogenesis_imperfecta_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Dentinogenesis_imperfecta'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Dentinogenesis_imperfecta_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Dentinogenesis_imperfecta'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Dentinogenesis_imperfecta_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Dentinogenesis_imperfecta'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Dentinogenesis_imperfecta_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Dentinogenesis_imperfecta'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Acoustic damage(deafness) (Conductive/Sensor name deafness)</th>
			<td align="center">Y/N</td>
			<td><select name="Acoustic_damage_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Acoustic_damage'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Acoustic_damage_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Acoustic_damage'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Acoustic_damage_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Acoustic_damage'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Acoustic_damage_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Acoustic_damage'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Acoustic_damage_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Acoustic_damage'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Deformity UL</th>
			<td align="center">Y/N</td>
			<td><select name="UL_3" value = <?php echo ((isset($_GET['status'])) ? $row3['UL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="UL_6" value = <?php echo ((isset($_GET['status'])) ? $row6['UL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="UL_1" value = <?php echo ((isset($_GET['status'])) ? $row1['UL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="UL_2" value = <?php echo ((isset($_GET['status'])) ? $row2['UL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="UL_5" value = <?php echo ((isset($_GET['status'])) ? $row5['UL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Deformity LL(Genuvarum/Genuvalgum/Wind swift/None)</th>
			<td align="center">Y/N</td>
			<td><select name="LL_3" value = <?php echo ((isset($_GET['status'])) ? $row3['LL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="LL_6" value = <?php echo ((isset($_GET['status'])) ? $row6['LL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="LL_1" value = <?php echo ((isset($_GET['status'])) ? $row1['LL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="LL_2" value = <?php echo ((isset($_GET['status'])) ? $row2['LL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="LL_5" value = <?php echo ((isset($_GET['status'])) ? $row5['LL'] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Deformity Spine(kyphosis/Scoliosis)</th>
			<td align="center">Y/N</td>
			<td><select name="spine_3" value = <?php echo ((isset($_GET['status'])) ? $row3["spine"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="spine_6" value = <?php echo ((isset($_GET['status'])) ? $row6["spine"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="spine_1" value = <?php echo ((isset($_GET['status'])) ? $row1["spine"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="spine_2" value = <?php echo ((isset($_GET['status'])) ? $row2["spine"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="spine_5" value = <?php echo ((isset($_GET['status'])) ? $row5["spine"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Hyper extensibility of the joints</th>
			<td align="center">Y/N</td>
			<td><select name="Hyper_extensibility_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Hyper_extensibility"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hyper_extensibility_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Hyper_extensibility"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hyper_extensibility_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Hyper_extensibility"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hyper_extensibility_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Hyper_extensibility"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hyper_extensibility_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Hyper_extensibility"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Syndactyly</th>
			<td align="center">Y/N</td>
			<td><select name="Syndactyly_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Syndactyly"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Syndactyly_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Syndactyly"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Syndactyly_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Syndactyly"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Syndactyly_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Syndactyly"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Syndactyly_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Syndactyly"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Tufting of phalanges</th>
			<td align="center">Y/N</td>
			<td><select name="Tufting_of_phalanges_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Tufting_of_phalanges"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Tufting_of_phalanges_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Tufting_of_phalanges"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Tufting_of_phalanges_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Tufting_of_phalanges"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Tufting_of_phalanges_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Tufting_of_phalanges"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Tufting_of_phalanges_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Tufting_of_phalanges"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Short 4<sup>th</sup> metacarpal</th>
			<td align="center">Y/N</td>
			<td><select name="Short_4_th_metacarpal_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Short_4_th_metacarpal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Short_4_th_metacarpal_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Short_4_th_metacarpal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Short_4_th_metacarpal_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Short_4_th_metacarpal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Short_4_th_metacarpal_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Short_4_th_metacarpal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Short_4_th_metacarpal_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Short_4_th_metacarpal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Short 4<sup>th</sup> metatarsal</th>
			<td align="center">Y/N</td>
			<td><select name="Tarsal_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Tarsal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Tarsal_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Tarsal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Tarsal_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Tarsal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Tarsal_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Tarsal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Tarsal_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Tarsal"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Upper Segment/Lower Segment (Cm)</th>
			<td align="center">Y/N</td>
			<td><input type="text" name="Upper_Segment_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Upper_Segment"] : ""); ?>>
			</td>
			<td><input type="text" name="Upper_Segment_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Upper_Segment"] : ""); ?>>
			</td>
			<td><input type="text" name="Upper_Segment_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Upper_Segment"] : ""); ?>>
			</td>
			<td><input type="text" name="Upper_Segment_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Upper_Segment"] : ""); ?>>
			</td>
			<td><input type="text" name="Upper_Segment_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Upper_Segment"] : ""); ?>>
			</td>
		</tr>
		<tr>
			<th>Arched palate</th>
			<td align="center">Y/N</td>
			<td><select name="Arched_palate_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Upper_Segment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Arched_palate_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Upper_Segment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Arched_palate_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Upper_Segment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Arched_palate_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Upper_Segment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Arched_palate_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Upper_Segment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Waddling gait</th>
			<td align="center">Y/N</td>
			<td><select name="Waddling_gait_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Waddling_gait"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Waddling_gait_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Waddling_gait"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Waddling_gait_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Waddling_gait"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Waddling_gait_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Waddling_gait"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Waddling_gait_5" value = <?php echo ((isset($_GET['status'])) ? $row3["Waddling_gait"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr><tr>
			<th>Exostosis</th>
			<td align="center">Y/N</td>
			<td><select name="Exostosis_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Exostosis"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Exostosis_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Exostosis"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Exostosis_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Exostosis"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Exostosis_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Exostosis"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Exostosis_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Exostosis"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Hypoplasia of mandible</th>
			<td align="center">Y/N</td>
			<td><select name="Hypoplasia_of_mandible_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Hypoplasia_of_mandible"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hypoplasia_of_mandible_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Hypoplasia_of_mandible"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hypoplasia_of_mandible_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Hypoplasia_of_mandible"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hypoplasia_of_mandible_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Hypoplasia_of_mandible"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hypoplasia_of_mandible_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Hypoplasia_of_mandible"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Monostotic</th>
			<td align="center">Y/N</td>
			<td><select name="Monostotic_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Monostotic"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Monostotic_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Monostotic"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Monostotic_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Monostotic"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Monostotic_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Monostotic"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Monostotic_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Monostotic"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Polyostotic lesion</th>
			<td align="center">Y/N</td>
			<td><select name="Polyostotic_lesion_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Polyostotic_lesion"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Polyostotic_lesion_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Polyostotic_lesion"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Polyostotic_lesion_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Polyostotic_lesion"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Polyostotic_lesion_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Polyostotic_lesion"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Polyostotic_lesion_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Polyostotic_lesion"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Galactorhoea</th>
			<td align="center">Y/N</td>
			<td><select name="Hyperprolactinaemia_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Hyperprolactinaemia"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hyperprolactinaemia_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Hyperprolactinaemia"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hyperprolactinaemia_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Hyperprolactinaemia"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hyperprolactinaemia_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Hyperprolactinaemia"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hyperprolactinaemia_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Hyperprolactinaemia"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Weakness & Fatiguability</th>
			<td align="center">Y/N</td>
			<td><select name="Weakness_Fatiguability_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Weakness_Fatiguability"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Weakness_Fatiguability_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Weakness_Fatiguability"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Weakness_Fatiguability_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Weakness_Fatiguability"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Weakness_Fatiguability_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Weakness_Fatiguability"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Weakness_Fatiguability_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Weakness_Fatiguability"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Joint pain</th>
			<td align="center">Y/N</td>>
			<td><select name="Joint_pain_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Joint_pain"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Joint_pain_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Joint_pain"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Joint_pain_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Joint_pain"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Joint_pain_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Joint_pain"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Joint_pain_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Joint_pain"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Visual impairment</th>
			<td align="center">Y/N</td>
			<td><select name="Visual_impairment_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Visual_impairment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Visual_impairment_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Visual_impairment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Visual_impairment_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Visual_impairment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Visual_impairment_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Visual_impairment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Visual_impairment_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Visual_impairment"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Precocious puberty</th>
			<td align="center">Y/N</td>
			<td><select name="Precocious_puberty_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Precocious_puberty"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Precocious_puberty_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Precocious_puberty"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Precocious_puberty_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Precocious_puberty"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Precocious_puberty_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Precocious_puberty"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Precocious_puberty_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Precocious_puberty"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Hypophosphatemic rickets</th>
			<td align="center">Y/N</td>
			<td><select name="Hypophosphatemic_rickets_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Hypophosphatemic_rickets"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hypophosphatemic_rickets_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Hypophosphatemic_rickets"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hypophosphatemic_rickets_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Hypophosphatemic_rickets"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hypophosphatemic_rickets_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Hypophosphatemic_rickets"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Hypophosphatemic_rickets_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Hypophosphatemic_rickets"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Facial asymmetry</th>
			<td align="center">Y/N</td>
			<td><select name="Facial_asymmetry_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Facial_asymmetry"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Facial_asymmetry_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Facial_asymmetry"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Facial_asymmetry_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Facial_asymmetry"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Facial_asymmetry_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Facial_asymmetry"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
			<td><select name="Facial_asymmetry_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Facial_asymmetry"] : ""); ?>>
				<option value="unknown">--Select--</option>
  				<option value="yes">Yes</option>
  				<option value="no">No</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>Any_other</th>
			<td><input type="text" name="Any_other_D" ></td>
			<td><input type="text" name="Any_other_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Any_other"] : ""); ?>>

			</td>
			<td><input type="text" name="Any_other_6" value = <?php echo ((isset($_GET['status'])) ? $row3["Any_other"] : ""); ?>>

			</td>
			<td><input type="text" name="Any_other_1" value = <?php echo ((isset($_GET['status'])) ? $row3["Any_other"] : ""); ?>>
			</td>
			<td><input type="text" name="Any_other_2" value = <?php echo ((isset($_GET['status'])) ? $row3["Any_other"] : ""); ?>>

			</td>
			<td><input type="text" name="Any_other_5" value = <?php echo ((isset($_GET['status'])) ? $row3["Any_other"] : ""); ?>>

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
		<div id="submit" align="center">
            <input type="submit" value="Save and Continue" align="center">
        </div>
	</form>
</div>
</div>
</div>
</body>
</html>
