<?php
include_once 'includes/dbh.php';
if(isset($_GET['status'])){
    if($_GET['status']=="edit"){
        $sqlB = "select * from BONB where index_no =".$_GET['addpatient'];
        $sql1 = "select * from BON1 where index_no =".$_GET['addpatient'];
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
  $sql="select filetitle from BONdoc where filetitle='$title'";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows){
    $status="Title name already exists";
  }
  else{
    if($type == 'application/pdf' || $type == 'application/msword' || $type == 'application/vnd.ms-excel' || $type == 'text/plain' ){
      if(move_uploaded_file($tmp_name, "BONFiles/$title")){

            $sql = "insert into BONdoc values($index_no,'$name','BONFiles/$title','$title');";
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
        <title>Bone Biopsy</title>
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
            height: 900px;
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
                       <li><a href="Layoutaddpatient.php">Add Patient</a></li>
                       <li><a href="displaypatient.php">View Patient</a></li>
                       <li><a href="displaypatient.php">Search Patient</a></li>
                       <li><a href="documents.php">Manage Documents</a></li>
                    </ul>
                </div>
            </div>
            <div id="content_area">
                <div id="form" align="center">
                  <?php if(isset($_POST['submit1'])){
                        if(isset($_GET['status'])){
                            $link="status=edit&addpatient=".$_GET['addpatient'];
                            header("Location: nuclearmedicine.php?".$link);
                        }
                        else {
                            $link="addpatient=".$_GET['addpatient'];
                            header("Location: nuclearmedicine.php?".$link);

                        }
                      }
                  ?>
                    <form method="POST">
                        <div id="heading" align="center">
                            <h1>Bone Biopsy</h1>
                        </div>
                        <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                            <tr>
                                <th>Bone Biospy:</th>
                                <td>
                                    <input type="submit" name="submit1" value="Not Avaliable">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <form action="includes/addbonebiopsy.php" method="POST">
                        <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">

                            <tr>
                                <td></td>
                                <th>Index Number</th>
                                <td>
                                    <input type="text" name="addpatient" value=<?php echo $_GET[ 'addpatient']?> readonly></td>
                            </tr>
                            <tr>
                                <th></th>
                                <th style="font-size:23px"><font face="verdana">Radiograph</font></th>
                                <th style="font-size:23px"><font face="verdana">Base line</font></th>
                                <th style="font-size:23px"><font face="verdana">1 year</font></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td><strong>Histopathology</strong> no</td>
                                <td>
                                    <input type="number" name="histo_B" value=<?php echo ((isset($_GET['status'])) ? $rowB[ 'histo_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="number" name="histo_1" value=<?php echo ((isset($_GET['status'])) ? $row1[ 'histo_B'] : ""); ?>>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Site of bone biopsy</td>
                                <td>
                                    <input type="text" name="site_B" value= <?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'site_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="site_1" value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'site_B'] : ""); ?>>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Impression</td>
                                <td>
                                    <input type="text" name="ih_B" value=<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'ih_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="ih_1" value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'ih_B'] : ""); ?>>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <th>BHMP</th>
                                <td>
                                    <input type="text" name="bhmp_B" value=<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'bhmp_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="bhmp_1" value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'bhmp_B'] : ""); ?>>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Impression</td>
                                <td>
                                    <input type="text" name="ib_B" value=<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'ib_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="ib_1" value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'ib_B'] : ""); ?>>
                                </td>
                                <td></td>
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
                        <input type="submit" value="Save and Continue" align="center">
                    </form>
                    <div id="heading" align="center">
                        <h3>Attached pdf file:</h3>
                    </div>
                    <form action=<?php echo "bonebiopsy.php?addpatient=".$_GET[ 'addpatient']?> method="POST" enctype="multipart/form-data">
                        <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                            <tr>
                                <td><strong>Title: </strong></td>
                                <td>
                                    <input type="text" name="title" required>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>File name:</strong></td>
                                <td>
                                    <input type="file" name="file" />
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <?php
                                echo '<th>';
                                if(isset($status)){
                                  echo $status;
                                }
                                echo '</th>';
                              ?>
                            </tr>
                        </table>
                        <input type="submit" name="submit" value="Upload" />
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
