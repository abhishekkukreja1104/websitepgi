<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Osteoporosis Dropdown</title>
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
         padding: 5%;
         text-align: left;
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
        margin-left: 27%;
        width: 60%;
        border: none;
       }
       #form{
        padding: 2%;
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
            <h1>Osteoporosis Dropdown</h1>
         </div>
      </div>
            <div id="form" align="center">
                <form action="clinical_diagnosis.php" method="post">
                    <table cellpadding="3" bgcolor="FFFFFF" align="center" cellspacing="20">
                        <tr>
                            <th>Osteoporosis Dropdown:</th>
                                <td>
                                    <select name="Osteoporosis">
                                        <option value="unknown">-Select-</option>
                                        <option value="Juvenile">Juvenile</option>
                                        <option value="Young">Young</option>
                                        <option value="Senior">Senior</option>
                                    </select>
                                </td>
                        </tr>
                    </table>
                </form>
            </div>
            <form action="treatment.php"method="POST">
                <div class="row">
                  <div class="col-md-12" align="center" id="submit">
                     <input type="submit" name= "next" value="Next" align="center">
                  </div>
                </div>
            </form>
        </div>
</body>

</html>
