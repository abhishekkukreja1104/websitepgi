<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Radiology</title>
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
      font-size: 17px;
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
      text-align: center;
      padding: 0px;
      padding-bottom: 10px;
      padding-top: 10px;
      }
      .table{
      margin-top: 1%;
      border: none;
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
               <h1>Treatment</h1>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <form action="Layoutaddpatient.php">
                <table class="table table-hover" align="center">
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
                    <div id="submit">
                        <input type="submit" value="Save and Continue" align="center">
                    </div>
                    </form>
                    </div>
                </div>    
            </div>
</body>

</html>
