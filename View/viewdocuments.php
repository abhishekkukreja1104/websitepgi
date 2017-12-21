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

	#heading{
		width: 1180px;
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
  <div align="center" width = "1180px">
  <div id = "top" align="center">
    <img src="http://indianphptregistry.com/images/logo.png">
  </div>
  <ul>
    <li><a id = "nav_a" href="test.php">Add Patient</a></li>
    <li><a id = "nav_a" href="displaypatient.php">View Patient</a></li>
    <li><a id = "nav_a" href="documents.php">Manage Documents</a></li>
  </ul>
  <div class="box" id = "heading">
		<h1 align="center" width = "1200px">Manage Documents</h1>
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
