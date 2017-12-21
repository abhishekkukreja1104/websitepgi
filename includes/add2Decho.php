<?php
include_once 'dbh.php';
$index_no = $_POST['addpatient'];
if(isset($_POST['status'])){
  $sql = "delete from ECHO where index_no=".$index_no;
  mysqli_query($conn, $sql);
}
$index_no = $_POST['addpatient'];
$impressionB = $_POST['impression_B'];
$impression1 = $_POST['impression_1'];

$sql = "insert into echo values($index_no, '$impressionB','$impression1');";
mysqli_query($conn, $sql);

?>
