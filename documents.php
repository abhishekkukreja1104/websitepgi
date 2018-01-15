<?php
include_once 'includes/dbh.php';
  if(isset($_GET['delete'])){
    $value = $_GET['delete'];
    $sql="delete from STF where filepath='$value'";
    mysqli_query($conn, $sql);
    unlink($_GET['delete']);
    echo $sql;

  }

?>
<html>
<head>
  <title>Add new file</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  body{
         background: #96B8DA;
         margin: 0;
         }
         #container{
         width: 1200px;
         margin: 0 auto;
         background: #ffffff;
         }
         #header{
         width: 100%;
         border-bottom: 1px solid #c7c7c7;
         background: #ffffff;
         }
         #logo{
         width: 100%;
         height: 130px;
         }
         #heading{
         width: 100%;
         background: #518B47;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
         color: white;
         }
         #submit{
         width: 100%;
         background: #518B47;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
         }
         #form{
         width: 100%;
         background: #ffffff;
         padding: 0px;
         padding-bottom: 10px;
         padding-top: 10px;
         color: black;
         }
         #navbar{
         height: 40px;
         clear: both;
         width: 100%;
         }
         #navbar ul{
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         }
         #navbar ul li{
         float: left;
         border-right: 1px solid #bbb;
         }
         #navbar ul li a{
         display: block;
         color: #ffffff;
         text-align: center;
         background-color:#1F4F96;
         width: 299px;
         padding-top: 20px;
         padding-bottom: 20px;
         font-weight:bold;
         text-decoration: none;
         }
         #navbar ul li a:hover{
         background-color: #111;
         }
         th{
         text-align: left;
         }
         td{
         padding-top: 10px;
         padding-left: 200px;
         }
         input[type = "text"]{
         display: inline-block;
         width: 400px;
         }
  #Add{
    align: center;
    height: 30px;
    width: 80px;
  }
  #docbox{
    align: center;
    width: 1200px;
    margin: 0 auto;
    background: #ffffff;
  }
  #docanc{
    margin-right: 1000px;
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
            <div align = "center" id = "heading">
                <h1>Manage Documents</h1>
          </div>
         </div>
        </div>   
  <div class="box" id = "docbox">
  <a href="upload.php" id="docanc">Add new Document</a>
</div>
<table id = "customers">
  <th>FileTitle</th>
  <th>Filename</th>
  <th>View</th>
  <th>Delete</th>
  <?php
    $sql = "select * from STF";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)): ?>
      <tr>
        <td><?php echo $row['filetitle']; ?></td>
        <td><?php echo $row['filename']; ?></td>
        <td><a id="edit_link" href=<?php echo $row['filepath'];?>>View</a></td>
        <td><a id="edit_link" href=<?php echo "documents.php?delete=".$row['filepath'];?>>delete</a></td>
      </tr>
  <?php endwhile ?>
  </table>


</div>
</body>
</html>
