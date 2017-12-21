<?php
	include_once 'includes/dbh.php';
	if(isset($_GET['addmission_no']) ){
		if($_GET['status']=="edit"){
				$sql = "select * from MBD where addmission_no=".$_GET['addmission_no'].";";
		}
	}
	else {
			$sql = "select * from MBD where addmission_no=-1";
	}
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$add_no = $row['addmission_no'];

?>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	<div id = "top" align="center">
		<img src="http://indianphptregistry.com/images/logo.png">
	</div>
	<div>
	<ul>
		<li><a href="test.php">Add Patient</a></li>
		<li><a href="displaypatient.php">View Patient</a></li>
		<li><a href="documents.php">Manage Documents</a></li>
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
			<td><input type="text" name="First_Name" pattern="[A-Za-z\s]{2,}" title="Only letters and spaces allowed" value = <?php echo $row['name']; ?>></td>
		</tr>
		<tr>
			<th>Age(Years):</th>
			<td><input type="number" value = <?php echo $row['age']; ?> name="age" min="0"></td>
		</tr>
		<tr>
			<th>Sex:</th>
			<td><input type="radio" value = <?php echo $row['sex']; ?> name="gender" value="male" checked>Male
			<input type="radio" name="gender" value="female">Female</td>
		</tr>
		<tr>
			<th>CR No:</th>
			<td><input type="number" value = <?php echo $row['CR_no']; ?> name="CR_No"></td>
		</tr>
		<?php
		if(isset($_GET['status'])){
			echo "<tr>";
				echo "<th>Admission No:</th>";
				echo "<td><input type='number' required='required' name='Admission_No' value = $add_no readonly ></td>";
			echo "</tr>";
		}else{
			echo "<tr>";
				echo "<th>Admission No:</th>";
				echo "<td><input type='number' required='required' name='Admission_No'  ></td>";
			echo "</tr>";

		}
		?>
		<tr>
			<th>EC No:</th>
			<td><input type="number" value = <?php echo $row['EC_no']; ?> name="EC_No"></td>
		</tr>
		<tr>
			<th>DOA:</th>
			<td><input type="date" value = <?php echo $row['DOA']; ?> name="DOA" min="2016-01-01" max="2017-12-16"></td>
		</tr>
		<tr>
			<th>DOS:</th>
			<td><input type="date" value = <?php echo $row['DOS']; ?> name="DOS" min="2016-01-01" max="2017-12-16"></td>
		</tr>
		<tr>
			<th>DOD:</th>
			<td><input type="date" value = <?php echo $row['DOD']; ?> name="DOD" min="2016-01-01" max="2017-12-16"></td>
		</tr>
		<tr>
			<th>Address:</th>
			<td><textarea name="message" value = <?php echo $row['address']; ?> rows="5" cols="48"></textarea></td>
		</tr>
		<tr>
			<th>Telephone:</th>
			<td><input type="Telephone" value = <?php echo $row['telephone']; ?> pattern="^\d{4}-\d{7}$" name="Telephone"></td>
		</tr>
		<tr>
			<th>Mobile:</th>
			<td><input type="Telephone" value = <?php echo $row['mobile']; ?> name="Mobile" pattern="^(7|8|9)\d{9}$" title="Mobile number should contain 10 digits and start with 7, 8 or 9"></td>
		</tr>
		<tr>
			<th>Self:</th>
			<td><input type="text"  name="Self" value = <?php echo $row['self']; ?>></td>
		</tr>
		<tr>
			<th>Parents:</th>
			<td><input type="text" name="Parents" value = <?php echo $row['parents']; ?>></td>
		</tr>
		<tr>
			<th>Grand Parents:</th>
			<td><input type="text" name="Grand_Parents" value = <?php echo $row['grandparents']; ?>></td>
		</tr>
		<tr>
			<th>Referring physicians:</th>
			<td><input type="text" name="Referring_physicians" value = <?php echo $row['r_physicians']; ?> ></td>
		</tr>
		<tr>
			<th>Presenting C/O:</th>
			<td><input type="text" name="Presenting_C" value = <?php echo $row['presenting']; ?>></td>
		</tr>
		<tr>
			<th>Deformity:</th>
			<td><input type="text" name="Deformity" value = <?php echo $row['deformity']; ?>></td>
		</tr>
		<tr>
			<th>No of Fracture:</th>
			<td><input type="text" name="No_of_Fracture" value = <?php echo $row['n_o_fracture']; ?>></td>
		</tr>
		<tr>
			<th>Bone Pain:</th>
			<td><input type="text" name="Bone_Pain" value = <?php echo $row['bone_pain']; ?>></td>
		</tr>
		<tr>
			<th>Short Stature:</th>
			<td><input type="text" name="Short_Stature" value = <?php echo $row['short_stature']; ?>></td>
		</tr>
		<tr>
			<th>Teeth abnormality:</th>
			<td><input type="text" name="Teeth_abnormality" value = <?php echo $row['teeth_abnormality']; ?>></td>
		</tr>
		<tr>
			<th>Duration of symptoms:</th>
			<td><input type="text" name="Duration_of_symptoms" value = <?php echo $row['duration']; ?>> </td>
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
    		<input type="submit" value="Save and Continue" align="center" method="POST">
    	</div>
</form>
</div>
</body>
</html>
