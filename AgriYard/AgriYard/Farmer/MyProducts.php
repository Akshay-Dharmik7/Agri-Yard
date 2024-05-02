<?php
include("../Includes/db.php");
include("../Functions/functions.php");
$sessphonenumber = $_SESSION['phonenumber'];
if (!isset($_SESSION['phonenumber'])) {
    echo '<script>
    alert("You Have Not Logged In! Please Login To Make Purchases!");    
    </script>';
    header("Location: ./index.php");
}

?>
<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Farmer - Products</title>
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        * {
            font-family: calibri;

        }

        .products {
            margin-left: 9%;
        }

        .productbox {
            float: left;
            margin: 15px;
            margin-bottom: 50px;
            /* margin-left: 30px; */
            padding: 15px;
            border-style: outline;
            border: 2px solid;
            background-color: ghostwhite;
            /* border-color: green; */
            border-radius: 10px;
            width: 20%;
        }

        .productbox p {
            text-align: center;
            /* text-decoration: underline; */
            color: #009a4e;
        }

        .productbox img {
            flex : 1 1 30rem;
            height: 200px;
            width: 100%;
            /* border-style: double; */
            /* border: 2px solid; */
            border-color: brown;
            border-width: 10px;
            border-radius: 10px;
            transition: .7s ease;
        }

        .productbox img:hover {
            height: 200px;
            width: 100%;
            border-style: double;
            border: 10px solid;
            border-color: brown;
            border-width: 2px;
            border-radius: 10px;
            transform: scale(1.02);
        }




        /* For medium devices (e.g. tablets) */
        /* @media (min-width: 420px) {
               img {
               max-width: 48%;
               }
          } */
        /* For large devices (e.g. desktops) */
        @media (min-width: 760px) {
            .resizing {
                height: 500px;
            }
        }

        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .image {
                max-width: 48%;
            }

            .firstimage {
                height: auto;
                width: 90%;
            }

            .card {
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;

            }

            .col {
                margin-top: 20px;
            }

            .right {
                display: none;
                background-color: #ff5500;
            }

            /* 
           .settings{
           margin-left:79%;
       } */
            .left {
                display: flex;
            }

            .moblogo {
                display: none;
            }

            .logins {
                text-align: center;
                margin-right: 35%;
                padding: 15px;
            }

            .searchbox {
                width: 95%;
                margin-right: 5%;
                margin-left: 0%;
            }

            .moblists {
                display: inline-block;
                text-align: center;
                width: 100%;
            }


        }
    </style>

</head>

    <body>
        <?php include("navbar.php"); ?>
        <div class="clearfix"></div>
        <div class="content_item" style="margin-top:80px">
            <center>
                <label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>All Products</b></label>
                <?php
                include("../Includes/db.php");
                if (isset($_SESSION['phonenumber'])) {

                    echo "<a href='InsertProduct.php'>
                    <button class='btn btn-warning btn-lg p-3 m-3 font-weight-bold'>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
                } else {
                    echo "<a href='../auth/FarmerLogin.php'>
                    <button class='btn btn-warning btn-lg p-3 m-3 font-weight-bold'>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
                }
                ?>
            </center>
        </div>

        <br>
        <main>
            <div class="products">
                <?php
                include("../Includes/db.php");
                if (isset($_SESSION['phonenumber'])) {
                    $sess_phone_number = $_SESSION['phonenumber'];
                    getFarmerProducts();
                } else {
                    echo "<br><br><h1 align = center>Please Login!</h1><br><br><hr>";
                }
                ?>
            </div>
            <br> <br>
            <br> <br>
            <br> <br>
            <br> <br>
            <br> <br>
            <hr>
            <div class="clearfix"></div>
            <?php include("footer.php"); ?>

        </main>
    </body>
</html>