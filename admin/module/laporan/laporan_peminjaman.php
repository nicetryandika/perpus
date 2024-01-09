<?php

// Fungsi untuk mendapatkan data peminjaman berdasarkan rentang tanggal
function getLaporanPeminjaman($tanggalAwal, $tanggalAkhir) {
    // Implementasikan logika pengambilan data dari database
    // Sertakan file koneksi atau logika lain yang diperlukan
    // Implementasi
    include "config/koneksi.php";

    $sql = "SELECT peminjaman.id_peminjaman, anggota.nama_anggota, staff.nama_staff, peminjaman.tanggal, peminjaman.waktu 
            FROM peminjaman
            INNER JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota
            INNER JOIN staff ON peminjaman.id_staff = staff.id_staff
            WHERE peminjaman.tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir';";

    $ress = mysqli_query($conn, $sql);

    $laporanPeminjaman = array();

    while ($data = mysqli_fetch_array($ress)) {
        $laporanPeminjaman[] = $data;
    }

    return $laporanPeminjaman;
}

// Tangkap data dari formulir jika sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai tanggal awal dan tanggal akhir dari formulir
    $tanggalAwal = $_POST["tanggal_awal"];
    $tanggalAkhir = $_POST["tanggal_akhir"];

    // Panggil fungsi untuk mendapatkan data laporan peminjaman
    $laporanPeminjaman = getLaporanPeminjaman($tanggalAwal, $tanggalAkhir);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Peminjaman</title>
    <!-- Tambahkan link ke CSS atau Bootstrap jika diperlukan -->
</head>

<body>

    <h2>Laporan Peminjaman</h2>
    
    <!-- Formulir untuk memilih tanggal -->
    <form method="post" action="">
        <label for="tanggal_awal">Tanggal Awal:</label>
        <input type="date" name="tanggal_awal" required>

        <label for="tanggal_akhir">Tanggal Akhir:</label>
        <input type="date" name="tanggal_akhir" required>

        <button type="submit">Tampilkan</button>
        
    </form>

    <!-- Tampilkan hasil laporan jika formulir sudah disubmit -->
    <?php
if (isset($laporanPeminjaman)) {
    // Tampilkan data laporan
    echo '<h3 class="mt-4">Hasil Laporan Peminjaman</h3>';
    echo '<p class="mb-2">Tanggal Awal: ' . $tanggalAwal . '</p>';
    echo '<p class="mb-4">Tanggal Akhir: ' . $tanggalAkhir . '</p>';

    // Tombol Cetak Laporan
    echo '<div class="mb-3">';
    echo '<button class="btn btn-primary" onclick="cetakLaporan()">Cetak Laporan</button>';
    echo '</div>';

    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered" id="laporanTable">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">No</th>';
    echo '<th scope="col">Nama Peminjam</th>';
    echo '<th scope="col">Nama Staff</th>';
    echo '<th scope="col">Tanggal</th>';
    echo '<th scope="col">Waktu</th>';
    echo '<th scope="col" class="text-center">Aksi</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($laporanPeminjaman as $i => $data) {
        echo '<tr>';
        echo '<td>' . ($i + 1) . '</td>';
        echo '<td>' . $data['nama_anggota'] . '</td>';
        echo '<td>' . $data['nama_staff'] . '</td>';
        echo '<td>' . $data['tanggal'] . '</td>';
        echo '<td>' . $data['waktu'] . '</td>';
        echo '<td class="text-center">';
        echo '<a href="index.php?module=detail_data_peminjaman&id_peminjaman=' . $data['id_peminjaman'] . '" class="btn btn-sm" style="background-color: green; color: white;">Detail</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}
?>

<script>
function cetakLaporan() {
    // Mengatur properti untuk halaman cetak
    var css = '@media print { body * { visibility: hidden; } #laporanTable, #laporanTable * { visibility: visible; } #laporanTable { position: absolute; left: 0; top: 0; } }';
    var style = document.createElement('style');
    style.appendChild(document.createTextNode(css));
    document.head.appendChild(style);

    // Mencetak halaman
    window.print();

    // Menghapus properti cetak setelah pencetakan selesai
    style.remove();
}
</script>

    <!-- Tambahkan skrip JavaScript jika diperlukan -->
</body>

</html>
