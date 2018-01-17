<?php
  include_once 'includes/dbh.php';

  if(isset($_GET['status'])){
    if($_GET['status']=="edit"){
      $sqlB = "select * from OSB where index_no =".$_GET['addpatient'];

      $sql3 = "select * from OS3 where index_no =".$_GET['addpatient'];
      $sql6 = "select * from OS6 where index_no =".$_GET['addpatient'];
      $sql1 = "select * from OS1 where index_no =".$_GET['addpatient'];
      $sql2 = "select * from OS2 where index_no =".$_GET['addpatient'];
      $sql5 = "select * from OS5 where index_no =".$_GET['addpatient'];
      $resultB = mysqli_query($conn, $sqlB);

      $result3 = mysqli_query($conn, $sql3);
      $result6 = mysqli_query($conn, $sql6);
      $result1 = mysqli_query($conn, $sql1);
      $result2 = mysqli_query($conn, $sql2);
      $result5 = mysqli_query($conn, $sql5);
      $rowB=false;

      $row3=false;
      $row6=false;
      $row1=false;
      $row2=false;
      $row5=false;


            if($resultB!=false){
              $rowB = mysqli_fetch_array($result3);
            }
      if($result3!=false){
        $row3 = mysqli_fetch_array($result3);
      }
      if($result6!=false){
        $row6 = mysqli_fetch_array($result6);
      }
      if($result1!=false)
        $row1 = mysqli_fetch_array($result1);
      if($result2!=false)
        $row2 = mysqli_fetch_array($result2);
      if($result5!=false)
        $row5 = mysqli_fetch_array($result5);

    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Other Symptoms</title>
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
    input[type = "text"]{
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
      margin-top: 1%;
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
         <a href="displaypatient.php">
            <div class="col-md-3" align="center" id="nav">
               Search Patient
            </div>
         </a>
         <a href="documents">
            <div class="col-md-3" align="center" id="nav">
               Manage Documents
            </div>
         </a>
      </div>
      <div class="row">
         <div class="col-md-12" align="center" id="heading">
            <h1>Other Symptoms</h1>
         </div>
      </div>
      <form action="includes/addothersymptoms.php" method="POST">
      <table class="table table-bordered table-hover">
          <thead>
            <tr>
                   <th style="font-size:20px"><font face="verdana">Investigations</font></th>
                   <th></th>
                   <th></th>
                   <th></th>
                   <th id= "up" style="font-size:18px">Follow-up</th>
                   <th ></th>
                   <th ></th>
                </tr>
              <tr>
                  <th></th>
                  <th id="up">Base line</th>
                  <th id="up">3 months</th>
                  <th id="up">6 months</th>
                  <th id="up">1 year</th>
                  <th id="up">2 year</th>
                  <th id="up">5 year</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <th>Index Number</th>
              <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?>  readonly></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
      <th>Asymptomatic</th>
      <td><select name="Asymptomatic_B">
        <option>--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Asymptomatic'] == 'yes'){
                echo "selected";
              }
            }
          ?>
          }>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Asymptomatic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Asymptomatic_3">
        <option>--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Asymptomatic'] == 'yes'){
                echo "selected";
              }
            }
          ?>
          }>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Asymptomatic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Asymptomatic_6">
        <option>--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Asymptomatic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Asymptomatic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Asymptomatic_1">
        <option>--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Asymptomatic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Asymptomatic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Asymptomatic_2">
        <option >--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Asymptomatic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Asymptomatic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Asymptomatic_5">
        <option>--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Asymptomatic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Asymptomatic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Bone pain</th>
      <td><select name="Bone_pain_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Bone_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Bone_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bone_pain_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Bone_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Bone_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bone_pain_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Bone_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Bone_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bone_pain_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Bone_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Bone_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bone_pain_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Bone_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Bone_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bone_pain_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Bone_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Bone_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Backache</th>
      <td><select name="Backache_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Backache'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Backache'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Backache_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Backache'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Backache'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Backache_6" >
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Backache'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Backache'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Backache_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Backache'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Backache'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Backache_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Backache'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Backache'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Backache_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Backache'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Backache'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Bony Swelling</th>
      <td><select name="Bony_Swelling_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Bony_Swelling'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Bony_Swelling'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bony_Swelling_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Bony_Swelling'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Bony_Swelling'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bony_Swelling_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Bony_Swelling'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Bony_Swelling'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bony_Swelling_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Bony_Swelling'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Bony_Swelling'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bony_Swelling_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Bony_Swelling'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Bony_Swelling'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Bony_Swelling_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Bony_Swelling'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Bony_Swelling'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Cripple</th>
      <td><select name="Cripple_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Cripple'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Cripple'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cripple_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Cripple'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Cripple'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cripple_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Cripple'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Cripple'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cripple_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Cripple'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Cripple'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cripple_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Cripple'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Cripple'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cripple_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Cripple'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Cripple'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Fracture(s)</th>
      <td><select name="Fracture_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Fracture'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Fracture'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Fracture_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Fracture'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Fracture'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Fracture_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Fracture'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Fracture'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Fracture_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Fracture'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Fracture'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Fracture_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Fracture'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Fracture'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Fracture_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Fracture'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Fracture'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Anorexia</th>
      <td><select name="Anorexia_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Anorexia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Anorexia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Anorexia_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Anorexia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Anorexia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Anorexia_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Anorexia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Anorexia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Anorexia_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Anorexia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Anorexia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Anorexia_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Anorexia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Anorexia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Anorexia_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Anorexia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Anorexia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Constipation</th>
      <td><select name="Constipation_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Constipation'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Constipation'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Constipation_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Constipation'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Constipation'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Constipation_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Constipation'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Constipation'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Constipation_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Constipation'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Constipation'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Constipation_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Constipation'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Constipation'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Constipation_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Constipation'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Constipation'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Loss of teeth</th>
      <td><select name="Loss_of_teeth_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Loss_of_teeth'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Loss_of_teeth'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Loss_of_teeth_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Loss_of_teeth'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Loss_of_teeth'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Loss_of_teeth_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Loss_of_teeth'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Loss_of_teeth'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Loss_of_teeth_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Loss_of_teeth'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Loss_of_teeth'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Loss_of_teeth_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Loss_of_teeth'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Loss_of_teeth'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Loss_of_teeth_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Loss_of_teeth'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Loss_of_teeth'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Cataract</th>
      <td><select name="Cataract_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Cataract'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Cataract'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cataract_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Cataract'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Cataract'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cataract_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Cataract'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Cataract'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cataract_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Cataract'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Cataract'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cataract_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Cataract'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Cataract'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cataract_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Cataract'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Cataract'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Renal Colic</th>
      <td><select name="Renal_Colic_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Renal_Colic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Renal_Colic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Renal_Colic_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Renal_Colic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Renal_Colic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Renal_Colic_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Renal_Colic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Renal_Colic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Renal_Colic_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Renal_Colic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Renal_Colic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Renal_Colic_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Renal_Colic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Renal_Colic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Renal_Colic_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Renal_Colic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Renal_Colic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Round face</th>
      <td><select name="Round_face_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Round_face'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Round_face'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Round_face_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Round_face'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Round_face'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Round_face_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Round_face'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Round_face'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Round_face_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Round_face'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Round_face'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Round_face_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Round_face'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Round_face'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Round_face_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Round_face'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Round_face'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Short stature</th>
      <td><select name="Short_stature_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Short_stature'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Short_stature'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_stature_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Short_stature'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Short_stature'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_stature_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Short_stature'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Short_stature'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_stature_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Short_stature'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Short_stature'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_stature_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Short_stature'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Short_stature'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_stature_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Short_stature'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Short_stature'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Cafe-au-lait-macule</th>
      <td><select name="Cafe_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Cafe'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Cafe'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cafe_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Cafe'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Cafe'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cafe_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Cafe'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Cafe'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cafe_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Cafe'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Cafe'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cafe_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Cafe'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Cafe'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Cafe_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Cafe'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Cafe'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Blue sclera</th>
      <td><select name="Blue_sclera_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Blue_sclera'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Blue_sclera'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Blue_sclera_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Blue_sclera'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Blue_sclera'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Blue_sclera_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Blue_sclera'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Blue_sclera'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Blue_sclera_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Blue_sclera'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Blue_sclera'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Blue_sclera_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Blue_sclera'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Blue_sclera'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Blue_sclera_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Blue_sclera'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Blue_sclera'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Dentinogenesis imperfecta</th>
      <td><select name="Dentinogenesis_imperfecta_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Dentinogenesis_imperfecta'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Dentinogenesis_imperfecta'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Dentinogenesis_imperfecta_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Dentinogenesis_imperfecta'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Dentinogenesis_imperfecta'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Dentinogenesis_imperfecta_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Dentinogenesis_imperfecta'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Dentinogenesis_imperfecta'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Dentinogenesis_imperfecta_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Dentinogenesis_imperfecta'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Dentinogenesis_imperfecta'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Dentinogenesis_imperfecta_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Dentinogenesis_imperfecta'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Dentinogenesis_imperfecta'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Dentinogenesis_imperfecta_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Dentinogenesis_imperfecta'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Dentinogenesis_imperfecta'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Acoustic damage(deafness) (Conductive/Sensor name deafness)</th>
      <td><select name="Acoustic_damage_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Acoustic_damage'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Acoustic_damage'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Acoustic_damage_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Acoustic_damage'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Acoustic_damage'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Acoustic_damage_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Acoustic_damage'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Acoustic_damage'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Acoustic_damage_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Acoustic_damage'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Acoustic_damage'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Acoustic_damage_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Acoustic_damage'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Acoustic_damage'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Acoustic_damage_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Acoustic_damage'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Acoustic_damage'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Deformity UL</th>
      <td><select name="UL_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['UL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['UL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="UL_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['UL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['UL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="UL_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['UL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['UL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="UL_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['UL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['UL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="UL_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['UL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['UL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="UL_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['UL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['UL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Deformity LL(Genuvarum/Genuvalgum/Wind swift/None)</th>
      <td><select name="LL_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['LL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['LL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="LL_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['LL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['LL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="LL_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['LL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['LL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="LL_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['LL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['LL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="LL_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['LL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['LL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="LL_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['LL'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['LL'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Deformity Spine(kyphosis/Scoliosis)</th>
      <td><select name="spine_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['spine'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['spine'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="spine_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['spine'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['spine'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="spine_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['spine'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['spine'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="spine_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['spine'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['spine'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="spine_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['spine'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['spine'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="spine_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['spine'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['spine'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Hyper extensibility of the joints</th>
      <td><select name="Hyper_extensibility_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Hyper_extensibility'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Hyper_extensibility'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyper_extensibility_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Hyper_extensibility'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Hyper_extensibility'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyper_extensibility_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Hyper_extensibility'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Hyper_extensibility'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyper_extensibility_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Hyper_extensibility'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Hyper_extensibility'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyper_extensibility_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Hyper_extensibility'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Hyper_extensibility'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyper_extensibility_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Hyper_extensibility'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Hyper_extensibility'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Syndactyly</th>
      <td><select name="Syndactyly_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['syndactyly'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['syndactyly'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Syndactyly_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['syndactyly'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['syndactyly'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Syndactyly_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['syndactyly'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['syndactyly'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Syndactyly_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['syndactyly'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['syndactyly'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Syndactyly_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['syndactyly'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['syndactyly'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Syndactyly_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['syndactyly'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['syndactyly'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Tufting of phalanges</th>
      <td><select name="Tufting_of_phalanges_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Tufting_of_phalanges'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Tufting_of_phalanges'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tufting_of_phalanges_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Tufting_of_phalanges'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Tufting_of_phalanges'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tufting_of_phalanges_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Tufting_of_phalanges'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Tufting_of_phalanges'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tufting_of_phalanges_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Tufting_of_phalanges'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Tufting_of_phalanges'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tufting_of_phalanges_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Tufting_of_phalanges'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Tufting_of_phalanges'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tufting_of_phalanges_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Tufting_of_phalanges'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Tufting_of_phalanges'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Short 4<sup>th</sup> metacarpal</th>
      <td><select name="Short_4_th_metacarpal_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Short_4_th_metacarpal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Short_4_th_metacarpal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_4_th_metacarpal_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Short_4_th_metacarpal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Short_4_th_metacarpal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_4_th_metacarpal_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Short_4_th_metacarpal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Short_4_th_metacarpal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_4_th_metacarpal_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Short_4_th_metacarpal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Short_4_th_metacarpal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_4_th_metacarpal_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Short_4_th_metacarpal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Short_4_th_metacarpal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Short_4_th_metacarpal_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Short_4_th_metacarpal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Short_4_th_metacarpal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Short 4<sup>th</sup> metatarsal</th>
      <td><select name="Tarsal_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Tarsal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Tarsal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tarsal_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Tarsal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Tarsal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tarsal_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Tarsal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Tarsal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tarsal_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Tarsal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Tarsal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tarsal_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Tarsal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Tarsal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Tarsal_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Tarsal'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Tarsal'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Upper Segment/Lower Segment (Cm)</th>
      <td><input type="text" name="Upper_Segment_B" value=<?php echo ((isset($_GET['status'])) ? $rowB[ 'Upper_Segment'] : ""); ?>>
      </td>
      <td><input type="text" name="Upper_Segment_3" value=<?php echo ((isset($_GET['status'])) ? $row3[ 'Upper_Segment'] : ""); ?>>
      </td>
      <td><input type="text" name="Upper_Segment_6" value=<?php echo ((isset($_GET['status'])) ? $row6[ 'Upper_Segment'] : ""); ?>>
      </td>
      <td><input type="text" name="Upper_Segment_1" value=<?php echo ((isset($_GET['status'])) ? $row1[ 'Upper_Segment'] : ""); ?>>
      </td>
      <td><input type="text" name="Upper_Segment_2" value=<?php echo ((isset($_GET['status'])) ? $row2[ 'Upper_Segment'] : ""); ?>>
      </td>
      <td><input type="text" name="Upper_Segment_5" value=<?php echo ((isset($_GET['status'])) ? $row5[ 'Upper_Segment'] : ""); ?>>
      </td>
    </tr>
    <tr>
      <th>Arched palate</th>
      <td><select name="Arched_palate_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Arched_palate'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Arched_palate'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Arched_palate_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Arched_palate'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Arched_palate'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Arched_palate_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Arched_palate'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Arched_palate'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Arched_palate_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Arched_palate'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Arched_palate'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Arched_palate_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Arched_palate'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Arched_palate'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Arched_palate_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Arched_palate'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Arched_palate'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Waddling gait</th>
      <td><select name="Waddling_gait_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Waddling_gait'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Waddling_gait'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Waddling_gait_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Waddling_gait'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Waddling_gait'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Waddling_gait_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Waddling_gait'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Waddling_gait'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Waddling_gait_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Waddling_gait'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Waddling_gait'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Waddling_gait_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Waddling_gait'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Waddling_gait'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Waddling_gait_5"5>
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Waddling_gait'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Waddling_gait'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr><tr>
      <th>Exostosis</th>
      <td><select name="Exostosis_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Exostosis'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Exostosis'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Exostosis_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Exostosis'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Exostosis'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Exostosis_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Exostosis'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Exostosis'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Exostosis_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Exostosis'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Exostosis'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Exostosis_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Exostosis'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Exostosis'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Exostosis_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Exostosis'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Exostosis'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Hypoplasia of mandible</th>
      <td><select name="Hypoplasia_of_mandible_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Hypoplasia_of_mandible'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Hypoplasia_of_mandible'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypoplasia_of_mandible_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Hypoplasia_of_mandible'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Hypoplasia_of_mandible'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypoplasia_of_mandible_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Hypoplasia_of_mandible'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Hypoplasia_of_mandible'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypoplasia_of_mandible_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Hypoplasia_of_mandible'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Hypoplasia_of_mandible'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypoplasia_of_mandible_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Hypoplasia_of_mandible'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Hypoplasia_of_mandible'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypoplasia_of_mandible_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Hypoplasia_of_mandible'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Hypoplasia_of_mandible'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Monostotic</th>
      <td><select name="Monostotic_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Monostotic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Monostotic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Monostotic_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Monostotic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Monostotic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Monostotic_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Monostotic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Monostotic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Monostotic_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Monostotic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Monostotic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Monostotic_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Monostotic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Monostotic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Monostotic_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Monostotic'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Monostotic'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Polyostotic lesion</th>
      <td><select name="Polyostotic_lesion_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Polyostotic_lesion'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Polyostotic_lesion'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Polyostotic_lesion_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Polyostotic_lesion'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Polyostotic_lesion'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Polyostotic_lesion_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Polyostotic_lesion'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Polyostotic_lesion'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Polyostotic_lesion_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Polyostotic_lesion'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Polyostotic_lesion'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Polyostotic_lesion_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Polyostotic_lesion'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Polyostotic_lesion'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Polyostotic_lesion_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Polyostotic_lesion'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Polyostotic_lesion'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Galactorhoea</th>
      <td><select name="Hyperprolactinaemia_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Hyperprolactinaemia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Hyperprolactinaemia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyperprolactinaemia_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Hyperprolactinaemia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Hyperprolactinaemia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyperprolactinaemia_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Hyperprolactinaemia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Hyperprolactinaemia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyperprolactinaemia_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Hyperprolactinaemia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Hyperprolactinaemia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyperprolactinaemia_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Hyperprolactinaemia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Hyperprolactinaemia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hyperprolactinaemia_5"
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Hyperprolactinaemia'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Hyperprolactinaemia'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Weakness & Fatiguability</th>
      <td><select name="Weakness_Fatiguability_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Weakness_Fatiguability'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Weakness_Fatiguability'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Weakness_Fatiguability_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Weakness_Fatiguability'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Weakness_Fatiguability'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Weakness_Fatiguability_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Weakness_Fatiguability'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Weakness_Fatiguability'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Weakness_Fatiguability_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Weakness_Fatiguability'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Weakness_Fatiguability'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Weakness_Fatiguability_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Weakness_Fatiguability'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Weakness_Fatiguability'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Weakness_Fatiguability_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Weakness_Fatiguability'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Weakness_Fatiguability'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Joint pain</th>
      <td><select name="Joint_pain_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Joint_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Joint_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>>
      <td><select name="Joint_pain_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Joint_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Joint_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Joint_pain_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Joint_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Joint_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Joint_pain_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Joint_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Joint_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Joint_pain_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Joint_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Joint_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Joint_pain_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Joint_pain'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Joint_pain'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Visual impairment</th>
      <td><select name="Visual_impairment_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Visual_impairment'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Visual_impairment'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Visual_impairment_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Visual_impairment'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Visual_impairment'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Visual_impairment_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Visual_impairment'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Visual_impairment'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Visual_impairment_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Visual_impairment'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Visual_impairment'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Visual_impairment_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Visual_impairment'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Visual_impairment'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Visual_impairment_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Visual_impairment'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Visual_impairment'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Precocious puberty</th>
      <td><select name="Precocious_puberty_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Precocious_puberty'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Precocious_puberty'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Precocious_puberty_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Precocious_puberty'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Precocious_puberty'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Precocious_puberty_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Precocious_puberty'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Precocious_puberty'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Precocious_puberty_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Precocious_puberty'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Precocious_puberty'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Precocious_puberty_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Precocious_puberty'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Precocious_puberty'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Precocious_puberty_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Precocious_puberty'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Precocious_puberty'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Hypophosphatemic rickets</th>
      <td><select name="Hypophosphatemic_rickets_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Hypophosphatemic_rickets'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Hypophosphatemic_rickets'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypophosphatemic_rickets_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Hypophosphatemic_rickets'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Hypophosphatemic_rickets'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypophosphatemic_rickets_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Hypophosphatemic_rickets'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Hypophosphatemic_rickets'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypophosphatemic_rickets_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Hypophosphatemic_rickets'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Hypophosphatemic_rickets'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypophosphatemic_rickets_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Hypophosphatemic_rickets'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Hypophosphatemic_rickets'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Hypophosphatemic_rickets_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Hypophosphatemic_rickets'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Hypophosphatemic_rickets'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Facial asymmetry</th>
      <td><select name="Facial_asymmetry_B">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($rowB['Facial_asymmetry'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($rowB['Facial_asymmetry'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Facial_asymmetry_3">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row3['Facial_asymmetry'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row3['Facial_asymmetry'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Facial_asymmetry_6">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row6['Facial_asymmetry'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row6['Facial_asymmetry'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Facial_asymmetry_1">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row1['Facial_asymmetry'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row1['Facial_asymmetry'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Facial_asymmetry_2">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row2['Facial_asymmetry'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row2['Facial_asymmetry'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
      <td><select name="Facial_asymmetry_5">
        <option value="unknown">--Select--</option>
          <option value="yes" <?php if(isset($_GET['status'])){
              if($row5['Facial_asymmetry'] == 'yes'){
                echo "selected";
              }
            }
          ?>>Yes</option>
          <option value="no" <?php if(isset($_GET['status'])){
              if($row5['Facial_asymmetry'] == 'no'){
                echo "selected";
              }
            }
          ?>>No</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Any_other</th>
      <td><input type="text" name="Any_other_D" ></td>
      <td><input type="text" name="Any_other_3">

      </td>
      <td><input type="text" name="Any_other_6">

      </td>
      <td><input type="text" name="Any_other_1">
      </td>
      <td><input type="text" name="Any_other_2">

      </td>
      <td><input type="text" name="Any_other_5">

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
    </tbody>
  </table>
    <div class="row">
       <div class="col-md-12" align="center" id="submit">
          <input type="submit" value="Save and Continue" align="center">
       </div>
    </div>
    </form>
   </div>
</body>
</html>
