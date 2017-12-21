<?php

	include_once 'dbh.php';
	$index_no = $_POST['addpatient'];
	if(isset($_POST['status'])){
		$sql = "delete from RADB where index_no=".$index_no;
		mysqli_query($conn, $sql);
		$sql = "delete from RAD1 where index_no=".$index_no;
		mysqli_query($conn, $sql);
		$sql = "delete from RAD5 where index_no=".$index_no;
		mysqli_query($conn, $sql);
	}
	$index_no = $_POST['addpatient'];
	$skull = $_POST['skull_B'];
	$wrist =$_POST['wrist_B'];
	$left =$_POST['left_r_B'];
	$thoraicAV =$_POST['thoraicAV_B'];
	$thoraicLV =$_POST['thoraicLV_B'];
	$XP =$_POST['XP_B'];
	$XL =$_POST['XL_B'];
	$any=$_POST['any_B'];

	$sql = "insert into RADB values($index_no,
		'$skull',
		'$wrist',
		'$left',
		'$thoraicAV',
		'$thoraicLV',
		'$XP',
		'$XL',
		'$any')";
	mysqli_query($conn, $sql);


	$index_no = $_POST['addpatient'];
	$skull = $_POST['skull_1'];
	$wrist =$_POST['wrist_1'];
	$left =$_POST['left_r_1'];
	$thoraicAV =$_POST['thoraicAV_1'];
	$thoraicLV =$_POST['thoraicLV_1'];
	$XP =$_POST['XP_1'];
	$XL =$_POST['XL_1'];
	$any=$_POST['any_1'];

	$sql = "insert into RAD1 values($index_no,
		'$skull',
		'$wrist',
		'$left',
		'$thoraicAV',
		'$thoraicLV',
		'$XP',
		'$XL',
		'$any')";
	mysqli_query($conn, $sql);


	$index_no = $_POST['addpatient'];
	$skull = $_POST['skull_5'];
	$wrist =$_POST['wrist_5'];
	$left =$_POST['left_r_5'];
	$thoraicAV =$_POST['thoraicAV_5'];
	$thoraicLV =$_POST['thoraicLV_5'];
	$XP =$_POST['XP_5'];
	$XL =$_POST['XL_5'];
	$any=$_POST['any_5'];

	$sql = "insert into RAD5 values($index_no,
		'$skull',
		'$wrist',
		'$left',
		'$thoraicAV',
		'$thoraicLV',
		'$XP',
		'$XL',
		'$any')";
	mysqli_query($conn, $sql);


			if(isset($_POST['status'])){
				header("Location: ../bonebiopsy.php?status=edit&addpatient=".$index_no);

			}else{
				header("Location: ../bonebiopsy.php?addpatient=".$index_no);
			}
?>
