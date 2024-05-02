<?php
     include("../Functions/functions.php");
     ?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Success Product Added</title>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
  </head>
  <style>
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

       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
       }

       nav {
            background-color: #292b2c;
       }

       .navbar-custom {
            background-color: #292b2c;
       }

       /* change the brand and text color */
       .navbar-custom .navbar-brand,
       .navbar-custom .navbar-text {
            background-color: #292b2c;
       }

       .navbar-custom .navbar-nav .nav-link {
            background-color: #292b2c;
       }

       .navbar-custom .nav-item.active .nav-link,
       .navbar-custom .nav-item:hover .nav-link {
            background-color: #292b2c;
       }


       .mybtn {
            border-color: green;
            border-style: solid;
       }


       .right {
            display: flex;
       }

       .left {
            display: none;
       }

       .cart {
            /* margin-left:10px; */
            margin-right: -9px;
       }

       .profile {
            margin-right: 2px;

       }

       .login {
            margin-right: -2px;
            margin-top: 12px;
            display: none;
       }

       .searchbox {
            width: 60%;
       }

       .lists {
            display: inline-block;
       }

       .moblists {
            display: none;
       }

       .logins {
            text-align: center;
            margin-right: -30%;
            margin-left: 35%;
       }

       body {
            margin: 0;
            padding: 0px;
            font-family: sans-serif;
       }

       * {
            box-sizing: border-box;
       }

       .table {
            width: 100%;
            border-collapse: collapse;
       }

       .table td,
       .table th {
            padding: 10px 10px;
            border: 1px solid #ddd;
            text-align: center;
            font-size: 16px;
       }

       .table th {
            background-color: #292b2c;
            color: goldenrod;
       }

       .table tbody tr:nth-child(even) {
            background-color: #f5f5f5;
       }

       .goback {
            /* text-align:none; */
            width: 20%;
            /* margin-left:10%; */
            margin-right: -7%;
            margin-left: 0%
       }

       .placeorder {
            /* text-align:none; */
            width: 20%;
            margin-right: -3.5%;
       }

       .hey {
            width: 50%;
       }

       @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .table thead {
                 display: none;
            }

            .hey {
                 width: 100%;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
                 display: block;
                 width: 100%;
            }

            .table tr {
                 margin-bottom: 15px;
            }

            .table td {
                 text-align: right;
                 padding-left: 50%;
                 text-align: right;
                 position: relative;
            }

            .table td::before {
                 content: attr(data-label);
                 position: absolute;
                 left: 0;
                 width: 50%;
                 padding-left: 15px;
                 font-size: 15px;
                 font-weight: bold;
                 text-align: left;
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

            /* .pic{
        height:auto;
    } */

            /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
            .goback {
                 text-align: center;
                 width: 50%;
                 margin-left: 25%;

                 /* margin-left:10%; */
                 margin-right: 0%;
            }

            .placeorder {
                 width: auto;
                 margin-bottom: -10%;
                 margin-top: 10%;
                 margin-left: 22%;
            }

            .payment {
                 width: 90%;
                 margin-left: 20%;

            }

            .text {
                 text-align: center;
            }
       }

       .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
       }
  </style>

  <body>



<?php include('navbar.php');?>



       <br>
       <div class="card">
            <h4 class="card-header text-success text-center font-weight-bold">Success</h4>
            <div class="card-body">
                 <h4 class="card-title text-success text-center font-weight-bold">Product Successfully Added</h4>
                 <h5 class="card-text text-center">Thankyou For Shopping With Us.</h5>
                 <br>
                 <div class="form-actions">
                      <a href="home.php" class="btn btn-success btn-lg ">Go To Home</a>
                 </div>
            </div>
       </div>

       <br><br><br>






       <br>
       <br>
       <?php include('footer.php');?>
  </body>

  </html>