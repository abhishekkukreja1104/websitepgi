<?php
include_once 'includes/dbh.php';


if(isset($_GET['status'])){
    if($_GET['status']=="edit"){
        $sql = "select * from CD where index_no=".$_GET['addpatient'];
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
      <title>Osteomalacia Dropdown</title>
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
         background: #518B47;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
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
            <h1>Osteomalacia Dropdown</h1>
         </div>
      </div>
            <form action="includes/addostomalasia.php" method="post">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                  <table class="table table-hover">
                    <tr>
                      <th>Index Number</th>
                      <td>
                        <input type="text" name="addpatient" value=<?php echo $_GET[ 'addpatient']?> readonly>
                      </td>
                    </tr>
                        <tr>
                          <th>Osteomalacia Dropdown:</th>
                            <td>
                              <select name="Osteomalacia1">
                                  <option value="unknown" <?php if(isset($_GET['status'])){
                                      if($row1['subDF'] == 'unknown'){
                                        echo "selected";
                                      }
                                    }
                                  ?>
                                  }>-Select-</option>
                                  <option value="Vit_D3" <?php if(isset($_GET['status'])){
                                      if($row1['subDF'] == 'Vit_D3'){
                                        echo "selected";
                                      }
                                    }
                                  ?>
                                  }>Vit D3 deficiency</option>
                                  <option value="Hypophosphatemic" <?php if(isset($_GET['status'])){
                                      if($row1['subDF'] == 'Hypophosphatemic'){
                                        echo "selected";
                                      }
                                    }
                                  ?>
                                  }>Hypophosphatemic</option>
                              </select>
                            </td>
                            <td>
                              <select name="Osteomalacia2">
                                  <option value="unknown" <?php if(isset($_GET['status'])){
                                      if($row1['subSF'] == 'Hypophosphatemic'){
                                        echo "selected";
                                      }
                                    }
                                  ?>
                                  }>-Select-</option>
                                  <option value="Malabsorption" <?php if(isset($_GET['status'])){
                                      if($row1['subSF'] == 'Malabsorption'){
                                        echo "selected";
                                      }
                                    }
                                  ?>
                                  }>Malabsorption</option>
                                  <option value="Nutritional" <?php if(isset($_GET['status'])){
                                      if($row1['subSF'] == 'Nutritional'){
                                        echo "selected";
                                      }
                                    }
                                  ?>
                                  }>Nutritional</option>
                                  <option value="Tumor_Induced" <?php if(isset($_GET['status'])){
                                      if($row1['subSF'] == 'Tumor_Induced'){
                                        echo "selected";
                                      }
                                    }
                                  ?>
                                  }>Tumor Induced</option>
                                  <option value="Tenofovir_Induced" <?php if(isset($_GET['status'])){
                                      if($row1['subSF'] == 'Tenofovir_Induced'){
                                        echo "selected";
                                      }
                                    }
                                  ?>
                                  }>Tenofovir Induced</option>
                              </select>
                            </td>
                        </tr>
                    </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12" align="center" id="submit">
                      <input type="submit" name="Next" align="center">
                    </div>
                  </div>
                </form>
        </div>
</body>

</html>
