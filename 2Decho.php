<?php
include_once 'includes/dbh.php';


if(isset($_GET['status'])){
    if($_GET['status']=="edit"){
        $sqlB = "select * from PULM where index_no =".$_GET['addpatient'];
        $resultB = mysqli_query($conn, $sqlB);
        $row=false;
   if($resultB!=false){
         $row = mysqli_fetch_array($resultB);

   }
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
  $sql="select filetitle from ECHOdoc where filetitle='$title'";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows){
    $status="Title name already exists";
  }
  else{
    if($type == 'application/pdf' || $type == 'application/msword' || $type == 'application/vnd.ms-excel' || $type == 'text/plain' ){
      if(move_uploaded_file($tmp_name, "ECHOFiles/$title")){

            $sql = "insert into ECHOdoc values($index_no,'$name','ECHOFiles/$title','$title');";
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
    <title>2D-Echo</title>
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
                        header("Location: pulmonary.php?".$link);
                    }
                    else {
                        $link="addpatient=".$_GET['addpatient'];
                        header("Location: pulmonary.php?".$link);

                    }
                  }
              ?>
                <form method="post" id="frm">
                    <div id="heading" align="center">
                        <h1>2D-Echo Test:</h1>
                    </div>
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                        <tr>
                            <th>2D-Echo Test:</th>
                            <td>
                                <input type="submit" name="submit1" value="No Avaliability">
                            </td>
                        </tr>
                    </table>
                </form>
                <form action = "includes/add2Decho.php" method="POST">
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20" >
                       <tr>
                          <th></th>
                          <th style="font-size:23px"><font face="verdana"></font></th>
                          <th id = "up" style="font-size:23px"><font face="verdana">Base line</font></th>
                          <th id = "up" style="font-size:23px"><font face="verdana">1 year</font></th>
                          <th></th>
                       </tr>
                       <tr>
                          <th>Index Number</th>
                          <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
                       </tr>
                       <tr>
                          <td></td>
                          <td>Impression:</td>
                          <td><input name=impression_B rows="5" cols="20" value=<?php echo ((isset($_GET[ 'status'])) ? $row[ 'impressionB'] : ""); ?>></input></td>
                          <td><input name=impression_1 rows="5" cols="20" value=<?php echo ((isset($_GET[ 'status'])) ? $row[ 'impression1'] : ""); ?>></input></td>
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
                    <form action=<?php echo "2Decho.php?addpatient=".$_GET['addpatient']?> method="POST" enctype="multipart/form-data">
                        <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                            <tr>
                                <th></th>
                                <th></th>
                                <td><strong>Title: </strong></td>
                                <td>
                                    <input type="text" name="title" required>
                                </td>
                                <th></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <td><strong>File name:</strong></td>
                                <td>
                                    <input type="file" name="file" />
                                </td>
                                <th></th>
                            </tr>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <?php
                                echo '<th>';
                                if(isset($status)){
                                  echo $status;
                                }
                                echo '</th>';
                              ?>
                              <th></th>
                            </tr>
                        </table>
                        <input type="submit" name="submit" value="Upload"/>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
