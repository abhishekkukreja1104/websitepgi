<!DOCTYPE html>
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
	<form>
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
			<th>S. Ca (mg/dl)</th>
			<td><input type="text" name="S_Ca _D"></td>
			<td><input type="text" name="S_Ca _3"></td>
			<td><input type="text" name="S_Ca _6"></td>
			<td><input type="text" name="S_Ca _1"></td>
			<td><input type="text" name="S_Ca _2"></td>
			<td><input type="text" name="S_Ca _5"></td>
		</tr>
		<tr>
			<th>S. Phosphorus (mg/dl)</th>
			<td><input type="text" name="S_Phosphorus_D"></td>
			<td><input type="text" name="S_Phosphorus_3"></td>
			<td><input type="text" name="S_Phosphorus_6"></td>
			<td><input type="text" name="S_Phosphorus_1"></td>
			<td><input type="text" name="S_Phosphorus_2"></td>
			<td><input type="text" name="S_Phosphorus_5"></td>
		</tr>
		<tr>
			<th>S. albumin (mg/dl)</th>
			<td><input type="text" name="S_albumin_D"></td>
			<td><input type="text" name="S_albumin_3"></td>
			<td><input type="text" name="S_albumin_6"></td>
			<td><input type="text" name="S_albumin_1"></td>
			<td><input type="text" name="S_albumin_2"></td>
			<td><input type="text" name="S_albumin_5"></td>
		</tr>
		<tr>
			<th>S. alkaline phosphatase(IU/L)</th>
			<td><input type="text" name="S_alkaline_D"></td>
			<td><input type="text" name="S_alkaline_3"></td>
			<td><input type="text" name="S_alkaline_6"></td>
			<td><input type="text" name="S_alkaline_1"></td>
			<td><input type="text" name="S_alkaline_2"></td>
			<td><input type="text" name="S_alkaline_5"></td>
		</tr>
		<tr>
			<th>25(OH) D (ng/ml)</th>
			<td><input type="text" name="OHD_D"></td>
			<td><input type="text" name="OHD_3"></td>
			<td><input type="text" name="OHD_6"></td>
			<td><input type="text" name="OHD_1"></td>
			<td><input type="text" name="OHD_2"></td>
			<td><input type="text" name="OHD_5"></td>
		</tr>
		<tr>
			<th>iPTH (pg/ml)</th>
			<td><input type="text" name="iPTH_D"></td>
			<td><input type="text" name="iPTH_3"></td>
			<td><input type="text" name="iPTH_6"></td>
			<td><input type="text" name="iPTH_1"></td>
			<td><input type="text" name="iPTH_2"></td>
			<td><input type="text" name="iPTH_5"></td>
		</tr>
		<tr>
			<th>FGF-23(RU/ml)</th>
			<td><input type="text" name="FGF_D"></td>
			<td><input type="text" name="FGF_3"></td>
			<td><input type="text" name="FGF_6"></td>
			<td><input type="text" name="FGF_1"></td>
			<td><input type="text" name="FGF_2"></td>
			<td><input type="text" name="FGF_5"></td>
		</tr>
		<tr>
			<th>Na<sup>+</sup>(mEq/L)</th>
			<td><input type="text" name="Na_D"></td>
			<td><input type="text" name="Na_3"></td>
			<td><input type="text" name="Na_6"></td>
			<td><input type="text" name="Na_1"></td>
			<td><input type="text" name="Na_2"></td>
			<td><input type="text" name="Na_5"></td>
		</tr>
		<tr>
			<th>K<sup>+</sup>(mEq/L)</th>
			<td><input type="text" name="K_D"></td>
			<td><input type="text" name="K_3"></td>
			<td><input type="text" name="K_6"></td>
			<td><input type="text" name="K_1"></td>
			<td><input type="text" name="K_2"></td>
			<td><input type="text" name="K_5"></td>
		</tr>
		<tr>
			<th>Cl<sup>-</sup>(mEq/L)</th>
			<td><input type="text" name="Cl_D"></td>
			<td><input type="text" name="Cl_3"></td>
			<td><input type="text" name="Cl_6"></td>
			<td><input type="text" name="Cl_1"></td>
			<td><input type="text" name="Cl_2"></td>
			<td><input type="text" name="Cl_5"></td>
		</tr>
		<tr>
			<th>SPO<sub>4</sub><sup>3-</sup>(mg%)</th>
			<td><input type="text" name="SPO_D"></td>
			<td><input type="text" name="SPO_3"></td>
			<td><input type="text" name="SPO_6"></td>
			<td><input type="text" name="SPO_1"></td>
			<td><input type="text" name="SPO_2"></td>
			<td><input type="text" name="SPO_5"></td>
		</tr>
		<tr>
			<th>24 hour urine Ca (mg/24 hour)</th>
			<td><input type="text" name="Ca_D"></td>
			<td><input type="text" name="Ca_3"></td>
			<td><input type="text" name="Ca_6"></td>
			<td><input type="text" name="Ca_1"></td>
			<td><input type="text" name="Ca_2"></td>
			<td><input type="text" name="Ca_5"></td>
		</tr>
		<tr>
			<th>24 hour urine creatinine (mg/24 hour)</th>
			<td><input type="text" name="creatinine_D"></td>
			<td><input type="text" name="creatinine_3"></td>
			<td><input type="text" name="creatinine_6"></td>
			<td><input type="text" name="creatinine_1"></td>
			<td><input type="text" name="creatinine_2"></td>
			<td><input type="text" name="creatinine_5"></td>
		</tr>
		<tr>
			<th>24 hour urine Phosphorus (mg/24hour)</th>
			<td><input type="text" name="Phosphorus_D"></td>
			<td><input type="text" name="Phosphorus_3"></td>
			<td><input type="text" name="Phosphorus_6"></td>
			<td><input type="text" name="Phosphorus_1"></td>
			<td><input type="text" name="Phosphorus_2"></td>
			<td><input type="text" name="Phosphorus_5"></td>
		</tr>
		<tr>
			<th>EGFR</th>
			<td><input type="text" name="EGFR_D"></td>
			<td><input type="text" name="EGFR_3"></td>
			<td><input type="text" name="EGFR_6"></td>
			<td><input type="text" name="EGFR_1"></td>
			<td><input type="text" name="EGFR_2"></td>
			<td><input type="text" name="EGFR_5"></td>
		</tr>
		<tr>
			<th>Tmp/GFR (mg/dl)</th>
			<td><input type="text" name="GFR_D"></td>
			<td><input type="text" name="GFR_3"></td>
			<td><input type="text" name="GFR_6"></td>
			<td><input type="text" name="GFR_1"></td>
			<td><input type="text" name="GFR_2"></td>
			<td><input type="text" name="GFR_5"></td>
		</tr>
		<tr>
			<th>Beta–Cross laps (CTx)</th>
			<td><input type="text" name="laps_D"></td>
			<td><input type="text" name="laps_3"></td>
			<td><input type="text" name="laps_6"></td>
			<td><input type="text" name="laps_1"></td>
			<td><input type="text" name="laps_2"></td>
			<td><input type="text" name="laps_5"></td>
		</tr>
		<tr>
			<th>P1NP</th>
			<td><input type="text" name="P1NP_D"></td>
			<td><input type="text" name="P1NP_3"></td>
			<td><input type="text" name="P1NP_6"></td>
			<td><input type="text" name="P1NP_1"></td>
			<td><input type="text" name="P1NP_2"></td>
			<td><input type="text" name="P1NP_5"></td>
		</tr>
		<tr>
			<th>N-Mid Osteocalcin</th>
			<td><input type="text" name="Osteocalcin_D"></td>
			<td><input type="text" name="Osteocalcin_3"></td>
			<td><input type="text" name="Osteocalcin_6"></td>
			<td><input type="text" name="Osteocalcin_1"></td>
			<td><input type="text" name="Osteocalcin_2"></td>
			<td><input type="text" name="Osteocalcin_5"></td>
		</tr>
		<tr>
			<th>Urine p<sup>H</sup></th>
			<td><input type="text" name="Urine_D"></td>
			<td><input type="text" name="Urine_3"></td>
			<td><input type="text" name="Urine_6"></td>
			<td><input type="text" name="Urine_1"></td>
			<td><input type="text" name="Urine_2"></td>
			<td><input type="text" name="Urine_5"></td>
		</tr>
		<tr>
			<th>Serum p<sup>H</sup></th>
			<td><input type="text" name="Serum_D"></td>
			<td><input type="text" name="Serum_3"></td>
			<td><input type="text" name="Serum_6"></td>
			<td><input type="text" name="Serum_1"></td>
			<td><input type="text" name="Serum_2"></td>
			<td><input type="text" name="Serum_5"></td>
		</tr>
		<tr>
			<th>Serum HCo<sub>3</sub></th>
			<td><input type="text" name="SerumHCo_D"></td>
			<td><input type="text" name="SerumHCo_3"></td>
			<td><input type="text" name="SerumHCo_6"></td>
			<td><input type="text" name="SerumHCo_1"></td>
			<td><input type="text" name="SerumHCo_2"></td>
			<td><input type="text" name="SerumHCo_5"></td>
		</tr>
		<tr>
			<th>Anion gap</th>
			<td><input type="text" name="anion_D"></td>
			<td><input type="text" name="anion_3"></td>
			<td><input type="text" name="anion_6"></td>
			<td><input type="text" name="anion_1"></td>
			<td><input type="text" name="anion_2"></td>
			<td><input type="text" name="anion_5"></td>
		</tr>
		<tr>
			<th>ANCA</th>
			<td><input type="text" name="ANCA_D"></td>
			<td><input type="text" name="ANCA_3"></td>
			<td><input type="text" name="ANCA_6"></td>
			<td><input type="text" name="ANCA_1"></td>
			<td><input type="text" name="ANCA_2"></td>
			<td><input type="text" name="ANCA_5"></td>
		</tr>
		<tr>
			<th>DS DNA</th>
			<td><input type="text" name="DSDNA_D"></td>
			<td><input type="text" name="DSDNA_3"></td>
			<td><input type="text" name="DSDNA_6"></td>
			<td><input type="text" name="DSDNA_1"></td>
			<td><input type="text" name="DSDNA_2"></td>
			<td><input type="text" name="DSDNA_5"></td>
		</tr>
		<tr>
			<th>IgAtTGAb</th>
			<td><input type="text" name="IgAtTGAb_D"></td>
			<td><input type="text" name="IgAtTGAb_3"></td>
			<td><input type="text" name="IgAtTGAb_6"></td>
			<td><input type="text" name="IgAtTGAb_1"></td>
			<td><input type="text" name="IgAtTGAb_2"></td>
			<td><input type="text" name="IgAtTGAb_5"></td>
		</tr>
		<tr>
			<th>H<sub>2</sub>Breath test</th>
			<td><input type="text" name="Breath_test_D"></td>
			<td><input type="text" name="Breath_test_3"></td>
			<td><input type="text" name="Breath_test_6"></td>
			<td><input type="text" name="Breath_test_1"></td>
			<td><input type="text" name="Breath_test_2"></td>
			<td><input type="text" name="Breath_test_5"></td>
		</tr><tr>
			<th>CKBB</th>
			<td><input type="text" name="CKBB_D"></td>
			<td><input type="text" name="CKBB_3"></td>
			<td><input type="text" name="CKBB_6"></td>
			<td><input type="text" name="CKBB_1"></td>
			<td><input type="text" name="CKBB_2"></td>
			<td><input type="text" name="CKBB_5"></td>
		</tr>
		<tr>
			<th>Any other</th>
			<td><input type="text" name="Any_other_D"></td>
			<td><input type="text" name="Any_other_3"></td>
			<td><input type="text" name="Any_other_6"></td>
			<td><input type="text" name="Any_other_1"></td>
			<td><input type="text" name="Any_other_2"></td>
			<td><input type="text" name="Any_other_5"></td>
		</tr>
		</table>
	</form>
</div>
</body>
</html>