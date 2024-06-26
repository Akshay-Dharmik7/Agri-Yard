<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../Styles/buyer_reg.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <title>Buyer Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: white;
            text-align: left;
            background-image: url(../imgg/1598227.jpg);
            background-size: cover;
        }

        .my-form,
        .login-form {
            font-family: sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
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
                    <div class="card">
                        <div class="card-header" style="background-color:#009a4e">
                            <h4 style="font-style:bold;color:white">Customer Registration<h4>
                        </div>
                        <div class="card-body border border-dark"
                            style="background-image: url(../imgg/1598227.jpg); background-size:cover; background-opacity:0.3">
                            <form name="my-form" action="#" method="post">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-user mr-2"></i><b>Full Name</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control border border-dark"
                                            name="name" placeholder="Enter Your Name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right "><i
                                            class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number"
                                            class="form-control w-100 border border-dark"
                                            style="width:100% ! important;" name="phonenumber"
                                            placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"><i
                                            class="far fa-envelope mr-2"></i><b>E-Mail Address</b></label>
                                    <div class="col-md-6">
                                        <input type="email" id="email_address" class="form-control border border-dark"
                                            name="mail" placeholder="E-Mail ID" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-home mr-2"></i><b>Present Address</b></label>
                                    <div class="col-md-6">
                                        <textarea type="text" id="present_address"
                                            class="form-control border border-dark" rows="4" name="address"
                                            placeholder="Address" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="campany_name" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-building mr-2"></i><b>Company Name</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="campany_name" class="form-control border border-dark"
                                            name="company_name" placeholder="Company name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lisence" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-id-badge mr-2"></i><b>Licence Number</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="lisence" class="form-control border border-dark"
                                            name="license" placeholder="license" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="account1" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-university mr-2"></i><b>Bank Account No.</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="account1" class="form-control border border-dark"
                                            name="account" placeholder="Bank Account number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="account2" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-pencil-alt mr-2"></i><b>PAN No.</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="account2" class="form-control border border-dark"
                                            name="pan" placeholder="Pan number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-user mr-2"></i><b>User Name</b></label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control border border-dark"
                                            name="username" placeholder="Username" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="p1" class="col-md-4 col-form-label text-md-right "><i
                                            class="fas fa-lock mr-2"></i><b>Password</b></label>
                                    <div class="col-md-6">
                                        <input id="p1" class="form-control border border-dark" type="password"
                                            name="password" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="p2" class="col-md-4 col-form-label text-md-right"><i
                                            class="fas fa-lock mr-2"></i><b>Confirm Password</b></label>
                                    <div class="col-md-6">
                                        <input id="p2" class="form-control border border-dark" type="password"
                                            name="confirmpassword" placeholder="Confirm Password" required>
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary "
                                        style="background-color:#009a4e;color:white" name="register" value="Register">
                                        Register
                                    </button>
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

include("../Includes/db.php");

if (isset($_POST['register'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $company_name = mysqli_real_escape_string($con, $_POST['company_name']);
    $license = mysqli_real_escape_string($con, $_POST['license']);
    $account = mysqli_real_escape_string($con, $_POST['account']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);



    if (strcmp($password, $confirmpassword) == 0) {

        $query = "insert into buyerregistration (buyer_name,buyer_phone,buyer_addr,buyer_comp,
		buyer_license,buyer_bank,buyer_pan,buyer_mail,buyer_username,buyer_password) 
		values ('$name','$phonenumber','$address','$company_name','$license','$account','$pan',
		'$mail','$username','$password')";

        $run_register_query = mysqli_query($con, $query);
        echo "<script>alert('SucessFully Registered!');</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else if (strcmp($password, $confirmpassword) != 0) {
        echo "<script>
			alert('Password and Confirm Password Should be same');
		</script>";
    }
}


?>