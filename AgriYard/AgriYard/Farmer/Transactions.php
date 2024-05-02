<?php
include("../Includes/db.php");
include("../Functions/functions.php");
$sessphonenumber = $_SESSION['phonenumber'];
if(!isset($_SESSION['phonenumber'])){
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

    <title>Farmer - Transaction</title>

    <style>
        * {
            margin: 0;
            box-sizing: border-box;


        }

        * {
      font-family: calibri;

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
            padding: 12px 15px;
            border: 0px solid #ddd;
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

        .table td {
            border: 1px solid black;

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

            .table thead {
                display: none;
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
                border: 1px solid black;
            }

            .table td {
                text-align: right;
                padding-left: 50%;
                text-align: right;
                position: relative;
                border: 1px solid black;

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



        }
    </style>

</head>

<body>





    <body>

        <?php include("navbar.php"); ?>

        <div style="display:block; margin-top:20px">

            <div class=content_item>
                <center><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>TRANSACTION
                            HISTORY</b></label></center>
            </div>
            <br>
        </div>


        <div class="container">

            <table class="table">
                <thead>
                    <th>Product Name</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Delivery Address</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                </thead>


                <tbody>
                    <?php

                    global $con;
                    if (isset($_SESSION['phonenumber'])) {
                        $sess_phone_number = $_SESSION['phonenumber'];
                        $sel_price = "select * from orders where phonenumber = '$sess_phone_number'";
                        $run_price = mysqli_query($con, $sel_price);
                        $i = 0;

                        while ($p_price = mysqli_fetch_array($run_price)) {
                            $product_id = $p_price['product_id'];
                            $qty = $p_price['qty'];
                            $total = $p_price['total'];
                            $address = $p_price['address'];
                            $phone = $p_price['buyer_phonenumber'];


                            $pro_price = "select * from products where product_id='$product_id'";
                            $run_pro_price = mysqli_query($con, $pro_price);
                            while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                                $product_title = $pp_price['product_title'];


                                $query_name = "select * from buyerregistration where buyer_phone = $phone";
                                $run_query_name = mysqli_query($con, $query_name);
                                while ($names = mysqli_fetch_array($run_query_name)) {
                                    $buyer_name = $names['buyer_name'];


                                    ?>
                                    <tr>
                                        <td data-label="Product Name">
                                            <?php echo $product_title; ?>
                                        </td>
                                        <td data-label="Name">
                                            <?php echo $buyer_name; ?>
                                        </td>
                                        <td data-label="Phone Number">
                                            <?php echo $phone; ?>
                                        </td>
                                        <td data-label="Address">
                                            <?php echo $address; ?>
                                        </td>
                                        <td data-label="Quantity">
                                            <?php echo $qty; ?>
                                        </td>
                                        <td data-label="Price">
                                            <?php echo $total; ?>
                                        </td>
                                    </tr>


                                </tbody>
                                <?php
                                }
                            }
                            $i++;
                        }
                    } else {
                        echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
                    } ?>
            </table>
        </div> <br> <br>
        <?php include("footer.php"); ?>
    </body>

</html>