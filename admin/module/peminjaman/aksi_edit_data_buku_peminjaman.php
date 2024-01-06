<?php
include "/xampp/htdocs/perpus/admin/config/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_peminjaman = $_POST["idPeminjaman"];
    $id_buku = $_POST["idBuku"];

    $query = "UPDATE `detail_peminjaman` SET `id_buku` = '$id_buku' WHERE `detail_peminjaman`.`id_detail_peminjaman` = $id_peminjaman;";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Penyimpanan berhasil
        echo "<script>alert('Data Berhasil Dirubah!'); window.location.href='../../index.php?module=peminjaman';</script>";
    } else {
        // Invalid request atau kesalahan lainnya
        echo "<script>alert('Invalid Request atau Terjadi Kesalahan.');</script>";
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
<!-- <?php 
// include "/xampp/htdocs/perpus/admin/config/koneksi.php";

//     mysqli_query($conn, "UPDATE detail_peminjaman SET 
//     id_peminjaman='$_POST[idPeminjaman]',
//     id_buku='$_POST[idBuku]',
//     WHERE u_peminjaman='$_POST[idPeminjaman]'
//     ")
//     or die (mysqli_connect_error());
//     header("location:../../index.php?module=peminjaman"); //
?>
YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->
