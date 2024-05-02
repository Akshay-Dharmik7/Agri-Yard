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

  <title>Farmer Homepage</title>

  <style>
    * {
      font-family: calibri;

    }

    .row {
      width: 100%;
      text-align: center;

    }

    .columns {
      width: 28.15%;
      min-width: 280px;
      margin-right: 2.5%;
      margin-left: 2.5%;
      vertical-align: top;
      /*Fix for different     height elements*/
      margin-bottom: 10px;
      display: inline-block;
      border: 1px solid black;
      background-color: #E1F9D0;
      font-weight: bold;
    }

    .align-right {
      text-align: right;
    }

    .card-body {
      /* color:#009a4e; */
      font-weight: bold;
    }

    @media screen and (max-width: 680px) {
      .columns {
        width: 100%;
      }
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





  <body>

    <?php include("navbar.php"); ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="../imgg/home-1.jpg" alt="Los Angeles" style="width:100%;height:100%;">
        </div>

        <div class="item">
          <img src="../imgg/home-2.jpg" alt="Chicago" style="width:100%;height:100%">
        </div>

        <div class="item">
          <img src="../imgg/home-3.jpg" alt="Chicago" style="width:100%;height:100%">
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <br><br>


    <div class="row">
      <h1 style="font-weight: bold;color:black; text-align:center">Standout Features</h1>
      <div class="columns">
        <p class="aligncenter">
          <img class="card-img-top image" src="../imgg/sms.png" alt="Card image cap" width="250px" height="200px">
        </p>
        <div class="card-body">
          <h3 class="card-title">SMS System </h3>
          <br>
          <h5 class="card-text">Get all the important information of your products via SMS </h5>
        </div>
      </div>


      <div class="columns">
        <p class="aligncenter">
          <img class="card-img-top image" src="../imgg/handshakeee.png" alt="Card image cap" width="250px"
            height="200px">
        </p>
        <div class="card-body">
          <h3 class="card-title">Buyer Connection </h3>
          <br>
          <h5 class="card-text">Get in direct touch with the buyer to satisfy its need </h5>
        </div>
      </div>

      <div class="columns">
        <p class="aligncenter">
          <img class="card-img-top image" src="../imgg/farmer.png" alt="Card image cap" width="250px" height="200px">
        </p>
        <div class="card-body">
          <h3 class="card-title">Farmer Group Formation</h3>
          <br>
          <h5 class="card-text">Get in touch with other farmers making your own community</h5>
        </div>
      </div>

    </div>

    <div class="clearfix main"></div>
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

        </main>
      </div>
    <br><br><br><br>
    <?php include("footer.php"); ?>

  </body>

</html>