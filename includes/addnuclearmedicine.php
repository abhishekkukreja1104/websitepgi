

<?php
include_once 'dbh.php';
$index_no = $_POST['addpatient'];
if(isset($_POST['status'])){
  $sql = "delete from NUCB where index_no=".$index_no;
  mysqli_query($conn, $sql);
  $sql = "delete from NUC1 where index_no=".$index_no;
  mysqli_query($conn, $sql);
}


$scan_type = $_POST['scan_type_B'];
  if($scan_type=="unknown")
    $scan_no=0;
  if($scan_type=="bone_scan")
    $scan_no=1;
  if($scan_type=="pet_scan")
    $scan_no=2;
  if($scan_type=="dota_noc")
    $scan_no=3;
  if($scan_type=="dotatate")
    $scan_no=4;



$impression = $_POST['impression_B'];
$sql = "insert into NUCB (index_no,scan_no,scan_type,impression) values($index_no,$scan_no,'$scan_type','$impression');";
mysqli_query($conn, $sql);
echo $sql;

$scan_type = $_POST['scan_type_1'];
  if($scan_type=="unknown")
    $scan_no=0;
  if($scan_type=="bone_scan")
    $scan_no=1;
  if($scan_type=="pet_scan")
    $scan_no=2;
  if($scan_type=="dota_noc")
    $scan_no=3;
  if($scan_type=="dotatate")
    $scan_no=4;



$impression = $_POST['impression_1'];
$sql = "insert into NUC1 (index_no,scan_no,scan_type,impression) values($index_no,$scan_no,'$scan_type','$impression');";
mysqli_query($conn, $sql);
echo $sql;

      if(isset($_POST['status'])){
        header("Location: ../mutationanalysis.php?status=edit&addpatient=".$index_no);

      }else{
        header("Location: ../mutationanalysis.php?addpatient=".$index_no);
          }
?>
