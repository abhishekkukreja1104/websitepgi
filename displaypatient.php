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
    	margin-right: 44px;
    	text-align: center;
	}
	li {
    	display: inline;
   	 	list-style: none;
	}
	#nav_a:link,#nav_a:visited
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
	#nav_a:hover,#nav_a:active
	{
	    background-color:black;
	}
	</style>
<body>
	<div id = "top" align="center">
		<img src="http://indianphptregistry.com/images/logo.png">
	</div>
	<ul>
		 <li><a href="Layoutaddpatient.php">Add Patient</a></li>
		 <li><a href="displaypatient.php">View Patient</a></li>
		 <li><a href="displaypatient.php">Search Patient</a></li>
		 <li><a href="documents">Manage Documents</a></li>
	</ul>

	<div id = "Patient" align="center">
		<h1>Patients</h1>
	</div>


	<table id="customers">
    <thead>
        <tr>
            <th>Admission No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Parents</th>

            <th>Edit Patient</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select name, index_no, DOB, sex, address, mobile, parents from MBD;";
		$result=mysqli_query($conn,$sql);

        while( $row = mysqli_fetch_array($result)) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['index_no']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['DOB']; ?></td>
            <td><?php echo $row['sex']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['parents']; ?></td>
            <td><a id="edit_link" href=<?php echo "Layoutaddpatient.php?status=edit&index_no=".$row['index_no'];?>>edit</a></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>
</body>

</html>
