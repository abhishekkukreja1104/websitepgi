<?php
	include_once 'includes/dbh.php';
	$localIP = getHostByName(getHostName());
	echo $localIP;
	$row= false;
	if(isset($_GET['index_no']) ){
		if($_GET['status']=="edit"){
				$sql = "select * from MBD where index_no=".$_GET['index_no'].";";
      	$result = mysqli_query($conn, $sql);
      	$row = mysqli_fetch_array($result);
      	$index_no = $row['index_no'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Personal Data</title>
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
            <h1>Personal Data</h1>
         </div>
      </div>
            <form action = "includes/addpatient.php" method = "POST">

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-8">
               <table class="table table-hover" align="center">
                 <?php
             		if(isset($_GET['status'])){
             			echo "<tr>";
             				echo "<th>Index No:</th>";
             				echo "<td><input type='number' required='required' name='index_no' value = $index_no readonly ></td>";
             			echo "</tr>";
             		}?>
                  <tr>
                     <th>Name:<font color="red">*</font></form></th>
                     <td><input type="text" name="First_Name" required value = <?php echo $row['name']; ?>></td>
                  </tr>
                  <tr>
                     <th>DOB:<font color="red">*</font></th>
                     <td><input type="date" name="DOB" required value = <?php echo $row['DOB']; ?>></td>
                  </tr>
                  <tr>
                     <th>Sex:<font color="red">*</font></th>
                     <td><input type="radio" name="gender" value="male" checked>Male
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="transgender">Transgender
                     </td>
                  </tr>
                  <tr>
                     <th>CR No.:<font color="red">*</font></form></th>
                     <td><input type="text" name="CR_No" pattern="[0-9]{1,12}" title="Only numbers are allowed and max length is 12 digits" required value = <?php echo $row['CR_no']; ?>></td>
                  </tr>
                  <tr>
                     <th>Admission No:</th>
                     <td><input type="number" name="Admission_No" value = <?php echo $row['admission_no']; ?>></td>
                  </tr>
                  <tr>
                     <th>EC No:</th>
                     <td><input type="number" name="EC_No" value = <?php echo $row['EC_no']; ?>></td>
                  </tr>
                  <tr>
                     <th>DOA:</th>
                     <td><input type="date" name="DOA" value = <?php echo $row['DOA']; ?>></td>
                  </tr>
                  <tr>
                     <th>DOS:</th>
                     <td><input type="date" name="DOS" value = <?php echo $row['DOS']; ?>></td>
                  </tr>
                  <tr>
                     <th>DOD:</th>
                     <td><input type="date" name="DOD" value = <?php echo $row['DOD']; ?>></td>
                  </tr>
                  <tr>
                     <th>Address:</th>
                     <td><textarea name="message" rows="5" cols="48" value = <?php echo $row['address']; ?>></textarea></td>
                  </tr>
                  <tr>
                     <th>Telephone:</th>
                     <td><input type="number" name="Telephone" value = <?php echo $row['telephone']; ?>></td>
                  </tr>
                  <tr>
                     <th>Mobile:<font color="red">*</font></th>
                     <td><input type="number" name="Mobile" required value = <?php echo $row['mobile']; ?>></td>
                  </tr>
                  <tr>
                     <th>Email:</th>
                     <td><input type="email" name="Email" value = <?php echo $row['email']; ?>></td>
                  </tr>
                  <tr>
                     <th>Self:</th>
                     <td><input type="number" name="Self" value = <?php echo $row['self']; ?>></td>
                  </tr>
                  <tr>
                     <th>Parents:</th>
                     <td><input type="number" name="Parents" value = <?php echo $row['parents']; ?>></td>
                  </tr>
                  <tr>
                     <th>Grand Parents:</th>
                     <td><input type="number" name="Grand_Parents" value = <?php echo $row['grandparents']; ?>></td>
                  </tr>
                  <tr>
                     <th>Referring physicians:<font color="red">*</font></th>
                     <td><input type="text" name="Referring_physicians" required value = <?php echo $row['r_physicians']; ?>></td>
                  </tr>
                  <tr>
                     <th>Presenting C/O:<font color="red">*</font></th>
                     <td><input type="text" name="Presenting_C" required value = <?php echo $row['presenting']; ?>></td>
                  </tr>
                  <tr>
                     <th>Deformity:<font color="red">*</font></th>
                     <td><input type="text" name="Deformity" required value = <?php echo $row['deformity']; ?>></td>
                  </tr>
                  <tr>
                     <th>No of Fracture:<font color="red">*</font></th>
                     <td><input type="text" name="No_of_Fracture" required value = <?php echo $row['n_o_fracture']; ?>></td>
                  </tr>
                  <tr>
                     <th>Bone Pain:<font color="red">*</font></th>
                     <td><input type="text" name="Bone_Pain" required value = <?php echo $row['bone_pain']; ?>></td>
                  </tr>
                  <tr>
                     <th>Short Stature:<font color="red">*</font></th>
                     <td><input type="text" name="Short_Stature" required value = <?php echo $row['short_stature']; ?>></td>
                  </tr>
                  <tr>
                     <th>Teeth abnormality:<font color="red">*</font></th>
                     <td><input type="text" name="Teeth_abnormality" required value = <?php echo $row['teeth_abnormality']; ?>></td>
                  </tr>
                  <tr>
                     <th>Duration of symptoms:</th>
                     <td><textarea name="Duration_of_symptoms" rows="5" cols="48" value = <?php echo $row['duration']; ?>></textarea></td>
                  </tr>
                  <tr>
                     <th>Ht(cm):</th>
                     <td><input type="number" name="Ht" value = <?php echo $row['ht']; ?>></td>
                  </tr>
                  <tr>
                     <th>Wt(Kg):</th>
                     <td><input type="number" name="Wt" value = <?php echo $row['wt']; ?>></td>
                  </tr>
                  <tr>
                     <th>BMI :</th>
                     <td><input type="number" name="BMI" value = <?php echo $row['BMI']; ?>></td>
                  </tr>
                  <tr>
                     <th>Family History:</th>
                     <td><textarea name="family_history" rows="5" cols="48" value = <?php echo $row['family_history']; ?>></textarea></td>
                  </tr>
               </table>
              </div>
            </div>
               <div class="row">
                  <div class="col-md-12" align="center" id="submit">
                     <input type="submit" value="Save and Continue" align="center">
                  </div>
               </div>
            </form>
      </div>
   </body>
</html>
