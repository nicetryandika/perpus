<!-- <?php 
// CODE YANG LEBIH MUDAH DIPAHAMI INI :
// include "/xampp/htdocs/perpus/admin/config/koneksi.php";
//     $result = mysqli_query($conn, $query);
//     mysqli_query($conn, "UPDATE detail_peminjaman SET 
//     id_buku ='$_POST[idBuku]'
//     WHERE id_peminjaman ='$_POST[idPeminjaman]'")
//     or die (mysqli_connect_error());
//     header("location:../../index.php?module=peminjaman"); // FINALLYYYYYY WORKKK CUY!
?>
YANG DI KOLOM SIKU ITU VALUES DARI FORM EDIT BUKU -->

<!-- CODE ADD ALERT BERHASIL DIUBAH -->
<?php
include "/xampp/htdocs/perpus/admin/config/koneksi.php";

$idPeminjaman = $_POST["idPeminjaman"];
$idBuku = $_POST["idBuku"];

$query = "UPDATE detail_peminjaman SET id_buku ='$idBuku' WHERE id_peminjaman ='$idPeminjaman'";
$result = mysqli_query($conn, $query);

if ($result) {
    // Jika berhasil diubah, tampilkan alert
    echo "<script>alert('Data berhasil diubah!'); window.location.href='../../index.php?module=peminjaman';</script>";
} else {
    // Jika gagal, tampilkan alert kesalahan
    echo "<script>alert('Gagal mengubah data. Silakan coba lagi atau hubungi administrator.');</script>";
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>