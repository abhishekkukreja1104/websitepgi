<?php

  include_once 'dbh.php';

      $Osteoporosis = $_POST['Osteoporosis'];
      $index_no = $_POST['addpatient'];
      $sql = "UPDATE CD SET subDF='$Osteoporosis' WHERE index_no=$index_no  ";
      echo $sql;

      mysqli_query($conn, $sql);

      header("Location: ../treatment.php?addpatient=".$index_no);
