<?php
include_once 'includes/dbh.php';

?>
<html>

<head>
    <title>Treatment</title>
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
                <form action="includes/addtreatment.php" method="POST">
                    <div id="heading" align="center">
                        <h1>Treatment</h1>
                    </div>
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                      <th>Index Number</th>
                      <td>
                          <input type="text" name="addpatient" value=<?php echo $_GET[ 'addpatient']?> readonly>
                      </td>
                        <tr>
                            <th>Calcium</th>
                            <td><input type="checkbox" name="Calcium" value="yes"></td>
                        </tr>
                        <tr>
                            <th>Vitamin D</th>
                            <td><input type="checkbox" name="vitD" value="yes"></td>
                            <th>Phosphate</th>
                            <td><input type="checkbox" name="Phosphate" value="yes"></td>
                        </tr>
                        <tr>
                            <th>Bisphosphonates</th>
                            <td><input type="checkbox" name="Bisphosphonates" value="yes"></td>
                        </tr>
                        <tr>
                            <th>Calcitonin</th>
                            <td><input type="checkbox" name="Calcitonin" value="yes"></td>
                        </tr>
                        <tr>
                            <th>RhPTH</th>
                            <td><input type="checkbox" name="RhPTH" value="yes"></td>
                        </tr>
                        <tr>
                            <th>Denosumeb</th>
                            <td><input type="checkbox" name="Denosumeb" value="yes"></td>
                        </tr>
                        <tr>
                            <th>Estrogen</th>
                            <td><input type="checkbox" name="Estrogen" value="yes"></td>
                        </tr>
                        <tr>
                            <th>Glucocorticoids</th>
                            <td><input type="checkbox" name="Glucocorticoids" value="yes"></td>
                        </tr>
                        <tr>
                            <th>Any other</th>
                            <td><input type="checkbox" name="any_other" value="yes"></td>
                        </tr>

                    </table>
                    <input type="submit" value="Save and Continue" align="center">

                </form>
            </div>
        </div>
    </div>

</body>

</html>
