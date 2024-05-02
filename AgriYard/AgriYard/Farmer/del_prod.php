<?php
include("../Functions/functions.php");
$sess_phone_number = $_SESSION['phonenumber'];
if (isset($_GET['id'])) {
     $product_id = $_GET['id'];
     $delete_product = "delete from products where  product_id = '$product_id' ";
     $run_delete = mysqli_query($con, $delete_product);

     echo "<script>window.open('MyProducts.php','_self')</script>";
}
