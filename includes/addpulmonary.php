<?php
include_once 'dbh.php';
$index_no = $_POST['addpatient'];
if(isset($_POST['status'])){
  $sql = "delete from PULM where index_no=".$index_no;
  mysqli_query($conn, $sql);
}
$index_no = $_POST['addpatient'];
$impressionB = $_POST['impression_B'];
$impression1 = $_POST['impression_1'];

$sql = "insert into PULM values($index_no, '$impressionB','$impression1');";
mysqli_query($conn, $sql);
echo $sql;


			if(isset($_POST['status'])){
				header("Location: ../clinical_diagnosis.php?status=edit&addpatient=".$index_no);

			}else{
				header("Location: ../clinical_diagnosis.php?addpatient=".$index_no);
			}

?>
