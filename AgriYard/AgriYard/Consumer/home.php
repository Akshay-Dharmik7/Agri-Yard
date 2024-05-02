<?php
include("../Functions/functions.php");
include("../Includes/db.php");
if(!isset($_SESSION['phonenumber'])){
    echo '<script>
    alert("You Have Not Logged In! Please Login To Make Purchases!");    
    </script>';
    header("Location: ./index.php");
}

$sessphonenumber = $_SESSION['phonenumber'];
$sql = "select * from buyerregistration where buyer_phone = '$sessphonenumber'";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $name = $row['buyer_name'];
    $phone = $row['buyer_phone'];
    $address = $row['buyer_addr'];
    $pan = $row['buyer_pan'];
    $bank = $row['buyer_bank'];
    $comp = $row['buyer_comp']; 
    $license = $row['buyer_license'];
    $mail = $row['buyer_mail'];
    $user = $row['buyer_username'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>


    <style>
        .card {
            width: 100%;
            height: 500px;
            margin: 20px;
            display: flex;
        }

        .images:hover {

            height: 220px;
            box-shadow: 5px 5px 10px grey;
            transition: 0.5s ease;
        }

        .guard {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #078d41;
            background-color: #3E8D07;
            line-height: 0.1em;
            margin: 10px 0 20px;
            /* font-family: serif; */
        }

        .guard span {
            background: white;
            padding: 0 10px;
            color: goldenrod;
        }


        /* Image Grig */


        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        * {
      font-family: calibri;
        }

        .header {
            text-align: center;
            padding: 32px;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        .myfooter {
            background-color: #292b2c;
            color: goldenrod;
            margin-top: 15px;
        }

        .aligncenter {
            text-align: center;
        }

        a {
            color: goldenrod;
        }

        .imgg {
            height: 500px;
            margin-bottom: 30px
        }
    </style>

</head>

<body>

    <?php include('navbar.php'); ?>

    <div class="imgg">
        <img src="..\imgg\Homepage.jpg" alt="Responsive image" width="100%"
            height="100%">
    </div>

    <div class="clearfix"></div>
    <br>
    <br>

    <div class="container">
        <div class="text-center">
            <!-- <h2 id="headings" class="destext">Fresh fruits</h2> -->
            <h1 id="headings" class="guard"><span><b>Crops Directly From Farm </b></span>
            </h1>
        </div>

        <hr>

        <div class="row BigBox">

            <?php
            getCropsHomePage();
            ?>

            <hr>
        </div>
        <hr>
    </div>
    <br><br>

    <div class="container">
        <div class="text-center">
            <!-- <h2 id="headings" class="destext">Fresh fruits</h2> -->
            <h1 id="headings" class="guard"><span><b>Fresh Fruits </b></span>
            </h1>
        </div>

        <hr>

        <div class="row BigBox">

            <?php
            getFruitsHomepage();
            ?>

            <hr>
        </div>
        <hr>
    </div>
    <br><br>


    <div class="container">
        <div class="text-center">
            <!-- <h2 id="headings" class="destext">Fresh fruits</h2> -->
            <h1 id="headings" class="guard"><span><b>Fresh Vegetables </b></span>
            </h1>
        </div>

        <hr>

        <div class="row BigBox">

            <?php
            getVegetablesHomepage();
            ?>

            <hr>
        </div>
        <hr>
    </div>
    <br><br>

    <div class="container">

        <div class="text-center">
            <h1 id="headings" class="longguard"><span><b>Best Selling Products All Over India </b></span>
            </h1>
        </div>
        <br>
        <div class="row">
            <?php
            cart();
            getProducts();
            ?>
        </div>
        <br><br>


    </div>
    </div>



    <?php include('footer.php'); ?>

</body>

</html>