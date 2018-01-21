
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
         font-size: 16px;
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
        margin-top: 2%;
        border: none;
       }
       .view th{
        color: #ffffff;
        text-align: center;
        background-color: #24596B;
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
         <a href="../Layoutaddpatient.php">
            <div class="col-md-3" align="center" id="nav">
               Add Patient
            </div>
         </a>
         <a href="../displaypatient.php">
            <div class="col-md-3" align="center" id="nav">
               View Patient
            </div>
        <div id="content_area">
            <div id="form" align="center">


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
                            <td><input type="text" name="known_novel"></td>
                            <th></th>
                        </tr>
                        <tr>
                            <th></th>
                            <td>Autosomal Dominant/Autosomal Recessive:</td>
                            <th></th>
                            <td><input type = "text" name="adorar"></td>
                            <th></th>
                        </tr>
                    </table>
                </form>
            </div>
            

        </div>
    </div>
</body>

</html>
