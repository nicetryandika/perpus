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
// STAFF
if ($_GET['module']=="staff"){
    include "module/staff/staff.php";
}
else if ($_GET['module']=="tambah_data_staff"){
    include "module/staff/tambah_data_staff.php";
}
else if ($_GET['module']=="edit_data_staff"){
    include "module/staff/edit_data_staff.php";
}
// ANGGOTA
if ($_GET['module']=="anggota"){
    include "module/anggota/anggota.php";
}
else if ($_GET['module']=="tambah_data_anggota"){
    include "module/anggota/tambah_data_anggota.php";
}
else if ($_GET['module']=="edit_data_anggota"){
    include "module/anggota/edit_data_anggota.php";
}
//PEMINJAMAN
else if ($_GET['module']=="peminjaman"){
    include "module/peminjaman/peminjaman.php";
}
else if ($_GET['module']=="tambah_data_peminjaman"){
    include "module/peminjaman/tambah_data_peminjaman.php";
}
else if ($_GET['module']=="edit_data_peminjaman"){
    include "module/peminjaman/edit_data_peminjaman.php";
}
else if ($_GET['module']=="detail_data_peminjaman"){
    include "module/peminjaman/detail_data_peminjaman.php";
}
?>