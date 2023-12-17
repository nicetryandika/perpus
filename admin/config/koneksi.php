<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "db_perpus";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, ) or die ("Tidak dapat terhubung ke database:".mysqli_connect_error());