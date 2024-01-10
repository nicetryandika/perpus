<?php
include "/xampp/htdocs/perpus/admin/config/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_peminjaman = $_POST["idPeminjaman"];
    $id_buku = $_POST["idBuku"];

    $query = "INSERT INTO detail_peminjaman (id_peminjaman, id_buku) VALUES ('$id_peminjaman', '$id_buku')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Data berhasil ditambahkan
        echo "<script>alert('Data Berhasil Ditambahkan!'); window.location.href='../../index.php?module=peminjaman';</script>";
    } else {
        // Terjadi kesalahan
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>