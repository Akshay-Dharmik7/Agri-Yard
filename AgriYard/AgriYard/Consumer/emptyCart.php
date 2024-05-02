<?php
include("../Functions/functions.php");

global $con;
$sess_phone_number = $_SESSION['phonenumber'];

$get_items = "Delete from cart where phonenumber = '$sess_phone_number'";
$run_items =  mysqli_query($con, $get_items);

echo "<script>window.open('CartPage.php','_self')</script>"
?>

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