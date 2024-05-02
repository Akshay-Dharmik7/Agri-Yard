<?php
include("../Includes/db.php");
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .navbar {
            background-color: #3E8D07;
            height: 70px;
            margin-bottom: 0px;
        }

        .navbar-nav a {
            color: white;
            font-size: 20px;
            padding: 21px;
            cursor: pointer
        }

        /* .dropdown a{
            background-color:black
        } */

        .navbar-form {
            color: white;
            margin-top: 8px;
            margin-left: 3px;
            font-size: 20px;
            color: white;
            padding: 10px;
            cursor: pointer;
            width: 300px;
            float: left;
        }

        .navbar-form input {
            width: 200px;
        }

        .fa {
            font-size: 30px;
            color: goldenrod;
            margin-top: 2px;
        }

        form button {
            background-color: goldenrod;
        }

        .dropdown-menu li {
            width: 100%;
            margin-left: 0
        }

        .dropdown-menu a {
            color: green;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->


            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="home.php" style="font-size:30px;color:goldenrod;cursor:pointer"><i
                        class="fa fa-leaf"></i> AgriYard</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li style='margin-top:21px'><a href="profile.php">Profile </a></li>
                    <li style='margin-top:21px'><a href="transactions.php">Transactions </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="farmers.php" style='font-size:15px;'>Farmers</a>

                            <?php if (isset($sessphonenumber)) { ?>
                                <div class="dropdown-divider"></div>
                                <a href="../Includes/logout.php" style='font-size:15px;'>Logout</a>
                            </div>
                        <?php } else { ?>
                            <div class="dropdown-divider"></div>
                            <a href="../Includes/logout.php" style='font-size:15px;'>Logout</a>
                        <?php }
                            ?>

                    </li>
                </ul>

                </form>
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="CartPage.php">
                                <i class="fa">&#61562;</i>
                                <span id="icon">
                                    <?php echo totalItems(); ?>
                                </span>
                            </a>
                        </li>

                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>



</body>

</html>