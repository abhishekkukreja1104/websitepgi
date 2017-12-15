<?php
	include_once 'includes/dbh.php';

?>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	ul {
    	margin: 0 auto;
    	padding: 0;
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
	<div id = "top" align="center">
		<img src="http://indianphptregistry.com/images/logo.png">
	</div>
	<div>
	<ul>
		<li><a href="test.php">Home</a></li>
		<li><a href="google.com">Add Patient</a></li>
		<li><a href="displaypatient.php">View Patient</a></li>
	</ul>

<form action="includes/addpatient.php" method="POST">
	<div class="box" id = "heading">
		<h1 align="center">PERSONAL DATA</h1>
	</div>
	<br>
	<table cellpadding="2" bgcolor="FFFFFF" align="center"
	cellspacing="20" >
		<tr>
			<th>Name:</th>
			<td><input type="text" name="First_Name" ></td>
		</tr>
		<tr>
			<th>Age(Years):</th>	
			<td><input type="number" name="age"></td>
		</tr>
		<tr>
			<th>Sex:</th>
			<td><input type="radio" name="gender" value="male" checked>Male
			<input type="radio" name="gender" value="female">Female</td>
		</tr>
		<tr>
			<th>CR No:</th>
			<td><input type="number" name="CR_No"></td>
		</tr>
		<tr>
			<th>Admission No:</th>
			<td><input type="number" name="Admission_No"></td>
		</tr>
		<tr>
			<th>EC No:</th>
			<td><input type="number" name="EC_No"></td>
		</tr>
		<tr>
			<th>DOA:</th>
			<td><input type="date" name="DOA"></td>
		</tr>
		<tr>
			<th>DOS:</th>
			<td><input type="date" name="DOS"></td>
		</tr>
		<tr>
			<th>DOD:</th>
			<td><input type="date" name="DOD"></td>
		</tr>
		<tr>
			<th>Address:</th>
			<td><textarea name="message" rows="5" cols="48"></textarea></td>
		</tr>
		<tr>
			<th>Telephone:</th>
			<td><input type="number" name="Telephone"></td>
		</tr>
		<tr>
			<th>Mobile:</th>
			<td><input type="number" name="Mobile"></td>
		</tr>
		<tr>
			<th>Self:</th>
			<td><input type="text" name="Self"></td>
		</tr>
		<tr>
			<th>Parents:</th>
			<td><input type="text" name="Parents""></td>
		</tr>
		<tr>
			<th>Grand Parents:</th>
			<td><input type="text" name="Grand_Parents" </td>
		</tr>
		<tr>
			<th>Referring physicians:</th>
			<td><input type="text" name="Referring_physicians" </td>
		</tr>
		<tr>
			<th>Presenting C/O:</th>
			<td><input type="text" name="Presenting_C" </td>
		</tr>
		<tr>
			<th>Deformity:</th>
			<td><input type="text" name="Deformity" </td>
		</tr>
		<tr>
			<th>No of Fracture:</th>
			<td><input type="text" name="No_of_Fracture" </td>
		</tr>
		<tr>
			<th>Bone Pain:</th>
			<td><input type="text" name="Bone_Pain" </td>
		</tr>
		<tr>
			<th>Short Stature:</th>
			<td><input type="text" name="Short_Stature" </td>
		</tr>
		<tr>
			<th>Teeth abnormality:</th>
			<td><input type="text" name="Teeth_abnormality" </td>
		</tr>
		<tr>
			<th>Duration of symptoms:</th>
			<td><input type="text" name="Duration_of_symptoms" </td>
		</tr>
		</table>
			<div class="box" width="40px" align="center" id = "heading">
    		<input type="submit" value="Save and Continue" align="center">
    	</div>	
</form>	
</div>
</body>
</html>