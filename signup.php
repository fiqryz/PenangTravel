<!DOCTYPE html>
<html>
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box}

  /* Full-width input fields */
  input[type=text], input[type=password], input[type=number], input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus, input[type=password]:focus, input[type=number]:focus, input[type=email]:focus {
    background-color: #ddd;
    outline: none;
  }

  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* Set a style for all buttons */
  .signup-button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  button:hover {
    opacity:1;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    float: left;
    width: 50%;
  }

  /* Add padding to container elements */
  .container {
    padding: 16px;
    width: 70%;
    margin: auto;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
  }
</style>

<head>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/general.css">
    <link rel="stylesheet" href="style/custom.css">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/footer.css">
  <title>register account</title>
</head>
<body>

  <?php include 'components/navbar.php'; ?>

   <p style="text-align: center; font-family:  Roboto, sans-serif;
   margin-bottom: 10px; font-size: 40px; margin-top: 120px;"></p>
  
  
  
    <div class="container">
      
      <form action="auth.php" method="POST" style="border:1px solid #ccc; padding: 40px 50px;">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="mobile"><b>Mobile</b></label>
        <input type="number" placeholder="Enter Mobile" name="mobile" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

      
       <!--  <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label> -->
        
       <!--  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
 -->
        <div class="clearfix">
          <input type="submit" class="signup-button" name="create-user" value="Sign Up">
        </div>
      </form>
    </div>
  <script src="asset/js/bootstrap.bundle.min.js"></script>
  <script src="asset/js/jquery.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
         
      });
  </script>
</body>
<div class="footer">
  <p>PenangTravel.com</p>
</div>
</html>