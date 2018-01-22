
<?php
include_once 'includes/dbh.php';
if(isset($_GET['delete'])){
  $value = $_GET['delete'];
  $sql="delete from BONdoc where filepath='$value'";
  mysqli_query($conn, $sql);
  unlink($_GET['delete']);
  echo $sql;

}
if(isset($_GET['status'])){

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

$index_no = $_GET['addpatient'];
if(isset($_POST['submit'])){
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$location = 'uploads';
$title = $_POST['title'];
$status = '' ;
}

?>

<html lang="en">
   <head>
      <title>Bone Biopsy</title>
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
         text-align: center;
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
       .view th{
        color: #ffffff;
        text-align: center;
        background-color: #24596B;
       }
       #logout{
       font-size: 15px;
       text-align: right;
       margin-top: 5%;
       }
   </style>
<body>
  <div class="container">
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" id="logo" align="center">
            <img class="img-responsive" src="../RARE_MBD.png" alt="RARE MBD">
          </div>
          <div class="col-md-3" id="logout">
            <a href="login.php">LOGOUT</a>
          </div>
        </div>
      <div class="row">
         <a href="../Layoutaddpatient.php">
            <div class="col-md-3" align="center" id="nav">
               Add Patient
            </div>
         </a>
         <a href="../displaypatient.php">
            <div class="col-md-3" align="center" id="nav">
               View Patient
            </div>
         </a>
         <a href="../search.php">
            <div class="col-md-3" align="center" id="nav">
               Search Patient
            </div>
         </a>
         <a href="../documents.php">
            <div class="col-md-3" align="center" id="nav">
               Manage Documents
            </div>
         </a>
      </div>
      <div class="row">
         <div class="col-md-12" align="center" id="heading">
            <h1>Bone Biopsy</h1>
         </div>
      </div>
      <form action="includes/addbonebiopsy.php" method="POST">
                        <table class="table table-hover" align="center">
                            <tr>
                                <th>Index Number</th>
                                <td>
                                    <input type="text" name="addpatient" value=<?php echo $_GET[ 'addpatient']?> readonly></td>
                            </tr>
                            <tr>
                                <th style="font-size:23px"><font face="verdana">Radiograph</font></th>
                                <td style="font-size:23px"><font face="verdana"><strong>Base line</strong></font></td>
                                <td style="font-size:23px"><font face="verdana"><strong>1 year</strong></font></td>
                            </tr>
                            <tr>
                                <th>Histopathology No</th>
                                <td>
                                    <input type="number" name="histo_B" readonly value=<?php echo ((isset($_GET['status'])) ? $rowB[ 'histo_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="number" name="histo_1" readonly value=<?php echo ((isset($_GET['status'])) ? $row1[ 'histo_B'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>Site of bone biopsy</th>
                                <td>
                                    <input type="text" name="site_B" readonly value= <?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'site_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="site_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'site_B'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>Impression</th>
                                <td>
                                    <input type="text" name="ih_B" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'ih_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="ih_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'ih_B'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>BHMP</th>
                                <td>
                                    <input type="text" name="bhmp_B" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'bhmp_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="bhmp_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'bhmp_B'] : ""); ?>>
                                </td>
                            </tr>
                            <tr>
                                <th>Impression</th>
                                <td>
                                    <input type="text" name="ib_B" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $rowB[ 'ib_B'] : ""); ?>>
                                </td>
                                <td>
                                    <input type="text" name="ib_1" readonly value=<?php echo ((isset($_GET[ 'status'])) ? $row1[ 'ib_B'] : ""); ?>>
                                </td>
                            </tr>

                        </table>

                    </form>
                  <table class="table table-hover view" align="center">
                     <thead>
                    <tr>
                      <th>File Title</th>
                      <th>File Name</th>
                      <th>View</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                  <?php
                    $sql = "select * from BONdoc where index_no = ".$_GET['addpatient'];
                    $result = mysqli_query($conn, $sql);
                    $index_no = $_GET['addpatient'];
                    if($result){
                    while($row = mysqli_fetch_array($result)): ?>
                      <tr>
                        <td><?php echo $row['filetitle']; ?></td>
                        <td><?php echo $row['filename']; ?></td>
                        <td><a id="edit_link" href=<?php echo $row['filepath'];?>>View</a></td>
                        <td><a id="edit_link" href=<?php echo "viewbonebiopsy.php?addpatient=$index_no&delete=".$row['filepath'];?>>delete</a></td>
                      </tr>
                  <?php endwhile;
                } ?>

                    </tbody>

            </table>

            </div>
    </body>

    </html>
