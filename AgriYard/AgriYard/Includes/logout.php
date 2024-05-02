<?php

session_start();

session_destroy();

echo "<script>window.open('../Consumer/home.php','_self')</script>";
?>