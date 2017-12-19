<?php
	include_once 'dbh.php';


	$admission_no = $_POST['addpatient'];
		if(isset($_POST['status'])){
			$sql = "delete from OSD where addmission_no=".$admission_no;
			mysqli_query($conn, $sql);

			$sql = "delete from OS3M where addmission_no=".$admission_no;
			mysqli_query($conn, $sql);
			$sql = "delete from OS6M where addmission_no=".$admission_no;
			mysqli_query($conn, $sql);
			$sql = "delete from OS1Y where addmission_no=".$admission_no;
			mysqli_query($conn, $sql);
			$sql = "delete from OS2Y where addmission_no=".$admission_no;
			mysqli_query($conn, $sql);
			$sql = "delete from OS3Y where addmission_no=".$admission_no;
			mysqli_query($conn, $sql);

		}


	$Asymptomatic = $_POST['Asymptomatic_D'];
	$Bone_pain= $_POST['Bone_pain_D'];
	$Backache= $_POST['Backache_D'];
	$Bony_Swelling= $_POST['Bony_Swelling_D'];
	$Cripple= $_POST['Cripple_D'];
	$Fracture= $_POST['Fracture_D'];
	$Anorexia= $_POST['Anorexia_D'];
	$Constipation= $_POST['Constipation_D'];
	$Loss_of_teeth= $_POST['Loss_of_teeth_D'];
	$Cataract= $_POST['Cataract_D'];
	$Renal_Colic= $_POST['Renal_Colic_D'];
	$Round_face= $_POST['Round_face_D'];
	$Short_stature= $_POST['Short_stature_D'];
	$Cafe_au_lait_macule= $_POST['Cafe_au_lait_macule_D'];
	$Blue_sclera= $_POST['Blue_sclera_D'];
	$Dentinogenesis_imperfecta= $_POST['Dentinogenesis_imperfecta_D'];
	$Acoustic_damage= $_POST['Acoustic_damage_D'];
	$UL= $_POST['UL_D'];
	$LL= $_POST['LL_D'];
	$spine= $_POST['spine_D'];
	$Hyper_extensibility= $_POST['Hyper_extensibility_D'];
	$Tufting_of_phalanges= $_POST['Tufting_of_phalanges_D'];
	$Short_4_th_metacarpal= $_POST['Short_4_th_metacarpal_D'];
	$Tarsal= $_POST['Tarsal_D'];
	$Upper_Segment= $_POST['Upper_Segment_D'];
	$Arched_palate= $_POST['Arched_palate_D'];
	$Waddling_gait= $_POST['Waddling_gait_D'];
	$Exostosis= $_POST['Exostosis_D'];
	$Hypoplasia_of_mandible= $_POST['Hypoplasia_of_mandible_D'];
	$Monostotic= $_POST['Monostotic_D'];
	$Polyostotic_lesion= $_POST['Polyostotic_lesion_D'];
	$Hyperprolactinaemia= $_POST['Hyperprolactinaemia_D'];
	$Weakness_Fatiguability= $_POST['Weakness_Fatiguability_D'];
	$Joint_pain= $_POST['Joint_pain_D'];
	$Visual_impairment= $_POST['Visual_impairment_D'];
	$Precocious_puberty= $_POST['Precocious_puberty_D'];
	$Hypophosphatemic_rickets= $_POST['Hypophosphatemic_rickets_D'];
	$Facial_asymmetry= $_POST['Facial_asymmetry_D'];
	$Any_other= $_POST['Any_other_D'];


	$sql = "insert into OSD (addmission_no,
				Asymptomatic,
				Bone_pain,
				Backache,
				Bony_Swelling,
				Cripple,
				Fracture,
				Anorexia,
				Constipation,
				Loss_of_teeth,
				Cataract,
				Renal_Colic,
				Round_face,
				Short_stature,
				cafe,
				Blue_sclera,
				Dentinogenesis_imperfecta,
				Acoustic_damage,
				UL,
				LL,
				spine,
				Hyper_extensibility,
				Tufting_of_phalanges,
				Short_4_th_metacarpal,
				Tarsal,
				Upper_Segment,
				Arched_palate,
				Waddling_gait,
				Exostosis,
				Hypoplasia_of_mandible,
				Monostotic,
				Polyostotic_lesion,
				Hyperprolactinaemia,
				Weakness_Fatiguability,
				Joint_pain,
				Visual_impairment,
				Precocious_puberty,
				Hypophosphatemic_rickets,
				Facial_asymmetry,
				Any_other) values ($admission_no,
					'$Asymptomatic',
					'$Bone_pain',
					'$Backache',
					'$Bony_Swelling',
					'$Cripple',
					'$Fracture',
					'$Anorexia',
					'$Constipation',
					'$Loss_of_teeth',
					'$Cataract',
					'$Renal_Colic',
					'$Round_face',
					'$Short_stature',
					'$Cafe_au_lait_macule',
					'$Blue_sclera',
					'$Dentinogenesis_imperfecta',
					'$Acoustic_damage',
					'$UL',
					'$LL',
					'$spine',
					'$Hyper_extensibility',
					'$Tufting_of_phalanges',
					'$Short_4_th_metacarpal',
					'$Tarsal',
					'$Upper_Segment',
					'$Arched_palate',
					'$Waddling_gait',
					'$Exostosis',
					'$Hypoplasia_of_mandible',
					'$Monostotic',
					'$Polyostotic_lesion',
					'$Hyperprolactinaemia',
					'$Weakness_Fatiguability',
					'$Joint_pain',
					'$Visual_impairment',
					'$Precocious_puberty',
					'$Hypophosphatemic_rickets',
					'$Facial_asymmetry',
					'$Any_other');";

	mysqli_query($conn,$sql);
	$result = mysqli_query($conn, $sql);
