<?php
	include_once 'includes/dbh.php';

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
		<li><a href="test.php">Home</a></li>
		<li><a href="google.com">Add Patient</a></li>
		<li><a href="displaypatient.php">View Patient</a></li>
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
			<td><input type="text" name="Asymptomatic_D"></td>
			<td><input type="text" name="Asymptomatic_3"></td>
			<td><input type="text" name="Asymptomatic_6"></td>
			<td><input type="text" name="Asymptomatic_1"></td>
			<td><input type="text" name="Asymptomatic_2"></td>
			<td><input type="text" name="Asymptomatic_5"></td>
		</tr>
		<tr>
			<th>Bone_pain</th>
			<td><input type="text" name="Bone_pain_D"></td>
			<td><input type="text" name="Bone_pain_3"></td>
			<td><input type="text" name="Bone_pain_6"></td>
			<td><input type="text" name="Bone_pain_1"></td>
			<td><input type="text" name="Bone_pain_2"></td>
			<td><input type="text" name="Bone_pain_5"></td>
		</tr>
		<tr>
			<th>Backache</th>
			<td><input type="text" name="Backache_D"></td>
			<td><input type="text" name="Backache_3"></td>
			<td><input type="text" name="Backache_6"></td>
			<td><input type="text" name="Backache_1"></td>
			<td><input type="text" name="Backache_2"></td>
			<td><input type="text" name="Backache_5"></td>
		</tr>
		<tr>
			<th>Bony_Swelling</th>
			<td><input type="text" name="Bony_Swelling_D"></td>
			<td><input type="text" name="Bony_Swelling_3"></td>
			<td><input type="text" name="Bony_Swelling_6"></td>
			<td><input type="text" name="Bony_Swelling_1"></td>
			<td><input type="text" name="Bony_Swelling_2"></td>
			<td><input type="text" name="Bony_Swelling_5"></td>
		</tr>
		<tr>
			<th>Cripple</th>
			<td><input type="text" name="Cripple_D"></td>
			<td><input type="text" name="Cripple_3"></td>
			<td><input type="text" name="Cripple_6"></td>
			<td><input type="text" name="Cripple_1"></td>
			<td><input type="text" name="Cripple_2"></td>
			<td><input type="text" name="Cripple_5"></td>
		</tr>
		<tr>
			<th>Fracture(s)</th>
			<td><input type="text" name="Fracture_D"></td>
			<td><input type="text" name="Fracture_3"></td>
			<td><input type="text" name="Fracture_6"></td>
			<td><input type="text" name="Fracture_1"></td>
			<td><input type="text" name="Fracture_2"></td>
			<td><input type="text" name="Fracture_5"></td>
		</tr>
		<tr>
			<th>Anorexia</th>
			<td><input type="text" name="Anorexia_D"></td>
			<td><input type="text" name="Anorexia_3"></td>
			<td><input type="text" name="Anorexia_6"></td>
			<td><input type="text" name="Anorexia_1"></td>
			<td><input type="text" name="Anorexia_2"></td>
			<td><input type="text" name="Anorexia_5"></td>
		</tr>
		<tr>
			<th>Constipation</th>
			<td><input type="text" name="Constipation_D"></td>
			<td><input type="text" name="Constipation_3"></td>
			<td><input type="text" name="Constipation_6"></td>
			<td><input type="text" name="Constipation_1"></td>
			<td><input type="text" name="Constipation_2"></td>
			<td><input type="text" name="Constipation_5"></td>
		</tr>
		<tr>
			<th>Loss_of_teeth</th>
			<td><input type="text" name="Loss_of_teeth_D"></td>
			<td><input type="text" name="Loss_of_teeth_3"></td>
			<td><input type="text" name="Loss_of_teeth_6"></td>
			<td><input type="text" name="Loss_of_teeth_1"></td>
			<td><input type="text" name="Loss_of_teeth_2"></td>
			<td><input type="text" name="Loss_of_teeth_5"></td>
		</tr>
		<tr>
			<th>Cataract</th>
			<td><input type="text" name="Cataract_D"></td>
			<td><input type="text" name="Cataract_3"></td>
			<td><input type="text" name="Cataract_6"></td>
			<td><input type="text" name="Cataract_1"></td>
			<td><input type="text" name="Cataract_2"></td>
			<td><input type="text" name="Cataract_5"></td>
		</tr>
		<tr>
			<th>Renal_Colic</th>
			<td><input type="text" name="Renal_Colic_D"></td>
			<td><input type="text" name="Renal_Colic_3"></td>
			<td><input type="text" name="Renal_Colic_6"></td>
			<td><input type="text" name="Renal_Colic_1"></td>
			<td><input type="text" name="Renal_Colic_2"></td>
			<td><input type="text" name="Renal_Colic_5"></td>
		</tr>
		<tr>
			<th>Round_face</th>
			<td><input type="text" name="Round_face_D"></td>
			<td><input type="text" name="Round_face_3"></td>
			<td><input type="text" name="Round_face_6"></td>
			<td><input type="text" name="Round_face_1"></td>
			<td><input type="text" name="Round_face_2"></td>
			<td><input type="text" name="Round_face_5"></td>
		</tr>
		<tr>
			<th>Short_stature</th>
			<td><input type="text" name="Short_stature_D"></td>
			<td><input type="text" name="Short_stature_3"></td>
			<td><input type="text" name="Short_stature_6"></td>
			<td><input type="text" name="Short_stature_1"></td>
			<td><input type="text" name="Short_stature_2"></td>
			<td><input type="text" name="Short_stature_5"></td>
		</tr>
		<tr>
			<th>Cafe_au_lait_macule</th>
			<td><input type="text" name="Cafe_au_lait_macule_D"></td>
			<td><input type="text" name="Cafe_au_lait_macule_3"></td>
			<td><input type="text" name="Cafe_au_lait_macule_6"></td>
			<td><input type="text" name="Cafe_au_lait_macule_1"></td>
			<td><input type="text" name="Cafe_au_lait_macule_2"></td>
			<td><input type="text" name="Cafe_au_lait_macule_5"></td>
		</tr>
		<tr>
			<th>Blue_sclera</th>
			<td><input type="text" name="Blue_sclera_D"></td>
			<td><input type="text" name="Blue_sclera_3"></td>
			<td><input type="text" name="Blue_sclera_6"></td>
			<td><input type="text" name="Blue_sclera_1"></td>
			<td><input type="text" name="Blue_sclera_2"></td>
			<td><input type="text" name="Blue_sclera_5"></td>
		</tr>
		<tr>
			<th>Dentinogenesis_imperfecta</th>
			<td><input type="text" name="Dentinogenesis_imperfecta_D"></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_3"></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_6"></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_1"></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_2"></td>
			<td><input type="text" name="Dentinogenesis_imperfecta_5"></td>
		</tr>
		<tr>
			<th>Acoustic_damage</th>
			<td><input type="text" name="Acoustic_damage_D"></td>
			<td><input type="text" name="Acoustic_damage_3"></td>
			<td><input type="text" name="Acoustic_damage_6"></td>
			<td><input type="text" name="Acoustic_damage_1"></td>
			<td><input type="text" name="Acoustic_damage_2"></td>
			<td><input type="text" name="Acoustic_damage_5"></td>
		</tr>
		<tr>
			<th>Deformity UL</th>
			<td><input type="text" name="UL_D"></td>
			<td><input type="text" name="UL_3"></td>
			<td><input type="text" name="UL_6"></td>
			<td><input type="text" name="UL_1"></td>
			<td><input type="text" name="UL_2"></td>
			<td><input type="text" name="UL_5"></td>
		</tr>
		<tr>
			<th>Deformity LL</th>
			<td><input type="text" name="LL_D"></td>
			<td><input type="text" name="LL_3"></td>
			<td><input type="text" name="LL_6"></td>
			<td><input type="text" name="LL_1"></td>
			<td><input type="text" name="LL_2"></td>
			<td><input type="text" name="LL_5"></td>
		</tr>
		<tr>
			<th>Deformity Spine</th>
			<td><input type="text" name="spine_D"></td>
			<td><input type="text" name="spine_3"></td>
			<td><input type="text" name="spine_6"></td>
			<td><input type="text" name="spine_1"></td>
			<td><input type="text" name="spine_2"></td>
			<td><input type="text" name="spine_5"></td>
		</tr>
		<tr>
			<th>Hyper_extensibility</th>
			<td><input type="text" name="Hyper_extensibility_D"></td>
			<td><input type="text" name="Hyper_extensibility_3"></td>
			<td><input type="text" name="Hyper_extensibility_6"></td>
			<td><input type="text" name="Hyper_extensibility_1"></td>
			<td><input type="text" name="Hyper_extensibility_2"></td>
			<td><input type="text" name="Hyper_extensibility_5"></td>
		</tr>
		<tr>
			<th>Tufting_of_phalanges</th>
			<td><input type="text" name="Tufting_of_phalanges_D"></td>
			<td><input type="text" name="Tufting_of_phalanges_3"></td>
			<td><input type="text" name="Tufting_of_phalanges_6"></td>
			<td><input type="text" name="Tufting_of_phalanges_1"></td>
			<td><input type="text" name="Tufting_of_phalanges_2"></td>
			<td><input type="text" name="Tufting_of_phalanges_5"></td>
		</tr>
		<tr>
			<th>Short_4_th_metacarpal</th>
			<td><input type="text" name="Short_4_th_metacarpal_D"></td>
			<td><input type="text" name="Short_4_th_metacarpal_3"></td>
			<td><input type="text" name="Short_4_th_metacarpal_6"></td>
			<td><input type="text" name="Short_4_th_metacarpal_1"></td>
			<td><input type="text" name="Short_4_th_metacarpal_2"></td>
			<td><input type="text" name="Short_4_th_metacarpal_5"></td>
		</tr>
		<tr>
			<th>Tarsal</th>
			<td><input type="text" name="Tarsal_D"></td>
			<td><input type="text" name="Tarsal_3"></td>
			<td><input type="text" name="Tarsal_6"></td>
			<td><input type="text" name="Tarsal_1"></td>
			<td><input type="text" name="Tarsal_2"></td>
			<td><input type="text" name="Tarsal_5"></td>
		</tr>
		<tr>
			<th>Upper_Segment</th>
			<td><input type="text" name="Upper_Segment_D"></td>
			<td><input type="text" name="Upper_Segment_3"></td>
			<td><input type="text" name="Upper_Segment_6"></td>
			<td><input type="text" name="Upper_Segment_1"></td>
			<td><input type="text" name="Upper_Segment_2"></td>
			<td><input type="text" name="Upper_Segment_5"></td>
		</tr>
		<tr>
			<th>Arched_palate</th>
			<td><input type="text" name="Arched_palate_D"></td>
			<td><input type="text" name="Arched_palate_3"></td>
			<td><input type="text" name="Arched_palate_6"></td>
			<td><input type="text" name="Arched_palate_1"></td>
			<td><input type="text" name="Arched_palate_2"></td>
			<td><input type="text" name="Arched_palate_5"></td>
		</tr>
		<tr>
			<th>Waddling_gait</th>
			<td><input type="text" name="Waddling_gait_D"></td>
			<td><input type="text" name="Waddling_gait_3"></td>
			<td><input type="text" name="Waddling_gait_6"></td>
			<td><input type="text" name="Waddling_gait_1"></td>
			<td><input type="text" name="Waddling_gait_2"></td>
			<td><input type="text" name="Waddling_gait_5"></td>
		</tr><tr>
			<th>Exostosis</th>
			<td><input type="text" name="Exostosis_D"></td>
			<td><input type="text" name="Exostosis_3"></td>
			<td><input type="text" name="Exostosis_6"></td>
			<td><input type="text" name="Exostosis_1"></td>
			<td><input type="text" name="Exostosis_2"></td>
			<td><input type="text" name="Exostosis_5"></td>
		</tr>
		<tr>
			<th>Hypoplasia_of_mandible</th>
			<td><input type="text" name="Hypoplasia_of_mandible_D"></td>
			<td><input type="text" name="Hypoplasia_of_mandible_3"></td>
			<td><input type="text" name="Hypoplasia_of_mandible_6"></td>
			<td><input type="text" name="Hypoplasia_of_mandible_1"></td>
			<td><input type="text" name="Hypoplasia_of_mandible_2"></td>
			<td><input type="text" name="Hypoplasia_of_mandible_5"></td>
		</tr>
		<tr>
			<th>Monostotic</th>
			<td><input type="text" name="Monostotic_D"></td>
			<td><input type="text" name="Monostotic_3"></td>
			<td><input type="text" name="Monostotic_6"></td>
			<td><input type="text" name="Monostotic_1"></td>
			<td><input type="text" name="Monostotic_2"></td>
			<td><input type="text" name="Monostotic_5"></td>
		</tr>
		<tr>
			<th>Polyostotic_lesion</th>
			<td><input type="text" name="Polyostotic_lesion_D"></td>
			<td><input type="text" name="Polyostotic_lesion_3"></td>
			<td><input type="text" name="Polyostotic_lesion_6"></td>
			<td><input type="text" name="Polyostotic_lesion_1"></td>
			<td><input type="text" name="Polyostotic_lesion_2"></td>
			<td><input type="text" name="Polyostotic_lesion_5"></td>
		</tr>
		<tr>
			<th>Hyperprolactinaemia</th>
			<td><input type="text" name="Hyperprolactinaemia_D"></td>
			<td><input type="text" name="Hyperprolactinaemia_3"></td>
			<td><input type="text" name="Hyperprolactinaemia_6"></td>
			<td><input type="text" name="Hyperprolactinaemia_1"></td>
			<td><input type="text" name="Hyperprolactinaemia_2"></td>
			<td><input type="text" name="Hyperprolactinaemia_5"></td>
		</tr>
		<tr>
			<th>Weakness_Fatiguability</th>
			<td><input type="text" name="Weakness_Fatiguability_D"></td>
			<td><input type="text" name="Weakness_Fatiguability_3"></td>
			<td><input type="text" name="Weakness_Fatiguability_6"></td>
			<td><input type="text" name="Weakness_Fatiguability_1"></td>
			<td><input type="text" name="Weakness_Fatiguability_2"></td>
			<td><input type="text" name="Weakness_Fatiguability_5"></td>
		</tr>
		<tr>
			<th>Joint_pain</th>
			<td><input type="text" name="Joint_pain_D"></td>
			<td><input type="text" name="Joint_pain_3"></td>
			<td><input type="text" name="Joint_pain_6"></td>
			<td><input type="text" name="Joint_pain_1"></td>
			<td><input type="text" name="Joint_pain_2"></td>
			<td><input type="text" name="Joint_pain_5"></td>
		</tr>
		<tr>
			<th>Visual_impairment</th>
			<td><input type="text" name="Visual_impairment_D"></td>
			<td><input type="text" name="Visual_impairment_3"></td>
			<td><input type="text" name="Visual_impairment_6"></td>
			<td><input type="text" name="Visual_impairment_1"></td>
			<td><input type="text" name="Visual_impairment_2"></td>
			<td><input type="text" name="Visual_impairment_5"></td>
		</tr>
		<tr>
			<th>Precocious_puberty</th>
			<td><input type="text" name="Precocious_puberty_D"></td>
			<td><input type="text" name="Precocious_puberty_3"></td>
			<td><input type="text" name="Precocious_puberty_6"></td>
			<td><input type="text" name="Precocious_puberty_1"></td>
			<td><input type="text" name="Precocious_puberty_2"></td>
			<td><input type="text" name="Precocious_puberty_5"></td>
		</tr>
		<tr>
			<th>Hypophosphatemic_rickets</th>
			<td><input type="text" name="Hypophosphatemic_rickets_D"></td>
			<td><input type="text" name="Hypophosphatemic_rickets_3"></td>
			<td><input type="text" name="Hypophosphatemic_rickets_6"></td>
			<td><input type="text" name="Hypophosphatemic_rickets_1"></td>
			<td><input type="text" name="Hypophosphatemic_rickets_2"></td>
			<td><input type="text" name="Hypophosphatemic_rickets_5"></td>
		</tr>
		<tr>
			<th>Facial_asymmetry</th>
			<td><input type="text" name="Facial_asymmetry_D"></td>
			<td><input type="text" name="Facial_asymmetry_3"></td>
			<td><input type="text" name="Facial_asymmetry_6"></td>
			<td><input type="text" name="Facial_asymmetry_1"></td>
			<td><input type="text" name="Facial_asymmetry_2"></td>
			<td><input type="text" name="Facial_asymmetry_5"></td>
		</tr>
		<tr>
			<th>Any_other</th>
			<td><input type="text" name="Any_other_D"></td>
			<td><input type="text" name="Any_other_3"></td>
			<td><input type="text" name="Any_other_6"></td>
			<td><input type="text" name="Any_other_1"></td>
			<td><input type="text" name="Any_other_2"></td>
			<td><input type="text" name="Any_other_5"></td>
		</tr>
		</table>

			<div class="box" width="40px" align="center" id = "heading">
    		<input type="submit" value="Save and Continue" align="center">
    	</div>	
	</form>
</div>
</body>
</html>