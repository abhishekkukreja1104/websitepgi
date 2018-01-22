
<?php
   include_once 'includes/dbh.php';
   if(isset($_GET['status'])){

           $sqlD = "select * from BIOR where index_no =".$_GET['addpatient'];
           $sql3 = "select * from BIO3 where index_no =".$_GET['addpatient'];
           $sql6 = "select * from BIO6 where index_no =".$_GET['addpatient'];
           $sql1 = "select * from BIO1 where index_no =".$_GET['addpatient'];
           $sql2 = "select * from BIO2 where index_no =".$_GET['addpatient'];
           $sql5 = "select * from BIO5 where index_no =".$_GET['addpatient'];
           $resultD = mysqli_query($conn, $sqlD);
           $result3 = mysqli_query($conn, $sql3);
           $result6 = mysqli_query($conn, $sql6);
           $result1 = mysqli_query($conn, $sql1);
           $result2 = mysqli_query($conn, $sql2);
           $result5 = mysqli_query($conn, $sql5);
   		$rowD=false;
   		$row3=false;
   		$row6=false;
   		$row1=false;
   		$row2=false;
   		$row5=false;
   		if($resultD!=false){
           	$rowD = mysqli_fetch_array($resultD);
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
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Biochemistry</title>
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
       input[type = "number"]{
         display: inline-block;
         width: 100%;
         height: 25%;
    }
    input[type = "text"]{
        display: inline-block;
        width: 100%;
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
            <img class="img-responsive" src="../RARE_MBD.png" alt="RARE MBD">
          </div>
          <div class="col-md-3" id="logout">
            <a href="login.php">LOGOUT</a>
          </div>
      </div>
      <div class="row">
         <a href="../Layoutaddpatient.php">
            <div class="col-md-3" align="center" id="nav">
               Add Patient
            </div>
         </a>
         <a href="../displaypatient.php">
            <div class="col-md-3" align="center" id="nav">
               View Patient
            </div>
         </a>
         <a href="../search.php">
            <div class="col-md-3" align="center" id="nav">
               Search Patient
            </div>
         </a>
         <a href="../documents.php">
            <div class="col-md-3" align="center" id="nav">
               Manage Documents
            </div>
         </a>
      </div>
      <div class="row">
         <div class="col-md-12" align="center" id="heading">
            <h1>Biochemistry</h1>
         </div>
      </div>
               <form action = "includes/addbioproperties.php" method="POST">
                  <table class="table table-hover" align="center">
                     <tr>
                        <th style="font-size:20px"><font face="verdana">Investigations</font></th>
                        <th style="font-size:20px">&emsp;Results</th>
                        <th ></th>
                        <th ></th>
                        <th id= "up" style="font-size:18px">Follow-up</th>
                        <th ></th>
                        <th ></th>
                     </tr>
                     <tr>
                        <th></th>
                        <th></th>
                        <th id="up">3 months</th>
                        <th id="up">6 months</th>
                        <th id="up">1 year</th>
                        <th id="up">2 year</th>
                        <th id="up">5 year</th>
                     </tr>
                     <tr>
                        <th>Index Number</th>
                        <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
                     </tr>
                     <tr>
                        <th>S. Ca (mg/dl)</th>
                        <td><input type="number" name="S_Ca_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['S_Ca'] : ""); ?> ></td>
                        <td><input type="number" name="S_Ca_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['S_Ca'] : ""); ?> ></td>
                        <td><input type="number" name="S_Ca_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['S_Ca'] : ""); ?> ></td>
                        <td><input type="number" name="S_Ca_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['S_Ca'] : ""); ?>></td>
                        <td><input type="number" name="S_Ca_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['S_Ca'] : ""); ?>></td>
                        <td><input type="number" name="S_Ca_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['S_Ca'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>S. Phosphorus (mg/dl)</th>
                        <td><input type="number" name="S_Phosphorus_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['S_Phosphorus'] : ""); ?>></td>
                        <td><input type="number" name="S_Phosphorus_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['S_Phosphorus'] : ""); ?>></td>
                        <td><input type="number" name="S_Phosphorus_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['S_Phosphorus'] : ""); ?>></td>
                        <td><input type="number" name="S_Phosphorus_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['S_Phosphorus'] : ""); ?>></td>
                        <td><input type="number" name="S_Phosphorus_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['S_Phosphorus'] : ""); ?>></td>
                        <td><input type="number" name="S_Phosphorus_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['S_Phosphorus'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>S. albumin (mg/dl)</th>
                        <td><input type="number" name="S_albumin_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['S_albumin'] : ""); ?>></td>
                        <td><input type="number" name="S_albumin_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['S_albumin'] : ""); ?>></td>
                        <td><input type="number" name="S_albumin_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['S_albumin'] : ""); ?>></td>
                        <td><input type="number" name="S_albumin_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['S_albumin'] : ""); ?>></td>
                        <td><input type="number" name="S_albumin_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['S_albumin'] : ""); ?>></td>
                        <td><input type="number" name="S_albumin_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['S_albumin'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>S. alkaline phosphatase(IU/L)</th>
                        <td><input type="number" name="S_alkaline_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['S_alkaline'] : ""); ?>></td>
                        <td><input type="number" name="S_alkaline_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['S_alkaline'] : ""); ?>></td>
                        <td><input type="number" name="S_alkaline_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['S_alkaline'] : ""); ?>></td>
                        <td><input type="number" name="S_alkaline_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['S_alkaline'] : ""); ?>></td>
                        <td><input type="number" name="S_alkaline_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['S_alkaline'] : ""); ?>></td>
                        <td><input type="number" name="S_alkaline_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['S_alkaline'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>25(OH) D (ng/ml)</th>
                        <td><input type="number" name="OHD_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['OHD'] : ""); ?>></td>
                        <td><input type="number" name="OHD_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['OHD'] : ""); ?>></td>
                        <td><input type="number" name="OHD_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['OHD'] : ""); ?>></td>
                        <td><input type="number" name="OHD_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['OHD'] : ""); ?>></td>
                        <td><input type="number" name="OHD_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['OHD'] : ""); ?>></td>
                        <td><input type="number" name="OHD_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['OHD'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>iPTH (pg/ml)</th>
                        <td><input type="number" name="iPTH_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['iPTH'] : ""); ?>></td>
                        <td><input type="number" name="iPTH_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['iPTH'] : ""); ?>></td>
                        <td><input type="number" name="iPTH_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['iPTH'] : ""); ?>></td>
                        <td><input type="number" name="iPTH_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['iPTH'] : ""); ?>></td>
                        <td><input type="number" name="iPTH_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['iPTH'] : ""); ?>></td>
                        <td><input type="number" name="iPTH_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['iPTH'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>FGF-23(RU/ml)</th>
                        <td><input type="number" name="FGF_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['FGF'] : ""); ?>></td>
                        <td><input type="number" name="FGF_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['FGF'] : ""); ?>></td>
                        <td><input type="number" name="FGF_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['FGF'] : ""); ?>></td>
                        <td><input type="number" name="FGF_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['FGF'] : ""); ?>></td>
                        <td><input type="number" name="FGF_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['FGF'] : ""); ?>></td>
                        <td><input type="number" name="FGF_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['FGF'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>Na<sup>+</sup>(mEq/L)</th>
                        <td><input type="number" name="Na_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['Na'] : ""); ?>></td>
                        <td><input type="number" name="Na_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['Na'] : ""); ?>></td>
                        <td><input type="number" name="Na_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['Na'] : ""); ?>></td>
                        <td><input type="number" name="Na_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['Na'] : ""); ?>></td>
                        <td><input type="number" name="Na_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['Na'] : ""); ?>></td>
                        <td><input type="number" name="Na_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['Na'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>K<sup>+</sup>(mEq/L)</th>
                        <td><input type="number" name="K_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['K'] : ""); ?>></td>
                        <td><input type="number" name="K_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['K'] : ""); ?>></td>
                        <td><input type="number" name="K_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['K'] : ""); ?>></td>
                        <td><input type="number" name="K_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['K'] : ""); ?>></td>
                        <td><input type="number" name="K_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['K'] : ""); ?>></td>
                        <td><input type="number" name="K_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['K'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>Cl<sup>-</sup>(mEq/L)</th>
                        <td><input type="number" name="Cl_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['Cl'] : ""); ?>></td>
                        <td><input type="number" name="Cl_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['Cl'] : ""); ?>></td>
                        <td><input type="number" name="Cl_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['Cl'] : ""); ?>></td>
                        <td><input type="number" name="Cl_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['Cl'] : ""); ?>></td>
                        <td><input type="number" name="Cl_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['Cl'] : ""); ?>></td>
                        <td><input type="number" name="Cl_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['Cl'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>SPO<sub>4</sub><sup>3-</sup>(mg%)</th>
                        <td><input type="number" name="SPO_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['SPO'] : ""); ?>></td>
                        <td><input type="number" name="SPO_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['SPO'] : ""); ?>></td>
                        <td><input type="number" name="SPO_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['SPO'] : ""); ?>></td>
                        <td><input type="number" name="SPO_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['SPO'] : ""); ?>></td>
                        <td><input type="number" name="SPO_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['SPO'] : ""); ?>></td>
                        <td><input type="number" name="SPO_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['SPO'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>24 hour urine Ca (mg/24 hour)</th>
                        <td><input type="number" name="Ca_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['Ca'] : ""); ?>></td>
                        <td><input type="number" name="Ca_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['Ca'] : ""); ?>></td>
                        <td><input type="number" name="Ca_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['Ca'] : ""); ?>></td>
                        <td><input type="number" name="Ca_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['Ca'] : ""); ?>></td>
                        <td><input type="number" name="Ca_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['Ca'] : ""); ?>></td>
                        <td><input type="number" name="Ca_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['Ca'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>24 hour urine creatinine (mg/24 hour)</th>
                        <td><input type="number" name="creatinine_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['creatinine'] : ""); ?>></td>
                        <td><input type="number" name="creatinine_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['creatinine'] : ""); ?>></td>
                        <td><input type="number" name="creatinine_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['creatinine'] : ""); ?>></td>
                        <td><input type="number" name="creatinine_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['creatinine'] : ""); ?>></td>
                        <td><input type="number" name="creatinine_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['creatinine'] : ""); ?>></td>
                        <td><input type="number" name="creatinine_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['creatinine'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>24 hour urine Phosphorus (mg/24hour)</th>
                        <td><input type="number" name="Phosphorous_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['Phosphorous'] : ""); ?>></td>
                        <td><input type="number" name="Phosphorous_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['Phosphorous'] : ""); ?>></td>
                        <td><input type="number" name="Phosphorous_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['Phosphorous'] : ""); ?>></td>
                        <td><input type="number" name="Phosphorous_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['Phosphorous'] : ""); ?>></td>
                        <td><input type="number" name="Phosphorous_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['Phosphorous'] : ""); ?>></td>
                        <td><input type="number" name="Phosphorous_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['Phosphorous'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>EGFR</th>
                        <td><input type="number" name="EGFR_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['EGFR'] : ""); ?>></td>
                        <td><input type="number" name="EGFR_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['EGFR'] : ""); ?>></td>
                        <td><input type="number" name="EGFR_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['EGFR'] : ""); ?>></td>
                        <td><input type="number" name="EGFR_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['EGFR'] : ""); ?>></td>
                        <td><input type="number" name="EGFR_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['EGFR'] : ""); ?>></td>
                        <td><input type="number" name="EGFR_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['EGFR'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>Tmp/GFR (mg/dl)</th>
                        <td><input type="number" name="GFR_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['GFR'] : ""); ?>></td>
                        <td><input type="number" name="GFR_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['GFR'] : ""); ?>></td>
                        <td><input type="number" name="GFR_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['GFR'] : ""); ?>></td>
                        <td><input type="number" name="GFR_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['GFR'] : ""); ?>></td>
                        <td><input type="number" name="GFR_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['GFR'] : ""); ?>></td>
                        <td><input type="number" name="GFR_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['GFR'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>Beta–Cross laps (CTx)</th>
                        <td><input type="number" name="laps_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['laps'] : ""); ?>></td>
                        <td><input type="number" name="laps_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['laps'] : ""); ?>></td>
                        <td><input type="number" name="laps_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['laps'] : ""); ?>></td>
                        <td><input type="number" name="laps_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['laps'] : ""); ?>></td>
                        <td><input type="number" name="laps_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['laps'] : ""); ?>></td>
                        <td><input type="number" name="laps_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['laps'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>P1NP</th>
                        <td><input type="number" name="P1NP_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['P1NP'] : ""); ?>></td>
                        <td><input type="number" name="P1NP_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['P1NP'] : ""); ?>></td>
                        <td><input type="number" name="P1NP_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['P1NP'] : ""); ?>></td>
                        <td><input type="number" name="P1NP_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['P1NP'] : ""); ?>></td>
                        <td><input type="number" name="P1NP_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['P1NP'] : ""); ?>></td>
                        <td><input type="number" name="P1NP_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['P1NP'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>N-Mid Osteocalcin</th>
                        <td><input type="number" name="Osteocalcin_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['Osteocalcin'] : ""); ?>></td>
                        <td><input type="number" name="Osteocalcin_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['Osteocalcin'] : ""); ?>></td>
                        <td><input type="number" name="Osteocalcin_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['Osteocalcin'] : ""); ?>></td>
                        <td><input type="number" name="Osteocalcin_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['Osteocalcin'] : ""); ?>></td>
                        <td><input type="number" name="Osteocalcin_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['Osteocalcin'] : ""); ?>></td>
                        <td><input type="number" name="Osteocalcin_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['Osteocalcin'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>Urine p<sup>H</sup></th>
                        <td><input type="number" name="Urine_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['Urine'] : ""); ?>></td>
                        <td><input type="number" name="Urine_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['Urine'] : ""); ?>></td>
                        <td><input type="number" name="Urine_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['Urine'] : ""); ?>></td>
                        <td><input type="number" name="Urine_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['Urine'] : ""); ?>></td>
                        <td><input type="number" name="Urine_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['Urine'] : ""); ?>></td>
                        <td><input type="number" name="Urine_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['Urine'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>Serum p<sup>H</sup></th>
                        <td><input type="number" name="Serum_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['Serum'] : ""); ?>></td>
                        <td><input type="number" name="Serum_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['Serum'] : ""); ?>></td>
                        <td><input type="number" name="Serum_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['Serum'] : ""); ?>></td>
                        <td><input type="number" name="Serum_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['Serum'] : ""); ?>></td>
                        <td><input type="number" name="Serum_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['Serum'] : ""); ?>></td>
                        <td><input type="number" name="Serum_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['Serum'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>Serum HCo<sub>3</sub></th>
                        <td><input type="number" name="SerumHCo_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['SerumHCo'] : ""); ?>></td>
                        <td><input type="number" name="SerumHCo_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['SerumHCo'] : ""); ?>></td>
                        <td><input type="number" name="SerumHCo_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['SerumHCo'] : ""); ?>></td>
                        <td><input type="number" name="SerumHCo_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['SerumHCo'] : ""); ?>></td>
                        <td><input type="number" name="SerumHCo_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['SerumHCo'] : ""); ?>></td>
                        <td><input type="number" name="SerumHCo_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['SerumHCo'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>Anion gap</th>
                        <td><input type="number" name="anion_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['anion'] : ""); ?>></td>
                        <td><input type="number" name="anion_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['anion'] : ""); ?>></td>
                        <td><input type="number" name="anion_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['anion'] : ""); ?>></td>
                        <td><input type="number" name="anion_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['anion'] : ""); ?>></td>
                        <td><input type="number" name="anion_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['anion'] : ""); ?>></td>
                        <td><input type="number" name="anion_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['anion'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>ANCA</th>
                        <td><input type="number" name="ANCA_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['ANCA'] : ""); ?>></td>
                        <td><input type="number" name="ANCA_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['ANCA'] : ""); ?>></td>
                        <td><input type="number" name="ANCA_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['ANCA'] : ""); ?>></td>
                        <td><input type="number" name="ANCA_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['ANCA'] : ""); ?>></td>
                        <td><input type="number" name="ANCA_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['ANCA'] : ""); ?>></td>
                        <td><input type="number" name="ANCA_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['ANCA'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>DS DNA</th>
                        <td><input type="number" name="DSDNA_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['DSDNA'] : ""); ?>></td>
                        <td><input type="number" name="DSDNA_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['DSDNA'] : ""); ?>></td>
                        <td><input type="number" name="DSDNA_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['DSDNA'] : ""); ?>></td>
                        <td><input type="number" name="DSDNA_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['DSDNA'] : ""); ?>></td>
                        <td><input type="number" name="DSDNA_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['DSDNA'] : ""); ?>></td>
                        <td><input type="number" name="DSDNA_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['DSDNA'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>IgAtTGAb</th>
                        <td><input type="number" name="IgAtTGAb_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['IgAtTGAb'] : ""); ?>></td>
                        <td><input type="number" name="IgAtTGAb_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['IgAtTGAb'] : ""); ?>></td>
                        <td><input type="number" name="IgAtTGAb_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['IgAtTGAb'] : ""); ?>></td>
                        <td><input type="number" name="IgAtTGAb_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['IgAtTGAb'] : ""); ?>></td>
                        <td><input type="number" name="IgAtTGAb_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['IgAtTGAb'] : ""); ?>></td>
                        <td><input type="number" name="IgAtTGAb_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['IgAtTGAb'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>H<sub>2</sub>Breath test</th>
                        <td><input type="text" name="Breath_test_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['Breath_test'] : ""); ?>>
                        </td>
                        <td><input type="text" name="Breath_test_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['Breath_test'] : ""); ?>>
                        </td>
                        <td><input type="text" name="Breath_test_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['Breath_test'] : ""); ?>>
                        </td>
                        <td><input type="text" name="Breath_test_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['Breath_test'] : ""); ?>>
                        </td>
                        <td><input type="text" name="Breath_test_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['Breath_test'] : ""); ?>>
                        </td>
                        <td><input type="text" name="Breath_test_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['Breath_test'] : ""); ?>>
                        </td>
                     </tr>
                     <tr>
                        <th>CKBB</th>
                        <td><input type="number" name="CKBB_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['CKBB'] : ""); ?>></td>
                        <td><input type="number" name="CKBB_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['CKBB'] : ""); ?>></td>
                        <td><input type="number" name="CKBB_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['CKBB'] : ""); ?>></td>
                        <td><input type="number" name="CKBB_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['CKBB'] : ""); ?>></td>
                        <td><input type="number" name="CKBB_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['CKBB'] : ""); ?>></td>
                        <td><input type="number" name="CKBB_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['CKBB'] : ""); ?>></td>
                     </tr>
                     <tr>
                        <th>Any other</th>
                        <td><input type="number" name="Any_other_D" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $rowD['Any_other'] : ""); ?>></td>
                        <td><input type="number" name="Any_other_3" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row3['Any_other'] : ""); ?>></td>
                        <td><input type="number" name="Any_other_6" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row6['Any_other'] : ""); ?>></td>
                        <td><input type="number" name="Any_other_1" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['Any_other'] : ""); ?>></td>
                        <td><input type="number" name="Any_other_2" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row2['Any_other'] : ""); ?>></td>
                        <td><input type="number" name="Any_other_5" step = "any" readonly value = <?php echo ((isset($_GET['status'])) ? $row5['Any_other'] : ""); ?>></td>
                     </tr>
                    </table>
               </form>
            </div>
   </body>
</html>