if ( false==$result ) {
  printf("error: %s\n", mysqli_error($conn));
}
else {
  echo 'done.';
}




	$Asymptomatic = $_POST['Asymptomatic_3'];
	$Bone_pain= $_POST['Bone_pain_3'];
	$Backache= $_POST['Backache_3'];
	$Bony_Swelling= $_POST['Bony_Swelling_3'];
	$Cripple= $_POST['Cripple_3'];
	$Fracture= $_POST['Fracture_3'];
	$Anorexia= $_POST['Anorexia_3'];
	$Constipation= $_POST['Constipation_3'];
	$Loss_of_teeth= $_POST['Loss_of_teeth_3'];
	$Cataract= $_POST['Cataract_3'];
	$Renal_Colic= $_POST['Renal_Colic_3'];
	$Round_face= $_POST['Round_face_3'];
	$Short_stature= $_POST['Short_stature_3'];
	$Cafe_au_lait_macule= $_POST['Cafe_au_lait_macule_3'];
	$Blue_sclera= $_POST['Blue_sclera_3'];
	$Dentinogenesis_imperfecta= $_POST['Dentinogenesis_imperfecta_3'];
	$Acoustic_damage= $_POST['Acoustic_damage_3'];
	$UL= $_POST['UL_3'];
	$LL= $_POST['LL_3'];
	$spine= $_POST['spine_3'];
	$Hyper_extensibility= $_POST['Hyper_extensibility_3'];
	$Tufting_of_phalanges= $_POST['Tufting_of_phalanges_3'];
	$Short_4_th_metacarpal= $_POST['Short_4_th_metacarpal_3'];
	$Tarsal= $_POST['Tarsal_3'];
	$Upper_Segment= $_POST['Upper_Segment_3'];
	$Arched_palate= $_POST['Arched_palate_3'];
	$Waddling_gait= $_POST['Waddling_gait_3'];
	$Exostosis= $_POST['Exostosis_3'];
	$Hypoplasia_of_mandible= $_POST['Hypoplasia_of_mandible_3'];
	$Monostotic= $_POST['Monostotic_3'];
	$Polyostotic_lesion= $_POST['Polyostotic_lesion_3'];
	$Hyperprolactinaemia= $_POST['Hyperprolactinaemia_3'];
	$Weakness_Fatiguability= $_POST['Weakness_Fatiguability_3'];
	$Joint_pain= $_POST['Joint_pain_3'];
	$Visual_impairment= $_POST['Visual_impairment_3'];
	$Precocious_puberty= $_POST['Precocious_puberty_3'];
	$Hypophosphatemic_rickets= $_POST['Hypophosphatemic_rickets_3'];
	$Facial_asymmetry= $_POST['Facial_asymmetry_3'];
	$Any_other= $_POST['Any_other_3'];

	$sql = "insert into OS3M (addmission_no,
				Asymptomatic,
				Bone_pain,
				Backache,
				Bony_Swelling,
				Cripple,
				Fracture,
				Anorexia,
				Constipation,
				Loss_of_teeth,
				Cataract,
				Renal_Colic,
				Round_face,
				Short_stature,
				cafe,
				Blue_sclera,
				Dentinogenesis_imperfecta,
				Acoustic_damage,
				UL,
				LL,
				spine,
				Hyper_extensibility,
				Tufting_of_phalanges,
				Short_4_th_metacarpal,
				Tarsal,
				Upper_Segment,
				Arched_palate,
				Waddling_gait,
				Exostosis,
				Hypoplasia_of_mandible,
				Monostotic,
				Polyostotic_lesion,
				Hyperprolactinaemia,
				Weakness_Fatiguability,
				Joint_pain,
				Visual_impairment,
				Precocious_puberty,
				Hypophosphatemic_rickets,
				Facial_asymmetry,
				Any_other) values ($admission_no,
					'$Asymptomatic',
					'$Bone_pain',
					'$Backache',
					'$Bony_Swelling',
					'$Cripple',
					'$Fracture',
					'$Anorexia',
					'$Constipation',
					'$Loss_of_teeth',
					'$Cataract',
					'$Renal_Colic',
					'$Round_face',
					'$Short_stature',
					'$Cafe_au_lait_macule',
					'$Blue_sclera',
					'$Dentinogenesis_imperfecta',
					'$Acoustic_damage',
					'$UL',
					'$LL',
					'$spine',
					'$Hyper_extensibility',
					'$Tufting_of_phalanges',
					'$Short_4_th_metacarpal',
					'$Tarsal',
					'$Upper_Segment',
					'$Arched_palate',
					'$Waddling_gait',
					'$Exostosis',
					'$Hypoplasia_of_mandible',
					'$Monostotic',
					'$Polyostotic_lesion',
					'$Hyperprolactinaemia',
					'$Weakness_Fatiguability',
					'$Joint_pain',
					'$Visual_impairment',
					'$Precocious_puberty',
					'$Hypophosphatemic_rickets',
					'$Facial_asymmetry',
					'$Any_other');";

	mysqli_query($conn,$sql);
	$result = mysqli_query($conn, $sql);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($conn));
}
else {
  echo 'done.';
}

	$Asymptomatic = $_POST['Asymptomatic_6'];
	$Bone_pain= $_POST['Bone_pain_6'];
	$Backache= $_POST['Backache_6'];
	$Bony_Swelling= $_POST['Bony_Swelling_6'];
	$Cripple= $_POST['Cripple_6'];
	$Fracture= $_POST['Fracture_6'];
	$Anorexia= $_POST['Anorexia_6'];
	$Constipation= $_POST['Constipation_6'];
	$Loss_of_teeth= $_POST['Loss_of_teeth_6'];
	$Cataract= $_POST['Cataract_6'];
	$Renal_Colic= $_POST['Renal_Colic_6'];
	$Round_face= $_POST['Round_face_6'];
	$Short_stature= $_POST['Short_stature_6'];
	$Cafe_au_lait_macule= $_POST['Cafe_au_lait_macule_6'];
	$Blue_sclera= $_POST['Blue_sclera_6'];
	$Dentinogenesis_imperfecta= $_POST['Dentinogenesis_imperfecta_6'];
	$Acoustic_damage= $_POST['Acoustic_damage_6'];
	$UL= $_POST['UL_6'];
	$LL= $_POST['LL_6'];
	$spine= $_POST['spine_6'];
	$Hyper_extensibility= $_POST['Hyper_extensibility_6'];
	$Tufting_of_phalanges= $_POST['Tufting_of_phalanges_6'];
	$Short_4_th_metacarpal= $_POST['Short_4_th_metacarpal_6'];
	$Tarsal= $_POST['Tarsal_6'];
	$Upper_Segment= $_POST['Upper_Segment_6'];
	$Arched_palate= $_POST['Arched_palate_6'];
	$Waddling_gait= $_POST['Waddling_gait_6'];
	$Exostosis= $_POST['Exostosis_6'];
	$Hypoplasia_of_mandible= $_POST['Hypoplasia_of_mandible_6'];
	$Monostotic= $_POST['Monostotic_6'];
	$Polyostotic_lesion= $_POST['Polyostotic_lesion_6'];
	$Hyperprolactinaemia= $_POST['Hyperprolactinaemia_6'];
	$Weakness_Fatiguability= $_POST['Weakness_Fatiguability_6'];
	$Joint_pain= $_POST['Joint_pain_6'];
	$Visual_impairment= $_POST['Visual_impairment_6'];
	$Precocious_puberty= $_POST['Precocious_puberty_6'];
	$Hypophosphatemic_rickets= $_POST['Hypophosphatemic_rickets_6'];
	$Facial_asymmetry= $_POST['Facial_asymmetry_6'];
	$Any_other= $_POST['Any_other_6'];

	$sql = "insert into OS6M (addmission_no,
				Asymptomatic,
				Bone_pain,
				Backache,
				Bony_Swelling,
				Cripple,
				Fracture,
				Anorexia,
				Constipation,
				Loss_of_teeth,
				Cataract,
				Renal_Colic,
				Round_face,
				Short_stature,
				cafe,
				Blue_sclera,
				Dentinogenesis_imperfecta,
				Acoustic_damage,
				UL,
				LL,
				spine,
				Hyper_extensibility,
				Tufting_of_phalanges,
				Short_4_th_metacarpal,
				Tarsal,
				Upper_Segment,
				Arched_palate,
				Waddling_gait,
				Exostosis,
				Hypoplasia_of_mandible,
				Monostotic,
				Polyostotic_lesion,
				Hyperprolactinaemia,
				Weakness_Fatiguability,
				Joint_pain,
				Visual_impairment,
				Precocious_puberty,
				Hypophosphatemic_rickets,
				Facial_asymmetry,
				Any_other) values ($admission_no,
					'$Asymptomatic',
					'$Bone_pain',
					'$Backache',
					'$Bony_Swelling',
					'$Cripple',
					'$Fracture',
					'$Anorexia',
					'$Constipation',
					'$Loss_of_teeth',
					'$Cataract',
					'$Renal_Colic',
					'$Round_face',
					'$Short_stature',
					'$Cafe_au_lait_macule',
					'$Blue_sclera',
					'$Dentinogenesis_imperfecta',
					'$Acoustic_damage',
					'$UL',
					'$LL',
					'$spine',
					'$Hyper_extensibility',
					'$Tufting_of_phalanges',
					'$Short_4_th_metacarpal',
					'$Tarsal',
					'$Upper_Segment',
					'$Arched_palate',
					'$Waddling_gait',
					'$Exostosis',
					'$Hypoplasia_of_mandible',
					'$Monostotic',
					'$Polyostotic_lesion',
					'$Hyperprolactinaemia',
					'$Weakness_Fatiguability',
					'$Joint_pain',
					'$Visual_impairment',
					'$Precocious_puberty',
					'$Hypophosphatemic_rickets',
					'$Facial_asymmetry',
					'$Any_other');";

	mysqli_query($conn,$sql);
	$result = mysqli_query($conn, $sql);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($conn));
}
else {
  echo 'done.';
}
$Asymptomatic = $_POST['Asymptomatic_1'];
	$Bone_pain= $_POST['Bone_pain_1'];
	$Backache= $_POST['Backache_1'];
	$Bony_Swelling= $_POST['Bony_Swelling_1'];
	$Cripple= $_POST['Cripple_1'];
	$Fracture= $_POST['Fracture_1'];
	$Anorexia= $_POST['Anorexia_1'];
	$Constipation= $_POST['Constipation_1'];
	$Loss_of_teeth= $_POST['Loss_of_teeth_1'];
	$Cataract= $_POST['Cataract_1'];
	$Renal_Colic= $_POST['Renal_Colic_1'];
	$Round_face= $_POST['Round_face_1'];
	$Short_stature= $_POST['Short_stature_1'];
	$Cafe_au_lait_macule= $_POST['Cafe_au_lait_macule_1'];
	$Blue_sclera= $_POST['Blue_sclera_1'];
	$Dentinogenesis_imperfecta= $_POST['Dentinogenesis_imperfecta_1'];
	$Acoustic_damage= $_POST['Acoustic_damage_1'];
	$UL= $_POST['UL_1'];
	$LL= $_POST['LL_1'];
	$spine= $_POST['spine_1'];
	$Hyper_extensibility= $_POST['Hyper_extensibility_1'];
	$Tufting_of_phalanges= $_POST['Tufting_of_phalanges_1'];
	$Short_4_th_metacarpal= $_POST['Short_4_th_metacarpal_1'];
	$Tarsal= $_POST['Tarsal_1'];
	$Upper_Segment= $_POST['Upper_Segment_1'];
	$Arched_palate= $_POST['Arched_palate_1'];
	$Waddling_gait= $_POST['Waddling_gait_1'];
	$Exostosis= $_POST['Exostosis_1'];
	$Hypoplasia_of_mandible= $_POST['Hypoplasia_of_mandible_1'];
	$Monostotic= $_POST['Monostotic_1'];
	$Polyostotic_lesion= $_POST['Polyostotic_lesion_1'];
	$Hyperprolactinaemia= $_POST['Hyperprolactinaemia_1'];
	$Weakness_Fatiguability= $_POST['Weakness_Fatiguability_1'];
	$Joint_pain= $_POST['Joint_pain_1'];
	$Visual_impairment= $_POST['Visual_impairment_1'];
	$Precocious_puberty= $_POST['Precocious_puberty_1'];
	$Hypophosphatemic_rickets= $_POST['Hypophosphatemic_rickets_1'];
	$Facial_asymmetry= $_POST['Facial_asymmetry_1'];
	$Any_other= $_POST['Any_other_1'];

	$sql = "insert into OS1Y (addmission_no,
				Asymptomatic,
				Bone_pain,
				Backache,
				Bony_Swelling,
				Cripple,
				Fracture,
				Anorexia,
				Constipation,
				Loss_of_teeth,
				Cataract,
				Renal_Colic,
				Round_face,
				Short_stature,
				cafe,
				Blue_sclera,
				Dentinogenesis_imperfecta,
				Acoustic_damage,
				UL,
				LL,
				spine,
				Hyper_extensibility,
				Tufting_of_phalanges,
				Short_4_th_metacarpal,
				Tarsal,
				Upper_Segment,
				Arched_palate,
				Waddling_gait,
				Exostosis,
				Hypoplasia_of_mandible,
				Monostotic,
				Polyostotic_lesion,
				Hyperprolactinaemia,
				Weakness_Fatiguability,
				Joint_pain,
				Visual_impairment,
				Precocious_puberty,
				Hypophosphatemic_rickets,
				Facial_asymmetry,
				Any_other) values ($admission_no,
					'$Asymptomatic',
					'$Bone_pain',
					'$Backache',
					'$Bony_Swelling',
					'$Cripple',
					'$Fracture',
					'$Anorexia',
					'$Constipation',
					'$Loss_of_teeth',
					'$Cataract',
					'$Renal_Colic',
					'$Round_face',
					'$Short_stature',
					'$Cafe_au_lait_macule',
					'$Blue_sclera',
					'$Dentinogenesis_imperfecta',
					'$Acoustic_damage',
					'$UL',
					'$LL',
					'$spine',
					'$Hyper_extensibility',
					'$Tufting_of_phalanges',
					'$Short_4_th_metacarpal',
					'$Tarsal',
					'$Upper_Segment',
					'$Arched_palate',
					'$Waddling_gait',
					'$Exostosis',
					'$Hypoplasia_of_mandible',
					'$Monostotic',
					'$Polyostotic_lesion',
					'$Hyperprolactinaemia',
					'$Weakness_Fatiguability',
					'$Joint_pain',
					'$Visual_impairment',
					'$Precocious_puberty',
					'$Hypophosphatemic_rickets',
					'$Facial_asymmetry',
					'$Any_other');";

	mysqli_query($conn,$sql);
	$result = mysqli_query($conn, $sql);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($conn));
}
else {
  echo 'done.';
}
$Asymptomatic = $_POST['Asymptomatic_2'];
	$Bone_pain= $_POST['Bone_pain_2'];
	$Backache= $_POST['Backache_2'];
	$Bony_Swelling= $_POST['Bony_Swelling_2'];
	$Cripple= $_POST['Cripple_2'];
	$Fracture= $_POST['Fracture_2'];
	$Anorexia= $_POST['Anorexia_2'];
	$Constipation= $_POST['Constipation_2'];
	$Loss_of_teeth= $_POST['Loss_of_teeth_2'];
	$Cataract= $_POST['Cataract_2'];
	$Renal_Colic= $_POST['Renal_Colic_2'];
	$Round_face= $_POST['Round_face_2'];
	$Short_stature= $_POST['Short_stature_2'];
	$Cafe_au_lait_macule= $_POST['Cafe_au_lait_macule_2'];
	$Blue_sclera= $_POST['Blue_sclera_2'];
	$Dentinogenesis_imperfecta= $_POST['Dentinogenesis_imperfecta_2'];
	$Acoustic_damage= $_POST['Acoustic_damage_2'];
	$UL= $_POST['UL_2'];
	$LL= $_POST['LL_2'];
	$spine= $_POST['spine_2'];
	$Hyper_extensibility= $_POST['Hyper_extensibility_2'];
	$Tufting_of_phalanges= $_POST['Tufting_of_phalanges_2'];
	$Short_4_th_metacarpal= $_POST['Short_4_th_metacarpal_2'];
	$Tarsal= $_POST['Tarsal_2'];
	$Upper_Segment= $_POST['Upper_Segment_2'];
	$Arched_palate= $_POST['Arched_palate_2'];
	$Waddling_gait= $_POST['Waddling_gait_2'];
	$Exostosis= $_POST['Exostosis_2'];
	$Hypoplasia_of_mandible= $_POST['Hypoplasia_of_mandible_2'];
	$Monostotic= $_POST['Monostotic_2'];
	$Polyostotic_lesion= $_POST['Polyostotic_lesion_2'];
	$Hyperprolactinaemia= $_POST['Hyperprolactinaemia_2'];
	$Weakness_Fatiguability= $_POST['Weakness_Fatiguability_2'];
	$Joint_pain= $_POST['Joint_pain_2'];
	$Visual_impairment= $_POST['Visual_impairment_2'];
	$Precocious_puberty= $_POST['Precocious_puberty_2'];
	$Hypophosphatemic_rickets= $_POST['Hypophosphatemic_rickets_2'];
	$Facial_asymmetry= $_POST['Facial_asymmetry_2'];
	$Any_other= $_POST['Any_other_2'];

	$sql = "insert into OS2Y (addmission_no,
				Asymptomatic,
				Bone_pain,
				Backache,
				Bony_Swelling,
				Cripple,
				Fracture,
				Anorexia,
				Constipation,
				Loss_of_teeth,
				Cataract,
				Renal_Colic,
				Round_face,
				Short_stature,
				cafe,
				Blue_sclera,
				Dentinogenesis_imperfecta,
				Acoustic_damage,
				UL,
				LL,
				spine,
				Hyper_extensibility,
				Tufting_of_phalanges,
				Short_4_th_metacarpal,
				Tarsal,
				Upper_Segment,
				Arched_palate,
				Waddling_gait,
				Exostosis,
				Hypoplasia_of_mandible,
				Monostotic,
				Polyostotic_lesion,
				Hyperprolactinaemia,
				Weakness_Fatiguability,
				Joint_pain,
				Visual_impairment,
				Precocious_puberty,
				Hypophosphatemic_rickets,
				Facial_asymmetry,
				Any_other) values ($admission_no,
					'$Asymptomatic',
					'$Bone_pain',
					'$Backache',
					'$Bony_Swelling',
					'$Cripple',
					'$Fracture',
					'$Anorexia',
					'$Constipation',
					'$Loss_of_teeth',
					'$Cataract',
					'$Renal_Colic',
					'$Round_face',
					'$Short_stature',
					'$Cafe_au_lait_macule',
					'$Blue_sclera',
					'$Dentinogenesis_imperfecta',
					'$Acoustic_damage',
					'$UL',
					'$LL',
					'$spine',
					'$Hyper_extensibility',
					'$Tufting_of_phalanges',
					'$Short_4_th_metacarpal',
					'$Tarsal',
					'$Upper_Segment',
					'$Arched_palate',
					'$Waddling_gait',
					'$Exostosis',
					'$Hypoplasia_of_mandible',
					'$Monostotic',
					'$Polyostotic_lesion',
					'$Hyperprolactinaemia',
					'$Weakness_Fatiguability',
					'$Joint_pain',
					'$Visual_impairment',
					'$Precocious_puberty',
					'$Hypophosphatemic_rickets',
					'$Facial_asymmetry',
					'$Any_other');";

	mysqli_query($conn,$sql);
	$result = mysqli_query($conn, $sql);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($conn));
}
else {
  echo 'done.';
}


