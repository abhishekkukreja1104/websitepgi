
<?php

  include_once 'dbh.php';

      $Osteomalacia1 = $_POST['Osteomalacia1'];
      $Osteomalacia2 = $_POST['Osteomalacia2'];
      $index_no = $_POST['addpatient'];
      $sql = "UPDATE CD SET subDF='$Osteomalacia1', subSF='$Osteomalacia2' WHERE index_no=$index_no  ";
      echo $sql;

      mysqli_query($conn, $sql);

      header("Location: ../treatment.php?addpatient=".$index_no);
