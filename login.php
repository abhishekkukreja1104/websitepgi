<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Login</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
   <style>
      body{
      font-family: 'Georgia';
      background: #96B8DA;
      }
      .form-container{
      background-color: #518B47;
      padding: 7%;
      padding-top: 3%;
      padding-bottom: 7%;
      margin-top: 15vh;
      -webkit-box-shadow: 9px 9px 76px 6px rgba(0,0,0,0.75);
      -moz-box-shadow: 9px 9px 76px 6px rgba(0,0,0,0.75);
      box-shadow: 9px 9px 76px 6px rgba(0,0,0,0.75);
      }
      .img{
      align-items: center;
      }
      #submit:hover{
      background-color: #fff;
      }
   </style>
<body>
      <div class="container">
            <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6 form-container">
                        <form method="post">
                              <p style="text-align:center;"><img src="person.png" height="25%" width="40%"></p>
                              <h1 align="center">Login Form</h1>
                              <div class="form-group">
                                    <label for="email">Email</label>
                                    <i class="fa fa-user"></i>
                                    <input type="email" name  = "email" id="email" class="form-control" placeholder="Email">
                              </div>
                              <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name  = "password" id="password" class="form-control" placeholder="Password">
                              </div>
                              <div class="checkbox">
                                    <label>
                                          <input type="checkbox" onclick="show()">Show Password
                                    </label>
                              </div>
                              <button id="submit" name = "submit" method = 'POST' style="margin-top: 6%;" type="submit" class="btn btn-submit btn-block">Submit</button>
                        </form>
                  </div>
            </div>
      </div>
      <?php
        if(isset($_POST["submit"])){
          if(strcmp($_POST['email'],"rareMBDpgi@gmail.com")==0){
            if(strcmp($_POST['password'],"pgi@123")==0){

              header("Location: Layoutaddpatient.php");
            }
          }
          echo "hello";
        }
      ?>
</body>

</html>

<script>
function show() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}

</script>
