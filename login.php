<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/header.css">
<link rel="stylesheet" href="style/general.css">
<link rel="stylesheet" href="style/custom.css">
<link rel="stylesheet" href="asset/css/bootstrap.css">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style/footer.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

.login-form{

  margin-top: 400px;
  width: 70%;
  margin: auto;
  
}

input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.submit-button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.submit-button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<link rel="stylesheet" href="style/general.css">
<title>account login</title>
</head>
<body>

  <?php include 'components/navbar.php'; ?>



   <p style="text-align: center; font-family:  Roboto, sans-serif;
   margin-bottom: 10px; font-size: 40px; margin-top: 200px;"></p>

  <div class="login-form">
    <h2>Login Form</h2>

    <form action="auth.php" method="post">


      <div class="container">
        <label for="email"><b>Username</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
            
        <input class="submit-button" type="submit" name="login" value="LOGIN">
       <!--  <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label> -->
      </div>

      <div class="container" style="background-color:#f1f1f1; display: flex; align-items: center; justify-content: space-between;">
        <p class="psw mb-0">Not Yet Have Account? Create new <a href="signup.php">account</a></p>
        <p class="psw mb-0">Login as <a href="admin/index.php">Admin</a></p>
      </div>
    </form>

  </div>
  <script src="asset/js/bootstrap.bundle.min.js"></script>
  <script src="asset/js/jquery.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
         
      });
  </script>
  <div class="footer">
  <p>PenangTravel.com</p>
</div>
</body>
</html>