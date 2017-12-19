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
	$Self = $_POST['Self'];
	$Parents = $_POST['Parents'];
	$Grand_Parents = $_POST['Grand_Parents'];
	$Address = $_POST['message'];
	$Referring_physicians = $_POST['Referring_physicians'];
	$Presenting_C = $_POST['Presenting_C'];
	$Deformity = $_POST['Deformity'];
	$No_of_Fracture = $_POST['No_of_Fracture'];
	$Bone_Pain = $_POST['Bone_Pain'];
	$Short_Stature = $_POST['Short_Stature'];
	$Teeth_abnormality = $_POST['Teeth_abnormality'];
	$Duration_of_symptoms = $_POST['Duration_of_symptoms'];

	$E_mail = "abc@gmail.com";
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
	if($Self == NULL)
		$Self = 0;
	if($Parents == NULL)
		$Parents = 0;
	if($Grand_Parents == NULL)
		$Grand_Parents = 0;

	if(isset($_POST['status'])){
		$index_no = $_GET['index_no']
		$sql = "UPDATE MBD set
						name='$Name',
						 age=$Age,
						 sex='$Sex',
						 index_no=$Index_no,
						 CR_no=$CR_No,
						 EC_no=$EC_No,
						 DOA='$DOA',
						 DOS='$DOS',
						 DOD='$DOD',
						 address='$Address',
						 telephone=$Telephone,
						 mobile=$Mobile,
						 email='$E_mail',
						 self=$Self,
						 parents=$Parents,
						 grandparents=$Grand_Parents,
						 r_physicians='$Referring_physicians',
						 presenting='$Presenting_C',
						 deformity='$Deformity',
						 n_o_fracture='$No_of_Fracture',
						 bone_pain='$Bone_Pain',
						 short_stature='$Short_Stature',
						 teeth_abnormality='$Teeth_abnormality',
						 duration='$Duration_of_symptoms',
						 ht=$Ht,
						 wt=$Wt,
						 BMI=$BMI
						 where index_no = $index_no;";

						 	mysqli_query($conn,$sql);
						 	header("Location: ../form.php?status=edit&addpatient=".$Admission_No);

	}else{
		$sql = "insert into MBD
		(name, age, sex, CR_no, admission_no, EC_no, DOA, DOS, DOD, address, telephone, mobile, email, self, parents, grandparents, r_physicians, presenting, deformity, n_o_fracture, bone_pain, short_stature, teeth_abnormality, duration, ht, wt, BMI) values
		('$Name',
		$Age,
		'$Sex',
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
		$Self,
		$Parents,
		$Grand_Parents,
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


			mysqli_query($conn,$sql);
			header("Location: ../form.php?addpatient=".$Admission_No);
	}
	/*
	$sql = "insert into MBD (name, age, sex, admission_no) values ('$Name',$Age,'$Sex',$Admission_No);";
	*/
	echo $sql;

	?>
