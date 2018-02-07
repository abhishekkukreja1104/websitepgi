<?php
include_once 'includes/dbh.php';


if(isset($_GET['status'])){
    if($_GET['status']=="edit"){
        $sql = "select * from CD where index_no =".$_GET['addpatient'];
        $result = mysqli_query($conn, $sql);
        $row1=false;
   if($result!=false){
         $row1 = mysqli_fetch_array($result);
   }

 }
}
 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Clinical diagnosis dropdown</title>
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
         text-align: left;
       }
       td{
        text-align: center;
       }
       #up{
         text-align: center;
       }
       #submit{
         width: 100%;
         padding:1%;
         background: #518B47;
       }
       .table{
        margin-top: 1%;
        border: none;
       }
       #form{
        padding: 2%;
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
            <h1>Clinical diagnosis dropdown</h1>
         </div>
      </div>
            <form action = "includes/addclinicaldiagnosis.php" method="post">
              <div class="row">
                <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <table class="table table-hover">
                        <tr>
                          <th>Index Number</th>
                                  <td>
                                    <input type="text" name="addpatient" value=<?php echo $_GET[ 'addpatient']?> readonly>
                                  </td>
                        </tr>
                        <tr>
                            <th>Clinical diagnosis dropdown:</th>


                                  <td>
                                  <select name="disease">
                                    <option value="unknown" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'unknown'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>-Select-</option>
                                    <option value="rickets" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'rickets'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Rickets</option>
                                    <option value="rickets_osteomalacia" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'rickets_osteomalacia'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Rickets and Osteomalacia</option>
                                    <option value="Osteomalacia" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Osteomalacia'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Osteomalacia</option>
                                    <option value="Osteogenesis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Osteogenesis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Osteogenesis imperfecta</option>
                                    <option value="Fibrous" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Fibrous'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Fibrous Dysplasia</option>
                                    <option value="Paget"<?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Paget'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Paget's disease</option>
                                    <option value="Osteopetrosis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Osteopetrosis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Osteopetrosis</option>
                                    <option value="Spondyloepiphyseal" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Spondyloepiphyseal'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Spondyloepiphyseal dysplasia</option>
                                    <option value="Fibrogenesis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Fibrogenesis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Fibrogenesis imperfecta ossium</option>
                                    <option value="Osteoporosis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Osteoporosis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Osteoporosis</option>
                                    <option value="Hypo_Osteomalacia" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Hypo_Osteomalacia'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Hypophosphatemic & Vitamin D Deficiency Osteomalacia</option>
                                    <option value="Pyknodysostosis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Pyknodysostosis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Pyknodysostosis</option>
                                    <option value="Camurati" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Camurati'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Camurati-Engelmann Disease</option>
                                    <option value="Melorheostosis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Melorheostosis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Melorheostosis</option>
                                    <option value="Osteomyelosclerosis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Osteomyelosclerosis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Osteomyelosclerosis</option>
                                    <option value="Achondroplasis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Achondroplasis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Achondroplasis</option>
                                    <option value="Enchondromatosis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Enchondromatosis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Enchondromatosis</option>
                                    <option value="Multiple_Exostoses" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Multiple_Exostoses'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Multiple Exostoses</option>
                                    <option value="Sclerosteosis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Sclerosteosis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Sclerosteosis</option>
                                    <option value="Tumoral" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Tumoral'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Tumoral Calcinosis</option>
                                    <option value="Mucopolysaccharidosis" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Mucopolysaccharidosis'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Mucopolysaccharidosis</option>
                                    <option value="Pseudohypoparathyroidism" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Pseudohypoparathyroidism'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Pseudohypoparathyroidism</option>
                                    <option value="Bartter" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Bartter'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Bartter-like syndrome</option>
                                    <option value="Celiac" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Celiac'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Celiac disease</option>
                                    <option value="Any_other" <?php if(isset($_GET['status'])){
                                        if($row1['disease'] == 'Any_other'){
                                          echo "selected";
                                        }
                                      }
                                    ?>
                                    }>Any other</option>
                                </select>
                            </td>

                        </tr>
                        <?php
                           if(isset($_GET['status'])){
                                  echo "<tr>";
                                  echo "<th>status:</th>";
                                  echo "<td><input type='text' name='status' value ='edit' readonly> </td>";
                                  echo "</tr>";
                           }
                       ?>
                    </table>
                  </div>
                </div>
                    <div class="row">
                    <div class="col-md-12" align="center" id="submit">
                       <input type="submit" name = "submit" value="Next" align="center">
                    </div>
                    </div>
                </form>
      </div>
</body>

</html>
