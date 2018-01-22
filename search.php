<?php
include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Search Patient</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <style>
      .table>tbody>tr>td,
      .table>tbody>tr>th {
      border-top: none;
      }
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
      font-weight: bold;
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
      text-align: center;
      }
      td{
      text-align: center;
      }
      #up{
      text-align: center;
      }
      #submit{
      width: 100%;
      text-align: center;
      padding: 0px;
      padding-bottom: 10px;
      padding-top: 10px;
      }
      .table{
      margin-top: 2%;
      border: none;
      }
      #logout{
        font-size: 15px;
        text-align: right;
        margin-top: 5%;
        }
   </style>
   <body>
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" id="logo" align="center">
            <img class="img-responsive" src="RARE_MBD.png" alt="RARE MBD">
          </div>
          <div class="col-md-3" id="logout">
            <a href="login.php">LOGOUT</a>
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
               <h1>Search Patient</h1>
            </div>
         </div>
         <div class="row">
            <form action = "search.php" method="post">
            <table class="table table-hover">
                        <tr>
                            <td><strong>Clinical diagnosis dropdown:</strong></td>


                                  <td>
                                  <select name="disease">
                                    <option value="unknown">-Select-</option>
                                    <option value="rickets">Rickets</option>
                                    <option value="rickets_osteomalacia">Rickets and Osteomalacia</option>
                                    <option value="Osteomalacia">Osteomalacia</option>
                                    <option value="Osteogenesis">Osteogenesis imperfecta</option>
                                    <option value="Fibrous">Fibrous Dysplasia</option>
                                    <option value="Paget">Paget's disease</option>
                                    <option value="Osteopetrosis">Osteopetrosis</option>
                                    <option value="Spondyloepiphyseal">Spondyloepiphyseal dysplasia</option>
                                    <option value="Fibrogenesis">Fibrogenesis imperfecta ossium</option>
                                    <option value="Osteoporosis" <?php if(isset($_POST['disease'])){ if($_POST['disease'] == 'Osteoporosis') echo 'selected';}?>>Osteoporosis</option>
                                    <option value="Hypo_Osteomalacia">Hypophosphatemic & Vitamin D Deficiency Osteomalacia</option>
                                    <option value="Pyknodysostosis">Pyknodysostosis</option>
                                    <option value="Camurati">Camurati-Engelmann Disease</option>
                                    <option value="Melorheostosis">Melorheostosis</option>
                                    <option value="Osteomyelosclerosis">Osteomyelosclerosis</option>
                                    <option value="Achondroplasis">Achondroplasis</option>
                                    <option value="Enchondromatosis">Enchondromatosis</option>
                                    <option value="Multiple_Exostoses">Multiple Exostoses</option>
                                    <option value="Sclerosteosis">Sclerosteosis</option>
                                    <option value="Tumoral">Tumoral Calcinosis</option>
                                    <option value="Mucopolysaccharidosis">Mucopolysaccharidosis</option>
                                    <option value="Pseudohypoparathyroidism">Pseudohypoparathyroidism</option>
                                    <option value="Bartter">Bartter-like syndrome</option>
                                    <option value="Any_other">Any other</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <div class="row">
                    <div class="col-md-12" align="center" id="submit">
                       <input type="submit" name = "submit" value="Go" align="center">
                    </div>
                    </div>
                </form>

         </div>
         <div class="row">
            <table class="table table-bordered table-hover">
               <thead>

                  <th>Disease</th>
                  <th>CR Number</th>
                  <th>Admission No</th>
                  <th>Name</th>
                  <th>Sex</th>
                  <th>Address</th>
                  <th>Phone Number</th>
                  <th>Email</th>
               </thead>
               <tbody>
                  <?php
                     if(isset($_POST['submit'])){
                     $Disease = $_POST['disease'];
                     $sql = "select * from CD where disease = '$Disease'";
                     $result = mysqli_query($conn, $sql);
                     while($row = mysqli_fetch_array($result)){
                        $index =  $row['index_no'];
                        $sqls = "select * from MBD where index_no = '$index'";
                        $results = mysqli_query($conn, $sqls);
                        while($rows = mysqli_fetch_array($results)){?>
                        <tr>
                          <td><?php echo $Disease; ?></td>
                          <td><?php echo $rows['CR_no']; ?></td>

                          <td><?php echo $rows['admission_no']; ?></td>
                          <td><?php echo $rows['name']; ?></td>
                          <td><?php echo $rows['sex']; ?></td>
                          <td><?php echo $rows['address']; ?></td>
                          <td><?php echo $rows['mobile']; ?></td>
                          <td><?php echo $rows['email']; ?></td>
                        </tr>
                    <?php }
                     }
                  }
                  ?>
               </tbody>
            </table>
         </div>
 </div>
</body>
</html>
