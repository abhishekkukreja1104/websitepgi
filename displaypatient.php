<?php
	include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>View Patients</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
   body{
    font-family: 'Georgia';
    background: #96B8DA;
   }
   #logo{
      background: #ffffff;
   }
   .container{
      background-color: #ffffff;
   }
   #heading{
        background: #518B47;
        padding-bottom: 1%;
        color: white;
    }
    #nav{
      font-size: 16px;
      background: #1F4F96;
      color: #ffffff;
      font-weight: bold;
      padding: 2%;
    }
    #nav:hover{
      background-color: #111;
    }
    th{
      text-align: left;
    }
    td{
      text-align: center;
    }
    #up{
      text-align: center;
    }
    input[type = "number"]{
         display: inline-block;
         width: 100%;
         height: 25%;
    }
    input[type = "select"]{
        display: inline-block;
        width: 100%;
    }
    #submit{
       width: 100%;
       background: #518B47;
       padding: 0px;
       padding-bottom: 10px;
       padding-top: 10px;
    }
    .table{
      margin-top: 2%;
    }
    .scrollit {
    overflow:scroll;
   }
</style>
<body>
	<div class="container">
      <div class="row">
         <div class="col-md-12" id="logo" align="center">
            <img class="img-responsive" src="http://indianphptregistry.com/images/logo.png" alt="indianphptregistry">
         </div>
      </div>
      <div class="row">
         <a href="Layoutaddpatient.php">
            <div class="col-md-3" align="center" id="nav">
               Add Patient
            </div>
         </a>
         <a href="displaypatient.php">
            <div class="col-md-3" align="center" id="nav">
               View Patient
            </div>
         </a>
         <a href="search.php">
            <div class="col-md-3" align="center" id="nav">
               Search Patient
            </div>
         </a>
         <a href="documents.php">
            <div class="col-md-3" align="center" id="nav">
               Manage Documents
            </div>
         </a>
      </div>
      <div class="row">
         <div class="col-md-12" align="center" id="heading">
            <h1>Patients</h1>
         </div>
      </div>
       <div class="scrollit">
      <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Admission No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Parents</th>
            <th>Edit Patient</th>
            <th>View Patient Details</th>
            <th>View Other Symptoms</th>
            <th>View Biochemistry</th>
            <th>View Radiology</th>
            <th>View Bone Biopsy</th>
            <th>View Nuclear Medicine</th>
            <th>View Mutation Analysis</th>
            <th>View 2D_echo</th>
            <th>View Pulmonary</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select name, index_no, age, sex, address, mobile, parents from MBD;";
         $result=mysqli_query($conn,$sql);

        while( $row = mysqli_fetch_array($result)) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
                  <?php
                     $sql = "select index_no from RADB where index_no=".$row['index_no'];
                     $RAD = mysqli_query($conn, $sql);

                     $sql = "select index_no from BONB where index_no=".$row['index_no'];
                     $BON = mysqli_query($conn, $sql);


                     $sql = "select index_no from NUCB where index_no=".$row['index_no'];
                     $NUC = mysqli_query($conn, $sql);


                     $sql = "select index_no from MUTA where index_no=".$row['index_no'];
                     $MUT = mysqli_query($conn, $sql);


                     $sql = "select index_no from echo where index_no=".$row['index_no'];
                     $ECH = mysqli_query($conn, $sql);


                     $sql = "select index_no from PULM where index_no=".$row['index_no'];
                     $PUL = mysqli_query($conn, $sql);
                  ?>
            <td><?php echo $row['index_no']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['sex']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['parents']; ?></td>
            <td><a id="edit_link" href=<?php echo "Layoutaddpatient.php?status=edit&index_no=".$row['index_no'];?>>edit</a></td>
                  <td><a id="edit_link" href=<?php echo "View/viewLayoutaddpatient.php?index_no=".$row['index_no'];?>>View</a></td>

                  <td><a id="edit_link" href=<?php echo "View/viewLayoutothersymptoms.php?status=yes&addpatient=".$row['index_no'];?>>View</a></td>
                  <td><a id="edit_link" href=<?php echo "View/viewbiochemistry.php?status=yes&addpatient=".$row['index_no'];?>>View</a></td>
                  <?php if($RAD->num_rows) {?>
                  <td><a id="edit_link" href=<?php echo "View/viewradiology.php?status=yes&addpatient=".$row['index_no'];?>>View</a></td>
                  <?php }else { echo "<td>no value</td>";} ?>

                  <?php if($BON->num_rows) {?>
                  <td><a id="edit_link" href=<?php echo "View/viewbonebiopsy.php?status=yes&addpatient=".$row['index_no'];?>>View</a></td>
                  <?php }else { echo "<td>no value</td>";} ?>

                  <?php if($NUC->num_rows) {?>
                  <td><a id="edit_link" href=<?php echo "View/viewnuclearmedicine.php?status=yes&addpatient=".$row['index_no'];?>>View</a></td>
                  <?php }else { echo "<td>no value</td>";} ?>


                  <?php if($MUT->num_rows) {?>
                  <td><a id="edit_link" href=<?php echo "View/viewmutationanalysis.php?status=yes&addpatient=".$row['index_no'];?>>View</a></td>
                  <?php }else { echo "<td>no value</td>";} ?>


                  <?php if($ECH->num_rows) {?>
                  <td><a id="edit_link" href=<?php echo "View/view2Decho.php?status=yes&addpatient=".$row['index_no'];?>>View</a></td>
                  <?php }else { echo "<td>no value</td>";} ?>

                  <?php if($PUL->num_rows) {?>
                  <td><a id="edit_link" href=<?php echo "View/viewpulmonary.php?status=yes&addpatient=".$row['index_no'];?>>View</a></td>
                  <?php }else { echo "<td>no value</td>";} ?>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>
</div>
</div>
</body>

</html>
