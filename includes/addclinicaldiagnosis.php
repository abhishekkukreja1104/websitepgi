
<?php

  include_once 'dbh.php';
  if(isset($_POST['submit'])){

      $disease = $_POST['disease'];
      $index_no = $_POST['addpatient'];
      $sql = "Delete from CD where index_no = $index_no";
      echo $sql;
      mysqli_query($conn, $sql);
      $sql = "insert into CD(	index_no, disease) values($index_no, '$disease')";

      mysqli_query($conn, $sql);
      if(strcmp($disease,'Osteomalacia')==0)

          if(isset($_POST['status'])){
            header("Location: ../Osteomalacia.php?status=edit&addpatient=".$index_no);
          }else{
            header("Location: ../Osteomalacia.php.php?addpatient=".$index_no);
          }
      else {
        if(strcmp($disease,'Osteoporosis')==0)

            if(isset($_POST['status'])){
              header("Location: ../Osteoporosis.php?status=edit&addpatient=".$index_no);
            }else{
              header("Location: ../Osteoporosis.php?addpatient=".$index_no);
            }
        else{
          
              if(isset($_POST['status'])){
                header("Location: ../treatment.php?status=edit&addpatient=".$index_no);
              }else{
                header("Location: ../treatment.php?addpatient=".$index_no);
              }
        }

      }

    }
?>
