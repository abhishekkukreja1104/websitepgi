<?php
    include_once 'includes/dbh.php';
    if(isset($_GET['status'])){
        if($_GET['status']=="edit"){
            $sqlD = "select * from BIOR where admission_no =".$_GET['addpatient'];
            $sql3 = "select * from BIO3M where admission_no =".$_GET['addpatient'];
            $sql6 = "select * from BIO6M where admission_no =".$_GET['addpatient'];
            $sql1 = "select * from BIO1Y where admission_no =".$_GET['addpatient'];
            $sql2 = "select * from BIO2Y where admission_no =".$_GET['addpatient'];
            $sql5 = "select * from BIO5Y where admission_no =".$_GET['addpatient'];
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
    }
?>
<html>
<head>
    <title>Biochemistry</title>
    <link rel="stylesheet" type="text/css" href="form_style.css">
</head>
<style>
    ul {
        margin: 0 auto;
        margin-right: 44px;
        text-align: center;
    }
    li {
        display: inline;
            list-style: none;
    }
    a:link,a:visited
    {
        display:inline-block;
        margin-right: -4px;
        width: 360px;
        font-weight:bold;
        color:white;
        background-color:#1F4F96;
        text-align:center;
        padding:20px;
        height: 30px;
        text-decoration:none;
        text-transform:uppercase;
    }
    a:hover,a:active
    {
        background-color:black;
    }
</style>
<body>
    <div align="center" width = "1180px">
    <div id = "top" align="center">
        <img src="http://indianphptregistry.com/images/logo.png">
    </div>
    <ul>
        <li><a href="test.htm">Home</a></li>
        <li><a href="google.com">Add Patient</a></li>
        <li><a href="#about">View Patient</a></li>
    </ul>
    <form action = "includes/addbioproperties.php" method="POST">
        <div class="box" id="heading">
            <h1  align="center">Biochemistry</h1>
        </div>
        <table cellpadding="3" bgcolor="FFFFFF" align="center"
        cellspacing="20" >
        <tr>
            <th style="font-size:20px"><font face="verdana">Investigations</font></th>
            <th style="font-size:20px">&emsp;Results</th>
            <th ></th>
            <th ></th>
            <th style="font-size:20px">&nbsp;&nbsp;Follow-up</th>
            <th ></th>
            <th ></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th id="up">&emsp;3 months</th>
            <th id="up">&emsp;6 months</th>
            <th id="up">&emsp;&emsp;1 year</th>
            <th id="up">&emsp;&emsp;2 year</th>
            <th id="up">&emsp;&emsp;5 year</th>
        </tr>
        <tr>
            <th>Admission Number</th>
            <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
        </tr>
        <tr>
            <th>S. Ca (mg/dl)</th>
            <td><input type="text" name="S_Ca_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['S_Ca'] : ""); ?> ></td>
            <td><input type="text" name="S_Ca_3" value = <?php echo ((isset($_GET['status'])) ? $row3['S_Ca'] : ""); ?> ></td>
            <td><input type="text" name="S_Ca_6" value = <?php echo ((isset($_GET['status'])) ? $row6['S_Ca'] : ""); ?> ></td>
            <td><input type="text" name="S_Ca_1" value = <?php echo ((isset($_GET['status'])) ? $row1['S_Ca'] : ""); ?>></td>
            <td><input type="text" name="S_Ca_2" value = <?php echo ((isset($_GET['status'])) ? $row2['S_Ca'] : ""); ?>></td>
            <td><input type="text" name="S_Ca_5" value = <?php echo ((isset($_GET['status'])) ? $row5['S_Ca'] : ""); ?>></td>
        </tr>
        <tr>
            <th>S. Phosphorus (mg/dl)</th>
            <td><input type="text" name="S_Phosphorus_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['S_Phosphorus'] : ""); ?>></td>
            <td><input type="text" name="S_Phosphorus_3" value = <?php echo ((isset($_GET['status'])) ? $row3['S_Phosphorus'] : ""); ?>></td>
            <td><input type="text" name="S_Phosphorus_6" value = <?php echo ((isset($_GET['status'])) ? $row6['S_Phosphorus'] : ""); ?>></td>
            <td><input type="text" name="S_Phosphorus_1" value = <?php echo ((isset($_GET['status'])) ? $row1['S_Phosphorus'] : ""); ?>></td>
            <td><input type="text" name="S_Phosphorus_2" value = <?php echo ((isset($_GET['status'])) ? $row2['S_Phosphorus'] : ""); ?>></td>
            <td><input type="text" name="S_Phosphorus_5" value = <?php echo ((isset($_GET['status'])) ? $row5['S_Phosphorus'] : ""); ?>></td>
        </tr>
        <tr>
            <th>S. albumin (mg/dl)</th>
            <td><input type="text" name="S_albumin_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['S_albumin'] : ""); ?>></td>
            <td><input type="text" name="S_albumin_3" value = <?php echo ((isset($_GET['status'])) ? $row3['S_albumin'] : ""); ?>></td>
            <td><input type="text" name="S_albumin_6" value = <?php echo ((isset($_GET['status'])) ? $row6['S_albumin'] : ""); ?>></td>
            <td><input type="text" name="S_albumin_1" value = <?php echo ((isset($_GET['status'])) ? $row1['S_albumin'] : ""); ?>></td>
            <td><input type="text" name="S_albumin_2" value = <?php echo ((isset($_GET['status'])) ? $row2['S_albumin'] : ""); ?>></td>
            <td><input type="text" name="S_albumin_5" value = <?php echo ((isset($_GET['status'])) ? $row5['S_albumin'] : ""); ?>></td>
        </tr>
        <tr>
            <th>S. alkaline phosphatase(IU/L)</th>
            <td><input type="text" name="S_alkaline_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['S_alkaline'] : ""); ?>></td>
            <td><input type="text" name="S_alkaline_3" value = <?php echo ((isset($_GET['status'])) ? $row3['S_alkaline'] : ""); ?>></td>
            <td><input type="text" name="S_alkaline_6" value = <?php echo ((isset($_GET['status'])) ? $row6['S_alkaline'] : ""); ?>></td>
            <td><input type="text" name="S_alkaline_1" value = <?php echo ((isset($_GET['status'])) ? $row1['S_alkaline'] : ""); ?>></td>
            <td><input type="text" name="S_alkaline_2" value = <?php echo ((isset($_GET['status'])) ? $row2['S_alkaline'] : ""); ?>></td>
            <td><input type="text" name="S_alkaline_5" value = <?php echo ((isset($_GET['status'])) ? $row5['S_alkaline'] : ""); ?>></td>
        </tr>
        <tr>
            <th>25(OH) D (ng/ml)</th>
            <td><input type="text" name="OHD_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['OHD'] : ""); ?>></td>
            <td><input type="text" name="OHD_3" value = <?php echo ((isset($_GET['status'])) ? $row3['OHD'] : ""); ?>></td>
            <td><input type="text" name="OHD_6" value = <?php echo ((isset($_GET['status'])) ? $row6['OHD'] : ""); ?>></td>
            <td><input type="text" name="OHD_1" value = <?php echo ((isset($_GET['status'])) ? $row1['OHD'] : ""); ?>></td>
            <td><input type="text" name="OHD_2" value = <?php echo ((isset($_GET['status'])) ? $row2['OHD'] : ""); ?>></td>
            <td><input type="text" name="OHD_5" value = <?php echo ((isset($_GET['status'])) ? $row5['OHD'] : ""); ?>></td>
        </tr>
        <tr>
            <th>iPTH (pg/ml)</th>
            <td><input type="text" name="iPTH_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['iPTH'] : ""); ?>></td>
            <td><input type="text" name="iPTH_3" value = <?php echo ((isset($_GET['status'])) ? $row3['iPTH'] : ""); ?>></td>
            <td><input type="text" name="iPTH_6" value = <?php echo ((isset($_GET['status'])) ? $row6['iPTH'] : ""); ?>></td>
            <td><input type="text" name="iPTH_1" value = <?php echo ((isset($_GET['status'])) ? $row1['iPTH'] : ""); ?>></td>
            <td><input type="text" name="iPTH_2" value = <?php echo ((isset($_GET['status'])) ? $row2['iPTH'] : ""); ?>></td>
            <td><input type="text" name="iPTH_5" value = <?php echo ((isset($_GET['status'])) ? $row5['iPTH'] : ""); ?>></td>
        </tr>
        <tr>
            <th>FGF-23(RU/ml)</th>
            <td><input type="text" name="FGF_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['FGF'] : ""); ?>></td>
            <td><input type="text" name="FGF_3" value = <?php echo ((isset($_GET['status'])) ? $row3['FGF'] : ""); ?>></td>
            <td><input type="text" name="FGF_6" value = <?php echo ((isset($_GET['status'])) ? $row6['FGF'] : ""); ?>></td>
            <td><input type="text" name="FGF_1" value = <?php echo ((isset($_GET['status'])) ? $row1['FGF'] : ""); ?>></td>
            <td><input type="text" name="FGF_2" value = <?php echo ((isset($_GET['status'])) ? $row2['FGF'] : ""); ?>></td>
            <td><input type="text" name="FGF_5" value = <?php echo ((isset($_GET['status'])) ? $row5['FGF'] : ""); ?>></td>
        </tr>
        <tr>
            <th>Na<sup>+</sup>(mEq/L)</th>
            <td><input type="text" name="Na_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Na'] : ""); ?>></td>
            <td><input type="text" name="Na_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Na'] : ""); ?>></td>
            <td><input type="text" name="Na_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Na'] : ""); ?>></td>
            <td><input type="text" name="Na_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Na'] : ""); ?>></td>
            <td><input type="text" name="Na_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Na'] : ""); ?>></td>
            <td><input type="text" name="Na_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Na'] : ""); ?>></td>
        </tr>
        <tr>
            <th>K<sup>+</sup>(mEq/L)</th>
            <td><input type="text" name="K_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['K'] : ""); ?>></td>
            <td><input type="text" name="K_3" value = <?php echo ((isset($_GET['status'])) ? $row3['K'] : ""); ?>></td>
            <td><input type="text" name="K_6" value = <?php echo ((isset($_GET['status'])) ? $row6['K'] : ""); ?>></td>
            <td><input type="text" name="K_1" value = <?php echo ((isset($_GET['status'])) ? $row1['K'] : ""); ?>></td>
            <td><input type="text" name="K_2" value = <?php echo ((isset($_GET['status'])) ? $row2['K'] : ""); ?>></td>
            <td><input type="text" name="K_5" value = <?php echo ((isset($_GET['status'])) ? $row5['K'] : ""); ?>></td>
        </tr>
        <tr>
            <th>Cl<sup>-</sup>(mEq/L)</th>
            <td><input type="text" name="Cl_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Cl'] : ""); ?>></td>
            <td><input type="text" name="Cl_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Cl'] : ""); ?>></td>
            <td><input type="text" name="Cl_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Cl'] : ""); ?>></td>
            <td><input type="text" name="Cl_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Cl'] : ""); ?>></td>
            <td><input type="text" name="Cl_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Cl'] : ""); ?>></td>
            <td><input type="text" name="Cl_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Cl'] : ""); ?>></td>
        </tr>
        <tr>
            <th>SPO<sub>4</sub><sup>3-</sup>(mg%)</th>
            <td><input type="text" name="SPO_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['SPO'] : ""); ?>></td>
            <td><input type="text" name="SPO_3" value = <?php echo ((isset($_GET['status'])) ? $row3['SPO'] : ""); ?>></td>
            <td><input type="text" name="SPO_6" value = <?php echo ((isset($_GET['status'])) ? $row6['SPO'] : ""); ?>></td>
            <td><input type="text" name="SPO_1" value = <?php echo ((isset($_GET['status'])) ? $row1['SPO'] : ""); ?>></td>
            <td><input type="text" name="SPO_2" value = <?php echo ((isset($_GET['status'])) ? $row2['SPO'] : ""); ?>></td>
            <td><input type="text" name="SPO_5" value = <?php echo ((isset($_GET['status'])) ? $row5['SPO'] : ""); ?>></td>
        </tr>
        <tr>
            <th>24 hour urine Ca (mg/24 hour)</th>
            <td><input type="text" name="Ca_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Ca'] : ""); ?>></td>
            <td><input type="text" name="Ca_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Ca'] : ""); ?>></td>
            <td><input type="text" name="Ca_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Ca'] : ""); ?>></td>
            <td><input type="text" name="Ca_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Ca'] : ""); ?>></td>
            <td><input type="text" name="Ca_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Ca'] : ""); ?>></td>
            <td><input type="text" name="Ca_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Ca'] : ""); ?>></td>
        </tr>
        <tr>
            <th>24 hour urine creatinine (mg/24 hour)</th>
            <td><input type="text" name="creatinine_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['creatinine'] : ""); ?>></td>
            <td><input type="text" name="creatinine_3" value = <?php echo ((isset($_GET['status'])) ? $row3['creatinine'] : ""); ?>></td>
            <td><input type="text" name="creatinine_6" value = <?php echo ((isset($_GET['status'])) ? $row6['creatinine'] : ""); ?>></td>
            <td><input type="text" name="creatinine_1" value = <?php echo ((isset($_GET['status'])) ? $row1['creatinine'] : ""); ?>></td>
            <td><input type="text" name="creatinine_2" value = <?php echo ((isset($_GET['status'])) ? $row2['creatinine'] : ""); ?>></td>
            <td><input type="text" name="creatinine_5" value = <?php echo ((isset($_GET['status'])) ? $row5['creatinine'] : ""); ?>></td>
        </tr>
        <tr>
            <th>24 hour urine Phosphorus (mg/24hour)</th>
            <td><input type="text" name="Phosphorous_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Phosphorous'] : ""); ?>></td>
            <td><input type="text" name="Phosphorous_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Phosphorous'] : ""); ?>></td>
            <td><input type="text" name="Phosphorous_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Phosphorous'] : ""); ?>></td>
            <td><input type="text" name="Phosphorous_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Phosphorous'] : ""); ?>></td>
            <td><input type="text" name="Phosphorous_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Phosphorous'] : ""); ?>></td>
            <td><input type="text" name="Phosphorous_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Phosphorous'] : ""); ?>></td>
        </tr>
        <tr>
            <th>EGFR</th>
            <td><input type="text" name="EGFR_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['EGFR'] : ""); ?>></td>
            <td><input type="text" name="EGFR_3" value = <?php echo ((isset($_GET['status'])) ? $row3['EGFR'] : ""); ?>></td>
            <td><input type="text" name="EGFR_6" value = <?php echo ((isset($_GET['status'])) ? $row6['EGFR'] : ""); ?>></td>
            <td><input type="text" name="EGFR_1" value = <?php echo ((isset($_GET['status'])) ? $row1['EGFR'] : ""); ?>></td>
            <td><input type="text" name="EGFR_2" value = <?php echo ((isset($_GET['status'])) ? $row2['EGFR'] : ""); ?>></td>
            <td><input type="text" name="EGFR_5" value = <?php echo ((isset($_GET['status'])) ? $row5['EGFR'] : ""); ?>></td>
        </tr>
        <tr>
            <th>Tmp/GFR (mg/dl)</th>
            <td><input type="text" name="GFR_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['GFR'] : ""); ?>></td>
            <td><input type="text" name="GFR_3" value = <?php echo ((isset($_GET['status'])) ? $row3['GFR'] : ""); ?>></td>
            <td><input type="text" name="GFR_6" value = <?php echo ((isset($_GET['status'])) ? $row6['GFR'] : ""); ?>></td>
            <td><input type="text" name="GFR_1" value = <?php echo ((isset($_GET['status'])) ? $row1['GFR'] : ""); ?>></td>
            <td><input type="text" name="GFR_2" value = <?php echo ((isset($_GET['status'])) ? $row2['GFR'] : ""); ?>></td>
            <td><input type="text" name="GFR_5" value = <?php echo ((isset($_GET['status'])) ? $row5['GFR'] : ""); ?>></td>
        </tr>
        <tr>
            <th>Beta–Cross laps (CTx)</th>
            <td><input type="text" name="laps_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['laps'] : ""); ?>></td>
            <td><input type="text" name="laps_3" value = <?php echo ((isset($_GET['status'])) ? $row3['laps'] : ""); ?>></td>
            <td><input type="text" name="laps_6" value = <?php echo ((isset($_GET['status'])) ? $row6['laps'] : ""); ?>></td>
            <td><input type="text" name="laps_1" value = <?php echo ((isset($_GET['status'])) ? $row1['laps'] : ""); ?>></td>
            <td><input type="text" name="laps_2" value = <?php echo ((isset($_GET['status'])) ? $row2['laps'] : ""); ?>></td>
            <td><input type="text" name="laps_5" value = <?php echo ((isset($_GET['status'])) ? $row5['laps'] : ""); ?>></td>
        </tr>
        <tr>
            <th>P1NP</th>
            <td><input type="text" name="P1NP_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['P1NP'] : ""); ?>></td>
            <td><input type="text" name="P1NP_3" value = <?php echo ((isset($_GET['status'])) ? $row3['P1NP'] : ""); ?>></td>
            <td><input type="text" name="P1NP_6" value = <?php echo ((isset($_GET['status'])) ? $row6['P1NP'] : ""); ?>></td>
            <td><input type="text" name="P1NP_1" value = <?php echo ((isset($_GET['status'])) ? $row1['P1NP'] : ""); ?>></td>
            <td><input type="text" name="P1NP_2" value = <?php echo ((isset($_GET['status'])) ? $row2['P1NP'] : ""); ?>></td>
            <td><input type="text" name="P1NP_5" value = <?php echo ((isset($_GET['status'])) ? $row5['P1NP'] : ""); ?>></td>
        </tr>
        <tr>
            <th>N-Mid Osteocalcin</th>
            <td><input type="text" name="Osteocalcin_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Osteocalcin'] : ""); ?>></td>
            <td><input type="text" name="Osteocalcin_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Osteocalcin'] : ""); ?>></td>
            <td><input type="text" name="Osteocalcin_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Osteocalcin'] : ""); ?>></td>
            <td><input type="text" name="Osteocalcin_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Osteocalcin'] : ""); ?>></td>
            <td><input type="text" name="Osteocalcin_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Osteocalcin'] : ""); ?>></td>
            <td><input type="text" name="Osteocalcin_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Osteocalcin'] : ""); ?>></td>
        </tr>
        <tr>
            <th>Urine p<sup>H</sup></th>
            <td><input type="text" name="Urine_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Urine'] : ""); ?>></td>
            <td><input type="text" name="Urine_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Urine'] : ""); ?>></td>
            <td><input type="text" name="Urine_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Urine'] : ""); ?>></td>
            <td><input type="text" name="Urine_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Urine'] : ""); ?>></td>
            <td><input type="text" name="Urine_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Urine'] : ""); ?>></td>
            <td><input type="text" name="Urine_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Urine'] : ""); ?>></td>
        </tr>
        <tr>
            <th>Serum p<sup>H</sup></th>
            <td><input type="text" name="Serum_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Serum'] : ""); ?>></td>
            <td><input type="text" name="Serum_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Serum'] : ""); ?>></td>
            <td><input type="text" name="Serum_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Serum'] : ""); ?>></td>
            <td><input type="text" name="Serum_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Serum'] : ""); ?>></td>
            <td><input type="text" name="Serum_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Serum'] : ""); ?>></td>
            <td><input type="text" name="Serum_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Serum'] : ""); ?>></td>
        </tr>
        <tr>
            <th>Serum HCo<sub>3</sub></th>
            <td><input type="text" name="SerumHCo_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['SerumHCo'] : ""); ?>></td>
            <td><input type="text" name="SerumHCo_3" value = <?php echo ((isset($_GET['status'])) ? $row3['SerumHCo'] : ""); ?>></td>
            <td><input type="text" name="SerumHCo_6" value = <?php echo ((isset($_GET['status'])) ? $row6['SerumHCo'] : ""); ?>></td>
            <td><input type="text" name="SerumHCo_1" value = <?php echo ((isset($_GET['status'])) ? $row1['SerumHCo'] : ""); ?>></td>
            <td><input type="text" name="SerumHCo_2" value = <?php echo ((isset($_GET['status'])) ? $row2['SerumHCo'] : ""); ?>></td>
            <td><input type="text" name="SerumHCo_5" value = <?php echo ((isset($_GET['status'])) ? $row5['SerumHCo'] : ""); ?>></td>
        </tr>
        <tr>
            <th>Anion gap</th>
            <td><input type="text" name="anion_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['anion'] : ""); ?>></td>
            <td><input type="text" name="anion_3" value = <?php echo ((isset($_GET['status'])) ? $row3['anion'] : ""); ?>></td>
            <td><input type="text" name="anion_6" value = <?php echo ((isset($_GET['status'])) ? $row6['anion'] : ""); ?>></td>
            <td><input type="text" name="anion_1" value = <?php echo ((isset($_GET['status'])) ? $row1['anion'] : ""); ?>></td>
            <td><input type="text" name="anion_2" value = <?php echo ((isset($_GET['status'])) ? $row2['anion'] : ""); ?>></td>
            <td><input type="text" name="anion_5" value = <?php echo ((isset($_GET['status'])) ? $row5['anion'] : ""); ?>></td>
        </tr>
        <tr>
            <th>ANCA</th>
            <td><input type="text" name="ANCA_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['ANCA'] : ""); ?>></td>
            <td><input type="text" name="ANCA_3" value = <?php echo ((isset($_GET['status'])) ? $row3['ANCA'] : ""); ?>></td>
            <td><input type="text" name="ANCA_6" value = <?php echo ((isset($_GET['status'])) ? $row6['ANCA'] : ""); ?>></td>
            <td><input type="text" name="ANCA_1" value = <?php echo ((isset($_GET['status'])) ? $row1['ANCA'] : ""); ?>></td>
            <td><input type="text" name="ANCA_2" value = <?php echo ((isset($_GET['status'])) ? $row2['ANCA'] : ""); ?>></td>
            <td><input type="text" name="ANCA_5" value = <?php echo ((isset($_GET['status'])) ? $row5['ANCA'] : ""); ?>></td>
        </tr>
        <tr>
            <th>DS DNA</th>
            <td><input type="text" name="DSDNA_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['DSDNA'] : ""); ?>></td>
            <td><input type="text" name="DSDNA_3" value = <?php echo ((isset($_GET['status'])) ? $row3['DSDNA'] : ""); ?>></td>
            <td><input type="text" name="DSDNA_6" value = <?php echo ((isset($_GET['status'])) ? $row6['DSDNA'] : ""); ?>></td>
            <td><input type="text" name="DSDNA_1" value = <?php echo ((isset($_GET['status'])) ? $row1['DSDNA'] : ""); ?>></td>
            <td><input type="text" name="DSDNA_2" value = <?php echo ((isset($_GET['status'])) ? $row2['DSDNA'] : ""); ?>></td>
            <td><input type="text" name="DSDNA_5" value = <?php echo ((isset($_GET['status'])) ? $row5['DSDNA'] : ""); ?>></td>
        </tr>
        <tr>
            <th>IgAtTGAb</th>
            <td><input type="text" name="IgAtTGAb_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['IgAtTGAb'] : ""); ?>></td>
            <td><input type="text" name="IgAtTGAb_3" value = <?php echo ((isset($_GET['status'])) ? $row3['IgAtTGAb'] : ""); ?>></td>
            <td><input type="text" name="IgAtTGAb_6" value = <?php echo ((isset($_GET['status'])) ? $row6['IgAtTGAb'] : ""); ?>></td>
            <td><input type="text" name="IgAtTGAb_1" value = <?php echo ((isset($_GET['status'])) ? $row1['IgAtTGAb'] : ""); ?>></td>
            <td><input type="text" name="IgAtTGAb_2" value = <?php echo ((isset($_GET['status'])) ? $row2['IgAtTGAb'] : ""); ?>></td>
            <td><input type="text" name="IgAtTGAb_5" value = <?php echo ((isset($_GET['status'])) ? $row5['IgAtTGAb'] : ""); ?>></td>
        </tr>
        <tr>
            <th>H<sub>2</sub>Breath test</th>
            <td><input type="text" name="Breath_test_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Breath_test'] : ""); ?>></td>
            <td><input type="text" name="Breath_test_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Breath_test'] : ""); ?>></td>
            <td><input type="text" name="Breath_test_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Breath_test'] : ""); ?>></td>
            <td><input type="text" name="Breath_test_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Breath_test'] : ""); ?>></td>
            <td><input type="text" name="Breath_test_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Breath_test'] : ""); ?>></td>
            <td><input type="text" name="Breath_test_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Breath_test'] : ""); ?>></td>
        </tr>
        <tr>
            <th>CKBB</th>
            <td><input type="text" name="CKBB_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['CKBB'] : ""); ?>></td>
            <td><input type="text" name="CKBB_3" value = <?php echo ((isset($_GET['status'])) ? $row3['CKBB'] : ""); ?>></td>
            <td><input type="text" name="CKBB_6" value = <?php echo ((isset($_GET['status'])) ? $row6['CKBB'] : ""); ?>></td>
            <td><input type="text" name="CKBB_1" value = <?php echo ((isset($_GET['status'])) ? $row1['CKBB'] : ""); ?>></td>
            <td><input type="text" name="CKBB_2" value = <?php echo ((isset($_GET['status'])) ? $row2['CKBB'] : ""); ?>></td>
            <td><input type="text" name="CKBB_5" value = <?php echo ((isset($_GET['status'])) ? $row5['CKBB'] : ""); ?>></td>
        </tr>
        <tr>
            <th>Any other</th>
            <td><input type="text" name="Any_other_D" value = <?php echo ((isset($_GET['status'])) ? $rowD['Any_other'] : ""); ?>></td>
            <td><input type="text" name="Any_other_3" value = <?php echo ((isset($_GET['status'])) ? $row3['Any_other'] : ""); ?>></td>
            <td><input type="text" name="Any_other_6" value = <?php echo ((isset($_GET['status'])) ? $row6['Any_other'] : ""); ?>></td>
            <td><input type="text" name="Any_other_1" value = <?php echo ((isset($_GET['status'])) ? $row1['Any_other'] : ""); ?>></td>
            <td><input type="text" name="Any_other_2" value = <?php echo ((isset($_GET['status'])) ? $row2['Any_other'] : ""); ?>></td>
            <td><input type="text" name="Any_other_5" value = <?php echo ((isset($_GET['status'])) ? $row5['Any_other'] : ""); ?>></td>
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

        <div class="box" width="40px" align="center" id = "heading">
            <input type="submit" value="Save and Continue" align="center">
        </div>
    </form>
</div>
</body>
</html>
