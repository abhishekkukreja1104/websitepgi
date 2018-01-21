

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


echo $_POST['hipnB_T'];
$impression = $_POST['impression_1'];
$sql = "insert into NUC1 (index_no,scan_no,scan_type,impression) values($index_no,$scan_no,'$scan_type','$impression');";
mysqli_query($conn, $sql);
echo $sql;


//////////////////////////////////////////////////////////////////////////////////////////////////////////////
$hipnB_T = $_POST['hipnB_T'];
$hipnB_Z = $_POST['hipnB_Z'];
$hipnB_BMD = $_POST['hipnB_BMD'];
$hipnB_BMC = $_POST['hipnB_BMC'];
$hipnB_TBS = $_POST['hipnB_TBS'];

$sql = "insert into HIPN(
    index_no,
    hipnB_T,
    hipnB_Z,
    hipnB_BMD,
    hipnB_BMC,
    hipnB_TBS) values(
$index_no,
'$hipnB_T',
'$hipnB_Z',
'$hipnB_BMD',
'$hipnB_BMC',
'$hipnB_TBS') ";
echo $sql;
mysqli_query($conn, $sql);
//////////////////////////////////////
$hiptB_T = $_POST['hiptB_T'];
$hiptB_Z = $_POST['hiptB_Z'];
$hiptB_BMD = $_POST['hiptB_BMD'];
$hiptB_BMC = $_POST['hiptB_BMC'];
$hiptB_TBS = $_POST['hiptB_TBS'];

$sql = "insert into HIPT(
    index_no,
    hiptB_T,
    hiptB_Z,
    hiptB_BMD,
    hiptB_BMC,
    hiptB_TBS) values(
$index_no,
'$hiptB_T',
'$hiptB_Z',
'$hiptB_BMD',
'$hiptB_BMC',
'$hiptB_TBS') ";
echo $sql;
mysqli_query($conn, $sql);
///////////////////////////////////


$spineB_T = $_POST['spineB_T'];
$spineB_Z = $_POST['spineB_Z'];
$spineB_BMD = $_POST['spineB_BMD'];
$spineB_BMC = $_POST['spineB_BMC'];
$spineB_TBS = $_POST['spineB_TBS'];


$sql = "insert into SPIN(
index_no,
spineB_T,
spineB_Z,
spineB_BMD,
spineB_BMC,
spineB_TBS
) values(
$index_no,
'$spineB_T',
'$spineB_Z',
'$spineB_BMD',
'$spineB_BMC',
'$spineB_TBS') ";
echo $sql;
mysqli_query($conn, $sql);

//////////////////////////////////////


$radiusB_T = $_POST['radiusB_T'];
$radiusB_Z = $_POST['radiusB_Z'];
$radiusB_BMD = $_POST['radiusB_BMD'];
$radiusB_BMC = $_POST['radiusB_BMC'];
$radiusB_TBS = $_POST['radiusB_TBS'];

$sql = "insert into RADI(
index_no,
radiusB_T,
radiusB_Z,
radiusB_BMD,
radiusB_BMC,
radiusB_TBS) values(
$index_no,
'$radiusB_T',
'$radiusB_Z',
'$radiusB_BMD',
'$radiusB_BMC',
'$radiusB_TBS') ";
echo $sql;
mysqli_query($conn, $sql);

 ///////////////////////////////////////////
 $wholeB_T = $_POST['wholeB_T'];
 $wholeB_Z = $_POST['wholeB_Z'];
 $wholeB_BMD = $_POST['wholeB_BMD'];
 $wholeB_BMC = $_POST['wholeB_BMC'];
 $wholeB_TBS = $_POST['wholeB_TBS'];


 $sql = "insert into WHOL(
 index_no,
wholeB_T,
wholeB_Z,
wholeB_BMD,
wholeB_BMC,
wholeB_TBS) values(
 $index_no,
'$wholeB_T',
'$wholeB_Z',
'$wholeB_BMD',
'$wholeB_BMC',
'$wholeB_TBS') ";
 echo $sql;
 mysqli_query($conn, $sql);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$hipn1_T = $_POST['hipn1_T'];
