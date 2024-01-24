<?php 
require 'functions/functions.php';
session_start();
if (isset($_SESSION['user_id'])) {
    header("location:home.php");
}
session_destroy();
session_start();
ob_start(); 
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Hive</title>
        <link rel="stylesheet" type="text/css" href="resources/css/main.css">
        <link rel="stylesheet" type="text/css" href="resources/css/main1.css">
        <meta charset="UTF-8">
        
       <link rel="stylesheet" type="text/css" href="resources/css/main.css">
        <link rel="stylesheet" type="text/css" href="resources/css/main1.css">
        <link rel="stylesheet" type="text/css" href="resources/css/main2.css">
        <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css" />
         <style>
        .container{
            margin: 40px auto;
            width: 400px;
        }
        .content {
            padding: 30px;
            background-color: white;
            box-shadow: 0 0 5px #4267b2;
        }
    </style>
    </head>
    <body>
        <div class="wrapper1">
            <div class="usernav">
                   <div class="logo2">
                       <a href="home.php" id="logo-large">HIVE</a>
                   </div>
            </div>
        </div>
        <section class="container-fluid" style="background-color: #e9ebee; margin-top: -30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sign-in-form">  
                            <form method="post"  onsubmit="return validateLogin()" id="body-login-form">
                                <label>Login to Hive</label>        
                                    <input 
                                        type="text" 
                                        name="useremail" 
                                        placeholder="example@sau.com" 
                                        title="Enter your email"
                                        />
                                    <div class="required"></div>
                                    <input 
                                        type="password" 
                                        name="userpass" placeholder="Enter password"
                                        title="Enter your password" 
                                        />
                                    <div class="required"></div>
                                    <button type="submit" name="login" value="Login" id="btn-login"  />Log in</button>
                                    <a href="index.php">Don't have an account? Sign up here</a>            
                             </form>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        <footer class="container">
      
      <ul id="footer-tools">
          <li><a href="index.php">Sign Up</a></li>
        <li>
            <a href="login.php">Log In</a>
        </li>
        <li>
            <a href="friends.php">Find Friends</a>
        </li>
      </ul>
      Hive &copy; 2022
    </footer>
    </body>
</html>

<?php 
require 'functions/register_login.php';
?>