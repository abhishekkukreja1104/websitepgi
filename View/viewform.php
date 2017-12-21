<?php
	include_once 'includes/dbh.php';

	if(isset($_GET['status'])){
		if($_GET['status']=="edit"){
			$sqlD = "select * from OSD where addmission_no =".$_GET['addpatient'];
			$sql3 = "select * from OS3M where addmission_no =".$_GET['addpatient'];
			$sql6 = "select * from OS6M where addmission_no =".$_GET['addpatient'];
			$sql1 = "select * from OS1Y where addmission_no =".$_GET['addpatient'];
			$sql2 = "select * from OS2Y where addmission_no =".$_GET['addpatient'];
			$sql5 = "select * from OS5Y where addmission_no =".$_GET['addpatient'];
			$resultD = mysqli_query($conn, $sqlD);
			$result3 = mysqli_query($conn, $sql3);
			$result6 = mysqli_query($conn, $sql6);
			$result1 = mysqli_query($conn, $sql1);
			$result2 = mysqli_query($conn, $sql2);
			$result5 = mysqli_query($conn, $sql5);

			$rowD = mysqli_fetch_array($resultD);
			$row3 = mysqli_fetch_array($result3);
			$row6 = mysqli_fetch_array($result6);
			$row1 = mysqli_fetch_array($result1);
			$row2 = mysqli_fetch_array($result2);
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
	ul {
    	margin: 0 auto;
    	margin-right: 44px;
    	text-align: center;
	}
	li {
    	display: inline;
   	 	list-style: none;
	}
	a:link,a:visited
	{
	    display:inline-block;
	    margin-right: -4px;
	    width: 360px;
	    font-weight:bold;
	    color:white;
	    background-color:#1F4F96;
	    text-align:center;
	    padding:20px;
	    height: 30px;
	    text-decoration:none;
	    text-transform:uppercase;
	}
	a:hover,a:active
	{
	    background-color:black;
	}
</style>
<body>
	<div align="center" width = "1180px">
	<div id = "top" align="center">
		<img src="http://indianphptregistry.com/images/logo.png">
	</div>
	<ul>
		<li><a href="test.php">Add Patient</a></li>
		<li><a href="displaypatient.php">View Patient</a></li>
		<li><a href="documents.php">Manage Documents</a></li>
	</ul>
	<form action="includes/addothersymptoms.php" method="POST">
		<div class="box" id="heading">
			<h1  align="center">Other Symptoms</h1>
		</div>
		<table cellpadding="3" bgcolor="FFFFFF" align="center"
		cellspacing="20" >
		<tr>
			<th style="font-size: 20px"><font face="verdana">Examinations</font></th>
			<th style="font-size: 20px"><font face="verdana">Duration</font></th>
			<th></th>
			<th></th>
			<th style="font-size: 20px"><font face="verdana">Follow-up</font></th>
		</tr>
		<tr>
			<th></th>
			<th></th>
			<th id="up">&nbsp;&nbsp;3 months</th>
			<th id="up">&nbsp;&nbsp;6 months</th>
			<th id="up">&emsp;&nbsp;1 year</th>
			<th id="up">&emsp;&nbsp;2 year</th>
			<th id="up">&emsp;&nbsp;5 year</th>
		</tr>
		<tr>
			<th>Admission Number</th>
			<td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?>  readonly></td>

		</tr>
		<tr>
			<th>Asymptomatic</th>
			<td><input type="text" name="Asymptomatic_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Asymptomatic'] : ""); ?>></td>
			<td><input type="text" name="Asymptomatic_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Asymptomatic'] : ""); ?>></td>
			<td><input type="text" name="Asymptomatic_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Asymptomatic'] : ""); ?>></td>
			<td><input type="text" name="Asymptomatic_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Asymptomatic'] : ""); ?>></td>
			<td><input type="text" name="Asymptomatic_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Asymptomatic'] : ""); ?>></td>
			<td><input type="text" name="Asymptomatic_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Asymptomatic'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Bone_pain</th>
			<td><input type="text" name="Bone_pain_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Bone_pain'] : ""); ?>></td>
			<td><input type="text" name="Bone_pain_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Bone_pain'] : ""); ?>></td>
			<td><input type="text" name="Bone_pain_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Bone_pain'] : ""); ?>></td>
			<td><input type="text" name="Bone_pain_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Bone_pain'] : ""); ?>></td>
			<td><input type="text" name="Bone_pain_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Bone_pain'] : ""); ?>></td>
			<td><input type="text" name="Bone_pain_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Bone_pain'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Backache</th>
			<td><input type="text" name="Backache_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Backache'] : ""); ?>></td>
			<td><input type="text" name="Backache_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Backache'] : ""); ?>></td>
			<td><input type="text" name="Backache_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Backache'] : ""); ?>></td>
			<td><input type="text" name="Backache_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Backache'] : ""); ?>></td>
			<td><input type="text" name="Backache_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Backache'] : ""); ?>></td>
			<td><input type="text" name="Backache_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Backache'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Bony_Swelling</th>
			<td><input type="text" name="Bony_Swelling_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Bony_Swelling'] : ""); ?>></td>
			<td><input type="text" name="Bony_Swelling_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Bony_Swelling'] : ""); ?>></td>
			<td><input type="text" name="Bony_Swelling_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Bony_Swelling'] : ""); ?>></td>
			<td><input type="text" name="Bony_Swelling_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Bony_Swelling'] : ""); ?>></td>
			<td><input type="text" name="Bony_Swelling_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Bony_Swelling'] : ""); ?>></td>
			<td><input type="text" name="Bony_Swelling_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Bony_Swelling'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Cripple</th>
			<td><input type="text" name="Cripple_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Cripple'] : ""); ?>></td>
			<td><input type="text" name="Cripple_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Cripple'] : ""); ?>></td>
			<td><input type="text" name="Cripple_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Cripple'] : ""); ?>></td>
			<td><input type="text" name="Cripple_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Cripple'] : ""); ?>></td>
			<td><input type="text" name="Cripple_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Cripple'] : ""); ?>></td>
			<td><input type="text" name="Cripple_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Cripple'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Fracture(s)</th>
			<td><input type="text" name="Fracture_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Fracture'] : ""); ?>></td>
			<td><input type="text" name="Fracture_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Fracture'] : ""); ?>></td>
			<td><input type="text" name="Fracture_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Fracture'] : ""); ?>></td>
			<td><input type="text" name="Fracture_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Fracture'] : ""); ?>></td>
			<td><input type="text" name="Fracture_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Fracture'] : ""); ?>></td>
			<td><input type="text" name="Fracture_5" value = <?php echo ((isset($_GET['status'])) ? $row6['Fracture'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Anorexia</th>
			<td><input type="text" name="Anorexia_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Anorexia'] : ""); ?>></td>
			<td><input type="text" name="Anorexia_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Anorexia'] : ""); ?>></td>
			<td><input type="text" name="Anorexia_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Anorexia'] : ""); ?>></td>
			<td><input type="text" name="Anorexia_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Anorexia'] : ""); ?>></td>
			<td><input type="text" name="Anorexia_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Anorexia'] : ""); ?>></td>
			<td><input type="text" name="Anorexia_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Anorexia'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Constipation</th>
			<td><input type="text" name="Constipation_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Constipation'] : ""); ?>></td>
			<td><input type="text" name="Constipation_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Constipation'] : ""); ?>></td>
			<td><input type="text" name="Constipation_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Constipation'] : ""); ?>></td>
			<td><input type="text" name="Constipation_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Constipation'] : ""); ?>></td>
			<td><input type="text" name="Constipation_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Constipation'] : ""); ?>></td>
			<td><input type="text" name="Constipation_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Constipation'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Loss_of_teeth</th>
			<td><input type="text" name="Loss_of_teeth_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Loss_of_teeth'] : ""); ?>></td>
			<td><input type="text" name="Loss_of_teeth_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Loss_of_teeth'] : ""); ?>></td>
			<td><input type="text" name="Loss_of_teeth_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Loss_of_teeth'] : ""); ?>></td>
			<td><input type="text" name="Loss_of_teeth_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Loss_of_teeth'] : ""); ?>></td>
			<td><input type="text" name="Loss_of_teeth_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Loss_of_teeth'] : ""); ?>></td>
			<td><input type="text" name="Loss_of_teeth_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Loss_of_teeth'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Cataract</th>
			<td><input type="text" name="Cataract_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Cataract'] : ""); ?>></td>
			<td><input type="text" name="Cataract_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Cataract'] : ""); ?>></td>
			<td><input type="text" name="Cataract_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Cataract'] : ""); ?>></td>
			<td><input type="text" name="Cataract_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Cataract'] : ""); ?>></td>
			<td><input type="text" name="Cataract_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Cataract'] : ""); ?>></td>
			<td><input type="text" name="Cataract_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Cataract'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Renal_Colic</th>
			<td><input type="text" name="Renal_Colic_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Renal_Colic'] : ""); ?>></td>
			<td><input type="text" name="Renal_Colic_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Renal_Colic'] : ""); ?>></td>
			<td><input type="text" name="Renal_Colic_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Renal_Colic'] : ""); ?>></td>
			<td><input type="text" name="Renal_Colic_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Renal_Colic'] : ""); ?>></td>
			<td><input type="text" name="Renal_Colic_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Renal_Colic'] : ""); ?>></td>
			<td><input type="text" name="Renal_Colic_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Renal_Colic'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Round_face</th>
			<td><input type="text" name="Round_face_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Round_face'] : ""); ?>></td>
			<td><input type="text" name="Round_face_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Round_face'] : ""); ?>></td>
			<td><input type="text" name="Round_face_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Round_face'] : ""); ?>></td>
			<td><input type="text" name="Round_face_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Round_face'] : ""); ?>></td>
			<td><input type="text" name="Round_face_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Round_face'] : ""); ?>></td>
			<td><input type="text" name="Round_face_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Round_face'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Short_stature</th>
			<td><input type="text" name="Short_stature_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Short_stature'] : ""); ?>></td>
			<td><input type="text" name="Short_stature_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Short_stature'] : ""); ?>></td>
			<td><input type="text" name="Short_stature_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Short_stature'] : ""); ?>></td>
			<td><input type="text" name="Short_stature_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Short_stature'] : ""); ?>></td>
			<td><input type="text" name="Short_stature_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Short_stature'] : ""); ?>></td>
			<td><input type="text" name="Short_stature_5" value = <?php echo ((isset($_GET['status'])) ? $row6['Short_stature'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Cafe_au_lait_macule</th>
			<td><input type="text" name="Cafe_au_lait_macule_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Cafe'] : ""); ?>></td>
			<td><input type="text" name="Cafe_au_lait_macule_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Cafe'] : ""); ?>></td>
			<td><input type="text" name="Cafe_au_lait_macule_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Cafe'] : ""); ?>></td>
			<td><input type="text" name="Cafe_au_lait_macule_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Cafe'] : ""); ?>></td>
			<td><input type="text" name="Cafe_au_lait_macule_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Cafe'] : ""); ?>></td>
			<td><input type="text" name="Cafe_au_lait_macule_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Cafe'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Blue_sclera</th>
			<td><input type="text" name="Blue_sclera_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Blue_sclera'] : ""); ?>></td>
			<td><input type="text" name="Blue_sclera_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Blue_sclera'] : ""); ?>></td>
			<td><input type="text" name="Blue_sclera_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Blue_sclera'] : ""); ?>></td>
			<td><input type="text" name="Blue_sclera_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Blue_sclera'] : ""); ?>></td>
			<td><input type="text" name="Blue_sclera_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Blue_sclera'] : ""); ?>></td>
			<td><input type="text" name="Blue_sclera_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Blue_sclera'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Dentinogenesis_imperfecta</th>
			<td><input type="text" name="Dentinogenesis_imperfecta_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Dentinogenesis_imperfecta'] : ""); ?>></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Dentinogenesis_imperfecta'] : ""); ?>></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Dentinogenesis_imperfecta'] : ""); ?>></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Dentinogenesis_imperfecta'] : ""); ?>></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Dentinogenesis_imperfecta'] : ""); ?>></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Dentinogenesis_imperfecta'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Acoustic_damage</th>
			<td><input type="text" name="Acoustic_damage_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Acoustic_damage'] : ""); ?>></td>
			<td><input type="text" name="Acoustic_damage_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Acoustic_damage'] : ""); ?>></td>
			<td><input type="text" name="Acoustic_damage_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Acoustic_damage'] : ""); ?>></td>
			<td><input type="text" name="Acoustic_damage_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Acoustic_damage'] : ""); ?>></td>
			<td><input type="text" name="Acoustic_damage_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Acoustic_damage'] : ""); ?>></td>
			<td><input type="text" name="Acoustic_damage_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Acoustic_damage'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Deformity UL</th>
			<td><input type="text" name="UL_3" value = <?php echo ((isset($_GET['status'])) ? $rowD['UL'] : ""); ?>></td>
			<td><input type="text" name="UL_D" value = <?php echo ((isset($_GET['status'])) ? $row3['UL'] : ""); ?>></td>
			<td><input type="text" name="UL_6" value = <?php echo ((isset($_GET['status'])) ? $row6['UL'] : ""); ?>></td>
			<td><input type="text" name="UL_1" value = <?php echo ((isset($_GET['status'])) ? $row1['UL'] : ""); ?>></td>
			<td><input type="text" name="UL_2" value = <?php echo ((isset($_GET['status'])) ? $row2['UL'] : ""); ?>></td>
			<td><input type="text" name="UL_5" value = <?php echo ((isset($_GET['status'])) ? $row5['UL'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Deformity LL</th>
			<td><input type="text" name="LL_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['LL'] : ""); ?>></td>
			<td><input type="text" name="LL_3" value = <?php echo ((isset($_GET['status'])) ? $row3['LL'] : ""); ?>></td>
			<td><input type="text" name="LL_6" value = <?php echo ((isset($_GET['status'])) ? $row6['LL'] : ""); ?>></td>
			<td><input type="text" name="LL_1" value = <?php echo ((isset($_GET['status'])) ? $row1['LL'] : ""); ?>></td>
			<td><input type="text" name="LL_2" value = <?php echo ((isset($_GET['status'])) ? $row2['LL'] : ""); ?>></td>
			<td><input type="text" name="LL_5" value = <?php echo ((isset($_GET['status'])) ? $row5['LL'] : ""); ?>></td>
		</tr>
		<tr>
			<th>Deformity Spine</th>
			<td><input type="text" name="spine_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["spine"] : ""); ?>></td>
			<td><input type="text" name="spine_3" value = <?php echo ((isset($_GET['status'])) ? $row3["spine"] : ""); ?>></td>
			<td><input type="text" name="spine_6" value = <?php echo ((isset($_GET['status'])) ? $row6["spine"] : ""); ?>></td>
			<td><input type="text" name="spine_1" value = <?php echo ((isset($_GET['status'])) ? $row1["spine"] : ""); ?>></td>
			<td><input type="text" name="spine_2" value = <?php echo ((isset($_GET['status'])) ? $row2["spine"] : ""); ?>></td>
			<td><input type="text" name="spine_5" value = <?php echo ((isset($_GET['status'])) ? $row5["spine"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Hyper_extensibility</th>
			<td><input type="text" name="Hyper_extensibility_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Hyper_extensibility"] : ""); ?>></td>
			<td><input type="text" name="Hyper_extensibility_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Hyper_extensibility"] : ""); ?>></td>
			<td><input type="text" name="Hyper_extensibility_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Hyper_extensibility"] : ""); ?>></td>
			<td><input type="text" name="Hyper_extensibility_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Hyper_extensibility"] : ""); ?>></td>
			<td><input type="text" name="Hyper_extensibility_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Hyper_extensibility"] : ""); ?>></td>
			<td><input type="text" name="Hyper_extensibility_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Hyper_extensibility"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Tufting_of_phalanges</th>
			<td><input type="text" name="Tufting_of_phalanges_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Tufting_of_phalanges"] : ""); ?>></td>
			<td><input type="text" name="Tufting_of_phalanges_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Tufting_of_phalanges"] : ""); ?>></td>
			<td><input type="text" name="Tufting_of_phalanges_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Tufting_of_phalanges"] : ""); ?>></td>
			<td><input type="text" name="Tufting_of_phalanges_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Tufting_of_phalanges"] : ""); ?>></td>
			<td><input type="text" name="Tufting_of_phalanges_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Tufting_of_phalanges"] : ""); ?>></td>
			<td><input type="text" name="Tufting_of_phalanges_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Tufting_of_phalanges"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Short_4_th_metacarpal</th>
			<td><input type="text" name="Short_4_th_metacarpal_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Short_4_th_metacarpal"] : ""); ?>></td>
			<td><input type="text" name="Short_4_th_metacarpal_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Short_4_th_metacarpal"] : ""); ?>></td>
			<td><input type="text" name="Short_4_th_metacarpal_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Short_4_th_metacarpal"] : ""); ?>></td>
			<td><input type="text" name="Short_4_th_metacarpal_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Short_4_th_metacarpal"] : ""); ?>></td>
			<td><input type="text" name="Short_4_th_metacarpal_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Short_4_th_metacarpal"] : ""); ?>></td>
			<td><input type="text" name="Short_4_th_metacarpal_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Short_4_th_metacarpal"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Tarsal</th>
			<td><input type="text" name="Tarsal_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Tarsal"] : ""); ?>></td>
			<td><input type="text" name="Tarsal_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Tarsal"] : ""); ?>></td>
			<td><input type="text" name="Tarsal_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Tarsal"] : ""); ?>></td>
			<td><input type="text" name="Tarsal_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Tarsal"] : ""); ?>></td>
			<td><input type="text" name="Tarsal_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Tarsal"] : ""); ?>></td>
			<td><input type="text" name="Tarsal_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Tarsal"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Upper_Segment</th>
			<td><input type="text" name="Upper_Segment_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Upper_Segment_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Upper_Segment_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Upper_Segment_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Upper_Segment_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Upper_Segment_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Upper_Segment"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Arched_palate</th>
			<td><input type="text" name="Arched_palate_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Arched_palate_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Arched_palate_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Arched_palate_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Arched_palate_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Upper_Segment"] : ""); ?>></td>
			<td><input type="text" name="Arched_palate_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Upper_Segment"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Waddling_gait</th>
			<td><input type="text" name="Waddling_gait_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Waddling_gait"] : ""); ?>></td>
			<td><input type="text" name="Waddling_gait_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Waddling_gait"] : ""); ?>></td>
			<td><input type="text" name="Waddling_gait_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Waddling_gait"] : ""); ?>></td>
			<td><input type="text" name="Waddling_gait_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Waddling_gait"] : ""); ?>></td>
			<td><input type="text" name="Waddling_gait_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Waddling_gait"] : ""); ?>></td>
			<td><input type="text" name="Waddling_gait_5" value = <?php echo ((isset($_GET['status'])) ? $row3["Waddling_gait"] : ""); ?>></td>
		</tr><tr>
			<th>Exostosis</th>
			<td><input type="text" name="Exostosis_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Exostosis"] : ""); ?>></td>
			<td><input type="text" name="Exostosis_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Exostosis"] : ""); ?>></td>
			<td><input type="text" name="Exostosis_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Exostosis"] : ""); ?>></td>
			<td><input type="text" name="Exostosis_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Exostosis"] : ""); ?>></td>
			<td><input type="text" name="Exostosis_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Exostosis"] : ""); ?>></td>
			<td><input type="text" name="Exostosis_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Exostosis"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Hypoplasia_of_mandible</th>
			<td><input type="text" name="Hypoplasia_of_mandible_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Hypoplasia_of_mandible"] : ""); ?>></td>
			<td><input type="text" name="Hypoplasia_of_mandible_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Hypoplasia_of_mandible"] : ""); ?>></td>
			<td><input type="text" name="Hypoplasia_of_mandible_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Hypoplasia_of_mandible"] : ""); ?>></td>
			<td><input type="text" name="Hypoplasia_of_mandible_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Hypoplasia_of_mandible"] : ""); ?>></td>
			<td><input type="text" name="Hypoplasia_of_mandible_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Hypoplasia_of_mandible"] : ""); ?>></td>
			<td><input type="text" name="Hypoplasia_of_mandible_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Hypoplasia_of_mandible"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Monostotic</th>
			<td><input type="text" name="Monostotic_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Monostotic"] : ""); ?>></td>
			<td><input type="text" name="Monostotic_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Monostotic"] : ""); ?>></td>
			<td><input type="text" name="Monostotic_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Monostotic"] : ""); ?>></td>
			<td><input type="text" name="Monostotic_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Monostotic"] : ""); ?>></td>
			<td><input type="text" name="Monostotic_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Monostotic"] : ""); ?>></td>
			<td><input type="text" name="Monostotic_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Monostotic"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Polyostotic_lesion</th>
			<td><input type="text" name="Polyostotic_lesion_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Polyostotic_lesion"] : ""); ?>></td>
			<td><input type="text" name="Polyostotic_lesion_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Polyostotic_lesion"] : ""); ?>></td>
			<td><input type="text" name="Polyostotic_lesion_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Polyostotic_lesion"] : ""); ?>></td>
			<td><input type="text" name="Polyostotic_lesion_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Polyostotic_lesion"] : ""); ?>></td>
			<td><input type="text" name="Polyostotic_lesion_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Polyostotic_lesion"] : ""); ?>></td>
			<td><input type="text" name="Polyostotic_lesion_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Polyostotic_lesion"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Hyperprolactinaemia</th>
			<td><input type="text" name="Hyperprolactinaemia_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Hyperprolactinaemia"] : ""); ?>></td>
			<td><input type="text" name="Hyperprolactinaemia_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Hyperprolactinaemia"] : ""); ?>></td>
			<td><input type="text" name="Hyperprolactinaemia_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Hyperprolactinaemia"] : ""); ?>></td>
			<td><input type="text" name="Hyperprolactinaemia_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Hyperprolactinaemia"] : ""); ?>></td>
			<td><input type="text" name="Hyperprolactinaemia_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Hyperprolactinaemia"] : ""); ?>></td>
			<td><input type="text" name="Hyperprolactinaemia_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Hyperprolactinaemia"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Weakness_Fatiguability</th>
			<td><input type="text" name="Weakness_Fatiguability_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Weakness_Fatiguability"] : ""); ?>></td>
			<td><input type="text" name="Weakness_Fatiguability_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Weakness_Fatiguability"] : ""); ?>></td>
			<td><input type="text" name="Weakness_Fatiguability_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Weakness_Fatiguability"] : ""); ?>></td>
			<td><input type="text" name="Weakness_Fatiguability_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Weakness_Fatiguability"] : ""); ?>></td>
			<td><input type="text" name="Weakness_Fatiguability_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Weakness_Fatiguability"] : ""); ?>></td>
			<td><input type="text" name="Weakness_Fatiguability_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Weakness_Fatiguability"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Joint_pain</th>
			<td><input type="text" name="Joint_pain_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Joint_pain"] : ""); ?>></td>
			<td><input type="text" name="Joint_pain_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Joint_pain"] : ""); ?>></td>
			<td><input type="text" name="Joint_pain_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Joint_pain"] : ""); ?>></td>
			<td><input type="text" name="Joint_pain_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Joint_pain"] : ""); ?>></td>
			<td><input type="text" name="Joint_pain_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Joint_pain"] : ""); ?>></td>
			<td><input type="text" name="Joint_pain_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Joint_pain"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Visual_impairment</th>
			<td><input type="text" name="Visual_impairment_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Visual_impairment"] : ""); ?>></td>
			<td><input type="text" name="Visual_impairment_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Visual_impairment"] : ""); ?>></td>
			<td><input type="text" name="Visual_impairment_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Visual_impairment"] : ""); ?>></td>
			<td><input type="text" name="Visual_impairment_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Visual_impairment"] : ""); ?>></td>
			<td><input type="text" name="Visual_impairment_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Visual_impairment"] : ""); ?>></td>
			<td><input type="text" name="Visual_impairment_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Visual_impairment"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Precocious_puberty</th>
			<td><input type="text" name="Precocious_puberty_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Precocious_puberty"] : ""); ?>></td>
			<td><input type="text" name="Precocious_puberty_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Precocious_puberty"] : ""); ?>></td>
			<td><input type="text" name="Precocious_puberty_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Precocious_puberty"] : ""); ?>></td>
			<td><input type="text" name="Precocious_puberty_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Precocious_puberty"] : ""); ?>></td>
			<td><input type="text" name="Precocious_puberty_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Precocious_puberty"] : ""); ?>></td>
			<td><input type="text" name="Precocious_puberty_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Precocious_puberty"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Hypophosphatemic_rickets</th>
			<td><input type="text" name="Hypophosphatemic_rickets_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Hypophosphatemic_rickets"] : ""); ?>></td>
			<td><input type="text" name="Hypophosphatemic_rickets_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Hypophosphatemic_rickets"] : ""); ?>></td>
			<td><input type="text" name="Hypophosphatemic_rickets_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Hypophosphatemic_rickets"] : ""); ?>></td>
			<td><input type="text" name="Hypophosphatemic_rickets_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Hypophosphatemic_rickets"] : ""); ?>></td>
			<td><input type="text" name="Hypophosphatemic_rickets_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Hypophosphatemic_rickets"] : ""); ?>></td>
			<td><input type="text" name="Hypophosphatemic_rickets_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Hypophosphatemic_rickets"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Facial_asymmetry</th>
			<td><input type="text" name="Facial_asymmetry_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Facial_asymmetry"] : ""); ?>></td>
			<td><input type="text" name="Facial_asymmetry_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Facial_asymmetry"] : ""); ?>></td>
			<td><input type="text" name="Facial_asymmetry_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Facial_asymmetry"] : ""); ?>></td>
			<td><input type="text" name="Facial_asymmetry_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Facial_asymmetry"] : ""); ?>></td>
			<td><input type="text" name="Facial_asymmetry_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Facial_asymmetry"] : ""); ?>></td>
			<td><input type="text" name="Facial_asymmetry_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Facial_asymmetry"] : ""); ?>></td>
		</tr>
		<tr>
			<th>Any_other</th>
			<td><input type="text" name="Any_other_D" value = <?php echo ((isset($_GET['status'])) ? $rowD["Any_other"] : ""); ?>></td>
			<td><input type="text" name="Any_other_3" value = <?php echo ((isset($_GET['status'])) ? $row3["Any_other"] : ""); ?>></td>
			<td><input type="text" name="Any_other_6" value = <?php echo ((isset($_GET['status'])) ? $row6["Any_other"] : ""); ?>></td>
			<td><input type="text" name="Any_other_1" value = <?php echo ((isset($_GET['status'])) ? $row1["Any_other"] : ""); ?>></td>
			<td><input type="text" name="Any_other_2" value = <?php echo ((isset($_GET['status'])) ? $row2["Any_other"] : ""); ?>></td>
			<td><input type="text" name="Any_other_5" value = <?php echo ((isset($_GET['status'])) ? $row5["Any_other"] : ""); ?>></td>
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

			<div class="box" width="40px" align="center" id = "heading">
    		<input type="submit" value="Save and Continue" align="center">
    	</div>
	</form>
</div>
</body>
</html>