$hipn1_Z = $_POST['hipn1_Z'];
$hipn1_BMD = $_POST['hipn1_BMD'];
$hipn1_BMC = $_POST['hipn1_BMC'];
$hipn1_TBS = $_POST['hipn1_TBS'];

$sql = "insert into HIPN1(
    index_no,
    hipn1_T,
    hipn1_Z,
    hipn1_BMD,
    hipn1_BMC,
    hipn1_TBS) values(
$index_no,
'$hipn1_T',
'$hipn1_Z',
'$hipn1_BMD',
'$hipn1_BMC',
'$hipn1_TBS') ";
echo $sql;
mysqli_query($conn, $sql);

////////////////////////////////////////
$hipt1_T = $_POST['hipt1_T'];
$hipt1_Z = $_POST['hipt1_Z'];
$hipt1_BMD = $_POST['hipt1_BMD'];
$hipt1_BMC = $_POST['hipt1_BMC'];
$hipt1_TBS = $_POST['hipt1_TBS'];

$sql = "insert into HIPT1(
    index_no,
    hipt1_T,
    hipt1_Z,
    hipt1_BMD,
    hipt1_BMC,
    hipt1_TBS) values(
$index_no,
'$hipt1_T',
'$hipt1_Z',
'$hipt1_BMD',
'$hipt1_BMC',
'$hipt1_TBS') ";
echo $sql;
mysqli_query($conn, $sql);


///////////////////////////////////


$spine1_T = $_POST['spine1_T'];
$spine1_Z = $_POST['spine1_Z'];
$spine1_BMD = $_POST['spine1_BMD'];
$spine1_BMC = $_POST['spine1_BMC'];
$spine1_TBS = $_POST['spine1_TBS'];


$sql = "insert into SPIN1(
index_no,
spine1_T,
spine1_Z,
spine1_BMD,
spine1_BMC,
spine1_TBS
) values(
$index_no,
'$spine1_T',
'$spine1_Z',
'$spine1_BMD',
'$spine1_BMC',
'$spine1_TBS') ";
echo $sql;
mysqli_query($conn, $sql);



//////////////////////////////////////


$radius1_T = $_POST['radius1_T'];
$radius1_Z = $_POST['radius1_Z'];
$radius1_BMD = $_POST['radius1_BMD'];
$radius1_BMC = $_POST['radius1_BMC'];
$radius1_TBS = $_POST['radius1_TBS'];

$sql = "insert into RADI1(
index_no,
radius1_T,
radius1_Z,
radius1_BMD,
radius1_BMC,
radius1_TBS) values(
$index_no,
'$radius1_T',
'$radius1_Z',
'$radius1_BMD',
'$radius1_BMC',
'$radius1_TBS') ";
echo $sql;
mysqli_query($conn, $sql);


 ///////////////////////////////////////////
 $whole1_T = $_POST['whole1_T'];
 $whole1_Z = $_POST['whole1_Z'];
 $whole1_BMD = $_POST['whole1_BMD'];
 $whole1_BMC = $_POST['whole1_BMC'];
 $whole1_TBS = $_POST['whole1_TBS'];


 $sql = "insert into WHOL1(
 index_no,
whole1_T,
whole1_Z,
whole1_BMD,
whole1_BMC,
whole1_TBS) values(
 $index_no,
'$whole1_T',
'$whole1_Z',
'$whole1_BMD',
'$whole1_BMC',
'$whole1_TBS') ";
 echo $sql;
 mysqli_query($conn, $sql);

      if(isset($_POST['status'])){
        //header("Location: ../mutationanalysis.php?status=edit&addpatient=".$index_no);

      }else{
        //header("Location: ../mutationanalysis.php?addpatient=".$index_no);
          }
?>
