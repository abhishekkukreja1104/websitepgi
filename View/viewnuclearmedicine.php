
<?php
include_once 'includes/dbh.php';


if(isset($_GET['delete'])){
  $value = $_GET['delete'];
  $sql="delete from RADdoc where filepath='$value'";
  mysqli_query($conn, $sql);
  unlink($_GET['delete']);
  echo $sql;
}
if(isset($_GET['status'])){

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


$index_no = $_GET['addpatient'];
if(isset($_POST['submit'])){
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$location = 'uploads';
$title = $_POST['title'];
$status = '' ;


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
                <li><a href="../Layoutaddpatient.php">Add Patient</a></li>
                <li><a href="../displaypatient.php">View Patient</a></li>
                <li><a href="../displaypatient.php">Search Patient</a></li>
                <li><a href="../documents.php">Manage Documents</a></li>
              </ul>
            </div>
        </div>
        <div id="content_area">
            <div id="form" align="center">
                <form action="Nuclear_Medicine.php" method="post" id="frm">
                    <div id="heading" align="center">
                        <h1>Nuclear Medicine:</h1>
                    </div>
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
                          <td><input type="text" name="scan_type_B" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['scan_type'] : ""); ?>>
                          </td>
                          <td><input type="text" name="scan_type_1" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['scan_type'] : ""); ?>>
                          </td>
                          <td></td>
                       </tr>
                       <tr>
                          <td></td>
                          <td>Impression:</td>
                          <td><input type="text" name=impression_B rows="5" cols="20" readonly value = <?php echo ((isset($_GET['status'])) ? $rowB['impression'] : ""); ?>></td>
                          <td><input type="text" name=impression_1 rows="5" cols="20" readonly value = <?php echo ((isset($_GET['status'])) ? $row1['impression'] : ""); ?>></td>
                          <td></td>
                       </tr>
                    </table>
                </form>

            </div>
            <table id = "customers">
              <th>FileTitle</th>
              <th>Filename</th>
              <th>View</th>
              <th>Delete</th>
              <?php
                $index_no = $_GET['addpatient'];
                $sql = "select * from NUCdoc where index_no = ".$index_no;
                $result = mysqli_query($conn, $sql);
                if($result){
                while($row = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $row['filetitle']; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><a id="edit_link" href=<?php echo $row['filepath'];?>>View</a></td>
                    <td><a id="edit_link" href=<?php echo "viewnuclearmedicine.php?addpatient=$index_no&delete=".$row['filepath'];?>>delete</a></td>
                  </tr>
              <?php endwhile;
            } ?>
              </table>

        </div>
    </div>
</body>

</html>
