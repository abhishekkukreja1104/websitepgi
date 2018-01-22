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
        border: none;
       }
       #form{
        padding: 2%;
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
          <img class="img-responsive" src="RARE_MBD.png" alt="RARE MBD">
        </div>
        <div class="col-md-3" id="logout">
          <a href="login.php">LOGOUT</a>
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
        <form action="includes/addosteoporosis.php" method="POST">
          <div class="row">
            <div class="col-md-3"></div>
              <div class="col-md-6">
                    <table class="table table-hover">
                      <th>Index Number</th>
                      <td>
                          <input type="text" name="addpatient" value=<?php echo $_GET[ 'addpatient']?> readonly>
                      </td>
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
                  </div>
                </div> 
                <div class="row">
                  <div class="col-md-12" align="center" id="submit">
                     <input type="submit" name= "next" value="Next" align="center">
                  </div>
                </div>    
                </form>
            
</body>

</html>
