<?php
include("../Functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
.cross{
    /* margin-left:27%; */
    margin-top:-8%;
    float:right;
}
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
            display: none;
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
        } */

        .right {
            display: none;
            background-color: #ff5500;
        }
        .cross{
    /* margin-left:21%; */
    margin-top:-8%;
    float:right;
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
    }
</style>

<body>

<?php include('navbar.php');?>

    <div class="container">

        <div class="text-left ">
            <h2>Save For later
                <div class="text-right"><button type="button" class="btn btn-warning border border-dark " style="margin-top:-5%"><b>Delete all</b></button></div>
            </h2>
            <hr style="margin-top:-2%">

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card pl-3 pr-3 pb-0 pt-2 mt-2 ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b>
                       <button class="cross" style="border-style:none;background-color:transparent;"><i class="fas fa-times"style=""></i></button>
                        </h3>

                    </div>
                    <img class="card-img-top" src="fruit1.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card  pl-3 pr-3 pb-0 pt-2 mt-2 ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b></h3>
                    </div>
                    <img class="card-img-top pic" src="myfruit1.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card pl-3 pr-3 pb-0 pt-2 mt-2  ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b></h3>
                    </div>
                    <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card pl-3 pr-3 pb-0 pt-2 mt-2  ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b></h3>
                    </div>
                    <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap" height="315px">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                <div class="card pl-3 pr-3 pb-0 pt-2 mt-2 ">
                    <br>
                    <div><b>
                            <h3><img src="iconsmall.png"> ABHISHEK
                        </b></h3>
                    </div>
                    <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Orange</h5>
                        <p class="card-text">PRICE:-20rs/kg</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                            </div>
                            <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>




   <?php include('footer.php');?>
</body>

</html>