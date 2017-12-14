<?php
	include_once 'dbh.php';



	$Name = $_POST['First_Name'];
	$Age = $_POST['age'];
	$Sex = $_POST['gender'];
	$CR_No = $_POST['CR_No'];
	$Admission_No = $_POST['Admission_No'];
	$EC_No = $_POST['EC_No'];
	$DOA = $_POST['DOA'];
	$DOS = $_POST['DOS'];
	$DOD = $_POST['DOD'];
	$Telephone = $_POST['Telephone'];
	$Mobile = $_POST['Mobile'];
	$E_mail = "abc@gmail.com";
	$Self = $_POST['Self'];
	$Parents = $_POST['Parents'];
	$Grand_Parents = $_POST['Grand_Parents'];
	$Index_no = $_POST['Admission_No'];
	$Address = $_POST['message'];
	$Referring_physicians = $_POST['Referring_physicians'];
	$Presenting_C = $_POST['Presenting_C'];
	$Deformity = $_POST['Deformity'];
	$No_of_Fracture = $_POST['No_of_Fracture'];
	$Bone_Pain = $_POST['Bone_Pain'];
	$Short_Stature = $_POST['Short_Stature'];
	$Teeth_abnormality = $_POST['Teeth_abnormality'];
	$Duration_of_symptoms = $_POST['Duration_of_symptoms'];
	$Ht = 120;
	$Wt = 5;
	$BMI = 7;
	$sql1 = "insert into entervalue values($Index_no, '');";
	if($Age == NULL)
		$Age = 0;
	if($CR_No == NULL)
		$CR_No = 0;
	if($Admission_No == NULL)
		$Admission_No = 0;
	if($EC_No == NULL)
		$EC_No = 0;
	if($Telephone == NULL)
		$Telephone = 0;
	if($Mobile == NULL)
		$Mobile = 0;
	if($Index_no == NULL)
		$Index_no = 0;


	mysqli_query($conn,$sql1);
	
	$sql = "insert into MBD 
	(name, age, sex, index_no, CR_no, addmission_no, EC_no, DOA, DOS, DOD, address, telephone, mobile, email, self, parents, grandparents, r_physicians, presenting, deformity, n_o_fracture, bone_pain, short_stature, teeth_abnormality, duration, ht, wt, BMI) values 
	('$Name',
	$Age,
	'$Sex',
	$Index_no,
	$CR_No,
	$Admission_No,
	$EC_No,
	'$DOA',
	'$DOS',
	'$DOD',
	'$Address',
	$Telephone,
	$Mobile,
	'$E_mail',
	'$Self',
	'$Parents',
	'$Grand_Parents',
	'$Referring_physicians',
	'$Presenting_C',
	'$Deformity',
	'$No_of_Fracture',
	'$Bone_Pain',
	'$Short_Stature',
	'$Teeth_abnormality',
	'$Duration_of_symptoms',
	$Ht,
	$Wt,
	$BMI);";
	/*
	$sql = "insert into MBD (name, age, sex, addmission_no) values ('$Name',$Age,'$Sex',$Admission_No);";
	*/
	echo $sql;

	mysqli_query($conn,$sql);
	header("Location: ../test.php?addpatient=sucess");				
	?>