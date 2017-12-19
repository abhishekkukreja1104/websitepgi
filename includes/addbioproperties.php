<?php
	include_once 'dbh.php';

	$admission_no = $_POST['addpatient'];
	if(isset($_POST['status'])){
		$sql = "delete from BIOR where admission_no=".$admission_no;
		mysqli_query($conn, $sql);

		$sql = "delete from BIO3M where admission_no=".$admission_no;
		mysqli_query($conn, $sql);
		$sql = "delete from BIO6M where admission_no=".$admission_no;
		mysqli_query($conn, $sql);
		$sql = "delete from BIO1Y where admission_no=".$admission_no;
		mysqli_query($conn, $sql);
		$sql = "delete from BIO2Y where admission_no=".$admission_no;
		mysqli_query($conn, $sql);
		$sql = "delete from BIO5Y where admission_no=".$admission_no;
		mysqli_query($conn, $sql);

	}

	$S_Ca = $_POST['S_Ca_D'];
	$S_Phosphorus = $_POST['S_Phosphorus_D'];
	$S_albumin = $_POST['S_albumin_D'];
	$S_alkaline = $_POST['S_alkaline_D'];
	$OHD = $_POST['OHD_D'];
	$iPTH = $_POST['iPTH_D'];
	$FGF = $_POST['FGF_D'];
	$Na = $_POST['Na_D'];
	$K = $_POST['K_D'];
	$Cl = $_POST['Cl_D'];
	$SPO = $_POST['SPO_D'];
	$Ca = $_POST['Ca_D'];
	$creatinine = $_POST['creatinine_D'];
	//$Phosphorous = $_POST['Phosphorous_D'];
	$EGFR = $_POST['EGFR_D'];
	$GFR = $_POST['GFR_D'];
	$laps = $_POST['laps_D'];
	$P1NP = $_POST['P1NP_D'];
	$Osteocalcin = $_POST['Osteocalcin_D'];
	$Urine = $_POST['Urine_D'];
	$Serum = $_POST['Serum_D'];
	$SerumHCo = $_POST['SerumHCo_D'];
	$anion = $_POST['anion_D'];
	$ANCA = $_POST['ANCA_D'];
	$DSDNA = $_POST['DSDNA_D'];
	$IgAtTGAb = $_POST['IgAtTGAb_D'];
	$Breath_test = $_POST['Breath_test_D'];
	$CKBB = $_POST['CKBB_D'];
	$Any_other = $_POST['Any_other_D'];


	$sql = "insert into BIOR (admission_no,
			S_Ca,
			S_Phosphorus,
			S_albumin,
			S_alkaline,
			OHD,
			iPTH,
			FGF,
			Na,
			K,
			Cl,
			SPO,
			Ca,
			creatinine,
			EGFR,
			GFR,
			laps,
			P1NP,
			Osteocalcin,
			Urine,
			Serum,
			SerumHCo,
			anion,
			ANCA,
			DSDNA,
			IgAtTGAb,
			Breath_test,
			CKBB,
			Any_other) values($admission_no,
			'$S_Ca',
			'$S_Phosphorus',
			'$S_albumin',
			'$S_alkaline',
			'$OHD',
			'$iPTH',
			'$FGF',
			'$Na',
			'$K',
			'$Cl',
			'$SPO',
			'$Ca',
			'$creatinine',
			'$EGFR',
			'$GFR',
			'$laps',
			'$P1NP',
			'$Osteocalcin',
			'$Urine',
			'$Serum',
			'$SerumHCo',
			'$anion',
			'$ANCA',
			'$DSDNA',
			'$IgAtTGAb',
			'$Breath_test',
			'$CKBB',
			'$Any_other'
			);";

	mysqli_query($conn,$sql);


	$admission_no = $_POST['addpatient'];
	$S_Ca = $_POST['S_Ca_3'];
	$S_Phosphorus = $_POST['S_Phosphorus_3'];
	$S_albumin = $_POST['S_albumin_3'];
	$S_alkaline = $_POST['S_alkaline_3'];
	$OHD = $_POST['OHD_3'];
	$iPTH = $_POST['iPTH_3'];
	$FGF = $_POST['FGF_3'];
	$Na = $_POST['Na_3'];
	$K = $_POST['K_3'];
	$Cl = $_POST['Cl_3'];
	$SPO = $_POST['SPO_3'];
	$Ca = $_POST['Ca_3'];
	$creatinine = $_POST['creatinine_3'];
	//$Phosphorous = $_POST['Phosphorous_D'];
	$EGFR = $_POST['EGFR_3'];
	$GFR = $_POST['GFR_3'];
	$laps = $_POST['laps_3'];
	$P1NP = $_POST['P1NP_3'];
	$Osteocalcin = $_POST['Osteocalcin_3'];
	$Urine = $_POST['Urine_3'];
	$Serum = $_POST['Serum_3'];
	$SerumHCo = $_POST['SerumHCo_3'];
	$anion = $_POST['anion_3'];
	$ANCA = $_POST['ANCA_3'];
	$DSDNA = $_POST['DSDNA_3'];
	$IgAtTGAb = $_POST['IgAtTGAb_3'];
	$Breath_test = $_POST['Breath_test_3'];
	$CKBB = $_POST['CKBB_3'];
	$Any_other = $_POST['Any_other_3'];


	$sql = "insert into BIO3M (admission_no,
			S_Ca,
			S_Phosphorus,
			S_albumin,
			S_alkaline,
			OHD,
			iPTH,
			FGF,
			Na,
			K,
			Cl,
			SPO,
			Ca,
			creatinine,
			EGFR,
			GFR,
			laps,
			P1NP,
			Osteocalcin,
			Urine,
			Serum,
			SerumHCo,
			anion,
			ANCA,
			DSDNA,
			IgAtTGAb,
			Breath_test,
			CKBB,
			Any_other) values($admission_no,
			'$S_Ca',
			'$S_Phosphorus',
			'$S_albumin',
			'$S_alkaline',
			'$OHD',
			'$iPTH',
			'$FGF',
			'$Na',
			'$K',
			'$Cl',
			'$SPO',
			'$Ca',
			'$creatinine',
			'$EGFR',
			'$GFR',
			'$laps',
			'$P1NP',
			'$Osteocalcin',
			'$Urine',
			'$Serum',
			'$SerumHCo',
			'$anion',
			'$ANCA',
			'$DSDNA',
			'$IgAtTGAb',
			'$Breath_test',
			'$CKBB',
			'$Any_other'
			);";

	mysqli_query($conn,$sql);



	$admission_no = $_POST['addpatient'];
	$S_Ca = $_POST['S_Ca_6'];
	$S_Phosphorus = $_POST['S_Phosphorus_6'];
	$S_albumin = $_POST['S_albumin_6'];
	$S_alkaline = $_POST['S_alkaline_6'];
	$OHD = $_POST['OHD_6'];
	$iPTH = $_POST['iPTH_6'];
	$FGF = $_POST['FGF_6'];
	$Na = $_POST['Na_6'];
	$K = $_POST['K_6'];
	$Cl = $_POST['Cl_6'];
	$SPO = $_POST['SPO_6'];
	$Ca = $_POST['Ca_6'];
	$creatinine = $_POST['creatinine_6'];
	//$Phosphorous = $_POST['Phosphorous_D'];
	$EGFR = $_POST['EGFR_6'];
	$GFR = $_POST['GFR_6'];
	$laps = $_POST['laps_6'];
	$P1NP = $_POST['P1NP_6'];
	$Osteocalcin = $_POST['Osteocalcin_6'];
	$Urine = $_POST['Urine_6'];
	$Serum = $_POST['Serum_6'];
	$SerumHCo = $_POST['SerumHCo_6'];
	$anion = $_POST['anion_6'];
	$ANCA = $_POST['ANCA_6'];
	$DSDNA = $_POST['DSDNA_6'];
	$IgAtTGAb = $_POST['IgAtTGAb_6'];
	$Breath_test = $_POST['Breath_test_6'];
	$CKBB = $_POST['CKBB_6'];
	$Any_other = $_POST['Any_other_6'];


	$sql = "insert into BIO6M (admission_no,
			S_Ca,
			S_Phosphorus,
			S_albumin,
			S_alkaline,
			OHD,
			iPTH,
			FGF,
			Na,
			K,
			Cl,
			SPO,
			Ca,
			creatinine,
			EGFR,
			GFR,
			laps,
			P1NP,
			Osteocalcin,
			Urine,
			Serum,
			SerumHCo,
			anion,
			ANCA,
			DSDNA,
			IgAtTGAb,
			Breath_test,
			CKBB,
			Any_other) values($admission_no,
			'$S_Ca',
			'$S_Phosphorus',
			'$S_albumin',
			'$S_alkaline',
			'$OHD',
			'$iPTH',
			'$FGF',
			'$Na',
			'$K',
			'$Cl',
			'$SPO',
			'$Ca',
			'$creatinine',
			'$EGFR',
			'$GFR',
			'$laps',
			'$P1NP',
			'$Osteocalcin',
			'$Urine',
			'$Serum',
			'$SerumHCo',
			'$anion',
			'$ANCA',
			'$DSDNA',
			'$IgAtTGAb',
			'$Breath_test',
			'$CKBB',
			'$Any_other'
			);";

	mysqli_query($conn,$sql);



	$admission_no = $_POST['addpatient'];
	$S_Ca = $_POST['S_Ca_1'];
	$S_Phosphorus = $_POST['S_Phosphorus_1'];
	$S_albumin = $_POST['S_albumin_1'];
	$S_alkaline = $_POST['S_alkaline_1'];
	$OHD = $_POST['OHD_1'];
	$iPTH = $_POST['iPTH_1'];
	$FGF = $_POST['FGF_1'];
	$Na = $_POST['Na_1'];
	$K = $_POST['K_1'];
	$Cl = $_POST['Cl_1'];
	$SPO = $_POST['SPO_1'];
	$Ca = $_POST['Ca_1'];
	$creatinine = $_POST['creatinine_1'];
	//$Phosphorous = $_POST['Phosphorous_D'];
	$EGFR = $_POST['EGFR_1'];
	$GFR = $_POST['GFR_1'];
	$laps = $_POST['laps_1'];
	$P1NP = $_POST['P1NP_1'];
	$Osteocalcin = $_POST['Osteocalcin_1'];
	$Urine = $_POST['Urine_1'];
	$Serum = $_POST['Serum_1'];
	$SerumHCo = $_POST['SerumHCo_1'];
	$anion = $_POST['anion_1'];
	$ANCA = $_POST['ANCA_1'];
	$DSDNA = $_POST['DSDNA_1'];
	$IgAtTGAb = $_POST['IgAtTGAb_1'];
	$Breath_test = $_POST['Breath_test_1'];
	$CKBB = $_POST['CKBB_1'];
	$Any_other = $_POST['Any_other_1'];


	$sql = "insert into BIO1Y (admission_no,
			S_Ca,
			S_Phosphorus,
			S_albumin,
			S_alkaline,
			OHD,
			iPTH,
			FGF,
			Na,
			K,
			Cl,
			SPO,
			Ca,
			creatinine,
			EGFR,
			GFR,
			laps,
			P1NP,
			Osteocalcin,
			Urine,
			Serum,
			SerumHCo,
			anion,
			ANCA,
			DSDNA,
			IgAtTGAb,
			Breath_test,
			CKBB,
			Any_other) values($admission_no,
			'$S_Ca',
			'$S_Phosphorus',
			'$S_albumin',
			'$S_alkaline',
			'$OHD',
			'$iPTH',
			'$FGF',
			'$Na',
			'$K',
			'$Cl',
			'$SPO',
			'$Ca',
			'$creatinine',
			'$EGFR',
			'$GFR',
			'$laps',
			'$P1NP',
			'$Osteocalcin',
			'$Urine',
			'$Serum',
			'$SerumHCo',
			'$anion',
			'$ANCA',
			'$DSDNA',
			'$IgAtTGAb',
			'$Breath_test',
			'$CKBB',
			'$Any_other'
			);";

	mysqli_query($conn,$sql);



	$admission_no = $_POST['addpatient'];
	$S_Ca = $_POST['S_Ca_2'];
	$S_Phosphorus = $_POST['S_Phosphorus_2'];
	$S_albumin = $_POST['S_albumin_2'];
	$S_alkaline = $_POST['S_alkaline_2'];
	$OHD = $_POST['OHD_2'];
	$iPTH = $_POST['iPTH_2'];
	$FGF = $_POST['FGF_2'];
	$Na = $_POST['Na_2'];
	$K = $_POST['K_2'];
	$Cl = $_POST['Cl_2'];
	$SPO = $_POST['SPO_2'];
	$Ca = $_POST['Ca_2'];
	$creatinine = $_POST['creatinine_2'];
	//$Phosphorous = $_POST['Phosphorous_D'];
	$EGFR = $_POST['EGFR_2'];
	$GFR = $_POST['GFR_2'];
	$laps = $_POST['laps_2'];
	$P1NP = $_POST['P1NP_2'];
	$Osteocalcin = $_POST['Osteocalcin_2'];
	$Urine = $_POST['Urine_2'];
	$Serum = $_POST['Serum_2'];
	$SerumHCo = $_POST['SerumHCo_2'];
	$anion = $_POST['anion_2'];
	$ANCA = $_POST['ANCA_2'];
	$DSDNA = $_POST['DSDNA_2'];
	$IgAtTGAb = $_POST['IgAtTGAb_2'];
	$Breath_test = $_POST['Breath_test_2'];
	$CKBB = $_POST['CKBB_2'];
	$Any_other = $_POST['Any_other_2'];


	$sql = "insert into BIO2Y (admission_no,
			S_Ca,
			S_Phosphorus,
			S_albumin,
			S_alkaline,
			OHD,
			iPTH,
			FGF,
			Na,
			K,
			Cl,
			SPO,
			Ca,
			creatinine,
			EGFR,
			GFR,
			laps,
			P1NP,
			Osteocalcin,
			Urine,
			Serum,
			SerumHCo,
			anion,
			ANCA,
			DSDNA,
			IgAtTGAb,
			Breath_test,
			CKBB,
			Any_other) values($admission_no,
			'$S_Ca',
			'$S_Phosphorus',
			'$S_albumin',
			'$S_alkaline',
			'$OHD',
			'$iPTH',
			'$FGF',
			'$Na',
			'$K',
			'$Cl',
			'$SPO',
			'$Ca',
			'$creatinine',
			'$EGFR',
			'$GFR',
			'$laps',
			'$P1NP',
			'$Osteocalcin',
			'$Urine',
			'$Serum',
			'$SerumHCo',
			'$anion',
			'$ANCA',
			'$DSDNA',
			'$IgAtTGAb',
			'$Breath_test',
			'$CKBB',
			'$Any_other'
			);";

	mysqli_query($conn,$sql);



	$admission_no = $_POST['addpatient'];
	$S_Ca = $_POST['S_Ca_5'];
	$S_Phosphorus = $_POST['S_Phosphorus_5'];
	$S_albumin = $_POST['S_albumin_5'];
	$S_alkaline = $_POST['S_alkaline_5'];
	$OHD = $_POST['OHD_5'];
	$iPTH = $_POST['iPTH_5'];
	$FGF = $_POST['FGF_5'];
	$Na = $_POST['Na_5'];
	$K = $_POST['K_5'];
	$Cl = $_POST['Cl_5'];
	$SPO = $_POST['SPO_5'];
	$Ca = $_POST['Ca_5'];
	$creatinine = $_POST['creatinine_5'];
	//$Phosphorous = $_POST['Phosphorous_D'];
	$EGFR = $_POST['EGFR_5'];
	$GFR = $_POST['GFR_5'];
	$laps = $_POST['laps_5'];
	$P1NP = $_POST['P1NP_5'];
	$Osteocalcin = $_POST['Osteocalcin_5'];
	$Urine = $_POST['Urine_5'];
	$Serum = $_POST['Serum_5'];
	$SerumHCo = $_POST['SerumHCo_5'];
	$anion = $_POST['anion_5'];
	$ANCA = $_POST['ANCA_5'];
	$DSDNA = $_POST['DSDNA_5'];
	$IgAtTGAb = $_POST['IgAtTGAb_5'];
	$Breath_test = $_POST['Breath_test_5'];
	$CKBB = $_POST['CKBB_5'];
	$Any_other = $_POST['Any_other_5'];


	$sql = "insert into BIO5Y (admission_no,
			S_Ca,
			S_Phosphorus,
			S_albumin,
			S_alkaline,
			OHD,
			iPTH,
			FGF,
			Na,
			K,
			Cl,
			SPO,
			Ca,
			creatinine,
			EGFR,
			GFR,
			laps,
			P1NP,
			Osteocalcin,
			Urine,
			Serum,
			SerumHCo,
			anion,
			ANCA,
			DSDNA,
			IgAtTGAb,
			Breath_test,
			CKBB,
			Any_other) values($admission_no,
			'$S_Ca',
			'$S_Phosphorus',
			'$S_albumin',
			'$S_alkaline',
			'$OHD',
			'$iPTH',
			'$FGF',
			'$Na',
			'$K',
			'$Cl',
			'$SPO',
			'$Ca',
			'$creatinine',
			'$EGFR',
			'$GFR',
			'$laps',
			'$P1NP',
			'$Osteocalcin',
			'$Urine',
			'$Serum',
			'$SerumHCo',
			'$anion',
			'$ANCA',
			'$DSDNA',
			'$IgAtTGAb',
			'$Breath_test',
			'$CKBB',
			'$Any_other'
			);";

	mysqli_query($conn,$sql);

	header("Location: ../radiology.php?addpatient=".$admission_no);
?>
