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

    <title>Farmer - Call & SMS</title>


    <style>
        * {
            margin: 0;
            box-sizing: border-box;
 
        }

        * {
      font-family: calibri;

    }

        th {
            border-color: white;
            border-style: solid;
            border-width: 2px;
            padding: 2px;

        }

        .tableyhead {

            color: red;

        }

        .thy {
            background-color: #555;
            color: white;

        }

        .trow {
            align-content: center;
        }
    </style>

</head>

<body>





    <body>
        <?php include("navbar.php"); ?>

        <div style="display:block;">

            <div class=content_item>
                <center><label style="font-size :30px; text-shadow: 1px 1px 1px gray;margin-top:20px"><b>Call Center ,
                            Location's & Langauges</b></label>
                    <center>
            </div>
            <br>

            <br>
            <h4 align="center">Toll Free Number : 1800564999</h4>
            <br>
            <table class="table">
                <thead align="center" class=tableyhead>
                    <th class=thy>SR NO.</th>
                    <th class=thy>LOCATION</th>
                    <th class=thy>STATES</th>
                    <th class=thy>LANGUAGES</th>


                </thead>
                <tr align="center" class=trow>
                    <th align="center">1</th>
                    <th align="center">Hyderabad</th>
                    <th align="center">Andhra Pradesh</th>
                    <th align="center">Telugu</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">2</th>
                    <th align="center">Patna</th>
                    <th align="center">Bihar | Jharkhand</th>
                    <th align="center">Hindi</th>


                </tr>
                <tr align="center" class=trow>
                    <th align="center">3</th>
                    <th align="center">Jaipur</th>
                    <th align="center">Delhi | Rajasthan</th>
                    <th align="center">Hindi</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">4</th>
                    <th align="center">Ahmadabad/Anand</th>
                    <th align="center">Gujarat | Dadra & Nagar Haveli | Daman & Diu</th>
                    <th align="center">Gujarati | Goan</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">5</th>
                    <th align="center">Chandigarh</th>
                    <th align="center">Haryana | Punjab | Chandigarh | Himachal Pradesh</th>
                    <th align="center">Hindi/Haryanvi | Punjabi | Hindi</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">6</th>
                    <th align="center">Jammu</th>
                    <th align="center">Jammu and Kashmir</th>
                    <th align="center">Dogri, Kashmiri, Ladakh</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">7</th>
                    <th align="center">Bangalore</th>
                    <th align="center">Karnataka | Kerala | Lakshadweep</th>
                    <th align="center">Kannada | Malayalam</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">8</th>
                    <th align="center">Jabalpur</th>
                    <th align="center">Madhya Pradesh | Chhattisgarh</th>
                    <th align="center">Hindi</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">9</th>
                    <th align="center">Nagpur/Pune</th>
                    <th align="center">Maharashtra | Goa</th>
                    <th align="center">Marathi | Goan</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">10</th>
                    <th align="center">Coimbatore</th>
                    <th align="center">Tamil Nadu | Puducherry | Andaman & Nicobar</th>
                    <th align="center">Tamil</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">11</th>
                    <th align="center">Kanpur</th>
                    <th align="center">Uttar Pradesh | Uttarakhand</th>
                    <th align="center">Hindi</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">12</th>
                    <th align="center">Kolkata</th>
                    <th align="center">West Bengal | Sikkim</th>
                    <th align="center">Bengali | Sikkimese</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">13</th>
                    <th align="center">Bhubaneshwar</th>
                    <th align="center">Orissa</th>
                    <th align="center">Oriya</th>

                </tr>
                <tr align="center" class=trow>
                    <th align="center">14</th>
                    <th align="center">Guwahati</th>
                    <th align="center">Arunachal Pradesh | Assam | Manipur | Meghalaya | Mizoram | Nagaland | Tripura
                    </th>
                    <th align="center">Adi | Assamese | Manipuri | Khasi | Mizo | Nagamese | Bengali</th>

                </tr>

            </table>
        </div>


        <?php include("footer.php"); ?>
    </body>

</html>