$Asymptomatic = $_POST['Asymptomatic_5'];
	$Bone_pain= $_POST['Bone_pain_5'];
	$Backache= $_POST['Backache_5'];
	$Bony_Swelling= $_POST['Bony_Swelling_5'];
	$Cripple= $_POST['Cripple_5'];
	$Fracture= $_POST['Fracture_5'];
	$Anorexia= $_POST['Anorexia_5'];
	$Constipation= $_POST['Constipation_5'];
	$Loss_of_teeth= $_POST['Loss_of_teeth_5'];
	$Cataract= $_POST['Cataract_5'];
	$Renal_Colic= $_POST['Renal_Colic_5'];
	$Round_face= $_POST['Round_face_5'];
	$Short_stature= $_POST['Short_stature_5'];
	$Cafe_au_lait_macule= $_POST['Cafe_au_lait_macule_5'];
	$Blue_sclera= $_POST['Blue_sclera_5'];
	$Dentinogenesis_imperfecta= $_POST['Dentinogenesis_imperfecta_5'];
	$Acoustic_damage= $_POST['Acoustic_damage_5'];
	$UL= $_POST['UL_5'];
	$LL= $_POST['LL_5'];
	$spine= $_POST['spine_5'];
	$Hyper_extensibility= $_POST['Hyper_extensibility_5'];
	$Tufting_of_phalanges= $_POST['Tufting_of_phalanges_5'];
	$Short_4_th_metacarpal= $_POST['Short_4_th_metacarpal_5'];
	$Tarsal= $_POST['Tarsal_5'];
	$Upper_Segment= $_POST['Upper_Segment_5'];
	$Arched_palate= $_POST['Arched_palate_5'];
	$Waddling_gait= $_POST['Waddling_gait_5'];
	$Exostosis= $_POST['Exostosis_5'];
	$Hypoplasia_of_mandible= $_POST['Hypoplasia_of_mandible_5'];
	$Monostotic= $_POST['Monostotic_5'];
	$Polyostotic_lesion= $_POST['Polyostotic_lesion_5'];
	$Hyperprolactinaemia= $_POST['Hyperprolactinaemia_5'];
	$Weakness_Fatiguability= $_POST['Weakness_Fatiguability_5'];
	$Joint_pain= $_POST['Joint_pain_5'];
	$Visual_impairment= $_POST['Visual_impairment_5'];
	$Precocious_puberty= $_POST['Precocious_puberty_5'];
	$Hypophosphatemic_rickets= $_POST['Hypophosphatemic_rickets_5'];
	$Facial_asymmetry= $_POST['Facial_asymmetry_5'];
	$Any_other= $_POST['Any_other_5'];

	$sql = "insert into OS5Y (addmission_no,
				Asymptomatic,
				Bone_pain,
				Backache,
				Bony_Swelling,
				Cripple,
				Fracture,
				Anorexia,
				Constipation,
				Loss_of_teeth,
				Cataract,
				Renal_Colic,
				Round_face,
				Short_stature,
				cafe,
				Blue_sclera,
				Dentinogenesis_imperfecta,
				Acoustic_damage,
				UL,
				LL,
				spine,
				Hyper_extensibility,
				Tufting_of_phalanges,
				Short_4_th_metacarpal,
				Tarsal,
				Upper_Segment,
				Arched_palate,
				Waddling_gait,
				Exostosis,
				Hypoplasia_of_mandible,
				Monostotic,
				Polyostotic_lesion,
				Hyperprolactinaemia,
				Weakness_Fatiguability,
				Joint_pain,
				Visual_impairment,
				Precocious_puberty,
				Hypophosphatemic_rickets,
				Facial_asymmetry,
				Any_other) values ($admission_no,
					'$Asymptomatic',
					'$Bone_pain',
					'$Backache',
					'$Bony_Swelling',
					'$Cripple',
					'$Fracture',
					'$Anorexia',
					'$Constipation',
					'$Loss_of_teeth',
					'$Cataract',
					'$Renal_Colic',
					'$Round_face',
					'$Short_stature',
					'$Cafe_au_lait_macule',
					'$Blue_sclera',
					'$Dentinogenesis_imperfecta',
					'$Acoustic_damage',
					'$UL',
					'$LL',
					'$spine',
					'$Hyper_extensibility',
					'$Tufting_of_phalanges',
					'$Short_4_th_metacarpal',
					'$Tarsal',
					'$Upper_Segment',
					'$Arched_palate',
					'$Waddling_gait',
					'$Exostosis',
					'$Hypoplasia_of_mandible',
					'$Monostotic',
					'$Polyostotic_lesion',
					'$Hyperprolactinaemia',
					'$Weakness_Fatiguability',
					'$Joint_pain',
					'$Visual_impairment',
					'$Precocious_puberty',
					'$Hypophosphatemic_rickets',
					'$Facial_asymmetry',
					'$Any_other');";

	mysqli_query($conn,$sql);
	$result = mysqli_query($conn, $sql);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($conn));
}
else {
  echo 'done.';
}


	if(isset($_POST['status'])){
		header("Location: ../biochemistry.php?status=edit&addpatient=".$admission_no);

	}else{
		header("Location: ../biochemistry.php?addpatient=".$admission_no);

	}

	?>
