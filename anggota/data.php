<?php

// BUKU
if($_GET['module']=="buku"){
    include "module/buku/buku.php";
}
else if ($_GET['module']=="tambah_data_buku"){
    include "module/buku/tambah_data_buku.php";
}
else if ($_GET['module']=="edit_data_buku"){
    include "module/buku/edit_data_buku.php";
}

// PROFILE
if($_GET['module']=="profile"){
        include "module/profile/myprofile.php";
    }
?>