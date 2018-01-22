<?php
include_once 'includes/dbh.php';


if(isset($_GET['status'])){
    if($_GET['status']=="edit"){
        $sql = "select * from NUCB where index_no =".$_GET['addpatient'];
        $result = mysqli_query($conn, $sql);
        $row=false;
   if($result!=false){
         $row = mysqli_fetch_array($result);

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
         padding: 5%;
         text-align: left;
       }
       #up{
         text-align: center;
       }
       #submit{
         width: 100%;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
       }
       .table{
        margin-top: 1%;
        margin-left: 27%;
        width: 60%;
        border: none;
       }
       #form{
        padding: 2%;
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
            <h1>Clinical diagnosis dropdown</h1>
         </div>
      </div>
            <div id="form" align="center">
                <form action = "includes/addclinicaldiagnosis.php" method="post">
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
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
                                    <option value="Celiac">Celiac disease</option>
                                    <option value="Any_other">Any other</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <div class="row">
                    <div class="col-md-12" align="center" id="submit">
                       <input type="submit" name = "submit" value="Next" align="center">
                    </div>
                    </div>
                </form>

            </div>



        </div>

</body>

</html>
