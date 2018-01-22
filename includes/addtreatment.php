<?php

include_once 'dbh.php';


    $Calcium = 1;
    $VitD = 1;
    $Bisphosphonates = 1;
    $Calcitonin = 1;
    $RhPTH = 1;
    $Denosumeb = 1;
    $Estrogen = 1;
    $Glucocorticoids = 1;
    $Any_other = 1;
    $index_no = $_POST['addpatient'];

    if(strcmp($_POST['Calcium'],'yes'))
      $Calcium = 0;

    if(strcmp($_POST['vitD'],'yes'))
      $VitD = 0;

    if(strcmp($_POST['Bisphosphonates'],'yes'))
      $Bisphosphonates = 0;

    if(strcmp($_POST['Calcitonin'],'yes'))
      $Calcitonin = 0;

    if(strcmp($_POST['RhPTH'],'yes'))
      $RhPTH = 0;

    if(strcmp($_POST['Denosumeb'],'yes'))
      $Denosumeb = 0;

    if(strcmp($_POST['Estrogen'],'yes'))
      $Estrogen = 0;

    if(strcmp($_POST['Glucocorticoids'],'yes'))
      $Glucocorticoids = 0;

    if(strcmp($_POST['any_other'],'yes'))
      $Any_other = 0;

    $sql =  "insert into TM values($index_no,
      $Calcium,
      $VitD,
      $Bisphosphonates,
      $Calcitonin,
      $RhPTH,
      $Denosumeb,
      $Estrogen,
      $Glucocorticoids,
      $Any_other)";
      mysqli_query($conn, $sql);

  echo $sql;

        header("Location: ../Layoutaddpatient.php");
 ?>
