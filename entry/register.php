<?php
session_start();
require 'class/user.php';
$auser = new User();
$error = "";

if (isset($_POST['regbtn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $officeaddr = $_POST['officeadd'];
    $town = $_POST['town'];
    $region = $_POST['region'];
    $entname = $_POST['entname'];
    // print_r($_POST); exit;
    // $error = array();

    if ($auser->isexist('users', $email)) {
        $error = "Email Already Exist";
    } else {

        try {
            $auser->register($fname, $lname, $officeaddr, $pnumber, $town, $region, $email, $entname);
            // $auser->inserting("INSERT INTO users(email, password, haschangedpassword, venderid, isactive, admin) values($email, MD5('password'), 0, 1, 0, 0) ")
        } catch (Exception $e) {
            header("Location: login.php?error");
            echo "Error: " . $e->getMessage();
        } finally {
            try {
                $auser->sendConfirm($email);
                header("Location: login.php?action=confirm");
            } catch (Exception $ex) {
                header("Location: login.php?error");
                echo 'Error: ' . $ex . getMessage();
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="dashboard, vss, voucher sale, mtn, glo, airtel, tigo" >

        <title>DASHGUM - Bootstrap Admin Template</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->

        <div id="login-page">
            <div class="container">

                <form class="form-login" method="POST" action="">
                    <h2 class="form-login-heading">register now</h2>
                    <div class="login-wrap">



                        <input type="text" class="form-control" name="fname" placeholder="First Name" required>

                        <br>

                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required>

                        <br>

                        <input type="email" class="form-control" name="email" placeholder="Email" required>

                        <br>


                        <input type="tel" class="form-control" name="pnumber" placeholder="Phone Number" required>

                        <br>


                        <input type="text" class="form-control" name="officeadd" placeholder="Office Address" required>

                        <br>


                        <input type="text" class="form-control" name="town" placeholder="Town" required>

                        <br>


                        <input type="text" class="form-control" name="entname" placeholder="Enterprise" required>

                        <br>


                        <input type="text" class="form-control" name="region" placeholder="Region" required>


                        <br>


                        <label>
                            <input type="checkbox" value="1">
                            I agree to <a href="#">Terms and Conditions</a>
                        </label>

                        
                            <button class="btn btn-theme btn-block" name="regbtn" type="submit"><i class="fa fa-lock"></i> REGISTER</button>
                            <button type="reset" class="btn btn-danger btn-block"><i class="fa fa-repeat"></i> Reset </button>
                        
                    </div>
                </form>
            </div>
        </div>




        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
        <script>
            $.backstretch("img/login-bg.jpg", {speed: 500});
        </script>


    </body>
</html>
