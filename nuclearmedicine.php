<?php
include_once 'includes/dbh.php';


if(isset($_GET['status'])){
    if($_GET['status']=="edit"){
        $sqlB = "select * from NUCB where index_no =".$_GET['addpatient'];
        $sql1 = "select * from NUC1 where index_no =".$_GET['addpatient'];
        $resultB = mysqli_query($conn, $sqlB);
        $result1 = mysqli_query($conn, $sql1);
        $rowB=false;
        $row1=false;
   if($resultB!=false){
         $rowB = mysqli_fetch_array($resultB);

   }
   if($result1!=false)
     $row1 = mysqli_fetch_array($result1);
  
  }
 }


$index_no = $_GET['addpatient'];
if(isset($_POST['submit'])){
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$location = 'uploads';
$title = $_POST['title'];
$status = '' ;

if(isset($name)&&!empty($name)){
  $type = mime_content_type($tmp_name);
  $sql="select filetitle from NUCdoc where filetitle='$title'";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows){
    $status="Title name already exists";
  }
  else{
    if($type == 'application/pdf' || $type == 'application/msword' || $type == 'application/vnd.ms-excel' || $type == 'text/plain' ){
      if(move_uploaded_file($tmp_name, "NUCFiles/$title")){

            $sql = "insert into NUCdoc values($index_no,'$name','NUCFiles/$title','$title');";
            echo $sql;
            mysqli_query($conn, $sql);
            $status = 'Successfully the (<strong>'.$name.'</strong>) file uploaded!';
      }else{
          $status = 'There was an error uploading the file.';
      }
    }
    else{
      $status = 'File format not supported';
    }
  }
}else{
      $status = 'Please choose a file';
  }

}
?>

<html>

<head>
    <title>Nuclear Medicine</title>
    <link rel="stylesheet" type="text/css" href="form_style.css">
</head>
<style>
    body {
        background: #96B8DA;
        margin: 0;
    }

    #container {
        width: 1200px;
        margin: 0 auto;
        background: #ffffff;
    }

    #header {
        width: 100%;
        border-bottom: 1px solid #c7c7c7;
        background: #ffffff;
    }

    #logo {
        width: 100%;
        height: 130px;
    }

    #heading {
        width: 100%;
        background: #518B47;
        padding: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
        color: white;
    }

    #submit {
        width: 100%;
        background: #518B47;
        padding: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    #form {
        width: 100%;
        background: #ffffff;
        padding: 0px;
        padding-bottom: 10px;
        padding-top: 10px;
        color: black;
    }

    #navbar {
        height: 40px;
        clear: both;
        width: 100%;
    }

    #up {
        text-align: center;
    }

    #navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    #navbar ul li {
        float: left;
        border-right: 1px solid #bbb;
    }

    #navbar ul li a {
        display: block;
        color: #ffffff;
        text-align: center;
        background-color: #1F4F96;
        width: 299px;
        padding-top: 20px;
        padding-bottom: 20px;
        font-weight: bold;
        text-decoration: none;
    }

    #navbar ul li a:hover {
        background-color: #111;
    }

    th {
        text-align: left;
    }

    td {
        padding-top: 10px;
        margin: 0 auto;
        align-items: center;
    }

    input[type="number"] {
        display: inline-block;
        width: 100px;
    }

    input[type="text"] {
        display: inline-block;
        width: 100px;
    }
</style>

<body>
    <div id="container">
        <div id="header">
            <div id="logo" align="center">
                <img src="http://indianphptregistry.com/images/logo.png">
            </div>
            <div id="navbar">
                <ul>
                    <li><a href="#Add Patient">Add Patient</a></li>
                    <li><a href="#View patient">View Patient</a></li>
                    <li><a href="#Search patient">Search Patient</a></li>
                    <li><a href="#Manage Documents">Manage Documents</a></li>
                </ul>
            </div>
        </div>
        <div id="content_area">
            <div id="form" align="center">
                <form action="Nuclear_Medicine.php" method="post" id="frm">
                    <div id="heading" align="center">
                        <h1>Nuclear Medicine:</h1>
                    </div>
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">

                        <tr>
                            <th>Nuclear Medicine:</th>
                            <td>
                                <input type="radio" name="Radiology" value="true">Yes</td>
                            <td>
                                <input type="radio" name="Radiology" value="false">No</td>
                            <td>
                                <input type="submit" name="submit" value="Go">
                            </td>
                        </tr>
                    </table>
                </form>
                <form action="includes/addnuclearmedicine.php" method = "POST" >
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20" >
                       <tr>
                          <th></th>
                          <th style="font-size:23px"><font face="verdana"></font></th>
                          <th style="font-size:23px"><font face="verdana">Base line</font></th>
                          <th style="font-size:23px"><font face="verdana">1 year</font></th>
                          <th></th>
                       </tr>
                       <tr>
                          <th>Index Number</th>
                          <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
                       </tr>
                       <tr>
                          <td></td>
                          <td>Scan Type:</td>
                          <td><select name="scan_type_B">
                              <option value="unknown">-Select-</option>
                              <option value="bone_scan">Bone Scan</option>
                              <option value="pet_scan">Pet Scan</option>
                              <option value="dota_noc">DOTA NOC</option>
                              <option value="dotatate">DOTATATE</option>
                          </select></td>
                          <td><select name="scan_type_1">
                              <option value="unknown">-Select-</option>
                              <option value="bone_scan">Bone Scan</option>
                              <option value="pet_scan">Pet Scan</option>
                              <option value="dota_noc">DOTA NOC</option>
                              <option value="dotatate">DOTATATE</option>
                          </select></td>
                          <td></td>
                       </tr>
                       <tr>
                          <td></td>
                          <td>Impression:</td>
                          <td><input name=impression_B rows="5" cols="20" value = <?php echo ((isset($_GET['status'])) ? $rowB['impression'] : ""); ?>></textarea></td>
                          <td><input name=impression_1 rows="5" cols="20" value = <?php echo ((isset($_GET['status'])) ? $row1['impression'] : ""); ?>></textarea></td>
                          <td></td>
                       </tr>
                    </table>
                    <input type="submit" value="Save and Continue" align="center">
                </form>
                <div id="heading" align="center">
                        <h3>Attached pdf file:</h3>
                    </div>
                    <form action=<?php echo "nuclearmedicine.php?addpatient=".$_GET['addpatient']?> method="POST" enctype="multipart/form-data">
                        <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <td><strong>Title: </strong></td>
                                <td>
                                    <input type="text" name="title" pattern = "[A-Za-z0-9]{1, }" title="avoid spaces in title" required>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <td><strong>File name:</strong></td>
                                <td>
                                    <input type="file" name="file" />
                                </td>
                            </tr>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <th></th>
                              <?php
                                echo '<th>';
                                if(isset($status)){
                                  echo $status;
                                }
                                echo '</th>';
                              ?>
                            </tr>
                        </table>
                        <input type="submit" name="submit" value="Upload"/>
                    </form>
            </div>
            <div id="heading" align="center">
				<button><strong>Next</strong></button>
            </div>
        </div>
    </div>
</body>

</html>
