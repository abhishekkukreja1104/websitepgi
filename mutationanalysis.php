<html>

<head>
    <title>Mutation Analysis</title>
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

              <div id="form" align="center">
                <?php if(isset($_POST['submit1'])){
                      if(isset($_GET['status'])){
                          $link="status=edit&addpatient=".$_GET['addpatient'];
                          header("Location: 2Decho.php?".$link);
                      }
                      else {
                          $link="addpatient=".$_GET['addpatient'];
                          header("Location: 2Decho.php?".$link);

                      }
                    }
                ?>
                <form method="post" id="frm">
                    <div id="heading" align="center">
                        <h1>Mutation Analysis</h1>
                    </div>
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">

                        <tr>
                            <th>Mutation Analysis:</th>
                            <td>
                                <input type="submit" name="submit1" value="Not Avaliable">
                            </td>
                        </tr>
                    </table>
                </form>

                <form action="includes/addmutationanalysis.php" method="post">
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                      <tr>
                         <th>Index Number</th>
                         <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
                      </tr>
                        <tr>
                            <th></th>
                            <td>Known/Novel:</td>
                            <th></th>
                            <td><select name="known_novel">
                            	<option value="unknown">-Select-</option>
                            	<option value="known">Known</option>
                            	<option value="novel">Novel</option>
                            </select></td>
                            <th></th>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Autosomal Dominant/Autosomal Recessive:</td>
                            <th></th>
                            <td><select name="adorar">
                            	<option value="unknown">-Select-</option>
                            	<option value="dominant">Autosomal Dominant</option>
                            	<option value="recessive">Autosomal Recessive</option>
                            </select></td>
                            <th></th>
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

            </div>
        </div>
    </div>
</body>

</html>
