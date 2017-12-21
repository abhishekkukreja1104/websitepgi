<?php
include_once 'dbh.php';
$index_no = $_POST['addpatient'];
if(isset($_POST['status'])){
  $sql = "delete from BONB where index_no=".$index_no;
  mysqli_query($conn, $sql);
  $sql = "delete from BON1 where index_no=".$index_no;
  mysqli_query($conn, $sql);
}
$index_no = $_POST['addpatient'];

$histo = $_POST['histo_B'];
if($histo==NULL)
  $histo = 0;
$site = $_POST['site_B'];
$ih = $_POST['ih_B'];

$bhmp = $_POST['bhmp_B'];
$ib = $_POST['ib_B'];

$sql = "insert into BONB values(
        $index_no,
        $histo,
        '$site',
        '$ih',
        '$bhmp',
        '$ib'
          );";
mysqli_query($conn, $sql);
echo $sql;

$index_no = $_POST['addpatient'];

$histo = $_POST['histo_1'];
if($histo==NULL)
  $histo = 0;
$site = $_POST['site_1'];
$ih = $_POST['ih_1'];

$bhmp = $_POST['bhmp_1'];
$ib = $_POST['ib_1'];

$sql = "insert into BON1 values(
        $index_no,
        $histo,
        '$site',
        '$ih',
        '$bhmp',
        '$ib'
          );";
mysqli_query($conn, $sql);
echo $sql;
	header("Location: ../nuclearmedicine.php?addpatient=".$index_no);
?>
