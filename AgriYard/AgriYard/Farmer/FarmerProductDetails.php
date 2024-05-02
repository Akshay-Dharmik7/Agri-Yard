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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AgriYard</title>
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        .blackgoldie {
            background-color: #292b2c;

        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>

    <?php
    include("../Includes/db.php");
    $sess_phone_number = $_SESSION['phonenumber'];
    // getFarmerProductDetails();
    global $con;
    if (isset($_GET['id'])) {
        $prod_id = $_GET['id'];
        $query = "select * from products where product_id=" . $prod_id;
        $run_query = mysqli_query($con, $query);
        $resultCheck = mysqli_num_rows($run_query);
        if ($resultCheck > 0) {
            while ($rows = mysqli_fetch_array($run_query)) {
                $product_title = $rows['product_title'];
                $product_image = $rows['product_image'];
                $product_type = $rows['product_type'];
                $product_stock = $rows['product_stock'];
                $product_description = $rows['product_desc'];
                $product_price = $rows['product_price'];
                $product_base_price = $rows['product_price'];
                $product_delivery = $rows['product_delivery'];
                $product_cat = $rows['product_cat'];
                if ($product_stock == 0) {
                    $str = "Not In Stock";
                } else {
                    $str = "In Stock";
                }
                if ($product_delivery == "no") {
                    $del = "Not Applicable";
                } else {
                    $del = "Yes,Applicable";
                }

                $space = "....";
                echo "<div class='container'>
                                   <div class='row '>
                                        <div class='col-md-6' style=' margin-top:15px;'>
                                             <img src='../Admin/product_images/$product_image' class='rounded mx-auto d-block bord' height='500px' width='500px' style='border:1px solid; border-radius:5px'' >      
                                             <br>
                                        </div>
                                        <div class='col-md-6'>
                                             <div class='row'>
                                                  <div class='col-md-12 bottom-rule aligncenter'>
                                                       <h1 style='color:#009a4e;padding:10px;'>$product_title</h1>
                                                  </div>
                                             </div>
                                             <h3  style='color:red;padding:7px;'>Rs. " . $product_price . ".00 per Kg</h3>
                                             <h4 style='color:green;padding:10px;'><span class='monospaced'>Product stock  : " . $product_stock . " Kgs" . "</span><h4>
                                             <hr/>
                                             <div class='container'>
                                             <div class='desc'>
                                                  <div class='row'>
                                                            <div class='col-md-12'>
                                                                 <h5><span class='monospaced'>" . $space . $product_description . "</span><h5>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                             <div class='row' style='padding:7px; margin-bottom:15px;float:left' >
                                                  <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 aligncenter'> <a href='EditProduct.php?id=$prod_id' class='btn btn-warning border-secondary' style='color:black;'><b>Edit Product</b></a></div>
                                             </div>
                                        </div>         
                                   </div>
                              </div>
                             ";
            }
        }
    } else {
        echo "<br><br><hr><h1 align = center>Product Not Uploaded !</h1><br><br><hr>";
    }
    ?>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <hr>
    <div class="clearfix"></div>
    <?php include("footer.php"); ?>


</body>

</html>