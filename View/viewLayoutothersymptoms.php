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
	<title>Other Symptoms</title>
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
      #up{
        text-align: center;
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
      input[type = "number"]{
        display: inline-block;
        width: 100px;
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
                  <li><a href="#Add Patient">Add Patient</a></li>
                  <li><a href="#View patient">View Patient</a></li>
                  <li><a href="#Search patient">Search Patient</a></li>
                  <li><a href="#Manage Documents">Manage Documents</a></li>
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
    <td>
        <input type="text" name="Asymptomatic_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Asymptomatic'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Asymptomatic_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Asymptomatic'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Asymptomatic_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Asymptomatic'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Asymptomatic_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Asymptomatic'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Asymptomatic_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Asymptomatic'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Bone pain</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Bone_pain_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Bone_pain'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Bone_pain_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Bone_pain'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Bone_pain_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Bone_pain'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Bone_pain_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Bone_pain'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Bone_pain_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Bone_pain'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Backache</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Backache_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Backache'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Backache_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Backache'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Backache_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Backache'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Backache_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Backache'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Backache_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Backache'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Bony Swelling</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Bony_Swelling_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Bony_Swelling'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Bony_Swelling_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Bony_Swelling'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Bony_Swelling_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Bony_Swelling'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Bony_Swelling_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Bony_Swelling'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Bony_Swelling_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Bony_Swelling'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Cripple</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Cripple_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Cripple'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cripple_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Cripple'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cripple_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Cripple'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cripple_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Cripple'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cripple_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Cripple'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Fracture(s)</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Fracture_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Fracture'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Fracture_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Fracture'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Fracture_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Fracture'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Fracture_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Fracture'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Fracture_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Fracture'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Anorexia</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Anorexia_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Anorexia'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Anorexia_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Anorexia'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Anorexia_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Anorexia'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Anorexia_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Anorexia'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Anorexia_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Anorexia'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Constipation</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Constipation_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Constipation'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Constipation_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Constipation'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Constipation_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Constipation'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Constipation_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Constipation'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Constipation_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Constipation'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Loss of teeth</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Loss_of_teeth_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Loss_of_teeth'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Loss_of_teeth_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Loss_of_teeth'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Loss_of_teeth_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Loss_of_teeth'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Loss_of_teeth_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Loss_of_teeth'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Loss_of_teeth_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Loss_of_teeth'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Cataract</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Cataract_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Cataract'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cataract_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Cataract'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cataract_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Cataract'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cataract_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Cataract'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cataract_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Cataract'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Renal Colic</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Renal_Colic_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Renal_Colic'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Renal_Colic_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Renal_Colic'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Renal_Colic_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Renal_Colic'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Renal_Colic_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Renal_Colic'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Renal_Colic_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Renal_Colic'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Round face</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Round_face_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Round_face'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Round_face_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Round_face'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Round_face_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Round_face'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Round_face_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Round_face'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Round_face_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Round_face'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Short stature</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Short_stature_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Short_stature'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Short_stature_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Short_stature'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Short_stature_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Short_stature'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Short_stature_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Short_stature'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Short_stature_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Short_stature'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Cafe-au-lait-macule</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Cafe_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Cafe'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cafe_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Cafe'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cafe_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Cafe'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cafe_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Cafe'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Cafe_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Cafe'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Blue sclera</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Blue_sclera_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Blue_sclera'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Blue_sclera_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Blue_sclera'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Blue_sclera_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Blue_sclera'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Blue_sclera_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Blue_sclera'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Blue_sclera_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Blue_sclera'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Dentinogenesis imperfecta</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Dentinogenesis_imperfecta_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Dentinogenesis_imperfecta'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Dentinogenesis_imperfecta_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Dentinogenesis_imperfecta'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Dentinogenesis_imperfecta_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Dentinogenesis_imperfecta'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Dentinogenesis_imperfecta_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Dentinogenesis_imperfecta'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Dentinogenesis_imperfecta_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Dentinogenesis_imperfecta'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Acoustic damage(deafness) (Conductive/Sensor name deafness)</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Acoustic_damage_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'Acoustic_damage'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Acoustic_damage_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'Acoustic_damage'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Acoustic_damage_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'Acoustic_damage'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Acoustic_damage_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'Acoustic_damage'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Acoustic_damage_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'Acoustic_damage'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Deformity UL</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="UL_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'UL'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="UL_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'UL'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="UL_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'UL'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="UL_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'UL'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="UL_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'UL'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Deformity LL(Genuvarum/Genuvalgum/Wind swift/None)</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="LL_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ 'LL'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="LL_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ 'LL'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="LL_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'LL'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="LL_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ 'LL'] : ""); ?>>

    </td>
    <td>
        <input type="text" name="LL_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ 'LL'] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Deformity Spine(kyphosis/Scoliosis)</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="spine_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "spine"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="spine_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "spine"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="spine_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "spine"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="spine_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "spine"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="spine_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "spine"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Hyper extensibility of the joints</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Hyper_extensibility_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Hyper_extensibility"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hyper_extensibility_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Hyper_extensibility"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hyper_extensibility_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Hyper_extensibility"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hyper_extensibility_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Hyper_extensibility"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hyper_extensibility_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Hyper_extensibility"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Syndactyly</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Syndactyly_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Syndactyly"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Syndactyly_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Syndactyly"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Syndactyly_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Syndactyly"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Syndactyly_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Syndactyly"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Syndactyly_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Syndactyly"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Tufting of phalanges</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Tufting_of_phalanges_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Tufting_of_phalanges"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Tufting_of_phalanges_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Tufting_of_phalanges"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Tufting_of_phalanges_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Tufting_of_phalanges"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Tufting_of_phalanges_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Tufting_of_phalanges"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Tufting_of_phalanges_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Tufting_of_phalanges"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Short 4<sup>th</sup> metacarpal</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Short_4_th_metacarpal_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Short_4_th_metacarpal"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Short_4_th_metacarpal_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Short_4_th_metacarpal"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Short_4_th_metacarpal_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Short_4_th_metacarpal"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Short_4_th_metacarpal_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Short_4_th_metacarpal"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Short_4_th_metacarpal_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Short_4_th_metacarpal"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Short 4<sup>th</sup> metatarsal</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Tarsal_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Tarsal"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Tarsal_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Tarsal"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Tarsal_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Tarsal"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Tarsal_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Tarsal"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Tarsal_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Tarsal"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Upper Segment/Lower Segment (Cm)</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Upper_Segment_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Upper_Segment"] : ""); ?>>
    </td>
    <td>
        <input type="text" name="Upper_Segment_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Upper_Segment"] : ""); ?>>
    </td>
    <td>
        <input type="text" name="Upper_Segment_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Upper_Segment"] : ""); ?>>
    </td>
    <td>
        <input type="text" name="Upper_Segment_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Upper_Segment"] : ""); ?>>
    </td>
    <td>
        <input type="text" name="Upper_Segment_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Upper_Segment"] : ""); ?>>
    </td>
