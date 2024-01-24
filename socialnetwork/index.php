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
    <title>HIVE | Sign up</title>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
    <link rel="stylesheet" type="text/css" href="resources/css/main1.css">
    <link rel="stylesheet" type="text/css" href="resources/css/main2.css">
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">

    <meta charset="UTF-8">



</head>

<body>
    <div class="wrapper1">
        <div class="usernav">
            <div class="logo2">
                <a href="home.php" id="logo-large">HIVE</a>
            </div>
        </div>
    </div>
    <section class="container-fluid" id="body-register-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <form method="post" onsubmit="return validateRegister()" class="register-form">
                        <h3>Create an account</h3>
                        <div class="reg-input-full-name">
                            <div class="reg-input" id="first-name">
                                <input type="text" name="userfirstname" placeholder="firstname" id="userfirstname" />
                            </div>

                            <div class="reg-input" id="last-name">
                                <input type="text" name="userlastname" placeholder="lastname" id="userlastname" />
                            </div>
                        </div>
                        <div class="required"></div>
                        </br>


                        <div class="reg-input-user-name ">
                            <div class="reg-input" id="username">
                                <input type="text" name="usernickname" placeholder="Nickname" id="usernickname" autocomplete="off" />
                            </div>
                            <div class="required"></div>
                            <!--<div class="reg-input" id="username2">
                                       <input type="text" name="username2" placeholder="Repeat Username"  required />
                                    </div>  -->
                        </div>


                        <br>
                        <label style="display:hidden;"> </label>
                        <div class="reg-input">
                            <select name="selectday" style="font-size:18px;" required>

                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                                ?>

                            </select>
                            <select name="selectmonth" style="font-size:18px;" required>
                                <?php
                                echo '<option value="1">January</option>';
                                echo '<option value="2">February</option>';
                                echo '<option value="3">March</option>';
                                echo '<option value="4">April</option>';
                                echo '<option value="5">May</option>';
                                echo '<option value="6">June</option>';
                                echo '<option value="7">July</option>';
                                echo '<option value="8">August</option>';
                                echo '<option value="9">September</option>';
                                echo '<option value="10">October</option>';
                                echo '<option value="11">Novemeber</option>';
                                echo '<option value="12">December</option>';
                                ?>
                            </select>
                            <select name="selectyear" style="font-size:18px;" required>
                                <?php
                                for ($i = 2022; $i >= 1900; $i--) {
                                    if ($i == 1996) {
                                        echo '<option value="' . $i . '" selected>' . $i . '</option>';
                                    }
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                                ?>
                            </select>
                        </div>




                        <div class="reg-input">
                            <label>Male</label><input type="radio" name="usergender" value="M" class="usergender">
                            <label>Female</label><input type="radio" name="usergender" value="F" class="usergender">
                            <div class="required"></div>
                        </div>


                        <div class="reg-input" id="mobile-or-email">
                            <input type="text" name="number" placeholder="Mobile phone" maxlength="13">
                        </div>
                        <div class="required"></div>



                        <div class="reg-input-email">
                            <div class="reg-input" id="first-name1">
                                <input type="text" name="useremail" placeholder="Email address" id="useremail" autocomplete="off" />
                            </div>
                            <div class="reg-input" id="last-name1">
                                <input type="text" name="userhometown" placeholder="Hometown" id="userhometown" autocomplete="off" />
                            </div>
                            <div class="required"></div>
                        </div>

                        <div class="reg-input-full-name">
                            <div class="reg-input" id="first-name1">
                                <input type="password" name="userpass" placeholder="New password" id="userpass" autocomplete="off" />
                            </div>
                            <div class="reg-input" id="last-name1">
                                <input type="password" name="userpassconfirm" placeholder="Repeat password" id="userpassconfirm" autocomplete="off" />
                            </div>
                        </div>
                        <div class="required"></div>




                        <div class="reg-input1">
                            <label>Single</label><input type="radio" name="userstatus" value="S" class="singlestatus">
                            <label>Married</label><input type="radio" name="userstatus" value="M" class="singlestatus">
                            <label>Engaged</label><input type="radio" name="userstatus" value="E" class="singlestatus">
                        </div>
                        <div class="required"></div>

                        <div class="reg-input" id="mobile-or-email">
                            <label>About Me</label><br>
                            <textarea rows="5" cols="60" name="userabout" id="userabout"></textarea>
                        </div>
                        <div class="required"></div>


                        <br />
                        <button type="submit" name="register" value="I Agree - Continue" title="Log in">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="container">

        <ul id="footer-tools">
            <li><a href="index.php.php">Sign Up</a></li>
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
<script src="resources/js/main.js"></script>

</html>
<?php
require 'functions/register_login.php';
?>