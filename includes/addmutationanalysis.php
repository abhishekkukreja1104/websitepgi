


<?php
include_once 'dbh.php';
$index_no = $_POST['addpatient'];
if(isset($_POST['status'])){
  $sql = "delete from MUTA where index_no=".$index_no;
  mysqli_query($conn, $sql);
}

$known_novel = $_POST['known_novel'];
$adorar = $_POST['adorar'];

$sql = "insert into MUTA values($index_no,'$known_novel','adorar');";
mysqli_query($conn, $sql);
echo $sql;


header("Location: ../pulmonary.php?addpatient=".$index_no);
?>
