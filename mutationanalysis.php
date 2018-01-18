<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Mutation Analysis</title>
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
        width: 50%;
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
            <h1>Mutation Analysis</h1>
         </div>
      </div>

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
                <form method="post">
                    <table class="table table-hover" align="center">
                        <tr>
                          <th>Mutation Analysis:</th>
                          <td>
                              <input type="submit" name="submit1" value="Not Available">
                          </td>
                        </tr>
                    </table>
                </form>

                <form action="includes/addmutationanalysis.php" method="post">
                     <table class="table table-hover" align="center">
                      <tr>
                         <th><strong>Index Number:</strong></th>
                         <td><input type="text" name="addpatient" value=<?php echo $_GET['addpatient']?> readonly></td>
                      </tr>
                        <tr>
                            <th>Known/Novel:</th>
                            <td><select name="known_novel">
                            	<option value="unknown">-Select-</option>
                            	<option value="known">Known</option>
                            	<option value="novel">Novel</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th>Autosomal Dominant/Autosomal Recessive:</th>
                            <td><select name="adorar">
                            	<option value="unknown">-Select-</option>
                            	<option value="dominant">Autosomal Dominant</option>
                            	<option value="recessive">Autosomal Recessive</option>
                            </select></td>
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
                    <div class="row">
                  <div class="col-md-12" align="center" id="submit">
                     <input type="submit" value="Save and Continue" align="center">
                      </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