</tr>
<tr>
    <th>Arched palate</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Arched_palate_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Upper_Segment"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Arched_palate_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Upper_Segment"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Arched_palate_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Upper_Segment"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Arched_palate_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Upper_Segment"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Arched_palate_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Upper_Segment"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Waddling gait</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Waddling_gait_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Waddling_gait"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Waddling_gait_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Waddling_gait"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Waddling_gait_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Waddling_gait"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Waddling_gait_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Waddling_gait"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Waddling_gait_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Waddling_gait"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Exostosis</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Exostosis_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Exostosis"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Exostosis_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Exostosis"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Exostosis_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Exostosis"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Exostosis_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Exostosis"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Exostosis_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Exostosis"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Hypoplasia of mandible</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Hypoplasia_of_mandible_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Hypoplasia_of_mandible"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hypoplasia_of_mandible_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Hypoplasia_of_mandible"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hypoplasia_of_mandible_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Hypoplasia_of_mandible"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hypoplasia_of_mandible_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Hypoplasia_of_mandible"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hypoplasia_of_mandible_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Hypoplasia_of_mandible"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Monostotic</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Monostotic_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Monostotic"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Monostotic_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Monostotic"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Monostotic_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Monostotic"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Monostotic_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Monostotic"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Monostotic_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Monostotic"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Polyostotic lesion</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Polyostotic_lesion_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Polyostotic_lesion"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Polyostotic_lesion_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Polyostotic_lesion"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Polyostotic_lesion_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Polyostotic_lesion"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Polyostotic_lesion_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Polyostotic_lesion"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Polyostotic_lesion_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Polyostotic_lesion"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Galactorhoea</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Hyperprolactinaemia_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Hyperprolactinaemia"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hyperprolactinaemia_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Hyperprolactinaemia"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hyperprolactinaemia_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Hyperprolactinaemia"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hyperprolactinaemia_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Hyperprolactinaemia"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hyperprolactinaemia_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Hyperprolactinaemia"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Weakness & Fatiguability</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Weakness_Fatiguability_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Weakness_Fatiguability"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Weakness_Fatiguability_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Weakness_Fatiguability"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Weakness_Fatiguability_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Weakness_Fatiguability"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Weakness_Fatiguability_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Weakness_Fatiguability"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Weakness_Fatiguability_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Weakness_Fatiguability"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Joint pain</th>
    <td align="center">Y/N</td>>
    <td>
        <input type="text" name="Joint_pain_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Joint_pain"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Joint_pain_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Joint_pain"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Joint_pain_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Joint_pain"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Joint_pain_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Joint_pain"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Joint_pain_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Joint_pain"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Visual impairment</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Visual_impairment_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Visual_impairment"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Visual_impairment_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Visual_impairment"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Visual_impairment_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Visual_impairment"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Visual_impairment_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Visual_impairment"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Visual_impairment_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Visual_impairment"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Precocious puberty</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Precocious_puberty_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Precocious_puberty"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Precocious_puberty_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Precocious_puberty"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Precocious_puberty_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Precocious_puberty"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Precocious_puberty_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Precocious_puberty"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Precocious_puberty_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Precocious_puberty"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Hypophosphatemic rickets</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Hypophosphatemic_rickets_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Hypophosphatemic_rickets"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hypophosphatemic_rickets_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Hypophosphatemic_rickets"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hypophosphatemic_rickets_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Hypophosphatemic_rickets"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hypophosphatemic_rickets_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Hypophosphatemic_rickets"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Hypophosphatemic_rickets_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Hypophosphatemic_rickets"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Facial asymmetry</th>
    <td align="center">Y/N</td>
    <td>
        <input type="text" name="Facial_asymmetry_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Facial_asymmetry"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Facial_asymmetry_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row6[ "Facial_asymmetry"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Facial_asymmetry_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ "Facial_asymmetry"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Facial_asymmetry_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row2[ "Facial_asymmetry"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Facial_asymmetry_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row5[ "Facial_asymmetry"] : ""); ?>>

    </td>
</tr>
<tr>
    <th>Any_other</th>
    <td>
        <input type="text" name="Any_other_D">
    </td>
    <td>
        <input type="text" name="Any_other_3" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Any_other"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Any_other_6" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Any_other"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Any_other_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Any_other"] : ""); ?>>
    </td>
    <td>
        <input type="text" name="Any_other_2" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Any_other"] : ""); ?>>

    </td>
    <td>
        <input type="text" name="Any_other_5" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row3[ "Any_other"] : ""); ?>>

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
