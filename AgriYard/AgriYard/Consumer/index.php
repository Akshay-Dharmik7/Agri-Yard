<?php
include("../Includes/db.php");
//session_start();
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consumer Login portal</title>
    <!-- <link rel="stylesheet" type="text/css" href="../Styles/FarmerLogin.css"> -->
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body {
            background-image: url("../imgg/login_bg.jpg");
            background-size: cover;
        }

        

        .aligncenter {
            text-align: center;
        }

        a {
            color: goldenrod;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       
        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left ! important;
            /* background-color: #f5f8fa; */
            text-align: center;
            /* background-size: 100% 100%; */
            /* font-family: Times new roman; */


        }

        * {
      font-family: calibri;

    }

        .my-form,
        .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

       

    </style>
</head>

<body>

    <main class="my-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header text-left" style="background-color:#009a4e">
                            <h4 style="font-style:bold;color:white;text-align:left">Hello Consumer, Please Login To
                                Continue</h4>
                        </div>
                        <div class="card-body border border-dark">
                            <form name="my-form" action="#" method="post">

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control border border-dark"
                                            name="phonenumber" placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="p1" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-lock mr-2"></i><b>Password</b></label>
                                    <div class="col-md-6">
                                        <input id="p1" class="form-control border border-dark" type="password"
                                            name="password" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary text-left border border-dark"
                                        style="background-color:#009a4e;color:white;float:left; margin:20px" name="login" value="Login">
                                        Login
                                    </button>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <a href="../index.html" class="btn btn-danger text-left border border-dark"
                                        style="color:white; float:left; margin:20px">
                                        Back
                                    </a>
                                </div>
                                <br>
                                <div class="clearfix"></div>
                                <div class="col-md-6 offset-md-4">
                                    <label id="forgotPassword" class="text-left"><a id='link' style=""
                                            href="ConsumerForgotPassword.php"><b style="color:black ;text-align:left">
                                                Forgot your password </b></a></label>
                                    <br>
                                    <label id="account" class="text-left"><a id='link' href="ConsumerRegister.php"><b
                                                style="color:black"> Create New Account</b></a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>

<?php


if (isset($_POST['login'])) {

    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_password = '$password'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);
    if ($count_rows == 0) {
        echo "<script>alert('Please Enter Valid Details');</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    while ($row = mysqli_fetch_array($run_query)) {
        $id = $row['buyer_id'];
    }

    $_SESSION['phonenumber'] = $phonenumber;
    echo "<script>window.open('home.php','_self')</script>";
}

?>