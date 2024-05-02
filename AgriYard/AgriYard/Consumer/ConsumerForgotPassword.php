<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

    <style>
        h3 {
            background-color: transparent;
            font-family: sans-serif;
            text-align: center;
            cursor: pointer;
            /* color: rgb(0, 61, 153); */
            color: Black;
        }

        .box {
            color: rgb(6, 36, 7);
            width: 370px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            /* border-color: rgb(0, 172, 230); */
            border-color: black;
        }

        body {
            background-image: url(../imgg/images.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height:660px;
            font-family: Times new roman;

        }

        form {
            margin: 10px;
            padding: 20px;

        }

        .inp {
            padding: 5px;
            margin: 10px;
            /* border-color: rgb(0, 172, 230); */
            border-color: black;
            display: inline-block;
            border-radius: 16px;
            width: 80%;
            text-align: center;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 17px;
            padding-left: 5%;
            padding-right: 5%;
            font-weight: bold;
            color: white;
            background-color: #009a4e;
            border-radius: 16px;
            border-color: black;
            width: auto;
        }
           </style>
</head>

<body>

    <div class="box">
        <form action="#" method="post">
            <h3>FORGOT PASSWORD</h3>
            <br>
            <input type="phonenumber" class="inp" name="phonenumber" placeholder="Phone Number"><br>
            <input type="text" class="inp" name="pan" placeholder="Pan Number"><br>

            <input type="password" class="inp" name="password" placeholder="Password" required><br>
            <input type="password" class="inp" name="confirmpassword" placeholder="Confirm Password" required><br>
            <span style=" display:block;  margin-bottom: .75em; "></span>
            <br>
            <input type="submit" name="register" value="Update Password">
        </form>
    </div>

</body>

</html>


<?php
include("../Includes/db.php");
if (isset($_POST['register'])) {
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_pan = '$pan'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);


    if (strcmp($password, $confirmpassword) == 0) {
        if ($count_rows != 0) {
            $update_query = "update buyerregistration set buyer_password = '$password' 
                                 where buyer_phone = '$phonenumber' and buyer_pan = '$pan' ";

            $run_query = mysqli_query($con, $update_query);

            echo "<script>alert('Password Updated Successfully');</script>";
            echo "<script>window.open('index.php','_self')</script>";
        } else if ($count_rows == 0) {
            echo "<script>alert('Please Enter Valid Details');</script>";
        }
    } else {
        echo "<script>alert('Please Enter Valid Details');</script>";
    }
}

?>